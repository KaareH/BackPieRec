<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array();
		$data['recordings'] = array();
		$files = glob('data/*.{wav}', GLOB_BRACE);
		foreach($files as $file) {
			$data['recordings'][] = $file;
		}
		$this->load->view('home', $data);
	}
}
