<?php
$car1 = 'BMW X1 is a compact luxury SUV';
$car2 = "Price of Nexon is ₹10 lakh";
echo $car1;
echo "<br>";
echo $car2;

echo "<br>";

$car = "BMW X1";
$price = "$5000";
$result = $car . " costs " . $price;
echo $result;

echo "<br>";

$pos = strpos($car1, "luxury");
echo $pos;

echo "<br>";

$newCar = str_replace("luxury", "cheap", $car1);
echo $newCar;

echo "<br>";

echo strlen($car1);

echo "<br>";

echo strtolower($car);

echo "<br>";

echo strtoupper($car);

echo "<br>";

echo trim($car);

echo "<br>";

echo substr($car, 0, 3);

?>