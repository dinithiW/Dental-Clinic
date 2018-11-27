<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Patient_model extends CI_Model{
	
	public function editProfile($nic,$data){
		$this->load->database("");
		$this->db->where('nic', $nic);
		$this->db->update('customer', $data);
		
	}
	public function getPatientData(){
		$this->load->database("");
		$userid=$this->session->user_id;
		$this->db->select("*");
		$this->db->from("patient");
		$this->db->where('patient_id',$userid);
		$result = $this->db->get();
		return $result->result();
		
	}
	public function changePassword($old,$new){
		$this->load->database("");
		$username=$this->session->username;
		$this->db->select("*");
		$this->db->from("users");
		$this->db->where('username',$username);
		$result = $this->db->get();
		$newPswrd=array(
			'password' => $new
		);
		if($result->num_rows() >0){
			$db_password=$result->row(0)->password;
			if(password_verify($old,$db_password)){
				$this->db->where('username', $username);
				$this->db->update('users', $newPswrd);
			}
			else{
				return false;
			}
		}
		else{
			return false;
		}
	}
	public function getVehicleData($userid){
		$this->load->database("");
		$this->db->select("*");
		$this->db->from("vehicle");
		$this->db->where('cus_id',$userid);
		$result = $this->db->get();
		return $result->result();
	}
	public function getServiceHistory($vehicle_no){
		$this->load->database("");
		$this->db->select("*");
		$this->db->from("jobcard");
		$this->db->where('vehicle_no',$vehicle_no);
		$this->db->order_by("date", "desc");
		$result = $this->db->get();
		$array1=array();$array2=array(array(array()));
		if ($result->num_rows() >0) {
			for ($i=0; $i < $result->num_rows(); $i++) { 
				$array1[$i]=$result->row($i)->job_id;
				$array2[$i][0][1]=$array1[$i];
				$array2[$i][0][0]=$result->row($i)->date;
			}
			for ($i=0; $i < $result->num_rows(); $i++) { 
				$this->db->select("*");
				$this->db->from("jobcard_service as js");
				$this->db->join("service as s","s.service_id=js.service_id");
				$this->db->where('js.job_id',$array1[$i]);
				$r = $this->db->get();
				if($r->num_rows() >0){
					
					for ($j=0; $j < $r->num_rows(); $j++) { 
						$array2[$i][1][$j]=$r->row($j)->service_name;
					}
				}
				
			}
			for ($i=0; $i < $result->num_rows(); $i++) { 
				$this->db->select("*");
				$this->db->from("jobcard_spare as jp");
				$this->db->join("spares as sp","sp.spare_id=jp.spare_id");
				$this->db->where('jp.job_id',$array1[$i]);
				$r = $this->db->get();
				if($r->num_rows() >0){
					
					for ($j=0; $j < $r->num_rows(); $j++) { 
						$array2[$i][2][$j]=$r->row($j)->name;
					}
				}
				
			}
		}
		else{
			return false;
		}
		
		return $array2;
	}
	//calendar generation
	public function generate($year,$month){
		$appointments=$this->getReservationDetails();
	
        $conf=array(
            'start_day'=>'sunday',
			'show_next_prev'=>true,
            'next_prev_url'=>base_url().'Patient/reserveTreatment'
		);
		$conf['template']='
		{table_open}<table border="0" cellpadding="0" cellspacing="0" class="calendar">{/table_open}

        {heading_row_start}<tr>{/heading_row_start}

        {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
        {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
        {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

        {heading_row_end}</tr>{/heading_row_end}

        {week_row_start}<tr>{/week_row_start}
        {week_day_cell}<td>{week_day}</td>{/week_day_cell}
        {week_row_end}</tr>{/week_row_end}

        {cal_row_start}<tr class="days">{/cal_row_start}
        {cal_cell_start}<td class="day">{/cal_cell_start}
        {cal_cell_start_today}<td>{/cal_cell_start_today}
        {cal_cell_start_other}<td class="other-month">{/cal_cell_start_other}

		{cal_cell_content}
		<div class="day_num">{day}</div>
		<div class="cont">{content}</div>
		{/cal_cell_content}
		{cal_cell_content_today}
		<div class="highlight day_num">{day}</div>
		<div class="content">{content}</div>
		{/cal_cell_content_today}

        {cal_cell_no_content}<div class="nCont" >{day}</div>{/cal_cell_no_content}
		{cal_cell_no_content_today}
		<div class="highlight day_num">{day}</div>	
		{/cal_cell_no_content_today}

        {cal_cell_blank}&nbsp;{/cal_cell_blank}

        {cal_cell_other}{day}{/cal_cel_other}
  
        {cal_cell_end}</td>{/cal_cell_end}
        {cal_cell_end_today}</td>{/cal_cell_end_today}
        {cal_cell_end_other}</td>{/cal_cell_end_other}
        {cal_row_end}</tr>{/cal_row_end}

        {table_close}</table>{/table_close}
		';
		$this->load->library('calendar',$conf); 
		$cal_data=$this->getReservations($year,$month); 
        return $this->calendar->generate($year,$month,$cal_data);
	}
	public function addReservation($data){
		$this->load->database("");
		$insert_data=$this->db->insert('appointments', $data);
		if($insert_data){
			return true;
		}else{
			return false;
		}
	}

	public function delAppointment($id){
		$this->load->database("");
		$del_data=$this->db->where('id',$id)->delete('appointments');
		if($del_data){
			return true;
		}else{
			return false;
		}
	}
	public function getApptNo($appt_date,$time_slot){
		$this->load->database("");
		$this->db->select('*');
		$this->db->from('appointments');
		$this->db->where('appointment_date',$appt_date);
		$this->db->where('time',$time_slot);
		$this->db->order_by('patient_id','desc')->limit(1); 
		$result=$this->db->get();
		if($result){
			return $result->row('appt_no');
		}else{
			return 0;
		}
	}
	public function getReservations($year,$month){
		$userid=$this->session->user_id;
		$maxres=20;
		$count;
		$day;
		
		$this->load->database("");
		$result=$this->db->select("*")->from("appointments")->like('appointment_date',$year.'-'.$month,'after')->get();
		//$this->db->from("reservations")->like('reservation_date','$year/$month','after');
		//$result = $this->db->get();
		$cal_data=array();
		foreach($result->result() as $row){
			$d;
			$day=substr($row->appointment_date,8,2);
			$count=0;
			if($userid==$row->patient_id){
				$cal_data[substr($row->appointment_date,8,2)]="booking"; 
				$d=substr($row->appointment_date,8,2);
				
			}
		
		foreach($result->result() as $r){
			if($day==substr($row->appointment_date,8,2)){
				$count++; 
			}
		}
		if($count>=$maxres){
			if(!substr($r->appointment_date,8,2)==$d){
				$cal_data[substr($row->appointment_date,8,2)]="N/A";
			}else{
				$cal_data[substr($row->appointment_date,8,2)]="booking N/A";
			} 
			
		}
		}
		return $cal_data;
	}
	public function RescheduleRes($id,$data){
		$this->load->database("");
		$this->db->where('id', $id);
		$this->db->update('reservations', $data);
	}
	
	public function getReservationDetails(){
		$this->load->database("");
		$userid=$this->session->user_id;
		$this->db->select("*");
		$this->db->from("appointments");
		$this->db->where("patient_id",$userid);
		$result = $this->db->get();
		return $result->result();
	}
	
	
}
?>