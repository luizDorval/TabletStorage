CREATE DATABASE TabletStorage;
USE TabletStorage;
CREATE TABLE Providers(
    id_provider INT  UNSIGNED AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	phone VARCHAR(11) ,
	email VARCHAR(100) ,
	street VARCHAR(30) ,
	number SMALLINT ,
	city VARCHAR(15) ,
	state VARCHAR(15) ,
	cep CHAR(8),
	CONSTRAINT pk_id_provider PRIMARY KEY (id_provider));
CREATE TABLE Tablets (
    id_tablet INT UNSIGNED AUTO_INCREMENT,
    brand VARCHAR(30),
    model VARCHAR(30) NOT NULL,
    color VARCHAR(15),
    value DOUBLE,
    id_provider INT NOT NULL,
	fabrication_date DATE,
	register_on_system_date DATE,
	CONSTRAINT pk_id_tablet PRIMARY KEY (id_tablet),
	CONSTRAINT fk_id_provider FOREIGN KEY (id_provider) REFERENCES Providers(id_provider));
	/* Os inserts abaixo s
