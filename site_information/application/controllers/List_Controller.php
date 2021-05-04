<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_Controller extends CI_Controller {
	public function __construct()
    {
		parent::__construct();		
		$this->load->library('session');			
    }	
	
	public function index($curr_date = '2021-05-03') {	
	//définition des données variables du template 
		$data = array();
		$data['title'] = 'COVID-19:Statistiques a Madagascar';
		$data['description'] = 'veuiller vous identifiez';	
		$data['keywords'] = 'les dernieres statistiques en ce que concerne la pandemie.';	
		// on charge la view qui contient le corps de la page
		$data['contents'][0] = 'view_table'; 		
		
		//params 
//		$curr_date = '2021-05-03';
		//on charge les donnees
		$this->load->model('Statistique_model', 'statistique');		
		$data['statistique'] = $this->statistique->findAll ($curr_date);		
		$data['sumStatistique'] = $this->statistique->findSumStat ($curr_date);		
		$data['statActu'] = $this->statistique->findStatActu ();		

	//on charge la page dans le template	
		$this->load->view('templates/template', $data);				
	}
	
	public function actualite(){
		//définition des données variables du template 
		$data = array();
		$data['title'] = 'COVID-19:Actualite a Madagascar';
		$data['description'] = 'actualite du corona virus a madagascar.Le confinement prend du terrain';	
		$data['keywords'] = 'desc';	
		// on charge la view qui contient le corps de la page
		$data['contents'][0] = 'view_actualite'; 						

	//on charge la page dans le template	
		$this->load->view('templates/template', $data);	
	}

	public function details($subject = 'covid_organics'){
		//définition des données variables du template 
		$data = array();
		$data['title'] = 'COVID-19: information supplementaire sur'.$subject;
		$data['description'] = 'information et explication concernant '.$subject;	
		$data['keywords'] = 'desc';	
		// on charge la view qui contient le corps de la page
		$data['contents'][0] = 'view_'.$subject; 						

	//on charge la page dans le template	
		$this->load->view('templates/template', $data);	
	}
}
