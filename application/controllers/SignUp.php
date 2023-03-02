<?php
class SignUp extends CI_Controller{
	public function __construct() {
		parent::__construct();
		$this->load->model('User_model');
	}

	public function setData(){
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('first_name','First Name','required');
		$this->form_validation->set_rules('last_name','Last Name','required');
		$this->form_validation->set_rules('password','Password','required');  
		$this->form_validation->set_rules('type','Type','required');
		if($this->form_validation->run()){
			$data = [
			'email' => $this->input->post('email'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'password' => md5($this->input->post('password')),
			'type' => $this->input->post('type')
		];
		$this->User_model->insertData($data);
		redirect(base_url('Welcome/signUp'));
		}
		else{
			$this->form_validation->set_error_delimiters('<span class="error" style="color:red;">', '</span>');
			$this->load->view('layout/header.php');	
			$this->load->view('common/signup.php');			
			$this->load->view('layout/footer.php');
		}	
	}
}
?>
