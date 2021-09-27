<?php
  $number1=10;
  echo "First Number is=> ". $number1;
  $number2=20;
  echo "<br/>"."Second Number is=> ". $number2;
  $number3=30;
  echo "<br/>"."Thrid  Number is=> ". $number3;
  if($number1>$number2 && $num1>$num3){
        echo "<br/>The Gratter Number is:".$number1;
      }
      elseif($number2>$number1 && $number2>$number3){
          echo "<br/>"."The Gratter Number is:".$number2;
      }
      
        elseif ($number3>$number1 && $number3>$number2){
          echo "<br/>"."The Gratter Number is:".$number3;
           
        }
        else
         echo "None"
          
?>