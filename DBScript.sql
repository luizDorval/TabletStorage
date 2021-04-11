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
	/* Os inserts abaixo são padrões para gerar as telas de adicionar e alterar*/
	INSERT INTO Providers ( id_provider
							name, 
							phone, 
							email, 
							street,
							number,
							city,
							state,
							cep)
	VALUES(1
			'name', 
			'phone', 
			'email', 
			'street',
			190,
			'city',
			'state',
			'99999999');
	INSERT INTO Tablets (id_tablet,
					brand, 
					model, 
					color, 
					value,
					id_provider, 
					fabrication_date, 
					register_on_system_date)
	VALUES(1
		'brand', 
		'model', 
		'color', 
		100,
		1, 
		'1995-10-11', 
		'1995-11-11');