$(document).ready(function(){
	$('a.blankLink').attr('target','_blank');
	$("#submenu").tooltip({ effect: 'slide'});
	$(".tooltip").hover(
		function() {
			$("#submenu").addClass("hover")
		},
		function () {
			$("#submenu").removeClass("hover")
		}
	);

//-- BANNERS INDEX -----------------------------------------------
	if($('#imagenes_portafolio').length > 0){
		$(function(){
			$('#imagenes_portafolio')
				.before('<div id="paginador">')
				.cycle({
				   fx:     'fade',
				   speed:  1000,
				   timeout: 0,
				   pager:  '#paginador',
				   next:   '#next',
				   prev:   '#prev'
			});
		});
	}









});























