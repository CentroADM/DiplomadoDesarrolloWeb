-- Creamos las base de datos
-- CREATE DATABASE bolsadetrabajo;
-- Nos movemos a la base de datos
-- use bolsadetrabajo;
-- Creamo las tablas
CREATE TABLE  empresa(
  id int not null,
  nombre text not null,
  oficinas text not null,
  contacto text not null,
  numempleados int not null,
  presidente text not null,
  PRIMARY KEY (id)
);

CREATE TABLE vacante (
  id int NOT NULL,
  puesto text NOT NULL,
  horario text NOT NULL,
  lugar text NOT NULL,
  salario text NOT NULL,
  actividades text NOT NULL,
  descripcion text NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE empresavacante (
  id int NOT NULL,
  empresaid int(11) NOT NULL,
  vacanteid int(11) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (empresaid) REFERENCES empresa(id),
  FOREIGN KEY (vacanteid) REFERENCES vacante(id)
);

CREATE TABLE profesionista (
  nombre text NOT NULL,
  correo varchar(250) NOT NULL,
  contrasena text NOT NULL,
  nacionalidad text NOT NULL,
  carrera text NOT NULL,
  telefono text NOT NULL,
  PRIMARY KEY (`correo`)
);

CREATE TABLE postulacion(
  id int not null,
  profesionistacorreo varchar(250) not null,
  vacanteid int not null,
  PRIMARY KEY (id),
  FOREIGN KEY (profesionistacorreo) REFERENCES profesionista(correo),
  FOREIGN KEY (vacanteid) REFERENCES vacante(id)
);


INSERT INTO empresa(id,nombre,oficinas,contacto,numempleados,presidente) VALUES (1,'fantasma','ningunlugar','yo mero',0,'prestanombres'),(2,'jhons','mi casa','jhon@correocaliente.com',1,'jhon');

INSERT INTO vacante(id,puesto,horario,lugar,salario,actividades,descripcion) VALUES (1,'gerente','Tiempo completo','oficinas centrales','200 por hora','Supervisar','Se necesita alquien campasitado para manejar presion'),(2,'empleado','Tiempo completo','oficinas centrales','1000 por semana','Tareas pesadas','Se necesita alguien campasitado para soportar presion') ;

INSERT INTO empresavacante(id,empresaid,vacanteid) VALUES (1,1,1),(2,2,1),(3,2,2);

select * from empresa e inner join empresavacante ev on e.id = ev.empresaid;

select * from empresa e left join empresavacante ev on e.id = ev.empresaid inner join vacante v on ev.vacanteid = v.id ;
