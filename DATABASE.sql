drop database if exists hw1ZAPP;
create database hw1ZAPP;
use hw1ZAPP;

create table utenti(
    id integer not null primary key auto_increment,
    nome varchar(50) not null,
    cognome varchar(50) not null,
    email varchar(60) not null,
    username varchar(50) not null,
    password varchar(255) not null)
    engine="innoDB";


create table prodotti(
    id_prodotto integer not null primary key auto_increment,
    nome varchar(100) not null,
    immagine varchar(100),
    descrizione varchar(250) not null,
    prezzo int not null

) engine="innoDB";

insert into prodotti (nome, immagine, descrizione, prezzo) values
('DJI MAVIC PRO 3', "image/dji-mavic-3-cine.webp", "fascia alta", "1700"),
('DJI MINI 3', "image/1039a6732b35aa382539d53c230228eb.jpg", "fascia bassa", "700"),

('DJI FPV AVATA', "image/28-dji-avata-fpv-drone-1280x720.jpg", "fascia media", "1000"),
('DJI FPV PRO', "image/FPV-PRO.jpg", "fascia alta", "1400"),

('DJI INSPIRE 3', "image/INSPIRE3.webp", "fascia altissima", "3000"),
('DJI ACTION 2', "image/OSMO2.jpg", "fascia media", "400"),

('DJI RONIN', "image/RONIN.webp", "fascia altissima", "6700"),
('DJI FPV v2', "image/OCCHIALI.webp", "fascia media", "600"),

('DJI TELLO', "image/TELLO.jpg", "fascia bassa", "100"),
('DJI RC', "image/RC.jpg", "fascia media", "300");

create table ordine(
    id integer not null primary key auto_increment,
    nome varchar(50) not null,
    cognome varchar(50) not null,
    username varchar(50) not null,
    nome_prodotto varchar(100) not null,
    prezzo varchar(100) not null,
    data_ordine date

) engine="innoDB";



create table portfolio(
    id_immagine integer not null primary key auto_increment,
    immagine varchar(100)
)engine="innoDB";

insert into portfolio (id_immagine, immagine) values
(1, "image/1.jpg"),
(2, "image/2.jpg"),
(3, "image/3.jpg"),
(4, "image/4.jpg"),
(5, "image/5.jpg"),
(6, "image/6.jpg"),
(7, "image/7.jpeg"),
(8, "image/8.jpg"),
(9, "image/9.jpg"),
(10, "image/10.jpg");


