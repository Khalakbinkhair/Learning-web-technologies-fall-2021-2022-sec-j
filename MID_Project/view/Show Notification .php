<?php 
   include_once('../controller/header.php');
   

          $myfile = fopen('../model/files.txt', 'r');

     while (!feof($myfile)) {
         $data = fgets($myfile);
           $user = explode('|', $data);
         if ($data != "") {
           
             echo '
                <!DOCTYPE html>
                <html>             
                <body bgcolor="aliceblue">
                 
                      <table align ="center"width="40%" height="100%"   border="1" >
                      <tr>
                        <td colspan="3"align="center" bgcolor="lightblue"><b><h1>Show Notification</h1></b></td>

                      </tr>
                 <tr>
                         <td align="center" bgcolor="cadetblue">No </td>
                         <td align="center"  bgcolor="cadetblue">Info </td>
                         <td align="center"  bgcolor="cadetblue">Date</td>
                     </tr>
                     <tr>
                        <td  bgcolor="cadetblue">1 </td>
                         <td  bgcolor="cadetblue"><a href="' . trim($user[0]) . '"> New notes uploaded By REZWAN AHMED </a></td>
                          <td  bgcolor="cadetblue">4 Days ago</td>
                     </tr>
                     
                     <tr>
                        <td bgcolor="cadetblue">2</td>
                         <td  bgcolor="cadetblue"><a href="' . trim($user[4]) . '"> New notes uploaded By MITHUN SARKER</a></td>
                          <td  bgcolor="cadetblue">8 days ago</td>
                     </tr>
                     
                     <tr>
                        <td  bgcolor="cadetblue">3</td>
                         <td  bgcolor="cadetblue"><a href="' . trim($user[3]) . '"> New notes uploaded By REZWAN AHMED</td>
                          <td bgcolor="cadetblue">8 days ago</td>
                     </tr>
                     
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