CREATE TABLE IF NOT EXISTS cursos_cocina (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre_participante VARCHAR(100) NOT NULL,
  nivel_culinario VARCHAR(50) NOT NULL,
  cocina_interes VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  pais VARCHAR(50) NOT NULL,
  metodo_pago_preferido VARCHAR(50) NOT NULL,
  mensaje TEXT,
  creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO cursos_cocina
(nombre_participante, nivel_culinario, cocina_interes, email, pais, metodo_pago_preferido, mensaje)
VALUES
('Ana Pérez', 'Básico', 'Italiana', 'cardonaj689@gmail.com', 'Honduras', 'Tarjeta', 'Quiero empezar desde cero');