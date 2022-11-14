<div class="container">

    <h1 style="margin-top: 70px;">Sản Phẩm Sắp Hết Hàng</h1>


    <div id="piechart" style="width: 1000px; height: 600px; margin-left: 150px"></div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['ten_san_pham', 'so_luong'],
            <?php
            foreach ($data as $key) {
                echo "['" . $key['ten_san_pham'] . "' , " . $key['so_luong'] . "],";
            }
            ?>

        ]);

        var options = {

            // title: 'Sản Phẩm Sắp Hết Hàng',
            sliceVisibilityThreshold: .2
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>