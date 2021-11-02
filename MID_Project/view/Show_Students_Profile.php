 <?php
  
  require_once('../controller/header.php');
   
     $myfile = fopen('../model/user.txt', 'r');

     while (!feof($myfile)) {
         $data = fgets($myfile);
           $user = explode('|', $data);
         if ($data != "") {
           
             echo '
               <html>
                 <body bgcolor="aliceblue">
                  <table align ="center"width="40%" height="100%"   border="1" >
                        <tr>
                         <td colspan="2" align="Center"  bgcolor="lightblue"><b><h3>Welcome to Your Profile</h3></b>
                         </td>
                
                        </tr>
                         <tr>  
                           <td width="50px"  bgcolor="cadetblue">  <h3>    Name :   ' . trim($user[0]) . '</td> 
                          <td bgcolor="cadetblue"width="40%" height="60%"  rowspan="2"><img src=" ' . trim($user[7]) .' " height="200px" width="200px"></td>
                </tr>
                
               <tr>  <td  bgcolor="cadetblue" >     Email  :                         ' . trim($user[1]) . '</td> </tr>
              <tr>   <td bgcolor="cadetblue" colspan="2">     Gender  :             ' . trim($user[2]) . '</td> </tr>               
               <tr>  <td colspan="2" bgcolor="cadetblue">     Registration Date :   ' . trim($user[3]) . '</td> </tr>
               <tr>  <td colspan="2" bgcolor="cadetblue">     User ID  :            ' . trim($user[4]) . '</td> </tr>
               <tr>  <td colspan="2" bgcolor="cadetblue">    Blood Group  :         ' . trim($user[5]) . '</td> </tr>
               <tr>  <td colspan="2" bgcolor="cadetblue">     Address  :            ' . trim($user[6]) . '</td> </tr>
    
 
                     
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