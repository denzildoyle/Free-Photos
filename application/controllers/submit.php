<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Submit extends CI_Controller {
	public function index(){
		$this->load->view('submit_view');
	}
}