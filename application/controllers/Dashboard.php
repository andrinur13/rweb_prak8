<?php

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        
        if(!$this->session->userdata('name')) {
            $this->session->set_flashdata('alert', "<div class='alert alert-danger'>Anda harus login!!</div>");
            redirect('index.php/login');
        }
    }

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('dashboard/index');
        $this->load->view('templates/footer');
    }
}
