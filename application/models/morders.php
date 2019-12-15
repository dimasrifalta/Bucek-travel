<?php
class Morders extends CI_Model
{

    function cek_invoice($kode)
    {
        $hasil = $this->db->query("SELECT * FROM orders WHERE id_order='$kode'");
        return $hasil;
    }
    function simpan_testimoni($nama, $email, $msg)
    {
        $hasil = $this->db->query("INSERT INTO testimoni(nama,email,pesan,status,tgl_post) VALUES ('$nama','$email','$msg','0',curdate())");
        return $hasil;
    }
    function get_pembayaran()
    {
        $hasil = $this->db->query("SELECT id_bayar,tgl_bayar,metode,bank,order_id,SUM((hrg_dewasa*adult)+(hrg_anak*kids))AS total,jumlah,status,bukti_transfer,pengirim FROM pembayaran JOIN orders ON order_id=id_order JOIN metode_bayar ON metode_id_bayar=id_metode JOIN paket ON idpaket=paket_id_order WHERE orders.status !='LUNAS' AND orders.status !='BATAL'  GROUP BY order_id");
        return $hasil;
    }
    function get_orders()
    {
        $hasil = $this->db->query("SELECT pembatalan,id_order,tanggal,nama_paket,hrg_dewasa,hrg_anak,adult,kids,SUM(adult+kids)AS jml_berangkat,(hrg_dewasa*adult) AS sub_dewasa,(hrg_anak*kids)AS sub_anak,SUM((hrg_dewasa*adult)+(hrg_anak*kids))AS total,berangkat,kembali,metode,bank,norek,atasnama,nama,IF(jenkel='L','Laki-Laki','Perempuan')AS jenkel,alamat,notelp,email,keterangan,status FROM orders JOIN metode_bayar ON metode_id=id_metode JOIN paket ON paket_id_order=idpaket GROUP BY id_order order by tanggal desc");
        return $hasil;
    }

    public function simpan_transaksi($id)
    {
        $date_created = date('Y-m-d H:i:s');

        $hasil = $this->db->query("INSERT INTO transaksi(id_order,id_user,nama,jenkel,alamat,notelp,email,berangkat,kembali,adult,kids,paket_id_order,metode_id,keterangan,tanggal,total,no_ktp,kode_booking) SELECT id_order,orders.id_user,orders.nama,orders.jenkel,orders.alamat,orders.notelp,orders.email,orders.berangkat,orders.kembali,orders.adult,orders.kids,orders.paket_id_order,orders.metode_id,orders.keterangan,orders.tanggal,SUM((hrg_dewasa*adult)+(hrg_anak*kids))AS total,orders.no_ktp,orders.kode_booking FROM orders JOIN metode_bayar ON metode_id=id_metode JOIN paket ON paket_id_order=idpaket WHERE id_order='$id' ");
        return $hasil;
    }
    function bayar_selesai($id)
    {
        $hasil = $this->db->query("UPDATE orders SET status='LUNAS' WHERE id_order='$id'");
        return $hasil;
    }
    function edit_orders($kode, $dewasa, $anaks)
    {
        $hasil = $this->db->query("UPDATE orders SET adult='$dewasa',kids='$anaks' WHERE id_order='$kode'");
        return $hasil;
    }
    function hapus_orders($kode)
    {
        $hasil = $this->db->query("delete from orders WHERE id_order='$kode'");
        return $hasil;
    }
    function get_bank()
    {
        $hasil = $this->db->query("SELECT * FROM metode_bayar WHERE bank<>''");
        return $hasil;
    }
    function simpan_bukti($noinvoice, $id_user, $nama, $bank, $tgl_bayar, $jumlah, $gambar)
    {
        $hasil = $this->db->query("INSERT INTO pembayaran(id_user,tgl_bayar,metode_id_bayar,order_id,jumlah,pengirim,bukti_transfer)VALUES('$id_user','$tgl_bayar','$bank','$noinvoice','$jumlah','$nama','$gambar')");
        return $hasil;
    }
    function hapus_bayar($kode)
    {
        $hasil = $this->db->query("delete from pembayaran WHERE id_bayar='$kode'");
        return $hasil;
    }

    //function update pembatalan tiket

    function set_pembatalan($id)
    {
        $hasil = $this->db->query("UPDATE orders SET status='BATAL' WHERE id_order='$id'");
        return $hasil;
    }
}
