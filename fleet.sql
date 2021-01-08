-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 11:53 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fleet`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_settings`
--

CREATE TABLE `account_settings` (
  `as_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `account_name` text DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `address2` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `state_province_region` text DEFAULT NULL,
  `zip_postal_code` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `phone_number` text DEFAULT NULL,
  `industry` text DEFAULT NULL,
  `currency` text DEFAULT NULL,
  `short_date_format` text DEFAULT NULL,
  `time_format` text DEFAULT NULL,
  `time_zone` text DEFAULT NULL,
  `usage` text DEFAULT NULL,
  `fuel_volume` text DEFAULT NULL,
  `system_of_measurement` text DEFAULT NULL,
  `tax_free_labor` text DEFAULT NULL,
  `secondary_tax` text DEFAULT NULL,
  `default_tax1` text DEFAULT NULL,
  `default_tax2` text DEFAULT NULL,
  `default_tax_type` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `acknowledge_recall`
--

CREATE TABLE `acknowledge_recall` (
  `ar_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `add_multiple_service_reminders`
--

CREATE TABLE `add_multiple_service_reminders` (
  `amsr_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vehicle_service_task_id` int(11) DEFAULT NULL,
  `vehicle_details_id` int(11) DEFAULT NULL,
  `vehicle` text DEFAULT NULL,
  `service_task` text DEFAULT NULL,
  `primary_meter_interval` text DEFAULT NULL,
  `secondary_meter_interval` text DEFAULT NULL,
  `time_interval` text DEFAULT NULL,
  `time_interval_measurement` text DEFAULT NULL,
  `meter_threshold` text DEFAULT NULL,
  `secondary_meter_threshold` text DEFAULT NULL,
  `time_thrshold` text DEFAULT NULL,
  `time_threshold_measurement` text DEFAULT NULL,
  `email_notifications` text DEFAULT NULL,
  `subscribed_users` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `add_multiple_service_renewals_reminders`
--

CREATE TABLE `add_multiple_service_renewals_reminders` (
  `amsrr_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vehicle` text DEFAULT NULL,
  `renewal_type` text DEFAULT NULL,
  `due_date` text DEFAULT NULL,
  `time_threshold` text DEFAULT NULL,
  `time_threshold_measurement` text DEFAULT NULL,
  `subscribed_users` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `add_multiple_vehicles`
--

CREATE TABLE `add_multiple_vehicles` (
  `multiple_vehicles_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vehicle_name` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `assignments_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vehicle_details_id` int(11) DEFAULT NULL,
  `bi_id` int(11) DEFAULT NULL,
  `vehicle` text DEFAULT NULL,
  `operator` text DEFAULT NULL,
  `start_date_time` text DEFAULT NULL,
  `starting_odometer` text DEFAULT NULL,
  `end_date_time` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `basic_information`
--

CREATE TABLE `basic_information` (
  `bi_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` text DEFAULT NULL,
  `middle_name` text DEFAULT NULL,
  `last_name` text DEFAULT NULL,
  `group` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `operator` text DEFAULT NULL,
  `employee` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic_information`
--

INSERT INTO `basic_information` (`bi_id`, `user_id`, `first_name`, `middle_name`, `last_name`, `group`, `email`, `operator`, `employee`, `photo`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'Md. ', 'Imran', 'Hossain', '1', 'mdimranhossain985@gmail.com', 'on', 'on', 'http://localhost/fleet_v0//fleet_module/user_management/images/10948.jpg', '2020-12-26 10:54:10', NULL, '0'),
(2, 1, 'fdfdasd', 'erwq', '', '', '', 'off', 'off', 'http://localhost/fleet_v0/fleet_module/user_management/images/pexels-photo-116675.jpeg', '2020-12-28 10:50:41', '2020-12-29 09:42:31', '0'),
(3, 1, 'wrewrewre', 'ewretretre', 'tryrtyre', '3', 'ertetrt', 'off', 'off', 'http://localhost/fleet_v0/fleet_module/user_management/images/a65fb6eba2284743902630ee8f8262d6.jpg', '2020-12-28 10:50:54', '2020-12-29 09:45:34', '0'),
(4, 1, '', '', '', '', '', 'off', 'off', '', '2020-12-28 11:53:12', NULL, '0'),
(5, 1, '', '', '', '', '', 'off', 'off', '', '2020-12-28 11:53:35', NULL, '0'),
(6, 1, '', '', '', '', '', 'off', 'off', '', '2020-12-28 11:53:50', NULL, '0'),
(7, 1, '', '', '', '', '', 'off', 'off', '', '2020-12-28 11:57:19', NULL, '0'),
(8, 1, '', '', '', '', '', 'off', 'off', '', '2020-12-28 12:01:51', '2020-12-29 07:30:41', '0'),
(9, 1, '', '', '', '', 'Master User', 'off', 'off', '', '2020-12-28 12:02:38', NULL, '0'),
(10, 1, 'cxxxvvdf', '', '', '', 'Master User', 'off', 'off', '', '2020-12-28 12:02:56', '2020-12-29 09:42:00', '0'),
(11, 1, 'adsf', 'adsf', 'asdf', '', '', 'off', 'off', '', '2020-12-28 12:05:22', '2020-12-29 10:08:50', '0'),
(12, 1, '', '', '', '', '', 'off', 'off', '', '2020-12-28 12:05:40', '2020-12-28 12:08:29', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contact_information`
--

CREATE TABLE `contact_information` (
  `ci_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `phone_numbers` text DEFAULT NULL,
  `street_address` text DEFAULT NULL,
  `second_address` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `state_province_region` text DEFAULT NULL,
  `zip_postal_code` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_information`
--

INSERT INTO `contact_information` (`ci_id`, `user_id`, `phone_numbers`, `street_address`, `second_address`, `city`, `state_province_region`, `zip_postal_code`, `country`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, '', '', '', '', '', '', 'Afganistan', '2020-12-26 10:54:10', NULL, '0'),
(2, 1, '', '', '', '', '', '', '', '2020-12-28 10:50:41', '2020-12-29 09:42:31', '0'),
(3, 1, '', '', '', '', '', '', '', '2020-12-28 10:50:54', '2020-12-29 09:45:20', '0'),
(4, 1, '', '', '', '', '', '', '', '2020-12-28 11:53:12', NULL, '0'),
(5, 1, '', '', '', '', '', '', '', '2020-12-28 11:53:35', NULL, '0'),
(6, 1, '', '', '', '', '', '', '', '2020-12-28 11:53:50', NULL, '0'),
(7, 1, '', '', '', '', '', '', '', '2020-12-28 12:02:56', NULL, '0'),
(8, 1, '', '', '', '', '', '', '', '2020-12-28 12:05:22', '2020-12-29 07:30:41', '0'),
(9, 1, '', '', '', '', '', '', '', '2020-12-28 12:05:40', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `doc_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `upload_document` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expense_history`
--

CREATE TABLE `expense_history` (
  `eh_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vehicle_details_id` int(11) DEFAULT NULL,
  `vendors_id` int(11) DEFAULT NULL,
  `vehicle` text DEFAULT NULL,
  `expense_type` text DEFAULT NULL,
  `amount` text DEFAULT NULL,
  `start_date` text DEFAULT NULL,
  `end_date` text DEFAULT NULL,
  `frequency` text DEFAULT NULL,
  `vendor` text DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `document` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense_history`
--

INSERT INTO `expense_history` (`eh_id`, `user_id`, `vehicle_details_id`, `vendors_id`, `vehicle`, `expense_type`, `amount`, `start_date`, `end_date`, `frequency`, `vendor`, `notes`, `photo`, `document`, `comment`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, NULL, NULL, '1', '3', 'adsf', '2020-12-23', '2021-01-09', '', '', 'asdf adsf', 'http://localhost/fleet_v0//fleet_module/expense_history/images/122664797_203426424500416_2163948253324778477_o.jpg', 'http://localhost/fleet_v0//fleet_module/expense_history/images/MOU (5).pdf', 'adsf', '2020-12-26 10:31:34', '2020-12-26 10:32:28', '0'),
(2, 1, NULL, NULL, '2', '3', 'adsf', '2020-12-16', '2020-12-24', '4', '2', 'adsf', 'http://localhost/fleet_v0//fleet_module/expense_history/images/ed0bef14-df56-4ade-a46d-fe441f354fc9-160102145913-thumbnail-4.jpg', 'http://localhost/fleet_v0//fleet_module/expense_history/images/121433477_410784760317540_670882756462770629_n.jpg', 'adsf', '2020-12-27 09:05:13', NULL, '0'),
(3, 1, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '2020-12-27 09:08:03', NULL, '0'),
(4, 1, NULL, NULL, '2', '3', '', '', '', '', '', '', '', '', '', '2020-12-27 09:09:01', NULL, '0'),
(5, 1, NULL, NULL, '2', '3', '456', '2020-12-16', '2020-12-30', '3', '2', 'adsf', 'http://localhost/fleet_v0//fleet_module/expense_history/images/19145928_10212236786067216_9185288327943088140_n.jpg', 'http://localhost/fleet_v0//fleet_module/expense_history/images/Mini Parcel T&C for Merchant. (1).pdf', 'gfhjghf asdf', '2020-12-27 09:09:10', '2020-12-27 09:10:08', '0'),
(6, 1, NULL, NULL, '3', '3', '564564', '2020-12-16', '2020-12-24', '7', '7', 'dsfdsf', 'http://localhost/fleet_v0/fleet_module/expense_history/images/122045127_102302928345080_2657155251698806753_n.jpg', 'http://localhost/fleet_v0/fleet_module/expense_history/images/123136237_3243149682420518_3694333862559848263_n.jpg', 'sdfsa', '2020-12-27 12:55:15', '2020-12-29 10:21:14', '0'),
(7, 1, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '2020-12-27 12:57:28', '2020-12-28 10:50:19', '0'),
(8, 1, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '2020-12-27 12:57:46', NULL, '0'),
(9, 1, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '2020-12-27 12:57:51', NULL, '0'),
(10, 1, NULL, NULL, '2', '3', '7878', '0008-05-04', '2020-06-04', '2', '2', 'rfdsfdsf', 'http://localhost/fleet_v0/fleet_module/expense_history/images/pexels-photo-116675.jpeg', 'http://localhost/fleet_v0/fleet_module/expense_history/images/122045127_102302928345080_2657155251698806753_n.jpg', 'ddddddddddd', '2020-12-27 12:58:01', '2020-12-29 07:33:12', '0'),
(11, 1, NULL, NULL, '3', '3', '435', '2020-12-24', '2020-12-24', '5', '7', '', 'http://localhost/fleet_v0/fleet_module/expense_history/images/ed0bef14-df56-4ade-a46d-fe441f354fc9-160102145913-thumbnail-4.jpg', 'http://localhost/fleet_v0/fleet_module/expense_history/images/121094314_4511696652234930_4539055047007213753_n.jpg', 'asdf', '2020-12-29 10:18:54', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `farm_user`
--

CREATE TABLE `farm_user` (
  `farm_user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `permission_id` int(11) DEFAULT NULL,
  `full_name` text NOT NULL,
  `farm_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_update` timestamp NULL DEFAULT NULL,
  `user_delete` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farm_user`
--

INSERT INTO `farm_user` (`farm_user_id`, `user_name`, `user_email`, `user_password`, `permission_id`, `full_name`, `farm_id`, `employee_id`, `user_id`, `user_created_at`, `user_update`, `user_delete`) VALUES
(1, 'Master User', 'mdimranhossain985@gmail.com', '$2a$04$g9fRQPOq.H/I7rxgSO38SeF7CYwJixtMFIFXTwCso1b7UIc83q4CS', 1, 'admin', 1, 1, 1, '2020-12-24 09:38:30', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fault_rules`
--

CREATE TABLE `fault_rules` (
  `fr_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `code` text DEFAULT NULL,
  `fault_name` text DEFAULT NULL,
  `fault_description` text DEFAULT NULL,
  `priority_handling` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fuel_entry`
--

CREATE TABLE `fuel_entry` (
  `fe_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vehicle_details_id` int(11) DEFAULT NULL,
  `vendors_id` int(11) DEFAULT NULL,
  `vehicle` text DEFAULT NULL,
  `date` text DEFAULT NULL,
  `date_time` text DEFAULT NULL,
  `odometer` text DEFAULT NULL,
  `price_unit` text DEFAULT NULL,
  `fuel_type_grade` text DEFAULT NULL,
  `vendor_name` text DEFAULT NULL,
  `reference` text DEFAULT NULL,
  `personal` text DEFAULT NULL,
  `partial_fuel_up` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `document` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fuel_entry`
--

INSERT INTO `fuel_entry` (`fe_id`, `user_id`, `vehicle_details_id`, `vendors_id`, `vehicle`, `date`, `date_time`, `odometer`, `price_unit`, `fuel_type_grade`, `vendor_name`, `reference`, `personal`, `partial_fuel_up`, `photo`, `document`, `comment`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, NULL, NULL, '2', '2020-12-22', '07:08', 'adsf', 'adsf', '3', '1', 'adsf', 'on', 'off', 'http://localhost/fleet_v0//fleet_module/fuel/images/83736385_2241062136199851_4705724808409645056_o.jpg', 'http://localhost/fleet_v0//fleet_module/fuel/images/122117417_5222931567732767_7033113221491688622_o.jpg', 'adsfasdff', '2020-12-26 10:36:11', '2020-12-27 08:17:58', '0'),
(2, 1, NULL, NULL, '3', '2020-12-15', '05:45', '', '', '', '', '', 'off', 'off', '', '', '', '2020-12-27 09:29:28', '2020-12-29 10:06:57', '0'),
(3, 1, NULL, NULL, '2', '2020-12-08', '', '', '', '5', '5', '', 'off', 'off', '', '', '', '2020-12-27 09:30:07', NULL, '0'),
(4, 1, NULL, NULL, '2', '2020-12-29', '08:07', 'adsf SAD', 'asdf', '5', '5', 'adsf', 'on', 'on', 'http://localhost/fleet_v0//fleet_module/fuel/images/121573189_1922738097875475_2198111953944009350_o.jpg', 'http://localhost/fleet_v0//fleet_module/fuel/images/MOU (4).pdf', 'adsf', '2020-12-27 09:45:55', '2020-12-27 09:46:29', '0'),
(5, 1, NULL, NULL, '2', '2020-12-22', '08:09', 'adsf', 'adsf', '5', '6', 'adsf', 'off', 'off', '', '', '', '2020-12-27 10:17:34', NULL, '0'),
(6, 1, NULL, NULL, '2', '2020-12-17', '18:05', '', '', '', '', '', 'off', 'off', '', '', '', '2020-12-27 10:17:43', '2020-12-29 10:07:23', '0'),
(7, 1, NULL, NULL, '3', '2020-12-18', '08:04', '', '', '', '', '', 'off', 'off', '', '', '', '2020-12-29 10:25:45', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `import_contact_renewals_reminders`
--

CREATE TABLE `import_contact_renewals_reminders` (
  `icrr_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `type` text DEFAULT NULL,
  `delimiter` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `import_data`
--

CREATE TABLE `import_data` (
  `import_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `file` text DEFAULT NULL,
  `type` text DEFAULT NULL,
  `delimiter` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `import_issues`
--

CREATE TABLE `import_issues` (
  `import_issues_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `file` text DEFAULT NULL,
  `type` text DEFAULT NULL,
  `delimiter` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `import_service_reminders`
--

CREATE TABLE `import_service_reminders` (
  `isr_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `file` text DEFAULT NULL,
  `type` text DEFAULT NULL,
  `delimiter` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `import_vehicles`
--

CREATE TABLE `import_vehicles` (
  `import_vehicles_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` text DEFAULT NULL,
  `delimeter` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `import_vendors`
--

CREATE TABLE `import_vendors` (
  `iv_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `type` text DEFAULT NULL,
  `delimiter` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inspection_form`
--

CREATE TABLE `inspection_form` (
  `if_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `items_template` text DEFAULT NULL,
  `color` text DEFAULT NULL,
  `enable_location_exception_tracking` text DEFAULT NULL,
  `prevent_use_of_stored_photos` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspection_form`
--

INSERT INTO `inspection_form` (`if_id`, `user_id`, `title`, `description`, `items_template`, `color`, `enable_location_exception_tracking`, `prevent_use_of_stored_photos`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'adsf asdf', 'adsf asdf', '2', '7', 'on', 'on', '2020-12-26 12:36:31', NULL, '0'),
(2, 1, 'adsf', 'asdf', '2', '8', 'on', 'on', '2020-12-26 12:36:53', NULL, '0'),
(3, 1, 'adsf', 'adsf', '2', '7', 'on', 'on', '2020-12-27 09:44:22', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `inspection_forms_color`
--

CREATE TABLE `inspection_forms_color` (
  `color_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `color` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspection_forms_color`
--

INSERT INTO `inspection_forms_color` (`color_id`, `user_id`, `color`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'asdf', '2020-12-26 04:58:01', NULL, '0'),
(2, 1, 'adsf', '2020-12-26 04:58:07', '2020-12-26 04:59:58', '1'),
(3, 1, 'adsf', '2020-12-26 04:58:12', '2020-12-26 04:59:20', '1'),
(4, 1, 'asdf adsf', '2020-12-26 04:58:46', NULL, '0'),
(5, 1, 'adsf', '2020-12-26 04:59:01', '2020-12-26 04:59:16', '1'),
(6, 1, 'asdf', '2020-12-26 04:59:08', '2020-12-26 04:59:13', '1'),
(7, 1, 'adsf', '2020-12-26 05:05:53', NULL, '0'),
(8, 1, ' adsf', '2020-12-26 05:05:57', NULL, '0'),
(9, 1, 'adf', '2020-12-26 10:44:34', NULL, '0'),
(10, 1, 'yyyyy', '2020-12-28 11:23:31', NULL, '0'),
(11, 1, 'dddddddd', '2020-12-29 09:24:34', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `inspection_forms_items_template`
--

CREATE TABLE `inspection_forms_items_template` (
  `items_template_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `items_template` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspection_forms_items_template`
--

INSERT INTO `inspection_forms_items_template` (`items_template_id`, `user_id`, `items_template`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'jgghg derwer', '2020-12-26 04:43:32', '2020-12-26 04:43:55', '1'),
(2, 1, 'adsf dffffs', '2020-12-26 10:44:23', NULL, '0'),
(3, 1, 'bbbbbbbbb', '2020-12-28 10:06:37', NULL, '0'),
(4, 1, 'dddddd ghrt', '2020-12-28 10:07:11', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `inspection_history`
--

CREATE TABLE `inspection_history` (
  `ih_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vehicle_details_id` int(11) DEFAULT NULL,
  `vehicle` text DEFAULT NULL,
  `odometer_reading` text DEFAULT NULL,
  `odometer_reading_remarks` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `photo_remarks` text DEFAULT NULL,
  `engine` text DEFAULT NULL,
  `engine_remarks` text DEFAULT NULL,
  `oil_life_left` text DEFAULT NULL,
  `oil_life_left_remarks` text DEFAULT NULL,
  `fuel_level` text DEFAULT NULL,
  `fuel_level_remarks` text DEFAULT NULL,
  `transmission` text DEFAULT NULL,
  `transmission_level_remarks` text DEFAULT NULL,
  `clutch` text DEFAULT NULL,
  `clutch_remarks` text DEFAULT NULL,
  `steering` text DEFAULT NULL,
  `steering_remarks` text DEFAULT NULL,
  `horn` text DEFAULT NULL,
  `horn_remarks` text DEFAULT NULL,
  `windshield_and_wipers_washers` text DEFAULT NULL,
  `windshield_and_wipers_washers_remarks` text DEFAULT NULL,
  `rear_visoin_mirrors` text DEFAULT NULL,
  `rear_visoin_mirrors_remarks` text DEFAULT NULL,
  `lighting_devices_and_reflectors` text DEFAULT NULL,
  `lighting_devices_and_reflectors_remarks` text DEFAULT NULL,
  `parking_brake` text DEFAULT NULL,
  `parking_brake_remarks` text DEFAULT NULL,
  `service_brakes` text DEFAULT NULL,
  `service_brakes_remarks` text DEFAULT NULL,
  `air_lines_light_lines` text DEFAULT NULL,
  `air_lines_light_lines_remarks` text DEFAULT NULL,
  `coupling_devices` text DEFAULT NULL,
  `coupling_devices_remarks` text DEFAULT NULL,
  `tires` text DEFAULT NULL,
  `tires_remarks` text DEFAULT NULL,
  `wheels_and_rims` text DEFAULT NULL,
  `wheels_and_rims_remarks` text DEFAULT NULL,
  `emergency_equipment` text DEFAULT NULL,
  `emergency_equipment_remarks` text DEFAULT NULL,
  `vehicle_condition_ok` text DEFAULT NULL,
  `vehicle_condition_ok_remarks` text DEFAULT NULL,
  `reviewing_drivers_signature` text DEFAULT NULL,
  `reviewing_drivers_signature_remarks` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspection_history`
--

INSERT INTO `inspection_history` (`ih_id`, `user_id`, `vehicle_details_id`, `vehicle`, `odometer_reading`, `odometer_reading_remarks`, `photo`, `photo_remarks`, `engine`, `engine_remarks`, `oil_life_left`, `oil_life_left_remarks`, `fuel_level`, `fuel_level_remarks`, `transmission`, `transmission_level_remarks`, `clutch`, `clutch_remarks`, `steering`, `steering_remarks`, `horn`, `horn_remarks`, `windshield_and_wipers_washers`, `windshield_and_wipers_washers_remarks`, `rear_visoin_mirrors`, `rear_visoin_mirrors_remarks`, `lighting_devices_and_reflectors`, `lighting_devices_and_reflectors_remarks`, `parking_brake`, `parking_brake_remarks`, `service_brakes`, `service_brakes_remarks`, `air_lines_light_lines`, `air_lines_light_lines_remarks`, `coupling_devices`, `coupling_devices_remarks`, `tires`, `tires_remarks`, `wheels_and_rims`, `wheels_and_rims_remarks`, `emergency_equipment`, `emergency_equipment_remarks`, `vehicle_condition_ok`, `vehicle_condition_ok_remarks`, `reviewing_drivers_signature`, `reviewing_drivers_signature_remarks`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, NULL, '1', 'asdf', 'asdf', 'http://localhost/fleet_v0//fleet_module/inspection_history/images/19145928_10212236786067216_9185288327943088140_n.jpg', 'asdf', 'Pass', 'adsf', 'adsf', 'asdf', '', 'adsf', 'Pass', 'asdf', 'Pass', 'adsf', 'Pass', 'adsf', 'Pass', 'asdf', 'option1', 'asdf', 'Pass', 'asdf', 'Pass', 'asdf', 'Pass', 'asdf', 'Pass', 'asdf', 'Pass', 'asdf', 'Pass', 'asdf', 'Pass', 'asdf', 'Pass', 'asdf', 'Pass', 'asdf', '', 'asdf', 'asdf', 'asdf', '2020-12-26 07:26:31', '2020-12-26 10:50:22', '0'),
(2, 1, NULL, '1', 'adsf', 'adsf', 'http://localhost/fleet_v0//fleet_module/inspection_history/images/122117417_5222931567732767_7033113221491688622_o.jpg', '', 'Pass', '', '', '', '', '', 'Pass', '', 'Pass', '', 'Pass', 'asdf', 'Pass', 'adsf', 'Fail', 'adsf', 'Fail', 'adsf', 'Pass', 'adf', 'Fail', 'adsf', 'Pass', 'adsf', 'Pass', 'adsf', 'Fail', 'asdf', 'Fail', 'asdf', 'Pass', '', 'Pass', '', '', '', '', '', '2020-12-26 07:54:12', '2020-12-26 10:51:26', '0'),
(3, 1, NULL, '1', 'asdf', 'asdf', 'http://localhost/fleet_v0//fleet_module/inspection_history/images/121573189_1922738097875475_2198111953944009350_o.jpg', 'adsf', 'Fail', 'asdf', 'asdf', 'adsf', '', 'adsf', 'Fail', 'adsf', 'Pass', 'erty', 'Fail', 'erty', 'Pass', 'erty', 'Fail', 'erty', 'Pass', 'erty', 'Fail', 'rty', 'Pass', 'asdf', 'Fail', 'asdf', 'Pass', 'asdf', 'Fail', 'asdf', 'Pass', 'adsf', 'Fail', 'sdaf', 'Pass', 'asdf', '', 'adsf', 'adsf', 'adsf', '2020-12-26 10:33:24', '2020-12-26 10:34:26', '0'),
(4, 1, NULL, '1', 'adf', 'adf', 'http://localhost/fleet_v0//fleet_module/inspection_history/images/121094314_4511696652234930_4539055047007213753_n.jpg', 'adsf asdf', 'Fail', 'adsf adsf', 'adsf', 'adsf', '2', 'asdf', 'Fail', 'adsf', 'Fail', 'adsf', 'Fail', 'adsf', 'Fail', 'adsf', 'Fail', 'adsf', 'Fail', 'adsf', 'Fail', 'adsf', 'Fail', 'adsf', 'Fail', 'adsf', 'Fail', 'adsf', 'Fail', 'adsf', 'Fail', 'adsf', 'Fail', 'adsf', 'Fail', 'adsf', '2', 'adsf', 'adfs', 'adsf', '2020-12-26 10:46:47', '2020-12-26 10:47:36', '0'),
(5, 1, NULL, '', '', '', 'http://localhost/fleet_v0//fleet_module/inspection_history/images/122435357_203425721167153_919934936016769862_o.jpg', '', 'Fail', '', '', '', '', '', 'Fail', '', 'Fail', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', '', '', '', '', '2020-12-27 09:23:00', '2020-12-28 11:26:22', '0'),
(6, 1, NULL, '2', 'retret', 'ertre', 'http://localhost/fleet_v0/fleet_module/inspection_history/images/122117417_5222931567732767_7033113221491688622_o.jpg', 'ret', 'Fail', 'wert', 'rtytr', 'rty', '3', 'rty', 'Fail', 'reyrt', 'Fail', 'fgh', 'Fail', 'tyr', 'Fail', 'fgh', 'Fail', 'ghjg', 'Fail', 'fghgf', 'Fail', 'dgdf', 'Fail', 'reter', 'Fail', 'dfgre', 'Fail', 'dfgdf', 'Fail', 'rtre', 'Fail', '3432', 'Fail', 'ewrw', 'Fail', 'dsfder', '2', 'ghjghj fghf', 'ytuty', 'ghjg dfgdfg', '2020-12-28 11:00:26', '2020-12-28 11:01:11', '0'),
(7, 1, NULL, '2', '', '', 'http://localhost/fleet_v0//fleet_module/inspection_history/images/121433477_410784760317540_670882756462770629_n.jpg', '', 'Pass', 'dfgfd', '', '', '', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', '', '', '', '', '2020-12-29 05:12:16', NULL, '0'),
(8, 1, NULL, '2', 'sdf', 'asdf', 'http://localhost/fleet_v0//fleet_module/inspection_history/images/MINI FASHION LOGO.jpg', '', 'Pass', '', '', '', '', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', '', '', '', '', '2020-12-29 05:13:54', '2020-12-29 05:17:52', '0'),
(9, 1, NULL, '2', 'sdf', 'dddd', 'http://localhost/fleet_v0//fleet_module/inspection_history/images/ed0bef14-df56-4ade-a46d-fe441f354fc9-160102145913-thumbnail-4.jpg', 'fff', 'Pass', 'dsfsa', 'asdf', 'asdf', '2', 'asdf', 'Pass', 'asdf', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', 'adsf', '3', 'a', 'a', 'asd', '2020-12-29 05:14:27', '2020-12-29 05:19:16', '0'),
(10, 1, NULL, '2', 'asdf', 'adsf', 'http://localhost/cims_v0_1/fleet_module/inspection_history/images/123136237_3243149682420518_3694333862559848263_n.jpg', '', 'Pass', '', '', '', '', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', '', '', '', '', '2020-12-29 05:23:41', NULL, '0'),
(11, 1, NULL, '', 'adsf', '', 'http://localhost/fleet_v0//fleet_module/inspection_history/images/MINI FASHION LOGO.jpg', '', 'Pass', '', '', '', '', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', '', '', '', '', '2020-12-29 05:39:12', NULL, '0'),
(12, 1, NULL, '', 'dfgdf', '', 'http://localhost/fleet_v0//fleet_module/inspection_history/images/pexels-photo-116675.jpeg', '', 'Pass', '', '', '', '', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', '', '', '', '', '2020-12-29 05:40:00', NULL, '0'),
(13, 1, NULL, '', '', '', 'http://localhost/fleet_v0//fleet_module/inspection_history/images/pexels-photo-116675.jpeg', '', 'Pass', '', '', '', '', '', 'Pass', 'dsgfd', 'Pass', 'dsfds', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', '', '', '', '', '2020-12-29 05:40:43', NULL, '0'),
(14, 1, NULL, '', '', '', 'http://localhost/fleet_v0//fleet_module/inspection_history/images/pexels-photo-116675.jpeg', '', 'Pass', '', '', '', '', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', '', '', '', '', '2020-12-29 05:41:23', NULL, '0'),
(15, 1, NULL, '', 'adsf', 'adsf', 'http://localhost/fleet_v0//fleet_module/inspection_history/images/ed0bef14-df56-4ade-a46d-fe441f354fc9-160102145913-thumbnail-4.jpg', '', 'Pass', '', '', '', '', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', '', '', '', '', '2020-12-29 05:44:54', NULL, '0'),
(16, 1, NULL, '', 'asdf', '', 'http://localhost/fleet_v0//fleet_module/inspection_history/images/19145928_10212236786067216_9185288327943088140_n.jpg', '', 'Pass', '', '', '', '', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', '', '', '', '', '2020-12-29 05:45:30', NULL, '0'),
(17, 1, NULL, '', 'adsf', '', 'http://localhost/fleet_v0//fleet_module/inspection_history/images/122435357_203425721167153_919934936016769862_o.jpg', '', 'Pass', '', '', '', '', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', '', '', '', '', '2020-12-29 05:47:07', NULL, '0'),
(18, 1, NULL, '', '', '', 'http://localhost/fleet_v0//fleet_module/inspection_history/images/MINI FASHION LOGO.jpg', '', 'Pass', '', '', '', '', '', 'Pass', '', 'Pass', '', 'Pass', 'sdf', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', '', '', '', '', '2020-12-29 05:48:28', NULL, '0'),
(19, 1, NULL, '', '', '', 'http://localhost/fleet_v0//fleet_module/inspection_history/images/MINI FASHION LOGO.jpg', '', 'Pass', '', '', '', '', '', 'Pass', '', 'Pass', '', 'Pass', 'sdf', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', '', '', '', '', '2020-12-29 05:48:29', NULL, '0'),
(20, 1, NULL, '', '', '', 'http://localhost/fleet_v0//fleet_module/inspection_history/images/ed0bef14-df56-4ade-a46d-fe441f354fc9-160102145913-thumbnail-4.jpg', '', 'Pass', '', '', '', '', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', 'Pass', '', '', '', '', '', '2020-12-29 05:52:47', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `inspection_history_fuel_level`
--

CREATE TABLE `inspection_history_fuel_level` (
  `fuel_level_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fuel_level` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspection_history_fuel_level`
--

INSERT INTO `inspection_history_fuel_level` (`fuel_level_id`, `user_id`, `fuel_level`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'ad', '2020-12-26 04:22:34', '2020-12-26 04:30:15', '1'),
(2, 1, 'adsfasdf', '2020-12-26 10:44:03', NULL, '0'),
(3, 1, 'ddddd', '2020-12-28 10:04:42', NULL, '0'),
(4, 1, 'tttt   ttttttttttt', '2020-12-28 10:04:59', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `inspection_history_vehicle_condition_ok`
--

CREATE TABLE `inspection_history_vehicle_condition_ok` (
  `vehicle_condition_ok_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vehicle_condition_ok` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspection_history_vehicle_condition_ok`
--

INSERT INTO `inspection_history_vehicle_condition_ok` (`vehicle_condition_ok_id`, `user_id`, `vehicle_condition_ok`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'adsf asdf', '2020-12-26 04:39:17', '2020-12-26 04:39:41', '1'),
(2, 1, 'adsf', '2020-12-26 10:44:14', NULL, '0'),
(3, 1, 'jjjjjj', '2020-12-28 10:05:27', NULL, '0'),
(4, 1, 'aaaaaaa', '2020-12-28 10:05:57', NULL, '0'),
(5, 1, 'gg       gggf', '2020-12-29 08:53:08', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `inspection_items`
--

CREATE TABLE `inspection_items` (
  `ii_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `required` text DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `instructions` text DEFAULT NULL,
  `pass_level` text DEFAULT NULL,
  `fail_level` text DEFAULT NULL,
  `remarks_pass` text DEFAULT NULL,
  `remarks_fail` text DEFAULT NULL,
  `passing_range` text DEFAULT NULL,
  `passing_range_end` text DEFAULT NULL,
  `fuel_level_choices` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `integrations`
--

CREATE TABLE `integrations` (
  `integration_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `region` text DEFAULT NULL,
  `fuel_location_exceptions` text DEFAULT NULL,
  `dtc_alerts` text DEFAULT NULL,
  `download_dtc_alerts_hourly` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login_log`
--

CREATE TABLE `login_log` (
  `login_log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `user_role_name` text NOT NULL,
  `visitor_ip` text NOT NULL,
  `visitor_location` text NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `visitor_visit_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_log`
--

INSERT INTO `login_log` (`login_log_id`, `user_id`, `user_name`, `user_role_id`, `user_role_name`, `visitor_ip`, `visitor_location`, `createdate`, `visitor_visit_time`) VALUES
(1, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-24 11:18:38', '2020-12-24'),
(2, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-24 14:34:16', '2020-12-24'),
(3, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-26 03:49:50', '2020-12-26'),
(4, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-26 11:09:47', '2020-12-26'),
(5, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-26 12:03:35', '2020-12-26'),
(6, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-26 12:06:45', '2020-12-26'),
(7, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-27 03:55:26', '2020-12-27'),
(8, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-27 05:48:58', '2020-12-27'),
(9, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-27 05:49:15', '2020-12-27'),
(10, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-27 05:51:29', '2020-12-27'),
(11, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-27 05:51:56', '2020-12-27'),
(12, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-27 05:54:15', '2020-12-27'),
(13, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-27 05:55:20', '2020-12-27'),
(14, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-27 08:59:25', '2020-12-27'),
(15, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-27 09:34:25', '2020-12-27'),
(16, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-27 09:40:20', '2020-12-27'),
(17, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-27 10:50:39', '2020-12-27'),
(18, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-28 04:15:20', '2020-12-28'),
(19, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-28 10:09:40', '2020-12-28'),
(20, 0, 'Master User', 0, '', '::1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-28 10:23:51', '2020-12-28'),
(21, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-28 10:57:44', '2020-12-28'),
(22, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-28 11:11:55', '2020-12-28'),
(23, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-28 11:24:28', '2020-12-28'),
(24, 0, 'Master User', 0, '', '::1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-28 12:02:24', '2020-12-28'),
(25, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-28 12:03:46', '2020-12-28'),
(26, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-28 12:05:05', '2020-12-28'),
(27, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-28 12:11:58', '2020-12-28'),
(28, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-28 12:49:39', '2020-12-28'),
(29, 0, 'Master User', 0, '', '::1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-29 04:00:42', '2020-12-29'),
(30, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-29 04:10:19', '2020-12-29'),
(31, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-29 05:38:03', '2020-12-29'),
(32, 0, 'Master User', 0, '', '127.0.0.1', 'Zip Code : , City : , Division : , Country : , Latitude : , Longitude : ', '2020-12-29 07:15:11', '2020-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `meter_reading`
--

CREATE TABLE `meter_reading` (
  `mr_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vehicle` text DEFAULT NULL,
  `odometer_reading` text DEFAULT NULL,
  `date` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

CREATE TABLE `personal_information` (
  `pi_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `job_title` text NOT NULL,
  `dob` text DEFAULT NULL,
  `employee_number` text DEFAULT NULL,
  `start_date` text DEFAULT NULL,
  `leave_date` text DEFAULT NULL,
  `license_number` text DEFAULT NULL,
  `license_class` text DEFAULT NULL,
  `license_state` text DEFAULT NULL,
  `hourly_labor_rate` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_information`
--

INSERT INTO `personal_information` (`pi_id`, `user_id`, `job_title`, `dob`, `employee_number`, `start_date`, `leave_date`, `license_number`, `license_class`, `license_state`, `hourly_labor_rate`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, '', '', '', '', '', '', '', '', '', '2020-12-26 10:54:10', NULL, '0'),
(2, 1, '', '', '', '', '', '', '', '', '', '2020-12-28 10:50:41', '2020-12-29 09:42:31', '0'),
(3, 1, '', '', '', '', '', '', '', '', '', '2020-12-28 10:50:54', '2020-12-29 09:45:20', '0'),
(4, 1, '', '', '', '', '', '', '', '', '', '2020-12-28 11:53:12', NULL, '0'),
(5, 1, '', '', '', '', '', '', '', '', '', '2020-12-28 11:53:35', NULL, '0'),
(6, 1, '', '', '', '', '', '', '', '', '', '2020-12-28 11:53:50', NULL, '0'),
(7, 1, '', '', '', '', '', '', '', '', '', '2020-12-28 12:02:56', NULL, '0'),
(8, 1, '', '', '', '', '', '', '', '', '', '2020-12-28 12:05:22', '2020-12-29 07:30:41', '0'),
(9, 1, '', '', '', '', '', '', '', '', '', '2020-12-28 12:05:40', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `place_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `place_name` text DEFAULT NULL,
  `place_description` text DEFAULT NULL,
  `geofence_radius` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recalls_details`
--

CREATE TABLE `recalls_details` (
  `rd_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vehicle` text DEFAULT NULL,
  `reported_date` text DEFAULT NULL,
  `recall_code` text DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `labels` text DEFAULT NULL,
  `primary_meter` text DEFAULT NULL,
  `reported_by` text DEFAULT NULL,
  `assigned_to` text DEFAULT NULL,
  `due_date` text DEFAULT NULL,
  `primary_meter_due` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `document` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_entry`
--

CREATE TABLE `service_entry` (
  `se_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vehicle_details_id` int(11) DEFAULT NULL,
  `vendors_id` int(11) DEFAULT NULL,
  `vehicle` text DEFAULT NULL,
  `odometer` text DEFAULT NULL,
  `completion_date` text DEFAULT NULL,
  `start_date` text DEFAULT NULL,
  `vendor` text DEFAULT NULL,
  `reference` text DEFAULT NULL,
  `labels` text DEFAULT NULL,
  `issues` text DEFAULT NULL,
  `add_service_task` text DEFAULT NULL,
  `general_notes` text DEFAULT NULL,
  `labor` text DEFAULT NULL,
  `parts` text DEFAULT NULL,
  `discount` text DEFAULT NULL,
  `tax` text DEFAULT NULL,
  `total` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `document` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_program`
--

CREATE TABLE `service_program` (
  `sp_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `template` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `primary_meter` text DEFAULT NULL,
  `secondary_meter` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_task_and_repeating_schedule`
--

CREATE TABLE `service_task_and_repeating_schedule` (
  `strs_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `service_task` text DEFAULT NULL,
  `set_first_service` text DEFAULT NULL,
  `set_first_service_miles` text DEFAULT NULL,
  `set_first_service_miles_end` text DEFAULT NULL,
  `set_first_service_miles_measurement` text DEFAULT NULL,
  `primary_meter_interval` text DEFAULT NULL,
  `time_interval` text DEFAULT NULL,
  `time_interval_measurement` text DEFAULT NULL,
  `manually_set_next_reminder` text DEFAULT NULL,
  `msnr_miles` text DEFAULT NULL,
  `msnr_date` text DEFAULT NULL,
  `meter_threshold` text DEFAULT NULL,
  `time_threshold` text DEFAULT NULL,
  `time_threshold_measurement` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shop_integration`
--

CREATE TABLE `shop_integration` (
  `si_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `organization_name` text DEFAULT NULL,
  `employer_id_no` text DEFAULT NULL,
  `no_of_vehicles_in_fleet` text DEFAULT NULL,
  `estimated_total_maintenance_spend_per_month` text DEFAULT NULL,
  `street_address` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `zip_code` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone_number` text DEFAULT NULL,
  `company` text DEFAULT NULL,
  `contact_name` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `second_company` text DEFAULT NULL,
  `second_contact_name` text DEFAULT NULL,
  `second_phone` text DEFAULT NULL,
  `third_company` text DEFAULT NULL,
  `third_contact_name` text DEFAULT NULL,
  `third_phone` text DEFAULT NULL,
  `digital_signature` text DEFAULT NULL,
  `type_title` text DEFAULT NULL,
  `agree_terms` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `mobile_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `username` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `time_zone` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_management`
--

CREATE TABLE `user_management` (
  `um_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `time_zone` text DEFAULT NULL,
  `user_type` text DEFAULT NULL,
  `user_operator` text DEFAULT NULL,
  `vehicle_view_update` text DEFAULT NULL,
  `vehicle_view` text DEFAULT NULL,
  `contact_view_update` text DEFAULT NULL,
  `contact_view` text DEFAULT NULL,
  `inspection_form_view` text DEFAULT NULL,
  `manage_user_roles` text DEFAULT NULL,
  `manage_subscription_billing` text DEFAULT NULL,
  `export_account_data` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_management`
--

INSERT INTO `user_management` (`um_id`, `user_id`, `username`, `password`, `time_zone`, `user_type`, `user_operator`, `vehicle_view_update`, `vehicle_view`, `contact_view_update`, `contact_view`, `inspection_form_view`, `manage_user_roles`, `manage_subscription_billing`, `export_account_data`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'asdf', '$2y$10$S2HF9MkBxOOW/udu5NVy1.zHw4Q46kQFoO6nCgC/Qa7gsP3uPmACC', 'asdf', '2', 'Notifications-Only', 'All', 'Some', 'Some', 'All', 'Some', 'on', 'off', 'on', '2020-12-26 10:54:10', NULL, '0'),
(2, 1, 'Master User', '$2y$10$KrXVmF8Q/fRec/BgV1trF.puDi3FDsP59BJqZ01mYCbL3fdTCzo.u', '', '', 'Fleet Manager', 'None', 'None', 'None', 'None', 'None', 'off', 'off', 'off', '2020-12-28 10:50:41', '2020-12-29 09:42:31', '0'),
(3, 1, 'Master User', '$2y$10$HvXP.yiPQRf2stknQbYEB.IwOnyZDFP6g.asWmNsb4W0svwhERKSS', '', '', 'Fleet Manager', 'None', 'None', 'None', 'None', 'None', 'off', 'off', 'off', '2020-12-28 10:50:54', '2020-12-29 09:45:20', '0'),
(4, 1, 'Master User', '', '', '', 'Fleet Manager', 'None', 'None', 'None', 'None', 'None', 'off', 'off', 'off', '2020-12-28 11:53:12', NULL, '0'),
(5, 1, 'Master User', '', '', '', 'Fleet Manager', 'None', 'None', 'None', 'None', 'None', 'off', 'off', 'off', '2020-12-28 11:53:35', NULL, '0'),
(6, 1, 'Master User', '', '', '', 'Fleet Manager', 'None', 'None', 'None', 'None', 'None', 'off', 'off', 'off', '2020-12-28 11:53:50', NULL, '0'),
(7, 1, '', '$2y$10$7uk7mBEMqSiOzr/XvDatnumFZIpmpIJjJ9K9l2Mhq8.p4Ore/o2JO', '', '', 'Fleet Manager', 'None', 'None', 'None', 'None', 'None', 'off', 'off', 'off', '2020-12-28 12:02:56', NULL, '0'),
(8, 1, '', '$2y$10$OyIwll07cbuI7NFWl7np0Oxpn68iIhXO2jaCqj.jkw7/eK1dl9.bC', '', '', 'Fleet Manager', 'None', 'None', 'None', 'None', 'None', 'off', 'off', 'off', '2020-12-28 12:05:22', '2020-12-29 07:30:41', '0'),
(9, 1, '', '$2y$10$nx2RjUXXpptQBVR5ISlnIetdNem9B2H4v.5tQdGbeK1/Xi9Mz3jLu', '', '', 'Fleet Manager', 'None', 'None', 'None', 'None', 'None', 'off', 'off', 'off', '2020-12-28 12:05:40', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_management_user_type`
--

CREATE TABLE `user_management_user_type` (
  `user_type_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_type` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_management_user_type`
--

INSERT INTO `user_management_user_type` (`user_type_id`, `user_id`, `user_type`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'adsfasdf', '2020-12-26 05:12:08', '2020-12-26 05:12:42', '0'),
(2, 1, 'adsf', '2020-12-26 05:12:54', NULL, '0'),
(3, 1, 'asdf', '2020-12-27 07:20:11', NULL, '0'),
(4, 1, 'asdf', '2020-12-27 07:21:35', NULL, '0'),
(5, 1, 'adf asdf', '2020-12-27 07:21:40', NULL, '0'),
(6, 1, 'adsf', '2020-12-27 07:24:20', NULL, '0'),
(7, 1, 'erfdf sdfds', '2020-12-28 10:10:36', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `user_role_id` int(11) NOT NULL,
  `user_role_name` text NOT NULL,
  `user_role_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_settings`
--

CREATE TABLE `user_settings` (
  `us_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `first_name` text DEFAULT NULL,
  `last_name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `show_fuel_economy_value` text DEFAULT NULL,
  `items_view_per_page` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicles_lifecycle`
--

CREATE TABLE `vehicles_lifecycle` (
  `vehicles_lifecycles_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vehicle_details_id` int(11) DEFAULT NULL,
  `in_service_date` text DEFAULT NULL,
  `in_service_odometer` text DEFAULT NULL,
  `estimated_service_life_months` text DEFAULT NULL,
  `estimated_service_life_miles` text DEFAULT NULL,
  `estimated_resale_value` text DEFAULT NULL,
  `out_of_service_date` text DEFAULT NULL,
  `out_of_service_odometer` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles_lifecycle`
--

INSERT INTO `vehicles_lifecycle` (`vehicles_lifecycles_id`, `user_id`, `vehicle_details_id`, `in_service_date`, `in_service_odometer`, `estimated_service_life_months`, `estimated_service_life_miles`, `estimated_resale_value`, `out_of_service_date`, `out_of_service_odometer`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, NULL, '', '', '', '', '', '', '', '2020-12-24 14:31:34', '2020-12-26 10:45:10', '0'),
(2, 1, NULL, '', '', '', '', '', '', '', '2020-12-26 12:31:03', '2020-12-28 10:58:57', '0'),
(3, 1, NULL, '', '', '', '', '', '', '', '2020-12-28 10:58:11', '2020-12-29 08:08:38', '0'),
(4, 1, NULL, '', '', '', '', '', '', '', '2020-12-29 05:49:22', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_assignments`
--

CREATE TABLE `vehicle_assignments` (
  `vehicle_assignments_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vehicle` text DEFAULT NULL,
  `operator` text DEFAULT NULL,
  `start_date_time` text DEFAULT NULL,
  `start_time` text DEFAULT NULL,
  `end_date_time` text DEFAULT NULL,
  `end_time` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_assignments`
--

INSERT INTO `vehicle_assignments` (`vehicle_assignments_id`, `user_id`, `vehicle`, `operator`, `start_date_time`, `start_time`, `end_date_time`, `end_time`, `comment`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, '2', '1', '2020-12-18', '09:08', '2020-12-24', '06:09', 'adsf', '2020-12-27 09:00:34', '2020-12-29 10:27:26', '1'),
(2, 1, '2', '3', '2020-12-31', '09:08', '2020-12-30', '06:05', 'adsf', '2020-12-27 09:02:24', '2020-12-29 10:27:21', '1'),
(3, 1, '2', '1', '2020-12-24', '09:05', '2021-01-08', '02:05', 'adsf', '2020-12-27 09:03:56', '2020-12-29 10:27:15', '1'),
(4, 1, '3', '2', '2020-12-25', '04:08', '2021-01-01', '05:44', 'sdf', '2020-12-29 10:26:16', '2020-12-29 10:27:01', '1'),
(5, 1, '3', '2', '', '', '', '', '', '2020-12-29 10:27:35', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details`
--

CREATE TABLE `vehicle_details` (
  `vehicle_details_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `bi_id` int(11) DEFAULT NULL,
  `multiple_vehicles_id` int(11) DEFAULT NULL,
  `vehicle_name` text DEFAULT NULL,
  `vin_sn` text DEFAULT NULL,
  `license_plate` text DEFAULT NULL,
  `type` text DEFAULT NULL,
  `year` text DEFAULT NULL,
  `make` text DEFAULT NULL,
  `model` text DEFAULT NULL,
  `trims` text DEFAULT NULL,
  `registration_state` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `service_program` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `group` text DEFAULT NULL,
  `operator` text DEFAULT NULL,
  `ownership` text DEFAULT NULL,
  `color` text DEFAULT NULL,
  `body_type` text DEFAULT NULL,
  `body_subtype` text DEFAULT NULL,
  `msrp` text DEFAULT NULL,
  `linked_vehicles` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_details`
--

INSERT INTO `vehicle_details` (`vehicle_details_id`, `user_id`, `bi_id`, `multiple_vehicles_id`, `vehicle_name`, `vin_sn`, `license_plate`, `type`, `year`, `make`, `model`, `trims`, `registration_state`, `photo`, `service_program`, `status`, `group`, `operator`, `ownership`, `color`, `body_type`, `body_subtype`, `msrp`, `linked_vehicles`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, NULL, NULL, 'Toyota', '', '', '', '', '', '', '', '', 'http://localhost/fleet_v0//fleet_module/vehicle_management/images/121433477_410784760317540_670882756462770629_n.jpg', '', '', '', '', '', '', '', '', '', '', '2020-12-24 14:31:34', '2020-12-26 10:45:10', '1'),
(2, 1, NULL, NULL, 'asdf', 'adsf', 'adsf', '7', '2020', '2', '6', 'asdf asdf', 'adsf', 'http://localhost/fleet_v0/fleet_module/vehicle_management/images/ed0bef14-df56-4ade-a46d-fe441f354fc9-160102145913-thumbnail-4.jpg', '', '2', '3', '1', '1', 'ertret', '1', '2', 'ert', '2', '2020-12-26 12:31:03', '2020-12-28 10:58:57', '0'),
(3, 1, NULL, NULL, 'aaaasdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-12-28 10:58:11', '2020-12-29 08:08:38', '0'),
(4, 1, NULL, NULL, '', '', '', '', '', '', '', '', '', 'http://localhost/fleet_v0//fleet_module/vehicle_management/images/ed0bef14-df56-4ade-a46d-fe441f354fc9-160102145913-thumbnail-4.jpg', '', '', '', '', '', '', '', '', '', '', '2020-12-29 05:49:22', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details_body_subtype`
--

CREATE TABLE `vehicle_details_body_subtype` (
  `body_subtype_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `body_subtype` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_details_body_subtype`
--

INSERT INTO `vehicle_details_body_subtype` (`body_subtype_id`, `user_id`, `body_subtype`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'asd', '2020-12-24 14:53:18', '2020-12-24 14:53:30', '0'),
(2, 1, 'adsf', '2020-12-24 14:54:37', NULL, '0'),
(3, 1, 'adsf asdf', '2020-12-27 07:30:13', NULL, '0'),
(4, 1, 'adsf adsf', '2020-12-27 07:30:20', NULL, '0'),
(5, 1, 'uhuhuh', '2020-12-28 09:56:56', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details_body_type`
--

CREATE TABLE `vehicle_details_body_type` (
  `body_type_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `body_type` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_details_body_type`
--

INSERT INTO `vehicle_details_body_type` (`body_type_id`, `user_id`, `body_type`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'adsf adsf', '2020-12-24 14:50:33', '2020-12-27 05:46:29', '0'),
(2, 1, 'asdfasd', '2020-12-28 09:30:42', NULL, '0'),
(3, 1, 'llllllll', '2020-12-28 09:55:47', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details_brake_system`
--

CREATE TABLE `vehicle_details_brake_system` (
  `brake_system_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `brake_system` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_details_brake_system`
--

INSERT INTO `vehicle_details_brake_system` (`brake_system_id`, `user_id`, `brake_system`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'asdf adsf', '2020-12-24 15:00:51', '2020-12-24 15:01:11', '1'),
(2, 1, 'khjkh', '2020-12-28 10:01:20', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details_drive_type`
--

CREATE TABLE `vehicle_details_drive_type` (
  `drive_type_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `drive_type` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_details_drive_type`
--

INSERT INTO `vehicle_details_drive_type` (`drive_type_id`, `user_id`, `drive_type`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'adsfasdf', '2020-12-24 14:57:49', '2020-12-24 14:58:00', '0'),
(2, 1, 'dddddd', '2020-12-28 09:58:55', NULL, '0'),
(3, 1, 'pooii', '2020-12-28 09:59:02', NULL, '0'),
(4, 1, 'aaaa       ssssssss', '2020-12-28 09:59:12', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details_expense_type`
--

CREATE TABLE `vehicle_details_expense_type` (
  `expense_type_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `expense_type` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_details_expense_type`
--

INSERT INTO `vehicle_details_expense_type` (`expense_type_id`, `user_id`, `expense_type`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'asdf adsf', '2020-12-26 04:02:22', '2020-12-26 04:02:27', '1'),
(2, 1, 'adsfgasdf adsf', '2020-12-26 10:27:48', '2020-12-26 10:28:00', '0'),
(3, 1, ' asdfadsf', '2020-12-26 10:28:14', NULL, '0'),
(4, 1, 'yutyu', '2020-12-28 10:02:44', NULL, '0'),
(5, 1, 'eeeeeeee', '2020-12-28 10:03:22', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details_frequency`
--

CREATE TABLE `vehicle_details_frequency` (
  `frequency_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `frequency` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_details_frequency`
--

INSERT INTO `vehicle_details_frequency` (`frequency_id`, `user_id`, `frequency`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'sdf a', '2020-12-26 04:07:25', '2020-12-27 08:15:45', '0'),
(2, 1, 'adsf', '2020-12-26 04:08:44', '2020-12-27 08:15:43', '0'),
(3, 1, 'adsf', '2020-12-26 04:08:57', '2020-12-27 08:15:40', '0'),
(4, 1, 'asdf', '2020-12-27 08:15:35', NULL, '0'),
(5, 1, 'asdf', '2020-12-27 08:15:50', NULL, '0'),
(6, 1, 'ttttttt rrrrrrrr', '2020-12-28 10:04:09', NULL, '0'),
(7, 1, 'erewrw', '2020-12-28 11:17:09', NULL, '0'),
(8, 1, 'dsfdsf', '2020-12-28 11:17:18', NULL, '0'),
(9, 1, 'dddddddddf', '2020-12-28 11:17:18', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details_fuel_type`
--

CREATE TABLE `vehicle_details_fuel_type` (
  `fuel_type_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fuel_type` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_details_fuel_type`
--

INSERT INTO `vehicle_details_fuel_type` (`fuel_type_id`, `user_id`, `fuel_type`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'adf', '2020-12-26 03:58:11', '2020-12-26 12:04:45', '1'),
(2, 1, 'adfs', '2020-12-26 03:58:41', '2020-12-26 03:58:50', '1'),
(3, 1, 'asdf', '2020-12-26 05:30:45', '2020-12-26 12:04:51', '0'),
(4, 1, 'asderf', '2020-12-26 05:31:00', '2020-12-26 12:04:53', '1'),
(5, 1, 'asdf', '2020-12-26 12:04:23', NULL, '0'),
(6, 1, 'asdfadsf', '2020-12-27 09:48:20', NULL, '0'),
(7, 1, '', '2020-12-28 08:39:22', NULL, '0'),
(8, 1, 'asdf', '2020-12-28 08:39:32', NULL, '0'),
(9, 1, 'adsf dsfdsf', '2020-12-28 08:40:41', NULL, '0'),
(10, 1, 'hh', '2020-12-28 10:02:05', NULL, '0'),
(11, 1, 'uioljikhj ggggggg', '2020-12-28 10:13:05', NULL, '0'),
(12, 1, 'sdf', '2020-12-28 11:32:33', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details_group`
--

CREATE TABLE `vehicle_details_group` (
  `group_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `group` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_details_group`
--

INSERT INTO `vehicle_details_group` (`group_id`, `user_id`, `group`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'adsf adsf', '2020-12-24 14:42:53', '2020-12-27 06:48:51', '0'),
(2, 1, 'adsf', '2020-12-24 14:47:17', NULL, '0'),
(3, 1, 'adsf', '2020-12-24 14:47:23', NULL, '0'),
(4, 1, 'adsf', '2020-12-27 06:13:10', '2020-12-27 06:48:39', '1'),
(5, 1, 'adsf adsf', '2020-12-27 06:13:19', '2020-12-27 06:47:34', '1'),
(6, 1, 'erty adsf', '2020-12-27 06:13:27', '2020-12-27 06:47:41', '0'),
(7, 1, 'adsf', '2020-12-27 06:26:33', '2020-12-27 06:51:19', '1'),
(8, 1, 'asdf asdf adsf', '2020-12-27 06:35:07', '2020-12-27 06:47:05', '0'),
(9, 1, 'a', '2020-12-27 06:50:50', '2020-12-28 09:54:12', '0'),
(10, 1, 'ad', '2020-12-28 09:28:25', '2020-12-28 09:54:22', '0');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details_make`
--

CREATE TABLE `vehicle_details_make` (
  `make_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `make` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_details_make`
--

INSERT INTO `vehicle_details_make` (`make_id`, `user_id`, `make`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'ryryryr', '2020-12-24 13:45:00', '2020-12-27 10:54:17', '0'),
(2, 1, 'adsf asdf', '2020-12-24 13:55:52', NULL, '0'),
(3, 1, 'asdfadsf', '2020-12-27 10:54:10', NULL, '0'),
(4, 1, 'asdf', '2020-12-28 09:22:43', NULL, '0'),
(5, 1, 'aaaaaaaaa', '2020-12-28 09:50:39', NULL, '0'),
(6, 1, 'aaaaaaaaaaaaaa', '2020-12-28 09:50:55', NULL, '0'),
(7, 1, 'fgdf', '2020-12-28 11:05:14', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details_model`
--

CREATE TABLE `vehicle_details_model` (
  `model_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `model` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_details_model`
--

INSERT INTO `vehicle_details_model` (`model_id`, `user_id`, `model`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'adsf', '2020-12-24 14:23:47', '2020-12-24 14:24:56', '1'),
(2, 1, 'asdf', '2020-12-24 14:24:51', '2020-12-24 14:25:12', '1'),
(3, 1, 'adf', '2020-12-24 14:29:56', NULL, '0'),
(4, 1, 'adsfasdf adsf', '2020-12-24 14:30:11', '2020-12-24 14:30:26', '0'),
(5, 1, 'adsfadsf', '2020-12-24 14:30:40', NULL, '0'),
(6, 1, 'adsf', '2020-12-24 14:31:00', NULL, '0'),
(7, 1, 'adsf', '2020-12-26 09:47:30', NULL, '0'),
(8, 1, 'adsf', '2020-12-28 09:23:31', NULL, '0'),
(9, 1, 'adsf', '2020-12-28 09:24:03', NULL, '0'),
(10, 1, 'eeeeeee', '2020-12-28 09:26:29', NULL, '0'),
(11, 1, 'asdf', '2020-12-28 09:51:35', NULL, '0'),
(12, 1, 'wwwwww', '2020-12-28 09:51:59', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details_ownership`
--

CREATE TABLE `vehicle_details_ownership` (
  `ownership_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ownership` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_details_ownership`
--

INSERT INTO `vehicle_details_ownership` (`ownership_id`, `user_id`, `ownership`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'adsfadsf ', '2020-12-24 14:46:13', '2020-12-24 14:46:56', '0'),
(2, 1, 'qqqqqqqq', '2020-12-28 09:29:28', NULL, '0'),
(3, 1, 'llllllll', '2020-12-28 09:29:42', NULL, '0'),
(4, 1, 'eeeeeee', '2020-12-28 09:55:02', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details_status`
--

CREATE TABLE `vehicle_details_status` (
  `status_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_details_status`
--

INSERT INTO `vehicle_details_status` (`status_id`, `user_id`, `status`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'a', '2020-12-24 14:38:55', '2020-12-24 14:39:11', '0'),
(2, 1, 'adsf', '2020-12-24 14:47:42', NULL, '0'),
(3, 1, 'hffhg', '2020-12-28 09:26:42', NULL, '0'),
(4, 1, 'rgfhfg', '2020-12-28 10:58:01', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details_type`
--

CREATE TABLE `vehicle_details_type` (
  `type_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_details_type`
--

INSERT INTO `vehicle_details_type` (`type_id`, `user_id`, `type`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'asadsf', '2020-12-27 11:26:07', '2020-12-28 04:51:08', '0'),
(2, 1, 'sdf daaa', '2020-12-27 11:27:35', '2020-12-28 10:49:01', '0'),
(3, 1, 'asdf', '2020-12-27 12:37:40', NULL, '0'),
(4, 1, 'adsf', '2020-12-27 12:41:53', NULL, '0'),
(5, 1, 'asdf', '2020-12-27 12:54:28', NULL, '0'),
(6, 1, 'asdf', '2020-12-27 12:54:32', NULL, '0'),
(7, 1, 'adsf', '2020-12-28 04:15:42', NULL, '0'),
(8, 1, 'aaaaaaaaaa', '2020-12-28 04:19:57', NULL, '0'),
(9, 1, 'adf', '2020-12-28 04:26:05', NULL, '0'),
(10, 1, 'a', '2020-12-28 04:27:04', '2020-12-28 09:49:48', '0'),
(11, 1, 'adsf', '2020-12-28 04:27:28', NULL, '0'),
(12, 1, 'adf', '2020-12-28 04:49:15', NULL, '0'),
(13, 1, 'adsf', '2020-12-28 07:27:36', NULL, '0'),
(14, 1, 'asdf', '2020-12-28 09:20:46', NULL, '0'),
(15, 1, 'aaaaaaa', '2020-12-28 09:49:30', NULL, '0'),
(16, 1, '10;', '2020-12-28 11:12:32', '2020-12-28 11:13:02', '0');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_issue`
--

CREATE TABLE `vehicle_issue` (
  `vi_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vehicle_details_id` int(11) DEFAULT NULL,
  `vehicle` text DEFAULT NULL,
  `reported_date` text DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `labels` text DEFAULT NULL,
  `reported_by` text DEFAULT NULL,
  `assigned_to` text DEFAULT NULL,
  `due_date` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `document` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_schedules`
--

CREATE TABLE `vehicle_schedules` (
  `vs_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `frequency` text DEFAULT NULL,
  `every` text DEFAULT NULL,
  `effective_after` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_service_task`
--

CREATE TABLE `vehicle_service_task` (
  `vehicle_service_task_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `subtasks` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_settings`
--

CREATE TABLE `vehicle_settings` (
  `vehicle_settings_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vehicle_details_id` int(11) DEFAULT NULL,
  `primary_meter` text DEFAULT NULL,
  `primary_current_reading` text DEFAULT NULL,
  `primary_avg_usage` text DEFAULT NULL,
  `secondary_meter` text DEFAULT NULL,
  `secondary_current_reading` text DEFAULT NULL,
  `secondary_avg_usage` text DEFAULT NULL,
  `fuel_unit` text DEFAULT NULL,
  `measurement_unit` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_settings`
--

INSERT INTO `vehicle_settings` (`vehicle_settings_id`, `user_id`, `vehicle_details_id`, `primary_meter`, `primary_current_reading`, `primary_avg_usage`, `secondary_meter`, `secondary_current_reading`, `secondary_avg_usage`, `fuel_unit`, `measurement_unit`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, NULL, 'Miles', '', '', 'Miles', '', '', 'Gallons (BD)', 'Imperial (inches, pounds, gallons, miles)', '2020-12-24 14:31:34', '2020-12-26 10:45:10', '0'),
(2, 1, NULL, 'Miles', '', '', 'Miles', '', '', 'Gallons (BD)', 'Imperial (inches, pounds, gallons, miles)', '2020-12-26 12:31:03', '2020-12-28 10:58:57', '0'),
(3, 1, NULL, 'Miles', '', '', 'Miles', '', '', 'Gallons (BD)', 'Imperial (inches, pounds, gallons, miles)', '2020-12-28 10:58:11', '2020-12-29 08:08:38', '0'),
(4, 1, NULL, 'Miles', '', '', 'Miles', '', '', 'Gallons (BD)', 'Imperial (inches, pounds, gallons, miles)', '2020-12-29 05:49:22', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_specifications`
--

CREATE TABLE `vehicle_specifications` (
  `vehicle_specifications_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vehicle_details_id` int(11) DEFAULT NULL,
  `width` text DEFAULT NULL,
  `height` text DEFAULT NULL,
  `length` text DEFAULT NULL,
  `interior_volume` text DEFAULT NULL,
  `passenger_volume` text DEFAULT NULL,
  `cargo_volume` text DEFAULT NULL,
  `ground_clearence` text DEFAULT NULL,
  `bed_length` text DEFAULT NULL,
  `curv_weight` text DEFAULT NULL,
  `gross_vehicle_weight_rating` text DEFAULT NULL,
  `towing_capacity` text DEFAULT NULL,
  `max_payload` text DEFAULT NULL,
  `epa_city` text DEFAULT NULL,
  `epa_highway` text DEFAULT NULL,
  `epa_combined` text DEFAULT NULL,
  `engine_summary` text DEFAULT NULL,
  `engine_brand` text DEFAULT NULL,
  `aspiration` text DEFAULT NULL,
  `block_type` text DEFAULT NULL,
  `bore` text DEFAULT NULL,
  `cam_type` text DEFAULT NULL,
  `compression` text DEFAULT NULL,
  `cylinders` text DEFAULT NULL,
  `displacement` text DEFAULT NULL,
  `fuel_induction` text DEFAULT NULL,
  `max_hp` text DEFAULT NULL,
  `max_torque` text DEFAULT NULL,
  `redline_rpm` text DEFAULT NULL,
  `stroke` text DEFAULT NULL,
  `valves` text DEFAULT NULL,
  `transmission_summary` text DEFAULT NULL,
  `transmission_brand` text DEFAULT NULL,
  `transmission_type` text DEFAULT NULL,
  `transmission_gears` text DEFAULT NULL,
  `drive_type` text DEFAULT NULL,
  `brake_system` text DEFAULT NULL,
  `front_track_width` text DEFAULT NULL,
  `rear_track_width` text DEFAULT NULL,
  `wheelbase` text DEFAULT NULL,
  `front_wheel_diameter` text DEFAULT NULL,
  `rear_wheel_diameter` text DEFAULT NULL,
  `rear_axle` text DEFAULT NULL,
  `front_tire_type` text DEFAULT NULL,
  `front_tire_psi` text DEFAULT NULL,
  `rear_tire_type` text DEFAULT NULL,
  `rear_tire_psi` text DEFAULT NULL,
  `fuel_type` text DEFAULT NULL,
  `fuel_quality` text DEFAULT NULL,
  `fuel_tank_one_capacity` text DEFAULT NULL,
  `fuel_tank_two_capacity` text DEFAULT NULL,
  `oil_capacity` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_specifications`
--

INSERT INTO `vehicle_specifications` (`vehicle_specifications_id`, `user_id`, `vehicle_details_id`, `width`, `height`, `length`, `interior_volume`, `passenger_volume`, `cargo_volume`, `ground_clearence`, `bed_length`, `curv_weight`, `gross_vehicle_weight_rating`, `towing_capacity`, `max_payload`, `epa_city`, `epa_highway`, `epa_combined`, `engine_summary`, `engine_brand`, `aspiration`, `block_type`, `bore`, `cam_type`, `compression`, `cylinders`, `displacement`, `fuel_induction`, `max_hp`, `max_torque`, `redline_rpm`, `stroke`, `valves`, `transmission_summary`, `transmission_brand`, `transmission_type`, `transmission_gears`, `drive_type`, `brake_system`, `front_track_width`, `rear_track_width`, `wheelbase`, `front_wheel_diameter`, `rear_wheel_diameter`, `rear_axle`, `front_tire_type`, `front_tire_psi`, `rear_tire_type`, `rear_tire_psi`, `fuel_type`, `fuel_quality`, `fuel_tank_one_capacity`, `fuel_tank_two_capacity`, `oil_capacity`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-12-24 14:31:34', '2020-12-26 10:45:10', '0'),
(2, 1, NULL, '45', '87', '545', '654', '45', '65', '45', '65', '456', '45', '56', '54', '46', '87', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-12-26 12:31:03', '2020-12-28 10:58:57', '0'),
(3, 1, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-12-28 10:58:11', '2020-12-29 08:08:38', '0'),
(4, 1, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-12-29 05:49:22', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendors_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `labels` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `address_line_2` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `zip_postal_code` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `contact_name` text DEFAULT NULL,
  `phone_2` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `fuel` text DEFAULT NULL,
  `service` text DEFAULT NULL,
  `vehicle` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendors_id`, `user_id`, `name`, `phone`, `website`, `labels`, `address`, `address_line_2`, `city`, `state`, `zip_postal_code`, `country`, `contact_name`, `phone_2`, `email`, `fuel`, `service`, `vehicle`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'adsf asdf', 'adsf', 'adsf', '', 'adsf', 'adf', 'adsf', 'asdf', 'adsf', 'DZ', 'adsf', 'adsf', 'adsf', 'off', 'on', 'on', '2020-12-26 10:35:30', '2020-12-26 11:26:08', '0'),
(2, 1, 'adsf', 'adsf', 'asdf', '', 'adsf', 'adsf', 'adsf', 'adsf', 'asdf', 'AS', 'asdf', 'asdf', 'asdf', 'on', 'off', 'on', '2020-12-26 11:25:08', NULL, '0'),
(3, 1, 'adsf', 'adsf', 'asdf', '', 'adsf', 'adsf', 'adsf', 'adsf', 'asdf', 'AS', 'asdf', 'asdf', 'asdf', 'on', 'off', 'on', '2020-12-26 11:25:08', NULL, '0'),
(4, 1, 'adsf', 'adsf', 'asdf', '2', 'adsf', 'adsf', 'adsf', 'asdf', 'adsf', '2', 'adsf', 'adsf', 'asdf', 'off', 'off', 'on', '2020-12-27 09:27:17', '2020-12-29 08:10:22', '0'),
(5, 1, 'adsf', 'adsf', 'adsf', '', 'asdf', 'asdf', 'adsf', 'asdf', 'asdf', 'AI', 'fadsf', 'asdf', 'adsf', 'off', 'off', 'off', '2020-12-27 09:28:04', NULL, '0'),
(6, 1, 'adsf', 'adsf', 'asdf', '', '', '', '', '', '', 'US', '', '', '', 'off', 'off', 'off', '2020-12-27 09:28:21', NULL, '0'),
(7, 1, 'asdf', 'adsf', 'asdf', '', 'asdf', 'adsf', 'asdf', 'asdf', 'asdf', 'DZ', 'adsf', 'adsf', 'adsf', 'off', 'on', 'off', '2020-12-27 09:42:43', NULL, '0'),
(8, 1, 'adsf', 'asdf', 'asdf', '', 'adsf', 'asdf', 'adsf', 'adsf', 'asdf', 'AT', 'asdf', 'adsf', 'adsf', 'off', 'on', 'off', '2020-12-27 10:18:28', NULL, '0'),
(9, 1, 'fghgfh', 'fghgfh', 'gfhgfh', '1', 'fghgfd', 'dgfhdg', 'hdfgh', 'dgfh', 'dgfh', '4', 'dgfh', 'dgfh', 'dfgh', 'off', 'on', 'off', '2020-12-27 10:23:02', '2020-12-29 07:31:26', '0'),
(10, 1, 'asdf', 'adf', '', '', '', '', '', '', '', '3', 'adsf', '', '', 'off', 'off', 'off', '2020-12-27 10:25:14', '2020-12-29 07:32:01', '0');

-- --------------------------------------------------------

--
-- Table structure for table `vendors_country`
--

CREATE TABLE `vendors_country` (
  `country_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `country` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendors_country`
--

INSERT INTO `vendors_country` (`country_id`, `user_id`, `country`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'adsfadsf', '2020-12-27 10:10:16', NULL, '0'),
(2, 1, 'asdf asdfd', '2020-12-27 10:11:23', NULL, '0'),
(3, 1, 'adsf adsf', '2020-12-27 10:11:31', NULL, '0'),
(4, 1, 'hhhhhh', '2020-12-28 10:11:02', NULL, '0'),
(5, 1, 'rtrtr dfsdf', '2020-12-28 10:11:13', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `vendors_labels`
--

CREATE TABLE `vendors_labels` (
  `labels_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `labels` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendors_labels`
--

INSERT INTO `vendors_labels` (`labels_id`, `user_id`, `labels`, `create_date`, `update_date`, `delete_status`) VALUES
(1, 1, 'ads', '2020-12-26 05:29:49', '2020-12-28 12:15:30', '0'),
(2, 1, 'd', '2020-12-28 10:12:08', NULL, '0'),
(3, 1, 'adfdsa', '2020-12-29 10:02:51', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `watched_vehicles`
--

CREATE TABLE `watched_vehicles` (
  `watched_vehicles_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `watched_groups` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `watched_vehicle_settings`
--

CREATE TABLE `watched_vehicle_settings` (
  `wvs_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `watched_vehicle_settings` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `workflows`
--

CREATE TABLE `workflows` (
  `workflows_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `trigger` text DEFAULT NULL,
  `which_items` text DEFAULT NULL,
  `action` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `delete_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_settings`
--
ALTER TABLE `account_settings`
  ADD PRIMARY KEY (`as_id`);

--
-- Indexes for table `acknowledge_recall`
--
ALTER TABLE `acknowledge_recall`
  ADD PRIMARY KEY (`ar_id`);

--
-- Indexes for table `add_multiple_service_reminders`
--
ALTER TABLE `add_multiple_service_reminders`
  ADD PRIMARY KEY (`amsr_id`),
  ADD KEY `vehicle_service_task_id` (`vehicle_service_task_id`),
  ADD KEY `vehicle_details_to_multiple_service_reminders` (`vehicle_details_id`);

--
-- Indexes for table `add_multiple_service_renewals_reminders`
--
ALTER TABLE `add_multiple_service_renewals_reminders`
  ADD PRIMARY KEY (`amsrr_id`);

--
-- Indexes for table `add_multiple_vehicles`
--
ALTER TABLE `add_multiple_vehicles`
  ADD PRIMARY KEY (`multiple_vehicles_id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`assignments_id`),
  ADD KEY `vehicle_details_to_assignments` (`vehicle_details_id`),
  ADD KEY `basic_information_to_assignments` (`bi_id`);

--
-- Indexes for table `basic_information`
--
ALTER TABLE `basic_information`
  ADD PRIMARY KEY (`bi_id`);

--
-- Indexes for table `contact_information`
--
ALTER TABLE `contact_information`
  ADD PRIMARY KEY (`ci_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `expense_history`
--
ALTER TABLE `expense_history`
  ADD PRIMARY KEY (`eh_id`),
  ADD KEY `vendors_id` (`vendors_id`),
  ADD KEY `vehicle_details_id` (`vehicle_details_id`);

--
-- Indexes for table `farm_user`
--
ALTER TABLE `farm_user`
  ADD PRIMARY KEY (`farm_user_id`);

--
-- Indexes for table `fault_rules`
--
ALTER TABLE `fault_rules`
  ADD PRIMARY KEY (`fr_id`);

--
-- Indexes for table `fuel_entry`
--
ALTER TABLE `fuel_entry`
  ADD PRIMARY KEY (`fe_id`),
  ADD KEY `vehicle_details_id` (`vehicle_details_id`),
  ADD KEY `vendors_id` (`vendors_id`);

--
-- Indexes for table `import_contact_renewals_reminders`
--
ALTER TABLE `import_contact_renewals_reminders`
  ADD PRIMARY KEY (`icrr_id`);

--
-- Indexes for table `import_data`
--
ALTER TABLE `import_data`
  ADD PRIMARY KEY (`import_id`);

--
-- Indexes for table `import_issues`
--
ALTER TABLE `import_issues`
  ADD PRIMARY KEY (`import_issues_id`);

--
-- Indexes for table `import_service_reminders`
--
ALTER TABLE `import_service_reminders`
  ADD PRIMARY KEY (`isr_id`);

--
-- Indexes for table `import_vehicles`
--
ALTER TABLE `import_vehicles`
  ADD PRIMARY KEY (`import_vehicles_id`);

--
-- Indexes for table `import_vendors`
--
ALTER TABLE `import_vendors`
  ADD PRIMARY KEY (`iv_id`);

--
-- Indexes for table `inspection_form`
--
ALTER TABLE `inspection_form`
  ADD PRIMARY KEY (`if_id`);

--
-- Indexes for table `inspection_forms_color`
--
ALTER TABLE `inspection_forms_color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `inspection_forms_items_template`
--
ALTER TABLE `inspection_forms_items_template`
  ADD PRIMARY KEY (`items_template_id`);

--
-- Indexes for table `inspection_history`
--
ALTER TABLE `inspection_history`
  ADD PRIMARY KEY (`ih_id`),
  ADD KEY `vehicle_details` (`vehicle_details_id`);

--
-- Indexes for table `inspection_history_fuel_level`
--
ALTER TABLE `inspection_history_fuel_level`
  ADD PRIMARY KEY (`fuel_level_id`);

--
-- Indexes for table `inspection_history_vehicle_condition_ok`
--
ALTER TABLE `inspection_history_vehicle_condition_ok`
  ADD PRIMARY KEY (`vehicle_condition_ok_id`);

--
-- Indexes for table `inspection_items`
--
ALTER TABLE `inspection_items`
  ADD PRIMARY KEY (`ii_id`);

--
-- Indexes for table `integrations`
--
ALTER TABLE `integrations`
  ADD PRIMARY KEY (`integration_id`);

--
-- Indexes for table `login_log`
--
ALTER TABLE `login_log`
  ADD PRIMARY KEY (`login_log_id`);

--
-- Indexes for table `meter_reading`
--
ALTER TABLE `meter_reading`
  ADD PRIMARY KEY (`mr_id`);

--
-- Indexes for table `personal_information`
--
ALTER TABLE `personal_information`
  ADD PRIMARY KEY (`pi_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `recalls_details`
--
ALTER TABLE `recalls_details`
  ADD PRIMARY KEY (`rd_id`);

--
-- Indexes for table `service_entry`
--
ALTER TABLE `service_entry`
  ADD PRIMARY KEY (`se_id`),
  ADD KEY `vehicle_details_id` (`vehicle_details_id`,`vendors_id`),
  ADD KEY `vendors_id` (`vendors_id`);

--
-- Indexes for table `service_program`
--
ALTER TABLE `service_program`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `service_task_and_repeating_schedule`
--
ALTER TABLE `service_task_and_repeating_schedule`
  ADD PRIMARY KEY (`strs_id`);

--
-- Indexes for table `shop_integration`
--
ALTER TABLE `shop_integration`
  ADD PRIMARY KEY (`si_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `user_management`
--
ALTER TABLE `user_management`
  ADD PRIMARY KEY (`um_id`);

--
-- Indexes for table `user_management_user_type`
--
ALTER TABLE `user_management_user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`user_role_id`);

--
-- Indexes for table `user_settings`
--
ALTER TABLE `user_settings`
  ADD PRIMARY KEY (`us_id`);

--
-- Indexes for table `vehicles_lifecycle`
--
ALTER TABLE `vehicles_lifecycle`
  ADD PRIMARY KEY (`vehicles_lifecycles_id`),
  ADD KEY `vehicle_details_id` (`vehicle_details_id`);

--
-- Indexes for table `vehicle_assignments`
--
ALTER TABLE `vehicle_assignments`
  ADD PRIMARY KEY (`vehicle_assignments_id`);

--
-- Indexes for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  ADD PRIMARY KEY (`vehicle_details_id`),
  ADD KEY `multiple_vehicles_id` (`multiple_vehicles_id`),
  ADD KEY `bi_id` (`bi_id`);

--
-- Indexes for table `vehicle_details_body_subtype`
--
ALTER TABLE `vehicle_details_body_subtype`
  ADD PRIMARY KEY (`body_subtype_id`);

--
-- Indexes for table `vehicle_details_body_type`
--
ALTER TABLE `vehicle_details_body_type`
  ADD PRIMARY KEY (`body_type_id`);

--
-- Indexes for table `vehicle_details_brake_system`
--
ALTER TABLE `vehicle_details_brake_system`
  ADD PRIMARY KEY (`brake_system_id`);

--
-- Indexes for table `vehicle_details_drive_type`
--
ALTER TABLE `vehicle_details_drive_type`
  ADD PRIMARY KEY (`drive_type_id`);

--
-- Indexes for table `vehicle_details_expense_type`
--
ALTER TABLE `vehicle_details_expense_type`
  ADD PRIMARY KEY (`expense_type_id`);

--
-- Indexes for table `vehicle_details_frequency`
--
ALTER TABLE `vehicle_details_frequency`
  ADD PRIMARY KEY (`frequency_id`);

--
-- Indexes for table `vehicle_details_fuel_type`
--
ALTER TABLE `vehicle_details_fuel_type`
  ADD PRIMARY KEY (`fuel_type_id`);

--
-- Indexes for table `vehicle_details_group`
--
ALTER TABLE `vehicle_details_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `vehicle_details_make`
--
ALTER TABLE `vehicle_details_make`
  ADD PRIMARY KEY (`make_id`);

--
-- Indexes for table `vehicle_details_model`
--
ALTER TABLE `vehicle_details_model`
  ADD PRIMARY KEY (`model_id`);

--
-- Indexes for table `vehicle_details_ownership`
--
ALTER TABLE `vehicle_details_ownership`
  ADD PRIMARY KEY (`ownership_id`);

--
-- Indexes for table `vehicle_details_status`
--
ALTER TABLE `vehicle_details_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `vehicle_details_type`
--
ALTER TABLE `vehicle_details_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `vehicle_issue`
--
ALTER TABLE `vehicle_issue`
  ADD PRIMARY KEY (`vi_id`),
  ADD KEY `vehicle_details_with_issue` (`vehicle_details_id`);

--
-- Indexes for table `vehicle_schedules`
--
ALTER TABLE `vehicle_schedules`
  ADD PRIMARY KEY (`vs_id`);

--
-- Indexes for table `vehicle_service_task`
--
ALTER TABLE `vehicle_service_task`
  ADD PRIMARY KEY (`vehicle_service_task_id`);

--
-- Indexes for table `vehicle_settings`
--
ALTER TABLE `vehicle_settings`
  ADD PRIMARY KEY (`vehicle_settings_id`),
  ADD KEY `vehicle_details_id` (`vehicle_details_id`);

--
-- Indexes for table `vehicle_specifications`
--
ALTER TABLE `vehicle_specifications`
  ADD PRIMARY KEY (`vehicle_specifications_id`),
  ADD KEY `vehicle_details_id` (`vehicle_details_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendors_id`);

--
-- Indexes for table `vendors_country`
--
ALTER TABLE `vendors_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `vendors_labels`
--
ALTER TABLE `vendors_labels`
  ADD PRIMARY KEY (`labels_id`);

--
-- Indexes for table `watched_vehicles`
--
ALTER TABLE `watched_vehicles`
  ADD PRIMARY KEY (`watched_vehicles_id`);

--
-- Indexes for table `watched_vehicle_settings`
--
ALTER TABLE `watched_vehicle_settings`
  ADD PRIMARY KEY (`wvs_id`);

--
-- Indexes for table `workflows`
--
ALTER TABLE `workflows`
  ADD PRIMARY KEY (`workflows_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_settings`
--
ALTER TABLE `account_settings`
  MODIFY `as_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `acknowledge_recall`
--
ALTER TABLE `acknowledge_recall`
  MODIFY `ar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_multiple_service_reminders`
--
ALTER TABLE `add_multiple_service_reminders`
  MODIFY `amsr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_multiple_service_renewals_reminders`
--
ALTER TABLE `add_multiple_service_renewals_reminders`
  MODIFY `amsrr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_multiple_vehicles`
--
ALTER TABLE `add_multiple_vehicles`
  MODIFY `multiple_vehicles_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `assignments_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basic_information`
--
ALTER TABLE `basic_information`
  MODIFY `bi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_information`
--
ALTER TABLE `contact_information`
  MODIFY `ci_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_history`
--
ALTER TABLE `expense_history`
  MODIFY `eh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `farm_user`
--
ALTER TABLE `farm_user`
  MODIFY `farm_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fault_rules`
--
ALTER TABLE `fault_rules`
  MODIFY `fr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fuel_entry`
--
ALTER TABLE `fuel_entry`
  MODIFY `fe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `import_contact_renewals_reminders`
--
ALTER TABLE `import_contact_renewals_reminders`
  MODIFY `icrr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `import_data`
--
ALTER TABLE `import_data`
  MODIFY `import_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `import_issues`
--
ALTER TABLE `import_issues`
  MODIFY `import_issues_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `import_service_reminders`
--
ALTER TABLE `import_service_reminders`
  MODIFY `isr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `import_vehicles`
--
ALTER TABLE `import_vehicles`
  MODIFY `import_vehicles_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `import_vendors`
--
ALTER TABLE `import_vendors`
  MODIFY `iv_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspection_form`
--
ALTER TABLE `inspection_form`
  MODIFY `if_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inspection_forms_color`
--
ALTER TABLE `inspection_forms_color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `inspection_forms_items_template`
--
ALTER TABLE `inspection_forms_items_template`
  MODIFY `items_template_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inspection_history`
--
ALTER TABLE `inspection_history`
  MODIFY `ih_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `inspection_history_fuel_level`
--
ALTER TABLE `inspection_history_fuel_level`
  MODIFY `fuel_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inspection_history_vehicle_condition_ok`
--
ALTER TABLE `inspection_history_vehicle_condition_ok`
  MODIFY `vehicle_condition_ok_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inspection_items`
--
ALTER TABLE `inspection_items`
  MODIFY `ii_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `integrations`
--
ALTER TABLE `integrations`
  MODIFY `integration_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_log`
--
ALTER TABLE `login_log`
  MODIFY `login_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `meter_reading`
--
ALTER TABLE `meter_reading`
  MODIFY `mr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_information`
--
ALTER TABLE `personal_information`
  MODIFY `pi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recalls_details`
--
ALTER TABLE `recalls_details`
  MODIFY `rd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_entry`
--
ALTER TABLE `service_entry`
  MODIFY `se_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_program`
--
ALTER TABLE `service_program`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_task_and_repeating_schedule`
--
ALTER TABLE `service_task_and_repeating_schedule`
  MODIFY `strs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop_integration`
--
ALTER TABLE `shop_integration`
  MODIFY `si_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_management`
--
ALTER TABLE `user_management`
  MODIFY `um_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_management_user_type`
--
ALTER TABLE `user_management_user_type`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_settings`
--
ALTER TABLE `user_settings`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicles_lifecycle`
--
ALTER TABLE `vehicles_lifecycle`
  MODIFY `vehicles_lifecycles_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle_assignments`
--
ALTER TABLE `vehicle_assignments`
  MODIFY `vehicle_assignments_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  MODIFY `vehicle_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle_details_body_subtype`
--
ALTER TABLE `vehicle_details_body_subtype`
  MODIFY `body_subtype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicle_details_body_type`
--
ALTER TABLE `vehicle_details_body_type`
  MODIFY `body_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle_details_brake_system`
--
ALTER TABLE `vehicle_details_brake_system`
  MODIFY `brake_system_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicle_details_drive_type`
--
ALTER TABLE `vehicle_details_drive_type`
  MODIFY `drive_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle_details_expense_type`
--
ALTER TABLE `vehicle_details_expense_type`
  MODIFY `expense_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicle_details_frequency`
--
ALTER TABLE `vehicle_details_frequency`
  MODIFY `frequency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vehicle_details_fuel_type`
--
ALTER TABLE `vehicle_details_fuel_type`
  MODIFY `fuel_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vehicle_details_group`
--
ALTER TABLE `vehicle_details_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vehicle_details_make`
--
ALTER TABLE `vehicle_details_make`
  MODIFY `make_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicle_details_model`
--
ALTER TABLE `vehicle_details_model`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vehicle_details_ownership`
--
ALTER TABLE `vehicle_details_ownership`
  MODIFY `ownership_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle_details_status`
--
ALTER TABLE `vehicle_details_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle_details_type`
--
ALTER TABLE `vehicle_details_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vehicle_issue`
--
ALTER TABLE `vehicle_issue`
  MODIFY `vi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_schedules`
--
ALTER TABLE `vehicle_schedules`
  MODIFY `vs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_service_task`
--
ALTER TABLE `vehicle_service_task`
  MODIFY `vehicle_service_task_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_settings`
--
ALTER TABLE `vehicle_settings`
  MODIFY `vehicle_settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle_specifications`
--
ALTER TABLE `vehicle_specifications`
  MODIFY `vehicle_specifications_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendors_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vendors_country`
--
ALTER TABLE `vendors_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vendors_labels`
--
ALTER TABLE `vendors_labels`
  MODIFY `labels_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `watched_vehicles`
--
ALTER TABLE `watched_vehicles`
  MODIFY `watched_vehicles_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `watched_vehicle_settings`
--
ALTER TABLE `watched_vehicle_settings`
  MODIFY `wvs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workflows`
--
ALTER TABLE `workflows`
  MODIFY `workflows_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_multiple_service_reminders`
--
ALTER TABLE `add_multiple_service_reminders`
  ADD CONSTRAINT `vehicle_details_to_multiple_service_reminders` FOREIGN KEY (`vehicle_details_id`) REFERENCES `vehicle_details` (`vehicle_details_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vehicle_service_task_id` FOREIGN KEY (`vehicle_service_task_id`) REFERENCES `vehicle_service_task` (`vehicle_service_task_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `basic_information_to_assignments` FOREIGN KEY (`bi_id`) REFERENCES `basic_information` (`bi_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `expense_history`
--
ALTER TABLE `expense_history`
  ADD CONSTRAINT `expense_history_ibfk_1` FOREIGN KEY (`vendors_id`) REFERENCES `vendors` (`vendors_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `expense_history_ibfk_2` FOREIGN KEY (`vehicle_details_id`) REFERENCES `vehicle_details` (`vehicle_details_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fuel_entry`
--
ALTER TABLE `fuel_entry`
  ADD CONSTRAINT `vehicle_details_id` FOREIGN KEY (`vehicle_details_id`) REFERENCES `vehicle_details` (`vehicle_details_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vendors_id` FOREIGN KEY (`vendors_id`) REFERENCES `vendors` (`vendors_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `inspection_history`
--
ALTER TABLE `inspection_history`
  ADD CONSTRAINT `vehicle_details` FOREIGN KEY (`vehicle_details_id`) REFERENCES `vehicle_details` (`vehicle_details_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `service_entry`
--
ALTER TABLE `service_entry`
  ADD CONSTRAINT `service_entry_ibfk_1` FOREIGN KEY (`vehicle_details_id`) REFERENCES `vehicle_details` (`vehicle_details_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `service_entry_ibfk_2` FOREIGN KEY (`vendors_id`) REFERENCES `vendors` (`vendors_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vehicles_lifecycle`
--
ALTER TABLE `vehicles_lifecycle`
  ADD CONSTRAINT `vehicles_lifecycle_ibfk_1` FOREIGN KEY (`vehicle_details_id`) REFERENCES `vehicle_details` (`vehicle_details_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  ADD CONSTRAINT `bi_id` FOREIGN KEY (`bi_id`) REFERENCES `basic_information` (`bi_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `multiple_vehicles_id` FOREIGN KEY (`multiple_vehicles_id`) REFERENCES `add_multiple_vehicles` (`multiple_vehicles_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vehicle_issue`
--
ALTER TABLE `vehicle_issue`
  ADD CONSTRAINT `vehicle_details_with_issue` FOREIGN KEY (`vehicle_details_id`) REFERENCES `vehicle_details` (`vehicle_details_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vehicle_settings`
--
ALTER TABLE `vehicle_settings`
  ADD CONSTRAINT `vehicle_settings_ibfk_1` FOREIGN KEY (`vehicle_details_id`) REFERENCES `vehicle_details` (`vehicle_details_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vehicle_specifications`
--
ALTER TABLE `vehicle_specifications`
  ADD CONSTRAINT `vehicle_specifications_ibfk_1` FOREIGN KEY (`vehicle_details_id`) REFERENCES `vehicle_details` (`vehicle_details_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
