<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Disposisi_staff extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_disposisi_staff');
    }

    function tampil_disposisi_staff()
    {
        $data['disposisi'] = $this->M_disposisi_staff->tampil_disposisi_staff();
        $this->load->view('staff/disposisi_staff',$data);
    }

    function lihat_disposisi_staff()
    {
        $data['disposisi'] = $this->M_disposisi_staff->lihat_disposisi_staff();
        $this->load->view('staff/lihat_data_disposisi',$data);
    }
}