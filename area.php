<!DOCTYPE html>
<html>
<head>
    <title>area calculator</title>
</head>
<body>
    <h2>Rectangle Area Calculator</h2>
    <form method="post">
        Length: <input type="text" name="length"><br>
        Width: <input type="text" name="width"><br>
        <input type="submit" name="calculate" value="Calculate Area">
    </form>

    <?php
        if(isset($_POST['calculate'])) {
            $length = $_POST['length'];
            $width = $_POST['width'];

            $area = $length * $width;

            echo "<br>";
            echo "The area of the rectangle is: " . $area . "";
        }
    ?>
</body>
</html>
