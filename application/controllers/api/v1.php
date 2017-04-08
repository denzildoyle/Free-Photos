<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class V1 extends REST_Controller {

    function __construct(){
        header('Access-Control-Allow-Origin: *');
        parent::__construct();
    }

    public function photos_get(){
        $photos = $this->application_model->getPhotos();
        if($photos){
            $this->response($photos, REST_Controller::HTTP_OK);
        }
        else{
            $this->response([
                'status' => FALSE,
                'message' => 'No photos were found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
