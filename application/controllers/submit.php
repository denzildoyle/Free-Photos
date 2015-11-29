<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Submit extends CI_Controller {
	public function index(){
		$this->load->view('submit_view', array('error' => ' ' ));
	}

	function do_upload(){
		$config['upload_path'] = './public/img';
		$config['allowed_types'] = 'jpg';
		//prepend name of photo to file
		$config['file_name'] = 'myfile';
		$config['overwrite'] = false;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('userPhoto')){
			//add uploaded files to array
			$image = $this->upload->data();

			//add data to array
			$photo = array(
			  'name' => $this->input->post('name'),
			  'path' => 'path/'.$image['file_name'],
			  'description' => $this->input->post('description')
			);

			print_r($photo);
			// $this->application_model->addPhoto($photo);
			// $this->session->set_flashdata('msg', 'photo added.');
			// $this->index();
		} else{
			$this->session->set_flashdata('msg', $this->upload->display_errors());
			$this->index();
		}
	}
}