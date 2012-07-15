var in_subnav = false;

$('nav > ul > li').mouseover(function() {
	subnav = $(this).children('ul')

	subnav.css('position', 'absolute');
	subnav.show()
});

$('nav > ul > li').mouseout(function() {
	if(!in_subnav)
		subnav.hide()
});

$('.sub-menu').mouseover(function() {
	in_subnav = true;
});

$('.sub-menu').mouseout(function() {
	in_subnav = false;
});