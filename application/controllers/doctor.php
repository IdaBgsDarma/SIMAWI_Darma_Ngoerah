<?php

class doctor extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('userModel');
        $this->load->library('form_validation');
        // check_login();
        // check_role('doctor');
    }

    public function index()
    {
        $data['judul'] = 'Laman Dokter';
        // $data['user'] = $this->userModel->getAll();
        $this->load->view('doctor/templates/header', $data);
        $this->load->view('dashboard/index');
        $this->load->view('doctor/templates/footer');
    }
}