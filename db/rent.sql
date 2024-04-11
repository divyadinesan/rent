-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 11:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_image` varchar(1000) NOT NULL,
  `category_type` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`, `category_type`) VALUES
(1, 'car', '1659090829.jpg', 'vehicle'),
(2, 'Bike', '1659090936.jpg', 'vehicle'),
(3, 'Scooty', '1659090972.jpg', 'vehicle'),
(4, 'House', '1671180510.jpg', 'home');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `house_id` int(11) NOT NULL,
  `h_category_id` int(11) NOT NULL,
  `h_vendor_id` int(11) NOT NULL,
  `h_vendor_email` varchar(700) NOT NULL,
  `h_Address` varchar(1000) NOT NULL,
  `h_Property_Size` varchar(500) NOT NULL,
  `h_Total_Rooms` varchar(500) NOT NULL,
  `h_Bedrooms` varchar(100) NOT NULL,
  `h_Bathrooms` varchar(100) NOT NULL,
  `h_Year_Build` varchar(600) NOT NULL,
  `h_description` varchar(1000) NOT NULL,
  `h_rent` varchar(1000) NOT NULL,
  `h_image` varchar(1000) NOT NULL,
  `h_status` varchar(500) NOT NULL,
  `h_aggrement` varchar(110) NOT NULL,
  `h_room1` varchar(500) NOT NULL,
  `h_room2` varchar(1000) NOT NULL,
  `h_verify_rent` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`house_id`, `h_category_id`, `h_vendor_id`, `h_vendor_email`, `h_Address`, `h_Property_Size`, `h_Total_Rooms`, `h_Bedrooms`, `h_Bathrooms`, `h_Year_Build`, `h_description`, `h_rent`, `h_image`, `h_status`, `h_aggrement`, `h_room1`, `h_room2`, `h_verify_rent`) VALUES
