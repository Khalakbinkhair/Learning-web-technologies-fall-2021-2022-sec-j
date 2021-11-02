<?php 
   include_once('../controller/header.php');
   
     $myfile = fopen('../model/user.txt', 'r');

     while (!feof($myfile)) {
         $data = fgets($myfile);
           $user = explode('|', $data);
         if ($data != "") {
          echo'

  <html>
        <body bgcolor="aliceblue">
     
            <table align ="center" width="50%"  border="1" >
                <tr >
                    <td align="left" bgcolor="lightblue" colspan="2"><img src="../assets/uni.jpg" height ="40%" width="40%"><h3>Welcome to..' . trim($user[0]) . '</h3>
                   <b> <h3> <a href="Show_CGPA.php"><p align="right">Show CGPA|</a>
                    <a href="Show Notification .php"> Show Notification</a> | <a href="../controller/logout.php"> logout</a></b></h3>
                    </td>
                   
                </tr>
                 
                   <td bgcolor ="cadetblue" >
                   <a href="Academic_Calendar.php"><b><h3>Academic Calendar</a></b></h3></br>
                   <a href="Class_Schedule .php"><b><h3>Class Schedule </a></b></h3></br>
                   <a href="Show_Teachers_biography.php"><b><h3>Show Teachers biography </a></b></h3></br>
                   <a href="Application_to_Admin.html"><b><h3>Application to Admin </a></b></h3></br>
                   <a href="Send_Message_to_Faculty.html"><b><h3>Send Message to Faculty</a></b></h3></br>
              </td>

                       <td bgcolor =" cadetblue" >   
                       <a href="Show_Courses_results.html"><b><h3>Show Courses and results</a></b></h3></br>
                       <a href="Show_Students_Profile.php"><b><h3>Show Students Profile </a></b></h3></a></br>
                       <a href="Update_Students_Profile.html"><b><h3>Update Students Profile  </a></b></h3></br>
                        <a href="Files_Section.php"><b><h3>Files Section</a>| |<a href="Filecheck1.html">Upload a File</a></b></h3></br>
                          <a href="Library_Info.php"><b><h3>Library Info</a></b></h3></br>
                 </td></br>
                     </tr>
             <tr height="50px">
                <td colspan="3" bgcolor="cadetblue" align="center"> Copyright @2021</td>
               
            </tr>
            </table>
        </body>
   
          </html>
                 
            ';
         }
     }
    
?>
