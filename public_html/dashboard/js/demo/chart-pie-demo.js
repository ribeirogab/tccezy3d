let pieMes;

$(document).ready(function() {
  let mesAtual = $("input[name=mesAtual]").val();
  $("select[name=pie_mes]").val(mesAtual);
  pieMes = $("select[name=pie_mes]").val();
  recarregarPie();
});

$("select[name=pie_mes]").change(function() {
  document.getElementById("divPieChart").innerHTML = "";
  document.getElementById("divPieChart").innerHTML =
    '<canvas id="myPieChart"></canvas>';

  pieMes = $("select[name=pie_mes]").val();
  recarregarPie();
});

function recarregarPie() {
  $.ajax({
    url:
      "http://localhost/tccezy3d/public_html/dashboard/controle/graficos.php",
    type: "post",
    data: {
      pieMes: pieMes,
      piechart: "piechart"
    },
    success: function(resposta) {
      let jsonPie = $.parseJSON(resposta);

      let pieValor = [
        jsonPie[0]["browser"],
        jsonPie[0]["googleads"],
        jsonPie[0]["facebook"],
        jsonPie[0]["instagram"]
      ];

      // Pie Chart Example
      var ctx = document.getElementById("myPieChart");
      var myPieChart = new Chart(ctx, {
        type: "doughnut",
        data: {
          labels: ["Browser", "Google ADS", "Facebook", "Instagram"],
          datasets: [
            {
              data: pieValor,
              backgroundColor: ["#4e73df", "#1cc88a", "#36b9cc", "#e74a3b"],
              hoverBackgroundColor: [
                "#2e59d9",
                "#17a673",
                "#2c9faf",
                "#e74909"
              ],
              hoverBorderColor: "rgba(234, 236, 244, 1)"
            }
          ]
        },
        options: {
          maintainAspectRatio: false,
          tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: "#dddfeb",
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10
          },
          legend: {
            display: false
          },
          cutoutPercentage: 80
        }
      });
    },
    error: function() {
      window.location.href = "http://www.ezy3d.com.br/404.html";
    }
  });
}
