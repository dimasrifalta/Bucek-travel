<?php
class Orders extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url();
            redirect($url);
        };
        $this->load->model('morders');
    }
    function index()
    {
        $x['data'] = $this->morders->get_orders();
        $x['data_transaksi'] = $this->morders->get_transaksi();
        $this->load->view('backend/v_orders', $x);
    }
    function pembayaran_selesai()
    {
        $id = $this->uri->segment(4);
        $this->morders->bayar_selesai($id);
        echo $this->session->set_flashdata('msg', 'success');
        redirect('backend/orders');
    }
    function edit_orders()
    {
        $kode = $this->input->post('kode');
        $dewasa = $this->input->post('dewasa');
        $anaks = $this->input->post('anaks');
        $this->morders->edit_orders($kode, $dewasa, $anaks);
        echo $this->session->set_flashdata('msg', 'info');
        redirect('backend/orders');
    }
    function hapus_order()
    {
        $kode = $this->input->post('kode');
        $this->morders->hapus_orders($kode);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('backend/orders');
    }

    function printlaporan()
    {
        $tglawal = $this->input->post('tglawal');
        $tglakhir = $this->input->post('tglakhir');
        // var_dump($tglawal);
        // die;

        $sql1 = "SELECT id_order,orders.tanggal,nama_paket,hrg_dewasa,hrg_anak,adult,kids,SUM(adult+kids)AS jml_berangkat,(hrg_dewasa*adult) AS sub_dewasa,(hrg_anak*kids)AS sub_anak,SUM((hrg_dewasa*adult)+(hrg_anak*kids))AS total,berangkat,kembali,metode,bank,norek,atasnama,nama,IF(jenkel='L','Laki-Laki','Perempuan')AS jenkel,alamat,notelp,email,keterangan,status FROM orders JOIN metode_bayar ON metode_id=id_metode JOIN paket ON paket_id_order=idpaket WHERE orders.status='LUNAS' AND tanggal BETWEEN '$tglawal' AND '$tglakhir' GROUP BY id_order order by tanggal desc   ";
        $data['keluar'] = $this->db->query($sql1)->result_array();




        $this->load->view('backend/cetaklaporan', $data);
    }
}
