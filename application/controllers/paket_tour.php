<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Paket_tour extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mpaket');
        $this->load->model('mberita');
        $this->load->model('morders');
        $this->load->model('mwisata');
    }
    public function index()
    {
        $x['paket'] = $this->mberita->paket_footer();
        $x['berita'] = $this->mberita->berita_footer();
        $x['photo'] = $this->mberita->get_photo();
        $jum = $this->mpaket->tampil_paket();
        $page = $this->uri->segment(3);
        if (!$page) :
            $offset = 0;
        else :
            $offset = $page;
        endif;
        $limit = 4;
        $config['base_url'] = base_url() . 'paket_tour/index/';
        $config['total_rows'] = $jum->num_rows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        // Style Pagination
        // Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        // End style pagination
        // End style pagination
        $this->pagination->initialize($config);

        $x['page'] = $this->pagination->create_links();
        $x['news'] = $this->mpaket->get_paket($offset, $limit);
        $x['brt'] = $this->mpaket->tampil_paket();

        $this->load->view('nfront/templates/f_header', $x);
        $this->load->view('nfront/v_paket', $x);
        $this->load->view('nfront/templates/_footer', $x);
    }
    public function detail_paket()
    {
        $limit = 100;
        $x['paket'] = $this->mberita->paket_footer();
        $x['berita'] = $this->mberita->berita_footer();
        $x['photo'] = $this->mberita->get_photo();

        $kode = $this->uri->segment(3);
        $x['brt'] = $this->mpaket->tampil_paket();
        $x['news'] = $this->mpaket->getpaket($kode);
        $x['foto'] = $this->mwisata->get_foto($kode);

        $x['ketersediaan'] = $this->mpaket->get_ketersediaan_all($kode);

        $this->load->view('nfront/templates/f_header', $x);
        $this->load->view('nfront/v_detail_paket', $x);
        $this->load->view('nfront/templates/_footer', $x);
    }
    public function pesan_paket()
    {
        is_logged_in();
        $x['paket'] = $this->mberita->paket_footer();
        $x['berita'] = $this->mberita->berita_footer();
        $x['photo'] = $this->mberita->get_photo();
        $kode = $this->uri->segment(3);
        $x['pkt'] = $this->mpaket->getpaket($kode);
        $x['ketersediaan'] = $this->mpaket->get_ketersediaan_all($kode);

        $x['byr'] = $this->mpaket->get_metode_pembayaran();
        $this->load->view('nfront/templates/f_header', $x);
        $this->load->view('nfront/v_order', $x);
        $this->load->view('nfront/templates/_footer', $x);
    }
    public function order()
    {
        is_logged_in();
        $x['paket'] = $this->mberita->paket_footer();
        $x['berita'] = $this->mberita->berita_footer();
        $x['photo'] = $this->mberita->get_photo();
        error_reporting(0);
        $no_order = $this->mpaket->get_no_order();
        $nama = strip_tags(str_replace("'", "", $this->input->post('nama')));
        $jekel = strip_tags(str_replace("'", "", $this->input->post('jenkel')));
        $alamat = strip_tags(str_replace("'", "", $this->input->post('alamat')));
        $notelp = strip_tags(str_replace("'", "", $this->input->post('notelp')));
        $email = strip_tags(str_replace("'", "", $this->input->post('email')));
        $paket = strip_tags(str_replace("'", "", $this->input->post('paket')));
        $no_ktp = strip_tags(str_replace("'", "", $this->input->post('no_ktp')));
        $id = $this->input->post('id');




        $dewasa = $this->input->post('adultamt');
        $anak2 = $this->input->post('childrenamt');

        $ket = htmlspecialchars($this->input->post('notebox', true));
        $id_user = $this->session->userdata('id');
        $this->mpaket->simpan_order($no_order, $id_user, $nama, $jekel, $alamat, $notelp, $email, $paket, $dewasa, $anak2, $ket, $no_ktp, $id);
        $this->session->set_userdata('invoices', $no_order);
        $x['photo'] = $this->mberita->get_photo();
        $x['data'] = $this->mpaket->get_metode();
        $this->load->view('nfront/templates/f_header', $x);
        $this->load->view('nfront/v_metode_bayar', $x);
        $this->load->view('nfront/templates/_footer', $x);
    }

    /*kirim email*/
    private function _sendEmail()
    {
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
        $x['data'] = $this->mpaket->faktur();

        $this->email->initialize($config);
        $this->email->from('bucekcoffe@gmail.com', 'Sumbawa Tour');
        $this->email->to($this->session->userdata('email'));
        $message = $this->load->view('nfront/email/email_invoice', $x, TRUE);


        $this->email->subject('Konfirmasi Pemesanan Tiket Anda');
        $this->email->message($message);


        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }


    public function set_pembayaran()
    {
        is_logged_in();
        $x['paket'] = $this->mberita->paket_footer();
        $x['berita'] = $this->mberita->berita_footer();
        $x['photo'] = $this->mberita->get_photo();
        $id = $this->uri->segment(3);
        $no_invoice = $this->session->userdata('invoices');
        $this->mpaket->set_bayar($no_invoice, $id);

        $this->_sendEmail();

        if ($id == '1') {

            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Terimah kasih Telah Melakukan Order Silahkan cek email anda. Kami Telah mengirim jumlah yang harus anda bayar dan nomor</div>');
            redirect('paket_tour');
        } else {

            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"> Terimah kasih Telah Melakukan Order Silahkan cek email anda. Kami Telah mengirim jumlah yang harus anda bayar dan nomor</div>');
            redirect('paket_tour');
        }
    }

    public function Booking()
    {

        is_logged_in();
        $x['paket'] = $this->mberita->paket_footer();
        $x['berita'] = $this->mberita->berita_footer();
        $x['photo'] = $this->mberita->get_photo();
        $id = $this->uri->segment(3);
        $id_user = $this->session->userdata('id');

        $x['data'] = $this->mpaket->list_booking($id_user)->result_array();
        $x['judul'] = "Booking Tiket";


        if ($x['data'] > 1) {

            $this->load->view('nfront/templates/f_header', $x);
            $this->load->view('nfront/v_list_booking', $x);
            $this->load->view('nfront/templates/_footer', $x);
        } else {
            echo "<script>
            alert('Tidak ada Booking yang ada lakukan!! Silakan Booking');
            window.location.href='../paket_tour';
            </script>";
        }
    }

    public function Detail_booking()
    {

        is_logged_in();
        $x['paket'] = $this->mberita->paket_footer();
        $x['berita'] = $this->mberita->berita_footer();
        $x['photo'] = $this->mberita->get_photo();
        $id = $this->uri->segment(3);
        $id_user = $this->session->userdata('id');

        $x['data'] = $this->mpaket->booking($id)->row_array();
        $x['judul'] = "Booking Tiket";



        if ($x['data'] > 1) {

            $this->load->view('nfront/templates/f_header', $x);
            $this->load->view('nfront/v_booking', $x);
            $this->load->view('nfront/templates/_footer', $x);
        } else {
            echo "<script>
            alert('Tidak ada Booking yang ada lakukan!! Silakan Booking');
            window.location.href='../paket_tour';
            </script>";
        }
    }
}
