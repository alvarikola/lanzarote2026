CREATE TABLE cursos (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    nombre_grado    VARCHAR(50) NOT NULL,           
    curso_numero    INT NOT NULL,                   
    letra           CHAR(1) NOT NULL,               
    UNIQUE(nombre_grado, curso_numero, letra)       
);

-- nombre_grado    VARCHAR(50) NOT NULL,      Ej: "DAW", "DAM"
-- curso_numero    INT NOT NULL,              Ej: 1, 2
-- letra           CHAR(1) NOT NULL,          Ej: 'A', 'B' (Requisito explícito)
-- UNIQUE(nombre_grado, curso_numero, letra)  Evita duplicados como dos "1 DAW A"
-- Concatenado en vista sería: "1 DAW A"
