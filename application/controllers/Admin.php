<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
  {
   parent::__construct();
   $this->load->model('M_barang');
   $this->load->library('form_validation');
  
  }
    public function index()
    {
        $data['barang'] = $this->db->get('benda')->result_array();
        $this->load->view('templates/header');
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah () {
        $data['title']= 'tambah data';
        $this->form_validation->set_rules('nama_barang', 'Nama barang', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('tgl_input', 'Tanggal input', 'required');
        $this->form_validation->set_rules('tgl_update', 'Tanggal update', 'required');
        if ($this->form_validation->run() == FALSE){
          $this->load->view('templates/header', $data);
          $this->load->view('dashboard/tambah');
          $this->load->view('templates/footer');
        }else {
          $this->M_barang->tambahDataBarang();
          $this->session->set_flashdata('flash', 'ditambahkan');
          redirect('Admin');
        }
        
      }

      public function hapus($id_barang){
        $this->M_barang->hapusDataBarang($id_barang);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('Admin');
      }

      public function edit ($id_barang) {
        $data['title']= 'form ubah data siswa';
        $data['benda'] = $this->M_barang->getBarangById($id_barang);
        
        $this->form_validation->set_rules('nama_barang', 'Nama barang', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('tgl_input', 'Tanggal input', 'required');
        $this->form_validation->set_rules('tgl_update', 'Tanggal update', 'required');
        
        if ($this->form_validation->run() == FALSE){
          $this->load->view('templates/header', $data);
          $this->load->view('dashboard/edit', $data);
          $this->load->view('templates/footer');
        }else {
          $this->M_Barang->editDataBarang();
          $this->session->set_flashdata('flash', 'diubah');
          redirect('Admin');
        }
        
      }

    

}

