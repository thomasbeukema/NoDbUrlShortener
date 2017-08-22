<?php
	if (isset($_POST['url'])) {
	    $urls_location = "../blob/urls.json";
		$urls = file_get_contents($urls_location);
		$urls = json_decode($urls, true);

		$random = urlencode(substr(sha1(microtime()), 0, 6));

		if (!isset($urls[$random])) {
			$urls[$random] = $_POST['url'];
		}

		file_put_contents($urls_location, json_encode($urls));
		echo "Shortened URL: thomasbeukema.me/#/{$random}";
	}
?>







<!DOCTYPE html>
<html>
<head>
	<title>URL Shortener</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="url" placeholder="URL:" />
		<input type="submit"> 
	</form>
</body>
</html>