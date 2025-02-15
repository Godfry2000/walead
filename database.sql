CREATE DATABASE IF NOT EXISTS walead_db;
USE walead_db;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    whatsapp VARCHAR(20) NOT NULL,
    pays VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    pseudo VARCHAR(50) UNIQUE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE connections (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    contact_id INT,
    connection_date DATETIME,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (contact_id) REFERENCES users(id)
);