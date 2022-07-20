<?php

class Registrasi extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_admin/header');
            $this->load->view('registrasi');
            $this->load->view('templates_admin/footer');
        } else {
            $data = array(
                'id'        => '',
                'nama'      => $this->input->POST('nama'),
                'email'     => $this->input->POST('email'),
                'password'  => $this->input->POST('password'),
                'role_id'   => 2,
            );

            $this->db->insert('tb_user', $data);
            redirect('Auth/login');
        }
    }
}
