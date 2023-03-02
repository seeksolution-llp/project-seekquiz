<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('layout/header.php');
		$this->load->view('common/index.php');
		$this->load->view('layout/footer.php');
	}
	public function feature(){
		$this->load->view('layout/header.php');		
		$this->load->view('common/features.php');		
		$this->load->view('layout/footer.php');
	}
	public function plan()
	{
		$this->load->view('layout/header.php');				
		$this->load->view('common/plans.php');				
		$this->load->view('layout/footer.php');
	}
	public function signUp()
	{
		$this->load->view('layout/header.php');	
		$this->load->view('common/signup.php');			
		$this->load->view('layout/footer.php');
	}
	public function logIn()
	{
		$this->load->view('layout/header.php');
		$this->load->view('common/login.php');				
		$this->load->view('layout/footer.php');
	}
}
?>