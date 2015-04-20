<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Panier extends CI_Controller
{


	public function index()
	{
		//var_dump(unserialize(get_cookie("cadie")));
		
		// on le récupère depuis la forme STRING (chaine de caracteres)
		$panier = unserialize(get_cookie("cadie"));

		//var_dump($panier);

		$allProduits =[];

		if(!empty($panier))
		{	
			$this->load->model('Panier_model');	// il contient la requete   déjà chargé dans l'autoload

			// on a recupere $allProduits retourné par la requete que l'on renvoi sur la view
			$allProduits = $this->Panier_model->displayProduitsPanier(array_keys($panier));  // puis on recupere le contennu de la requete dans la variable $allPdtsCategorie														
											// en appelant la methode displayProduitsPanier() avec le tableau contrenant le panier
			
		}	

		//var_dump($allProduits);
		//var_dump($panier);
		
		// on charge la vue  
		$this->load->view('panier/monpanier',['allProduits'=>$allProduits,'panier'=>$panier]); 
	}




	public function ajout()
	{
		
		//var_dump($_POST);
		//var_dump($this->input->post());


		//if(empty($_POST['nbrProduits']) || empty($_POST['idProduit']) )
		if(empty($this->input->post('nbrProduits')) || empty($this->input->post('idProduit')))
		{
			//die("parti");
			redirect('main');
		}



		// GESTION DES COOKIES   on prepare le panier a garder sous forme de cookie
		
		// on recupere les variables depuis le $_POST reçu sous forme d'objet
		$idProduit = $this->input->post('idProduit');	
		$nbrProduits = $this->input->post('nbrProduits');


		//var_dump(get_cookie("cadie"));
		//var_dump(unserialize(get_cookie("cadie")));


		// on le récupère depuis la forme STRING (chaine de caracteres)
		$panier = unserialize(get_cookie("cadie"));

		if(empty($panier))
		{
			$panier = [];	// on crée le tableau vide s'il n'existe pas ou c'est le premier passage
		}	



		if(isset($panier[$idProduit]))
		{	// on a deja commande pour ce produit donc on cumule la quantité
			$panier[$idProduit] = intval($panier[$idProduit]) + intval($nbrProduits);

		}
		else 
		{	// premiére quantité saisie pour cet article 

			$panier[$idProduit] = intval($nbrProduits);	
		}	


		// on RE-crée le panier  donc il faut le sauvegarder sion sera ecrasé
		set_cookie('cadie', serialize($panier), time()+172800);  //  temps en secondes  si 0=durée de la session uniquement
	

		redirect("panier");   // on va dans le controlleur <panier> (c'est celui-ci) puis dans la methode index(car rien de précisé) 
	}


	

	public function action($choix,$idProduit)
	{
        
        $panier = unserialize(get_cookie("cadie"));
                       
		if(!empty($panier))
		{	
			switch ($choix) 
			{
				case 'supprimer':
									
					// on le récupère depuis la forme STRING (chaine de caracteres)
					//$panier = unserialize(get_cookie("cadie"));
						
					unset($panier[$idProduit]);

					// on RE-crée le panier  donc il faut le sauvegarder sinon sera ecrasé et perdu 
					set_cookie('cadie', serialize($panier), time()+172800);  //  temps en secondes  si 0=durée de la session uniquement
			
					redirect("panier");   // on va dans le controlleur <panier> (c'est celui-ci) puis dans la methode index(car rien de précisé) 

					break;


				case 'ajouter':
					// on le récupère depuis la forme STRING (chaine de caracteres)
					//$panier = unserialize(get_cookie("cadie"));
						
					$panier[$idProduit] = $panier[$idProduit] + 1  ;

					// on RE-crée le panier  donc il faut le sauvegarder sinon sera ecrasé et perdu 
					set_cookie('cadie', serialize($panier), time()+172800);  //  temps en secondes  si 0=durée de la session uniquement
					
					redirect("panier");   // on va dans le controlleur <panier> (c'est celui-ci) puis dans la methode index(car rien de précisé) 


				case 'enlever':
					// on le récupère depuis la forme STRING (chaine de caracteres)
					//$panier = unserialize(get_cookie("cadie"));

					if($panier[$idProduit]-1  > 0 )
					{
						$panier[$idProduit] = $panier[$idProduit] - 1  ;	
					}

					// on RE-crée le panier  donc il faut le sauvegarder sinon sera ecrasé et perdu 
					set_cookie('cadie', serialize($panier), time()+172800);  //  temps en secondes  si 0=durée de la session uniquement
								
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