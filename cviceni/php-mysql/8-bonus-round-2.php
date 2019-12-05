<?php
// BONUS ROUND: ukázka základního ošetření zranitelností SQL injection a XSS

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

$number = $_POST['pokemon-number'];
$name = $_POST['pokemon-name'];
$type = $_POST['pokemon-type'];

if ($number && $name && $type) {
    // Dotaz s placeholdery "?" místo skutečných hodnot
    $insertQuery = "INSERT INTO `pokedex` (`number`, `name`, `type`) VALUES (?, ?, ?)";

    // Funkce prepare vrátí "statement", který je připravený místo placeholderů
    // doplnit skutečné hodnoty
    $statement = mysqli_prepare($database, $insertQuery);

    // Funkce bind_param přijímá jako druhý argument informaci, jakého typu
    // budou přiřazené skutečné hodnoty. Všechny další parametry jsou
    // pak ty skutečné hodnoty. V pořadí, jak jdou za sebou.
    mysqli_stmt_bind_param($statement, "iss", $number, $name, $type);

    // Provede připravený dotaz ("statement")
    mysqli_stmt_execute($statement);

    // A uzavře přípravu
    mysqli_stmt_close($statement);
}

// Vyber všechny pokeše
$selected = mysqli_query($database, "SELECT * FROM `pokedex`");
$pokemons = mysqli_fetch_all($selected, MYSQLI_ASSOC);
?>

<table>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Type</th>
    </tr>
    <?php foreach ($pokemons as $pokemon): ?>
    <tr>
        <!-- Dalším krokem ošetření proti XSS útoku je převedení zvláštních znaků ve vypis. textu na HTML entity -->
        <td><?php echo htmlentities($pokemon['number'], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php echo htmlentities($pokemon['name'], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php echo htmlentities($pokemon['type'], ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<br>

<form action="" method="POST">
    <label>Number</label>
    <input type="number" name="pokemon-number">
    <label>Name</label>
    <input type="text" name="pokemon-name">
    <label>Type</label>
    <select name="pokemon-type">
        <option value="Grass">Grass</option>
        <option value="Normal">Normal</option>
        <option value="Electric">Electric</option>
    </select>
    <button type="submit">Add</button>
</form>