function connect(platform){
	var msg = $('h2').html(),
		url = (platform + '/redirect.php?msg=' + msg);
	window.location.href = url;
}

$('.share').on('click',function(event) {
	event.preventDefault();
	connect('twitter');
});