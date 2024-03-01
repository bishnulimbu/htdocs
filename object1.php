<html>
<head>
<link rel="stylesheet" href="./style.css">
</head>
<body>
<div class= "container">
<?php
$obj1 = array('ram'=> 11,
  'sam' => 22,
  'hari' => 33
);
/* echo obj1["ram"]; */
print_r($obj1);
forEach($obj1 as $key =>$data){
  echo "<br>";
  echo $key." ".$data;
}
?>
</div>
  </body>
  </html>
