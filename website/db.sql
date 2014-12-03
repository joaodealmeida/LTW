CREATE TABLE USERS (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	username VARCHAR(20),
	password VARCHAR(255)
);

CREATE TABLE POLL (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	user_id INTEGER REFERENCES USERS,
	question VARCHAR(255)
);

CREATE TABLE ANSWERS (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	text VARCHAR(255),
	poll_id INTEGER REFERENCES POLL
);

CREATE TABLE CHOICE (
	poll_id INTEGER REFERENCES POLL,
	user_id INTEGER REFERENCES USERS,
	answer_id INTEGER REFERENCES ANSWERS,
	PRIMARY KEY (poll_id, user_id)
);

CREATE TABLE IMAGES (
	id INTEGER PRIMARY KEY
);

INSERT INTO users (username,password) VALUES ('username', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');
INSERT INTO poll (user_id,question) VALUES ('1','De que gostas mais ');
INSERT INTO answers (text,poll_id) VALUES ('Bananas',1);
INSERT INTO answers (text,poll_id) VALUES ('Laranjas',1);
INSERT INTO answers (text,poll_id) VALUES ('Cenouras',1);
INSERT INTO poll (user_id,question) VALUES ('1','Votacao 2 ');
INSERT INTO poll (user_id,question) VALUES ('1','Votacao tres');
INSERT INTO poll (user_id,question) VALUES ('1','Votacao 4 ');



