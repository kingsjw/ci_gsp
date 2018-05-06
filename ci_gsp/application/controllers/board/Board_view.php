<?php
  include($_SERVER['DOCUMENT_ROOT']."/application/Controllers/controller.php");
  class Board_view extends Controller
  {
    function index(){
      $this->load->database('db');
      $this->load->model('board/board_model');
      $GetIdx = $this->input->get();

      $this->board_model->hitUpdate($GetIdx);
      $data = $this->board_model->getThisPost($GetIdx);

      $Hassign['title'] = stripslashes($data[0]['title']);
      $Assign['writer'] = stripslashes($data[0]['writer']);
      $Assign['content'] = stripslashes($data[0]['content']);
      $this->load->view('temp/header', $Hassign);
      $this->load->view('board/board_view', $Assign);
      $this->load->view('temp/footer');
    }

  }

?>
