//ANIMATE CONTAINER SIZE CHANGES
function creditsOpen() {
	var winWidth    = $(window).width(),
		mBody       = $('.modal-body'),
		currHeight  = mBody.height(),
		creditsLink = $('.view_credits');

	function openFades(){
		creditsLink.fadeOut(200, function(){
				$('.hide_credits').fadeIn(500);
				$('#credits').fadeIn(500);	
			});
	}

	if(winWidth > 384){
		var setHeight  = currHeight + 70;
		mBody.css('height', setHeight);
		mBody.animate({
			height: '550'
		}, 500, function(){
			openFades();
		});
	}
	else {
		var setHeight  = currHeight + 70;
		mBody.css('height', setHeight);
		creditsLink.css('margin-bottom','0')
		mBody.animate({
			height: '600'
		}, 500, function(){
			openFades();
		});
	}
}

function creditsClose() {
	$('#credits').fadeOut(500, function(){
		$('.modal-body').animate({
			height: '400'
		},500, function(){
			$('.view_credits').fadeIn(350);
		});
	});
}

//CALCULATE A VISTORS AGE ON THE CALCULATOR PAGE AND DISPLAY IT
function calculateAge(){
	var calc = $('form');

	$('.modal-title').fadeOut(500);

	calc.fadeOut(500, function(){

		var gameday    = new Date(2003, 10, 1),
			month      = ($('#bMonth').val()),
			day        = $('#bDay').val(),
			year       = $('#bYear').val(),
			birthdate  = new Date(year, month, day),
			yourAge    = gameday - birthdate,
			ageFormat  = parseInt(yourAge / 31556900000);

		if(yourAge < 0) {
			calc.fadeOut(500, function(){
				$('.notBorn').fadeIn(1500);
				$('.shareResult').fadeIn(1500);
			});
		}
		else {
			calc.fadeOut(500);
			$('.youWere').fadeIn(1500, function(){
				$('.youWere span').append(ageFormat);
				$('.shareResult').fadeIn(1500);	
			});  
		}
	});

	
}

/////////////////////////////////////////////////////////////////////
//
// EVENT HANDLERS
//
////////////////////////////////////////////////////////////////////

$('.age-calc').on('click',function(event) {
	event.preventDefault();
	calculateAge();
});

$('.view_credits').on('click', function(event){
	event.preventDefault();
	creditsOpen();
});

$('.hide_credits').on('click', function(event){
	event.preventDefault();
	creditsClose();	
});

$('.sendTweet').on('click',function(event) {
	event.preventDefault();
	var age = $('.youWere span').html(),
		url = ('twitter/redirect.php?age=' + age);
	window.location.href = url;
});

$('.facebook').on('click', function(event){
	event.preventDefault();
	var age = $('.youWere span').html(),
		url = ('facebook/fb_login.php');
	window.location.href = url;
});

