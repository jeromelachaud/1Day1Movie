<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IMdb API</title>
	<!-- <link rel="stylesheet" href="../css/styles.css"> -->
</head>
<body>

<!-- <div class="nav">
	<p>
		<a>
			<img src="../img/django.jpg" alt="" /> 
			text
		</a>
	<p/>
</div> -->

<?php require 'api.php' ?>


<form action="<?php echo basename(__FILE__); ?>" method="post">
<p>
	<label for="title">Title:</label> 
		<input type="text" name="title" id="title" /><br />
</p>
<!-- <p>	
	<label for="id">ID</label> 
		<input type="text" name="id" id="id" /><br />
</p> -->
<p>
	<input type="submit" name="submit" id="submit" value="Send" />
</p>
</form>

<?php 

	if (!empty($_POST['title'])) {
	$title = $_POST['title'];
	echo ("<h2>Title searched: ".$title."</h2>");
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

?>

<img src="<?php // echo getPoster($returnedID); ?>" src="<?php // echo (returnedTitle); ?>">

</body>
</html>