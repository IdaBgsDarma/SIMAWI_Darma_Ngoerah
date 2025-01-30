<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('authModel');
    }

    // Halaman login
    public function login() {
        if ($this->input->post()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->authModel->get_user($email);

            if ($user && password_verify($password, $user['password'])) {
                // Set session
                $this->session->set_userdata([
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'role' => $user['role']
                ]);

                // Redirect berdasarkan role
                if ($user['role'] === 'admin') {
                    redirect('user');
                } else {
                    redirect('dokter');
                }
            } else {
                $this->session->set_flashdata('error', 'Username atau Password salah');
                redirect('auth/login');
            }
        }

        $this->load->view('auth/login');
    }

    // Logout
    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
