<?php 
	function alert() {
		if(isset($_SESSION['Alert'])){
			extract($_SESSION['Alert']);
			unset($_SESSION['Alert']);
			return "<div class=\"alert alert-$type\">$message</div>";
		}
	};

	function setAlert($message, $type = 'success') {
		$_SESSION['Alert']['message'] = $message;
		$_SESSION['Alert']['type'] = $type;
	};

	// function setAlert($message, $type = 'danger') {
	// 	$_SESSION['Alert']['message'] = $message;
	// 	$_SESSION['Alert']['type'] = $type;
	// };
?>