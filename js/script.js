$(document).ready(function(){
	$('a.blankLink').attr('target','_blank');

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























