
INSERT INTO sexx (name) VALUES 
    ('Maschio'),
    ('Femmina');

INSERT INTO cont (name) VALUES
    ('Europa'),
    ('America'),
    ('Australia'),
    ('Africa'),
    ('Asia'),
    ('Antartide');

INSERT INTO natn (id_cont, name) VALUES
    (1, 'Italia'),
    (1, 'Francia'),
    (1, 'Germania'),
    (5, 'Giappone'),
    (5, 'Cina'),
    (2, 'Stati Uniti');

INSERT INTO regn (id_natn, name) VALUES
    (1, 'Marche'),
    (1, 'Emilia-Romagnia'),
    (1, 'Piemonte'),
    (6, 'Ohio'),
    (6, 'New York'),
    (6, 'Texas'),
    (3, 'Berlin');

INSERT INTO prov (id_regn, name) VALUES
    (1, 'Ancona'),
    (1, 'Macerata'),
    (2, 'Parma'),
    (2, 'Rimini'),
    (3, 'Cuneo');

INSERT INTO city (id_prov, name) VALUES
    (1, 'Senigallia'),
    (1, 'Serra de''Conti'),
    (1, 'Arcevia');