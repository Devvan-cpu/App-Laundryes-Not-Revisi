<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_customer');
    }
    public function index()
    {
        $data['title'] = 'Log In | App Laundry';
        $this->load->view('template_lte/header', $data);
        $this->load->view('auth/login');
        $this->load->view('template_lte/footer');
    }
    public function login()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'email' => $email,
            'name' => $name,
            'password' => $password
        );
        $query_login = $this->db->get_where('login_app', $where);
        echo $val_login = $query_login->num_rows();
        if ($val_login == 1) {
            $data_login = $query_login->result();
            echo "anda berhasil login";
            foreach ($data_login as $dl) {
                $role_id = $dl->role_id;
                $id_customer = $dl->id_customer;
            }
            if ($role_id == 1) {
                $data_session = array(
                    'email' => $email,
                    'name' => $name,
                    'status' => "login_admin"
                );
                $this->session->set_userdata($data_session);
                redirect('admin?id');
            } else if ($role_id == 2) {
                $data_session = array(
                    'email' => $email,
                    'name' => $name,
                    'status' => "login_petugas"
                );
                $this->session->set_userdata($data_session);
                redirect('petugas');
            } else if ($role_id == 3) {
                $data_session = array(
                    'email' => $email,
                    'name' => $name,
                    'status' => "login_customer",
                    'id_customer' => $id_customer
                );
                $this->session->set_userdata($data_session);
                redirect('customer');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal Login</div>');
            redirect('auth');
        }
    }
    public function register()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[login_app.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['id_customer'] = $this->m_customer->id_customer();
            $data['title'] = 'Registrasi | App Laundry';
            $this->load->view('template_lte/header', $data);
            $this->load->view('auth/register', $data);
            $this->load->view('template_lte/footer');
        } else {
            $data = array(
                'id_customer' => $this->input->post('id_customer', true),
                'name' => $this->input->post('name', true),
                'email' => $this->input->post('email', true),
                'password' => $this->input->post('password'),
                'no_hp' => $this->input->post('no_hp'),
                'alamat' => $this->input->post('alamat'),
                'role_id' => 3,
                'date_created' => time()
            );
            $this->db->insert('login_app', $data);
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Logout</div>');
        redirect('auth');
    }
}
