<?php

use Restserver\Libraries\REST_Controller;


class Wisata extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('wisata_model');
  }

  public function wisatalist_get()
  {
   $data = $this->wisata_model->wisatalist();
   $this->response( [ 'wisata' => $data ], 200 );
  }





}
