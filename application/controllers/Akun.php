<?php 
defined('BASEPATH') or exit('No Script Access Allowed');
class Akun extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_akun');
        $this->load->helper('stefanus_helper');
    }

    function tampil_data_akun()
    {
        $data['admin'] = $this->M_akun->tampil_data_akun();
        $this->load->view('admin/akun/data_akun',$data);
    }
}