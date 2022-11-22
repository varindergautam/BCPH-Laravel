-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 07:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bcph_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `affidavit_forms`
--

CREATE TABLE `affidavit_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `born` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bachelor_law_degree_college_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_born_in_oath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college_name_oath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_name_oath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date_of_completion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `affidavit_forms`
--

INSERT INTO `affidavit_forms` (`id`, `user_id`, `born`, `district_name`, `bachelor_law_degree_college_name`, `place_name`, `type_born_in_oath`, `college_name_oath`, `place_name_oath`, `created_at`, `updated_at`, `date_of_completion`) VALUES
(1, 4, 'dewyfdyew', 'dewyf', 'fdewyt', 'efwytf', 'fewy', 'efwyguyw', 'fewy', '2022-10-01 07:01:14', '2022-10-01 07:01:14', '01-10-2022'),
(2, 14, 'gfdgdf', 'l,', 'dfdfgdf', 'gdfgdfgdfg', 'dfbhgf', 'bgfn', 'gdfgdfg', '2022-10-31 06:53:04', '2022-11-21 00:24:04', '31-10-2022');

-- --------------------------------------------------------

--
-- Table structure for table `application_forms`
--

CREATE TABLE `application_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `university_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `which_univeristy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `which_univeristy_remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_law_degree` date DEFAULT NULL,
  `plus_two_mark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduate_before_admission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college_university_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college_pass_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `english_compulsory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `law_college_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `law_college_join_date` date DEFAULT NULL,
  `law_college_duration_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `law_college_passed` date DEFAULT NULL,
  `name_of_degree_obtained` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medium_instruction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_study_duration_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_for_pratice_after_enrollment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_holds` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointment_holds_remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_or_profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_or_profession_remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `criminal_court` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `criminal_court_remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `criminal_proceeding_againest_applicant_remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `criminal_proceeding_againest_applicant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suspension_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suspension_type_remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `declared_insolvent_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `declared_insolvent_type_remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `already_apply_for_enrollment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `already_apply_for_enrollment_remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_pay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razorpay_order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razorpay_payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razorpay_signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0' COMMENT '0 pending 1 complete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stream` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_completion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tatkaal_fees` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paytm_status` tinyint(4) DEFAULT 0 COMMENT '0 failed 1 success 2 processing',
  `paytm_order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paytm_transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application_forms`
--

INSERT INTO `application_forms` (`id`, `user_id`, `university_name`, `which_univeristy`, `which_univeristy_remarks`, `date_of_law_degree`, `plus_two_mark`, `graduate_before_admission`, `college_university_name`, `no_of_years`, `college_pass_date`, `english_compulsory`, `law_college_name`, `law_college_join_date`, `law_college_duration_year`, `law_college_passed`, `name_of_degree_obtained`, `medium_instruction`, `private_study_duration_year`, `city_for_pratice_after_enrollment`, `appointment_holds`, `appointment_holds_remarks`, `business_or_profession`, `business_or_profession_remark`, `criminal_court`, `criminal_court_remark`, `criminal_proceeding_againest_applicant_remark`, `criminal_proceeding_againest_applicant`, `suspension_type`, `suspension_type_remark`, `declared_insolvent_type`, `declared_insolvent_type_remark`, `already_apply_for_enrollment`, `already_apply_for_enrollment_remark`, `total_pay`, `razorpay_order_id`, `razorpay_payment_id`, `razorpay_signature`, `payment_status`, `created_at`, `updated_at`, `stream`, `date_of_completion`, `tatkaal_fees`, `paytm_status`, `paytm_order_id`, `paytm_transaction_id`) VALUES
(1, 1, '1', '1', 'ther the application has passed Two Years Law Course (Academic degree) by Private Study, before admission to LLB. 3rd Year, if', '2022-12-31', '10', '1', '5 Years', '5 Years', '5 Years', '1', 'Law collage', '2022-12-31', '3 years', '2022-12-31', 'Academic', 'Hindi', '3 years', '1', '1', 'ther the application has passed Two Years Law Course (Academic degree) by Private Study, before admission to LLB. 3rd Year, if', '1', 'hether or not, the applicant is engaged or, has ever been engaged in any trade, business or profess', '1', 'hether the applicant has been convicted by the Criminal Court : If so full particulars of conviction with certified copy of final order and proof should be given to show that the conviction was n', 'Whether there are any Criminal Proceedings pending against the applicant : If so, full particulars should b', '1', '1', 'Whether the applicant has been dismissed/terminated/retired/suspended/removed from Government Service, the service of any Local Body or other Statutory A', '1', 'Whether or not, the applicant has ever been declared insolvent : If so, whether the applicant has been discharged a', '1', 'Whether the applicant has previously applied for enro', '11400', 'order_KLjhBWY7BbPlw7', 'pay_KLjhQ4BUUDBBbf', '5a2a8a8e162d7763451c4a838c239928ae361ffabb8743f596110c914850f40c', '1', '2022-09-24 06:53:35', '2022-09-24 06:53:35', '5 Years', '24-09-2022', NULL, 0, '', '0'),
(2, 4, '1', '1', 'ore admission to LLB. 3rd Yea', '2022-12-31', '12', '1', '5 Years', '5 Years', '5 Years', '1', 'Law collage', '2022-12-31', '3 years', '2022-12-31', 'Professional', 'English', '3 years', '1', '1', 'ore admission to LLB. 3rd Yea', '0', NULL, '1', 'ore admission to LLB. 3rd Yea', NULL, '0', '1', 'ore admission to LLB. 3rd Yea', '0', NULL, '0', NULL, '11400', 'order_KOVZGbkGBGCV1O', 'pay_KOVZWOF7paCko5', 'e44169c88420a2fe42cb12e292e256c3bfcaa8705add9641d181cba95257832b', '1', '2022-10-01 07:00:46', '2022-10-01 07:00:46', '5 Years', '01-10-2022', NULL, 0, '', '0'),
(3, 9, '1', '0', NULL, '2000-05-13', '12', '0', NULL, NULL, NULL, '1', 'Law collage', '2000-05-13', '3 years', '2000-05-13', 'Professional', 'English', '3 years', '3', '0', NULL, '0', NULL, '0', NULL, NULL, '0', '0', NULL, '0', NULL, '0', NULL, '11400', NULL, NULL, NULL, '1', '2022-10-27 03:33:51', '2022-10-28 01:41:49', NULL, '27-10-2022', NULL, 0, 'fDuw1666941109', '0'),
(4, 10, '1', '0', NULL, '2004-02-01', NULL, '0', NULL, NULL, NULL, '1', 'Panjab University', '2022-01-01', '5 years', '2022-01-01', 'Professional', 'English', '5 years', '1', '0', NULL, '0', NULL, '0', NULL, NULL, '0', '0', NULL, '0', NULL, '0', NULL, '15400', NULL, NULL, NULL, '0', '2022-10-27 05:56:53', '2022-10-27 05:56:53', NULL, '27-10-2022', '4000', 0, 'qXLl1666870013', '0'),
(5, 11, '2', '0', NULL, '2022-12-12', '75%', '0', NULL, NULL, NULL, '1', NULL, '2017-12-12', '5 years', '2020-12-12', 'Professional', 'English', '5 years', '1', '0', NULL, '0', NULL, '0', NULL, NULL, '0', '0', NULL, '0', NULL, '0', NULL, '11400', NULL, NULL, NULL, '0', '2022-10-30 23:55:20', '2022-10-30 23:55:20', NULL, '31-10-2022', NULL, 0, 'H8MN1667193920', '0'),
(6, 13, '15', '0', NULL, '2022-01-01', NULL, '0', NULL, NULL, NULL, '1', NULL, '2018-01-01', '3 years', '2018-01-01', 'Professional', 'English', '3 years', '3', '0', NULL, '0', NULL, '0', NULL, NULL, '0', '0', NULL, '0', NULL, '0', NULL, '2', NULL, NULL, NULL, '0', '2022-10-31 04:49:35', '2022-10-31 04:49:59', NULL, '31-10-2022', NULL, 0, 'p0SC1667211599', '0'),
(7, 14, '3', '0', NULL, '2018-02-21', '400', '0', NULL, NULL, NULL, '1', '44', '2022-06-08', '3 years', '2022-06-08', 'Academic', 'English', '3 years', '47', '0', NULL, '0', NULL, '0', NULL, NULL, '0', '0', NULL, '0', NULL, '0', NULL, '1', NULL, NULL, NULL, '1', '2022-10-31 05:18:28', '2022-11-21 04:46:50', NULL, '31-10-2022', NULL, 1, 'fgGD1668857446', '20221112111212800110168279204196315'),
(8, 7, '3', '0', NULL, '2022-10-31', '465', '0', NULL, NULL, NULL, '1', '45', '2022-11-02', '3 years', '2022-11-09', 'Professional', 'English', '5 years', '1', '0', NULL, '0', NULL, '0', NULL, NULL, '0', '0', NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, NULL, '0', '2022-11-07 05:44:23', '2022-11-08 05:57:02', NULL, '07-11-2022', NULL, 0, NULL, '0'),
(9, 17, '3', '0', NULL, '2022-11-11', '400', '0', NULL, NULL, NULL, '1', '45', '2022-11-17', '3 years', '2022-11-09', 'Professional', 'English', '3 years', '1', '0', NULL, '0', NULL, '0', NULL, NULL, '0', '0', NULL, '0', NULL, '0', NULL, NULL, NULL, NULL, NULL, '0', '2022-11-19 06:23:28', '2022-11-19 06:23:28', NULL, '19-11-2022', NULL, 0, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `certify_forms`
--

CREATE TABLE `certify_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advocate_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `years_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advocate_name_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date_of_completion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certify_forms`
--

