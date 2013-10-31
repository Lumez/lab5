<?php require('includes/header.php'); ?>


<!-- main content -->
<div id="content" class="row">
	
	<h2>We have cars from many manufacturers around the world!</h2>
		
	<!-- manufacturer list -->
	<div id="manufacturer-list" class="row">
		<?php 
		require('includes/db.php');
		$manufacturers = $db->query("SELECT manufacturer.id, manufacturer.name FROM manufacturer");
		while($manufacturer = $manufacturers->fetch_object()) {
			echo "<h3>{$manufacturer->name} - {$manufacturer->id}</h3>";
		}
		?>
	</div><!-- /manufacturer list -->
	
</div><!-- /main content -->


<?php require('includes/footer.php'); ?>