<?php

namespace Controller;

use \W\Controller\Controller;

class UserController extends Controller
{

	/**
	 * affiche tous les termes
	 */
	/**/
	public function register()
	{
	$error= 	"";
	$email= 	"";
	$username= 	"";
	$password_confirm = "";

		if (!empty($_POST)){
			foreach($_POST as $k => $v){
				//creer une variable $username$email $password etc...
				$$k = trim(strip_tags($v));

			}
			if (strlen($username) < 4){
				$error = "pseudo trop court";
			}
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$error = "votre email n'est pas valide";
			}
			if ($password != $password_confirm){
				$error = " vos mots de passe ne correspondent pas";
			}
			if (empty($error)){
			$hashPass = password_hash($password,  PASSWORD_DEFAULT);	
			}

			$userManager = new \Manager\UserManager();
			
			$userManager-> insert(['username' => $username, 'password' => $hashPass, 
				'email' => $email, 'role' => "admin",'date_created' =>("Y-m-d H:i:s"),
				 'date_modified' =>("Y-m-d H:i:s")]);
		}
		$dataToPassToTheView =[
		'error' => $error,
		"username" => $username,
		"email" => $email
		];
		
	$this->show('user/register_administrator',$dataToPassToTheView);
	}//update(array $data, $id, $stripTags = true)

	//$this->redirectToRoute('show_all_terms'); password_hash
	
	
	
	//debug($wotd);	

}//fin de usercontroller