INSERT INTO `certify_forms` (`id`, `user_id`, `years`, `advocate_name`, `date`, `day`, `years_2`, `advocate_name_2`, `date_2`, `day_2`, `created_at`, `updated_at`, `date_of_completion`) VALUES
(1, 4, 'fewyf', 'ytefwyt', 'ewfywe', 'efytgewf', 'fefyewy', 'efwgyewg', 'ewfgyewg', 'fewygfyew', '2022-10-01 07:01:30', '2022-10-01 07:01:30', NULL),
(2, 14, 'gfdgdfgdf', 'fdgdfgdfgdf', 'gfdgdf', 'gfdfgdf', 'gdfgdfg', 'dfgfdgdf', 'fdgdfg', 'gfdgdfg', '2022-10-31 06:53:18', '2022-10-31 06:53:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ABOHAR', '1', '2022-11-19 06:22:26', '2022-11-19 06:22:26', NULL),
(2, 'AJNALA', '1', '2022-11-19 06:25:11', '2022-11-19 06:25:11', NULL),
(3, 'AMBALA', '1', '2022-11-19 06:25:19', '2022-11-19 06:25:19', NULL),
(4, 'AMLOH', '1', '2022-11-19 06:25:27', '2022-11-19 06:25:27', NULL),
(5, 'AMRITSAR', '1', '2022-11-19 06:25:34', '2022-11-19 06:25:34', NULL),
(6, 'ASSANDH', '1', '2022-11-19 06:25:43', '2022-11-19 06:25:43', NULL),
(7, 'BABA BAKALA', '1', '2022-11-19 06:25:53', '2022-11-19 06:25:53', NULL),
(8, 'BAGHA PURANA', '1', '2022-11-19 06:26:01', '2022-11-19 06:26:01', NULL),
(9, 'BAHADURGARH', '1', '2022-11-19 06:26:07', '2022-11-19 06:26:07', NULL),
(10, 'BALACHAUR', '1', '2022-11-19 06:26:15', '2022-11-19 06:26:15', NULL),
(11, 'BALLABGARH', '1', '2022-11-19 06:26:21', '2022-11-19 06:26:21', NULL),
(12, 'BARARA', '1', '2022-11-19 06:26:29', '2022-11-19 06:26:29', NULL),
(13, 'BARNALA', '1', '2022-11-19 06:26:37', '2022-11-19 06:26:37', NULL),
(14, 'BASSI PATHANA', '1', '2022-11-19 06:26:45', '2022-11-19 06:26:45', NULL),
(15, 'BATALA', '1', '2022-11-19 06:26:52', '2022-11-19 06:26:52', NULL),
(16, 'BATHINDA', '1', '2022-11-19 06:26:59', '2022-11-19 06:26:59', NULL),
(17, 'BAWAL', '1', '2022-11-19 06:27:14', '2022-11-19 06:27:14', NULL),
(18, 'BHIWANI', '1', '2022-11-19 06:27:21', '2022-11-19 06:27:21', NULL),
(19, 'BILASPUR', '1', '2022-11-19 06:27:28', '2022-11-19 06:27:28', NULL),
(20, 'BUDHLADA', '1', '2022-11-19 06:27:35', '2022-11-19 06:27:35', NULL),
(21, 'CH. DADRI', '1', '2022-11-19 06:27:41', '2022-11-19 06:27:41', NULL),
(22, 'DASUYA', '1', '2022-11-19 06:27:57', '2022-11-19 06:27:57', NULL),
(23, 'DERA BASSI', '1', '2022-11-19 06:28:04', '2022-11-19 06:28:04', NULL),
(24, 'DHURI', '1', '2022-11-19 06:28:10', '2022-11-19 06:28:10', NULL),
(25, 'ELLENABAD', '1', '2022-11-19 06:28:17', '2022-11-19 06:28:17', NULL),
(26, 'F.G. SAHIB', '1', '2022-11-19 06:28:36', '2022-11-19 06:28:36', NULL),
(27, 'F.P JHIRKA', '1', '2022-11-19 06:28:45', '2022-11-19 06:28:45', NULL),
(28, 'FARIDABAD', '1', '2022-11-19 06:28:55', '2022-11-19 06:28:55', NULL),
(29, 'FARIDKOT', '1', '2022-11-19 06:29:04', '2022-11-19 06:29:04', NULL),
(30, 'FATEHABAD', '1', '2022-11-19 06:29:12', '2022-11-19 06:29:12', NULL),
(31, 'FAZILKA', '1', '2022-11-19 06:29:20', '2022-11-19 06:29:20', NULL),
(32, 'FEROZEPUR', '1', '2022-11-19 06:29:25', '2022-11-19 06:29:25', NULL),
(33, 'GANAUR', '1', '2022-11-19 06:29:31', '2022-11-19 06:29:31', NULL),
(34, 'GARHSHANKER', '1', '2022-11-19 06:29:38', '2022-11-19 06:29:38', NULL),
(35, 'GIDDERBAHA', '1', '2022-11-19 06:29:46', '2022-11-19 06:29:46', NULL),
(36, 'GOHANA', '1', '2022-11-19 06:29:51', '2022-11-19 06:29:51', NULL),
(37, 'GUHLA', '1', '2022-11-19 06:29:57', '2022-11-19 06:29:57', NULL),
(38, 'GURDASPUR', '1', '2022-11-19 06:30:03', '2022-11-19 06:30:03', NULL),
(39, 'GURUGRAM', '1', '2022-11-19 06:30:10', '2022-11-19 06:30:10', NULL),
(40, 'GURUHARSHAI', '1', '2022-11-19 06:30:17', '2022-11-19 06:30:17', NULL),
(41, 'HANSI', '1', '2022-11-19 06:30:25', '2022-11-19 06:30:25', NULL),
(42, 'HATHIN', '1', '2022-11-19 06:30:32', '2022-11-19 06:30:32', NULL),
(43, 'HISSAR', '1', '2022-11-19 06:30:38', '2022-11-19 06:30:38', NULL),
(44, 'HODAL', '1', '2022-11-19 06:30:49', '2022-11-19 06:30:49', NULL),
(45, 'HOSHIARPUR', '1', '2022-11-19 06:30:57', '2022-11-19 06:30:57', NULL),
(46, 'INDRI', '1', '2022-11-19 06:31:03', '2022-11-19 06:31:03', NULL),
(47, 'JAGADHARI', '1', '2022-11-19 06:31:11', '2022-11-19 06:31:11', NULL),
(48, 'JAGRAON', '1', '2022-11-19 06:31:18', '2022-11-19 06:31:18', NULL),
(49, 'JAITU', '1', '2022-11-19 06:31:24', '2022-11-19 06:31:24', NULL),
(50, 'JALALABAD', '1', '2022-11-19 06:31:31', '2022-11-19 06:31:31', NULL),
(51, 'JALLANDHAR', '1', '2022-11-19 06:31:39', '2022-11-19 06:31:39', NULL),
(52, 'JHAJJAR', '1', '2022-11-19 06:31:45', '2022-11-19 06:31:45', NULL),
(53, 'JIND', '1', '2022-11-19 06:31:56', '2022-11-19 06:31:56', NULL),
(54, 'KAITHAL', '1', '2022-11-19 06:32:03', '2022-11-19 06:32:03', NULL),
(55, 'KALANWALI', '1', '2022-11-19 06:32:10', '2022-11-19 06:32:10', NULL),
(56, 'KALKA', '1', '2022-11-19 06:32:17', '2022-11-19 06:32:17', NULL),
(57, 'KANINA', '1', '2022-11-19 06:32:24', '2022-11-19 06:32:24', NULL),
(58, 'KAPURTHALA', '1', '2022-11-19 06:32:32', '2022-11-19 06:32:32', NULL),
(59, 'KARNAL', '1', '2022-11-19 06:32:40', '2022-11-19 06:32:40', NULL),
(60, 'KHAMANO', '1', '2022-11-19 06:32:49', '2022-11-19 06:32:49', NULL),
(61, 'KHANNA', '1', '2022-11-19 06:32:57', '2022-11-19 06:32:57', NULL),
(62, 'KHARAR', '1', '2022-11-19 06:33:03', '2022-11-19 06:33:03', NULL),
(63, 'KHARKHODA', '1', '2022-11-19 06:33:09', '2022-11-19 06:33:09', NULL),
(64, 'KOSLI', '1', '2022-11-19 06:33:19', '2022-11-19 06:33:19', NULL),
(65, 'KOT KAPURA', '1', '2022-11-19 06:33:28', '2022-11-19 06:33:28', NULL),
(66, 'KURUKSHETRA', '1', '2022-11-19 06:33:35', '2022-11-19 06:33:35', NULL),
(67, 'LOHARU', '1', '2022-11-19 06:34:02', '2022-11-19 06:34:02', NULL),
(68, 'LUDHIANA', '1', '2022-11-19 06:34:12', '2022-11-19 06:34:12', NULL),
(69, 'MALERKOTLA', '1', '2022-11-19 06:34:19', '2022-11-19 06:34:19', NULL),
(70, 'MALOUT', '1', '2022-11-19 06:34:27', '2022-11-19 06:34:27', NULL),
(71, 'MANDI  DABWALI', '1', '2022-11-19 06:34:35', '2022-11-19 06:34:35', NULL),
(72, 'MANDI GOBINDGARH', '1', '2022-11-19 06:34:43', '2022-11-19 06:34:43', NULL),
(73, 'MANSA', '1', '2022-11-19 06:34:50', '2022-11-19 06:34:50', NULL),
(74, 'MEHAM', '1', '2022-11-19 06:34:58', '2022-11-19 06:34:58', NULL),
(75, 'MEWAT(NUH)', '1', '2022-11-19 06:35:07', '2022-11-19 06:35:07', NULL),
(76, 'MOGA', '1', '2022-11-19 06:35:14', '2022-11-19 06:35:14', NULL),
(77, 'MOHALI(S.A.S. NAGAR)', '1', '2022-11-19 06:35:22', '2022-11-19 06:35:22', NULL),
(78, 'MOHINDERGARH', '1', '2022-11-19 06:35:28', '2022-11-19 06:35:28', NULL),
(79, 'MOONAK', '1', '2022-11-19 06:35:35', '2022-11-19 06:35:35', NULL),
(80, 'MUKERIAN', '1', '2022-11-19 06:35:41', '2022-11-19 06:35:41', NULL),
(81, 'NABHA', '1', '2022-11-19 06:35:47', '2022-11-19 06:35:47', NULL),
(82, 'NAKODAR', '1', '2022-11-19 06:35:55', '2022-11-19 06:35:55', NULL),
(83, 'NARAINGARH', '1', '2022-11-19 06:36:07', '2022-11-19 06:36:07', NULL),
(84, 'NARNAUL', '1', '2022-11-19 06:36:15', '2022-11-19 06:36:15', NULL),
(85, 'NARWANA', '1', '2022-11-19 06:36:22', '2022-11-19 06:36:22', NULL),
(86, 'NIHALSINGHWALA', '1', '2022-11-19 06:36:29', '2022-11-19 06:36:29', NULL),
(87, 'NUH', '1', '2022-11-19 06:36:37', '2022-11-19 06:36:37', NULL),
(88, 'PALWAL', '1', '2022-11-19 06:36:45', '2022-11-19 06:36:45', NULL),
(89, 'PANCHKULA', '1', '2022-11-19 06:36:52', '2022-11-19 06:36:52', NULL),
(90, 'PANIPAT', '1', '2022-11-19 06:36:59', '2022-11-19 06:36:59', NULL),
(91, 'PATAUDI', '1', '2022-11-19 06:37:07', '2022-11-19 06:37:07', NULL),
(92, 'PATHANKOT', '1', '2022-11-19 06:37:14', '2022-11-19 06:37:14', NULL),
(93, 'PATIALA', '1', '2022-11-19 06:37:20', '2022-11-19 06:37:20', NULL),
(94, 'PATTI', '1', '2022-11-19 06:37:27', '2022-11-19 06:37:27', NULL),
(95, 'PAYAL', '1', '2022-11-19 06:37:45', '2022-11-19 06:37:45', NULL),
(96, 'PEHOWA', '1', '2022-11-19 06:38:09', '2022-11-19 06:38:09', NULL),
(97, 'PHAGWARA', '1', '2022-11-19 06:38:16', '2022-11-19 06:38:16', NULL),
(98, 'PHILLAUR', '1', '2022-11-19 06:38:25', '2022-11-19 06:38:25', NULL),
(99, 'PHUL', '1', '2022-11-19 06:38:31', '2022-11-19 06:38:31', NULL),
(100, 'RAIKOT', '1', '2022-11-19 06:38:37', '2022-11-19 06:38:37', NULL),
(101, 'RAJPURA', '1', '2022-11-19 06:38:46', '2022-11-19 06:38:46', NULL),
(102, 'RANIA', '1', '2022-11-19 06:38:52', '2022-11-19 06:38:52', NULL),
(103, 'RATIA', '1', '2022-11-19 06:39:04', '2022-11-19 06:39:04', NULL),
(104, 'REWARI', '1', '2022-11-19 06:39:12', '2022-11-19 06:39:12', NULL),
(105, 'ROHTAK', '1', '2022-11-19 06:39:20', '2022-11-19 06:39:20', NULL),
(106, 'ROPAR', '1', '2022-11-19 06:39:27', '2022-11-19 06:39:27', NULL),
(107, 'S.B.S. NAGAR', '1', '2022-11-19 06:39:36', '2022-11-19 06:39:36', NULL),
(108, 'SAFIDON', '1', '2022-11-19 06:39:45', '2022-11-19 06:39:45', NULL),
(109, 'SAMALKHA', '1', '2022-11-19 06:41:27', '2022-11-19 06:41:27', NULL),
(110, 'SAMANA', '1', '2022-11-19 06:41:35', '2022-11-19 06:41:35', NULL),
(111, 'SAMRALA', '1', '2022-11-19 06:41:42', '2022-11-19 06:41:42', NULL),
(112, 'SANGRUR', '1', '2022-11-19 06:41:48', '2022-11-19 06:41:48', NULL),
(113, 'SARDULGARH', '1', '2022-11-19 06:41:54', '2022-11-19 06:41:54', NULL),
(114, 'SHAHBAD MARKANDA', '1', '2022-11-19 06:42:02', '2022-11-19 06:42:02', NULL),
(115, 'SIRHIND', '1', '2022-11-19 06:42:09', '2022-11-19 06:42:09', NULL),
(116, 'SIRSA', '1', '2022-11-19 06:42:15', '2022-11-19 06:42:15', NULL),
(117, 'SIWANI', '1', '2022-11-19 06:42:21', '2022-11-19 06:42:21', NULL),
(118, 'SOHNA', '1', '2022-11-19 06:42:27', '2022-11-19 06:42:27', NULL),
(119, 'SONEPAT', '1', '2022-11-19 06:42:34', '2022-11-19 06:42:34', NULL),
(120, 'SRI. ANANDPUR SAHIB', '1', '2022-11-19 06:42:40', '2022-11-19 06:42:40', NULL),
(121, 'SRI.MUKATSAR SAHIB', '1', '2022-11-19 06:42:48', '2022-11-19 06:42:48', NULL),
(122, 'SULTANPUR LODHI', '1', '2022-11-19 06:42:55', '2022-11-19 06:42:55', NULL),
(123, 'SUNAM', '1', '2022-11-19 06:43:02', '2022-11-19 06:43:02', NULL),
(124, 'TALWANDI SABOO', '1', '2022-11-19 06:44:01', '2022-11-19 06:44:01', NULL),
(125, 'TARN TARAN', '1', '2022-11-19 06:44:08', '2022-11-19 06:44:08', NULL),
(126, 'TOHANA', '1', '2022-11-19 06:44:21', '2022-11-19 06:44:21', NULL),
(127, 'TOSHAM', '1', '2022-11-19 06:44:27', '2022-11-19 06:44:27', NULL),
(128, 'YAMUNANAGAR', '1', '2022-11-19 06:44:32', '2022-11-19 06:44:32', NULL),
(129, 'ZIRA', '1', '2022-11-19 06:44:40', '2022-11-19 06:44:40', NULL),
(130, 'High Court Chandigarh', '1', '2022-11-21 01:08:09', '2022-11-21 01:08:09', NULL),
(131, 'District Court Chandigarh', '1', '2022-11-21 01:08:34', '2022-11-21 01:08:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `university_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`, `university_id`) VALUES
(31, 'D.N. Raju Law College, Bhimavaram', '1', '2022-11-08 05:29:34', '2022-11-08 05:29:34', NULL, '5'),
(32, 'G. S. K. M. Law College, Rajahmundry', '1', '2022-11-08 05:29:45', '2022-11-08 05:29:45', NULL, '5'),
(33, 'P.S. Raju Law College, Kakinada', '1', '2022-11-08 05:29:56', '2022-11-08 05:29:56', NULL, '5'),
(34, 'Rajiv Gandhi Institute of Law, Kakinada', '1', '2022-11-08 05:30:10', '2022-11-08 05:30:10', NULL, '5'),
(35, 'Veeravalli College of Law, Rajahmundry', '1', '2022-11-08 05:30:28', '2022-11-08 05:30:28', NULL, '5'),
(36, 'All Saints Christian Law College, Visakhapatnam', '1', '2022-11-08 05:32:44', '2022-11-08 05:32:44', NULL, '21'),
(37, 'M.P.R. Law College, Srikakulam', '1', '2022-11-08 05:33:10', '2022-11-08 05:33:10', NULL, '21'),
(38, 'M.R.V.R.GR Law College, Viziayanagaram', '1', '2022-11-08 05:33:24', '2022-11-08 05:33:24', NULL, '21'),
(39, 'N. B. M. Law College, Visakhapatnam', '1', '2022-11-08 05:33:40', '2022-11-08 05:33:40', NULL, '21'),
(40, 'N. V. P. Law College, Visakhapatnam', '1', '2022-11-08 05:33:53', '2022-11-08 05:33:53', NULL, '21'),
(41, 'Shri Shiridi Sai Vidya Parishad Law College, Anakapalli', '1', '2022-11-08 05:34:13', '2022-11-08 05:34:13', NULL, '21'),
(42, 'University Law College , Waltair (Dr.B.R. Ambedkar College of Law )', '1', '2022-11-08 05:34:34', '2022-11-08 05:34:34', NULL, '21'),
(43, 'Visakha Law College, Visakhapatnam', '1', '2022-11-08 05:35:00', '2022-11-08 05:35:00', NULL, '21'),
(44, 'A.C. College, Guntur', '1', '2022-11-08 05:36:43', '2022-11-08 05:36:43', NULL, '3'),
(45, 'D.S.R. Hindu Law College, Machilipatnam', '1', '2022-11-08 05:36:53', '2022-11-08 05:36:53', NULL, '3'),
(46, 'Indira Priyadarshini Law College, Ongole', '1', '2022-11-08 05:37:03', '2022-11-08 05:37:03', NULL, '3'),
(47, 'Jagarlamudi Chandramouli College of Law (JC College), Guntur', '1', '2022-11-08 05:37:12', '2022-11-08 05:37:12', NULL, '3'),
(48, 'NS Law College, Devarajugatta, Peddaraveedu, Prakasam District', '1', '2022-11-08 05:37:22', '2022-11-08 05:37:22', NULL, '3'),
(49, 'University College of Law, A.Nagarjuna University, Nagarjuna Nagar', '1', '2022-11-08 05:37:31', '2022-11-08 05:37:31', NULL, '3'),
(50, 'V.D. Siddhartha Law College, Vijayawada', '1', '2022-11-08 05:37:39', '2022-11-08 05:37:39', NULL, '3'),
(51, 'Department of Law, Damodaram Sanjivayya National Law University, Visakhapatnam', '1', '2022-11-08 05:38:41', '2022-11-08 05:38:41', NULL, '90'),
(52, 'School of Law, GITAM University, Visakhapatnam', '1', '2022-11-08 05:39:27', '2022-11-08 05:39:27', NULL, '118'),
(53, 'KLEF. College of Law, Green Fields Vaddeshwaram (Deemed) University, Guntur, Andhra Pradesh', '1', '2022-11-08 05:39:52', '2022-11-08 05:39:52', NULL, '195'),
(54, 'Sree Vijaya Nagar Law College, Anantapur', '1', '2022-11-08 05:41:07', '2022-11-08 05:41:07', NULL, '350'),
(55, 'Sri Prasunna College of Law, Kurnool', '1', '2022-11-08 05:41:37', '2022-11-08 05:41:37', NULL, '350'),
(56, 'University College of Law, S.K.University, Anantapur', '1', '2022-11-08 05:41:49', '2022-11-08 05:41:49', NULL, '350'),
(57, 'Department of Law, Sri Padmavati Mahila Viswavidyalayam, Tirupati', '1', '2022-11-08 05:42:51', '2022-11-08 05:42:51', NULL, '351'),
(58, 'Anantha College of Law, Tirupati', '1', '2022-11-08 05:44:32', '2022-11-08 05:44:32', NULL, '352'),
(59, 'Department of Law, Sri Venkateshwara University, Tirupati', '1', '2022-11-08 05:44:56', '2022-11-08 05:44:56', NULL, '352'),
(60, 'Dr. Ambedkar Global Law Institute, Tirupati (Old name Dr.B.R.Ambedkar Law College)', '1', '2022-11-08 05:45:21', '2022-11-08 05:45:21', NULL, '352'),
(61, 'K. K. C. College of Law, Puttur', '1', '2022-11-08 05:45:32', '2022-11-08 05:45:32', NULL, '352'),
(62, 'R.K.M. Law College, Chittoor', '1', '2022-11-08 05:45:44', '2022-11-08 05:45:44', NULL, '352'),
(63, 'Sri Eshwar Reddy Law College, Chittoor, Tirupati', '1', '2022-11-08 05:46:04', '2022-11-08 05:46:04', NULL, '352'),
(64, 'Sri Venkateshwara College of Law, Tirupati', '1', '2022-11-08 05:46:19', '2022-11-08 05:46:19', NULL, '352'),
(65, 'School	of Law,Vellore Institute of	Technology, Inavolu,Amravati', '1', '2022-11-08 05:47:06', '2022-11-08 05:47:06', NULL, '401'),
(66, 'V. R. Law College,Nellore', '1', '2022-11-08 05:47:43', '2022-11-08 05:47:43', NULL, '406'),
(67, 'Smt.Basava Rama Tarakam Memorial	Law College,Cuddapah', '1', '2022-11-08 05:48:31', '2022-11-08 05:48:31', NULL, '416'),
(68, 'Sri	P.Basi	Reddy	College	of	Law, Cuddapah', '1', '2022-11-08 05:49:07', '2022-11-08 05:49:07', NULL, '416'),
(69, 'Vignan	Institute of	Law (VIL), Guntur,	District,  Andhra Pradesh', '1', '2022-11-08 05:49:46', '2022-11-08 05:49:46', NULL, '404'),
(70, 'Faculty	of  Law, Arunachal	University	of Studies,Namsai', '1', '2022-11-08 05:50:42', '2022-11-08 05:50:42', NULL, '29'),
(71, 'Faculty	of	Law, Arunodaya University,Itanaga', '1', '2022-11-08 05:51:14', '2022-11-08 05:51:14', NULL, '30'),
(72, 'School of Law and Juridical Science, Apex Professional University, East Siang, Arunachal Pradesh', '1', '2022-11-08 05:51:41', '2022-11-08 05:51:41', NULL, '24'),
(73, 'School of Legal Studies and Research, Himalayan University, Itanagar', '1', '2022-11-08 05:52:53', '2022-11-08 05:52:53', NULL, '139'),
(74, 'Faculty of Law and Juridical Sciences, Indira Gandhi Technological and Medical Sciences University, Ziro, Arunachal Pradesh', '1', '2022-11-08 05:53:48', '2022-11-08 05:53:48', NULL, '157'),
(75, 'Faculty of Law, North East Frontier Technical University, West Siang,', '1', '2022-11-08 05:54:20', '2022-11-08 05:54:20', NULL, '265'),
(76, 'Arunachal Law Academy, Itanagar', '1', '2022-11-08 05:55:01', '2022-11-08 05:55:01', NULL, '298'),
(77, 'Government Law College, Jote, Itanagar', '1', '2022-11-08 05:55:27', '2022-11-08 05:55:27', NULL, '298'),
(78, 'Deshbandhu Chittaranjan School of Legal Studies, Department of Law, Assam Univ.,Silchar', '1', '2022-11-08 06:00:13', '2022-11-08 06:00:13', NULL, '32'),
(79, 'Diphu Law College, Diphu', '1', '2022-11-08 06:00:43', '2022-11-08 06:00:43', NULL, '32'),
(80, 'K. Chanda Law College, Silchar', '1', '2022-11-08 06:00:57', '2022-11-08 06:00:57', NULL, '32'),
(81, 'Karimganj Law College, Karimganj', '1', '2022-11-08 06:01:07', '2022-11-08 06:01:07', NULL, '32'),
(82, 'Centre for Juridical Studies, Dibrugarh University, Dibrugarh', '1', '2022-11-08 06:03:20', '2022-11-08 06:03:20', NULL, '96'),
(83, 'DHSK Law College, Dibrugarh', '1', '2022-11-08 06:03:42', '2022-11-08 06:03:42', NULL, '96'),
(84, 'Dr. R. K. Barua Law College, Dibrugarh (Dr. Rohini Kanta Barua Law College)', '1', '2022-11-08 06:03:53', '2022-11-08 06:03:53', NULL, '96'),
(85, 'Golaghat Law College, Golaghat', '1', '2022-11-08 06:04:06', '2022-11-08 06:04:06', NULL, '96'),
(86, 'Jorhat Law College, Jorhat', '1', '2022-11-08 06:04:29', '2022-11-08 06:04:29', NULL, '96'),
(87, 'North Lakhimpur Law College, North Lakhimpur', '1', '2022-11-08 06:04:47', '2022-11-08 06:04:47', NULL, '96'),
(88, 'SIPE Law College, Dibrugarh (Shree Bharati Institute of Professional Education’s)', '1', '2022-11-08 06:05:03', '2022-11-08 06:05:03', NULL, '96'),
(89, 'Tinsukia Law College, Tinsukia', '1', '2022-11-08 06:05:30', '2022-11-08 06:05:30', NULL, '96'),
(90, 'Ajmal Law College, Hojai', '1', '2022-11-08 06:09:46', '2022-11-08 06:09:46', NULL, '116'),
(91, 'Barpeta Law College, Barpeta', '1', '2022-11-08 06:09:57', '2022-11-08 06:09:57', NULL, '116'),
(92, 'Bongaigaon Law College, Bongaigaon', '1', '2022-11-08 06:10:08', '2022-11-08 06:10:08', NULL, '116'),
(93, 'BRM Govt. Law College, Guwahati', '1', '2022-11-08 06:10:19', '2022-11-08 06:10:19', NULL, '116'),
(94, 'Dhemaji Law College, Dhemaji', '1', '2022-11-08 06:10:35', '2022-11-08 06:10:35', NULL, '116'),
(95, 'Dhubri Law College, Dhubri', '1', '2022-11-08 06:10:49', '2022-11-08 06:10:49', NULL, '116'),
(96, 'Dispur Law College, Dispur', '1', '2022-11-08 06:11:04', '2022-11-08 06:11:04', NULL, '116'),
(97, 'Goalpara Law College, Goalpara', '1', '2022-11-08 06:11:19', '2022-11-08 06:11:19', NULL, '116'),
(98, 'JB Law College, Guwahati', '1', '2022-11-08 06:11:37', '2022-11-08 06:11:37', NULL, '116'),
(99, 'Kokrajhar Law College, Kokrajhar', '1', '2022-11-08 06:11:49', '2022-11-08 06:11:49', NULL, '116'),
(100, 'Mangaldai Law College, Mangaldai', '1', '2022-11-08 06:11:59', '2022-11-08 06:11:59', NULL, '116'),
(101, 'Morigaon Law College, Morigaon', '1', '2022-11-08 06:12:11', '2022-11-08 06:12:11', NULL, '116'),
(102, 'Nalbari Law College, Nalbari', '1', '2022-11-08 06:12:35', '2022-11-08 06:12:35', NULL, '116'),
(103, 'NEF Law College, Guwahati', '1', '2022-11-08 06:12:45', '2022-11-08 06:12:45', NULL, '116'),
(104, 'North Eastern Regional Institute of Management(NERIM), Guwahati', '1', '2022-11-08 06:13:00', '2022-11-08 06:13:00', NULL, '116'),
(105, 'Nowgong Law College, Nagaon', '1', '2022-11-08 06:13:10', '2022-11-08 06:13:10', NULL, '116'),
(106, 'Tezpur Law College, Tezpur', '1', '2022-11-08 06:13:20', '2022-11-08 06:13:20', NULL, '116'),
(107, 'University Law College, Gauhati University, Gauhati', '1', '2022-11-08 06:13:36', '2022-11-08 06:13:36', NULL, '116'),
(108, 'National Law University and Judicial Academy, Guwahati', '1', '2022-11-08 06:15:16', '2022-11-08 06:15:16', NULL, '249'),
(109, 'Royal School of Law & Administrative (RSLA), The Assam Royal Global University, Guwahati', '1', '2022-11-08 06:16:12', '2022-11-08 06:16:12', NULL, '381'),
(110, 'Amity Law School, Amity University, Patna', '1', '2022-11-08 06:17:11', '2022-11-08 06:17:11', NULL, '18'),
(111, 'Munshi	Singh Law College, Motihari', '1', '2022-11-08 06:17:53', '2022-11-08 06:18:26', NULL, '40'),
(112, 'Raghunath	Pandey	Memorial Law College,Muzaffarpur', '1', '2022-11-08 06:19:20', '2022-11-08 06:19:20', NULL, '40'),
(113, 'Sri	Krishna Jubilee Law College,Muzaffarpur', '1', '2022-11-08 06:19:51', '2022-11-08 06:19:51', NULL, '40'),
(114, 'R. M. M. Law College, Saharsa', '1', '2022-11-08 06:21:14', '2022-11-08 06:21:14', NULL, '37'),
(115, 'S. P. Mandal Law College, Madhepura', '1', '2022-11-08 06:21:50', '2022-11-08 06:21:50', NULL, '37'),
(116, 'School of Law, Central University of South Bihar, Gaya', '1', '2022-11-09 04:09:30', '2022-11-09 04:09:30', NULL, '74'),
(117, 'CHANAKYA NATIONAL LAW UNIVERSITY, PATNA', '1', '2022-11-09 04:09:55', '2022-11-09 04:09:55', NULL, '76'),
(118, 'Narayan School of Law, Gopal Narayan Singh University, Jamuhar, Sasaram, Rohtas', '1', '2022-11-09 04:10:34', '2022-11-09 04:10:34', NULL, '123'),
(119, 'K. K. Law College, K. K. University, Nepura, Biharshariff', '1', '2022-11-09 04:11:02', '2022-11-09 04:11:02', NULL, '179'),
(120, 'C. M. Law College, Darbhanga', '1', '2022-11-09 04:11:45', '2022-11-09 04:11:45', NULL, '199'),
(121, 'Ram Kumari Ayodhya Law College, Begusarai', '1', '2022-11-09 04:12:04', '2022-11-09 04:12:04', NULL, '199'),
(122, 'Vidhi Mahavidyalaya, Samastipur', '1', '2022-11-09 04:12:17', '2022-11-09 04:12:17', NULL, '199'),
(123, 'Anugrah Memorial law college, Gaya', '1', '2022-11-09 04:13:46', '2022-11-09 04:13:46', NULL, '208'),
(124, 'Nawada Vidhi Mahavidhyalaya, Nawada', '1', '2022-11-09 04:13:59', '2022-11-09 04:13:59', NULL, '208'),
(125, 'Surendra Prasad Yadav Vidhi Mahavidyalaya, Gaya', '1', '2022-11-09 04:14:12', '2022-11-09 04:14:12', NULL, '208'),
(126, 'Biswanath Singh Institute of Legal Studies, Munger', '1', '2022-11-09 04:14:41', '2022-11-09 04:14:41', NULL, '244'),
(127, 'Bihar Institute of Law, Patna', '1', '2022-11-09 04:17:15', '2022-11-09 04:17:15', NULL, '279'),
(128, 'Faculty of Law, Campus College of Commerce, Patna', '1', '2022-11-09 04:17:34', '2022-11-09 04:17:34', NULL, '279'),
(129, 'R. P.S. Law College, Patna', '1', '2022-11-09 04:17:48', '2022-11-09 04:17:48', NULL, '279'),
(130, 'Biraja Mohan Thakur Law College, Purnia', '1', '2022-11-09 04:31:39', '2022-11-09 04:31:39', NULL, '290'),
(131, 'C. K. M. Law College, Araria', '1', '2022-11-09 04:32:00', '2022-11-09 04:32:00', NULL, '290'),
(132, 'Suryadeo Law College, Katihar', '1', '2022-11-09 04:32:12', '2022-11-09 04:32:12', NULL, '290'),
(133, 'T.N.B. Law College, Bhagalpur', '1', '2022-11-09 04:34:05', '2022-11-09 04:34:05', NULL, '383'),
(134, 'Maharaja College, Arrah', '1', '2022-11-09 04:36:03', '2022-11-09 04:36:03', NULL, '397'),
(135, 'Rohtas Mahavidyalaya, Sasaram', '1', '2022-11-09 04:37:14', '2022-11-09 04:37:14', NULL, '397'),
(136, 'Shri Karpoori Thakur Vidhi Mahavidyalaya, Buxer', '1', '2022-11-09 04:37:33', '2022-11-09 04:37:33', NULL, '397'),
(137, 'Amity Law School, Amity University', '1', '2022-11-09 04:57:06', '2022-11-09 04:57:06', NULL, '12'),
(138, 'D. P. Vipra Law College, Bilaspur', '1', '2022-11-09 05:00:27', '2022-11-09 05:00:27', NULL, '56'),
(139, 'Department of Law, Govt. Paluram Dhanania Commerce & Arts College, Raigarh', '1', '2022-11-09 05:00:47', '2022-11-09 05:00:47', NULL, '56'),
(140, 'Government P. G. College, Korba', '1', '2022-11-09 05:01:02', '2022-11-09 05:01:02', NULL, '56'),
(141, 'Govt. Thakur Chedilal Law College,Janjgir, ZilaBilaspur', '1', '2022-11-09 05:01:13', '2022-11-09 05:01:13', NULL, '56'),
(142, 'Jyoti Bhushan Pratap Singh Law College, Korba', '1', '2022-11-09 05:01:26', '2022-11-09 05:01:26', NULL, '56'),
(143, 'Kaushlendra Rao Law College, Bilaspur', '1', '2022-11-09 05:01:42', '2022-11-09 05:01:42', NULL, '56'),
(144, 'LCIT College of Commerce & Science, Department of Legal Studies, Bilaspur', '1', '2022-11-09 05:01:57', '2022-11-09 05:01:57', NULL, '56'),
(145, 'Swami Balkrishna Puri Law College, Raigarh', '1', '2022-11-09 05:02:18', '2022-11-09 05:02:18', NULL, '56'),
(146, 'Dr. C. V. Raman Institute of Law, Dr. C V. Raman University, Bilaspur', '1', '2022-11-09 05:04:05', '2022-11-09 05:04:05', NULL, '109'),
(147, 'Department of Law, Guru Ghasidas University, Bilaspur', '1', '2022-11-09 05:04:32', '2022-11-09 05:04:32', NULL, '128'),
(148, 'HIDYATULLAH NATIONAL LAW UNIVERSITY, RAIPUR', '1', '2022-11-09 05:05:16', '2022-11-09 05:05:16', NULL, '135'),
(149, 'School of Law, ISBM University, Gariyaband', '1', '2022-11-09 05:06:12', '2022-11-09 05:06:12', NULL, '161'),
(150, 'ITM School of Law, ITM University', '1', '2022-11-09 05:07:01', '2022-11-09 05:07:01', NULL, '162'),
(151, 'Faculty of Law, Kalinga University', '1', '2022-11-09 05:07:38', '2022-11-09 05:07:38', NULL, '183'),
(152, 'MATS Law School, MATS Univ., Raipur', '1', '2022-11-09 05:08:22', '2022-11-09 05:08:22', NULL, '235'),
(153, 'Disha Law College, Raipur', '1', '2022-11-09 05:12:51', '2022-11-09 05:12:51', NULL, '287'),
(154, 'Government Naveen Law College, Bhatapara', '1', '2022-11-09 05:13:02', '2022-11-09 05:13:02', NULL, '287'),
(155, 'Govt. Chhattisgarh College, Raipur', '1', '2022-11-09 05:13:19', '2022-11-09 05:13:19', NULL, '287'),
(156, 'Govt. College, Bastar, Kanker. (B. P. Deo Govt P.G. College, Kanker)', '1', '2022-11-09 05:13:33', '2022-11-09 05:13:33', NULL, '287'),
(157, 'Govt. College, Dhamtari, Raipur', '1', '2022-11-09 05:13:51', '2022-11-09 05:13:51', NULL, '287'),
(158, 'Govt. D.K. College, Balodabazar, Raipur', '1', '2022-11-09 05:14:02', '2022-11-09 05:14:02', NULL, '287'),
(159, 'Govt. Science, Arts Commerce Law College, Balod', '1', '2022-11-09 05:14:17', '2022-11-09 05:14:17', NULL, '287'),
(160, 'Kalyan Law College, Bhilainagar', '1', '2022-11-09 05:14:29', '2022-11-09 05:14:29', NULL, '287'),
(161, 'Kawa Global Institute, Raipur', '1', '2022-11-09 05:14:43', '2022-11-09 05:14:43', NULL, '287'),
(162, 'Pt. Kishori Lal Shukla Law College, Rajanandgaon', '1', '2022-11-09 05:15:10', '2022-11-09 05:15:10', NULL, '287'),
(163, 'S.K.T.D. Law College, Raipur (Sau. Kusum Tai Dabke Law College)', '1', '2022-11-09 05:15:26', '2022-11-09 05:15:26', NULL, '287'),
(164, 'Seth RCS Law College, Durg', '1', '2022-11-09 05:15:39', '2022-11-09 05:15:39', NULL, '287'),
(165, 'The School of P. G. Studies in Law, Pt. Ravi Shankar University, Raipur', '1', '2022-11-09 05:15:57', '2022-11-09 05:15:57', NULL, '287'),
(166, 'Govt. Law College, Ambikapur, Zila Sirguja (Rajiv Gandhi P.G. College)', '1', '2022-11-09 05:29:52', '2022-11-09 05:29:52', NULL, '316'),
(167, 'School of Law, Shri Rawatpura Sarkar University, Raipur', '1', '2022-11-09 05:31:39', '2022-11-09 05:31:39', NULL, '339'),
(168, 'Govt. Post Graduate College, Jagdalpur', '1', '2022-11-09 05:32:20', '2022-11-09 05:32:20', NULL, '327'),
(169, 'Bharatiya Vidya Peeth Deemed University\'s Law College, Delhi', '1', '2022-11-10 01:42:29', '2022-11-10 01:42:29', NULL, '55'),
(170, 'Campus Law Centre, University Campus, Delhi University, Delhi', '1', '2022-11-10 01:43:21', '2022-11-10 01:43:21', NULL, '92'),
(171, 'Law Centre NO - I, University Campus, Delhi University, Delhi', '1', '2022-11-10 01:43:32', '2022-11-10 01:43:32', NULL, '92'),
(172, 'Law Centre NO - II, University Campus, Delhi University, Delhi', '1', '2022-11-10 01:43:45', '2022-11-10 01:43:45', NULL, '92'),
(173, 'Delhi Institute of Rural Development’s Institute of Law, Delhi', '1', '2022-11-10 01:46:46', '2022-11-10 01:46:46', NULL, '114'),
(174, 'Delhi Metropolitan Education’s Delhi Technical Campus, Greater Noida', '1', '2022-11-10 01:47:05', '2022-11-10 01:47:05', NULL, '114'),
(175, 'FIMT School of Law, Fairfield Institute of Management and Technology, Delhi', '1', '2022-11-10 01:47:21', '2022-11-10 01:47:21', NULL, '114'),
(176, 'Gitarattan International Business School, Madhuban Chowk, Rohini, Delhi', '1', '2022-11-10 01:47:36', '2022-11-10 01:47:36', NULL, '114'),
(177, 'Ideal Institute of Management and Technology, Delhi', '1', '2022-11-10 01:47:49', '2022-11-10 01:47:49', NULL, '114'),
(178, 'Sant Vivekananda College of Law & Higher Studies, Ghaziabad', '1', '2022-11-10 01:48:03', '2022-11-10 01:48:03', NULL, '114'),
(179, 'School of Law and Legal Studies, Guru Gobind Singh Indraprastha University, Delhi', '1', '2022-11-10 01:48:40', '2022-11-10 01:48:40', NULL, '114'),
(180, 'School of Law, BLS Institute of Technology Management, Bahadurgarh', '1', '2022-11-10 01:48:54', '2022-11-10 01:48:54', NULL, '114'),
(181, 'School of Law, Chanderprabhu Jain College of Higher Studies, Narela, Delhi', '1', '2022-11-10 01:49:10', '2022-11-10 01:49:10', NULL, '114'),
(182, 'School of Law, Jims Engineering Management Technical, Greater Noida', '1', '2022-11-10 01:49:23', '2022-11-10 01:49:23', NULL, '114'),
(183, 'School of Law, Maharaja Agrasen Institute of Management Studies, Sector-22, Rohini', '1', '2022-11-10 01:49:36', '2022-11-10 01:49:36', NULL, '114'),
(184, 'Shri Krishna College of Education, Baghpat', '1', '2022-11-10 01:49:50', '2022-11-10 01:49:50', NULL, '114'),
(185, 'Trinity Institute of Innovation in Professional Studies, Greater Noida', '1', '2022-11-10 01:50:04', '2022-11-10 01:50:04', NULL, '114'),
(186, 'Trinity Institute of Professional Studies, Dwarka', '1', '2022-11-10 01:50:17', '2022-11-10 01:50:17', NULL, '114'),
(187, 'United College of Education, Greater Noida', '1', '2022-11-10 01:50:29', '2022-11-10 01:50:29', NULL, '114'),
(188, 'Vivekananda Institute of Professional Studies, Shivaji Marg, New Delhi', '1', '2022-11-10 01:50:45', '2022-11-10 01:50:45', NULL, '114'),
(189, 'Faculty of Law, Jamia Millia Islamia, Jamia Nagar, Delhi', '1', '2022-11-10 01:59:11', '2022-11-10 01:59:11', NULL, '170'),
(190, 'National Law University Delhi, Dwarka', '1', '2022-11-10 02:00:09', '2022-11-10 02:00:09', NULL, '250'),
(191, 'Hamdard Institute of legal Studies (HILSR), The Zamia Hamdard University, Hamdard Nagar, New Delhi', '1', '2022-11-10 02:00:41', '2022-11-10 02:00:41', NULL, '379'),
(192, 'G.R. Kare College of Law, Goa (Govind Ramnath Kare College of Law)', '1', '2022-11-10 02:01:45', '2022-11-10 02:01:45', NULL, '121'),
(193, 'V.M. Salgaocar College of Law, Panaji', '1', '2022-11-10 02:02:08', '2022-11-10 02:02:08', NULL, '121'),
(194, 'Faculty of Law, Atmiya University, Rajkot', '1', '2022-11-11 23:06:07', '2022-11-11 23:06:07', NULL, '33'),
(195, 'School of Law, Auro University of Hospitality and Management, Surat', '1', '2022-11-15 05:10:56', '2022-11-15 05:10:56', NULL, '34'),
(196, 'School of Law, Alliance University, Bangalore', '1', '2022-11-15 05:16:57', '2022-11-15 05:16:57', NULL, '10'),
(197, 'Amity Law School, Amity University, Gwalior, Madhya Pradesh', '1', '2022-11-15 05:17:31', '2022-11-15 05:17:31', NULL, '19'),
(198, 'University College of Law, Bangalore University, Bangalore', '1', '2022-11-15 05:18:54', '2022-11-15 05:18:54', NULL, '46'),
(199, 'T.R.S College,Rewa', '1', '2022-11-15 05:19:17', '2022-11-15 05:19:17', NULL, '35'),
(200, 'School of Law, Christ University, Bangalore', '1', '2022-11-15 05:20:37', '2022-11-15 05:20:37', NULL, '82'),
(201, 'Govt.S.K.N(P.G) College,Mauganj', '1', '2022-11-15 05:20:39', '2022-11-15 05:20:39', NULL, '35'),
(202, 'Nehru	Smarak P.G.College,Chakghat', '1', '2022-11-15 05:22:02', '2022-11-15 05:22:02', NULL, '35'),
(203, 'BHAKTA KAVI NARSINH MEHTA UNIVERSITY, KHADIA, JUNAGADH- 2019', '1', '2022-11-15 05:22:07', '2022-11-15 05:22:07', NULL, '53'),
(204, 'CMR University School and Legal Studies (CMR Law School, Bangalore) (till 2016 under KSLU, Hubbali)', '1', '2022-11-15 05:22:22', '2022-11-15 05:22:22', NULL, '84'),
(205, 'S.V.	College,Teonthar', '1', '2022-11-15 05:22:27', '2022-11-15 05:22:27', NULL, '35'),
(206, 'School of Law, Jain University, Ramanagara, Bangalore', '1', '2022-11-15 05:23:53', '2022-11-15 05:23:53', NULL, '168'),
(207, 'Law College, Satna', '1', '2022-11-15 05:24:04', '2022-11-15 05:24:04', NULL, '35'),
(208, 'School of Law, Sabarmati University, Ahmedabad, Gujarat', '1', '2022-11-15 05:24:19', '2022-11-15 05:24:19', NULL, '308'),
(209, 'College  of Law and legal aid, Shahdol', '1', '2022-11-15 05:24:45', '2022-11-15 05:24:45', NULL, '35'),
(210, 'Sri Siddappa Kambli Law College, Karnatak University, Dharwad (University College of Law)', '1', '2022-11-15 05:25:30', '2022-11-15 05:25:30', NULL, '185'),
(211, 'C. U. Shah College of Law, C.U. Shah University, Surendranagar', '1', '2022-11-15 05:25:35', '2022-11-15 05:25:35', NULL, '66'),
(212, 'Ishwar Chandra Vidyasagar Vidhi Mahavidyalaya, Jawa, Rewa', '1', '2022-11-15 05:25:35', '2022-11-15 05:25:35', NULL, '35'),
(213, 'Vidhyan Chal Mahavidyalaya, Jigna, Rewa', '1', '2022-11-15 05:26:09', '2022-11-15 05:26:09', NULL, '35'),
(214, 'Shriyut	 Vidhi Mahavidyalaya, Rewa', '1', '2022-11-15 05:26:40', '2022-11-15 05:26:40', NULL, '35'),
(215, 'School of Law, Karnataka State Law University, Hubli', '1', '2022-11-15 05:26:52', '2022-11-15 05:26:52', NULL, '186'),
(216, 'Swami Neelkanth Mahavidyalaya, Maihar, Rewa', '1', '2022-11-15 05:27:18', '2022-11-15 05:27:18', NULL, '35'),
(217, 'Vivekananda College of Commerce and Law, Ahmedabad', '1', '2022-11-15 05:27:22', '2022-11-15 05:27:22', NULL, '127'),
(218, 'Deptt. of Law, A. P. S. Univ, Rewa', '1', '2022-11-15 05:27:56', '2022-11-15 05:27:56', NULL, '35'),
(219, 'Hulkoti Co-operative Education Society Ltd’s Law College, Gadag', '1', '2022-11-15 05:28:21', '2022-11-15 05:28:21', NULL, '186'),
(220, 'Sir L.A. Shah Law College, Ellis Bridge, Ahmedabad', '1', '2022-11-15 05:28:39', '2022-11-15 05:28:39', NULL, '127'),
(221, 'Mayaram Law College, Medhauli-Morwa, Singrauli(Distt.)', '1', '2022-11-15 05:28:44', '2022-11-15 05:28:44', NULL, '35'),
(222, 'Sanskar Law College, Anuppur', '1', '2022-11-15 05:29:14', '2022-11-15 05:29:14', NULL, '35'),
(223, 'Vidya Vikas Edu. Trust’s Law College, Mysore', '1', '2022-11-15 05:29:18', '2022-11-15 05:29:18', NULL, '186'),
(224, 'I.M. Nanavati Law College, Lal Darwaja', '1', '2022-11-15 05:29:38', '2022-11-15 05:29:38', NULL, '127'),
(225, 'Arun Tiwari Smrithi College, Pahadiya, Rewa', '1', '2022-11-15 05:30:00', '2022-11-15 05:30:00', NULL, '35'),
(226, 'Motilal Nehru Law College, Ahmedabad', '1', '2022-11-15 05:30:16', '2022-11-15 05:30:16', NULL, '127'),
(227, 'Govt Law College, Holenarasipura', '1', '2022-11-15 05:30:29', '2022-11-15 05:30:29', NULL, '186'),
(228, 'Sri Ramakrishna College of Law, Distt. Satna', '1', '2022-11-15 05:30:42', '2022-11-15 05:30:42', NULL, '35'),
(229, 'Maneklal Nanavati Law College, Ahmedabad', '1', '2022-11-15 05:31:30', '2022-11-15 05:31:30', NULL, '127'),
(230, 'Shri Krishan International School of Law, Bangalore', '1', '2022-11-15 05:31:30', '2022-11-15 05:31:30', NULL, '186'),
(231, 'Scholars Home College of Law, Satna', '1', '2022-11-15 05:31:32', '2022-11-15 05:31:32', NULL, '35'),
(232, 'Daulatbhai Trivedi Law College, Ahmedabad', '1', '2022-11-15 05:32:09', '2022-11-15 05:32:09', NULL, '127'),
(233, 'Shiksha Mahavidyalaya, Panwar, Sidhhi, Madhya Pradesh', '1', '2022-11-15 05:32:16', '2022-11-15 05:32:16', NULL, '35'),
(234, 'S. E. A. Law College, Bangalore, (South East Asian Education Trust)', '1', '2022-11-15 05:33:19', '2022-11-15 05:33:19', NULL, '186'),
(235, 'Faculty of Law,	Bhabha University, Bhopal', '1', '2022-11-15 05:33:28', '2022-11-15 05:33:28', NULL, '51'),
(236, 'Bhuvan Law College, Bangalore', '1', '2022-11-15 05:34:35', '2022-11-15 05:34:35', NULL, '186'),
(237, 'Bhuvan Law College, Bangalore', '1', '2022-11-15 05:34:35', '2022-11-15 05:34:35', NULL, '186'),
(238, 'Saifia Arts, Commerce Law	 College, Bhopal', '1', '2022-11-15 05:35:19', '2022-11-15 05:35:19', NULL, '48'),
(239, 'Patel Law College, Bangalore', '1', '2022-11-15 05:35:42', '2022-11-15 05:35:42', NULL, '186'),
(240, 'Rajeev Gandhi College, Bhopal', '1', '2022-11-15 05:36:09', '2022-11-15 05:36:09', NULL, '48'),
(241, 'Govt. P.G. College, Sehore', '1', '2022-11-15 05:36:43', '2022-11-15 05:36:43', NULL, '48'),
(242, 'Vijnaneshwara Government Law College, Gulbarga', '1', '2022-11-15 05:36:48', '2022-11-15 05:36:48', NULL, '186'),
(243, 'L.B.S. College, Ganj Basoda', '1', '2022-11-15 05:37:30', '2022-11-15 05:37:30', NULL, '48'),
(244, 'Karnataka Law College, Gulbarga', '1', '2022-11-15 05:37:38', '2022-11-15 05:37:38', NULL, '186'),
(245, 'Sufiya Law College, Tumkur', '1', '2022-11-15 05:38:32', '2022-11-15 05:38:32', NULL, '186'),
(246, 'IFIM Law School, Bangalore (old name : . IFIM Law College)', '1', '2022-11-15 05:39:59', '2022-11-15 05:39:59', NULL, '186'),
(247, 'Government Narmada P. G. College, Hoshangabad', '1', '2022-11-15 05:40:46', '2022-11-15 05:40:46', NULL, '48'),
(248, 'Sree Balaji Law College, Bangalore', '1', '2022-11-15 05:40:51', '2022-11-15 05:40:51', NULL, '186'),
(249, 'Govt. P.G. College, Pipariya', '1', '2022-11-15 05:41:35', '2022-11-15 05:41:35', NULL, '48'),
(250, 'Law College, Betul', '1', '2022-11-15 05:42:18', '2022-11-15 05:42:18', NULL, '48'),
(251, 'Career College of Law, Bhopal', '1', '2022-11-15 05:42:51', '2022-11-15 05:42:51', NULL, '48'),
(252, 'Department of Law, Barkatullah University, Bhopal', '1', '2022-11-15 05:43:28', '2022-11-15 05:43:28', NULL, '48'),
(253, 'Bonnie Foi College, Bhopal', '1', '2022-11-15 05:44:01', '2022-11-15 05:44:01', NULL, '48'),
(254, 'Govt. State Level P.G. Law College, Bhopal', '1', '2022-11-15 05:44:36', '2022-11-15 05:44:36', NULL, '48'),
(255, 'Jai Hind Defence College of Law, Bhopal', '1', '2022-11-15 05:45:08', '2022-11-15 05:45:08', NULL, '48'),
(256, 'N. A. Global Law School, Bangalore', '1', '2022-11-15 05:45:40', '2022-11-15 05:45:40', NULL, '186'),
(257, 'J. H. Govt. P. G College, Betul', '1', '2022-11-15 05:45:45', '2022-11-15 05:45:45', NULL, '48'),
(258, 'People’s Institute of Legal	Studies, Bhanpur, Bhopal', '1', '2022-11-15 05:46:23', '2022-11-15 05:46:23', NULL, '48'),
(259, 'S. P. (Shikshan Prasarak) Mandal Law College, Raibag, Belgaum', '1', '2022-11-15 05:46:38', '2022-11-15 05:46:38', NULL, '186'),
(260, 'Govt. College, Bareli, Raisen', '1', '2022-11-15 05:46:52', '2022-11-15 05:46:52', NULL, '48'),
(261, 'Ramaiah Institute of Legal Studies (RILS), Bangalore', '1', '2022-11-15 05:47:32', '2022-11-15 05:47:32', NULL, '186'),
(262, 'Vidyadayini Institute of Science Management & Technology, Bhopal', '1', '2022-11-15 05:47:38', '2022-11-15 05:47:38', NULL, '48'),
(263, 'Rajeev Gandhi Law College, Raisen', '1', '2022-11-15 05:48:11', '2022-11-15 05:48:11', NULL, '48'),
(264, 'Sharada Vikas School of Excellence for Law, Bengaluru', '1', '2022-11-15 05:48:22', '2022-11-15 05:48:22', NULL, '186'),
(265, 'Sri Sathya Sai College for Women, Bhopal, Madhya Pradesh', '1', '2022-11-15 05:48:55', '2022-11-15 05:48:55', NULL, '48'),
(266, 'Krishtu Jayanti College of Law, Bengajuru', '1', '2022-11-15 05:49:13', '2022-11-15 05:49:13', NULL, '186'),
(267, 'Patel College of Law, Bhopal', '1', '2022-11-15 05:49:27', '2022-11-15 05:49:27', NULL, '48'),
(268, 'Christ Academy Institute of Law, Christ Nagar, Bangalore', '1', '2022-11-15 05:50:05', '2022-11-15 05:50:05', NULL, '186'),
(269, 'Green Field College  of Law, Sehore', '1', '2022-11-15 05:50:06', '2022-11-15 05:50:06', NULL, '48'),
(270, 'Technocrats Institute of Law, Bhopal', '1', '2022-11-15 05:50:39', '2022-11-15 05:50:39', NULL, '48'),
(271, 'ISBR Law College, Bengaluru', '1', '2022-11-15 05:50:53', '2022-11-15 05:50:53', NULL, '186'),
(272, 'St. Joseph\'s College of Law, Bengaluru', '1', '2022-11-15 05:52:05', '2022-11-15 05:52:05', NULL, '186'),
(273, 'Government New Law College, Indore', '1', '2022-11-15 05:52:14', '2022-11-15 05:52:14', NULL, '94'),
(274, 'Soundarya College of Law, Sidedahalli, Bengaluru', '1', '2022-11-15 05:52:59', '2022-11-15 05:52:59', NULL, '186'),
(275, 'Indore Christian College, Indore', '1', '2022-11-15 05:53:08', '2022-11-15 05:53:08', NULL, '94'),
(276, 'Siddaramaiah Law College, Chikkaballapura', '1', '2022-11-15 05:53:43', '2022-11-15 05:53:43', NULL, '186'),
(277, 'Motilal Nehru Vidhi Mahavidyalaya, Khandwa', '1', '2022-11-15 05:53:56', '2022-11-15 05:53:56', NULL, '94'),
(278, 'Sayyid Akbar Husayni College of law, Kalaburagi(Gulbarga)', '1', '2022-11-15 05:54:27', '2022-11-15 05:54:27', NULL, '186'),
(279, 'Govt. P.G. College, Dhar', '1', '2022-11-15 05:54:31', '2022-11-15 05:54:31', NULL, '94'),
(280, 'R V Institute of Legal Studies,Bangalore', '1', '2022-11-15 05:55:18', '2022-11-15 05:55:18', NULL, '186'),
(281, 'Govt. College Jhabua', '1', '2022-11-15 05:55:23', '2022-11-15 05:55:23', NULL, '94'),
(282, 'Govt.College Jhabua', '1', '2022-11-15 05:56:00', '2022-11-15 05:56:00', NULL, '94'),
(283, 'ABBS School of Law, Bangalore', '1', '2022-11-15 05:56:04', '2022-11-15 05:56:04', NULL, '186'),
(284, 'Govt. College, Khargone', '1', '2022-11-15 05:56:24', '2022-11-15 05:56:24', NULL, '94'),
(285, 'Seva Sadan Mahavidyalaya, Burhanpur', '1', '2022-11-15 05:56:50', '2022-11-15 05:56:50', NULL, '94'),
(286, 'BRITE law college, Bangalore', '1', '2022-11-15 05:57:06', '2022-11-15 05:57:06', NULL, '186'),
(287, 'Govt. P. G. College, Barwani', '1', '2022-11-15 05:57:19', '2022-11-15 05:57:19', NULL, '94'),
(288, 'Padma Law College, Bangalore', '1', '2022-11-15 05:57:58', '2022-11-15 05:57:58', NULL, '186'),
(289, 'Govt. Law College, Alirajpur', '1', '2022-11-15 05:58:39', '2022-11-15 05:58:39', NULL, '94'),
(290, 'Karnataka Law College, Bangalore', '1', '2022-11-15 05:58:48', '2022-11-15 05:58:48', NULL, '186'),
(291, 'Indore Institute of Law, Indore', '1', '2022-11-15 05:59:18', '2022-11-15 05:59:18', NULL, '94'),
(292, 'Goutham College of Law, Bangalore', '1', '2022-11-15 05:59:30', '2022-11-15 05:59:30', NULL, '186'),
(293, 'R. C.Jall Law College, Mhow', '1', '2022-11-15 06:00:03', '2022-11-15 06:00:03', NULL, '94'),
(294, 'Universal School of Law, Bangalore', '1', '2022-11-15 06:00:17', '2022-11-15 06:00:17', NULL, '186'),
(295, 'Guru Gobind Singh Law College, Indore', '1', '2022-11-15 06:00:38', '2022-11-15 06:00:38', NULL, '94'),
(296, 'M. B. Khalsa Law College, Indore', '1', '2022-11-15 06:01:12', '2022-11-15 06:01:12', NULL, '94'),
(297, 'School of Law, Devi Ahilya Viswa Vidyalaya, Indore', '1', '2022-11-15 06:01:57', '2022-11-15 06:01:57', NULL, '94'),
(298, 'B.M.S. College of Law, Bangalore', '1', '2022-11-15 06:02:03', '2022-11-15 06:02:03', NULL, '46'),
(299, 'College of Law, IPS Academy, Indore', '1', '2022-11-15 06:02:30', '2022-11-15 06:02:30', NULL, '94'),
(300, 'KLE Society’s Law College, Rajaji Nagar, Bangalore', '1', '2022-11-15 06:02:50', '2022-11-15 06:02:50', NULL, '46'),
(301, 'Altius Institute of Studies, Indore', '1', '2022-11-15 06:03:00', '2022-11-15 06:03:00', NULL, '94'),
(302, 'Dr.Ram Manohar Lohia College of Law, Jayanagar, Bangalore', '1', '2022-11-15 06:03:47', '2022-11-15 06:03:47', NULL, '46'),
(303, 'Renaissance Law College, Indore', '1', '2022-11-15 06:03:48', '2022-11-15 06:03:48', NULL, '94'),
(304, 'Liberal College, Indore', '1', '2022-11-15 06:04:26', '2022-11-15 06:04:26', NULL, '94'),
(305, 'Bangalore Institute of Legal Studies, Jayanagar, Bangalore', '1', '2022-11-15 06:04:50', '2022-11-15 06:04:50', NULL, '46'),
(306, 'Akshay Academy Law College, Indore', '1', '2022-11-15 06:04:56', '2022-11-15 06:04:56', NULL, '94'),
(307, 'Prestige Institute of Management & Research, Indore', '1', '2022-11-15 06:05:32', '2022-11-15 06:05:32', NULL, '94'),
(308, 'Ramaiah College of Law, Bangalore (Old name : M.S. Ramaiah Law College)', '1', '2022-11-15 06:05:52', '2022-11-15 06:05:52', NULL, '46'),
(309, 'S & S Law College, Indore', '1', '2022-11-15 06:06:04', '2022-11-15 06:06:04', NULL, '94'),
(310, 'B.M. Institute of Professional Studies, Indore, Madhya Pradesh', '1', '2022-11-15 06:06:53', '2022-11-15 06:06:53', NULL, '94'),
(311, 'Vivekananda College of Law, Rajaji Nagar, Bangalore', '1', '2022-11-15 06:07:02', '2022-11-15 06:07:02', NULL, '46'),
(312, 'LSA College, Dhar', '1', '2022-11-15 06:07:18', '2022-11-15 06:07:18', NULL, '94'),
(313, 'B.E.S. College of Law, Jaya Nagar, Bangalore', '1', '2022-11-15 06:07:37', '2022-11-15 06:07:37', NULL, '46'),
(314, 'Government Law College, Khargone, Madhya Pradesh', '1', '2022-11-15 06:07:54', '2022-11-15 06:07:54', NULL, '94'),
(315, 'Govt. Law College, Kolar', '1', '2022-11-15 06:08:20', '2022-11-15 06:08:20', NULL, '46'),
(316, 'Sri Kengal Hanumanthaiah Law College, Kolar (K. G. F. Law College)', '1', '2022-11-15 06:09:10', '2022-11-15 06:09:10', NULL, '46'),
(317, 'Department of Law, College of Professional Studies, Dr. A. P. J. Abdul Kalam University, Indore', '1', '2022-11-15 06:09:40', '2022-11-15 06:09:40', NULL, '97'),
(318, 'Department of Law, College of	 Professional Studies, Dr. A. P. J. Abdul	Kalam University, Indore', '1', '2022-11-15 06:12:16', '2022-11-15 06:12:16', NULL, '97'),
(319, 'J. L. Verma Law College, Damoh', '1', '2022-11-15 06:13:05', '2022-11-15 06:13:05', NULL, '104'),
(320, 'Govt. P.G. College, Bina', '1', '2022-11-15 06:13:41', '2022-11-15 06:13:41', NULL, '104'),
(321, 'Satpura Law College, Chhindwara', '1', '2022-11-15 06:15:29', '2022-11-15 06:15:29', NULL, '104'),
(322, 'Faculty of Law, Dr. Hari Singh Gaur Vishwavidyalaya, Sagar', '1', '2022-11-15 06:16:11', '2022-11-15 06:16:11', NULL, '104'),
(323, 'Pt. Motilal Nehru Vidhi Mahavidyalaya, Chhatarpur', '1', '2022-11-15 06:16:51', '2022-11-15 06:16:51', NULL, '104'),
(324, 'DBC Mahavidyalaya, Panna', '1', '2022-11-15 06:17:36', '2022-11-15 06:17:36', NULL, '104'),
(325, 'Govt. P. G. College, Chhindwara', '1', '2022-11-15 06:18:13', '2022-11-15 06:18:13', NULL, '104'),
(326, 'Veerangana Awanti Bai Law College, Chhatarpur', '1', '2022-11-15 06:18:52', '2022-11-15 06:18:52', NULL, '104'),
(327, 'Govt. P. G. Nehru College, Deori', '1', '2022-11-15 06:20:01', '2022-11-15 06:20:01', NULL, '104'),
(328, 'Govt. P. G. College, Tikamgarh', '1', '2022-11-15 06:20:36', '2022-11-15 06:20:36', NULL, '104'),
(329, 'Vaishnav Mata Law College, Panna', '1', '2022-11-15 06:21:15', '2022-11-15 06:21:15', NULL, '104'),
(330, 'School of Law, ITM University, Gwalior, Madhya Pradesh', '1', '2022-11-15 06:22:23', '2022-11-15 06:22:23', NULL, '163'),
(331, 'School of Law, G H Raisoni University, Saikheda, Chindwara', '1', '2022-11-15 06:23:23', '2022-11-15 06:23:23', NULL, '111'),
(332, 'School Of Law, Jagran Lake City, University, Bhopal', '1', '2022-11-15 06:24:28', '2022-11-15 06:24:28', NULL, '166'),
(333, 'Madhav Vidhi Mahavidyalaya, Gwalior', '1', '2022-11-15 06:25:13', '2022-11-15 06:25:13', NULL, '175'),
(334, 'Maharani Laxmi Bai College of Excellence, Gwalior', '1', '2022-11-15 06:26:12', '2022-11-15 06:26:12', NULL, '175'),
(335, 'Mahatma Gandhi Law College, Gwalior', '1', '2022-11-15 06:27:49', '2022-11-15 06:27:49', NULL, '175'),
(336, 'Govt. M.J.S. Mahavidhyalaya, Bhind', '1', '2022-11-15 06:28:18', '2022-11-15 06:28:18', NULL, '175'),
(337, 'Govt. Post Graduate College, Shivpuri', '1', '2022-11-15 06:28:52', '2022-11-15 06:28:52', NULL, '175'),
(338, 'Govt. P. G. College, Morena', '1', '2022-11-15 06:29:23', '2022-11-15 06:29:23', NULL, '175'),
(339, 'Institute of Law, Jiwaji Univ., Gwalior', '1', '2022-11-15 06:29:55', '2022-11-15 06:29:55', NULL, '175'),
(340, 'Govt. P. G. College, Guna', '1', '2022-11-15 06:30:24', '2022-11-15 06:30:24', NULL, '175'),
(341, 'Govt. Nehru College, Ashok Nagar', '1', '2022-11-15 06:30:54', '2022-11-15 06:30:54', NULL, '175'),
(342, 'Sarwa Dharma Vidhi Mahavidyalaya, Gwalior', '1', '2022-11-15 06:31:26', '2022-11-15 06:31:26', NULL, '175'),
(343, 'Chaudhary Dilip Singh Law College, Bhind', '1', '2022-11-15 06:31:55', '2022-11-15 06:31:55', NULL, '175'),
(344, 'Gwalior Law College, Gwalior', '1', '2022-11-15 06:32:19', '2022-11-15 06:32:19', NULL, '175'),
(345, 'Govt. P. G. College, Datia', '1', '2022-11-15 06:32:48', '2022-11-15 06:32:48', NULL, '175'),
(346, 'Institute of Law, Govt. Kamla Raja Girls Autonomus P.G. College, Gwalior', '1', '2022-11-15 06:33:36', '2022-11-15 06:33:36', NULL, '175'),
(347, 'Govt. Modern Women’s Law College, Gwalior', '1', '2022-11-15 06:34:08', '2022-11-15 06:34:08', NULL, '175'),
(348, 'S. L. P. Govt. College, Morar', '1', '2022-11-15 06:35:18', '2022-11-15 06:35:18', NULL, '175'),
(349, 'Ch. Rustam Singh Group of College, Bhind, Madhya Pradesh', '1', '2022-11-15 06:35:58', '2022-11-15 06:35:58', NULL, '175'),
(350, 'Prestige Institute of Management, Gwalior', '1', '2022-11-15 06:36:36', '2022-11-15 06:36:36', NULL, '175'),
(351, 'Vikrant Institute of Law, Gwalior', '1', '2022-11-15 06:37:05', '2022-11-15 06:37:05', NULL, '175'),
(352, 'Sonali College, Guna', '1', '2022-11-15 06:37:27', '2022-11-15 06:37:27', NULL, '175'),
(353, 'School of Legal Studies, LNCT University, Bhopal', '1', '2022-11-15 06:38:28', '2022-11-15 06:38:28', NULL, '201'),
(354, 'Faculty of Law, Mansarovar Global University, Sehore', '1', '2022-11-15 06:42:17', '2022-11-15 06:42:17', NULL, '233'),
(355, 'NATIONAL LAW INSTITUTE UNIVERSITY, BHOPAL', '1', '2022-11-15 06:43:34', '2022-11-15 06:43:34', NULL, '253'),
(356, 'Oriental School of Law, Oriental University, Indore', '1', '2022-11-15 06:44:17', '2022-11-15 06:44:17', NULL, '273'),
(357, 'Faculty of Law, P. K. University, Shivpuri', '1', '2022-11-15 06:44:59', '2022-11-15 06:44:59', NULL, '276'),
(358, 'Institute of Law, RNT University, Raison', '1', '2022-11-15 06:46:41', '2022-11-15 06:46:41', NULL, '292'),
(359, 'Faculty of Law, Ram Krishna Dharmarth Foundation University,Bhopal', '1', '2022-11-15 06:48:11', '2022-11-15 06:48:11', NULL, '299'),
(360, 'Deptt. of Law, Rani Durgawati University, Jabalpur', '1', '2022-11-15 06:49:03', '2022-11-15 06:49:03', NULL, '302'),
(361, 'Hitkarini Law College, Jabalpur', '1', '2022-11-15 06:49:37', '2022-11-15 06:49:37', NULL, '302'),
(362, 'N.E.S. Law College, Jabalpur', '1', '2022-11-15 06:51:06', '2022-11-15 06:51:06', NULL, '302'),
(363, 'Govt. P.G. College, Narsinghpur', '1', '2022-11-15 06:52:06', '2022-11-15 06:52:06', NULL, '302'),
(364, 'Govt. P.G. College, Balaghat', '1', '2022-11-15 06:53:30', '2022-11-15 06:53:30', NULL, '302'),
(365, 'Govt. P.G. College, Seoni', '1', '2022-11-15 06:53:55', '2022-11-15 06:53:55', NULL, '302'),
(366, 'Govt. S.S.P.(PG) College, Waraseoni', '1', '2022-11-15 06:54:26', '2022-11-15 06:54:26', NULL, '302'),
(367, 'Govt. R.D.S.(PG) College, Mandala', '1', '2022-11-15 06:54:54', '2022-11-15 06:54:54', NULL, '302'),
(368, 'Neelkanth Vidhi Mahavidyalaya, Jabalpur', '1', '2022-11-15 06:55:23', '2022-11-15 06:55:23', NULL, '302'),
(369, 'A. P. Narmada Law College, Jabalpur', '1', '2022-11-15 06:56:06', '2022-11-15 06:56:06', NULL, '302'),
(370, 'Katni College of Commerce and Arts, Katni', '1', '2022-11-15 06:56:50', '2022-11-15 06:56:50', NULL, '302'),
(371, 'Sheth Dosabhai Lalchand Law College, Bhuj(Kutch)', '1', '2022-11-15 06:57:25', '2022-11-15 06:57:25', NULL, '127'),
(372, 'Mother Theressa Law College, Jabalpur', '1', '2022-11-15 06:57:29', '2022-11-15 06:57:29', NULL, '302'),
(373, 'M.S. Bhagat C.S.Sonawala Law College, Nadiad', '1', '2022-11-15 06:57:49', '2022-11-15 06:57:49', NULL, '127'),
(374, 'Siddharth Law College, Gandhi Nagar', '1', '2022-11-15 06:58:19', '2022-11-15 06:58:19', NULL, '127'),
(375, 'D.P. Chaturvedi College, Seoni, Madhya Pradesh', '1', '2022-11-15 06:58:27', '2022-11-15 06:58:27', NULL, '302'),
(376, 'Government Law College, Ahmedabad', '1', '2022-11-15 06:58:37', '2022-11-15 06:58:37', NULL, '127'),
(377, 'Silicobyte Katni Degree College of Professional Studies,Adherkap,Katni', '1', '2022-11-15 06:59:23', '2022-11-15 06:59:23', NULL, '302'),
(378, 'Hari Singh Ruprah Arts, Commerce & Law College,	Jabalpur', '1', '2022-11-15 07:00:07', '2022-11-15 07:00:07', NULL, '302'),
(379, 'LJ School of Law, Ahmedabad, Gujarat', '1', '2022-11-15 07:01:20', '2022-11-15 07:01:20', NULL, '127'),
(380, 'Kallol Taluka Kelavani Mandal Sanchalit LL.B College, Kalol, Gandhinagar, Gujarat', '1', '2022-11-15 07:01:46', '2022-11-15 07:01:46', NULL, '127'),
(381, 'Hari Singh Ruprah Arts, Commerce & Law College, Jabalpur', '1', '2022-11-15 07:02:55', '2022-11-15 07:02:55', NULL, '302'),
(382, 'Sri Guru Tegh Bahadur Khalsa College, Jabalpur', '1', '2022-11-15 07:03:47', '2022-11-15 07:03:47', NULL, '302'),
(383, 'Shriram College of	Commerce, Jabalpur, Madhya Pradesh', '1', '2022-11-15 07:04:25', '2022-11-15 07:04:25', NULL, '302'),
(384, 'Ananya Institute of Commerce & Law, Kallol, Gandhinagar, Gujarat', '1', '2022-11-15 07:05:08', '2022-11-15 07:05:08', NULL, '127'),
(385, 'Apollo Institution of Law, Ahmedabad, Gujarat', '1', '2022-11-15 07:05:33', '2022-11-15 07:05:33', NULL, '127'),
(386, 'Shankersinh Vaghela Bapu Institute of Law, Gandhinagar, Gujarat', '1', '2022-11-15 07:06:09', '2022-11-15 07:06:09', NULL, '127'),
(387, 'Samarpan School of Law, Gandhinagar, Gujarat', '1', '2022-11-15 07:06:32', '2022-11-15 07:06:32', NULL, '127'),
(388, 'Centre of Excellence, School of Law, Gujarat University, Ahmedabad', '1', '2022-11-15 07:06:54', '2022-11-15 07:06:54', NULL, '127'),
(389, 'NavGujarat Law College, Gandhinagar, Gujarat', '1', '2022-11-15 07:07:20', '2022-11-15 07:07:20', NULL, '127'),
(390, 'Ananya Institute of Commerce & Law, Kalol', '1', '2022-11-15 07:08:26', '2022-11-15 07:08:26', NULL, '127'),
(391, 'JG Institute of Law, Ahmedabad', '1', '2022-11-15 07:08:48', '2022-11-15 07:08:48', NULL, '127'),
(392, 'Apollo Law College, Ahmedabad', '1', '2022-11-15 07:09:13', '2022-11-15 07:09:13', NULL, '127'),
(393, 'M. P. Shah Education Society’s Law College, Kadi', '1', '2022-11-15 07:10:13', '2022-11-15 07:10:13', NULL, '127'),
(394, 'A. P. Trivedi Law College, Suigam, Banaskantha(Dt)', '1', '2022-11-15 07:10:39', '2022-11-15 07:10:39', NULL, '127'),
(395, 'Mohan Goswami College of Law, Vahelal, Dascroi, Ahmedabad (Dt.)', '1', '2022-11-15 07:11:04', '2022-11-15 07:11:04', NULL, '127'),
(396, 'Avirat Law College,Thaltej,Ahmedabad', '1', '2022-11-15 07:11:32', '2022-11-15 07:11:32', NULL, '127'),
(397, 'Dr. B. R. Ambedkar Law College, Shantam Education Campus, Ahmedabad', '1', '2022-11-15 07:11:54', '2022-11-15 07:11:54', NULL, '127'),
(398, 'Nalanda Law College, Dhanp, Gandhinagar', '1', '2022-11-15 07:12:17', '2022-11-15 07:12:17', NULL, '127'),
(399, 'Vivekanand Law College, Ahmedabad', '1', '2022-11-15 07:13:18', '2022-11-15 07:13:18', NULL, '127'),
(400, 'Shri Swaminarayan Law College, Gandhinagar, Gujarat', '1', '2022-11-15 07:13:50', '2022-11-15 07:13:50', NULL, '127'),
(401, 'School	of Law, Ansal University,  Gurgaon', '1', '2022-11-21 01:44:30', '2022-11-21 01:44:30', NULL, '22'),
(402, 'B.M.S.College of Law, Bangalore', '1', '2022-11-21 01:45:22', '2022-11-21 01:45:22', NULL, '46'),
(403, 'KLE Society’s Law College,	Rajaji Nagar, Bangalore', '1', '2022-11-21 01:46:01', '2022-11-21 01:46:01', NULL, '46'),
(404, 'Amity Law School, Amity University, Gurgaon', '1', '2022-11-21 01:46:05', '2022-11-21 01:46:05', NULL, '17'),
(405, 'Dr.Ram	Manohar Lohia	College	of Law,Jayanagar,Bangalore', '1', '2022-11-21 01:46:51', '2022-11-21 01:46:51', NULL, '46'),
(406, 'School of Law, Apeejay Stya University, Gurgaon', '1', '2022-11-21 01:47:19', '2022-11-21 01:47:19', NULL, '23'),
(407, 'Department of Law, Baba Mastnath University. Rohtak, Haryana', '1', '2022-11-21 01:48:15', '2022-11-21 01:48:15', NULL, '38'),
(408, 'Ramaiah College of Law, Bangalore (Old name : M.S. Ramaiah	Law College)', '1', '2022-11-21 01:49:08', '2022-11-21 01:49:08', NULL, '46'),
(409, 'School of Law, BML Munjal University, Gurgaon', '1', '2022-11-21 01:49:46', '2022-11-21 01:49:46', NULL, '60'),
(410, 'Department of Law, B.P.S. Mahila Vishwavidyalaya, Kanpurkalan (old name P.SD. Girls Law College)', '1', '2022-11-21 01:50:44', '2022-11-21 01:50:44', NULL, '62'),
(411, 'B.E.S. College of Law, Jaya	Nagar,Bangalore', '1', '2022-11-21 01:52:10', '2022-11-21 01:52:10', NULL, '46'),
(412, 'BITS Law College, Bhiwani, Haryana', '1', '2022-11-21 01:53:21', '2022-11-21 01:53:21', NULL, '78'),
(413, 'Sri Kengal Hanumanthaiah Law College, Kolar	 (K.G.F.	Law College)', '1', '2022-11-21 01:53:49', '2022-11-21 01:53:49', NULL, '46'),
(414, 'BRCM Law College, Bhiwani', '1', '2022-11-21 01:54:09', '2022-11-21 01:54:09', NULL, '78'),
(415, 'Rajiv Gandhi Law College, Bangalore', '1', '2022-11-21 01:54:17', '2022-11-21 01:54:17', NULL, '46'),
(416, 'Al-Ameen Law College, Bangalore', '1', '2022-11-21 01:54:45', '2022-11-21 01:54:45', NULL, '46'),
(417, 'Bishop	Cotton Women’s Christian	Law College, Bangalore', '1', '2022-11-21 01:55:13', '2022-11-21 01:55:13', NULL, '46'),
(418, 'Visveswarapura College of Law, Bangalore 3', '1', '2022-11-21 01:55:46', '2022-11-21 01:55:46', NULL, '46'),
(419, 'Seshadripuram Law College, Bangalore', '1', '2022-11-21 01:56:38', '2022-11-21 01:56:38', NULL, '46'),
(420, 'Vidyodaya Law	College, Tumkur', '1', '2022-11-21 01:57:23', '2022-11-21 01:57:23', NULL, '46'),
(421, 'Panchami College of Law, Bangalore', '1', '2022-11-21 01:57:48', '2022-11-21 01:57:48', NULL, '46'),
(422, 'Sree Krishna Institute of Law, Tumkur', '1', '2022-11-21 01:58:14', '2022-11-21 01:58:14', NULL, '46'),
(423, 'Oxford College of Law,	Bangalore', '1', '2022-11-21 01:58:37', '2022-11-21 01:58:37', NULL, '46'),
(424, 'School Of Law, G.D. Goenka University, Gurgaon', '1', '2022-11-21 01:59:07', '2022-11-21 01:59:07', NULL, '113'),
(425, 'Shri Jagadguru Renukacharya	College	 of Law, Bangalore', '1', '2022-11-21 02:04:02', '2022-11-21 02:04:02', NULL, '46'),
(426, 'Department of Law, Guru Jambeshwar University, Hisar', '1', '2022-11-21 02:05:00', '2022-11-21 02:05:00', NULL, '130'),
(427, 'Shri Jagadguru	Renukacharya	College	 of Law, Bangalore', '1', '2022-11-21 02:05:08', '2022-11-21 02:05:08', NULL, '46'),
(428, 'Sarvodya Law College,Bangalore', '1', '2022-11-21 02:05:36', '2022-11-21 02:05:36', NULL, '46'),
(429, 'School of Law, IILM University (Institute of Integrated Learning in Management University), Gurgaon', '1', '2022-11-21 02:05:44', '2022-11-21 02:05:44', NULL, '152'),
(430, 'Indira Priyadarshini College of	Law, Bangalore', '1', '2022-11-21 02:06:06', '2022-11-21 02:06:06', NULL, '46'),
(431, 'Sree Balaji College	of Law, B’lore', '1', '2022-11-21 02:06:42', '2022-11-21 02:06:42', NULL, '46'),
(432, 'Department of Law, Indira Gandhi University,	Meerpur, Rewari', '1', '2022-11-21 02:07:06', '2022-11-21 02:07:06', NULL, '158'),
(433, 'Teachers’ Law College,	B’lore', '1', '2022-11-21 02:07:09', '2022-11-21 02:07:09', NULL, '47'),
(434, 'Sri R.E.T’s R.K. Law	College,', '1', '2022-11-21 02:07:40', '2022-11-21 02:07:40', NULL, '46'),
(435, 'Faculty of Legal Education, Jagan Nath University, Jhajjar', '1', '2022-11-21 02:07:49', '2022-11-21 02:07:49', NULL, '164'),
(436, 'Basavashree College of Law, Kolar', '1', '2022-11-21 02:08:04', '2022-11-21 02:08:04', NULL, '46'),
(437, 'Kempegowda Law College, Chikkaballapur', '1', '2022-11-21 02:08:27', '2022-11-21 02:08:27', NULL, '46'),
(438, 'School of Law, K.R. Mangalam University, Gurgaon', '1', '2022-11-21 02:08:37', '2022-11-21 02:08:37', NULL, '180'),
(439, 'Arunodaya	Institute of	Legal Studies, Bangalore', '1', '2022-11-21 02:08:50', '2022-11-21 02:08:50', NULL, '46'),
(440, 'Dr.	B.R. Ambedkar	College	of Law, Bangalore', '1', '2022-11-21 02:09:20', '2022-11-21 02:09:20', NULL, '46'),
(441, 'Deptt. of Law, Kurukshetra University, Kurukshetra', '1', '2022-11-21 02:09:41', '2022-11-21 02:09:41', NULL, '198'),
(442, 'Institute of Law, Kurukshetra University, Kurukshetra', '1', '2022-11-21 02:10:30', '2022-11-21 02:10:30', NULL, '198'),
(443, 'Chhaju Ram Law College, Hisar', '1', '2022-11-21 02:11:03', '2022-11-21 02:11:03', NULL, '198'),
(444, 'Lala Hans Raj Phutela College of Law, Sirsa', '1', '2022-11-21 02:13:23', '2022-11-21 02:13:23', NULL, '198'),
(445, 'Swami Devi Dayal Law College, Panchkula', '1', '2022-11-21 02:13:53', '2022-11-21 02:13:53', NULL, '198'),
(446, 'Geeta Institute of Law, Panipat', '1', '2022-11-21 02:14:24', '2022-11-21 02:14:24', NULL, '198'),
(447, 'Lala Ami Chand Monga Memorial college of law, Ugala, Ambala', '1', '2022-11-21 02:15:38', '2022-11-21 02:15:38', NULL, '198'),
(448, 'Vidyavati Institute of Law, Karnal Haryana', '1', '2022-11-21 02:16:32', '2022-11-21 02:16:32', NULL, '198'),
(449, 'Bharat College of Law, Kurukshetra, Haryana', '1', '2022-11-21 02:17:04', '2022-11-21 02:17:04', NULL, '198'),
(450, 'School of Law, Lingaya’s Deemed University, Faridabad, Haryana', '1', '2022-11-21 02:17:39', '2022-11-21 02:17:39', NULL, '200'),
(451, 'Deptt. of Law, Maharshi Dayanand University, Rohtak, Haryana', '1', '2022-11-21 02:18:27', '2022-11-21 02:18:27', NULL, '220'),
(452, 'Institute of Law and Research, Faridabad', '1', '2022-11-21 02:19:10', '2022-11-21 02:19:10', NULL, '220'),
(453, 'Institute of Law and Management Studies, Gurgaon', '1', '2022-11-21 02:23:00', '2022-11-21 02:23:00', NULL, '220'),
(454, 'B. S. Anangpuria Institute of Law, Faridabad', '1', '2022-11-21 02:24:38', '2022-11-21 02:24:38', NULL, '220'),
(455, 'Smt. Shanti Devi Law College, Distt. Rewari', '1', '2022-11-21 02:25:16', '2022-11-21 02:25:16', NULL, '220'),
(456, 'Jat Education Society, Chhotu Ram Institute of Law, Rohtak', '1', '2022-11-21 02:26:56', '2022-11-21 02:26:56', NULL, '220'),
(457, 'Vaish College of Law, Rohtak', '1', '2022-11-21 02:27:36', '2022-11-21 02:27:36', NULL, '220');
INSERT INTO `colleges` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`, `university_id`) VALUES
(458, 'Shamsher Bahadur Saxena College of Law, Rohtak', '1', '2022-11-21 02:28:18', '2022-11-21 02:28:18', NULL, '220'),
(459, 'SLSRC’s Havnur College of	Law, Bangalore', '1', '2022-11-21 03:06:04', '2022-11-21 03:06:04', NULL, '46'),
(460, 'M.H. College of	Law, Ramanagaram', '1', '2022-11-21 03:06:40', '2022-11-21 03:06:40', NULL, '46'),
(461, 'Government Law College, Ramnagar', '1', '2022-11-21 03:07:38', '2022-11-21 03:07:38', NULL, '46'),
(462, 'H.K.E.Society’s	Seth Shankarlal Lahoti	 Law  College,Gulbarga', '1', '2022-11-21 03:08:03', '2022-11-21 03:08:03', NULL, '46'),
(463, 'H.K.E.Society’s	Seth Shankarlal Lahoti	 Law College, Gulbarga', '1', '2022-11-21 03:10:08', '2022-11-21 03:10:08', NULL, '46'),
(464, 'K.P.E.Society’s	Siddharth Law College, Gulbarga', '1', '2022-11-21 03:10:42', '2022-11-21 03:10:42', NULL, '46'),
(465, 'S.S.Seth Chunilal Amarchand Bohara Law	College, Raichur', '1', '2022-11-21 03:11:14', '2022-11-21 03:11:14', NULL, '46'),
(466, 'K.R.E.Society’s	R.V	Bidap Law College, Bidar', '1', '2022-11-21 03:11:47', '2022-11-21 03:11:47', NULL, '46'),
(467, 'School of Law, Sandip University, Mahiravali, Nashik', '1', '2022-11-21 03:12:09', '2022-11-21 03:12:09', NULL, '311'),
(468, 'Shri Mahadevappa	Gaddagi Law College, Bidar', '1', '2022-11-21 03:12:28', '2022-11-21 03:12:28', NULL, '46'),
(469, 'V.V.V.Sangha’s Vunki Sannarudrappa Law College, Bellary', '1', '2022-11-21 03:12:55', '2022-11-21 03:12:55', NULL, '46'),
(470, 'Jawahar Law College, Yadgir', '1', '2022-11-21 03:13:24', '2022-11-21 03:13:24', NULL, '46'),
(471, 'D.B.H.P’S	Sabhas	Law College, Koppal', '1', '2022-11-21 03:15:23', '2022-11-21 03:15:23', NULL, '46'),
(472, 'Dr. Panjabrao Deshmukh College of Law, Amaravati', '1', '2022-11-21 03:16:06', '2022-11-21 03:16:06', NULL, '317'),
(473, 'Basamma Gurulingappa Law College, Raichur', '1', '2022-11-21 03:16:21', '2022-11-21 03:16:21', NULL, '46'),
(474, 'Arundhati College	of Law, Shorapur', '1', '2022-11-21 03:16:48', '2022-11-21 03:16:48', NULL, '46'),
(475, 'K.P.E.S.Law College, Dharwad (Dr G.M.	Patel  Law College)', '1', '2022-11-21 03:18:12', '2022-11-21 03:18:12', NULL, '46'),
(476, 'Hurakadli Ajja Law College, Dharwad', '1', '2022-11-21 03:18:36', '2022-11-21 03:18:36', NULL, '46'),
(477, 'Shri Nathmal Goenka Law College, Akola (Smt. Sitabai Arts College)', '1', '2022-11-21 03:19:01', '2022-11-21 03:19:01', NULL, '317'),
(478, 'G.S.K.Law College,	Vidyanagar, Hubli  (Gurusiddappa	Kotambri Law College)', '1', '2022-11-21 03:19:12', '2022-11-21 03:19:12', NULL, '46'),
(479, 'S.A. Manvi Law	College, Gadag', '1', '2022-11-21 03:19:41', '2022-11-21 03:19:41', NULL, '46'),
(480, 'Amolakchand Mahavidyalaya, Yavatmal', '1', '2022-11-21 03:19:56', '2022-11-21 03:19:56', NULL, '317'),
(481, 'K.L.E. Society’s	B.V	Bellad	Law College,Belgaum', '1', '2022-11-21 03:20:14', '2022-11-21 03:20:14', NULL, '46'),
(482, 'Raja Lakshma Gowda Law	College, Belgaum', '1', '2022-11-21 03:20:51', '2022-11-21 03:20:51', NULL, '46'),
(483, 'Advocate Ramakrishnaji Rathi Law College, Washim', '1', '2022-11-21 03:21:04', '2022-11-21 03:21:04', NULL, '317'),
(484, 'B.V.V. Sangh’s	S.C	Nandimath Law College, Bagalkot	(Old name	is Basaweshwar Law College)', '1', '2022-11-21 03:21:39', '2022-11-21 03:21:39', NULL, '46'),
(485, 'Vinayak Vidhi Mahavidyalaya,Amravati', '1', '2022-11-21 03:21:58', '2022-11-21 03:21:58', NULL, '317'),
(486, 'JSS Sakri Law College,Hubli', '1', '2022-11-21 03:22:03', '2022-11-21 03:22:03', NULL, '46'),
(487, 'MES College of	Law, Sirsi', '1', '2022-11-21 03:22:41', '2022-11-21 03:22:41', NULL, '46'),
(488, 'Shri Rambhau Shelke Law College, Khamgaon', '1', '2022-11-21 03:22:43', '2022-11-21 03:22:43', NULL, '317'),
(489, 'Anjuman Law College,	Bijapur', '1', '2022-11-21 03:23:04', '2022-11-21 03:23:04', NULL, '46'),
(490, 'R.T.E.S Law College, Ranebennur', '1', '2022-11-21 03:23:27', '2022-11-21 03:23:27', NULL, '46'),
(491, 'Mukul Wasnik College of Law, Buldana', '1', '2022-11-21 03:23:34', '2022-11-21 03:23:34', NULL, '317'),
(492, 'K.R.C.E. Society\'s Law College', '1', '2022-11-21 03:24:08', '2022-11-21 03:24:08', NULL, '46'),
(493, 'Akola Edu. Scociety’s Akola Law College, Akola', '1', '2022-11-21 03:24:33', '2022-11-21 03:24:33', NULL, '317'),
(494, 'Shri Laxmanrao Jarkiholi Law College,	Gokak', '1', '2022-11-21 03:24:36', '2022-11-21 03:24:36', NULL, '46'),
(495, 'K.L.E. Society\'s	Law College, Chikodi', '1', '2022-11-21 03:25:05', '2022-11-21 03:25:05', NULL, '46'),
(496, 'Utkaranti Mandal Vidhi Mahavidalaya, Jarud Amravati, Maharashtra', '1', '2022-11-21 03:25:29', '2022-11-21 03:25:29', NULL, '317'),
(497, 'Shri Siddeshwar Law College,Bijapur', '1', '2022-11-21 03:25:32', '2022-11-21 03:25:32', NULL, '46'),
(498, 'Sanmati Law College, Washim', '1', '2022-11-21 03:26:15', '2022-11-21 03:26:15', NULL, '317'),
(499, 'B.L.D.E. Association\'s 5 year Law College, Jamkhandi', '1', '2022-11-21 03:26:53', '2022-11-21 03:26:53', NULL, '46'),
(500, 'A.S.N.S’s Mahatma	Gandhi	Ji Law', '1', '2022-11-21 03:27:19', '2022-11-21 03:27:19', NULL, '46'),
(501, 'M.K. Sreenivasa Shetty	Law College,  Chikmangalur', '1', '2022-11-21 03:27:43', '2022-11-21 03:27:43', NULL, '46'),
(502, 'Noorjahan Begam Salam Ahmad Women’s College of Law, Yavatmal', '1', '2022-11-21 03:27:51', '2022-11-21 03:27:51', NULL, '317'),
(503, 'Sagar Gangotri	College	of Law, Sagar', '1', '2022-11-21 03:28:13', '2022-11-21 03:28:13', NULL, '46'),
(504, 'College of Law, Amaravati (Late Yadavrao Dada Deshmukh Vidhi Mahavidyalaya) Achalpur', '1', '2022-11-21 03:28:41', '2022-11-21 03:28:41', NULL, '317'),
(505, 'C.Bheema	Sena Rao National	College	of Law,  Shimoga', '1', '2022-11-21 03:28:47', '2022-11-21 03:28:47', NULL, '46'),
(506, 'S.J.	M. Law	College, Chitradurga', '1', '2022-11-21 03:29:12', '2022-11-21 03:29:12', NULL, '46'),
(507, 'R.L. Law College, Davangere', '1', '2022-11-21 03:29:36', '2022-11-21 03:29:36', NULL, '46'),
(508, 'Shahaji Law College, Kolhapur', '1', '2022-11-21 03:29:39', '2022-11-21 03:29:39', NULL, '329'),
(509, 'Saraswati Law College, Chitradurga', '1', '2022-11-21 03:30:06', '2022-11-21 03:30:06', NULL, '46'),
(510, 'Bharati Vidyapeeth’s New Law College, Kolhapur', '1', '2022-11-21 03:30:25', '2022-11-21 03:30:25', NULL, '329'),
(511, 'Vaikunta Baliga College of	Law, Udupi', '1', '2022-11-21 03:30:30', '2022-11-21 03:30:30', NULL, '46'),
(512, 'Shri Dharmastala Manjunatheswara Law College, Mangalore', '1', '2022-11-21 03:31:03', '2022-11-21 03:31:03', NULL, '46'),
(513, 'Narayandas Sarvothamadas Soti Law College, Sangli', '1', '2022-11-21 03:31:30', '2022-11-21 03:31:30', NULL, '329'),
(514, 'K.V.G. Law College, Sullia', '1', '2022-11-21 03:31:43', '2022-11-21 03:31:43', NULL, '46'),
(515, 'Vivekananda Law College, Puttur', '1', '2022-11-21 03:32:08', '2022-11-21 03:32:08', NULL, '46'),
(516, 'Ismail Saheb Mulla Law College,Satara', '1', '2022-11-21 03:32:31', '2022-11-21 03:32:31', NULL, '329'),
(517, 'Sarada	Vilas Law College, Mysore', '1', '2022-11-21 03:32:38', '2022-11-21 03:32:38', NULL, '46'),
(518, 'J.S.S. Law College,	Mysore', '1', '2022-11-21 03:32:57', '2022-11-21 03:32:57', NULL, '46'),
(519, 'Priyadarshini Dnyan Prabodhini Law College, Phaltan', '1', '2022-11-21 03:33:05', '2022-11-21 03:33:05', NULL, '329'),
(520, 'Vidya Vardhaka Law College, Mysore', '1', '2022-11-21 03:33:20', '2022-11-21 03:33:20', NULL, '46'),
(521, 'S.B.R. R.Mahajana Law College, Jayalakshmipura,	Mysore', '1', '2022-11-21 03:33:48', '2022-11-21 03:33:48', NULL, '46'),
(522, 'Phaltan Bharati Vidyapeeth’s Yashwantrao Chavan Law College, Karad', '1', '2022-11-21 03:33:54', '2022-11-21 03:33:54', NULL, '329'),
(523, 'M.Krishna Law	College, Hassan', '1', '2022-11-21 03:34:09', '2022-11-21 03:34:09', NULL, '46'),
(524, 'Bharati Vidyapeeth’s New Law College, Sangli', '1', '2022-11-21 03:34:40', '2022-11-21 03:34:40', NULL, '329'),
(525, 'P.E.S. Law College, Mandya', '1', '2022-11-21 03:35:02', '2022-11-21 03:35:02', NULL, '46'),
(526, 'K.N. Nagegowda Law College,	Mandya (Old  name “Shanti Law College)', '1', '2022-11-21 03:35:36', '2022-11-21 03:35:36', NULL, '46'),
(527, 'Government Law College, Hassan', '1', '2022-11-21 03:36:00', '2022-11-21 03:36:00', NULL, '46'),
(528, 'Department of Law, S.N.D.T.Women’s University, Mumbai', '1', '2022-11-21 03:36:03', '2022-11-21 03:36:03', NULL, '334'),
(529, 'Anjani Law College, Bangalore, Karnataka', '1', '2022-11-21 03:36:26', '2022-11-21 03:36:26', NULL, '46'),
(530, 'Sri Apsani N.R. Law College, Gangavati, Karnataka', '1', '2022-11-21 03:37:01', '2022-11-21 03:37:01', NULL, '46'),
(531, 'Seva Mandal Education Society’s Kamalaben Gambhirchand Shah Law School, Matunga, Mumbai', '1', '2022-11-21 03:37:10', '2022-11-21 03:37:10', NULL, '334'),
(532, 'Shahu Shikshan Sanstha’s Rani Putalibai Women’s Law College, Bhosari, Pune', '1', '2022-11-21 03:37:48', '2022-11-21 03:37:48', NULL, '334'),
(533, 'National Law School of India University (NLSIU), Banglore', '1', '2022-11-21 03:38:16', '2022-11-21 03:38:16', NULL, '254'),
(534, 'Faculty	of Law,	PES University,	Bengeluru', '1', '2022-11-21 03:38:45', '2022-11-21 03:38:45', NULL, '282'),
(535, 'S.S.S’s Mata Ramabai Ambedkar Women’s Law College, Aurnagabad', '1', '2022-11-21 03:38:53', '2022-11-21 03:38:53', NULL, '334'),
(536, 'Late Parvatibai Jondhale Womens Law College, Mumbai', '1', '2022-11-21 03:39:39', '2022-11-21 03:39:39', NULL, '334'),
(537, 'D.G.B. Dayanand Law College, Solapur', '1', '2022-11-21 03:40:29', '2022-11-21 03:40:29', NULL, '348'),
(538, 'Presidency	School	of Law, Presidency  University, Bangalore, Karnataka', '1', '2022-11-21 03:40:47', '2022-11-21 03:40:47', NULL, '284'),
(539, 'Rajarshri Shahu Law College, Barshi', '1', '2022-11-21 03:41:20', '2022-11-21 03:41:20', NULL, '348'),
(540, 'School	of Legal Education,	REVA University, Bangalore', '1', '2022-11-21 03:41:20', '2022-11-21 03:41:20', NULL, '305'),
(541, 'Karamveer Audumbar Patil Law College, Pandarpur, Solapur', '1', '2022-11-21 03:42:10', '2022-11-21 03:42:10', NULL, '348'),
(542, 'School	of Law, Off-Campus of SVKM’s	Narsee	Monjee Institute of Management Studies, (NMIMS Deemed to be University), Bangalore', '1', '2022-11-21 03:42:37', '2022-11-21 03:42:37', NULL, '361'),
(543, 'Dayanand College of Law, Latur', '1', '2022-11-21 03:42:42', '2022-11-21 03:42:42', NULL, '366'),
(544, 'Mysore	University School of Justice, Mysore University, Mysore', '1', '2022-11-21 03:43:26', '2022-11-21 03:43:26', NULL, '389'),
(545, 'Shri Shivaji Law College, Kandhar', '1', '2022-11-21 03:44:07', '2022-11-21 03:44:07', NULL, '366'),
(546, 'School	of Law, M S Ramaiah University of Applied Science', '1', '2022-11-21 03:44:10', '2022-11-21 03:44:10', NULL, '205'),
(547, 'Shri Narayanarao Chavan Law College, ( of Shri Sarada Bhavan Education Society ), Nanded', '1', '2022-11-21 03:45:00', '2022-11-21 03:45:00', NULL, '366'),
(548, 'Department of Law, Khaja	Bandanawaz University, Kalaburagi, Gulabarga, Karnataka', '1', '2022-11-21 03:45:06', '2022-11-21 03:45:06', NULL, '193'),
(549, 'Govt. Law College, Kozhikode', '1', '2022-11-21 03:46:26', '2022-11-21 03:46:26', NULL, '68'),
(550, 'MSPM’s Shri Shivaji Law College and Research Centre, Parbhani', '1', '2022-11-21 03:46:42', '2022-11-21 03:46:42', NULL, '366'),
(551, 'Govt Law College, Thrissur', '1', '2022-11-21 03:46:54', '2022-11-21 03:46:54', NULL, '68'),
(552, 'KMCT Law College, Mallapuram', '1', '2022-11-21 03:47:15', '2022-11-21 03:47:15', NULL, '68'),
(553, 'B. B. S. P. Mandal’s Sant Tukaram Law College, Udgir', '1', '2022-11-21 03:47:16', '2022-11-21 03:47:16', NULL, '366'),
(554, 'V.R. Krishnan Ezhuthachan Law College, Palakkad, Kerala', '1', '2022-11-21 03:47:55', '2022-11-21 03:47:55', NULL, '68'),
(555, 'Shri Sewadas Shikshan Parsarak Mandal’s Mahatma Gandhi Law College, Nanded', '1', '2022-11-21 03:47:56', '2022-11-21 03:47:56', NULL, '366'),
(556, 'Markaz	Law College, Kunnamangalam, Kozhikkode', '1', '2022-11-21 03:48:19', '2022-11-21 03:48:19', NULL, '68'),
(557, 'Sharadchandra Pawar Law College, Nanded', '1', '2022-11-21 03:48:28', '2022-11-21 03:48:28', NULL, '366'),
(558, 'AIM College of Law, Thrissur', '1', '2022-11-21 03:48:42', '2022-11-21 03:48:42', NULL, '68'),
(559, 'MCT College of Legal Studies, Malappuram', '1', '2022-11-21 03:49:04', '2022-11-21 03:49:04', NULL, '68'),
(560, 'Nehru Academy of Law, Lakkidi, Palakkad', '1', '2022-11-21 03:49:44', '2022-11-21 03:49:44', NULL, '68'),
(561, 'School of Law, SVKM’s Narsee Monjee Institute of Management Studies (NMIMS Deemed University), Juhu, Mumbai', '1', '2022-11-21 03:49:57', '2022-11-21 03:49:57', NULL, '362'),
(562, 'Al-Ameen Educational	Trust’s	law	College, Palakkad', '1', '2022-11-21 03:50:04', '2022-11-21 03:50:04', NULL, '68'),
(563, 'School of Law, Off-Campus of SVKM’S NMIMS(Deemed to be University), Pethapada, Kharghar, Navi Mumbai', '1', '2022-11-21 03:50:52', '2022-11-21 03:50:52', NULL, '362'),
(564, 'Al-Ameen Educational Trust’s law College,  Palakkad', '1', '2022-11-21 03:50:53', '2022-11-21 03:50:53', NULL, '68'),
(565, 'School	of Legal Studies, Cochin', '1', '2022-11-21 03:51:27', '2022-11-21 03:51:27', NULL, '85'),
(566, 'School of Law, Off-Campus of SVKM’s Narsee Monjee Institute of Management Studies, (NMIMS Deemed to be University) at Dhule', '1', '2022-11-21 03:51:27', '2022-11-21 03:51:27', NULL, '362'),
(567, 'School	of Legal Studies, Kannur University, Thalassery', '1', '2022-11-21 03:52:06', '2022-11-21 03:52:06', NULL, '184'),
(568, 'Symbiosis Society’s Law College, Pune', '1', '2022-11-21 03:52:29', '2022-11-21 03:52:29', NULL, '367'),
(569, 'Govt. Law College,Thiruvananthapuram', '1', '2022-11-21 03:52:42', '2022-11-21 03:52:42', NULL, '192'),
(570, 'Kerala Law Academy Law College, Thiruvananthapuram', '1', '2022-11-21 03:53:06', '2022-11-21 03:53:06', NULL, '192'),
(571, 'Symbiosis Law School, Off-Campus of Symbiosis International Deemed to be University, Mauja-Wathoda, Nagpur', '1', '2022-11-21 03:53:13', '2022-11-21 03:53:13', NULL, '367'),
(572, 'N.S.S.Law College,	Kottiyam', '1', '2022-11-21 03:53:29', '2022-11-21 03:53:29', NULL, '192'),
(573, 'Lokmanya Tilak Law College, Tilak Maharastra Vidyapeeth, Pune', '1', '2022-11-21 03:53:48', '2022-11-21 03:53:48', NULL, '382'),
(574, 'Mar Gregorios College	of Law, Thiruvananthapuram', '1', '2022-11-21 03:54:07', '2022-11-21 03:54:07', NULL, '192'),
(575, 'Sree Narayana	Guru College of Legal Studies,  Kollam,Kerala', '1', '2022-11-21 03:54:34', '2022-11-21 03:54:34', NULL, '192'),
(576, 'TMV’s Lokmanya Tilak Law College, Belapur, Navi Mumbai (Off-Campus)', '1', '2022-11-21 03:54:37', '2022-11-21 03:54:37', NULL, '382'),
(577, 'Bharatiya Vidya Bhavan’s N.A. Palkhivala  Academy for Advanced Legal Studies and  Research, Ramanattukara', '1', '2022-11-21 03:55:34', '2022-11-21 03:55:34', NULL, '192'),
(578, 'CSI	Institute of	Legal Studies, Thiruvananthapuram,', '1', '2022-11-21 03:56:00', '2022-11-21 03:56:00', NULL, '192'),
(579, 'TMV’s Lokmanya Tilak Law College, Solapur, (Off-Campus)', '1', '2022-11-21 03:56:04', '2022-11-21 03:56:04', NULL, '382'),
(580, 'Guru Nithya Chaithanya Yathi	College	of Law  and Research Centre (G-CLAR), Kayamkulam', '1', '2022-11-21 03:56:34', '2022-11-21 03:56:34', NULL, '192'),
(581, 'School of Law, Vijaybhoomi University, Jamrung, Karjat, Raigad', '1', '2022-11-21 03:56:55', '2022-11-21 03:56:55', NULL, '405'),
(582, 'Govt. Law College, Ernakulam', '1', '2022-11-21 03:57:30', '2022-11-21 03:57:30', NULL, '223'),
(583, 'Department of Law, Dr. Vishwanath Karad MIT world Peace University, Pune', '1', '2022-11-21 03:58:00', '2022-11-21 03:58:00', NULL, '101'),
(584, 'Sree Narayana	Law College, Poothotta,  Ernakulam', '1', '2022-11-21 03:58:18', '2022-11-21 03:58:18', NULL, '223'),
(585, 'School of Law and Governance, Vishwakarma University, Laxminagar, Pune', '1', '2022-11-21 03:58:52', '2022-11-21 03:58:52', NULL, '409'),
(586, 'Al-Azhar Law College, Thodupuzha', '1', '2022-11-21 03:59:09', '2022-11-21 03:59:09', NULL, '223'),
(587, 'D.M. Harish School of Law, HSNC University, Mumbai, Maharashtra', '1', '2022-11-21 03:59:32', '2022-11-21 03:59:32', NULL, '142'),
(588, 'Cooperative School of	Law, Thodupuzha', '1', '2022-11-21 03:59:39', '2022-11-21 03:59:39', NULL, '223'),
(589, 'C.S.I. College of Legal Studies,	Ettumanoor, Kottayam', '1', '2022-11-21 04:00:25', '2022-11-21 04:00:25', NULL, '223'),
(590, 'Jamia Islamia Ishaatul Uloom’s, Jamia College of Law, Distict- Nandurbar, Maharashtra', '1', '2022-11-21 04:00:28', '2022-11-21 04:00:28', NULL, '190'),
(591, 'Bharata Mata School of Legal Studies, Aluva East, Chunangamvely', '1', '2022-11-21 04:01:10', '2022-11-21 04:01:10', NULL, '223'),
(592, 'L.M.S Law College, Imphal', '1', '2022-11-21 04:01:12', '2022-11-21 04:01:12', NULL, '232'),
(593, 'Mountzion	Law College, Elakolloor,  Pattanathotta', '1', '2022-11-21 04:01:34', '2022-11-21 04:01:34', NULL, '223'),
(594, 'Royal Academy of Law, Oniam', '1', '2022-11-21 04:01:59', '2022-11-21 04:01:59', NULL, '232'),
(595, 'Mountzion	Law College, Elakolloor,	 Pattanathotta', '1', '2022-11-21 04:02:16', '2022-11-21 04:02:16', NULL, '223'),
(596, 'L. M. G. Memorial Law College, Churachandpur', '1', '2022-11-21 04:02:38', '2022-11-21 04:02:38', NULL, '232'),
(597, 'Vishal Law Institute, Imphal', '1', '2022-11-21 04:03:59', '2022-11-21 04:03:59', NULL, '232'),
(598, 'Department of Law, Bir Tikendrajit University, Imphal', '1', '2022-11-21 04:05:02', '2022-11-21 04:05:02', NULL, '58'),
(599, 'Chankaya Law College, CMJ University, Joraba', '1', '2022-11-21 04:06:04', '2022-11-21 04:06:04', NULL, '83'),
(600, 'Amity Law School, Amity University, Gwalior,  Madhya Pradesh', '1', '2022-11-21 04:07:27', '2022-11-21 04:07:27', NULL, '19'),
(601, 'Department of Legal Studies, Mahatma Gandhi University, Ri-Bho', '1', '2022-11-21 04:07:55', '2022-11-21 04:07:55', NULL, '222'),
(602, 'T.R.S. College, Rewa', '1', '2022-11-21 04:07:55', '2022-11-21 04:07:55', NULL, '35'),
(603, 'Govt. S.K.N (P.G) College, Mauganj', '1', '2022-11-21 04:08:29', '2022-11-21 04:08:29', NULL, '35'),
(604, 'Shillong Law College, Shillong,', '1', '2022-11-21 04:08:37', '2022-11-21 04:08:37', NULL, '267'),
(605, 'Nehru Smarak P.G. College, Chakghat', '1', '2022-11-21 04:08:54', '2022-11-21 04:08:54', NULL, '35'),
(606, 'S.V.	College, Teonthar', '1', '2022-11-21 04:09:14', '2022-11-21 04:09:14', NULL, '35'),
(607, 'Tura Law College, Tura', '1', '2022-11-21 04:09:14', '2022-11-21 04:09:14', NULL, '267'),
(608, 'Khat-ar - Doloi law College, Jowai', '1', '2022-11-21 04:09:58', '2022-11-21 04:09:58', NULL, '267'),
(609, 'College	of Law and	legal aid, Shahdol', '1', '2022-11-21 04:10:10', '2022-11-21 04:10:10', NULL, '35'),
(610, 'Ishwar	Chandra Vidyasagar Vidhi  Mahavidyalaya,	Jawa, Rewa', '1', '2022-11-21 04:10:48', '2022-11-21 04:10:48', NULL, '35'),
(611, 'Department of	Law, NEHU, Shillong', '1', '2022-11-21 04:11:02', '2022-11-21 04:11:02', NULL, '267'),
(612, 'Vidhyan Chal  Mahavidyalaya, Jigna,  Rewa', '1', '2022-11-21 04:11:19', '2022-11-21 04:11:19', NULL, '35'),
(613, 'Shriyut	Vidhi Mahavidyalaya, Rewa', '1', '2022-11-21 04:11:42', '2022-11-21 04:11:42', NULL, '35'),
(614, 'University School of Law & Research (USLR), University of Science and Technology, Ri-Bhoi', '1', '2022-11-21 04:11:58', '2022-11-21 04:11:58', NULL, '387'),
(615, 'Swami	Neelkanth	Mahavidyalaya, Maihar,  Rewa', '1', '2022-11-21 04:12:07', '2022-11-21 04:12:07', NULL, '35'),
(616, 'Deptt. of Law, A.P.S. Univ,Rewa', '1', '2022-11-21 04:12:31', '2022-11-21 04:12:31', NULL, '35'),
(617, 'Govt Mizoram Law College, Aizwal (Old name is Aizwal Law College)', '1', '2022-11-21 04:12:57', '2022-11-21 04:12:57', NULL, '237'),
(618, 'Mayaram Law College,	Medhauli-Morwa, Singrauli(Distt.)', '1', '2022-11-21 04:12:59', '2022-11-21 04:12:59', NULL, '35'),
(619, 'Kohima Law College, Kohima', '1', '2022-11-21 04:13:28', '2022-11-21 04:13:28', NULL, '246'),
(620, 'Arun Tiwari Smrithi College, Pahadiya,	Rewa', '1', '2022-11-21 04:13:52', '2022-11-21 04:13:52', NULL, '35'),
(621, 'Mokokchung Law College, Mokokchung', '1', '2022-11-21 04:14:01', '2022-11-21 04:14:01', NULL, '246'),
(622, 'Sri	Ramakrishna College of Law, Distt. Satna', '1', '2022-11-21 04:14:17', '2022-11-21 04:14:17', NULL, '35'),
(623, 'City Law College, Dimapur', '1', '2022-11-21 04:14:54', '2022-11-21 04:14:54', NULL, '246'),
(624, 'Scholars Home College of	Law, Satna', '1', '2022-11-21 04:15:00', '2022-11-21 04:15:00', NULL, '35'),
(625, 'Lingraj Law College, Berhampur', '1', '2022-11-21 04:15:29', '2022-11-21 04:15:29', NULL, '50'),
(626, 'Shiksha Mahavidyalaya , Panwar,  Sidhhi, Madhya Pradesh', '1', '2022-11-21 04:15:39', '2022-11-21 04:15:39', NULL, '35'),
(627, 'Ganjam Law College, Berhampur', '1', '2022-11-21 04:16:06', '2022-11-21 04:16:06', NULL, '50'),
(628, 'Faculty	of Law,	Bhabha University,	Bhopal', '1', '2022-11-21 04:16:08', '2022-11-21 04:16:08', NULL, '51'),
(629, 'Saifia Arts, Commerce	Law College, Bhopal', '1', '2022-11-21 04:16:38', '2022-11-21 04:16:38', NULL, '48'),
(630, 'Jeypore Law College, Jaypore, Berhampur', '1', '2022-11-21 04:16:41', '2022-11-21 04:16:41', NULL, '50'),
(631, 'Rajeev	Gandhi	College, Bhopal', '1', '2022-11-21 04:16:59', '2022-11-21 04:16:59', NULL, '48'),
(632, 'Brahmapur Law College, Brahmapur', '1', '2022-11-21 04:17:18', '2022-11-21 04:17:18', NULL, '50'),
(633, 'Govt.P.G. College, Sehore', '1', '2022-11-21 04:17:57', '2022-11-21 04:17:57', NULL, '48'),
(634, 'L.B.S.  College, Ganj Basoda', '1', '2022-11-21 04:18:41', '2022-11-21 04:18:41', NULL, '48'),
(635, 'Govt. College, Rajgarh', '1', '2022-11-21 04:19:09', '2022-11-21 04:19:09', NULL, '48'),
(636, 'Birla School of Law, Birla Global University, Bhubaneshwar', '1', '2022-11-21 04:19:11', '2022-11-21 04:19:11', NULL, '58'),
(637, 'Government Narmada	P.G. College,  Hoshangabad,', '1', '2022-11-21 04:19:37', '2022-11-21 04:19:37', NULL, '48'),
(638, 'Balasore Law College, Balasore', '1', '2022-11-21 04:19:46', '2022-11-21 04:19:46', NULL, '110'),
(639, 'Bhadrak Law College,Bhadrak', '1', '2022-11-21 04:20:23', '2022-11-21 04:20:23', NULL, '110'),
(640, 'Govt.  P.G.  College,  Pipariya', '1', '2022-11-21 04:20:28', '2022-11-21 04:20:28', NULL, '48'),
(641, 'ICSS College Department of Law, Bhadrak', '1', '2022-11-21 04:20:50', '2022-11-21 04:20:50', NULL, '110'),
(642, 'Law College , Betul', '1', '2022-11-21 04:20:56', '2022-11-21 04:20:56', NULL, '48'),
(643, 'KIIT School of Law, KIIT University, Bhubaneshwar', '1', '2022-11-21 04:21:30', '2022-11-21 04:21:30', NULL, '194'),
(644, 'Career College of Law , Bhopal', '1', '2022-11-21 04:21:31', '2022-11-21 04:21:31', NULL, '48'),
(645, 'Department of	Law, Barkatullah University, Bhopal', '1', '2022-11-21 04:21:54', '2022-11-21 04:21:54', NULL, '48'),
(646, 'Bonnie	Foi	College, Bhopal', '1', '2022-11-21 04:22:32', '2022-11-21 04:22:32', NULL, '48'),
(647, 'National Law University, Cuttack', '1', '2022-11-21 04:22:42', '2022-11-21 04:22:42', NULL, '251'),
(648, 'Govt. State	Level P.G. Law College,	Bhopal', '1', '2022-11-21 04:22:55', '2022-11-21 04:22:55', NULL, '48'),
(649, 'Jai	Hind Defence College of Law, Bhopal', '1', '2022-11-21 04:23:29', '2022-11-21 04:23:29', NULL, '48'),
(650, 'J.H. Govt. P.G College, Betul', '1', '2022-11-21 04:24:02', '2022-11-21 04:24:02', NULL, '48'),
(651, 'Pravas Manjari Law College, Keonjhar (Old name Keonjhar Law College)', '1', '2022-11-21 04:24:13', '2022-11-21 04:24:13', NULL, '269'),
(652, 'People’s Institute of Legal	Studies, Bhanpur,  Bhopal', '1', '2022-11-21 04:24:35', '2022-11-21 04:24:35', NULL, '48'),
(653, 'Mayurbhanj Law College, At/P.O. Baripada, Distt. Mayurbhanj', '1', '2022-11-21 04:24:59', '2022-11-21 04:24:59', NULL, '269'),
(654, 'Govt. College , Bareli, Raisen', '1', '2022-11-21 04:25:08', '2022-11-21 04:25:08', NULL, '48'),
(655, 'Vidyadayini Institute of Science Management  & Technology, Bhopal', '1', '2022-11-21 04:25:42', '2022-11-21 04:25:42', NULL, '48'),
(656, 'Lajpat Rai Law College, Sambalpur', '1', '2022-11-21 04:25:45', '2022-11-21 04:25:45', NULL, '310'),
(657, 'Rajeev	Gandhi	Law College, Raisen', '1', '2022-11-21 04:26:10', '2022-11-21 04:26:10', NULL, '48'),
(658, 'Sri	Sathya	Sai	College	for	Women, Bhopal,  Madhya Pradesh', '1', '2022-11-21 04:26:30', '2022-11-21 04:26:30', NULL, '48'),
(659, 'Rourkela Law College, Rourkela', '1', '2022-11-21 04:26:31', '2022-11-21 04:26:31', NULL, '310'),
(660, 'Patel College of Law , Bhopal', '1', '2022-11-21 04:27:26', '2022-11-21 04:27:26', NULL, '48'),
(661, 'Balgangadhar Tilak Law College, Sonepur', '1', '2022-11-21 04:27:40', '2022-11-21 04:27:40', NULL, '310'),
(662, 'Green Field College of Law, Sehore', '1', '2022-11-21 04:28:10', '2022-11-21 04:28:10', NULL, '48'),
(663, 'Technocrats Institute of Law , Bhopal', '1', '2022-11-21 04:28:50', '2022-11-21 04:28:50', NULL, '48'),
(664, 'Balangir Law College, Balangir', '1', '2022-11-21 04:29:07', '2022-11-21 04:29:07', NULL, '310'),
(665, 'Bargarh Law College, Bargarh', '1', '2022-11-21 04:39:04', '2022-11-21 04:39:04', NULL, '310'),
(666, 'Kalahandi Law college, Kalahandi', '1', '2022-11-21 04:40:09', '2022-11-21 04:40:09', NULL, '310'),
(667, 'Government New Law	College, Indore', '1', '2022-11-21 04:40:18', '2022-11-21 04:40:18', NULL, '94'),
(668, 'Prasunna Panda Law College, Jharsuguda', '1', '2022-11-21 04:40:47', '2022-11-21 04:40:47', NULL, '310'),
(669, 'Indore Christian College , Indore', '1', '2022-11-21 04:40:54', '2022-11-21 04:40:54', NULL, '94'),
(670, 'Motilal	Nehru Vidhi Mahavidyalaya, Khandwa', '1', '2022-11-21 04:41:15', '2022-11-21 04:41:15', NULL, '94'),
(671, 'Govt. P.G. College , Dhar', '1', '2022-11-21 04:41:39', '2022-11-21 04:41:39', NULL, '94'),
(672, 'Mahamaya Institute of Legal Science, Nuapada', '1', '2022-11-21 04:41:42', '2022-11-21 04:41:42', NULL, '310'),
(673, 'Govt. College,Jhabua', '1', '2022-11-21 04:42:17', '2022-11-21 04:42:17', NULL, '94'),
(674, 'Vikas Degree College, Bargarh', '1', '2022-11-21 04:42:29', '2022-11-21 04:42:29', NULL, '310'),
(675, 'Govt. College , Khargone', '1', '2022-11-21 04:43:31', '2022-11-21 04:43:31', NULL, '94'),
(676, 'Seva Sadan Mahavidyalaya , Burhanpur', '1', '2022-11-21 04:43:56', '2022-11-21 04:43:56', NULL, '94'),
(677, 'National institute of Law, SOA University, Bhubaneswar', '1', '2022-11-21 04:44:27', '2022-11-21 04:44:27', NULL, '347'),
(678, 'University College of Law, Vani Vihar, Bhubaneshwar', '1', '2022-11-21 04:45:24', '2022-11-21 04:45:24', NULL, '395'),
(679, 'Govt. P.G. College,	Barwani', '1', '2022-11-21 04:45:46', '2022-11-21 04:45:46', NULL, '94'),
(680, 'Gangadhar Mohapatra Law College, Puri', '1', '2022-11-21 04:45:54', '2022-11-21 04:45:54', NULL, '395'),
(681, 'Govt. Law College,	Alirajpur', '1', '2022-11-21 04:46:09', '2022-11-21 04:46:09', NULL, '94'),
(682, 'Capital Law College , Bhubaneshwar', '1', '2022-11-21 04:46:22', '2022-11-21 04:46:22', NULL, '395'),
(683, 'Indore	Institute of Law, Indore', '1', '2022-11-21 04:46:28', '2022-11-21 04:46:28', NULL, '94'),
(684, 'R.C. Jall Law College, Mhow', '1', '2022-11-21 04:46:54', '2022-11-21 04:46:54', NULL, '94'),
(685, 'Guru Gobind Singh	Law College, Indore', '1', '2022-11-21 04:47:24', '2022-11-21 04:47:24', NULL, '94'),
(686, 'Shree Biswaguru Law College, Kalibda, Sikhapur, Cuttack', '1', '2022-11-21 04:47:29', '2022-11-21 04:47:29', NULL, '395'),
(687, 'M.B. Khalsa Law College, Indore', '1', '2022-11-21 04:47:49', '2022-11-21 04:47:49', NULL, '94'),
(688, 'Biraja Law College, Jajpur,Dt.Cuttack', '1', '2022-11-21 04:47:55', '2022-11-21 04:47:55', NULL, '395'),
(689, 'Madhusudan Law College, Cuttack', '1', '2022-11-21 04:48:57', '2022-11-21 04:48:57', NULL, '395'),
(690, 'D.S. Law College, Kendrapara, Cuttack', '1', '2022-11-21 04:49:38', '2022-11-21 04:49:38', NULL, '395'),
(691, 'The Law College, Cuttack', '1', '2022-11-21 04:50:09', '2022-11-21 04:50:09', NULL, '395'),
(692, 'School	of Law,	Devi Ahilya	Viswa Vidyalaya, Indore', '1', '2022-11-21 04:50:42', '2022-11-21 04:50:42', NULL, '94'),
(693, 'Dhenkanel Law College, Dhenkanel', '1', '2022-11-21 04:50:44', '2022-11-21 04:50:44', NULL, '395'),
(694, 'B. R. M. Law College, Bhubaneshwar', '1', '2022-11-21 04:51:25', '2022-11-21 04:51:25', NULL, '395'),
(695, 'M.B. Khalsa Law College , Indore', '1', '2022-11-21 04:51:28', '2022-11-21 04:51:28', NULL, '94'),
(696, 'College	of Law,	IPS	Academy, Indore', '1', '2022-11-21 04:52:02', '2022-11-21 04:52:02', NULL, '94'),
(697, 'Khordha Law College, Khordha', '1', '2022-11-21 04:52:10', '2022-11-21 04:52:10', NULL, '395'),
(698, 'Altius Institute	of Studies, Indore', '1', '2022-11-21 04:52:24', '2022-11-21 04:52:24', NULL, '94'),
(699, 'Renaissance Law College , Indore', '1', '2022-11-21 04:52:50', '2022-11-21 04:52:50', NULL, '94'),
(700, 'Xavier Law School, Xavier University, Bhubaneswar', '1', '2022-11-21 04:52:59', '2022-11-21 04:52:59', NULL, '414'),
(701, 'Liberal	College, Indore', '1', '2022-11-21 04:53:13', '2022-11-21 04:53:13', NULL, '94'),
(702, 'Akshay	Academy Law College,	Indore', '1', '2022-11-21 04:53:31', '2022-11-21 04:53:31', NULL, '94'),
(703, 'ASBM School of Law, ASBM University, Bhubaneswar, Odisha', '1', '2022-11-21 04:53:43', '2022-11-21 04:53:43', NULL, '31'),
(704, 'Prestige Institute of Management & Research,	Indore', '1', '2022-11-21 04:53:54', '2022-11-21 04:53:54', NULL, '94'),
(705, 'S&S Law College,Indore', '1', '2022-11-21 04:54:15', '2022-11-21 04:54:15', NULL, '94'),
(706, 'Dr. Ambedkar Law College, Pondichery', '1', '2022-11-21 04:54:36', '2022-11-21 04:54:36', NULL, '283'),
(707, 'B.M. Institute of Professional Studies, Indore, Madhya	Pradesh', '1', '2022-11-21 04:54:45', '2022-11-21 04:54:45', NULL, '94'),
(708, 'Sri Balaji Law School, Pondicherry', '1', '2022-11-21 04:55:12', '2022-11-21 04:55:12', NULL, '283'),
(709, 'LSA College , Dhar', '1', '2022-11-21 04:55:16', '2022-11-21 04:55:16', NULL, '94'),
(710, 'Government Law College, Khargone , Madhya Pradesh', '1', '2022-11-21 04:55:47', '2022-11-21 04:55:47', NULL, '94'),
(711, 'Andaman Law College, Port Blair', '1', '2022-11-21 04:55:52', '2022-11-21 04:55:52', NULL, '283'),
(712, 'Department of	Law, College of	 Professional  Studies, Dr. A.P.J. Abdul	Kalam	University,	 Indore', '1', '2022-11-21 04:56:32', '2022-11-21 04:56:32', NULL, '97'),
(713, 'University Institute of Legal Studies, Chandigarh University, Mohali', '1', '2022-11-21 04:56:36', '2022-11-21 04:56:36', NULL, '77'),
(714, 'School of Law, CT University, Ludhiana', '1', '2022-11-21 04:57:17', '2022-11-21 04:57:17', NULL, '87'),
(715, 'J.L.Verma Law College, Damoh', '1', '2022-11-21 04:57:20', '2022-11-21 04:57:20', NULL, '104'),
(716, 'Govt. P.G. College , Bina', '1', '2022-11-21 04:59:08', '2022-11-21 04:59:08', NULL, '104'),
(717, 'University School of Law, Desh Bhagat University, Mandi Gobindgarh, Amloh, Fatehgarh Sahib', '1', '2022-11-21 04:59:49', '2022-11-21 04:59:49', NULL, '93'),
(718, 'Satpura Law College , Chhindwara', '1', '2022-11-21 05:00:21', '2022-11-21 05:00:21', NULL, '104'),
(719, 'Deptt. of Law, Gurunanak Dev University, Amritsar', '1', '2022-11-21 05:00:31', '2022-11-21 05:00:31', NULL, '132'),
(720, 'Faculty	of Law, Dr.	Hari Singh Gaur  Vishwavidyalaya,	Sagar', '1', '2022-11-21 05:00:50', '2022-11-21 05:00:50', NULL, '104'),
(721, 'Pt.	Motilal	Nehru Vidhi Mahavidyalaya, Chhatarpur', '1', '2022-11-21 05:01:18', '2022-11-21 05:01:18', NULL, '104'),
(722, 'Deptt. of Law, Univ. Regional Centre, Gurunanak Dev Univ, Jalander', '1', '2022-11-21 05:01:24', '2022-11-21 05:01:24', NULL, '132'),
(723, 'Regional Centre, Gurunanak Dev Univ., Gurdaspur', '1', '2022-11-21 05:02:00', '2022-11-21 05:02:00', NULL, '132'),
(724, 'DBC Mahavidyalaya , Panna', '1', '2022-11-21 05:02:04', '2022-11-21 05:02:04', NULL, '104'),
(725, 'Govt. P.G. College, Chhindwara', '1', '2022-11-21 05:02:35', '2022-11-21 05:02:35', NULL, '104'),
(726, 'School of Legal Studies, Gurunanak Dev University, Jalander', '1', '2022-11-21 05:02:38', '2022-11-21 05:02:38', NULL, '132'),
(727, 'Veerangana Awanti Bai Law College , Chhatarpur', '1', '2022-11-21 05:03:17', '2022-11-21 05:03:17', NULL, '104'),
(728, 'V. M. S. College, Batala', '1', '2022-11-21 05:03:27', '2022-11-21 05:03:27', NULL, '132'),
(729, 'Govt. P.G. Nehru College, Deori', '1', '2022-11-21 05:03:57', '2022-11-21 05:03:57', NULL, '104'),
(730, 'St. Soldier Law College, Jalander', '1', '2022-11-21 05:04:09', '2022-11-21 05:04:09', NULL, '132'),
(731, 'Govt. P.G. College,Tikamgarh', '1', '2022-11-21 05:04:30', '2022-11-21 05:04:30', NULL, '104'),
(732, 'KCL Institute of Law, Jalandhar', '1', '2022-11-21 05:04:47', '2022-11-21 05:04:47', NULL, '132'),
(733, 'Vaishnav Mata Law	 College,Panna', '1', '2022-11-21 05:04:52', '2022-11-21 05:04:52', NULL, '104'),
(734, 'Khalsa College of Law, Amritsar', '1', '2022-11-21 05:05:27', '2022-11-21 05:05:27', NULL, '132'),
(735, 'School	of  Law, ITM University, Gwalior, Madhya Pradesh', '1', '2022-11-21 05:05:42', '2022-11-21 05:05:42', NULL, '163'),
(736, 'Punjab College of Law, Usma, Tarn, Taran, Punjab', '1', '2022-11-21 05:06:04', '2022-11-21 05:06:04', NULL, '132'),
(737, 'C.T. Institute Of Law, Jalandhar', '1', '2022-11-21 05:06:42', '2022-11-21 05:06:42', NULL, '132'),
(738, 'School	of Law, G H Raisoni University, Saikheda,	Chindwara', '1', '2022-11-21 05:06:43', '2022-11-21 05:06:43', NULL, '111'),
(739, 'Amritsar Law college, Amritsar, Punjab', '1', '2022-11-21 05:07:15', '2022-11-21 05:07:15', NULL, '132'),
(740, 'School	Of	Law, Jagran Lake City,University,Bhopal', '1', '2022-11-21 05:07:25', '2022-11-21 05:07:25', NULL, '166'),
(741, 'University School of Law, Guru Kashi University, Talwandi Sabo Bathinda, Punjab', '1', '2022-11-21 05:08:00', '2022-11-21 05:08:00', NULL, '129'),
(742, 'Madhav Vidhi Mahavidyalaya , Gwalior', '1', '2022-11-21 05:08:12', '2022-11-21 05:08:12', NULL, '175'),
(743, 'Lovely Institute of Law, Phagwara Jalandhar', '1', '2022-11-21 05:08:40', '2022-11-21 05:08:40', NULL, '203'),
(744, 'Maharani Laxmi Bai College of	Excellence,Gwalior', '1', '2022-11-21 05:08:50', '2022-11-21 05:08:50', NULL, '175'),
(745, 'School of Law, Lovely Professional University, Phagwara, Punjab', '1', '2022-11-21 05:09:22', '2022-11-21 05:09:22', NULL, '203'),
(746, 'Deptt. of Law, Punjab Univ.,Chandigarh', '1', '2022-11-21 05:17:56', '2022-11-21 05:20:37', NULL, '288'),
(747, 'Mahatma Gandhi Law College,	Gwalior', '1', '2022-11-21 05:18:14', '2022-11-21 05:18:14', NULL, '175'),
(748, 'Govt. M.J.S. Mahavidhyalaya,Bhind', '1', '2022-11-21 05:18:36', '2022-11-21 05:18:36', NULL, '175'),
(749, 'Deptt. of Law, Punjab Univ., Regional Centre, Mukstar', '1', '2022-11-21 05:18:36', '2022-11-21 05:20:13', NULL, '288'),
(750, 'Govt. Post Graduate College , Shivpuri', '1', '2022-11-21 05:19:16', '2022-11-21 05:19:16', NULL, '175'),
(751, 'Govt. P.G. College,Morena', '1', '2022-11-21 05:19:37', '2022-11-21 05:19:37', NULL, '175'),
(752, 'Rayat College of Law, Railmajra, Distt. Nawanshahar', '1', '2022-11-21 05:19:50', '2022-11-21 05:19:50', NULL, '288'),
(753, 'Institute of	Law, Jiwaji	Univ., Gwalior', '1', '2022-11-21 05:20:02', '2022-11-21 05:20:02', NULL, '175'),
(754, 'Govt. P.G. College, Guna', '1', '2022-11-21 05:20:27', '2022-11-21 05:20:27', NULL, '175'),
(755, 'Govt. Nehru College , Ashok Nagar', '1', '2022-11-21 05:21:01', '2022-11-21 05:21:01', NULL, '175'),
(756, 'Sarwa Dharma	Vidhi Mahavidyalaya,Gwalior', '1', '2022-11-21 05:21:24', '2022-11-21 05:21:24', NULL, '175'),
(757, 'University Institute of Law, Punjab University’s Regional Centre Ludhiana', '1', '2022-11-21 05:21:34', '2022-11-21 05:21:34', NULL, '288'),
(758, 'Chaudhary	Dilip Singh Law College, Bhind', '1', '2022-11-21 05:21:54', '2022-11-21 05:21:54', NULL, '175'),
(759, 'University Institute of Legal Studies, Punjab University, Chandigarh', '1', '2022-11-21 05:22:19', '2022-11-21 05:22:19', NULL, '288'),
(760, 'Gwalior Law College , Gwalior', '1', '2022-11-21 05:22:24', '2022-11-21 05:22:24', NULL, '175'),
(761, 'Govt. P.G. College, Datia', '1', '2022-11-21 05:22:48', '2022-11-21 05:22:48', NULL, '175'),
(762, 'Guru Hargobind Institute of Law for Women, Ludhiana-Moga', '1', '2022-11-21 05:22:57', '2022-11-21 05:22:57', NULL, '288'),
(763, 'Institute of	Law, Govt. Kamla Raja	Girls  Autonomus P.G. College, Gwalior', '1', '2022-11-21 05:23:22', '2022-11-21 05:23:22', NULL, '175'),
(764, 'Baba Kundan Singh Memorial Law College, Moga', '1', '2022-11-21 05:23:24', '2022-11-21 05:23:24', NULL, '288'),
(765, 'Swami Sarvanand Giri Punjab University Regional Centre, Sadhu Ashram, Bajwara, Hoshiarpur', '1', '2022-11-21 05:23:56', '2022-11-21 05:23:56', NULL, '288'),
(766, 'Govt. Modern Women’s Law College , Gwalior', '1', '2022-11-21 05:24:12', '2022-11-21 05:24:12', NULL, '175'),
(767, 'Rayat-Bahra College of Law, Hoshiarpur, Punjab', '1', '2022-11-21 05:24:46', '2022-11-21 05:24:46', NULL, '288'),
(768, 'S.L.P. Govt.	College, Morar', '1', '2022-11-21 05:24:48', '2022-11-21 05:24:48', NULL, '175'),
(769, 'Ch.	Rustam Singh Group of College, Bhind, Madhya Pradesh', '1', '2022-11-21 05:25:16', '2022-11-21 05:25:16', NULL, '175'),
(770, 'Universal Law College, Mohali, Punjab', '1', '2022-11-21 05:25:29', '2022-11-21 05:25:29', NULL, '288'),
(771, 'Prestige Institute of Management , Gwalior', '1', '2022-11-21 05:25:56', '2022-11-21 05:25:56', NULL, '175'),
(772, 'Aryans College of Law, Patiala, Punjab', '1', '2022-11-21 05:26:06', '2022-11-21 05:26:06', NULL, '288'),
(773, 'Vikrant	Institute of	Law, Gwalior', '1', '2022-11-21 05:26:27', '2022-11-21 05:26:27', NULL, '175'),
(774, 'Punjab College of Law, Fatehgarh Sahib', '1', '2022-11-21 05:26:36', '2022-11-21 05:26:36', NULL, '288'),
(775, 'Sonali College , Guna', '1', '2022-11-21 05:26:51', '2022-11-21 05:26:51', NULL, '175'),
(776, 'Deptt.of Law, Punjabi Univ., Patiala', '1', '2022-11-21 05:27:28', '2022-11-21 05:27:28', NULL, '289'),
(777, 'School	of Legal Studies, LNCT	University,Bhopal', '1', '2022-11-21 05:27:34', '2022-11-21 05:27:34', NULL, '201'),
(778, 'Army Institute of Law, Patiala', '1', '2022-11-21 05:28:13', '2022-11-21 05:28:13', NULL, '289'),
(779, 'Faculty	of Law,	Mansarovar Global	University, Sehore', '1', '2022-11-21 05:28:23', '2022-11-21 05:28:23', NULL, '233'),
(780, 'Bhai Gurdas College of Law, Sangrur', '1', '2022-11-21 05:28:57', '2022-11-21 05:28:57', NULL, '289'),
(781, 'NATIONAL LAW	 INSTITUTE	 UNIVERSITY, BHOPAL', '1', '2022-11-21 05:29:22', '2022-11-21 05:29:22', NULL, '253'),
(782, 'Lincoln College of Law, Sirhind, Patiala', '1', '2022-11-21 05:29:34', '2022-11-21 05:29:34', NULL, '289'),
(783, 'Oriental School of Law, Oriental University , Indore', '1', '2022-11-21 05:30:18', '2022-11-21 05:30:18', NULL, '273'),
(784, 'Punjab College of Law, Patiala', '1', '2022-11-21 05:30:24', '2022-11-21 05:30:24', NULL, '289'),
(785, 'Faculty	of Law,	P.K. University,	Shivpuri', '1', '2022-11-21 05:30:48', '2022-11-21 05:30:48', NULL, '275'),
(786, 'Baba Farid Law College, Faridkot', '1', '2022-11-21 05:31:02', '2022-11-21 05:31:02', NULL, '289'),
(787, 'Institute of	Law, RNT University, Raison', '1', '2022-11-21 05:31:24', '2022-11-21 05:31:24', NULL, '292'),
(788, 'Sardar Amarjit Singh Memorial Institute of Law, Dhanthal', '1', '2022-11-21 05:31:43', '2022-11-21 05:31:43', NULL, '289'),
(789, 'Faculty	of	Law, Ram Krishna Dharmarth Foundation	University,	Bhopal', '1', '2022-11-21 05:32:00', '2022-11-21 05:32:00', NULL, '299'),
(790, 'Rayat and Bahara’s MMTI College of Law, Sahauran, Mohali (after 2015 it came under Rayat Bahra University, Mohali)', '1', '2022-11-21 05:32:21', '2022-11-21 05:32:21', NULL, '289'),
(791, 'Deptt. of Law, Rani	Durgawati University,Jabalpur', '1', '2022-11-21 05:32:45', '2022-11-21 05:32:45', NULL, '302'),
(792, 'Punjab School of Law, Punjabi University, Patiala', '1', '2022-11-21 05:33:05', '2022-11-21 05:33:05', NULL, '289'),
(793, 'Bathinda College of Law, Bhatinda', '1', '2022-11-21 05:33:45', '2022-11-21 05:33:45', NULL, '289'),
(794, 'Department of Law, Government Mahendra College, Patiala', '1', '2022-11-21 05:34:27', '2022-11-21 05:34:27', NULL, '289'),
(795, 'Bahra College of Law, Bhedpura, Patiala', '1', '2022-11-21 05:35:03', '2022-11-21 05:35:03', NULL, '289'),
(796, 'Hitkarini Law College , Jabalpur', '1', '2022-11-21 05:35:06', '2022-11-21 05:35:06', NULL, '302'),
(797, 'N.E.S. Law	College, Jabalpur', '1', '2022-11-21 05:35:29', '2022-11-21 05:35:29', NULL, '302'),
(798, 'Punjab College of Law, Sarkapra, Fatehgarh Sahib', '1', '2022-11-21 05:35:45', '2022-11-21 05:35:45', NULL, '289'),
(799, 'Govt. P.G. College,Narsinghpur', '1', '2022-11-21 05:35:52', '2022-11-21 05:35:52', NULL, '302'),
(800, 'Govt.P.G. College, Balaghat', '1', '2022-11-21 05:36:17', '2022-11-21 05:36:17', NULL, '302'),
(801, 'Nancy College of Law, Samana, Punjab', '1', '2022-11-21 05:36:23', '2022-11-21 05:36:23', NULL, '289'),
(802, 'Govt. P.G. College , Seoni', '1', '2022-11-21 05:36:55', '2022-11-21 05:36:55', NULL, '302'),
(803, 'Chandigarh Law College, Mohali, Punjab', '1', '2022-11-21 05:36:58', '2022-11-21 05:36:58', NULL, '289'),
(804, 'Sri Sukhmani College of Law, Mohali', '1', '2022-11-21 05:37:44', '2022-11-21 05:37:44', NULL, '289'),
(805, 'Govt. S.S.P.(PG) College , Waraseoni', '1', '2022-11-21 05:38:07', '2022-11-21 05:38:07', NULL, '302'),
(806, 'Govt. R.D.S.(PG) College , Mandala', '1', '2022-11-21 05:38:34', '2022-11-21 05:38:34', NULL, '302'),
(807, 'Neelkanth	Vidhi Mahavidyalaya,Jabalpur', '1', '2022-11-21 05:39:26', '2022-11-21 05:39:26', NULL, '302'),
(808, 'A.P.	Narmada Law College,Jabalpur', '1', '2022-11-21 05:40:13', '2022-11-21 05:40:13', NULL, '302'),
(809, 'Katni College of Commerce and Arts , Katni', '1', '2022-11-21 05:41:18', '2022-11-21 05:41:18', NULL, '302'),
(810, 'South Point College of Law, Sonipat', '1', '2022-11-21 05:47:25', '2022-11-21 05:47:25', NULL, '220'),
(811, 'Meri College of Professional and Law Institute, Bahadurgarh, Haryana', '1', '2022-11-21 05:52:03', '2022-11-21 05:52:03', NULL, '220'),
(812, 'Saraswati Institute of Law, Palwal', '1', '2022-11-21 05:52:53', '2022-11-21 05:52:53', NULL, '220'),
(813, 'Mother	Theressa Law College,Jabalpur', '1', '2022-11-21 05:53:31', '2022-11-21 05:53:31', NULL, '302'),
(814, 'Teerthanker KRD Law College, Jatauli, Pataudi, Gurgaon', '1', '2022-11-21 05:53:33', '2022-11-21 05:53:33', NULL, '220'),
(815, 'D.P. Chaturvedi College, Seoni , Madhya Pradesh', '1', '2022-11-21 05:54:19', '2022-11-21 05:54:19', NULL, '302'),
(816, 'Delhi Global Institute of Management, Faridabad', '1', '2022-11-21 05:54:59', '2022-11-21 05:54:59', NULL, '220'),
(817, 'Silicobyte Katni Degree College of	Professional  Studies, Adherkap,	Katni', '1', '2022-11-21 05:55:08', '2022-11-21 05:55:08', NULL, '302'),
(818, 'University School of Law, Rayat Bahra University, Mohali', '1', '2022-11-21 05:55:41', '2022-11-21 05:55:41', NULL, '304'),
(819, 'Centre for Post Graduate Legal Studies, M.M. University, Mullana-Ambala', '1', '2022-11-21 05:55:56', '2022-11-21 05:55:56', NULL, '218'),
(820, 'RAJIV GANDHI NATIONAL UNIVERSITY OF LAW, PATIALA', '1', '2022-11-21 05:57:10', '2022-11-21 05:57:10', NULL, '304'),
(821, 'University Institute of Law, Sant Baba Bhag Singh University, Khiala, Jalandhar', '1', '2022-11-21 05:58:09', '2022-11-21 06:00:27', NULL, '315'),
(822, 'Hari Singh	Ruprah	Arts, Commerce & Law	College,Jabalpur', '1', '2022-11-21 05:58:39', '2022-11-21 05:58:39', NULL, '302'),
(823, 'Sri	Guru Tegh Bahadur Khalsa	College, Jabalpur', '1', '2022-11-21 05:59:13', '2022-11-21 05:59:13', NULL, '302'),
(824, 'Faculty of Law, Manav Rachna University, Faridabad', '1', '2022-11-21 05:59:23', '2022-11-21 05:59:23', NULL, '227'),
(825, 'University School of Law, Sri Guru Granth Sahib World University, Fatehgarh Sahib, Punjab', '1', '2022-11-21 05:59:53', '2022-11-21 05:59:53', NULL, '349'),
(826, 'School of Law, MVN University, Palwal', '1', '2022-11-21 06:00:09', '2022-11-21 06:00:09', NULL, '245'),
(827, 'Shriram College of	Commerce, Jabalpur , Madhya Pradesh', '1', '2022-11-21 06:00:10', '2022-11-21 06:00:10', NULL, '302'),
(828, 'Niilm School of Law, NIILM University, Kaithal', '1', '2022-11-21 06:01:21', '2022-11-21 06:01:21', NULL, '259'),
(829, 'RIMT School of Legal Studies, RIMT University, Mandi Gobindgahr, Punjab', '1', '2022-11-21 06:01:22', '2022-11-21 06:01:22', NULL, '306'),
(830, 'School of Legal Studies, Om Sterling Global University, Hisar', '1', '2022-11-21 06:01:58', '2022-11-21 06:01:58', NULL, '271'),
(831, 'University School of Law and Legal Studies,DAV  University,Jalandhar,Punjab', '1', '2022-11-21 06:02:34', '2022-11-21 06:02:34', NULL, '91'),
(832, 'Jindal Global Law School, O. P. Jindal Global University, Sonipat', '1', '2022-11-21 06:02:39', '2022-11-21 06:02:39', NULL, '270'),
(833, 'Faculty of Law, PDM University, Bahadurgarh, Dist. Jhajjar', '1', '2022-11-21 06:03:14', '2022-11-21 06:03:14', NULL, '281'),
(834, 'SVKM’s NMIMS School of Law, Chandigarh, Punjab (Off-Campus), Sarangpur, Chandigarh', '1', '2022-11-21 06:04:11', '2022-11-21 06:04:11', NULL, '362'),
(835, 'School of Law, Amity University, Mohali, Punjab', '1', '2022-11-21 06:05:39', '2022-11-21 06:05:39', NULL, '15'),
(836, 'School of Law, Amity University Jaipur', '1', '2022-11-21 06:06:06', '2022-11-21 06:06:06', NULL, '13'),
(837, 'Apex School of Law, Apex University, Jaipur', '1', '2022-11-21 06:06:47', '2022-11-21 06:06:47', NULL, '25'),
(838, 'Department of law, SGT University), Gurgaon', '1', '2022-11-21 06:08:05', '2022-11-21 06:08:05', NULL, '333'),
(839, 'Faculty of Law, Banasthali Vidyapeeth Niwai, Rajasthan', '1', '2022-11-21 06:08:26', '2022-11-21 06:08:26', NULL, '44'),
(840, 'NATIONAL UNIVERSITY	OF	ADVANCED	LEGAL STUDIES, COCHIN.(KOCHI)', '1', '2022-11-21 06:08:32', '2022-11-21 06:08:32', NULL, '420'),
(841, 'Faculty of Law, SRM University, Sonepat', '1', '2022-11-21 06:08:52', '2022-11-21 06:08:52', NULL, '354'),
(842, 'Faculty of Law, Banasthali VidyapIth Tonk, Rajasthan', '1', '2022-11-21 06:09:10', '2022-11-21 06:09:10', NULL, '45'),
(843, 'School of Law, Starex University, Gurgaon', '1', '2022-11-21 06:09:57', '2022-11-21 06:09:57', NULL, '358'),
(844, 'Law School, Northcap University, Gurgaon', '1', '2022-11-21 06:10:45', '2022-11-21 06:10:45', NULL, '377'),
(845, 'Institute of	Law and Legal	Studies, Sage University, Indore', '1', '2022-11-21 06:10:53', '2022-11-21 06:10:53', NULL, '421'),
(846, 'Department of Law, Bhagwant University, Ajmer, Rajasthan', '1', '2022-11-21 06:10:57', '2022-11-21 06:10:57', NULL, '52'),
(847, 'Dr. B.R. Ambedkar National Law University, Sonipat, Haryana', '1', '2022-11-21 06:11:25', '2022-11-21 06:11:25', NULL, '98'),
(848, 'Faculty of Law, BN University (Bhupal Nobles’s University), Udaipur, Rajasthan', '1', '2022-11-21 06:12:00', '2022-11-21 06:12:00', NULL, '61'),
(849, 'Department of Law, Central University of Haryana, Mahendragarh, Haryana', '1', '2022-11-21 06:12:04', '2022-11-21 06:12:04', NULL, '72'),
(850, 'School of Legal Studies & Governance, Carrier Point University, Kota', '1', '2022-11-21 06:12:36', '2022-11-21 06:12:36', NULL, '71'),
(851, 'Govt. College, Ajmer', '1', '2022-11-21 06:13:23', '2022-11-21 06:13:23', NULL, '99'),
(852, 'Faculty of Law, Gurugram University, Gurugram, Haryana', '1', '2022-11-21 06:13:45', '2022-11-21 06:13:45', NULL, '131'),
(853, 'Faculty of Law, Indian Institute of Management, Rohtak, Haryana', '1', '2022-11-21 06:14:30', '2022-11-21 06:14:30', NULL, '155'),
(854, 'St. Wilfred’s Law College, Ajmer', '1', '2022-11-21 06:14:35', '2022-11-21 06:14:35', NULL, '99'),
(855, 'School of Law, Abhilashi University, Chailchowk, Chachyot, Mandi, Himachal Pradesh', '1', '2022-11-21 06:15:07', '2022-11-21 06:15:07', NULL, '2'),
(856, 'Shri Krishna Academy of Legal Studies, Alwar 3', '1', '2022-11-21 06:15:13', '2022-11-21 06:15:13', NULL, '99'),
(857, 'Seth Rajnarayan Gupta Law College for Women Babakheta Nath Vidyapeeth, Bhitera, Alwar', '1', '2022-11-21 06:15:55', '2022-11-21 06:15:55', NULL, '99'),
(858, 'School of Legal Studies and Research, APG Shimla University, Shimla', '1', '2022-11-21 06:16:02', '2022-11-21 06:16:02', NULL, '27'),
(859, 'Institute of Professional Studies and Research(IPSR), Ramgarh, Alwar', '1', '2022-11-21 06:16:34', '2022-11-21 06:16:34', NULL, '99'),
(860, 'School of Law, Bahra University, Solan', '1', '2022-11-21 06:16:56', '2022-11-21 06:16:56', NULL, '42'),
(861, 'Govt. Law College, Alwar', '1', '2022-11-21 06:17:18', '2022-11-21 06:17:18', NULL, '99'),
(862, 'Faculty of Law, The ICFAI University, Baddi, Sola', '1', '2022-11-21 06:17:31', '2022-11-21 06:17:31', NULL, '143'),
(863, 'Dr. Nagendra Singh College of Law, Bharatiya Vidya Mandir, Banswara', '1', '2022-11-21 06:17:49', '2022-11-21 06:17:49', NULL, '99'),
(864, 'Faculty of Law, Himachal Pradesh University, Shimla-5', '1', '2022-11-21 06:18:05', '2022-11-21 06:18:05', NULL, '137'),
(865, 'MSJ Govt. College, Bharatpur', '1', '2022-11-21 06:18:21', '2022-11-21 06:18:21', NULL, '99'),
(866, 'School of Legal Studies, Regional Centre, H.P.University, Dharmsala', '1', '2022-11-21 06:18:36', '2022-11-21 06:18:36', NULL, '137'),
(867, 'University Institute of Legal Studies, H. P. Univ.,Chaura Maidan, Shimla – 4 (old name - School of Legal Studies)', '1', '2022-11-21 06:19:07', '2022-11-21 06:19:07', NULL, '137'),
(868, 'Himachal Pradesh College of Law, Kala Amb, Sirmour', '1', '2022-11-21 06:19:39', '2022-11-21 06:19:39', NULL, '137'),
(869, 'L. R. Institute of Legal Studies, Solan', '1', '2022-11-21 06:20:13', '2022-11-21 06:20:13', NULL, '137'),
(870, 'Master Somnath Law College, (Bharatpur)', '1', '2022-11-21 06:20:38', '2022-11-21 06:20:38', NULL, '99'),
(871, 'HIMCAPES’ Co-operative School of law, Badhera, Una (Distt.)', '1', '2022-11-21 06:20:55', '2022-11-21 06:20:55', NULL, '137'),
(872, 'Shri M. L.V. Govt. College, Bhilwara', '1', '2022-11-21 06:21:08', '2022-11-21 06:21:08', NULL, '99'),
(873, 'Mata Bala Sundari College of Legal Studies, Sirmour', '1', '2022-11-21 06:21:35', '2022-11-21 06:21:35', NULL, '137'),
(874, 'B.J.S.R. Jain College, Bikaner', '1', '2022-11-21 06:21:40', '2022-11-21 06:21:40', NULL, '99'),
(875, 'Govt. P G Law College, Bikaner', '1', '2022-11-21 06:22:10', '2022-11-21 06:22:10', NULL, '99'),
(876, 'Dwarka Das Memorial Sai Law College, Hamirpur', '1', '2022-11-21 06:22:11', '2022-11-21 06:22:11', NULL, '137'),
(877, 'Indian Institute of Legal Studies, Shimla', '1', '2022-11-21 06:22:37', '2022-11-21 06:22:37', NULL, '137'),
(878, 'Govt. College, Bundi', '1', '2022-11-21 06:22:40', '2022-11-21 06:22:40', NULL, '99'),
(879, 'Ravindranath Tagore Law College, Gandhi Nagar, Chittorgarh', '1', '2022-11-21 06:23:12', '2022-11-21 06:23:12', NULL, '99');
INSERT INTO `colleges` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`, `university_id`) VALUES
(880, 'Yen law College, Bilaspur', '1', '2022-11-21 06:23:43', '2022-11-21 06:23:43', NULL, '137'),
(881, 'Maharana Pratap Law College, Chittorgarh,', '1', '2022-11-21 06:23:46', '2022-11-21 06:23:46', NULL, '99'),
(882, 'Govt. Lohia P.G.College, Churu', '1', '2022-11-21 06:24:21', '2022-11-21 06:24:21', NULL, '99'),
(883, 'HIET School of Legal Studies, Kangra, Himachal Pradesh', '1', '2022-11-21 06:24:31', '2022-11-21 06:24:31', NULL, '137'),
(884, 'Awasthi Law College, Nalagarh, Solan', '1', '2022-11-21 06:24:58', '2022-11-21 06:24:58', NULL, '137'),
(885, 'Dausa Law College, Dausa', '1', '2022-11-21 06:25:05', '2022-11-21 06:25:05', NULL, '99'),
(886, 'SHEDS College of Law, Solan', '1', '2022-11-21 06:25:35', '2022-11-21 06:25:35', NULL, '137'),
(887, 'Govt. College, Dholpur', '1', '2022-11-21 06:25:36', '2022-11-21 06:25:36', NULL, '99'),
(888, 'Nehru Memorial law College (N M), Hanumangarh', '1', '2022-11-21 06:26:13', '2022-11-21 06:26:13', NULL, '99'),
(889, 'Himachal Pradesh National Law University, Shimla', '1', '2022-11-21 06:26:17', '2022-11-21 06:26:17', NULL, '136'),
(890, 'Shaheed Bhagat Singh Law College, Hanumangarh', '1', '2022-11-21 06:26:52', '2022-11-21 06:26:52', NULL, '99'),
(891, 'IEC School of Law, IEC University, Baddi, Solan, Himachal Pradesh', '1', '2022-11-21 06:27:08', '2022-11-21 06:27:08', NULL, '150'),
(892, 'Shri Roop Ram Swami Law College, Nohar', '1', '2022-11-21 06:27:29', '2022-11-21 06:27:29', NULL, '99'),
(893, 'Department of Law, Manav Bharti University, Solan', '1', '2022-11-21 06:27:45', '2022-11-21 06:27:45', NULL, '228'),
(894, 'Vidyasthali Law College, Jaipur', '1', '2022-11-21 06:28:08', '2022-11-21 06:28:08', NULL, '99'),
(895, 'School of Law, Maharaja Agrasen University, Solan', '1', '2022-11-21 06:28:17', '2022-11-21 06:28:17', NULL, '210'),
(896, 'School of Legal Studies and Governance, Career Point University, Hamirpur, H.P.', '1', '2022-11-21 06:28:56', '2022-11-21 06:28:56', NULL, '70'),
(897, 'Maharishi Dayanand Law College, Jaipur', '1', '2022-11-21 06:29:39', '2022-11-21 06:29:39', NULL, '99'),
(898, 'Deptt. of Law, Kashmir Univ., Srinagar Faculty of Law, Kashmir University', '1', '2022-11-21 06:30:57', '2022-11-21 06:30:57', NULL, '189'),
(899, 'Sopore Law College, Sopore', '1', '2022-11-21 06:31:26', '2022-11-21 06:31:26', NULL, '189'),
(900, 'University Law College, Centre II,Rajasthan University, Jaipur', '1', '2022-11-21 06:31:49', '2022-11-21 06:31:49', NULL, '99'),
(901, 'Bhagwan Mahaveer Law College and Research Centre, Jaipur', '1', '2022-11-21 06:32:25', '2022-11-21 06:32:25', NULL, '99'),
(902, 'Shaheed Bhagat Singh Vidhi Mahavidyalaya, Khatipura, Jaipur', '1', '2022-11-21 06:33:02', '2022-11-21 06:33:02', NULL, '99'),
(903, 'Faculty of Legal Science (School of Law), Shoolini University of Biotechnology and Management Science, Solan', '1', '2022-11-21 06:33:39', '2022-11-21 06:33:39', NULL, '332'),
(904, 'St. Wilfred’s College of Law, Jaipur', '1', '2022-11-21 06:33:45', '2022-11-21 06:33:45', NULL, '99'),
(905, 'Kashmir Law College, Srinagar', '1', '2022-11-21 06:34:24', '2022-11-21 06:34:24', NULL, '189'),
(906, 'Mahaveer(Mahavir) Law College, Jaipur', '1', '2022-11-21 06:34:37', '2022-11-21 06:34:37', NULL, '99'),
(907, 'Shri Bhawani Niketan Law College, Jaipur', '1', '2022-11-21 06:35:08', '2022-11-21 06:35:08', NULL, '99'),
(908, 'K. C. Education Foundation’s Law College, Pulwama-Kashmir', '1', '2022-11-21 06:35:22', '2022-11-21 06:35:22', NULL, '189'),
(909, 'Rajdhani Law College, Jaipur', '1', '2022-11-21 06:35:42', '2022-11-21 06:35:42', NULL, '99'),
(910, 'Vitasta School of Law, Sirnagar, Kashmir 3 year LLB(closed from 14-15)Upto 2014-15', '1', '2022-11-21 06:35:54', '2022-11-21 06:35:54', NULL, '189'),
(911, 'Tagore Public Law College, Kotputli', '1', '2022-11-21 06:36:22', '2022-11-21 06:36:22', NULL, '99'),
(912, 'Department of Law, Univ. of Jammu, Jammu', '1', '2022-11-21 06:36:26', '2022-11-21 06:36:26', NULL, '390'),
(913, 'Dogra Law College, Jammu', '1', '2022-11-21 06:36:55', '2022-11-21 06:36:55', NULL, '390'),
(914, 'Bharat Law College, Jaipur', '1', '2022-11-21 06:36:57', '2022-11-21 06:36:57', NULL, '99'),
(915, 'Shri Krishnan Law College, Kotputli', '1', '2022-11-21 06:37:26', '2022-11-21 06:37:26', NULL, '99'),
(916, 'K. C. Law College, Jammu', '1', '2022-11-21 06:37:33', '2022-11-21 06:37:33', NULL, '390'),
(917, 'S. S. Jain Subodh Law College, Jaipur', '1', '2022-11-21 06:37:54', '2022-11-21 06:37:54', NULL, '99'),
(918, 'Hans Law College, Kotputli', '1', '2022-11-21 06:38:35', '2022-11-21 06:38:35', NULL, '99'),
(919, 'C. M. H. College of Legal Studies, Jammu', '1', '2022-11-21 06:38:44', '2022-11-21 06:38:44', NULL, '390'),
(920, 'Ashoka Law College, Kathuva', '1', '2022-11-21 06:39:13', '2022-11-21 06:39:13', NULL, '390'),
(921, 'Calliope School of Legal Studies, Jammu', '1', '2022-11-21 06:39:38', '2022-11-21 06:39:38', NULL, '390'),
(922, 'Vinayak Law College, Vinayak Vihar, Chomu, Jaipur', '1', '2022-11-21 06:40:01', '2022-11-21 06:40:01', NULL, '99'),
(923, 'Law School, Jammu University, Jammu', '1', '2022-11-21 06:40:07', '2022-11-21 06:40:07', NULL, '390'),
(924, 'Alankar Girl’s Law College, Jaipur', '1', '2022-11-21 06:40:36', '2022-11-21 06:40:36', NULL, '99'),
(925, 'R. K. Law College, Bari Brahmana, Jammu', '1', '2022-11-21 06:40:36', '2022-11-21 06:40:36', NULL, '390'),
(926, 'Biyani Law College, Jaipur', '1', '2022-11-21 06:41:07', '2022-11-21 06:41:07', NULL, '99'),
(927, 'Department of Law, School of Legal Studies, Central University of Kashmir', '1', '2022-11-21 06:41:21', '2022-11-21 06:41:21', NULL, '73'),
(928, 'Kautilya Law College, Jaipur', '1', '2022-11-21 06:41:41', '2022-11-21 06:41:41', NULL, '99'),
(929, 'Amity Law School, Amity University, Ranchi', '1', '2022-11-21 06:42:02', '2022-11-21 06:42:02', NULL, '16'),
(930, 'NIMT Technical and Professional college, Kotputli, Jaipur', '1', '2022-11-21 06:42:11', '2022-11-21 06:42:11', NULL, '99'),
(931, 'School of Law, Arka Jain University, Jamshedpur', '1', '2022-11-21 06:42:33', '2022-11-21 06:42:33', NULL, '28'),
(932, 'Rajasthan School of Law for Women, Jaipur', '1', '2022-11-21 06:42:51', '2022-11-21 06:42:51', NULL, '99'),
(933, 'Faculty of Legal Study, Capital University, Chitragupt Nagar, Koderma', '1', '2022-11-21 06:43:15', '2022-11-21 06:43:15', NULL, '69'),
(934, 'Kisan Law College, Jaipur', '1', '2022-11-21 06:43:23', '2022-11-21 06:43:23', NULL, '99'),
(935, 'Ashapurana Law College, Jalore', '1', '2022-11-21 06:44:28', '2022-11-21 06:44:28', NULL, '99'),
(936, 'Faculty of Law, ICFAI University, Ranchi', '1', '2022-11-21 06:44:59', '2022-11-21 06:44:59', NULL, '145'),
(937, 'Govt. College, Jhalawar', '1', '2022-11-21 06:45:25', '2022-11-21 06:45:25', NULL, '99'),
(938, 'Cooperative College, Jamshedpur (earlier it was under Ranchi University', '1', '2022-11-21 06:45:48', '2022-11-21 06:45:48', NULL, '196'),
(939, 'Smt. Pana Devi Rameshwar Lal Sharma Law College, Chirawa, Jhunjhunu', '1', '2022-11-21 06:46:07', '2022-11-21 06:46:07', NULL, '99'),
(940, 'National University of Study and Research in Law, Ranchi', '1', '2022-11-21 06:46:39', '2022-11-21 06:46:39', NULL, '252'),
(941, 'Seth Motilal Law College, Jhunjunu', '1', '2022-11-21 06:46:42', '2022-11-21 06:46:42', NULL, '99'),
(942, 'Bhishma Narain Singh Law College, Medininagar, Jharkhand', '1', '2022-11-21 06:47:12', '2022-11-21 06:47:12', NULL, '260'),
(943, 'Rajasthan Law College, Chirawa Distt. Jhunjunu', '1', '2022-11-21 06:47:21', '2022-11-21 06:47:21', NULL, '99'),
(944, 'Prof. A.D. Bohra Memorial Women’s Law College, Jodhpur (Old Name - Mahila Vidhi Mahavidyalaya)', '1', '2022-11-21 06:47:52', '2022-11-21 06:47:52', NULL, '99'),
(945, 'Netaji Subhas Institute of Law, Netaji Subhash University, Jamshedpur', '1', '2022-11-21 06:48:01', '2022-11-21 06:48:01', NULL, '258'),
(946, 'Faculty of Law, Radhe Govind University, Ramgarh, Jharkhand (earlier it was under Vinoba Bhave University, Hazari Bagh)', '1', '2022-11-21 06:48:29', '2022-11-21 06:48:29', NULL, '293'),
(947, 'BM Law College, Sardarpura, Jodhpur', '1', '2022-11-21 06:48:31', '2022-11-21 06:48:31', NULL, '99'),
(948, 'Chhotanagpur Law College, Ranchi', '1', '2022-11-21 06:48:54', '2022-11-21 06:48:54', NULL, '301'),
(949, 'Govt. College, Kota', '1', '2022-11-21 06:49:03', '2022-11-21 06:49:03', NULL, '99'),
(950, 'Institute of Legal Studies, Ranchi University, Ranchi', '1', '2022-11-21 06:49:23', '2022-11-21 06:49:23', NULL, '301'),
(951, 'Execellent Law College, Kota', '1', '2022-11-21 06:49:42', '2022-11-21 06:49:42', NULL, '99'),
(952, 'Faculty of Legal Studies & Research, Sai Nath University, Ranchi, Jharkhand', '1', '2022-11-21 06:50:05', '2022-11-21 06:50:05', NULL, '309'),
(953, 'Modi Law College, Kota, Rajasthan', '1', '2022-11-21 06:50:11', '2022-11-21 06:50:11', NULL, '99'),
(954, 'S. P. Law College, Dumka', '1', '2022-11-21 06:50:32', '2022-11-21 06:50:32', NULL, '345'),
(955, 'Deogarh Law College, Deogarh', '1', '2022-11-21 06:51:08', '2022-11-21 06:51:08', NULL, '345'),
(956, 'Shri B.R.Mirdha Govt.College, Nagaur', '1', '2022-11-21 06:51:12', '2022-11-21 06:51:12', NULL, '99'),
(957, 'University College of Law, Vinoba Bhave University, Hazaribag', '1', '2022-11-21 06:51:38', '2022-11-21 06:51:38', NULL, '408'),
(958, 'Ujjwal Vikram Law College, Pali', '1', '2022-11-21 06:51:43', '2022-11-21 06:51:43', NULL, '99'),
(959, 'Jharkhand Vidhi Mahavidyalaya, Koderma', '1', '2022-11-21 06:52:13', '2022-11-21 06:52:13', NULL, '408'),
(960, 'Sajjan Vidhi Mahavidyalaya, Pali', '1', '2022-11-21 06:52:15', '2022-11-21 06:52:15', NULL, '99'),
(961, 'M. K. Law College, Taldanga, Dhanbad', '1', '2022-11-21 06:52:44', '2022-11-21 06:52:44', NULL, '408'),
(962, 'Govt. Bangur College, Pali', '1', '2022-11-21 06:52:47', '2022-11-21 06:52:47', NULL, '99'),
(963, 'Law College, Dhanbad', '1', '2022-11-21 06:53:23', '2022-11-21 06:53:23', NULL, '57'),
(964, 'Saint Meera Law College, Nathdwara, Rajsamand', '1', '2022-11-21 06:53:23', '2022-11-21 06:53:23', NULL, '99'),
(965, 'Nathdwara Law College, Nathdwara', '1', '2022-11-21 06:53:56', '2022-11-21 06:53:56', NULL, '99'),
(966, 'Imamul Hai Khan Law College, Bokaro Steel City', '1', '2022-11-21 06:54:02', '2022-11-21 06:54:02', NULL, '57'),
(967, 'Shahid Captain Repudeman Vidhi Mahavidyalaya, Sawai Madhopur', '1', '2022-11-21 06:54:36', '2022-11-21 06:54:36', NULL, '99'),
(968, 'Faculty of Law, Jharkhand Rai University, Ranchi, Jharkhand', '1', '2022-11-21 06:54:44', '2022-11-21 06:54:44', NULL, '173'),
(969, 'Shekhawati Sandhya Law Institute, Jaipur Road, Sikar', '1', '2022-11-21 06:55:07', '2022-11-21 06:55:07', NULL, '99'),
(970, 'Faculty of Legal Studies, Usha Martin University, Ranchi, Jharkhand', '1', '2022-11-21 06:55:15', '2022-11-21 06:55:15', NULL, '394'),
(971, 'School of Legal Studies, YBN University, Ranchi, Jharkhand', '1', '2022-11-21 06:55:47', '2022-11-21 06:55:47', NULL, '415'),
(972, 'S.K. Govt. College, Sikar', '1', '2022-11-21 06:55:52', '2022-11-21 06:55:52', NULL, '99'),
(973, 'Shaheed Bhagat Singh Law College, Sikar', '1', '2022-11-21 06:56:19', '2022-11-21 06:56:19', NULL, '99'),
(974, 'Government Law College, Sirohi', '1', '2022-11-21 06:56:52', '2022-11-21 06:56:52', NULL, '99'),
(975, 'Seth G. L. Bihani S. D. Law College, Sri Ganganagar', '1', '2022-11-21 06:57:49', '2022-11-21 06:57:49', NULL, '99'),
(976, 'S.G.N. Khalsa College, Sri Ganga Nagar', '1', '2022-11-21 06:58:20', '2022-11-21 06:58:20', NULL, '99'),
(977, 'Govt. P. G. College, Sri Ganganagar', '1', '2022-11-21 06:58:54', '2022-11-21 06:58:54', NULL, '99'),
(978, 'DAV Law PG College, Sri Ganganagar (Old name : Maharishi Dayanand Law College)', '1', '2022-11-21 06:59:41', '2022-11-21 06:59:41', NULL, '99'),
(979, 'Shaheed –E-Azam Bhagat Singh Law College, Sri Ganganagar (old name : Bhagat Singh Law College)', '1', '2022-11-21 07:00:09', '2022-11-21 07:00:09', NULL, '99'),
(980, 'Sardar Patel Law College, Sri Ganganagar', '1', '2022-11-21 07:00:52', '2022-11-21 07:00:52', NULL, '99'),
(981, 'Rajiv Gandhi Mahavidyalaya, Tonk', '1', '2022-11-21 07:01:20', '2022-11-21 07:01:20', NULL, '99'),
(982, 'Dr. Anushka Vidhi Mahavidyalaya, Udaipur', '1', '2022-11-21 07:01:54', '2022-11-21 07:01:54', NULL, '99'),
(983, 'Singhania Law College, Udaipur', '1', '2022-11-21 07:02:19', '2022-11-21 07:02:19', NULL, '99'),
(984, 'Gyan Vidhi Mahavidyalaya, Bikaner', '1', '2022-11-21 07:02:46', '2022-11-21 07:02:46', NULL, '99'),
(985, 'Aishwarya College of Education (Law), Jodhpur, Rajasthan', '1', '2022-11-21 07:03:28', '2022-11-21 07:03:28', NULL, '99'),
(986, 'Faculty of Law, ICFAI University, Jaipur, Rajasthan', '1', '2022-11-22 00:43:02', '2022-11-22 00:43:02', NULL, '144'),
(987, 'School of Law, Jagannath University, Jaipur', '1', '2022-11-22 00:43:43', '2022-11-22 00:43:43', NULL, '165'),
(988, 'Seedling School of Law and Governance', '1', '2022-11-22 00:44:40', '2022-11-22 00:44:40', NULL, '169'),
(989, 'School	of Law,	Sri	Satya Sai University of	Technology and Medical Sciences,	Sehore, Madhya	Pradesh', '1', '2022-11-22 00:44:41', '2022-11-22 00:44:41', NULL, '423'),
(990, 'Faculty of Law, Jai Narain Vyas University, Jodhpur', '1', '2022-11-22 00:45:25', '2022-11-22 00:45:25', NULL, '167'),
(991, 'Deptt. of Law, Janardan Rai Nagar Rajasthan Vidyapeeth (Deemed) University, Udaipur, Rajasthan', '1', '2022-11-22 00:46:27', '2022-11-22 00:46:27', NULL, '171'),
(992, 'Faculty of Law & Governance, Jayoti Vidyapeeth Women’s University, Jaipur', '1', '2022-11-22 00:47:06', '2022-11-22 00:47:06', NULL, '178'),
(993, 'School of Law, JECRC University, Jaipur, Rajasthan', '1', '2022-11-22 00:47:44', '2022-11-22 00:47:44', NULL, '172'),
(994, 'Sarvepalli Radhakrishnan	College	of Law,  Sarvepalli Radhakrishnan University,Bhopal', '1', '2022-11-22 00:48:10', '2022-11-22 00:48:10', NULL, '425'),
(995, 'Jodhpur Institute of law, JNL, Jodhpur', '1', '2022-11-22 00:48:29', '2022-11-22 00:48:29', NULL, '176'),
(996, 'Faculty of Law, Shri Khushal Das University, Hanumangarh', '1', '2022-11-22 00:50:17', '2022-11-22 00:50:17', NULL, '337'),
(997, 'School of Law, LORD’s University, Alwar', '1', '2022-11-22 00:51:37', '2022-11-22 00:51:37', NULL, '202'),
(998, 'Department of Law, Madhav University, Sirohi', '1', '2022-11-22 00:52:30', '2022-11-22 00:52:30', NULL, '207'),
(999, 'MSB Global Law Institute, Maharaja Surajmal Brij Univeristy, Bharatpur', '1', '2022-11-22 00:53:13', '2022-11-22 00:53:13', NULL, '213'),
(1000, 'Jaipur School of Law, Maharaj Vinayak Global University, Jaipur', '1', '2022-11-22 00:54:13', '2022-11-22 00:54:13', NULL, '209'),
(1001, 'MJRP Academy of Law, MJRP University, Jaipur', '1', '2022-11-22 00:54:55', '2022-11-22 00:54:55', NULL, '225'),
(1002, 'Faculty of Law, Maharishi Arvind University, Jaipur, Rajasthan', '1', '2022-11-22 00:55:55', '2022-11-22 00:55:55', NULL, '217'),
(1003, 'School of Law, Manipal University, Jaipur', '1', '2022-11-22 00:57:26', '2022-11-22 00:57:26', NULL, '231'),
(1004, 'Govt. Nehru College, Agar, Malwa', '1', '2022-11-22 00:59:12', '2022-11-22 00:59:12', NULL, '428'),
(1005, 'Govt. K.P.College, Dewas', '1', '2022-11-22 00:59:48', '2022-11-22 00:59:48', NULL, '428'),
(1006, 'Faculty of Law, Dr. K. N. Modi University, Tonk', '1', '2022-11-22 00:59:50', '2022-11-22 00:59:50', NULL, '105'),
(1007, 'College of Law & goverance Mody University of Science & Technology Lakshmangarh', '1', '2022-11-22 01:00:41', '2022-11-22 01:00:41', NULL, '238'),
(1008, 'K.N. Katju Law	College, Ratlam', '1', '2022-11-22 01:00:51', '2022-11-22 01:00:51', NULL, '428'),
(1009, 'Govt. B.S.N. College, Shajapur', '1', '2022-11-22 01:01:31', '2022-11-22 01:01:31', NULL, '428'),
(1010, 'University College of Law, M. S. University, Udaipur', '1', '2022-11-22 01:02:13', '2022-11-22 01:02:13', NULL, '239'),
(1011, 'Department of	Law, Jawaharlal Nehru	Smriti Government  P.G. College Shujalpur', '1', '2022-11-22 01:02:16', '2022-11-22 01:02:16', NULL, '428'),
(1012, 'Madhav College, Ujjain', '1', '2022-11-22 01:02:39', '2022-11-22 01:02:39', NULL, '428'),
(1013, 'School of Law, National Law University, Jodhpur', '1', '2022-11-22 01:02:50', '2022-11-22 01:02:50', NULL, '255');

