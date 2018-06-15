<?php
class Back_centre_model extends CI_Model
{
  public function edit_about($id)
  {
    $s = $this->session->userdata('id');
    switch($s)
    {
      case "1" :
      {
        $query = $this->db->get_where("centre_about1",array("id_centre_about"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
      case "2" :
      {
        $query = $this->db->get_where("centre_about2",array("id_centre_about"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
      case "3" :
      {
        $query = $this->db->get_where("centre_about3",array("id_centre_about"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
      case "4" :
      {
        $query = $this->db->get_where("centre_about4",array("id_centre_about"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
      case "5" :
      {
        $query = $this->db->get_where("centre_about5",array("id_centre_about"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
    }
  }

  public function save_edit_about($data, $id)
  {
    $s = $this->session->userdata('id');
    switch($s)
    {
      case "1" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_about", $id);
        $this->db->update("centre_about1");
        return true;
        break;
      }
      case "2" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_about", $id);
        $this->db->update("centre_about2");
        return true;
        break;
      }
      case "3" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_about", $id);
        $this->db->update("centre_about3");
        return true;
        break;
      }
      case "4" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_about", $id);
        $this->db->update("centre_about4");
        return true;
        break;
      }
      case "5" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_about", $id);
        $this->db->update("centre_about5");
        return true;
        break;
      }
    }
  }

  public function edit_news($id)
  {
    $s = $this->session->userdata('id');
    switch($s)
    {
      case "1" :
      {
        $query = $this->db->get_where("centre_news1",array("id_centre_news"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
      case "2" :
      {
        $query = $this->db->get_where("centre_news2",array("id_centre_news"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
      case "3" :
      {
        $query = $this->db->get_where("centre_news3",array("id_centre_news"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
      case "4" :
      {
        $query = $this->db->get_where("centre_news4",array("id_centre_news"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
      case "5" :
      {
        $query = $this->db->get_where("centre_news5",array("id_centre_news"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
    }
  }

  public function save_news($data)
  {
    $s = $this->session->userdata('id');
    switch($s)
    {
      case "1" :
      {
        if ($this->db->insert("centre_news1", $data))
        {
          return true;
        }
        break;
      }
      case "2" :
      {
        if ($this->db->insert("centre_news2", $data))
        {
          return true;
        }
        break;
      }
      case "3" :
      {
        if ($this->db->insert("centre_news3", $data))
        {
          return true;
        }
        break;
      }
      case "4" :
      {
        if ($this->db->insert("centre_news4", $data))
        {
          return true;
        }
        break;
      }
      case "5" :
      {
        if ($this->db->insert("centre_news5", $data))
        {
          return true;
        }
        break;
      }
    }
  }

  public function save_edit_news($data, $id)
  {
    $s = $this->session->userdata('id');
    switch($s)
    {
      case "1" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_news", $id);
        $this->db->update("centre_news1");
        return true;
        break;
      }
      case "2" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_news", $id);
        $this->db->update("centre_news2");
        return true;
        break;
      }
      case "3" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_news", $id);
        $this->db->update("centre_news3");
        return true;
        break;
      }
      case "4" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_news", $id);
        $this->db->update("centre_news4");
        return true;
        break;
      }
      case "5" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_news", $id);
        $this->db->update("centre_news5");
        return true;
        break;
      }
    }
  }

  public function delete_news($id)
  {
    $s = $this->session->userdata('id');
    switch($s)
    {
      case "1" :
      {
        if ($this->db->delete("centre_news1", "id_centre_news =".$id))
        {
          return true;
        }
        break;
      }
      case "2" :
      {
        if ($this->db->delete("centre_news2", "id_centre_news =".$id))
        {
          return true;
        }
        break;
      }
      case "3" :
      {
        if ($this->db->delete("centre_news3", "id_centre_news =".$id))
        {
          return true;
        }
        break;
      }
      case "4" :
      {
        if ($this->db->delete("centre_news4", "id_centre_news =".$id))
        {
          return true;
        }
        break;
      }
      case "5" :
      {
        if ($this->db->delete("centre_news5", "id_centre_news =".$id))
        {
          return true;
        }
        break;
      }
    }
  }

  public function edit_product($id)
  {
    $s = $this->session->userdata('id');
    switch($s)
    {
      case "1" :
      {
        $query = $this->db->get_where("centre_product1",array("id_centre_product"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
      case "2" :
      {
        $query = $this->db->get_where("centre_product2",array("id_centre_product"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
      case "3" :
      {
        $query = $this->db->get_where("centre_product3",array("id_centre_product"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
      case "4" :
      {
        $query = $this->db->get_where("centre_product4",array("id_centre_product"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
      case "5" :
      {
        $query = $this->db->get_where("centre_product5",array("id_centre_product"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
    }
  }

  public function save_product($data)
  {
    $s = $this->session->userdata('id');
    switch($s)
    {
      case "1" :
      {
        if ($this->db->insert("product1", $data))
        {
          return true;
        }
        break;
      }
      case "2" :
      {
        if ($this->db->insert("product2", $data))
        {
          return true;
        }
        break;
      }
      case "3" :
      {
        if ($this->db->insert("product3", $data))
        {
          return true;
        }
        break;
      }
      case "4" :
      {
        if ($this->db->insert("product4", $data))
        {
          return true;
        }
        break;
      }
      case "5" :
      {
        if ($this->db->insert("product5", $data))
        {
          return true;
        }
        break;
      }
    }
  }

  public function save_edit_product($data, $id)
  {
    $s = $this->session->userdata('id');
    switch($s)
    {
      case "1" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_product", $id);
        $this->db->update("centre_product1");
        return true;
        break;
      }
      case "2" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_product", $id);
        $this->db->update("centre_product2");
        return true;
        break;
      }
      case "3" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_product", $id);
        $this->db->update("centre_product3");
        return true;
        break;
      }
      case "4" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_product", $id);
        $this->db->update("centre_product4");
        return true;
        break;
      }
      case "5" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_product", $id);
        $this->db->update("centre_product5");
        return true;
        break;
      }
    }
  }

  public function delete_product($id)
  {
    $s = $this->session->userdata('id');
    switch($s)
    {
      case "1" :
      {
        if ($this->db->delete("centre_product1", "id_centre_product =".$id))
        {
          return true;
        }
        break;
      }
      case "2" :
      {
        if ($this->db->delete("centre_product2", "id_centre_product =".$id))
        {
          return true;
        }
        break;
      }
      case "3" :
      {
        if ($this->db->delete("centre_product3", "id_centre_product =".$id))
        {
          return true;
        }
        break;
      }
      case "4" :
      {
        if ($this->db->delete("centre_product4", "id_centre_product =".$id))
        {
          return true;
        }
        break;
      }
      case "5" :
      {
        if ($this->db->delete("centre_product5", "id_centre_product =".$id))
        {
          return true;
        }
        break;
      }
    }
  }

  public function edit_donate($id)
  {
    $s = $this->session->userdata('id');
    switch($s)
    {
      case "1" :
      {
        $query = $this->db->get_where("centre_donate1",array("id_centre_donate"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
      case "2" :
      {
        $query = $this->db->get_where("centre_donate2",array("id_centre_donate"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
      case "3" :
      {
        $query = $this->db->get_where("centre_donate3",array("id_centre_donate"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
      case "4" :
      {
        $query = $this->db->get_where("centre_donate4",array("id_centre_donate"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
      case "5" :
      {
        $query = $this->db->get_where("centre_donate5",array("id_centre_donate"=>$id));
        $data = $query->result();
        return $data;
        break;
      }
    }
  }

  public function save_edit_donate($data, $id)
  {
    $s = $this->session->userdata('id');
    switch($s)
    {
      case "1" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_donate", $id);
        $this->db->update("centre_donate1");
        return true;
        break;
      }
      case "2" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_donate", $id);
        $this->db->update("centre_donate2");
        return true;
        break;
      }
      case "3" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_donate", $id);
        $this->db->update("centre_donate3");
        return true;
        break;
      }
      case "4" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_donate", $id);
        $this->db->update("centre_donate4");
        return true;
        break;
      }
      case "5" :
      {
        $this->db->set($data);
        $this->db->where("id_centre_donate", $id);
        $this->db->update("centre_donate5");
        return true;
        break;
      }
    }
  }

  public function save_edit_contact($data, $id)
  {
      $this->db->set($data);
      $this->db->where("id_centre_contact", $id);
      $this->db->update("centre_contact");
      return true;
  }

}
