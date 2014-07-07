<?php $auth = 0;

 /*------------------------------------*\
  Includes
 \*------------------------------------*/

include '../includes.php';

/*------------------------------------*\
	Form traitement
\*------------------------------------*/

if(isset($_POST['username']) &&  isset($_POST['password'])) {
	$username = $db->quote($_POST['username']);
	$password = SHA1($_POST['password']);
	$select = $db->query("SELECT * FROM users WHERE username=$username AND password='$password'");
	if($select->rowCount() > 0) {
		$_SESSION['auth'] = $select->fetch();
		setAlert('You are now connected');
		header('Location:' . WEBROOT . 'admin/index.php');
		die();
	};
}

/*------------------------------------*\
Start display content
\*------------------------------------*/

include '../partials/header.php';

?>

<h2>Authentication</h2>


	<form class="form-signin" role="form" action="#" method="post">

	<h3 class="form-signin-heading">Please sign in</h3>

	<div class="form-group">
		<label for="username">Username</label>
	    <?= input('username'); ?>
	</div>

	<div class="form-group">
		<label for="password">Password</label>
	    <input type="password" class="form-control" id="password" name="password" required>
	</div>

	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

</form>

<?php include '../partials/debug.php';?>
<?php include '../partials/footer.php';?>