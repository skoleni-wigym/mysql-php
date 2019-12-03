-- vytvoř tabulku pro pokemony
CREATE TABLE `pokedex_kanto`
(
    `number` INT,
    `name` TEXT,
    `type` TEXT
);

-- vlož pokemony do tabulky (volitelné)
INSERT INTO `pokedex`
(`number`, `name`, `type`)
VALUES
(1, 'Bulbasaur', 'Grass'),
(2, 'Ivysaur', 'Grass'),
(3, 'Venusaur', 'Grass'),
(4, 'Charmander', 'Fire'),
(5, 'Charmeleon', 'Fire'),
(6, 'Charizard', 'Fire'),
(7, 'Squirtle', 'Water'),
(8, 'Wartortle', 'Water'),
(9, 'Blastoise', 'Water');