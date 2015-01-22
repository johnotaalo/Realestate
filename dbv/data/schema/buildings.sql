CREATE TABLE `buildings` (
  `build_id` int(11) NOT NULL AUTO_INCREMENT,
  `est_id` int(11) NOT NULL,
  `build_name` varchar(255) NOT NULL,
  `build_desc` text NOT NULL,
  `housetype_id` int(11) NOT NULL,
  PRIMARY KEY (`build_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1