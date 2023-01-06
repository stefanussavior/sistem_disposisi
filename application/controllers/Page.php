<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Page extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url();
            redirect($url);
        }
    }

    function index()
    {
        $this->load->view('dashboard');
    }

    function data_admin()
    {
        if ($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2') {
            $this->load->view('admin/halaman_admin');
        } else {
            echo "Anda tidak berhak masuk ke halaman ini";
        }
    }

    function input_disposisi()
    {
        if ($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2') {
            $this->load->view('halaman_disposisi');
        } else {
            echo "Anda tidak dapat masuk ke dalam halaman ini";
        }
    }

    function lihat_disposisi()
    {
        if ($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3') {
            $this->load->view('lihat_disposisi');
        } else {
            echo "Anda tidak dapat masuk ke dalam halaman ini";
        }
    }
}