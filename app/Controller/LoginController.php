<?php

namespace Controller;

use \W\Controller\Controller;

class LoginController extends Controller
{

	/**
	 * affiche tous les termes
	 */
	/**/
	public function login()
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
			
			
			

			
		}
		$dataToPassToTheView =[
		'error' => $error,
		"username" => $username,
		"email" => $email
		];
		
	$this->show('login/login',$dataToPassToTheView);
	$this->redirectToRoute('show_all_terms');
	
	}//update(array $data, $id, $stripTags = true)

	//$this->redirectToRoute('show_all_terms');
	
	
	
	//debug($wotd);	

}//fin de usercontroller