<?php

class patientModel extends CI_Model{
    public function getAllPatient()
    {
        return $this->db->get('patient')->result_array();
        
    }

    public function getPatientById($id)
    {
        return $this->db->get_where('patient', ['id' => $id])->row_array();
    }

    public function tambahPatient()
    {
        $data = [
            "record_number" => $this->input->post('record_number', true),
            "name" => $this->input->post('name', true),
            "birth" => $this->input->post('birth', true),
            "nik" => $this->input->post('nik', true),
            "phone" => $this->input->post('phone', true),
            "address" => $this->input->post('address', true),
            "blood_type" => $this->input->post('blood_type', true),
            "weight" => $this->input->post('weight', true),
            "height" => $this->input->post('height', true)
        ]; 
        return $this->db->insert('patient', $data);
    }

    public function updatePatient($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('patient', $data);
    }

    public function hapusPatient($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('patient');
    }

    public function ubahPatient()
    {
        $data = [
            "record_number" => $this->input->post('record_number', true),
            "name" => $this->input->post('name', true),
            "birth" => $this->input->post('birth', true),
            "nik" => $this->input->post('nik', true),
            "phone" => $this->input->post('phone', true),
            "address" => $this->input->post('address', true),
            "blood_type" => $this->input->post('blood_type', true),
            "weight" => $this->input->post('weight', true),
            "height" => $this->input->post('height', true)
        ]; 
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('patient', $data);
    }

}

