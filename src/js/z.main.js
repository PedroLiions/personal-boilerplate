//- generic helpers
//-------------------------------------------

var helpers = {
	lockBody : function()  {
		document.body.classList.add('no-scroll');
	},
	unlockBody : function() {
		document.body.classList.remove('no-scroll');
	},

	isMobile : window.innerWidth < 900 ? true : false, 

	carousel : function(selector, options) {
		$(selector).slick(options);
	}, 

	carouselOptions : {}
}

//- smooth jquery anchors (Jquery dependant)
//-------------------------------------------

function anchors() {
	$(".is-anchor").click(function(event) {     
		event.preventDefault();
		var target = $(this).data('to');

		$('html,body').animate({
			scrollTop: $(target).offset().top
		}, 500);
	});
}

if (document.querySelector('.trigger') != undefined) {
	window.onscroll = getScrollPosition;
}

//- function for scroll events 
//-------------------------------------------

function getScrollPosition(){
	var windowBottom = window.pageYOffset + window.innerHeight,
	object = document.querySelector('.trigger'), 
	objectBottom = object.offsetTop + parseInt(window.getComputedStyle(object).height);

	if (windowBottom > objectBottom - 200){
		object.classList.add('go');
	}
};

//- generic modals (Jquery dependant)
//-------------------------------------------

function openModal(button, modal) {

	helpers.lockBody();

	button = $(button); 
	modal = $(modal);
	var persona; 


	button.on('click', function(e){
		var instance = $(this).data('instance'); 
		e.preventDefault();


		// use data attribute on buttons to identify click and open correct modal instance 
		if (instance == '') {
			modal.addClass('');
		} 

		else {
			modal.addClass('work');
		}


		// overlay is mostly a generic 
		$('.overlay').fadeIn(400, function() {
			modal.fadeIn();
			$(instance).fadeIn();
		});
	});

}

function closeModal(button, modal) {

	button = $(button); 
	modal = $(modal);

	button.on('click', function() { 

		$(modal).fadeOut(400, function() {
			$('').fadeOut();
		});

	});

	helpers.unlockBody();
}