<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Pannier_model extends CI_Model 
{

	public function findProduit($panier)
	{	
		//$requete = $this->db->get("produits",$nb);
		//var_dump($requete->result("produit"));
		//return $requete->result("produit");


		//$sql = "select * from marque";
		//$query=$this->db->query($sql);

		//var_dump($panier);

		$sql = "select * from produits where id in ?";
		$query=$this->db->query($sql, [$panier]);

		//var_dump($query->result("Pannier_model"));

		return $query->result("Pannier_model");

		//die("class Produit_model");
	}

	
	public function displayImage()
	{
		return base_url()."assets/images/".$this->image;
	}



	
	
}