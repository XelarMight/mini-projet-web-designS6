<?php 
	class Connection{
		public function getConnection(){
			$connection = pg_connect ("host=localhost dbname=gestion_bibliotheque user=tom password=1234");
			if($connection) {
			   echo 'connected';
			} else {
				echo 'there has been an error connecting';
			}
		}
	}
?>