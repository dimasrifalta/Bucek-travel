<?php
class Mpengguna extends CI_Model
{

    function simpan_pass($id, $user, $pass)
    {
        $query = $this->db->query("update admin set username='$user',password=md5('$pass') where idadmin='$id'");
        return $query;
    }
    function ganti_pass($u)
    {
        $query = $this->db->query("select * from admin where username='$u'");
        return $query;
    }

    function getusername($id)
    {
        $query = $this->db->query("select * from admin where idadmin='$id'");
        return $query;
    }

    function resetpass($id, $pass)
    {
        $query = $this->db->query("update admin set password=md5('$pass') where idadmin='$id'");
        return $query;
    }
    function hapus_user($id)
    {
        $query = $this->db->query("delete from admin where idadmin='$id'");
        return $query;
    }
    function nonaktifkan($id)
    {
        $query = $this->db->query("update user set is_active='0' where id='$id'");
        return $query;
    }

    function edit_user($id, $nama, $username, $password, $level)
    {
        $query = $this->db->query("update admin set nama='$nama',username='$username',password=md5('$password'),level='$level' where idadmin='$id'");
        return $query;
    }

    function update_user_with_img($kode, $nama, $username, $password, $level, $gambar)
    {
        $query = $this->db->query("update admin set nama='$nama',username='$username',password=md5('$password'),level='$level',photo='$gambar' where idadmin='$kode'");
        return $query;
    }

    function simpan_user($nama, $username, $password, $level, $gambar)
    {
        $query = $this->db->query("insert into admin(nama,username,password,level,photo)values('$nama','$username',md5('$password'),'$level','$gambar')");
        return $query;
    }
    function pengguna()
    {
        $query = $this->db->query("SELECT idadmin,nama,username,password,IF(level='1','Admin','Operator') AS level,photo FROM admin");
        return $query;
    }

    function customer()
    {
        $query = $this->db->query("SELECT * FROM user WHERE is_active ='1' ");
        return $query;
    }

    function tourgate()
    {
        $query = $this->db->query("SELECT * FROM tour_gate");
        return $query;
    }

    function simpan_tourgate($nama, $no_hp, $gambar)
    {
        $query = $this->db->query("insert into tour_gate(nama,no_hp,gambar,status)values('$nama','$no_hp','$gambar','1')");
        return $query;
    }

    function edit_tourgate($id, $nama, $no_hp)
    {
        $query = $this->db->query("update tour_gate set nama='$nama',no_hp='$no_hp' where id='$id'");
        return $query;
    }

    function update_tourgate_with_img($id, $nama, $no_hp, $gambar)
    {
        $query = $this->db->query("update tour_gate set nama='$nama',no_hp='$no_hp',gambar='$gambar' where id='$id'");
        return $query;
    }
}
