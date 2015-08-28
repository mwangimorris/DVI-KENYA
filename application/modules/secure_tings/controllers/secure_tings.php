<?php
class Secure_tings extends MX_Controller 
{
function __construct() {
	
parent::__construct();
}

function hash_it($password){
	$safe_password=$this->kuchocha($password);
	$safe_password1 = hash("sha512", $safe_password);
	echo $safe_password1;
	
}

function kuchocha($password){
	$chocha = $password.="3456789abhijklmnopqrstuvRSTUVWYZ@#$%^&*";
	return $chocha;

}

function ni_admin(){
$user_id = $this->session->userdata('user_id');
if (!is_numeric($user_id)){
redirect(base_url());	
}

}



}