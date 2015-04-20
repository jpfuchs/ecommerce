<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Chat_model extends CI_Model 
{

	public function insertMessage($data)
	{	
		//$requete = $this->db->get("produits",$nb);
		//var_dump($requete->result("produit"));
		//return $requete->result("produit");

		//var_dump($this->input->post() ) ;


		$this->db->insert('message', $data);

			
		//return 1;
		//die("class Produit_model");
	}


	public function findMessage()
	{	
		//$requete = $this->db->get("produits",$nb);
		//var_dump($requete->result("produit"));
		//return $requete->result("produit");

		//var_dump($this->input->post() ) ;


		$sql = "select id, auteur, contenu, date_message from message order by date_message desc";
		$query=$this->db->query($sql);

		//var_dump($query->result("Marque_model"));

		return $query->result("Chat_model");

			
		//return 1;
		//die("class Produit_model");
	}



	
	
}