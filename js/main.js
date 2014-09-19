//ANIMATE CREDITS SHOW/HIDE
function credits(action) {
	var modal    = $('.modal-body'),
		credits  = $('#credits'),
		vCredits = $('.view_credits');

	switch (action) {
		
		case open:
			vCredits.fadeOut(500);
			modal.animate({
				height: '630'
			}, 500, function(){
				credits.fadeIn(500);
			});
			break;

		case close:
			credits.fadeOut(500, function(){
				modal.animate({
					height: '399'
				}, 500, function(){
					vCredits.fadeIn(350);
				});
			});
			break;
	}
}

//CALCULATE A VISTORS AGE ON THE CALCULATOR PAGE AND DISPLAY IT
function calculateAge(){
	var calc      = $('form'),
		modal     = $('.modal-body'),
		mHeight   = modal.height() + 70,
		gameday   = new Date(2003, 10, 1),
		month     = ($('#bMonth').val()),
		day       = $('#bDay').val(),
		year      = $('#bYear').val(),
		birthdate = new Date(year, month, day),
		yourAge   = gameday - birthdate,
		formatAge = parseInt(yourAge / 31556900000);
	
	modal.css('height', mHeight);

	function showBtns(fadeTarget){
		$('.shareResult').fadeIn(1500);
		fadeTarget.fadeIn(1500);
	}

	function showAgeMsg(){
		if(yourAge < 1) {
			calc.fadeOut(500, function(){
				var el = $('.notBorn');
				showBtns(el);
			});
		}
		else {
			calc.fadeOut(500, function(){
				var el = $('.youWere');
				showBtns(el);
				$('.youWere span').append(formatAge);
			});  
		}
	}

	calc.fadeOut(500, function(){
		modal.animate({
			height: '399'
		}, 500, function(){
			showAgeMsg();
		});
	});
}

function connectTwitter(){
	var age = $('.youWere span').html(),
		url = ('twitter/redirect.php?age=' + age);
	window.location.href = url;
}

function connectFacebook(){
	var age = $('.youWere span').html(),
		url = ('facebook/fb_login.php');
	window.location.href = url;
}

$('.age-calc').on('click',function(event) {
	event.preventDefault();
	calculateAge();
});

$('.view_credits').on('click', function(event){
	event.preventDefault();
	credits(open);
});

$('.hide_credits').on('click', function(event){
	event.preventDefault();
	credits(close);	
});

$('.sendTweet').on('click',function(event) {
	event.preventDefault();
	connectTwitter();
});

$('.facebook').on('click', function(event){
	event.preventDefault();
	connectFacebook();
});

