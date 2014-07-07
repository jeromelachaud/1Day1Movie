<?php
include "../includes.php";

$imdbID = $_POST['imdbid'];
$Title = $_POST['title'];
$Year = $_POST['year'];
$Poster = $_POST['poster'];
?><pre><?php print_r($_POST);?></pre><?php



// query
$sql = "INSERT INTO movies (imdbid,title,year,poster) VALUES (:imdbid,:title,:year,:poster)";
$q = $db->prepare($sql);
$q->execute(array(':imdbid'=>$imdbID,
                  ':title'=>$Title,
                  ':year'=>$Year,
                  ':poster'=>$Poster,));
?>