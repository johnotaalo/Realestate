CREATE TABLE `house_value` (
  `value_id` int(11) NOT NULL AUTO_INCREMENT,
  `house_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `is_current` tinyint(4) NOT NULL,
  PRIMARY KEY (`value_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1