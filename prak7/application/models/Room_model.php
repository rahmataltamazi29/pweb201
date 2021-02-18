<?php


 class Room_model extends CI_Model
 {

   public function __construct()
   {
     parent::__construct();
   }


  public function roomlist( $where = '')
   {
     //sql Query
    // $sql = "SELECT rm.room,rt.rtype,vw.dview,(rt.rate * vw.addv)+rt.rate F_rate
              //FROM `rooms`rm
              //INNER JOIN roomtype rt ON rm.rtype = rt.kode
              //INNER JOIN views vw ON rm.dview = vw.vcode";

              //SELECT rm.room,rt.rtype,vw.dview,gs.date_out,(rt.rate * vw.addv)+rt.rate F_rate
              //FROM `rooms`rm
              //INNER JOIN roomtype rt ON rm.rtype = rt.kode
              //INNER JOIN views vw ON rm.dview = vw.vcode
              // INNER JOIN guests gs ON rm.room = gs.room
              //INNER JOIN members mb on gs.member_ID = mb.member_ID

    //sql Query codeigniter
      $this->db->select('rm.room,rt.rtype,vw.dview,gs.date_in,gs.date_out,(rt.rate * vw.addv)+rt.rate F_rate');
      $this->db->join('roomtype rt',' rm.rtype = rt.kode');
      $this->db->join('views vw',' rm.dview = vw.vcode');
      //INNER JOIN guests gs USING(room)
      $this->db->join('guests gs',' rm.room = gs.room');
      $this->db->join('members mb','gs.member_ID = mb.member_ID');

      //$this->db->where("room LIKE '12__%'");
      if ( $where != '' ) $this->db->where( $where );




     $query = $this->db->get( 'rooms rm' );
     return $query->result_array();
   }

 }
