
<?php
include "../db.php";
if (isset($_POST["csv"])) {
   

 $query = $con->query("SELECT * from payroll_categrie");
if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "Student_list_" . date('Y-m-d') . ".csv";
    $f = fopen('php://output', 'w');
    $fields = array('ID', 'Categrie name', 'Categrie code', 'Categrie Type', 'Categrie Amount');
    fputcsv($f, $fields, $delimiter);
    while($row = $query->fetch_assoc()){
        $lineData = array($row['payroll_cat_id'], $row['payroll_cat_name'], $row['payroll_cat_code'], $row['categrie_type'], $row['amount']);
        fputcsv($f, $lineData, $delimiter);
    }
    // fseek($f, 0);
    header('Content-Type: text/pdf; charset=utf-8');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    fpassthru($f);
}
exit;
}
?>



<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
          // is3D:true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>