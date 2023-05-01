CREATE DATABASE Redlock;
USE Redlock;
CREATE TABLE users (
  ID INT NOT NULL AUTO_INCREMENT,
  Nama VARCHAR(255) NOT NULL,
  Alamat VARCHAR(255) NOT NULL,
  Jabatan VARCHAR(255) NOT NULL,
  PRIMARY KEY (ID)
);
INSERT into users values
("1",  "ryan", "jakbar", "kapten"),
("2", "Anton", "jaksel", "colead"),
("3", "william", "jakut", "humas"),
("4", "bryan", "tanggerang", "member");
