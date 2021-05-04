<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_Controller extends CI_Controller {
	public function index() {
		$nom = $_POST['nom'];	
		$password = $_POST['password'];			
		$cost = 20;
		
		$this->load->model('Users_model', 'users');
		$this->users->insert ($nom, $password, $cost);		
	}		
}
