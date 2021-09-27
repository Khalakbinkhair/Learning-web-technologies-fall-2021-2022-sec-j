<?php
      $arr=[10, 20, 30, 40,50];
      echo "array number is  [10, 20, 30, 40,50]";
      echo " <br/>"."we seek 30 if it is in array";
      for($i=0; $i<count($arr); $i++){
        if($arr[$i] == 30)

      {
      echo "<br>"."The number is found!";
      }
        else {
            echo "";
      }
   }
?>