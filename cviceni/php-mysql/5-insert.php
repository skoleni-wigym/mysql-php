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

// Vlož nějaké pokeše do tabulky
$insertQuery = "INSERT INTO `pokedex` (`number`, `name`, `type`)
                VALUES
                (25, 'Pikachu', 'Electric'),
                (35, 'Clefairy', 'Fairy'),
                (50, 'Diglett', 'Ground')";
$result = mysqli_query($database, $insertQuery);

// Zkontroluj, jestli byli pokeši vloženi
if ($result === true) {
    echo "Pokemon have been inserted.<br>";
} else {
    echo "Pokemon insert failed.<br>";
}

// Po práci je vždy třeba připojení k databázi zavřít!
mysqli_close($database);