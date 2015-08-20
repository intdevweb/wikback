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
		if (!empty($_POST)){
			foreach($_POST as $k => $v){
				//creer une variable $username$email $password etc...
				$$k = trim(strip_tags($v));
			}
			$userManager = new \Manager\UserManager();
			$hashPass = password_hash($password, PASSWORD_DEFAULT);
			$userManager-> insert(['username' => $username, 'password' => $hashPass, 
				'email' => $email, 'role' => $role]);
		}
		$dataToPassToTheView =[];
		
		
		
		//$this->show('term/show_all_terms', ['terms' => $terms,'wotd' => $wotd]);
		
	$this->show('user/register_administrator',$dataToPassToTheView);
	}//update(array $data, $id, $stripTags = true)

	//$this->redirectToRoute('show_all_terms'); password_hash
	
	
	
	//debug($wotd);	

}//fin de usercontroller