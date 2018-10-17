CREATE TABLE IF NOT EXISTS tickets (
    record_number INT AUTO_INCREMENT,
    firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	vin INT(17),
    start_date DATE,
    due_date DATE,
    check_in_date DATE,
    status TINYINT NOT NULL,
    priority TINYINT NOT NULL,
    description TEXT,
    PRIMARY KEY (record_number)
) 