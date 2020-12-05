<?php
  function getArrCount ($arr, $depth=1) {
      if (!is_array($arr) || !$depth) return 0;
        
     $res=count($arr);
        
      foreach ($arr as $in_ar)
         $res+=getArrCount($in_ar, $depth-1);
     
      return $res;
  }
?>