<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Article_model');

        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'List Article';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['artikel'] = $this->Article_model->viewArticle();

        $this->form_validation->set_rules('judul', 'Title', 'required');
        $this->form_validation->set_rules('isi', 'Contents', 'required');
        $this->form_validation->set_rules('jenis_artikel', 'Article Type', 'required');
        $this->form_validation->set_rules('kategori', 'Article Category', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('article/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Article_model->addArticle();
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"><center>new article has been added</center></div>');
            redirect('article');
        }
    }

    public function edit_artikel()
    {
        $this->form_validation->set_rules('judul', 'Title', 'required');
        $this->form_validation->set_rules('isi', 'Contents', 'required');
        $this->form_validation->set_rules('jenis_artikel', 'Article Type', 'required');

        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $tanggal = time();
        $penulis = $this->input->post('penulis');
        $jenis_artikel = $this->input->post('jenis_artikel');
        $kategori = $this->input->post('kategori');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('article/index');
            $this->load->view('templates/footer');
        } else {
            $this->Article_model->editArticle($id, $judul, $isi, $penulis, $tanggal, $jenis_artikel, $kategori);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"><center>edit article successfully</center></div>');
            redirect('article');
        }
    }

    public function hapus_artikel($id)
    {
        $this->Article_model->deleteArticle($id);
        $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><center>delete article successfully</center></div>');
        redirect('article');
    }
}
