<script src="jquery-1.9.1.js"></script>
<script src="Chart.min.js"></script>
<a href="data.php">&#8592;</a>
<center><h1>AGE</h1></center>
<?php

require 'db_conn.php';
$con = mysqli_connect("localhost", "root", "","test_dbb"); 

if (!$con) {
    echo "Disconnected!!". mysqli_error();
    }else{
    $sql = "SELECT * FROM product_table";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
    $age [] = $row['age'];
    }
}
?>
<canvas id="chartjs_bar" style="width:0%;height:0%"></canvas>
<script type="text/javascript">
    var ctx = document.getElementById("chartjs_bar").getContext ('2d');
                var myChart = new Chart (ctx, {
                type: 'bar',
data: {
labels:<?php echo json_encode( $age);?>,
datasets: [{
backgroundColor: [
"#5969ff",
"#ff407b",
"#25d5f2",
"#ffc750",
"#2ec551",
"#7040fa",
"#ff004e"
],
data:<?php echo json_encode( $age);?>,
}]
},
options: {
legend: {
display: true,
position: 'bottom',

labels: {
fontColor: '#71748d',
fontFamily: 'Circular Std BOOK',
fontsize: 14,
}
},

                }
            });
</script>
<a href="indexxxx.php">Next</a>