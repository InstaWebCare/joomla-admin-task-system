DROP TABLE IF EXISTS `#__admintask_tasks`;

DELETE FROM `#__content_types` WHERE (type_alias LIKE 'com_admintask.%');