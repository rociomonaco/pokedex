CREATE DATABASE pokedex;
USE pokedex;
CREATE TABLE pokemones 
(id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
 nombre varchar(275) NOT NULL, 
 tipo1 varchar(20),
 tipo2 varchar(20),
 numero int NOT NULL,
 img varchar(1000),
 descripcion varchar(1000),
 peso double,
 altura double);

INSERT INTO pokemones(nombre, tipo1, tipo2, numero, img, descripcion, peso, altura) VALUES ('Pikachu','electrico',NULL,25,'https://static.wikia.nocookie.net/espokemon/images/7/77/Pikachu.png/revision/latest?cb=20150621181250','Pikachu es un Pokémon de tipo eléctrico introducido en la primera generación. Es el Pokémon más conocido de la historia, mayormente por ser el acompañante del protagonista del anime, Ash Ketchum y la mascota representante de la franquicia Pokémon. Es el Pokémon inicial de Pokémon Amarillo y Pokémon: Lets Go Pikachu!. A partir de la segunda generación, es la forma evolucionada de Pichu.',6.0, 0.4);
INSERT INTO pokemones(nombre, tipo1, tipo2, numero, img, descripcion, peso, altura) VALUES ('Nidoran','veneno',NULL,29,'https://static.wikia.nocookie.net/espokemon/images/c/c8/Nidoran%E2%99%80.png/revision/latest?cb=20080909113724','Nidoran es un Pokémon de tipo veneno introducido en la primera generación. Es la contraparte femenina de Nidoran',7.0, 0.4);
INSERT INTO pokemones(nombre, tipo1, tipo2, numero, img, descripcion, peso, altura) VALUES ("Weedle","bicho", "veneno",13,"https://static.wikia.nocookie.net/espokemon/images/d/d6/Weedle.png/revision/latest?cb=20080723091802","Weedle es un Pokémon del tipo bicho/veneno introducido en la primera generación. Es la contraparte de Caterpie.",3.2,0.3); 


CREATE TABLE usuarios 
(id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
 username varchar(40) NOT NULL, 
 pass varchar(40) NOT NULL);

INSERT INTO usuarios (id, username, pass) VALUES (NULL, 'admin', 'admin');
