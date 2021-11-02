<?php 
   require_once('../controller/header.php');
   
  if(isset($_REQUEST['submit']))
  {
    $name = $_REQUEST['myname'];
    if($name ){
      echo '

           <html>
           <body bgcolor="aliceblue">
  
              <table   align="center" height="40%" width="50%"  border="1">
             <tr>
                <td align="center" bgcolor="lightblue" ><b><h3>Status</h3></b></td>
                 </tr>

                 <tr>
                <td align="center" bgcolor="cadetblue" height="80%" ><h2>
                Application Porccessed...</h2>

                 </td>
                   </tr>
                     </table>
                   <center>  <a href="Home.php"><h3>Back to Home</h3></a></center>

 
          
              </body>
            </html>


      ';
    }
    
  }else{
    echo "invalid request...";
  }
  
?>