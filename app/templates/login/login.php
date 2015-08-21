
<?php $this->layout('layout', ['title' => 'Tous les termes']) ?>

<?php $this->start('main_content') ?>
<h2>connexion</h2>
<p>Veuillez renseigner ci-dessous les informations de 
	connexion</p>
<body>

<form method="POST" novalidate>
	<label for="username">Pseudo</label></br>
	<input type="text" name="username" id="username" value="<?= $username ?>" /></br>
	
	<label for="Password">Password</label></br>
	<input type="password" name="password" id="password" value=""/></br>
	

	<input type="submit" value="soumettre" />
<div> <?= $error?></div>
</form>
<?php $this->stop('main_content') ?>
