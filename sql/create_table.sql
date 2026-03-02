
CREATE TABLE IF NOT EXISTS cont(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(64),
    descr VARCHAR(255),

    CONSTRAINT pk_cont_id PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS natn(
    id INT NOT NULL AUTO_INCREMENT,
    id_cont INT NOT NULL,

    name VARCHAR(64),
    descr VARCHAR(255),

    CONSTRAINT pk_natn_id PRIMARY KEY(id),
    CONSTRAINT fk_natn_id_cont FOREIGN KEY(id_cont) REFERENCES cont(id)
);

CREATE TABLE IF NOT EXISTS regn(
    id INT NOT NULL AUTO_INCREMENT,
    id_natn INT NOT NULL,
    name VARCHAR(64),
    descr VARCHAR(255),

    CONSTRAINT pk_regn_id PRIMARY KEY(id),
    CONSTRAINT fk_regn_id_natn FOREIGN KEY(id_natn) REFERENCES natn(id)
);

CREATE TABLE IF NOT EXISTS prov(
    id INT NOT NULL AUTO_INCREMENT,
    id_regn INT NOT NULL,
    name VARCHAR(64),
    descr VARCHAR(255),

    CONSTRAINT pk_prov_id PRIMARY KEY(id),
    CONSTRAINT fk_prov_id_regn FOREIGN KEY(id_regn) REFERENCES regn(id)
);

CREATE TABLE IF NOT EXISTS city(
    id INT NOT NULL AUTO_INCREMENT,
    id_prov INT NOT NULL,
    name VARCHAR(64),
    descr VARCHAR(255),

    CONSTRAINT pk_city_id PRIMARY KEY(id),
    CONSTRAINT fk_city_id_prov FOREIGN KEY(id_prov) REFERENCES prov(id)
);

CREATE TABLE IF NOT EXISTS loct(
    id INT NOT NULL AUTO_INCREMENT,
    id_city INT NOT NULL,
    address VARCHAR(128),
    descr VARCHAR(255),

    CONSTRAINT pk_loct_id PRIMARY KEY(id),
    CONSTRAINT fk_lock_id_city FOREIGN KEY(id_city) REFERENCES city(id)
);


CREATE TABLE IF NOT EXISTS curr(
    id VARCHAR(3) NOT NULL,
    descr VARCHAR(255),

    CONSTRAINT pk_curr_id PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS sex(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(64),
    descr VARCHAR(255),

    CONSTRAINT pk_sex_id PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS seas(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255),

    CONSTRAINT pk_seas_id PRIMARY KEY (id)
);










CREATE TABLE IF NOT EXISTS apat(
    id INT NOT NULL AUTO_INCREMENT,
    id_loct INT NOT NULL,
    
    stars INT NOT NULL,
    n_roms INT NOT NULL,
    descr VARCHAR(255),

    CONSTRAINT pk_apat_id PRIMARY KEY (id),
    CONSTRAINT fk_apat_id_loct FOREIGN KEY (id_loct) REFERENCES loct(id)
);

CREATE TABLE IF NOT EXISTS roms_stat(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255),

    CONSTRAINT pk_roms_stat_id PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS roms(
    id INT NOT NULL AUTO_INCREMENT,
    id_apat INT NOT NULL,
    id_roms_stat INT NOT NULL,
    
    beds INT NOT NULL,
    rom_num INT NOT NULL,
    descr VARCHAR(255),

    CONSTRAINT pk_roms_id PRIMARY KEY (id),
    CONSTRAINT fk_roms_id_apat FOREIGN KEY (id_apat) REFERENCES apat(id),
    CONSTRAINT fk_roms_id_roms_stat FOREIGN KEY (id_roms_stat) REFERENCES roms_stat(id)
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

    CONSTRAINT pk_trip_id PRIMARY KEY (id),
    CONSTRAINT fk_trip_id_loct FOREIGN KEY (id_loct) REFERENCES loct(id),
    CONSTRAINT fk_trip_id_curr FOREIGN KEY (id_curr) REFERENCES curr(id),
    CONSTRAINT fk_trip_id_apat FOREIGN KEY (id_apat) REFERENCES apat(id),
    CONSTRAINT fk_trip_id_trip_catg FOREIGN KEY (id_trip_catg) REFERENCES trip_catg(id),
    CONSTRAINT fk_trip_id_seas FOREIGN KEY (id_seas) REFERENCES seas(id)
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
    
    CONSTRAINT pk_user_id PRIMARY KEY(id),
    CONSTRAINT fk_user_id_loct FOREIGN KEY(id_loct) REFERENCES loct(id),
    CONSTRAINT fk_user_id_sex FOREIGN KEY(id_sex) REFERENCES sex(id),
    
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
    
    CONSTRAINT pk_trip_user_id PRIMARY KEY (id),
    CONSTRAINT fk_trip_user_id_trip FOREIGN KEY (id_trip) REFERENCES trip(id),
    CONSTRAINT fk_trip_user_id_user FOREIGN KEY (id_user) REFERENCES user(id),
    CONSTRAINT fk_trip_user_id_curr FOREIGN KEY (id_curr) REFERENCES curr(id),
    CONSTRAINT fk_trip_user_id_trip_user_stat FOREIGN KEY (id_trip_user_stat) REFERENCES trip_user_stat(id)
);

CREATE TABLE IF NOT EXISTS path(
    id INT NOT NULL AUTO_INCREMENT,
    id_trip INT NOT NULL,
    
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255),

    CONSTRAINT pk_path_id PRIMARY KEY (id),
    CONSTRAINT fk_path_id_trip FOREIGN KEY (id_trip) REFERENCES trip(id)
);


CREATE TABLE IF NOT EXISTS stag(
    id INT NOT NULL AUTO_INCREMENT,
    id_loct_start INT NOT NULL,
    id_loct_end INT NOT NULL,

    deration INT NOT NULL,
    descr VARCHAR(255),

    CONSTRAINT pk_stag_id PRIMARY KEY (id),
    CONSTRAINT fk_stag_id_loct_start FOREIGN KEY (id_loct_start) REFERENCES loct(id),
    CONSTRAINT fk_stag_id_loct_end FOREIGN KEY (id_loct_end) REFERENCES loct(id)
);

CREATE TABLE IF NOT EXISTS path_stag(
    id INT NOT NULL AUTO_INCREMENT,
    id_path INT NOT NULL,
    id_stag INT NOT NULL,

    CONSTRAINT pk_path_stag_id PRIMARY KEY (id),
    CONSTRAINT fk_path_stag_id_path FOREIGN KEY (id_path) REFERENCES path(id),
    CONSTRAINT fk_path_stag_id_stag FOREIGN KEY (id_stag) REFERENCES stag(id)
);

CREATE TABLE IF NOT EXISTS vehc_type(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255),

    CONSTRAINT pk_vehc_type_id PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS vehc(
    id INT NOT NULL AUTO_INCREMENT,
    id_vehc_type INT NOT NULL,
    
    name VARCHAR(64) NOT NULL,
    plate VARCHAR(36) NOT NULL,
    a_class_sits INT,
    b_class_sits INT,
    c_class_sits INT,
    
    CONSTRAINT pk_vehc_id PRIMARY KEY (id),
    CONSTRAINT fk_vehc_id_vehc_type FOREIGN KEY (id_vehc_type) REFERENCES vehc_type(id),
    CONSTRAINT uq_vehc_plate UNIQUE (plate)
);

CREATE TABLE IF NOT EXISTS stag_vehc(
    id INT NOT NULL AUTO_INCREMENT,
    id_stag INT NOT NULL,
    id_vehc INT NOT NULL,

    start_time TIME NOT NULL,
    end_time TIME NOT NULL,

    CONSTRAINT pk_stag_vehc_id PRIMARY KEY (id),
    CONSTRAINT fk_stag_vehc_id_stag FOREIGN KEY (id_stag) REFERENCES stag(id),
    CONSTRAINT fk_stag_vehc_id_vehc FOREIGN KEY (id_vehc) REFERENCES vehc(id)
);

CREATE TABLE IF NOT EXISTS tict(
    id INT NOT NULL AUTO_INCREMENT,
    id_trip_user INT NOT NULL,
    
    start_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    end_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    start_location VARCHAR(255) NOT NULL,
    end_location VARCHAR(255) NOT NULL,
    user_first_name VARCHAR(64) NOT NULL,
    user_last_name VARCHAR(64) NOT NULL,
    tict_price_value DECIMAL(10,2) NOT NULL,

    CONSTRAINT pk_tict_id PRIMARY KEY (id),
    CONSTRAINT fk_trip_id_user FOREIGN KEY (id_trip_user) REFERENCES trip_user(id)
);

CREATE TABLE IF NOT EXISTS pers(
    id INT NOT NULL AUTO_INCREMENT,
    id_sex INT NOT NULL,

    first_name VARCHAR(64) NOT NULL,
    last_name VARCHAR(64) NOT NULL,
    cod_fisc VARCHAR(64) NOT NULL,

    CONSTRAINT pk_pers_id PRIMARY KEY (id),
    CONSTRAINT fk_pers_id_sex FOREIGN KEY (id_sex) REFERENCES sex(id)
);

CREATE TABLE IF NOT EXISTS tict_pers(
    id INT NOT NULL AUTO_INCREMENT,
    id_tict INT NOT NULL,
    id_pers INT NOT NULL,

    CONSTRAINT pk_tict_pers_id PRIMARY KEY (id),
    CONSTRAINT fk_tict_pers_id_tict FOREIGN KEY (id_tict) REFERENCES tict(id),
    CONSTRAINT fk_tict_pers_id_pers FOREIGN KEY (id_pers) REFERENCES pers(id)
);

CREATE TABLE IF NOT EXISTS card_type(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255),

    CONSTRAINT pk_card_type_id PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS card(
    id INT NOT NULL AUTO_INCREMENT,
    id_card_type INT NOT NULL,

    first_name VARCHAR(64) NOT NULL,
    last_name VARCHAR(64) NOT NULL,
    card_number VARCHAR(64) NOT NULL,
    expriration_date VARCHAR(5) NOT NULL,
    cvv VARCHAR(3) NOT NULL,
    
    CONSTRAINT pk_card_id PRIMARY KEY (id),
    CONSTRAINT fk_card_id_card_type FOREIGN KEY (id_card_type) REFERENCES card_type(id)
);

CREATE TABLE IF NOT EXISTS paym_stat(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255),

    CONSTRAINT pk_paym_stat_id PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS paym_metd(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255),

    CONSTRAINT pk_paym_metd_id PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS paym(
    id INT NOT NULL AUTO_INCREMENT,
    id_trip_user INT NOT NULL,
    id_card INT NOT NULL,
    id_curr VARCHAR(3) NOT NULL,
    id_paym_stat INT NOT NULL,
    id_paym_metd INT NOT NULL,

    quantity DECIMAL(10,2) NOT NULL,
    start_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    end_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    pay_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT pk_paym_id PRIMARY KEY(id),
    CONSTRAINT fk_paym_id_trip_user FOREIGN KEY (id_trip_user) REFERENCES trip_user(id),
    CONSTRAINT fk_paym_id_card FOREIGN KEY (id_card) REFERENCES card(id), 
    CONSTRAINT fk_paym_id_curr FOREIGN KEY (id_curr) REFERENCES curr(id),
    CONSTRAINT fk_paym_id_stat FOREIGN KEY (id_paym_stat) REFERENCES paym_stat(id),
    CONSTRAINT fk_paym_id_metd FOREIGN KEY (id_paym_metd) REFERENCES paym_metd(id)
);

CREATE TABLE IF NOT EXISTS path_pren(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255),

    CONSTRAINT pk_path_pren_id PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS roms_pren(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255),

    CONSTRAINT pk_roms_pren_id PRIMARY KEY (id)
);





