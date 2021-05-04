<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VoteInsertion extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		
	}
	public function insert(){
		//data to send to view
		$data = array();
		//load model
		$this->load->model('Liste_Model');
		//get input form method get
		$etatGet = $this->input->get('etat');
		$code = $this->input->get('candidat');
		$quantite = $this->input->get('vote');
		//call model to insert
		//$resultat_tableau = $this->Save_Model->getResultatTableau();
		//$data['resultat_tableau'] = $resultat_tableau;
		$this->Liste_Model->insert_vote($etatGet, $code, $quantite);
		// $dataToView['liste_produit'] = $resultat;
		// $this->load->view('election_state', $data);
	}
}
