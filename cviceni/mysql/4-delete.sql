-- odstraň psíka se jménem Bublina a rasou Vestaj
DELETE FROM `dogs` WHERE `name` = 'Bublina' AND `breed` = 'Vestaj';

-- odstraň všechny psíky narozené před rokem 2010
DELETE FROM `dogs` WHERE `birthday` < '2010-01-01';

-- odstraň všechny psíky 😭
DELETE FROM `dogs`;