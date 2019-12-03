-- smaž obsah tabulky "pokedex_johto"
-- TRUNCATE TABLE ... provede to samé, co DELETE * FROM ..., ale je rychlejší (nezapisuje logy), resetuje autoincrement
-- a nespouští triggery
TRUNCATE TABLE `pokedex_johto`;

-- smaž celou tabulku
DROP TABLE `pokedex_johto`;