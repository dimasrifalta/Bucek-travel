<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Pembatalan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mpaket');
        $this->load->model('mberita');
    }


    public function index()
    {
        $x['paket'] = $this->mberita->paket_footer();
        $x['berita'] = $this->mberita->berita_footer();
        $x['photo'] = $this->mberita->get_photo();



        $kode = $this->uri->segment(3);
        $x['brt'] = $this->mpaket->tampil_paket();
        $id_user = $this->session->userdata('id');

        $x['data'] = $this->mpaket->booking_pembatalan($id_user)->result_array();
        $x['news'] = $this->mpaket->getpaket($kode);
        $this->load->view('nfront/templates/f_header', $x);
        $this->load->view('nfront/v_pembatalan', $x);
        $this->load->view('nfront/templates/_footer', $x);
    }
}
