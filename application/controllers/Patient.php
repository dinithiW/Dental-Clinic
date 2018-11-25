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
		$this->load->model("Customer_model");
		$userid=$this->session->user_id;
		$data['cusData']=$this->Customer_model->getCustomerData($userid);
		$this->load->view('customer_editProfile',$data); 
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

	public function deleteAppoint($id){
		$this->load->model('Patient_model');
		$this->Patient_model->delAppointment($id);
		redirect('../Patient/viewAppoints');
	}
	public function serviceHistory(){
		$this->load->model("Customer_model");
		$userid=$this->session->user_id;
		$vehicle_no=$this->input->post('vehicle_no');
		$data['vehicleData']=$this->Customer_model->getVehicleData($userid);
		$data['service']=$this->Customer_model->getServiceHistory($vehicle_no);
		$this->load->view('customer_serviceHistory',$data);
	}
	public function editProfileDetails(){
		$this->load->model("Customer_model");
		$nic= $this->input->post('nic');
		$data = array(
			'title' => $this->input->post('title'),
			'first_name' => $this->input->post('fname'),
			'last_name' => $this->input->post('lname'),
			'phone' => $this->input->post('cno'),
			'email' => $this->input->post('email'),
			'address' => $this->input->post('add')
		);
		$this->Customer_model->editProfile($nic,$data);
		$this->session->set_flashdata('customerUpdate_success','Details Updated!');
		redirect('index.php/customer/editProfile');
	}
	public function changePassword(){
		$this->load->model("Customer_model");
		$old=$this->input->post('old');
		$encripted_new=password_hash($this->input->post('new'),PASSWORD_BCRYPT);
		$this->Customer_model->changePassword($old,$encripted_new);
		redirect('index.php/customer/editProfile');
	}
	public function getServiceHistory(){
		$this->load->model("Customer_model");
		$vehicle_no=$this->input->post('vehicle_no');
		$data['serviceHis']=$this->Customer_model->getServiceHistory($vehicle_no);
		$this->load->view('customer_serviceHistory',$data); 
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

	public function Reschedule(){
		$this->load->model("Customer_model");
		$id= $this->input->post('id');
		$data=array(
			'title'=>$this->input->post('title'),
			'reservation_date' => $this->input->post('re_date')
		);
		$this->Customer_model->RescheduleRes($id,$data);
		$this->session->set_flashdata('reschedule_success','Rescheduled Successfully!');
		redirect('index.php/customer/reserveService');
	}

}
?>