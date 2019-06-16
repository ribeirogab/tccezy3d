$(document).ready(function() {
  $("#btn-info-product1").click(function() {
    $("#product-info1").toggle();
  });

  // MENU
  // *Trocar a cor do menu, adicionar borda superior, mudar cor do logo e abrir 'menu-toggle'
  $(".hover-item").hover(function() {
    let iditem = this.id.split("_")[1];
    $("#campo_" + iditem).css("border-top", "solid 5px orange");

    let idelemento = $("#campo_" + iditem).attr("id");
    $.each($(".hover-item"), function() {
      let idhover = this.id.split("_")[1];
      if (idelemento != "campo_" + idhover)
        $("#campo_" + idhover).css("border-top", "solid 5px rgba(0,0,0,.0)");
      if (idelemento == "campo_4") {
        $("#menu-toggle").slideUp("fast");
        $("#menu-toggle").css({
          transition: "0.3s",
          opacity: "0"
        });
      } else {
        $("#menu-toggle").slideDown("fast");
        $("#menu-toggle").css({
          transition: "0s",
          opacity: "100"
        });
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
    $("main").css({
      opacity: "0.5"
    });
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
        $("nav").css({
          "box-shadow": "0px 0px 5px 0px #666"
        });
      }

      // *Voltar ao estado padrão ao passar o mouse fora do menu
      $("main").hover(function() {
        let st = $(window).scrollTop();
        $("nav").css({
          "border-bottom": "solid 1px rgba(0,0,0,.0)",
          transition: "0.s"
        });
        $(".campos-menu").css("border-top", "solid 5px rgba(0,0,0,.0)");
        $("#menu-toggle").slideUp("fast");
        $("#menu-toggle").css({
          transition: "0.3s",
          opacity: "0"
        });
        $("main").css({
          opacity: "1"
        });
        $(".fotos-printers").css({
          opacity: "0"
        });
        $(".nomes-printers").css({
          opacity: "0"
        });
        $(".div-acessorios").css({
          opacity: "0"
        });
        let dmenu = $("#menu-toggle").css("display");
        if (st != 0) {
          $("nav").css({
            "box-shadow": "0px 0px 5px 0px #666"
          });
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
        $(".campos-menu").css("border-top", "solid 5px rgba(0,0,0,.0)");
        $("#menu-toggle").slideUp("fast");
        $("#menu-toggle").css({
          transition: "0.3s",
          opacity: "0"
        });
        $("main").css({
          opacity: "1"
        });
        $(".fotos-printers").css({
          opacity: "0"
        });
        $(".nomes-printers").css({
          opacity: "0"
        });
        $(".div-acessorios").css({
          opacity: "0"
        });
        $(".div-aplicacoes").css({
          opacity: "0"
        });
        let dmenu = $("#menu-toggle").css("display");
        if (st != 0) {
          $("nav").css({
            "box-shadow": "0px 0px 5px 0px #666"
          });
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
        $(".menu-item").css({
          color: "#fff",
          transition: "0.5s"
        });
        $(".menu-item-right").css({
          color: "#fff",
          transition: "0.5s"
        });
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
      $(".campos-menu").css("border-top", "solid 5px rgba(0,0,0,.0)");
      $("#menu-toggle").slideUp("fast");
      $("#menu-toggle").css({
        transition: "0.3s",
        opacity: "0"
      });
      $("#logo").attr("src", "vendor/img/logo/logo_white.svg");
      $("main").css({
        opacity: "1"
      });
      $(".fotos-printers").css({
        opacity: "0"
      });
      $(".nomes-printers").css({
        opacity: "0"
      });
      $(".div-acessorios").css({
        opacity: "0"
      });
      $(".div-aplicacoes").css({
        opacity: "0"
      });
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
      $(".campos-menu").css("border-top", "solid 5px rgba(0,0,0,.0)");
      $("#menu-toggle").slideUp("fast");
      $("#menu-toggle").css({
        transition: "0.3s",
        opacity: "0"
      });
      $("#logo").attr("src", "vendor/img/logo/logo_white.svg");
      $("main").css({
        opacity: "1"
      });
      $(".fotos-printers").css({
        opacity: "0"
      });
      $(".nomes-printers").css({
        opacity: "0"
      });
      $(".div-acessorios").css({
        opacity: "0"
      });
      $(".div-aplicacoes").css({
        opacity: "0"
      });
    }
  });
  // -----

  $("#item_1").hover(function() {
    $("#toggle_1").show();
    $("#foto-printer1")
      .stop()
      .animate(
        {
          height: "show",
          opacity: 1
        },
        250,
        function() {
          $("#foto-printer2")
            .stop()
            .animate(
              {
                height: "show",
                opacity: 1
              },
              250,
              function() {
                $("#foto-printer3")
                  .stop()
                  .animate(
                    {
                      height: "show",
                      opacity: 1
                    },
                    250
                  );
              }
            );
        }
      );

    $("#nome-printer1")
      .stop()
      .animate(
        {
          height: "show",
          opacity: 1
        },
        250,
        function() {
          $("#nome-printer2")
            .stop()
            .animate(
              {
                height: "show",
                opacity: 1
              },
              250,
              function() {
                $("#nome-printer3")
                  .stop()
                  .animate(
                    {
                      height: "show",
                      opacity: 1
                    },
                    250
                  );
              }
            );
        }
      );

    $("#toggle_2").hide();
    $(".div-acessorios").css({
      opacity: "0"
    });

    $("#toggle_3").hide();
    $(".div-aplicacoes").css({
      opacity: "0"
    });
  });

  $("#item_2").hover(function() {
    $("#toggle_1").hide();
    $(".fotos-printers").css({
      opacity: "0"
    });
    $(".nomes-printers").css({
      opacity: "0"
    });

    $("#toggle_2").show();
    $("#menu-acessorios")
      .stop()
      .animate(
        {
          height: "show",
          opacity: 1
        },
        250,
        function() {
          $("#lista-acessorios")
            .stop()
            .animate(
              {
                height: "show",
                opacity: 1
              },
              250,
              function() {
                $("#fotos-acessorios")
                  .stop()
                  .animate(
                    {
                      height: "show",
                      opacity: 1
                    },
                    250
                  );
              }
            );
        }
      );
    $("#seta-acessorios_1").show();
    $("#seta-acessorios_2").hide();
    $("#seta-acessorios_3").hide();

    $("#acessorios_1").css({
      "background-color": "rgba(243,137,25,.3)",
      color: "#DB580B"
    });
    $("#acessorios_2").css({
      "background-color": "#fff",
      color: "#000"
    });
    $("#acessorios_3").css({
      "background-color": "#fff",
      color: "#000"
    });

    $("#opcoes-acessorios_1").show();
    $("#opcoes-acessorios_2").hide();
    $("#opcoes-acessorios_3").hide();

    $("#foto-acessorios_1").show();

    $("#toggle_3").hide();
    $(".div-aplicacoes").css({
      opacity: "0"
    });
  });

  $("#item_3").hover(function() {
    $("#toggle_1").hide();
    $(".fotos-printers").css({
      opacity: "0"
    });
    $(".nomes-printers").css({
      opacity: "0"
    });

    $("#toggle_2").hide();
    $(".div-acessorios").css({
      opacity: "0"
    });

    $("#toggle_3").show();
    $("#menu-aplicacoes")
      .stop()
      .animate(
        {
          height: "show",
          opacity: 1
        },
        250,
        function() {
          $("#lista-aplicacoes")
            .stop()
            .animate(
              {
                height: "show",
                opacity: 1
              },
              250,
              function() {
                $("#fotos-aplicacoes")
                  .stop()
                  .animate(
                    {
                      height: "show",
                      opacity: 1
                    },
                    250
                  );
              }
            );
        }
      );

    $("#seta-aplicacoes_1").show();
    $("#seta-aplicacoes_2").hide();
    $("#seta-aplicacoes_3").hide();
    $("#seta-aplicacoes_4").hide();

    $("#aplicacoes_1").css({
      "background-color": "rgba(243,137,25,.3)",
      color: "#DB580B"
    });
    $("#aplicacoes_2").css({
      "background-color": "#fff",
      color: "#000"
    });
    $("#aplicacoes_3").css({
      "background-color": "#fff",
      color: "#000"
    });
    $("#aplicacoes_4").css({
      "background-color": "#fff",
      color: "#000"
    });

    $("#opcoes-aplicacoes_1").show();
    $("#opcoes-aplicacoes_2").hide();
    $("#opcoes-aplicacoes_3").hide();
    $("#opcoes-aplicacoes_4").hide();

    $("#foto-aplicacoes_1").show();
    $("#foto-aplicacoes_2").hide();
    $("#foto-aplicacoes_3").hide();
    $("#foto-aplicacoes_4").hide();
  });

  $("#item_4").hover(function() {
    $("#toggle_1").hide();
    $(".fotos-printers").css({
      opacity: "0"
    });
    $(".nomes-printers").css({
      opacity: "0"
    });

    $("#toggle_2").hide();
    $(".div-acessorios").css({
      opacity: "0"
    });

    $("#toggle_3").show();
    $(".div-aplicacoes").css({
      opacity: "0"
    });
  });

  // Animações menu acessorios
  $(".menu1-acessorios").hover(function() {
    let iditem = this.id.split("_")[1];
    $("#seta-acessorios_" + iditem)
      .stop()
      .animate(
        {
          height: "show",
          opacity: 1
        },
        500
      );

    $(".opcoes-acessorios").hide();
    $("#opcoes-acessorios_" + iditem).show();

    $("#" + this.id).css({
      "background-color": "rgba(243,137,25,.3)",
      color: "#DB580B",
      transition: "0.5s"
    });

    // Mudar a cor do background da opção do primieor menu para branco caso mouse não esteja em cima
    let idelemento = $("#acessorios_" + iditem).attr("id");
    $.each($(".menu1-acessorios"), function() {
      if (idelemento != this.id)
        $("#" + this.id).css({
          "background-color": "#fff",
          color: "#000",
          transition: "0.5s"
        });
    });

    // Sumir seta na qual o mouse não está em cima
    $.each($(".seta-acessorios"), function() {
      idseta = this.id.split("_")[1];
      if (idseta != iditem) $("#seta-acessorios_" + idseta).hide();
    });
  });

  // ----------------------------
  // Animações menu aplicações
  $(".menu1-aplicacoes").hover(function() {
    let iditem = this.id.split("_")[1];
    $("#seta-aplicacoes_" + iditem)
      .stop()
      .animate(
        {
          height: "show",
          opacity: 1
        },
        500
      );

    $(".opcoes-aplicacoes").hide();
    $("#opcoes-aplicacoes_" + iditem).show();

    $(".todas-fotos-aplicacoes").hide();
    $("#foto-aplicacoes_" + iditem).show();

    $("#" + this.id).css({
      "background-color": "rgba(243,137,25,.3)",
      color: "#DB580B",
      transition: "0.5s"
    });

    // Mudar a cor do background da opção do primieor menu para branco caso mouse não esteja em cima
    let idelemento = $("#aplicacoes_" + iditem).attr("id");
    $.each($(".menu1-aplicacoes"), function() {
      if (idelemento != this.id)
        $("#" + this.id).css({
          "background-color": "#fff",
          color: "#000",
          transition: "0.5s"
        });
    });

    // Sumir seta na qual o mouse não está em cima
    $.each($(".seta-aplicacoes"), function() {
      idseta = this.id.split("_")[1];
      if (idseta != iditem) $("#seta-aplicacoes_" + idseta).hide();
    });

    // Sumir foto na qual o mouse não está em cima
    $.each($(".todas-fotos-aplicacoes"), function() {
      idfoto = this.id.split("_")[1];
      if (idfoto != iditem) $("#foto-aplicacoes_" + idfoto).hide();
    });
  });

  // Div troca de idiomas
  $("#btn-lang").click(function() {
    $("#lang").toggle();
    $("#seta-lang").toggle();
    $("#conta").hide();
    $("#seta-conta").hide();
  });
  // Div para acesso ao perfil do cliente
  $("#btn-conta").click(function() {
    $("#lang").hide();
    $("#seta-lang").hide();
    $("#conta").toggle();
    $("#seta-conta").toggle();
  });

  $("main").click(function() {
    $("#lang").hide();
    $("#seta-lang").hide();
    $("#conta").hide();
    $("#seta-conta").hide();
  });
  $(".menu-item").hover(function() {
    $("#lang").hide();
    $("#seta-lang").hide();
    $("#conta").hide();
    $("#seta-conta").hide();
  });
  $("#btn-logar").click(function() {
    $("#lang").hide();
    $("#seta-lang").hide();
  });
});
