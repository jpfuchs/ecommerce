<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main extends CI_Controller {

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

		//set_cookie("test", "ceci est un test", 0);  // expire sur une nouvelle session
		//set_cookie("test", "ceci est un test", time() + 172800); // expire dans 2j
		//var_dump(get_cookie("test"));

		$this->load->helper('text');

		//$prenom="ludo";

		$this->load->model('Produit_model');
		$articles = $this->Produit_model->findLimit();

		$articlesPLusCher = $this->Produit_model->findProdPLusCherLimit();
		//var_dump($articlesPLusCher);

		//$allImages = $this->Produit_model->displayAllImage();
		//var_dump($allImages);


		//$this->load->view('accueil',["firstname"=>$prenom]);
		//$this->load->view('accueil',["allArticles"=>$articles, "allimages"=>$allImages]);
		$this->load->view('accueil',["allArticles"=>$articles,"allArticlesPlusCher"=>$articlesPLusCher]);
	}
}