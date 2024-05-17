<--->
CREATE TABLE "Zona"{
    PRIMARY KEY INT ID_zona,
    String Nombre
};

CREATE TABLE "Sucursal"{
    PRIMARY KEY INT ID_zona,
     KEY INT ID_zona,
    String Nombre
};

LOAD DATA LOCAL INFILE '/Users/joseposadas/Sites/htdocs/CineUam/TuplasBD/TSucursal.txt'
INTO TABLE zona
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\n'
(IDZona, NombreZona);
