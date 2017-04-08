<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Application_model extends CI_Model{

    public function __construct(){
    }

	public function getPhotos(){
        $this->db->where(array('approved' => '1'));
        $this->db->order_by('created', 'DESC');
	    $query = $this->db->get('photos');
	    return $query->result_array();
	}

	public function getPhoto($id){
        $data = array( 'id' => $id);
        $this->db->where( $data );
        $query = $this->db->get('photos');
        return $query->row(0);
    }

    public function addPhoto($photo){
        $this->db->insert('photos', $photo);
        return $photo;
    }
} //end application_model