<?php
class Testimoni extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mberita');
        $this->load->model('mtestimoni');
    }
    public function index()
    {
        $x['paket'] = $this->mberita->paket_footer();
        $x['berita'] = $this->mberita->berita_footer();
        $x['photo'] = $this->mberita->get_photo();
        $x['test'] = $this->mtestimoni->tampil_test();
        $x['brt'] = $this->mberita->tampil_berita();
        $this->load->view('nfront/templates/f_header', $x);
        $this->load->view('nfront/v_testimoni', $x);
        $this->load->view('nfront/templates/_footer', $x);
    }
    public function simpan()
    {
        $nama = $this->input->post('nama', true);
        $email = $this->input->post('email', true);
        $msg = $this->input->post('message', true);

        $this->mtestimoni->simpan_testimoni_order($nama, $email, $msg);
        redirect('testimoni');
    }
}
