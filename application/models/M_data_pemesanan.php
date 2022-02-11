<?php
class M_data_pemesanan extends CI_model
{
    public function getCustomer()
    {
        $get = $this->db->query("
        SELECT * from tb_pemesanan,
        tb_detail_pemesanan,
        tb_pakaian WHERE 
        tb_pakaian.id_pakaian =
        tb_detail_pemesanan.id_pakaian and 
        tb_pemesanan.id_pemesanan =
        tb_detail_pemesanan.id_pemesanan");
        return $get;
    }
}
