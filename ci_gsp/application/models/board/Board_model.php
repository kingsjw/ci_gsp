<?php
  class Board_model extends CI_Model {
    var $title;
    var $content;
    var $writer;
    var $date;

    function __construct() {
      parent::__construct();

    }

    public function add_board($user){
      $sql = "INSERT INTO board SET writer=?,title=?,content=?,wdate=now()";
      $this->db->query($sql, $user);
    }
    public function getAll(){
      $this->db->select("*");
      $this->db->from("board");
      $this->db->order_by("idx", "desc");
      $rs = $this->db->get()->result_array();
      return $rs;
    }
    public function getThisPost($GetIdx){
      $this->db->select("*");
      $this->db->from("board");
      $this->db->where($GetIdx);
      $rs = $this->db->get()->result_array();
      return $rs;

    }
    public function hitUpdate($GetIdx){
      $this->db->set('hit', 'hit+1', FALSE);
      $this->db->where($GetIdx);
      $this->db->update('board');
    }
    public function get_list($table = 'board', $type = '', $offset = '', $limit = ''){
      $limit_query = '';

      if($limit != '' || $offset != ''){
        $limit_query = ' LIMIT '.$offset.', '.$limit;
      }
      $sql = "SELECT * FROM board ORDER BY idx ASC".$limit_query;
      // echo $sql;
      $query = $this->db->query($sql);
      if($type == 'count'){
        $result = $query->num_rows();
        // print_r($result);
      }else {
        $result = $query->result();
        // print_r($result);
      }
      // print_r($result);
      return $result;
    }
  }
?>
