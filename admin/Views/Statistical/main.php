<div class="container">
    <h1 style="margin-top: 70px ;">Thống Kê Hoá Đơn</h1>
    <a href="http://localhost/doan-mvc/BillController/Index" class="btn btn-success" id="a_func"> <i class="fa-solid fa-check"></i> Hoá Đơn Đã Xử Lý</a>
    <a href="http://localhost/doan-mvc/BillController/Handle" class="btn btn-success" id="a_func"><i class="fa-regular fa-flag"></i> Hoá Đơn Chờ Xử Lý </a>

    <div id="piechart" style="width: 900px; height: 600px; margin-left: 150px"></div>



</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['trang_thai', 'num_status'],
            <?php 
            foreach ($data as $key){
            echo "['". $key['trang_thai'] ."' , ". $key['num_status'] ."],";
            }
            ?>
           
        ]);

        var options = {
            title: 'Thống Kê Đơn Hàng',
            // is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>
