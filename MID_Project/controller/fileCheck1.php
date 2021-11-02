<?php
  include_once('header.php');
  


	$des = "../assets/upload/".$_FILES['myfile']['name'];
	$src = $_FILES['myfile']['tmp_name'];

	if(move_uploaded_file($src, $des)){
		echo '        
		       <html>
		       <body>

               <table align ="center"width="40%" height="40%"  border="1">
               <tr>
                <td bgcolor="lightblue"align ="center"> <h1>...Uploaded..... <h1></td>
            </tr>
            </table>
             <center>  <a href="../view/Home.php">Go to Homepage</center> </h3></center>

               </html>
		       </body>

		';
		$_SESSION['profile'] = $_FILES['myfile']['name'];
	}
	else{
		echo 'Null submission';
	}

?>