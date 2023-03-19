<?php
include ('templates/database_conn.php');

$name=$DOB=$address=$email=$password=$confirmpassword=$phone=$OTP_MAIL=$OTP_PHONE='';

$errors = array('name'=>'empty','DOB'=>'','address'=>'','email'=>'','OTP_MAIL'=>'','phone'=>'','OTP_PHONE'=>'','password'=>'','confirmpassword'=>'','branch'=>'');

$date="2003-01-01";

if(isset($_GET['submit']))
{
IF(empty($_GET['name'])){
		$errors['name'] = 'name cant be empty';}
		else{
			$errors['name']='';
			$name=$_GET['name'];
		}

IF(empty($_GET['DOB'])){
		$errors['DOB']= 'DOB cant be empty';}
		else{
			$DOB=$_GET['DOB'];
			if(!($DOB < $date)){
				$errors['DOB']= 'age cant be lesser than 18 ';}
		}


IF(empty($_GET['address'])){
		$errors['address']= 'address cant be empty';}
		else $address=$_GET['address'];

IF(empty($_GET['email'])){
		$errors['email']= 'email cant be empty';}
		else{
			$email=$_GET['email'];
		}

IF(empty($_GET['OTP_MAIL'])){
		$errors['OTP_MAIL']= 'otp mail cant be empty';}
		else{
			$OTP_MAIL=$_GET['OTP_MAIL'];
			if($OTP_MAIL!='1234'){
				$errors['OTP_MAIL']= 'INCORRECT OTP mail ';
			}
		}

IF(empty($_GET['phone'])){
		$errors['phone']='phone cant be empty';}
		else{
			$phone=$_GET['phone'];
			if(!preg_match('/^\d{10}$/', $phone)){
				$errors['phone']='enter a valid 10 digit phone';
			}
		}

IF(empty($_GET['OTP_PHONE'])){
		$errors['OTP_PHONE']= 'otp phone cant be empty';}
		else{
			$OTP_PHONE=$_GET['OTP_PHONE'];
			if($OTP_PHONE!='1234'){
				$errors['OTP_PHONE']= 'INCORRECT OTP phone ';
			}
		}



IF(empty($_GET['password'])){
		$errors['password']= 'password cant be empty';}
		else {$password=$_GET['password'];}


IF(empty($_GET['confirmpassword'])){
		$errors['confirmpassword']= 'confirm password cant be empty';}
		else{$confirmpassword=$_GET['confirmpassword'];}

if(empty($_GET['branch'])){
	$errors['branch']='branchid cant be empty';}
	else{$branch=$_GET['branch'];}
}


