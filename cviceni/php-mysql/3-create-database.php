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

// --- Vytvoř databázi `pokemon` ---
$result = mysqli_query($database, "CREATE DATABASE IF NOT EXISTS `pokemon`");

// Podařilo se vytvořit databázi?
if ($result === true) {
    echo 'Database `pokemon` is ready.<br>';
} else {
    echo 'Could not create database `pokemon`<br>';
}

// --- Vypiš všechny databáze ---
$result = mysqli_query($database, "SHOW DATABASES");
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
var_dump($data);

// Po práci je vždy třeba připojení k databázi zavřít!
mysqli_close($database);