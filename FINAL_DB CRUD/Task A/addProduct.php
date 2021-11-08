<?php
	session_start();
    require_once('usersModel.php');

	if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $buying=$_POST['buying'];
    $selling=$_POST['selling'];

		if($name != ""){
			if($buying != ""){
				if($selling != ""){

					  $product =[
                               'name'=> $name,
                               'buying'=>$buying,
                               'selling'=>$selling
                              ];

                        $status= addProducts($product);

                      if($status)
                      {
                        
                         if(isset($_POST['dis']))
                         {
                             echo "NAME :" .$name ."<br/>";
                             echo  "Buying Price:" .$buying."<br/>";
                             echo  "Selling :" .$selling."<br/>";
                             

                         }
                         else
                         {

                         }

                      }
                      else
                      {
                          echo"Try Again........";
                      }
				}else{
					echo "Invalid selling...";
				}	
			}else{
				echo "Invalid Buying...";
			}
		}else{
			echo "Invalid Name...";
		}
	}
?>




<html>
<body>
<fieldset >
	<legend>Add product</legend>

  Name:</br><input type="text" name="username"></br>
  Buying Price</br><input type="text" name="buying"></br>
  Selling Price</br><input type="text" name="selling"></br>
  _________________________________________ <br/>
   
    <br/>  <input type="checkbox" name="dis" value="">Display</br>

  __________________________________________

</br><input type="submit" name="submit"value="SAVE"></br>






</fieldset>

</body>
</html>