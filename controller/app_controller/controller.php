<?php

class Controlador {

	public static function recuperarAccion() {
		$accion = @$_POST["trigger"];

		if (is_null($accion)) {
			$accion = @$_GET["trigger"];
			if ($accion == "listProducts") {
				Controlador::listProducts();
			}
		}else{

		switch ($accion) {

			case "saveCondition":
			Controlador::saveCondition();
			break;
			case "updateCondition":
			Controlador::updateCondition();
			break;
			case "deleteCondition":
			Controlador::deleteCondition();
			break;

			case "saveCategory":
			Controlador::saveCategory();
			break;
			case "updateCategory":
			Controlador::updateCategory();
			break;
			case "deleteCategory":
			Controlador::deleteCategory();
			break;

			case "saveStatus":
			Controlador::saveStatus();
			break;
			case "updateStatus":
			Controlador::updateStatus();
			break;
			case "deleteStatus":
			Controlador::deleteStatus();
			break;

			case "saveProducts":
			Controlador::saveProducts();
			break;
			case "loadData":
			Controlador::loadData();
			break;
			case "updateProducts":
			Controlador::updateProducts();
			break;
			case "deleteProducts":
			Controlador::deleteProducts();
			break;
			case "listProducts":
			Controlador::listProducts();
			break;

			case "savePerson":
			Controlador::savePerson();
			break;

			case "login":
			Controlador::loginUser();
			break;


			default :
			break;
		}

	}


		//switch usado para administrar las acciones de los botones
		$var = @$_POST["actionButton"];

		switch ($var) {
			case 'MgerStock':
				header("Location: ../views/manager/managerStock.php");
				break;

			case 'endSession':
				header("Location: ../");
				break;
			
			default:
				# code...
				break;
		}

	}

	//Funciones para las condiciones
	public static function saveCondition() {
		require_once('controllerCondition.php');
		ControllerDedicatedAction::saveCondition();
	}


	public static function updateCondition() {
		require_once('controllerCondition.php');
		ControllerDedicatedAction::updateCondition();
	}


	public static function deleteCondition() {
		require_once('controllerCondition.php');
		ControllerDedicatedAction::deleteCondition();
	}

	//Funciones para las categorias
	public static function saveCategory() {
		require_once('controllerCategory.php');
		ControllerDedicatedCategory::saveCategory();
	}


	public static function updateCategory() {
		require_once('controllerCategory.php');
		ControllerDedicatedCategory::updateCategory();
	}


	public static function deleteCategory() {
		require_once('controllerCategory.php');
		ControllerDedicatedCategory::deleteCategory();
	}

	//Funciones para los estados
	public static function saveStatus() {
		require_once('controllerStatus.php');
		ControllerDedicatedStatus::saveStatus();
	}


	public static function updateStatus() {
		require_once('controllerStatus.php');
		ControllerDedicatedStatus::updateStatus();
	}


	public static function deleteStatus() {
		require_once('controllerStatus.php');
		ControllerDedicatedStatus::deleteStatus();
	}

	//Funciones para los productos
	public static function saveProducts() {
		require_once('controllerProducts.php');
		ControllerDedicatedProducts::saveProducts();
	}


	public static function loadData() {
		require_once('controllerProducts.php');
		ControllerDedicatedProducts::loadData();
	}


	public static function updateProducts() {
		require_once('controllerProducts.php');
		ControllerDedicatedProducts::updateProducts();
	}

	public static function deleteProducts() {
		require_once('controllerProducts.php');
		ControllerDedicatedProducts::deleteProducts();
	}

	public static function listProducts() {
		require_once('controllerProducts.php');
		ControllerDedicatedProducts::listProducts();
	}

	//Funciones para administrar personas
	public static function savePerson() {
		require_once('controllerPeople.php');
		ControllerDedicatedPeople::savePeople();
	}

	//Funciones para iniciar session
	public static function loginUser() {
		require_once('loginController.php');
		ControllerDedicatedLogin::loginUser();
	}



}

Controlador::recuperarAccion();






























