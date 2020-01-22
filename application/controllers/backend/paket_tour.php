<?php
class Paket_tour extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url();
			redirect($url);
		};
		$this->load->model('mpaket');
		$this->load->library('upload');
	}
	function index()
	{
		if ($this->session->userdata('akses') == '1') {
			$x['data'] = $this->mpaket->tampil_paket();
			$x['kat'] = $this->mpaket->get_kategori();
			$x['availble_tour'] = $this->mpaket->tampil_availible_tour();
			$x['tour_gate'] = $this->mpaket->tampil_tourget();


			$this->load->view('backend/v_paket_tour', $x);
		} else {
			echo "Halaman tidak ditemukan";
		}
	}

	function simpan_paket()
	{
		$config['upload_path'] = './assets/gambars/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();


				$gambar = $gbr['file_name'];
				$nama_paket = $this->input->post('nama_paket');
				$kategori = $this->input->post('kategori');
				$deskripsi = $this->input->post('deskripsi');
				$hrg_dewasa = $this->input->post('hrg_dewasa');
				$hrg_anak = $this->input->post('hrg_anak');

				$this->mpaket->SimpanPaket($nama_paket, $kategori, $deskripsi, $hrg_dewasa, $hrg_anak, $gambar);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('backend/paket_tour');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('backend/paket_tour');
			}
		} else {
			redirect('backend/paket_tour');
		}
	}

	function update_paket()
	{
		$config['upload_path'] = './assets/gambars/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();


				$gambar = $gbr['file_name'];
				$kode = $this->input->post('kode');
				$nama_paket = $this->input->post('nama_paket');
				$kategori = $this->input->post('kategori');
				$deskripsi = $this->input->post('deskripsi');
				$hrg_dewasa = $this->input->post('hrg_dewasa');
				$hrg_anak = $this->input->post('hrg_anak');

				$this->mpaket->updatedenganimg($kode, $nama_paket, $kategori, $deskripsi, $hrg_dewasa, $hrg_anak, $gambar);
				echo $this->session->set_flashdata('msg', 'info');
				redirect('backend/paket_tour');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('backend/paket_tour');
			}
		} else {
			$kode = $this->input->post('kode');
			$nama_paket = $this->input->post('nama_paket');
			$kategori = $this->input->post('kategori');
			$deskripsi = $this->input->post('deskripsi');
			$hrg_dewasa = $this->input->post('hrg_dewasa');
			$hrg_anak = $this->input->post('hrg_anak');
			$this->mpaket->updatepaket($kode, $nama_paket, $kategori, $deskripsi, $hrg_dewasa, $hrg_anak);
			echo $this->session->set_flashdata('msg', 'info');
			redirect('backend/paket_tour');
		}
	}

	function hapus_paket()
	{
		if ($this->session->userdata('akses') == '1') {
			$id = $this->input->post('kode');
			$this->mpaket->hapus_paket($id);
			echo $this->session->set_flashdata('msg', 'success-hapus');
			redirect('backend/paket_tour');
		} else {
			echo "Halaman tidak ditemukan";
		}
	}

	function simpan_ketersedian_paket()
	{
		if ($this->session->userdata('akses') == '1') {
			$id_paket_tour = $this->input->post('id_paket_tour', true);
			$jumlah_ketersedian = $this->input->post('jumlah_ketersedian', true);
			$tgl1     = $this->input->post('tgl_awal', true);
			$tgl_awal = date('Y-m-d', strtotime($tgl1));
			$tgl2 = $this->input->post('tgl_akhir', true);
			$tgl_akhir = date('Y-m-d', strtotime($tgl2));
			$id_operator = $this->input->post('id_operator', true);
			$this->mpaket->simpan_ketersedian_paket($id_paket_tour, $tgl_awal, $tgl_akhir, $jumlah_ketersedian, $id_operator);
			$this->mpaket->updateStatus_tourgate($id_operator);
			echo $this->session->set_flashdata('msg', 'success');
			redirect('backend/paket_tour');
		} else {
			echo "Halaman tidak ditemukan";
		}
	}


	function update_available_tour()
	{
		if ($this->session->userdata('akses') == '1') {
			$jumlah_ketersedian = $this->input->post('jumlah_ketersedian', true);
			$tgl1     = $this->input->post('tgl_awal', true);
			$tgl_awal = date('Y-m-d', strtotime($tgl1));
			$tgl2 = $this->input->post('tgl_akhir', true);
			$tgl_akhir = date('Y-m-d', strtotime($tgl2));
			$kode = $this->input->post('kode');
			$this->mpaket->update_available_tour($tgl_awal, $tgl_akhir, $jumlah_ketersedian, $kode);
			echo $this->session->set_flashdata('msg', 'success');
			redirect('backend/paket_tour');
		} else {
			echo "Halaman tidak ditemukan";
		}
	}

	function nonaktifkanAvailable()
	{
		if ($this->session->userdata('akses') == '1') {
			$id = $this->input->post('kode');
			$this->mpaket->nonaktifkanAvailable($id);
			echo $this->session->set_flashdata('msg', 'success-hapus');
			redirect('backend/paket_tour');
		} else {
			echo "Halaman tidak ditemukan";
		}
	}
}
