<?php
class Konfirmasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url();
            redirect($url);
        };
        $this->load->model('morders');
        $this->load->model('mpaket');
    }
    function index()
    {
        $x['data'] = $this->morders->get_pembayaran();
        $x['pembatalan'] = $this->mpaket->get_pembatalan();
        $this->load->view('backend/v_konfirmasi', $x);
    }
    function pembayaran_selesai()
    {
        $id = $this->input->post('kode');
        $this->morders->bayar_selesai($id);
        echo $this->session->set_flashdata('msg', 'success');
        redirect('backend/orders');
    }
    function hapus_konfirmasi()
    {
        $kode = $this->input->post('kode');
        $this->morders->hapus_bayar($kode);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('backend/Konfirmasi');
    }

    //function set pembatalan tiket
    function set_pembatalan()
    {
        $id = $this->uri->segment(4);
        $this->morders->set_pembatalan($id);
        echo $this->session->set_flashdata('msg', 'success');
        redirect('backend/Konfirmasi');
    }
}
