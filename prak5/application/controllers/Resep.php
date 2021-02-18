<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Resep extends CI_Controller {


    public function pallubasa()
    {
    $this->load->view('resep/pallubasa');
    }
    public function balado()
    {
    $this->load->view('resep/balado');
    }
    public function buntutsapi()
    {
    $this->load->view('resep/buntutsapi');
    }
    public function coto()
    {
    $this->load->view('resep/coto');
    }
    public function gado2()
    {
    $this->load->view('resep/gado2');
    }




}
?>
