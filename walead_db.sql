-- Création de la base de données
CREATE DATABASE IF NOT EXISTS walead_db 
DEFAULT CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

USE walead_db;

-- Table utilisateurs
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    whatsapp VARCHAR(20) NOT NULL,
    pays VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    pseudo VARCHAR(50) UNIQUE NOT NULL,
    verification_token VARCHAR(64),
    reset_token VARCHAR(64),
    reset_expires DATETIME,
    is_verified BOOLEAN DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Table des connexions
CREATE TABLE connections (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    contact_id INT NOT NULL,
    connection_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    status ENUM('pending', 'accepted', 'rejected') DEFAULT 'pending',
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (contact_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Index pour optimisation
CREATE INDEX idx_email ON users(email);
CREATE INDEX idx_pseudo ON users(pseudo);
CREATE INDEX idx_whatsapp ON users(whatsapp);