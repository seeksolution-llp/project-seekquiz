<?php
class Quiz extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function textEditor(){
        $html = $this->load->view('common/dashboard/teacher/quiz/textEditor.php',[],true);
        $response["html"] = $html;
        echo json_encode($response);
    }
    public function editor(){
        $html = $this->load->view('common/dashboard/teacher/quiz/editor.php',[],true);
        $response["html"] = $html;
        echo json_encode($response);
    }
    public function configure(){
        $html = $this->load->view('common/dashboard/teacher/quiz/confiure.php',[],true);
        $response["html"] = $html;
        echo json_encode($response);
    }
    public function publish(){
        $html = $this->load->view('common/dashboard/teacher/quiz/publish.php',[],true);
        $response["html"] = $html;
        echo json_encode($response);
    }
    public function analyze(){
        $html = $this->load->view('common/dashboard/teacher/quiz/analyze.php',[],true);
        $response["html"] = $html;
        echo json_encode($response);
    }
    public function addOption(){
        $html = $this->load->view('common/dashboard/teacher/quiz/option.php',[],true);
        $response["html"] = $html;
        echo json_encode($response);
    }
    public function addQuestion(){
        $post = $this->input->post();
        print_r($post);
    }
}
?>