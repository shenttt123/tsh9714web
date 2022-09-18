use tsh9714web;
DROP TABLE IF EXISTS `battery_voltage`;
CREATE TABLE `battery_voltage` (
  `time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `voltage` FLOAT(20),
  PRIMARY KEY (`time`)
);
