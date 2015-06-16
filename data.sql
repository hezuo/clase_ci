CREATE TABLE mensaje
(
id int not null auto_increment,
remitente varchar(255),
correo varchar(255),
ciudad varchar(255),
mensaje text,
 primary key(id)
);