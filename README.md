# NoDbURLShortener
This repo contains a PHP url shortener which doesn't use any database, but uses JSON instead. It is very, very simple and basic, but that is the way I wanted it: simple and basic.

### How to use?
Clone this repo on your root directory of your server. Now create an empty JSON file where you want. Next open up 'url/url.php' and 'url/index.php'. In the files change the variable `$urls_location` to the location of your 'urls.json'. Now just open your browser and go to 'yoursite.com/url/new.php', add a new url and you're good to go.

### Extra:
In the '/js' folder, you find 'url.js'. This is a little script allows you to just enter `www.yoursite.com/#/{url_code}`, and it will redirect to the PHP script. This is not really necessary, but it looks a lot nicer in my opinion.
To use the script, put this in the head of your homepage:

`<script type="text/javascript" src="/path/to/url.js" />`

If you wish not to use the script, set the variable `$jsHelperEnabled` in 'url/new.php' to false.