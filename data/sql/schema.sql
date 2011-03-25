CREATE TABLE comentario (pk_post INT, id_comentario BIGINT, autor VARCHAR(255), email VARCHAR(255) NOT NULL, PRIMARY KEY(id_comentario));
CREATE TABLE post (id_post INT, titulo VARCHAR(255) NOT NULL, resumen VARCHAR(4000), texto VARCHAR(4000) NOT NULL, PRIMARY KEY(id_post));
