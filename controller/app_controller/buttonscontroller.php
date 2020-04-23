<?php 

class ControladorBtn{

	public static function getAction() {
		$accion = @$_POST["btn"];

		switch ($accion) {

			case "stock":
			ControladorBtn::mngStock();
			break;

			case "usr":
			ControladorBtn::mngUsr();
			break;

			case "endSession":
			ControladorBtn::endSession();
			break;
			
			
			default :
			break;
		}

	}

	//Funciones de manejo de inventario
	public static function mngStock() {
		header("Location: ../../view/forms/stock/managerStock.php");
	}

	//Funciones de manejo de usuarios
	public static function mngUsr() {
		header("Location: ../../view/managerPlus/view_users.php");
	}

	//Funciones para finalizar session
	public static function endSession() {
		require_once('loginController.php');
		ControllerDedicatedLogin::endSession();
	}

}

ControladorBtn::getAction();
?>