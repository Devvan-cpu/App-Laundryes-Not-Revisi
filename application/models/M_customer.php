<?php

class M_customer extends CI_Model
{
    public function id_customer()
    {
        $this->db->select('RIGHT(login_app.id_customer,3) as kode', FALSE);
        $this->db->order_by('id_customer', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('login_app');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "CTS" . $kodemax;
        return $kodejadi;
    }
    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
