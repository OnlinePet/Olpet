<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article_model extends CI_Model
{
    private $_table = "article";

    public function viewArticle()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function addArticle()
    {
        $data = [
            'judul' => $this->input->post('judul'),
            'isi'   => $this->input->post('isi'),
            'penulis' => $this->input->post('penulis'),
            'tanggal' => time(),
            'jenis_artikel' => $this->input->post('jenis_artikel'),
            'kategori' => $this->input->post('kategori')
        ];
        $this->db->insert('article', $data);
    }

    public function getId($id)
    {
        $query = $this->db->query("SELECT * FROM `article` WHERE id='$id'");
        return $query->result();
    }

    public function artikel_anjing()
    {
        $query = $this->db->query(" SELECT * FROM `article` WHERE `jenis_artikel` = 'Artikel Anjing' 
        ");
        return $query->result();
    }

    public function penyakit_anjing()
    {
        $query = $this->db->query(" SELECT * FROM `article` WHERE `kategori` = 'Penyakit' AND `jenis_artikel` = 'Artikel Anjing'  
        ");
        return $query->result();
    }

    public function vaksin_anjing()
    {
        $query = $this->db->query(" SELECT * FROM `article` WHERE `kategori` = 'Vaksin' AND `jenis_artikel` = 'Artikel Anjing' 
        ");
        return $query->result();
    }

    public function reproduksi_anjing()
    {
        $query = $this->db->query(" SELECT * FROM `article` WHERE `kategori` = 'Reproduksi' AND `jenis_artikel` = 'Artikel Anjing' 
        ");
        return $query->result();
    }

    public function nutrisi_anjing()
    {
        $query = $this->db->query(" SELECT * FROM `article` WHERE `kategori` = 'Nutrisi' AND `jenis_artikel` = 'Artikel Anjing'
        ");
        return $query->result();
    }

    public function artikel_kucing()
    {
        $query = $this->db->query(" SELECT * FROM `article` WHERE `jenis_artikel` = 'Artikel Kucing' 
        ");
        return $query->result();
    }

    public function penyakit_kucing()
    {
        $query = $this->db->query(" SELECT * FROM `article` WHERE `kategori` = 'Penyakit' AND `jenis_artikel` = 'Artikel Kucing'  
        ");
        return $query->result();
    }

    public function vaksin_kucing()
    {
        $query = $this->db->query(" SELECT * FROM `article` WHERE `kategori` = 'Vaksin' AND `jenis_artikel` = 'Artikel Kucing' 
        ");
        return $query->result();
    }

    public function reproduksi_kucing()
    {
        $query = $this->db->query(" SELECT * FROM `article` WHERE `kategori` = 'Reproduksi' AND `jenis_artikel` = 'Artikel Kucing' 
        ");
        return $query->result();
    }

    public function nutrisi_kucing()
    {
        $query = $this->db->query(" SELECT * FROM `article` WHERE `kategori` = 'Nutrisi' AND `jenis_artikel` = 'Artikel Kucing'
        ");
        return $query->result();
    }

    public function editArticle($id, $judul, $isi, $penulis, $tanggal, $jenis_artikel, $kategori)
    {
        $query = $this->db->query("UPDATE `article` SET `judul`='$judul', `isi`='$isi', `penulis`='$penulis', `tanggal`='$tanggal', `jenis_artikel`='$jenis_artikel', `kategori`='$kategori' WHERE `id`='$id'");
        return $query;
    }

    public function deleteArticle($id)
    {
        $this->db->delete('article', ['id' => $id]);
    }

    public function pencarian($keyword = null)
    {
        $query = $this->db->query("SELECT * FROM `article` WHERE `judul` LIKE '%$keyword%' OR `isi` LIKE '%$keyword%' OR `jenis_artikel` LIKE '%$keyword%'");
        return $query->result();
    }
}
