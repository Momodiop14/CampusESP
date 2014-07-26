create table MOIS
  (
          libelle_mois varchar (9),

         CONSTRAINT pk_mois primary key (libelle_mois)
  );


CREATE TABLE PAVILLON
(
	
	nom_pavillon varchar(35),
	niveau_etude_resident varchar(20),
	CONSTRAINT pk_pavillon primary key(nom_pavillon)

);

CREATE TABLE ETAGE
( 
	Code_Etage varchar(15),
	niveau_Etage varchar(30),
	Ref_pavillon varchar(35),
	CONSTRAINT pk_etage primary key(Code_Etage),
	CONSTRAINT fk_etage foreign key(Ref_pavillon) references PAVILLON(nom_pavillon) on delete cascade

);


CREATE TABLE COULOIR
(
	Code_Couloir varchar(20),
	position_couloir varchar(6),
	genre_couloir char(1),
	Ref_Etage varchar(15),
	CONSTRAINT pk_couloir primary key(Code_Couloir),
	CONSTRAINT fk_couloir foreign key(Ref_Etage) references ETAGE(Code_Etage) on delete cascade

);



CREATE TABLE CHAMBRE
(
	enregistrement_chambre int auto_increment,
	Code_chambre varchar(20),
	Ref_Couloir varchar(20),
	CONSTRAINT pk_chambre primary key(enregistrement_chambre),
	CONSTRAINT fk_chambre foreign key(Ref_Couloir) references COULOIR(Code_Couloir) on delete cascade
);

CREATE TABLE DEPARTEMENT
(
	Id_dept int auto_increment ,
	nom_departement varchar(30),
	CONSTRAINT pk_departement primary key (Id_dept)

);

CREATE TABLE FORMATIONS
(
	Code_Formation varchar(10),
	CONSTRAINT pk_formations primary key (Code_Formation)
);

CREATE TABLE OOPTION
(
	id_Option int auto_increment,
	nom_Option varchar(35),
	Num_dep int not null,
	CONSTRAINT pk_option primary key (id_Option),
	CONSTRAINT fk_option foreign key(Num_dep) references DEPARTEMENT(Id_dept) on delete cascade
);


CREATE TABLE ETUDIANT
(		
	 NoEnregistrementEtudiant int auto_increment,
	 identifiant varchar(13) ,
     nom varchar(40),
     prenom varchar(70),
     date_naissance date, 
     lieu_naissance varchar(30),
     adresse varchar(150),
     ooption_etudiant int,
     chambre_habite int,
     formation_etudiant varchar(10),
     nationalite varchar(30),
     CONSTRAINT pk_etudiant primary key (NoEnregistrementEtudiant),
     CONSTRAINT fk_etudiant foreign key (formation_etudiant) references FORMATIONS(Code_Formation) on delete cascade,
     CONSTRAINT fk_etudiant2 foreign key (ooption_etudiant) references OOption(id_Option) on delete cascade,
     CONSTRAINT fk_etudiant3 foreign key (chambre_habite) references CHAMBRE(enregistrement_chambre) on delete cascade,
     CONSTRAINT un_etudiant UNIQUE(identifiant)
);

CREATE TABLE RESERVATION
(
	idReservation int auto_increment,
	date_reservation datetime,
	etat_reservation varchar(50),
	delai_confirmation_colocation datetime,
	No_Etu int,
	chambre_reserve int,
	CONSTRAINT pk_reservation primary key (idReservation),
	CONSTRAINT fk_reservation foreign key (chambre_reserve) references CHAMBRE(enregistrement_chambre) on delete cascade,
	CONSTRAINT fk_reservation2 foreign key (No_Etu) references ETUDIANT(NoEnregistrementEtudiant) on delete cascade
);

CREATE TABLE FORMATION_OPTION
(
	No_Option int not null,
	Ref_Formation varchar(10) not null,
	CONSTRAINT pk_formation_option primary key (No_Option,Ref_Formation),
	CONSTRAINT fk_formation_option foreign key (No_Option) references OOPTION(id_Option) on delete cascade,
	CONSTRAINT fk_formation_option2 foreign key (Ref_Formation) references FORMATIONS(Code_Formation) on delete cascade

);

CREATE TABLE GUICHETIER
(
	Login_guichetier varchar(100),
	Mot_pass_guichetier varchar(100),
	prenom_guichetier varchar(50),
	nom_guichetier varchar(30),
	date_naissance date,
	sexe_guichetier char(1),
	CONSTRAINT pk_guichetier primary key (Login_guichetier)


);


CREATE TABLE QUITUS
(
	NoQuitus int auto_increment,
	date_delivrance datetime,
	Matricule_Etudiant varchar(13),
	Log_Guichetier varchar(100),
	CONSTRAINT pk_quitus  primary key(NoQuitus),
	CONSTRAINT fk_quitus  foreign key(Matricule_Etudiant) references ETUDIANT(identifiant) on delete cascade,
	CONSTRAINT fk_quitus2 foreign key (Log_Guichetier) references GUICHETIER(Login_guichetier) on delete cascade


);

CREATE TABLE RECU
(
	No_reçu int auto_increment,
	date_creation_reçu datetime,
	NoGuichetier varchar(100),
	CONSTRAINT pk_recu primary key(No_reçu),
	CONSTRAINT fk_recu foreign key (NoGuichetier) references GUICHETIER(Login_guichetier) on delete cascade

);

CREATE TABLE LOYER
(
	 id_loyer int AUTO_INCREMENT,
     id_etudiant varchar(13),
     mois varchar(9),
     Num_reçu int,
     paye boolean,
     CONSTRAINT pk_loyer primary key (id_loyer),
     CONSTRAINT fk_loyer foreign key  (id_etudiant)   references etudiant(identifiant) on delete cascade,
     CONSTRAINT fk_loyer2 foreign key (mois)  references MOIS(libelle_mois)on delete cascade

);



CREATE TABLE AGENT
(
	Login_agent varchar(100),
	Mot_pass_agent varchar(100),
	prenom_agent varchar(50),
	nom_agent varchar(30),
	sexe_agent char(1),
	date_naissance_agent date,
	CONSTRAINT pk_agent primary key (Login_agent)

);

CREATE TABLE ADMIN

(
	Login_admin varchar(100),
	Mot_pass_admin varchar(100),
	prenom_admin varchar(50),
	nom_admin varchar(30),
	date_naissance_admin date,
	sexe_admin char(1),
	CONSTRAINT pk_admin primary key (Login_admin)

);







