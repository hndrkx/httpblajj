CREATE DATABASE IF NOT EXISTS webdb;

use webdb;

CREATE TABLE car (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	brand VARCHAR(30) NOT NULL,
	model VARCHAR(30) NOT NULL
);
