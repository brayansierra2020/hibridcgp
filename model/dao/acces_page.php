<?php
/**
 * clase que verificara y permitira el acceso a diferentes paginas de acuerdo al rol de usuario
 */
@session_start();
@session_name('users');

class session_verify{

	//funcion que se encargara de tomar el acceso por reoles
	public static function charge(){

		//obtengo la ruta actual de la pagina en la cual me encuentro
		$page = $_SERVER['SCRIPT_NAME'];

		//obtengo solo el nombre de la pagina en la que estoy situado
		$pagina_actual = @array_pop(explode('/', $_SERVER['PHP_SELF']));

		//paginas permitidas para el superadministrador
		static $pages_adminplus = array(
			"dash.php", 
			"managerStock.php", 
			"reviewProduct.php", 
			"view_users.php", 
			"addProduct.php", 
			"editProduct.php", 
			"listProduct.php", 
			"deleteProduct.php", 
			"addCategory.php", 
			"deleteCategory.php", 
			"editCategory.php", 
			"addCondition.php", 
			"deleteCondition.php", 
			"editCondition.php",
			"addStatus.php", 
			"deleteStatus.php", 
			"editStatus.php"
		);

		//paginas permitidas para el administardor
		static $pages_admin = array(
			"dash.php", 
			"managerStock.php", 
			"reviewProduct.php", 
			"view_users.php", 
			"addProduct.php", 
			"editProduct.php", 
			"listProduct.php", 
			"addCategory.php", 
			"editCategory.php", 
			"addCondition.php",  
			"editCondition.php",
			"addStatus.php", 
			"editStatus.php"
		);

		//paginas permitidas para el usuario
		static $pages_user = array(
			"dash.php"
		);

		//verifico que la session no sea nula
		if (@$_SESSION['login'] ==! NULL) {

			switch ($_SESSION['login']['r_user']) {
				case 'SUPERADMINISTRADOR':
					if (in_array($pagina_actual, $pages_adminplus)) {
					}else{
						$ruta = "/hibridcgp/view/dash.php";
						echo "Permisos insuficientes para acceder a esta pagina ($page)";
						header("Location: $ruta");
					}
				break;

				case 'ADMINISTRADOR':
					if (in_array($pagina_actual, $pages_admin)) {
					}else{
						$ruta = "/hibridcgp/view/dash.php";
						echo "Permisos insuficientes para acceder a esta pagina ($page)";
						header("Location: $ruta");
					}
				break;

				case 'USUARIO':
					if (in_array($pagina_actual, $pages_user)) {
					}else{
						$ruta = "/hibridcgp/view/dash.php";
						echo "Permisos insuficientes para acceder a esta pagina ($page)";
						header("Location: $ruta");
					}
				break;

				default:
					header("Location: /hibridcgp/view/error_page.php");
				break;
			}
		}else{
			if (!in_array($pagina_actual, $pages_adminplus)) {

			}else{
				$ruta = "/hibridcgp/";
				header("Location: $ruta");
			}
		}

	}


}


session_verify::charge();
?>