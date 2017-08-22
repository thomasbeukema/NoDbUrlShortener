<?php
    $urls_location = "../blob/urls.json";

    if (isset($_GET['url'])) {
        $urls = file_get_contents($urls_location);
        $urls = json_decode($urls, true);
        
        if (isset($urls[$_GET['url']])) {
            $url = "http://{$urls[$_GET['url']]}";
            header("Location: {$url}");
        } else {
            //header("Location: /");
        }
    } else {
        //header("Location: /");
    }
?>