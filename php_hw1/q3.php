<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Name:
        <input type="text" name="name">
        <br>
        Phone Number:
        <input type="text" name="phone">
        <br>
        Gender:
        <select name="brand" id="">
            <option value="Toyota">Toyota</option>
            <option value="Ford">Ford</option>
            <option value="Tesla">Tesla</option>
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $brand = $_POST["brand"];

        echo "Hello $name. Your phone number is $phone and your prefered car brand is $brand";
    }

?>