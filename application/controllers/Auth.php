<?php

class Auth extends CI_Controller
{

    public function login()
    {

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates_admin/header');
            $this->load->view('form_login');
            $this->load->view('templates_admin/footer');
        } else {
            $auth = $this->model_auth->cek_login();

            if ($auth == false) {
                $this->session->set_flashdata('pesan', '
                <div class="alert  alert-danger fade show" role="alert">
                <strong>Email or Password Wrong!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
              ');
                redirect('Auth/login');
            } else {


                $this->session->set_userdata('email', $auth->email);
                $this->session->set_userdata('role_id', $auth->role_id);

                switch ($auth->role_id) {
                    case 1:
                        redirect('admin/Dashboard_admin');
                        break;
                    case 2:
                        redirect('Welcome');
                        break;
                    default:
                        break;
                }
            }
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
