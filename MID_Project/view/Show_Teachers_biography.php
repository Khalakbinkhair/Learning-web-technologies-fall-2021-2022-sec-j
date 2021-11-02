<?php
  include_once('../controller/header.php');

   
     $myfile = fopen('../model/bio.txt', 'r');

     while (!feof($myfile)) {
         $data = fgets($myfile);
           $user = explode('|', $data);
         if ($data != "") {
           
             echo '
               <html>
                 <body bgcolor="aliceblue">
                  <table align ="center"width="60%"  border="1" >
                        <tr>
                         <td colspan="5" align="Center"  bgcolor="lightblue"><b><h1>Teachers Biography</h1></b>
                         </td>
                
                        </tr>
                         <tr>  
                           <td width="50px"  bgcolor="cadetblue"> 
                       
                           <img src="  ' . trim($user[1]) . '" height="40%" width="40%" > 
                            <h3>   ' . trim($user[0]) . '</h3></td> 

                           <td width="50px"  bgcolor="cadetblue">  
                       
                           <img src="      '  .trim($user[4]) . '" height="50%" width="50%" > 
                           <h3>  ' . trim($user[3]) . '</h3></td> 
                           <td width="50px"  bgcolor="cadetblue">  
                       
                           <img src="      ' . trim($user[7]) . '" height="40%" width="40%" > 
                           <h3>  ' . trim($user[6]) . '</h3></td> 
                            <td width="50px"  bgcolor="cadetblue">  
                       
                           <img src="      ' . trim($user[10]) . '" height="50%" width="50%" > 
                           <h3>  ' . trim($user[9]) . '</h3></td> 
                            <td width="50px"  bgcolor="cadetblue">  
                       
                           <img src="      ' . trim($user[13]) . '" height="50%" width="50%" > 
                           <h3>  ' . trim($user[12]) . '</h3></td>
                           </tr>
                             <tr>   <td bgcolor="cadetblue"><b>OPERATING SYSTEM </b></td> 
                                    <td bgcolor="cadetblue"><b>COMPUTER VISION AND PATTERN RECOGNITION </b></td> 
                                    <td bgcolor="cadetblue"><b>ADVANCE DATABASE MANAGEMENT SYSTEM</b> </td> 
                                    <td bgcolor="cadetblue"><b>WEB TECHNOLOGIES</b> </td>                                 
                                    <td bgcolor="cadetblue"><b>DATA WAREHOUSING AND DATA MINING</b> </td> 
                               

                         </tr> 

                         <tr>   <td bgcolor="cadetblue">' . trim($user[2]) . '</td> 
                                <td bgcolor="cadetblue">' . trim($user[5]) . '</td> 
                                 <td bgcolor="cadetblue">' . trim($user[8]) . '</td> 
                                  <td bgcolor="cadetblue">' . trim($user[11]) . '</td> 
                                   <td bgcolor="cadetblue">' . trim($user[14]) . '</td> 

                         </tr> 
                   
                         
             
 
                     
            ';
         }
     }
     echo '
                    
                  
                     
                 </table>
                <center><a href="Home.php"><h3>Back</h3></a></center>

                
             </body>
         </html>
         ';
?>