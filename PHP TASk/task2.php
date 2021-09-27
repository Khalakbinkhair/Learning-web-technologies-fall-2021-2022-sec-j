<?php

   
   $Price=100;
   $VAT=.15." ....[VAT = 15% of the amount]";
   $Total_price=$VAT*$Price+$Price;
   echo "<br/>"."price of product ".$Price;
   echo "<br/>"."VAT on Product ".$VAT;
   echo "<br/>"."Total Price ".$Total_price;

?>