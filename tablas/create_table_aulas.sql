CREATE TABLE aulas (
    id      INT AUTO_INCREMENT PRIMARY KEY,     
    nombre  VARCHAR(100) NOT NULL,                  
    letra   CHAR(1) NOT NULL,                       
    numero  INT NOT NULL UNIQUE,                   
    planta  CHAR(1),                                

);

-- Comentarios explicativos:
-- id      INT AUTO_INCREMENT PRIMARY KEY,        ID único para cada aula
-- nombre  VARCHAR(100) NOT NULL,                 Nombre del aula, por ejemplo: "Aula 101"
-- letra   CHAR(1) NOT NULL,                      Letra del aula, por ejemplo: "A", "B", etc.
-- numero  INT NOT NULL UNIQUE,                   Número del aula, por ejemplo: "101", "102"
-- planta  CHAR(1),                               Planta en la que se encuentra el aula: [P]rimera, [S]egunda, [T]ercera