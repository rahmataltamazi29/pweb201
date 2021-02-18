<?php

/**
 *
 */
class Room extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('room_model');
  }


  public function roomlist( $lantai = '')
  {
    if ( $lantai == '') {
        $where = '';
    }else {
       $where = "rm.room LIKE '". $lantai ."__%'";
    }

    $data['judul'] = "PWebhotel-roomlist";
    $data['rooms'] = $this->room_model->roomlist( $where );

    $this->load->view( "layout/header");
    $this->load->view( "roomlist", $data );
    $this->load->view( "layout/footer");
  }
}
