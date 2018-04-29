/*
Create Database
*/
CREATE DATABASE bubbleDB;

USE bubbleDB;


/*
Create table for users
*/
CREATE TABLE bUser (
idUsername VARCHAR(16) NOT NULL PRIMARY KEY,
userFullname VARCHAR(45) NOT NULL,
userEmail VARCHAR(255) NOT NULL,
userPassword VARCHAR(255) NOT NULL,
userMajor VARCHAR(45),
user_create_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

/*
Create table for groups
*/
CREATE TABLE bGroup (
idGroup INT(16) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
groupCreator VARCHAR(45) NOT NULL,
groupMajor VARCHAR(45) NOT NULL,
groupSubjectClass VARCHAR(255) NOT NULL,
groupNumParticipants INT(45) NOT NULL,
isPrivate BINARY NOT NULL, #isPrivate: Yes or No
isFull BINARY NOT NULL, #isFull: Yes or No
group_create_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

/*
Create table for replies in forum
*/
CREATE TABLE replies (
  reply_id int(3) UNSIGNED NOT NULL,
  topic_id int(3) UNSIGNED NOT NULL,
  author varchar(16) NOT NULL,
  comment text NOT NULL,
  date_posted date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(8) UNSIGNED NOT NULL,
  `title` varchar(128) NOT NULL,
  `author` varchar(16) NOT NULL,
  `content` text NOT NULL,
  `date_posted` date NOT NULL,
  `views` int(5) UNSIGNED NOT NULL,
  `replies` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`reply_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`);
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `reply_id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`topic_id`);
COMMIT;


/*
Create join table
*/
CREATE TABLE bJoin (
    idGroup int(16) UNSIGNED NOT NULL,
    idUsername varchar(16) NOT NULL,
    join_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (join_time),
    FOREIGN KEY (idGroup) REFERENCES bgroup(idGroup),
    FOREIGN KEY (idUsername) REFERENCES buser(idUsername)
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
