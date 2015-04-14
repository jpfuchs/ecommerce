<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Commentaire_model extends CI_Model 
{

	public function insertCommentaire($data)
	{	
		//$requete = $this->db->get("produits",$nb);
		//var_dump($requete->result("produit"));
		//return $requete->result("produit");

		//var_dump($this->input->post() ) ;


		$this->db->insert('commentaires', $data);

			
		//return 1;
		//die("class Produit_model");
	}


public function findCommentaire($idProduit)
	{	
		
		//var_dump($idProduit);
		$query=$this->db->get_where("commentaires", ["produits_id"=>$idProduit]);


		//var_dump($query->result("Commentaire_model"));
			
		return ($query->result("Commentaire_model"));
		//die("class Produit_model");
	}

	
	
	
}