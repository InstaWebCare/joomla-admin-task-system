CREATE TABLE IF NOT EXISTS `#__admintask_tasks` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,

`asset_id` INT(10) UNSIGNED NOT NULL DEFAULT '0',

`title` VARCHAR(20)  NOT NULL ,
`description` TEXT NOT NULL ,
`state` TINYINT(1)  NOT NULL ,
`assigned_to` VARCHAR(255)  NOT NULL ,
`assignee` VARCHAR(255)  NOT NULL ,
`ordering` INT(11)  NOT NULL ,
`category` VARCHAR(255)  NOT NULL ,
`created_by` INT(11)  NOT NULL ,
`due_date` DATE NOT NULL ,
`priority` VARCHAR(255)  NOT NULL ,
`comments_thread` TEXT NOT NULL ,
PRIMARY KEY (`id`)
) DEFAULT COLLATE=utf8mb4_unicode_ci;

