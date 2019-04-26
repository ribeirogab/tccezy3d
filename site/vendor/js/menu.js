$(document).ready(function() {
	$("#btn-openmenu").click(function(){
		$("#btn-openmenu").stop().hide();
		$("#btn-closemenu").stop().show();
		$("#menu").stop().slideDown();
		$( "#itens" ).stop().slideDown(500);
		$( ".itens" ).stop().addClass( "opacity");
		$( "#btn-lang" ).stop().fadeOut(500);
		$( "#nav-mobile" ).stop().addClass( "black");
		$("#lang").stop().hide();
	});
	$("#btn-closemenu").click(function(){
		$("#btn-openmenu").stop().show();
		$("#btn-closemenu").stop().hide();
		$("#menu").stop().slideUp();
		$("#solucoes").stop().slideUp();
		$("#produtos").stop().slideUp();
		$("#impressoras3d").stop().slideUp();
		$("#acessorios").stop().slideUp();
		$("#msla").stop().slideUp();
		$("#fdm").stop().slideUp();
		$("#ezycure").stop().slideUp();
		$( "#itens" ).stop().slideUp(500);
		$( ".itens" ).stop().removeClass( "opacity");
		$( "#btn-lang" ).stop().fadeIn(500);
		$( "#nav-mobile" ).stop().removeClass( "black");
		$( ".opcty-solucoes" ).stop().removeClass( "opacity");
		$("#lang").stop().hide();
	});

	$("#btn-solucoes").click(function(){
		$('#solucoes').stop().animate({width: 'show'});
		$( ".opcty-solucoes" ).stop().addClass( "opacity");
	});
	$("#btn-voltar1").click(function(){
		$('#solucoes').stop().animate({width: 'hide'});
		$( ".opcty-solucoes" ).stop().removeClass( "opacity");
	});

	$("#btn-produtos").click(function(){
		$('#produtos').stop().animate({width: 'show'});
		$( ".opcty-produtos" ).stop().addClass( "opacity");
	});
	$("#btn-voltar2").click(function(){
		$('#produtos').stop().animate({width: 'hide'});
		$( ".opcty-produtos" ).stop().removeClass( "opacity");
	});

// impressoras3d
$("#btn-printer").click(function(){
	$('#impressoras3d').stop().animate({width: 'show'});
	$( ".opcty-printer" ).stop().addClass( "opacity");
});
$("#btn-voltar3").click(function(){
	$('#impressoras3d').stop().animate({width: 'hide'});
	$( ".opcty-printer" ).stop().removeClass( "opacity");
});
// MSLA - LCD UV
$("#btn-msla").click(function(){
	$('#msla').stop().animate({width: 'show'});
	$( ".opcty-msla" ).stop().addClass( "opacity");
});
$("#btn-voltar5").click(function(){
	$('#msla').stop().animate({width: 'hide'});
	$( ".opcty-msla" ).stop().removeClass( "opacity");
});
// FDM
$("#btn-fdm").click(function(){
	$('#fdm').stop().animate({width: 'show'});
	$( ".opcty-fdm" ).stop().addClass( "opacity");
});
$("#btn-voltar6").click(function(){
	$('#fdm').stop().animate({width: 'hide'});
	$( ".opcty-fdm" ).stop().removeClass( "opacity");
});

// acessorios
$("#btn-acss").click(function(){
	$('#acessorios').stop().animate({width: 'show'});
	$( ".opcty-acss" ).stop().addClass( "opacity");
});
$("#btn-voltar4").click(function(){
	$('#acessorios').stop().animate({width: 'hide'});
	$( ".opcty-acss" ).stop().removeClass( "opacity");
});
// EZYCURE
$("#btn-cpc").click(function(){
	$('#ezycure').stop().animate({width: 'show'});
	$( ".opcty-ezycure" ).stop().addClass( "opacity");
});
$("#btn-voltar7").click(function(){
	$('#ezycure').stop().animate({width: 'hide'});
	$( ".opcty-ezycure" ).stop().removeClass( "opacity");
});

// APLICAÇÕES
$("#btn-apps").click(function(){
	$('#apps').stop().animate({width: 'show'});
	$( ".opcty-apps" ).stop().addClass( "opacity");
});
$("#btn-voltar8").click(function(){
	$('#apps').stop().animate({width: 'hide'});
	$( ".opcty-apps" ).stop().removeClass( "opacity");
});




// troca de lingua
$("#btn-lang").click(function(){
	$("#lang").fadeToggle();
});
$("#btn-lang-desk").click(function(){
	$("#lang").fadeToggle();
});

});