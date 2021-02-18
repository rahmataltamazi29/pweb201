<?php

/**
 *
 */
class Member extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('member_model');
  }


  public function memberlist( $negara = '')
  {
    if ( $negara == '') {
        $where = '';
    }else {
       $where = "negara = '".$negara."'";
    }

    $data['judul'] = "PWebhotel-roomlist";
    $data['members'] = $this->member_model->memberlist( $where );
    $data['negara'] = $this->member_model->negaralist();

    $this->load->view( "layout/header");
    $this->load->view( "memberlist", $data );
    $this->load->view( "layout/footer");
  }
}
