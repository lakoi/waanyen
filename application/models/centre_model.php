<?php
class Centre_model extends CI_Model
{
  public function getcentre()
  {
    $query = $this->db->get('centre');
    return $query->result();
  }

  public function getabout()
  {
    $s = $this->session->userdata('home');
    switch($s)
    {
      case "1" :
      {
        $query = $this->db->get('centre_about1');
        return $query->result();
        break;
      }
      case "2" :
      {
        $query = $this->db->get('centre_about2');
        return $query->result();
        break;
      }
      case "3" :
      {
        $query = $this->db->get('centre_about3');
        return $query->result();
        break;
      }
      case "4" :
      {
        $query = $this->db->get('centre_about4');
        return $query->result();
        break;
      }
      case "5" :
      {
        $query = $this->db->get('centre_about5');
        return $query->result();
        break;
      }
    }
  }

  public function getnews_h()
  {
    $s = $this->session->userdata('home');
    switch($s)
    {
      case "1" :
      {
        $query = $this->db->query(" select * from centre_news1 order by id_centre_news desc limit 0,1");
        return $query->result();
        break;
      }
      case "2" :
      {
        $query = $this->db->query(" select * from centre_news2 order by id_centre_news desc limit 0,1");
        return $query->result();
        break;
      }
      case "3" :
      {
        $query = $this->db->query(" select * from centre_news3 order by id_centre_news desc limit 0,1");
        return $query->result();
        break;
      }
      case "4" :
      {
        $query = $this->db->query(" select * from centre_news4 order by id_centre_news desc limit 0,1");
        return $query->result();
        break;
      }
      case "5" :
      {
        $query = $this->db->query(" select * from centre_news5 order by id_centre_news desc limit 0,1");
        return $query->result();
        break;
      }
    }
  }

  public function getnews()
  {
    $s = $this->session->userdata('home');
    switch($s)
    {
      case "1" :
      {
        $query = $this->db->query(" select * from centre_news1 order by id_centre_news desc limit 1,3");
        return $query->result();
        break;
      }
      case "2" :
      {
        $query = $this->db->query(" select * from centre_news2 order by id_centre_news desc limit 1,3");
        return $query->result();
        break;
      }
      case "3" :
      {
        $query = $this->db->query(" select * from centre_news3 order by id_centre_news desc limit 1,3");
        return $query->result();
        break;
      }
      case "4" :
      {
        $query = $this->db->query(" select * from centre_news4 order by id_centre_news desc limit 1,3");
        return $query->result();
        break;
      }
      case "5" :
      {
        $query = $this->db->query(" select * from centre_news5 order by id_centre_news desc limit 1,3");
        return $query->result();
        break;
      }
    }
  }

  public function getnews_list()
  {
    $s = $this->session->userdata('home');
    switch($s)
    {
      case "1" :
      {
        $query = $this->db->query(" select * from centre_news1 order by id_centre_news desc");
        return $query->result();
        break;
      }
      case "2" :
      {
        $query = $this->db->query(" select * from centre_news2 order by id_centre_news desc");
        return $query->result();
        break;
      }
      case "3" :
      {
        $query = $this->db->query(" select * from centre_news3 order by id_centre_news desc");
        return $query->result();
        break;
      }
      case "4" :
      {
        $query = $this->db->query(" select * from centre_news4 order by id_centre_news desc");
        return $query->result();
        break;
      }
      case "5" :
      {
        $query = $this->db->query(" select * from centre_news5 order by id_centre_news desc");
        return $query->result();
        break;
      }
    }
  }

  public function getproduct()
  {
    $s = $this->session->userdata('home');
    switch($s)
    {
      case "1" :
      {
        $query = $this->db->get('centre_product1');
        return $query->result();
      }
      case "2" :
      {
        $query = $this->db->get('centre_product2');
        return $query->result();
        break;
      }
      case "3" :
      {
        $query = $this->db->get('centre_product3');
        return $query->result();
        break;
      }
      case "4" :
      {
        $query = $this->db->get('centre_product4');
        return $query->result();
        break;
      }
      case "5":
      {
        $query = $this->db->get('centre_product5');
        return $query->result();
        break;
      }
    }
  }

  public function getdonate()
  {
    $s = $this->session->userdata('home');
    switch($s)
    {
      case "1" :
      {
        $query = $this->db->get('centre_donate1');
        return $query->result();
        break;
      }
      case "2" :
      {
        $query = $this->db->get('centre_donate2');
        return $query->result();
        break;
      }
      case "3" :
      {
        $query = $this->db->get('centre_donate3');
        return $query->result();
        break;
      }
      case "4" :
      {
        $query = $this->db->get('centre_donate4');
        return $query->result();
        break;
      }
      case "5" :
      {
        $query = $this->db->get('centre_donate5');
        return $query->result();
        break;
      }
    }
  }

  public function getcontact($id)
  {
    $query = $this->db->get_where("centre_contact",array("id_centre_contact"=>$id));
    $data = $query->result();
    return $data;
  }

  public function getservice($id)
  {
    $query = $this->db->get_where("centre_product_service",array("id_centre_product_service"=>$id));
    $data = $query->result();
    return $data;
  }

}
