<!-- admin -->
CREATE TABLE `admin` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
`fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
`email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
`phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
`created_time` datetime DEFAULT NULL,
`updated_time` datetime DEFAULT NULL,
`created_by` int(10) DEFAULT NULL,
`updated_by` int(10) DEFAULT NULL,
`admin_group_id` int(11) NOT NULL,
`deleted` tinyint(2) DEFAULT 0,
`status` tinyint(2) DEFAULT 1,
`thumb_version` tinyint(2) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

<!-- admin group -->
CREATE TABLE `admin_group` (
`id` int(10) NOT NULL,
`name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
`description` text COLLATE utf8_unicode_ci DEFAULT NULL,
`status` tinyint(2) DEFAULT NULL,
`created_time` datetime DEFAULT NULL,
`updated_time` datetime DEFAULT NULL,
`created_by` tinyint(2) DEFAULT NULL,
`updated_by` tinyint(2) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

<!-- category -->
CREATE TABLE `category` (
`id` int(11) NOT NULL DEFAULT 1,
`title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
`description` text COLLATE utf8_unicode_ci DEFAULT NULL,
`status` tinyint(4) DEFAULT 1,
`deleted` tinyint(4) DEFAULT 0,
`thumb_version` tinyint(2) DEFAULT NULL,
`created_time` datetime DEFAULT NULL,
`updated_time` datetime DEFAULT NULL,
`created_by` int(11) DEFAULT 1,
`updated_by` int(11) DEFAULT 1,
`view` int(11) DEFAULT NULL,
`parent_id` int(11) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

<!-- category video relation -->
CREATE TABLE `category_video_relation` (
`video_id` int(11) NOT NULL,
`category_id` int(11) NOT NULL,
`created_time` datetime DEFAULT NULL,
`status` tinyint(4) DEFAULT NULL,
`deleted` tinyint(4) DEFAULT NULL,
PRIMARY KEY (`video_id`,`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

<!-- user -->
CREATE TABLE `user` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`account_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
`fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
`email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
`mobile` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
`created_time` datetime DEFAULT NULL,
`updated_time` datetime DEFAULT NULL,
`created_by` int(10) DEFAULT NULL,
`updated_by` int(10) DEFAULT NULL,
`cover_version` tinyint(2) DEFAULT NULL,
`password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

<!-- video -->
CREATE TABLE `video` (
`id` int(11) NOT NULL,
`name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
`brief` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
`description` text COLLATE utf8_unicode_ci DEFAULT NULL,
`total_video` int(11) DEFAULT NULL,
`thumb_version` int(11) DEFAULT NULL,
`view` int(11) DEFAULT NULL,
`created_time` datetime DEFAULT NULL,
`updated_time` datetime DEFAULT NULL,
`created_by` int(11) DEFAULT NULL,
`updated_by` int(11) DEFAULT NULL,
`status` tinyint(4) DEFAULT 1,
`deleted` tinyint(4) DEFAULT 0,
`order` int(11) DEFAULT NULL,
`published` tinyint(2) DEFAULT NULL,
`published_time` datetime DEFAULT NULL,
`is_full` tinyint(2) DEFAULT NULL,
`is_hot` tinyint(2) DEFAULT NULL,
`copyright` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
`parent_id` int(10) DEFAULT NULL,
`seri_order` int(10) DEFAULT NULL,
`type` tinyint(2) DEFAULT NULL COMMENT '0: phim lẻ, 1: phim bộ',
`is_range_of_movies` tinyint(2) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

<!-- comment -->
CREATE TABLE `comment` (
`id` int(10) NOT NULL AUTO_INCREMENT,
`user_id` int(10) NOT NULL,
`video_id` int(10) NOT NULL,
`parent_id` int(10) DEFAULT NULL,
`title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
`content` text COLLATE utf8_unicode_ci DEFAULT NULL,
`status` tinyint(2) DEFAULT NULL,
`deleted` tinyint(2) DEFAULT NULL,
`created_time` datetime DEFAULT NULL,
`updated_time` datetime DEFAULT NULL,
`created_by` int(10) DEFAULT NULL,
`updated_by` datetime DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

<!-- ranking -->
CREATE TABLE `ranking` (
`id` int(10) NOT NULL,
`video_id` int(10) NOT NULL,
`type` tinyint(2) DEFAULT NULL,
`view` int(11) DEFAULT NULL,
`like` int(11) DEFAULT NULL,
`day` datetime DEFAULT NULL,
`created_time` datetime DEFAULT NULL,
`updated_time` datetime DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
