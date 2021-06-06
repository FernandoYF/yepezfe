CREATE DATABASE IF NOT EXISTS YEPEZFE;
USE YEPEZFE;
-- TABLE
CREATE TABLE Usuario
(
  id INT NOT NULL AUTO_INCREMENT,
  Titular VARCHAR(20) NOT NULL,
  ApellidoPa VARCHAR(10) NOT NULL,
  ApellidoMa VARCHAR(10) NOT NULL,
  Nickname VARCHAR(10) NOT NULL,
  Contraseña VARCHAR(33) NOT NULL,
  PRIMARY KEY (id)
);
-- INSERT
INSERT INTO Usuario (Titular, ApellidoPa, ApellidoMa, Nickname, Contraseña)
VALUES
('Fernando Yepez', 'Yepez', 'Felix', 'fernando','cf28c8c2b64975b357d7e12f1102f1c5');
-- SELECT
SELECT * FROM Usuario;

