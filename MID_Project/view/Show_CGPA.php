<?php 
   include_once('../controller/header.php');
   
     $myfile = fopen('../model/user.txt', 'r');

     while (!feof($myfile)) {
         $data = fgets($myfile);
           $user = explode('|', $data);
         if ($data != "") {
          echo'
                <!DOCTYPE html>
                <html>             
                <body bgcolor="aliceblue">
                 
                      <table align ="center"width="40%" height="100%"   border="1" >
                      <tr>
                        <td colspan="3"align="center" bgcolor="lightblue"><b><h1>Semester Grade Report</h1></b></td>

                      </tr>
                      <tr>
                        <td bgcolor="cadetblue"><h3>Student ID</h3></td>
                        <td bgcolor="cadetblue"><h3>:</h3></td>
                        <td bgcolor="cadetblue"><h3>  ' . trim($user[4]) . '</h3></td>
                      </tr>
                          <tr>
                        <td bgcolor="cadetblue"><h3>Student Name</h3></td>
                        <td bgcolor="cadetblue"><h3>:</h3></td>
                        <td bgcolor="cadetblue"> <h3> ' . trim($user[0]) . '</h3></td>
                      </tr>
                          <tr>
                        <td bgcolor="cadetblue"><h3>Credits Completed </h3></td>
                        <td bgcolor="cadetblue"><h3>:</h3></td>
                        <td bgcolor="cadetblue"> <h3>118 </h3></td>
                      </tr>
                          <tr>
                        <td bgcolor="cadetblue"><h3>Courses Completed</h3></td>
                        <td bgcolor="cadetblue"><h3>:</h3></td>
                        <td bgcolor="cadetblue"><h3> 45</h3></td>
                      </tr>
                      <tr>
                        <td bgcolor="cadetblue"><h3>CGPA </h3></td>
                        <td bgcolor="cadetblue"><h3>:</h3></td>
                        <td bgcolor="cadetblue"><h3> 3.60</h3></td>
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


