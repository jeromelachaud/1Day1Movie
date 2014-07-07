<?php 
/** Database connection **/
$username = 'root';
$password = 'root';
$host = 'localhost';
$dbname   = '1day1movie';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $db->query('SET lc_time_names = \'fr_FR\'');
} catch(PDOException $e) {
	echo 'impossible de se connecter à la base de données<br/>';
    echo 'ERROR: ' . $e->getMessage();
    die();
};