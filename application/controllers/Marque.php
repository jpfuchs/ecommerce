<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Marque extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// Charge le helper uniquement pour cette methode
		//$this->load->helper('url');

		//$this->load->helper('text');

		//$prenom="ludo";

		$this->load->model('Marque_model');
		$allMarques = $this->Marque_model->findMarque();
		//var_dump($allMarques);
		
		$this->load->view('marque/marque',["lesmarques"=>$allMarques] );
		
	}

	
}