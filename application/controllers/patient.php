<?php 

class patient extends CI_Controller 
{
    public function __construct ()
    {
        parent::__construct();
        $this->load->model('patientModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Patient';
        $data['patient'] = $this->patientModel->getAllPatient();
        $this->load->view('templates/header', $data);
        $this->load->view('patient/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Registrasi Pasien';
        
        $this->form_validation->set_rules('record_number', 'Record_Number', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('birth', 'Birth', 'required');
        $this->form_validation->set_rules('nik', 'Nik', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('blood_type', 'Blood_Type', 'required');
        $this->form_validation->set_rules('weight', 'Weight', 'required');
        $this->form_validation->set_rules('height', 'Height', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('patient/tambahPatient');
            $this->load->view('templates/footer');
        }else{
            $this->patientModel->tambahPatient();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('patient');
        }
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Pasien";
        $data['patient'] = $this->patientModel->getPatientById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('patient/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'Form Edit Data Pasien';
        $data['patient'] = $this->patientModel->getPatientById($id);
        
        $this->form_validation->set_rules('record_number', 'Record_Number', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('birth', 'Birth', 'required');
        $this->form_validation->set_rules('nik', 'Nik', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('blood_type', 'Blood_Type', 'required');
        $this->form_validation->set_rules('weight', 'Weight', 'required');
        $this->form_validation->set_rules('height', 'Height', 'required');

        if($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('patient/editPatient', $data);
            $this->load->view('templates/footer');
        }else{
            $this->patientModel->ubahPatient();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('patient');
        }
    }

    public function hapus($id)
    {
        $this->patientModel->hapusPatient($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('patient');
    }

}