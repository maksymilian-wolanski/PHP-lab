<?php
	function datazpesel($pesel){
	  $tab = array();
	  $i = 0;
	  while ($i <11){
      array_push($tab, $pesel[$i]);
      $i += 1;
	  }
	  if ($tab[2] <= 1){
	    echo ($tab[4]);
	    echo ($tab[5]);
	    echo ("-");
	    echo ($tab[2]);
	    echo ($tab[3]);
	    echo ("-");
	    echo ("20");
	    echo ($tab[0]);
	    echo ($tab[1]);
	  }
	  else{
	    echo ($tab[4]);
	    echo ($tab[5]);
	    echo ("-");
	    echo ($tab[2] - 2);
	    echo ($tab[3]);
	    echo ("-");
	    echo ("19");
	    echo ($tab[0]);
	    echo ($tab[1]);
	  }
	}
	datazpesel("02070803628")
?>
