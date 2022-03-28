<?php
	function censor($sent){
	  $words = ["ma", "kota"];
	  $tmptab = explode(" ", $sent);
	  var_dump($tmptab);
	  
	}
	censor("Ala ma kota")
?>
