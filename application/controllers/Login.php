<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_Model');
    }
    public function index()
    {
        $this->load->view('Login');
    }

    function auth()
    {
        $username = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_admin = $this->Login_Model->auth_admin($username,$password);

        if ($cek_admin->num_rows() > 0) {
            $data = $cek_admin->row_array();
            $this->session->set_userdata('masuk',TRUE);
            if ($data['level']=='1') {
                $this->session->set_userdata('akses','1');
                $this->session->set_userdata('ses_id',$data['nip']);
                $this->session->set_userdata('ses_nama',$data['nama']);
                redirect('index.php/page');
            } else {
                $this->session->set_userdata('akses','2');
                $this->session->set_userdata('ses_id',$data['nip']);
                $this->session->set_userdata('ses_nama',$data['nama']);
                redirect('index.php/page');
            }
        } else {
            $cek_staff = $this->Login_Model->auth_staff($username,$password);

            if ($cek_staff->num_rows() > 0) {
                $data = $cek_staff->row_array();
                $this->session->set_userdata('masuk',TRUE);
                $this->session->set_userdata('akses','3');
                $this->session->set_userdata('ses_id',$data['nip']);
                $this->session->set_userdata('ses_nama',$data['nama']);
                redirect('index.php/page');
            } else {
                $url = base_url('index.php/Login');
                echo $this->session->set_flashdata('msg','Username atau Password salah');
                redirect($url);
            }
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        $url = base_url('index.php/Login/index');
        redirect($url);
    }
}