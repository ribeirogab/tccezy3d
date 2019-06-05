(function($) {
  "use strict";

  /*==================================================================
    [ Focus input ]*/
  $(".input100").each(function() {
    $(this).on("blur", function() {
      if (
        $(this)
          .val()
          .trim() != ""
      ) {
        $(this).addClass("has-val");
      } else {
        $(this).removeClass("has-val");
      }
    });
  });

  /*==================================================================
    [ Validate ]*/
  var input = $(".validate-input .input100");

  $(".validate-form").on("submit", function() {
    var check = true;

    for (var i = 0; i < input.length; i++) {
      if (validate(input[i]) == false) {
        showValidate(input[i]);
        check = false;
      }
    }

    return check;
  });

  $(".validate-form .input100").each(function() {
    $(this).focus(function() {
      hideValidate(this);
    });
  });

  function validate(input) {
    if ($(input).attr("type") == "email" || $(input).attr("name") == "email") {
      if (
        $(input)
          .val()
          .trim()
          .match(
            /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/
          ) == null
      ) {
        return false;
      }
    } else {
      if (
        $(input)
          .val()
          .trim() == ""
      ) {
        return false;
      }
    }
  }

  function showValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).addClass("alert-validate");
  }

  function hideValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).removeClass("alert-validate");
  }

  /*==================================================================
    [ Show pass ]*/
  var showPass = 0;
  $(".btn-show-pass").on("click", function() {
    if (showPass == 0) {
      $(this)
        .next("input")
        .attr("type", "text");
      $(this)
        .find("i")
        .removeClass("zmdi-eye");
      $(this)
        .find("i")
        .addClass("zmdi-eye-off");
      showPass = 1;
    } else {
      $(this)
        .next("input")
        .attr("type", "password");
      $(this)
        .find("i")
        .addClass("zmdi-eye");
      $(this)
        .find("i")
        .removeClass("zmdi-eye-off");
      showPass = 0;
    }
  });
})(jQuery);

// ------------------------------------------------

$(document).ready(function() {
  $("input[name=telefone]").mask("(99) 99999-9999");
  $("#ramo").change(function() {
    let ramo = $(this).val();
    if (ramo === "outro") $("#outroRamo").show();
    else if (ramo != "outro") $("#outroRamo").hide();
  });

  $("#btn-submit").on("click", function() {
    let nome = $("input[name=nome]").val();
    let sobrenome = $("input[name=sobrenome]").val();
    let email = $("input[name=email]").val();
    let telefone = $("input[name=telefone]").val();
    let senha = $("input[name=senha]").val();
    let confirmarSenha = $("input[name=confirmarSenha]").val();
    let pais = $("select[name=pais]").val();
    let ramo = $("select[name=ramo]").val();
    let outroRamo = $("input[name=outroRamo]").val();

    $.ajax({
      // url: "http://www.ezy3d.com.br/controle/cliente.php",
      url: "http://localhost/tccezy3d/public_html/controle/cliente.php",
      method: "POST",
      data: { tipo: "verificarEmail", email: email },
      success: function(resposta) {
        let requisicao = 0;
        var json = $.parseJSON(resposta);
        let verificarEmail = json[0][0];

        if (verificarEmail != 0) $("#erroEmailExiste").show();
        else {
          $("#erroEmailExiste").hide();
          requisicao++;
        }

        if (nome.length < 3 || nome.length >= 30) $("#erroNome").show();
        else {
          $("#erroNome").hide();
          requisicao++;
        }

        if (sobrenome.length < 3 || sobrenome.length >= 50)
          $("#erroSobrenome").show();
        else {
          $("#erroSobrenome").hide();
          requisicao++;
        }

        if (email.length < 3 || email.indexOf("@") == -1 || email.length >= 50)
          $("#erroEmail").show();
        else {
          $("#erroEmail").hide();
          requisicao++;
        }

        if (telefone.length != 15) $("#erroTelefone").show();
        else {
          $("#erroTelefone").hide();
          requisicao++;
        }

        if (
          !senha.match(/[0-9]/g) ||
          !senha.match(/[a-z]/g) ||
          senha.length < 8
        ) {
          $("#erroSenha").show();
          $("#warning-senha").show();
          $("#avisoSenha").css("color", "red");
        } else {
          $("#erroSenha").hide();
          $("#warning-senha").hide();
          $("#avisoSenha").css("color", "#555555");
          requisicao++;
        }

        if (confirmarSenha != senha) $("#erroConfirmarSenha").show();
        else {
          $("#erroConfirmarSenha").hide();
          requisicao++;
        }

        if (pais == "null") $("#erroPais").show();
        else {
          $("#erroPais").hide();
          requisicao++;
        }

        if (ramo == "null") {
          $("#erroRamo").show();
          $("#erroOutroRamo").hide();
        } else if (ramo == "outro") {
          ramo = outroRamo;
          if (ramo.length < 3) {
            $("#erroOutroRamo").show();
            $("#erroRamo").hide();
          } else {
            $("#erroRamo").hide();
            $("#erroOutroRamo").hide();
            requisicao++;
          }
        } else {
          $("#erroRamo").hide();
          requisicao++;
        }

        if (requisicao === 9) {
          $("input[name=telefone]").unmask();
          $("#form-cadastro").submit();
        }
      },
      error: function() {
        window.location.hred = "../../404.html";
      }
    });
  });
});
