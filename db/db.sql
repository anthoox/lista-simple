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
INSERT INTO users VALUES(null, 'test', 'test@test.com', '1234', CURDATE(), 2, null );
INSERT INTO users VALUES(null, 'Prueba', 'prueba@prueba.com', '1234', CURDATE(), 2, null );



CREATE TABLE lists(
    id                      INT auto_increment not null,
    user_id                 INT not null,
    name                    VARCHAR(255) not null,
    creation_date           DATETIME DEFAULT CURRENT_TIMESTAMP,
    modification_date       DATETIME DEFAULT CURRENT_TIMESTAMP,
    notification_date       DATETIME DEFAULT CURRENT_TIMESTAMP,
    description             TEXT null,
    paper_bin               INT DEFAULT 0 NOT NULL,
    completed               INT DEFAULT 0 NOT NULL,
    CONSTRAINT pk_lists PRIMARY KEY(id),
    CONSTRAINT fk_lists_users FOREIGN KEY(user_id) REFERENCES lists(id)
)ENGINE=InnoDB;


CREATE TABLE items(
    id                      INT auto_increment not null,
    user_id                 INT not null,
    list_id                 INT not null,
    name                    VARCHAR(255) not null,
    price                   float(100,2) not null,
    numer                   INT(255) not null,
    notification_date       DATETIME DEFAULT CURRENT_TIMESTAMP not null,
    notes                   TEXT null,
    completed               INT DEFAULT 0 NOT NULL,
    CONSTRAINT pk_items PRIMARY KEY(id),
    CONSTRAINT fk_items_users FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_items_lists FOREIGN KEY(list_id) REFERENCES lists(id)
)ENGINE=InnoDB;
