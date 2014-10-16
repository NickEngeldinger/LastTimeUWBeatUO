function connect(platform){
	var msg = $('h2').text(),
		url = (platform + '/redirect.php?age=' + msg);
	window.location.href = url;
}

$('.share').on('click',function(event) {
	event.preventDefault();
	connect('twitter');
});

$.ajax({
	url: '/trivia.php',
	type: 'GET',
	dataType: 'json',
	success: function(data) {
		var sp = data[0].message;		
		$('.trivia').append(sp);
	}
});
