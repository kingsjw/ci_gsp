<?php
  include($_SERVER['DOCUMENT_ROOT']."/application/Controllers/controller.php");
  class Board_write extends Controller
  {

    public function index(){
      $this->load->database('db');
      $this->load->model('board/board_model');
      $this->insert_req();

    }

    public function insert_req(){
      if(!empty($_POST)){
        $title = $this->input->post('title');
        $content=$this->input->post('content');
        $writer=$this->input->post('writer');
        $title = !empty($title) ? $this->str_es($title) : null;
        $content = !empty($content) ? $this->str_es($content) : null;
        $writer = !empty($writer) ? $this->str_es($writer) : null;
        if(!$title || !$writer || !$content){
          $this->alert("필수 입력 사항이 비었습니다.");
          $this->back();
          exit;
        }
        $user = array(
          'writer' => $writer,
          'content' => $content,
          'title' => $title
        );
        $this->board_model->add_board($user);
        header('Location: board_list');
        exit;
      }else {
        $this->load->view('temp/header');
        $this->load->view('board/board_write');
        $this->load->view('temp/footer');
      }
    }

  }

?>
