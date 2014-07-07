<?php include '../includes.php' ?>
<?php include '../partials/header-admin.php' ?>

<form class="form form-signin" action="<?php echo basename(__FILE__); ?>" method="post">

	<div class="form-group">
		<label for="title">Title:</label>
	    <?= input('title'); ?>
	</div>

	<button class="btn btn-lg btn-primary btn-block" type="submit">Search</button>


</form>

<?php

	if(isset($_POST['title']) || isset($_POST['title'])) {

		if (!empty($_POST['title'])) {
			$title = $_POST['title'];
			echo ("<hr><div class=\"text-center\"><h2>Searched title: ".$title."</h2></div><hr>");
			$title = urlencode($title);
			getList($title);
			// $fetchID = getID($returnedTitle);
			// echo ($fetchID);
			}

			elseif (!empty($_POST['id'])) {
				$returnedID = $_POST['id'];
				echo ("id : ".$returnedID."");
			}

			else die ('Form must not be empty');
	}

?>

<img src="<?php // echo getPoster($returnedID); ?>" src="<?php // echo (returnedTitle); ?>">

</body>
</html>