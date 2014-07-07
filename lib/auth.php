<?php
session_start();
if(!isset($auth)) {
	if(!isset($_SESSION['auth']['id'])) {
		header('Location:' . WEBROOT . 'admin/login.php');
		die();
	}
};