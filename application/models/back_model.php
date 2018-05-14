<?php
class Back_model extends CI_Model
{
  public function getdonate()
  {
      $query = $this->db->get('donate');
      return $query->result();
  }

  public function save_donate($data, $id)
  {
        $this->db->set($data);
        $this->db->where("id_donate", $id);
        $this->db->update("donate");
        return true;
  }

  public function getabout()
  {
      $query = $this->db->get('about');
      return $query->result();
  }

  public function save_about($data, $id)
  {
        $this->db->set($data);
        $this->db->where("id_about", $id);
        $this->db->update("about");
        return true;
  }

  public function getcentre()
  {
      $query = $this->db->get('centre');
      return $query->result();
  }

  public function edit_centre($id)
  {
        $query = $this->db->get_where("centre",array("id_centre"=>$id));
        $data = $query->result();
        return $data;
  }

  public function save_centre($data, $id)
  {
        $this->db->set($data);
        $this->db->where("id_centre", $id);
        $this->db->update("centre");
        return true;
  }


}
