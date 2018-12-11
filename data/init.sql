use area51_checkin;

CREATE TABLE tickets (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	vin VARCHAR(17) NOT NULL,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	year INT(4),
	location VARCHAR(50),
	status VARCHAR(15),
	date TIMESTAMP
);