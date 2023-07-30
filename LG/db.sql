drop database automation;
create database automation;
use automation;


CREATE TABLE form_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    zipcode VARCHAR(10) NOT NULL,
    option VARCHAR(50) NOT NULL,
    accept TINYINT(1) NOT NULL,
    ip_address VARCHAR(45) NOT NULL,
    submission_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
