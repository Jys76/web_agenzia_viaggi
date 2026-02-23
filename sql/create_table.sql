
CREATE TABLE cont(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(64),
    descr VARCHAR(255),

    PRIMARY KEY(id)
)

CREATE TABLE natn(
    id INT NOT NULL AUTO_INCREMENT,
    id_cont INT NOT NULL,

    name VARCHAR(64),
    descr VARCHAR(255),

    PRIMARY KEY(id),
    FOREIGN KEY(id_cont) REFERENCES cont(id)
)

CREATE TABLE regn(
    id INT NOT NULL AUTO_INCREMENT,
    id_natn INT NOT NULL,
    name VARCHAR(64),
    descr VARCHAR(255),

    PRIMARY KEY(id),
    FOREIGN KEY(id_natn) REFERENCES natn(id)
)

CREATE TABLE prov(
    id INT NOT NULL AUTO_INCREMENT,
    id_regn INT NOT NULL,
    name VARCHAR(64),
    descr VARCHAR(255),

    PRIMARY KEY(id),
    FOREIGN KEY(id_regn) REFERENCES regn(id)
)

CREATE TABLE city(
    id INT NOT NULL AUTO_INCREMENT,
    id_prov INT NOT NULL,
    name VARCHAR(64),
    descr VARCHAR(255),

    PRIMARY KEY(id),
    FOREIGN KEY(id_prov) REFERENCES prov(id)
)

CREATE TABLE loct(
    id INT NOT NULL AUTO_INCREMENT,
    id_city INT NOT NULL,
    address VARCHAR(128),
    descr VARCHAR(255),

    PRIMARY KEY(id),
    FOREIGN KEY(id_city) REFERENCES city(id)
)






CREATE TABLE curr(
    id VARCHAR(3) NOT NULL,
    descr VARCHAR(255),

    PRIMARY KEY(id)
)

CREATE TABLE sex(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(64),
    descr VARCHAR(255),

    PRIMARY KEY(id)
)

CREATE TABLE user(
    id INT NOT NULL AUTO_INCREMENT,
    id_loct INT NOT NULL,
    id_sex INT NOT NULL,
    
    first_name VARCHAR(64) NOT NULL,
    last_name VARCHAR(64) NOT NULL,
    username VARCHAR(64) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(14) NOT NULL,
    
    CONSTRAINT 
)
