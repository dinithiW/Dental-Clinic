<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Doctor_model extends CI_Model{
	
	public function getPatientRecords(){

		$patient_id = $_POST['la'];
		//echo"$patient_id";
		$this->load->database();
        $this->db->select('treatment');
        $this->db->select('date');
        $this->db->select('remarks');
        $this->db->from('patient_records');
        $this->db->where('patient_id',$patient_id);

        $query = $this->db->get();
        return $query->result();
	}
}

?>