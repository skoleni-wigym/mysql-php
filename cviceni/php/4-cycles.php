<?php

// Pole je seznam hodnot. Zapisuje se buď jako "array(...)"
$shoppingList = array('Rohlík', 'Celer', 'Plynový vařič');
// Nebo mezi hranaté závorky. Dnes v tom už funkčně není rozdíl, jde jen o osobní preference. Velmi staré verze PHP
// hranaté závorky neuměly.
$shoppingList = ['Rohlík', 'Celer', 'Plynový vařič'];

// Hodnoty v poli můžou být různých typů - stringy, čísla i další pole
$randomStuff = ['Roentgen', 3.6, ['not', 'great']];

// PHP funkce "count" vrací počet
// echo count($shoppingList);

// Klasický "for" cyklus
for ($i = 0; $i < count($shoppingList); $i++) {
    echo $shoppingList[$i] . "<br>";
}

// Čitelnější "foreach" cyklus - projde pole a při každém průchodu přiřadí hodnotu do proměnné pojmenované za "as ..."
foreach ($shoppingList as $item) {
    echo $item . "<br>";
}