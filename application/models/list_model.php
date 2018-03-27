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
                                                          //* * *ADMIN* * *
  public function admin_model()
  {
      $query = $this->db->get('member');
      return $query->result();
  }

  public function edit_name_ad_model($UserID)
  {
        $query = $this->db->get_where("member",array("UserID"=>$UserID));
        $data = $query->result();
        return $data;
  }

  public function save_edit_name_ad_model($data,$UserID)
  {
        $this->db->set($data);
        $this->db->where("UserID", $UserID);
        $this->db->update("member");
  }

  public function edit_status_ad_model($UserID)
  {
        $query = $this->db->get_where("member",array("UserID"=>$UserID));
        $data = $query->result();
        return $data;
  }

  public function save_edit_status_ad_model($data,$UserID)
  {
        $this->db->set($data);
        $this->db->where("UserID", $UserID);
        $this->db->update("member");
  }
                                                          //* * *EDUCATION* * *
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

  public function save_edit_edu_model($data,$id)
  {
        $this->db->set($data);
        $this->db->where("id", $id);
        $this->db->update("education");
  }

  public function delete_edu_model($id)
  {
        if ($this->db->delete("education", "id = ".$id))
        {
           return true;
        }
  }
                                                          //* * *INTEREST* * *
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

  public function edit_int_model($id)
  {
        $query = $this->db->get_where("interest",array("id"=>$id));
        $data = $query->result();
        return $data;
  }

  public function save_edit_int_model($data,$id)
  {
        $this->db->set($data);
        $this->db->where("id", $id);
        $this->db->update("interest");
  }

  public function delete_int_model($id)
  {
        if ($this->db->delete("interest", "id = ".$id))
        {
          return true;
        }
  }
                                                          //* * *JOB* * *
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

  public function edit_j_model($id)
  {
        $query = $this->db->get_where("job",array("id"=>$id));
        $data = $query->result();
        return $data;
  }

  public function save_edit_j_model($data,$id)
  {
        $this->db->set($data);
        $this->db->where("id", $id);
        $this->db->update("job");
  }

  public function delete_j_model($id)
  {
        if ($this->db->delete("job", "id = ".$id))
        {
          return true;
        }
  }
}
