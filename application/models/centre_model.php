<?php
class Centre_model extends CI_Model
{
  public function getcentre()
  {
      $query = $this->db->get('centre');
      return $query->result();
  }

  public function centre_about($id)
  {
        $query = $this->db->get_where("centre",array("id_centre"=>$id));
        $data = $query->result();
        return $data;
  }

}
