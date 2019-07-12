-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 06:33 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cts`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `studentID` varchar(255) NOT NULL,
  `Q1` varchar(255) NOT NULL,
  `Q2` varchar(255) NOT NULL,
  `Q3A` varchar(255) NOT NULL,
  `Q3B` varchar(255) NOT NULL,
  `Q4` varchar(255) NOT NULL,
  `Q5` varchar(255) NOT NULL,
  `Q6` varchar(255) NOT NULL,
  `Q7` varchar(255) NOT NULL,
  `Q8A` varchar(255) NOT NULL,
  `Q8B` varchar(255) NOT NULL,
  `Q8C` varchar(255) NOT NULL,
  `Q8D` varchar(255) NOT NULL,
  `Q8E` varchar(255) NOT NULL,
  `Q9A` varchar(255) NOT NULL,
  `Q9B` varchar(255) NOT NULL,
  `Q10` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`studentID`, `Q1`, `Q2`, `Q3A`, `Q3B`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8A`, `Q8B`, `Q8C`, `Q8D`, `Q8E`, `Q9A`, `Q9B`, `Q10`) VALUES
(' EIA170195', 'zero', '51', '58', '42', '62 = 74', 'D and B', 'Red', 'Use stopwatch, ruler and one wooden sticks', 'Dancer', 'TV Host', 'Dancer', 'Novelist', 'Marry', 'Fat One', 'Afternoon', 'Which one is lying'),
('EIA160247', '7', '374', '62', '38', '==', 'D and B', 'Red', '60000', 'Dancer', 'Novelist', 'TV Host', 'Fortune Teller', 'Marry', 'Fat One', 'Morning', 'which door would the other guy say would lead to safety?'),
('EIA160313', '7', 'more than one time', '58', '42', '=', 'D and B', 'Red', 'what', 'Dancer', 'Fortune Teller', 'Novelist', 'TV Host', 'Marry', 'Thin One', 'Afternoon', 'wait what is this'),
('EIA160314', '7', '20', '62', '38', '=', 'D and B', 'Red', 'no', 'Dancer', 'Fortune Teller', 'Novelist', 'Dancer', 'Marry', 'Thin One', 'Morning', 'ask where the other personpoint'),
('EIA170015', '7', '187', '62', '38', '=', 'D and B', 'Gold', 'don know', 'Fortune Teller', 'Novelist', 'Dancer', 'TV Host', 'Not Marry', 'Fat One', 'Morning', 'dont know'),
('EIA170063', 'zero', '51', '58', '42', '27 = 64', 'A and D', 'Silver', 'Use stopwatch and measure the burning time', 'Fortune Teller', 'TV Host', 'Dancer', 'Novelist', 'Not Marry', 'Thin One', 'Afternoon', 'Which door will the other one choose?'),
('EIA170089', 'zero', '274', '68', '32', '=', 'D and B', 'Red', 'x nak jawab', 'Dancer', 'Dancer', 'Dancer', 'Dancer', 'Marry', 'Fat One', 'Morning', 'what is your name'),
('EIA170103', '7', '274', '62', '38', '=', 'D and B', 'Red', 'single wood is 30 mins so divide to two parts each is 15 mins', 'Dancer', 'Dancer', 'Dancer', 'Dancer', 'Not Marry', 'Thin One', 'Morning', 'where would the other guy go to survive'),
('EIA170113', '7', 'None they all know each other', 'zero', 'zero', '24x67', 'D and B', 'Red', 'use a time', 'Dancer', 'Fortune Teller', 'Novelist', 'TV Host', 'Not Marry', 'Thin One', 'Afternoon', 'Which door is safe that the other man would say'),
('EIA170130', '0 remained on the following day as when day comes, the wind that comes along with it may blow it all up.', '51', '62', '38', '2 (7) = (6-4) 7', 'A and B', 'Gold', 'Image file', 'Dancer', 'Fortune Teller', 'Novelist', 'TV Host', 'Not Marry', 'Thin One', 'Afternoon', 'What is behind that door? (Showing one of the doors)'),
('EIA170150', '3', '51', '66', '34', '26 = 47', 'A and B', 'Silver', 'burn the sticks', 'Dancer', 'Dancer', 'Fortune Teller', 'TV Host', 'Marry', 'Fat One', 'Afternoon', 'ask the person who tells the truth which is the safe door'),
('EIA170152', '7', '374', '62', '38', '=', 'D and B', 'Red', 'cut to four parts', 'Novelist', 'Fortune Teller', 'TV Host', 'Dancer', 'Marry', 'Fat One', 'Morning', 'Can i survive here'),
('EIA170171', '3', '51', '56', '44', '74 = 62', 'D and B', 'Gold', 'When the stick is burn to 1/4 of its length means its been burning for 15 minutes.', 'Fortune Teller', 'Novelist', 'TV Host', 'Dancer', 'Not Marry', 'Fat One', 'Morning', 'Which is the exit?'),
('EIA170188', '1', '51', '58', '42', '67 = 42', 'D and B', 'Red', 'burn one stick for 1 hour and then burn another stick for 45 minutes', 'TV Host', 'Novelist', 'Fortune Teller', 'Dancer', 'Not Marry', 'Thin One', 'Morning', 'Which door he will tell me to take'),
('EIA170724', '7', '374', '62', '38', '2467', 'D and B', 'Red', 'Divide to small portions', 'Dancer', 'Novelist', 'TV Host', 'Fortune Teller', 'Marry', 'Thin One', 'Morning', 'Would the other guard exit through this door\r\n'),
('EIA170729', '7', '20', '276', '276', '=', 'D and B', 'Red', 'Divide two times in half so its 15 mins', 'Dancer', 'Dancer', 'Dancer', 'Dancer', 'Not Marry', 'Fat One', 'Afternoon', 'What will the other guard say which is the safe door is?'),
('EIA180093', '7', '20', 'zero', '100', '2467', 'D and B', 'Silver', 'Divide into 4', 'Dancer', 'Fortune Teller', 'TV Host', 'Novelist', 'Not Marry', 'Thin One', 'Afternoon', 'stick'),
('EIA180098', '7', '72', '62', '38', 'cannot', 'D and B', 'Red', '1/4', 'Novelist', 'Novelist', 'Novelist', 'Novelist', 'Not Marry', 'Thin One', 'Morning', 'both have tigers'),
('EIA180200', '7', '374', 'dont know', 'dont know', 'remove all except equal sign', 'D and B', 'Red', 'Dont know', 'Dancer', 'Fortune Teller', 'Novelist', 'TV Host', 'Not Marry', 'Fat One', 'Morning', 'Are you lying about this door being the safe route'),
('EIA180711', '7', 'Zero bacause they all know each other already but they wont be friends:(', '62', '38', '=', 'D and B', 'Red', 'Halve one wooden stick and thats 15 mins', 'Dancer', 'Dancer', 'Dancer', 'Dancer', 'Marry', 'Fat One', 'Afternoon', 'Push one of them into one door and if its safe go out');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `QuestionID` int(11) NOT NULL,
  `QuestionTEXT` varchar(1000) NOT NULL,
  `Answer` varchar(255) NOT NULL,
  `Mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`QuestionID`, `QuestionTEXT`, `Answer`, `Mark`) VALUES
(1, 'There was a power failure in the house. Mrs. Lim lighted up 10 candles. After sometime, four candles were blown out by the wind. Later, another three candles were blown out. How many candles remained on the following day? ', '7', 1),
(2, 'There are 20 people who love to solve puzzles. They met to solve puzzles together.\r\n					Among them, three are friends (i.e., already known each other). During their first\r\n					face-to-face meeting, they shook hands with each other (with unknowns only) except for\r\n					the three who were already known to each other.\r\n					Question: How many handshaking took place in this meeting?', '187', 2),
(3, 'There are altogether 100 birds and turtles. The total number of legs is 276. \r\n\r\nQuestion: How many birds and turtles are there, respectively? ', 'multiple', 2),
(4, 'Move the following numbers to make them equal, mathematically. Write your answer below. \r\n2 4 = 6 7', '7^2 = 49', 3),
(5, 'There are four (4) students: A, B, C, and D. They are discussing about their academic results. A says: If I get distinction, then B also gets distinction. B says: If I get distinction, then C also gets distinction. C says: If I get distinction, then D also gets distinction. All the four students are telling the truth. However, among these four students, only two students get distinctions. Who are the two students who got distinctions?', 'C and D', 1),
(6, 'There are three (3) boxes: a gold box, a silver box, and a red box. On top of each of the boxes, there is a sentence. In one of these three boxes, only one box contains a photo. The sentence on the gold box says: The photo is not inside the silver box. The sentence on the silver box says: The photo is not inside this box. The sentence on the red box says: The photo is inside this box. Among these three sentences, at least one sentence is true, and at least one sentence is false. \r\n\r\nQuestion: Which box contains the photo?', 'Gold', 2),
(7, 'Two thin wooden sticks take one (1) hour to complete burning, respectively. What is the method you will use to measure 15 minutes of burning time? Describe briefly and draw diagram(s) to illustrate your answer.', 'Burn one stick on both end and another on one end, when one of the sticks completely burn, burn the other stick on the other end', 3),
(8, 'There are four people: A, B, C, and D. They are predicting the future career for each other: dancer, fortune teller, novelist, and TV host. Based on their statements given below, only the statement given by the fortune teller is true.\r\nA: B will absolutely never become a dancer. \r\nB: C will become a fortune teller. \r\nC: D will never become a TV host. \r\nD: I’ll marry Mr. P\r\nQuestion: What are the respective career of A, B, C, and D, and will D marry Mr. P?', 'multiple', 5),
(9, 'There are two brothers, one of whom is fat and the other is thin. The elder brother will tell the truth in the morning, and will tell lie in the afternoon. The younger brother will be the reverse (i.e., tells lie in the morning, and tells the truth in the afternoon). \r\n\r\nOne man asked these two brothers: Who is the elder brother?\r\nThe fat one said: I’m the elder brother.\r\nThe thin one also said: I’m the elder brother.\r\nThe man asked again: What is the time now?\r\nThe fat one said: Almost noon.\r\nThe thin one also said: Already noon.\r\n\r\nQuestion: What is the time now (morning or afternoon), and who is the elder brother (the fat one or the thin one)? ', 'multiple', 2),
(10, 'In a room, there are two men. One tells the truth and the other tells lie. \r\nYou\'re in the room, and you want to leave the room from one of the exits (doors). \r\nThere is a lion behind one of the exit. \r\nThe other exit is safe.\r\n\r\nWhat is the question (ONE question ONLY) you will ask one of the men to know which is the safe exit?', 'Which door would the other man point if I asked which door is safe?', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentID` varchar(255) NOT NULL,
  `University` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Ethnic` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentID`, `University`, `Year`, `Gender`, `Age`, `Ethnic`, `Nationality`) VALUES
