<?php

use Restserver\Libraries\REST_Controller;

class Members extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('member_model');
  }

  public function memberlist_get()
  {
   $data = $this->member_model->memberlist();
   $this->response( [ 'members' => $data ], 200 );
  }

  public function listnginap_get()
  {
    $data = $this->member_model->nginaplist();
    $this->response( [ 'members' => $data ], 200 );
  }



}
