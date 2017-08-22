<?php
    
    // Location of urls file
    $urls_location = "../blob/urls.json";
    
    // Check if required parameter is set
    if (isset($_GET['url'])) {
        // Retrieve contents of JSON file
        $urls = file_get_contents($urls_location);
        // Store JSON as a map
        $urls = json_decode($urls, true);
        
        // Check of url_code exists in stored urls
        if (isset($urls[$_GET['url']])) {
            // Put together the URL
            $url = "http://{$urls[$_GET['url']]}";
            // Redirect to given URL
            header("Location: {$url}");
        } else {
            // Url_not found in JSON, redirect to homepage (can be changed to anything)
            header("Location: /");
        }
    } else {
        // Required parameter not given, redirect to homepage (can be changed to anything)
        header("Location: /");
    }
?>