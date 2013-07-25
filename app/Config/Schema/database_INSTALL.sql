CREATE TABLE `posts` (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`title` varchar(64) NOT NULL DEFAULT '',
	`user_id` int(10) NOT NULL,
	`body` TEXT NOT NULL,
	`created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE `users` (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`username` varchar(32),
	`password` varchar(64),
	`role` varchar(32),
	`created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
