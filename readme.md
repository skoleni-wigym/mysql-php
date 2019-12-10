# Doplňující materiály

## CS
- [Správné MySQL kódování a case (in)sensitive](https://www.kutac.cz/weby-a-vse-okolo/spravne-mysql-kodovani-a-case-insensitive)
- [Pohledy, účty a privilegia v MySQL](https://www.kutac.cz/weby-a-vse-okolo/pohledy-ucty-a-privilegia-v-mysql)
- [Adminer - to chceš](https://www.kutac.cz/weby-a-vse-okolo/adminer-to-chces)
- [Jednoduché a dvojité uvozovky v PHP](https://www.kutac.cz/weby-a-vse-okolo/jednoduche-a-dvojite-uvozovky-v-php)
- [Instalace Apache, PHP a MySQL za 30 vteřin](https://www.zdrojak.cz/clanky/instalace-apache-php-mysql-za-30-vterin/)
- [SQL Injection pre každého](https://www.zdrojak.cz/clanky/sql-injection-pre-kazdeho/)
- [Zranitelnosti typu injekce: SQL injekce](https://www.root.cz/clanky/zranitelnosti-typu-injekce-sql-injekce/)
- [Seriál Seznámení s SQL](https://www.root.cz/serialy/seznameni-s-sql/)
- [Základní kurz PHP](http://www.pehapko.cz/zakladni-kurz/1-uvod)
- [MySQL databáze krok za krokem](https://www.itnetwork.cz/mysql)

## EN
- [MySQL Tutorial](http://www.mysqltutorial.org/)
- [W3Schools - PHP Tutorial](https://www.w3schools.com/php/)
- [Interaktivní výuka PHP, MySQL a dalších](https://www.codecademy.com/learn)

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