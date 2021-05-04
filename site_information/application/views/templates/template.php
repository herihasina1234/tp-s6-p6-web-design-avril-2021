<?php
	$this->load->view("templates/header");
	for ($i=0; $i < COUNT($contents); $i++) { 
			$this->load->view($contents[$i]);
		}		
	$this->load->view("templates/footer");	
?>
