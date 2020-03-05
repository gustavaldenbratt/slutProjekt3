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

create table orders(
                       id int(8) primary key auto_increment,
                       customer_id int(8),
                       foreign key (customer_id) references person(ID),
                       created varchar(32),
                       shipped varchar(32)
);

create table order_details(
                              order_id int(8),
                              foreign key (order_id) references orders(id),
                              product_id int(8),
                              foreign key (product_id) references products(prodID),
                            --  product_name varchar(255),
                             --foreign key (product_name) references products(name),
                            --  product_price int(8),
                            --  foreign key (product_price) references products(price),
                              quantity int(8)
);

create table contact(
    id int(8) primary key auto_increment,
    name varchar(255),
    email varchar(255),
    subject varchar(255),
    message text
);
