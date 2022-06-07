create database user_db;
use user_db;

CREATE TABLE user_form (
  id int NOT NULL,
  name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  user_type varchar(255) NOT NULL DEFAULT 'user',
  password varchar(255) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO user_db.`user_form` (id, name, email, user_type, password) VALUES ('1', 'admin', 'admin@gmail.com', 'admin', 'admin');