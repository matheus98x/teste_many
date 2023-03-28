CREATE DATABASE IF NOT EXISTS 'manydb'
USE 'manydb';

CREATE TABLE IF NOT EXISTS 'usuarios'(
    'id' int(11) NOT NULL AUTO_INCREMENT, 
    'nome' varchar(255) NOT NULL,
    'senha' varchar(255) NOT NULL,
    PRIMARY KEY ('id')
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;