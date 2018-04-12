#DB INSERT
INSERT INTO bGroup(idGroup, groupCreator, groupMajor, groupSubjectClass, groupNumParticipants, isPrivate, isFull)
VALUES ();

#FOR INSERTING THE ID WE RANDOMLY GENERATE FOR THE GROUP
#REMEMBER IT SHOULD BE UNIQUE, SINCE IT IS PRIMARY KEY
#varchar 16
SELECT * FROM bGroup WHERE idGroup;

#NAME OF GROUP CREATOR
#varchar 45
SELECT * FROM bGroup WHERE groupCreator;

#GROUP MAJOR
#varchar 45
SELECT * FROM bGroup WHERE groupMajor;

#SUBJECT FOR GROUP
#varchar 45
SELECT * FROM bGroup WHERE groupSubjectClass;

#NUMBER OF PARTICIPANTS
#int 45
SELECT * FROM bGroup WHERE groupNumParticipants;

 #IS GROUP PRIVATE
 #BINARY
 SELECT * FROM bGroup WHERE isPrivate;

 #IS GROUP FULL
 #BINARY
 SELECT * FROM bGroup WHERE isFull;
