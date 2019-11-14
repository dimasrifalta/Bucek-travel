<?php
class Mpaket extends CI_Model
{
    public function get_metode_pembayaran()
    {
        $hasil = $this->db->query("SELECT * FROM metode_bayar GROUP BY metode");
        return $hasil;
    }
    public function ambil_berita($kode)
    {
        $hasil = $this->db->query("select * from berita where idberita='$kode'");
        return $hasil;
    }


    public function get_kategori()
    {
        $hasil = $this->db->query("select * from kategori_paket");
        return $hasil;
    }
    public function get_wisata()
    {
        $hasil = $this->db->query("select * from wisata order by idwisata desc limit 3");
        return $hasil;
    }
    public function get_paket($offset, $limit)
    {
        $hasil = $this->db->query("select * from paket order by idpaket DESC limit $offset,$limit");
        return $hasil;
    }
    public function SimpanPaket($nama_paket, $kategori, $deskripsi, $hrg_dewasa, $hrg_anak, $gambar)
    {
        $hasil = $this->db->query("INSERT INTO paket(nama_paket,hrg_dewasa,hrg_anak,deskripsi,kategori_id,gambar) VALUES ('$nama_paket','$hrg_dewasa','$hrg_anak','$deskripsi','$kategori','$gambar')");
        return $hasil;
    }
    public function tampil_paket()
    {
        $hasil = $this->db->query("select * from paket");
        return $hasil;
    }
    public function berita()
    {
        $hasil = $this->db->query("select * from berita order by tglpost DESC limit 8");
        return $hasil;
    }
    public function getpaket($kode)
    {
        $hasil = $this->db->query("select * from paket where idpaket='$kode'");
        return $hasil;
    }
    public function updatedenganimg($kode, $nama_paket, $kategori, $deskripsi, $hrg_dewasa, $hrg_anak, $gambar)
    {
        $hasil = $this->db->query("UPDATE paket SET nama_paket='$nama_paket',hrg_dewasa='$hrg_dewasa',hrg_anak='$hrg_anak',deskripsi='$deskripsi',kategori_id='$kategori',gambar='$gambar' WHERE idpaket='$kode'");
        return $hasil;
    }
    public function updatepaket($kode, $nama_paket, $kategori, $deskripsi, $hrg_dewasa, $hrg_anak)
    {
        $hasil = $this->db->query("UPDATE paket SET nama_paket='$nama_paket',hrg_dewasa='$hrg_dewasa',hrg_anak='$hrg_anak',deskripsi='$deskripsi',kategori_id='$kategori' WHERE idpaket='$kode'");
        return $hasil;
    }
    public function hapus_paket($id)
    {
        $hasil = $this->db->query("delete from paket where idpaket='$id'");
        return $hasil;
    }
    public function get_no_order()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_order,6)) AS kd_max FROM orders where date(tanggal)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
            $kd = "000001";
        }
        return "INV" . date('dmy') . $kd;
    }
    public function simpan_order($no_order, $nama, $jekel, $alamat, $notelp, $email, $paket, $berangkat, $kembali, $dewasa, $anak2, $ket)
    {
        $hasil = $this->db->query("INSERT INTO orders(id_order,nama,jenkel,alamat,notelp,email,berangkat,kembali,adult,kids,paket_id_order,keterangan,tanggal)VALUES('$no_order','$nama','$jekel','$alamat','$notelp','$email','$berangkat','$kembali','$dewasa','$anak2','$paket','$ket',CURDATE())");
        return $hasil;
    }
    public function get_metode()
    {
        $hasil = $this->db->query("SELECT * FROM metode_bayar");
        return $hasil;
    }
    public function set_bayar($no_invoice, $id)
    {
        $hasil = $this->db->query("update orders set metode_id='$id' where id_order='$no_invoice'");
        return $hasil;
    }
    public function faktur()
    {
        $inv = $this->session->userdata('invoices');
        $hasil = $this->db->query("SELECT id_order,tanggal,nama_paket,hrg_dewasa,hrg_anak,adult,kids,SUM(adult+kids)AS jml_berangkat,(hrg_dewasa*adult) AS sub_dewasa,(hrg_anak*kids)AS sub_anak,SUM((hrg_dewasa*adult)+(hrg_anak*kids))AS total,berangkat,kembali,metode,bank,norek,atasnama,nama,IF(jenkel='L','Laki-Laki','Perempuan')AS jenkel,alamat,notelp,email FROM orders JOIN metode_bayar ON metode_id=id_metode JOIN paket ON paket_id_order=idpaket WHERE id_order='$inv'");
        return $hasil;
    }

    public function booking($id_user)
    {

        $inv = $this->session->userdata('invoices');
        $hasil = $this->db->query("SELECT id_user, id_order,tanggal,nama_paket,hrg_dewasa,hrg_anak,adult,kids,SUM(adult + kids)AS jml_berangkat,(hrg_dewasa*adult) AS sub_dewasa,(hrg_anak*kids)AS sub_anak,SUM((hrg_dewasa*adult)+(hrg_anak*kids))AS total,berangkat,kembali,metode,bank,norek,atasnama,nama,IF(jenkel='L','Laki-Laki','Perempuan')AS jenkel,alamat,notelp,email FROM orders JOIN metode_bayar ON orders.metode_id=metode_bayar.id_metode JOIN paket ON orders.paket_id_order=paket.idpaket JOIN pembayaran ON orders.id_order=pembayaran.order_id WHERE pembayaran.id_user='$id_user' ");
        return $hasil;
    }

    public function booking_pembatalan($id_user)
    {
        $hasil = $this->db->query("SELECT id_user, id_order,tanggal,nama_paket,hrg_dewasa,hrg_anak,adult,kids,SUM(adult + kids)AS jml_berangkat,(hrg_dewasa*adult) AS sub_dewasa,(hrg_anak*kids)AS sub_anak,SUM((hrg_dewasa*adult)+(hrg_anak*kids))AS total,berangkat,kembali,metode,bank,norek,atasnama,nama,IF(jenkel='L','Laki-Laki','Perempuan')AS jenkel,alamat,notelp,email FROM orders JOIN metode_bayar ON orders.metode_id=metode_bayar.id_metode JOIN paket ON orders.paket_id_order=paket.idpaket JOIN pembayaran ON orders.id_order=pembayaran.order_id WHERE pembayaran.id_user='$id_user' ");
        return $hasil;
    }
}
