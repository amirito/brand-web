-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2015 at 07:31 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brands`
--
CREATE DATABASE IF NOT EXISTS `brands` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `brands`;

-- --------------------------------------------------------

--
-- Table structure for table `advertiseimages`
--

CREATE TABLE IF NOT EXISTS `advertiseimages` (
  `advertiseImages_ID` int(11) NOT NULL AUTO_INCREMENT,
  `advertiseImages_AdvertiseID` int(11) NOT NULL,
  `advertiseImages_ImageUrl` varchar(250) NOT NULL,
  `advertiseImages_ImageThumbnailUrl` varchar(250) NOT NULL,
  PRIMARY KEY (`advertiseImages_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `advertises`
--

CREATE TABLE IF NOT EXISTS `advertises` (
  `advertises_ID` int(11) NOT NULL AUTO_INCREMENT,
  `advertises_Name` varchar(250) NOT NULL,
  `advertises_Title` varchar(250) NOT NULL,
  `advertises_Description` varchar(250) NOT NULL,
  `advertises_RegisterDate` bigint(250) NOT NULL,
  `advertises_Active` tinyint(1) NOT NULL,
  `advertises_BrandID` int(11) NOT NULL,
  `advertises_ShopID` int(11) NOT NULL,
  `advertises_LikeCount` int(11) NOT NULL,
  `advertises_Price` int(11) NOT NULL,
  `advertises_HasDiscount` tinyint(1) NOT NULL,
  `advertises_PercentDiscount` int(11) NOT NULL,
  `advertises_IsSendDetail` tinyint(1) NOT NULL,
  `advertise_IsNew` tinyint(1) NOT NULL,
  PRIMARY KEY (`advertises_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `brandcategory`
--

CREATE TABLE IF NOT EXISTS `brandcategory` (
  `brandCategory_ID` int(11) NOT NULL AUTO_INCREMENT,
  `brandCategory_CategoryID` int(11) NOT NULL,
  `brandCategory_BrandID` int(11) NOT NULL,
  PRIMARY KEY (`brandCategory_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `brands_ID` int(11) NOT NULL AUTO_INCREMENT,
  `brands_Name` varchar(250) NOT NULL,
  `brands_Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`brands_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categories_ID` int(11) NOT NULL AUTO_INCREMENT,
  `categories_Name` varchar(250) NOT NULL,
  `categories_Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`categories_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shopbrand`
--

CREATE TABLE IF NOT EXISTS `shopbrand` (
  `shopBrand_ID` int(11) NOT NULL AUTO_INCREMENT,
  `shopBrand_ShopID` int(11) NOT NULL,
  `shopBrand_BrandID` int(11) NOT NULL,
  PRIMARY KEY (`shopBrand_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE IF NOT EXISTS `shops` (
  `shops_ID` int(11) NOT NULL AUTO_INCREMENT,
  `shops_Name` varchar(250) NOT NULL,
  `shops_Description` varchar(250) NOT NULL,
  `shops_Active` tinyint(1) NOT NULL,
  `shops_ManagerName` varchar(250) NOT NULL,
  `shops_Telephone` varchar(250) NOT NULL,
  `shops_Address` varchar(250) NOT NULL,
  PRIMARY KEY (`shops_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
