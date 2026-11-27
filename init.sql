CREATE DATABASE IF NOT EXISTS appDB;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT,UPDATE,INSERT ON appDB.* TO 'user'@'%';
FLUSH PRIVILEGES;

USE appDB;
CREATE TABLE IF NOT EXISTS users (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(20) NOT NULL,
  surname VARCHAR(40) NOT NULL,
  PRIMARY KEY (ID)
);

INSERT INTO users (name, surname)
SELECT * FROM (SELECT 'Knight', 'Hollow') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Knight' AND surname = 'Hollow'
) LIMIT 1;

INSERT INTO users (name, surname)
SELECT * FROM (SELECT 'Gabriel', 'Ultrakill') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Gabriel' AND surname = 'Ultrakill'
) LIMIT 1;

INSERT INTO users (name, surname)
SELECT * FROM (SELECT 'Da', 'Drifta') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Da' AND surname = 'Drifta'
) LIMIT 1;

INSERT INTO users (name, surname)
SELECT * FROM (SELECT 'Arthur', 'Lester') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Arthur' AND surname = 'Lester'
) LIMIT 1;

INSERT INTO users (name, surname)
SELECT * FROM (SELECT 'Minos', 'Prime') AS tmp
WHERE NOT EXISTS (
    SELECT name FROM users WHERE name = 'Minos' AND surname = 'Prime'
) LIMIT 1;