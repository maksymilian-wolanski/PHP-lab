<?php
	function datazpesel($pesel){
	  $tab = array();
	  for(int i = 0; i < 11; i++){
      array_push($tab, $pesel[i]);
	  }
	  var_dump($tab);
	}
	datazpesel("02070803628")
?>