<?php
    session_start();
 
	if(isset($_REQUEST['submit'])){
		$email = $_REQUEST['email'];
	  $myfile = fopen('../model/user.txt', 'r');

     while (!feof($myfile)) {
         $data = fgets($myfile);
         $user = explode('|', $data);
         if ($data != "") {
           
               $useremail=trim($user[1])  ;
			 	
					
			}
			
		   }
		
			if($email != ""){
				if(  $useremail == $email){
			 
		$myfile = fopen('../model/user.txt', 'r');

     while (!feof($myfile)) {
         $data = fgets($myfile);
           $user = explode('|', $data);
         if ($data != "") {
           

			 	   echo'

               <html>
                 <body bgcolor="aliceblue">
                  <table align ="center"width="20%" height="20%"   border="1" >
                       
                         
               <tr>  <td colspan="2" bgcolor="cadetblue"> User ID :         ' . trim($user[4]) . '</td> </tr>
               <tr>  <td colspan="2" bgcolor="cadetblue">  password :       ' . trim($user[8]) . '</td> </tr>
               </table>
              <center> <a href="Loginform.html">Back </center>
               </body>
               <html>
     
    
 
                     
            ';
					
			}

		   }	
             
       } else
       {
       	echo'Invalid Email';
       } 
     }
     else
       {
       	echo'Null Submission';
       } 
  
   }
  

?>