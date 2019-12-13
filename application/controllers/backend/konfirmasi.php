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
        $idpaket = $this->input->post('idpaket');
        $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $res = "";
        for ($i = 0; $i < 6; $i++) {
            $res .= $chars[mt_rand(0, strlen($chars) - 1)];
        }

        $this->morders->bayar_selesai($id);
        $this->db->query("UPDATE paket SET views=views+1 WHERE idpaket='$idpaket'");
        $this->db->query("UPDATE orders SET kode_booking='$res' WHERE id_order='$id'");

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
