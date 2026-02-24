
CREATE TABLE IF NOT EXISTS cont(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(64),
    descr VARCHAR(255),

    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTSnatn(
    id INT NOT NULL AUTO_INCREMENT,
    id_cont INT NOT NULL,

    name VARCHAR(64),
    descr VARCHAR(255),

    PRIMARY KEY(id),
    FOREIGN KEY(id_cont) REFERENCES cont(id)
);

CREATE TABLE IF NOT EXISTS regn(
    id INT NOT NULL AUTO_INCREMENT,
    id_natn INT NOT NULL,
    name VARCHAR(64),
    descr VARCHAR(255),

    PRIMARY KEY(id),
    FOREIGN KEY(id_natn) REFERENCES natn(id)
);

CREATE TABLE IF NOT EXISTS prov(
    id INT NOT NULL AUTO_INCREMENT,
    id_regn INT NOT NULL,
    name VARCHAR(64),
    descr VARCHAR(255),

    PRIMARY KEY(id),
    FOREIGN KEY(id_regn) REFERENCES regn(id)
);

CREATE TABLE IF NOT EXISTS city(
    id INT NOT NULL AUTO_INCREMENT,
    id_prov INT NOT NULL,
    name VARCHAR(64),
    descr VARCHAR(255),

    PRIMARY KEY(id),
    FOREIGN KEY(id_prov) REFERENCES prov(id)
);

CREATE TABLE IF NOT EXISTS loct(
    id INT NOT NULL AUTO_INCREMENT,
    id_city INT NOT NULL,
    address VARCHAR(128),
    descr VARCHAR(255),

    PRIMARY KEY(id),
    FOREIGN KEY(id_city) REFERENCES city(id)
);


CREATE TABLE IF NOT EXISTS curr(
    id VARCHAR(3) NOT NULL,
    descr VARCHAR(255),

    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS sex(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(64),
    descr VARCHAR(255),

    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS seas(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255),

    PRIMARY KEY (id)
);










CREATE TABLE IF NOT EXISTS apat(
    id INT NOT NULL AUTO_INCREMENT,
    id_loct INT NOT NULL,
    
    stars INT NOT NULL,
    n_roms INT NOT NULL,
    descr VARCHAR(255),

    PRIMARY KEY (id),
    FOREIGN KEY (id_loct) REFERENCES loct(id)
);

CREATE TABLE IF NOT EXISTS roms_stat(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255),

    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS roms(
    id INT NOT NULL AUTO_INCREMENT,
    id_apat INT NOT NULL,
    id_roms_stat INT NOT NULL,
    
    beds INT NOT NULL,
    rom_num INT NOT NULL,
    descr VARCHAR(255),

    PRIMARY KEY (id),
    FOREIGN KEY (id_apat) REFERENCES apat(id),
    FOREIGN KEY (id_roms_stat) REFERENCES roms_stat(id)
);


CREATE TABLE IF NOT EXISTS trip_catg(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255),

    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS trip(
    id INT NOT NULL AUTO_INCREMENT,
    id_loct INT NOT NULL,
    id_curr VARCHAR(3) NOT NULL,
    id_apat INT NOT NULL,
    id_trip_catg INT NOT NULL,
    id_seas INT NOT NULL,

    name VARCHAR(64) NOT NULL,
    price DECIMAL(10, 2),
    event_start TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    event_end TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    descr VARCHAR(255),

    PRIMARY KEY (id),
    FOREIGN KEY (id_loct) REFERENCES loct(id),
    FOREIGN KEY (id_curr) REFERENCES curr(id),
    FOREIGN KEY (id_apat) REFERENCES apat(id),
    FOREIGN KEY (id_trip_catg) REFERENCES trip_catg(id),
    FOREIGN KEY (id_seas) REFERENCES seas(id)
);

CREATE TABLE IF NOT EXISTS user(
    id INT NOT NULL AUTO_INCREMENT,
    id_loct INT NOT NULL,
    id_sex INT NOT NULL,
    
    first_name VARCHAR(64) NOT NULL,
    last_name VARCHAR(64) NOT NULL,
    username VARCHAR(64) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(14) NOT NULL,
    cod_fisc VARCHAR(24) NOT NULL,
    
    PRIMARY KEY(id),
    FOREIGN KEY(id_loct) REFERENCES loct(id),
    FOREIGN KEY(id_sex) REFERENCES sex(id),
    
    CONSTRAINT uq_user_username UNIQUE (username),
    CONSTRAINT uq_user_email UNIQUE (email),
    CONSTRAINT uq_user_phone UNIQUE (phone),
    CONSTRAINT uq_user_cod_fisc UNIQUE (cod_fisc)
);

CREATE TABLE IF NOT EXISTS trip_user_stat(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255),

    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS trip_user(
    id INT NOT NULL AUTO_INCREMENT,
    id_trip INT NOT NULL,
    id_user INT NOT NULL,
    id_curr VARCHAR(3) NOT NULL,
    id_trip_user_stat INT NOT NULL,
    
    trip_start TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    trip_end TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    
    PRIMARY KEY (id),
    FOREIGN KEY (id_trip) REFERENCES trip(id),
    FOREIGN KEY (id_user) REFERENCES user(id),
    FOREIGN KEY (id_curr) REFERENCES curr(id),
    FOREIGN KEY (id_trip_user_stat) REFERENCES trip_user_stat(id)
);

CREATE TABLE IF NOT EXISTS path(
    id INT NOT NULL AUTO_INCREMENT,
    id_trip INT NOT NULL,
    
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255),

    PRIMARY KEY (id),
    FOREIGN KEY (id_trip) REFERENCES trip(id)
);


CREATE TABLE IF NOT EXISTS stag(
    id INT NOT NULL AUTO_INCREMENT,
    id_loct_start INT NOT NULL,
    id_loct_end INT NOT NULL,

    deration INT NOT NULL,
    descr VARCHAR(255),

    PRIMARY KEY (id),
    FOREIGN KEY (id_loct_start) REFERENCES loct(id),
    FOREIGN KEY (id_loct_end) REFERENCES loct(id)
);

CREATE TABLE IF NOT EXISTS path_stag(
    id INT NOT NULL AUTO_INCREMENT,
    id_path INT NOT NULL,
    id_stag INT NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (id_path) REFERENCES path(id),
    FOREIGN KEY (id_stag) REFERENCES stag(id)
)

