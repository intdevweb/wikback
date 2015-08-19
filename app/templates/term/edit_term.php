<?php $this->layout('layout', ['title' => 'Formulaire de Modification']) ?>

<?php $this->start('main_content') ?>
<body>
	<h2>Modifier un terme</h2>
	<div class="container_edit_term">
		<form method="POST">	
		<label for="term_word">mot à modifier</label>
		<input type="text" name="name" id="term_word" value="<?= $this->e($term['name']) ?>"/>
		<input type="submit" value="Soumettre">		
	</div>
</body>	
<?php $this->stop('main_content') ?>
