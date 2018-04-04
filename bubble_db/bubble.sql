CREATE DATABASE bubbleDB;

USE bubbleDB;

CREATE TABLE bUser (
idUsername 			VARCHAR(16) 		NOT NULL 		PRIMARY KEY,
userFullname 			VARCHAR(45) 		NOT NULL,
userEmail 				VARCHAR(255) 		NOT NULL,
userPassword 		VARCHAR(32) 		NOT NULL,
userMajor				VARCHAR(45),
user_create_time	TIMESTAMP			DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE bGroup (
idGroup 							INT(16) 						NOT NULL 		PRIMARY KEY,
groupCreator					VARCHAR(45)			NOT NULL,
groupMajor 						VARCHAR(45) 			NOT NULL,
groupSubjectClass 			VARCHAR(255) 			NOT NULL,
groupNumParticipants 	INT(45)		 				NOT NULL,
isPrivate							BINARY 						NOT NULL, #isPrivate: Yes or No
isFull								BINARY 						NOT NULL, #isFull: Yes or No
group_create_time			TIMESTAMP				DEFAULT CURRENT_TIMESTAMP
);

/*
TESTING CODE
------------------------------
#INSERTS IN TABLE
(idUsername, userFullname, userEmail, userPassword, userMAjor) 
VALUES
("username", "Robert Gama","email@gmail.com",  "Password", "Computer Science");

SHOW tables; #SHOWS TABLES CREATED

select * from bUser; #SHOWS DATA IN TABLE

TRUNCATE TABLE bUser; #DELETES ALL DATA IN TABLE
*/
