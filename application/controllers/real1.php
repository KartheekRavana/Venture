<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Real extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('admin_model');
	}

  public function index()
  {
      
    
    $this->load->view('admin/admin_login');
  }
  public function login_validation(){
  $this->load->library('form_validation');  

  $this->form_validation->set_rules('username','username','required');
  $this->form_validation->set_rules('password','password','required');

  if($this->form_validation->run()){
    //true
    $username=$this->input->post('username');
    $password=$this->input->post('password');
    if($this->admin_model->can_login($username,$password)){

      $session_data=array(
            'username'   =>  $username
      );

      $this->session->set_userdata($session_data);
      redirect('real/home');
    }else{
      $this->session->set_flashdata('error','inavlide password and username');
      redirect('real/index');
    }

   }else{

    //false

    $this->login();
  }
}
  public function home(){

    if($this->session->userdata('username')  !=''){
      // $this->load->view('admin/header');
      $this->load->view('admin/home');
         
    }
  }




  public function logout(){
    $this->session->unset_userdata('username');
    redirect('real/index');
  }

	
	// public function home()
	// {
	// 	$this->load->view('admin/home');
	// }
	public function estate()
	{
		$this->load->view('admin/add_villa');
	}
	public function add_vill(){
	$save=array();

    $save['add_vill']=$this->input->post('add_vill');
    $save['post_data']='active';

    $check1=$this->admin_model->addvill($save);
        if($check1){
    	   redirect('real/estate');
        }else{
    	   redirect('real/estate');
        } 
    }
    public function vill_delete()
	{
		$id=$this->uri->segment(3);
		$this->admin_model->Deletevill($id);
		redirect('real/estate');
	}

	public function vill_edit()
	{	
		$id=$this->uri->segment(3);
		$data['vill_edit']=$this->admin_model->Editvill($id);
		$this->load->view('admin/vill_edit',$data);
	}
	public function update_vill(){
	
	$id=$this->input->post('id');
	$add_vill=$this->input->post('add_vill');
	$data=array(

       'add_vill'=>$add_vill
	);
   

      $check1=$this->admin_model->updatevill($data,$id);
      // echo json_encode($check1);
        if($check1){
    	   redirect('real/estate');
        }else{
    	   redirect('real/estate');
        }

    }

    public function add_plot(){
	$save=array();

    $save['villa_id']=$this->input->post('villa_id');
    $save['plot_no']=$this->input->post('plot_no');
     $save['area']=$this->input->post('area');
   /* $save['dimensions']=$this->input->post('dimensions');
     $save['customer_name']=$this->input->post('customer_name');
    $save['content_no']=$this->input->post('content_no');
    $save['details']=$this->input->post('details');
    $save['user_id']=$this->input->post('user_id');
    $save['update_no']=$this->input->post('update_no');
    $save['noof_days']=$this->input->post('noof_days'); 
    $save['current_status']=$this->input->post('current_status');*/
	$save['post_data']='active';

    $check1=$this->admin_model->add_plot($save);
    // echo json_encode($check1);

        if($check1){
    	   redirect('real/plot');
        }else{
    	   redirect('real/plot');
        } 
    }

    public function plot(){
    		$data['fetchs']= $this->admin_model->getvill();

    		// echo json_encode($data);

    	$this->load->view('admin/plot1',$data);
    }

    public function plot_view(){
         $data['showplotDetails']=$this->admin_model->getplot('All');
            $this->load->view('admin/view_plot',$data);


    }
     public function plot_delete()
    {
        $plot_id=$this->uri->segment(3);
        $this->admin_model->Deleteplot($plot_id);
        redirect('real/plot_view');
    }

    public function plot_edit()
    {   
        $plot_id=$this->uri->segment(3);

        $data['fetchs']= $this->admin_model->getvill();

        $data['plot_edit']=$this->admin_model->getplot($plot_id);
        // echo json_encode($data);
     $this->load->view('admin/edit_plot',$data);
    }

    public function update_plot(){
    
    $plot_id=$this->input->post('plot_id');
    $villa_id=$this->input->post('villa_id');
    $plot_no=$this->input->post('plot_no');
    $area=$this->input->post('area');
    $dimensions=$this->input->post('dimensions');
    $customer_name=$this->input->post('customer_name');
    $content_no=$this->input->post('content_no');
    $details=$this->input->post('details');
    $user_id=$this->input->post('user_id');
    $update_no=$this->input->post('update_no');
    $noof_days=$this->input->post('noof_days');
    $current_status=$this->input->post('current_status');
    $data=array(

       'villa_id'=>$villa_id,
       'plot_no'=>$plot_no,
       'area'=>$area,
       'dimensions'=>$dimensions,
       'customer_name'=>$customer_name,
       'content_no'=>$content_no,
       'details'=>$details,
       'user_id'=>$user_id,
       'update_no'=>$update_no,
       'noof_days'=>$noof_days,
       'current_status'=>$current_status
    );
   

      $check1=$this->admin_model->updateplot($data,$plot_id);
      // echo json_encode($check1);
        if($check1){
           redirect('real/plot_view');
        }else{
           redirect('real/update_plot');
        }

    }

    public function add_emp(){
       $data['fetchs']= $this->admin_model->getAllVilla();
   // echo json_encode($data);


    $this->load->view('admin/add_emp',$data);


    }
    public function add_empsave(){
    
    // $plot_id=$this->input->post('plot_id');
    $villa_id=$this->input->post('villa_id');
    $employee_name=$this->input->post('employee_name');
    $password=$this->input->post('password');
    $emp_email=$this->input->post('emp_email');
    $date=date('Y-m-d');
    $time=date("h:i:sa");
    // $count=count($_POST['villa_id']);
    // $customer_name=$this->input->post('customer_name');
    // $content_no=$this->input->post('content_no');
    // $details=$this->input->post('details');
    // $user_id=$this->input->post('user_id');
    // $update_no=$this->input->post('update_no');
    // $noof_days=$this->input->post('noof_days');
    // $current_status=$this->input->post('current_status');
    $checkbox1 = $_POST['villa_id'];
    $chk="";  
    foreach($checkbox1 as $chk1)  
       {  
          $chk.=$chk1.",";  
echo $chk;
}
$data=array(
      'villa_id'=>$chk,
       'employee_name'=>$employee_name,
       'password'=>$password,
       'emp_email'=>$emp_email,
       'employee_status'=>'active',
       'created_date'=>$date,
       'created_time'=>$time
    );
$check1=$this->admin_model->addemp($data);

 if($check1){
           redirect('real/view_emp');
        }else{
           redirect('real/add_emp');
        }
      }


    /*for($i=0; $i<$count; $i++) {
    $data=array(



       'villa_id'=>$villa_id[$i],
       'employee_name'=>$employee_name,
       'password'=>$password,
       'emp_email'=>$emp_email,
       'employee_status'=>'active',
       'created_date'=>$date,
       'created_time'=>$time
    );
   

      $check1=$this->admin_model->addemp($data);
      // echo json_encode($check1);
        if($check1){
           redirect('real/emp_view');
        }else{
           redirect('real/add_emp');
        }
      }

    }*/

 public function view_emp(){
        $data['fetchs']= $this->admin_model->getemp();

        // echo json_encode($data);

      $this->load->view('admin/view_emp',$data);
    }

   
}
