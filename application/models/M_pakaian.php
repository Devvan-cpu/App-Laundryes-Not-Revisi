<?php

class M_pakaian extends CI_Model
{
    public function id_pakaian()
    {
        $this->db->select('RIGHT(tb_pakaian.id_pakaian,3) as kode', FALSE);
        $this->db->order_by('id_pakaian', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_pakaian');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "PKA" . $kodemax;
        return $kodejadi;
    }
    public function edit($id)
    {
        $this->db->where('id_pakaian', $id);
        return $this->db->get('tb_pakaian')->row_array();
    }
    public function update($id_pakaian, $data)
    {
        $this->db->where('id_pakaian', $id_pakaian);
        $this->db->update('tb_pakaian', $data);
    }
    public function hapus($id)
    {
        $this->db->where('id_pakaian', $id);
        $this->db->delete('tb_pakaian');
    }
}