(1, 4, 3, 'dinesan@gmail.com', 'Manivigraham House,christopher Nagar,South anjery, ollur ,thrissur', '1200sqft', '4', '2', '2', '2000', ' Spacious portico for parking your vehicle. Around 200 metres away from the kanzhani- Thrissur road. Abundant supply of water from well, kwa & corporation well. Mother/ esi hospital, busstop, ollari church and bhagavati temple within walkable distance.', '10000', '1673977368.jpg', 'Available', '1673977368.pdf', '1673977368.jpg', '1673977368.jpg', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `house_booking`
--

CREATE TABLE `house_booking` (
  `hb_id` int(11) NOT NULL,
  `hb_user_id` int(11) NOT NULL,
  `hb_user_email` varchar(100) NOT NULL,
  `hb_house_id` int(11) NOT NULL,
  `hb_vendor_id` int(11) NOT NULL,
  `hb_vendor_email` varchar(500) NOT NULL,
  `hb_hse_address` varchar(2000) NOT NULL,
  `hb_bking_date` varchar(100) NOT NULL,
  `hb_stay_date` date NOT NULL,
  `hb_return_date` date NOT NULL,
  `hb_total_month` varchar(1000) NOT NULL,
  `hb_rent` varchar(1000) NOT NULL,
  `hb_token_amount` varchar(1000) NOT NULL,
  `hb_status` varchar(500) NOT NULL,
  `hb_payment` varchar(600) NOT NULL,
  `hb_amount` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `house_payment`
--

CREATE TABLE `house_payment` (
  `hse_pay_id` int(11) NOT NULL,
  `pay_hse_id` int(11) NOT NULL,
  `pay_user_id` int(11) NOT NULL,
  `pay_user_email` varchar(500) NOT NULL,
  `pay_cvc` varchar(600) NOT NULL,
  `pay_crd_hldr_name` varchar(600) NOT NULL,
  `pay_crd_exp_date` varchar(600) NOT NULL,
  `pay_card_number` varchar(600) NOT NULL,
  `pay_amount` varchar(600) NOT NULL,
  `pay_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `house_review`
--

CREATE TABLE `house_review` (
  `house_review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `house_id` int(11) NOT NULL,
  `review` varchar(500) NOT NULL,
  `rating` varchar(500) NOT NULL,
  `review_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_phn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_phn`) VALUES
(1, 'Ajitha C K', 'ajitha@gmail.com', '123', '9988776655');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_id` int(11) NOT NULL,
  `v_category_id` int(11) NOT NULL,
  `v_vendor_id` int(11) NOT NULL,
  `v_name` varchar(100) NOT NULL,
  `v_number` varchar(100) NOT NULL,
  `v_image` varchar(100) NOT NULL,
  `v_image1` varchar(150) NOT NULL,
  `v_image2` varchar(500) NOT NULL,
  `v_fuel` varchar(100) NOT NULL,
  `v_Mileage` varchar(60) NOT NULL,
  `v_rent` varchar(100) NOT NULL,
  `v_description` varchar(1000) NOT NULL,
  `v_status` varchar(100) NOT NULL,
  `v_verify_rent` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle_id`, `v_category_id`, `v_vendor_id`, `v_name`, `v_number`, `v_image`, `v_image1`, `v_image2`, `v_fuel`, `v_Mileage`, `v_rent`, `v_description`, `v_status`, `v_verify_rent`) VALUES
(1, 1, 3, 'Maruti Dzire', 'KL10x6123', '1673969403.jpg', '1673969403.jpg', '1673969403.jpg', 'CNG/Petrol', '23.26 - 24.12 kmpl', '1000', 'Engine and Transmission: The propulsion duty is carried out by a 1.2-litre Dual Jet petrol engine (making 90PS and 113Nm) paired with either a standard five-speed manual or a five-speed AMT. The CNG counterpart makes an output of 77PS and 98.5Nm. The hatchback’s claimed fuel efficiency figures are: \r\n\r\n1.2 litre MT- 22.41kmpl\r\n\r\n1.2 litre AMT- 22.61kmpl\r\n\r\nCNG MT- 31.12km/kg\r\n\r\nFeatures: Maruti’s subcompact sedan boasts a seven-inch touchscreen infotainment system with Android Auto and Apple CarPlay, 4.2-inch multi-colour MID, cruise control, automatic LED headlights, auto-folding ORVMs, push-button engine start/stop, and auto AC with rear vents.', 'Available', 'Approved'),
(2, 1, 3, 'Maruti XL6', 'KL65L8991', '1673969594.jpg', '1673969594.jpeg', '1673969594.jpg', 'Petrol/CNG', 'Manual/Automatic', '999', 'Seating Capacity: The XL6 is only offered in a six-seater configuration. If you are looking for a seven-seat Maruti MPV, you can check out the Maruti Ertiga.Engine and Transmission: It makes use of a 1.5-litre petrol engine (103PS and 137Nm) with mild-hybrid technology, as well as a five-speed manual or a new six-speed automatic transmission. It also receives a new CNG variant with the same engine (87.83PS and 121.5Nm) but with just the five-speed manual transmission.Here are the MPV’s claimed fuel efficiency figures:1.5-litre MT: 20.97kmpl1.5-litre AT: 20.27kmpl1.5-litre MT CNG: 26.32km/kgFeatures: The six-seater MPV boasts a seven-inch infotainment system, paddle shifters, 16-inch machine-finish alloy wheels, ventilated front seats and a 360-degree camera. Equipment such as cruise control, auto AC and height-adjustable driver seat are also offered.', 'Available', 'Approved'),
(4, 1, 3, 'Maruti Alto 800', 'KL10x6112', '1674190767.jpg', '1674190767.jpg', '1674190767.jpg', 'CNG/Petrol', '22.05 kmpl', '800', 'Engine and Transmission: It is powered by a 0.8-litre petrol engine (making 48PS and 69Nm) paired with a five-speed manual. The motor’s output drops to 41PS and 60Nm when fed with CNG. Its claimed mileage figures are 22.05kmpl for petrol and 31.59km/kg for CNG.\r\n\r\nFeatures: Its features list includes a seven-inch touchscreen infotainment system with Android Auto and Apple CarPlay. It also features keyless entry and front power windows.\r\n\r\nSafety: Passenger safety is ensured by dual airbags, rear parking sensors and ABS with EBD.', 'Available', 'Approved'),
(5, 1, 3, 'Maruti Ignis', 'KL10x6185', '1674191923.jpg', '1674191923.jpg', '1674191923.jpg', 'Petrol', '20.89 kmpl', '500', 'Engine and Transmission: The Ignis is powered by a 1.2-litre petrol engine (making 83PS and 113Nm) mated to a five-speed manual or an optional five-speed AMT.\r\n\r\nFeatures: Its features list includes a seven-inch touchscreen infotainment system with Apple CarPlay and Android Auto, LED projector headlamps with DRLs, 15-inch alloy wheels and automatic climate control.\r\n\r\nSafety: Dual front airbags, ABS with EBD and rear parking sensors are part of standard safety equipment.', 'Available', 'Pending'),
(10, 2, 7, 'TVS Apache RR310', 'KL10x6952', '1674194297.jpg', '1674194297.jpeg', '1674194297.jpg', 'Petrol', '18.6 kmpl', '800', 'The styling cues remain unaltered and the 2021 Apache RR 310 continues to feature a twin-pod headlight at the front, a full-fairing design, step-up saddle, and a side-slung exhaust. The colour options include two choices – Racing Red and Titanium Black. The feature list retained from the 2020 model includes full-LED lighting, a Bluetooth-enabled colour TFT display, ride-by-wire throttle, four riding modes, and dual-channel ABS. The mechanical specifications continue to include the 312.2cc, single-cylinder, liquid-cooled engine that produces 33.5bhp at 9,700rpm and 27.3Nm of peak torque at 7,700rpm. The motor is linked to a six-speed gearbox.', 'Available', 'Approved'),
(12, 2, 7, 'TVS Apache RTR 160', 'KL10x7896', '1674206499.jpg', '1674206499.jpg', '1674206499.jpg', 'Petrol', '18.6 kmpl', '399', 'The mechanical specifications retain the 159.7cc, air-cooled, single-cylinder engine. Linked to a five-speed gearbox, the motor now makes 15.8bhp at 8,750rpm and 13.85Nm of peak torque at 7,000rpm as against 15.3bhp and 13.9Nm previously.', 'Available', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_booking`
--

CREATE TABLE `vehicle_booking` (
  `vb_id` int(11) NOT NULL,
  `vb_userid` int(11) NOT NULL,
  `vb_vendor_id` int(11) NOT NULL,
  `vb_vendor_email` varchar(200) NOT NULL,
  `vb_vehicleid` int(11) NOT NULL,
  `vb_email` varchar(100) NOT NULL,
  `vb_name` varchar(500) NOT NULL,
  `vb_number` varchar(500) NOT NULL,
  `vb_start_location` varchar(100) NOT NULL,
  `vb_destination` varchar(100) NOT NULL,
  `booking_date` date NOT NULL,
  `vb_start_date` date NOT NULL,
  `return_date` date NOT NULL,
  `licence` varchar(1000) NOT NULL,
  `vb_amount` varchar(600) NOT NULL,
  `vb_status` varchar(50) NOT NULL,
  `payment` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_payment`
--

CREATE TABLE `vehicle_payment` (
  `veh_pay_id` int(11) NOT NULL,
  `pay_user_id` int(11) NOT NULL,
  `pay_veh_id` int(11) NOT NULL,
  `pay_user_email` varchar(100) NOT NULL,
  `pay_crd_hldr_name` varchar(100) NOT NULL,
  `pay_card_number` varchar(500) NOT NULL,
  `pay_crd_exp_date` varchar(100) NOT NULL,
  `pay_cvc` varchar(50) NOT NULL,
  `pay_amout` varchar(600) NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_review`
--

CREATE TABLE `vehicle_review` (
  `veh_review_id` int(11) NOT NULL,
  `veh_rev_vehicleid` int(11) NOT NULL,
  `veh_rev_userid` int(11) NOT NULL,
  `veh_rev_email` varchar(180) NOT NULL,
  `veh_rev_user_name` varchar(100) NOT NULL,
  `veh_rev_rating` varchar(500) NOT NULL,
  `veh_rev_date` date NOT NULL,
  `veh_rev_reviiew` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL,
  `vndr_name` varchar(200) NOT NULL,
  `vndr_email` varchar(100) NOT NULL,
  `vndr_phone` varchar(100) NOT NULL,
  `vndr_password` varchar(100) NOT NULL,
  `vndr_address` varchar(100) NOT NULL,
  `vndr_occupation` varchar(100) NOT NULL,
  `vndr_status` varchar(100) NOT NULL,
  `vndr_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vndr_name`, `vndr_email`, `vndr_phone`, `vndr_password`, `vndr_address`, `vndr_occupation`, `vndr_status`, `vndr_type`) VALUES
(3, 'DINESAN  M.V', 'dinesan@gmail.com', '9847077635', '123', 'Kunnamkulam Thrissur, Kerala, INDIA - 680503', 'telecom technician', 'Approved', 'Admin'),
(4, 'Sreeshma', 'sreeshma@gmail.com', '1234567890', '123', 'kunnamkulam', 'teacher', 'Approved', 'Vendor'),
(7, 'Rahul S', 'rahul@gmail.com', '9847077635', '123', 'Kunnamkulam Thrissur, Kerala, INDIA - 680508', 'professor', 'Approved', 'Vendor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `house_booking`
--
ALTER TABLE `house_booking`
  ADD PRIMARY KEY (`hb_id`);

--
-- Indexes for table `house_payment`
--
ALTER TABLE `house_payment`
  ADD PRIMARY KEY (`hse_pay_id`);

--
-- Indexes for table `house_review`
--
ALTER TABLE `house_review`
  ADD PRIMARY KEY (`house_review_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `vehicle_booking`
--
ALTER TABLE `vehicle_booking`
  ADD PRIMARY KEY (`vb_id`);

--
-- Indexes for table `vehicle_payment`
--
ALTER TABLE `vehicle_payment`
  ADD PRIMARY KEY (`veh_pay_id`);

--
-- Indexes for table `vehicle_review`
--
ALTER TABLE `vehicle_review`
  ADD PRIMARY KEY (`veh_review_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `house_booking`
--
ALTER TABLE `house_booking`
  MODIFY `hb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `house_payment`
--
ALTER TABLE `house_payment`
  MODIFY `hse_pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `house_review`
--
ALTER TABLE `house_review`
  MODIFY `house_review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vehicle_booking`
--
ALTER TABLE `vehicle_booking`
  MODIFY `vb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle_payment`
--
ALTER TABLE `vehicle_payment`
  MODIFY `veh_pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_review`
--
ALTER TABLE `vehicle_review`
  MODIFY `veh_review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
