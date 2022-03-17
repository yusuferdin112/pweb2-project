<?php

class Kategori extends CI_Controller {

    public function la_liga(){
        $data['la_liga'] = $this->model_kategori->kategori_la_liga()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('la_liga', $data);
        $this->load->view('templates/footer');
    }

    public function serie_a(){
        $data['serie_a'] = $this->model_kategori->kategori_serie_a()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('serie_a', $data);
        $this->load->view('templates/footer');
    }

    public function premier_league(){
        $data['premier_league'] = $this->model_kategori->kategori_premier_league()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('premier_league', $data);
        $this->load->view('templates/footer');
    }

    public function bundes_liga(){
        $data['bundes_liga'] = $this->model_kategori->kategori_bundes_liga()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bundes_liga', $data);
        $this->load->view('templates/footer');
    }
}