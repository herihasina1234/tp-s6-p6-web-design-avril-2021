<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Controller extends CI_Controller {
	public function __construct()
    {
		parent::__construct();		
		$this->load->library('session');			
    }
	
	public function index() {
	//définition des données variables du template 
		$data = array();
		$data['title'] = 'Login';
		$data['description'] = 'veuiller vous identifiez';	
		$data['keywords'] = 'desc';
	// on charge la view qui contient le corps de la page
		$data['contents'][0] = 'view_login'; 				
		
	//on charge la page dans le template			
		$this->load->view('templates/template', $data);			
	}
	public function traitement (){
		$nom = $_POST['nom'];	
		$password = $_POST['password'];					
		
		$this->load->model('Users_model', 'users');
		$result = $this->users->login ($nom, $password);	
		if($result != NULL){									
			$this->session->set_userdata('user', $result);			
			redirect('List_Controller');
		}
		else{
			header('location:index');
		}
	}		
}
