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

	public function patientRecords(){
		$this->load->view('doc_navbar');
		$this->load->view('Doctor/view_patient_records');
	}

        public function inventoryManage(){
                $this->load->model('Doctor_model');
                $data['records']= $this->Doctor_model->getInventory();
                $this->load->view('doc_navbar');
                $this->load->view('Doctor/inventory_Management',$data);
        }
        public function deleteInventory(){
                $this->load->helper('url'); 
                $id = $this->uri->segment(3);
                $this->load->model('Doctor_model');
                $this->Doctor_model->deleteInventroy($id);
        }
        public function viewAddInventory(){
                $this->load->view('doc_navbar');
                $this->load->view('Doctor/add_inventory');
        }
        public function addInventory(){
                $this->form_validation->set_rules('id','id','trim|required');
                $this->form_validation->set_rules('name','name','trim|required');
                $this->form_validation->set_rules('quantity','quantity','trim|required');
                if ($this->form_validation->run() == FALSE) {
                    $this->load->view('Doctor/viewAddInventory');
                }
                else{
                    
                    $data = array(
                            'Id' => $this->input->post('id'),
                            'Name' => $this->input->post('name'),
                            'Quantity' => $this->input->post('quantity'),
                            );
                    $this->load->model('Doctor_model');
                    $this->Doctor_model->addInventroy($data);
                    $data['message'] = 'Data Inserted Successfully';
                }
        }
        public function viewUpdateInventory(){
                $this->load->view('doc_navbar');
                $this->load->view('Doctor/update_inventory');
                
        }
        public function updateInventory(){
                $this->form_validation->set_rules('id','id','trim|required');
                $this->form_validation->set_rules('name','name','trim|required');
                $this->form_validation->set_rules('quantity','quantity','trim|required');
                $id = $this->input->post('id');
                $data = array(
                			'id' => $id,
                            'Name' => $this->input->post('name'),
                            'Quantity' => $this->input->post('quantity'),
                            );
                $this->load->model('Doctor_model');
                $this->Doctor_model->updateInventroy($id,$data);
        }


	public function viewRecords(){
		$this->load->model('Doctor_model');
		$data['records'] = $this->Doctor_model->getPatientRecords();
		$this->load->view('doc_navbar');
		$this->load->view('Doctor/view_patient_records',$data);
	}

	public function viewAppointments(){
		
		$this->load->view('doc_navbar');
		$this->load->view('Doctor/view_appointments');
	}

	public function todayAppoints(){
		$this->load->model('Doctor_model');
		$data['tAppoints'] = $this->Doctor_model->getTodaysAppoints();
		$this->load->view('doc_navbar');
		$this->load->view('Doctor/view_appointments',$data); 

	}
	
	

	public function viewPayments(){
		$this->load->model('Doctor_model');
		$data['records'] = $this->Doctor_model->getServices();
		
		$this->load->view('Doctor/update_payment',$data);
		$this->load->view('doc_navbar');
	}

	/*public function viewInstalments(){
		$this->load->model('Doctor_model');
		$data['records'] = $this->Doctor_model->getPatientRecords();
		$this->load->view('doc_navbar');
		$this->load->view('Doctor/view_payments',$data);
	}*/

	public function updatePayment(){
		$this->load->model('Doctor_model');
		$this->Doctor_model->addPayment();
		
		$this->viewPayments();

		
	}

	public function viewAllPayments(){
		$this->load->model('Doctor_model');
		$data['records'] = $this->Doctor_model->allPayments();

		$this->load->view('doc_navbar');
		$this->load->view('Doctor/view_all_payments',$data);
	}
	public function viewServices(){
		
		$this->load->model('Doctor_model');
		$data['records'] = $this->Doctor_model->getServices();
		
		$this->load->view('Doctor/view_services',$data);
		$this->load->view('doc_navbar');
	}


	public function editService($service_id){
				$data['update'] = false;

		$this->load->model('Doctor_model');
		$data['records'] = $this->Doctor_model->editService($service_id);
		
		$this->load->view('Doctor/edit_services',$data);
		$this->load->view('doc_navbar');
	}

	public function updateService($service_id){
		$this->load->model('Doctor_model');
		$data['update'] = true;
		$data['service_id'] = $service_id;
		$data['records'] = $this->Doctor_model->updateService($service_id);
		//$data['vari'] = $this->Doctor_model->success;

		$this->viewServices();
		
	}



	public function deleteService($service_id){
		$this->load->model('Doctor_model');
		$this->Doctor_model->deleteService($service_id);
		
		$this->viewServices();
		/*$this->load->view('Doctor/view_services');
		$this->load->view('doc_navbar');*/
	}

	public function addServiceHome(){
		$this->load->view('Doctor/add_service');
		$this->load->view('doc_navbar');
	}


	public function addService(){
		$this->load->model('Doctor_model');
		$this->Doctor_model->addService();

		$this->viewServices();
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('../Home');
	}



}

?>