use area51_checkin;

CREATE TABLE tickets (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	vin VARCHAR(17) NOT NULL,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	year INT(4),
	model VARCHAR(50) NOT NULL,
	make VARCHAR(50) NOT NULL,
	due_date VARCHAR(50),
	location VARCHAR(50),
	status VARCHAR(15),
	image1 longblob NOT NULL,
	image2 longblob NOT NULL,
	image3 longblob NOT NULL,
	image4 longblob NOT NULL,
	date TIMESTAMP,
	phone INT(10),
	description TEXT NOT NULL,
	oilchange VARCHAR(5),
	fullservice VARCHAR(5),      
	otherservice VARCHAR(5),
	otherservicedescription TEXT,
	fronttirechange VARCHAR(5),
	reartirechange VARCHAR(5),
	audiotroubleshooting VARCHAR(5),
	otheraudiodescription TEXT,
	fullaudiosystem VARCHAR(5),
	audioupgrade VARCHAR(5)
);

CREATE TABLE images (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	image1 longblob NOT NULL,
	created datetime,
	rand INT(100)
);

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);