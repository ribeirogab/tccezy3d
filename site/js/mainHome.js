$(document).ready(function(){
  $("#btn-conta").click(function(){
    $("#conta").toggle();
  });
  $("#btn-conta-mobile").click(function(){
    $("#conta").toggle();
  });
  $("#btn-lang").click(function(){
    $("#conta").hide();
  });
  $("#btn-lang").click(function(){
    $("#lang").toggle();
  });
  $("#btn-conta").click(function(){
    $("#lang").hide();
  });
  $("#btn-conta-mobile").click(function(){
    $("#lang").hide();
  });
  $("main").click(function(){
    $("#lang").hide();
    $("#conta").hide();
  });

  $("#btn-openmenu").click(function(){
    $("#btn-openmenu").stop().hide();
    $("#btn-closemenu").stop().show();
  });
  $("#btn-closemenu").click(function(){
    $("#btn-openmenu").stop().show();
    $("#btn-closemenu").stop().hide();
  });

  $("#btn-impressoras3d").hover(function(){
    $("main").css({'opacity': '0.7', 'transition': '0.3s'});
    $("#impressoras3d").stop().show('fast');
    $("#btn-impressoras3d").css({'color': '#fff', "transition": "0.5s"});
    $("#btn-acessorios").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    $("#btn-aplicacoes").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    $("#acessorios").stop().hide('fast');
    $("#aplicacoes").stop().hide('fast');
    $("#down").stop().show('slow');
    let left = parseInt($('#impressoras3d').css('left')) + 60;
    $("#down").stop().css("left", left);
  });
  $("#btn-acessorios").hover(function(){
    $("main").css({'opacity': '0.7', 'transition': '0.3s'});
    $("#acessorios").stop().show('fast');
    $("#btn-acessorios").css({'color': '#fff', "transition": "0.5s"});
    $("#btn-impressoras3d").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    $("#btn-aplicacoes").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    $("#impressoras3d").stop().hide('fast');
    $("#aplicacoes").stop().hide('fast');
    $("#down").stop().show('fast');
    let left = parseInt($('#acessorios').css('left')) + 60;
    $("#down").stop().css("left", left);
  });
  $("#btn-aplicacoes").hover(function(){
    $("main").css({'opacity': '0.7', 'transition': '0.3s'});
    $("#aplicacoes").stop().show('fast');
    $("#btn-aplicacoes").css({'color': '#fff', "transition": "0.5s"});
    $("#btn-acessorios").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    $("#btn-impressoras3d").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    $("#impressoras3d").stop().hide('fast');
    $("#acessorios").stop().hide('fast');
    $("#down").stop().show('fast');
    let left = parseInt($('#aplicacoes').css('left')) + 60;
    $("#down").stop().css("left", left);
  });
  $("#btn-contato").hover(function(){
    $("main").css({'opacity': '1', 'transition': '0.3s'});
    $("#impressoras3d").stop().hide('fast');
    $("#acessorios").stop().hide('fast');
    $("#aplicacoes").stop().hide('fast');
    $("#down").stop().css({"display": "none", "left": "37%"});
    $("#btn-aplicacoes").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    $("#btn-acessorios").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    $("#btn-impressoras3d").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
  });
  $("#btn-logar").hover(function(){
    $("main").css({'opacity': '1', 'transition': '0.3s'});
    $("#impressoras3d").stop().hide('fast');
    $("#acessorios").stop().hide('fast');
    $("#aplicacoes").stop().hide('fast');
    $("#down").stop().css({"display": "none", "left": "37%"});
    $("#btn-aplicacoes").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    $("#btn-acessorios").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    $("#btn-impressoras3d").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
  });
  $("#btn-cadastrar").hover(function(){
    $("main").css({'opacity': '1', 'transition': '0.3s'});
    $("#impressoras3d").stop().hide('fast');
    $("#acessorios").stop().hide('fast');
    $("#aplicacoes").stop().hide('fast');
    $("#down").stop().css({"display": "none", "left": "37%"});
    $("#btn-aplicacoes").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    $("#btn-acessorios").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    $("#btn-impressoras3d").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
  });
  $("#btn-conta").hover(function(){
    $("main").css({'opacity': '1', 'transition': '0.3s'});
    $("#impressoras3d").stop().hide('fast');
    $("#acessorios").stop().hide('fast');
    $("#aplicacoes").stop().hide('fast');
    $("#down").stop().css({"display": "none", "left": "37%"});
    $("#btn-aplicacoes").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    $("#btn-acessorios").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    $("#btn-impressoras3d").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
  });
  $("#btn-lang").hover(function(){
    $("main").css({'opacity': '1', 'transition': '0.3s'});
    $("#impressoras3d").stop().hide('fast');
    $("#acessorios").stop().hide('fast');
    $("#aplicacoes").stop().hide('fast');
    $("#down").stop().css({"display": "none", "left": "37%"});
    $("#btn-aplicacoes").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    $("#btn-acessorios").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    $("#btn-impressoras3d").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
  });
  $("main").hover(function(){
    $("main").css({'opacity': '1', 'transition': '0.3s'});
    $("#impressoras3d").stop().hide('fast');
    $("#acessorios").stop().hide('fast');
    $("#aplicacoes").stop().hide('fast');
    $("#down").stop().css({"display": "none", "left": "37%"});
    $("#btn-aplicacoes").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    $("#btn-acessorios").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
    $("#btn-impressoras3d").css({'color': 'rgba(255,255,255,.6)', "transition": "0.5s"});
  });


  $("#item1").mouseenter(function(){
    $("#borda1").css({'width': '100%','transition': '0.3s'});
    $("#item1").css({'color': '#f28918','transition': '0.3s'});
  });
  $("#item1").mouseleave(function(){
    $("#borda1").css({'width': '0%','transition': '0.3s'});
    $("#item1").css({'color': '#000','transition': '0.3s'});
  });

  $("#item2").mouseenter(function(){
    $("#borda2").css({'width': '100%','transition': '0.3s'});
    $("#item2").css({'color': '#f28918','transition': '0.3s'});
  });
  $("#item2").mouseleave(function(){
    $("#borda2").css({'width': '0%','transition': '0.3s'});
    $("#item2").css({'color': '#000','transition': '0.3s'});
  });

  $("#item3").mouseenter(function(){
    $("#borda3").css({'width': '100%','transition': '0.3s'});
    $("#item3").css({'color': '#f28918','transition': '0.3s'});
  });
  $("#item3").mouseleave(function(){
    $("#borda3").css({'width': '0%','transition': '0.3s'});
    $("#item3").css({'color': '#000','transition': '0.3s'});
  });

  $("#item4").mouseenter(function(){
    $("#borda4").css({'width': '100%','transition': '0.3s'});
    $("#item4").css({'color': '#f28918','transition': '0.3s'});
  });
  $("#item4").mouseleave(function(){
    $("#borda4").css({'width': '0%','transition': '0.3s'});
    $("#item4").css({'color': '#000','transition': '0.3s'});
  });

  $("#item5").mouseenter(function(){
    $("#borda5").css({'width': '100%','transition': '0.3s'});
    $("#item5").css({'color': '#f28918','transition': '0.3s'});
  });
  $("#item5").mouseleave(function(){
    $("#borda5").css({'width': '0%','transition': '0.3s'});
    $("#item5").css({'color': '#000','transition': '0.3s'});
  });

  $("#item6").mouseenter(function(){
    $("#borda6").css({'width': '100%','transition': '0.3s'});
    $("#item6").css({'color': '#f28918','transition': '0.3s'});
  });
  $("#item6").mouseleave(function(){
    $("#borda6").css({'width': '0%','transition': '0.3s'});
    $("#item6").css({'color': '#000','transition': '0.3s'});
  });

  $("#item7").mouseenter(function(){
    $("#borda7").css({'width': '100%','transition': '0.3s'});
    $("#item7").css({'color': '#f28918','transition': '0.3s'});
  });
  $("#item7").mouseleave(function(){
    $("#borda7").css({'width': '0%','transition': '0.3s'});
    $("#item7").css({'color': '#000','transition': '0.3s'});
  });

  $("#item8").mouseenter(function(){
    $("#borda8").css({'width': '100%','transition': '0.3s'});
    $("#item8").css({'color': '#f28918','transition': '0.3s'});
  });
  $("#item8").mouseleave(function(){
    $("#borda8").css({'width': '0%','transition': '0.3s'});
    $("#item8").css({'color': '#000','transition': '0.3s'});
  });
});