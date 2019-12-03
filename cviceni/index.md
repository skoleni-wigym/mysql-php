# Cvičení

## 1) MySQL

1. Co je MySQL (prezentace?)
2. Základní pojmy (prezentace?)
    - Databáze
    - Tabulka
    - Řádky, sloupce
    - Datové typy
3. SELECT
    1. `SELECT * FROM ...`
    2. `SELECT x FROM ...`
    3. `SELECT COUNT(*) FROM ...`
    - Bonus round?
4. Podmínky
    1. `SELECT * WHERE ...`
5. Omezení a řazení
    1. `SELECT * FROM ... ORDER BY ... ASC/DESC`
    2. `SELECT * FROM ... LIMIT x`
6. Řazení SELECT příkazů: "SELECT ... FROM ... WHERE ... ORDER BY ... LIMIT ..."
7. INSERT
8. UPDATE
9. DELETE
    1. `DELETE FROM ...`
    2. `DELETE FROM ... WHERE ...`
10. CREATE TABLE
11. ALTER TABLE
12. DROP/TRUNCATE TABLE
13. Omezení sloupců (skočit zpět do prezentace?)
    - DEFAULT
    - PK (AUTOINCREMENT?)
    - UNIQUE
    - NOT NULL
    - CHECK
14. CREATE TABLE s omezením
15. ALTER TABLE s omezením

## 2) PHP (rychlé intro do jazyka)

1. Co to je? (přednáška)
2. Jak se to spouští - server (přednáška)
3. Základní syntaxe (přednáška)
    - Proměnné
    - Podmínky
    - Cykly
    - Objekty/třídy

## 3) PHP + MySQL (PDO)

1. MySQLi rozšíření - stručný úvod (přednáška? zmínit PDO?)
2. Připojení + vytvoření tabulky
3. SELECT
4. INSERT
5. UPDATE
6. DELETE
7. Bonus round:
    1. Uložení dat z formuláře do databáze
    2. SQL injection + ošetření dotazů (MySQLi prepared statements)