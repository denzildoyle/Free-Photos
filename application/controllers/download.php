<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller {
	public function index(){
		$img_id = $this->input->get('img');
		$data['photo'] = $this->application_model->getPhoto($img_id);
		$this->load->view('download_view', $data);
	}
}