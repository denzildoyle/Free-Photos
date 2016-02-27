<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
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
