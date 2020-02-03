<?php

$aantal = readline("Hoe veel activiteiten wil je toevoegen?" . PHP_EOL);
if (is_numeric($aantal)) {
} else {
    echo ("$aantal  is geen getal");
    exit;
}



$list = array("");


for ($i = 1; $i <= $aantal; $i++) {
    $activiteiten = readline("Wat wil je toevoegen aan jouw bucket list" . PHP_EOL);
    array_push($list, $activiteiten);
}

echo ("Op jouw bucket list staat:");

for ($l = 0; $l < count($list); $l++) {
    $antwoord = $list[$l];
    echo ($antwoord . PHP_EOL);
}
