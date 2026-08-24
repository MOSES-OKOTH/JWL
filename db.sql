CREATE DATABASE jwl;

USE jwl;

CREATE TABLE messages(id int AUTO_INCREMENT,first_name VARCHAR(50), last_name VARCHAR(50),phone_number VARCHAR(15),email VARCHAR(200), subject VARCHAR(250), message_body TEXT, timestamp DATETIME default CURRENT_TIMESTAMP(), PRIMARY KEY(id));

