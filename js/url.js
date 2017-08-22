/*
    Author : Thomas Beukema <thomas@thomasbeukema.me>
    License: MIT
*/

// Get hash part of URL; strip of '#/' part
var url_code = window.location.hash.substr(2, window.location.hash.length);

// Check if url_code is set
if (url_code !== "") {
    // Redirect to PHP script
	window.location.href = "/url?url="+url_code;
}