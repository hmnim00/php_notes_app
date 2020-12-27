CREATE DATABASE notes_app;

USE notes_app;

CREATE TABLE IF NOT EXISTS users (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(150) NOT NULL,
    password VARCHAR(50) NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS notes(
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    content TEXT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    user_id INT(11) NOT NULL
);

ALTER TABLE notes ADD CONSTRAINT notes_ibfk FOREIGN KEY (user_id) REFERENCES users (id);