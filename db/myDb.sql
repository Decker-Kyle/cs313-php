CREATE DATABASE to_do;

\c to_do

CREATE TABLE todo_user
(
	id SERIAL NOT NULL PRIMARY KEY,
	username VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL,
	display_name VARCHAR(100) NOT NULL
);


CREATE TABLE todo_note
(
	id SERIAL NOT NULL PRIMARY KEY,
	user_id INT NOT NULL REFERENCES todo_user(id),
	title VARCHAR(100) NOT NULL,
	note_text TEXT NOT NULL,
	date_begin VARCHAR(100) NOT NULL,
	date_end VARCHAR(100),
	time_begin VARCHAR(100) NOT NULL,
	time_end VARCHAR(100),
	time_type INT NOT NULL,
	completed BOOLEAN NOT NULL
);