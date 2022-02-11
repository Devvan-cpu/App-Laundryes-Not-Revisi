<?php

class M_petugas extends CI_Model
{
    public function id_login()
    {
        $this->db->select('RIGHT(login_app.id_login,3) as kode', FALSE);
        $this->db->order_by('id_login', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('login_app');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "PGS" . $kodemax;
        return $kodejadi;
    }
    public function edit($id)
    {
        $this->db->where('id_login', $id);
        return $this->db->get('login_app')->row_array();
    }
    public function update($id_login, $data)
    {
        $this->db->where('id_login', $id_login);
        $this->db->update('login_app', $data);
    }
    public function hapus($id)
    {
        $this->db->where('id_login', $id);
        $this->db->delete('login_app');
    }
}
