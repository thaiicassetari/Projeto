CREATE TABLE cadastro (
  id_cadastro INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_cadastro VARCHAR(255) NULL,
  cnh_cadastro VARCHAR(11) NULL,
  marca_cadastro VARCHAR(45) NULL,
  placa_cadastro VARCHAR(7) NULL,
  ent_cadastro DATETIME NULL,
  said_cadastro DATETIME NULL,
  PRIMARY KEY(id_cadastro)
);

CREATE TABLE vaga (
  id_vaga INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  cadastro_id_cadastro INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(id_vaga),
  INDEX entrada_FKIndex1(cadastro_id_cadastro)
);


