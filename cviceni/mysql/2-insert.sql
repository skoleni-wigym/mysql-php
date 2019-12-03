-- vložení nového psíka
INSERT INTO `dogs`
(`id`, `name`, `birthday`, `breed`)
VALUES
(16, 'Vendy', '2015-07-26', 'Jezevčík');

-- pomíchané pořadí sloupců
INSERT INTO `dogs`
(`breed`, `name`, `birthday`, `id`)
VALUES
('Border kolie', 'Osvaldýna', '2010-11-08', 17);

-- vložení více nových psíků
INSERT INTO `dogs`
(`id`, `name`, `birthday`, `breed`)
VALUES
(18, 'Ben', '2016-12-26', 'Pudl'),
(19, 'Andy', '2015-10-03', 'Pudl'),
(20, 'Terezka', '2018-05-10', 'Pudl');