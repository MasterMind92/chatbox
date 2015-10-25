drop database chat;
create database chat;

use chat;

create table User(
	id_user int(3) auto_increment,
	nom_user varchar(100),
	Constraint pk_user primary key (id_user)
)engine=innoDB;

create table Message(
	id_msg int(3) auto_increment,
	txt_msg text (2000),
	Constraint pk_msg primary key (id_msg)
)engine= innoDB;