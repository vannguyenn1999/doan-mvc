<div class="container">
    <h1 style="margin-top: 70px;">Doanh Thu Cửa Hàng Theo Tháng</h1>
    <div id="columnchart_values" style="width: 1000px; height: 800px; margin-left:150px"></div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Tháng", "vnđ", { role: "style" } ],
        ["05" , 98000000 , "color: #4800FF"],
        ["06" , 268000000 , "color: #4800FF"],
        ["07" , 318000000 , "color: #4800FF"],
        ["08" , 180000000 , "color: #4800FF"],
        ["09" , 168000000 , "color: #4800FF"],
        ["10" , 268000000 , "color: #4800FF"],
        ["11", <?php echo $data ?> ,"color:#4800FF" ],
      
        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
       
        width: 900,
        height: 500,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>