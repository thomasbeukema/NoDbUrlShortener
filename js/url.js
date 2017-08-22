var url_code = window.location.hash.substr(2, window.location.hash.length);
console.log(url_code);
			
if (url_code !== "") {
	window.location.href = "/url?url="+url_code;
}