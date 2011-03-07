CREATE TABLE IF NOT EXISTS `menu_items` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(20) NOT NULL,
  `domain_id` int(11) NOT NULL,
  `url` varchar(100) default NULL,
  `order` int(11) NOT NULL,
  `location` char(6) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
