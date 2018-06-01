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

  public function getcentre()
  {
      $query = $this->db->get('centre');
      return $query->result();
  }

  public function getnews()
  {
      $query = $this->db->query(" select * from news order by id_news desc limit 0,3");
      return $query->result();
  }

  public function getproduct()
  {
      $query = $this->db->query(" select * from product order by id_product desc");
      return $query->result();
  }

  public function getjoin()
  {
      $query = $this->db->get('join');
      return $query->result();
  }

  public function getfooter()
  {
      $query = $this->db->get('footer');
      return $query->result();
  }
}
