<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Detail_photo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mgaleri');
        $this->load->model('mberita');
        
        $this->load->library('pagination');
    }
    public function index()
    {
        $x['paket']=$this->mberita->paket_footer();
        $x['berita']=$this->mberita->berita_footer();
        $x['photo']=$this->mberita->get_photo();
        $kode=$this->uri->segment(3);
        $jum=$this->mgaleri->count_photo($kode);
        $page=$this->uri->segment(5);
        if (!$page):
            $offset = 0; else:
            $offset = $page;
        endif;
        $limit=6;
        $config['base_url'] = base_url() . 'detail_photo/index/';
        $config['total_rows'] = $jum->num_rows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 5;
        // Style Pagination
        // Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination custom-pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
       
        
        $config['first_link']      = 'First';
        $config['first_tag_open']  = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link']       = 'Last';
        $config['last_tag_open']   = '<li class="page-item">';
        $config['last_tag_close']  = '</li>';
        
        $config['next_link']       = ' <i class="icon-keyboard_arrow_right"></i>';
        $config['next_tag_open']   = '<li class="page-item next">';
        $config['next_tag_close']  = '</li>';
        
        $config['prev_link']       = ' <i class="icon-keyboard_arrow_left"></i> ';
        $config['prev_tag_open']   = '<li class="page-item prev">';
        $config['prev_tag_close']  = '</li>';

        
        $config['cur_tag_open']    = '<li class="page-item active"><a class="page-link href="#">';
        $config['cur_tag_close']   = '</a></li>';
         
        $config['num_tag_open']    = '<li>';
        $config['num_tag_close']   = '</li>';
        // End style pagination
        // End style pagination
        $this->pagination->initialize($config);
        $x['page'] =$this->pagination->create_links();
        $x['photo']=$this->mgaleri->get_galeri($kode, $offset, $limit);
        

        $this->load->view('nfront/templates/f_header', $x);
        $this->load->view('nfront/v_detail_photo', $x);
        $this->load->view('nfront/templates/_footer', $x);
    }

    public function galeri()
    {
        $x['paket']=$this->mberita->paket_footer();
        $x['berita']=$this->mberita->berita_footer();
        $x['photo']=$this->mberita->get_photo();
        $jum=$this->mgaleri->jml_photo();
        $page=$this->uri->segment(3);
        if (!$page):
            $offset = 0; else:
            $offset = $page;
        endif;
        $limit=1;
        $config['base_url'] = base_url() . 'detail_photo/galeri/';
        $config['total_rows'] = $jum->num_rows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['next_link'] = 'Selanjutnya';
        $config['prev_link'] = 'Sebelumnya';
        $this->pagination->initialize($config);
        $x['page'] =$this->pagination->create_links();
        $x['photo']=$this->mgaleri->galeri_photo($offset, $limit);
        $this->load->view('front/v_detail_photo', $x);
    }
}
