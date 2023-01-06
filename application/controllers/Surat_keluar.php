<?php 
defined('BASEPATH') or exit('No Script Access Allowed');

class Surat_keluar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_surat_keluar');
        $this->load->helper('stefanus_helper');
    }

    function tampil_surat_keluar()
    {
        $data['surat_keluar'] = $this->M_surat_keluar->tampil_surat_keluar();
        $this->load->view('admin/surat_keluar/surat_keluar',$data);
    }

    function simpan_surat_keluar()
    {
        $this->form_validation->set_rules('nomor_surat_keluar','nomor_surat_keluar','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('tanggal_surat_keluar','tanggal_surat_keluar','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('tujuan_surat','tujuan_surat','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('perihal_surat_keluar','perihal_surat_keluar','trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run()==true) {
            $data = array(
                'nomor_surat_keluar' => $this->input->post('nomor_surat_keluar'),
                'tanggal_surat_keluar' => $this->input->post('tanggal_surat_keluar'),
                'tujuan_surat' => $this->input->post('tujuan_surat'),
                'perihal_surat_keluar' => $this->input->post('perihal_surat_keluar'),
            );
            $this->session->set_flashdata('Data Berhasil di input','Terima kasih');
            $this->db->insert('surat_keluar',$data);
            redirect('Surat_keluar/tampil_surat_keluar');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('Surat_keluar/tampil_surat_keluar');
        }
        
    }

    function edit_surat_keluar()
    {
        $id = $this->input->post('id');
        $tanggal_surat_keluar = $this->input->post('tanggal_surat_keluar');
        $nomor_surat_keluar = $this->input->post('nomor_surat_keluar');
        $tujuan_surat = $this->input->post('tujuan_surat');
        $perihal_surat_keluar = $this->input->post('perihal_surat_keluar');
        $this->M_surat_keluar->edit_surat_keluar($id,$tanggal_surat_keluar,$nomor_surat_keluar,$tujuan_surat,$perihal_surat_keluar);

        redirect('Surat_keluar/tampil_surat_keluar');
    }

    function hapus_surat_keluar()
    {
        $id = $this->input->post('id');
        $this->M_surat_keluar->hapus_surat_keluar($id);
        redirect('Surat_keluar/tampil_surat_keluar');
    }

    function get_cetak_surat_keluar($id)
    {
        $data['surat_keluar'] = $this->M_surat_keluar->get_cetak_surat_keluar($id);
        $this->load->view('admin/surat_keluar/cetak_surat_keluar',$data);
    }

    function data_tampil_surat_keluar()
    {
        $data['surat_keluar'] = $this->M_surat_keluar->get_tampil_surat_keluar();
        $this->load->view('admin/surat_keluar/cetak_data_surat_keluar',$data);
    }
}