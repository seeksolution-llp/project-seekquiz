<?php
class Student extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('common/dashboard/student/header.php');
        $this->load->view('common/dashboard/student/stuDashboard.php');
        $this->load->view('layout/footer.php');
    }
    public function login(){
        $this->load->view('common/dashboard/student/login.php');
    }
    public function settings(){
        $this->load->view('common/dashboard/student/setting.php');
    }
}
?>