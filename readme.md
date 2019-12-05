# Témata

## 1) MySQL

1. Co je MySQL (prezentace)
2. Základní pojmy (prezentace)
    - Databáze
    - Tabulka
    - Řádky, sloupce
    - Datové typy
3. SELECT
    1. `SELECT * FROM ...`
    2. `SELECT x FROM ...`
    3. `SELECT COUNT(*) FROM ...`
    4. (Volitelně) Bonus round
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
12. DROP/TRUNCATE TABLE
13. Omezení sloupců (prezentace)
    - DEFAULT
    - PK (AUTOINCREMENT?)
    - UNIQUE
    - NOT NULL
    - CHECK
14. CREATE TABLE s omezením
15. BONUS ROUND: ALTER TABLE

## 2) PHP (rychlé intro do jazyka)

1. Co to je? (prezentace)
2. Jak se to spouští - server (prezentace)
3. Základní syntaxe (prezentace)
    - Proměnné
    - Podmínky
    - Cykly
4. Kombinace HTML + logiky, jak funguje interpreter
5. Výpis dat, stringy, komentáře, proměnné
6. Podmínky
7. Cykly, pole
8. Vlastní funkce

## 3) PHP + MySQL (MySQLi)

1. MySQLi rozšíření - stručný úvod (prezentace)
2. Připojení + vytvoření tabulky
3. SELECT
4. INSERT
5. UPDATE
6. DELETE
7. Bonus round:
    1. Uložení dat z formuláře do databáze (ukázka SQL inj. + XSS)
    2. Ošetření dotazů (MySQLi prepared statements) před SQL inj. a výpisů před XSS