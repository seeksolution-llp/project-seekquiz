<?php
class Users extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function New(){
        $this->load->view('common/dashboard/teacher/header.php');
		$this->load->view('common/dashboard/teacher/adduser.php');
		$this->load->view('layout/footer.php');
    }
}
?>