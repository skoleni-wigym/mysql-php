<?php
// --- Připojení ---
// Parametry jsou:
// 1) IP adresa nebo URL serveru s databází
// 2) Uživatelské jméno
// 3) Heslo
$database = mysqli_connect("mysql", "root", "root");

// Selhalo připojení?
if ($database === false) {
    echo "Connection failed.";
    die; // 🔫 RIP
}

// --- Vstup do databáze pokemonů ---
mysqli_select_db($database, "pokemon");

// --- Vypiš všechny tabulky ---
$result = mysqli_query($database, "SHOW TABLES");
$data = mysqli_fetch_all($result);
var_dump($data); // Prázdné :sadface:

// --- Vytvoř novou tabulku ---
$createTableQuery = "CREATE TABLE IF NOT EXISTS `pokedex` (`number` INT PRIMARY KEY, `name` TEXT, `type` TEXT)";
$result = mysqli_query($database, $createTableQuery);

if ($result === true) {
    echo "All good!<br>";
} else {
    echo "Something's wrong :(<br>";
}

// Po práci je vždy třeba připojení k databázi zavřít!
mysqli_close($database);