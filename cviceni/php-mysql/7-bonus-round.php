<?php
// BONUS ROUND: ukázka ukládání dat z formuláře do databáze + SQL injection + XSS útok

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

// --- Vytáhni si data z odeslaného formuláře ---
$number = $_POST['pokemon-number'];
$name = $_POST['pokemon-name'];
$type = $_POST['pokemon-type'];

if ($number && $name && $type) {
    // Podkládej dotaz pro vložení dat z formuláře do databáze
    $insertQuery = "INSERT INTO `pokedex`
                    (`number`, `name`, `type`)
                    VALUES
                    ($number, '$name', '$type')";
    $inserted = mysqli_query($database, $insertQuery);

    if ($inserted === true) {
        echo "$name inserted.<br>";
    } else {
        echo mysqli_error($database);
    }
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
        <td><?php echo $pokemon['number']; ?></td>
        <td><?php echo $pokemon['name']; ?></td>
        <td><?php echo $pokemon['type']; ?></td>
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