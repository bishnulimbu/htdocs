<html>
<head>
<title>assignment</title>
</head>
<link rel="stylesheet" href="./style.css">
<body>
<div class="container">
<form method="post">
Number: <input type="number" name="number"><br>
<input type= "submit" name="display" value="enter the day number">
<br>
</form>

<?php
if(isset($_POST['display'])){
  $number = $_POST['number'];
  switch($number){
  case '1':
    echo "Sunday";
    break;
  case '2':
    echo "Monday<br>";
    break;
  case '3':
    echo "Tuesday<br>";
    break;
  case '4':
    echo "Wednesday<br>";
    break;
  case '5':
    echo "Thursday<br>";
    break;
  case '6':
    echo "Friday<br>";
    break;
  case '7':
    echo "Saturday<br>";
    break;
  }
}
?>
</div>
</body>
</html>
