<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Application_model extends CI_Model{

    public function __construct(){
    }

	public function getPhotos(){
        $this->db->where(array('approved' => '1'));
	    $query = $this->db->get('photos');
	    return $query->result_array();
	}

	public function getPhoto($id){
        $data = array( 'id' => $id);
        $this->db->where( $data );
        $query = $this->db->get('photos');
        return $query->row(0);
    }

    public function setUser($photo){
        $this->db->insert('photos', $photo);
        return $photo;
    }
} //end application_model