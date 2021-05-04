<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistique_Controller extends CI_Controller {
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
		$data['contents'][0] = 'view_formulaire'; 		
				
	//on charge la page dans le template	
		$this->load->view('templates/template', $data);				
	}
	public function traitement () {		
		$region_id = $_POST['region_id'];			
		$analyse = $_POST['analyse'];			
		$cas = $_POST['cas'];			
		$gueris = $_POST['gueris'];			
		$grave = $_POST['grave'];			
		$deces = $_POST['deces'];			
		$dateStatistique = $_POST['dateStatistique'];

		$this->load->model('Statistique_model', 'statistique');
		$result = $this->statistique->insert ($region_id, $analyse, $cas, $gueris, $grave, $deces, $dateStatistique);				
			redirect('Statistique');		
	}	
}
