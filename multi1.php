<html>
<head>
<link rel="stylesheet" href="./style.css">
</head>
<body>
<div class= "container">
<?php
$obj1 = [[1, "ram", 1000, "salesman"],
[2, "sam", 2000, "driver"],
[3, "hari", 3000 , "diver"]
];
/* var_dump($obj1); */
foreach($obj1 as $data1){
  foreach($data1 as $data2){
    echo $data2. " ";
  }
}


?>
</div>
<?php
echo "<table style='border: 1px solid black'>
  <tr>
  <td>id</td>
  <td>Name</td>
  <td>Salary</td>
  <td>Job</td>
  </tr>
  ";
foreach ($obj1 as $row) {
    echo "<tr>"; // Start a new row for each inner array
    foreach ($row as $cell) {
        echo "<td>$cell</td>"; // Output each cell value within the row
    }
    echo "</tr>"; // End the row
};
?>
  </body>
  </html>
