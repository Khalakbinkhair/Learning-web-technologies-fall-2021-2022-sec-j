<?php
    
    require_once('db.php');
    
    function validate($username,$password)
    {
        $con=getConnection();

            $sql ="select * from users where username='{$username}' and password='{$password}'";

                $result=mysqli_query($con, $sql);
                $user= mysqli_fetch_assoc($result);

          if($user)
          {
              return true;
          }
          else
          {
              return false;
          }
    }



    function addUser($user)
    {
        $con=getConnection();

        $sql="insert into users values('','{$user['username']}','{$user['password']}','{$user['email']}','{$user['type']}')" ;

                if(mysqli_query($con,$sql))
                {
                    return true;
                }
                else
                {
                    echo false;
                }
    }



    function getAllUsers()
    {
        $con=getConnection();

            $sql ="select * from users";
            $result=mysqli_query($con, $sql);

            return $result;
                
    }

    function getUserById($id)
    {
        $con=getConnection();

        $sql="select * from users where id={$id}";
        $result=mysqli_query($con, $sql);
        $user= mysqli_fetch_assoc($result);

        return $user;
    }

    function delete($id)
    {
        $con=getConnection();

        $sql="delete from users where id={$id}";
        $result=mysqli_query($con, $sql);

        return $result;
    }

    function editUser($user)
    {
        $con=getConnection(); 

        //$sql="update into users username='{$user['username']}',password='{$user['password']}',email='{$user['email']}',type='{$user['type']}' where id='{$user['id']}'" ;
        $sql="update users set id ='{$user['id']}' ,username='{$user['username']}',  password='{$user['password']}',email='{$user['email']}',type='{$user['type']}' where id='{$user['id']}' ";

                if(mysqli_query($con,$sql))
                {
                    return true;
                }
                else
                {
                    echo false;
                }
    }

?>