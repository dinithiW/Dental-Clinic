<?php

class Home extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('home');
    }

    public function register(){
        $this->form_validation->set_rules('fname','First Name','trim|required');
        $this->form_validation->set_rules('lname','Last Name','trim|required');
      // $this->form_validation->set_rules('nic','ID Number','trim|required|in_list[10,12]');
        $this->form_validation->set_rules('cno','Contact No','trim|required|exact_length[10]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('psw','Password','trim|required');
        $this->form_validation->set_rules('cpsw','Confirm Password','trim|required|matches[psw]');
       
        if($this->form_validation->run()==False){
           $data=array(
                   'errors'=>validation_errors()
           );
           $this->session->set_flashdata($data);
           //print_r($data) ;
           redirect('Home');

        }else{
            $this->load->model('Home_model');
            $this->Home_model->create_patient();
                //echo "customer created";
                $this->session->set_flashdata('cusReg_success','ThankYou for joining with us!!');
                redirect('Home');
            }
            // }else{
            // 	echo "something wrong";
            // }
           
        } 
    public function cusDash()
	{
		
		$this->load->view('cus_navbar');
	}

}


/* End of file home.php */
/* Location: ./system/application/controllers/home.php */