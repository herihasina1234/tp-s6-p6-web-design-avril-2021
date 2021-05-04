<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_Controller extends CI_Controller {
	public function __construct()
    {
		parent::__construct();		
		$this->load->library('session');			
    }
	
	public function index() {	
	//définition des données variables du template 
		$data = array();
		$data['title'] = 'Inscription';
		$data['description'] = 'veuiller vous identifiez';	
		$data['keywords'] = 'desc';
	// on charge la view qui contient le corps de la page
		$data['contents'][0] = 'view_login'; 		
		
		
	//on charge la page dans le template	
		$this->load->view('templates/template', $data);				
	}	

	public function contact() {	
		//définition des données variables du template 
			$data = array();
			$data['title'] = 'Contact';
			$data['description'] = '';	
			$data['keywords'] = '';
		// on charge la view qui contient le corps de la page
			$data['contents'][0] = 'view_contact'; 		
			
			
		//on charge la page dans le template	
			$this->load->view('templates/template', $data);				
		}	
}
