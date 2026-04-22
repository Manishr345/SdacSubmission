<?php

$cars = ["BMW X1", "Nexon", "Alto K10", "Audi S3", "Urus Se"];
for($i = 0; $i < sizeof($cars); $i ++) {
    echo "$cars[$i] <br>";
}

echo "<br>";

$model_price = ["BMW X1" => "$5000", "Nexon" => "$2500", "Alto K10" => "$3000", "Audi S3" => "#5400", "Urus Se" => "$4000"];
foreach($model_price as $model => $price) {
    echo "$brand costs $price <br>";
}

echo "<br>";


array_push($cars, "Creta", "Fortuner");
for($i = 0; $i < sizeof($cars); $i ++) {
    echo "$cars[$i] <br>";
}

echo "<br>";

$last = array_pop($cars);
echo $last;

echo "<br>";

$newCars = ["Thar", "Safari"];
$merged = array_merge($cars, $newCars);
for($i = 0; $i < sizeof($merged); $i ++) {
    echo "$merged[$i] <br>";
}

echo "<br>";

$slice = array_slice($cars, 1, 3);
for($i = 0; $i < sizeof($slice); $i ++) {
    echo "$slice[$i] <br>";
}

echo "<br>";

$keys = array_keys($model_price);
for($i = 0; $i < sizeof($keys); $i ++) {
    echo "$keys[$i] <br>";
}
?>
