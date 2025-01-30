<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function check_login() {
    $CI =& get_instance();
    if (!$CI->session->userdata('user_id')) {
        redirect('auth/login');
    }
}

function check_role($role) {
    $CI =& get_instance();
    if ($CI->session->userdata('role') !== $role) {
        show_error('Anda tidak memiliki akses ke halaman ini.', 403);
    }
}
