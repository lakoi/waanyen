<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Popup_model extends CI_Model
{
  public function showAllEmployee($table)
  {
    return $this->db->get($table);
  }

  public function uploaddata($data,$table)
  {
    $this->db->insert($table,$data);
  }

  public function updatedata($table,$where)
  {
    return $this->db->get_where($table,$where);
  }

  public function editdata($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  public function save_data($data1)
  {
    $this->db->insert('popup', $data1);
         return $this->db->insert();
  }
}
