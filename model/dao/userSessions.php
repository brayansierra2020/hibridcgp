<?php

@session_start();
@session_name('users');

static  $sadmin = "SUPERADMINISTRADOR";
static  $adm = "ADMINISTRADOR";
static  $usr = "USUARIO";

if (@$_SESSION['login'] ==! NULL) {

	$role = @$_SESSION['login']['r_user'];

	switch ($role) {
		case $sadmin:
			require_once("managerPlus/nav.php");
			break;
		case $adm:
			require_once("manager/nav.php");
			break;
		case $usr:
			require_once("users/nav.php");
			break;
		
		default:
			header("Location: /hibridcgp/view/error_page.php");
			break;
	}

}else{
	header("Location: /hibridcgp/view/error_page.php");
}




?>