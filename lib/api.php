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
		foreach($json['Search'] as $search){ ?>
    		<form class="form-horizontal form-signin" role="form" action="add-movies.php" method="post">
    		<div class="form-group">
    			<label for="id" class="control-label col-xs-2">ID</label>
    			<div class="col-xs-10"><input type="text" class="form-control" name="imdbid" id="id" value="<?= $search['imdbID']; ?>"/></div>
    		</div>
    		<div class="form-group"><label for="title" class="control-label col-xs-2">Title</label>
    			<div class="col-xs-10"><input type="text" class="form-control" name="title" id="title" value="<?= $search['Title']; ?>"/></div>
    		</div>
    		<div class="form-group">
    			<label for="year" class="control-label col-xs-2">Year</label>
    			<div class="col-xs-10"><input type="text" class="form-control" name="year" id="year" value="<?= $search['Year']; ?>"/></div>
    		</div>
    		<div class="form-group"><div class="col-xs-12">
    			<?php if (getPoster($search['imdbID']) == 'N/A') {
    				echo '<img src="http://placekitten.com/300/450" />';
    			}

	      		else echo '<img src="'.getPoster($search['imdbID']).'" /><input type="hidden" name="poster" id="poster" value="'.getPoster($search['imdbID']).'" />';

	      	?>
	      	</div></div>

	     	<button class="btn btn-lg btn-primary btn-block" type="submit">Add!</button>
    		<hr>

    		</form>
		<?php }
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