<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('status') != "login_petugas") {
            redirect("auth");
        }
    }
    public function index()
    {
        $data['title'] = 'Admin | App Laundry';
        $this->load->view('template_sb/header', $data);
        $this->load->view('petugas/index');
        $this->load->view('template_sb/footer');
    }
}
