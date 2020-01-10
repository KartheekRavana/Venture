<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('websiteModel');
	}
	
	public function common_data()
	{
		date_default_timezone_set('Asia/Kolkata');
		$data["date"]=date('y-m-d');
		$data["time"]=date("h:i:sa");
		$data['date_india']=date('d-m-y');
		return $data;
	}
	
	public function index(){
	//echo 1;
		$this->load->view("website/login");
	}

   public function ViewCustomerData()
  {
  	
  	
  	 $plotId=$this->uri->segment(2);$data['customerData']='';$data['plotData']='';
  	 
  	 $result=$this->websiteModel->customer_exits($plotId);
  	 //print_r($result);
  	 
  	 	if ($result){
  	 	$data['customerData']=$this->websiteModel->getCustomerByPlotNo($plotId);
  	 	}
  	 	else{
  	 	$data['plotData']=$this->websiteModel->getPlotData($plotId);
  	 	}
  	 	
  	 $this->load->view('website/customerDetails',$data);
  	 
  	/* $data['customerData']=$this->websiteModel->getCustomerByPlotNo($plotId);
  	//print_r($data);
  	$this->load->view('website/customerDetails',$data); */
  }
  
  public function update_plots(){
  	$data=$this->common_data();
  	echo $customer_id=$this->input->post('customer_id_b');
  	 
  	if($customer_id ==''){
  	$cdata=array(
  			        'plot_id'=>$this->input->post('plot_id_b'),
					'customer_name'=>$this->input->post('customer_name_b'),
					'c_content_no'=>$this->input->post('c_contect_no_b'),
					'marketer_name'=>$this->input->post('marketer_name_b'),
					'm_content_no'=>$this->input->post('m_content_no_b'),
  	 				'current_status'=>$this->input->post('current_status_b'),
  					'no_of_days'=>$this->input->post('no_of_days')
  			
  	 		
			);
			$this->websiteModel->Save($cdata,'customer'); 
  	}
  	else {
  		
  		  $cdata=array(
  				'plot_id'=>$this->input->post('plot_id_b'),
					'customer_name'=>$this->input->post('customer_name_b'),
					'c_content_no'=>$this->input->post('c_contect_no_b'),
					'marketer_name'=>$this->input->post('marketer_name_b'),
					'm_content_no'=>$this->input->post('m_content_no_b'),
  	 				'current_status'=>$this->input->post('current_status_b'),
  					'no_of_days'=>$this->input->post('no_of_days')
  		);
  		$this->websiteModel->Update('customer','ci_customer_id',$customer_id,$cdata); 
  	}
  	redirect(BASE_URL."index");
  }
  
   public function update_reserved(){
   	
  
  	$data=$this->common_data();
  	
  	 $customer_id_r=$this->input->post('customer_id_r');
  	 if($customer_id_r ==''){
  		$cdata=array(
  				'plot_id'=>$this->input->post('plot_id_r'),
  				'customer_name'=>$this->input->post('customer_name_r'),
  				'c_content_no'=>$this->input->post('contact_no_r'),
  				'marketer_name'=>$this->input->post('marketer_name_r'),
  				'm_content_no'=>$this->input->post('m_content_no_r'),
  				'current_status'=>$this->input->post('current_status_r'),
  				'pb_no'=>$this->input->post('pb_no_r'),
  				'details'=>$this->input->post('details_r')
  					
  
  		);
  		$this->websiteModel->Save($cdata,'customer');
  	}
  	else {
  
  		$cdata=array(
  				'plot_id'=>$this->input->post('plot_id_r'),
  				'customer_name'=>$this->input->post('customer_name_r'),
  				'c_content_no'=>$this->input->post('contact_no_r'),
  				'marketer_name'=>$this->input->post('marketer_name_r'),
  				'm_content_no'=>$this->input->post('m_content_no_r'),
  				'current_status'=>$this->input->post('current_status_r'),
  				'pb_no'=>$this->input->post('pb_no_r'),
  				'details'=>$this->input->post('details_r')
  		);
  		$this->websiteModel->Update('customer','ci_customer_id',$customer_id_r,$cdata);
  	} 
  	redirect(BASE_URL."deatils");
  } 
  
  
  public function registered(){
  
  
  	$data=$this->common_data();
  	 
  	$customer_id_r=$this->input->post('customer_id_reg');
  	if($customer_id_r ==''){
  		$cdata=array(
  				'plot_id'=>$this->input->post('plot_id_reg'),
  				'customer_name'=>$this->input->post('customer_name_reg'),
  				'c_content_no'=>$this->input->post('c_contect_no_reg'),
  				'marketer_name'=>$this->input->post('marketer_name_reg'),
  				'm_content_no'=>$this->input->post('m_content_no_reg'),
  				'current_status'=>$this->input->post('current_status_reg'),
  				'pb_no'=>$this->input->post('pb_no_reg'),
  				'details'=>$this->input->post('details_reg'),
  				'document_no'=>	$this->input->post('document_no_reg')
  
  		);
  		$this->websiteModel->Save($cdata,'customer');
  	}
  	else {
  
  		$cdata=array(
  				'plot_id'=>$this->input->post('plot_id_reg'),
  				'customer_name'=>$this->input->post('customer_name_reg'),
  				'c_content_no'=>$this->input->post('c_contect_no_reg'),
  				'marketer_name'=>$this->input->post('marketer_name_reg'),
  				'm_content_no'=>$this->input->post('m_content_no_reg'),
  				'current_status'=>$this->input->post('current_status_reg'),
  				'pb_no'=>$this->input->post('pb_no_reg'),
  				'details'=>$this->input->post('details_reg'),
  				'document_no'=>	$this->input->post('document_no_reg')
  		);
  		$this->websiteModel->Update('customer','ci_customer_id',$customer_id_r,$cdata);
  	}
  	redirect(BASE_URL."deatils");
  }
  public function vacant(){
  
  
  	$data=$this->common_data();
  	$customer_id_r=$this->input->post('customer_id_v');
  	if($customer_id_r ==''){
  		$cdata=array(
  				'plot_id'=>'',
  				'current_status'=>'vacant'
  				);
  		$this->websiteModel->Save($cdata,'customer');
  	}
  	else {
  		$cdata=array(
  				'plot_id'=>'',
  				'current_status'=>'vacant'
  		);
  		$this->websiteModel->Update('customer','ci_customer_id',$customer_id_r,$cdata);
  	}
  	redirect(BASE_URL."deatils");
  }
  	
  
 /************************************************  */
  public function login_validation(){
  	$this->load->library('form_validation');
  	$this->form_validation->set_rules('user_id','user_id','required');
  	$this->form_validation->set_rules('password','password','required');
  	if($this->form_validation->run()){
  		//true
  		$user_id=$this->input->post('user_id');
  		$password=$this->input->post('password');
  		$result=$this->websiteModel->can_login($user_id,$password);
  		//print_r($result);
  		//echo json_encode($reuslt);
  		if($result!=false)
  		{
  			$sess_array = array();
  			foreach($result as $row)
  			{
  				$sess_array = array(
  						'sk_employee_id' => $row->sk_employee_id,
  						'employee_name' => $row->employee_name,
              'user_id'=>$row->user_id
  				);
          $this->session->set_userdata("user_id", $row->user_id);
  				$this->session->set_userdata("sk_employee_id", $row->sk_employee_id);
  				$this->session->set_userdata("employee_name", $row->employee_name);
  				$this->session->set_userdata('logged_in', $sess_array);
  			}
  			redirect('website/villa_data');
  		}else{
  			$this->session->set_flashdata('error','inavlide password and User Id');
  			redirect('website/index');
  		}
  
  	}else{
  
  		//false
  		$this->login();
  	}
  }

  public function villa_data(){
  
  	if($this->session->userdata('user_id')  !=''){
  
  		$sk_employee_id=$this->session->userdata('sk_employee_id');
  
  		$data['showviilaDetails']=$this->websiteModel->exp_vill($sk_employee_id);
  		$this->load->view('website/villa_data',$data);
  		//$data['plotData']=$this->websiteModel->getPlot(36,0);
  		//$this->load->view('website/layout',$data);
  		 
  	}
  }
  public function deatils(){
  
  
  	//$this->load->view('website/view_details');
  	$data['plotData']=$this->websiteModel->getPlot(36,0);
  	$this->load->view('website/layout',$data);
  }

}
?>