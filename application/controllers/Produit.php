<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Produit extends CI_Controller {

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
	public function information($idProduit)
	{
		// Charge le helper uniquement pour cette methode
		//$this->load->helper('url');

		//$this->load->helper('text');

		//$prenom="ludo";

		//$this->load->model('Produit');
		//$articles = $this->Produit->findLimit();



		//$this->load->view('accueil',["firstname"=>$prenom]);
		//$this->load->view('accueil',["allArticles"=>$articles]);
		
		//var_dump($idProduit);
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules("contenu", "votre commentaire",
											"required|min_length[3]",
											['required' => "votre commentaire n'est pas valide"]
										);

		$this->form_validation->set_rules("note", "votre note",
											"required|less_than[6]",
											['required' => "Attention veuillez saisir votre note correcte"]
										);


		$this->form_validation->set_rules("auteur", "votre nom",
											"required|min_length[3]",
											['required' => "Attention veuillez saisir votre nom"]
										);



      $this->load->model("Commentaire_model");
		
		if ($this->form_validation->run() == TRUE)
		{
			//$this->load->model("Commentaire_model");


			$dataForm = [
        					'auteur' => $this->input->post("auteur"),
        					'contenu' => $this->input->post("contenu"),
							'note' => $this->input->post("note"),
							'datecommentaire' => date("Y-m-d h:i:s"),
							'produits_id' => $idProduit
					    ];

			$this->Commentaire_model->insertCommentaire($dataForm);
			//var_dump($this->input->post() ) ;	

			//die("formulaire valide");

			$this->session->set_flashdata("success_comm", "votre commentaire a ete bien ajoute");

			redirect("produit/information/".$idProduit);
		}


		$Allcommentaires = $this->Commentaire_model->findCommentaire($idProduit);
		var_dump($Allcommentaires);

		$this->load->model('Produit_model');
		$unProduit = $this->Produit_model->findUnProduit($idProduit);
		if (empty($unProduit))
		{
			show_404();
		}
		//var_dump($unProduit);
		//$this->load->view('produit/unproduit');


		$this->load->view('produit/unproduit',["unproduit"=>$unProduit,"commentaire"=>$Allcommentaires] );
		
	}

	public function produit_moinscher($idProduit)
	{
		// Charge le helper uniquement pour cette methode
		//$this->load->helper('url');

		//$this->load->helper('text');

		//$prenom="ludo";

		//$this->load->model('Produit');
		//$articles = $this->Produit->findLimit();



		//$this->load->view('accueil',["firstname"=>$prenom]);
		//$this->load->view('accueil',["allArticles"=>$articles]);
		
		//var_dump($idProduit);
		$this->load->model('Produit_model');
		$unProduit = $this->Produit_model->findProduitMoinsCher($idProduit);
		//var_dump($unProduit);
		//$this->load->view('produit/unproduit');
		$this->load->view('produit/unproduit',["unproduit"=>$unProduit] );
		
	}

	
	public function produit_marque($idMarque)
	{
		// Charge le helper uniquement pour cette methode
		//$this->load->helper('url');

		$this->load->helper('text');

		//$prenom="ludo";

		//$this->load->model('Produit');
		//$articles = $this->Produit->findLimit();

		//$this->load->view('accueil',["firstname"=>$prenom]);
		//$this->load->view('accueil',["allArticles"=>$articles]);
		
		//var_dump($idProduit);
		$this->load->model('Produit_model');
		$AllProduits = $this->Produit_model->findProduit_Marque($idMarque);
		
		$articlesPLusCher = $this->Produit_model->findProdPLusCherLimit();
	
		//var_dump($AllProduits);
		
		$this->load->view('accueil',["allArticles"=>$AllProduits, "allArticlesPlusCher"=>$articlesPLusCher]);
		
	}
}