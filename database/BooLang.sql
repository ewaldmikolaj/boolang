CREATE TABLE `Uzytkownik` (
	`IDuzytkownika` INT(5) NOT NULL AUTO_INCREMENT,
	`Nazwa` varchar(40) NOT NULL UNIQUE,
	`Email` varchar(40) NOT NULL UNIQUE,
	`Haslo` varchar(255) NOT NULL UNIQUE,
	`IDrodzajukonta` INT(5) NOT NULL,
	`Avatar` blob(65535) NOT NULL,
	`Opis` TEXT(1000) NOT NULL,
	`IDklasy` INT(5),
	`IDstatusu` INT(5) NOT NULL,
	PRIMARY KEY (`IDuzytkownika`)
);

CREATE TABLE `Jezyk` (
	`IDjezyka` INT(5) NOT NULL AUTO_INCREMENT,
	`Jezyk` varchar(40) NOT NULL UNIQUE,
	PRIMARY KEY (`IDjezyka`)
);

CREATE TABLE `Zawod` (
	`IDzawodu` INT(5) NOT NULL AUTO_INCREMENT,
	`Zawod` varchar(40) NOT NULL UNIQUE,
	PRIMARY KEY (`IDzawodu`)
);

CREATE TABLE `Nauka` (
	`IDuzytkownika` INT(5) NOT NULL,
	`IDzestawu` INT(5) NOT NULL,
	`Punkty` FLOAT(30) NOT NULL,
	`Postęp` FLOAT NOT NULL
);

CREATE TABLE `Zestaw` (
	`IDzestawu` INT(5) NOT NULL AUTO_INCREMENT,
	`IDfiszki` INT(5) NOT NULL,
	`Autor` varchar(40) NOT NULL,
	`IDjezyka` INT(5) NOT NULL,
	`IDzawodu` INT(5) NOT NULL,
	PRIMARY KEY (`IDzestawu`)
);

CREATE TABLE `Fiszka` (
	`IDfiszki` INT(5) NOT NULL AUTO_INCREMENT,
	`Słówko` varchar(50) NOT NULL,
	`Definicja` varchar(50) NOT NULL,
	`wartosc_punktowa` FLOAT(10) NOT NULL,
	PRIMARY KEY (`IDfiszki`)
);

CREATE TABLE `FiszkiGrupa` (
	`IDfiszki` INT(5) NOT NULL,
	`IDzestawu` INT(5) NOT NULL
);

CREATE TABLE `Klasa` (
	`IDklasy` INT(5) NOT NULL AUTO_INCREMENT,
	`NazwaKlasy` varchar(30) NOT NULL UNIQUE,
	PRIMARY KEY (`IDklasy`)
);

CREATE TABLE `Relacja` (
	`IDuzytkownikjeden` INT NOT NULL,
	`IDuzytkownikdwa` INT NOT NULL,
	`status` varchar(255) NOT NULL
);

CREATE TABLE `Konto` (
	`IDrodzajukonta` INT(5) NOT NULL AUTO_INCREMENT,
	`RodzajKonta` varchar(40) NOT NULL,
	PRIMARY KEY (`IDrodzajukonta`)
);

CREATE TABLE `Status` (
	`IDstatusu` INT(5) NOT NULL AUTO_INCREMENT,
	`status` varchar(30) NOT NULL,
	PRIMARY KEY (`IDstatusu`)
);

ALTER TABLE `Uzytkownik` ADD CONSTRAINT `Uzytkownik_fk0` FOREIGN KEY (`IDrodzajukonta`) REFERENCES `Konto`(`IDrodzajukonta`);

ALTER TABLE `Uzytkownik` ADD CONSTRAINT `Uzytkownik_fk1` FOREIGN KEY (`IDklasy`) REFERENCES `Klasa`(`IDklasy`);

ALTER TABLE `Uzytkownik` ADD CONSTRAINT `Uzytkownik_fk2` FOREIGN KEY (`IDstatusu`) REFERENCES `Status`(`IDstatusu`);

ALTER TABLE `Nauka` ADD CONSTRAINT `Nauka_fk0` FOREIGN KEY (`IDuzytkownika`) REFERENCES `Uzytkownik`(`IDuzytkownika`);

ALTER TABLE `Nauka` ADD CONSTRAINT `Nauka_fk1` FOREIGN KEY (`IDzestawu`) REFERENCES `Zestaw`(`IDzestawu`);

ALTER TABLE `Zestaw` ADD CONSTRAINT `Zestaw_fk0` FOREIGN KEY (`IDjezyka`) REFERENCES `Jezyk`(`IDjezyka`);

ALTER TABLE `Zestaw` ADD CONSTRAINT `Zestaw_fk1` FOREIGN KEY (`IDzawodu`) REFERENCES `Zawod`(`IDzawodu`);

ALTER TABLE `FiszkiGrupa` ADD CONSTRAINT `FiszkiGrupa_fk0` FOREIGN KEY (`IDfiszki`) REFERENCES `Fiszka`(`IDfiszki`);

ALTER TABLE `FiszkiGrupa` ADD CONSTRAINT `FiszkiGrupa_fk1` FOREIGN KEY (`IDzestawu`) REFERENCES `Zestaw`(`IDzestawu`);

ALTER TABLE `Relacja` ADD CONSTRAINT `Relacja_fk0` FOREIGN KEY (`IDuzytkownikjeden`) REFERENCES `Uzytkownik`(`IDuzytkownika`);

