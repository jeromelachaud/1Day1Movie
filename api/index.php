<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IMdb API</title>
</head>
<body>

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
	// $fetchID = getID($returnedTitle); 
	// echo ($fetchID);
	}
	
	elseif (!empty($_POST['id'])) {
		$returnedID = $_POST['id'];
		echo ("id : ".$returnedID."");
	}

else die ('Le formulaire ne doit pas être vide');

// Encode the input
$title = urlencode($title);

// Display encoded URL';
// echo $title;

// Display the list of matching titles with IDs
getList($title);

?>

<img src="<?php //echo getPoster($fetchID); ?>" src="<?php //echo (returnedTitle); ?>">

</body>
</html>