<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Doctor_model extends CI_Model{
	
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

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

	//yet to implement
	public function editService(){

		$this->load->database();;
        $query = $this->db->get('services');
        return $query->result();
	}

	//yet to implement
	public function deleteService(){

		$this->load->database();
        $query = $this->db->get('services');
        return $query->result();
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

	
}

?>