CREATE INDEX idx_natn_id_cont ON natn(id_cont);
CREATE INDEX idx_regn_id_natn ON regn(id_natn);
CREATE INDEX idx_prov_id_regn ON prov(id_regn);
CREATE INDEX idx_city_id_prov ON city(id_prov);
CREATE INDEX idx_loct_id_city ON loct(id_city);

CREATE INDEX idx_accm_id_loct ON accm(id_loct);
CREATE INDEX idx_accm_id_type ON accm(id_accm_type);
CREATE INDEX idx_roms_id_accm ON roms(id_accm);
CREATE INDEX idx_roms_id_stat ON roms(id_roms_stat);

CREATE INDEX idx_trip_id_loct ON trip(id_loct);
CREATE INDEX idx_trip_id_curr ON trip(id_curr);
CREATE INDEX idx_trip_id_accm ON trip(id_accm);
CREATE INDEX idx_trip_id_catg ON trip(id_trip_catg);
CREATE INDEX idx_trip_id_seas ON trip(id_seas);

CREATE INDEX idx_trip_avai_id_trip ON trip_avai(id_trip);

CREATE INDEX idx_clie_id_loct ON clie(id_loct);
CREATE INDEX idx_clie_id_sexx ON clie(id_sexx);

CREATE INDEX idx_trip_avai_clie_id_trip_avai ON trip_avai_clie(id_trip_avai);
CREATE INDEX idx_trip_avai_clie_id_clie ON trip_avai_clie(id_clie);

CREATE INDEX idx_path_id_trip ON path(id_trip);
CREATE INDEX idx_stag_loct_start ON stag(id_loct_start);
CREATE INDEX idx_stag_loct_end ON stag(id_loct_end);
CREATE INDEX idx_path_stag_id_path ON path_stag(id_path);
CREATE INDEX idx_path_stag_id_stag ON path_stag(id_stag);

CREATE INDEX idx_vehc_id_type ON vehc(id_vehc_type);
CREATE INDEX idx_stag_vehc_id_stag ON stag_vehc(id_stag);
CREATE INDEX idx_stag_vehc_id_vehc ON stag_vehc(id_vehc);

CREATE INDEX idx_tict_id_trip_avai_clie ON tict(id_trip_avai_clie);
CREATE INDEX idx_tict_pers_id_tict ON tict_pers(id_tict);
CREATE INDEX idx_tict_pers_id_pers ON tict_pers(id_pers);

CREATE INDEX idx_paym_id_trip_avai_clie ON paym(id_trip_avai_clie);
CREATE INDEX idx_paym_id_card ON paym(id_card);
CREATE INDEX idx_paym_id_curr ON paym(id_curr);
CREATE INDEX idx_paym_id_stat ON paym(id_paym_stat);
CREATE INDEX idx_paym_id_metd ON paym(id_paym_metd);

CREATE UNIQUE INDEX idx_clie_username ON clie(username);
CREATE UNIQUE INDEX idx_clie_email ON clie(email);

CREATE INDEX idx_city_name ON city(name);
CREATE INDEX idx_loct_address ON loct(address);

CREATE INDEX idx_trip_name ON trip(name);
CREATE INDEX idx_trip_price ON trip(price);

CREATE INDEX idx_trip_avai_dates ON trip_avai(start_date, end_date);