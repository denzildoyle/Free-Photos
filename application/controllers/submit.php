<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Submit extends CI_Controller {
	public function index(){
		$this->load->view('submit_view');
	}

	function do_upload(){

		$base = 'required|trim|xss_clean';

		//validate form input
		$this->form_validation->set_rules('fullname', 'fullname',$base)
			 ->set_rules('title', 'title', 'min_length[5]|'.$base)
			 ->set_rules('description', 'description', 'min_length[10]|'.$base);

		//set validation message|
		$this->form_validation->set_message('required', '%s required');
		$this->form_validation->set_message('min_length', '%s must have at least %s characters');

      	if ($this->form_validation->run()){
			$config['upload_path'] = './uploads/images';
			$config['allowed_types'] = 'jpg|png';

			//prepend title of photo to file title
			$config['file_name'] = 'FreeFoodPhotography_'.str_replace(' ','_',$this->input->post('title'));
			$config['overwrite'] = false;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('photo')){
				//add uploaded files to array
				$image = $this->upload->data();

				$resizeConfig['image_library'] = 'gd2';
				$resizeConfig['source_image'] = $image['full_path'];
				$resizeConfig['new_image'] = './uploads/preview';
				$resizeConfig['maintain_ratio'] = TRUE;
				$resizeConfig['quality'] = "100%";
				$resizeConfig['width'] = 600;
				$resizeConfig['height'] = 600;

				$this->image_lib->clear();
				$this->image_lib->initialize($resizeConfig);

				if ( ! $this->image_lib->resize()){
				    echo $this->image_lib->display_errors();
				} else{
					//add data to array
					$photo = array(
					  'fullname' => $this->input->post('fullname'),
					  'title' => $this->input->post('title'),
					  'path' => $image['file_name'],
					  'description' => $this->input->post('description')
					);

					$this->application_model->addPhoto($photo);
					$this->session->set_flashdata('success-message', 'Photo added and waiting for approval.');

					redirect('submit');
				}

			} else{
				$this->session->set_flashdata('error-message', $this->upload->display_errors());
				$this->index();
			}
		}else{
        	$this->index();
      	}
	}
}