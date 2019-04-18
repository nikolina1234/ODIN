
CREATE TABLE ASOCIJACIJA
(
	id_asocijacija       MEDIUMINT NOT NULL,
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

ALTER TABLE ASOCIJACIJA
ADD CONSTRAINT XPKASOCIJACIJA PRIMARY KEY (id_asocijacija);

CREATE TABLE KORISNIK
(
	id_korisnik          MEDIUMINT NOT NULL,
	korisnicko_ime       CHAR(255) NOT NULL,
	lozinka              CHAR(18) NOT NULL,
	e_mail               CHAR(255) NOT NULL,
	je_moderator         boolean NOT NULL,
	je_admin             boolean NOT NULL,
	pol                  boolean NOT NULL,
	br_poena             MEDIUMINT NOT NULL,
	rang                 CHAR(18) NOT NULL
);

ALTER TABLE KORISNIK
ADD CONSTRAINT XPKKORISNIK PRIMARY KEY (id_korisnik);

CREATE TABLE PITANJE
(
	id_pitanje           MEDIUMINT NOT NULL,
	pitanje              CHAR(255) NOT NULL,
	tacan                CHAR(255) NOT NULL,
	netacan1             CHAR(255) NOT NULL,
	netacan2             CHAR(255) NOT NULL,
	netacan3             CHAR(255) NOT NULL
);

ALTER TABLE PITANJE
ADD CONSTRAINT XPKPITANJE PRIMARY KEY (id_pitanje);

CREATE TABLE SPOJNICA_OPIS
(
	opis_spojnice        CHAR(255) NULL,
	id_spojnice          MEDIUMINT NOT NULL
);

ALTER TABLE SPOJNICA_OPIS
ADD CONSTRAINT XPKSPOJNICA_OPIS PRIMARY KEY (id_spojnice);

CREATE TABLE SPOJNICE
(
	id_spojenog          MEDIUMINT NOT NULL,
	opis1                CHAR(255) NOT NULL,
	opis2                CHAR(255) NOT NULL,
	id_spojnice          MEDIUMINT NOT NULL
);

ALTER TABLE SPOJNICE
ADD CONSTRAINT XPKSPOJNICE PRIMARY KEY (id_spojenog,id_spojnice);

ALTER TABLE SPOJNICE
ADD CONSTRAINT R_8 FOREIGN KEY (id_spojnice) REFERENCES SPOJNICA_OPIS (id_spojnice);
