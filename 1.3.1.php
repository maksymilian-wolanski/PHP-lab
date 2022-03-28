<?php
  function randtab($a){
    $tab = [];
    for ($i = 0; $i < 10; $i++){
      array_push($tab, rand(1,100));
    }
    echo ($tab[$a]);
  }
  
  randtab(1);
?>
