<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

  public function editstatus($data)
  {
        $this->db->set($data);
        // $this->db->where("id", $id);
        $this->db->update("popup");
        return true;
  }

  public function editstatuss($data,$id)
  {
        $this->db->set($data);
        $this->db->where("id", $id);
        $this->db->update("popup");
        return true;
  }

}
