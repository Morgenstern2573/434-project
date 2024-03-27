-- Login table
CREATE TABLE LOGIN (
    UserEmail VARCHAR(30) NOT NULL,
    UserPassword VARCHAR(30) NOT NULL
);

-- Login details
INSERT INTO LOGIN(UserEmail, UserPassword) VALUES ('iyekolobusayomi@gmail.com', 'busayo');

-- CUSTOMERS table
CREATE TABLE CUSTOMERS (
    CustomerID INT PRIMARY KEY AUTO_INCREMENT,
    CustomerName VARCHAR(50) NOT NULL,
    CustomerPhone VARCHAR(20) NOT NULL,
    Sex VARCHAR(25)
);

--  FAMILY_ACCOUNTS table with the CustomerID as a foreign key
CREATE TABLE FAMILY_ACCOUNTS (
    FamilyName VARCHAR(50) PRIMARY KEY ,
    CustomerName VARCHAR(50) NOT NULL,
    CustomerID INT NOT NULL,
    FOREIGN KEY (CustomerID) REFERENCES CUSTOMERS(CustomerID),
    CONSTRAINT fk_customer_id FOREIGN KEY (CustomerID) REFERENCES CUSTOMERS(CustomerID),
    CONSTRAINT fk_customer_name UNIQUE (CustomerID)
);

--  MEASUREMENTS table
CREATE TABLE MEASUREMENTS (
	MeasurementID INT PRIMARY KEY AUTO_INCREMENT, 
    CustomerID INT NOT NULL,
    CustomerName VARCHAR(50) NOT NULL,
    Bust INT(11),
    H_L INT(11),
    F_L INT(11),
    U_B INT(11),
    Shoulder INT(11),
    Waist INT(11),
    H_S INT(11),
    Hips INT(11),
    Crotch INT(11),
    Chest INT(11),
    FOREIGN KEY (CustomerID) REFERENCES CUSTOMERS(CustomerID),
    CONSTRAINT fk_measurements_customer_id FOREIGN KEY (CustomerID) REFERENCES CUSTOMERS(CustomerID),
    CONSTRAINT fk_measurements_customer_name UNIQUE (CustomerID)
);