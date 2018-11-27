<?php

class Doctor extends CI_Controller {

    public function index()
	{
		$this->load->view('doc_navbar');
	}

	public function createAppointment(){
		$this->load->view('doc_navbar');
		$this->load->view('Doctor/create_appointment');
	}

	public function patientRecords(){
		$this->load->view('doc_navbar');
		$this->load->view('Doctor/view_patient_records');
	}

	public function viewRecords(){
		
		$this->load->model('Doctor_model');
		$data['records'] = $this->Doctor_model->getPatientRecords();
		$this->load->view('doc_navbar');
		$this->load->view('Doctor/view_patient_records',$data);

	}

	public function viewAppointments(){
		$this->load->model('Doctor_model');
		$data['tAppoints'] = $this->Doctor_model->getTodaysAppoints();
		
		$this->load->view('doc_navbar');
		$this->load->view('Doctor/view_appointments');
	}

	public function todayAppoints(){
		$this->load->model('Doctor_model');
		$data['tAppoints'] = $this->Doctor_model->getTodaysAppoints();
		redirect('../Doctor/viewAppointments');

	}
	
}

?>