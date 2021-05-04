<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InformationVaccin extends CI_Controller {

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
		$data["header_title"] = "Informations sur les vaccins du covid-19";
		$data["header_description"] = "Les prochains objectifs de la stratégie vaccinale sont les suivants :

    20 millions de personnes vaccinées à la mi-mai ;
    30 millions de personnes vaccinées à la mi-juin ;
    d’ici la fin de l’été, tous les Français de plus de 18 ans qui souhaitent se faire vacciner pourront l’être.

Pour accroître le rythme de la vaccination, les méga-centres de vaccination sont mis en place. Ils se distinguent par leur capacité vaccinale accrue (autour de 1 000 à 2 000 injections par jour).

La stratégie de déploiement des auto-tests :

    Depuis le 12 avril : libre accès en pharmacie pour tous sans remboursement, et avec remboursement pour les aides à domicile auprès de personnes âgées et handicapées et les accueillants familiaux.
    Depuis le 19 avril : déploiement en Outremer, et expérimentation auprès de publics précaires.";
		$this->load->view('template/header', $data);
		$this->load->view('pages/Information-Vaccin');
		$this->load->view('template/footer');
	}
}
