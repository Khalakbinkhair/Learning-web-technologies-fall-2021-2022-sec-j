<?php
    include_once('../controller/header.php');

     $myfile = fopen('../model/files.txt', 'r');

     while (!feof($myfile)) {
         $data = fgets($myfile);
           $user = explode('|', $data);
         if ($data != "") {
           
             echo '
               <html>
                 <body bgcolor="aliceblue">
                  <table align ="center"width="50%" height="80%"   border="1" >

                        <tr>
                         <td colspan="2" align="Center"  bgcolor="lightblue"><b><h3>Files</h3></b>
                         </td>
                
                        </tr>
                       
                
               <tr>  <td  bgcolor="cadetblue">    <b> COURSE PLAN(WEB)</b>     <a href="' . trim($user[0]) . '">download </a> </td> 
                     <td  bgcolor="cadetblue">     <b> Finished Project Report(WEB)</b>   <a href="' . trim($user[1]) . '">download</a>  </td> </tr>
                  <tr>
                      <tr>  <td  bgcolor="cadetblue">    <b> HTML-FORM(WEB)</b>     <a href="' . trim($user[2]) . '">download </a> </td> 
                     <td  bgcolor="cadetblue">     <b> ASSESSMENT TASK(WEB)</b>   <a href="' . trim($user[3]) . '">download</a>  </td> </tr>
                  <tr>
                      <tr>  <td  bgcolor="cadetblue">    <b> Slide 1(OS)</b>     <a href="' . trim($user[4]) . '">download </a> </td> 
                     <td  bgcolor="cadetblue">     <b> Term Project Proposal(WEB)</b>   <a href="' . trim($user[1]) . '">download</a>  </td> </tr>
                  <tr>
                      <tr>  <td  bgcolor="cadetblue">    <b> Slide 2(OS)</b>     <a href="' . trim($user[2]) . '">download </a> </td> 
                     <td  bgcolor="cadetblue">     <b> Term Project Proposal(WEB)</b>   <a href="' . trim($user[4]) . '">download</a>  </td> </tr>
                   </table>
                                  ';
         }
     }
     echo '
                    
              <center><a href="Home.php"><h3>Back</h3></a></center>

                 
             </body>
         </html>
         ';
 
?>