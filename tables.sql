CREATE TABLE users(
	user_id int(11) NOT null AUTO_INCREMENT PRIMARY KEY,
	user_first varchar(256) NOT null,
	user_last varchar(256) NOT null,
	user_email varchar(256) NOT null,
	user_uid varchar(256) NOT null,
	user_pwd varchar(256) NOT null,
);


CREATE TABLE registration (
	id int(11) NOT null AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(256) NOT null,
    lastname varchar(256) NOT null,
    phonenumber varchar(256) NOT null,
    email varchar(256) NOT null,
    address varchar(500) NOT null,
    eventtype varchar(256) NOT null,
    eventdate varchar(256) NOT null,
    eventtime varchar(256) NOT null,
    guests varchar(10) NOT null,
    venue varchar(256) NOT null,
    music varchar(256) NOT null,
    photography varchar(256) NOT null,
    catering varchar(256) NOT null,
    customization varchar(500)
);
