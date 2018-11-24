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
}

?>