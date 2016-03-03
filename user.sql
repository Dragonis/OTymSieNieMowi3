
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
  `Uczelnia` varchar(255) DEFAULT NULL,
  `RodzajNiepelnosprawnosci` varchar(255) DEFAULT NULL,
  `WieczorIntegracyjny` varchar(255) DEFAULT NULL,

  `PomocAsystenta` varchar(255) DEFAULT NULL,
  `WlasnySystemFM` varchar(255) DEFAULT NULL,
  `SpeechToText` varchar(255) DEFAULT NULL,
  `PetlaIndukcyjna` varchar(255) DEFAULT NULL,
  `TlumaczaMigowego` varchar(255) DEFAULT NULL,
  `NiePotrzebuje` varchar(255) DEFAULT NULL,

  `UczestnikBierny` varchar(255) DEFAULT NULL,
  `UczestnikCzynny` varchar(255) DEFAULT NULL,

  `TematPracy` varchar(255) DEFAULT NULL,
  `OpisAbstraktu` varchar(255) DEFAULT NULL,
  `NotkaoSobie` varchar(255) DEFAULT NULL,

  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


INSERT INTO `OTymSieNieMowi3`
(`Imie`, `Nazwisko`,`Ulica`,`NrBloku`,`NrMieszkania`,`KodPocztowy`,`Miasto`,`TelKom`,`Email`,`Uwagi`,`Uczelnia`,`RodzajNiepelnosprawnosci`,`WieczorIntegracyjny`,`PomocAsystenta`,`WlasnySystemFM`,`SpeechToText`,`PetlaIndukcyjna`,`TlumaczaMigowego`,`NiePotrzebuje`,`UczestnikBierny`,`UczestnikCzynny`,`TematPracy`,`OpisAbstraktu`,`NotkaoSobie`)
VALUES
  ('Jan', 'Kowalski','Jakastam','30','7','56-540','Zgadnij','514523698','a@a.pl','Zadnych','KUL','Sluchowy','on','on','on','on','on','on','on','Tak','Nie','Jakis tam temat pracy','Jakis tam abstrakt','Jakies tam informacje o sobie.');



-- CREATE TABLE IF NOT EXISTS `OTymSieNieMowi3` (
--   `Id` int(11) NOT NULL AUTO_INCREMENT,
--   `Imie` varchar(255) DEFAULT NULL,
--   `Nazwisko` varchar(255) DEFAULT NULL,
--   `Ulica` varchar(255) DEFAULT NULL,
--   `NrBloku` varchar(255) DEFAULT NULL,
--   `NrMieszkania` varchar(255) DEFAULT NULL,
--   `KodPocztowy` varchar(255) DEFAULT NULL,
--   `Miasto` varchar(255) DEFAULT NULL,
--   `TelKom` varchar(255) DEFAULT NULL,
--   `Email` varchar(255) DEFAULT NULL,
--   `Uwagi` varchar(255) DEFAULT NULL,
--   `WieczorIntegracyjny` varchar(255) DEFAULT NULL,
--
--   `PomocAsystenta` varchar(255) DEFAULT NULL,
--   `WlasnySystemFM` varchar(255) DEFAULT NULL,
--   `SpeechToText` varchar(255) DEFAULT NULL,
--   `PetlaIndukcyjna` varchar(255) DEFAULT NULL,
--   `TlumaczaMigowego` varchar(255) DEFAULT NULL,
--   `NiePotrzebuje` varchar(255) DEFAULT NULL,
--
--   `UczestnikBierny` varchar(255) DEFAULT NULL,
--   `UczestnikCzynny` varchar(255) DEFAULT NULL,
--
--   `TematPracy` varchar(255) DEFAULT NULL,
--   `OpisAbstraktu` varchar(255) DEFAULT NULL,
--   `NotkaoSobie` varchar(255) DEFAULT NULL,
--
--   PRIMARY KEY (`Id`),
--   UNIQUE KEY `Id` (`Id`)
-- ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
--
--
-- INSERT INTO `OTymSieNieMowi3`
-- (`Imie`, `Nazwisko`,`Ulica`,`NrBloku`,`NrMieszkania`,`KodPocztowy`,`Miasto`,`TelKom`,`Email`,`Uwagi`,`WieczorIntegracyjny`,`PomocAsystenta`,`WlasnySystemFM`,`SpeechToText`,`PetlaIndukcyjna`,`TlumaczaMigowego`,`NiePotrzebuje`,`UczestnikBierny`,`UczestnikCzynny`,`TematPracy`,`OpisAbstraktu`,`NotkaoSobie`)
-- VALUES
--   ('Jan', 'Kowalski','Jakastam','30','7','56-540','Zgadnij','514523698','a@a.pl','Zadnych','on','on','on','on','on','on','on','Tak','Nie','Jakis tam temat pracy','Jakis tam abstrakt','Jakies tam informacje o sobie.');
--
