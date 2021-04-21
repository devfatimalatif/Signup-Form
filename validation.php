<?php

$con = mysqli_connect('localhost','root','root','database123');


$email = $_POST['email']; 
$password = $_POST['password'];

$s = " select * from details where email = '$email' && password = '$password'  " ;

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($result== true){
	  echo "You are successfully login";
	
	
}
else{
	echo "try again later";
		
}


?>