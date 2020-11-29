 <?php

$array = [];

for ($i = 0; $i < rand(1000, 10000); $i++) {
    $array[$i] = rand(1000, 10000);
}

shuffle($array);
