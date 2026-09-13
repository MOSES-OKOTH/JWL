CREATE DATABASE jwl;

USE jwl;

CREATE TABLE messages(id int AUTO_INCREMENT,first_name VARCHAR(50), last_name VARCHAR(50),phone_number VARCHAR(15),email VARCHAR(200), subject VARCHAR(250), message_body TEXT, timestamp DATETIME default CURRENT_TIMESTAMP(), PRIMARY KEY(id));

CREATE TABLE joinees (id INT AUTO_INCREMENT, first_name VARCHAR(50), last_name VARCHAR(50), phone_number VARCHAR(20), email VARCHAR(200), program VARCHAR(200), county VARCHAR(200), timestamp DATETIME default CURRENT_TIMESTAMP(), PRIMARY KEY(id));

CREATE TABLE transactions (transactionId VARCHAR(100), phoneNumber VARCHAR(20), amount VARCHAR(20), timestamp DATETIME, referenceNumber VARCHAR(200), PRIMARY KEY(transactionId));

