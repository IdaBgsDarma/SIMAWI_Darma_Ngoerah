<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class authModel extends CI_Model {

    public function get_user($email) {
        return $this->db->get_where('users', ['email' => $email])->row_array();
    }
}
