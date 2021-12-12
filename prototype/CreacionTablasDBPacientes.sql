-- SCHEMA: public

-- DROP SCHEMA public ;

CREATE SCHEMA public
    AUTHORIZATION postgres;

COMMENT ON SCHEMA public
    IS 'standard public schema';

GRANT ALL ON SCHEMA public TO PUBLIC;

GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL PRIVILEGES ON DATABASE pacientes TO vicman;
GRANT ALL PRIVILEGES ON ALL TABLES IN SCHEMA public TO vicman;
GRANT ALL PRIVILEGES ON ALL SEQUENCES IN SCHEMA public TO vicman;

-- Tabla paciente
CREATE TABLE paciente(
	id_paciente serial primary key,
	nombre_paciente varchar(150) not null,
	nombre_preferido varchar(100) null,
	sexo varchar(50) null,
	fecha_nacimiento date,
	lugar_nacimiento varchar(100),
	lugar_residencia varchar(100),
	nivel_estudios varchar(50) null,
	ocupacion varchar(50) null,
	religion varchar(50) null,
	nombre_cuidador varchar(150) null,
	parentesco_cuidador varchar(100) null,
	fecha_registro date	null
);

set datestyle to 'European';

-- Tabla familiar
CREATE TABLE familiar (
	id_familiar serial primary key,
	id_paciente integer not null,
	nombre varchar(150) not null,
	edad integer not null,
	parentesco varchar(50) not null,
	info_adicional text null,
	FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente)
);

--Tabla habito diario
CREATE TABLE habito (
	id_habito serial primary key,
	id_paciente integer not null,
	descripcion_habito varchar(100) not null,
	FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente)
);

--Tabla platillo favorito
CREATE TABLE platillo_favorito (
	id_platillo serial primary key,
	id_paciente integer not null,
	nombre_platillo varchar(100) not null,
	FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente)
);

--Tabla bebida favorita
CREATE TABLE bebida (
	id_bebida serial primary key,
	id_paciente integer not null,
	nombre_bebida varchar(100) not null,
	FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente)
);

-- Tabla actividad relajante
CREATE TABLE actividad (
	id_actividad serial primary key,
	id_paciente integer not null,
	descripcion_actividad varchar(100) not null,
	FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente)
);

-- Tabla genero musical preferido
CREATE TABLE genero_musical (
	id_genero serial primary key,
	id_paciente integer not null,
	nombre_genero varchar(100) not null,
	FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente)
);

--Tabla cantante favorito
CREATE TABLE cantante_favorito (
	id_cantante serial primary key,
	id_paciente integer not null,
	nombre_cantante varchar(100) not null,
	FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente)
);

--Tabla cancion favorita
CREATE TABLE cancion_favorita (
	id_cancion serial primary key,
	id_paciente integer not null,
	nombre_cancion varchar(100) not null,
	FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente)
);

--Tabla programa favorito
CREATE TABLE programa_favorito (
	id_programa serial primary key,
	id_paciente integer not null,
	nombre_programa varchar(100) not null,
	FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente)
);

--Tabla actor favorito
CREATE TABLE actor_favorito (
	id_actor serial primary key,
	id_paciente integer not null,
	nombre_actor varchar(100) not null,
	FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente)
);

--Tabla tarea hogar en que le gusta cooperar
CREATE TABLE tarea_hogar (
	id_tarea serial primary key,
	id_paciente integer not null,
	descripcion_tarea varchar(100) not null,
	FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente)
);

--Tabla pasatiempo favorito
CREATE TABLE pasatiempo_favorito (
	id_pasatiempo serial primary key,
	id_paciente integer not null,
	descripcion_pasatiempo varchar(100) not null,
	FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente)
);

--Tabla deporte favorito
CREATE TABLE deporte_favorito (
	id_deporte serial primary key,
	id_paciente integer not null,
	nombre_deporte varchar(100) not null,
	FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente)
);

--Tabla equipo deportivo favorito
CREATE TABLE equipo_favorito (
	id_equipo serial primary key,
	id_paciente integer not null,
	nombre_equipo varchar(100) not null,
	FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente)
);

--Tabla habilidad que tiene
CREATE TABLE habilidad (
	id_habilidad serial primary key,
	id_paciente integer not null,
	descripcion_habilidad varchar(100) not null,
	FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente)
);

--Tabla festividad favorita
CREATE TABLE festividad_favorita (
	id_festividad serial primary key,
	id_paciente integer not null,
	nombre_festividad varchar(100) not null,
	FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente)
);

--Tabla lugar favorito
CREATE TABLE lugar_favorito (
	id_lugar serial primary key,
	id_paciente integer not null,
	nombre_lugar varchar(100) not null,
	FOREIGN KEY (id_paciente) REFERENCES paciente(id_paciente)
);

SELECT * FROM paciente;