(' EIA170195', 'University of Malaya', 'second', 'Female', '18-21 years', 'Chinese', 'Malaysian'),
('BIX170846', 'University of Malaya', 'second', 'Female', '18-21 years', 'Chinese', 'Malaysian'),
('EIA160247', 'University of Malaya', 'third', 'Male', '22-25 years', 'Chinese', 'Malaysian'),
('EIA160313', 'University of Malaya', 'third', 'Female', '22-25 years', 'Indian', 'Malaysian'),
('EIA160314', 'University of Malaya', 'third', 'Female', '22-25 years', 'Indian', 'Malaysian'),
('EIA16247', 'University of Malaya', 'third', 'Male', '22-25 years', 'Chinese', 'Malaysian'),
('EIA170015', 'University of Malaya', 'second', 'Male', '18-21 years', 'Chinese', 'Malaysian'),
('EIA170063', 'University of Malaya', 'second', 'Female', '18-21 years', 'Chinese', 'Malaysian'),
('EIA170089', 'University of Malaya', 'second', 'Male', '18-21 years', 'Malay', 'Malaysian'),
('EIA170103', 'University of Malaya', 'second', 'Male', '18-21 years', 'Malay', 'Malaysian'),
('EIA170130', 'University of Malaya', 'second', 'Female', '22-25 years', 'Indian', 'Malaysian'),
('EIA170152', 'University of Malaya', 'second', 'Male', '22-25 years', 'Chinese', 'Malaysian'),
('EIA170171', 'University of Malaya', 'second', 'Male', '22-25 years', 'Chinese', 'Malaysian'),
('EIA170188', 'University of Malaya', 'second', 'Female', '22-25 years', 'Malay', 'Malaysian'),
('EIA170724', 'University of Malaya', 'second', 'Male', '22-25 years', 'Chinese', 'Chinese'),
('EIA170729', 'University of Malaya', 'second', 'Female', '18-21 years', 'Chinese', 'Malaysian'),
('EIA17113', 'University of Malaya', 'second', 'Female', '18-21 years', 'Chinese', 'Malaysian'),
('EIA180093', 'University of Malaya', 'first', 'Male', '18-21 years', 'Malay', 'Malaysian'),
('EIA180098', 'University of Malaya', 'first', 'Male', '18-21 years', 'Malay', 'Malaysian'),
('EIA180200', 'University of Malaya', 'first', 'Male', '18-21 years', 'Chinese', 'Malaysian'),
('EIA180711', 'University of Malaya', 'first', 'Female', '18-21 years', 'Chinese', 'Malaysian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`QuestionID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `QuestionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
