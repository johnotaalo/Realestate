CREATE TABLE `house_specifics` (
  `spec_id` int(11) NOT NULL AUTO_INCREMENT,
  `house_id` int(11) NOT NULL,
  `rooms` int(11) NOT NULL,
  `kitchen` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `garden` int(11) NOT NULL,
  `garage` int(11) NOT NULL,
  `other` text NOT NULL,
  PRIMARY KEY (`spec_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1