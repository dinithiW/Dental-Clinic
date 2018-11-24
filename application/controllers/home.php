
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
        
    public function login(){
        $this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
        $this->form_validation->set_rules('psw','Password','trim|required|min_length[1]');
        if($this->form_validation->run()==FALSE){
            $data=array(
                'errors'=>validation_errors()
            );
            $this->session->set_flashdata($data);
                redirect('Home');
        }else{
            $this->load->model('Home_model');
            $username=$this->input->post('username');
            $password=$this->input->post('psw');
            $login=$this->Home_model->login_user($username,$password);
            if($login){
                $user_data=array(
                    'user_id' =>$login[0],
                    'username'=>$username,
                    'logged_in'=>true,
                    'type' =>$login[1]
                );
                $this->session->set_userdata($user_data);
                if($login[1]=='Patient'){
                    $this->session->set_flashdata('login_success','You are now logged in!!');
                    redirect('Home/cusDash');
                }
                elseif ($login[1]=='Assistant') {
                    $this->session->set_flashdata('login_success','You are now logged in!!');
                    redirect('/asstDash');
                }
                elseif($login[1]=='Doctor'){
                    $this->session->set_flashdata('login_success','You are now logged in!!');
                    redirect('Home/docDash');
                }
    
                }else{
                    $this->session->set_flashdata('login_fail','Sorry you are not allowed!!');
                    redirect('Home');
                }
            }
    
        }
    public function cusDash(){
	    
		
		$this->load->view('cus_navbar');
	    }

    public function docDash(){
        
        $this->load->view('doc_navbar');
        }

     }


