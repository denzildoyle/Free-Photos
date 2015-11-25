<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Application_model extends CI_Model{

    public function __construct(){
    }
	public function getPhotos(){
	    $query = $this->db->get('photos');
	    return $query->result_array();
	}
} //end application_model