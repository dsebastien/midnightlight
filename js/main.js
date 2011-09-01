$j(document).ready(function() {
	// corners
	$j('#wrapper').corner("round bl 8px");
	$j(".widget").corner("round 12px");
	
	// tooltips
	$j('a, input, label').tooltip({
		delay: 0,
		track: true,
		showURL: false,
		showBody: "; "
	});
	
	// images opacity
	$j('img.pie-img').css('opacity', 0.7);
	
	// hoverFlow avoids queuing the effect multiple times
	$j('img.pie-img').hover(function(e) {
		$j(this).hoverFlow(e.type, { opacity: 1.0 }, 'normal');
	}, function(e) {
		$j(this).hoverFlow(e.type, { opacity: 0.7 }, 'normal');
	});
});
	
// Enable the syntax highlighter
SyntaxHighlighter.all();