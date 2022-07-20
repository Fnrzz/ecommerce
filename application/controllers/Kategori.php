<?php

class Kategori extends CI_Controller
{

    public function hoodie()
    {
        $data['hoodie'] = $this->model_kategori->data_hoodie()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('hoodie', $data);
        $this->load->view('templates/footer');
    }

    public function sweater()
    {
        $data['sweater'] = $this->model_kategori->data_sweater()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('sweater', $data);
        $this->load->view('templates/footer');
    }

    public function tshirt()
    {
        $data['tshirt'] = $this->model_kategori->data_tshirt()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('tshirt', $data);
        $this->load->view('templates/footer');
    }
}
