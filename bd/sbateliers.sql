drop database if exists sbateliers;
create database sbateliers;
use sbateliers;
create table Client (
	numero int not null auto_increment,
	civilite char(10),
	nom varchar(50),
	prenom varchar(50),
	dateNaissance date,
	adresseMail varchar(70),
	mdp VARBINARY(100),
	adressePostale varchar(100),
	codePostale char(5),
	ville varchar(50),
	numeroTelephone char(10),
	primary key(numero)
);
create table ResponsableAteliers (
	numero int not null,
	nomConnexion varchar(50),
	mdp varchar(100),
	nom varchar(50),
	prenom varchar(50),
	primary key(numero)
);
create table Atelier (
	numero int not null,
	numeroResponsable int not null,
	dateEnregistrement date,
	dateHeureProgramme datetime,
	duree time,
	nbPlace int,
	theme varchar(50),
	primary key(numero),
	foreign key(numeroResponsable) references ResponsableAteliers(numero)
);
create table Participation (
	numeroClient int not null,
	numeroAtelier int not null,
	dateInscription date,
	primary key(numeroClient, numeroAtelier),
	foreign key(numeroClient) references Client(numero),
	foreign key(numeroAtelier) references Atelier(numero)
);
