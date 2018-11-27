<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
	}
	public function editProfile(){
		$this->load->model("Patient_model");
		$userid=$this->session->user_id;
		$data['pData']=$this->Patient_model->getPatientData($userid);
		$this->load->view('editProfile_view',$data); 
	}

	
	public function reserveTreatment($year=null,$month=null){
		if(!$year){
			$year=date("Y");
		}
		if(!$month){
			$month=date("m");
		}
		 $this->load->model('Patient_model');
         $data['calendar']=$this->Patient_model->generate($year,$month);
		 $userid=$this->session->user_id;
		// $data['cusData']=$this->Patient_model->getPatientData($userid);
		 $data['resData']=$this->Patient_model->getReservations($year,$month);
		// $data['detRes']=$this->Customer_model->getReservationDetails();
		 $data['year']=$year; 
		 $data['month']=$month;
		$this->load->view('cusAppointments',$data); 
	}

	public function viewAppoints(){

		$this->load->model('Patient_model');
		$data['resData']=$this->Patient_model->getReservationDetails();
		$this->load->view('myAppointments',$data);
	}

	public function viewProfile(){
		$this->load->model('Patient_model');
		$data['det']=$this->Patient_model->getPatientData();
		$this->load->view('patProfile_view',$data);
	}

	public function deleteAppoint($id){
		$this->load->model('Patient_model');
		$this->Patient_model->delAppointment($id);
		redirect('../Patient/viewAppoints');
	}
	
	public function editProfileDetails(){
		$this->load->model("Patient_model");
		$id= $this->session->user_id;
		$data = array(
			'patient_id' =>$id,
			'first_name' => $this->input->post('fname'),
			'last_name' => $this->input->post('lname'),
			'email' => $this->input->post('email'),
			'address' => $this->input->post('address'),
			'contact_no' => $this->input->post('cno'),
			'age' => $this->input->post('age')
		);
		$this->Patient_model->editProfile($id,$data);
		$this->session->set_flashdata('patientUpdate_success','Details Updated!');
		redirect('Patient/editProfile');
	}
	public function changePassword(){
		$this->load->model("Patient_model");
		$old=$this->input->post('old');
		$encripted_new=password_hash($this->input->post('new'),PASSWORD_BCRYPT);
		$this->Patient_model->changePassword($old,$encripted_new);
		redirect('Patient/editProfile');
	}


	public function Reservation(){
		$this->load->model("Patient_model");
		$appt_date=$this->input->post('res_date');
		$time_slot=$this->input->post('time_slot');
		$lastApptno=$this->Patient_model->getApptNo($appt_date,$time_slot);
		$userid=$this->session->user_id;
		$data = array(
			'patient_id'=> $userid,
			'appointment_date' => $this->input->post('res_date'),
			'time' => $this->input->post('time_slot'),
			'appt_no' => $lastApptno+1 
		);
		$this->Patient_model->addReservation($data);
		$this->session->set_flashdata('reservation_success','Appointment Added Successfully! 
		Your appaointment number is '.$lastApptno+1);
		redirect('../Patient/reserveTreatment');
	}

	

	public function logout(){
		$this->session->sess_destroy();
		redirect('../Home');
	}


}
?>