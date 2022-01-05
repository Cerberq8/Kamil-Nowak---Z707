drop table `Jachty`;

CREATE TABLE IF NOT EXISTS `Jachty` (
	`IDJachtu` int(11) NOT NULL AUTO_INCREMENT,
	`nazwa_jachtu` varchar(100) NOT NULL,
	`rok_budowy` int,
	`pomieszczenia` int,
	`waga_kg` int,
	`moc_silnika_kM` int,
	`cena_wynajmu` decimal(10,2),
	`cena_kupna` decimal(12,2),
	`sold` BIT,
    `img` text not NULL,
	`date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`IDJachtu`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `Jachty` (`IDJachtu`, `nazwa_jachtu`, `rok_budowy`, `pomieszczenia`, `waga_kg`, `moc_silnika_kM`, `cena_wynajmu`, `cena_kupna`, `sold`, `img`, `date_added`) VALUES
(1, 'Holländischer Werftbau - DHB 00641',	 '2000',	 '3',	 '8000',	 '50',	 '1000',	 '200000',	 '0',	'yy1.jpg',	 CURRENT_TIMESTAMP),
(2, 'Wauquiez (FR) - Centurion 32',			 '1968',	 '2', 	 '4200', 	 '28', 	 '500', 	 '115000',	 '0',	'yy2.jpg',	 CURRENT_TIMESTAMP),
(3, 'Sea Ray - Sea Ray 260 Sundancer',		 '2014',	 '2',	 '2800',	 '300',	 '2200',	 '480000',	 '0',	'yy3.jpg',	 CURRENT_TIMESTAMP),
(4, 'Fairline - Targa 52',					 '2003',	 '5',	 '18000',	 '715',	 '5500',	 '1200000',	 '0',	'yy4.jpg',	 CURRENT_TIMESTAMP),
(5, 'Jeanneau - Jeanneau Sun Odyssey 35',	 '2006',	 '3',	 '9770',	 '27',	 '1300',	 '260000',	 '0',	'yy5.jpg',	 CURRENT_TIMESTAMP),
(6, 'Fairline - Sedan 36',					 '1986',	 '3',	 '10000',	 '508',	 '1600',	 '310000',	 '0',	'yy6.jpg',	 CURRENT_TIMESTAMP);