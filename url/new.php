<?php
	/*
        Author : Thomas Beukema <thomas@thomasbeukema.me>
        License: MIT
    */

	// js/url.js used
	$jsHelperEnabled = true;
	// Location of your urls file
	$urls_location = "../blob/urls.json";
	
	// Check if $_POST parameter is set
	if (isset($_POST['url'])) {
		// Retrieve contents of JSON file
		$urls = file_get_contents($urls_location);
		// Store JSON as map
		$urls = json_decode($urls, true);
		
		// Generate random 6 chars by hashing the microtime and taking a substring of that
		$random = urlencode(substr(sha1(microtime()), 0, 6));
		
		// Check if code is already in file (good practice; practically impossible)
		if (!isset($urls[$random])) {
			$urls[$random] = $_POST['url'];
		}
		
		// Save the urls
		file_put_contents($urls_location, json_encode($urls));
		
		// Check if JS script active
		if ($jsHelperEnabled) {
			// JS Active
			echo "Shortened URL: {$_SERVER['HTTP_HOST']}/#/{$random}";
		} else {
			// JS Inactive
			echo "Shortened URL: {$_SERVER['HTTP_HOST']}/url?url={$random}";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>URL Shortener</title>
</head>
<body>
	<!-- Just a simple form for adding urls -->
	<form action="" method="POST">
		<input type="text" name="url" placeholder="URL:" />
		<input type="submit"> 
	</form>
</body>
</html>