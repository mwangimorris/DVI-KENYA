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

function is_logged_in(){
$logged_in = $this->session->userdata('logged_in');
$user_group = $this->session->userdata('user_group');
if ($logged_in==FALSE){
redirect(users);	
}
}

function ni_admin(){
$this->is_logged_in();	
$user_group = $this->session->userdata('user_group');

}


function ni_national_user(){
$this->is_logged_in();	
$user_group = $this->session->userdata('user_group');

}
function ni_regional_user(){
$this->is_logged_in();	
$user_group = $this->session->userdata('user_group');
if (!$user_group=='3'){
echo "no priviledges by the way";	
}
}
function ni_county_user(){
$this->is_logged_in();	
$user_group = $this->session->userdata('user_group');
if (!$user_group=='4'){
echo "no priviledges by the way";	
}
}
function ni_subcounty_user(){
$this->is_logged_in();	
$user_group = $this->session->userdata('user_group');
if (!$user_group=='5'){
echo "no priviledges by the way";	
}
}
function ni_managers(){
$this->is_logged_in();	
$user_group = $this->session->userdata('user_group');
if (!$user_group=='9'){
echo "no priviledges by the way";	
}
}



}