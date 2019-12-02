-- 1) vyber všechny psíky
SELECT * FROM `dogs`;

-- 2) vyber jména všech psíků
SELECT `name` FROM `dogs`;

-- 3) spočítej všechny psíky
SELECT COUNT(*) FROM `dogs`;

-- 4) vyber psíky podle jména
SELECT * FROM `dogs` WHERE `name` = 'Bublina';

-- 5) vyber psíky, kteří se narodili letos
SELECT * FROM `dogs` WHERE `birthday` >= '2019-01-01';

-- 6) vyber psíky podle jména a rasy
SELECT * FROM `dogs` WHERE `name` = 'Bublina' AND `breed` = 'Corgi';

-- 7) vyber psíky kteří mají jedno nebo druhé jméno
SELECT * FROM `dogs` WHERE `name` = 'Sára' OR `name` = 'Kubík';

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