CREATE TABLE IF NOT EXISTS `domain_names` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  `domain_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;
