Colegio
Profesore
Alumno
Apoderado
Curso
Nivele
Comunicacion
ComunicacionApoderado

CREATE TABLE Colegio(
  id int(1),
  nombre
  direccion
  comuna
  ciudad
  contacto
  telefono
  correo
  vigente int(1)
)

CREATE TABLE Profesor(
  id int(1),
  nombre
  apellidoPaterno
  apellidoMaterno
  asignatura
  jefatura
  vigente int(1)
)

CREATE TABLE Alumno(
  id int(1),
  nombre
  apellidoPaterno
  apellidoMaterno
  cursoId
  apoderadoId
  vigente int(1)
)

CREATE TABLE Apoderado(
  id int(1),
  alumnoId,
  nombre
  apellidoPaterno
  apellidoMaterno
  vigente int(1)
)

CREATE TABLE Curso(
  id int(1),
  nombre
  nivelId
  vigente int(1)
)

CREATE TABLE Nivel(
  id int(1),
  nombre
  vigente int(1)
)

CREATE TABLE Comunicacion(
  id int(1),
  profesorId,
  asunto
  mensaje
  fecha
  estado
  vigente int(1)
)

CREATE TABLE ComunicacionApoderado(
  id int(1),
  comunicacionId,
  profesorId,
  vista,
  fecha,
  vigente int(1)
)
