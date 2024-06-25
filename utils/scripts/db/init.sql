CREATE DATABASE devopsapp;

USE devopsapp;

CREATE TABLE test (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50)
);

INSERT INTO test (name, email) VALUES ('Alice Johnson', 'alice.johnson@example.com');
INSERT INTO test (name, email) VALUES ('Bob Smith', 'bob.smith@example.com');
INSERT INTO test (name, email) VALUES ('Charlie Brown', 'charlie.brown@example.com');
INSERT INTO test (name, email) VALUES ('Diana Prince', 'diana.prince@example.com');
INSERT INTO test (name, email) VALUES ('Ethan Hunt', 'ethan.hunt@example.com');
INSERT INTO test (name, email) VALUES ('Fiona Gallagher', 'fiona.gallagher@example.com');
INSERT INTO test (name, email) VALUES ('George Lucas', 'george.lucas@example.com');
INSERT INTO test (name, email) VALUES ('Hannah Baker', 'hannah.baker@example.com');
INSERT INTO test (name, email) VALUES ('Ian Malcolm', 'ian.malcolm@example.com');
INSERT INTO test (name, email) VALUES ('Julia Roberts', 'julia.roberts@example.com');
