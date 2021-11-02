<?php
     session_start();

    if(isset($_POST['submit'])){

        if($_POST['username'] !=""){
                if($_POST['email'] !=""){
                    if($_POST['gender'] !=""){
                        if($_POST['date'] !=""){
                                if($_POST['text'] !=""){
                                    if($_POST['file'] !=""){
                                      if($_POST['BloodGroup'] !=""){
                                            if($_POST['password'] != ""){
                                                    if($_POST['address'] !=""){
                     $user = ['username'=> $_POST['text'], 'password'=> $_POST['password']];
                 //   $_SESSION['user'] = $user;

                  $myfile= fopen('../model/user.txt', 'w');
                  $user=$_POST['username']."|".$_POST['email']."|".$_POST['gender']."|".$_POST['date'] ."|".$_POST['text']."|".$_POST['BloodGroup'] ."|".$_POST['address'] ."|".$_POST['file']."|".$_POST['password'];
                  fwrite($myfile, $user);
                  fclose($myfile);
                   setcookie('username', $_POST['text'], time()+3600, '/');
                    setcookie('password', $_POST['password'], time()+3600, '/');
                    

                    header('location: ../view/Updatedone.html ');
                }else{
                    echo "Invalid Address...";
                }
                }else{
                     echo "Null Password...";
                 }  
               }else{
                echo "Null Bloodgroup..";
              }
                }else{
                echo "Choose a picture...";
               }
              }else{
              echo "User ID invalid...";
                }
                }else{
               echo "Invalid date...";
                 }
                    }else{
                    echo "Invalid gender...";
                    }
                    }else{
                    echo "Null email...";
                }
                  }else{
                        echo "Null Username...";
                    }

    }
?>