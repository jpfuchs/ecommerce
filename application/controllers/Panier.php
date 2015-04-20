<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Panier extends CI_Controller {

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
		//var_dump(unserialize(get_cookie("cadie")));

		$pannier = unserialize(get_cookie("cadie"));

		$produitsPanier= [];

		if (!empty($pannier))
		{

			$this->load->model('Pannier_model');

			$ProduitsPannier = $this->Pannier_model->findProduit(array_keys($pannier));
			//var_dump($ProduitsPannier);

		}



		$this->load->view('panier/panier',["lesproduits"=>$ProduitsPannier, "lepannier"=>$pannier]);

	
	}

	public function ajout()
	{
		// Charge le helper uniquement pour cette methode
		//$this->load->helper('url');

		//$this->load->helper('text');

		//$prenom="ludo";

		//$this->load->model('Marque_model');
		//$allMarques = $this->Marque_model->findMarque();
		//var_dump($allMarques);
		
		//$this->load->view('marque/marque',["lesmarques"=>$allMarques] );

		//var_dump($_POST);

		if (  empty($this->input->post("qty")) || empty($this->input->post("idProduit")) )
		{
			redirect("Main");

		}

		$idProduit = $this->input->post("idProduit");
		$qty = $this->input->post("qty");
		

 
 		$panier = unserialize(get_cookie("cadie"));

 		if (empty($panier))
 		{
 			$panier = [];
 		}

 		if (isset($panier[$idProduit]))
 		{
 			$panier[$idProduit] = intval($panier[$idProduit]) + intval($qty);
 		}
 		else
 		{
 			$panier[$idProduit] = intval($qty);
 		}

		//set_cookie("cadie", serialize($panier), time() + 172800);
		set_cookie('cadie', $panier);

		redirect("Panier");

		//$this->load->view('marque/marque',["lesmarques"=>$allMarques] );
		
	}

	/*public function addQuantite($idProduit)
	{
		die(var_dump($this->input->get()));
		$panier = unserialize(get_cookie("cadie"));
		$panier[$idProduit] = $qty;
		set_cookie('cadie', $panier);
		if($this->input->is_ajax_request())
		{

			die(json_encode(['newPrice' => 10]));
		}		
	}*/



	public function action($choix, $idProduit)
	{
		
 		$panier = unserialize(get_cookie("cadie"));

 		//var_dump($panier);

 	/*	if (empty($panier))
 		{
 			redirect("Panier");

 		}*/

 		//echo $idProduit;

 		//unset ($panier[$idProduit]);

 		//var_dump($panier);

 		//set_cookie("cadie", serialize($panier), time() + 172800);

 		//redirect("Panier");

 		if(!empty($panier))
		{	
			switch ($choix) 
			{
				case 'supprimer':
									
					// on le récupère depuis la forme STRING (chaine de caracteres)
					//$panier = unserialize(get_cookie("cadie"));
						
					if (array_key_exists($idProduit, $panier))
					{
						unset($panier[$idProduit]);

						// on RE-crée le panier  donc il faut le sauvegarder sinon sera ecrasé et perdu 
						//set_cookie('cadie', serialize($panier), time()+172800);  //  temps en secondes  si 0=durée de la session uniquement
						set_cookie('cadie', $panier);

						$this->session->set_flashdata("success_comm", "votre produit a ete bien supprimé");

						redirect("panier");   // on va dans le controlleur <panier> (c'est celui-ci) puis dans la methode index(car rien de précisé) 
					}
					
					break;


				case 'ajouter':
					// on le récupère depuis la forme STRING (chaine de caracteres)
					//$panier = unserialize(get_cookie("cadie"));
						
					$panier[$idProduit] = $panier[$idProduit] + 1  ;

					// on RE-crée le panier  donc il faut le sauvegarder sinon sera ecrasé et perdu 
					//set_cookie('cadie', serialize($panier), time()+172800);  //  temps en secondes  si 0=durée de la session uniquement
					set_cookie('cadie', $panier);
					
					$this->session->set_flashdata("success_comm", "la quantité de votre produit a ete bien ajouté");


					redirect("panier");   // on va dans le controlleur <panier> (c'est celui-ci) puis dans la methode index(car rien de précisé) 


				case 'enlever':
					// on le récupère depuis la forme STRING (chaine de caracteres)
					//$panier = unserialize(get_cookie("cadie"));

					if($panier[$idProduit]-1  > 0 )
					{
						$panier[$idProduit] = $panier[$idProduit] - 1  ;	
					}

					// on RE-crée le panier  donc il faut le sauvegarder sinon sera ecrasé et perdu 
					//set_cookie('cadie', serialize($panier), time()+172800);  //  temps en secondes  si 0=durée de la session uniquement
					set_cookie('cadie', $panier);			
					
					$this->session->set_flashdata("success_comm", "la quantité de votre produit a ete bien enlevé");

					redirect("panier");   // on va dans le controlleur <panier> (c'est celui-ci) puis dans la methode index(car rien de précisé) 



				default:
					# code...
					break;
			}
		}	
		else	
		{
			redirect("main");   // on va dans le controlleur <panier> (c'est celui-ci) puis dans la methode index(car rien de précisé) 
		}
		

	}

	
}