

CREATE TABLE Users (
	UserID INTEGER AUTO_INCREMENT,
	display_name char(15) NOT NULL,
	password char(100) NOT null,
	first_name char(45) NOT NULL,
   	last_name char(45) NOT NULL,
    email char(100) UNIQUE not null,
	gENDer char(1),
	phone_number INTEGER UNIQUE not null,
    address char(100) NOT NULL,
	country char(100),
	age INTEGER,
	PRIMARY KEY(UserID)
);

##IMPLEMENT ISA HIERACHY HERE

CREATE TABLE Owner (
    oid INTEGER,
    FOREIGN KEY (oid) REFERENCES Users(UserID)
);

CREATE TABLE CareTaker(
	cid INTEGER,
    FOREIGN KEY (cid) REFERENCES Users(UserID)
);


CREATE TABLE Pets(
	pid INTEGER AUTO_INCREMENT,
	pet_name char(100),
	pet_type char(100),
    oid INTEGER,
	PRIMARY KEY (pid),
	FOREIGN KEY (oid) REFERENCES Owner(oid)
);

CREATE TABLE Service (
	sid INTEGER AUTO_INCREMENT,
	cid INTEGER,
	oid INTEGER,
	stype text,
	ptype text,
	minbid INTEGER NOT NULL,
	pid INTEGER,
	fromdate TEXT, 
	todate TEXT,
	availability boolean, 
	completed boolean,
	PRIMARY KEY (sid),
    FOREIGN KEY (pid) REFERENCES Pets(pid),
	FOREIGN KEY (cid) REFERENCES CareTaker(cid),
	FOREIGN KEY (oid) REFERENCES Owner(oid)
);

CREATE TABLE History(
	cid INTEGER,
	sid INTEGER,
    pid INTEGER,
	name text, 
	FOREIGN KEY (sid) REFERENCES Service(sid),
	FOREIGN KEY (cid) REFERENCES service(cid),
    FOREIGN KEY (pid) REFERENCES Service(pid)
);
Create Table CareTakerReviews(
    crid INTEGER AUTO_INCREMENT PRIMARY KEY,
	review TEXT,
	cid INTEGER,
	rid INTEGER,
	FOREIGN KEY (cid) REFERENCES CareTaker(cid),
	FOREIGN KEY (rid) REFERENCES Owner(oid)
);

create Table PetReview(
	prid INTEGER AUTO_INCREMENT PRIMARY KEY,
	pid Integer,
	cid integer,
	review TEXT,
	FOREIGN KEY (pid) REFERENCES Pets(pid),
	FOREIGN KEY (cid) REFERENCES CareTaker(cid)
);