<?php $auth = 0; ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>1 Day / 1 Movie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Jerome Lachaud">
    <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/simplex/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo(WEBROOT) ?>css/style.css">
</head>
<body>
    <div class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand" href="#">1 Day / 1 Movie</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="../index.php">Home</a></li>
                    <li><a href="../admin/login.php">Login</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
	<div class="container">


		<?php echo Alert(); ?>