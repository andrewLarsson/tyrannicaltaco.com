CREATE TABLE `posts` (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`title` varchar(64) NOT NULL DEFAULT '',
	`user_id` int(10) NOT NULL,
	`body` TEXT NOT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE `users` (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`username` varchar(32),
	`password` varchar(64),
	`role` varchar(32),
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
