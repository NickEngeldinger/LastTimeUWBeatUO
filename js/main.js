//CALCULATE A VISTORS AGE ON THE CALCULATOR PAGE AND DISPLAY IT
$('.age-calc').on('click',function(event) {
	event.preventDefault();

	var gameday  = new Date(2003, 10, 1),
		month     = ($('#bMonth').val()),
		day       = $('#bDay').val(),
		year      = $('#bYear').val(),
		birthdate = new Date(year, month, day),
		yourAge   = gameday - birthdate,
		ageFormat = parseInt(yourAge / 31556900000);

	function hideForm(){
		$('.form-group, .age-calc, .modal-title, .close').fadeOut(500);
	}

	//Add a puddles spinner, gets larger as emerges from center spinner runs for 1-2 seconds

	//Reset the show/hide after the modal is closed

	if(yourAge < 0) {
		hideForm();
		$('.notBorn').fadeIn(1500);
		$('.shareResult').fadeIn(1500);
	}
	else {
		hideForm();
		$('.youWere').fadeIn(1500);  
		$('.youWere span').append(ageFormat);
		$('.shareResult').fadeIn(1500);
	}
});

//SEND TWEET OF USERS AGE
$('.sendTweet').on('click',function(event) {
	event.preventDefault();
	var age = $('.youWere span').html(),
		url = ('twitter/redirect.php?age=' + age);
	window.location.href = url;
});