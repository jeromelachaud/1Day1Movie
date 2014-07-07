<?php
	$select = $db->query('SELECT day, DATE_FORMAT(day, \'%d %M %Y\') AS date_fr, imdbid, title, poster FROM movies');
	$select = $select->fetchAll();
	var_dump($select);

$i = 0;
echo '<div class="row">';
	foreach ($select as $movie):
		$i++;
		echo '<a class="movie-link col-md-4" href="http://www.imdb.com/title/'.$movie['imdbid'].'" target="_blank">';
		// die();
		//echo '<div class="col-md-4">';
		echo '<h2>'.$movie['title'].'</h2>';
		echo '<img src="'.$movie['poster'].'"/>';
		echo '<br/>';
		echo '<datetime>'.$movie['date_fr'].'</datetime>';
		//echo '</div>';
		echo '</a>';
		    if ($i % 3 == 0) {
		    	echo '</div></a><div class="row">';
    		}

		unset($movie);
	endforeach;
echo '</div>';
