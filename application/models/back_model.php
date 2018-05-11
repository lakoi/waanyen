<?php
class Back_model extends CI_Model
{
  public function save_donate($data, $id)
  {
        $this->db->set($data);
        $this->db->where("id_donate", $id);
        $this->db->update("donate");
        return true;
  }

  public function save_about($data, $id)
  {
        $this->db->set($data);
        $this->db->where("id_about", $id);
        $this->db->update("about");
        return true;
  }

}
