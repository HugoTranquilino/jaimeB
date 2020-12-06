<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Intro extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data = '';
        $body = $this->load->view('micrositio/content_view',$data,TRUE);
        $datos_vista = array('content_view' => $body);
        $this->load->view('template',$datos_vista); 
	}
} //endCI
