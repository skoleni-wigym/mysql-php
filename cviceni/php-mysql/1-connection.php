<?php

// IP adresa nebo jméno serveru, kde běží MySQL databáze
$server = 'mysql';
// Uživatel databáze
$user = 'root';
// Heslo uživatele
$password = 'root';

// Připojení
$db = new mysqli($server, $user, $password);

// Selhalo připojení?
if ($db->connect_error) {
    echo 'Connection failed.';
    die; // 🔫 RIP
}