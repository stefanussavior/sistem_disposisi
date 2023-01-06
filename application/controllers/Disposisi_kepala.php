<?php 
defined('BASEPATH') or exit ('No direct script access allowed');

class Disposisi_kepala extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_disposisi_kepala');
        // $this->load->helper('Stefanus_helper');
        
    }

    function tampil_disposisi_kepala()
    {
        $data['disposisi'] = $this->M_disposisi_kepala->tampil_disposisi_kepala();
        $this->load->view('kepala/tampil_data_disposisi',$data);
    }

    function lihat_disposisi_kepala()
    {
        $nomor_surat_masuk = $this->input->post('nomor_surat_masuk');
        $data['disposisi'] = $this->M_disposisi_kepala->GetNsm($nomor_surat_masuk);
        $this->load->view('kepala/lihat_data_disposisi',$data);
    }

    function acc()
    {
        $nomor_surat_masuk = $this->input->post('nomor_surat_masuk');
        $data = array(
            'status' => '3',
        );
        $this->db->where('nomor_surat_masuk',$nomor_surat_masuk);
        $this->db->update('disposisi',$data);
    }

}