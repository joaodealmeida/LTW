CREATE TABLE USERS (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	login VARCHAR(20),
	password VARCHAR(255),
);

CREATE TABLE ANSWERS (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	text VARCHAR(255),
	news_id INTEGER REFERENCES news,
	author VARCHAR,
	text VARCHAR,
);

CREATE TABLE QUESTIONS (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	text VARCHAR(255),
);

CREATE TABLE POOL (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	listed BOOLEAN,
	question_id INTEGER REFERENCES QUESTIONS,
);

CREATE TABLE POOL_ANSWER (
	pool_id INTEGER REFERENCES POOL,
	answer_id INTEGER REFERENCES ANSWERS,
);

CREATE TABLE POOL_QUESTION (
	pool_id INTEGER REFERENCES POOL,
	question_id INTEGER REFERENCES QUESTIONS,
);
