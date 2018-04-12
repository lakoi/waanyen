<?php
class List_model extends CI_Model
{
  public function __construct()
  {
      parent::__construct();
      $this->load->helper('url_helper');
      $this->load->database();
      $this->load->helper('form');
      $this->load->helper('html');
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
                                                          //* * *DOMAIN* * *
  public function domain_model()
  {
      $query = $this->db->get('domain');
      return $query->result();
  }

  public function add_do_model($data)
  {
      if ($this->db->insert("domain", $data))
      {
        return true;
      }
  }

  public function search_do_model($email, $package, $username)
  {
    $query = $this->db->query("select * from domain where  (email like '%$email%' and username like '%$username%' and package like '%$package%') ");
    return $query->result();
  }

  public function popup_model()
  {
      $query = $this->db->get('popup');
      return $query->result();
  }

  public function save_popup_model($data)
  {
      if ($this->db->insert("popup", $data))
      {
        return true;
      }
  }

  public function edit_popup_model($id)
  {
        $query = $this->db->get_where("popup",array("id"=>$id));
        $data = $query->result();
        return $data;
  }

  public function save_edit_popup_model($data,$id)
  {
        $this->db->set($data);
        $this->db->where("id", $id);
        $this->db->update("popup");
  }

  public function delete_popup_model($id)
  {
        if ($this->db->delete("popup", "id =".$id))
        {
          return true;
        }
  }

}
