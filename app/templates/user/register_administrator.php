<?php $this->layout('layout', ['title' => 'authentification']) ?>

<?php $this->start('main_content') ?>
<h2>Ajouter un administrateur</h2>
<p>Veuillez renseigner ci-dessous les informations de 
	connexion du nouvel administrateur</p>
<body>
<form method="POST" novalidate>
	<label for="username">Pseudo</label>
	<input type="text" name="username" id="username" value="" />
	
	<label for="Password">Password</label>
	<input type="password" name="password" id="password" value=""/>
	
	<label for="email">Email</label>
	<input type="text" name="email" id="email" value=""/>
	<label for="role">role</label>
	<input type="text" name="role" id="role" value=""/>
	<input type="submit" value="soummettre" />
</form>
<?php $this->stop('main_content') ?>


