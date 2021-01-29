-- CREATE SCHEMA team04;

CREATE TABLE team04.user (
 name VARCHAR(26) NOT NULL, 
 userID SERIAL NOT NULL PRIMARY KEY,
 password VARCHAR(26) NOT NULL
 );

CREATE TABLE team04.speaker (
 speakerID SERIAL NOT NULL PRIMARY KEY,
 name VARCHAR(26) NOT NULL
 );

CREATE TABLE team04.conference (
 conferenceID SERIAL NOT NULL PRIMARY KEY,
 year SMALLINT NOT NULL,
 isSpring BOOLEAN NOT NULL,
 isMorning BOOLEAN NOT NULL,
 isSaturday BOOLEAN NOT NULL,
 isWomen BOOLEAN NOT NULL,
 isMen BOOLEAN NOT NULL
);

CREATE TABLE team04.notes (
  noteID SERIAL NOT NULL PRIMARY KEY,
  userID INT NOT NULL REFERENCES team04.user(userID),
  speakerID INT NOT NULL REFERENCES team04.speaker(speakerID),
  conferenceID INT NOT NULL REFERENCES team04.conference(conferenceID),
  content TEXT NOT NULL
);

INSERT INTO team04.user (name, password) VALUES ('Dallin Oaks', 'CTR77');
INSERT INTO team04.speaker (name) VALUES ('Russell M. Nelson'), ('Henry B. Eyring'), ('Dieter F. Uchtdorf');
INSERT INTO team04.conference (year, isSpring, isMorning, isSaturday, isWomen, isMen) VALUES (2020, 0, 1, 0, 1, 0);
INSERT INTO team04.notes (userID, speakerID, conferenceID, content) VALUES 
(1, 1, 1, 'Hear Him'),
(1, 1, 1, 'Christ loves us'),
(1, 2, 1, 'Chemistry Is Awesome'), 
(1, 2, 1, 'Honor thy parents and stuff'),
(1, 3, 1, 'Two Great Commandments'), 
(1, 3, 1, 'Go to the temple more');