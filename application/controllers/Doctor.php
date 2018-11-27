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
	
	public function viewServices(){
		
		$this->load->model('Doctor_model');
		$data['records'] = $this->Doctor_model->getServices();
		
		$this->load->view('Doctor/view_services',$data);
		$this->load->view('doc_navbar');
	}

	public function viewPayments(){
		$this->load->view('doc_navbar');
		$this->load->view('Doctor/view_payments');
	}

	public function viewInstalments(){
		$this->load->model('Doctor_model');
		$data['records'] = $this->Doctor_model->getPatientRecords();
		$this->load->view('doc_navbar');
		$this->load->view('Doctor/view_payments',$data);
	}

	public function updatePayment(){
		$this->load->model('Doctor_model');
		$data['records'] = $this->Doctor_model->getServices();
		
		$this->load->view('Doctor/update_payment',$data);
		$this->load->view('doc_navbar');

		
	}
}

?>