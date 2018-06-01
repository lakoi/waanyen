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

  public function getnews()
  {
      $query = $this->db->get('news');
      return $query->result();
  }

  public function edit_news($id)
  {
        $query = $this->db->get_where("news",array("id_news"=>$id));
        $data = $query->result();
        return $data;
  }

  public function save_news($data)
  {
      if ($this->db->insert("news", $data))
      {
        return true;
      }
  }

  public function save_edit_news($data, $id)
  {
        $this->db->set($data);
        $this->db->where("id_news", $id);
        $this->db->update("news");
        return true;
  }

  public function delete_news($id)
  {
        if ($this->db->delete("news", "id_news =".$id))
        {
          return true;
        }
  }

  public function getproduct()
  {
      $query = $this->db->get('product');
      return $query->result();
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

  public function getjoin()
  {
      $query = $this->db->get('join');
      return $query->result();
  }

  public function edit_join($id)
  {
        $query = $this->db->get_where("join",array("id_join"=>$id));
        $data = $query->result();
        return $data;
  }

  public function save_join($data, $id)
  {
        $this->db->set($data);
        $this->db->where("id_join", $id);
        $this->db->update("join");
        return true;
  }

  public function getfooter()
  {
      $query = $this->db->get('footer');
      return $query->result();
  }

  public function save_footer($data, $id)
  {
        $this->db->set($data);
        $this->db->where("id_footer", $id);
        $this->db->update("footer");
        return true;
  }


}
