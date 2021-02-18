<?php

use Restserver\Libraries\REST_Controller;


class Rooms extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('room_model');
  }
  public function roomrate_get()
  {
    $data = $this->room_model->roomrate();
    $this->response( [ 'tarif' => $data ], 200 );
  }

  public function roomcountbytype_get()
  {
    $data = $this->room_model->roomcount();
    $this->response([ 'ruangan'=> $data], 200);
  }

  public function roomlist_get()
  {
    $data = $this->room_model->roomlist();
    $this->response( [ 'rooms' => $data ], 200 );
  }
}
