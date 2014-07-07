<?php
	$select = $db->query('SELECT day, DATE_FORMAT(day, \'%d %M %Y\') AS date_fr, imdbid, title, poster FROM movies');
	$select = $select->fetchAll();
?>


<div class="row">

	<? foreach ($select as $movie): ?>

		<a class="movie-link col-md-4" href="http://www.imdb.com/title/<?= $movie['imdbid']; ?>" target="_blank">
			<img src="<?= $movie['poster']; ?>" />
			<br/>
			<datetime><?= $movie['date_fr']; ?></datetime>
		</a>
	<? unset($movie); endforeach; ?>

</div>
