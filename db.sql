create DATABASE store;

use store;

create table person (
    ID int(8) AUTO_INCREMENT,
    firstName varchar(255),
    lastName varchar(255),
    age int(8),
    mail varchar(255) unique,
    address varchar(255),
    city varchar(255),
    zipCode int(8),
    password varchar(255),
    primary key(ID)
);

create table admin (
    ID int(8) AUTO_INCREMENT,
    username varchar(255) unique,
    mail varchar(255) unique,
    password varchar(255),
    primary key(ID)
    );

    create table products(
    ID int(8) AUTO_INCREMENT,
    name varchar(255) unique,
    price int(8),
    image varchar(255),
    details TEXT,
    primary key(ID)
    );