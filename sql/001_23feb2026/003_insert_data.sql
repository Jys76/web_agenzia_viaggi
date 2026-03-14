
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
