SET NAMES utf8;

CREATE TABLE cont(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(64),
    descr VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE natn(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cont INT NOT NULL,
    name VARCHAR(64),
    descr VARCHAR(255),
    INDEX (id_cont)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE regn(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_natn INT NOT NULL,
    name VARCHAR(64),
    descr VARCHAR(255),
    INDEX (id_natn)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE prov(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_regn INT NOT NULL,
    name VARCHAR(64),
    descr VARCHAR(255),
    INDEX (id_regn)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE city(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_prov INT NOT NULL,
    name VARCHAR(64),
    descr VARCHAR(255),
    INDEX (id_prov)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE loct(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_city INT NOT NULL,
    address VARCHAR(128),
    descr VARCHAR(255),
    INDEX (id_city)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE curr(
    id VARCHAR(3) PRIMARY KEY,
    descr VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE sexx(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(64),
    descr VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE seas(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE accm_type(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE accm(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_loct INT NOT NULL,
    id_accm_type INT NOT NULL,
    stars INT NOT NULL,
    n_roms INT NOT NULL,
    descr VARCHAR(255),
    INDEX (id_loct),
    INDEX (id_accm_type)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE roms_stat(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE roms(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_accm INT NOT NULL,
    id_roms_stat INT NOT NULL,
    beds INT NOT NULL,
    rom_num INT NOT NULL,
    descr VARCHAR(255),
    INDEX (id_accm),
    INDEX (id_roms_stat)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE trip_catg(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE trip(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_loct INT NOT NULL,
    id_curr VARCHAR(3) NOT NULL,
    id_accm INT NOT NULL,
    id_trip_catg INT NOT NULL,
    id_seas INT NOT NULL,
    name VARCHAR(64) NOT NULL,
    price DECIMAL(10,2),
    event_start TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    event_end TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    descr TEXT,
    image_path VARCHAR(255),
    flag_image_path VARCHAR(255),
    INDEX (id_loct),
    INDEX (id_curr),
    INDEX (id_accm),
    INDEX (id_trip_catg),
    INDEX (id_seas)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE trip_avai(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_trip INT NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    INDEX (id_trip)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE clie(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_loct INT NOT NULL,
    id_sexx INT NOT NULL,
    first_name VARCHAR(64) NOT NULL,
    last_name VARCHAR(64) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    cod_fisc VARCHAR(16) NOT NULL,
    UNIQUE (username),
    UNIQUE (email),
    UNIQUE (phone),
    UNIQUE (cod_fisc),
    INDEX (id_loct),
    INDEX (id_sexx)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE trip_avai_clie_stat(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(64) NOT NULL,
    descr VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE trip_avai_clie(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_trip_avai INT NOT NULL,
    id_clie INT NOT NULL,
    id_curr VARCHAR(3) NOT NULL,
    id_trip_avai_clie_stat INT NOT NULL,
    trip_start TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    trip_end TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX (id_trip_avai),
    INDEX (id_clie),
    INDEX (id_curr),
    INDEX (id_trip_avai_clie_stat)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE path(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_trip INT NOT NULL,
    name VARCHAR(64),
    descr VARCHAR(255),
    INDEX (id_trip)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE stag(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_loct_start INT NOT NULL,
    id_loct_end INT NOT NULL,
    duration INT,
    descr VARCHAR(255),
    INDEX (id_loct_start),
    INDEX (id_loct_end)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE path_stag(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_path INT NOT NULL,
    id_stag INT NOT NULL,
    INDEX (id_path),
    INDEX (id_stag)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE vehc_type(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(64),
    descr VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE vehc(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_vehc_type INT NOT NULL,
    name VARCHAR(64),
    plate VARCHAR(20) NOT NULL,
    a_class_sits INT,
    b_class_sits INT,
    c_class_sits INT,
    UNIQUE (plate),
    INDEX (id_vehc_type)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE stag_vehc(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_stag INT NOT NULL,
    id_vehc INT NOT NULL,
    start_time TIME,
    end_time TIME,
    INDEX (id_stag),
    INDEX (id_vehc)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE tict(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_trip_avai_clie INT NOT NULL,
    start_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    end_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    start_location VARCHAR(255),
    end_location VARCHAR(255),
    clie_first_name VARCHAR(64),
    clie_last_name VARCHAR(64),
    tict_price_value DECIMAL(10,2),
    INDEX (id_trip_avai_clie)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE pers(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_sexx INT NOT NULL,
    first_name VARCHAR(64),
    last_name VARCHAR(64),
    cod_fisc VARCHAR(64),
    INDEX (id_sexx)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE tict_pers(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_tict INT NOT NULL,
    id_pers INT NOT NULL,
    INDEX (id_tict),
    INDEX (id_pers)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ========================
-- PAGAMENTI
-- ========================

CREATE TABLE card_type(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(64),
    descr VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE card(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_card_type INT NOT NULL,
    first_name VARCHAR(64),
    last_name VARCHAR(64),
    card_number VARCHAR(32),
    expiration_date VARCHAR(5),
    cvv VARCHAR(3),
    INDEX (id_card_type)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE paym_stat(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(64),
    descr VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE paym_metd(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(64),
    descr VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE paym(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_trip_avai_clie INT NOT NULL,
    id_card INT NOT NULL,
    id_curr VARCHAR(3) NOT NULL,
    id_paym_stat INT NOT NULL,
    id_paym_metd INT NOT NULL,
    quantity DECIMAL(10,2),
    start_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    end_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    pay_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX (id_trip_avai_clie),
    INDEX (id_card),
    INDEX (id_curr),
    INDEX (id_paym_stat),
    INDEX (id_paym_metd)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;