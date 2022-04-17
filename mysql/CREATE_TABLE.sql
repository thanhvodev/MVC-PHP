CREATE SCHEMA GYMNASIUM;
USE GYMNASIUM;

CREATE TABLE USER (
    ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	USERNAME VARCHAR(50) ,
    PASSWORD VARCHAR(255),
    FULLNAME VARCHAR(50),
    EMAIL VARCHAR(320),
    PHONENUM VARCHAR(20),
    IMAGE TEXT,
    ADDRESS VARCHAR(150),
    PERMISSION INT CHECK (PERMISSION = 0 OR PERMISSION = 1)
);

CREATE TABLE ORDERS (
    ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    USERID int NOT NULL,
	PRODUCT_NAMES VARCHAR(255),
	STATUS_O VARCHAR(255),
	TOTAL VARCHAR(255),
	CREATED VARCHAR(255)
);

CREATE TABLE PAYMENTINFO(
    ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    USERID int NOT NULL,
    NUMBER VARCHAR(50),
    EXPIRY_DATE DATETIME,
    FOREIGN KEY (USERID) REFERENCES USER(ID) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE PRODUCT(
	ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    NAME VARCHAR(50),
    TYPE INT CHECK (TYPE = 1 OR TYPE = 2),
    DESCRIPTION TEXT
);

CREATE TABLE PRODUCTIMAGE(
	ID INT UNSIGNED,
    IMAGE VARCHAR(255),
    PRIMARY KEY (ID, IMAGE),
    FOREIGN KEY (ID) REFERENCES PRODUCT(ID) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE PRODUCTCATEGORY(
	ID INT UNSIGNED,
    CATEGORY VARCHAR(20),
    PRICE INT,
    QUANTITY INT UNSIGNED,
    PRIMARY KEY (ID, CATEGORY),
    FOREIGN KEY (ID) REFERENCES PRODUCT(ID) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE ORDERBILL(
	ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    USERID int NOT NULL,
    USERNAME VARCHAR(50), 
    TIMESTAMP DATETIME,
    ADDRESS VARCHAR(150), 
    PAYMENT_METHOD INT CHECK (PAYMENT_METHOD=1 OR PAYMENT_METHOD=2 OR PAYMENT_METHOD=3),
    FOREIGN KEY (USERID) REFERENCES USER(ID) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE ORDERITEM(
	ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    USERID int NOT NULL,
	ORDERID INT UNSIGNED,
    PRODUCTID INT UNSIGNED,
    USERNAME VARCHAR(50), 
    QUANTITY INT UNSIGNED,
    FOREIGN KEY (ORDERID) REFERENCES ORDERBILL(ID) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (USERID) REFERENCES USER(ID) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE FEEDBACK(
	ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    USERID int NOT NULL,
    PRODUCTID INT UNSIGNED,
    USERNAME VARCHAR(50), 
    TIMESTAMP DATETIME,
    RATING INT CHECK (RATING >= 1 AND RATING <= 5),
    CONTENT TEXT,
    FOREIGN KEY (PRODUCTID) REFERENCES PRODUCT(ID) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (USERID) REFERENCES USER(ID) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE EVENT(
	ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    TITLE VARCHAR(255),
    IMAGE TEXT,
    CONTENT TEXT,
    TIMESTAMP DATETIME,
    WRITER VARCHAR(50)
);

CREATE TABLE BLOG(
	ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    TITLE VARCHAR(255),
    IMAGE TEXT,
    CONTENT TEXT,
    TIMESTAMP DATETIME,
    WRITER VARCHAR(50)
);