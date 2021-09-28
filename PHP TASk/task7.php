<?php
     echo "<table border=1>
     <tr>
          <td>";
          for($i=0; $i<3;$i++)
            {
              for($j=0;$j<=$i;$j++)
               {
               echo "*";
               }
            echo "<br/>";
            }
          "</td>";
           echo "<td>";
           $int_cast='1';
            for($i=3; $i>=1; $i--)
             {
                for($j=1;$j<=$i;$j++)
                {
                  echo  $int_cast++;                }
             break;
            }
       echo " <br/>";
           $int_cast='1';
            for($i=2; $i>=1; $i--)
             {
                for($j=1;$j<=$i;$j++)
                {
                  echo  $int_cast++;                }
             break;
            }
          "</td>";
           echo " <br/>";
           $int_cast='1';
            for($i=1; $i>=1; $i--)
             {
                for($j=1;$j<=$i;$j++)
                {
                  echo  $int_cast++;                }
             break;
            }
          "</td>";

         echo "<td>";
          
         $ch='A';

            for($i=0; $i<3;$i++)
             {
                for($j=0;$j<=$i;$j++)
                 {
                  echo  $ch++;
                 }
              echo "<br/>";
             }
         
         
          echo "</td>
     </tr>
     
        </table>";
?>