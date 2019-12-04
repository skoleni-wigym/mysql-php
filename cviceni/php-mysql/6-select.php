<?php
// --- Připojení ---
// Parametry jsou:
// 1) IP adresa nebo URL serveru s databází
// 2) Uživatelské jméno
// 3) Heslo
// 4) Název databáze
$database = mysqli_connect("mysql", "root", "root", "pokemon");

// Selhalo připojení?
if ($database === false) {
    echo "Connection failed.";
    die; // 🔫 RIP
}

// 1) Vyber všechny pokeše z tabulky pokedex a vypiš si, jak ty data vlastně vypadají
$result = mysqli_query($database, "SELECT * FROM `pokedex`");
$pokemons = mysqli_fetch_all($result);
var_dump($pokemons);

// 2) Vyber všechny pokeše z tabulky pokedex ale i s názvy sloupců
// $result = mysqli_query($database, "SELECT * FROM `pokedex`");
// $pokemons = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($pokemons);

// 3) Vypiš čitelně názvy a čísla pokemonů
// for ($i = 0; $i < count($pokemons); $i++) {
//     echo "#".$pokemons[$i]["number"]." ".$pokemons[$i]["name"]."<br>";
// }

// 4) (BONUS ROUND?) Vypiš čitelně názvy a čísla pokemonů, ale s hezčí syntaxí
// foreach ($pokemons as $pokemon) {
//     $number = $pokemon["number"];
//     $name = $pokemon["name"];

//     echo "#$number $name<br>";
// }

// Po práci je vždy třeba připojení k databázi zavřít!
mysqli_close($database);