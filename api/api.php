<?php
	
	function getPoster($imdbId) {
		$curl = curl_init("http://www.omdbapi.com/?i=$imdbId");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, 0);
		curl_setopt($curl, CURLOPT_TIMEOUT, 3);
		$data = curl_exec($curl);
		// var_dump($data);
		curl_close($curl);
		$json = json_decode($data);
		return $json->{'Poster'};

	}

	function getList($title) {
		$curl = curl_init("http://www.omdbapi.com/?s=$title");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, 0);
		curl_setopt($curl, CURLOPT_TIMEOUT, 3);
		$data = curl_exec($curl);
		curl_close($curl);
		$json = json_decode($data, true);
		//echo '<form action="index.php" method="post">';
		foreach($json['Search'] as $search) {
    		echo '<ul>';
    		echo '<li><label for="id">Title</label><input type="text" name="title" id="title" value="' . $search['Title'] . '"/></li>';
    		echo '<li><label for="id">ID</label><input type="text" name="id" id="id" value="' . $search['imdbID'] . '"/></li>';
    		echo '<li><label for="year">Year</label><input type="text" name="year" id="year" value="' . $search['Year'] . '"/></li>';
    			if (getPoster($search['imdbID']) == 'N/A') {
    				echo '<img src="http://placekitten.com/300/450" />';
    			}
	      		else echo '<img src="'.getPoster($search['imdbID']).'" />';
    		echo '</ul>';
		}
	}

	// function getID($imdbTitle) {
	// 	$curl = curl_init("http://www.omdbapi.com/?t=$imdbTitle");
	// 	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	// 	curl_setopt($curl, CURLOPT_HEADER, 0);
	// 	curl_setopt($curl, CURLOPT_TIMEOUT, 3);
	// 	$data = curl_exec($curl);
	// 	curl_close($curl);
	// 	$json = json_decode($data);
	// 	return $json->{'imdbID'};
	// }

?>