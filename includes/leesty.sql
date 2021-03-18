CREATE TABLE `leesty`.`posts` ( `id` INT(3) NOT NULL AUTO_INCREMENT , `title` VARCHAR(100) NOT NULL , `details` VARCHAR(200) NOT NULL , `author` VARCHAR(20) NOT NULL , `date` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

-- this altered the date comlumn to timestamp

ALTER TABLE `posts` CHANGE `date` `date` TIMESTAMP NOT NULL;