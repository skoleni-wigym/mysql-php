-- 1) vytvoř tabulku "pokedex_johto", kde sloupce "číslo" a "jméno" nesmí být prázdné
CREATE TABLE `pokedex_johto` (
    `number` INT NOT NULL,
    `name` TEXT NOT NULL,
    `type` TEXT
);

-- 2) vytvoř tabulku "pokedex_johto", kde sloupce "číslo" a "jméno" nesmí být prázdné
-- a navíc "jméno" musí být pro každý řádek unikátní (jedno jméno se v tabulce nesmí opakovat)
CREATE TABLE `pokedex_johto` (
    `number` INT NOT NULL ,
    `name` TEXT NOT NULL UNIQUE,
    `type` TEXT
);

-- 3) vytvoř tabulku "pokedex_johto", kde sloupce "číslo" a "jméno" nesmí být prázdné,
-- navíc "jméno" musí být pro každý řádek unikátní (jedno jméno se v tabulce nesmí opakovat)
-- a navíc "číslo" bude "primární klíč" (nesmí být prázdné a musí být zároveň unikátní)
CREATE TABLE `pokedex_johto` (
    `number` INT PRIMARY KEY,
    `name` TEXT NOT NULL UNIQUE,
    `type` TEXT
);

-- 4) vytvoř tabulku "pokedex_johto", kde sloupce "číslo" a "jméno" nesmí být prázdné,
-- navíc "jméno" musí být pro každý řádek unikátní (jedno jméno se v tabulce nesmí opakovat)
-- a navíc "číslo" bude "primární klíč" (nesmí být prázdné a musí být zároveň unikátní),
-- sloupec "typ" taky nesmí být prázdný a jeho výchozí hodnota pro je "Normal"
CREATE TABLE `pokedex_johto` (
    `number` INT PRIMARY KEY,
    `name` TEXT NOT NULL UNIQUE,
    `type` TEXT NOT NULL DEFAULT 'Normal'
);

-- 5) vytvoř tabulku "pokedex_johto", kde sloupce "číslo" a "jméno" nesmí být prázdné,
-- navíc "jméno" musí být pro každý řádek unikátní (jedno jméno se v tabulce nesmí opakovat)
-- a navíc "číslo" bude "primární klíč" (nesmí být prázdné a musí být zároveň unikátní),
-- sloupec "typ" taky nesmí být prázdný a jeho výchozí hodnota pro je "Normal"
-- + přidáme omezení, aby do sloupce "typ" šlo vložit jenom "Normal" nebo "Electric"
CREATE TABLE `pokedex_johto` (
    `number` INT PRIMARY KEY,
    `name` TEXT NOT NULL UNIQUE,
    `type` TEXT NOT NULL DEFAULT 'Normal' CHECK (`type` = 'Normal' OR `type` = 'Electric')
);

-- nějací pokeši
INSERT INTO `pokedex_johto`
(`number`, `name`, `type`)
VALUES
(161, 'Sentret', 'Normal'),
(162, 'Furret', 'Normal'),
(163, 'Hoothoot', 'Flying'),
(164, 'Noctowl', 'Flying'),
(165, 'Ledyba', 'Bug'),
(166, 'Ledian', 'Bug');