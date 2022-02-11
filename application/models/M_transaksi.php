<?php
class M_transaksi extends CI_model
{
    public function getCustomer()
    {
        $get = $this->db->query('SELECT * from login_app,tb_pemesanan,
        tb_detail_pemesanan,
        tb_pakaian WHERE login_app.id_customer=tb_pemesanan.id_customer and
        tb_pakaian.id_pakaian =
        tb_detail_pemesanan.id_pakaian and 
        tb_pemesanan.id_pemesanan =
        tb_detail_pemesanan.id_pemesanan group by tb_pemesanan.id_pemesanan asc');
        return $get;
    }
    public function edit($id)
    {
        $this->db->where('id_pemesanan', $id);
        return $this->db->get('tb_pemesanan')->row_array();
    }
    public function update($id_pemesanan, $data)
    {
        $this->db->where('id_pemesanan', $id_pemesanan);
        $this->db->update('tb_pemesanan', $data);
    }
}
