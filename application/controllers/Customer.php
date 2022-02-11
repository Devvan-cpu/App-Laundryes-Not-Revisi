<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('status') != "login_customer") {
            redirect("auth");
        }
        $this->load->model('m_customer');
    }
    public function index()
    {
        $data['title'] = 'Registrasi | App Laundry';
        $this->load->view('bootstrap_customer/header', $data);
        $this->load->view('customer/index');
        $this->load->view('bootstrap_customer/footer');
    }
    public function pesan()
    {
        if ($this->session->userdata('status') != "login_customer") {
            redirect("auth");
        } else {
            $data['title'] = 'Order | App Laundry';
            $data['data']    = $this->db->get('tb_pakaian')->result();
            $this->load->view('bootstrap_customer/header', $data);
            // $this->load->view('customer/order1day', $data);
            $this->load->view('customer/order', $data);
            $this->load->view('bootstrap_customer/footer');
        }
    }

    public function aksi_order()
    {
        //input data pemesanan
        $value_pesan = array(
            'id_pemesanan' => '',
            'id_customer' => $this->session->userdata('id_customer'),
            'tgl_pesan' => $this->input->post('tgl_pesan'),
            'tgl_eksekusi' => '',
            'tgl_kembali' => '',
            'status_pesan' => 'Booking',
        );
        $this->db->insert('tb_pemesanan', $value_pesan);
        // pencarian id_pemesanan berdasarkan id customern dan tanggal pesan
        $where = array(
            'id_customer' => $this->session->userdata('id_customer'),
            'tgl_pesan' => $this->input->post('tgl_pesan'),
        );
        $query_data = $this->db->get_where('tb_pemesanan', $where)->result();
        foreach ($query_data as $qd) {
            echo  $id_pemesanan = $qd->id_pemesanan;
        }
        // pencarian data harga pada tabel pakaian
        $where_pakai = array(
            'id_pakaian' => $this->input->post('pilih_pakaian'),
        );
        $query_data_pakai = $this->db->get_where('tb_pakaian', $where_pakai)->result();
        foreach ($query_data_pakai as $qdp) {
            echo  $harga_pakaian = $qdp->harga_pakaian;
            echo  $id_pakaian = $qdp->id_pakaian;
        }
        // input data detail pemesanan
        $value_detail = array(
            'id_detail_pemesanan' => '',
            'id_pemesanan' => $id_pemesanan,
            'id_pakaian' => $id_pakaian,
            'jumlah_pakaian' => $this->input->post('jmlh_pakaian'),
            'harga_total' => $harga_pakaian * $this->input->post('jmlh_pakaian')
        );
        $this->db->insert('tb_detail_pemesanan', $value_detail);

        redirect('customer/list_order?id_pemesanan=' . $id_pemesanan);
    }
    public function list_order()
    {
        if ($this->session->userdata('status') != "login_customer") {
            redirect("auth");
        } else {
            $id_pemesanan = $this->input->get('id_pemesanan');
            $query_data_pakai = $this->db->query("SELECT * FROM tb_detail_pemesanan,tb_pakaian where tb_pakaian.id_pakaian=tb_detail_pemesanan.id_pakaian and tb_detail_pemesanan.id_pemesanan='$id_pemesanan'")->result();
            $query_pemesanan = $this->db->query("SELECT * from tb_pemesanan where id_pemesanan='$id_pemesanan'")->result();
            // $data_list_order = $this->db->query("SELECT 
            // tb_detail_pemesanan.id_detail_pemesanan, 
            // tb_pakaian.harga_pakaian,
            // tb_pakaian.jenis_pakaian,
            // tb_pemesanan.tgl_pesan,
            // tb_pemesanan.id_pemesanan,
            // tb_detail_pemesanan.id_pakaian, 
            // SUM(tb_detail_pemesanan.jumlah_pakaian) as sub_pakaian, 
            // SUM(tb_detail_pemesanan.jumlah_pakaian)*tb_pakaian.harga_pakaian as total_harga 
            // from tb_pemesanan,tb_detail_pemesanan,tb_pakaian 
            // where tb_pemesanan.id_pemesanan =tb_detail_pemesanan.id_pemesanan 
            // and tb_detail_pemesanan.id_pakaian=tb_pakaian.id_pakaian 
            // and tb_pemesanan.id_pemesanan='$id_pemesanan' 
            // group by tb_detail_pemesanan.id_pakaian, tb_detail_pemesanan.id_pemesanan asc")->result();
            $data['pemesanan'] = $query_pemesanan;
            $data['list_pakaian'] = $query_data_pakai;
            // $data['data_pakaian'] = $data_list_order;
            $data['title'] = 'Order | App Laundry';
            $data['data']    = $this->db->get('tb_pakaian')->result();
            $this->load->view('bootstrap_customer/header', $data);
            $this->load->view('customer/list_order', $data);
            $this->load->view('bootstrap_customer/footer');
        }
    }

    public function hapus_detail()
    {
        $id = $this->input->get('id');
        $id_pemesanan = $this->input->get('id_pemesanan');
        $this->db->query("DELETE from tb_detail_pemesanan where id_detail_pemesanan='$id'");
        redirect('customer/list_order?id_pemesanan=' . $id_pemesanan);
    }
    public function aksi_order_tambah()
    {
        $id_pemesanan = $this->input->get('id_pemesanan');
        // pencarian data harga pada tabel pakaian
        $where_pakai = array(
            'id_pakaian' => $this->input->post('pilih_pakaian'),
        );
        $query_data_pakai = $this->db->get_where('tb_pakaian', $where_pakai)->result();
        foreach ($query_data_pakai as $qdp) {
            echo  $harga_pakaian = $qdp->harga_pakaian;
            echo  $id_pakaian = $qdp->id_pakaian;
        }
        // input data detail pemesanan
        $value_detail = array(
            'id_detail_pemesanan' => '',
            'id_pemesanan' => $id_pemesanan,
            'id_pakaian' => $id_pakaian,
            'jumlah_pakaian' => $this->input->post('jmlh_pakaian'),
            'harga_total' => $harga_pakaian * $this->input->post('jmlh_pakaian')
        );
        $this->db->insert('tb_detail_pemesanan', $value_detail);

        redirect('customer/list_order?id_pemesanan=' . $id_pemesanan);
    }
    public function simpan_booking()
    {
        $id_pemesanan = $this->input->get('id_pemesanan');
        $query_data_pakai = $this->db->query("SELECT * FROM tb_detail_pemesanan,tb_pakaian where tb_pakaian.id_pakaian=tb_detail_pemesanan.id_pakaian and tb_detail_pemesanan.id_pemesanan='$id_pemesanan'")->result();
        $query_pemesanan = $this->db->query("SELECT * from tb_pemesanan where id_pemesanan='$id_pemesanan'")->result();
        $data['pemesanan'] = $query_pemesanan;
        $data['list_pakaian'] = $query_data_pakai;
        $data['title'] = 'Order | App Laundry';
        $data['data']    = $this->db->get('tb_pakaian')->result();
        $data['title'] = 'Konfirmasi Order | App Laundry';
        $this->load->view('bootstrap_customer/header', $data);
        $this->load->view('customer/checkout', $data);
        $this->load->view('bootstrap_customer/footer');
    }
    public function hapus_booking($id)
    {
        $where = array('id_pemesanan' => $id);
        $where2 = array('id_pemesanan' => $id);
        $query = $this->m_customer->hapus($where, 'tb_pemesanan');
        $query = $this->m_customer->hapus($where2, 'tb_detail_pemesanan');
        if ($query = true) {
            $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Data Sudah Di Hapus</div>');
            redirect('customer/pesan');
        }
    }
    public function print_booking()
    {
        $id_pemesanan = $this->input->get('id_pemesanan');
        $query_data_pakai = $this->db->query("SELECT * FROM tb_detail_pemesanan,tb_pakaian where tb_pakaian.id_pakaian=tb_detail_pemesanan.id_pakaian and tb_detail_pemesanan.id_pemesanan='$id_pemesanan'")->result();
        $query_pemesanan = $this->db->query("SELECT * from tb_pemesanan where id_pemesanan='$id_pemesanan'")->result();
        // $data_list_order = $this->db->query("SELECT 
        // tb_detail_pemesanan.id_detail_pemesanan, 
        // tb_pakaian.harga_pakaian,
        // tb_pakaian.jenis_pakaian,
        // tb_pemesanan.tgl_pesan,
        // tb_pemesanan.id_pemesanan,
        // tb_detail_pemesanan.id_pakaian, 
        // SUM(tb_detail_pemesanan.jumlah_pakaian) as sub_pakaian, 
        // SUM(tb_detail_pemesanan.jumlah_pakaian)*tb_pakaian.harga_pakaian as total_harga 
        // from tb_pemesanan,tb_detail_pemesanan,tb_pakaian 
        // where tb_pemesanan.id_pemesanan =tb_detail_pemesanan.id_pemesanan 
        // and tb_detail_pemesanan.id_pakaian=tb_pakaian.id_pakaian 
        // and tb_pemesanan.id_pemesanan='$id_pemesanan' 
        // group by tb_detail_pemesanan.id_pakaian, tb_detail_pemesanan.id_pemesanan asc")->result();
        $data['pemesanan'] = $query_pemesanan;
        $data['list_pakaian'] = $query_data_pakai;
        // $data['data_pakaian'] = $data_list_order;
        $data['title'] = 'Order | App Laundry';
        $data['data']    = $this->db->get('tb_pakaian')->result();
        $data['data1']    = $this->db->get_where('login_app', 'role_id = 3')->result();
        $this->load->view('bootstrap_customer/header', $data);
        $this->load->view('customer/data_print_booking', $data);
        $this->load->view('bootstrap_customer/footer');
    }
    public function order4()
    {
        if ($this->session->userdata('status') != "login_customer") {
            redirect("auth");
        } else {
            $data['title'] = 'Order | App Laundry';
            $this->load->view('bootstrap_customer/header', $data);
            $this->load->view('customer/ordersatuan');
            $this->load->view('bootstrap_customer/footer');
        }
    }
    public function contact()
    {
        $data['title'] = 'Order | App Laundry';
        $this->load->view('bootstrap_customer/header', $data);
        $this->load->view('customer/contact');
        $this->load->view('bootstrap_customer/footer');
    }
    public function profile()
    {
        $data['title'] = 'Order | App Laundry';
        $data['data']    = $this->db->get_where('login_app', 'role_id = 3')->row_array();
        $this->load->view('bootstrap_customer/header', $data);
        $this->load->view('customer/profile', $data);
        $this->load->view('bootstrap_customer/footer');
    }
    public function riwayat_order()
    {
        $data['title'] = 'Riwayat Pesanan | App Laundry';
        $data['list_pakaian'] = $this->db->query("select * from tb_pemesanan left join login_app on login_app.id_customer=tb_pemesanan.id_customer where status_pesan !='lunas'")->result();
        // $data['data']    = $this->db->get_where('login_app', 'role_id = 3')->row_array();
        $this->load->view('bootstrap_customer/header', $data);
        $this->load->view('customer/riwayat_pesanan', $data);
        $this->load->view('bootstrap_customer/footer');
    }
}
