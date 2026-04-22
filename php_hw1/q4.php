<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        Name:
        <input type="text" name="name">
        <br>
        Password:
        <input type="password" name="pass">
        <br>
        Do you agree to the Terms and Conditions? 
        <input type="checkbox" name="tnc" value="Yes">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] === "GET") {
        $name = $_GET["name"];
        $pass = $_GET["pass"];
        $tnc = isset($_GET["tnc"]) ? "Agreed" : "Not Agreed";

        echo "Welcome, $name. You have $tnc to the Terms and Conditions.";
    }

?>