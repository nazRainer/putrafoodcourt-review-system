-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2021 at 10:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kfry_feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback`(
    `ID` INT(11) NOT NULL,
    `StudentID` VARCHAR(40) NOT NULL,
    `question1` ENUM('5', '4', '3', '2', '1') NOT NULL,
    `question2` ENUM('5', '4', '3', '2', '1') NOT NULL,
    `question3` ENUM('5', '4', '3', '2', '1') NOT NULL,
    `question4` ENUM('5', '4', '3', '2', '1') NOT NULL,
    `question5` ENUM('5', '4', '3', '2', '1') NOT NULL,
    `question6` ENUM('5', '4', '3', '2', '1') NOT NULL,
    `question7` TEXT NOT NULL,
    `date` DATE NOT NULL
) ENGINE = INNODB DEFAULT CHARSET = utf8mb4;

INSERT INTO `feedback`(
    `ID`,
    `StudentID`,
    `question1`,
    `question2`,
    `question3`,
    `question4`,
    `question5`,
    `question6`,
    `question7`,
    `date`
)

CREATE TABLE `user`(
    `ID` INT(11) NOT NULL,
    `Name` CHAR(40) NOT NULL,
    `Email` VARCHAR(40) NOT NULL,
    `Password` VARCHAR(40) NOT NULL
) ENGINE = INNODB DEFAULT CHARSET = utf8mb4;

ALTER TABLE
    `feedback` ADD PRIMARY KEY(`ID`) USING BTREE;

ALTER TABLE
    `user` ADD PRIMARY KEY(`ID`) USING BTREE,
    ADD KEY `email`(`Email`) USING BTREE;
ALTER TABLE
    `user` ADD FULLTEXT KEY `name`(`Name`);

ALTER TABLE
    `feedback` MODIFY `ID` INT(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 13;

ALTER TABLE
    `user` MODIFY `ID` INT(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 18;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
