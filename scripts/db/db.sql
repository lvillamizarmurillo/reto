CREATE DATABASE campuslands;

USE campuslands;

CREATE TABLE
    pais (
        idPais INT AUTO_INCREMENT,
        nombrePais VARCHAR(70),
        PRIMARY KEY (idPais)
    );

CREATE TABLE
    departamento (
        idDep INT AUTO_INCREMENT,
        nombreDep VARCHAR(50),
        idPais INT,
        PRIMARY KEY (idDep),
        FOREIGN KEY (idPais) REFERENCES pais(idPais)
    );

CREATE TABLE
    region (
        idReg INT AUTO_INCREMENT,
        nombreReg VARCHAR(60),
        idDep INT,
        PRIMARY KEY (idReg),
        FOREIGN KEY (idDep) REFERENCES departamento(idDep)
    );

CREATE TABLE
    campers (
        idCamper VARCHAR(20),
        nombreCamper VARCHAR(50),
        apellidoCamper VARCHAR(50),
        fechaNac DATE,
        idReg INT,
        PRIMARY KEY (idCamper),
        FOREIGN KEY (idReg) REFERENCES region(idReg)
    );