<?php

class dashboard extends CI_Controller {
    public function index ($nama = ''){
        $data['judul'] = 'Halaman Utama';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/dashboard', $nama);
        $this->load->view('templates/footer');
    }
}