<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller {
	public function index(){
		echo $this->input->get('img');
	}
}