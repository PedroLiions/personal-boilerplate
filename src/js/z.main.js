//- FUNCTION FOR SCROLL EVENTS 
//-------------------------------------------

if (document.querySelector('.trigger') != undefined) {
	window.onscroll = getScrollPosition;
}

function getScrollPosition(){
	var windowBottom = window.pageYOffset + window.innerHeight,
	object = document.querySelector('.trigger'), 
	objectBottom = object.offsetTop + parseInt(window.getComputedStyle(object).height);

	if (windowBottom > objectBottom - 200){
		object.classList.add('go');
	}
};

