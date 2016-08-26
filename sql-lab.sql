DROP DATABASE IF EXISTS dude;
CREATE database dude;
USE dude;
CREATE TABLE users
		(
		id int(3) NOT NULL AUTO_INCREMENT,
		username varchar(20) NOT NULL,
		password varchar(20) NOT NULL,
		PRIMARY KEY (id)
		);
CREATE TABLE emails
		(
		id int(3)NOT NULL AUTO_INCREMENT,
		email_id varchar(30) NOT NULL,
		PRIMARY KEY (id)
		);




INSERT INTO dude.users (id, username, password) VALUES ('1', 'rajesh', 'dai'), ('2', 'bhuwan', 'bhuwankc'), ('3', 'dayahang', 'rai'), ('4', 'saugat', 'malla'), ('5', 'haribansha', 'acharya'), ('6', 'madankrishna', 'shrestha'), ('7', 'surajsingh', 'thakuri'), ('8', 'sitaram', 'kattel'), ('9', 'khagendra', 'lamichhane'), ('10', 'bipin', 'karki')";
	

INSERT INTO `security`.`emails` (id, email_id) VALUES ('1', 'Dumb@dhakkan.com'), ('2', 'Angel@iloveu.com'), ('3', 'Dummy@dhakkan.local'), ('4', 'secure@dhakkan.local'), ('5', 'stupid@dhakkan.local'), ('6', 'superman@dhakkan.local'), ('7', 'batman@dhakkan.local'), ('8', 'admin@dhakkan.com');



INSERT INTO `dude`.`emails` (id, email_id) VALUES ('1', 'rajesh@dai.com'), ('2', 'bhuwan@kc.com'), ('3', 'dayahang@rai.com'), ('4', 'saugat@malla.com'), ('5', 'haribansha@acharya.com'), ('6', 'madankrishna@shrestha.com'), ('7', 'suraj@singh.com'), ('8', 'sitaram@kattel.com'),('9','khagendra@lamichhane.com'),('10','bipin@karki.com')";
	


