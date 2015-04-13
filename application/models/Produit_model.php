<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Produit_model extends CI_Model 
{

	public function findLimit($nb=8)
	{	
		//$requete = $this->db->get("produits",$nb);
		//var_dump($requete->result("produit"));
		//return $requete->result("produit");


		$sql = "select * from produits limit ?";
		$query=$this->db->query($sql, [$nb]);
		return $query->result("Produit_model");

		die("class Produit_model");
	}

	
	public function findProdPlusCherLimit($nb=4)
	{		
		//$requete = $this->db->get("produits",$nb);
		//var_dump($requete->result("produit"));
		//return $requete->result("produit");


		$sql = "select * from produits order by prix desc limit ?";
		$query=$this->db->query($sql, [$nb]);
		//var_dump($query->result("Produit_model"));

		
		return $query->result("Produit_model");

		die("class Produit_model");
	}

	public function displayImage()
	{
		return base_url()."assets/images/".$this->image;
	}

	public function findUnProduit($idProduit)
	{	
		//$requete = $this->db->get("produits",$nb);
		//var_dump($requete->result("produit"));
		//return $requete->result("produit");
		//var_dump($idProduit);

		//$sql = "select * from produits where id= ?";
		//$query=$this->db->query($sql, [$idProduit]);
		//var_dump($query->result());
		//return $query->result("Produit_model");

		//autre facon de faire la reqete avec le db_getwhere
		$query=$this->db->get_where("produits", ["id"=>$idProduit]);

		// result == fetch-all
		//var_dump($query->result("Produit_model"));

		// unbuffered_row == fetch
		//var_dump($query->unbuffered_row("Produit_model"));
		return $query->unbuffered_row("Produit_model");

		//die("class Produit");
	}

	public function findProduit_Marque($idMarque)
	{	
		//$requete = $this->db->get("produits",$nb);
		//var_dump($requete->result("produit"));
		//return $requete->result("produit");

		$sql = "select * from produits where marque_idmarque= ?";
		$query=$this->db->query($sql, [$idMarque]);
		
		//var_dump($query->result("Produit_model"));

		return $query->result("Produit_model");

		//die("class Produit_model");
	}

	public function displayAllImage()
	{	
		//$requete = $this->db->get("produits",$nb);
		//var_dump($requete->result("produit"));
		//return $requete->result("produit");

		$sql = "select image from produits";
		$query=$this->db->query($sql);
		
		//var_dump($query->result("Produit_model"));

		return $query->result("Produit_model");

		//die("class Produit_model");
	}
}