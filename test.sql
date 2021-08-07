-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 08, 2021 at 01:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------
--
-- Table structure for table `php_datatables`
--

CREATE TABLE `php_datatables` (
  `title` varchar(25) NOT NULL,
  `body` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `php_datatables`
--

INSERT INTO `php_datatables` (`title`, `body`) VALUES
('Aileen J. Schmidt', 'Penatibus Et Corporation'),
('Zane W. Fry', 'Convallis Erat Eget PC'),
('Wyoming C. Herring', 'Vivamus Molestie LLP'),
('Orson E. Wallace', 'Vulputate Dui Nec Industries'),
('Juliet R. Kennedy', 'Magnis Dis Parturient Inc.'),
('Jemima L. Dunn', 'Dolor Vitae Dolor Corp.'),
('Iola B. Jordan', 'Quam Dignissim Corporation'),
('Britanney Q. Carpenter', 'Mus Donec Limited'),
('Louis E. Bird', 'Quis Urna Associates'),
('Michael B. Mitchell', 'Parturient Industries'),
('Lael I. Miranda', 'Cursus Purus Nullam Company'),
('Caryn A. Rosales', 'Vestibulum Corporation'),
('Dane N. Cherry', 'Lectus Sit Amet Limited'),
('Marsden N. Jensen', 'Blandit At Company'),
('Owen K. Hines', 'Aliquam LLC'),
('Orson H. Carr', 'Nulla Tempor Augue PC'),
('Chester X. Jarvis', 'Mauris Suspendisse Aliquet LLC'),
('Jocelyn D. Sanchez', 'Molestie Orci LLC'),
('Tatyana H. Duran', 'Magnis Dis Corporation'),
('Solomon G. Summers', 'Quisque Porttitor Institute'),
('Jonah P. Sparks', 'Congue In Ltd'),
('Cadman O. Cruz', 'Erat Industries'),
('Brynne T. Silva', 'Eu Dui Cum Corporation'),
('Roary V. Glenn', 'Donec Est Mauris Industries'),
('Adrian B. Ward', 'Orci Ltd'),
('Wynne I. Glass', 'Sed Tortor Corporation'),
('Whilemina F. Castro', 'Pellentesque Foundation'),
('Emily I. Day', 'Vitae Foundation'),
('Kristen G. Hill', 'Nisi Dictum Ltd'),
('Elizabeth J. Pugh', 'Malesuada Vel Convallis Incorporated'),
('Alfreda J. Hooper', 'Eget Institute'),
('Mollie W. Justice', 'Curae; Phasellus Ornare Inc.'),
('Debra H. Stone', 'Aliquet Phasellus Fermentum Ltd'),
('Moses R. Harrington', 'Lobortis Consulting'),
('Benedict Z. Mcfadden', 'Risus LLP'),
('Dexter G. Gardner', 'Nibh Enim Gravida LLP'),
('Elvis W. Flynn', 'Etiam Institute'),
('Marvin M. Patrick', 'In LLP'),
('Aiko T. Mcintyre', 'Magna Ut Tincidunt Ltd'),
('Priscilla A. Wells', 'Penatibus Et LLC'),
('Dolan R. Stanley', 'Non Leo Corporation'),
('Deanna Q. Boyer', 'Mauris Blandit Mattis LLC'),
('Mollie J. Chen', 'Sit Amet Nulla Ltd'),
('Oliver O. Figueroa', 'Aliquet Odio Etiam Industries'),
('Raymond F. Cummings', 'Cursus Luctus Industries'),
('Alvin R. Winters', 'Scelerisque Scelerisque Dui LLC'),
('Seth I. Jefferson', 'Mattis Velit Justo Industries'),
('Latifah K. Mcdonald', 'Ac Mattis Ornare Company'),
('Ali C. Cruz', 'A Felis LLC'),
('Perry G. Haynes', 'Eget Massa Suspendisse PC'),
('Germaine D. Avery', 'Nonummy Fusce Fermentum Industries'),
('Jocelyn T. Knowles', 'Mauris Company'),
('Dane U. Franklin', 'Purus Gravida Sagittis LLC'),
('Salvador V. Obrien', 'Nullam Vitae Incorporated'),
('Anastasia Y. Garner', 'Mollis PC'),
('Dale C. Flores', 'Donec Incorporated'),
('Garrett N. Hinton', 'Nunc Interdum Feugiat Ltd'),
('Ariel N. Fleming', 'Nunc Sollicitudin Corporation'),
('Lani D. Brown', 'Nascetur Ridiculus Industries'),
('Lareina K. Duncan', 'Cras Dictum Ultricies Ltd'),
('Iola A. Santiago', 'Amet Risus Donec Industries'),
('Hoyt H. Malone', 'Mauris Blandit Incorporated'),
('Brynn G. Mcgee', 'Morbi Tristique Company'),
('Callie M. Peterson', 'Metus In Nec Corporation'),
('Galena O. Mcgowan', 'A Sollicitudin LLP'),
('Igor J. Ayala', 'Ridiculus Mus LLP'),
('Jarrod A. Diaz', 'Ultricies Corporation'),
('Bruno Z. Wade', 'Convallis Ante Inc.'),
('Sara X. Curtis', 'Arcu Aliquam Inc.'),
('Rachel P. Combs', 'Quis LLC'),
('Walter V. Wolf', 'Facilisis Foundation'),
('Slade E. Conrad', 'Mattis Cras Eget Ltd'),
('Kaitlin S. Haley', 'Odio Vel Est Corporation'),
('Jaden Z. Wynn', 'Pede PC'),
('Cassidy D. Rush', 'Imperdiet Non PC'),
('Phillip J. Boyer', 'Vitae Risus Duis PC'),
('Bertha J. Daugherty', 'Convallis Institute'),
('Ebony U. Montgomery', 'Augue Eu Corporation'),
('Darrel V. Hogan', 'Elit Aliquam Limited'),
('Hope N. Carrillo', 'Nunc Foundation'),
('Serena G. Patel', 'Eget Magna Suspendisse Corp.'),
('Anthony X. Hardin', 'Erat Neque Non LLP'),
('Paul O. Sims', 'Non Lobortis Quis Incorporated'),
('Timothy Y. Petersen', 'Phasellus Libero Incorporated'),
('Caesar U. Valencia', 'Praesent Institute'),
('Unity C. Curry', 'Phasellus Incorporated'),
('Madaline T. Nelson', 'Justo Proin Industries'),
('Anastasia I. Reed', 'A Ultricies Adipiscing Corporation'),
('Linus D. Goodman', 'Gravida Mauris Industries'),
('Xena J. Adkins', 'Vulputate LLP'),
('Elijah X. Pitts', 'Nibh Corp.'),
('Brent Y. Hicks', 'Diam Dictum Sapien LLP'),
('Christopher I. Clay', 'Pede Industries'),
('Michael J. Sanford', 'Lorem Ipsum Dolor LLC'),
('Jolene A. Holmes', 'Morbi Non Sapien Limited'),
('Dorothy E. Buchanan', 'Non Ante Foundation'),
('Deirdre R. Coleman', 'Neque Nullam Nisl LLP'),
('Ori B. Alford', 'Eu Corporation'),
('Raymond W. Cole', 'Ligula Corp.'),
('Leila X. Branch', 'Lorem Inc.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
