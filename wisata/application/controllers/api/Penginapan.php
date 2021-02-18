<?php

use Restserver\Libraries\REST_Controller;


class Penginapan extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('penginapan_model');
  }

  public function penginapanlist_get()
  {
   $data = $this->penginapan_model->penginapanlist();
   $this->response( [ 'penginapan' => $data ], 200 );
  }





}
