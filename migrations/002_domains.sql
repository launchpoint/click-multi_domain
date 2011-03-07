CREATE TABLE IF NOT EXISTS `domains` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `parent_domain_id` int(11) default NULL COMMENT 'domains',
  `organization_id` int(11) default NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_description` varchar(255) default NULL,
  `styles` longtext,
  `created_at` datetime default NULL,
  `updated_at` datetime default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `organization_id` (`organization_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

insert into domains (name,title,styles) values ('default', 'Default', '');