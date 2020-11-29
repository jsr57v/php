 <?php

$target = getenv('TARGET', true) ?: 'World';
echo sprintf("Hello %s!", $target);

$array = [];

for ($i = 0; $i < rand(1000, 10000); $i++) {
    $array[$i] = rand(1000, 10000);
}

shuffle($array);
