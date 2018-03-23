<?php
class List_model extends CI_Model
{
  public function __construct()
  {
      parent::__construct();
      $this->load->helper('url_helper');
      $this->load->database();
      $this->load->helper('form');
  }

  public function edu_model()
  {
      $query = $this->db->get('education');
      return $query->result();
  }

  public function addedu_model($data)
  {
      if ($this->db->insert("education", $data))
      {
        return true;
      }
  }

  public function edit_edu_model($id)
  {
        $query = $this->db->get_where("education",array("id"=>$id));
        $data = $query->result();
        return $data;
  }

  public function save_edit_edu_model($data,$id) {
        $this->db->set($data);
        $this->db->where("id", $id);
        $this->db->update("education", $data);
     }

  public function int_model()
  {
      $query = $this->db->get('interest');
      return $query->result();
  }

  public function addint_model($data)
  {
      if ($this->db->insert("interest", $data))
      {
        return true;
      }
  }

  public function j_model()
  {
      $query = $this->db->get('job');
      return $query->result();
  }

  public function addj_model($data)
  {
      if ($this->db->insert("job", $data))
      {
        return true;
      }
  }
}
