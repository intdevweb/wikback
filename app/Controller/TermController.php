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
		
		$this->show('term/show_all_terms', ['terms' => $terms]);
	}

	public function delete($id)
	{
		$termManager = new \Manager\TermManager();
		$termManager->delete($id);
		$this->redirectToRoute('show_all_terms');

	}
}