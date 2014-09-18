//ANIMATE CREDITS SHOW/HIDE
function creditsOpen() {
	$('.view_credits').hide();
	$('#credits').show();
	/*var winWidth    = $(window).width(),
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
	}*/
}

function creditsClose() {
	/*$('#credits').fadeOut(500, function(){
		$('.modal-body').animate({
			height: '400'
		},500, function(){
			$('.view_credits').fadeIn(350);
		});
	});*/
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
	creditsOpen();
});

$('.hide_credits').on('click', function(event){
	event.preventDefault();
	creditsClose();	
});

$('.sendTweet').on('click',function(event) {
	event.preventDefault();
	connectTwitter();
});

$('.facebook').on('click', function(event){
	event.preventDefault();
	connectFacebook();
});

