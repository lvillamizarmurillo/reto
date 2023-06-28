# PRUEBA CAMPUSLANDS - CAMPERS
## Ludwing Santiago Villamizar Murillo
Solo hay backen

Este proyecto tiene como fin la creación de API's mediante el uso del lenguaje PHP.

* ### Scripts SQL (Se encuentra igual dentro de la carpeta en db/db.sql)
```bash
CREATE DATABASE campuslands;

USE campuslands;

CREATE TABLE pais (idPais INT AUTO_INCREMENT, nombrePais VARCHAR(70), PRIMARY KEY (idPais));

CREATE TABLE departamento (idDep INT AUTO_INCREMENT, nombreDep VARCHAR(50), idPais INT, PRIMARY KEY (idDep),
FOREIGN KEY (idPais) REFERENCES pais(idPais));

CREATE TABLE region (idReg INT AUTO_INCREMENT, nombreReg VARCHAR(60),idDep INT, PRIMARY KEY (idReg), FOREIGN
KEY (idDep) REFERENCES departamento(idDep));

CREATE TABLE campers (idCamper VARCHAR(20), nombreCamper VARCHAR(50), apellidoCamper VARCHAR(50), fechaNac DATE, idReg INT, PRIMARY KEY (idCamper), FOREIGN KEY (idReg) REFERENCES region(idReg));
```

## USO

* Deberas alterar las credenciales de la conexión en caso de realizarla en diferente entorno.
* Recuerda abrir los archivos/rutas del ENDPOINT para campers:

### http://localhost/ApolT01-043/reto/uploads/app.php
* Sin embargo tener en cuenta que en los commits se intento de 2 formas distintas, pero por un error no me reconoce la tabla.

## ERROR AL MOMENTO DEL API

En los commits queda registro como de diferentes formas se intento arreglar, pero lo mas probable es que por un error de sintaxis algo no funcione, es recomendable revisar el codigo ya que esta practicamente conectado.
