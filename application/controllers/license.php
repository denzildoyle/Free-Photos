<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class License extends CI_Controller {
	public function index(){
		$this->load->view('license_view');
	}
}