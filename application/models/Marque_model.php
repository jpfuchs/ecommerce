<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Marque_model extends CI_Model 
{

	public function findMarque($nb=2)
	{	
		//$requete = $this->db->get("produits",$nb);
		//var_dump($requete->result("produit"));
		//return $requete->result("produit");


		//$sql = "select * from marque";
		//$query=$this->db->query($sql);

		$sql = "select * from marque limit ?";
		$query=$this->db->query($sql, [$nb]);

		//var_dump($query->result("Marque_model"));

		return $query->result("Marque_model");

		//die("class Produit_model");
	}

	public function displayImage()
	{
		return base_url()."assets/images/".$this->image;
	}


	
	
}