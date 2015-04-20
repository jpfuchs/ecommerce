<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Chat extends CI_Controller {

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

		$this->load->helper('form');
		$this->load->library('form_validation');


		
		$this->form_validation->set_rules("auteur", "votre auteur",
											"required|min_length[2]",
											['required' => "votre auteur n'est pas valide"]
										);

		$this->form_validation->set_rules("contenu", "votre contenu",
											"required|max_length[50]",
											['required' => "votre contenu n'est pas valide"]
										);

	


      	$this->load->model("Chat_model");

      	if ($this->form_validation->run() == TRUE)
		{
			//die("test");

			//die("ajax");

			


			$dataForm = [
        					'auteur' => $this->input->post("auteur"),
        					'contenu' => $this->input->post("contenu"),
        					'date_message' => date("Y-m-d h:i:s")
					    ];

			$this->Chat_model->insertMessage($dataForm);


			$this->session->set_flashdata("success_comm", "votre message a ete bien ajoute");


			if($this->input->is_ajax_request())
			{

				die(json_encode([
					"csrf"=>$this->security->get_csrf_hash()
				]));

			}	

		}
		
		$allMessages = $this->Chat_model->findMessage();


		if($this->input->is_ajax_request())
		{
			die(json_encode([
					"message"=>$this->load->view("ajaxmessage", ["allMessages"=>$allMessages], true)]));
		}

		$this->load->view('discussion/discussion',["allMessages"=>$allMessages]);

		
	}
}