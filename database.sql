create database fikom;

create table berita(
id int(2) not null auto_increment,
judul varchar(50) not null,
content varchar(500) not null,
primary key(id)
);

create table user(
id int(10) not null auto_increment,
username varchar(20) not null,
password varchar(50) not null,
primary key(id)
);

autoload libraries//'database','session'
autoload helper //'url','text','form','html','date'