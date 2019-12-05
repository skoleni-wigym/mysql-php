-- přidání sloupce do tabulky
ALTER TABLE `dogs`
ADD `vaccinated` BOOLEAN;

-- odstranění sloupce z tabulky
ALTER TABLE `dogs`
DROP COLUMN `vaccinated`;

-- změn datový typ sloupce "birthday" na datum + cas
ALTER TABLE `dogs`
MODIFY `birthday` DATETIME;