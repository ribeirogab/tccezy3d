<script>
  $(document).ready(function() {
    // produtos
    $(".produtos").hover(function() {
      $("#produtos").show();
      $('#item1').css("color", "#f28918");
    });
    $("#produtos").hover(function() {
      $("#produtos").show();
    });

    $("main").hover(function() {
      $("#produtos").hide();
      $('#item1').css("color", "#ddd");
    });
    $(".item").hover(function() {
      $("#produtos").hide();
      $('#item1').css("color", "#ddd");
    });
// -----------

// ----
$("main").hover(function() {
 $("#impressoras3d1").hide();
 $("#impressoras3d2a").hide();
 $("#impressoras3d2b").hide();
 $("#info-e1260t").hide();
 $("#info-phylos").hide();
 $("#info-coreE3").hide();
 $("#info-impressoras3d1").hide();
 $("#info-msla").hide();
 $("#info-fdm").hide();
 $("#acessorios1").hide();
 $("#acessorios2").hide();
 $("#info-acessorios1").hide();
 $("#info-camara-pos-cura").hide();
 $("#info-ezycure").hide();
 $(".menu-produtos").show();
 $('#acessorio1').css("color", "#212529");
 $('#camara-pos-cura').css("color", "#212529");
 $('#ezycure').css("color", "#212529");
 $('#impressoras3d').css("color", "#212529");
 $('#acessorios').css("color", "#212529");
 $('#ezycure').css("color", "#212529");
 $('#msla').css("color", "#212529");
 $('#e1260t').css("color", "#212529");
 $('#phylos').css("color", "#212529");
 $('#fdm').css("color", "#212529");
 $('#coreE3').css("color", "#212529");
});
$(".item").hover(function() {
  $("#impressoras3d1").hide();
  $("#impressoras3d2a").hide();
  $("#impressoras3d2b").hide();
  $("#info-e1260t").hide();
  $("#info-phylos").hide();
  $("#info-coreE3").hide();
  $("#info-impressoras3d1").hide();
  $("#info-msla").hide();
  $("#info-fdm").hide();
  $("#acessorios1").hide();
  $("#acessorios2").hide();
  $("#info-acessorios1").hide();
  $("#info-camara-pos-cura").hide();
  $("#info-ezycure").hide();
  $(".menu-produtos").show();
  $('#acessorio1').css("color", "#212529");
  $('#camara-pos-cura').css("color", "#212529");
  $('#ezycure').css("color", "#212529");
  $('#impressoras3d').css("color", "#212529");
  $('#acessorios').css("color", "#212529");
  $('#ezycure').css("color", "#212529");
  $('#msla').css("color", "#212529");
  $('#e1260t').css("color", "#212529");
  $('#phylos').css("color", "#212529");
  $('#fdm').css("color", "#212529");
  $('#coreE3').css("color", "#212529");
});



    // impressoras 3d
    $("#impressoras3d").hover(function() {
      $("#impressoras3d1").stop().fadeIn();
      $("#info-impressoras3d1").stop().fadeIn();
      $("#acessorios1").hide();
      $("#acessorios2").hide();
      $("#info-acessorios1").hide();
      $("#info-camara-pos-cura").hide();
      $("#info-ezycure").hide();
      $(".menu-produtos").hide();
      $('#acessorio1').css("color", "#212529");
      $('#camara-pos-cura').css("color", "#212529");
      $('#ezycure').css("color", "#212529");
      $('#impressoras3d').css("color", "#f28918");
      $('#acessorios').css("color", "#212529");
    });


    $("#impressoras3d1").hover(function() {
      $("#impressoras3d1").stop().fadeIn();
    });

    $("#msla").hover(function() {
      $("#impressoras3d2a").stop().fadeIn();
      $("#info-msla").stop().fadeIn();
      $("#impressoras3d2b").hide();
      $("#info-coreE3").hide();
      $("#info-fdm").hide();
      $("#info-impressoras3d1").hide();
      $("#info-e1260t").hide();
      $("#info-phylos").hide();
      $('#msla').css("color", "#f28918");
      $('#fdm').css("color", "#212529");
      $('#e1260t').css("color", "#212529");
      $('#phylos').css("color", "#212529");
      $('#coreE3').css("color", "#212529");
    });
    $("#impressoras3d2a").hover(function() {
      $("#impressoras3d2a").stop().fadeIn();
    });

    $("#fdm").hover(function() {
      $("#impressoras3d2b").stop().fadeIn();
      $("#info-fdm").stop().fadeIn();
      $("#impressoras3d2a").hide();
      $("#info-e1260t").hide();
      $("#info-phylos").hide();
      $("#info-msla").hide();
      $("#info-impressoras3d1").hide();
      $("#info-coreE3").hide();
      $('#fdm').css("color", "#f28918");
      $('#msla').css("color", "#212529");
      $('#coreE3').css("color", "#212529");
      $('#e1260t').css("color", "#212529");
      $('#phylos').css("color", "#212529");
    });
// msla
$("#e1260t").hover(function() {
  $("#info-e1260t").stop().fadeIn();
  $("#info-phylos").hide();
  $("#info-coreE3").hide();
  $("#info-msla").hide();
  $("#info-fdm").hide();
  $('#e1260t').css("color", "#f28918");
  $('#phylos').css("color", "#212529");
});
$("#info-e1260t").hover(function() {
  $("#info-e1260t").stop().fadeIn();
});

$("#phylos").hover(function() {
  $("#info-phylos").stop().fadeIn();
  $("#info-e1260t").hide();
  $("#info-coreE3").hide();
  $("#info-msla").hide();
  $("#info-fdm").hide();
  $('#phylos').css("color", "#f28918");
  $('#e1260t').css("color", "#212529");
});
$("#info-phylos").hover(function() {
  $("#info-phylos").show();
});
// ------

// fdm
$("#coreE3").hover(function() {
  $("#info-coreE3").stop().fadeIn();
  $("#info-e1260t").hide();
  $("#info-phylos").hide();
  $("#info-fdm").hide();
  $('#coreE3').css("color", "#f28918");
});
$("#info-coreE3").hover(function() {
  $("#info-coreE3").stop().fadeIn();
});
// -----

    // acessorios
    $("#acessorios").hover(function() {
      $("#acessorios1").stop().fadeIn();
      $("#info-acessorios1").stop().fadeIn();
      $("#impressoras3d1").hide();
      $("#impressoras3d2a").hide();
      $("#impressoras3d2b").hide();
      $("#info-e1260t").hide();
      $("#info-phylos").hide();
      $("#info-coreE3").hide();
      $("#info-impressoras3d1").hide();
      $("#info-fdm").hide();
      $("#info-msla").hide();
      $(".menu-produtos").hide();
      $('#acessorios').css("color", "#f28918");
      $('#impressoras3d').css("color", "#212529");
      $('#fdm').css("color", "#212529");
      $('#msla').css("color", "#212529");
      $('#e1260t').css("color", "#212529");
      $('#phylos').css("color", "#212529");
      $('#coreE3').css("color", "#212529");
    });

    $("#acessorios1").hover(function() {
      $("#acessorios1").stop().fadeIn();
      $(".menu-produtos").hide();
      $('#acessorios').css("color", "#f28918");
    });

    $("#camara-pos-cura").hover(function() {
      $("#acessorios2").stop().fadeIn();
      $("#info-camara-pos-cura").stop().fadeIn();
      $("#info-ezycure").hide();
      $("#info-acessorios1").hide();
      $('#ezycure').css("color", "#212529");
      $('#camara-pos-cura').css("color", "#f28918");
    });
    $("#acessorios2").hover(function() {
      $("#acessorios2").stop().fadeIn();
      $("#acessorios1").stop().fadeIn();
    });

    $("#ezycure").hover(function() {
      $("#info-ezycure").stop().fadeIn();
      $("#info-camara-pos-cura").hide();
      $('#ezycure').css("color", "#f28918");
    });
    $("#info-ezycure").hover(function() {
      $("#info-ezycure").stop().fadeIn();
      $("#acessorios2").stop().fadeIn();
    });
  });



 $(document).ready(function() {
    $('#idioma').click(function() {
      $('#opcoes').toggle();
    });
    $('main').click(function() {
      $('#opcoes').hide();
    });
  });
</script>