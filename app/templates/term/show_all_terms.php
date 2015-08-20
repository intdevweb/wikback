<?php $this->layout('layout', ['title' => 'Tous les termes']) ?>

<?php $this->start('main_content') ?>
<body>
	<h2>Tous les termes</h2>
	<h2><i class="fa fa-gift"> Mot du jour : </i>
				<!--//<?php echo $wotd['name'] ?>&nbsp;&nbsp;<i class="fa fa-gift"></i></h2>-->
				<a href="<?php echo $this->url('changewotd',["wotd" =>$wotd['name']])?>">&nbsp;&nbsp;<i class="fa fa-gift"></i></a>
	<div class="container_term"></br>

		<table>		
			<?php foreach($terms as $term):?>
			<tr>
				<td><?php	echo $term['name'] ?></td>
				<td><?php	echo $term['modifiedDate'] ?></td>
				<td><a href="<?php	echo $this->url('delete_term',["id" => $term['id']]) ?>">&nbsp;<i class="fa fa-trash"></i>&nbsp;</a></td>
				<td><a href="<?php	echo $this->url('edit_term',["id" => $term['id']]) ?>">&nbsp;<i class="fa fa-pencil"></i>&nbsp;</a></td>

			</tr>
		<?php endforeach; ?>
		</table>
	</div>
</body>	
<?php $this->stop('main_content') ?>
