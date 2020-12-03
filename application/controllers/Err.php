<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Err extends CI_Controller
{
  public function page_403()
  {
    $data['page_heading'] = "403 Page Error !";
    $this->load->view('layout/page_403', $data);
  }
}
