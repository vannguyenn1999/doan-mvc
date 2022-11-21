<div class="container">

    <h1 style="margin-top: 70px;">Sản Phẩm Bán Chạy Nhất</h1>
    <div id="columnchart_values" style="width: 1000px; height: 800px; margin-left:150px"></div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["ten_san_pham", "số lượng", { role: "style" } ],
        <?php 
        $color = '#0096E1';
            foreach ($data as $key){
            echo "['". $key['ten_san_pham'] ."' , ". $key['so_luong'] ." , '". $color."' ], ";
            }
            ?>
        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
       
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>