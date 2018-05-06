<?php
    class Controller extends CI_controller
    {
      var $db;
      var $str;
      function __construct()
      {
        parent::__construct();
        $this->db = $this->load->database('db');
      }
      function index(){
        $this->load->view('temp/header', $Hassign);
        $this->load->view('board/board_list', $Assign);
        $this->load->view('temp/footer', $Fassign);
      }
      function str_es($str){
        $str = htmlspecialchars($str,ENT_QUOTES);
        // $str = addslashes($str);
        $str = trim($str);
        return $str;
      }
      function alert($msg){
        echo "<script>alert('{$msg}');</script>";
      }
      function back(){
        echo "<script>history.back();</script>";
      }
    }

?>
