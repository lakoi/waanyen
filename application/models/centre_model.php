<?php
class Centre_model extends CI_Model
{
  public function getcentre()
  {
    $query = $this->db->get('centre');
    return $query->result();
  }

  public function getabout1()
  {
    $query = $this->db->get('centre_about1');
    return $query->result();
  }
  public function getabout2()
  {
    $query = $this->db->get('centre_about2');
    return $query->result();
  }
  public function getabout3()
  {
    $query = $this->db->get('centre_about3');
    return $query->result();
  }
  public function getabout4()
  {
    $query = $this->db->get('centre_about4');
    return $query->result();
  }
  public function getabout5()
  {
    $query = $this->db->get('centre_about5');
    return $query->result();
  }

  public function getnews1_h()
  {
    $query = $this->db->query(" select * from centre_news1 order by id_centre_news desc limit 0,1");
    return $query->result();
  }
  public function getnews2_h()
  {
    $query = $this->db->query(" select * from centre_news2 order by id_centre_news desc limit 0,1");
    return $query->result();
  }
  public function getnews3_h()
  {
    $query = $this->db->query(" select * from centre_news3 order by id_centre_news desc limit 0,1");
    return $query->result();
  }
  public function getnews4_h()
  {
    $query = $this->db->query(" select * from centre_news4 order by id_centre_news desc limit 0,1");
    return $query->result();
  }
  public function getnews5_h()
  {
    $query = $this->db->query(" select * from centre_news5 order by id_centre_news desc limit 0,1");
    return $query->result();
  }

  public function getnews1()
  {
    $query = $this->db->query(" select * from centre_news1 order by id_centre_news desc limit 1,3");
    return $query->result();
  }
  public function getnews2()
  {
    $query = $this->db->query(" select * from centre_news2 order by id_centre_news desc limit 1,3");
    return $query->result();
  }
  public function getnews3()
  {
    $query = $this->db->query(" select * from centre_news3 order by id_centre_news desc limit 1,3");
    return $query->result();
  }
  public function getnews4()
  {
    $query = $this->db->query(" select * from centre_news4 order by id_centre_news desc limit 1,3");
    return $query->result();
  }
  public function getnews5()
  {
    $query = $this->db->query(" select * from centre_news5 order by id_centre_news desc limit 1,3");
    return $query->result();
  }

  public function getnews1_list()
  {
    $query = $this->db->query(" select * from centre_news1 order by id_centre_news desc");
    return $query->result();
  }
  public function getnews2_list()
  {
    $query = $this->db->query(" select * from centre_news2 order by id_centre_news desc");
    return $query->result();
  }
  public function getnews3_list()
  {
    $query = $this->db->query(" select * from centre_news3 order by id_centre_news desc");
    return $query->result();
  }
  public function getnews4_list()
  {
    $query = $this->db->query(" select * from centre_news4 order by id_centre_news desc");
    return $query->result();
  }
  public function getnews5_list()
  {
    $query = $this->db->query(" select * from centre_news5 order by id_centre_news desc");
    return $query->result();
  }

  public function getproduct1()
  {
    $query = $this->db->get('centre_product1');
    return $query->result();
  }
  public function getproduct2()
  {
    $query = $this->db->get('centre_product2');
    return $query->result();
  }
  public function getproduct3()
  {
    $query = $this->db->get('centre_product3');
    return $query->result();
  }
  public function getproduct4()
  {
    $query = $this->db->get('centre_product4');
    return $query->result();
  }
  public function getproduct5()
  {
    $query = $this->db->get('centre_product5');
    return $query->result();
  }

  public function getdonate1()
  {
    $query = $this->db->get('centre_donate1');
    return $query->result();
  }
  public function getdonate2()
  {
    $query = $this->db->get('centre_donate2');
    return $query->result();
  }
  public function getdonate3()
  {
    $query = $this->db->get('centre_donate3');
    return $query->result();
  }
  public function getdonate4()
  {
    $query = $this->db->get('centre_donate4');
    return $query->result();
  }
  public function getdonate5()
  {
    $query = $this->db->get('centre_donate5');
    return $query->result();
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
