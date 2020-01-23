<?php
class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_pengunjung');
	}
	function index()
	{
		if ($this->session->userdata('akses') == '1') {
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$x['penjualan'] = $this->m_pengunjung->statistik_penjualan();
			// var_dump($x['penjualan']);

			// die();
			$this->load->view('backend/v_dashboard', $x);
		} else {
			redirect('administrator');
		}
	}
}
