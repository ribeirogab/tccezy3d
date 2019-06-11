<script>
  function buttonDisabled1() {
    let nome = $("input[name=nome]").val();
    let sobrenome = $("input[name=sobrenome]").val();
    let email = $("input[name=email]").val();
    let telefone = $("input[name=telefone]").val();
    let pais = $("select[name=pais]").val();
    let ramo = $("select[name=ramo]").val();
    let empresa = $("input[name=empresa]").val();

    if (
      nome != "<?= $nome ?>" ||
      sobrenome != "<?= $sobrenome ?>" ||
      email != "<?= $banana ?>" ||
      telefone != "<?= $telefone ?>" ||
      pais != "<?= $pais ?>" ||
      ramo != "<?= $ramo ?>" ||
      empresa != "<?= $empresa ?>"
    )
      $("#btn-alterarPerfil").removeAttr("disabled");
    else $("#btn-alterarPerfil").attr("disabled", "on");
  }
  setInterval(buttonDisabled1, 0);

  function buttonDisabled2() {
    let senhaold = $("input[name=senhaold]").val();
    let novasenha = $("input[name=novasenha]").val();
    let confirmarnovasenha = $("input[name=confirmarnovasenha]").val();

    if (
      senhaold.length >= 8 &&
      novasenha.length >= 8 &&
      confirmarnovasenha.length >= 8
    )
      $("#btn-alterarsenha").removeAttr("disabled");
    else $("#btn-alterarsenha").attr("disabled", "on");
  }
  setInterval(buttonDisabled2, 0);

  function buttonDisabled3() {
    let e1260t = $("input[name=e1260t]").prop("checked");
    let phylos = $("input[name=phylos]").prop("checked");
    let coreE3 = $("input[name=coreE3]").prop("checked");
    let ezycure = $("input[name=ezycure]").prop("checked");

    if (e1260t == true || phylos == true || coreE3 == true || ezycure == true)
      $("#btn-orcamento").removeAttr("disabled");
    else $("#btn-orcamento").attr("disabled", "on");
  }
  setInterval(buttonDisabled3, 0);

  function buttonDisabled4() {
    let maquina = $("select[name=maquina]").val();
    let problema = $("select[name=problema]").val();
    let descricao = $("#textareaDescricao").val();

    if (maquina != "null" && problema != "null" && descricao.length >= 15)
      $("#btn-suporte").removeAttr("disabled");
    else $("#btn-suporte").attr("disabled", "on");
  }
  setInterval(buttonDisabled4, 0);

  $(document).ready(function() {
    $("input[name=telefone]").mask("99999999999");
    if ("<?= $status ?>" == "success1") {
      $("#alert").slideDown("slow");
      $("#alert-titulo").html("Alterações realizadas com sucesso.");
    } else if ("<?= $status ?>" == "success2") {
      $("#alert").slideDown("slow");
      $("#alert-titulo").html("Senha alterada com sucesso.");
      $("#editar-perfil").hide();
      $("#alterar-senha").show();
      $("#orcamento").hide();
      $("#suporte").hide();
      $("#btn1").removeClass("item-selected");
      $("#btn1").addClass("item");

      $("#btn2").addClass("item-selected");
      $("#btn2").removeClass("item");

      $("#btn3").removeClass("item-selected");
      $("#btn3").addClass("item");

      $("#btn4").removeClass("item-selected");
      $("#btn4").addClass("item");
    }
    $("#close-alert").click(function() {
      window.location.href = "http://www.ezy3d.com.br/perfil_cliente.php";
    });

    $("#btn-alterarsenha").on("click", function() {
      let inputSenha = $("input[name=senhaold]").val();
      let inputNovaSenha = $("input[name=novasenha]").val();
      let confirmarnovasenha = $("input[name=confirmarnovasenha]").val();

      $.ajax({
        // url: "http://www.ezy3d.com.br/controle/cliente.php",
        url: "http://localhost/tccezy3d/public_html/controle/cliente.php",
        method: "POST",
        data: {
          tipo: "consultarSenha",
          inputSenha: inputSenha,
          inputNovaSenha: inputNovaSenha
        },
        success: function(resposta) {
          var json = $.parseJSON(resposta);
          let senhaold = json["senha"];
          let novasenha = json["novasenha"];

          if (
            senhaold == "<?= $senha ?>" &&
            confirmarnovasenha == inputNovaSenha &&
            novasenha != senhaold
          ) {
            $("#form-senha").submit();
          }
          if (senhaold == novasenha) {
            $("input[name=novasenha]").addClass("confirmarSenha");
            $("#erro2").show();
          } else {
            $("input[name=novasenha]").removeClass("confirmarSenha");
            $("#erro2").hide();
          }

          if (confirmarnovasenha != inputNovaSenha) {
            $("input[name=confirmarnovasenha]").addClass("confirmarSenha");
            $("#erro3").show();
          } else {
            $("input[name=confirmarnovasenha]").removeClass("confirmarSenha");
            $("#erro3").hide();
          }

          if (senhaold != "<?= $senha ?>") {
            $("input[name=senhaold]").addClass("confirmarSenha");
            $("#erro1").show();
          } else {
            $("input[name=senhaold]").removeClass("confirmarSenha");
            $("#erro1").hide();
          }
        },
        error: function() {
          alert("Erro ao fazer a requisição");
        }
      });
    });

    $("#btn1").click(function() {
      $("#editar-perfil").show();
      $("#alterar-senha").hide();
      $("#orcamento").hide();
      $("#suporte").hide();
      $("#btn1").addClass("item-selected");
      $("#btn1").removeClass("item");

      $("#btn2").removeClass("item-selected");
      $("#btn2").addClass("item");

      $("#btn3").removeClass("item-selected");
      $("#btn3").addClass("item");

      $("#btn4").removeClass("item-selected");
      $("#btn4").addClass("item");
    });

    $("#btn2").click(function() {
      $("#editar-perfil").hide();
      $("#alterar-senha").show();
      $("#orcamento").hide();
      $("#suporte").hide();
      $("#btn1").removeClass("item-selected");
      $("#btn1").addClass("item");

      $("#btn2").addClass("item-selected");
      $("#btn2").removeClass("item");

      $("#btn3").removeClass("item-selected");
      $("#btn3").addClass("item");

      $("#btn4").removeClass("item-selected");
      $("#btn4").addClass("item");
    });

    $("#btn3").click(function() {
      $("#editar-perfil").hide();
      $("#alterar-senha").hide();
      $("#orcamento").show();
      $("#suporte").hide();
      $("#btn1").removeClass("item-selected");
      $("#btn1").addClass("item");

      $("#btn2").removeClass("item-selected");
      $("#btn2").addClass("item");

      $("#btn3").addClass("item-selected");
      $("#btn3").removeClass("item");

      $("#btn4").removeClass("item-selected");
      $("#btn4").addClass("item");
    });

    $("#btn4").click(function() {
      $("#editar-perfil").hide();
      $("#alterar-senha").hide();
      $("#orcamento").hide();
      $("#suporte").show();
      $("#btn1").removeClass("item-selected");
      $("#btn1").addClass("item");

      $("#btn2").removeClass("item-selected");
      $("#btn2").addClass("item");

      $("#btn3").removeClass("item-selected");
      $("#btn3").addClass("item");

      $("#btn4").addClass("item-selected");
      $("#btn4").removeClass("item");
    });

    // --------------------------------------------

    $("#ramo").change(function() {
      let ramo = $(this).val();
      if (ramo === "outro") $("#outroRamo").show();
      else if (ramo != "outro") $("#outroRamo").hide();
    });

    $("#teste").click(function() {
      $("#erroOutroRamo1").toggle();
    });

    $("#btn-alterarPerfil").on("click", function() {
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
        data: {
          tipo: "verificarEmail",
          email: email
        },
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

          if (telefone.length != 11) $("#erroTelefone").show();
          else {
            $("#erroTelefone").hide();
            requisicao++;
          }

          if (pais == "null") $("#erroPais").show();
          else {
            $("#erroPais").hide();
            requisicao++;
          }

          if (ramo.length < 3) {
            $("#erroRamo").show();
            $("#erroOutroRamo1").hide();
          } else if (ramo == "outro") {
            ramo = outroRamo;
            if (ramo.length < 3) {
              $("#erroOutroRamo1").show();
              $("#erroRamo").hide();
            } else {
              $("#erroRamo").hide();
              $("#erroOutroRamo1").hide();
              requisicao++;
            }
          } else {
            $("#erroRamo").hide();
            requisicao++;
          }

          if (requisicao === 7) {
            $("#form-editar-perfil").submit();
          }
        },
        error: function() {
          window.location.href = "http://www.ezy3d.com.br/404.html";
        }
      });
    });
  });
</script>