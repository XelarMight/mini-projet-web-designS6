<?php if(! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
Class Liste_Model extends CI_Model{

	function getValStat($valeurs)
	{
		$valeur="[";
		for($i=0;$i<count($valeurs);$i++)
		{
			$valeur=$valeur."'".$valeurs[$i]."',";
		};
		return $valeur."]";
	}

	public function getGlobalStatistique(){
		$result_table =array();
		$request = "select * from t_global_statistiques";
		$sql_result = $this->db->query($request);
		foreach($sql_result->result_array() as $row){
			$result_table[] = $row;
		}
		return $result_table;
	}

	public function getGlobalStatistique2(){
		$result_table =array();
		$result_label = array();
		$result_number = array();
		$request = "select * from t_global_statistiques";
		$sql_result = $this->db->query($request);
		foreach($sql_result->result_array() as $row){
			$result_label[] = $row['continent'];
			$result_number[] = $row['nombredecas'];
		}
		$result_table[] = $result_label;
		$result_table[] = $result_number;
		return $result_table;
	}

}
