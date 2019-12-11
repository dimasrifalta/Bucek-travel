<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Wisata_post extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mwisata');
        $this->load->model('mberita');
        $this->load->model('mtestimoni');
    }
    public function index()
    {
        $x['paket'] = $this->mberita->paket_footer();
        $x['berita'] = $this->mberita->berita_footer();
        $x['photo'] = $this->mberita->get_photo();
        $jum = $this->mwisata->count_wisata();
        $page = $this->uri->segment(3);
        if (!$page) :
            $offset = 0;
        else :
            $offset = $page;
        endif;
        $limit = 100;
        $config['base_url'] = base_url() . 'wisata_post/index/';
        $config['total_rows'] = $jum->num_rows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        // Style Pagination
        // // Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
        // $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination custom-pagination justify-content-center">';
        // $config['full_tag_close']   = '</ul></nav></div>';


        // $config['first_link']      = 'First';
        // $config['first_tag_open']  = '<li class="page-item">';
        // $config['first_tag_close'] = '</li>';

        // $config['last_link']       = 'Last';
        // $config['last_tag_open']   = '<li class="page-item">';
        // $config['last_tag_close']  = '</li>';

        // $config['next_link']       = ' <i class="icon-keyboard_arrow_right"></i>';
        // $config['next_tag_open']   = '<li class="page-item next">';
        // $config['next_tag_close']  = '</li>';

        // $config['prev_link']       = ' <i class="icon-keyboard_arrow_left"></i> ';
        // $config['prev_tag_open']   = '<li class="page-item prev">';
        // $config['prev_tag_close']  = '</li>';


        // $config['cur_tag_open']    = '<li class="page-item active"><a class="page-link href="#">';
        // $config['cur_tag_close']   = '</a></li>';

        // $config['num_tag_open']    = '<li>';
        // $config['num_tag_close']   = '</li>';
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
        $x['news'] = $this->mwisata->get_wisata($offset, $limit);
        $x['brt'] = $this->mwisata->tampil_wisata();
        $this->load->view('nfront/templates/f_header', $x);
        $this->load->view('nfront/v_wisata', $x);
        $this->load->view('nfront/templates/_footer', $x);
    }
    public function detail_wisata()
    {
        $x['paket'] = $this->mberita->paket_footer();
        $x['berita'] = $this->mberita->berita_footer();
        $x['photo'] = $this->mberita->get_photo();
        $kode = $this->uri->segment(3);
        $x['brt'] = $this->mwisata->tampil_wisata();
        $x['news'] = $this->mwisata->getwisata($kode);
        $x['test'] = $this->mtestimoni->tampil_test_comment($kode);
        $x['kode'] = $this->uri->segment(3);

        $jum = $this->mtestimoni->count_comment($kode);
        $x['jum'] = $jum->num_rows();
        $this->load->view('nfront/templates/f_header', $x);
        $this->load->view('nfront/v_detail_wisata', $x);
        $this->load->view('nfront/templates/_footer', $x);
    }




    public function simpan_komentar()
    {
        $nama = $this->input->post('nama', true);
        $email = $this->input->post('email', true);
        $msg = $this->input->post('message', true);
        $kode = $this->input->post('kode');
        $this->mtestimoni->simpan_testimoni($kode, $nama, $email, $msg);



        header('Location: detail_wisata/' . $kode);
    }
}
