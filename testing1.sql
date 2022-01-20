-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 02:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '321');

-- --------------------------------------------------------

--
-- Table structure for table `tifr`
--

CREATE TABLE `tifr` (
  `category_id` int(11) NOT NULL,
  `category_designation` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `parent_category_id` int(11) NOT NULL,
  `options` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tifr`
--

INSERT INTO `tifr` (`category_id`, `category_designation`, `category_name`, `parent_category_id`, `options`) VALUES
(1, 'Director', 'Prof. Sandip Trivedi', 0, 'Enable'),
(2, 'Dean, Administration', 'Prof. Sreerup Raychaudhuri', 1, 'Enable'),
(4, 'Dean, Infrastructure', 'Prof. Sandip Ghosh', 1, 'Enable'),
(5, 'Dean, Natural Sciences Faculty', 'Prof. Kalobaran Malti', 1, 'Enable'),
(6, 'Dean, Mathematics Faculty', 'Prof. Eknath P Ghate', 1, 'Enable'),
(7, 'Dean, Technology and Computer Science Faculty', 'Prof. Sandeep K Juneja', 1, 'Enable'),
(8, 'Dean, Graduate Studies', 'Prof. Shubha Tole', 1, 'Enable'),
(9, 'Faculties', '', 8, 'Enable'),
(10, 'Dean, School of Natural Sciences', 'Prof. Kalobaran Maiti', 9, 'Enable'),
(11, 'Chairperson, Dept. of Theoretical Physics', 'Prof. Sourendu Gupta', 10, 'Enable'),
(12, 'Chairperson, Dept. of Astronomy & Astrophysics', 'Prof. Bhaswati Mookerjea', 10, 'Enable'),
(13, 'Chairperson, Dept. of High Energy Physics', 'Prof. Shashi R Dugad', 10, 'Enable'),
(14, 'Chairperson, Dept. of Condensed Matter Physics & Material Sciences', 'Prof. P L Paulose', 10, 'Enable'),
(15, 'Chairperson, Dept. of Chemical Sciences', 'Prof. Shyamalava Mazumdar', 10, 'Enable'),
(16, 'Chairperson, Dept. of Biological Sciences', 'Prof. Krishanu Ray', 10, 'Enable'),
(17, 'Chairperson, Dept. of Nuclear Atomic Physics', 'Prof. G Ravindrakumar', 10, 'Enable'),
(18, 'Dean, School of Mathematics', 'Prof. Eknath P Ghate', 9, 'Enable'),
(19, 'Dean, School of Technology & Computer Science', 'Prof. Sandeep K Juneja', 9, 'Enable'),
(20, 'National Centers', '', 8, 'Enable'),
(21, 'Centre Director, National Centre for Biological Sciences', 'Prof. Satyajit Mayor', 20, 'Enable'),
(22, 'Centre Director, National Centre for Radio Astronomy', 'Prof. Yashwant Gupta', 20, 'Enable'),
(23, 'Dean, Centre for Applicable Mathematics', 'Prof. G.D. Veerappa Gowda', 20, 'Enable'),
(24, 'Centre Director, Homi Bhabha Centre for Science Education', 'Prof. K Subramaniam', 20, 'Enable'),
(25, 'Centre Director, International Centre for Theoretical Sciences', 'Prof. Rajesh Gopakumar', 20, 'Enable'),
(26, 'Centre Director, TIFR Centre for Interdisciplinary Sciences', 'Prof. V Chandrasekhar', 9, 'Enable'),
(27, 'Deemed University', '', 8, 'Enable'),
(28, 'Chairperson, Academic Council', 'Prof. Sandip Trivedi', 27, 'Enable'),
(29, 'Dean, University Cell', 'Prof. Shubha Tole', 27, 'Enable'),
(30, 'Acting Assistant Registrar, Academics', 'Mr. Benedict V D\'souza', 27, 'Enable'),
(31, 'Administration', '', 8, 'Enable'),
(32, 'Registrar', 'Wg. Cdr.[Retd] George Antony', 31, 'Enable'),
(33, 'Deputy Registrar', 'Col.[Retd] Sanjay Balkrishna Gokhale', 31, 'Enable'),
(34, 'Establishment', 'Mr. Milind A. Athavale', 31, 'Enable'),
(35, 'Public Information Officer', 'Ms. Sucheta Dikshit', 31, 'Enable'),
(36, 'Public Relations Officer', 'Mr. Raju P Ambekar', 31, 'Enable'),
(37, 'Hindi Cell', 'Mr. Prashant Goswami', 31, 'Enable'),
(38, 'Purchase', 'Mr. Deepak Bhagirath Baghele', 31, 'Enable'),
(39, 'Stores', 'Mr. Deepak Bhagirath Baghele', 31, 'Enable'),
(40, 'Hostel & Off campus Accomodation', 'Mr. Mohan M. Kakade', 31, 'Enable'),
(41, 'Legal', 'Ms. Sucheta Dikshit', 31, 'Enable'),
(42, 'General Administration', 'Mr. T.J. Felix', 31, 'Enable'),
(43, 'Accounts', '', 8, 'Enable'),
(44, 'Head, Accounts', 'Mr. Kishore Paithankar', 43, 'Enable'),
(45, '', 'Scientific & Engineering Services', 8, 'Enable'),
(46, 'Auditorium  & Lecture Theatre', 'Mr. H. Raghavan', 45, 'Enable'),
(47, 'Auto Workshop', 'Mr. Sangam Sinha', 45, 'Enable'),
(48, 'Central Workshop', 'Mr. Sangam Sinha', 45, 'Enable'),
(49, 'Computer Center and Communication Facility', 'Mr. H. Raghavan', 45, 'Enable'),
(50, 'Information System Development Group', 'Dr. Nihita Goel', 45, 'Enable'),
(51, 'Scientific Information Resource Center', 'Dr. R. Prabakaran', 45, 'Enable'),
(52, 'Technical Services', 'Mr. Sangam Sinha', 45, 'Enable'),
(53, 'Facilities / Services', '', 8, 'Enable'),
(54, 'Canteen', 'Mr. Avinash V Tambe', 53, 'Enable'),
(55, 'Cosmetic Maintenance', 'Mr. Makrand V Raje', 53, 'Enable'),
(56, 'Dental Officer -in-Charge', 'Dr. Vilas S. Pawar', 53, 'Enable'),
(57, 'Hostel & Guest House', 'Mr. R.S. Chougule', 53, 'Enable'),
(58, 'Medical Officer-in-Charge', 'Dr. Sandhya Raghavan', 53, 'Enable'),
(59, 'Parks & Garden', 'Mr. R. M. Gumaste', 53, 'Enable'),
(60, 'Security', 'Mr. Bharat Bhushan Joshi', 53, 'Enable'),
(61, 'Transport', 'Mr. Bharat Bhushan Joshi', 53, 'Enable'),
(62, 'Travel', 'Mr. R.P. Ambekar', 53, 'Enable'),
(63, 'Chief Vigilance Officer', 'Prof. Eknath P Ghate', 8, 'Enable'),
(64, 'Public Information Officer', 'Ms. Sucheta Dikshit', 8, 'Enable'),
(65, 'Intellectual Property Rights', 'Prof. Shravan Hanasoge', 8, 'Enable'),
(67, 'Liaison Officer for SC/ST', 'Mr. Sangam Sinha', 8, 'Enable'),
(68, 'Liaison Officer for OBC', 'Mr. Kishore Paithankar', 8, 'Enable');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tifr`
--
ALTER TABLE `tifr`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tifr`
--
ALTER TABLE `tifr`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
