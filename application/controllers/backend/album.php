<?php


class Album extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url();
            redirect($url);
        };
        $this->load->model('malbum');
        $this->load->model('mpaket');

        $this->load->library('upload');
        $this->load->library('pdf');
    }
    function index()
    {
        if ($this->session->userdata('akses') == '1') {
            $x['data'] = $this->malbum->tampil_album();

            $id = 'INV291219000002';
            $x['data'] = $this->mpaket->booking($id)->row_array();

            //File name
            $filename = "Whatever-you-wish";
            $this->load->library('pdf');
            $this->load->view('nfront/email/attach', $x);
            $html = $this->output->get_output();
            $this->pdf->load_html($html);
            // $customPaper = array(0,0,570,570);
            //$this->pdf->set_paper($customPaper);
            $this->pdf->setPaper('A4', 'potrait');
            $this->pdf->render();
            $this->pdf->stream($filename . ".pdf", array("Attachment" => 0));

            $pdf = $this->pdf->output();

            file_put_contents('assets/plugins/dompdf/' . $filename . '.pdf', $pdf);
            $this->load->view('backend/v_album', $x);
        } else {
            echo "Halaman tidak ditemukan";
        }
    }

    function simpan_album()
    {
        $config['upload_path'] = './assets/gambars/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gbr = $this->upload->data();


                $gambar = $gbr['file_name'];
                $jdl = $this->input->post('judul');

                $this->malbum->SimpanAlbum($jdl, $gambar);
                echo $this->session->set_flashdata('msg', 'success');
                redirect('backend/album');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('backend/album');
            }
        } else {
            redirect('backend/album');
        }
    }

    function update_album()
    {
        $config['upload_path'] = './assets/gambars/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/gambars/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '60%';
                $config['width'] = 400;
                $config['height'] = 350;
                $config['new_image'] = './assets/gambars/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name'];
                $kode = $this->input->post('kode');
                $judul = $this->input->post('judul');

                $this->malbum->update_album_with_img($kode, $judul, $gambar);
                echo $this->session->set_flashdata('msg', 'info');
                redirect('backend/album');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('backend/album');
            }
        } else {
            $kode = $this->input->post('kode');
            $judul = $this->input->post('judul');
            $this->malbum->update_album($kode, $judul);
            echo $this->session->set_flashdata('msg', 'info');
            redirect('backend/album');
        }
    }

    function hapus_album()
    {
        if ($this->session->userdata('akses') == '1') {
            $id = $this->input->post('kode');
            $this->malbum->hapus_album($id);
            echo $this->session->set_flashdata('msg', 'success-hapus');
            redirect('backend/album');
        } else {
            echo "Halaman tidak ditemukan";
        }
    }
}
