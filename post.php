<?php
session_start();


if (isset($_POST['submit'])) {

	$error=[];

	
$request= $_POST;
$fullname= $request['fullname'];
$email= $request['email'];
$description= $request['description'];


    


if (empty($fullname)) {
	$mgs= "Please provide a name";
	$error['fullname']=$mgs;
}elseif (strlen($fullname)>10) {
	$mgs= "Name cannot be given more";
	$error['fullname']=$mgs;
}
if (empty($email)) {
	$mgs= "Please provide a email address";
	$error['email']=$mgs;
}
if (empty($description)) {
	$mgs= "Please provide a description";
	$error['description']=$mgs;
}

if (count($error)>0) {

	  $_SESSION['error'] = $error;
	   $_SESSION['old_data'] = $request;
     header("Location: ../index.php");

}else{
	echo "Account Successfully Created";
}


}else{
	echo "Click on the submit button";
}