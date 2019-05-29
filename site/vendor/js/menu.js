$(document).ready(function() {
  $("#btn-info-product1").click(function() {
    $("#product-info1").toggle();
  });

  // MENU
  // *Trocar a cor do menu, adicionar borda superior, mudar cor do logo e abrir 'menu-toggle'
  $(".borda-item").hover(function() {
    let iditem = this.id.split("_")[1];
    $("#item_" + iditem).css("border-top", "solid 5px orange");

    let idelemento = $("#item_" + iditem).attr("id");
    $.each($(".borda-item"), function() {
      if (idelemento != this.id)
        $("#" + this.id).css("border-top", "solid 5px rgba(0,0,0,.0)");
      if (idelemento == "item_4") {
        $("#menu-toggle").slideUp("fast");
        $("#menu-toggle").css({ transition: "0.3s", opacity: "0" });
      } else {
        $("#menu-toggle").slideDown("fast");
        $("#menu-toggle").css({ transition: "0s", opacity: "100" });
      }
    });

    $("nav").css({
      "background-color": "#fff",
      "box-shadow": "0px 0px 0px 0px #666",
      "border-bottom": "solid 1px rgba(0,0,0,.1)",
      transition: "0.1s"
    });
    $(".menu-item").css("color", "#000");
    $(".menu-item-right").css("color", "#000");
    $("#logo").attr("src", "vendor/img/logo/logo_orange.svg");
    $("main").css({ opacity: "0.5" });
  });
  // -----

  // *Mudando a cor do menu e adicionando sombra ao rolar a página

  let lastScrollTop = 0;
  $(window).scroll(function() {
    let st = $(this).scrollTop();
    if (st > 0) {
      $("nav").css({
        "background-color": "#fff",
        "border-bottom": "solid 1px rgba(0,0,0,.1)",
        transition: "0.5s"
      });
      $(".menu-item").css("color", "#000");
      $(".menu-item-right").css("color", "#000");
      $("#logo").attr("src", "vendor/img/logo/logo_orange.svg");
      let dmenu = $("#menu-toggle").css("display");
      if (dmenu == "none") {
        $("nav").css({ "box-shadow": "0px 0px 5px 0px #666" });
      }

      // *Voltar ao estado padrão ao passar o mouse fora do menu
      $("main").hover(function() {
        let st = $(window).scrollTop();
        $("nav").css({
          "border-bottom": "solid 1px rgba(0,0,0,.0)",
          transition: "0.s"
        });
        $(".borda-item").css("border-top", "solid 5px rgba(0,0,0,.0)");
        $("#menu-toggle").slideUp("fast");
        $("#menu-toggle").css({ transition: "0.3s", opacity: "0" });
        $("main").css({ opacity: "1" });
        let dmenu = $("#menu-toggle").css("display");
        if (st != 0) {
          $("nav").css({ "box-shadow": "0px 0px 5px 0px #666" });
        }
      });
      // -----

      // *Voltar ao estado padrão ao passar o mouse nos intens da direita do menu
      $(".menu-item-right").hover(function() {
        let st = $(window).scrollTop();
        $("nav").css({
          "border-bottom": "solid 1px rgba(0,0,0,.0)",
          transition: "0.3s"
        });
        $(".borda-item").css("border-top", "solid 5px rgba(0,0,0,.0)");
        $("#menu-toggle").slideUp("fast");
        $("#menu-toggle").css({ transition: "0.3s", opacity: "0" });
        $("main").css({ opacity: "1" });
        let dmenu = $("#menu-toggle").css("display");
        if (st != 0) {
          $("nav").css({ "box-shadow": "0px 0px 5px 0px #666" });
        }
      });
      // -----
    } else {
      $("nav").css({
        "box-shadow": "0px 0px 0px 0px #666",
        transition: "0.5s"
      });
      let dmenu = $("#menu-toggle").css("display");
      if (dmenu == "none") {
        $(".menu-item").css({ color: "#fff", transition: "0.5s" });
        $(".menu-item-right").css({ color: "#fff", transition: "0.5s" });
        $("#logo").attr("src", "vendor/img/logo/logo_white.svg");
        $("nav").css({
          "border-bottom": "solid 1px rgba(0,0,0,.0)",
          "background-color": "rgba(0,0,0,.0)",
          transition: "0.5s"
        });
      }
    }
    lastScrollTop = st;
  });
  // -----

  // *Voltar ao estado padrão ao passar o mouse fora do menu
  $("main").hover(function() {
    let st = $(window).scrollTop();
    if (st == 0) {
      $("nav").css({
        "background-color": "rgba(0,0,0,.0)",
        "border-bottom": "solid 1px rgba(0,0,0,.0)",
        transition: "0.s"
      });
      $(".menu-item").css("color", "#fff");
      $(".menu-item-right").css("color", "#fff");
      $(".borda-item").css("border-top", "solid 5px rgba(0,0,0,.0)");
      $("#menu-toggle").slideUp("fast");
      $("#menu-toggle").css({ transition: "0.3s", opacity: "0" });
      $("#logo").attr("src", "vendor/img/logo/logo_white.svg");
      $("main").css({ opacity: "1" });
    }
  });
  // -----

  // *Voltar ao estado padrão ao passar o mouse nos intens da direita do menu
  $(".menu-item-right").hover(function() {
    let st = $(window).scrollTop();
    if (st == 0) {
      $("nav").css({
        "background-color": "rgba(0,0,0,.0)",
        "border-bottom": "solid 1px rgba(0,0,0,.0)",
        transition: "0.3s"
      });
      $(".menu-item").css("color", "#fff");
      $(".menu-item-right").css("color", "#fff");
      $(".borda-item").css("border-top", "solid 5px rgba(0,0,0,.0)");
      $("#menu-toggle").slideUp("fast");
      $("#menu-toggle").css({ transition: "0.3s", opacity: "0" });
      $("#logo").attr("src", "vendor/img/logo/logo_white.svg");
      $("main").css({ opacity: "1" });
    }
  });
  // -----

  $("#item_1").hover(function() {
    $("#toggle_1").show();
    $("#toggle_2").hide();
    $("#toggle_3").hide();
  });
  $("#item_2").hover(function() {
    $("#toggle_1").hide();
    $("#toggle_2").show();
    $("#toggle_3").hide();
  });
  $("#item_3").hover(function() {
    $("#toggle_1").hide();
    $("#toggle_2").hide();
    $("#toggle_3").show();
  });
});
