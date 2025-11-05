-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2020 at 10:50 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tailor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`id`, `customer_id`, `customer_name`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, '310520-001702', 'test', 123456, 'Active', '2020-05-30 22:17:02', '0000-00-00 00:00:00'),
(2, '020620-195203', 'Demo', 12345567, 'Active', '2020-06-02 17:52:03', '0000-00-00 00:00:00'),
(3, '260620-225054', 'Muzamil', 3488008986, 'Active', '2020-06-26 20:50:54', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `customer_id` varchar(100) DEFAULT NULL,
  `grand_total` varchar(30) DEFAULT NULL,
  `paid_amount` varchar(30) DEFAULT NULL,
  `due_amount` varchar(30) DEFAULT NULL,
  `return_date` varchar(50) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Unpaid',
  `invoice_status` varchar(50) DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`id`, `invoice_id`, `customer_id`, `grand_total`, `paid_amount`, `due_amount`, `return_date`, `status`, `invoice_status`, `created_at`, `updated_at`) VALUES
(6, 116471, '310520-001702', '2300', '0.00', '2300', '2020-06-08', 'Unpaid', 'Pending', '2020-06-05 21:57:39', '0000-00-00 00:00:00'),
(7, 285101, '020620-195203', '2500', '0.00', '2500', '2020-06-10', 'Unpaid', 'Pending', '2020-06-08 19:59:13', '0000-00-00 00:00:00'),
(8, 579544, '020620-195203', '400', '0.00', '400', '2020-06-12', 'Unpaid', 'Pending', '2020-06-08 20:02:23', '0000-00-00 00:00:00'),
(9, 125347, '020620-195203', '0.00', '0.00', '0.00', '2020-06-12', 'Unpaid', 'Pending', '2020-06-08 20:08:02', '0000-00-00 00:00:00'),
(10, 653593, '310520-001702', '1800', '1220.00', '580', '2020-06-11', 'Unpaid', 'Pending', '2020-06-08 20:09:02', '0000-00-00 00:00:00'),
(11, 540769, '020620-195203', '1980', '1400.00', '580', '2020-06-12', 'Partial Paid', 'Pending', '2020-06-08 20:09:54', '0000-00-00 00:00:00'),
(12, 984111, '020620-195203', '1950', '1950.00', '0', '2020-06-13', 'Paid', 'Pending', '2020-06-08 20:15:26', '0000-00-00 00:00:00'),
(13, 833639, '020620-195203', '400', '0.00', '400', '2020-06-11', 'Unpaid', 'Pending', '2020-06-09 18:36:59', '0000-00-00 00:00:00'),
(14, 422305, '310520-001702', '1700', '1700.00', '0', '2020-06-27', 'Paid', 'Completed', '2020-06-25 21:25:36', '2020-06-25 23:12:01'),
(15, 621391, '260620-225054', '800', '500.00', '300', '2020-07-03', 'Partial Paid', 'Pending', '2020-06-26 22:40:59', '0000-00-00 00:00:00'),
(16, 120687, '260620-225054', '1700', '1500.00', '200', '2020-07-15', 'Partial Paid', 'Pending', '2020-07-06 21:09:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_naap`
--

CREATE TABLE `tbl_naap` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(200) NOT NULL,
  `naap_type` varchar(50) NOT NULL,
  `lambai` varchar(10) DEFAULT NULL,
  `teera` varchar(10) DEFAULT NULL,
  `bazo` varchar(10) DEFAULT NULL,
  `kolar` varchar(10) DEFAULT NULL,
  `chati` varchar(10) DEFAULT NULL,
  `kamar` varchar(10) DEFAULT NULL,
  `damn` varchar(10) DEFAULT NULL,
  `shalwar` varchar(10) DEFAULT NULL,
  `panche` varchar(10) DEFAULT NULL,
  `hip` varchar(20) DEFAULT NULL,
  `asteen` varchar(20) DEFAULT NULL,
  `thaiz` varchar(20) DEFAULT NULL,
  `side_pocket` enum('Yes','No') DEFAULT 'No',
  `pocket_gool` enum('Yes','No') DEFAULT 'No',
  `pocket_choras` enum('Yes','No','','') DEFAULT 'No',
  `damn_gool` enum('Yes','No') DEFAULT 'No',
  `damn_choras` enum('Yes','No') DEFAULT 'No',
  `kolar_design` enum('Yes','No') DEFAULT 'No',
  `gool_bain` enum('Yes','No') DEFAULT 'No',
  `half_bain` enum('Yes','No') DEFAULT 'No',
  `choras_kuff` enum('Yes','No') DEFAULT 'No',
  `gool_kuff` enum('Yes','No') DEFAULT 'No',
  `bazo_design` enum('Yes','No') DEFAULT 'No',
  `gool_bazo` enum('Yes','No') DEFAULT 'No',
  `koni_bazo` enum('Yes','No') DEFAULT 'No',
  `upar_pati` enum('Yes','No','','') DEFAULT 'No',
  `sada_pati` enum('Yes','No') DEFAULT 'No',
  `choka_silai` enum('Yes','No') DEFAULT 'No',
  `double_silai` enum('Yes','No') DEFAULT 'No',
  `chamak_taar_single_silai` enum('Yes','No') DEFAULT 'No',
  `chamak_tar_double_silai` enum('Yes','No') DEFAULT 'No',
  `zanjeer_silai` enum('Yes','No') DEFAULT 'No',
  `single_choka` enum('Yes','No') DEFAULT 'No',
  `shalwar_pocket` enum('Yes','No') DEFAULT 'No',
  `gool_kuff_1` enum('Yes','No') DEFAULT 'No',
  `sidha_kuff` enum('Yes','No') DEFAULT 'No',
  `fit_asteen` enum('Yes','No') DEFAULT 'No',
  `stud_kaaj` enum('Yes','No') DEFAULT 'No',
  `fold_kuff` enum('Yes','No') DEFAULT 'No',
  `coat_1_buttom` enum('Yes','No') DEFAULT 'No',
  `coat_2_buttom` enum('Yes','No') DEFAULT 'No',
  `coat_3_buttom` enum('Yes','No') DEFAULT 'No',
  `coat_4_buttom` enum('Yes','No') DEFAULT 'No',
  `coat_double_chaak` enum('Yes','No') DEFAULT 'No',
  `coat_single_chaak` enum('Yes','No') DEFAULT 'No',
  `coat_chaak_naho` enum('Yes','No') DEFAULT 'No',
  `waist_gool_gala` enum('Yes','No') DEFAULT 'No',
  `waist_v_gala` enum('Yes','No') DEFAULT 'No',
  `waist_gala_bna` enum('Yes','No') DEFAULT 'No',
  `waist_gool_ghera` enum('Yes','No') DEFAULT 'No',
  `waist_sedha_ghera` enum('Yes','No') DEFAULT 'No',
  `paint_plat_ho` enum('Yes','No') DEFAULT 'No',
  `paint_plat_naho` enum('Yes','No') DEFAULT 'No',
  `paint_turn_pancha` enum('Yes','No') DEFAULT 'No',
  `paint_plain_pancha` enum('Yes','No') DEFAULT 'No',
  `comment` text,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_naap`
--

INSERT INTO `tbl_naap` (`id`, `customer_id`, `naap_type`, `lambai`, `teera`, `bazo`, `kolar`, `chati`, `kamar`, `damn`, `shalwar`, `panche`, `hip`, `asteen`, `thaiz`, `side_pocket`, `pocket_gool`, `pocket_choras`, `damn_gool`, `damn_choras`, `kolar_design`, `gool_bain`, `half_bain`, `choras_kuff`, `gool_kuff`, `bazo_design`, `gool_bazo`, `koni_bazo`, `upar_pati`, `sada_pati`, `choka_silai`, `double_silai`, `chamak_taar_single_silai`, `chamak_tar_double_silai`, `zanjeer_silai`, `single_choka`, `shalwar_pocket`, `gool_kuff_1`, `sidha_kuff`, `fit_asteen`, `stud_kaaj`, `fold_kuff`, `coat_1_buttom`, `coat_2_buttom`, `coat_3_buttom`, `coat_4_buttom`, `coat_double_chaak`, `coat_single_chaak`, `coat_chaak_naho`, `waist_gool_gala`, `waist_v_gala`, `waist_gala_bna`, `waist_gool_ghera`, `waist_sedha_ghera`, `paint_plat_ho`, `paint_plat_naho`, `paint_turn_pancha`, `paint_plain_pancha`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, '020620-195203', '1', '12', '23', '32', '43', '34', '34', '21', '12', '12', 'No', 'No', NULL, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'this is testing new test', 'Active', '2020-06-02 21:44:54', '2020-06-24 21:23:07'),
(2, '020620-195203', '1', '23', '34', '43', '45', '54', '53', '53', '54', '54', 'No', 'No', NULL, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, NULL, NULL, NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active', '2020-06-02 21:51:08', '2020-06-24 20:49:14'),
(3, '020620-195203', '3', '34', '23', NULL, NULL, '34', '23', NULL, NULL, NULL, '23', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', NULL, 'Yes', 'Yes', 'Yes', NULL, 'No', 'No', 'No', 'No', 'This is test', 'Active', '2020-06-11 00:06:45', '2020-06-24 21:24:18'),
(6, '260620-225054', '4', '23', NULL, NULL, NULL, NULL, '22', NULL, NULL, '32', '43', NULL, '22', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'Yes', NULL, NULL, 'zsfd', 'Active', '2020-06-26 21:56:42', '2020-06-26 22:08:52'),
(7, '260620-225054', '3', '12', '24', NULL, NULL, '44', '44', NULL, NULL, NULL, '21', NULL, NULL, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'test', 'Active', '2020-06-26 22:36:31', '2020-07-06 21:12:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_naap_type`
--

CREATE TABLE `tbl_naap_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_naap_type`
--

INSERT INTO `tbl_naap_type` (`id`, `type_name`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Suit', 500, 'Active', '2020-06-02 23:49:23', '0000-00-00 00:00:00'),
(2, 'Coat', 2000, 'Active', '2020-06-02 23:49:23', '0000-00-00 00:00:00'),
(3, 'Waist Coat', 1500, 'Active', '2020-06-02 23:49:23', '0000-00-00 00:00:00'),
(4, 'Paint', 1000, 'Active', '2020-06-02 23:49:23', '2020-06-02 23:49:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `naap_type` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `suit_identity` varchar(50) DEFAULT NULL,
  `return_date` varchar(50) DEFAULT NULL,
  `payment_type` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `invoice_id`, `order_id`, `customer_id`, `naap_type`, `type`, `suit_identity`, `return_date`, `payment_type`, `amount`, `discount`, `total`, `status`, `created_at`, `updated_at`) VALUES
(3, 116471, 6683126, '020620-195203', 1, '', NULL, '2020-06-08', NULL, 500, 100, 400, 'Process', '2020-06-05 21:57:39', '2020-06-25 21:44:56'),
(4, 116471, 8065244, '020620-195203', 2, '', NULL, '2020-06-08', NULL, 2000, 100, 1900, 'Process', '2020-06-05 21:57:39', '2020-07-06 21:11:04'),
(5, 285101, 9544716, '020620-195203', 1, '', NULL, '2020-06-06', NULL, 500, 0, 500, 'Pending', '2020-06-08 19:59:13', '2020-06-08 21:17:40'),
(6, 285101, 7992581, '020620-195203', 2, '', NULL, '2020-06-10', NULL, 2000, 0, 2000, 'Pending', '2020-06-08 19:59:13', '0000-00-00 00:00:00'),
(7, 579544, 6123494, '020620-195203', 1, '', NULL, '2020-06-12', NULL, 500, 100, 400, 'Pending', '2020-06-08 20:02:23', '0000-00-00 00:00:00'),
(8, 653593, 9825924, '020620-195203', 2, '', NULL, '2020-06-11', NULL, 2000, 200, 1800, 'Pending', '2020-06-08 20:09:02', '0000-00-00 00:00:00'),
(9, 540769, 7546707, '020620-195203', 2, '', NULL, '2020-06-12', NULL, 2000, 20, 1980, 'Complete', '2020-06-08 20:09:54', '2020-06-08 22:10:26'),
(10, 984111, 6798997, '020620-195203', 2, '', NULL, '2020-06-13', NULL, 2000, 50, 1950, 'Process', '2020-06-08 20:15:26', '2020-06-08 21:52:36'),
(11, 833639, 6903736, '020620-195203', 1, '', NULL, '2020-06-11', NULL, 500, 100, 400, 'Process', '2020-06-09 18:36:59', '2020-06-24 21:43:02'),
(12, 422305, 641538, '020620-195203', 1, '', NULL, '2020-06-16', NULL, 500, 200, 300, 'Pending', '2020-06-24 21:25:36', '0000-00-00 00:00:00'),
(13, 422305, 641538, '020620-195203', 3, '', NULL, '2020-06-27', NULL, 1500, 100, 1400, 'Pending', '2020-06-25 20:35:21', '0000-00-00 00:00:00'),
(14, 621391, 9519523, '260620-225054', 4, '', NULL, '2020-07-03', NULL, 1000, 200, 800, 'Pending', '2020-06-26 22:40:59', '0000-00-00 00:00:00'),
(15, 120687, 2931860, '020620-195203', 1, '', NULL, '2020-07-15', NULL, 500, 100, 400, 'Pending', '2020-07-06 21:09:40', '0000-00-00 00:00:00'),
(16, 120687, 8254237, '260620-225054', 3, '', NULL, '2020-07-15', NULL, 1500, 200, 1300, 'Process', '2020-07-06 21:09:40', '2020-07-06 21:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user_id`, `username`, `email`, `password`, `user_type`, `status`, `created_at`, `updated_at`) VALUES
(1, '12345', 'Waheed Shah', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin', 'Active', '2020-05-30 21:25:12', '2020-05-30 21:27:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_naap`
--
ALTER TABLE `tbl_naap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_naap_type`
--
ALTER TABLE `tbl_naap_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_naap`
--
ALTER TABLE `tbl_naap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_naap_type`
--
ALTER TABLE `tbl_naap_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
