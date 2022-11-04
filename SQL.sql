
create table tb_nota (id integer(6),asignatura_id integer(11),calificacion float,
  fecha_examen date, convocatoria integer(6), alumno_id integer(11),
  CONSTRAINT pk_tb_nota PRIMARY KEY (id),
  CONSTRAINT fk_tb_asignatura FOREIGN KEY (id) REFERENCES tb_asignatura(id));

create table tb_asignatura (id integer(6),nombre varchar(25),
  CONSTRAINT pk_tb_asignatura PRIMARY KEY (id));

create table tb_alumno (id integer(6),nombre varchar(25), apellido varchar(25), fecha_nacimiento date,
  CONSTRAINT pk_tb_alumno PRIMARY KEY (id)
  CONSTRAINT fk_tb_nota FOREIGN KEY (id) REFERENCES
  tb_nota(alumno_id));

create table tb_labor_extra (id integer(6), puesto varchar(25), alumno_id integer(11),
  CONSTRAINT pk_tb_labor_extra PRIMARY KEY (id)
  CONSTRAINT fk_tb_alumno FOREIGN KEY (id) REFERENCES
  tb_nota(alumno_id));


insert into tb_alumno (id,nombre,apellido,fecha_nacimiento)
values (1,'Juan','Pardo','1990-11-15'),
(2,'Manuel','Fernandez','1998-10-23'),
(3,'Pedro','Lopez','1986-08-04'),
(4,'Maria','Gutierrez','2001-12-27'),
(5,'Armando','Jimenez','1993-10-27');
--1 MATEMATICAS --asignatura
insert into tb_nota (id,asignatura_id,calificacion,fecha_examen,convocatoria,alumno_id)
values (1,1,5,'2021-05-09',1,1),
(2,1,8,'2021-05-09',1,2),
(3,1,3,'2021-05-09',1,3),
(4,1,1,'2021-05-09',1,4),
(5,1,8,'2021-05-09',1,4);

insert into tb_asignatura (id,nombre)
values (1,'MATEMATICAS'),
  (2,'FILOSOFIA'),
  (3,'CIENCIAS'),
  (4,'QUIMICA'),
  (5,'QUIMICA');

insert into tb_labor_extra (id,puesto,alumno_id)
  values (1,'DIRECTOR DEL CENTRO',3),
  (2,'ALUMNO',1),
  (3,'ALUMNO',2),
  (4,'ALUMNO',4),
  (5,'ALUMNO',5);
