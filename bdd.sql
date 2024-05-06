create table seance_csv(
    NumSeance int PRIMARY Key,
    film VARCHAR(100),
    categorie VARCHAR(100),
    salle VARCHAR(100),
    date DATE,
    heure TIME
);
create table categorie(
    idCategorie serial PRIMARY Key,
    nomCategorie VARCHAR(200)
);
create table salle(
    idSalle serial PRIMARY KEY,
    nomSalle VARCHAR(200)
);
create table film(
    idFilm serial PRIMARY Key,
    nomFilm VARCHAR(200)
);
create table seance(
    idSeance serial PRIMARY KEy,
    idFilm int REFERENCES film(idFilm),
    idCategorie int REFERENCES categorie(idCategorie),
    idSalle int REFERENCES salle(idSalle),
    date Date,
    heure Time
);
