-- BD
CREATE DATABASE IF NOT EXISTS YEPEZFE;
USE YEPEZFE;
-- TABLE
CREATE TABLE CUENTASALDO
(
    numero_Cuenta INT NOT NULL AUTO_INCREMENT,
    titular VARCHAR(30) NOT NULL,
    clabe_Interbancaria VARCHAR(18) NOT NULL,
    numero_Tarjeta VARCHAR(16) NOT NULL,
    saldo DECIMAL NOT NULL,
    nickname_Sesion VARCHAR(10),
    contraseña VARCHAR(15),
    PRIMARY KEY(numero_Cuenta)
);
-- INSERT
INSERT INTO CUENTASALDO (titular, clabe_Interbancaria, numero_Tarjeta, saldo, nickname_Sesion, contraseña)
VALUES
('Fernando Yepez', '123451234512345123', '1111111111111111', 100, 'Fernando11', 'contra1'),
('Fausto Yepez', '543215432154321543', '2222222222222222', 200, 'Fausto2222', 'contra2'),
('Maria Felix', '678906789067890678', '3333333333333333', 300, 'Maria33333', 'contra3');
-- SELECT
SELECT * FROM CUENTASALDO;