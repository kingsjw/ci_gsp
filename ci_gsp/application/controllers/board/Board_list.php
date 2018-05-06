<?php
  include($_SERVER['DOCUMENT_ROOT']."/application/Controllers/controller.php");
  class Board_list extends Controller
  {
    function index(){
      $this->load->database('db');

      $this->load->model('board/board_model');
      $this->load->helper(array('url', 'date'));

      $Hassign = array(

      );

      $Fassign = array(

      );
      $this->load->view('temp/header', $Hassign);
      $this->list_pagination();
      $this->load->view('temp/footer', $Fassign);
    }
    public function list_pagination(){
      // $this->load->helper("url");
      $this->load->library('pagination');
      $config['base_url'] = 'board_list';
      $config['total_rows'] = $this->board_model->get_list($this->uri->segment(3), 'count');
      $config['per_page'] = 3;
      $config['uri_segment'] = 1;

      $this->pagination->initialize($config);
      $data['pagination'] = $this->pagination->create_links();
      $page = $this->uri->segment(3,1);

      if($page > 1){
        $start = (($page / $config['per_page'])) * $config['per_page'];
      }else {
        $start = ($page - 1) * $config['per_page'];
      }
      $limit = $config['per_page'];
      $data['list'] = $this->board_model->get_list($this->uri->segment(3),'',$start, $limit);

      $Assign['list'] = $data['list'];
      $Assign['link'] = $data['pagination'];
      $this->load->view('board/board_list', $Assign);
    }
  }

?>
