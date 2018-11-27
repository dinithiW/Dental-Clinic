<?php
class Home_model extends CI_Model{
	public function login_user($username,$password){
		$this->load->database("");
		$this->db->select("*");
		$this->db->from("users");
		$this->db->where('username',$username);
		

		//$r=$this->db->query('select * from users where username=?',$username);

		$result = $this->db->get();
		//$row = $r->row();
		if($result->num_rows() > 0){
			$userType=$result->row(0)->type;
			$db_password=$result->row(0)->password;
			$id=$result->row(0)->user_id;
			$arr = array($id,$userType);
			if(password_verify($password,$db_password)){
				return $arr;
				//return true;
			}
			else{
				return false;
			}
		}else{
			return false;
		}
		
          
		

	}
	public function create_patient(){
		$this->load->database("");
		$data=array(
			'first_name'=>$this->input->post('fname'),
			'last_name'=>$this->input->post('lname'),
			'email'=>$this->input->post('email'),
			'address'=>$this->input->post('address'),
			'contact_no'=>$this->input->post('cno'),
			'age'=>$this->input->post('age')
			// 'username'=>$this->input->post(),
			// 'password'=>$encripted_pass
		);
		$insert_data=$this->db->insert('patient',$data);
		//$this->db->where('nic',$this->input->post('nic'));
		//$result=$this->db->get('customer');
		//$id=$this->db->get('customer')->row(0)->id;
		$id=$this->db->select('patient_id')->order_by('patient_id','desc')->limit(1)->get('patient')->row('patient_id');
		$encripted_pass=password_hash($this->input->post('psw'),PASSWORD_BCRYPT);
		$d2=array(
			'user_id'=>$id,
			'username'=>$this->input->post('uname'),
			'password'=>$encripted_pass,
			'type'=>'Patient'
		);
		$insert_data2=$this->db->insert('users',$d2);
		if($insert_data && $insert_data2){
			return true;
		}else{
			return false;
		}
	}
 
	
	
}
 
?>