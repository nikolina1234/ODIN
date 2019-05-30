
CREATE SCHEMA Slagalica;
USE Slagalica;

CREATE TABLE ASOCIJACIJA
(
	id_asocijacija       MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	a1                   CHAR(255) NOT NULL,
	a2                   CHAR(255) NOT NULL,
	a3                   CHAR(255) NOT NULL,
	a4                   CHAR(255) NOT NULL,
	a_konacno            CHAR(255) NOT NULL,
	b1                   CHAR(255) NOT NULL,
	b2                   CHAR(255) NOT NULL,
	b3                   CHAR(255) NOT NULL,
	b4                   CHAR(255) NOT NULL,
	b_konacno            CHAR(255) NOT NULL,
	c1                   CHAR(255) NOT NULL,
	c2                   CHAR(255) NOT NULL,
	c3                   CHAR(255) NOT NULL,
	c4                   CHAR(255) NOT NULL,
	c_konacno            CHAR(255) NOT NULL,
	d1                   CHAR(255) NOT NULL,
	d2                   CHAR(255) NOT NULL,
	d3                   CHAR(255) NOT NULL,
	d4                   CHAR(255) NOT NULL,
	d_konacno            CHAR(255) NOT NULL,
	asoc_konacno         CHAR(255) NOT NULL
);



CREATE TABLE KORISNIK
(
	id_korisnik          MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	korisnicko_ime       CHAR(255) NOT NULL,
	gameplay_ime		 CHAR(255) UNIQUE,
	lozinka              CHAR(18) NOT NULL,
	e_mail               CHAR(255) NOT NULL,
	zeli_mod			 boolean NOT NULL,
	je_moderator         boolean NOT NULL,
	je_admin             boolean NOT NULL,
	pol                  boolean NOT NULL,
	br_poena             MEDIUMINT NOT NULL,
	rang                 CHAR(18) NOT NULL
);

CREATE TABLE PITANJE
(
	id_pitanje           MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	pitanje              CHAR(255) NOT NULL,
	tacan                CHAR(255) NOT NULL,
	netacan1             CHAR(255) NOT NULL,
	netacan2             CHAR(255) NOT NULL,
	netacan3             CHAR(255) NOT NULL
);


CREATE TABLE SPOJNICA_OPIS
(
	opis_spojnice        CHAR(255) NULL,
	id_spojnice          MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY
);

CREATE TABLE slagalica
(
	id_rec          MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	rec               CHAR(255) NOT NULL
);

CREATE TABLE SPOJNICE
(
	id_spojenog          MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	opis1                CHAR(255) NOT NULL,
	opis2                CHAR(255) NOT NULL,
	id_spojnice          MEDIUMINT NOT NULL
);

ALTER TABLE SPOJNICE
ADD CONSTRAINT R_8 FOREIGN KEY (id_spojnice) REFERENCES SPOJNICA_OPIS (id_spojnice);

INSERT INTO Korisnik (korisnicko_ime,lozinka,e_mail,zeli_mod,je_moderator,je_admin,pol,br_poena,rang) VALUES ('pera','123','a@b.c',0,0,0,0,0,0);
INSERT INTO Korisnik (korisnicko_ime,lozinka,e_mail,zeli_mod,je_moderator,je_admin,pol,br_poena,rang) VALUES ('zika','123','a1@b.c',0,1,0,0,0,0);
INSERT INTO Korisnik (korisnicko_ime,lozinka,e_mail,zeli_mod,je_moderator,je_admin,pol,br_poena,rang) VALUES ('admin','admin123','a2@b.c',0,0,1,0,0,0);

insert into slagalica(rec) values('jedan');
insert into slagalica(rec) values('dva');
insert into slagalica(rec) values('tri');
insert into slagalica(rec) values('cetiri');