-- --------------------------------------------------------

--
-- Table structure for table `declaration_forms`
--

CREATE TABLE `declaration_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `law_college_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `law_university_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `law_affiliated_university` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_completion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `declaration_forms`
--

INSERT INTO `declaration_forms` (`id`, `user_id`, `law_college_name`, `law_university_name`, `law_affiliated_university`, `date_of_completion`, `created_at`, `updated_at`) VALUES
(1, 4, 'wgfcuew', 'dewfcytw', 'hefduichew', '01-10-2022', '2022-10-01 07:00:58', '2022-10-01 07:00:58'),
(2, 1, '4242', '2342', '4234', '22-10-2022', '2022-10-21 22:46:50', '2022-10-21 22:46:50'),
(3, 14, 'A.C. College, Guntur', 'ACHARYA NAGARJUNA UNIVERSITY, NAGARJUNA NAGAR', 'ACHARYA NAGARJUNA UNIVERSITY, NAGARJUNA NAGAR', '31-10-2022', '2022-10-31 06:48:52', '2022-11-21 04:46:59'),
(4, 17, 'D.S.R. Hindu Law College, Machilipatnam', 'ACHARYA NAGARJUNA UNIVERSITY, NAGARJUNA NAGAR', 'ACHARYA NAGARJUNA UNIVERSITY, NAGARJUNA NAGAR', '19-11-2022', '2022-11-19 06:23:36', '2022-11-19 06:23:36'),
(5, 7, 'D.S.R. Hindu Law College, Machilipatnam', 'ACHARYA NAGARJUNA UNIVERSITY, NAGARJUNA NAGAR', 'ACHARYA NAGARJUNA UNIVERSITY, NAGARJUNA NAGAR', '21-11-2022', '2022-11-21 04:23:10', '2022-11-21 04:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `document_uploads`
--

CREATE TABLE `document_uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `provisional_certificate_of_llb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendance_certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dmc_of_llb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matriculation_certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_mark_of_plus_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obtain_mark_of_plus_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plus_two_percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obtain_mark_of_tenth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plus_two_certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_mark_of_gradutation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obtain_mark_of_gradutation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graduation_percentage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_dmc_certificate_of_llb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affidavit_of_law_degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affidavit_of_stamp_duty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affidavit_of_aibe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_of_column_12_13_14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gap_affidavit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_affidavit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `any_other_infomation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date_of_completion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_uploads`
--

INSERT INTO `document_uploads` (`id`, `user_id`, `provisional_certificate_of_llb`, `attendance_certificate`, `dmc_of_llb`, `matriculation_certificate`, `total_mark_of_plus_two`, `obtain_mark_of_plus_two`, `plus_two_percentage`, `obtain_mark_of_tenth`, `plus_two_certificate`, `total_mark_of_gradutation`, `obtain_mark_of_gradutation`, `graduation_percentage`, `all_dmc_certificate_of_llb`, `affidavit_of_law_degree`, `affidavit_of_stamp_duty`, `affidavit_of_aibe`, `service_certificate`, `document_of_column_12_13_14`, `gap_affidavit`, `additional_affidavit`, `any_other_infomation`, `created_at`, `updated_at`, `date_of_completion`) VALUES
(1, 4, 'fa4a42ef6721cae5d1f6301533a23c87.pdf', 'fa4a42ef6721cae5d1f6301533a23c87.pdf', 'fa4a42ef6721cae5d1f6301533a23c87.pdf', 'fa4a42ef6721cae5d1f6301533a23c87.pdf', '500', '200', '40', NULL, 'fa4a42ef6721cae5d1f6301533a23c87.pdf', '500', '400', '80', 'fa4a42ef6721cae5d1f6301533a23c87.pdf', 'fa4a42ef6721cae5d1f6301533a23c87.pdf', 'fa4a42ef6721cae5d1f6301533a23c87.pdf', 'fa4a42ef6721cae5d1f6301533a23c87.pdf', 'fa4a42ef6721cae5d1f6301533a23c87.pdf', 'fa4a42ef6721cae5d1f6301533a23c87.pdf', 'fa4a42ef6721cae5d1f6301533a23c87.pdf', 'fa4a42ef6721cae5d1f6301533a23c87.pdf', 'fa4a42ef6721cae5d1f6301533a23c87.pdf', '2022-10-01 07:14:26', '2022-10-01 07:14:26', '01-10-2022'),
(2, 14, 'f912f7756747d43016d070852cf01e92.pdf', 'f912f7756747d43016d070852cf01e92.pdf', 'f912f7756747d43016d070852cf01e92.pdf', 'f912f7756747d43016d070852cf01e92.pdf', '4343', '342', NULL, NULL, 'f912f7756747d43016d070852cf01e92.pdf', '234', '233', NULL, 'f912f7756747d43016d070852cf01e92.pdf', 'f912f7756747d43016d070852cf01e92.pdf', 'f912f7756747d43016d070852cf01e92.pdf', 'f912f7756747d43016d070852cf01e92.pdf', 'f912f7756747d43016d070852cf01e92.pdf', 'f912f7756747d43016d070852cf01e92.pdf', 'f912f7756747d43016d070852cf01e92.pdf', 'f912f7756747d43016d070852cf01e92.pdf', 'f912f7756747d43016d070852cf01e92.pdf', '2022-10-31 23:23:57', '2022-11-07 06:59:55', '01-11-2022');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basic_fees` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bar_council_fees` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `building_fees` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `advocate_welfare_fees` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `benevolent_fees` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `category`, `basic_fees`, `bar_council_fees`, `building_fees`, `created_at`, `updated_at`, `advocate_welfare_fees`, `benevolent_fees`) VALUES
(1, 'General/OBC', '1', '0', '0', '2022-10-21 22:39:54', '2022-11-11 22:42:52', '0', '0'),
(2, 'SC/ST/BPL', '6800', '600', '1000', '2022-10-21 22:40:13', '2022-10-21 22:40:13', '3000', '2000'),
(3, 'Handicaps/Blinds', '8700', '1200', '1000', '2022-10-21 22:40:37', '2022-10-21 22:40:37', '3000', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_12_162542_create_application_forms_table', 1),
(6, '2022_09_13_161306_create_declaration_forms_table', 1),
(7, '2022_09_13_163635_create_affidavit_forms_table', 1),
(8, '2022_09_14_162903_create_certify_forms_table', 1),
(9, '2022_09_14_174309_create_document_uploads_table', 1),
(10, '2022_09_17_071717_add_stream_in_application_form', 1),
(11, '2022_09_18_084348_add_address_in__user', 1),
(12, '2022_09_18_084628_remove_columns_application_form', 1),
(13, '2022_09_18_092541_add_columns_in_application_form', 1),
(14, '2022_09_21_161353_add_date_of_completion', 1),
(15, '2022_09_21_164359_create_undertakings_table', 1),
(16, '2022_09_24_044805_alter_date_of_completion', 1),
(17, '2022_09_24_065751_create_official_reports_table', 1),
(18, '2022_09_24_111444_change_date_data_type_application_form', 2),
(19, '2022_10_01_063242_add_columns_in_document_uploads', 3),
(20, '2022_10_15_043817_create_fees_table', 4),
(21, '2022_10_15_090709_add_user_type_in_users', 4),
(22, '2022_10_15_121912_rename_column_name_fees', 5),
(23, '2022_10_16_150440_create_tatkaal_fees_table', 5),
(24, '2022_10_21_163640_add_paytm_columns_application_form', 5),
(25, '2022_10_28_161803_create_colleges_table', 6),
(26, '2022_10_28_162053_create_universities_table', 6),
(27, '2022_10_30_084112_add_university_id_collgee', 7),
(28, '2022_10_31_164939_change_paytm_order_id_data_type', 8),
(29, '2022_11_19_072957_create_signatures_table', 9),
(30, '2022_11_19_110610_create_cities_table', 9),
(31, '2022_11_19_115936_add_email_column_in_universities', 10);

-- --------------------------------------------------------

--
-- Table structure for table `official_reports`
--

CREATE TABLE `official_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `study_gap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `criminal_procedding` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `above_21_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ex_service_men` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foreign_law` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_completion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signatures`
--

CREATE TABLE `signatures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bcph_stamp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hony_secretary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prepared_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tatkaal_fees`
--

CREATE TABLE `tatkaal_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tatkaal_fees` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tatkaal_fees`
--

