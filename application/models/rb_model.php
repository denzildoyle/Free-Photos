

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Application_model extends CI_Model{

    public function __construct(){
    }

    public function addNewAlbum(){
        $album = R::dispense('album');
        $album->title = '13 Songs';
        $album->artist = 'Fugazi';
        $album->year = 1990;
        $album->rating = 5;
        $id = R::store($album);
    }

} //end application_model   