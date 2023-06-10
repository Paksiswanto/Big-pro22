// Denmark
$(function(){
	$('#mapDenmark').vectorMap({
		map: 'dk_mill',
		zoomOnScroll: false,
		regionStyle:{
			initial: {
				fill: '#5957b1',
			},
			hover: {
				"fill-opacity": 0.8
			},
			selected: {
				fill: '#333333'
			},
		},
		backgroundColor: 'transparent',
	});
});