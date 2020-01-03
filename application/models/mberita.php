<?php
class Mberita extends CI_Model
{
	function ambil_berita($kode)
	{
		$hasil = $this->db->query("select * from berita where idberita='$kode'");
		return $hasil;
	}

	function count_berita()
	{
		$hasil = $this->db->query("select * from berita");
		return $hasil;
	}
	function get_photo()
	{
		$hasil = $this->db->query("select * from galeri");
		return $hasil;
	}
	function get_wisata()
	{
		$hasil = $this->db->query("select * from wisata order by idwisata desc limit 3");
		return $hasil;
	}
	function get_berita($offset, $limit)
	{
		$hasil = $this->db->query("select * from berita order by tglpost DESC limit $offset,$limit");
		return $hasil;
	}
	function SimpanBerita($jdl, $berita, $gambar, $user)
	{
		$hasil = $this->db->query("INSERT INTO berita(judul,isi,tglpost,gambar,user) VALUES ('$jdl','$berita',NOW(),'$gambar','$user')");
		return $hasil;
	}

	function simpan_post_kupon($id_paket, $kode_kupon, $desk, $jml_diskon, $valid_until, $date_created)
	{
		$hasil = $this->db->query("INSERT INTO diskon_tour(id_paket,kode_kupon,desk,jml_diskon,valid_until,date_created) VALUES ('$id_paket','$kode_kupon','$desk','$jml_diskon','$valid_until','$date_created')");
		return $hasil;
	}
	function tampil_berita()
	{
		$hasil = $this->db->query("select * from berita order by tglpost DESC");
		return $hasil;
	}
	function berita()
	{
		$hasil = $this->db->query("select * from berita order by tglpost DESC limit 4");
		return $hasil;
	}
	function berita_footer()
	{
		$hasil = $this->db->query("select * from berita order by tglpost asc limit 3");
		return $hasil;
	}
	function paket_footer()
	{
		$hasil = $this->db->query("select * from paket order by idpaket asc limit 3");
		return $hasil;
	}
	function getberita($kode)
	{
		$hasil = $this->db->query("select * from berita where idberita='$kode'");
		return $hasil;
	}
	function updateberitaimg($kode, $jdl, $berita, $gambar, $user)
	{
		$hasil = $this->db->query("UPDATE berita SET judul='$jdl',isi='$berita',tgl_last_update=NOW(),gambar='$gambar',user='$user' WHERE idberita='$kode'");
		return $hasil;
	}
	function updateberita($kode, $jdl, $berita, $user)
	{
		$hasil = $this->db->query("UPDATE berita SET judul='$jdl',isi='$berita',tgl_last_update=NOW(),user='$user' WHERE idberita='$kode'");
		return $hasil;
	}
	function hapus_berita($id)
	{
		$hasil = $this->db->query("delete from berita where idberita='$id'");
		return $hasil;
	}
}
