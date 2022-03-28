<?php

  function triangle($a, $h){
    $area = $a * $h / 2;
    echo ($area);
  }
  
  function rectangle($a, $b){
    $area = $a * $b;
    echo ($area);
  }
  
  function trapeze($a, $b, $h){
    $area = (($a + $b) * h ) / 2;
    echo ($area);
  }
  
	function kal($tryb, $a, $b, $h){
	  switch ($tryb){
	    case 1:
	      triangle($a, $h);
	      break;
	    case 2:
	      rectangle($a, $b);
	      break;
	    case 3:
	      trapeze($a, $b, $h);
	      break;
	  }
	}
	
	//1 -> Trójkąt
	//2 -> Prostokąt
	//3 -> Trapez
	
	kal(1, 1, 1, 1);
?>