INSERT INTO `tatkaal_fees` (`id`, `tatkaal_fees`, `created_at`, `updated_at`) VALUES
(1, '4000', '2022-10-21 22:37:46', '2022-10-21 22:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `undertakings`
--

CREATE TABLE `undertakings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_of_completion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `undertakings`
--

INSERT INTO `undertakings` (`id`, `user_id`, `date_of_completion`, `created_at`, `updated_at`) VALUES
(1, 4, '01-10-2022', '2022-10-01 07:01:02', '2022-10-01 07:01:02'),
(2, 1, '22-10-2022', '2022-10-21 22:46:57', '2022-10-21 22:46:57'),
(3, 14, '31-10-2022', '2022-10-31 06:48:57', '2022-10-31 06:48:57'),
(4, 7, '21-11-2022', '2022-11-21 04:23:21', '2022-11-21 04:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`, `email`) VALUES
(2, 'ABHILASHI UNIVERSITY,CHAILCHOWK, CHACHYOT,MANDI, HIMACHAL PRADESH', '1', '2022-10-29 05:17:52', '2022-10-29 05:17:52', NULL, NULL),
(3, 'ACHARYA NAGARJUNA UNIVERSITY, NAGARJUNA NAGAR', '1', '2022-10-29 05:18:13', '2022-10-29 05:18:13', NULL, NULL),
(4, 'ADAMAS UNIVERSITY, 24 PARGANAS (NORTH), KOLKATA,WEST BENGAL', '1', '2022-10-29 05:18:25', '2022-10-29 05:18:25', NULL, NULL),
(5, 'ADIKAVI NANNAYA UNIVERSITY, RAJAMAHENDRAVARAM', '1', '2022-10-29 05:19:19', '2022-10-29 05:19:19', NULL, NULL),
(6, 'AHMEDABAD (old name CALORX TEACHERS UNIVERSITY,AHMEDABAD,GUJARAT', '1', '2022-10-29 05:19:33', '2022-10-29 05:19:33', NULL, NULL),
(7, 'AJEENKYA D.Y. PATIL UNIVERSITY, PUNE', '1', '2022-10-29 05:19:56', '2022-10-29 05:19:56', NULL, NULL),
(8, 'ALIGARH MUSLIM UNIVERSITY,ALIGARH', '1', '2022-10-29 05:20:04', '2022-10-29 05:20:04', NULL, NULL),
(9, 'ALLAHABAD UNIVERSITY,ALLAHABAD', '1', '2022-10-29 05:20:17', '2022-10-29 05:20:17', NULL, NULL),
(10, 'ALLIANCE UNIVERSITY,BANGALORE', '1', '2022-10-29 05:20:31', '2022-10-29 05:20:31', NULL, NULL),
(11, 'AMITY LAW SCHOOL, AMITY UNIVERSITY, NAVI MUMBAI', '1', '2022-10-29 05:20:45', '2022-10-29 05:20:45', NULL, NULL),
(12, 'AMITY LAW SCHOOL,AMITY UNIVERSITY,RAIPUR', '1', '2022-10-29 05:20:59', '2022-10-29 05:20:59', NULL, NULL),
(13, 'AMITY UNIVERSITY, JAIPUR', '1', '2022-10-29 05:21:39', '2022-10-29 05:21:39', NULL, NULL),
(14, 'AMITY UNIVERSITY, KOLKATA,WEST BENGAL', '1', '2022-10-29 05:21:59', '2022-10-29 05:21:59', NULL, NULL),
(15, 'AMITY UNIVERSITY, MOHALI', '1', '2022-10-29 05:22:36', '2022-10-29 05:22:36', NULL, NULL),
(16, 'AMITY UNIVERSITY, RANCHI', '1', '2022-10-29 05:22:49', '2022-10-29 05:22:49', NULL, NULL),
(17, 'AMITY UNIVERSITY,GURGAON', '1', '2022-10-29 05:23:00', '2022-10-29 05:23:00', NULL, NULL),
(18, 'AMITY UNIVERSITY,PATNA', '1', '2022-10-29 05:23:12', '2022-10-29 05:23:12', NULL, NULL),
(19, 'AMITY UNIVERSITY, GWALIOR,MADHYA PRADESH', '1', '2022-10-29 05:23:30', '2022-10-29 05:23:30', NULL, NULL),
(20, 'AMITY UNIVERSITY, NOIDA', '1', '2022-10-29 05:23:41', '2022-10-29 05:23:41', NULL, NULL),
(21, 'ANDHRA UNIVERSITY, WALTAIR', '1', '2022-10-29 05:23:54', '2022-10-29 05:23:54', NULL, NULL),
(22, 'ANSAL UNIVERSITY,GURGAON', '1', '2022-10-29 05:24:04', '2022-10-29 05:24:04', NULL, NULL),
(23, 'APEEJAY STYA UNIVERSITY,GURGAON', '1', '2022-10-29 05:24:22', '2022-10-29 05:24:22', NULL, NULL),
(24, 'APEX PROFESSIONAL UNIVERSITY,EAST SIANG', '1', '2022-10-29 05:24:32', '2022-10-29 05:24:32', NULL, NULL),
(25, 'APEX UNIVERSITY, JAIPUR', '1', '2022-10-29 05:24:44', '2022-10-29 05:24:44', NULL, NULL),
(26, 'APG (A. P. GOYAL) SHIMLA UNIVERSITY, SHIMLA', '1', '2022-10-29 05:24:57', '2022-10-29 05:24:57', NULL, NULL),
(27, 'APG (A. P. GOYAL) SHIMLA UNIVERSITY, SHIMLA', '1', '2022-10-29 05:25:14', '2022-10-29 05:25:14', NULL, NULL),
(28, 'ARKA JAIN UNIVERSITY,JAMSHEDPUR', '1', '2022-10-29 05:26:09', '2022-10-29 05:26:09', NULL, NULL),
(29, 'ARUNACHAL UNIVERSITY OF STUDIES,NAMSAI', '1', '2022-10-29 05:26:23', '2022-10-29 05:26:23', NULL, NULL),
(30, 'ARUNODAYA UNIVERSITY,ITANAGAR', '1', '2022-10-29 05:26:54', '2022-10-29 05:26:54', NULL, NULL),
(31, 'ASBM UNIVERSITY, BHUBANESWAR, ODISHA', '1', '2022-10-29 05:27:05', '2022-10-29 05:27:05', NULL, NULL),
(32, 'ASSAM UNIVERSITY,SILCHAR', '1', '2022-10-29 05:27:20', '2022-10-29 05:27:20', NULL, NULL),
(33, 'ATMIYA UNIVERSITY,RAJKOT', '1', '2022-10-29 05:27:30', '2022-10-29 05:27:30', NULL, NULL),
(34, 'AURO UNIVERSITY OF HOSPITALITY AND  MANAGEMENT,SURAT', '1', '2022-10-29 05:27:48', '2022-10-29 05:27:48', NULL, NULL),
(35, 'AWADHESH PRATAP SINGH UNIVERSITY, REWA', '1', '2022-10-29 05:28:02', '2022-10-29 05:28:02', NULL, NULL),
(36, 'B. S. ABDUR REHMAN UNIVERSITY, CHENNAI', '1', '2022-10-29 05:28:18', '2022-10-29 05:28:18', NULL, NULL),
(37, 'B.N.MANDAL UNIVERSITY,LALOO NAGAR,MADHEPURA', '1', '2022-10-29 05:28:32', '2022-10-29 05:28:32', NULL, NULL),
(38, 'BABA MASTHNATH UNIVERSITY.ROHTAK,HARYANA', '1', '2022-10-29 05:29:32', '2022-10-29 05:29:32', NULL, NULL),
(39, 'BABASAHEB BHIMRAO AMBEDKAR CENTRAL UNIVERSITY, LUCKNOW', '1', '2022-10-29 05:30:05', '2022-10-29 05:30:05', NULL, NULL),
(40, 'BABASAHEB BHIMRAO AMBEDKAR UNIV.,MUZAFFARPUR(Formerly BIHAR UNIVERSITY)', '1', '2022-10-29 05:30:16', '2022-10-29 05:30:16', NULL, NULL),
(41, 'BABU BANARASI DAS UNIVERSITY, LUCKNOW', '1', '2022-10-29 05:30:51', '2022-10-29 05:30:51', NULL, NULL),
(42, 'BAHRA UNIVERSITY, SOLAN,HIMACHAL PRADESH', '1', '2022-10-29 05:31:05', '2022-10-29 05:31:05', NULL, NULL),
(43, 'BANARAS HINDU UNIVERSITY,VARANASI', '1', '2022-10-29 05:31:17', '2022-10-29 05:31:17', NULL, NULL),
(44, 'BANASTHALI VIDYAPEETH, NIWAI, RAJASTHAN', '1', '2022-10-29 05:31:28', '2022-10-29 05:31:28', NULL, NULL),
(45, 'BANASTHALI VIDYAPITH,TONK, RAJASTHAN', '1', '2022-10-29 05:31:47', '2022-10-29 05:31:47', NULL, NULL),
(46, 'BANGALORE UNIVERSITY,BANGALORE', '1', '2022-10-29 05:31:59', '2022-10-29 05:31:59', NULL, NULL),
(47, 'BANKURA UNIVERSITY,BANKURA', '1', '2022-10-29 05:32:10', '2022-10-29 05:32:10', NULL, NULL),
(48, 'BARKATULLAH  UNIVERSITY,   BHOPAL', '1', '2022-10-29 05:32:22', '2022-10-29 05:32:22', NULL, NULL),
(49, 'BENNETT UNIVERSITY,GREATER NOIDA, UTTAR PRADESH', '1', '2022-10-29 05:33:02', '2022-10-29 05:33:02', NULL, NULL),
(50, 'BERHAMPUR UNIVERSITY,BERHAMPUR', '1', '2022-10-29 05:34:06', '2022-10-29 05:34:06', NULL, NULL),
(51, 'BHABHA UNIVERSITY, BHOPAL', '1', '2022-10-29 05:34:19', '2022-10-29 05:34:19', NULL, NULL),
(52, 'BHAGWANT UNIVERSITY,AJMER, RAJASTHAN', '1', '2022-10-29 05:34:31', '2022-10-29 05:34:31', NULL, NULL),
(53, 'BHAKTA KAVI NARSINH MEHTA UNIVERSITY,KHADIA,JUNAGADH', '1', '2022-10-29 05:34:40', '2022-10-29 05:34:40', NULL, NULL),
(54, 'BHARATH UNIVERSITY (BHARATH INSTITUTE OF HIGHER EDUCATION AND RESEARCH), SELAIYUR, CHENNAI', '1', '2022-10-29 05:34:53', '2022-10-29 05:34:53', NULL, NULL),
(55, 'BHARATI  VIDYAPEETH DEEMED UNIVERSITY, PUNE', '1', '2022-10-29 05:35:05', '2022-10-29 05:35:05', NULL, NULL),
(56, 'BILASPUR VISHWAVIDYALAYA,BILASPUR', '1', '2022-10-29 05:35:19', '2022-10-29 05:35:19', NULL, NULL),
(57, 'BINOD BIHARI MAHTO KOYALANCHAL UNIVERSITY,DHANBAD, JHARKHAND', '1', '2022-10-29 05:36:28', '2022-10-29 05:36:28', NULL, NULL),
(58, 'BIR TIKENDRAJIT UNIVERSITY,IMPHAL, MANIPUR', '1', '2022-10-29 05:36:40', '2022-10-29 05:36:40', NULL, NULL),
(59, 'BIRLA GLOBAL UNIVERSITY,BHUBANESHWAR', '1', '2022-10-29 05:36:50', '2022-10-29 05:36:50', NULL, NULL),
(60, 'BML MUNJAL UNIVERSITY,GURGAON', '1', '2022-10-29 05:37:02', '2022-10-29 05:37:02', NULL, NULL),
(61, 'BN UNIVERSITY (BHUPAL NOBLES’S UNIVERSITY), UDAIPUR,RAJASTHAN', '1', '2022-10-29 05:37:15', '2022-10-29 05:37:15', NULL, NULL),
(62, 'BPS MAHILA VISHWAVIDYALAYA,KANPURKALAN', '1', '2022-10-29 05:37:28', '2022-10-29 05:37:28', NULL, NULL),
(63, 'BRAINWARE UNIVERSITY,KOLKATA', '1', '2022-10-29 05:37:42', '2022-10-29 05:37:42', NULL, NULL),
(64, 'BUNDELKHAND UNIVERSITY,JHANSI', '1', '2022-10-29 05:38:07', '2022-10-29 05:38:07', NULL, NULL),
(65, 'BURDWAN UNIVERSITY,BURDWAN', '1', '2022-10-29 05:38:17', '2022-10-29 05:38:17', NULL, NULL),
(66, 'C.U.SHAHUNIVERSITY,SURENDRANAGAR', '1', '2022-10-29 05:38:50', '2022-10-29 05:38:50', NULL, NULL),
(67, 'CALCUTTA UNIVERSITY,CALCUTTA', '1', '2022-10-29 05:39:03', '2022-10-29 05:39:03', NULL, NULL),
(68, 'CALICUT UNIVERSITY,   KOZHIKODE', '1', '2022-10-29 05:39:12', '2022-10-29 05:39:12', NULL, NULL),
(69, 'CAPITAL UNIVERSITY,CHITRAGUPT NAGAR, KODERMA', '1', '2022-10-29 05:39:23', '2022-10-29 05:39:23', NULL, NULL),
(70, 'CAREER POINT UNIVERSITY,HAMIRPUR, H. P.', '1', '2022-10-29 05:40:07', '2022-10-29 05:40:07', NULL, NULL),
(71, 'CARRIER POINT UNIVERSITY,KOTA', '1', '2022-10-29 05:40:18', '2022-10-29 05:40:18', NULL, NULL),
(72, 'Central University of Haryana, Mahendragarh, Haryana', '1', '2022-10-29 05:40:43', '2022-10-29 05:40:43', NULL, NULL),
(73, 'CENTRAL UNIVERSITY OF KASHMIR', '1', '2022-10-29 05:41:04', '2022-10-29 05:41:04', NULL, NULL),
(74, 'CENTRAL UNIVERSITY OF SOUTH BIHAR, GAYA,BIHAR', '1', '2022-10-29 05:41:22', '2022-10-29 05:41:22', NULL, NULL),
(75, 'CH CHARAN SINGH UNIVERSITY, MEERUT', '1', '2022-10-29 05:41:38', '2022-10-29 05:41:38', NULL, NULL),
(76, 'CHANAKYA NATIONAL LAW UNIVERSITY,PATNA', '1', '2022-10-29 05:41:49', '2022-10-29 05:41:49', NULL, NULL),
(77, 'CHANDIGARH UNIVERSITY,MOHALI', '1', '2022-10-29 05:41:59', '2022-10-29 05:41:59', NULL, NULL),
(78, 'CHAUDHARY BANSI LAL UNIVERSITY, BHIWANI', '1', '2022-10-29 05:42:26', '2022-10-29 05:42:26', NULL, NULL),
(79, 'CHETTINAD ACADEMY OF  RESEARCH AND EDUCATION(DEEMED TO BE UNIVERSITY), KELAMBAKKAM, CHENNAI', '1', '2022-10-29 05:43:01', '2022-10-29 05:43:01', NULL, NULL),
(80, 'CHHATRAPATI SHIVAJI MAHARAJ UNIVERSITY, PANVEL', '1', '2022-10-29 05:43:16', '2022-10-29 05:43:16', NULL, NULL),
(81, 'CHRIST DEEMED TO BE UNIVERSITY, BANGALORE,KARNATAKA', '1', '2022-10-29 05:43:35', '2022-10-29 05:43:35', NULL, NULL),
(82, 'CHRIST UNIVERSITY,BANGALORE', '1', '2022-10-29 05:43:47', '2022-10-29 05:43:47', NULL, NULL),
(83, 'CMJ UNIVERSITY, JORABAT, MEGHALAYA', '1', '2022-10-29 05:43:57', '2022-10-29 05:43:57', NULL, NULL),
(84, 'CMR UNIVERISTY, BANGALORE, KARNATAKA', '1', '2022-10-29 05:44:13', '2022-10-29 05:44:13', NULL, NULL),
(85, 'COCHIN UNIV. OF SCIENCE   TECHNOLOGY, COCHIN', '1', '2022-10-29 05:44:23', '2022-10-29 05:44:23', NULL, NULL),
(86, 'COOCH BEHAR PANCHANAN BARMA UNIVERSITY, COOCHBEHAR', '1', '2022-10-29 05:44:31', '2022-10-29 05:44:31', NULL, NULL),
(87, 'CT UNIVERSITY, LUDHIANA', '1', '2022-10-29 05:44:41', '2022-10-29 05:44:41', NULL, NULL),
(88, 'D. Y. PATIL DEEMED TO BE UNIVERSITY, NAVI MUMBAI', '1', '2022-10-29 05:44:51', '2022-10-29 05:44:51', NULL, NULL),
(89, 'D. D. U. GORAKHPUR UNIVERSITY, GORAKHPUR', '1', '2022-10-29 05:45:00', '2022-10-29 05:45:00', NULL, NULL),
(90, 'DAMODARAM SANJIVAYYA NATIONAL LAW UNIVERSITY,VISHAKAPATNAM', '1', '2022-10-29 05:45:09', '2022-10-29 05:45:09', NULL, NULL),
(91, 'DAV University, Jalandhar, Punjab', '1', '2022-10-29 05:45:20', '2022-10-29 05:45:20', NULL, NULL),
(92, 'DELHI UNIVERSITY,DELHI', '1', '2022-10-29 05:45:33', '2022-10-29 05:45:33', NULL, NULL),
(93, 'DESH BHAGHAT UNIVERSITY,MANDI GOBINDGARH, AMLOH,FATEHGARH SAHIB.', '1', '2022-10-29 05:45:44', '2022-10-29 05:45:44', NULL, NULL),
(94, 'DEVI AHILYA VISHWAVIDYALAYA, INDORE', '1', '2022-10-29 05:45:55', '2022-10-29 05:45:55', NULL, NULL),
(95, 'Dharmashastra National Law University, Jabalpur, Madhya Pradesh', '1', '2022-10-29 05:46:05', '2022-10-29 05:46:05', NULL, NULL),
(96, 'DIBRUGARH UNIVERSITY,DIBRUGARH.', '1', '2022-10-29 05:46:16', '2022-10-29 05:46:16', NULL, NULL),
(97, 'DR. A. P. J. ABDUL KALAM UNIVERSITY, INDORE', '1', '2022-10-29 05:46:28', '2022-10-29 05:46:28', NULL, NULL),
(98, 'Dr. B.R. Ambedkar National Law University, Sonipat, Haryana', '1', '2022-10-29 05:46:56', '2022-10-29 05:46:56', NULL, NULL),
(99, 'DR. BHIMRAO AMBEDKAR LAW UNIVERSITY, JAIPUR', '1', '2022-10-29 05:47:10', '2022-10-29 05:47:10', NULL, NULL),
(100, 'DR. SHAKUNTALA MISHRA REHABILITATION UNIVERSITY,LUCKNOW', '1', '2022-10-29 05:47:22', '2022-10-29 05:47:22', NULL, NULL),
(101, 'DR. VISHWANATH KARAD MIT WORLD PEACE UNIVERSITY, PUNE', '1', '2022-10-29 05:47:33', '2022-10-29 05:47:33', NULL, NULL),
(102, 'DR. BABASAHEB AMBEDKAR MARATHWADA UNIVERSITY,AURANGABAD', '1', '2022-10-29 05:47:43', '2022-10-29 05:47:43', NULL, NULL),
(103, 'DR. BHIMRAO RAMJI AMBEDKAR UNIVERSITY, AGRA', '1', '2022-10-29 05:47:52', '2022-10-29 05:47:52', NULL, NULL),
(104, 'DR. HARI SINGH GAUR UNIVERSITY, SAGAR', '1', '2022-10-29 05:48:02', '2022-10-29 05:48:02', NULL, NULL),
(105, 'DR. K. N. MODI UNIVERSITY,TONK', '1', '2022-10-29 05:48:11', '2022-10-29 05:48:11', NULL, NULL),
(106, 'DR. MGR EDUCATIONAL AND RESEARCH INSTITUTE (DEEMED TO BE UNIVERSITY), MADURAVOYAL, CHENNAI', '1', '2022-10-29 05:48:27', '2022-10-29 05:48:27', NULL, NULL),
(107, 'DR. RAM MANOHAR LOHIA   NATIONAL LAW UNIVERSITY,LUCKNOW', '1', '2022-10-29 05:48:39', '2022-10-29 05:48:39', NULL, NULL),
(108, 'DR. RAM MANOHAR LOHIAAWADH UNIVERSITY, FAIZABAD', '1', '2022-10-29 05:48:50', '2022-10-29 05:48:50', NULL, NULL),
(109, 'DR.C.V.	RAMAN UNIVERSITY,BILASPUR', '1', '2022-10-29 05:49:01', '2022-10-29 05:49:01', NULL, NULL),
(110, 'FAKIR MOHAN UNIVERSITY, BALASORE -2017', '1', '2022-10-29 05:49:12', '2022-10-29 05:49:12', NULL, NULL),
(111, 'G H RAISONI UNIVERSITY, SAIKHEDA, CHHINDWARA', '1', '2022-10-29 05:49:23', '2022-10-29 05:49:23', NULL, NULL),
(112, 'G. H. RAISONI UNIVERSITY, AMRAVATI', '1', '2022-10-29 05:49:35', '2022-10-29 05:49:35', NULL, NULL),
(113, 'G.D. GOENKA UNIVERSITY,GURGAON', '1', '2022-10-29 05:49:45', '2022-10-29 05:49:45', NULL, NULL),
(114, 'G.G.S.INDRAPRASTHA UNIVERSITY,DWARKA,DELHI', '1', '2022-10-29 05:49:56', '2022-10-29 05:49:56', NULL, NULL),
(115, 'GALGOTIAS UNIVERSITY,GREATER NOIDA', '1', '2022-10-29 05:50:24', '2022-10-29 05:50:24', NULL, NULL),
(116, 'GAUHATI UNIVERSITY,GUWAHATI', '1', '2022-10-29 05:50:45', '2022-10-29 05:50:45', NULL, NULL),
(117, 'GAUTAM BUDDHA UNIVERSITY, GREATER NOIDA', '1', '2022-10-29 05:50:57', '2022-10-29 05:50:57', NULL, NULL),
(118, 'GITAM UNIVERSITY,VISAKHAPATNAM', '1', '2022-10-29 05:51:12', '2022-10-29 05:51:12', NULL, NULL),
(119, 'GLA UNIVERSITY, MATHURA', '1', '2022-10-29 05:51:23', '2022-10-29 05:51:23', NULL, NULL),
(120, 'GLS UNIVERSITY,AHMEDABAD', '1', '2022-10-29 05:51:35', '2022-10-29 05:51:35', NULL, NULL),
(121, 'GOA UNIVERSITY,BAMBOLIM', '1', '2022-10-29 05:51:48', '2022-10-29 05:51:48', NULL, NULL),
(122, 'GOKUL GLOBAL UNIVERSITY,SIDHPUR,PATAN', '1', '2022-10-29 05:51:58', '2022-10-29 05:51:58', NULL, NULL),
(123, 'GOPAL NARAYAN SINGH UNIVERSITY,JAMUHAR,SASARAM,ROHTAS', '1', '2022-10-29 05:52:10', '2022-10-29 05:52:10', NULL, NULL),
(124, 'GOUR BANGA UNIVERSITY, MOKDUMPUR, MALDA', '1', '2022-10-29 05:52:20', '2022-10-29 05:52:20', NULL, NULL),
(125, 'GRAPHIC ERA HILL UNIVERSITY, DEHRADUN(ESTD – 2013)', '1', '2022-10-29 05:52:31', '2022-10-29 05:52:31', NULL, NULL),
(126, 'GUJARAT NATIONAL LAW UNIVERSITY,GANDHI NAGAR', '1', '2022-10-29 05:52:46', '2022-10-29 05:52:46', NULL, NULL),
(127, 'GUJARAT UNIVERSITY,AHMEDABAD', '1', '2022-10-29 05:53:18', '2022-10-29 05:53:18', NULL, NULL),
(128, 'GURU GHASIDAS UNIVERSITY,BILASPUR', '1', '2022-10-29 05:53:30', '2022-10-29 05:53:30', NULL, NULL),
(129, 'GURU KASHI UNIVERSITY, TALWANDI SABO, BATHINDA,PUNJAB', '1', '2022-10-29 05:53:43', '2022-10-29 05:53:43', NULL, NULL),
(130, 'GURU JAMBESHWAR UNIVERSITY, HISAR', '1', '2022-10-29 05:53:54', '2022-10-29 05:53:54', NULL, NULL),
(131, 'Gurugram University,Gurugram, Haryana', '1', '2022-10-29 05:54:06', '2022-10-29 05:54:06', NULL, NULL),
(132, 'GURUNANAK DEV UNIVERSITY,AMRITSAR, PUNJAB', '1', '2022-10-29 05:54:20', '2022-10-29 05:54:20', NULL, NULL),
(133, 'HEMCHANDRACHARYA NORTH GUJARAT	UNIVERSITY,PATAN', '1', '2022-10-29 05:54:34', '2022-10-29 05:54:34', NULL, NULL),
(134, 'HEMWATI NANDAN BAHUGUNA GARHWAL UNIVERSITY, SRINAGAR, GARHWAL', '1', '2022-10-29 05:54:45', '2022-10-29 05:54:45', NULL, NULL),
(135, 'HIDYATULLAH NATIONAL LAW UNIVERSITY,RAIPUR', '1', '2022-10-29 05:54:57', '2022-10-29 05:54:57', NULL, NULL),
(136, 'HIMACHAL PRADESH NATIONAL LAW UNIVERSITY,SHIMLA', '1', '2022-10-29 05:55:08', '2022-10-29 05:55:08', NULL, NULL),
(137, 'HIMACHAL PRADESH UNIVERSITY, SHIMLA', '1', '2022-10-29 05:55:22', '2022-10-29 05:55:22', NULL, NULL),
(138, 'HIMALAYAN GARHWALN UNIVERSITY, PAURI', '1', '2022-10-29 05:55:33', '2022-10-29 05:55:33', NULL, NULL),
(139, 'HIMALAYAN UNIVERSITY,ITANAGAR', '1', '2022-10-29 05:55:45', '2022-10-29 05:55:45', NULL, NULL),
(140, 'HIMGIRI ZEE UNIVERSITY,  DEHRADUN', '1', '2022-10-29 05:56:00', '2022-10-29 05:56:00', NULL, NULL),
(141, 'HINDUSTAN INSTITUTE OF TECHNOLOGY AND SCIENCE (DEEMED TO BE UNIVERSITY), CHENNAI', '1', '2022-10-29 05:56:18', '2022-10-29 05:56:18', NULL, NULL),
(142, 'HSNC UNIVERSITY, WORLI,MUMBAI', '1', '2022-10-29 05:56:30', '2022-10-29 05:56:30', NULL, NULL),
(143, 'ICFAI UNIVERSITY, BADDI,SOLAN', '1', '2022-10-29 05:56:39', '2022-10-29 05:56:39', NULL, NULL),
(144, 'ICFAI UNIVERSITY, JAIPUR,RAJASTHAN', '1', '2022-10-29 05:56:51', '2022-10-29 05:56:51', NULL, NULL),
(145, 'ICFAI UNIVERSITY, RANCHI,JHARKHAND', '1', '2022-10-29 05:57:05', '2022-10-29 05:57:05', NULL, NULL),
(146, 'ICFAI  UNIVERSITY, DEHRADUN', '1', '2022-10-29 05:57:16', '2022-10-29 05:57:16', NULL, NULL),
(147, 'ICFAI FOUNDATION FOR HIGHER EDUCATION, HYDERABAD', '1', '2022-10-29 05:57:25', '2022-10-29 05:57:25', NULL, NULL),
(148, 'ICFAI UNIVERSITY, AGARTAL', '1', '2022-10-29 05:57:36', '2022-10-29 05:57:36', NULL, NULL),
(149, 'ICFAI UNIVERSITY, GANGTOK,SIKKIM', '1', '2022-10-29 05:57:46', '2022-10-29 05:57:46', NULL, NULL),
(150, 'IEC UNIVERSITY, BADDI, SOLAN, HIMACHAL PRADESH', '1', '2022-10-29 05:58:00', '2022-10-29 05:58:00', NULL, NULL),
(151, 'IFTM UNIVERSITY,MORADABAD', '1', '2022-10-29 05:58:11', '2022-10-29 05:58:11', NULL, NULL),
(152, 'IILM UNIVERSITY (INSTITUTE OF INTEGRATED LEARNING IN MANAGEMENT UNIVERSITY),GURGAON', '1', '2022-10-29 05:58:22', '2022-10-29 05:58:22', NULL, NULL),
(153, 'IIMT UNIVERSITY, MEERUT, UTTAR PRADESH', '1', '2022-10-29 05:58:32', '2022-10-29 05:58:32', NULL, NULL),
(154, 'IMS   UNIVERSITY, DEHRADUN (ESTD – 2013)', '1', '2022-10-29 05:58:41', '2022-10-29 05:58:41', NULL, NULL),
(155, 'INDIAN INSTITUTE OF MANAGEMENT, ROHTAK,HARYANA', '1', '2022-10-29 05:58:53', '2022-10-29 05:58:53', NULL, NULL),
(156, 'INDIAN INSTITUTE OF TECHNOLOGY, KHARAGPUR', '1', '2022-10-29 05:59:04', '2022-10-29 05:59:04', NULL, NULL),
(157, 'INDIRA GANDHI TECHNOLOGICAL AND	MEDICAL SCIENCES UNIVERSITY', '1', '2022-10-29 05:59:37', '2022-10-29 05:59:37', NULL, NULL),
(158, 'INDIRA GANDHI UNIVERSITY, MEERPUR, REWARI', '1', '2022-10-29 05:59:48', '2022-10-29 05:59:48', NULL, NULL),
(159, 'INTEGRAL UNIVERSITY, LUCKNOW, UTTAR PRADESH', '1', '2022-10-29 05:59:58', '2022-10-29 05:59:58', NULL, NULL),
(160, 'INVERTIS UNIVERSITY, BAREILLY', '1', '2022-10-29 06:28:43', '2022-10-29 06:28:43', NULL, NULL),
(161, 'ISBM UNIVERSITY,GARIYABAND', '1', '2022-10-29 06:28:54', '2022-10-29 06:28:54', NULL, NULL),
(162, 'ITM SCHOOL OF LAW,ITM UNIVERSITY,RAIPUR', '1', '2022-10-29 06:29:06', '2022-10-29 06:29:06', NULL, NULL),
(163, 'ITM UNIVERSITY, GWALIOR,MADHYA PRADESH', '1', '2022-10-29 06:29:20', '2022-10-29 06:29:20', NULL, NULL),
(164, 'JAGAN NATH UNIVERSITY,JHAJJAR', '1', '2022-10-29 06:29:28', '2022-10-29 06:29:28', NULL, NULL),
(165, 'JAGANNATH UNIVERSITY,JAIPUR', '1', '2022-10-29 06:29:40', '2022-10-29 06:29:40', NULL, NULL),
(166, 'JAGRAN LAKE CITY UNIVERSITY, BHOPAL', '1', '2022-10-29 06:29:52', '2022-10-29 06:29:52', NULL, NULL),
(167, 'JAI NARAIN VYAS UNIVERSITY, JODHPUR', '1', '2022-10-29 06:30:01', '2022-10-29 06:30:01', NULL, NULL),
(168, 'JAIN UNIVERSITY,RAMANAGARA, BANGALORE', '1', '2022-10-29 06:30:10', '2022-10-29 06:30:10', NULL, NULL),
(169, 'JAIPUR NATIONAL UNIVERSITY, JAGATPURA, JAIPUR', '1', '2022-10-29 06:30:18', '2022-10-29 06:30:18', NULL, NULL),
(170, 'JAMIA MILLIA ISLAMIA UNIVERSITY,NEW DELHI', '1', '2022-10-29 06:30:28', '2022-10-29 06:30:28', NULL, NULL),
(171, 'JANARDHAN RAI NAGAR RAJASTHAN VIDYAPEETH (DEEMED)  UNIVERSITY, UDAIPUR, RAJASTHAN', '1', '2022-10-29 06:30:40', '2022-10-29 06:30:40', NULL, NULL),
(172, 'JECRC UNIVERSITY, JAIPUR,RAJASTHAN', '1', '2022-10-29 06:30:48', '2022-10-29 06:30:48', NULL, NULL),
(173, 'Jharkhand Rai University,Jharkhand', '1', '2022-10-29 06:30:58', '2022-10-29 06:30:58', NULL, NULL),
(174, 'JIS UNIVERSITY, KOLKATA,WEST BENGAL', '1', '2022-10-29 06:31:07', '2022-10-29 06:31:07', NULL, NULL),
(175, 'JIWAJI UNIVERSITY, GWALIOR', '1', '2022-10-29 06:31:18', '2022-10-29 06:31:18', NULL, NULL),
(176, 'Jodhpur National University, Jodhpur (Private University)', '1', '2022-10-29 06:31:29', '2022-10-29 06:31:29', NULL, NULL),
(177, 'JS UNIVERSITY, FIROZABAD,UTTAR PRADESH', '1', '2022-10-29 06:31:38', '2022-10-29 06:31:38', NULL, NULL),
(178, 'JYOTI VIDYPEETH WOMEN’SUNIVERSITY, JAIPUR', '1', '2022-10-29 06:32:09', '2022-10-29 06:32:09', NULL, NULL),
(179, 'K.K.UNIVERSITY,NEPURA,BIHARSHARIFF,NALANDA', '1', '2022-10-29 06:32:20', '2022-10-29 06:32:20', NULL, NULL),
(180, 'K.R. MANGALAM UNIVERSITY, GURGAON', '1', '2022-10-29 06:32:31', '2022-10-29 06:32:31', NULL, NULL),
(181, 'K.S.K.VERMA KACHCHH UNIVERSITY,BHUJ–KACHCHH', '1', '2022-10-29 06:32:42', '2022-10-29 06:32:42', NULL, NULL),
(182, 'KAKATIYA UNIVERSITY, WARANGAL', '1', '2022-10-29 06:32:51', '2022-10-29 06:32:51', NULL, NULL),
(183, 'KALINGA UNIVERSITY,RAIPUR', '1', '2022-10-29 06:33:14', '2022-10-29 06:33:14', NULL, NULL),
(184, 'KANNUR UNIVERSITY, KANNUR', '1', '2022-10-29 06:33:24', '2022-10-29 06:33:24', NULL, NULL),
(185, 'KARNATAK UNIVERSITY, DHARWAD', '1', '2022-10-29 06:33:34', '2022-10-29 06:33:34', NULL, NULL),
(186, 'KARNATAKA STATE LAW UNIVERSITY, HUBLI', '1', '2022-10-29 06:33:50', '2022-10-29 06:33:50', NULL, NULL),
(187, 'KARNAVATI UNIVERSITY,GANDHI NAGAR', '1', '2022-10-29 06:34:00', '2022-10-29 06:34:00', NULL, NULL),
(188, 'KARUNYA UNIVERSITY, COIMBATORE', '1', '2022-10-29 06:34:12', '2022-10-29 06:34:12', NULL, NULL),
(189, 'KASHMIR UNIVERSITY,SRINAGAR', '1', '2022-10-29 06:34:27', '2022-10-29 06:34:27', NULL, NULL),
(190, 'Kaviyatri Bahinabai Chaudhari North Maharashtra University, Jalgaon, Maharashtra', '1', '2022-10-29 06:34:40', '2022-10-29 06:34:40', NULL, NULL),
(191, 'KAZI NAZRUL UNIVERSITY, ASANSOL', '1', '2022-10-29 06:34:49', '2022-10-29 06:34:49', NULL, NULL),
(192, 'KERALA UNIVERSITY, THIRUVANANTHAPURAM', '1', '2022-10-29 06:34:58', '2022-10-29 06:34:58', NULL, NULL),
(193, 'Khaja Bandanawaz University,Kalaburagi, Gulabarga, Karnataka', '1', '2022-10-29 06:35:06', '2022-10-29 06:35:06', NULL, NULL),
(194, 'KIIT UNIVERSITY, BHUBANESHWAR', '1', '2022-10-29 06:35:15', '2022-10-29 06:35:15', NULL, NULL),
(195, 'KL GREEN FIELDS VADDESWARAM (DEEMED)UNIVERSITY,GUNTUR', '1', '2022-10-29 06:35:36', '2022-10-29 06:35:36', NULL, NULL),
(196, 'KOLHAN UNIVERSITY, CHAIBASA', '1', '2022-10-29 06:36:39', '2022-10-29 06:36:39', NULL, NULL),
(197, 'KUMAON UNIVERSITY,NAINITAL', '1', '2022-10-29 06:37:36', '2022-10-29 06:37:36', NULL, NULL),
(198, 'KURUKSHETRA UNIVERSITY, KURUKSHETRA', '1', '2022-10-29 06:37:49', '2022-10-29 06:37:49', NULL, NULL),
(199, 'L.N.MITHILA UNIVERSITY,DARBHANGA', '1', '2022-10-29 06:38:02', '2022-10-29 06:38:02', NULL, NULL),
(200, 'LINGAYA’S DEEMED UNIVERSITY, FARIDABAD,HARYANA', '1', '2022-10-29 06:38:17', '2022-10-29 06:38:17', NULL, NULL),
(201, 'LNCT UNIVERSITY, BHOPAL', '1', '2022-10-29 06:38:26', '2022-10-29 06:38:26', NULL, NULL),
(202, 'LORD’S UNIVERSITY, ALWAR', '1', '2022-10-29 06:38:38', '2022-10-29 06:38:38', NULL, NULL),
(203, 'LOVELY PROFESSIONAL UNIVERSITY, BHAGWARA, JALANDHAR', '1', '2022-10-29 06:38:56', '2022-10-29 06:38:56', NULL, NULL),
(204, 'LUCKNOW UNIVERSITY, LUCKNOW', '1', '2022-10-29 06:39:09', '2022-10-29 06:39:09', NULL, NULL),
(205, 'M S Ramaiah University of Applied Sciences,Bengalu', '1', '2022-10-29 06:39:19', '2022-10-29 06:39:19', NULL, NULL),
(206, 'M. J. P. ROHILKHAND UNIVERSITY, BAREILLY', '1', '2022-10-29 06:39:28', '2022-10-29 06:39:28', NULL, NULL),
(207, 'MADHAV UNIVERSITY, SIROHI', '1', '2022-10-29 06:39:37', '2022-10-29 06:39:37', NULL, NULL),
(208, 'MAGADH UNIVERSITY,BODH GAYA', '1', '2022-10-29 06:39:46', '2022-10-29 06:39:46', NULL, NULL),
(209, 'MAHARAJ VINAYAK GLOBAL UNIVERSITY, JAIPUR', '1', '2022-10-29 06:39:55', '2022-10-29 06:39:55', NULL, NULL),
(210, 'MAHARAJA AGRASEN UNIVERSITY, SOLAN', '1', '2022-10-29 06:40:07', '2022-10-29 06:40:07', NULL, NULL),
(211, 'MAHARAJA KRISHNAKUMARSINHJI BHAVNAGAR UNIVERSITY,BHAVNAGAR', '1', '2022-10-29 06:40:16', '2022-10-29 06:40:16', NULL, NULL),
(212, 'MAHARAJA SAYAJI RAO UNIVERSITY OF BARODA', '1', '2022-10-29 06:40:25', '2022-10-29 06:40:25', NULL, NULL),
(213, 'MAHARAJA SURAJ MAL BRIJ UNIVERSITY, BHARATPUR', '1', '2022-10-29 06:40:33', '2022-10-29 06:40:33', NULL, NULL),
(214, 'MAHARAJA GANGA SINGH UNIVERSITY, BIKANER ( OLD NAME UNIVERSITY OF BIKANER, BIKANER)', '1', '2022-10-29 06:40:43', '2022-10-29 06:40:43', NULL, NULL),
(215, 'MAHARASHTRA NATIONAL LAW UNIVERSITY, NAGPUR', '1', '2022-10-29 06:41:37', '2022-10-29 06:41:37', NULL, NULL),
(216, 'MAHARASHTRA NATIONAL LAW UNIVERSITY, POWAI,MUMBAI', '1', '2022-10-29 06:41:49', '2022-10-29 06:41:49', NULL, NULL),
(217, 'MAHARISHI ARVIND UNIVERSITY, JAIPUR, RAJASTHAN', '1', '2022-10-29 06:41:58', '2022-10-29 06:41:58', NULL, NULL),
(218, 'MAHARISHI MARKANDESHWAR UNIVERSITY,MULLANA-AMBALA,HARYANA', '1', '2022-10-29 06:42:07', '2022-10-29 06:42:07', NULL, NULL),
(219, 'MAHARISHI UNIVERSITY OF INFORMATION TECHNOLOGY,NOIDA', '1', '2022-10-29 06:42:15', '2022-10-29 06:42:15', NULL, NULL),
(220, 'MAHARSHI DAYANAND UNIVERSITY, ROHTAK', '1', '2022-10-29 06:42:26', '2022-10-29 06:42:26', NULL, NULL),
(221, 'MAHATMA GANDHI UNIVERSITY, NALGONDA, TELANGANA', '1', '2022-10-29 06:42:43', '2022-10-29 06:42:43', NULL, NULL),
(222, 'MAHATMA GANDHI UNIVERSITY, RI-BHOI ,MEGHALAYA', '1', '2022-10-29 06:42:54', '2022-10-29 06:42:54', NULL, NULL),
(223, 'MAHATMA GANDHI UNIVERSITY, KOTTAYAM, KERALA', '1', '2022-10-29 06:43:21', '2022-10-29 06:43:21', NULL, NULL),
(224, 'MAHATMA GANDHI KASHI VIDHYAPITH, VARANASI', '1', '2022-10-29 06:43:36', '2022-10-29 06:43:36', NULL, NULL),
(225, 'MAHATMA JYOTI RAO PHOOLE UNIVERSITY, JAIPUR,RAJASTHAN', '1', '2022-10-29 06:43:49', '2022-10-29 06:43:49', NULL, NULL),
(226, 'MAHINDRA UNIVERSITY,TELANGANA', '1', '2022-10-29 06:43:59', '2022-10-29 06:43:59', NULL, NULL),
(227, 'MANAV RACHNA UNIVERSITY,FARIDABAD', '1', '2022-10-29 06:51:54', '2022-10-29 06:51:54', NULL, NULL),
(228, 'MANAV BHARTI UNIVERSITY, SOLAN', '1', '2022-10-29 06:52:17', '2022-10-29 06:52:17', NULL, NULL),
(229, 'MANGALAYATAN UNIVERSITY, ALIGARH', '1', '2022-10-29 06:52:25', '2022-10-29 06:52:25', NULL, NULL),
(230, 'Mangalayatan University, Jabalpur, Madhya Pradesh', '1', '2022-10-29 06:52:35', '2022-10-29 06:52:35', NULL, NULL),
(231, 'MANIPAL UNIVERSITY, JAIPUR', '1', '2022-10-29 07:00:19', '2022-10-29 07:00:19', NULL, NULL),
(232, 'MANIPUR  UNIVERSITY, IMPHAL', '1', '2022-10-29 07:00:29', '2022-10-29 07:00:29', NULL, NULL),
(233, 'MANSAROVAR GLOBAL UNIVERSITY, SEHORE,', '1', '2022-10-29 07:00:41', '2022-10-29 07:00:41', NULL, NULL),
(234, 'MARWADI EDUCATION FOUNDATION GROUP OF INSTITUTIONS,RAJKOT', '1', '2022-10-29 07:00:53', '2022-10-29 07:00:53', NULL, NULL),
(235, 'MATS UNIVERSITY,RAIPUR', '1', '2022-10-29 07:01:02', '2022-10-29 07:01:02', NULL, NULL),
(236, 'MEWAR UNIVERSITY,CHITTORGARH', '1', '2022-10-29 07:01:12', '2022-10-29 07:01:12', NULL, NULL),
(237, 'MIZORAM UNIVERSITY,AIZWAL', '1', '2022-10-29 07:01:21', '2022-10-29 07:01:21', NULL, NULL),
(238, 'MODY UNIVERSITY OF OF SCIENCE AND TECHNOLOGY,  LAKSHMANGARH, DISTT. SIKAR', '1', '2022-10-29 07:01:31', '2022-10-29 07:01:31', NULL, NULL),
(239, 'MOHANLAL  SUKHADIA UNIVERSITY, UDAIPUR', '1', '2022-10-29 07:01:42', '2022-10-29 07:01:42', NULL, NULL),
(240, 'MOHD. ALI JAUHAR UNIVERSITY, RAMPUR', '1', '2022-10-29 07:01:52', '2022-10-29 07:01:52', NULL, NULL),
(241, 'MONAD UNIVERSITY,  HAPUR, UTTAR PRADESH', '1', '2022-10-29 07:02:00', '2022-10-29 07:02:00', NULL, NULL),
(242, 'MOTHERHOOD UNIVERSITY, ROORKEE, HARIDWAR, UTTARAKHAND', '1', '2022-10-29 07:02:08', '2022-10-29 07:02:08', NULL, NULL),
(243, 'MUMBAI UNIVERSITY, MUMBAI', '1', '2022-10-29 07:02:16', '2022-10-29 07:02:16', NULL, NULL),
(244, 'MUNGER UNIVERSITY,MUNGER', '1', '2022-10-29 07:02:25', '2022-10-29 07:02:25', NULL, NULL),
(245, 'MVN UNIVERSITY, PALWAL,HARYANA', '1', '2022-10-29 07:02:41', '2022-10-29 07:02:41', NULL, NULL),
(246, 'NAGALAND UNIVERSITY,KOHIMA', '1', '2022-10-29 07:02:50', '2022-10-29 07:02:50', NULL, NULL),
(247, 'NATIONAL ACADEMY OF LEGAL STUDIES AND RESEARCH,HYDERABAD (NALSAR)', '1', '2022-10-29 07:03:00', '2022-10-29 07:03:00', NULL, NULL),
(248, 'NATIONAL FORENSIC SCIENCE UNIVERSITY,GANDHINAGAR', '1', '2022-10-29 07:03:11', '2022-10-29 07:03:11', NULL, NULL),
(249, 'NATIONAL LAW UNIVERSITY AND JUDICIAL ACADEMY,GUWAHATI', '1', '2022-10-29 07:03:24', '2022-10-29 07:03:24', NULL, NULL),
(250, 'National Law University Delhi,Dwarka', '1', '2022-10-29 07:03:38', '2022-10-29 07:03:38', NULL, NULL),
(251, 'NATIONAL LAW UNIVERSITY,CUTTACK, ORISSA', '1', '2022-10-29 07:03:46', '2022-10-29 07:03:46', NULL, NULL),
(252, 'NATIONAL UNIVERSITY OF STUDY AND RESEARCH IN LAW,RANCHI', '1', '2022-10-29 07:03:58', '2022-10-29 07:03:58', NULL, NULL),
(253, 'NATIONAL  LAW INSTITUTE UNIVERSITY, BHOPAL', '1', '2022-10-29 07:04:07', '2022-10-29 07:04:07', NULL, NULL),
(254, 'NATIONAL LAW SCHOOL OF INDIA UNIVERSITY, B’LORE', '1', '2022-10-29 07:05:39', '2022-10-29 07:05:39', NULL, NULL),
(255, 'NATIONAL LAW UNIVERSITY, JODHPUR', '1', '2022-10-29 07:05:49', '2022-10-29 07:05:49', NULL, NULL),
(256, 'NAVRACHANA UNIVERSITY,VADODRA', '1', '2022-10-29 07:05:58', '2022-10-29 07:05:58', NULL, NULL),
(257, 'NEHRU GRAM BHARATI UNIVERSITY, DUBAWAL,ALLAHABAD', '1', '2022-10-29 07:06:07', '2022-10-29 07:06:07', NULL, NULL),
(258, 'NETAJI SUBHASH UNIVERSITY,JAMSHEDPUR', '1', '2022-10-29 07:06:15', '2022-10-29 07:06:15', NULL, NULL),
(259, 'NIILM UNIVERSITY, KAITHAL', '1', '2022-10-29 07:06:23', '2022-10-29 07:06:23', NULL, NULL),
(260, 'NILAMBER PITAMBER UNIVERSITY, MEDININAGAR,PALAMU', '1', '2022-10-29 07:06:32', '2022-10-29 07:06:32', NULL, NULL),
(261, 'Nilu', '1', '2022-10-29 07:06:43', '2022-10-29 07:06:43', NULL, NULL),
(262, 'NIMS University,  Jaipur,Rajastha', '1', '2022-10-29 07:07:43', '2022-10-29 07:07:43', NULL, NULL),
(263, 'NIRMA UNIVERSITY OF SCIENCE & TECHNOLOGY,AHMEDABAD', '1', '2022-10-29 07:07:54', '2022-10-29 07:07:54', NULL, NULL),
(264, 'NOIDA INTERNATIONAL UNIVERSITY, GAUTAM BUDH NAGAR', '1', '2022-10-29 07:08:02', '2022-10-29 07:08:02', NULL, NULL),
(265, 'NORTH EAST FRONTIER TECHNICAL UNIVERSITY,WEST SIANG', '1', '2022-10-29 07:08:10', '2022-10-29 07:08:10', NULL, NULL),
(266, 'NORTH BENGAL UNIVERSITY, RAJARAMMOHANPUR', '1', '2022-10-29 07:08:20', '2022-10-29 07:08:20', NULL, NULL),
(267, 'NORTH EASTERN HILL UNIVERSITY, SHILLONG', '1', '2022-10-29 07:08:43', '2022-10-29 07:08:43', NULL, NULL),
(268, 'NORTH MAHARASTRA UNIVERTSITY, JALGAON', '1', '2022-10-29 07:08:51', '2022-10-29 07:08:51', NULL, NULL),
(269, 'NORTH ORISSA UNIVERSITY, MAYURBHANJ', '1', '2022-10-29 07:09:01', '2022-10-29 07:09:01', NULL, NULL),
(270, 'O. P. JINDAL GLOBAL UNIVERSITY, SONIPAT', '1', '2022-10-29 07:09:09', '2022-10-29 07:09:09', NULL, NULL),
(271, 'OM STERLING GLOBAL UNIVERSITY, HISAR - 2019', '1', '2022-10-29 07:09:24', '2022-10-29 07:09:24', NULL, NULL),
(272, 'OPJS UNIVERSITY, CHURU', '1', '2022-10-29 07:09:32', '2022-10-29 07:09:32', NULL, NULL),
(273, 'ORIENTAL SCHOOL OF LAW, ORIENTAL UNIVERSITY, INDORE', '1', '2022-10-29 07:09:48', '2022-10-29 07:09:48', NULL, NULL),
(274, 'OSMANIA UNIVERSITY, HYDERABAD', '1', '2022-10-29 07:09:57', '2022-10-29 07:09:57', NULL, NULL),
(275, 'P. K. UNIVERSITY, SHIVPURI,MADHYA PRADESH\"', '1', '2022-10-29 07:10:07', '2022-10-29 07:10:07', NULL, NULL),
(276, 'PACIFIC ACADEMY OF HIGHER EDUCATION & RESEARCH UNIVERSITY, DEBARI, UDAIPUR', '1', '2022-10-29 07:10:15', '2022-10-29 07:10:15', NULL, NULL),
(277, 'PADMASHREE DR. D.Y. PATIL DEEMED UNIVERSITY,  MUMBAI', '1', '2022-10-29 07:10:24', '2022-10-29 07:10:24', NULL, NULL),
(278, 'PARUL UNIVERSITY,VADODARA,GUJARAT', '1', '2022-10-29 07:10:33', '2022-10-29 07:10:33', NULL, NULL),
(279, 'PATLIPUTRA UNIVERSITY,PATNA', '1', '2022-10-29 07:10:44', '2022-10-29 07:10:44', NULL, NULL),
(280, 'PATNA UNIVERSITY,PATNA', '1', '2022-10-29 07:10:51', '2022-10-29 07:10:51', NULL, NULL),
(281, 'PDM UNIVERSITY, BAHADURGARH, DIST. JHAJJAR', '1', '2022-10-29 07:10:59', '2022-10-29 07:10:59', NULL, NULL),
(282, 'PES UNIVERSITY, BENGELURU,KARNATAKA', '1', '2022-10-29 07:11:09', '2022-10-29 07:11:09', NULL, NULL),
(283, 'PONDICHERY UNIVERSITY, PONDICHERY', '1', '2022-10-29 07:11:20', '2022-10-29 07:11:20', NULL, NULL),
(284, 'PRESIDENCY UNIVERSITY,BANGALORE, KARNATAKA', '1', '2022-10-29 07:11:27', '2022-10-29 07:11:27', NULL, NULL),
(285, 'PRIST UNIVERSITY CAMPUS, ARASANUR, SIVAGANGAI, -2015', '1', '2022-10-29 07:11:37', '2022-10-29 07:11:37', NULL, NULL),
(286, 'PROF. RAJENDRA SINGH (RAJJU BHAIYA) UNIVERSITY, PRAYAGRAJ (FORMERLY ALLAHABAD STATE UNIVERSITY, ALLAHABAD)', '1', '2022-10-29 07:11:50', '2022-10-29 07:11:50', NULL, NULL),
(287, 'Pt.RAVI	SHANKAR	SHUKLA UNIVERSITY,RAIPUR', '1', '2022-10-29 07:11:59', '2022-10-29 07:11:59', NULL, NULL),
(288, 'PUNJAB UNIVERSITY, CHANDIGARH', '1', '2022-10-29 07:12:09', '2022-10-29 07:12:09', NULL, NULL),
(289, 'PUNJABI  UNIVERSITY, PATIALA', '1', '2022-10-29 07:12:17', '2022-10-29 07:12:17', NULL, NULL),
(290, 'PURNIA UNIVERSITY,PURNIA', '1', '2022-10-29 07:12:29', '2022-10-29 07:12:29', NULL, NULL),
(291, 'QUANTAM UNIVERSITY, MANDAWAR, CHHUTMALPUR,ROORKEE', '1', '2022-10-29 07:12:41', '2022-10-29 07:12:41', NULL, NULL),
(292, 'RABINDRANATH TAGORE UNIVERSITY, RAISON, MP', '1', '2022-10-29 07:12:49', '2022-10-29 07:12:49', NULL, NULL),
(293, 'RADHA GOVIND UNIVERSITY, RAMGARH, JHARKHAND', '1', '2022-10-29 07:12:57', '2022-10-29 07:12:57', NULL, NULL),
(294, 'RAFFLES UNIVERSITY, NEEMRANA', '1', '2022-10-29 07:13:04', '2022-10-29 07:13:04', NULL, NULL),
(295, 'RAI UNIVERSITY,AHMEDABAD', '1', '2022-10-29 07:13:15', '2022-10-29 07:13:15', NULL, NULL),
(296, 'RAJASTHAN UNIVERSITY,JAIPUR', '1', '2022-10-29 07:13:22', '2022-10-29 07:13:22', NULL, NULL),
(297, 'RAJIV GANDHI NATIONAL   UNIVERSITY OF LAW, PATIALA', '1', '2022-10-29 07:13:30', '2022-10-29 07:13:30', NULL, NULL),
(298, 'RAJIV GANDHI UNIVERSITY,ITANAGAR', '1', '2022-10-29 07:13:43', '2022-10-29 07:13:43', NULL, NULL),
(299, 'RAM KRISHNA DHARMARTH FOUNDATION UNIVERSITY,BHOPAL, MADHYA PRADESH', '1', '2022-10-29 07:14:46', '2022-10-29 07:14:46', NULL, NULL),
(300, 'RAMA  UNIVERSITY, KANPUR NAGAR', '1', '2022-10-29 07:14:55', '2022-10-29 07:14:55', NULL, NULL),
(301, 'RANCHI UNIVERSITY, RANCHI', '1', '2022-10-29 07:15:03', '2022-10-29 07:15:03', NULL, NULL),
(302, 'RANI  DURGAWATI   VISHWAVIDYALAYA, JABALPUR', '1', '2022-10-29 07:15:12', '2022-10-29 07:15:12', NULL, NULL),
(303, 'RASHTRA SANT TUKODOJI MAHARAJ NAGPUR UNIVERSITY,NAGPUR', '1', '2022-10-29 07:15:21', '2022-10-29 07:15:21', NULL, NULL),
(304, 'RAYAT BAHRA UNIVERSITY,MOHALI (26th April, 2015)', '1', '2022-10-29 07:15:29', '2022-10-29 07:15:29', NULL, NULL),
(305, 'REVA UNIVERSITY,BANGALORE, KARNATAKA', '1', '2022-10-29 07:15:37', '2022-10-29 07:15:37', NULL, NULL),
(306, 'RIMT UNIVERSITY, MANDI GOBINDGAHR, PUNJAB', '1', '2022-10-29 07:15:52', '2022-10-29 07:15:52', NULL, NULL),
(307, 'RNB GLOBAL UNIVERSITY,BIKANER, RAJASTHAN  (19th July, 2015)', '1', '2022-10-29 07:16:00', '2022-10-29 07:16:00', NULL, NULL),
(308, 'SABARMATI UNIVERSITY', '1', '2022-10-29 07:16:14', '2022-10-29 07:16:14', NULL, NULL),
(309, 'SAI NATH UNIVERSITY, RANCHI, JHARKHAND', '1', '2022-10-29 07:16:24', '2022-10-29 07:16:24', NULL, NULL),
(310, 'SAMBALPUR UNIVERSITY, SAMBALPUR', '1', '2022-10-29 07:16:35', '2022-10-29 07:16:35', NULL, NULL),
(311, 'SANDIP UNIVERSITY, MAHIRAVALI, NASHIK, MAHARASHTRA', '1', '2022-10-29 07:16:45', '2022-10-29 07:16:45', NULL, NULL),
(312, 'SANGAM UNIVERSITY,BHILWARA, RAJASTHAN\"', '1', '2022-10-29 07:16:54', '2022-10-29 07:16:54', NULL, NULL),
(313, 'SANJEEV AGRAWAL GLOBAL EDUCATION ( SAGE) UNIVERSITY, BHOPAL, MADHYA PRADESH', '1', '2022-10-29 07:17:05', '2022-10-29 07:17:05', NULL, NULL),
(314, 'SANSKRITI UNIVERSITY,CHHATA, MATHURA', '1', '2022-10-29 07:17:14', '2022-10-29 07:17:14', NULL, NULL),
(315, 'SANT BABA BHAG SINGH UNIVERSITY, KHIALA,JALANDHAR', '1', '2022-10-29 07:17:22', '2022-10-29 07:17:22', NULL, NULL),
(316, 'SANT GAHIRA GURU VISHWAVIDYALAYA SURGUJA,AMBIKAPUR,SURGUJA', '1', '2022-10-29 07:17:30', '2022-10-29 07:17:30', NULL, NULL),
(317, 'SANT GADGE BABA AMARAVATI UNIVERSITY,AMRAVATI', '1', '2022-10-29 07:17:37', '2022-10-29 07:17:37', NULL, NULL),
(318, 'SARDAR PATEL UNIVERSITY,VALLABH	VIDYA NAGAR', '1', '2022-10-29 07:17:51', '2022-10-29 07:17:51', NULL, NULL),
(319, 'Sardar Patel University, Balaghat, Madhya Pradesh', '1', '2022-10-29 07:18:00', '2022-10-29 07:18:00', NULL, NULL),
(320, 'SASTRA UNIVERSITY, THANJAVUR', '1', '2022-10-29 07:18:12', '2022-10-29 07:18:12', NULL, NULL),
(321, 'SATAVAHANA UNIVERSITY,KARIMNAGAR', '1', '2022-10-29 07:18:22', '2022-10-29 07:18:22', NULL, NULL),
(322, 'SATHYABAMA INSTITUTE OF SCIENCE AND TECHNOLOGY UNIVERSITY, JEPPIAAR NAGAR, CHENNAI', '1', '2022-10-29 07:18:30', '2022-10-29 07:18:30', NULL, NULL),
(323, 'SAURASHTRA UNIVERSITY,RAJKOT', '1', '2022-10-29 07:18:41', '2022-10-29 07:18:41', NULL, NULL),
(324, 'SAVEETHA UNIVERSITY, CHENNAI', '1', '2022-10-29 07:18:50', '2022-10-29 07:18:50', NULL, NULL),
(325, 'SAVITRIBAI PHULE PUNE UNIVERSITY, PUNE, MAHARASTRA  (EARLIER KNOWN AS PUNE UNIVERSITY)', '1', '2022-10-29 07:19:01', '2022-10-29 07:19:01', NULL, NULL),
(326, 'SEACOM SKILLS UNIVERSITY, BIRBHUM, WEST BENGAL', '1', '2022-10-29 07:19:10', '2022-10-29 07:19:10', NULL, NULL),
(327, 'SHAHEED MAHENDRA KARMA VISHWAVIDYALAYA,BASTAR', '1', '2022-10-29 07:19:22', '2022-10-29 07:19:22', NULL, NULL),
(328, 'SHARDA UNIVERSITY,GREATER NOIDA', '1', '2022-10-29 07:19:31', '2022-10-29 07:19:31', NULL, NULL),
(329, 'SHIVAJI UNIVERSITY,   KOLHAPUR', '1', '2022-10-29 07:19:48', '2022-10-29 07:19:48', NULL, NULL),
(330, 'SHOBHIT UNIVERSITY,MEERUT', '1', '2022-10-29 07:19:57', '2022-10-29 07:19:57', NULL, NULL),
(331, 'SHOBHIT UNIVERSITY,SAHARANPUR', '1', '2022-10-29 07:20:07', '2022-10-29 07:20:07', NULL, NULL),
(332, 'SHOOLINI UNIVERSITY OF BIOTECHNOLOGY AND MANAGEMENT SCIENCE, SOLAN', '1', '2022-10-29 07:20:17', '2022-10-29 07:20:17', NULL, NULL),
(333, 'SHREE GURUGOBINDSINGH TRICENTENARY', '1', '2022-10-29 07:20:32', '2022-10-29 07:20:32', NULL, NULL),
(334, 'SHREEMATI NATHIBAI DAMODAR THACKERSEY WOMEN’S UNIVERSITY, MUMBAI', '1', '2022-10-29 07:20:44', '2022-10-29 07:20:44', NULL, NULL),
(335, 'SHRI GOVIND GURU UNIVERSITY,GODHRA,PANCHMAHALS', '1', '2022-10-29 07:20:56', '2022-10-29 07:20:56', NULL, NULL),
(336, 'SHRI JAGADISHPRASAD JHABARMAL TIBREWALA UNIVERSITY, JHUNJHUNU', '1', '2022-10-29 07:21:04', '2022-10-29 07:21:04', NULL, NULL),
(337, 'SHRI KHUSHAL DAS UNIVERSITY, HANUMANGARH', '1', '2022-10-29 07:21:18', '2022-10-29 07:21:18', NULL, NULL),
(338, 'SHRI RAMSWAROOP MEMORIAL UNIVERSITY,BARABANKI, UTTAR PRADESH', '1', '2022-10-29 07:21:30', '2022-10-29 07:21:30', NULL, NULL),
(339, 'SHRI RAWATPURA SARKAR UNIVERSITY,RAIPUR', '1', '2022-10-29 07:22:13', '2022-10-29 07:22:13', NULL, NULL),
(340, 'Shri Vaishnav Vidyapeeth Vishwavidyalaya, Indore, M.P.', '1', '2022-10-29 07:22:22', '2022-10-29 07:22:22', NULL, NULL),
(341, 'SHRI VENKATESHWARA UNIVERSITY, AMROHA', '1', '2022-10-29 07:22:30', '2022-10-29 07:22:30', NULL, NULL),
(342, 'SHRI CHATRAPATI  SHAHUJI   MAHARAJ  UNIVERSITY,  KANPUR', '1', '2022-10-29 07:22:40', '2022-10-29 07:22:40', NULL, NULL),
(343, 'SHYAM UNIVERSITY, DEHLAL DIDWANA, DAUSA', '1', '2022-10-29 07:22:50', '2022-10-29 07:22:50', NULL, NULL),
(344, 'SIDDHARTH UNIVERSITY, KAPILVASTU, SIDDHARTH NAGAR', '1', '2022-10-29 07:23:04', '2022-10-29 07:23:04', NULL, NULL),
(345, 'SIDO KANHU MURMU UNIVERSITY, DUMKA(Recognised in 2009)', '1', '2022-10-29 07:23:17', '2022-10-29 07:23:17', NULL, NULL),
(346, 'SIKKIM UNIVERSITY, GANGTOK (5 year BA LL.B course)', '1', '2022-10-29 07:23:29', '2022-10-29 07:23:29', NULL, NULL),
(347, 'SIKSHA “O” ANUSANDHAN (SOA) UNIVERSITY,BHUBANESWAR', '1', '2022-10-29 07:23:40', '2022-10-29 07:23:40', NULL, NULL),
(348, 'SOLAPUR UNIVERSITY, SOLAPUR', '1', '2022-10-29 07:24:05', '2022-10-29 07:24:05', NULL, NULL),
(349, 'SRI GURU GRANTH SAHIB WORLD UNIVERSITY, FATEHGARH SAHIB,  PUNJAB (30.07.2016)', '1', '2022-10-29 07:24:16', '2022-10-29 07:24:16', NULL, NULL),
(350, 'SRI KRISHNADEVARAYA UNIVERSITY,ANANTAPUR', '1', '2022-10-29 07:24:26', '2022-10-29 07:24:26', NULL, NULL),
(351, 'SRI PADMAVATI MAHILA VISWAVIDHYALAYAM,TIRUPATI', '1', '2022-10-29 07:24:34', '2022-10-29 07:24:34', NULL, NULL),
(352, 'SRI VENKATESWARA UNIVERISTY,TIRUPATI', '1', '2022-10-29 07:24:46', '2022-10-29 07:24:46', NULL, NULL),
(353, 'SRIDHAR UNIVERSITY, PILANI', '1', '2022-10-29 07:24:56', '2022-10-29 07:24:56', NULL, NULL),
(354, 'SRM UNIVERSITY, SONEPAT', '1', '2022-10-31 04:13:30', '2022-10-31 04:13:30', NULL, NULL),
(355, 'SRM UNIVERSITY, KATANKULATHUR,KANCHIPURAM', '1', '2022-10-31 04:13:41', '2022-10-31 04:13:41', NULL, NULL),
(356, 'SSJ UNIVERSITY 9SOBAN SINGH JEENA UNIVERSITY)ALMORA, UTTARAKHAN', '1', '2022-10-31 04:13:53', '2022-10-31 04:13:53', NULL, NULL),
(357, 'ST. XAVIER’S UNIVERSITY,KOLKATA', '1', '2022-10-31 04:14:04', '2022-10-31 04:14:04', NULL, NULL),
(358, 'STAREX UNIVERSITY,GURGAON', '1', '2022-10-31 04:14:13', '2022-10-31 04:14:13', NULL, NULL),
(359, 'SUNRISE UNIVERSITY, ALWAR', '1', '2022-10-31 04:14:25', '2022-10-31 04:14:25', NULL, NULL),
(360, 'SURESH GYAN VIHAR UNIVERSITY, JAGATPURA, JAIPUR', '1', '2022-10-31 04:14:34', '2022-10-31 04:14:34', NULL, NULL),
(361, 'SVKM’s Narsee Monjee Institute of Management', '1', '2022-10-31 04:14:46', '2022-10-31 04:14:46', NULL, NULL),
(362, 'SVKM’S NARSEE MONJEE INSTITUTE OF MANAGEMENT STUDIES,  (NMIMS DEEMED UNIVERSITY), MUMBAI', '1', '2022-10-31 04:14:54', '2022-10-31 04:14:54', NULL, NULL),
(363, 'SVKM’S NARSEE MONJEE INSTITUTE OF MANAGEMENT STUDIES, (NMIMS DEEMED TO BE UNIVERSITY), MUMBAI,MAHARASHTRA', '1', '2022-10-31 04:15:11', '2022-10-31 04:15:11', NULL, NULL),
(364, 'SVKM’S NARSEE MONJEE INSTITUTE OF MANAGEMENT STUDIES, (NMIMS DEEMED TO BE UNIVERSITY), MUMBAI, MAHARASHTRA', '1', '2022-10-31 04:15:22', '2022-10-31 04:15:22', NULL, NULL),
(365, 'SWAMI VIVEKANAND SUBHARTI UNIVERSITY, MEERUT', '1', '2022-10-31 04:15:31', '2022-10-31 04:15:31', NULL, NULL),
(366, 'SWAMY RAMANAND TEERTH   MARATHWADA UNIVERSITY ,NANDED', '1', '2022-10-31 04:15:40', '2022-10-31 04:15:40', NULL, NULL),
(367, 'SYMBIOSIS INTERNATIONAL EDUCATIONAL CENTRE, DEEMED UNIVERSITY, PUNE', '1', '2022-10-31 04:15:48', '2022-10-31 04:15:48', NULL, NULL),
(368, 'SYMBIOSIS INTERNATIONAL UNIVERSITY, PUNE, OFF CAMPUS AT NOIDA', '1', '2022-10-31 04:15:59', '2022-10-31 04:15:59', NULL, NULL),
(369, 'SYMBIOSIS LAW SCHOOL, HYDERABAD, OFF-CAMPUS OF SYMBIOSIS INTERNATIONAL DEEMED UNIVERSITY, PUNE', '1', '2022-10-31 04:16:08', '2022-10-31 04:16:08', NULL, NULL),
(370, 'TAMIL NADU DR. AMBEDKAR LAW UNIVERSITY, CHENNAI', '1', '2022-10-31 04:16:17', '2022-10-31 04:16:17', NULL, NULL),
(371, 'TANTIA UNIVERSITY, SRI GANGANAGAR, RAJASTHAN', '1', '2022-10-31 04:16:29', '2022-10-31 04:16:29', NULL, NULL),
(372, 'TECHNO INDIA UNIVERSITY, SALT LAKE, KOLKATA', '1', '2022-10-31 04:16:41', '2022-10-31 04:16:41', NULL, NULL),
(373, 'TEERTHANKER MAHAVEER UNIVERSITY MORADABAD, UP.', '1', '2022-10-31 04:16:50', '2022-10-31 04:16:50', NULL, NULL),
(374, 'TELENGANA UNIVERSITY, NIZAMABAD', '1', '2022-10-31 04:17:00', '2022-10-31 04:17:00', NULL, NULL),
(375, 'THE GLOCAL UNIVERSITY,SAHARANPUR, U.P.', '1', '2022-10-31 04:17:13', '2022-10-31 04:17:13', NULL, NULL),
(376, 'THE NEOTIA UNIVERSITY,KOLKATA', '1', '2022-10-31 04:17:27', '2022-10-31 04:17:27', NULL, NULL),
(377, 'THE NORTHCAP UNIVERSITY(Old name ITM UNIVERSITY), GURGAON', '1', '2022-10-31 04:17:37', '2022-10-31 04:17:37', NULL, NULL),
(378, 'THE SISTER NIVEDITA UNIVERSITY, KOLKATA', '1', '2022-10-31 04:17:50', '2022-10-31 04:17:50', NULL, NULL),
(379, 'THE ZAMIA HAMDARD UNIVERSITY,HAMDARD NAGAR,NEW DELHI', '1', '2022-10-31 04:17:59', '2022-10-31 04:17:59', NULL, NULL),
(380, 'THE TAMIL NADU NATIONAL LAW SCHOOL, THIRUCHIRPPALLI', '1', '2022-10-31 04:18:10', '2022-10-31 04:18:10', NULL, NULL),
(381, 'THEB ASSAM ROYAL GLOBAL	UNIVERSITY,GUWAHATI,ASSAM', '1', '2022-10-31 04:18:25', '2022-10-31 04:18:25', NULL, NULL),
(382, 'TILAK MAHARASTRA VIDYAPEETH, PUNE', '1', '2022-10-31 04:18:36', '2022-10-31 04:18:36', NULL, NULL),
(383, 'TILKA MANJHI BHAGALPUR UNIVERSITY,BHAGALPUR', '1', '2022-10-31 04:18:49', '2022-10-31 04:18:49', NULL, NULL),
(384, 'TRIPURA UNIVERSITY, AGARTALA', '1', '2022-10-31 04:18:59', '2022-10-31 04:18:59', NULL, NULL),
(385, 'UNITED UNIVERSITY,RAWATPUR, PRAYAGRAJ', '1', '2022-10-31 04:19:09', '2022-10-31 04:19:09', NULL, NULL),
(386, 'UNIVERSITY OF ENGINEERING AND MANAGEMENT, KOLKATA', '1', '2022-10-31 04:19:18', '2022-10-31 04:19:18', NULL, NULL),
(387, 'UNIVERSITY OF SCIENCE AND TECHNOLOGY, (USLR), RI-BHOI', '1', '2022-10-31 04:19:26', '2022-10-31 04:19:26', NULL, NULL),
(388, 'UNIVERSITY OF TECHNOLOGY, JAIPUR', '1', '2022-10-31 04:19:35', '2022-10-31 04:19:35', NULL, NULL),
(389, 'UNIVERSITY OF  MYSORE,MYSORE', '1', '2022-10-31 04:19:45', '2022-10-31 04:19:45', NULL, NULL),
(390, 'UNIVERSITY OF JAMMU, JAMMU', '1', '2022-10-31 04:19:54', '2022-10-31 04:19:54', NULL, NULL),
(391, 'UNIVERSITY OF KALYANI,KALYANI', '1', '2022-10-31 04:20:15', '2022-10-31 04:20:15', NULL, NULL),
(392, 'UNIVERSITY OF PETROLEUM AND ENERGY STUDIES,  DEHRADUN', '1', '2022-10-31 04:20:25', '2022-10-31 04:20:25', NULL, NULL),
(393, 'UNIVERSITY GURGAON', '1', '2022-10-31 04:21:03', '2022-10-31 04:21:03', NULL, NULL),
(394, 'Usha Martin University, Ranchi, Jharkhand', '1', '2022-10-31 04:22:13', '2022-10-31 04:22:13', NULL, NULL),
(395, 'UTKAL  UNIVERSITY, BHUBANESHWAR', '1', '2022-10-31 04:22:22', '2022-10-31 04:22:22', NULL, NULL),
(396, 'UTTARAKHAND TECHNICAL UNIVERSITY, DEHRADUN', '1', '2022-10-31 04:22:31', '2022-10-31 04:22:31', NULL, NULL),
(397, 'VEER KUNWAR SINGH UNIVERSITY,ARRAH', '1', '2022-10-31 04:22:42', '2022-10-31 04:22:42', NULL, NULL),
(398, 'VEER NARMAD SOUTH GUJARAT UNIVERSITY,SURAT', '1', '2022-10-31 04:22:52', '2022-10-31 04:22:52', NULL, NULL),
(399, 'VEER BAHADUR SINGH PURVANCHAL UNIVERSITY,JAUNPUR', '1', '2022-10-31 04:23:02', '2022-10-31 04:23:02', NULL, NULL),
(400, 'VEL TECH RANGARAJAN DR. SAGUNTHALA R&D INSTITUTE OF SCIENCE AND TECHNOLOGY, CHENNAI', '1', '2022-10-31 04:23:11', '2022-10-31 04:23:11', NULL, NULL),
(401, 'VELLORE INSTITUTE OF TECHNOLOGY,INAVOLU,AMRAVATI', '1', '2022-10-31 04:23:59', '2022-10-31 04:23:59', NULL, NULL),
(402, 'VELS Institute of Science, Technology and Advanced Studies\"(VISTAS) VELS University, Chennai', '1', '2022-10-31 04:24:12', '2022-10-31 04:24:12', NULL, NULL),
(403, 'VIDYASAGAR UNIVERSITY,MIDNAPORE', '1', '2022-10-31 04:24:21', '2022-10-31 04:24:21', NULL, NULL),
(404, 'VIGNAN INSTITUTE OF LAW (VIL),GUNTUR,A.P.', '1', '2022-10-31 04:24:30', '2022-10-31 04:24:30', NULL, NULL),
(405, 'VIJAYBHOOMI UNIVERSITY, JAMRUNG, KARJAT, RAIGAD', '1', '2022-10-31 04:24:40', '2022-10-31 04:24:40', NULL, NULL),
(406, 'VIKRAMA SIMHAPURI UNIVERSITY,NELLORE', '1', '2022-10-31 04:24:53', '2022-10-31 04:24:53', NULL, NULL),
(407, 'Vinayaka Mission’s Research Foundation, Deemed to be University, Kanchipuram, Tamil Nadu', '1', '2022-10-31 04:25:03', '2022-10-31 04:25:03', NULL, NULL),
(408, 'VINOBA BHAVE UNIVERSITY,HAZARI BAGH', '1', '2022-10-31 04:25:12', '2022-10-31 04:25:12', NULL, NULL),
(409, 'VISHWAKARMA UNIVERSITY, LAXMINAGAR, PUNE', '1', '2022-10-31 04:26:56', '2022-10-31 04:26:56', NULL, NULL),
(410, 'VIT UNIVERSITY, VELLORE', '1', '2022-10-31 04:27:22', '2022-10-31 04:27:22', NULL, NULL),
(411, 'VIVEKANANDA GLOBAL UNIVERSITY, JAIPUR, (22.10.16)', '1', '2022-10-31 04:27:39', '2022-10-31 04:27:39', NULL, NULL),
(412, 'WEST BENGAL NATIONAL UNIVERSITY OF JURIDICIAL SCIENCES, KOLKATA', '1', '2022-10-31 04:27:56', '2022-10-31 04:27:56', NULL, NULL),
(413, 'WEST BENGAL STATE UNIVERSITY, 24 PARGANAS,BARASAT', '1', '2022-10-31 04:28:05', '2022-10-31 04:28:05', NULL, NULL),
(414, 'XAVIER UNIVERSITY, BHUBANESWAR', '1', '2022-10-31 04:28:13', '2022-10-31 04:28:13', NULL, NULL),
(415, 'YBN University, Ranchi, Jharkhand', '1', '2022-10-31 04:28:21', '2022-10-31 04:28:21', NULL, NULL),
(416, 'YOGI VEMANA UNIVERSITY,KADAPA', '1', '2022-10-31 04:28:32', '2022-11-19 06:40:52', NULL, 'yogiuniversity@gmail.com'),
(418, 'RENAISSANCE	UNIVERSITY, INDORE', '1', '2022-11-21 06:04:06', '2022-11-21 06:04:06', NULL, 'admin@gmail.com'),
(419, 'SHREE	GURUGOBINDSINGH TRICENTENARY	(SGT  UNIVERSITY),	GURGAON', '1', '2022-11-21 06:06:31', '2022-11-21 06:06:31', NULL, 'thapanitish149@gmail.com'),
(420, 'NLU', '1', '2022-11-21 06:07:43', '2022-11-21 06:07:43', NULL, 'admin1@gmail.com'),
(421, 'SAGE UNIVERSITY,	KAILODKARTEL, INDORE, MADHYA	 PRADESH', '1', '2022-11-21 06:10:10', '2022-11-21 06:10:10', NULL, 'admin2@gmail.com'),
(422, 'SHOOLINI	UNIVERSITY   OF	 BIOTECHNOLOGY	AND  MANAGEMENT SCIENCE,	SOLAN', '1', '2022-11-21 06:32:26', '2022-11-21 06:32:26', NULL, 'thapan197@gmail.com'),
(423, 'SRI	SATYA SAI UNIVERSITY OF TECHNOLOGY AND MEDICAL  SCIENCES, SEHORE,MADHYA	PRADESH', '1', '2022-11-22 00:39:19', '2022-11-22 00:39:19', NULL, 'admin3@gmail.com'),
(424, 'SRI	SATYA SAI UNIVERSITY OF  TECHNOLOGY	AND MEDICAL SCIENCES,SEHORE,MADHYA PRADESH', '1', '2022-11-22 00:43:14', '2022-11-22 00:43:14', NULL, 'admin78@gmail.com'),
(425, 'SARVEPALLI RADHAKRISHNAN	 UNIVERSITY, BHOPAL', '1', '2022-11-22 00:46:30', '2022-11-22 00:46:30', NULL, 'admin4@gmail.com'),
(426, 'SRI	KRISHNA UNIVERSITY, CHHATARPUR', '1', '2022-11-22 00:50:50', '2022-11-22 00:50:50', NULL, 'admin5@gmail.com'),
(427, 'SWAMI	VIVEKANAND  UNIVERSITY, SAGAR', '1', '2022-11-22 00:56:27', '2022-11-22 00:56:27', NULL, 'admin6@gmail.com'),
(428, 'VIKRAM UNIVERSITY, UJJAIN', '1', '2022-11-22 00:58:21', '2022-11-22 00:58:21', NULL, 'admin7@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applicant_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `adhaarno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permanent_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correspondence_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2' COMMENT '1 for Admin, 2 for User',
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `applicant_name`, `father_name`, `email`, `mobile_number`, `email_verified_at`, `category`, `nationality`, `country`, `state`, `city`, `district`, `date_of_birth`, `adhaarno`, `password`, `remember_token`, `created_at`, `updated_at`, `permanent_address`, `correspondence_address`, `user_type`, `profile_pic`, `sign`) VALUES
(4, 'demo', 'demodemo', 'dishantthakurhp11@gmail.com', '1234569870', NULL, '1', 'India', NULL, 'Punjab', 'Mohali', 'Mohali', '2022-10-19', '512051578542', '$2y$10$4XNJ0ve5DKOSRQzKBJhjBehimCzp.vx97n6.S7n1DyjMhPK8EsKaS', NULL, '2022-10-01 06:50:48', '2022-10-01 06:50:48', 'mohali', 'mohali', '2', NULL, NULL),
(5, 'Manish', 'Isham Singh', 'mpal93727@gmail.com', '8607533928', NULL, '1', 'India', NULL, 'Haryana', 'Karnal', 'Karnal', '2000-05-12', '123456789456', '$2y$10$4XNJ0ve5DKOSRQzKBJhjBehimCzp.vx97n6.S7n1DyjMhPK8EsKaS', NULL, '2022-10-12 01:29:01', '2022-10-12 01:29:01', 'Karnal', 'Karnal', '2', NULL, NULL),
(6, 'werbrthbrt', 'ytnytmnuymuy', 'dishant@gmail.com', '4 3543456456456454', NULL, '2', 'India', NULL, 'Punjab', 'Mohali', 'Mohali', '2022-10-05', '512051578547', '$2y$10$4XNJ0ve5DKOSRQzKBJhjBehimCzp.vx97n6.S7n1DyjMhPK8EsKaS', NULL, '2022-10-12 01:34:53', '2022-10-12 01:34:53', 'nhgjmnyjm', '4565rthb5hbnh nghg', '2', NULL, NULL),
(7, 'Admin', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$4XNJ0ve5DKOSRQzKBJhjBehimCzp.vx97n6.S7n1DyjMhPK8EsKaS', NULL, '2022-10-21 22:37:07', '2022-10-21 22:37:07', NULL, NULL, '1', NULL, NULL),
(8, 'Manny', 'Isham', 'manish.pal@slinfy.com', '8607533927', NULL, '1', 'India', NULL, 'Haryana', 'Karnal', 'Karnal', '2000-05-13', '124578451245', '$2y$10$D0hjocBwogIPpeZqbWEGMeYH37s0vhgF3/hqXhCX7DBvD6C1FnQx6', NULL, '2022-10-27 03:25:40', '2022-10-27 03:25:40', 'karnal', 'karnal', '2', NULL, NULL),
(10, 'TARUNVIR SINGH', 'KARANJIT SINGH', 'tarunvirsingh12345@gmail.com', '7814319503', NULL, '1', 'India', NULL, 'punjab', 'mohali', 'mohali', '2004-10-27', '695093882089', '$2y$10$Mj/Im4rJMMtkssks6mC2Vuu3APsxP5qBtAkIM6xIYj3KRIo0uk6gO', NULL, '2022-10-27 05:53:15', '2022-10-27 05:53:15', '# 65 sector 77 mohali', '# 65 sector 77 mohali', '2', NULL, NULL),
(11, 'Harsh', 'Arsh', 'solitairereact@gmail.com', '9865986598', NULL, '1', 'India', NULL, 'Haryana', 'Karnal', 'Karnal', '1995-05-13', '111111114478', '$2y$10$c0VHrYdKvfZeAvwwiArFg.bcb04DhjGAF90iGNQdsentpirxOTyle', NULL, '2022-10-30 23:49:48', '2022-10-30 23:49:48', 'karnal', 'karnal', '2', NULL, NULL),
(13, 'PARDEEP SHARMA', 'M.L. SHARMA', 'pardeep.vashisht007@gmail.com', '9855448847', NULL, '1', 'India', NULL, 'CHANDIGARH', 'Chandigarh, India', 'CHANDIGARH', '1984-08-30', '516292100034', '$2y$10$9aivCQk/SWAqTtIPO/3m0OuVD0aXTA87VaWQp/caNUOLOadLEASHq', NULL, '2022-10-31 04:42:36', '2022-10-31 04:42:36', '# 2326/2 Sector 45-C, Chandigarh', '# 2326/2 Sector 45-C, Chandigarh', '2', NULL, NULL),
(14, 'Dishant Thakur', 'Rajender Kumar', 'dishantsolitaire@gmail.com', '8628924100', NULL, '1', 'India', NULL, 'Haryana', 'Karnal', 'Karnal', '2000-02-09', '987654123612', '$2y$10$dMKXUMGIWVUy8hJXXwH9FuB2KZSztPp.uwvuRXmqfK9uOcyytXipO', NULL, '2022-10-31 05:16:14', '2022-10-31 05:16:14', 'haryana', 'haryana', '2', NULL, NULL),
(15, 'test', 'Test', 'varinder.slinfy@gmail.com', '7508068172', NULL, '1', 'India', NULL, 'himachal pradesh', 'Amritsar', 'Test', '2022-10-31', '594673535941', '$2y$10$dzWgfMHKB4h6jHQsvhrIeuQd7yhl676W54L54x8j2mVwQnjFss0Ny', NULL, '2022-10-31 06:14:21', '2022-10-31 06:14:21', 'Test', 'Test', '2', NULL, NULL),
(16, 'MAHINDER SINGH', 'CHARAN SINGH', 'mslakhera@gmail.com', '9217574111', NULL, '1', 'India', NULL, 'CHANDIGARH', 'NAYA GAON (mohali)', 'CHANDIGARH', '1965-09-20', '516292100033', '$2y$10$bPOdAr5JET5XxkoSFJjakuHWJchT0ce.E6.Mk8USeXWBzvzbRbRuC', NULL, '2022-11-19 02:11:39', '2022-11-19 02:11:39', 'naya gaon', 'nayagaon', '2', NULL, NULL),
(17, 'Dishant Thakur', 'Rajender Kumar', 'dishantslinfy@gmail.com', '1236548571', NULL, '1', 'India', NULL, 'Himachal Pradesh', 'Arki', 'Solan', '2001-10-28', '321654987452', '$2y$10$ZNdHh69A8MlLUbl1QJ0.fug5I6DTUS/n/8g9IXMtxFonyLJr6BeI6', NULL, '2022-11-19 06:21:32', '2022-11-19 06:21:32', 'Arki', 'Mohali', '2', '98692659fbfb75e4862552c5b5fce9e7.jpg', 'df17fc36ac865257d3399a9fd72b8c3f.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affidavit_forms`
--
ALTER TABLE `affidavit_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_forms`
--
ALTER TABLE `application_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certify_forms`
--
ALTER TABLE `certify_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `declaration_forms`
--
ALTER TABLE `declaration_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_uploads`
--
ALTER TABLE `document_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `official_reports`
--
ALTER TABLE `official_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `signatures`
--
ALTER TABLE `signatures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tatkaal_fees`
--
ALTER TABLE `tatkaal_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `undertakings`
--
ALTER TABLE `undertakings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_number_unique` (`mobile_number`),
  ADD UNIQUE KEY `users_adhaarno_unique` (`adhaarno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affidavit_forms`
--
ALTER TABLE `affidavit_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `application_forms`
--
ALTER TABLE `application_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `certify_forms`
--
ALTER TABLE `certify_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;

--
-- AUTO_INCREMENT for table `declaration_forms`
--
ALTER TABLE `declaration_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `document_uploads`
--
ALTER TABLE `document_uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `official_reports`
--
ALTER TABLE `official_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signatures`
--
ALTER TABLE `signatures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tatkaal_fees`
--
ALTER TABLE `tatkaal_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `undertakings`
--
ALTER TABLE `undertakings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=429;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
