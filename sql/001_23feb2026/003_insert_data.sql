
INSERT INTO sexx (name) VALUES 
    ('Male'),
    ('Female');

INSERT INTO cont (name) VALUES
    ('Europe'),
    ('America'),
    ('Australia'),
    ('Africa'),
    ('Asia'),
    ('Antarctica');

INSERT INTO natn (id_cont, name) VALUES
    (1, 'Italy'),
    (1, 'France'),
    (1, 'Germany'),
    (5, 'Japan'),
    (5, 'China'),
    (2, 'United States'),
    (1, 'Spain');

INSERT INTO regn (id_natn, name) VALUES
    (1, 'Marche'),
    (1, 'Emilia-Romagna'),
    (1, 'Piemonte'),
    (6, 'Ohio'),
    (6, 'New York'),
    (6, 'Texas'),
    (3, 'Berlin'),
    (5, 'Kansai'),
    (6, 'Northeast'),
    (7, 'Catalonia');

INSERT INTO prov (id_regn, name) VALUES
    (1, 'Ancona'),
    (1, 'Macerata'),
    (2, 'Parma'),
    (2, 'Rimini'),
    (3, 'Cuneo'),
    (8, 'Kyoto Prefecture'),
    (9, 'New York'),
    (10, 'Catalonia');

INSERT INTO city (id_prov, name) VALUES
    (1, 'Senigallia'),
    (1, 'Serra de''Conti'),
    (1, 'Arcevia'),
    (6, 'Kyoto'),
    (7, 'New York City'),
    (8, 'Barcelona');

INSERT INTO loct (id_city, address) VALUES
    (4, 'Ninenzaka'),
    (5, '5th Avenue'),
    (6, 'La Rambla'),
    (4, 'Karasuma-dori'),
    (5, '768 5th Avenue'),
    (6, 'La Rambla 109');


INSERT INTO curr (id) VALUES
    ('USD'),
    ('EUR'),
    ('JPY'),
    ('CAD'),
    ('CHF'),
    ('AUD'),
    ('GBP');

INSERT INTO accm_type (name) VALUES
    ('Hotel'),
    ('Hostel'),
    ('Apartment'),
    ('Villa'),
    ('Motel'),
    ('Guest House');


INSERT INTO accm (id_loct, id_accm_type, stars, n_roms) VALUES
    (4, 1, 5, 537),
    (5, 1, 5, 282),
    (6, 1, 4, 169);

INSERT INTO trip_catg (name) VALUES
    ('Leisure'),
    ('Business'),
    ('Adventure'),
    ('Cultural'),
    ('Beach'),
    ('Nature'),
    ('City Break'),
    ('Luxury'),
    ('Family'),
    ('Wellness');

INSERT INTO seas (name) VALUES
    ('Spring'),
    ('Summer'),
    ('Autumn'),
    ('Winter');

INSERT INTO trip (
    id_loct, 
    id_curr, 
    id_accm, 
    id_trip_catg, 
    id_seas, 
    name, 
    price, 
    event_start, 
    event_end, 
    descr, 
    image_path
) VALUES
    (4, 'USD', 1, 4, 1, 'Kyoto', 868, '2026-03-13 00:00:00', '2034-05-31 00:00:00', 'Kyoto è una delle città storicamente più importanti del Giappone. È stata capitale imperiale per oltre mille anni ed è considerata il centro della cultura tradizionale giapponese. La città è famosa per i suoi templi buddhisti, i santuari shintoisti, i giardini zen e i quartieri storici come Gion. È una destinazione ideale per turismo culturale, fotografico e spirituale, con un forte legame con le tradizioni.', 'kyoto.jpg'),
    (5, 'USD', 2, 2, 3, 'New York City', 1343, '2025-04-01', '2027-01-21 00:00:00', 'New York City è una delle metropoli più influenti al mondo in ambito economico, finanziario e culturale. È sede di Wall Street, delle Nazioni Unite e di importanti istituzioni culturali come musei e teatri di fama internazionale. La città è nota per i suoi grattacieli, i quartieri iconici come Manhattan, e per essere un centro globale di business, moda, media e intrattenimento.', 'new_york_city.jpg'),
    (6, 'USD', 3, 1, 2, 'Barcelona', 12, '2025-07-23 00:00:00', '2026-12-01 00:00:00', 'Barcelona è una città costiera della Spagna, capitale della Catalogna. È famosa per l’architettura di Antoni Gaudí, in particolare la Sagrada Família, e per il suo equilibrio tra cultura, mare e vita urbana. Offre spiagge, quartieri storici come il Barri Gòtic, e una forte identità culturale. È una destinazione molto apprezzata per turismo leisure, culturale e gastronomico.', 'barcelona.jpg');

INSERT INTO trip_avai (id_trip, start_date, end_date) VALUES
    (1, '2026-04-01 08:00:00', '2026-04-05 18:00:00'),
    (1, '2026-04-15 08:00:00', '2026-04-19 18:00:00'),
    (1, '2026-05-01 08:00:00', '2026-05-05 18:00:00'),
    (1, '2026-05-20 08:00:00', '2026-05-24 18:00:00'),
    (1, '2026-06-10 08:00:00', '2026-06-14 18:00:00'),
    (1, '2026-06-25 08:00:00', '2026-06-29 18:00:00'),
    (1, '2026-07-10 08:00:00', '2026-07-14 18:00:00'),
    (1, '2026-07-25 08:00:00', '2026-07-29 18:00:00'),
    (1, '2026-08-10 08:00:00', '2026-08-14 18:00:00'),
    (1, '2026-08-25 08:00:00', '2026-08-29 18:00:00'),

    (2, '2026-04-03 09:00:00', '2026-04-07 17:00:00'),
    (2, '2026-04-18 09:00:00', '2026-04-22 17:00:00'),
    (2, '2026-05-08 09:00:00', '2026-05-12 17:00:00'),
    (2, '2026-05-25 09:00:00', '2026-05-29 17:00:00'),
    (2, '2026-06-12 09:00:00', '2026-06-16 17:00:00'),
    (2, '2026-06-28 09:00:00', '2026-07-02 17:00:00'),
    (2, '2026-07-15 09:00:00', '2026-07-19 17:00:00'),
    (2, '2026-07-30 09:00:00', '2026-08-03 17:00:00'),
    (2, '2026-08-12 09:00:00', '2026-08-16 17:00:00'),
    (2, '2026-08-28 09:00:00', '2026-09-01 17:00:00'),

    (3, '2026-04-05 07:30:00', '2026-04-08 20:00:00'),
    (3, '2026-04-20 07:30:00', '2026-04-23 20:00:00'),
    (3, '2026-05-10 07:30:00', '2026-05-13 20:00:00'),
    (3, '2026-05-28 07:30:00', '2026-05-31 20:00:00'),
    (3, '2026-06-15 07:30:00', '2026-06-18 20:00:00'),
    (3, '2026-06-30 07:30:00', '2026-07-03 20:00:00'),
    (3, '2026-07-18 07:30:00', '2026-07-21 20:00:00'),
    (3, '2026-08-02 07:30:00', '2026-08-05 20:00:00'),
    (3, '2026-08-18 07:30:00', '2026-08-21 20:00:00'),
    (3, '2026-09-01 07:30:00', '2026-09-04 20:00:00');