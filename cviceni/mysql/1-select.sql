-- 1) vyber všechny psíky
SELECT * FROM `dogs`;

-- 2) vyber jména všech psíků
SELECT `name` FROM `dogs`;

-- 3) spočítej všechny psíky
SELECT COUNT(*) FROM `dogs`;
-- spočítej průměrné hodnocení všech psíků
SELECT AVG(`rating`) FROM `dogs`;

-- 4) vyber psíky podle jména
SELECT * FROM `dogs` WHERE `name` = 'Bublina';

-- 5) vyber psíky, kteří se narodili letos
SELECT * FROM `dogs` WHERE `birthday` >= '2019-01-01';

-- 6) vyber psíky podle jména a rasy
SELECT * FROM `dogs` WHERE `name` = 'Bublina' AND `breed` = 'Corgi';

-- 7) vyber psíky kteří mají jedno nebo druhé jméno
SELECT * FROM `dogs` WHERE `name` = 'Sára' OR `name` = 'Kubík';

-- spočítej průměrné hodnocení všech Corgi
SELECT AVG(`rating`) FROM `dogs` WHERE `breed` = 'Corgi';

-- 8) vyber všechny psíky a seřaď je od nejstaršího
SELECT * FROM `dogs` ORDER BY `birthday` ASC;

-- 9) vyber všechny psíky a seřaď je od nejmladšího
SELECT * FROM `dogs` ORDER BY `birthday` DESC;

-- 10) vyber všechny psíky a seřaď jej abecedně
SELECT * FROM `dogs` ORDER BY `name` ASC;

-- 11) vyber prvních 5 psíků
SELECT * FROM `dogs` LIMIT 5;

-- 12) vyber 2 nejmladší psíky
SELECT * FROM `dogs` ORDER BY `birthday` DESC LIMIT 2;

-- 13) vyber jména a data narození 3 nejstarších Corgi
SELECT `name`, `birthday` FROM `dogs`
WHERE `breed` = 'Corgi'
ORDER BY `birthday` ASC
LIMIT 3;

-- BONUS ROUND: spočítej věk všech psíků podle data jejich narození
SELECT
TIMESTAMPDIFF(YEAR, `birthday`, NOW())
FROM `dogs`;

-- BONUS ROUND: spočítej průměrný věk všech psíků
SELECT
AVG(TIMESTAMPDIFF(YEAR, `birthday`, NOW()))
FROM `dogs`;

-- BONUS ROUND: spočítej průměrný věk všech psíků a přidej ho do výsledku jako pojmenovaný sloupec
SELECT
*, TIMESTAMPDIFF(YEAR, `birthday`, NOW()) AS 'age'
FROM `dogs`;

-- BONUS ROUND: string wildcard - vyber všechny psíky, jejichž jméno začíná na "K"
SELECT * FROM `dogs` WHERE `name` LIKE 'K%';