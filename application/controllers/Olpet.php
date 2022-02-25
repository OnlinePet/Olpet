<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Olpet extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Article_model');
    }

    public function index()
    {
        $this->load->view('dashboard');
    }

    public function about_us()
    {
        $this->load->view('aboutus');
    }

    public function artikel_kucing()
    {
        $data['artikel'] = $this->Article_model->artikel_kucing();
        $this->load->view('kucing', $data);
    }
    public function penyakitkucing()
    {
        $data['artikel'] = $this->Article_model->penyakit_kucing();
        $this->load->view('kategori', $data);
    }
    public function nutrisikucing()
    {
        $data['artikel'] = $this->Article_model->nutrisi_kucing();
        $this->load->view('kategori', $data);
    }
    public function reproduksikucing()
    {
        $data['artikel'] = $this->Article_model->reproduksi_kucing();
        $this->load->view('kategori', $data);
    }
    public function vaksinkucing()
    {
        $data['artikel'] = $this->Article_model->vaksin_kucing();
        $this->load->view('kategori', $data);
    }

    public function artikel_anjing()
    {
        $data['artikel'] = $this->Article_model->artikel_anjing();
        $this->load->view('anjing', $data);
    }
    public function penyakitanjing()
    {
        $data['artikel'] = $this->Article_model->penyakit_anjing();
        $this->load->view('kategori', $data);
    }
    public function nutrisianjing()
    {
        $data['artikel'] = $this->Article_model->nutrisi_anjing();
        $this->load->view('kategori', $data);
    }
    public function reproduksianjing()
    {
        $data['artikel'] = $this->Article_model->reproduksi_anjing();
        $this->load->view('kategori', $data);
    }
    public function vaksinanjing()
    {
        $data['artikel'] = $this->Article_model->vaksin_anjing();
        $this->load->view('kategori', $data);
    }

    public function detail_article()
    {
        $id = $this->uri->segment(3);
        $data['artikel'] = $this->Article_model->getId($id);
        $this->load->view('detail', $data);
    }

    public function pencatatan()
    {
        $this->load->view('comingsoon');
    }

    public function rating()
    {
        $this->load->view('comingsoon');
    }

    public function cari()
    {
        $keyword = $this->input->get('keyword');
        $data['artikel'] = $this->Article_model->pencarian($keyword);
        $this->load->view('pencarian', $data);
    }
}
