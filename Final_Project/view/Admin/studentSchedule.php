<?php 

    require('header.php');
    require('../../model/Admin/usersModel.php');
                        // $server = "localhost" ;
                        // $username ="root";
                        // $password = "";
                        // $dbname ="project";

                        // $con = mysqli_connect($server, $username, $password, $dbname);

                        // $sql ="select * from sschedule  ";
                        // $result=mysqli_query($con, $sql);

?>
<html>
    <head>
    <title>Student Schedule</title>
    <link rel="stylesheet" type="text/css" href="../../controller/Admin/TSP.css">
    </head>
    <body>
    <form method="POST" >
    <div id="d1">
                  <img src="../../assets/Admin/newwb_back.jpg" class="c1"  >
                  <div id ="ds9">
                            <center><h2>Student Schedule<h2></center>
                            <center><h4><a href="Home.php">Back</a>|||<a href="studentScheduleAdd.html">Add Student Schedule</a><h4></center>
                <table border="1" width="100%">
                    
                    <tr>
                    <tr>
                        <th>STUDENT ID</th>
                        <th>CLASS TIME and SUBJECT (Saturday)</th>
                        <th>CLASS TIME and SUBJECT (Sunday)</th>
                        <th>CLASS TIME and SUBJECT (Monday)</th>
                        <th>CLASS TIME and SUBJECT (Tuesday)</th>
                        <th>CLASS TIME and SUBJECT (Wednesday)</th>
                        <th>CLASS TIME and SUBJECT (Thursday)</th>
                        
                    </tr>
                    </tr>
                    <tr>
                        <td>40-33221-1</td>
                        <td>(8-10)Math,(12-2)English</td>
                        <td></td>
                        <td>(8-10)RM,(12-2)C#</td>
                        <td></td>
                        <td></td>
                        <td>(11-1)DS</td>
                    </tr>
                    

                    <?php
                    $result=getStudentSchedule();
                    
                    while($user= mysqli_fetch_assoc($result))
                 {  ?>
		
					    <tr>
						    <td><?=$user['sid']?></td>
                            <td><?=$user['Saturday']?></td>
                            <td><?=$user['Sunday']?></td>
                            <td><?=$user['Monday']?></td>
                            <td><?=$user['Tuesday']?></td>
                            <td><?=$user['Wednesday']?></td>
                            <td><?=$user['Thursday']?></td>
						    
					     </tr>
		 <?php
            }
		?>
           
                    
                </table>
        </div>
        </div>
</form>
   </body>

</html>