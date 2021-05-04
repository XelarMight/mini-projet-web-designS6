<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatistiquesCasCovid19 extends CI_Controller {

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
		$this->load->model('Liste_Model');

		$data = array();
		$data["header_title"] = "Statistiques des cas covid-19";
		$data["header_description"] = "Le <strong>COVID-19</strong> a touché certains pays beaucoup plus durement que d'autres, les différences dans la façon dont les infections sont enregistrées par chaque pays rendent cependant impossible une comparaison à l’identique.";

		$resultat = $this->Liste_Model->getGlobalStatistique2();
		$label = $resultat[0];
		$nombre_de_cas = $resultat[1];
		$data["label"] = $this->Liste_Model->getValStat($label);
		$data["nbCas"] = $this->Liste_Model->getValStat($nombre_de_cas);

		$this->load->view('template/header', $data);
		$this->load->view('pages/Statistiques-des-cas');
		$this->load->view('template/footer');
	}
}
