<?php
class mrModel extends CI_Model {
    public function getAllMr() {
        return $this->db->get('patient_history')->result();
    }

    public function get_medical_record($id) {
        return $this->db->get_where('patient_history', array('Id' => $id))->row();
    }

    // public function createMR($data) {
    //     $this->db->insert('patient_history', $data);
    // }

    // public function tambahMr()
    // {
    //     $data = [
    //         "record_number" => $this->input->post('record_number', true),
    //         "date_visit" => $this->input->post('date_visit', true),
    //         "registered_by" => $this->input->post('registered_by', true),
    //         "consultation_by" => $this->input->post('consultation_by', true),
    //         "symptoms" => $this->input->post('symptoms', true),
    //         "doctor_diagnose" => $this->input->post('doctor_diagnose', true),
    //         "icd10_kode" => $this->input->post('icd10_kode', true),
    //         "icd10_name" => $this->input->post('icd10_name', true),
    //         "is_done" => $this->input->post('is_done', true)
    //     ]; 
    //     return $this->db->insert('patient_history', $data);
    // }

    public function create_medical_record($data) {
        $this->db->insert('patient_history', $data);
    }

    public function updateMr($id, $data) {
        $this->db->where('ID', $id);
        $this->db->update('patient_history', $data);
    }


    public function hapusMr($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('patient_history');
    }
}