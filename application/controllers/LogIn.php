<?php
class LogIn extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model(array('User_model'));
	}
	public function login()
	{
		$this->form_validation->set_rules('email', 'Username','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		// $this->form_validation->set_rules('type','Type','required');
		if($this->form_validation->run() == FALSE){
			$this->form_validation->set_error_delimiters('<span class="error" style="color:red;">', '</span>');
			$this->load->view('layout/header.php');
			$this->load->view('common/login.php');				
			$this->load->view('layout/footer.php');
		}
		else{
		$email=$this->input->post('email');
		$password=md5($this->input->post('password'));
		if($this->User_model->isvaliduser($email,$password)){
			$userinfo=$this->User_model->getvalidUser();
			$this->session->set_userdata('user_info',$userinfo);
				if($userinfo->type=='superadmin'){
					$id = $userinfo->id;
					$email = $userinfo->email;
					if($id){
					$this->session->set_userdata('id',$id);
					$this->session->set_userdata('email',$email);
					return redirect('logIn/super_adminDashboard');
					}
				   }
				elseif($userinfo-> type =='teacher'){
					$id = $userinfo->id;
					if($id){
					$this->session->set_userdata('id',$id);
					$this->session->set_userdata('email',$email);
					return redirect('logIn/teacherDashboard');
					}
				   } 
				elseif($userinfo-> type == 'admin'){
					$id = $userinfo->id;
					if($id){
					$this->session->set_userdata('id',$id);
					$this->session->set_userdata('email',$email);
					return redirect('logIn/adminDashboard');
					}
			  
					  }	
		}
		else{
			$this->session->set_flashdata('status','oops!! invalid user details');
			redirect('Welcome/logIn');
		}
		}
	}
	public function teacherDashboard(){
		if(!$this->session->userdata('id')){
			return redirect('Welcome/logIn');
		 }
		$this->load->view('common/dashboard/teacher/header.php');
		$this->load->view('common/dashboard/teacher/teacherDashboard.php');
		$this->load->view('layout/footer.php');
	}
	public function adminDashboard(){
		if(!$this->session->userdata('id')){
			return redirect('Welcome/logIn');
		}
		$this->load->view('common/dashboard/admin/adminDashboard.php');
		$this->load->view('layout/footer.php');
	}
	public function super_adminDashboard()
	{
		if(!$this->session->userdata('id')){
			return redirect('Welcome/logIn');
		}
		$this->load->view('common/dashboard/superAdmin/header.php');
		$this->load->view('common/dashboard/superAdmin/super_adminDashboard.php');
		$this->load->view('layout/footer.php');
	}
	public function reset(){
		$oldPass = $this->input->post('oldPass');
		$newPass = $this->input->post('newPass');
		$confPass = $this->input->post('confPass');
		$log_in=$this->session->userdata('id');
		$info = $this->User_model->check_pass($log_in);
		
		print_r(array_key($info,"password",true));
		// if((!strcmp($oldPass,$password)) && (!strcmp($newPass,$confPass))){
		// 	echo 1;
		// }else{
		// 	echo 0 ;
		// }

	}
	}
?>  
