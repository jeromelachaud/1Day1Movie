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
		// echo ('<pre>');
		// print_r($json);
		// echo ('</pre>');
		//	die();
		echo "<ul>";
		foreach($json['Search'] as $search) {
    		echo '<li>Title: ' . $search['Title'] . '</li>';
    		echo '<li>ID: ' . $search['imdbID'] . '</li>';
		}
		echo "</ul>";
		// return $json->{'Title'};
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