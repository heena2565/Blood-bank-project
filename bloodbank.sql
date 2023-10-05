-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 11:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_name`, `admin_username`, `admin_password`) VALUES
(1, 'Himani Mehra', 'Himanimehra25', '2565');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `blood_id` int(11) NOT NULL,
  `blood_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`blood_id`, `blood_group`) VALUES
(1, 'B+'),
(2, 'B-'),
(3, 'A+'),
(4, 'A-'),
(5, 'O+'),
(6, 'O-'),
(7, 'AB+'),
(8, 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'New Delhi'),
(2, 'Gurgaon'),
(3, 'Haldwani'),
(4, 'Mumbai'),
(5, 'Banglore'),
(6, 'kolkata'),
(7, 'Agra');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `contact_id` int(11) NOT NULL,
  `contact_address` varchar(100) NOT NULL,
  `contact_mail` varchar(50) NOT NULL,
  `contact_phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`contact_id`, `contact_address`, `contact_mail`, `contact_phone`) VALUES
(1, 'Noida, Uttar Pradesh (201301)', 'Bloodbank@gmail.com', '8676452498');

-- --------------------------------------------------------

--
-- Table structure for table `contact_query`
--

CREATE TABLE `contact_query` (
  `query_id` int(11) NOT NULL,
  `query_name` varchar(100) NOT NULL,
  `query_mail` varchar(120) NOT NULL,
  `query_number` char(10) NOT NULL,
  `query_message` longtext NOT NULL,
  `query_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `query_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_query`
--

