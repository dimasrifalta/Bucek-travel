<?php
class Mtestimoni extends CI_Model
{
    public function simpan_testimoni($kode, $nama, $email, $msg)
    {
        $hasil=$this->db->query("INSERT INTO testimoni(idwisata,nama,email,pesan,status,tgl_post) VALUES ('$kode','$nama','$email','$msg','0',curdate())");
        return $hasil;
    }
    public function tampil_test_comment($kode)
    {
        $hasil=$this->db->query("SELECT * FROM testimoni WHERE status='1' AND idwisata='$kode' order by idtestimoni desc");
        return $hasil;
    }

    public function tampil_test()
    {
        $hasil=$this->db->query("SELECT * FROM testimoni WHERE status='1'  order by idtestimoni desc");
        return $hasil;
    }
    public function count_comment($kode)
    {
        $hasil=$this->db->query("SELECT * FROM testimoni WHERE status='1' AND idwisata='$kode' ");
        return $hasil;
    }
    public function get_testimoni()
    {
        $hasil=$this->db->query("SELECT * FROM testimoni WHERE status='0' order by tgl_post desc");
        return $hasil;
    }
    public function publish($id)
    {
        $hasil=$this->db->query("UPDATE testimoni SET status='1' WHERE idtestimoni='$id'");
        return $hasil;
    }
    public function edit_testimoni($kode, $nama, $pesan)
    {
        $hasil=$this->db->query("UPDATE testimoni SET nama='$nama',pesan='$pesan' WHERE idtestimoni='$kode'");
        return $hasil;
    }
    public function hapus_testimoni($kode)
    {
        $hasil=$this->db->query("delete from testimoni WHERE idtestimoni='$kode'");
        return $hasil;
    }
}