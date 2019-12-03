-- magicky udělej ze všech psíků Corgi
UPDATE `dogs` SET `breed` = 'Corgi';

-- změn Kubíka zpátky na Pitbulla
UPDATE `dogs` SET `breed` = 'Pitbull'
WHERE `name` = 'Kubík';

-- pozor! Pokud vyhovuje podmínce více záznamů, budou změněny všechny
-- změň všechny Bubliny na Vestaje (Vesnické tajemství)
UPDATE `dogs` SET `breed` = 'Vestaj'
WHERE `name` = 'Bublina';

-- jednu Bublinu přejmenuj na Bublinu II. a změň na foxteriéra
-- vyber ji podle jména a data narození
UPDATE `dogs` SET `breed` = 'Foxteriér', `name` = 'Bublina II.'
WHERE `name` = 'Bublina' AND `birthday` = '2013-01-02';