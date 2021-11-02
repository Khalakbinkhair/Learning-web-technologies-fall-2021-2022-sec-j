<?php 

    require_once('../controller/header.php');
    
    if(isset($_REQUEST['submit']))
          
    {
        $Sem= $_REQUEST["Semester"];
        if($Sem == "2020-2021,Fall"){
            echo '
                 <html>
                  <body bgcolor="aliceblue">
                    <table align ="center"width="40%" height="80%"   border="1" >
                        <tr>
                         <td  colspan="3" align="Center"  bgcolor="lightblue"><b><h1>2020-2021,Fall</b><h1>
                         </td></tr>
                          
                               <tr>
                               <td bgcolor="cadetblue" ><b><u>Courses</u></b></td>
                                 <td bgcolor="cadetblue" ><b><u>Grade</u></b></td>
                                  <td bgcolor="cadetblue" ><b><u>Marks</u></b></td>
                               </tr>
                               <tr>
                               <td bgcolor="cadetblue" > ALGORITHMS</td>
                               <td bgcolor="cadetblue" align="center"  >A+</td>
                               <td bgcolor="cadetblue" align="center" >94</td>

                               </tr>
                               <tr>
                               <td bgcolor="cadetblue" > INTRODUCTION TO DATABASE</td>
                               <td bgcolor="cadetblue" align="center" >B+</td>
                               <td bgcolor="cadetblue" align="center"  >82</td>

                               </tr>
                               <tr>
                               <td bgcolor="cadetblue" > INTEGRAL CALCULUS & ORD. DIFF EQUATION</td>
                               <td bgcolor="cadetblue" align="center" >B+</td>
                               <td bgcolor="cadetblue" align="center" >84</td>

                               </tr>
                                 <tr>
                               <td bgcolor="cadetblue" > COMPILER DESIGN</td>
                               <td bgcolor="cadetblue" align="center" >A+</td>
                               <td bgcolor="cadetblue" align="center" >96</td>

                               </tr>
                                </table>
                        
                        <h3> <center> <a href="Show_Courses_results.html">Back</a> |
                        <a href="Home.php">Go to Homepage</center> </h3>
                        

                     
                   </body>

                   </html>
            ';
        }
         if($Sem == "2020-2021,Spring"){
            echo '
                <html>
                  <body bgcolor="aliceblue">
                 
                    <table align ="center"width="40%" height="80%"   border="1" >
                        <tr>
                         <td  colspan="3" align="Center"  bgcolor="lightblue"><b><h1>2020-2021,Spring</b><h1>
                         </td></tr>
                          
                               <tr>
                               <td bgcolor="cadetblue" ><b><u>Courses</u></b></td>
                                 <td bgcolor="cadetblue" ><b><u>Grade</u></b></td>
                                  <td bgcolor="cadetblue" ><b><u>Marks</u></b></td>
                               </tr>
                               <tr>
                               <td bgcolor="cadetblue" >OBJECT ORIENTED ANALYSIS AND DESIGN</td>
                               <td bgcolor="cadetblue" align="center" >A+</td>
                               <td bgcolor="cadetblue" align="center" >90</td>

                               </tr>
                               <tr>
                               <td bgcolor="cadetblue" >THEORY OF COMPUTATION</td>
                               <td bgcolor="cadetblue" align="center" >A</td>
                               <td bgcolor="cadetblue" align="center" >85</td>

                               </tr>
                               <tr>
                               <td bgcolor="cadetblue" > COMPLEX VARIABLE,LAPLACE & Z-TRANSFORMATION</td>
                               <td bgcolor="cadetblue" align="center" >A</td>
                               <td bgcolor="cadetblue" align="center" >85</td>

                               </tr>
                                <tr>
                               <td bgcolor="cadetblue" >COMPUTER GRAPHICS</td>
                               <td bgcolor="cadetblue" align="center" >A+</td>
                               <td bgcolor="cadetblue" align="center" >95</td>

                               </tr>
                           </table>
                        
                       <h3> <center> <a href="Show_Courses_results.html">Back</a> |
                        <a href="Home.php">Go to Homepage</center> </h3>

                        

                        
                       
                     

                   </body>

                   </html>
            ';
        }
          if($Sem == "2020-2021,Summer"){
            echo '
                <html>
                  <body bgcolor="aliceblue">
                
                    <table align ="center"width="40%" height="80%"   border="1" >
                        <tr>
                         <td  colspan="3" align="Center"  bgcolor="lightblue"><b><h1>2020-2021,Summer</b><h1>
                         </td></tr>
                          
                               <tr>
                               <td bgcolor="cadetblue" ><b><u>Courses</u></b></td>
                                 <td bgcolor="cadetblue" ><b><u>Grade</u></b></td>
                                  <td bgcolor="cadetblue" ><b><u>Marks</u></b></td>
                               </tr>
                               <tr>
                               <td bgcolor="cadetblue" > OBJECT ORIENTED PROGRAMMING 1 (JAVA)</td>
                               <td bgcolor="cadetblue" align="center" >A+</td>
                               <td bgcolor="cadetblue" align="center" >92</td>

                               </tr>
                               <tr>
                               <td bgcolor="cadetblue" > SOFTWARE ENGINEERING</td>
                               <td bgcolor="cadetblue" align="center" >A+</td>
                               <td bgcolor="cadetblue" align="center" >91</td>

                               </tr>
                               <tr>
                               <td bgcolor="cadetblue" >MATRICES, VECTORS, FOURIER ANALYSIS</td>
                               <td bgcolor="cadetblue" align="center" >A+</td>
                               <td bgcolor="cadetblue" align="center" >95</td>

                               </tr>
                                  <tr>
                               <td bgcolor="cadetblue" >DATA COMMUNICATION</td>
                               <td bgcolor="cadetblue" align="center" >A</td>
                               <td bgcolor="cadetblue" align="center" >87</td>

                               </tr>
                        
                         </table>
                        
                         <h3> <center> <a href="Show_Courses_results.html">Back</a> |
                        <a href="Home.php">Go to Homepage</center> </h3>
                        

                        
                       
                  

                   </body>

                   </html>
            ';
        }
         if($Sem == "2021-2022,Fall"){
            echo '
                 <html>
                  <body bgcolor="aliceblue">
                    <table align ="center"width="40%" height="80%"   border="1" >
                        <tr>
                         <td  colspan="3" align="Center"  bgcolor="lightblue"><b><h1>2020-2022,Fall</b><h1>
                         </td></tr>
                          
                               <tr>
                               <td bgcolor="cadetblue" ><b><u>Courses</u></b></td>
                                 <td bgcolor="cadetblue" ><b><u>Grade</u></b></td>
                                  <td bgcolor="cadetblue" ><b><u>Marks</u></b></td>
                               </tr>
                               <tr>
                               <td bgcolor="cadetblue" > ARTIFICIAL INTELLIGENCE AND EXPERT SYSTEM</td>
                               <td bgcolor="cadetblue" align="center" >A+</td>
                               <td bgcolor="cadetblue" align="center" >90</td>

                               </tr>
                               <tr>
                               <td bgcolor="cadetblue" >OBJECT ORIENTED PROGRAMMING 2</td>
                               <td bgcolor="cadetblue" align="center" >A+</td>
                               <td bgcolor="cadetblue" align="center" >92</td>

                               </tr>
                               <tr>
                               <td bgcolor="cadetblue" > DATA WAREHOUSING AND DATA MINING [CS]</td>
                               <td bgcolor="cadetblue" align="center" >A+</td>
                               <td bgcolor="cadetblue" align="center" >94</td>

                               </tr>
                                 <tr>
                               <td bgcolor="cadetblue" > NUMERICAL METHODS FOR SCIENCE AND ENGINEERING</td>
                               <td bgcolor="cadetblue" align="center" >A+</td>
                               <td bgcolor="cadetblue" align="center" >91</td>

                               </tr>
                        
                          </table>
                        
                           <h3> <center> <a href="Show_Courses_results.html">Back</a> |
                        <a href="Home.php">Go to Homepage</center> </h3>
                        

            

                   </body>

                   </html>
            ';
        }
         
    }
    
    else{
        header('location: Loginform.html');
    }

?>
