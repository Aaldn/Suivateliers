insert into Client
values(
        1,
        'Monsieur',
        'Macron',
        'Emmanuel',
        '1977-10-01',
        'emmanuel.macron@gmail.com',
        AES_ENCRYPT('text',SHA2('azerty',512)),
        '20 rue random',
        '94500',
        'Champigny-sur-marne',
        '0607080910'
    );
insert into Client
values(
        2,
        'Monsieur',
        'Sarkozy',
        'Nicolas',
        '1959-06-21',
        'nicolas.sarkozy@gmail.com',
        AES_ENCRYPT('text',SHA2('azerty',512)),
        '30 rue random',
        '94140',
        'Alfortville',
        '0789456123'
    );
insert into Client
values(
        3,
        'Monsieur',
        'Jacques',
        'Chirac',
        '1947-01-30',
        'jacques.chirac@gmail.com',
        AES_ENCRYPT('text',SHA2('azerty',512)),
        '40 rue random',
        '75020',
        'Paris',
        '0712345678'
    );
insert into Client
values(
        4,
        'Monsieur',
        'Hollande',
        'François',
        '1957-12-25',
        'françois.hollande@gmail.com',
        AES_ENCRYPT('text',SHA2('azerty',512)),
        '50 rue random',
        '93000',
        'Bobigny',
        '0612345678'
    );
insert into ResponsableAteliers
values(1, 'admin', 'azerty', 'Charles', 'De Gaulle');
insert into Atelier
values(
        1,
        1,
        '2021-09-09',
        '2021-09-15 14:00:00',
        '02:00:00',
        '15',
        'creme'
    );
insert into Atelier
values(
        2,
        1,
        '2021-09-10',
        '2021-09-16 09:00:00',
        '03:00:00',
        '10',
        'parfum'
    );
insert into Atelier
values(
        3,
        1,
        '2021-09-11',
        '2021-09-17 18:00:00',
        '04:00:00',
        '25',
        'gel'
    );
INSERT INTO Participation (
    numeroClient,
    numeroAtelier,
    dateInscription
  )
VALUES (
    1,
    1,
    '2020-09-09'
  );
INSERT INTO Participation (
    numeroClient,
    numeroAtelier,
    dateInscription
  )
VALUES (
    1,
    3,
    '2020-09-11'
  );
  INSERT INTO Participation (
    numeroClient,
    numeroAtelier,
    dateInscription
  )
VALUES (
    2,
    3,
    '2020-09-08'
  );
    INSERT INTO Participation (
    numeroClient,
    numeroAtelier,
    dateInscription
  )
VALUES (
    3,
    3,
    '2020-09-10'
  );
    INSERT INTO Participation (
    numeroClient,
    numeroAtelier,
    dateInscription
  )
VALUES (
    4,
    2,
    '2020-09-11'
  );
      INSERT INTO Participation (
    numeroClient,
    numeroAtelier,
    dateInscription
  )
VALUES (
    3,
    2,
    '2020-09-12'
  );
INSERT INTO ResponsableAteliers (numero, nomConnexion, nom, prenom)
VALUES (
        5,
        'Eddy',
        'azerty,' 'Philippe',
        'Edouard'
    );
