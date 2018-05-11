<?php
class Page_model extends CI_Model
{
  public function on_popup_model($status)
  {
    $query = $this->db->query("select * from popup where  status = '$status' ");
    return $query->result();
  }
  public function getdonate()
  {
      $query = $this->db->get('donate');
      return $query->result();
  }

  public function getabout()
  {
      $query = $this->db->get('about');
      return $query->result();
  }

}
