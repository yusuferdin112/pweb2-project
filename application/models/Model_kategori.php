<?php 

class Model_kategori extends CI_Model{

    public function kategori_la_liga(){
        return $this->db->get_where("tb_barang", ['kategori' => 'la liga']);
    }
    public function kategori_serie_a(){
        return $this->db->get_where("tb_barang", ['kategori' => 'serie a']);
    }
    public function kategori_premier_league(){
        return $this->db->get_where("tb_barang", ['kategori' => 'premier league']);
    }
    public function kategori_bundes_liga(){
        return $this->db->get_where("tb_barang", ['kategori' => 'bundes liga']);
    }
}