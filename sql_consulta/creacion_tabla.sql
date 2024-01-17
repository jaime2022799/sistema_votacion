CREATE TABLE formulario_votacion (

    ID NUMBER(10) PRIMARY KEY,
    nombre_apellido VARCHAR(50) NOT NULL,
    alias VARCHAR(50) NOT NULL,
    rut varchar(50),
    email varchar(50),
    region varchar(50),
    comuna varchar(50),
    candidato varchar(50),
    web boolean,
    tv boolean,
    RedesSociales boolean,
    amigos boolean
)