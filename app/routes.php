<?php
	
	$w_routes = array(
		['GET', '/admin/termes/', 'Term#showAll', 'show_all_terms'],
		['GET', '/admin/termes/suppression/[i:id]/', 'Term#delete', 'delete_term'],
		['GET|POST', '/admin/termes/modification/[i:id]/', 'Term#edit', 'edit_term'],
		['GET', '/admin/termes/nouveau-mdj/[i:id]', 'Term#changewodt', 'changewotd'],
		['GET|POST', '/admin/administrateur/inscription/', 'User#register', 'register_administrator'],
		['GET|POST', '/admin/login/', 'Login#login', 'login'],
		);