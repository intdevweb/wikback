$this->redirectToRoute('show_all_terms');

<body>
	<form method="POST">

	<div class="container_term">
		
				<h2><i class="fa fa-gift"> Mot du jour : </i>
				<?php	echo $wotd['name'] ?><i class="fa fa-gift"></i></h2>		
	</div>
</body>	
<?php $this->stop('main_content') ?>
