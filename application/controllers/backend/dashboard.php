<?php
class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mwisata');
		$this->load->model('mberita');
		$this->load->model('mtestimoni');
		$this->load->model('mpaket');
		$this->load->model('m_pengunjung');
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
	}
	function index()
	{
		if ($this->session->userdata('akses') == '1') {
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$x['penjualan'] = $this->m_pengunjung->statistik_penjualan();
			$x['penjualan'] = $this->m_pengunjung->send_email();

			$this->load->view('backend/v_dashboard', $x);
		} else {
			redirect('administrator');
		}
	}

	function SendEmail()
	{
		$user1 = $this->m_pengunjung->send_email()->result_array();
		$user = array_map(function ($current) {
			return $current['email'];
		}, $user1);
		$this->_sendEmailPromotions($user);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('backend/dashboard');
	}


	/*kirim email*/
	private function _sendEmailPromotions($user)
	{
		$limit = 8;
		$x['news'] = $this->mwisata->get_wisata_email($limit);
		$x['paket_populer'] = $this->m_pengunjung->paket_populer();

		$config = [
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'bucekcoffe@gmail.com',
			'smtp_pass' => 'Liger1998',
			'smtp_port' =>  465,
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n"
		];
		$x['paket_populer'] = $this->m_pengunjung->paket_populer();

		$this->email->initialize($config);
		$this->email->from('bucekcoffe@gmail.com', 'Sumbawa Tour');
		$this->email->to($user);
		$message = $this->load->view('nfront/email/email_promotions.php', $x, TRUE);
		$this->email->subject('Promotions');
		$this->email->message($message);
		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}
}
