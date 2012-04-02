CREATE TABLE places (
id int(11) NOT NULL auto_increment,
date_created datetime NOT NULL,
date_updated datetime NOT NULL,
name varchar(100) NOT NULL,
address1 varchar(100) default NULL,
address2 varchar(100) default NULL,
address3 varchar(100) default NULL,
town varchar(75) default NULL,
county varchar(75) default NULL,
postcode varchar(30) default NULL,
country varchar(75) default NULL,
PRIMARY KEY (`id`)
);