let barMes;

$(document).ready(function() {
  let barMesAtual = $("input[name=barMesAtual]").val();
  $("select[name=bar_mes]").val(barMesAtual);
  barMes = $("select[name=bar_mes]").val();
  recarregarBar();
});

$("select[name=bar_mes]").change(function() {
  document.getElementById("divBarChart").innerHTML = "";
  document.getElementById("divBarChart").innerHTML =
    '<canvas id="myBarChart"></canvas>';

  barMes = $("select[name=bar_mes]").val();
  recarregarBar();
});
function recarregarBar() {
  $.ajax({
    // url: "http://www.ezy3d.com.br/dashboard/controle/graficos.php",
    url:
      "http://localhost/tccezy3d/public_html/dashboard/controle/graficos.php",
    type: "post",
    data: {
      barMes: barMes,
      barchart: "barchart"
    },
    success: function(resposta) {
      let jsonBar = $.parseJSON(resposta);

      let barValor = [],
        barNome = ["Browsers", "Facebook", "Google ADS", "Instagram"];

      for (let index = 0; index < jsonBar.length; index++) {
        if (jsonBar[index]["local_acesso"] == "browser")
          barValor[0] = jsonBar[index]["qtd_orcamento"];
        else if (jsonBar[index]["local_acesso"] == "facebook")
          barValor[1] = jsonBar[index]["qtd_orcamento"];
        else if (jsonBar[index]["local_acesso"] == "googleads")
          barValor[2] = jsonBar[index]["qtd_orcamento"];
        else if (jsonBar[index]["local_acesso"] == "instagram")
          barValor[3] = jsonBar[index]["qtd_orcamento"];
      }
      // Bar Chart Example
      var ctx = document.getElementById("myBarChart");
      var myBarChart = new Chart(ctx, {
        type: "bar",
        data: {
          labels: barNome,
          datasets: [
            {
              label: "Revenue",
              backgroundColor: "#4e73df",
              hoverBackgroundColor: "#2e59d9",
              borderColor: "#4e73df",
              data: barValor
            }
          ]
        },
        options: {
          maintainAspectRatio: false,
          layout: {
            padding: {
              left: 10,
              right: 25,
              top: 25,
              bottom: 0
            }
          },
          scales: {
            xAxes: [
              {
                time: {
                  unit: "month"
                },
                gridLines: {
                  display: false,
                  drawBorder: false
                },
                ticks: {
                  maxTicksLimit: 6
                },
                maxBarThickness: 25
              }
            ],
            yAxes: [
              {
                ticks: {
                  maxTicksLimit: 5,
                  padding: 10,
                  min: 0,
                  stepSize: 1
                },
                gridLines: {
                  color: "rgb(234, 236, 244)",
                  zeroLineColor: "rgb(234, 236, 244)",
                  drawBorder: false,
                  borderDash: [2],
                  zeroLineBorderDash: [2]
                }
              }
            ]
          },
          legend: {
            display: false
          },
          tooltips: {
            titleMarginBottom: 10,
            titleFontColor: "#6e707e",
            titleFontSize: 14,
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: "#dddfeb",
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10
          }
        }
      });
    },
    timeout: 10000,
    error: function() {
      alert("O servidor demorou muito para responder, faça login novamente.");
      window.location.href =
        "http://www.ezy3d.com.br/controle/logout.php?log=true";
    }
  });
}
