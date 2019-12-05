<?php

// Linkové komentáře začínají dvěmi lomítky
# ... nebo mřížkou

/*
    Blokové komentáře jsou uvozeny lomítkem a hvězdičkou
*/

// Klasický pozdrav
echo "Sbohem, světe!";

// Stringy se spojují dohromady pomocí "."
echo "<br>" . "Teda -" . " " . "ahoj" . " " . "světe!";

// Deklarace proměnné vždy začíná "$"
$name = "Kuba";
// Při spojování stringů jde připojovat i proměnné
echo "<br>Jsem šťastný a říkají mi " . $name . "!";
// Proměnné je možné vkládat rovnou do stringů
echo "<br>Ale jmenuji se opravdu $name?";

// Do stringů lze vkládat třeba i číselné proměnné
$age = 69;
echo "<br> - $name, $age let.";