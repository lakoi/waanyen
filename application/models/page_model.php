<?php
class Page_model extends CI_Model
{
  public function on_popup_model($status)
  {
    $query = $this->db->query("select * from popup where  status = '$status' ");
    return $query->result();
  }
  public function getslide()
  {
      $query = $this->db->get('slide');
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

  public function getnews_5item()
  {
      $query = $this->db->query("select * from news order by id_news desc limit 0,5");
      return $query->result();
  }

  public function getallnews()
  {
      $query = $this->db->query("select * from news order by id_news desc");
      return $query->result();
  }

  public function record_count_news(){
  return $this->db->count_all("news");
}

public function fetch_news($limit, $start) {
      $this->db->order_by('id_news', 'desc');
      $this->db->limit($limit, $start);
      $query = $this->db->get("news");

      if ($query->num_rows() > 0) {
          foreach ($query->result() as $row) {
              $data[] = $row;
          }
          return $data;
      }
      return false;
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
