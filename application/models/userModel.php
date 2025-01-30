<?php
// defined('BASEPATH') or exit('No direct script access allowed');

class userModel extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function getAllRole()
    {
        $this->db->select('DISTINCT(role)', false); // Ambil role unik
        $this->db->from('user');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambahUser()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "email" => $this->input->post('email', true),
            "password" => $this->input->post('password', true),
            "role" => $this->input->post('role', true)
        ]; 
        return $this->db->insert('user', $data);
    }

    public function updateUser($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }

    
    public function hapusUser($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }

    public function ubahUser()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "email" => $this->input->post('email', true),
            "password" => $this->input->post('password', true),
            "role" => $this->input->post('role', true)
        ]; 
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
}
