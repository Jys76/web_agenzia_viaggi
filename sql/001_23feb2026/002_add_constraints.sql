
ALTER TABLE natn ADD CONSTRAINT fk_natn_id_cont FOREIGN KEY(id_cont) REFERENCES cont(id);    
ALTER TABLE regn ADD CONSTRAINT fk_regn_id_natn FOREIGN KEY(id_natn) REFERENCES natn(id);
ALTER TABLE prov ADD CONSTRAINT fk_prov_id_regn FOREIGN KEY(id_regn) REFERENCES regn(id);
ALTER TABLE city ADD CONSTRAINT fk_city_id_prov FOREIGN KEY(id_prov) REFERENCES prov(id);
ALTER TABLE loct ADD CONSTRAINT fk_lock_id_city FOREIGN KEY(id_city) REFERENCES city(id);
ALTER TABLE apat ADD CONSTRAINT fk_apat_id_loct FOREIGN KEY (id_loct) REFERENCES loct(id);

ALTER TABLE roms
    ADD CONSTRAINT fk_roms_id_apat FOREIGN KEY (id_apat) REFERENCES apat(id),
    ADD CONSTRAINT fk_roms_id_roms_stat FOREIGN KEY (id_roms_stat) REFERENCES roms_stat(id);


ALTER TABLE trip
    ADD CONSTRAINT fk_trip_id_loct FOREIGN KEY (id_loct) REFERENCES loct(id),
    ADD CONSTRAINT fk_trip_id_curr FOREIGN KEY (id_curr) REFERENCES curr(id),
    ADD CONSTRAINT fk_trip_id_apat FOREIGN KEY (id_apat) REFERENCES apat(id),
    ADD CONSTRAINT fk_trip_id_trip_catg FOREIGN KEY (id_trip_catg) REFERENCES trip_catg(id),
    ADD CONSTRAINT fk_trip_id_seas FOREIGN KEY (id_seas) REFERENCES seas(id);

ALTER TABLE clie
    ADD CONSTRAINT fk_clie_id_loct FOREIGN KEY(id_loct) REFERENCES loct(id),
    ADD CONSTRAINT fk_clie_id_sexx FOREIGN KEY(id_sexx) REFERENCES sexx(id),
    ADD CONSTRAINT uq_clie_cliename UNIQUE (cliename),
    ADD CONSTRAINT uq_clie_email UNIQUE (email),
    ADD CONSTRAINT uq_clie_phone UNIQUE (phone),
    ADD CONSTRAINT uq_clie_cod_fisc UNIQUE (cod_fisc);

ALTER TABLE trip_clie
    ADD CONSTRAINT fk_trip_clie_id_trip FOREIGN KEY (id_trip) REFERENCES trip(id),
    ADD CONSTRAINT fk_trip_clie_id_clie FOREIGN KEY (id_clie) REFERENCES clie(id),
    ADD CONSTRAINT fk_trip_clie_id_curr FOREIGN KEY (id_curr) REFERENCES curr(id),
    ADD CONSTRAINT fk_trip_clie_id_trip_clie_stat FOREIGN KEY (id_trip_clie_stat) REFERENCES trip_clie_stat(id);

ALTER TABLE path
    ADD CONSTRAINT fk_path_id_trip FOREIGN KEY (id_trip) REFERENCES trip(id);

ALTER TABLE stag
    ADD CONSTRAINT fk_stag_id_loct_start FOREIGN KEY (id_loct_start) REFERENCES loct(id),
    ADD CONSTRAINT fk_stag_id_loct_end FOREIGN KEY (id_loct_end) REFERENCES loct(id);

ALTER TABLE path_stag
    ADD CONSTRAINT fk_path_stag_id_path FOREIGN KEY (id_path) REFERENCES path(id),
    ADD CONSTRAINT fk_path_stag_id_stag FOREIGN KEY (id_stag) REFERENCES stag(id);

ALTER TABLE vehc
    ADD CONSTRAINT fk_vehc_id_vehc_type FOREIGN KEY (id_vehc_type) REFERENCES vehc_type(id),
    ADD CONSTRAINT uq_vehc_plate UNIQUE (plate);

ALTER TABLE stag_vehc
    ADD CONSTRAINT fk_stag_vehc_id_stag FOREIGN KEY (id_stag) REFERENCES stag(id),
    ADD CONSTRAINT fk_stag_vehc_id_vehc FOREIGN KEY (id_vehc) REFERENCES vehc(id);

ALTER TABLE tict
    ADD CONSTRAINT fk_tict_id_trip_clie FOREIGN KEY (id_trip_clie) REFERENCES trip_clie(id);

ALTER TABLE pers
    ADD CONSTRAINT fk_pers_id_sexx FOREIGN KEY (id_sexx) REFERENCES sexx(id);

ALTER TABLE tict_pers
    ADD CONSTRAINT fk_tict_pers_id_tict FOREIGN KEY (id_tict) REFERENCES tict(id),
    ADD CONSTRAINT fk_tict_pers_id_pers FOREIGN KEY (id_pers) REFERENCES pers(id);

ALTER TABLE card
    ADD CONSTRAINT fk_card_id_card_type FOREIGN KEY (id_card_type) REFERENCES card_type(id);   

ALTER TABLE paym
    ADD CONSTRAINT fk_paym_id_trip_clie FOREIGN KEY (id_trip_clie) REFERENCES trip_clie(id),
    ADD CONSTRAINT fk_paym_id_card FOREIGN KEY (id_card) REFERENCES card(id), 
    ADD CONSTRAINT fk_paym_id_curr FOREIGN KEY (id_curr) REFERENCES curr(id),
    ADD CONSTRAINT fk_paym_id_stat FOREIGN KEY (id_paym_stat) REFERENCES paym_stat(id),
    ADD CONSTRAINT fk_paym_id_metd FOREIGN KEY (id_paym_metd) REFERENCES paym_metd(id);
