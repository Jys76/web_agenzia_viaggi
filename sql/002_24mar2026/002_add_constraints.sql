ALTER TABLE natn ADD FOREIGN KEY (id_cont) REFERENCES cont(id);
ALTER TABLE regn ADD FOREIGN KEY (id_natn) REFERENCES natn(id);
ALTER TABLE prov ADD FOREIGN KEY (id_regn) REFERENCES regn(id);
ALTER TABLE city ADD FOREIGN KEY (id_prov) REFERENCES prov(id);
ALTER TABLE loct ADD FOREIGN KEY (id_city) REFERENCES city(id);

ALTER TABLE accm ADD FOREIGN KEY (id_loct) REFERENCES loct(id);
ALTER TABLE accm ADD FOREIGN KEY (id_accm_type) REFERENCES accm_type(id);

ALTER TABLE roms ADD FOREIGN KEY (id_accm) REFERENCES accm(id);
ALTER TABLE roms ADD FOREIGN KEY (id_roms_stat) REFERENCES roms_stat(id);

ALTER TABLE trip ADD FOREIGN KEY (id_loct) REFERENCES loct(id);
ALTER TABLE trip ADD FOREIGN KEY (id_curr) REFERENCES curr(id);
ALTER TABLE trip ADD FOREIGN KEY (id_accm) REFERENCES accm(id);
ALTER TABLE trip ADD FOREIGN KEY (id_trip_catg) REFERENCES trip_catg(id);
ALTER TABLE trip ADD FOREIGN KEY (id_seas) REFERENCES seas(id);

ALTER TABLE trip_avai ADD FOREIGN KEY (id_trip) REFERENCES trip(id);

ALTER TABLE clie ADD FOREIGN KEY (id_loct) REFERENCES loct(id);
ALTER TABLE clie ADD FOREIGN KEY (id_sexx) REFERENCES sexx(id);

ALTER TABLE trip_avai_clie ADD FOREIGN KEY (id_trip_avai) REFERENCES trip_avai(id);
ALTER TABLE trip_avai_clie ADD FOREIGN KEY (id_clie) REFERENCES clie(id);
ALTER TABLE trip_avai_clie ADD FOREIGN KEY (id_curr) REFERENCES curr(id);
ALTER TABLE trip_avai_clie ADD FOREIGN KEY (id_trip_avai_clie_stat) REFERENCES trip_avai_clie_stat(id);

ALTER TABLE path ADD FOREIGN KEY (id_trip) REFERENCES trip(id);

ALTER TABLE stag ADD FOREIGN KEY (id_loct_start) REFERENCES loct(id);
ALTER TABLE stag ADD FOREIGN KEY (id_loct_end) REFERENCES loct(id);

ALTER TABLE path_stag ADD FOREIGN KEY (id_path) REFERENCES path(id);
ALTER TABLE path_stag ADD FOREIGN KEY (id_stag) REFERENCES stag(id);

ALTER TABLE vehc ADD FOREIGN KEY (id_vehc_type) REFERENCES vehc_type(id);

ALTER TABLE stag_vehc ADD FOREIGN KEY (id_stag) REFERENCES stag(id);
ALTER TABLE stag_vehc ADD FOREIGN KEY (id_vehc) REFERENCES vehc(id);

ALTER TABLE tict ADD FOREIGN KEY (id_trip_avai_clie) REFERENCES trip_avai_clie(id);

ALTER TABLE pers ADD FOREIGN KEY (id_sexx) REFERENCES sexx(id);

ALTER TABLE tict_pers ADD FOREIGN KEY (id_tict) REFERENCES tict(id);
ALTER TABLE tict_pers ADD FOREIGN KEY (id_pers) REFERENCES pers(id);

ALTER TABLE card ADD FOREIGN KEY (id_card_type) REFERENCES card_type(id);

ALTER TABLE paym ADD FOREIGN KEY (id_trip_avai_clie) REFERENCES trip_avai_clie(id);
ALTER TABLE paym ADD FOREIGN KEY (id_card) REFERENCES card(id);
ALTER TABLE paym ADD FOREIGN KEY (id_curr) REFERENCES curr(id);
ALTER TABLE paym ADD FOREIGN KEY (id_paym_stat) REFERENCES paym_stat(id);
ALTER TABLE paym ADD FOREIGN KEY (id_paym_metd) REFERENCES paym_metd(id);