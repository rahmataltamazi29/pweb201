<?php

 class Member_model extends CI_Model
 {

   public function __construct()
   {
     parent::__construct();
   }


  public function memberlist( $where = '')
   {
     //sql Query
    // $sql = "SELECT rm.room,rt.rtype,vw.dview,(rt.rate * vw.addv)+rt.rate F_rate
              //FROM `rooms`rm
              //INNER JOIN roomtype rt ON rm.rtype = rt.kode
              //INNER JOIN views vw ON rm.dview = vw.vcode";

    //sql Query codeigniter
      $this->db->select('member_ID,nama,country.Country AS Asal,kota,telepon,hp');
      $this->db->join('country ',' ON (members.negara = country.CC)');

      //$this->db->where('SELECT * FROM `members` WHERE negara = 'ID''));
      if ( $where != '' ) $this->db->where( $where );




     $query = $this->db->get( 'members' );
     return $query->result_array();
   }

   public function negaralist()
   {
     $this->db->select('negara, COUNT(*) duplikat, country.Country');
     $this->db->join('country ',' ON (members.negara = country.CC)');
      $this->db->group_by("negara");
     $this->db->having("COUNT(duplikat) > 1");


     $query = $this->db->get( 'members' );
     return $query->result_array();
   }
   public function nginaplist()
   {
     $this->db->select('*');
     $this->db->join('guests','ON (members.member_ID = guests.member_ID)');
     $this->db->where('guests.date_out IS NULL');

     $query = $this->db->get( 'members' );
     return $query->result_array();
   }

 }
