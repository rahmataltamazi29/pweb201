<?php

 class Wisata_model extends CI_Model
 {

   public function __construct()
   {
     parent::__construct();
   }


public function wisatalist()
{
  $this->db->select('*');
  $query = $this->db->get('tempatwisata');
  return $query->result_array();
}


 }
