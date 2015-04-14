<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Categorie extends CI_Controller {

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
		//$this->load->helper('url');
		$this->load->view('categorie/allcategorie');
		
	}


	public function information($idCategorie)
	{	
		//$requete = $this->db->get("produits",$nb);
		//var_dump($requete->result("produit"));
		//return $requete->result("produit");

		$this->load->model('Categorie_model');
		$allProduitCategorie = $this->Categorie_model->findProduitCategorie($idCategorie);
		//var_dump($unProduit);
		//$this->load->view('produit/unproduit');
		//$this->load->view('produit/unproduit',["unproduit"=>$unProduit] );
	}


}