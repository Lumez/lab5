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
				echo "<div class=\"car-item\">";
				
				echo "<div class=\"row\">";
				echo "<div class=\"col-md-6\"><h3>{$car->model}</h3></div>";
				echo "</div>";
				
				echo "<div class=\"row\">";
				echo "<div class=\"col-md-4\"><strong>{$car->regDate} ({$car->regNumber})</strong></div>";
				echo "<div class=\"col-md-6\" style=\"text-align: right;\"><strong>&pound;{$car->price}</strong></div>";
				echo "</div>";
				
				echo $car->description;
				
				echo "</div>";
			}
		?>
		
	</div><!-- /car list -->
	
</div><!-- /main content -->


<?php require('includes/footer.php'); ?>