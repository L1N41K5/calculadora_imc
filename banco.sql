CREATE TABLE `calculo` (
  `id` int(11) NOT NULL auto_increment,
  `peso` float NOT NULL,
  `altura` float NOT NULL,
  `imc` float NOT NULL,
  `resultado` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);