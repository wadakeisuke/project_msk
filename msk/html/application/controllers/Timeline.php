<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timeline extends CI_Controller {

	public function index()
	{
            $this->load->view('timeline/index.php');
	}
}
