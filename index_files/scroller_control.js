// JavaScript Document
// Image Vertical Scroller Control
	$(function(){
		$('#news-container').vTicker({ 
			speed: 500,
			pause: 2500,
			animation: 'fade',
			mousePause: true,
			showItems: 2
			});
		});