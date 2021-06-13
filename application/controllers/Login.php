<?php

class Login extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_Model');
    }

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('auth/login');
        $this->load->view('templates/footer');
    }

    public function loginproses() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $query = $this->User_Model->getUserEmail($email);

        $hashResult = password_verify($password, $query['password']);

        $this->session->set_userdata('name', $query['name']);

        redirect('index.php/dashboard');
    }

    public function logout() {
        $this->sessions->unset_userdata();
        redirect('index.php/login');
    }
}

?>