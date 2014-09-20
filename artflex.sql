CREATE TABLE calculation (calculation_id INT AUTO_INCREMENT NOT NULL, knife_id INT DEFAULT NULL, material TINYINT(1) DEFAULT NULL, sticker_quantity INT NOT NULL, sticker_width DOUBLE PRECISION NOT NULL, sticker_height DOUBLE PRECISION NOT NULL, material_width DOUBLE PRECISION NOT NULL, material_height DOUBLE PRECISION DEFAULT NULL, plate_quantity TINYINT(1) DEFAULT NULL, plate_new TINYINT(1) DEFAULT NULL, plate_cyan TINYINT(1) DEFAULT NULL, plate_magenta TINYINT(1) DEFAULT NULL, plate_yellow TINYINT(1) DEFAULT NULL, plate_black TINYINT(1) DEFAULT NULL, plate_pantone TINYINT(1) DEFAULT NULL, plate_varnish_uv TINYINT(1) DEFAULT NULL, plate_varnish_uv_selective TINYINT(1) DEFAULT NULL, plate_white TINYINT(1) DEFAULT NULL, trafaret_white TINYINT(1) DEFAULT NULL, trafaret_varnish TINYINT(1) DEFAULT NULL, trafaret_pantone TINYINT(1) DEFAULT NULL, lamination TINYINT(1) DEFAULT NULL, knife_new TINYINT(1) DEFAULT NULL, plate_foil TINYINT(1) DEFAULT NULL, hot_foil TINYINT(1) DEFAULT NULL, embossing TINYINT(1) DEFAULT NULL, embossing_width DOUBLE PRECISION DEFAULT NULL, embossing_height DOUBLE PRECISION DEFAULT NULL, embossing_sticker_quantity TINYINT(1) DEFAULT NULL, discount DOUBLE PRECISION DEFAULT NULL, exchange_rates DOUBLE PRECISION DEFAULT NULL, INDEX IDX_F6A769709F5B9350 (knife_id), INDEX IDX_F6A769707CBE7595 (material), PRIMARY KEY(calculation_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
CREATE TABLE clients (clients_id INT AUTO_INCREMENT NOT NULL, manager_id INT DEFAULT NULL, deputy_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, country VARCHAR(255) DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, street VARCHAR(255) DEFAULT NULL, building SMALLINT DEFAULT NULL, phone VARCHAR(20) DEFAULT NULL, fax VARCHAR(20) DEFAULT NULL, INDEX IDX_C82E74783E3463 (manager_id), INDEX IDX_C82E744B6F93BB (deputy_id), UNIQUE INDEX name (name), PRIMARY KEY(clients_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
CREATE TABLE clients_alias_linker (client_id INT NOT NULL, alias_id INT DEFAULT NULL, INDEX IDX_1BD617F15E564AE2 (alias_id), PRIMARY KEY(client_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
CREATE TABLE knife (id INT AUTO_INCREMENT NOT NULL, path VARCHAR(255) DEFAULT NULL, preview_path VARCHAR(255) DEFAULT NULL, cost DOUBLE PRECISION DEFAULT NULL, UNIQUE INDEX id_knife_UNIQUE (id), UNIQUE INDEX preview_path_UNIQUE (preview_path), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
CREATE TABLE material (material_id TINYINT(1) NOT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, vendor VARCHAR(255) NOT NULL, state SMALLINT DEFAULT NULL, PRIMARY KEY(material_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
CREATE TABLE `order` (order_id INT AUTO_INCREMENT NOT NULL, calculation INT DEFAULT NULL, client INT DEFAULT NULL, manager INT DEFAULT NULL, state TINYINT(1) NOT NULL, INDEX IDX_F5299398F6A76970 (calculation), INDEX IDX_F5299398C7440455 (client), INDEX IDX_F5299398FA2425B9 (manager), PRIMARY KEY(order_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, parent_id INT DEFAULT NULL, roleId VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_57698A6AB8C2FD88 (roleId), INDEX IDX_57698A6A727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) DEFAULT NULL, email VARCHAR(255) NOT NULL, displayName VARCHAR(50) DEFAULT NULL, password VARCHAR(128) NOT NULL, UNIQUE INDEX UNIQ_1483A5E9F85E0677 (username), UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
CREATE TABLE user_role_linker (user_id INT NOT NULL, role_id INT NOT NULL, INDEX IDX_61117899A76ED395 (user_id), INDEX IDX_61117899D60322AC (role_id), PRIMARY KEY(user_id, role_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
ALTER TABLE calculation ADD CONSTRAINT FK_F6A769709F5B9350 FOREIGN KEY (knife_id) REFERENCES knife (id);
ALTER TABLE calculation ADD CONSTRAINT FK_F6A769707CBE7595 FOREIGN KEY (material) REFERENCES material (material_id);
ALTER TABLE clients ADD CONSTRAINT FK_C82E74783E3463 FOREIGN KEY (manager_id) REFERENCES users (id);
ALTER TABLE clients ADD CONSTRAINT FK_C82E744B6F93BB FOREIGN KEY (deputy_id) REFERENCES users (id);
ALTER TABLE clients_alias_linker ADD CONSTRAINT FK_1BD617F15E564AE2 FOREIGN KEY (alias_id) REFERENCES clients (clients_id);
ALTER TABLE clients_alias_linker ADD CONSTRAINT FK_1BD617F119EB6921 FOREIGN KEY (client_id) REFERENCES clients (clients_id);
ALTER TABLE `order` ADD CONSTRAINT FK_F5299398F6A76970 FOREIGN KEY (calculation) REFERENCES calculation (calculation_id);
ALTER TABLE `order` ADD CONSTRAINT FK_F5299398C7440455 FOREIGN KEY (client) REFERENCES clients (clients_id);
ALTER TABLE `order` ADD CONSTRAINT FK_F5299398FA2425B9 FOREIGN KEY (manager) REFERENCES users (id);
ALTER TABLE role ADD CONSTRAINT FK_57698A6A727ACA70 FOREIGN KEY (parent_id) REFERENCES role (id);
ALTER TABLE user_role_linker ADD CONSTRAINT FK_61117899A76ED395 FOREIGN KEY (user_id) REFERENCES users (id);
ALTER TABLE user_role_linker ADD CONSTRAINT FK_61117899D60322AC FOREIGN KEY (role_id) REFERENCES role (id);