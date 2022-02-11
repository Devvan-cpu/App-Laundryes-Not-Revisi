<?php
error_reporting(0);
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('status') != "login_admin") {
            redirect("auth");
        }
        $this->load->model('m_petugas');
        $this->load->model('m_pakaian');
        $this->load->model('m_transaksi');
        $this->load->model('m_data_pemesanan');
    }
    public function index()
    {
        $data['title'] = 'Admin | App Laundry';
        $data['name'] = $this->db->get_where('login_app', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template_sb/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template_sb/footer');
    }
    public function petugas()
    {
        if (isset($_GET['keyword'])) {
            $cari = $this->input->get('keyword');
            $data['keyword'] = $cari;
            $data['title'] = 'Data Petugas | App Laundry';
            $data['data']  = $this->db->query("select * from login_app where role_id='2' and name like '%$cari%'")->result();
        } else {
            $data['keyword'] = null;
            $data['title'] = 'Data Petugas | App Laundry';
            $data['data']  = $this->db->get_where('login_app', 'role_id=2')->result();
            $data['name']  = $this->db->get_where('login_app', ['name' => $this->session->userdata('name')])->row_array();
        }
        $this->load->view('template_sb/header', $data);
        $this->load->view('admin/petugas', $data);
        $this->load->view('template_sb/footer');
    }
    public function tambah_petugas()
    {
        $data['title'] = 'Tambah Petugas | App Laundry';
        $data['id_login'] = $this->m_petugas->id_login();
        $data['data'] = $this->db->get('role_id')->result();
        $data['name'] = $this->db->get_where('login_app', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template_sb/header', $data);
        $this->load->view('admin/tambah_petugas', $data);
        $this->load->view('template_sb/footer');
    }
    public function edit_petugas($id)
    {
        $data['title'] = 'Tambah Petugas | App Laundry';
        $data['id_login']     = $this->m_petugas->edit($id);
        $data['data'] = $this->db->get('role_id')->result();
        $data['name'] = $this->db->get_where('login_app', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template_sb/header', $data);
        $this->load->view('admin/edit_petugas', $data);
        $this->load->view('template_sb/footer');
    }
    function insert_petugas()
    {
        $data = array(
            'id_login' => $this->input->post('id_login'),
            'name' => $this->input->post('name', true),
            'email' => $this->input->post('email', true),
            'password' => $this->input->post('password'),
            'role_id' => $this->input->post('role_id'),
            'date_created' => time()
        );
        $insert = $this->db->insert('login_app', $data);
        if ($insert) :
            $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Sudah Terdaftar</div>');
            redirect('admin/petugas');
        else :
            $this->session->set_flashdata('alert', $insert);
            redirect('admin/petugas');
        endif;
    }
    public function update_petugas()
    {
        $id_login = $this->input->post('id_login');
        $data = array(
            'id_login' => $this->input->post('id_login'),
            'name' => $this->input->post('name', true),
            'email' => $this->input->post('email', true),
            'password' => $this->input->post('password'),
            'role_id' => $this->input->post('role_id'),
            'date_created' => time()
        );
        $query = $this->m_petugas->update($id_login, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Sudah Di Update</div>');
            redirect('admin/petugas');
        }
    }
    public function hapus_petugas($id)
    {
        $query = $this->m_petugas->hapus($id);
        if ($query = true) {
            $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Data Sudah Di Hapus</div>');
            redirect('admin/petugas');
        }
    }
    public function pakaian()
    {
        if (isset($_GET['keyword'])) {
            $cari = $this->input->get('keyword');
            $data['keyword'] = $cari;
            $data['data']  = $this->db->query("select * from tb_pakaian where jenis_pakaian like '%$cari%'")->result();
        } else {
            $data['title'] = 'Jenis Pakaian | App Laundry';
            $data['data']    = $this->db->get('tb_pakaian')->result();
            $data['name'] = $this->db->get_where('login_app', ['name' => $this->session->userdata('name')])->row_array();
        }
        $this->load->view('template_sb/header', $data);
        $this->load->view('admin/pakaian', $data);
        $this->load->view('template_sb/footer');
    }
    public function tambah_pakaian()
    {
        $data['title'] = 'Jenis Pakaian | App Laundry';
        $data['id_pakaian'] = $this->m_pakaian->id_pakaian();
        $data['name'] = $this->db->get_where('login_app', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template_sb/header', $data);
        $this->load->view('admin/tambah_pakaian', $data);
        $this->load->view('template_sb/footer');
    }
    public function edit_pakaian($id)
    {
        $data['title'] = 'Jenis Pakaian | App Laundry';
        $data['id_pakaian'] = $this->m_pakaian->edit($id);
        $data['name'] = $this->db->get_where('login_app', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template_sb/header', $data);
        $this->load->view('admin/edit_pakaian', $data);
        $this->load->view('template_sb/footer');
    }
    function insert_pakaian()
    {
        $data = array(
            'id_pakaian' => $this->input->post('id_pakaian'),
            'jenis_pakaian' => $this->input->post('jenis_pakaian', true),
            'harga_pakaian' => $this->input->post('harga_pakaian', true),
            'status_biaya' => $this->input->post('status_biaya')
        );
        $insert = $this->db->insert('tb_pakaian', $data);
        if ($insert) :
            $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Sudah Terdaftar</div>');
            redirect('admin/pakaian');
        else :
            $this->session->set_flashdata('alert', $insert);
            redirect('admin/pakaian');
        endif;
    }
    public function update_pakaian()
    {
        $id_pakai = $this->input->post('id_pakaian');
        $data = array(
            'id_pakaian' => $this->input->post('id_pakaian'),
            'jenis_pakaian' => $this->input->post('jenis_pakaian', true),
            'harga_pakaian' => $this->input->post('harga_pakaian', true),
            'status_biaya' => $this->input->post('status_biaya')
        );
        $query = $this->m_pakaian->update($id_pakai, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Sudah Di Update</div>');
            redirect('admin/pakaian');
        }
    }
    public function hapus_pakaian($id)
    {
        $query = $this->m_pakaian->hapus($id);
        if ($query = true) {
            $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Data Sudah Di Hapus</div>');
            redirect('admin/pakaian');
        }
    }
    public function data_pesanan()
    {
        $data_list_order = $this->db->query("SELECT 
            tb_detail_pemesanan.id_detail_pemesanan, 
            tb_detail_pemesanan.id_pemesanan, 
            tb_pakaian.harga_pakaian,
            tb_pakaian.jenis_pakaian,
            tb_pemesanan.tgl_pesan,
            tb_pemesanan.id_pemesanan,
            tb_pemesanan.status_pesan,
            tb_detail_pemesanan.id_pakaian, 
            SUM(tb_detail_pemesanan.jumlah_pakaian) as sub_pakaian, 
            SUM(tb_detail_pemesanan.jumlah_pakaian)*tb_pakaian.harga_pakaian as total_harga 
            from tb_pemesanan,tb_detail_pemesanan,tb_pakaian 
            where tb_pemesanan.id_pemesanan = tb_detail_pemesanan.id_pemesanan 
            and tb_detail_pemesanan.id_pakaian= tb_pakaian.id_pakaian and  status_pesan !='lunas'
            group by tb_detail_pemesanan.id_pakaian, tb_detail_pemesanan.id_pemesanan asc")->result();
        $data['title'] = 'Data Pesanan | App Laundry';
        // $data['data'] = $this->m_data_pemesanan->getCustomer()->result();
        // $data['data'] = $this->db->query("select * from tb_pemesanan,tb_detail_pemesanan,tb_pakaian where tb_detail_pemesanan.id_pemesanan=tb_pemesanan.id_pemesanan and tb_pakaian.id_pakaian=tb_detail_pemesanan.id_pakaian and status_pesan !='lunas'")->result();
        $data['name'] = $this->db->get_where('login_app', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template_sb/header', $data);
        $this->load->view('admin/data_pesanan', $data);
        $this->load->view('template_sb/footer');
    }
    public function data_transaksi()
    {
        $data['title'] = 'Data Transaksi | App Laundry';
        // $data['data'] = $this->m_transaksi->getCustomer()->result();
        $data['data'] = $this->db->query("select * from tb_pemesanan left join login_app on login_app.id_customer=tb_pemesanan.id_customer where status_pesan !='lunas'")->result();
        $data['name'] = $this->db->get_where('login_app', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template_sb/header', $data);
        $this->load->view('admin/data_transaksi', $data);
        $this->load->view('template_sb/footer');
    }
    public function update_status_pesan()
    {
        $id_pakai = $this->input->post('id_pemesanan');
        $data = array(
            'tgl_eksekusi' => $this->input->post('tgl_eksekusi'),
            'tgl_kembali' => $this->input->post('tgl_kembali'),
            'status_pesan' => $this->input->post('status_pesan')
        );
        $query = $this->m_transaksi->update($id_pakai, $data);
        if ($query = true) {
            $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Sudah Di Update</div>');
            redirect('admin/data_transaksi');
        }
    }
    public function laporan()
    {
        $data['title'] = 'Data Laporan | App Laundry';
        // $data['data'] = $this->m_transaksi->getCustomer()->result();
        $data['data'] = $this->db->query("select 
        tb_pemesanan.status_pesan,
        login_app.name,
        tb_pemesanan.tgl_kembali,
        tb_pemesanan.tgl_pesan,
        tb_pemesanan.id_pemesanan,
        sum(tb_detail_pemesanan.harga_total) as sub_total 
        from tb_pemesanan,
        tb_detail_pemesanan,
        login_app 
        where login_app.id_customer= tb_pemesanan.id_customer 
        and tb_pemesanan.id_pemesanan = tb_detail_pemesanan.id_pemesanan 
        and tb_pemesanan.status_pesan='lunas' 
        group by tb_pemesanan.id_pemesanan asc")->result();
        $data['name'] = $this->db->get_where('login_app', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template_sb/header', $data);
        $this->load->view('admin/data_laporan', $data);
        $this->load->view('template_sb/footer');
    }
    public function print_laporan()
    {
        $data['data'] = $this->db->query("select 
        tb_pemesanan.status_pesan,
        login_app.name,
        tb_pemesanan.tgl_kembali,
        tb_pemesanan.tgl_pesan,
        tb_pemesanan.id_pemesanan,
        sum(tb_detail_pemesanan.harga_total) as sub_total 
        from tb_pemesanan,
        tb_detail_pemesanan,
        login_app 
        where login_app.id_customer= tb_pemesanan.id_customer 
        and tb_pemesanan.id_pemesanan = tb_detail_pemesanan.id_pemesanan 
        and tb_pemesanan.status_pesan='lunas' 
        group by tb_pemesanan.id_pemesanan asc")->result();
        $data['title'] = 'Data Print Laporan | App Laundry';
        $this->load->view('template_sb/header', $data);
        $this->load->view('admin/print_data_laporan', $data);
        $this->load->view('template_sb/footer');
    }
}
