<?php

 class Guest_model extends CI_Model
 {

   public function __construct()
   {
     parent::__construct();
   }


  public function guestlist( $where = '')
   {
     //sql Query
    // $sql = "SELECT rm.room,rt.rtype,vw.dview,(rt.rate * vw.addv)+rt.rate F_rate
              //FROM `rooms`rm
              //INNER JOIN roomtype rt ON rm.rtype = rt.kode
              //INNER JOIN views vw ON rm.dview = vw.vcode";

    //sql Query codeigniter
      $this->db->select('nama,country.Country AS Asal,guests.date_in,guests.date_out');
      $this->db->join('members',' guests.member_ID=members.member_ID');
      $this->db->join('country',' country.cc=members.negara');


      //$this->db->where('(MONTH(date_in)AND MONTH(date_out) = 11'));
      if ( $where != '' ) $this->db->where( $where );




     $query = $this->db->get( 'guests' );
     return $query->result_array();
   }

 }
