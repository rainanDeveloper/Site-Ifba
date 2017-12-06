$(document).ready(function() {
	if ($(window).scrollTop()>226) {
			$('.lat-bar').addClass("lat-bar-fixed");
		} else{
			$('.lat-bar').removeClass("lat-bar-fixed");
		}

	$(window).scroll(function(){
		if ($(this).scrollTop()>226) {
			$(".back-top").fadeIn();
			$('.lat-bar').addClass("lat-bar-fixed");
		} else{
			$(".back-top").fadeOut();
			$('.lat-bar').removeClass("lat-bar-fixed");
		}
	});

	$(".back-top").click(function(){
		$('html,body').animate({scrollTop:0}, 300);
	});

	$(function(){
		$(".slider ul").cycle({
			fx: 'fade',
			speed: 1000,
			timeout: 4000,
			prev: '#prv',
			next: '#nxt',
		});
	})

	$("#search-text-field").keypress(function(){
	});

	$('.image img').each(function() {
	    if($(this).height() > $(this).width()) {
	        $(this).width('100%');
	        $(this).height('auto');
	    }
	});


	var input = document.getElementById("imagem");
	input.addEventListener("change", function(){
    var nome = "Selecionar Imagem";
    if(input.files.length > 0) {
    	nome = input.files[0].name;}
    $('span.text-selection').innerHTML = nome;

	});
});