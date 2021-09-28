<?php
    
    echo "<table border=1 >
      <tr>
        <th>The array to declare</th>
        <th colspan='2'>Shapes to print</th>

    
        
      </tr> ";
        echo "<td >";
                $st =   [
                    [1,2,3,'A'],
                    [1,2,'B','C'],
                    [1,'D','E','F']
                ];
                echo "<table border=1 >";
                      
                    for($i=0; $i<3; $i++)
                      {
                         echo "<tr>" ; 
                        for ($j=0; $j <4; $j++) 
                        { 
                           echo" <td>";
                             echo $st[$i][$j]." ";
                           echo" </td>";  
                        }
                         
                        
                        echo "</tr>" ; 
                       
                      }
                      
                      echo "</table >";
                                               
               echo "</td>";


       echo "<td >";
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
          
           echo " <br/>";
           $int_cast='1';
            for($i=1; $i>=1; $i--)
             {
                for($j=1;$j<=$i;$j++)
                {
                  echo  $int_cast++;                }
             
            }
          
               
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
                    
                    
               
                       </table>
                
                
                
                </td>
        
      </tr>
    </table>";




?>