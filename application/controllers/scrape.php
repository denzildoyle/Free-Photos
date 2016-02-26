<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class scrape extends CI_Controller {
	public function index(){


		$this->load->helper('download');
		$this->load->helper('xml');
		$xml = simplexml_load_file('http://download.foodshot.co/');
		$array = json_decode(json_encode($xml), TRUE);

		foreach ($array['Contents'] as $value) {
			echo '<a href="http://download.foodshot.co/'.$value['Key'].'"download>'.$value['Key'].'</a><br>';
		}
	}
}