<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Submit extends CI_Controller {
	public function index(){
		$this->load->view('submit_view', array('error' => ' ' ));
	}

	function do_upload(){

		$base = 'required|trim|xss_clean';

		//validate form input
		$this->form_validation->set_rules('name', 'name', 'min_length[5]|'.$base)
			 ->set_rules('description', 'description', 'min_length[10]|'.$base);

		//set validation message|
		$this->form_validation->set_message('required', '%s required');
		$this->form_validation->set_message('min_length', '%s must have at least %s characters');

      	if ($this->form_validation->run()){
			$config['upload_path'] = './public/img';
			$config['allowed_types'] = 'jpg';

			//prepend name of photo to file name
			$config['file_name'] = 'FreeFoodPhotography_'.str_replace(' ','_',$this->input->post('name'));;
			$config['overwrite'] = false;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('photo')){
				//add uploaded files to array
				$image = $this->upload->data();

				//add data to array
				$photo = array(
				  'name' => $this->input->post('name'),
				  'path' => $image['file_name'],
				  'description' => $this->input->post('description')
				);

				$this->application_model->addPhoto($photo);
				$this->session->set_flashdata('success-message', 'photo added.');
				$redirect('submit');
			} else{
				$this->session->set_flashdata('error-message', $this->upload->display_errors());
				$this->index();
			}
		}else{
        	$this->index();
      	}
	}
}