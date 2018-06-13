<?php
class Back_centre_model extends CI_Model
{
  public function edit_about($id)
  {
    if($this->session->userdata('id')=="1")
    {
      $query = $this->db->get_where("centre_about1",array("id_centre_about"=>$id));
      $data = $query->result();
      return $data;
    }
    if($this->session->userdata('id')=="2")
    {
      $query = $this->db->get_where("centre_about2",array("id_centre_about"=>$id));
      $data = $query->result();
      return $data;
    }
    if($this->session->userdata('id')=="3")
    {
      $query = $this->db->get_where("centre_about3",array("id_centre_about"=>$id));
      $data = $query->result();
      return $data;
    }
    if($this->session->userdata('id')=="4")
    {
      $query = $this->db->get_where("centre_about4",array("id_centre_about"=>$id));
      $data = $query->result();
      return $data;
    }
    if($this->session->userdata('id')=="5")
    {
      $query = $this->db->get_where("centre_about5",array("id_centre_about"=>$id));
      $data = $query->result();
      return $data;
    }
  }

  public function save_edit_about($data, $id)
  {
    if($this->session->userdata('id')=="1")
    {
      $this->db->set($data);
      $this->db->where("id_centre_about", $id);
      $this->db->update("centre_about1");
      return true;
    }
    if($this->session->userdata('id')=="2")
    {
      $this->db->set($data);
      $this->db->where("id_centre_about", $id);
      $this->db->update("centre_about2");
      return true;
    }
    if($this->session->userdata('id')=="3")
    {
      $this->db->set($data);
      $this->db->where("id_centre_about", $id);
      $this->db->update("centre_about3");
      return true;
    }
    if($this->session->userdata('id')=="4")
    {
      $this->db->set($data);
      $this->db->where("id_centre_about", $id);
      $this->db->update("centre_about4");
      return true;
    }
    if($this->session->userdata('id')=="5")
    {
      $this->db->set($data);
      $this->db->where("id_centre_about", $id);
      $this->db->update("centre_about5");
      return true;
    }
  }

  public function edit_news($id)
  {
    if($this->session->userdata('id')=="1")
    {
      $query = $this->db->get_where("centre_news1",array("id_centre_news"=>$id));
      $data = $query->result();
      return $data;
    }
    if($this->session->userdata('id')=="2")
    {
      $query = $this->db->get_where("centre_news2",array("id_centre_news"=>$id));
      $data = $query->result();
      return $data;
    }
    if($this->session->userdata('id')=="3")
    {
      $query = $this->db->get_where("centre_news3",array("id_centre_news"=>$id));
      $data = $query->result();
      return $data;
    }
    if($this->session->userdata('id')=="4")
    {
      $query = $this->db->get_where("centre_news4",array("id_centre_news"=>$id));
      $data = $query->result();
      return $data;
    }
    if($this->session->userdata('id')=="5")
    {
      $query = $this->db->get_where("centre_news5",array("id_centre_news"=>$id));
      $data = $query->result();
      return $data;
    }
  }

  public function save_news($data)
  {
    if($this->session->userdata('id')=="1")
    {
      if ($this->db->insert("centre_news1", $data))
      {
        return true;
      }
    }
    if($this->session->userdata('id')=="2")
    {
      if ($this->db->insert("centre_news2", $data))
      {
        return true;
      }
    }
    if($this->session->userdata('id')=="3")
    {
      if ($this->db->insert("centre_news3", $data))
      {
        return true;
      }
    }
    if($this->session->userdata('id')=="4")
    {
      if ($this->db->insert("centre_news4", $data))
      {
        return true;
      }
    }
    if($this->session->userdata('id')=="5")
    {
      if ($this->db->insert("centre_news5", $data))
      {
        return true;
      }
    }
  }

  public function save_edit_news($data, $id)
  {
    if($this->session->userdata('id')=="1")
    {
      $this->db->set($data);
      $this->db->where("id_centre_news", $id);
      $this->db->update("centre_news1");
      return true;
    }
    if($this->session->userdata('id')=="2")
    {
      $this->db->set($data);
      $this->db->where("id_centre_news", $id);
      $this->db->update("centre_news2");
      return true;
    }
    if($this->session->userdata('id')=="3")
    {
      $this->db->set($data);
      $this->db->where("id_centre_news", $id);
      $this->db->update("centre_news3");
      return true;
    }
    if($this->session->userdata('id')=="4")
    {
      $this->db->set($data);
      $this->db->where("id_centre_news", $id);
      $this->db->update("centre_news4");
      return true;
    }
    if($this->session->userdata('id')=="5")
    {
      $this->db->set($data);
      $this->db->where("id_centre_news", $id);
      $this->db->update("centre_news5");
      return true;
    }
  }

  public function delete_news($id)
  {
    if($this->session->userdata('id')=="1")
    {
      if ($this->db->delete("centre_news1", "id_centre_news =".$id))
      {
        return true;
      }
    }
    if($this->session->userdata('id')=="2")
    {
      if ($this->db->delete("centre_news2", "id_centre_news =".$id))
      {
        return true;
      }
    }
    if($this->session->userdata('id')=="3")
    {
      if ($this->db->delete("centre_news3", "id_centre_news =".$id))
      {
        return true;
      }
    }
    if($this->session->userdata('id')=="4")
    {
      if ($this->db->delete("centre_news4", "id_centre_news =".$id))
      {
        return true;
      }
    }
    if($this->session->userdata('id')=="5")
    {
      if ($this->db->delete("centre_news5", "id_centre_news =".$id))
      {
        return true;
      }
    }
  }

  public function edit_product($id)
  {
        $query = $this->db->get_where("product",array("id_product"=>$id));
        $data = $query->result();
        return $data;
  }

  public function save_product($data)
  {
      if ($this->db->insert("product", $data))
      {
        return true;
      }
  }

  public function save_edit_product($data, $id)
  {
        $this->db->set($data);
        $this->db->where("id_product", $id);
        $this->db->update("product");
        return true;
  }

  public function delete_product($id)
  {
        if ($this->db->delete("product", "id_product =".$id))
        {
          return true;
        }
  }

}
