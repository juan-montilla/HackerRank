CREATE DATABASE IF NOT EXIST sql_test;


CREATE TABLE parent (
  id int NOT NULL,
  name varchar(100),
  PRIMARY KEY(id)
);

CREATE TABLE child (
  id int NOT NULL,
  name varchar(100),
  parent_id int NULL NULL,
  PRIMARY KEY(id),
  FOREIGN KEY (parent_id) REFERENCES  parent(id)
);


INSERT INTO parent (name) VALUES('john');
INSERT INTO parent (name) VALUES('mary');
INSERT INTO parent (name) VALUES('daniel');
INSERT INTO parent (name) VALUES('ezequias');




