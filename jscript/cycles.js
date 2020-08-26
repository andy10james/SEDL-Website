function startBB() {
	$('#billboard').cycle({ 
    fx:      'fade', 
    speed:    300, 
    timeout:  20000,
	delay: 0
});
}

function startNewsScroll() {
	$('#newsScroll').cycle({ 
    fx:      'scrollUp', 
    speed:    300, 
    timeout:  10000 
});	
}

/* SEDL Oracle Page */
function startBI() {
$('#backImg').cycle({     fx:    'fade' });
}
