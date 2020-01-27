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
        $x['testimoni_order'] = $this->mtestimoni->tampil_test();
        $x['brt'] = $this->mberita->tampil_berita();
        $this->load->view('nfront/templates/f_header', $x);
        $this->load->view('nfront/v_testimoni', $x);
        $this->load->view('nfront/templates/_footer', $x);
    }
    public function simpan()
    {
        $id_order = $this->input->post('id_order', true);

        $nama = $this->input->post('nama', true);
        $email = $this->session->userdata('email');
        $msg = $this->input->post('message', true);
        $id = $this->uri->segment(3);

        $this->mtestimoni->simpan_testimoni_order($id_order, $nama, $email, $msg);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Terimah kasih Telah Melakukan Testimoni!!</div>');

        redirect('paket_tour/booking/');
    }
}
