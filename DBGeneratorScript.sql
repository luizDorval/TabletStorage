CREATE DATABASE TabletStore;
USE TabletStore;
CREATE TABLE Addresses (
	id_address INT ZEROFILL UNSIGNED AUTO_INCREMENT,
	street VARCHAR(30) NOT NULL,
	number SMALLINT NOT NULL,
	city VARCHAR(15) NOT NULL,
	state VARCHAR(15) NOT NULL,
	cep CHAR(8),
	CONSTRAINT pk_id_address PRIMARY KEY (id_address));
CREATE TABLE Providers(
    id_provider INT ZEROFILL UNSIGNED AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	phone VARCHAR(11) NOT NULL,
	email VARCHAR(100) NOT NULL,
	id_address INT ZEROFILL NOT NULL,
	CONSTRAINT pk_id_provider PRIMARY KEY (id_provider),
	CONSTRAINT fk_id_address FOREIGN KEY (id_address) REFERENCES Addresses(id_address));
CREATE TABLE Tablets (
    id_tablet INT ZEROFILL UNSIGNED AUTO_INCREMENT,
    brand VARCHAR(30) NOT NULL,
    model VARCHAR(30) NOT NULL,
    color VARCHAR(15) NOT NULL,
    value DOUBLE NOT NULL,
    id_provider INT ZEROFILL NOT NULL,
	fabrication_date DATE NOT NULL,
	register_on_system_date DATE NOT NULL,
	CONSTRAINT pk_id_tablet PRIMARY KEY (id_tablet),
	CONSTRAINT fk_id_provider FOREIGN KEY (id_provider) REFERENCES Providers(id_provider));