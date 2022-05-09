CREATE DATABASE carRentalDB;

USE carRentalDB;

CREATE TABLE office(
office_id int ,
city VARCHAR(20) NOT NULL,
`location` VARCHAR(20) NOT NULL,
PRIMARY key (office_id));

CREATE TABLE car (
plate_number int,
brand VARCHAR(20) NOT NULL,
`type` VARCHAR(20) NOT NULL,
model VARCHAR(20) NOT NULL,
`year` int NOT NULL,
transmission CHAR NOT NULL,
color VARCHAR(20) NOT NULL,
price int NOT NULL,
seats int NOT NULL,
`state` CHAR NOT NULL,
insurance int NOT NULL,
`image` VARCHAR(100) NOT NULL,
office_id int,
PRIMARY key (plate_number),
FOREIGN key (office_id) REFERENCES office(office_id));

CREATE TABLE customer(
customer_id int Auto_Increment,
SSN CHAR(14) NOT NULL,
fname VARCHAR(20) NOT NULL,
lname VARCHAR(20) NOT NULL,
phone CHAR(11) NOT NULL,
email VARCHAR(100) NOT NULL,
`password` VARCHAR(225) NOT NULL,
reg_date timestamp default current_timestamp,
sex CHAR NOT NULL,
birth_date date NOT NULL,
`address` varchar(100) NOT NULL,
PRIMARY KEY (customer_id));


CREATE TABLE reservation(
reservation_id INT Auto_Increment,    
customer_id int,
plate_number int,
start_date date NOT NULL,
end_date date NOT NULL,
total_cost int NOT NULL,
reserv_date timestamp default current_timestamp,
cash_date date,
PRIMARY key (reservation_id),
FOREIGN KEY (customer_id) REFERENCES customer (customer_id),
FOREIGN KEY (plate_number) REFERENCES car(plate_number));


CREATE TABLE admin(
admin_id int Auto_Increment,
email VARCHAR(100) NOT NULL,
`password` VARCHAR(225) NOT NULL,
fname VARCHAR(20) NOT NULL,
lname VARCHAR(20) NOT NULL,
PRIMARY KEY (admin_id));


CREATE TABLE service (
plate_number int,
`start_date` date,
end_date date,
PRIMARY KEY (plate_number,`start_date`),
FOREIGN KEY (plate_number) REFERENCES car(plate_number));
