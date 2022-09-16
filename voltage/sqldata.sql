use tsh9714web;
DROP TABLE IF EXISTS `battery_voltage`;
CREATE TABLE `battery_voltage` (
  `time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `voltage` SMALLINT(20),
  PRIMARY KEY (`time`)
);
INSERT INTO `battery_voltage` values (CURRENT_TIMESTAMP, 10);