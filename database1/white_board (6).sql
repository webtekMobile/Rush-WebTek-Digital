-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 02:19 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `white_board`
--

-- --------------------------------------------------------

--
-- Table structure for table `question_upload`
--

CREATE TABLE `question_upload` (
  `ques_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `op1` varchar(60) NOT NULL,
  `op2` varchar(60) NOT NULL,
  `op3` varchar(60) NOT NULL,
  `op4` varchar(60) NOT NULL,
  `answer` varchar(40) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_upload`
--

INSERT INTO `question_upload` (`ques_id`, `question`, `op1`, `op2`, `op3`, `op4`, `answer`, `date`) VALUES
(1, 'edit', 'kshtu', 'kshitiZ', 'ksjiitizx', 'kshitiz', 'kshitiz', '2019-12-05'),
(2, 'edit', '', '', '', '', '', '2019-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin'),
(2, 'kshitiz@gmail.com', 'kshitiz'),
(3, 'arvind@gmail.com', 'arvind'),
(4, 'ram@gmail.com', 'ram'),
(5, 'shyam@gmail.com', 'shyam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_consultant`
--

CREATE TABLE `tbl_consultant` (
  `consult_id` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_consultant`
--

INSERT INTO `tbl_consultant` (`consult_id`, `cname`, `email`, `password`, `status`, `date`) VALUES
(14, 'awnish kumar', 'a@gmail.com', 'asdf', 'false', '2020-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE `tbl_content` (
  `content_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `consult_id` int(11) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `topic_inner` text NOT NULL,
  `file` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`content_id`, `subject_id`, `consult_id`, `topic`, `topic_inner`, `file`, `date`) VALUES
(1, 4, 0, 'introduction of js', '<p>js</p>\r\n\r\n<p>sjsk</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>hddbjwdfhw</p>\r\n\r\n<p>4bwddbewd</p>\r\n\r\n<p>hufwedw</p>\r\n\r\n<p>hwdifiwfdw</p>\r\n\r\n<p>dwdcjdwicndwfw</p>\r\n\r\n<p>wnfwefnwe</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '2020-03-14'),
(2, 9, 0, 'Getting Started with AutoCAD', '<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Starting the Software</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;User Interface</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">Working with Commands</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Cartesian Workspace</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Opening an Existing Drawing File</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Viewing Your Drawing</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">Saving Your Work</span></span></span></span></p>\r\n', '', '2020-03-19'),
(3, 9, 0, '. Basic Drawing & Editing Commands', '<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Drawing Lines</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Erasing Objects</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Drawing Lines with Polar Tracking</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Drawing Rectangles</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Drawing Circles</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Undo and Redo Actions</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">Using Running Object Snaps</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Using Object Snap Overrides</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Polar Tracking at Angles</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Object Snap Tracking</span></span></span></span></p>\r\n', '', '2020-03-19'),
(4, 2, 0, 'Making Changes in Your Drawing', '<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Selecting Objects for Editing</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Moving Objects</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Copying Objects</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Rotating Objects</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Scaling Objects</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Mirroring Objects</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">Editing with Grips</span></span></span></span></p>\r\n', '', '2020-03-19'),
(5, 2, 0, 'Making Changes in Your Drawing', '<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Selecting Objects for Editing</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Moving Objects</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Copying Objects</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Rotating Objects</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Scaling Objects</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Mirroring Objects</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">Editing with Grips</span></span></span></span></p>\r\n', '', '2020-03-19'),
(6, 9, 0, 'Organizing your Drawing with Layers', '<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Creating New Drawings with Templates</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;What are Layers?</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Layer States</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Changing an Object&rsquo;s Layer</span></span></span></span></p>\r\n', '', '2020-03-19'),
(7, 9, 0, 'Advanced Object Type', '<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Drawing Arcs</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Drawing Polylines</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Editing Polylines</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Drawing Polygons</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Drawing Ellipses</span></span></span></span></p>\r\n', '', '2020-03-19'),
(8, 9, 0, 'Getting Information from Your Drawing', '<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Working with object Properties</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Measuring Objects</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Advanced Editing Commands</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Trimming and Extending Objects</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Sketching Objects</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Creating Fillets and Chamfers</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Offsetting Objects</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Creating Arrays of Objects</span></span></span></span></p>\r\n', '', '2020-03-19'),
(9, 9, 0, 'Inserting Blocks', '<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">What are Blocks?</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Inserting Blocks</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Working with Dynamic Blocks</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Inserting Blocks with DesignCenter</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Inserting Blocks with Content Explorer</span></span></span></span></p>\r\n', '', '2020-03-19'),
(10, 9, 0, 'Setting Up a Layout', '<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Printing Concepts</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Working in Layouts</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Copying Layouts</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Creating Viewports</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Guidelines for Layouts</span></span></span></span></p>\r\n', '', '2020-03-19'),
(11, 9, 0, 'Printing Your Drawing', '<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">Printing Layouts</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Printing from the Model Tab</span></span></span></span></p>\r\n', '', '2020-03-19'),
(12, 9, 0, 'Printing Your Drawing', '<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">Printing Layouts</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Printing from the Model Tab</span></span></span></span></p>\r\n', '', '2020-03-19'),
(13, 9, 0, 'Text', '<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Working with Annotations</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Adding Text in a Drawing</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Modifying Multiline Text</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Formatting Multiline Text</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Adding Notes with Leaders to Your Drawing</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Creating Tables</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"background-color:white\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:10.0pt\">&nbsp;Modifying Tables</span></span></span></span></p>\r\n', '', '2020-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE `tbl_courses` (
  `course_id` int(11) NOT NULL,
  `course` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`course_id`, `course`, `date`) VALUES
(1, 'Foundation', '2020-03-19'),
(2, 'Technology', '2020-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_interview`
--

CREATE TABLE `tbl_interview` (
  `interview_id` int(11) NOT NULL,
  `consult_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `file` varchar(500) NOT NULL,
  `interview` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `reg_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `college` varchar(100) NOT NULL,
  `course` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `year` varchar(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`reg_id`, `name`, `gender`, `email`, `password`, `college`, `course`, `contact`, `year`, `date`) VALUES
(1, 'KSHITIZ TRIPATHI', 'male', 'kshitiztripathi231@gmail.com', '135788', 'c.s.j.m', 'Diploma(CS)', '9616680549', '1', '2019-12-06'),
(2, '', 'female', '', '', '', '', '', '', '2020-02-19'),
(3, '', '', '', '', '', '', '', '', '2020-02-19'),
(4, '', '', '', '', '', '', '', '', '2020-02-19'),
(5, '', '', '', '', '', '', '', '', '2020-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_result`
--

CREATE TABLE `tbl_result` (
  `result_id` int(11) NOT NULL,
  `enrollment` varchar(50) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `obtain_mark` int(11) NOT NULL,
  `total_mark` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_result`
--

INSERT INTO `tbl_result` (`result_id`, `enrollment`, `test_name`, `obtain_mark`, `total_mark`, `date`) VALUES
(1, 'SPI/VT/2020/001', '1', 50, 50, '2020-03-19'),
(2, 'SPI/ST/2020/002', '1', 30, 50, '2020-03-19'),
(3, 'SPI/VT/2020/003', '1', 40, 50, '2020-03-19'),
(4, 'SPI/ST/2020/004', '1', 10, 50, '2020-03-19'),
(5, 'SPI/VT/2020/005', '1', 34, 50, '2020-03-19'),
(6, 'SPI/VT/2020/001', '1', 23, 50, '2020-03-19'),
(7, 'SPI/ST/2020/002', '1', 30, 50, '2020-03-19'),
(8, 'SPI/VT/2020/003', '1', 40, 50, '2020-03-19'),
(9, 'SPI/ST/2020/004', '1', 10, 50, '2020-03-19'),
(10, 'SPI/VT/2020/005', '1', 34, 50, '2020-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `enrollment` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `training` varchar(30) NOT NULL,
  `technology` varchar(30) NOT NULL,
  `college_name` varchar(500) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `grade` varchar(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`enrollment`, `name`, `mobile`, `email`, `training`, `technology`, `college_name`, `branch`, `grade`, `date`) VALUES
('SPI/ST/2020/002', 'Kshitiz Tripathi', 7985787660, 'kshitizk@gmail.com', 'Summer', 'JAVA', 'BSSITM Lucknow', 'CS/IT', 'D', '2020-03-19'),
('SPI/ST/2020/004', 'Shivani Dwivedi', 7985787660, 'shivani@gmail.com', 'Summer', 'ANDROID', 'BBDU Lucknow', 'CS/IT', 'D', '2020-03-19'),
('SPI/VT/2020/001', 'Arvind ', 7985787660, 'arvind007.av@gmail.com', 'Vocational', 'PHP', 'G P Mirzapur', 'CS/IT', 'B', '2020-03-19'),
('SPI/VT/2020/003', 'Rahul Sharma', 7985787660, 'rahul@gmail.com', 'Vocational', 'PYTHON', 'G P Ambedkarnagar', 'CS/IT', 'D', '2020-03-19'),
('SPI/VT/2020/005', 'Sagar Mishra', 7985787660, 'sagar@gmail.com', 'Vocational', 'HTML', 'G P Pratapgarh', 'CS/IT', 'D', '2020-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `subject_id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`subject_id`, `subject`, `course_id`, `date`) VALUES
(1, 'HTML', 1, '2020-03-19'),
(2, 'CSS', 1, '2020-03-19'),
(3, 'JAVASCRIPT', 1, '2020-03-19'),
(5, 'JQUERY', 2, '2020-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE `tbl_task` (
  `task_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `trainer_name` varchar(100) NOT NULL,
  `task` text NOT NULL,
  `upload_task` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_task`
--

INSERT INTO `tbl_task` (`task_id`, `subject_id`, `trainer_name`, `task`, `upload_task`, `date`) VALUES
(2, 2, 'Abhishek Kumar', '<p>dhd</p>\r\n', 'NULL', '2020-03-12'),
(3, 2, 'Brijesh Kumar', 'NULL', 'subhangir.pdf', '2020-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testname`
--

CREATE TABLE `tbl_testname` (
  `testn_id` int(11) NOT NULL,
  `testname` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testname`
--

INSERT INTO `tbl_testname` (`testn_id`, `testname`, `date`) VALUES
(1, 'welcome test', '2020-03-19'),
(2, 'Html', '2020-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upload`
--

CREATE TABLE `tbl_upload` (
  `up_id` int(11) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_upload`
--

INSERT INTO `tbl_upload` (`up_id`, `file`, `date`) VALUES
(1, 'spilogo.png', '2019-12-24'),
(3, 'spilogo.png', '2019-12-24'),
(4, '', '2019-12-24'),
(5, 'spilogo.png', '2019-12-24'),
(6, '', '2019-12-24'),
(7, 'spilogo.png', '2019-12-24'),
(8, '', '2019-12-24'),
(9, 'spilogo.png', '2019-12-24'),
(10, '', '2019-12-24'),
(11, 'spilogo.png', '2019-12-24'),
(12, '', '2019-12-24'),
(13, 'spilogo.png', '2019-12-24'),
(14, '', '2019-12-24'),
(15, 'spilogo.png', '2019-12-24'),
(16, '', '2019-12-24'),
(17, 'spilogo.png', '2019-12-24'),
(18, '', '2019-12-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question_upload`
--
ALTER TABLE `question_upload`
  ADD PRIMARY KEY (`ques_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_consultant`
--
ALTER TABLE `tbl_consultant`
  ADD PRIMARY KEY (`consult_id`);

--
-- Indexes for table `tbl_content`
--
ALTER TABLE `tbl_content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tbl_interview`
--
ALTER TABLE `tbl_interview`
  ADD PRIMARY KEY (`interview_id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `tbl_result`
--
ALTER TABLE `tbl_result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`enrollment`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `tbl_testname`
--
ALTER TABLE `tbl_testname`
  ADD PRIMARY KEY (`testn_id`);

--
-- Indexes for table `tbl_upload`
--
ALTER TABLE `tbl_upload`
  ADD PRIMARY KEY (`up_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question_upload`
--
ALTER TABLE `question_upload`
  MODIFY `ques_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_consultant`
--
ALTER TABLE `tbl_consultant`
  MODIFY `consult_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_content`
--
ALTER TABLE `tbl_content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_interview`
--
ALTER TABLE `tbl_interview`
  MODIFY `interview_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_result`
--
ALTER TABLE `tbl_result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_task`
--
ALTER TABLE `tbl_task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_testname`
--
ALTER TABLE `tbl_testname`
  MODIFY `testn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_upload`
--
ALTER TABLE `tbl_upload`
  MODIFY `up_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
