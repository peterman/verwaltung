<?php
include_once "header.php";
?>
<div class="container-xl">
<div class="jumbotron">
	<div class="alert alert-success" role="alert">
		<?php if(logged_in()) {
			echo "Welcome " . get_name($_SESSION['email']);
		}else{
			echo "Welcome Guest";
		}
		?>
	</div>
	<h1 class="text-center"> Home </h1>
</div>
</div>
<?php
include_once "footer.php";
?>