INSERT INTO `contact_query` (`query_id`, `query_name`, `query_mail`, `query_number`, `query_message`, `query_date`, `query_status`) VALUES
(1, 'Himani Mehra', 'Himani@gmail.com', '8862329929', 'I need O+ Blood.', '2023-08-17 13:08:29', 1),
(3, 'himani ', 'himani@gmail.com', '7858488685', 'ok ok ok', '2023-08-18 14:18:50', NULL),
(4, '', '98832372019', 'giahs@yaho', 'aksatdahdanmafudhfsdajhfesbfj', '2023-10-04 11:12:01', NULL),
(5, '', '98832372019', 'giahs@yaho', 'aksatdahdanmafudhfsdajhfesbfj', '2023-10-04 11:12:56', NULL),
(6, '', '98832372019', 'giahs@yaho', 'aksatdahdanmafudhfsdajhfesbfj', '2023-10-04 11:12:56', NULL),
(7, 'Himani', '98832372019', 'giahs@yaho', 'aksatdahdanmafudhfsdajhfesbfj', '2023-10-04 11:13:40', NULL),
(8, 'Himani', '98832372019', 'giahs@yaho', 'aksatdahdanmafudhfsdajhfesbfj', '2023-10-04 11:13:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donor_details`
--

CREATE TABLE `donor_details` (
  `donor_id` int(11) NOT NULL,
  `donor_name` varchar(50) NOT NULL,
  `donor_number` varchar(10) NOT NULL,
  `donor_mail` varchar(50) DEFAULT NULL,
  `donor_age` int(60) NOT NULL,
  `donor_gender` varchar(10) NOT NULL,
  `donor_blood` varchar(10) NOT NULL,
  `donor_city` varchar(100) NOT NULL,
  `hospital_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor_details`
--

INSERT INTO `donor_details` (`donor_id`, `donor_name`, `donor_number`, `donor_mail`, `donor_age`, `donor_gender`, `donor_blood`, `donor_city`, `hospital_name`) VALUES
(14, 'Abhijeet Chandra', '8863734290', 'abhijeet23@gmail.com', 28, 'Male', 'B+', 'Agra', 'BDS hospital'),
(16, 'Riya Gupta', '7835247276', 'Riyagupta@yahoo.com', 24, 'female', 'AB+', 'Mumbai', 'City hospital'),
(17, 'Shikha Singh', '9887358293', 'sikha338@gmail.com', 28, 'female', 'O+', 'New Delhi', 'MPG Hospital'),
(19, 'Himani Mehra', '9837672006', 'himani_ok@gmail.com', 23, 'female', 'O+', 'New ', 'Safdarjang Hospital'),
(20, 'Jaya', '8957363585', 'jaya@outlook.com', 26, 'female', 'A-', 'Mumbai', 'City Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `needblood`
--

CREATE TABLE `needblood` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `bloodgroup` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_type` varchar(50) DEFAULT NULL,
  `page_data` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `page_type`, `page_data`) VALUES
(2, 'Why Become Donor', 'donor', '<span style=\" font-family:&quot;Open Sans&quot;, Arial, sans-serif; font-size:16px;  text-align:justify;\">Blood is the most precious gift that anyone can give to another-A gift of life. A decision to donate your blood can save a life, or even several if your blood is separated to its components-red cells, platelets and plasma- which can be used individually for patients with specific conditions. Safe blood saves lives and improves health. Blood transfusion is needed for: </span>\n<ul><span style=\" font-family:&quot;Open Sans&quot;, Arial, sans-serif; font-size:16px;  text-align:justify;\">\n<li>Women with complications of pregnancy, such as ectopic pregnancies and haemorrage before, during and after childbirth.</li>\n<li>People with severe trauma following man-made and natural disasters.</li>\n<li>Children with severe anaemia often resulting from malaria or malnutrition.</li>\n<li>Many complex medical and surgical procedures and cancer patients.</li>\n</ul></span>\n<br><span style=\" font-family:&quot;Open Sans&quot;, Arial, sans-serif; font-size:16px;  text-align:justify;\">It is also needed for regular transfusion for people with conditions such as thalassaemia and sickle cell disease and is used to make products as clotting factors for people with homophilia. There is a constant need for regular blood supply cause blood can be stored for only a limited time before use.Regular blood donations by a sufficient number of healthy people needed to ensure that safe blood will be available whenever wherever needed.</span>'),
(3, 'About Us ', 'aboutus', '<span style=\" font-family: &quot;Open Sans&quot;, Arial, sans-serif;text-align:justify; font-size:16px;\">Blood bank is a place where blood bag that is collected from blood donation events is stored in one place. The term “blood bank” refers to a division of a hospital laboratory where the storage of blood product occurs and where proper testing is performed to reduce the risk of transfusion related events . The process of managing the blood bag that is received from the blood donation events needs a proper and systematic management. The blood bag must be handled with care and treated thoroughly as it is related to someone’s life. The development of Web-based Blood Bank And Donation Management System is proposed to provide a management functional to the blood bank in order to handle the blood bag and to make entries of the individuals who want to donate blood and who are in need.</span>'),
(4, 'The need For Blood', 'needforblood', '<span style=\"font-family:&quot;Open Sans&quot;, Arial, sans-serif; text-align:justify; font-size:16px;\">There are many reasons patients need blood. A common misunderstanding about blood usage is that accident victims are the patients who use the most blood include those:<br>     1)Being treated for cancer.<br>   2) Undergoing orthopedic surgeries<br>   3)Undergoing cardiovascular surgeries<br>  4) Being treated for inherited blood disorders.</span>\n'),
(5, 'Blood Tips', 'bloodtips', '<span style=\" font-family:&quot;Open Sans&quot;, Arial, sans-serif; text-align:justify;font-size:16px;\">1)You must be in good health.<br> 2) Hydrate and eat a healthy meal before your donation.<br>3)You\'re never too old to donate blood.<br> 4)Rest and relaxed.<br> 5)Don\'t forget your FREE post-donation snack.</span>'),
(6, 'Who You Could Help', 'whoyouhelp', '<span style=\"font-family:&quot;Open Sans&quot;, Arial, sans-serif; text-align:justify; font-size:16px;\">In every 2 seconds, someone in the world needs blood. Donating blood can help:<br>1)People who go through disasters or emergency situations.<br> 2)People who lose blood during major surgeries.<br> 3)People who have lost blood because of a gastrointestinal bleed.<br>4)Women who have serious complications during pregnancy or childbirth.<br>5)People with cancer or severe anemia sometimes caused by thalassemia or sickle cell disease.</span>'),
(7, 'Blood Groups', 'bloodgroups', '<span style=\"font-family:&quot;Open Sans&quot;, Arial, sans-serif; text-align:justify; font-size:16px;\">Blood group of any human being will mainly fall in any one of the following groups:</span><br><ul style=\"font-family:&quot;Open Sans&quot;, Arial, sans-serif; text-align:justify;font-size:16px;\"> <li>A positive or A negative</li><li>B positive or B negative</li><li>O positive or O negative</li><li>AB positive or AB negative</li></ul><br><span style=\"font=family:&quot;Open Sans&quot;, Arial, sans-serif; text-align:justify;font-size:16px\">Your Blood group is determined by the genes you inherit from your parents.<br>  A healty diet helps ensure a successful blood donation, and also makes you feel better! </span>'),
(8, 'Universal Donors And Recepients', 'universal', '<span style=\" font-family:&quot;Open Sans&quot;, Arial, sans-serif; text-align:justify; font-size:16px;\"> The most common blood type is O, followed by type A.<br>  Type O individuals are often called \"Universal donors\" since their blood can be transfused into persons with any blood type.Those with type AB blood are called \"universal recipients\" because they can receive blood of any type. <br><br> For emergency transfusion, blood group type O negative blood is the variety of blood that has lowest risk of causing serious reactions for most people who receive it. Because of this, it\\\'s sometimes called the universal blood donor type.</span>');

-- --------------------------------------------------------

--
-- Table structure for table `query_stat`
--

CREATE TABLE `query_stat` (
  `id` int(11) NOT NULL,
  `query_type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `query_stat`
--

INSERT INTO `query_stat` (`id`, `query_type`) VALUES
(1, 'Read'),
(2, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_id` (`admin_id`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`blood_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `contact_query`
--
ALTER TABLE `contact_query`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `donor_details`
--
ALTER TABLE `donor_details`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `needblood`
--
ALTER TABLE `needblood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD UNIQUE KEY `page_id` (`page_id`),
  ADD UNIQUE KEY `page_type` (`page_type`);

--
-- Indexes for table `query_stat`
--
ALTER TABLE `query_stat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_query`
--
ALTER TABLE `contact_query`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donor_details`
--
ALTER TABLE `donor_details`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `needblood`
--
ALTER TABLE `needblood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
