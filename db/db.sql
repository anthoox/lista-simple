CREATE DATABASE lista_simple;
use lista_simple;

CREATE TABLE users(
    id                      INT auto_increment not null,
    username                VARCHAR(100) not null, 
    email                   VARCHAR(255) not null,
    password                VARCHAR(255) not null,
    registration_date       DATE,
    rol                     INT(10),
    image                   VARCHAR(255),
    CONSTRAINT pk_users PRIMARY KEY(id),
    CONSTRAINT up_email UNIQUE(email)
)ENGINE=InnoDB;

INSERT INTO users VALUES(null, 'admin', 'admin@admin.com', '1234', CURDATE(), 1, null );
INSERT INTO users VALUES(null, 'Prueba', 'prueba@prueba.com', '1234', CURDATE(), 2, null );



CREATE TABLE lists(
    id                      INT auto_increment not null,
    user_id                 INT not null,
    name                    VARCHAR(255) not null,
    creation_date           DATE,
    modification_date       DATE,
    notification            DATETIME,
    description             TEXT null,
    paper_bin               INT DEFAULT 0 NOT NULL,
    completed               INT DEFAULT 0 NOT NULL,
    CONSTRAINT pk_lists PRIMARY KEY(id),
    CONSTRAINT fk_lists_users FOREIGN KEY(user_id) REFERENCES lists(id)
)ENGINE=InnoDB;


CREATE TABLE items(
    id                      INT auto_increment NOT NULL,
    user_id                 INT NOT NULL,
    list_id                 INT NOT NULL,
    name                    VARCHAR(255) NOT NULL,
    price                   FLOAT(100,2) DEFAULT 0.00 NULL,
    numer                   INT(255) DEFAULT 1 NULL,
    notification_date       DATETIME,
    notes                   TEXT NULL,
    completed               INT DEFAULT 0 NULL,
    CONSTRAINT pk_items PRIMARY KEY(id),
    CONSTRAINT fk_items_users FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_items_lists FOREIGN KEY(list_id) REFERENCES lists(id)
)ENGINE=InnoDB;
