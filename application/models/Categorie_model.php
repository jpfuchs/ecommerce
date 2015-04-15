<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Categorie_model extends CI_Model 
{

	public function getCategorie()
	{	
		$sql = "select * from categorie ";
		$query=$this->db->query($sql);

		//var_dump($query->result("Marque_model"));

		return $query->result("Categorie_model");
		//die("class Produit_model");
	}



	public function findProduitCategorie($idCategorie)
	{

		//var_dump($idCategorie);

		

		//$sql = "select id_produit FROM produit_categorie WHERE id_categorie= ?";
		$sql = "select  produits.*, marque.nom, id_produit FROM produit_categorie
left join produits on  produits.id = produit_categorie.id_produit
left join marque on produits.marque_idmarque = marque.idmarque
where produit_categorie.id_categorie=?";
		
		$query=$this->db->query($sql, [$idCategorie]);

		//var_dump($query->result("Categorie_model"));

		return $query->result("Categorie_model");

	}

	public function displayImage()
	{
		return base_url()."assets/images/".$this->image;
	}


	
	
	
}