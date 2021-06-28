<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['nim'] = '3311901015' ;
		$data['nama'] = 'Rokki Samuel' ;
		$data['jurusan'] = 'Teknik Informatika' ;
		$this->load->view('welcome_message', $data) ;
	}
}
?>