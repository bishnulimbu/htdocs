<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
    <title>Contact Form</title>
</head>
<body>
    <!--<form action="./display.php" method="POST">-->
    <form action="adddata.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="phone">Phone Number:</label><br>
        <input type="text" id="phone" name="phone"><br><br>
        <input type="submit" value="save">
    </form>
</body>
</html>
