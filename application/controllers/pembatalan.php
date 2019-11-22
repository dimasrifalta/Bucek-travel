<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Pembatalan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();

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

        $x['id_order'] = $this->mpaket->booking_pembatalan($id_user, $kode)->result_array();
        $x['news'] = $this->mpaket->getpaket($kode);
        $this->load->view('nfront/templates/f_header', $x);
        $this->load->view('nfront/v_pembatalan', $x);
        $this->load->view('nfront/templates/_footer', $x);
    }

    public function add_pembatalan()
    {
        $this->form_validation->set_rules('nama_rekening', 'Nama Rekening', 'required');
        $this->form_validation->set_rules('no_rek', 'Nomor Rekening', 'trim|required|numeric');
        $this->form_validation->set_rules('alasan_pembatalan', 'Alasan Pembatalan', 'required');

        $id_user = $this->session->userdata('id');
        $order_id = $this->input->post('id_order', true);
        $nama_rekening = $this->input->post('nama_rekening', true);
        $no_rek = $this->input->post('no_rek', true);
        $alasan_pembatalan = $this->input->post('alasan_pembatalan', true);

        // siapkan token

        $email = $this->session->userdata('email');
        $token_pembatalan = [
            'id_order' => $order_id,
            'email' => $email,
            'date_created' => time()
        ];


        $this->db->insert('batal_token', $token_pembatalan);

        /*kirim email*/
        $this->session->set_flashdata('flash', 'Ditambahkan');
        $this->_sendEmail($order_id);

        $this->mpaket->simpan_pembatalan($order_id, $id_user, $no_rek, $nama_rekening, $alasan_pembatalan);

        redirect('pembatalan');
    }

    /*kirim email*/
    private function _sendEmail($order_id)
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


        $this->email->initialize($config);
        $this->email->from('bucekcoffe@gmail.com', 'Coffe Bucek');
        $this->email->to($this->session->userdata('email'));


        $this->email->subject('Cancel Tour Verification');
        $this->email->message('Click this link to Cancel your ticket : <a href="' . base_url() . 'pembatalan/verify?email=' . $this->session->userdata('email') . '&token=' . $order_id . ' ">Batalkan Tiket</a> ');


        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    /*funtion verifikasi account yang telah di buat*/
    public function verify()
    {
        $email = $this->input->get('email');
        $order_id = $this->input->get('token');

        //ambil user
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //jika email nya ada di database
        if ($user) {
            //query ke tabel user token
            $user_token = $this->db->get_where('batal_token', ['id_order' => $order_id])->row_array();
            //token ada di database
            if ($user_token) {

                //waktu verifikasi

                $sql1 = "UPDATE orders set pembatalan='CANCEL' WHERE id_order = '$order_id' ";
                $this->db->query($sql1);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' Pembatalan Tiket anda telah berhasil mohon tunggu 1X24 untuk dana kami kembalikan ke Rekening Anda.</div>');
                redirect('paket_tour/booking');

                //token tidak ada di database
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account verifikasi!! Wrong token!</div>');
                redirect('paket_tour/booking');
            }
            //email tidak ada di database
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account verifikasi!! Wrong email!</div>');
            redirect('paket_tour/booking');
        }
    }
}
