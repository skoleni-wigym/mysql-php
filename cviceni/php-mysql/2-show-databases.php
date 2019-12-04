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

// --- Vypiš všechny databáze ---
$result = mysqli_query($database, "SHOW DATABASES");
$data = mysqli_fetch_all($result);

var_dump($data);

// foreach ($data as $row) {
//     echo $row[0] . "<br>";
// }

// Po práci je vždy třeba připojení k databázi zavřít!
mysqli_close($database);