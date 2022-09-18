use tsh9714web;
DROP TABLE IF EXISTS `battery_voltage`;
CREATE TABLE `battery_voltage` (
`id` int NOT NULL AUTO_INCREMENT,
  `time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `voltage` FLOAT(20),
  PRIMARY KEY (`id`)
);
INSERT INTO `battery_voltage`(`voltage`) values(50.5);