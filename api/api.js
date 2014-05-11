	// <script type="text/javascript">

	// IMDb ID to Search
	var imdbId = "The Social NetWork";

	// Send Request
	var http = new XMLHttpRequest();
	http.open("GET", "http://www.omdbapi.com/?t=" + imdbId, false);
	http.send(null);

	// Check status
	console.log(http.status);
	console.log(http.statusText);

	// Response to JSON
	var omdbData = http.responseText;
	var omdbJSON = eval("(" + omdbData + ")");

	// Returns Movie Title & Poster
	// console.log(omdbJSON.Title);
	// console.log(omdbJSON.Poster);
	
	$poster = omdbJSON.Poster;
	console.log($poster);

	// </script>