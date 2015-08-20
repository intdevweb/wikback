<?php

namespace Controller;

use \W\Controller\Controller;

class TermController extends Controller
{

	/**
	 * affiche tous les termes
	 */
	public function showAll()
	{
		$termManager = new \Manager\TermManager();
		$terms = $termManager->findAll();
		$wotd = $termManager->getCurrentWordOfTheDay();
		$this->show('term/show_all_terms', ['terms' => $terms,'wotd' => $wotd]);
	}

	public function delete($id)
	{
		$termManager = new \Manager\TermManager();
		$termManager->delete($id);
		$this->redirectToRoute('show_all_terms');

	}
	public function edit($id)
	{
		$termManager = new \Manager\TermManager();

		if (!empty($_POST)){
			$name = trim($_POST['name']);
			$termManager->update(["name" => $name],$id);

			$this->redirectToRoute('show_all_terms');
		}
		$term = $termManager->find($id);
		$this->show('term/edit_term',["term" => $term]);

		
		
				//si le formulaire est soumos $POST n'est pas vide
		//valider..
		//sauvegarder les modifications avec update()
		//passer le terme a la vue  afin de rendre la variable disponible
		// notamment pour pre remplir le formulaire
		

	}
	/*public function edit($id)
	{
		$termManager = new \Manager\TermManager();

		if (!empty($_POST)){
			$name = trim($_POST['name']);
			$termManager->update(["name" => $name],$id);

			$this->redirectToRoute('show_all_terms');
		}
		$term = $termManager->find($id);
		$this->show('term/edit_term',["term" => $term]);
*/
		
		
				//si le formulaire est soumos $POST n'est pas vide
		//valider..
		//sauvegarder les modifications avec update()
		//passer le terme a la vue  afin de rendre la variable disponible
		// notamment pour pre remplir le formulaire
		
	//}
	public function changeWotd($id){
	$termManager = new \Manager\TermManager();
	$wotd = $termManager->getCurrentWordOfTheDay();
	$newWotd = $termManager->getRandomWord();
	$termManager->update(["is_wotd" => 0], $wotd['id']);
	$termManager->update(["is_wotd" => 1], $id);
	$this->redirectToRoute('show_all_term');
}


	//debug($wotd);
	

}//fin de termcontroller