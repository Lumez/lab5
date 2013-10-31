<?php require('includes/header.php'); ?>


<!-- main content -->
<div id="content" class="row">

	<?php 
		require('includes/db.php');
			
		$manufacturers = $db->query("SELECT * FROM manufacturer WHERE id={$_GET["id"]}");
		
		$manufacturer = $manufacturers->fetch_object();
		echo "<h2>See all cars we have available from {$manufacturer->name}</h2>";		
	?>
		
	<!-- car list -->
	<div id="car-list" class="row">
		<?php 
			require('includes/db.php');
			require('classes/car.class.php');
			
			$cars = $db->query("SELECT * FROM car WHERE manufacturer_id={$_GET["id"]}");
			
			while($car = $cars->fetch_object("Car")) {
				print_r($car);
			}
		?>
		
	</div><!-- /car list -->
	
</div><!-- /main content -->


<?php require('includes/footer.php'); ?>