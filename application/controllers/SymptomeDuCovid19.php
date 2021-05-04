<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SymptomeDuCovid19 extends CI_Controller {

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
		$data = array();
		//get data of resultat par index
		//$this->load->model('Liste_Model');

		//$data['result_table'] = $this->Liste_Model->getTableResult();

		$data = array();
		$data["header_title"] = "Site d'Information sur le <strong>covid-19</strong>";
		//$data["header_description"] = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting";
		$data["header_description"] = "Les sympt&ocirc;mes de la COVID‑19 peuvent varier d’une personne à l’autre. Ils peuvent aussi varier en fonction du groupe d’&#226;ge.
		Les enfants ont tendance à présenter des symptômes abdominaux et des éruptions ou changements cutanés.

		Les symptômes peuvent apparaître jusqu’à 14 jours après l’exposition à la <strong>COVID‑19</strong>.";
		$this->load->view('template/header', $data);
		$this->load->view('pages/Symptomes-du-covid-19');
		$this->load->view('template/footer');
	}
}
