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

    public function simpan_ketersedian_paket($id_paket_tour, $tgl_awal, $tgl_akhir, $jumlah_ketersedian, $min_group, $max_group)
    {
        $hasil = $this->db->query("INSERT INTO available_tour(id_paket_tour,tgl_awal,tgl_akhir,jumlah_ketersedian,min_group,max_group) VALUES ('$id_paket_tour','$tgl_awal','$tgl_akhir','$jumlah_ketersedian','$min_group','$max_group')");
        return $hasil;
    }

    public function update_available_tour($tgl_awal, $tgl_akhir, $jumlah_ketersedian, $kode)
    {
        $hasil = $this->db->query("UPDATE available_tour SET tgl_awal='$tgl_awal',tgl_akhir='$tgl_akhir',jumlah_ketersedian='$jumlah_ketersedian' WHERE id='$kode'");
        return $hasil;
    }


    public function tampil_paket()
    {
        $hasil = $this->db->query("select * from paket");
        return $hasil;
    }
    public function tampil_availible_tour()
    {
        $hasil = $this->db->query("select min_group,max_group,available_tour.id, gambar,nama_paket,hrg_dewasa,hrg_anak,deskripsi,kategori_id,available_tour.id_paket_tour,tgl_awal,tgl_akhir,jumlah_ketersedian from paket INNER JOIN available_tour WHERE paket.idpaket=available_tour.id_paket_tour");
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

    public function get_ketersediaan($kode)
    {

        $date = date('Y-m-d');
        $hasil = $this->db->query("select * from available_tour where tgl_awal <'$date' AND id_paket_tour='$kode'");
        return $hasil;
    }

    public function get_ketersediaan_all($kode)
    {
        $date = date('Y-m-d');
        $hasil = $this->db->query("SELECT max_group,min_group,paket.idpaket,paket.nama_paket,paket.hrg_dewasa,paket.hrg_anak,paket.deskripsi,paket.gambar,paket.views,available_tour.id,available_tour.tgl_awal,available_tour.tgl_akhir,available_tour.jumlah_ketersedian FROM paket JOIN available_tour ON paket.idpaket=available_tour.id_paket_tour WHERE available_tour.tgl_awal > '$date' AND idpaket='$kode' order BY idpaket");
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
    public function simpan_order($no_order, $id_user, $nama, $jekel, $alamat, $notelp, $email, $paket, $dewasa, $anak2, $ket, $no_ktp, $id_paket_tour)
    {
        $hasil = $this->db->query("INSERT INTO orders(id_order,id_user,nama,jenkel,alamat,notelp,email,berangkat,kembali,adult,kids,paket_id_order,keterangan,tanggal,status, no_ktp)VALUES('$no_order','$id_user','$nama','$jekel','$alamat','$notelp','$email',(SELECT tgl_awal from  available_tour where 	id = '$id_paket_tour'),(SELECT tgl_akhir from  available_tour where id = '$id_paket_tour'),'$dewasa','$anak2','$paket','$ket',CURDATE(),'belum_bayar', '$no_ktp')");
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

    public function booking($id)
    {

        $id_user = $this->session->userdata('id');
        $hasil = $this->db->query("SELECT deskripsi,orders.kode_booking,orders.status,pembayaran.id_user,orders.pembatalan, id_order,tanggal,nama_paket,hrg_dewasa,hrg_anak,adult,kids,SUM(adult + kids)AS jml_berangkat,(hrg_dewasa*adult) AS sub_dewasa,(hrg_anak*kids)AS sub_anak,SUM((hrg_dewasa*adult)+(hrg_anak*kids))AS total,berangkat,kembali,metode,bank,norek,atasnama,nama,IF(jenkel='L','Laki-Laki','Perempuan')AS jenkel,alamat,notelp,email FROM orders JOIN metode_bayar ON orders.metode_id=metode_bayar.id_metode JOIN paket ON orders.paket_id_order=paket.idpaket JOIN pembayaran ON orders.id_order=pembayaran.order_id WHERE pembayaran.id_user='$id_user' AND pembayaran.order_id='$id' AND orders.status='LUNAS' OR orders.status='BATAL' ");
        return $hasil;
    }

    public function booking_email($id)
    {


        $hasil = $this->db->query("SELECT deskripsi,orders.kode_booking,pembayaran.id_user,orders.pembatalan, id_order,tanggal,nama_paket,hrg_dewasa,hrg_anak,adult,kids,SUM(adult + kids)AS jml_berangkat,(hrg_dewasa*adult) AS sub_dewasa,(hrg_anak*kids)AS sub_anak,SUM((hrg_dewasa*adult)+(hrg_anak*kids))AS total,berangkat,kembali,metode,bank,norek,atasnama,nama,IF(jenkel='L','Laki-Laki','Perempuan')AS jenkel,alamat,notelp,email FROM orders JOIN metode_bayar ON orders.metode_id=metode_bayar.id_metode JOIN paket ON orders.paket_id_order=paket.idpaket JOIN pembayaran ON orders.id_order=pembayaran.order_id WHERE pembayaran.order_id='$id' AND orders.status='LUNAS' ");
        return $hasil;
    }

    public function list_booking($id_user)
    {


        $hasil = $this->db->query("SELECT a.id_order,a.pembatalan, a.tanggal, d.nama_paket,a.berangkat,a.kembali,s.metode,s.bank,s.norek,s.atasnama,a.alamat,a.notelp,a.email,c.name,d.gambar FROM orders a INNER JOIN metode_bayar s ON a.metode_id = s.id_metode INNER JOIN paket d ON a.paket_id_order = d.idpaket INNER JOIN user c ON a.id_user = c.id WHERE a.id_user='$id_user' AND a.status='LUNAS' OR a.status='BATAL' ");
        return $hasil;
    }

    public function booking_pembatalan($id_user, $kode)
    {
        $hasil = $this->db->query("SELECT a.id_order, a.tanggal, d.nama_paket,a.berangkat,a.kembali,s.metode,s.bank,s.norek,s.atasnama,a.alamat,a.notelp,a.email,c.name,d.gambar FROM orders a INNER JOIN metode_bayar s ON a.metode_id = s.id_metode INNER JOIN paket d ON a.paket_id_order = d.idpaket INNER JOIN user c ON a.id_user = c.id WHERE a.id_user='$id_user' AND a.status='LUNAS' AND a.id_order ='$kode' ");
        return $hasil;
    }

    public function simpan_pembatalan($order_id, $id_user, $no_rek, $nama_rekening, $alasan_pembatalan)
    {
        $hasil = $this->db->query("INSERT INTO pembatalan(order_id,id_user,no_rek,nama_rekening,alasan_pembatalan) VALUES ('$order_id', '$id_user', '$no_rek', '$nama_rekening', '$alasan_pembatalan')");
        return $hasil;
    }

    function get_pembatalan()
    {
        $hasil = $this->db->query("SELECT a.id_order,a.notelp,a.email,a.pembatalan, c.no_rek,c.nama_rekening,b.nama_paket,a.berangkat,a.kembali,c.alasan_pembatalan,a.status FROM orders a INNER JOIN paket b ON a.paket_id_order = b.idpaket INNER JOIN pembatalan c ON a.id_order = c.order_id WHERE a.pembatalan='CANCEL' ");
        return $hasil;
    }

    function get_pembatalanEmail($id)
    {
        $hasil = $this->db->query("SELECT orders.kode_booking,pembayaran.id_user,orders.pembatalan, id_order,tanggal,nama_paket,hrg_dewasa,hrg_anak,adult,kids,SUM(adult + kids)AS jml_berangkat,(hrg_dewasa*adult) AS sub_dewasa,(hrg_anak*kids)AS sub_anak,SUM((hrg_dewasa*adult)+(hrg_anak*kids))AS total,berangkat,kembali,metode,bank,norek,atasnama,nama,IF(jenkel='L','Laki-Laki','Perempuan')AS jenkel,alamat,notelp,email,pembatalan.nama_rekening, pembatalan.no_rek FROM orders JOIN metode_bayar ON orders.metode_id=metode_bayar.id_metode JOIN paket ON orders.paket_id_order=paket.idpaket JOIN pembayaran ON orders.id_order=pembayaran.order_id JOIN pembatalan ON orders.id_order=pembatalan.order_id WHERE pembayaran.order_id='$id' ");
        return $hasil;
    }


    function paket_populer()
    {
        $hasil = $this->db->query("SELECT * FROM paket ORDER BY views DESC limit 5");
        return $hasil;
    }

    function search($tgl_awal)
    {
        $hasil = $this->db->query("SELECT paket.idpaket,paket.nama_paket,paket.hrg_dewasa,paket.hrg_anak,paket.deskripsi,paket.gambar,paket.views,available_tour.id,available_tour.tgl_awal,available_tour.tgl_akhir,available_tour.jumlah_ketersedian FROM paket JOIN available_tour ON paket.idpaket=available_tour.id_paket_tour WHERE available_tour.tgl_awal > '$tgl_awal'GROUP BY idpaket");
        return $hasil;
    }
}
