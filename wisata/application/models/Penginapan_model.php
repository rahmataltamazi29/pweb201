<?php

 class Penginapan_model extends CI_Model
 {

   public function __construct()
   {
     parent::__construct();
   }


public function penginapanlist()
{
  $this->db->select('*');
  $query = $this->db->get('penginapan');
  return $query->result_array();
}


 }
