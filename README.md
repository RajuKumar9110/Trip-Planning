# Trip-Planning

#database sql query 



CREATE DATABASE IF NOT EXISTS trip;
USE trip;

CREATE TABLE trip (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(10) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    other TEXT,
    dt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);




