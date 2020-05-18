-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 07:30 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cil_vansh`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(20) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `title`, `body`, `created_at`, `image_path`) VALUES
(1, 1, 'Test Article', 'Test Article', '2020-03-07 13:48:05', ''),
(44, 2, 'Test1', '<p><strong>ggggggg</strong></p>\r\n', '2020-03-07 10:37:12am', ''),
(45, 2, 'Test2', '2', '2020-03-07 10:37:20am', ''),
(46, 2, 'Gym', '<p>&lt;<strong><em><s>p&gt;How will my life be different if I go to the gym everyday? I haven&amp;#39;t missed a single workout in past 1.5+ year (only if I have to go outside the city due to work). Oct-2016 I don&amp;#39;t like the reflection of myself- lanky, lost in the world, lost in the world that I have created around myself. Even when I was settled, I wasn&amp;#39;t happy, mornings were tough. I have always been a bit conscious about my surroundings and I see the world in a different way. This has led to the feeling of isolation from my surroundings even when everything around me was good. I met psychiatrist, he convinced me do some sort of exercises and it made some sense to me as well. &amp;ldquo;If I am working out, I will not be living in my own world, I don&amp;rsquo;t have to deal with the morning&amp;rdquo;- That was my thought. I started with running, 3 km then 5 km then cycling sometimes 40 km sometimes even more. Running was good but it was not rewarding. I could not go below 27 minutes for 5 km, I tried, I failed. It teaches you lesson. It was exhausting. It was painful. The only thing that gave me relief was the sweat, mind usually went into meditation mode, it did not care about the world. But as soon as I reached home, reality again hit me on the face. I &lt;strong&gt;need more sweat, more rewarding things, this led me to the gym. Weights were demanding, so was I. They need someone to lift them, so did my self esteem. It was a relation, a love and respect for each other. Fast forward 2018: 5.30 am- Wake up, get the coffee going on the side, take pre- workout essentials. 6:15 am- Its Saturday. When most people are enjoying the Weekend morning, its time to hit the legs. 7.45 am- Stuff up all the gym clothing,bottles in bag, heads towards home. 7.55 am- Breakfast is on the stove, chia seeds are ready, need to prepare the almonds, eggs are in egg boiler. Time is running out for office. 8:05 am- Apple and peanuts for evening snacks, goes into the office bag. One more thing done. Need to set the curd of dinner. Done..!! 8:20 am- Shower is done, time to eat the breakfast. 8.30 am- Breakfast done, time to peel the eggs. Outside home, office vehicle is honking now, rushes through the egg, put them in container, will eat around 11 am in office. Packs the bag and leave for office. This is how every morning looks like. No time for mind to wonder around, no time for sit and think about future, the mistakes of past, regrets and wondering about the meaning of life. Mind still tries to run away with the past and future but present is qu&lt;/strong&gt;ite strict, it doesn&amp;rsquo;t like when he try to console the past or build dreams with future.&lt;/p&gt;</s></em></strong></p>\r\n', '2020-03-07 11:22:56am', ''),
(47, 2, 'Test for space', 'his\r\n\r\n\r\n\r\n\r\n\r\nspace \r\n\r\n\r\n\r\nhi', '2020-03-07 11:29:34am', ''),
(48, 2, 'Test Article Title', 'test', '2020-03-09 10:17:28am', ''),
(49, 2, 'Test Final', 'Final', '2020-03-09 04:37:51pm', 'http://[::1]/ci/uploads/PHOTO8.jpg'),
(50, 2, 'Test Article Title', '<b>HI I am bold</b>', '2020-03-10 04:28:56am', 'http://[::1]/ci/uploads/PHOTO9.jpg'),
(51, 2, 'sdfsdfsdfsdf', '<p><strong>sdfasdfasdf</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>dfsdfsdfsdf</strong></p>\r\n', '2020-03-12 02:51:38pm', 'http://[::1]/ci/uploads/PHOTO10.jpg'),
(52, 2, 'Gym', '<p>I preferred to workout in late afternoon on work days, and late morning on non work days. These are the following reasons:</p>\r\n\r\n<ol>\r\n	<li>Eat enough food for workout energy.</li>\r\n	<li>Did not have to rush my workout.</li>\r\n	<li>I could go all out on weight and duration as well as intensity.</li>\r\n	<li>Ate a good after workout meal.</li>\r\n	<li>Got a good night or afternoon rest for recovery.</li>\r\n</ol>\r\n\r\n<p>NOTE: Many people would prefer morning workout but they didn&rsquo;t have to put in 120% for 75 - 90 minutes of non-stop progressive weight lifting. Keep in mind workout is my first priority in life for the last 50 years; not family, money or anything else.</p>\r\n', '2020-03-12 02:56:52pm', 'http://[::1]/ci/uploads/how1.png'),
(53, 2, 'Pause the Moment first blog', '<p><strong>sxfsdfsssssssssssdff</strong></p>\r\n', '2020-03-12 07:57:51pm', 'http://[::1]/ci/uploads/how11.png'),
(54, 2, 'sdffffffffff', '<p><s><em>xdfsdfsdfffffffffff</em></s></p>\r\n', '2020-03-13 04:44:27am', 'http://[::1]/ci/uploads/call.jpg'),
(55, 2, 'ddddddd', '1', '2020-03-15 06:30:22pm', 'http://[::1]/ci/uploads/background1.jpg'),
(56, 2, 'iisdksdfi', '<p><strong>ddddddddddddddd</strong></p>\r\n', '2020-03-15 06:34:04pm', 'http://[::1]/ci/uploads/agreement.jpg'),
(57, 2, 'Test5', '<p><em><strong>Test</strong></em></p>\r\n', '2020-03-15 06:48:03pm', 'http://[::1]/ci/uploads/background2.jpg'),
(58, 2, 'Test6', '<p><s>gggfdfg</s></p>\r\n', '2020-03-15 06:49:53pm', 'http://[::1]/ci/uploads/blog.png');

-- --------------------------------------------------------

--
-- Table structure for table `draf_product`
--

CREATE TABLE `draf_product` (
  `id` int(11) NOT NULL,
  `image` varchar(40) NOT NULL,
  `product` varchar(30) NOT NULL,
  `onbtn` varchar(30) NOT NULL,
  `hiddenprice` int(30) NOT NULL,
  `price` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `draf_product`
--

INSERT INTO `draf_product` (`id`, `image`, `product`, `onbtn`, `hiddenprice`, `price`) VALUES
(1, 'images/rentagr2.jpg', 'Rent Agreement', 'Draft Document', 150, 99),
(2, 'images/partner1.png', 'Partnership Deed', 'Draft Document', 150, 99),
(3, 'images/affidavit2.png', 'Affidavit', 'Draft Document', 139, 69),
(4, 'images/contract.jpg', 'Agreements', 'Draft Document', 199, 149);

-- --------------------------------------------------------

--
-- Table structure for table `rent_form`
--

CREATE TABLE `rent_form` (
  `rent_form_id` int(11) NOT NULL,
  `purpose_of_renting` varchar(255) DEFAULT NULL,
  `type_of_agreement` varchar(255) DEFAULT NULL,
  `duration_of_agreement` varchar(255) DEFAULT NULL,
  `type_of_property` varchar(255) DEFAULT NULL,
  `landlord_name` varchar(255) DEFAULT NULL,
  `landlord_age` varchar(255) DEFAULT NULL,
  `landlord_gender` varchar(255) DEFAULT NULL,
  `landlord_father_name` varchar(255) DEFAULT NULL,
  `landlord_husband_name` varchar(255) DEFAULT NULL,
  `landlord_street_address` varchar(255) DEFAULT NULL,
  `landlord_city` varchar(255) DEFAULT NULL,
  `landlord_state` varchar(255) DEFAULT NULL,
  `landlord_pincode` varchar(255) DEFAULT NULL,
  `tenant_name` varchar(255) DEFAULT NULL,
  `tenant_age` varchar(255) DEFAULT NULL,
  `tenant_gender` varchar(255) DEFAULT NULL,
  `tenant_father_name` varchar(255) DEFAULT NULL,
  `tenant_husband_name` varchar(255) DEFAULT NULL,
  `tenant_id_cardno` varchar(255) DEFAULT NULL,
  `tenant_identity_doc_name` varchar(255) DEFAULT NULL,
  `tenant_street_address` varchar(255) DEFAULT NULL,
  `tenant_city` varchar(255) DEFAULT NULL,
  `tenant_state` varchar(255) DEFAULT NULL,
  `tenant_pincode` varchar(255) DEFAULT NULL,
  `rental_property_address` varchar(255) DEFAULT NULL,
  `rented_property_city` varchar(255) NOT NULL,
  `rented_property_state` varchar(255) NOT NULL,
  `rented_property_pin` varchar(255) NOT NULL,
  `rental_property_place_agreement` varchar(255) DEFAULT NULL,
  `rental_property_execution_date` varchar(255) DEFAULT NULL,
  `rental_property_no_of_office` varchar(255) DEFAULT NULL,
  `rental_property_no_of_carparking` varchar(255) DEFAULT NULL,
  `rental_property_room_set` varchar(255) DEFAULT NULL,
  `rental_property_floor` varchar(255) DEFAULT NULL,
  `rental_property_bathrooms` varchar(255) DEFAULT NULL,
  `rental_property_area` varchar(255) DEFAULT NULL,
  `rental_property_balconies` varchar(255) DEFAULT NULL,
  `rental_property_is_subletting_allow` varchar(255) DEFAULT NULL,
  `rent_security_deposit_amount` varchar(255) DEFAULT NULL,
  `rent_giving_date` varchar(255) DEFAULT NULL,
  `monthly_maintaince` varchar(255) DEFAULT NULL,
  `security_deposit_payment_mode` varchar(255) DEFAULT NULL,
  `rent_amount` varchar(255) DEFAULT NULL,
  `rent_amount_word` varchar(255) NOT NULL,
  `dd_check_value` varchar(255) DEFAULT NULL,
  `date_of_commencement` varchar(255) DEFAULT NULL,
  `rate_of_rent_percent` varchar(255) DEFAULT NULL,
  `aggreed_among_both_parties` varchar(255) DEFAULT NULL,
  `terms_painting` varchar(255) DEFAULT NULL,
  `terms_pets` varchar(255) DEFAULT NULL,
  `terms_food` varchar(255) DEFAULT NULL,
  `terms_lock_in_period` varchar(255) DEFAULT NULL,
  `penalty_clause_1` varchar(255) DEFAULT NULL,
  `penalty_clause_2` varchar(255) DEFAULT NULL,
  `penalty_clause_3` varchar(255) DEFAULT NULL,
  `utilities_list` longtext DEFAULT NULL,
  `created_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent_form`
--

INSERT INTO `rent_form` (`rent_form_id`, `purpose_of_renting`, `type_of_agreement`, `duration_of_agreement`, `type_of_property`, `landlord_name`, `landlord_age`, `landlord_gender`, `landlord_father_name`, `landlord_husband_name`, `landlord_street_address`, `landlord_city`, `landlord_state`, `landlord_pincode`, `tenant_name`, `tenant_age`, `tenant_gender`, `tenant_father_name`, `tenant_husband_name`, `tenant_id_cardno`, `tenant_identity_doc_name`, `tenant_street_address`, `tenant_city`, `tenant_state`, `tenant_pincode`, `rental_property_address`, `rented_property_city`, `rented_property_state`, `rented_property_pin`, `rental_property_place_agreement`, `rental_property_execution_date`, `rental_property_no_of_office`, `rental_property_no_of_carparking`, `rental_property_room_set`, `rental_property_floor`, `rental_property_bathrooms`, `rental_property_area`, `rental_property_balconies`, `rental_property_is_subletting_allow`, `rent_security_deposit_amount`, `rent_giving_date`, `monthly_maintaince`, `security_deposit_payment_mode`, `rent_amount`, `rent_amount_word`, `dd_check_value`, `date_of_commencement`, `rate_of_rent_percent`, `aggreed_among_both_parties`, `terms_painting`, `terms_pets`, `terms_food`, `terms_lock_in_period`, `penalty_clause_1`, `penalty_clause_2`, `penalty_clause_3`, `utilities_list`, `created_at`) VALUES
(1, 'Residential', 'Monthly Rental', '1', 'Apartment', 'Goransh Kumar Bhatia', '27', 'Female', 'Jagan Nath', 'Saraswati Devi', '92', 'Faridabad', 'Haryana', '121001', 'Richa Pathak', '28', 'Female', 'Vinay Pathak', 'r', 'r', 'Aadhaar', 'x', 'x', 'x', 'x', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', NULL, '2020-05-07 13:02:11.000000'),
(2, 'Residential', 'Long Term Lease', '1', 'Room', 'Goransh Kumar Bhatia', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', 'Washing-Machine', '2020-05-07 13:18:49.000000'),
(3, 'Residential', 'Monthly Rental', '1', 'Apartment', 'Goransh Kumar Bhatia', '27', 'Male', 'Jagan Nath', '', '92', 'Faridabad', 'Haryana', '121001', 'Richa Pathak', '28', 'Female', 'Vinay Pathak', 'r', 'r', 'Voters Id', '1', 'Faridabad', 'Haryana', '121001', '', '', '', '', 'Faridabad', '2020-05-07', '', '0', '2', '1st', '2', '10', '2', 'Yes', '2000', '2020-05-07', '5000', 'Cheque', '5000', '', '1', '2020-05-07', '10', 'no wodden work will be allowed', 'Include', 'Include', NULL, 'Include', '1000', '1000', '1000', 'Sofa,Chimney', '2020-05-07 13:27:38.000000'),
(4, 'Residential', 'Monthly Rental', '11 months', 'House', 'Goransh Kumar Bhatia', '27', 'Male', 'Jagan Nath', '', '92', 'Faridabad', 'Haryana', '121001', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', NULL, '2020-05-08 09:59:39.000000'),
(5, 'Residential', 'Monthly Rental', '11 months', 'Apartment', 'Goransh Kumar Bhatia', '27', 'Male', 'Jagan Nath', '', '92', 'Faridabad', 'Haryana', '121001', 'Richa Pathak', '17', 'Male', 'Vinay Pathak', '', '', 'Aadhaar', '82', 'Faridabad', 'Haryana', '121001', '', '', '', '', 'Faridabad', '2020-05-08', '', '0', '3', 'first floor', '2', '10', '2', 'Yes', '2000', '2020-05-08', '5000', 'Online Transfer', '5000', '', '', '2020-05-08', '10', 'no wodden work will be allowed', 'Include', 'Include', 'Include', 'Include', '1000', '1000', '1000', 'Workstations,Sofa,Tables,Almirah,Office-Chairs,Bulbs', '2020-05-08 10:09:52.000000'),
(6, NULL, NULL, '', NULL, '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', 'xxxx', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', NULL, '2020-05-08 13:00:49.000000'),
(7, NULL, NULL, '', NULL, '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', 'xxxxxxx', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', NULL, '2020-05-08 13:02:26.000000'),
(8, NULL, NULL, '', NULL, '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', 'xxxxx', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', NULL, '2020-05-08 13:04:24.000000'),
(9, NULL, NULL, '', NULL, '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', 'xxxxxx', 'xxxxxxx', 'xxxxxxxx', 'xxxxxxxx', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', NULL, '2020-05-08 13:10:44.000000'),
(10, NULL, NULL, '', NULL, '', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '50000', 'fifty thousand ', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', NULL, '2020-05-09 11:14:34.000000'),
(11, 'Residential', 'Monthly Rental', '11', 'Apartment', 'Goransh Kumar Bhatia', '27', 'Female', 'Jagan Nath', 'Saraswati Devi', '92 Rahul Colony NIT', 'Faridabad', 'Haryana', '121001', 'Richa Pathak', '28', 'Male', 'Vinay Pathak', '', '.320323232', '', '82 rahul colony nit faridabad', 'Faridabad', 'Haryana', '121001', 'H.no. 82 sector -23. Faridabad', 'faridabad', 'haryana', '121001', 'Faridabad', '2020-05-09', '', '0', '2', '1st', '2', '10', '2', 'No', '2000', '2020-05-09', '5000', 'Online Transfer', '5000', 'Five thousand ', '', '2020-05-09', '10', 'no wodden work will be allowed', 'Include', 'Include', 'Include', 'Include', '1000', '1000', '1000', 'Tube-Lights', '2020-05-09 11:57:40.000000'),
(12, 'Residential', 'Monthly Rental', '11 months', 'House', 'jh,jhhg', '', NULL, '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '', '', '', NULL, '2020-05-10 13:47:54.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rent_form`
--
ALTER TABLE `rent_form`
  ADD PRIMARY KEY (`rent_form_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rent_form`
--
ALTER TABLE `rent_form`
  MODIFY `rent_form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
