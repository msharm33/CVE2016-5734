CREATE DATABASE `vuln`;

CREATE TABLE `vuln`.`vuln_table` (
  `id` INT(5) NOT NULL AUTO_INCREMENT ,
  `text` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `vuln`.`vuln_table` (`id`, `text`) VALUES (NULL, UNHEX('302f6500'));
