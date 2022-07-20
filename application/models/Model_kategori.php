<?php

class Model_kategori extends CI_Model
{

    public function data_hoodie()
    {

        return $this->db->get_where("tb_barang", array('kategori' => 'hoodie'));
    }

    public function data_sweater()
    {

        return $this->db->get_where("tb_barang", array('kategori' => 'sweater'));
    }

    public function data_tshirt()
    {

        return $this->db->get_where("tb_barang", array('kategori' => 'tshirt'));
    }
}
