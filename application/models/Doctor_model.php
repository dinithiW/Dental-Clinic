<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Doctor_model extends CI_Model{
	
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public $success = 20;

	public function getPatientRecords(){

		$patient_id = $_POST['la'];
        $this->db->select('treatment');
        $this->db->select('date');
        $this->db->select('remarks');
        $this->db->from('patient_records');
        $this->db->where('patient_id',$patient_id);

        $query = $this->db->get();
        return $query->result();
	}

	public function getServices(){
        $query = $this->db->get('services');
        return $query->result();
	}

	public function editService($service_id){

		$this->db->select('*');
		$this->db->from('services');
        $this->db->where('service_id',$service_id);
        $query = $this->db->get();
        return $query->first_row();
	}

	public function updateService($service_id){

		$service = $_POST['service_name'];
		$price = $_POST['price'];
		$instalments = $_POST['instalments'];
		$data = array(
		'service_id' => $service_id,
        'service_name' => $service,
        'price' => $price,
        'instalments' => $instalments
		);
$this->db->replace('services', $data);
	$rows = $this->db->affected_rows() ;
	//session_start();
	$success = 1;
	if($rows==1){
		$success = 1;
		
	}else{
		$success = 0;
	}

	return $success;
	}

	

	public function viewPayments(){
		$patient_id = $_POST['patient_id'];

        $this->db->select('amount_paid');
        $this->db->from('instalments');
        $this->db->where('patient_id',$patient_id);

        $amount = $this->db->get();

        $this->db->select('amount_paid');
        $this->db->from('instalments');
        $this->db->where('patient_id',$patient_id);
        return $query->result();
	}

	public function updatePayment($param1){

		echo"$param1";
	}

	public function deleteService($service_id){
		$this->db->where('service_id', $service_id);
		$this->db->delete('services');
	}

	public function addService(){
		$array = array(
        'service_name' => $_POST['service_name'],
        'price' => $_POST['price'],
        'instalments' => $_POST['instalments']
);

$this->db->set($array);
$this->db->insert('services');
	}


}

?>