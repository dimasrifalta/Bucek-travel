<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Semua_album extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('malbum');
        $this->load->model('mberita');
    }
	public function index()
	{
        $x['paket']=$this->mberita->paket_footer();
        $x['berita']=$this->mberita->berita_footer();
        $x['photo']=$this->mberita->get_photo();
		$jum=$this->malbum->count_album();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=20;
        $config['base_url'] = base_url() . 'semua_album/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
        // Style Pagination
       // Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
        // 
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
            $x['page'] =$this->pagination->create_links();
		$x['alm']=$this->malbum->get_album($offset,$limit);
        $x['jml']=$this->malbum->jml_album();
		$this->load->view('nfront/templates/f_header', $x);
        $this->load->view('nfront/v_album', $x);
        $this->load->view('nfront/templates/_footer', $x);
	}
	
}