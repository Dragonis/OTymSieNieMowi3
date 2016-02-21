
CREATE TABLE IF NOT EXISTS `OTymSieNieMowi3` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Imie` varchar(255) DEFAULT NULL,
  `Nazwisko` varchar(255) DEFAULT NULL,
  `Ulica` varchar(255) DEFAULT NULL,
  `NrBloku` varchar(255) DEFAULT NULL,
  `NrMieszkania` varchar(255) DEFAULT NULL,
  `KodPocztowy` varchar(255) DEFAULT NULL,
  `Miasto` varchar(255) DEFAULT NULL,
  `TelKom` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Uwagi` varchar(255) DEFAULT NULL,
  `UczestnikBierny` varchar(255) DEFAULT NULL,
  `UczestnikCzynny` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


INSERT INTO `OTymSieNieMowi3`
(`Imie`, `Nazwisko`,`Ulica`,`NrBloku`,`NrMieszkania`,`KodPocztowy`,`Miasto`,`TelKom`,`Email`,`Uwagi`,`UczestnikBierny`,`UczestnikCzynny`)
VALUES
  ('Jan', 'Kowalski','Jakastam','30','7','56-540','Zgadnij','514523698','a@a.pl','Zadnych','Tak','Nie');

