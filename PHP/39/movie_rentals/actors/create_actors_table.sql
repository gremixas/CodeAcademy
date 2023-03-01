-- Active: 1676911882923@@127.0.0.1@3306@movie_rentals
-- DROP skirta dev mode

DROP TABLE IF EXISTS `movie_rentals`.`actors`;

CREATE TABLE IF NOT EXISTS `movie_rentals`.`actors`(
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `first_name` VARCHAR(50) NOT NULL,
    `last_name` VARCHAR(50) NOT NULL,
    `date_of_birth` DATE NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `deleted_at` TIMESTAMP NULL DEFAULT NULL
);