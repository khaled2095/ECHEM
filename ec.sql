-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 12:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ec`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`, `description`) VALUES
(7, NULL, 1, 'Supplies', 'supplies', '2020-10-22 00:57:13', '2020-10-22 00:57:13', NULL),
(8, NULL, 1, 'Supportive Products', 'supportive-products', '2020-10-22 00:57:27', '2020-10-22 00:57:27', NULL),
(9, NULL, 1, 'Chemicals', 'chemicals', '2020-10-22 00:57:38', '2020-10-22 00:57:38', NULL),
(10, NULL, 1, 'Brands', 'brands', '2020-10-22 00:57:52', '2020-10-22 00:57:52', NULL),
(11, 10, 1, 'Lancer', 'lancer', '2020-10-22 00:58:27', '2020-10-22 00:58:27', NULL),
(12, 10, 1, 'Excalibur', 'excalibur', '2020-10-22 00:58:53', '2020-10-22 00:58:53', NULL),
(13, 10, 1, 'Evolution', 'evolution', '2020-10-22 00:59:05', '2020-10-22 00:59:21', NULL),
(14, 10, 1, 'STI Silicons', 'sti-silicons', '2020-10-22 00:59:37', '2020-10-22 00:59:37', NULL),
(16, 10, 1, 'Inknovators', 'inknovators', '2020-10-22 01:00:00', '2020-10-22 01:00:00', NULL),
(18, 10, 1, 'Antex', 'antex', '2020-10-22 01:00:27', '2020-10-22 01:00:27', NULL),
(19, 10, 1, 'Afford', 'afford', '2020-10-22 01:00:42', '2020-10-22 01:00:42', NULL),
(20, 10, 1, 'Rhinotech', 'rhinotech', '2020-10-22 01:01:00', '2020-10-22 01:01:00', NULL),
(21, 10, 1, 'Imagemate', 'imagemate', '2020-10-22 01:01:16', '2020-10-22 01:01:16', NULL),
(22, 10, 1, 'DST', 'dst', '2020-10-22 01:01:31', '2020-10-22 01:01:31', NULL),
(23, 10, 1, 'Acosgraf', 'acosgraf', '2020-10-22 01:01:43', '2020-10-22 01:01:43', NULL),
(24, 10, 1, 'Perfectone', 'perfectone', '2020-10-22 01:01:56', '2020-10-22 01:01:56', NULL),
(25, 10, 1, 'Perfect Color', 'perfect-color', '2020-10-22 01:02:09', '2020-10-22 01:02:09', NULL),
(26, 10, 1, 'South Tech', 'south-tech', '2020-10-22 01:02:24', '2020-10-22 01:02:24', NULL),
(28, 10, 1, 'Salipt', 'salipt', '2020-10-22 01:02:54', '2020-10-22 01:02:54', NULL),
(29, 9, 1, 'Allover Printing Chemical', 'allover-printing-chemical', '2020-10-22 01:03:12', '2020-10-22 01:03:12', NULL),
(30, 9, 1, 'Digital Printing Chemicals', 'digital-printing-chemicals', '2020-10-22 01:03:24', '2020-10-22 01:03:24', NULL),
(31, 9, 1, 'Washing Chemicals', 'washing-chemicals', '2020-10-22 01:03:45', '2020-10-22 01:03:45', NULL),
(32, 9, 1, 'Dyeing Chemicals', 'dyeing-chemicals', '2020-10-22 01:03:57', '2020-10-22 01:03:57', NULL),
(33, 9, 1, 'Finishing Chemicals', 'finishing-chemicals', '2020-10-22 01:04:09', '2020-10-22 01:04:09', NULL),
(34, 9, 1, 'Laboratory Chemicals', 'laboratory-chemicals', '2020-10-22 01:04:27', '2020-10-22 01:04:27', NULL),
(35, 9, 1, 'Paper Chemicals', 'paper-chemicals', '2020-10-22 01:04:47', '2020-10-22 01:04:47', NULL),
(36, 9, 1, 'Argo Chemicals', 'argo-chemicals', '2020-10-22 01:04:58', '2020-10-22 01:04:58', NULL),
(37, 9, 1, 'Phermaceutical Chemicals', 'phermaceutical-chemicals', '2020-10-22 01:05:10', '2020-10-22 01:05:10', NULL),
(38, 9, 1, 'Packaging Chemicals', 'packaging-chemicals', '2020-10-22 01:05:25', '2020-10-22 01:05:25', NULL),
(39, 9, 1, 'Cleaning Chemicals', 'cleaning-chemicals', '2020-10-22 01:05:37', '2020-10-22 01:05:37', NULL),
(40, 9, 1, 'Ceramic Chemicals', 'ceramic-chemicals', '2020-10-22 01:05:49', '2020-10-22 01:05:49', NULL),
(41, 9, 1, 'Paint & Ink Manufacturing Chemicals', 'paint-and-ink-manufacturing-chemicals', '2020-10-22 01:06:12', '2020-10-22 01:06:12', NULL),
(42, 8, 1, 'Vinyl', 'vinyl', '2020-10-22 01:06:26', '2020-10-22 01:06:26', NULL),
(43, 8, 1, 'Screen Mesh', 'screen-mesh', '2020-10-22 01:06:40', '2020-10-22 01:06:40', NULL),
(44, 8, 1, 'Squegges', 'squegges', '2020-10-22 01:06:54', '2020-10-22 01:06:54', NULL),
(45, 8, 1, 'Emulsion', 'emulsion', '2020-10-22 01:07:10', '2020-10-22 01:07:10', NULL),
(47, 8, 1, 'Tape, Paper & Film', 'tape-paper-and-film', '2020-10-22 01:07:53', '2020-10-22 01:07:53', NULL),
(48, 7, 1, 'Inks', 'inks', '2020-10-22 01:08:13', '2020-10-31 12:03:04', '<p>TEST DESCRIPTION</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;\">Sed libero ante, convallis eget venenatis vitae, mollis sed arcu. Cras tempor ex sit amet turpis sodales aliquet. Aenean id scelerisque ante. Suspendisse sed sollicitudin libero, eget iaculis velit.</p>\r\n<ul>\r\n<li style=\"text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;\">Nullam et nisi tempus, commodo leo vel,</li>\r\n<li style=\"text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;\">mollis ex. Maecenas vitae cursus nibh.</li>\r\n<li style=\"text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;\">Cras ac molestie ligula, eu porta orci.</li>\r\n</ul>'),
(49, 7, 1, 'Film & Output Inks', 'film-and-output-inks', '2020-10-22 01:08:36', '2020-10-22 01:08:36', NULL),
(50, 7, 1, 'Screen Printing Ink', 'screen-printing-ink', '2020-10-22 01:09:00', '2020-10-22 01:09:00', NULL),
(51, 7, 1, 'Offset Press Inks', 'offset-press-inks', '2020-10-22 01:09:15', '2020-10-22 01:09:15', NULL),
(52, 7, 1, 'Sublimation Inks', 'sublimation-inks', '2020-10-22 01:09:28', '2020-10-22 01:09:28', NULL),
(53, 7, 1, 'Pad Printing Inks', 'pad-printing-inks', '2020-10-22 01:09:40', '2020-10-22 01:09:40', NULL),
(54, 7, 1, 'Security Inks', 'security-inks', '2020-10-22 01:09:51', '2020-10-22 01:09:51', NULL),
(55, 7, 1, 'Heat Transfer Inks', 'heat-transfer-inks', '2020-10-22 01:10:05', '2020-10-22 01:10:05', NULL),
(56, 7, 1, 'Decal Printing Inks', 'decal-printing-inks', '2020-10-22 01:10:19', '2020-10-22 01:10:19', NULL),
(57, 7, 1, 'Digital Printing Inks', 'digital-printing-inks', '2020-10-22 01:10:34', '2020-10-22 01:10:34', NULL),
(59, 7, 1, 'Desktop Printing Inks', 'desktop-printing-inks', '2020-10-22 01:11:19', '2020-10-22 01:11:19', NULL),
(60, 7, 1, 'Pigment Printing Inks', 'pigment-printing-inks', '2020-10-22 01:11:35', '2020-10-22 01:11:35', NULL),
(61, 7, 1, 'Flexo Printing Inks', 'flexo-printing-inks', '2020-10-22 01:11:50', '2020-10-22 01:11:50', NULL),
(62, 10, 1, 'Chromaline', 'chromaline', '2020-11-09 10:31:00', '2020-11-09 10:44:24', '<div id=\"panel-5596-3-0-0\" class=\"so-panel widget widget_sow-headline panel-first-child\" style=\"font-family: Lato, -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; zoom: 1; margin-bottom: 30px; color: #555555; font-size: medium;\" data-index=\"9\">\r\n<div class=\"so-widget-sow-headline so-widget-sow-headline-default-83fab2a0aaa2\">\r\n<div class=\"sow-headline-container \">\r\n<h6 class=\"sow-headline\" style=\"font-family: Montserrat; font-weight: 500; color: #333333; line-height: 36px; font-size: 26px; margin-bottom: 0px !important; margin-top: 0px !important; text-align: left;\">\"ChromaLime is exactly what I\'ve been looking for. I\'m shooting six second exposures on LED and it holds up all day! A great product from a great company.\"</h6>\r\n<p><!-- [if !supportLists]--><span style=\"font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings;\"><span style=\"mso-list: Ignore;\">&Oslash;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]-->Good screen printing results start with a good stencil, and the best stencils start with the right emulsion. Our premium screen printing emulsions are extremely high quality, easy to apply to the screen, and easy to reclaim.</p>\r\n<p><!-- [if !supportLists]--><span style=\"font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings;\"><span style=\"mso-list: Ignore;\">&Oslash;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]-->Chromaline branded screen printing emulsions are engineered and manufactured for outstanding performance and consistency. As your business continues to grow, don&rsquo;t let production slow down due to inferior supplies.</p>\r\n<p><!-- [if !supportLists]--><span style=\"font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings;\"><span style=\"mso-list: Ignore;\">&Oslash;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]-->Rely on Chromaline&rsquo;s premium screen printing emulsions to deliver high quality images without the need to remake screens. In addition, reclaiming your screens has never been easier.</p>\r\n<h3 style=\"margin-bottom: 0.75em; margin-top: 0.75em; background-color: #efefef;\"><span style=\"color: #007ac2;\"><span style=\"font-weight: bolder;\">Premium Emulsion Recommendations</span></span></h3>\r\n<p style=\"line-height: 28.56px; background-color: #efefef;\"><span style=\"color: #007ac2;\">✓</span>&nbsp;<span style=\"font-weight: bolder;\">Desire faster exposure times and only work with plastisol inks?</span>&nbsp;Try&nbsp;<a style=\"background-color: transparent; color: #177ac2; text-decoration-line: none;\" href=\"https://shop.chromaline.com/chromalime/\" target=\"_blank\" rel=\"noopener\">ChromaLime</a>, our next generation technology<br /><span style=\"color: #007ac2;\">✓</span>&nbsp;<span style=\"font-weight: bolder;\">Desire the ability to make HD stencils?</span>&nbsp;Try&nbsp;<a style=\"background-color: transparent; color: #177ac2; text-decoration-line: none;\" href=\"https://shop.chromaline.com/chromablue/\" target=\"_blank\" rel=\"noopener\">ChromaBlue</a><br /><span style=\"color: #007ac2;\">✓</span>&nbsp;<span style=\"font-weight: bolder;\">Printing with water based inks?</span>&nbsp;Try&nbsp;<a style=\"background-color: transparent; color: #177ac2; text-decoration-line: none;\" href=\"https://shop.chromaline.com/chromatech-wr/\" target=\"_blank\" rel=\"noopener\">ChromaTech-WR</a><br /><span style=\"color: #007ac2;\">✓</span>&nbsp;<span style=\"font-weight: bolder;\">Using aggressive inks like UV, enamel, and solvents?</span>&nbsp;Try&nbsp;<a style=\"background-color: transparent; color: #177ac2; text-decoration-line: none;\" href=\"https://shop.chromaline.com/magnacure-udc-2/\" target=\"_blank\" rel=\"noopener\">UDC-2</a>&nbsp;or&nbsp;<a style=\"background-color: transparent; color: #177ac2; text-decoration-line: none;\" href=\"https://shop.chromaline.com/magnacure-udc-ace/\" target=\"_blank\" rel=\"noopener\">UDC-ACE</a></p>\r\n</div>\r\n</div>\r\n</div>');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'Jamilur rahman', 'abir2jamilur30@gmail.com', 'hefjhkj', '2020-10-30 15:32:24', '2020-10-30 15:32:24'),
(2, 'Lloydfrits', 'w98ib6x@goposts.site', 'Hi, here on the forum guys advised a cool Dating site, be sure to register - you will not REGRET it [url=https://bit.ly/384HTnk]https://bit.ly/384HTnk[/url]', '2020-11-07 23:19:13', '2020-11-07 23:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `code`, `type`, `value`, `description`, `created_at`, `updated_at`) VALUES
(1, 'ssale', '99k', 'discout', '-50%', '50 percent DISCOUNT', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `custom_pages`
--

CREATE TABLE `custom_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_pages`
--

INSERT INTO `custom_pages` (`id`, `title`, `label`, `content`, `created_at`, `updated_at`) VALUES
(2, 'Free shipping', 'shipping', '<header class=\"page-masthead\" style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); max-width: 1400px; padding-right: 25px; padding-left: 25px; margin: 50px auto; text-align: center; font-family: \'Open Sans\', sans-serif; font-size: 16px;\">\r\n<h1 class=\"page-title\" style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 30px; margin: 0.67em 0px; text-transform: uppercase; letter-spacing: 0em; color: #333333;\" data-open-accessibility-text-original=\"30px\">FREE SHIPPING POLICY</h1>\r\n</header>\r\n<div class=\"page-content rte\" style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); max-width: 1150px; padding-right: 25px; padding-left: 25px; margin: 50px auto; font-size: 16px; line-height: 1.625; font-family: \'Open Sans\', sans-serif;\">\r\n<div style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 30px; border-radius: 0px;\">\r\n<h3 style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-transform: uppercase; letter-spacing: 0em; font-size: 22px; margin-top: 2rem; margin-bottom: 1rem; color: #333333;\" data-open-accessibility-text-original=\"22px\">GENERAL FREE SHIPPING POLICY</h3>\r\nOrders including $200&nbsp;or more of&nbsp;<em style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\">*eligible items</em>&nbsp;qualify for FREE Ground Shipping.\r\n<ul style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1rem; margin-bottom: 1rem; padding-left: 20px;\">\r\n<li style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\" data-open-accessibility-text-original=\"16px\">Orders below $200 ship for a flat $19.95.</li>\r\n</ul>\r\n<p style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1rem; margin-bottom: 1rem;\" data-open-accessibility-text-original=\"16px\"><span style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-weight: bold;\">Note:</span>&nbsp;Items may not be shipped to Alaska and Hawaii using free shipping.</p>\r\n<p style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1rem; margin-bottom: 1rem;\" data-open-accessibility-text-original=\"16px\">If your order doesn\'t qualify for free shipping, your order may contain:</p>\r\n<p style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1rem; margin-bottom: 1rem;\" data-open-accessibility-text-original=\"16px\">&bull; Marketplace Items</p>\r\n<p style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1rem; margin-bottom: 1rem;\" data-open-accessibility-text-original=\"16px\">&bull; Shipping Address Outside of Contiguous U.S.</p>\r\n<p style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1rem; margin-bottom: 1rem;\" data-open-accessibility-text-original=\"16px\">&bull; Cart contains Equipment, Kits or a Package.</p>\r\n<hr style=\"box-sizing: content-box; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 0px; overflow: visible;\" /><br style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\" />\r\n<h3 style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-transform: uppercase; letter-spacing: 0em; font-size: 22px; margin-top: 2rem; margin-bottom: 1rem; color: #333333;\" data-open-accessibility-text-original=\"22px\">EQUIPMENT FLAT RATES&nbsp;</h3>\r\n<p style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1rem; margin-bottom: 1rem;\" data-open-accessibility-text-original=\"16px\">&nbsp;Flat rate shipping charges will be assigned to our Equipment.</p>\r\n<br style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\" />Equipment Items will have nominal flat rate charges depending on size, weight, dimensions, and crafting material needed for the products. The flat rate charge will be in addition to the general flat rate.&nbsp;<br style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\" /><hr style=\"box-sizing: content-box; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 0px; overflow: visible;\" /><br style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\" />\r\n<h3 style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-transform: uppercase; letter-spacing: 0em; font-size: 22px; margin-top: 2rem; margin-bottom: 1rem; color: #333333;\" data-open-accessibility-text-original=\"22px\">ELIGIBLE FREE SHIPPING ITEMS</h3>\r\n<p style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1rem; margin-bottom: 1rem;\" data-open-accessibility-text-original=\"16px\">*Eligible items are products that are consumed and re-ordered on a frequent basis.</p>\r\n<p style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1rem; margin-bottom: 1rem;\" data-open-accessibility-text-original=\"16px\"><span style=\"box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-weight: bold;\">Eligible items:</span>&nbsp;Most plastisol &amp; water-based inks, screens, meshes, squeegees, chemicals, emulsions, films, output inks, software, tapes, transfer supplies.</p>\r\nPlease contact our Success team at 1-800-314-6390 with any questions.</div>\r\n</div>', '2020-10-31 09:39:17', '2020-10-31 09:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{}', 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 0, 0, 0, 0, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, '{}', 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 6),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 7),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '{}', 2),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '{}', 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, '{}', 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'order_number', 'text', 'Order Number', 1, 1, 1, 1, 1, 1, '{}', 3),
(58, 7, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(59, 7, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"options\":{\"pending\":\"Pending\",\"processing\":\"Processing\",\"completed\":\"Completed\",\"decline\":\"Decline\"}}', 4),
(60, 7, 'grand_total', 'text', 'Grand Total', 1, 1, 1, 1, 1, 1, '{}', 5),
(61, 7, 'item_count', 'text', 'Item Count', 1, 1, 1, 1, 1, 1, '{}', 6),
(62, 7, 'is_paid', 'checkbox', 'Is Paid', 1, 1, 1, 1, 1, 1, '{\"on\":\"Paid\",\"off\":\"Not Paid\",\"checked\":true}', 7),
(63, 7, 'payment_method', 'text', 'Payment Method', 1, 1, 1, 1, 1, 1, '{\"options\":{\"cash_on_delivery\":\"Cash On Delivery\",\"reward_point\":\"Reward Point\",\"wallet\":\"Wallet\",\"bkash\":\"Bkash\"}}', 8),
(64, 7, 'shipping_fullname', 'text', 'Shipping Fullname', 1, 1, 1, 1, 1, 1, '{}', 9),
(65, 7, 'shipping_address', 'text', 'Shipping Address', 1, 1, 1, 1, 1, 1, '{}', 10),
(66, 7, 'shipping_city', 'text', 'Shipping City', 1, 0, 1, 1, 1, 1, '{}', 11),
(67, 7, 'shipping_state', 'text', 'Shipping State', 1, 0, 1, 1, 1, 1, '{}', 12),
(68, 7, 'shipping_zipcode', 'text', 'Shipping Zipcode', 1, 0, 1, 1, 1, 1, '{}', 13),
(69, 7, 'shipping_phone', 'text', 'Shipping Phone', 1, 1, 1, 1, 1, 1, '{}', 14),
(70, 7, 'notes', 'text', 'Notes', 0, 1, 1, 1, 1, 1, '{}', 15),
(71, 7, 'billing_fullname', 'text', 'Billing Fullname', 1, 1, 1, 1, 1, 1, '{}', 16),
(72, 7, 'billing_address', 'text', 'Billing Address', 1, 1, 1, 1, 1, 1, '{}', 17),
(73, 7, 'billing_city', 'text', 'Billing City', 1, 0, 1, 1, 1, 1, '{}', 18),
(74, 7, 'billing_state', 'text', 'Billing State', 1, 0, 1, 1, 1, 1, '{}', 19),
(75, 7, 'billing_zipcode', 'text', 'Billing Zipcode', 1, 0, 1, 1, 1, 1, '{}', 20),
(76, 7, 'billing_phone', 'text', 'Billing Phone', 1, 1, 1, 1, 1, 1, '{}', 21),
(77, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 22),
(78, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 23),
(79, 7, 'order_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 24),
(80, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(81, 8, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(82, 8, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(83, 8, 'is_active', 'checkbox', 'Is Active', 1, 1, 1, 1, 1, 1, '{\"on\":\"Active\",\"off\":\"Inactive\",\"checked\":true}', 4),
(84, 8, 'description', 'text_area', 'Description', 0, 1, 1, 1, 1, 1, '{}', 5),
(85, 8, 'rating', 'text', 'Rating', 0, 1, 1, 1, 1, 1, '{}', 6),
(86, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(87, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(88, 8, 'shop_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 9),
(89, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(90, 9, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(91, 9, 'description', 'rich_text_box', 'Description', 1, 1, 1, 1, 1, 1, '{}', 3),
(92, 9, 'price', 'text', 'Price', 1, 1, 1, 1, 1, 1, '{}', 4),
(93, 9, 'cover_img', 'image', 'Cover Img', 0, 1, 1, 1, 1, 1, '{}', 5),
(94, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(95, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(96, 9, 'product_belongsto_shop_relationship', 'relationship', 'shops', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Shop\",\"table\":\"shops\",\"type\":\"belongsTo\",\"column\":\"shop_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(97, 9, 'shop_id', 'text', 'Shop Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(100, 9, 'product_belongstomany_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Category\",\"table\":\"categories\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"product_categories\",\"pivot\":\"1\",\"taggable\":\"on\"}', 9),
(101, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(102, 10, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(103, 10, 'code', 'text', 'Code', 1, 1, 1, 1, 1, 1, '{}', 3),
(104, 10, 'type', 'text', 'Type', 1, 1, 1, 1, 1, 1, '{}', 4),
(105, 10, 'value', 'text', 'Value', 1, 1, 1, 1, 1, 1, '{}', 5),
(106, 10, 'description', 'text', 'Description', 0, 1, 1, 1, 1, 1, '{}', 6),
(107, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(108, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(109, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(110, 11, 'sub_order_id', 'text', 'Sub Order Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(111, 11, 'transaction_id', 'text', 'Transaction Id', 1, 1, 1, 1, 1, 1, '{}', 3),
(112, 11, 'amount_paid', 'text', 'Amount Paid', 1, 1, 1, 1, 1, 1, '{}', 4),
(113, 11, 'commission', 'text', 'Commission', 1, 1, 1, 1, 1, 1, '{}', 5),
(114, 11, 'status', 'checkbox', 'Status', 1, 1, 1, 1, 1, 1, '{}', 6),
(115, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(116, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(117, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 0),
(118, 12, 'order_id', 'text', 'Order Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(119, 12, 'seller_id', 'text', 'Seller Id', 1, 1, 1, 1, 1, 1, '{}', 3),
(120, 12, 'status', 'text', 'Status', 1, 1, 1, 1, 1, 1, '{}', 4),
(121, 12, 'grand_total', 'text', 'Grand Total', 1, 1, 1, 1, 1, 1, '{}', 5),
(122, 12, 'item_count', 'text', 'Item Count', 1, 1, 1, 1, 1, 1, '{}', 6),
(123, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(124, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(125, 9, 'featured', 'checkbox', 'Featured', 0, 1, 1, 1, 1, 1, '{\"on\":\"yes\",\"off\":\"no\"}', 9),
(126, 9, 'top_product', 'checkbox', 'Top Product', 0, 1, 1, 1, 1, 1, '{\"on\":\"yes\",\"off\":\"no\"}', 10),
(127, 9, 'cash_back_percent', 'number', 'Cash Back Percent', 0, 1, 1, 1, 1, 1, '{}', 11),
(128, 9, 'reward_point', 'number', 'Reward Point', 0, 1, 1, 1, 1, 1, '{}', 12),
(129, 4, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, '{}', 4),
(130, 5, 'pdf', 'file', 'Pdf', 1, 1, 1, 1, 1, 1, '{}', 16),
(131, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(132, 16, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(133, 16, 'label', 'text', 'Label', 1, 1, 1, 1, 1, 1, '{}', 3),
(134, 16, 'content', 'rich_text_box', 'Content', 1, 1, 1, 1, 1, 1, '{}', 4),
(135, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(136, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(137, 17, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(138, 17, 'url', 'text', 'Url', 1, 1, 1, 1, 1, 1, '{}', 2),
(139, 17, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(140, 17, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(141, 19, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(142, 19, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(143, 19, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(144, 19, 'msg', 'text', 'Msg', 1, 1, 1, 1, 1, 1, '{}', 4),
(145, 19, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(146, 19, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(147, 21, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(148, 21, 'question', 'text', 'Question', 1, 1, 1, 1, 1, 1, '{}', 2),
(149, 21, 'answer', 'text', 'Answer', 1, 1, 1, 1, 1, 1, '{}', 3),
(150, 21, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(151, 21, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(152, 22, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(153, 22, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(154, 22, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(155, 22, 'is_active', 'text', 'Is Active', 1, 1, 1, 1, 1, 1, '{}', 4),
(156, 22, 'description', 'text', 'Description', 0, 1, 1, 1, 1, 1, '{}', 5),
(157, 22, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(158, 22, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(159, 22, 'wholesale_hasmany_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(160, 23, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(161, 23, 'product_id', 'text', 'Product Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(162, 23, 'size', 'text', 'Size', 1, 1, 1, 1, 1, 1, '{}', 3),
(163, 23, 'price', 'number', 'Price', 1, 1, 1, 1, 1, 1, '{}', 4),
(164, 23, 'SKU', 'text', 'SKU', 1, 1, 1, 1, 1, 1, '{}', 5),
(165, 23, 'status', 'checkbox', 'Status', 1, 1, 1, 1, 1, 1, '{\"on\":\"on\",\"off\":\"off\"}', 6),
(166, 23, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(167, 23, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(168, 23, 'product_attribute_belongsto_product_relationship', 'relationship', 'products', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Product\",\"table\":\"products\",\"type\":\"belongsTo\",\"column\":\"product_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 9),
(169, 9, 'product_hasmany_product_attribute_relationship', 'relationship', 'product_attributes', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\ProductAttribute\",\"table\":\"product_attributes\",\"type\":\"hasMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"sku\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 13),
(170, 24, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(171, 24, 'category_id', 'number', 'Category Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(172, 24, 'video', 'text', 'Video', 1, 1, 1, 1, 1, 1, '{}', 3),
(173, 24, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 4),
(174, 24, 'description', 'text', 'Description', 1, 1, 1, 1, 1, 1, '{}', 5),
(175, 24, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(176, 24, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(177, 25, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(178, 25, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(179, 25, 'description', 'text', 'Description', 1, 1, 1, 1, 1, 1, '{}', 4),
(180, 25, 'parent', 'text', 'Parent', 0, 1, 1, 1, 1, 1, '{}', 2),
(181, 25, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(182, 25, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(183, 24, 'video_belongsto_video_category_relationship', 'relationship', 'video_categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\VideoCategory\",\"table\":\"video_categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(185, 25, 'video_category_belongsto_video_category_relationship', 'relationship', 'video_categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\VideoCategory\",\"table\":\"video_categories\",\"type\":\"belongsTo\",\"column\":\"parent\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(186, 9, 'min_qty', 'number', 'Min Qty', 0, 1, 1, 1, 1, 1, '{}', 14),
(187, 9, 'wholesale_id', 'text', 'Wholesale Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(188, 9, 'product_video', 'text', 'Product Video', 0, 1, 1, 1, 1, 1, '{}', 15),
(189, 9, 'wholesale_qty', 'number', 'Wholesale Qty', 0, 1, 1, 1, 1, 1, '{}', 16),
(190, 9, 'retail_qty', 'number', 'Retail Qty', 0, 1, 1, 1, 1, 1, '{}', 17),
(191, 26, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(192, 26, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(193, 26, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(194, 26, 'ebook_title', 'text', 'Ebook Title', 1, 1, 1, 1, 1, 1, '{}', 4),
(195, 26, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(196, 26, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(197, 27, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(198, 27, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(199, 27, 'amount', 'text', 'Amount', 1, 1, 1, 1, 1, 1, '{}', 3),
(200, 27, 'amount_spend', 'text', 'Amount Spend', 1, 1, 1, 1, 1, 1, '{}', 4),
(201, 27, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(202, 27, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(203, 27, 'wallet_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7),
(204, 28, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(205, 28, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(206, 28, 'point', 'text', 'Point', 1, 1, 1, 1, 1, 1, '{}', 3),
(207, 28, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(208, 28, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(209, 28, 'reward_point_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 6),
(210, 29, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(211, 29, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(212, 29, 'card_id', 'text', 'Card Id', 1, 1, 1, 1, 1, 1, '{}', 3),
(213, 29, 'amount', 'text', 'Amount', 1, 1, 1, 1, 1, 1, '{}', 4),
(214, 29, 'is_spent', 'text', 'Is Spent', 1, 1, 1, 1, 1, 1, '{}', 5),
(215, 29, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(216, 29, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(217, 29, 'purchas_done', 'text', 'Purchas Done', 1, 1, 1, 1, 1, 1, '{}', 8),
(218, 29, 'uid', 'text', 'Uid', 1, 1, 1, 1, 1, 1, '{}', 9),
(219, 29, 'gift_card_purchase_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(220, 29, 'gift_card_purchase_belongsto_gift_card_relationship', 'relationship', 'gift_cards', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\GiftCard\",\"table\":\"gift_cards\",\"type\":\"belongsTo\",\"column\":\"card_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 11),
(221, 30, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(222, 30, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(223, 30, 'amount', 'text', 'Amount', 1, 1, 1, 1, 1, 1, '{}', 3),
(224, 30, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(225, 30, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(226, 30, 'uid', 'text', 'Uid', 1, 1, 1, 1, 1, 1, '{}', 6),
(227, 31, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(228, 31, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(229, 31, 'comment', 'text', 'Comment', 1, 1, 1, 1, 1, 1, '{}', 3),
(230, 31, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(231, 31, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(232, 9, 'product_belongsto_wholesale_relationship', 'relationship', 'wholesales', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Wholesale\",\"table\":\"wholesales\",\"type\":\"belongsTo\",\"column\":\"wholesale_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 18),
(233, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 1, 1, 1, 1, 1, '{}', 6),
(234, 1, 'phone', 'number', 'Phone', 1, 1, 1, 1, 1, 1, '{}', 12),
(235, 9, 'refurbish_product', 'checkbox', 'Refurbish Product', 1, 1, 1, 1, 1, 1, '{\"on\":\"yes\",\"off\":\"no\"}', 18),
(236, 32, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(237, 32, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(238, 32, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(239, 32, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(240, 5, 'post_belongsto_post_category_relationship', 'relationship', 'post_categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\PostCategory\",\"table\":\"post_categories\",\"type\":\"belongsTo\",\"column\":\"post_cat_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 17),
(241, 5, 'post_cat_id', 'text', 'Post Cat Id', 0, 1, 1, 1, 1, 1, '{}', 2),
(242, 9, 'product_pdf', 'file', 'Product Pdf', 1, 1, 1, 1, 1, 1, '{}', 19);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-10-11 02:06:38', '2020-11-02 01:53:52'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-10-11 02:06:39', '2020-10-31 11:50:05'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-10-11 02:06:39', '2020-11-12 00:12:36'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2020-10-11 02:06:39', '2020-10-11 02:06:39'),
(7, 'orders', 'orders', 'Order', 'Orders', 'voyager-buy', 'App\\Order', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-11 02:13:53', '2020-10-19 10:49:06'),
(8, 'shops', 'shops', 'Shop', 'Shops', 'voyager-shop', 'App\\Shop', 'App\\Policies\\ShopPolicy', 'App\\Http\\Controllers\\Admin\\ShopController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-12 00:18:19', '2020-10-12 02:28:20'),
(9, 'products', 'products', 'Product', 'Products', 'voyager-bag', 'App\\Product', 'App\\Policies\\ProductPolicy', 'App\\Http\\Controllers\\Admin\\ProductController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-12 03:02:30', '2020-11-12 03:57:52'),
(10, 'coupons', 'coupons', 'Coupon', 'Coupons', NULL, 'App\\Coupon', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-10-14 08:44:03', '2020-10-14 08:44:03'),
(11, 'transactions', 'transactions', 'Transaction', 'Transactions', NULL, 'App\\Transaction', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-10-15 10:39:04', '2020-10-15 10:39:04'),
(12, 'sub_orders', 'sub-orders', 'Sub Order', 'Sub Orders', NULL, 'App\\SubOrder', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-10-15 10:40:36', '2020-10-15 10:40:36'),
(16, 'custom_pages', 'custom-pages', 'Custom Page', 'Custom Pages', NULL, 'App\\CustomPages', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-31 02:16:37', '2020-10-31 09:35:54'),
(17, 'home_videos', 'home-videos', 'Home Video', 'Home Videos', NULL, 'App\\HomeVideo', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-10-31 05:20:37', '2020-10-31 05:20:37'),
(19, 'contacts', 'contacts', 'Contact', 'Contacts', NULL, 'App\\Contact', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-10-31 06:49:37', '2020-10-31 06:49:37'),
(21, 'faqs', 'faqs', 'Faq', 'Faqs', NULL, 'App\\Faq', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-10-31 07:03:21', '2020-10-31 07:03:21'),
(22, 'wholesales', 'wholesales', 'Wholesale', 'Wholesales', NULL, 'App\\Wholesale', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-10-31 11:08:29', '2020-11-02 00:48:28'),
(23, 'product_attributes', 'product-attributes', 'Product Attribute', 'Product Attributes', NULL, 'App\\ProductAttribute', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-11-01 08:23:14', '2020-11-01 09:51:09'),
(24, 'videos', 'videos', 'Video', 'Videos', NULL, 'App\\Video', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-11-01 08:35:57', '2020-11-06 22:04:33'),
(25, 'video_categories', 'video-categories', 'Video Category', 'Video Categories', NULL, 'App\\VideoCategory', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-11-01 08:36:29', '2020-11-06 22:04:51'),
(26, 'ebook_requests', 'ebook-requests', 'Ebook Request', 'Ebook Requests', NULL, 'App\\EbookRequest', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-11-01 09:23:34', '2020-11-01 09:23:34'),
(27, 'wallets', 'wallets', 'Wallet', 'Wallets', NULL, 'App\\Wallet', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-11-02 00:48:43', '2020-11-02 00:49:33'),
(28, 'reward_points', 'reward-points', 'Reward Point', 'Reward Points', NULL, 'App\\RewardPoint', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-11-02 00:50:39', '2020-11-02 00:52:23'),
(29, 'gift_card_purchases', 'gift-card-purchases', 'Gift Card Purchase', 'Gift Card Purchases', NULL, 'App\\GiftCardPurchase', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-11-02 00:52:49', '2020-11-02 00:54:47'),
(30, 'gift_cards', 'gift-cards', 'Gift Card', 'Gift Cards', NULL, 'App\\GiftCard', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-11-02 00:57:44', '2020-11-02 00:57:44'),
(31, 'site_reviews', 'site-reviews', 'Site Review', 'Site Reviews', NULL, 'App\\SiteReview', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-11-02 00:58:31', '2020-11-02 00:58:31'),
(32, 'post_categories', 'post-categories', 'Post Category', 'Post Categories', NULL, 'App\\PostCategory', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-11-12 00:05:07', '2020-11-12 00:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `ebook_requests`
--

CREATE TABLE `ebook_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ebook_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ebook_requests`
--

INSERT INTO `ebook_requests` (`id`, `name`, `email`, `ebook_title`, `created_at`, `updated_at`) VALUES
(1, 'Jamilur rahman', 'abir2jamilur30@gmail.com', 'abs', '2020-11-01 09:34:49', '2020-11-01 09:34:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'test question', 'test answer', '2020-10-31 07:05:25', '2020-10-31 07:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `gift_cards`
--

CREATE TABLE `gift_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gift_cards`
--

INSERT INTO `gift_cards` (`id`, `name`, `amount`, `created_at`, `updated_at`, `uid`) VALUES
(4, '200 BDT', 200.00, NULL, NULL, 'xyz'),
(5, '300 BDT', 300.00, NULL, NULL, 'xyz-5'),
(6, '20000 BDT', 20000.00, NULL, NULL, 'xyz-60');

-- --------------------------------------------------------

--
-- Table structure for table `gift_card_purchases`
--

CREATE TABLE `gift_card_purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `card_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(8,2) NOT NULL,
  `is_spent` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `purchas_done` tinyint(1) NOT NULL DEFAULT 0,
  `uid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gift_card_purchases`
--

INSERT INTO `gift_card_purchases` (`id`, `user_id`, `card_id`, `amount`, `is_spent`, `created_at`, `updated_at`, `purchas_done`, `uid`) VALUES
(8, 3, 6, 17940.00, 0, '2020-10-20 08:38:15', '2020-10-20 08:38:15', 1, 'xyz-60'),
(9, 3, 5, 300.00, 0, '2020-10-20 08:38:19', '2020-10-20 08:38:19', 1, 'xyz-5'),
(10, 3, 4, 0.00, 0, '2020-10-20 08:39:05', '2020-10-20 08:39:05', 1, 'xyz'),
(11, 3, 6, 20000.00, 0, '2020-11-01 00:50:20', '2020-11-01 00:50:20', 0, 'xyz-60'),
(12, 3, 4, 200.00, 0, '2020-11-02 03:09:55', '2020-11-02 03:09:55', 0, 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `home_videos`
--

CREATE TABLE `home_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_videos`
--

INSERT INTO `home_videos` (`id`, `url`, `created_at`, `updated_at`) VALUES
(4, 'https://www.youtube.com/embed/bC_czAL24zY', '2020-10-31 11:46:08', '2020-10-31 11:46:08'),
(5, 'https://www.youtube.com/embed/bC_czAL24zY', '2020-10-31 11:46:19', '2020-10-31 11:46:19');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-10-11 02:06:38', '2020-10-11 02:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-10-11 02:06:38', '2020-10-11 02:06:38', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2020-10-11 02:06:38', '2020-10-11 02:06:38', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2020-10-11 02:06:38', '2020-10-11 02:06:38', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2020-10-11 02:06:38', '2020-10-11 02:06:38', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2020-10-11 02:06:38', '2020-10-11 02:06:38', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2020-10-11 02:06:38', '2020-10-11 02:06:38', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2020-10-11 02:06:38', '2020-10-11 02:06:38', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2020-10-11 02:06:38', '2020-10-11 02:06:38', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2020-10-11 02:06:38', '2020-10-11 02:06:38', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2020-10-11 02:06:38', '2020-10-11 02:06:38', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 8, '2020-10-11 02:06:39', '2020-10-11 02:06:39', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 6, '2020-10-11 02:06:39', '2020-10-11 02:06:39', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 7, '2020-10-11 02:06:39', '2020-10-11 02:06:39', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 13, '2020-10-11 02:06:39', '2020-10-11 02:06:39', 'voyager.hooks', NULL),
(15, 1, 'Orders', '', '_self', 'voyager-buy', NULL, NULL, 15, '2020-10-11 02:13:53', '2020-10-11 02:13:53', 'voyager.orders.index', NULL),
(16, 1, 'Shops', '', '_self', 'voyager-shop', NULL, NULL, 16, '2020-10-12 00:18:19', '2020-10-12 00:18:19', 'voyager.shops.index', NULL),
(17, 1, 'Products', '', '_self', 'voyager-bag', NULL, NULL, 17, '2020-10-12 03:02:30', '2020-10-12 03:02:30', 'voyager.products.index', NULL),
(18, 1, 'Coupons', '', '_self', NULL, NULL, NULL, 18, '2020-10-14 08:44:03', '2020-10-14 08:44:03', 'voyager.coupons.index', NULL),
(19, 1, 'Order Management', '', '_blank', NULL, '#000000', NULL, 19, '2020-10-15 06:12:53', '2020-10-15 06:25:22', 'seller.orders.index', 'null'),
(20, 1, 'Transactions', '', '_self', NULL, NULL, NULL, 20, '2020-10-15 10:39:04', '2020-10-15 10:39:04', 'voyager.transactions.index', NULL),
(21, 1, 'Sub Orders', '', '_self', NULL, NULL, NULL, 21, '2020-10-15 10:40:36', '2020-10-15 10:40:36', 'voyager.sub-orders.index', NULL),
(25, 1, 'Custom Pages', '', '_self', NULL, NULL, NULL, 22, '2020-10-31 02:16:38', '2020-10-31 02:16:38', 'voyager.custom-pages.index', NULL),
(26, 1, 'Home Videos', '', '_self', NULL, NULL, NULL, 23, '2020-10-31 05:20:38', '2020-10-31 05:20:38', 'voyager.home-videos.index', NULL),
(28, 1, 'Contacts', '', '_self', NULL, NULL, NULL, 25, '2020-10-31 06:49:37', '2020-10-31 06:49:37', 'voyager.contacts.index', NULL),
(30, 1, 'Faqs', '', '_self', NULL, NULL, NULL, 26, '2020-10-31 07:03:21', '2020-10-31 07:03:21', 'voyager.faqs.index', NULL),
(31, 1, 'Wholesales', '', '_self', NULL, NULL, NULL, 27, '2020-10-31 11:08:30', '2020-10-31 11:08:30', 'voyager.wholesales.index', NULL),
(32, 1, 'Product Attributes', '', '_self', NULL, NULL, NULL, 28, '2020-11-01 08:23:14', '2020-11-01 08:23:14', 'voyager.product-attributes.index', NULL),
(33, 1, 'Videos', '', '_self', NULL, NULL, NULL, 29, '2020-11-01 08:35:57', '2020-11-01 08:35:57', 'voyager.videos.index', NULL),
(34, 1, 'Video Categories', '', '_self', NULL, NULL, NULL, 30, '2020-11-01 08:36:30', '2020-11-01 08:36:30', 'voyager.video-categories.index', NULL),
(35, 1, 'Ebook Requests', '', '_self', NULL, NULL, NULL, 31, '2020-11-01 09:23:35', '2020-11-01 09:23:35', 'voyager.ebook-requests.index', NULL),
(36, 1, 'Wallets', '', '_self', NULL, NULL, NULL, 32, '2020-11-02 00:48:43', '2020-11-02 00:48:43', 'voyager.wallets.index', NULL),
(37, 1, 'Reward Points', '', '_self', NULL, NULL, NULL, 33, '2020-11-02 00:50:39', '2020-11-02 00:50:39', 'voyager.reward-points.index', NULL),
(38, 1, 'Gift Card Purchases', '', '_self', NULL, NULL, NULL, 34, '2020-11-02 00:52:49', '2020-11-02 00:52:49', 'voyager.gift-card-purchases.index', NULL),
(39, 1, 'Gift Cards', '', '_self', NULL, NULL, NULL, 35, '2020-11-02 00:57:46', '2020-11-02 00:57:46', 'voyager.gift-cards.index', NULL),
(40, 1, 'Site Reviews', '', '_self', NULL, NULL, NULL, 36, '2020-11-02 00:58:31', '2020-11-02 00:58:31', 'voyager.site-reviews.index', NULL),
(41, 1, 'Post Categories', '', '_self', NULL, NULL, NULL, 37, '2020-11-12 00:05:07', '2020-11-12 00:05:07', 'voyager.post-categories.index', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `from_user` bigint(20) UNSIGNED NOT NULL,
  `to_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`, `created_at`, `updated_at`, `from_user`, `to_user`) VALUES
(1, 'hello', '2020-11-12 00:16:22', '2020-11-12 00:16:22', 11, 3),
(2, 'kire', '2020-11-12 00:17:36', '2020-11-12 00:17:36', 11, 3),
(3, 'ok', '2020-11-12 00:18:12', '2020-11-12 00:18:12', 11, 3),
(4, 'hello', '2020-11-12 00:57:37', '2020-11-12 00:57:37', 4, 3),
(5, 'this is khalled', '2020-11-12 00:57:50', '2020-11-12 00:57:50', 4, 3),
(6, 'what product are you looking for?', '2020-11-12 00:58:34', '2020-11-12 00:58:34', 3, 4);

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_01_01_000000_create_pages_table', 1),
(6, '2016_01_01_000000_create_posts_table', 1),
(7, '2016_02_15_204651_create_categories_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(17, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(18, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(19, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(20, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(21, '2017_08_05_000000_add_group_to_settings_table', 1),
(22, '2017_11_26_013050_add_user_role_relationship', 1),
(23, '2017_11_26_015000_create_user_roles_table', 1),
(24, '2018_03_11_000000_add_user_settings', 1),
(25, '2018_03_14_000000_add_details_to_data_types_table', 1),
(26, '2018_03_16_000000_make_settings_value_nullable', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2020_10_04_035759_create_shops_table', 1),
(29, '2020_10_05_092527_create_products_table', 1),
(30, '2020_10_05_124342_create_orders_table', 1),
(31, '2020_10_05_135926_create_order_items_table', 1),
(32, '2020_10_05_162733_create_wishlists_table', 1),
(34, '2020_10_13_092415_create_product_categories_table', 2),
(35, '2020_10_14_162303_create_coupons_table', 3),
(36, '2020_10_15_105035_add_delivered_at_column_to_order_items', 4),
(37, '2020_10_15_123541_create_sub_orders_table', 5),
(38, '2020_10_15_123811_create_sub_order_items_table', 5),
(39, '2020_10_15_182835_create_transactions_table', 6),
(40, '2020_10_19_075126_create_wallets_table', 7),
(41, '2020_10_19_152728_add_wallets_table', 8),
(42, '2020_10_19_154955_create_reward_points_table', 9),
(43, '2020_10_20_071526_create_gift_cards_table', 10),
(44, '2020_10_20_071620_create_gift_cards_table', 11),
(45, '2020_10_20_071625_create_gift_card_purchases_table', 11),
(46, '2020_10_20_084108_add_uid_to_gift_card', 12),
(47, '2020_10_20_084557_add_purchase_done_to_gift_card_purchases', 13),
(48, '2020_10_20_085954_add_uid_to_gift_card_purchases', 14),
(49, '2020_10_27_104957_create_wholesales_table', 15),
(50, '2020_10_27_112856_update_product_table_wholesale', 16),
(51, '2020_10_27_113837_update_user_table', 17),
(52, '2020_10_27_120407_create_reviews_table', 18),
(53, '2020_10_27_131124_reviews', 19),
(54, '2020_10_27_160945_create_custom_pages_table', 20),
(55, '2020_10_29_151008_seller_type', 21),
(56, '2020_10_29_151911_add_pdf', 22),
(57, '2020_10_30_181100_update_prod', 23),
(58, '2020_10_30_210700_create_contacts_table', 24),
(59, '2020_10_30_213414_create_site_reviews_table', 25),
(60, '2020_10_30_214414_update-site_table', 26),
(61, '2020_10_31_111241_create_home_videos_table', 26),
(62, '2020_10_31_124727_create_f_a_q_s_table', 27),
(63, '2020_10_31_125924_create_faqs_table', 28),
(64, '2020_11_01_135615_create_video_categories_table', 29),
(65, '2020_11_01_135617_create_videos_table', 29),
(66, '2020_11_01_152153_create_ebook_requests_table', 30),
(67, '2020_11_01_161749_update_prodss', 31),
(68, '2020_11_01_180800_update_sub_order', 32),
(70, '2020_11_04_055724_create_column_in_product_table', 33),
(71, '2020_11_04_090252_create_messages_table', 34),
(72, '2020_11_10_125252_create_post_categories_table', 35),
(73, '2020_11_10_134509_post_category_s', 36),
(74, '2020_11_12_075724_create_columns_in_messa', 36),
(75, '2020_11_12_115533_create_pdf_in_product', 37);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','processing','completed','decline') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `grand_total` double(8,2) NOT NULL,
  `item_count` int(11) NOT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT 0,
  `payment_method` enum('cash_on_delivery','bkash','wallet','reward_point','gift_card') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cash_on_delivery',
  `shipping_fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delivered_at` datetime DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2020-10-11 02:06:39', '2020-10-11 02:06:39');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(2, 'browse_bread', NULL, '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(3, 'browse_database', NULL, '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(4, 'browse_media', NULL, '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(5, 'browse_compass', NULL, '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(6, 'browse_menus', 'menus', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(7, 'read_menus', 'menus', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(8, 'edit_menus', 'menus', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(9, 'add_menus', 'menus', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(10, 'delete_menus', 'menus', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(11, 'browse_roles', 'roles', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(12, 'read_roles', 'roles', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(13, 'edit_roles', 'roles', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(14, 'add_roles', 'roles', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(15, 'delete_roles', 'roles', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(16, 'browse_users', 'users', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(17, 'read_users', 'users', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(18, 'edit_users', 'users', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(19, 'add_users', 'users', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(20, 'delete_users', 'users', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(21, 'browse_settings', 'settings', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(22, 'read_settings', 'settings', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(23, 'edit_settings', 'settings', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(24, 'add_settings', 'settings', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(25, 'delete_settings', 'settings', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(26, 'browse_categories', 'categories', '2020-10-11 02:06:39', '2020-10-11 02:06:39'),
(27, 'read_categories', 'categories', '2020-10-11 02:06:39', '2020-10-11 02:06:39'),
(28, 'edit_categories', 'categories', '2020-10-11 02:06:39', '2020-10-11 02:06:39'),
(29, 'add_categories', 'categories', '2020-10-11 02:06:39', '2020-10-11 02:06:39'),
(30, 'delete_categories', 'categories', '2020-10-11 02:06:39', '2020-10-11 02:06:39'),
(31, 'browse_posts', 'posts', '2020-10-11 02:06:39', '2020-10-11 02:06:39'),
(32, 'read_posts', 'posts', '2020-10-11 02:06:39', '2020-10-11 02:06:39'),
(33, 'edit_posts', 'posts', '2020-10-11 02:06:39', '2020-10-11 02:06:39'),
(34, 'add_posts', 'posts', '2020-10-11 02:06:39', '2020-10-11 02:06:39'),
(35, 'delete_posts', 'posts', '2020-10-11 02:06:39', '2020-10-11 02:06:39'),
(36, 'browse_pages', 'pages', '2020-10-11 02:06:39', '2020-10-11 02:06:39'),
(37, 'read_pages', 'pages', '2020-10-11 02:06:39', '2020-10-11 02:06:39'),
(38, 'edit_pages', 'pages', '2020-10-11 02:06:39', '2020-10-11 02:06:39'),
(39, 'add_pages', 'pages', '2020-10-11 02:06:39', '2020-10-11 02:06:39'),
(40, 'delete_pages', 'pages', '2020-10-11 02:06:39', '2020-10-11 02:06:39'),
(41, 'browse_hooks', NULL, '2020-10-11 02:06:39', '2020-10-11 02:06:39'),
(42, 'browse_orders', 'orders', '2020-10-11 02:13:53', '2020-10-11 02:13:53'),
(43, 'read_orders', 'orders', '2020-10-11 02:13:53', '2020-10-11 02:13:53'),
(44, 'edit_orders', 'orders', '2020-10-11 02:13:53', '2020-10-11 02:13:53'),
(45, 'add_orders', 'orders', '2020-10-11 02:13:53', '2020-10-11 02:13:53'),
(46, 'delete_orders', 'orders', '2020-10-11 02:13:53', '2020-10-11 02:13:53'),
(47, 'browse_shops', 'shops', '2020-10-12 00:18:19', '2020-10-12 00:18:19'),
(48, 'read_shops', 'shops', '2020-10-12 00:18:19', '2020-10-12 00:18:19'),
(49, 'edit_shops', 'shops', '2020-10-12 00:18:19', '2020-10-12 00:18:19'),
(50, 'add_shops', 'shops', '2020-10-12 00:18:19', '2020-10-12 00:18:19'),
(51, 'delete_shops', 'shops', '2020-10-12 00:18:19', '2020-10-12 00:18:19'),
(52, 'browse_products', 'products', '2020-10-12 03:02:30', '2020-10-12 03:02:30'),
(53, 'read_products', 'products', '2020-10-12 03:02:30', '2020-10-12 03:02:30'),
(54, 'edit_products', 'products', '2020-10-12 03:02:30', '2020-10-12 03:02:30'),
(55, 'add_products', 'products', '2020-10-12 03:02:30', '2020-10-12 03:02:30'),
(56, 'delete_products', 'products', '2020-10-12 03:02:30', '2020-10-12 03:02:30'),
(57, 'browse_coupons', 'coupons', '2020-10-14 08:44:03', '2020-10-14 08:44:03'),
(58, 'read_coupons', 'coupons', '2020-10-14 08:44:03', '2020-10-14 08:44:03'),
(59, 'edit_coupons', 'coupons', '2020-10-14 08:44:03', '2020-10-14 08:44:03'),
(60, 'add_coupons', 'coupons', '2020-10-14 08:44:03', '2020-10-14 08:44:03'),
(61, 'delete_coupons', 'coupons', '2020-10-14 08:44:03', '2020-10-14 08:44:03'),
(62, 'browse_transactions', 'transactions', '2020-10-15 10:39:04', '2020-10-15 10:39:04'),
(63, 'read_transactions', 'transactions', '2020-10-15 10:39:04', '2020-10-15 10:39:04'),
(64, 'edit_transactions', 'transactions', '2020-10-15 10:39:04', '2020-10-15 10:39:04'),
(65, 'add_transactions', 'transactions', '2020-10-15 10:39:04', '2020-10-15 10:39:04'),
(66, 'delete_transactions', 'transactions', '2020-10-15 10:39:04', '2020-10-15 10:39:04'),
(67, 'browse_sub_orders', 'sub_orders', '2020-10-15 10:40:36', '2020-10-15 10:40:36'),
(68, 'read_sub_orders', 'sub_orders', '2020-10-15 10:40:36', '2020-10-15 10:40:36'),
(69, 'edit_sub_orders', 'sub_orders', '2020-10-15 10:40:36', '2020-10-15 10:40:36'),
(70, 'add_sub_orders', 'sub_orders', '2020-10-15 10:40:36', '2020-10-15 10:40:36'),
(71, 'delete_sub_orders', 'sub_orders', '2020-10-15 10:40:36', '2020-10-15 10:40:36'),
(87, 'browse_custom_pages', 'custom_pages', '2020-10-31 02:16:37', '2020-10-31 02:16:37'),
(88, 'read_custom_pages', 'custom_pages', '2020-10-31 02:16:37', '2020-10-31 02:16:37'),
(89, 'edit_custom_pages', 'custom_pages', '2020-10-31 02:16:37', '2020-10-31 02:16:37'),
(90, 'add_custom_pages', 'custom_pages', '2020-10-31 02:16:37', '2020-10-31 02:16:37'),
(91, 'delete_custom_pages', 'custom_pages', '2020-10-31 02:16:37', '2020-10-31 02:16:37'),
(92, 'browse_home_videos', 'home_videos', '2020-10-31 05:20:37', '2020-10-31 05:20:37'),
(93, 'read_home_videos', 'home_videos', '2020-10-31 05:20:37', '2020-10-31 05:20:37'),
(94, 'edit_home_videos', 'home_videos', '2020-10-31 05:20:37', '2020-10-31 05:20:37'),
(95, 'add_home_videos', 'home_videos', '2020-10-31 05:20:37', '2020-10-31 05:20:37'),
(96, 'delete_home_videos', 'home_videos', '2020-10-31 05:20:37', '2020-10-31 05:20:37'),
(102, 'browse_contacts', 'contacts', '2020-10-31 06:49:37', '2020-10-31 06:49:37'),
(103, 'read_contacts', 'contacts', '2020-10-31 06:49:37', '2020-10-31 06:49:37'),
(104, 'edit_contacts', 'contacts', '2020-10-31 06:49:37', '2020-10-31 06:49:37'),
(105, 'add_contacts', 'contacts', '2020-10-31 06:49:37', '2020-10-31 06:49:37'),
(106, 'delete_contacts', 'contacts', '2020-10-31 06:49:37', '2020-10-31 06:49:37'),
(112, 'browse_faqs', 'faqs', '2020-10-31 07:03:21', '2020-10-31 07:03:21'),
(113, 'read_faqs', 'faqs', '2020-10-31 07:03:21', '2020-10-31 07:03:21'),
(114, 'edit_faqs', 'faqs', '2020-10-31 07:03:21', '2020-10-31 07:03:21'),
(115, 'add_faqs', 'faqs', '2020-10-31 07:03:21', '2020-10-31 07:03:21'),
(116, 'delete_faqs', 'faqs', '2020-10-31 07:03:21', '2020-10-31 07:03:21'),
(117, 'browse_wholesales', 'wholesales', '2020-10-31 11:08:30', '2020-10-31 11:08:30'),
(118, 'read_wholesales', 'wholesales', '2020-10-31 11:08:30', '2020-10-31 11:08:30'),
(119, 'edit_wholesales', 'wholesales', '2020-10-31 11:08:30', '2020-10-31 11:08:30'),
(120, 'add_wholesales', 'wholesales', '2020-10-31 11:08:30', '2020-10-31 11:08:30'),
(121, 'delete_wholesales', 'wholesales', '2020-10-31 11:08:30', '2020-10-31 11:08:30'),
(122, 'browse_product_attributes', 'product_attributes', '2020-11-01 08:23:14', '2020-11-01 08:23:14'),
(123, 'read_product_attributes', 'product_attributes', '2020-11-01 08:23:14', '2020-11-01 08:23:14'),
(124, 'edit_product_attributes', 'product_attributes', '2020-11-01 08:23:14', '2020-11-01 08:23:14'),
(125, 'add_product_attributes', 'product_attributes', '2020-11-01 08:23:14', '2020-11-01 08:23:14'),
(126, 'delete_product_attributes', 'product_attributes', '2020-11-01 08:23:14', '2020-11-01 08:23:14'),
(127, 'browse_videos', 'videos', '2020-11-01 08:35:57', '2020-11-01 08:35:57'),
(128, 'read_videos', 'videos', '2020-11-01 08:35:57', '2020-11-01 08:35:57'),
(129, 'edit_videos', 'videos', '2020-11-01 08:35:57', '2020-11-01 08:35:57'),
(130, 'add_videos', 'videos', '2020-11-01 08:35:57', '2020-11-01 08:35:57'),
(131, 'delete_videos', 'videos', '2020-11-01 08:35:57', '2020-11-01 08:35:57'),
(132, 'browse_video_categories', 'video_categories', '2020-11-01 08:36:30', '2020-11-01 08:36:30'),
(133, 'read_video_categories', 'video_categories', '2020-11-01 08:36:30', '2020-11-01 08:36:30'),
(134, 'edit_video_categories', 'video_categories', '2020-11-01 08:36:30', '2020-11-01 08:36:30'),
(135, 'add_video_categories', 'video_categories', '2020-11-01 08:36:30', '2020-11-01 08:36:30'),
(136, 'delete_video_categories', 'video_categories', '2020-11-01 08:36:30', '2020-11-01 08:36:30'),
(137, 'browse_ebook_requests', 'ebook_requests', '2020-11-01 09:23:35', '2020-11-01 09:23:35'),
(138, 'read_ebook_requests', 'ebook_requests', '2020-11-01 09:23:35', '2020-11-01 09:23:35'),
(139, 'edit_ebook_requests', 'ebook_requests', '2020-11-01 09:23:35', '2020-11-01 09:23:35'),
(140, 'add_ebook_requests', 'ebook_requests', '2020-11-01 09:23:35', '2020-11-01 09:23:35'),
(141, 'delete_ebook_requests', 'ebook_requests', '2020-11-01 09:23:35', '2020-11-01 09:23:35'),
(142, 'browse_wallets', 'wallets', '2020-11-02 00:48:43', '2020-11-02 00:48:43'),
(143, 'read_wallets', 'wallets', '2020-11-02 00:48:43', '2020-11-02 00:48:43'),
(144, 'edit_wallets', 'wallets', '2020-11-02 00:48:43', '2020-11-02 00:48:43'),
(145, 'add_wallets', 'wallets', '2020-11-02 00:48:43', '2020-11-02 00:48:43'),
(146, 'delete_wallets', 'wallets', '2020-11-02 00:48:43', '2020-11-02 00:48:43'),
(147, 'browse_reward_points', 'reward_points', '2020-11-02 00:50:39', '2020-11-02 00:50:39'),
(148, 'read_reward_points', 'reward_points', '2020-11-02 00:50:39', '2020-11-02 00:50:39'),
(149, 'edit_reward_points', 'reward_points', '2020-11-02 00:50:39', '2020-11-02 00:50:39'),
(150, 'add_reward_points', 'reward_points', '2020-11-02 00:50:39', '2020-11-02 00:50:39'),
(151, 'delete_reward_points', 'reward_points', '2020-11-02 00:50:39', '2020-11-02 00:50:39'),
(152, 'browse_gift_card_purchases', 'gift_card_purchases', '2020-11-02 00:52:49', '2020-11-02 00:52:49'),
(153, 'read_gift_card_purchases', 'gift_card_purchases', '2020-11-02 00:52:49', '2020-11-02 00:52:49'),
(154, 'edit_gift_card_purchases', 'gift_card_purchases', '2020-11-02 00:52:49', '2020-11-02 00:52:49'),
(155, 'add_gift_card_purchases', 'gift_card_purchases', '2020-11-02 00:52:49', '2020-11-02 00:52:49'),
(156, 'delete_gift_card_purchases', 'gift_card_purchases', '2020-11-02 00:52:49', '2020-11-02 00:52:49'),
(157, 'browse_gift_cards', 'gift_cards', '2020-11-02 00:57:45', '2020-11-02 00:57:45'),
(158, 'read_gift_cards', 'gift_cards', '2020-11-02 00:57:45', '2020-11-02 00:57:45'),
(159, 'edit_gift_cards', 'gift_cards', '2020-11-02 00:57:45', '2020-11-02 00:57:45'),
(160, 'add_gift_cards', 'gift_cards', '2020-11-02 00:57:45', '2020-11-02 00:57:45'),
(161, 'delete_gift_cards', 'gift_cards', '2020-11-02 00:57:45', '2020-11-02 00:57:45'),
(162, 'browse_site_reviews', 'site_reviews', '2020-11-02 00:58:31', '2020-11-02 00:58:31'),
(163, 'read_site_reviews', 'site_reviews', '2020-11-02 00:58:31', '2020-11-02 00:58:31'),
(164, 'edit_site_reviews', 'site_reviews', '2020-11-02 00:58:31', '2020-11-02 00:58:31'),
(165, 'add_site_reviews', 'site_reviews', '2020-11-02 00:58:31', '2020-11-02 00:58:31'),
(166, 'delete_site_reviews', 'site_reviews', '2020-11-02 00:58:31', '2020-11-02 00:58:31'),
(167, 'browse_post_categories', 'post_categories', '2020-11-12 00:05:07', '2020-11-12 00:05:07'),
(168, 'read_post_categories', 'post_categories', '2020-11-12 00:05:07', '2020-11-12 00:05:07'),
(169, 'edit_post_categories', 'post_categories', '2020-11-12 00:05:07', '2020-11-12 00:05:07'),
(170, 'add_post_categories', 'post_categories', '2020-11-12 00:05:07', '2020-11-12 00:05:07'),
(171, 'delete_post_categories', 'post_categories', '2020-11-12 00:05:07', '2020-11-12 00:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(1, 4),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(6, 3),
(6, 4),
(7, 1),
(7, 3),
(7, 4),
(8, 1),
(8, 4),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(47, 3),
(48, 1),
(48, 3),
(49, 1),
(49, 3),
(50, 1),
(51, 1),
(52, 1),
(52, 3),
(52, 4),
(53, 1),
(53, 3),
(53, 4),
(54, 1),
(54, 3),
(54, 4),
(55, 1),
(55, 3),
(55, 4),
(56, 1),
(56, 3),
(56, 4),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(117, 4),
(118, 1),
(118, 4),
(119, 1),
(119, 4),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(132, 1),
(133, 1),
(134, 1),
(135, 1),
(136, 1),
(137, 1),
(138, 1),
(139, 1),
(140, 1),
(141, 1),
(142, 1),
(143, 1),
(144, 1),
(145, 1),
(146, 1),
(147, 1),
(148, 1),
(149, 1),
(150, 1),
(151, 1),
(152, 1),
(153, 1),
(154, 1),
(155, 1),
(156, 1),
(157, 1),
(158, 1),
(159, 1),
(160, 1),
(161, 1),
(162, 1),
(163, 1),
(164, 1),
(165, 1),
(166, 1),
(167, 1),
(168, 1),
(169, 1),
(170, 1),
(171, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_cat_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`, `pdf`, `post_cat_id`) VALUES
(1, 3, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts\\October2020\\3XU8Qw9Fzl7YM7N3xyIr.PNG', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-10-11 02:06:39', '2020-11-12 00:13:40', '[{\"download_link\":\"posts\\\\November2020\\\\Y71P05MSBLnoZWMCDmGD.docx\",\"original_name\":\"07_17101291.docx\"}]', 1),
(2, 3, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\r\n<h2>We can use all kinds of format!</h2>\r\n<p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-10-11 02:06:39', '2020-11-12 00:13:54', '[{\"download_link\":\"posts\\/November2020\\/IQOHObsRrhFrJ7rjM70T.pdf\",\"original_name\":\"18221394_Layout-App-Resellersfy.pdf\"}]', 2),
(3, 0, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-10-11 02:06:39', '2020-10-11 02:06:39', '', NULL),
(4, 0, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-10-11 02:06:39', '2020-10-11 02:06:39', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Plastisol Printing', '2020-11-12 00:07:50', '2020-11-12 00:07:50'),
(2, 'Water Based Printing', '2020-11-12 00:08:09', '2020-11-12 00:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `cover_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `featured` tinyint(1) DEFAULT 0,
  `top_product` tinyint(1) DEFAULT 0,
  `cash_back_percent` float DEFAULT 0,
  `reward_point` int(11) DEFAULT 0,
  `min_qty` int(11) DEFAULT NULL,
  `wholesale_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_video` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wholesale_qty` int(11) DEFAULT 0,
  `retail_qty` int(11) DEFAULT 0,
  `refurbish_product` tinyint(1) NOT NULL DEFAULT 0,
  `product_pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `cover_img`, `shop_id`, `created_at`, `updated_at`, `featured`, `top_product`, `cash_back_percent`, `reward_point`, `min_qty`, `wholesale_id`, `product_video`, `wholesale_qty`, `retail_qty`, `refurbish_product`, `product_pdf`) VALUES
(36, 'product DESC', '<p>ChromaTech WR is Chromaline\'s latest water-resistant pure photopolymer emulsion. Dual cure technology built into a ready-to-use formula.&nbsp;&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>ChromaTech WR is designed for textile printing offering superior durability to water based and discharge inks as well as the press cleaning solvents used when printing plastisol inks.</p>\r\n<p>&nbsp;</p>\r\n<p>Due to the high solid content, ChromaTech WR is most often applied with a 1x1 coating. Just two simple coatings reduces your coating time and consumes less product per screen (more screens per gallon). ChromaTech WR offers extremely fast exposure which in large shops translates to substantial time savings.</p>\r\n<p>&nbsp;</p>\r\n<p>Color: Blue</p>\r\n<p>Solids: 46%</p>\r\n<p>Viscosity: High</p>\r\n<p>Fast Exposure</p>\r\n<p>Excellent mesh bridging</p>\r\n<p>Sharp image quality</p>\r\n<p>Resistance to plastisol, water and discharge inks</p>\r\n<p>Does NOT require stencil hardener chemistry</p>\r\n<p>View User Guide</p>\r\n<p>View SDS</p>\r\n<p>What our Customers Say:</p>\r\n<p>&nbsp;</p>\r\n<p>\"1+1 coating is all I need\"</p>\r\n<p>\"I consolidated from 2 different emulsions to just this one for both of my plastisol and discharge ink setups\"</p>\r\n<p>\"I\'m now in single digit exposure times on my LED system\"</p>\r\n<p>Bottom line - Perfect emulsion if your shop uses mostly plastisol, but also prints water/discharge inks.</p>\r\n<p>&nbsp;</p>\r\n<p>SHIPPING NOTE: This product is not freeze/thaw stable and will not ship during freezing temperatures.</p>\r\n<p>&nbsp;</p>\r\n<p>pro-tip-chromaline.png</p>\r\n<p>&nbsp;</p>\r\n<p>Doing a long run job with water/discharge ink?&nbsp; Simply add a 3gr bottle of diazo sensitizer to a gallon of ChromaTech WR and it will boost resistance for thousands of prints.</p>\r\n<p>&nbsp;</p>\r\n<p>p95-warning-28x22.pngWARNING: This product can expose you to chemicals including benzophenone, which is known in the State of California to cause cancer. For more information go to</p>', 4500.00, 'products/November2020/GtWKTzT4QG5l3fgIqbbR.jpg', NULL, '2020-11-09 11:24:00', '2020-11-09 13:02:51', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(37, 'product DESC', '<p>ChromaTech WR is Chromaline\'s latest water-resistant pure photopolymer emulsion. Dual cure technology built into a ready-to-use formula.&nbsp;&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>ChromaTech WR is designed for textile printing offering superior durability to water based and discharge inks as well as the press cleaning solvents used when printing plastisol inks.</p>\r\n<p>&nbsp;</p>\r\n<p>Due to the high solid content, ChromaTech WR is most often applied with a 1x1 coating. Just two simple coatings reduces your coating time and consumes less product per screen (more screens per gallon). ChromaTech WR offers extremely fast exposure which in large shops translates to substantial time savings.</p>\r\n<p>&nbsp;</p>\r\n<p>Color: Blue</p>\r\n<p>Solids: 46%</p>\r\n<p>Viscosity: High</p>\r\n<p>Fast Exposure</p>\r\n<p>Excellent mesh bridging</p>\r\n<p>Sharp image quality</p>\r\n<p>Resistance to plastisol, water and discharge inks</p>\r\n<p>Does NOT require stencil hardener chemistry</p>\r\n<p>View User Guide</p>\r\n<p>View SDS</p>\r\n<p>What our Customers Say:</p>\r\n<p>&nbsp;</p>\r\n<p>\"1+1 coating is all I need\"</p>\r\n<p>\"I consolidated from 2 different emulsions to just this one for both of my plastisol and discharge ink setups\"</p>\r\n<p>\"I\'m now in single digit exposure times on my LED system\"</p>\r\n<p>Bottom line - Perfect emulsion if your shop uses mostly plastisol, but also prints water/discharge inks.</p>\r\n<p>&nbsp;</p>\r\n<p>SHIPPING NOTE: This product is not freeze/thaw stable and will not ship during freezing temperatures.</p>\r\n<p>&nbsp;</p>\r\n<p>pro-tip-chromaline.png</p>\r\n<p>&nbsp;</p>\r\n<p>Doing a long run job with water/discharge ink?&nbsp; Simply add a 3gr bottle of diazo sensitizer to a gallon of ChromaTech WR and it will boost resistance for thousands of prints.</p>\r\n<p>&nbsp;</p>\r\n<p>p95-warning-28x22.pngWARNING: This product can expose you to chemicals including benzophenone, which is known in the State of California to cause cancer. For more information go to</p>', 4500.00, 'products/November2020/F3tn9pS6u4vnfkn9z9Yi.jpg', NULL, '2020-11-09 11:25:00', '2020-11-09 13:04:44', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(38, 'ChromaTech WR', '<p style=\"box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; color: #0000ff;\"><span style=\"box-sizing: border-box; font-weight: bold; line-height: inherit;\">ChromaTech WR</span></span>&nbsp;is Chromaline\'s latest water-resistant pure photopolymer emulsion. Dual cure technology built into a ready-to-use formula.&nbsp;&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; color: #0000ff;\"><span style=\"box-sizing: border-box; font-weight: bold; line-height: inherit;\">ChromaTech WR</span></span>&nbsp;is designed for textile printing offering superior durability to water based and discharge inks as well as the press cleaning solvents used when printing plastisol inks.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;\"><span style=\"box-sizing: border-box;\">Due to the high solid content,&nbsp;<span style=\"box-sizing: border-box; color: #0000ff;\"><span style=\"box-sizing: border-box; font-weight: bold; line-height: inherit;\">ChromaTech WR</span></span>&nbsp;is most often applied with a 1x1 coating. Just two simple coatings reduces your coating time and consumes less product per screen (more screens per gallon). ChromaTech WR offers extremely fast exposure which in large shops translates to substantial time savings.</span></p>\r\n<ul style=\"box-sizing: border-box; margin: 0px 0px 1.5rem 1.15rem; padding: 0px; list-style-position: outside; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;\">\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><span style=\"box-sizing: border-box;\">Color:&nbsp;<span style=\"box-sizing: border-box; color: #0000ff;\"><span style=\"box-sizing: border-box; font-weight: bold; line-height: inherit;\">Blue</span></span></span></li>\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><span style=\"box-sizing: border-box;\">Solids: 46%</span></li>\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><span style=\"box-sizing: border-box;\">Viscosity: High</span></li>\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><span style=\"box-sizing: border-box;\">Fast Exposure</span></li>\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><span style=\"box-sizing: border-box;\">Excellent mesh bridging</span></li>\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><span style=\"box-sizing: border-box;\">Sharp image quality</span></li>\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><span style=\"box-sizing: border-box;\">Resistance to plastisol, water and&nbsp;</span><span style=\"box-sizing: border-box;\">discharge inks</span></li>\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><span style=\"box-sizing: border-box;\">Does NOT require stencil hardener chemistry</span></li>\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">View&nbsp;<span style=\"box-sizing: border-box; font-weight: bold; line-height: inherit;\"><a style=\"box-sizing: border-box; background-color: transparent; color: #007ac2; line-height: inherit; text-decoration-line: none; transition: color 0.15s ease 0s;\" href=\"https://www.ikonics.com/userguides/\" target=\"_blank\" rel=\"noopener\">User Guide</a></span></li>\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px;\">View&nbsp;<span style=\"box-sizing: border-box; font-weight: bold; line-height: inherit;\"><a style=\"box-sizing: border-box; background-color: transparent; color: #007ac2; line-height: inherit; text-decoration-line: none; transition: color 0.15s ease 0s;\" href=\"https://www.ikonics.com/sds/\" target=\"_blank\" rel=\"noopener\">SDS</a></span></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;\"><span style=\"box-sizing: border-box; font-weight: bold; line-height: inherit;\">What our Customers Say:</span></p>\r\n<ul style=\"box-sizing: border-box; margin: 0px 0px 1.5rem 1.15rem; padding: 0px; list-style-position: outside; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;\">\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><span style=\"box-sizing: border-box;\">\"1+1 coating is all I need\"</span></li>\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><span style=\"box-sizing: border-box;\">\"I consolidated from 2 different emulsions to just this one for both of my plastisol and discharge ink setups\"</span></li>\r\n<li style=\"box-sizing: border-box; margin: 0px; padding: 0px;\"><span style=\"box-sizing: border-box;\">\"I\'m now in single digit exposure times on my LED system\"</span></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;\"><span style=\"box-sizing: border-box; background-color: #ffff00;\"><span style=\"box-sizing: border-box; font-weight: bold; line-height: inherit;\">Bottom line - Perfect emulsion if your shop uses mostly plastisol, but also prints water/discharge inks.</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-weight: bold; line-height: inherit;\"><span style=\"box-sizing: border-box; line-height: inherit;\"><span style=\"box-sizing: border-box; color: #ff00ff;\">SHIPPING NOTE:&nbsp;</span>This product is not freeze/thaw stable and will not ship during freezing temperatures.</span></span></span></p>\r\n<hr style=\"box-sizing: content-box; height: 0px; border-style: solid; border-color: #e5e5e5; border-image: initial; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; clear: both; margin: 2rem 0px 1.92857rem; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;\" />\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;\"><img class=\"__mce_add_custom__\" style=\"box-sizing: border-box; border: 0px; display: inline-block; height: auto; max-width: 100%; vertical-align: middle; float: left; margin: 5px 20px 5px 0px;\" title=\"pro-tip-chromaline.png\" src=\"https://cdn8.bigcommerce.com/s-kk74s4rcmv/product_images/uploaded_images/pro-tip-chromaline.png\" alt=\"pro-tip-chromaline.png\" width=\"135\" height=\"36\" /></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;\">Doing a long run job with water/discharge ink?&nbsp; Simply add a&nbsp;<a style=\"box-sizing: border-box; background-color: transparent; color: #007ac2; line-height: inherit; text-decoration-line: none; transition: color 0.15s ease 0s;\" href=\"https://shop.chromaline.com/magna-cure-diazo-sensitizer-bottle/?attributes=eyIxODAiOjI2N30\">3gr bottle of diazo sensitizer</a>&nbsp;to a gallon of ChromaTech WR and it will boost resistance for thousands of prints.</p>\r\n<hr style=\"box-sizing: content-box; height: 0px; border-style: solid; border-color: #e5e5e5; border-image: initial; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; clear: both; margin: 2rem 0px 1.92857rem; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;\" />\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;\"><img class=\"__mce_add_custom__\" style=\"box-sizing: border-box; border: 0px; display: inline-block; height: auto; max-width: 100%; vertical-align: middle;\" title=\"p95-warning-28x22.png\" src=\"https://cdn8.bigcommerce.com/s-kk74s4rcmv/product_images/uploaded_images/p95-warning-28x22.png\" alt=\"p95-warning-28x22.png\" width=\"28\" height=\"22\" /><span style=\"box-sizing: border-box; font-weight: bold; line-height: inherit;\">WARNING:</span>&nbsp;This product can expose you to chemicals including benzophenone, which is known in the State of California to cause cancer. For more information go to</p>', 5999.00, 'products/November2020/3IRUq3VY8WMxIgxMFpCw.png', NULL, '2020-11-09 11:44:43', '2020-11-09 11:44:43', 0, 0, NULL, NULL, NULL, NULL, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/66MnDKX11Gc\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, NULL, 0, ''),
(39, 'EP BLUE', '<p><strong>EP BLUE</strong></p>\r\n<p><a href=\"https://www.inknovators.com/images/galeri/test-009-EP-Blue.pdf\">SDS&nbsp;</a></p>\r\n<p><a href=\"https://www.inknovators.com/images/galeri/tds-009-EP-Blue.pdf\">TDS&nbsp;</a></p>\r\n<p><a href=\"https://www.inknovators.com/images/galeri/test-009-EP-Blue.pdf\">TEST REPORTS</a></p>', 1400.00, 'products/November2020/JDgB3G7Xy162i1Yb7SYq.png', NULL, '2020-11-09 12:33:00', '2020-11-09 13:03:33', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(40, 'Foil Adhesive', '<p class=\"MsoNormal\" style=\"line-height: normal; mso-outline-level: 2; background: white; margin: 15.0pt 0in 7.5pt 0in;\"><span style=\"font-size: 22.5pt; font-family: \'Comic Sans MS\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #302b27;\">E9211 Union Foil Adhesive</span></p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal; mso-outline-level: 4; background: white; margin: 7.5pt 0in 7.5pt 0in;\"><span style=\"font-size: 13.5pt; font-family: \'Comic Sans MS\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: Arial; color: #72b9ff;\">Features:</span></p>\r\n<ul type=\"disc\">\r\n<li class=\"MsoNormal\" style=\"color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list .5in; background: white;\"><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';\">Ideal for Woven Fabrics</span></li>\r\n<li class=\"MsoNormal\" style=\"color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list .5in; background: white;\"><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';\">Non-Phthalate</span></li>\r\n</ul>\r\n<p class=\"MsoNormal\" style=\"line-height: normal; mso-outline-level: 4; background: white; margin: 7.5pt 0in 7.5pt 0in;\"><span style=\"font-size: 13.5pt; font-family: \'Comic Sans MS\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #72b9ff;\">Description:</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: .0001pt; line-height: normal; background: white;\"><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;\">UFOIL-E9211 Foil Adhesive can be directy printed and cured,or, applied to the garment by the transfer method. UFOIL-E9211 is a NonPhthalate formulation which complies with regulations regarding printing onto children\'s wear. This product is also processed with a smoother consistency with less clogging in the mesh.</span></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<h2 style=\"background: white; margin: 15.0pt 0in 7.5pt 0in;\"><span style=\"font-size: 22.5pt; font-family: \'Comic Sans MS\'; color: #302b27; font-weight: normal;\">SPECIFICATIONS:</span></h2>\r\n<p style=\"background: white; margin: 0in 0in 7.5pt 0in;\"><strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;\">TRANSFER METHOD:</span></strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;\">&nbsp;Print the design on the noncolor side of the foil sheet and semicure or gel the transfer print at 240&deg; F.</span></p>\r\n<p style=\"background: white; margin: 0in 0in 7.5pt 0in;\"><strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;\">DIRECT PRINT METHOD:</span></strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;\">Print the design using E9211 Foil Adhesive directly on the garment and cure the entire ink film at 300&deg;F (149&deg;C).</span></p>\r\n<p style=\"background: white; margin: 0in 0in 7.5pt 0in;\"><strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;\">MESH:</span></strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;\">83/inch to 110/inch (33T cm to 44T cm) monofilament polyester.</span></p>\r\n<p style=\"background: white; margin: 0in 0in 7.5pt 0in;\"><strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;\">FOIL APPLICATION:</span></strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;\">Apply the plastisol heat transfer or direct print to the garment. If you have directly printed the E9211 Foil Adhesive directly on the garment, cut the foil sheet to the desired shape and place it color side up over the area where you want the foil effect. If foil is not placed over the entire design, cover the exposed plastisol ink areas with release paper to shield them from the hot platen surface. The transfer press temperature should be set at 375&deg; F (163&deg; to 177&deg; C) with medium to high pressure for 68 seconds over a direct print. If using the transfer method of applying the E9211 Foil Adhesive directly to the foil sheet, transfer the design to the garment for 12 seconds at a temperature of 325&deg; to 350&deg; F (163&deg; to 177&deg; C.)using medium to high pressure. Allow the fabric and foil to cool completely before peeling.</span></p>\r\n<p style=\"background: white; margin: 0in 0in 7.5pt 0in;\"><strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;\">WASHING INSTRUCTIONS:</span></strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;\">Prints decorated with foil are not as durable as unfoiled prints. Some dulling of the foil over time is to be expected with laundering and normal wear. To minimize this during laundering the garment should be hand washed inside out, using cool or lukewarm water and dried by either hanging or laying flat. Do not dryclean.</span></p>\r\n<p style=\"background: white; margin: 0in 0in 7.5pt 0in;\"><strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;\">SCREEN COATING, FILM, BLOCKOUT:</span></strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;\">&nbsp;Use water soluble hand-cut, photo screens and blockouts with this ink or use other suitable products.</span></p>\r\n<p style=\"background: white; margin: 0in 0in 7.5pt 0in;\"><strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;\">WASHUP:</span></strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;\">&nbsp;T-125 mineral spirits, or biodegradable washes SYS-2500, SYS-2550 or SYS-2510 screen wash gel.</span></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-size: 10.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; color: red; background: white;\">ALWAYS TEST PRINT BEFORE PRODUCTION!</span></strong></p>', 0.00, 'products/November2020/Z4aSzDvv7VBTC8eZApMP.jpg', NULL, '2020-11-09 12:44:18', '2020-11-09 12:44:18', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(41, 'Poil Puff Adhesive', '<p class=\"MsoNormal\" style=\"line-height: normal; mso-outline-level: 2; background: white; margin: 15.0pt 0in 7.5pt 0in;\"><span style=\"font-size: 22.5pt; font-family: \'Comic Sans MS\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #302b27;\">841 Foil &amp; Puff Adhesive</span></p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal; mso-outline-level: 4; background: white; margin: 7.5pt 0in 7.5pt 0in;\"><span style=\"font-size: 13.5pt; font-family: \'Comic Sans MS\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: Arial; color: #72b9ff;\">Features:</span></p>\r\n<ul type=\"disc\">\r\n<li class=\"MsoNormal\" style=\"color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list .5in; background: white;\"><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';\">For direct printing on Foil or Puff Transfers</span></li>\r\n<li class=\"MsoNormal\" style=\"color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list .5in; background: white;\"><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';\">Phthalate Free</span></li>\r\n</ul>\r\n<p class=\"MsoNormal\" style=\"line-height: normal; mso-outline-level: 4; background: white; margin: 7.5pt 0in 7.5pt 0in;\"><span style=\"font-size: 13.5pt; font-family: \'Comic Sans MS\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #72b9ff;\">Description:</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: .0001pt; line-height: normal; background: white;\"><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;\">841 Printable Adhesive is designed for producing puff heat transfers. 841 Printable Adhesive will eliminate the need for powders. 841 Adhesive has a very soft hand feel and good elongation. see the \"Read More\" for specific instructions.</span></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal; mso-outline-level: 2; background: white; margin: 15.0pt 0in 7.5pt 0in;\"><span style=\"font-size: 22.5pt; font-family: \'Comic Sans MS\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #302b27;\">SPECIFICATIONS:</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 7.5pt; line-height: normal; background: white;\"><strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;\">FOIL TRANSFERS:</span></strong></p>\r\n<ol start=\"1\" type=\"1\">\r\n<li class=\"MsoNormal\" style=\"color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l1 level1 lfo2; tab-stops: list .5in; background: white;\"><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';\">841 Printable Adhesive can be printed on the back of the foil to create a foil transfer. It can be gelled on the back of the foil and transferred later.</span></li>\r\n<li class=\"MsoNormal\" style=\"color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l1 level1 lfo2; tab-stops: list .5in; background: white;\"><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';\">Screen print 841 Printable Adhesive onto a cold peel transfer paper such as T-75. Gel onto the paper the same as any other heat transfer. Then apply the transfer to the fabric at 350&deg;F (177&deg;C) for 10 seconds - peel cold. Apply the foil over the transfer and heat seal for 10 to 15 seconds. Allow to cool completely and peel foil.</span></li>\r\n<li class=\"MsoNormal\" style=\"color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l1 level1 lfo2; tab-stops: list .5in; background: white;\"><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';\">Direct print with light pressure on surface of fabric. Keep ink on surface, do not drive it too far into the fabric. Cure print through a dryer. Using transfer machine apply foil for 10 to 15 seconds at 350&deg;F (177&deg;C). Let cool completely and peel foil.</span></li>\r\n</ol>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 7.5pt; line-height: normal; background: white;\"><strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;\">PUFF TRANSFERS:</span></strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;\">Puff Transfers: Print 841 Adhesive over the whole puff transfer image slightly overlapping the puff ink.<br /><br />Curing: Gel the 841 Adhesive at the same condition as the puff ink so as not to puff the ink on the paper. Puff Transfers always perform better when they are not puffed or beginning to puff on paper.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 7.5pt; line-height: normal; background: white;\"><strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;\">MESH:</span></strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;\">80/inch to 125/inch (36T cm to 57T cm).</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 7.5pt; line-height: normal; background: white;\"><strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;\">SCREEN COATING, FILM, BLOCKOUT:</span></strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;\">&nbsp;Use water soluble hand-cut, photo screens and blockouts with this ink or use other suitable products.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 7.5pt; line-height: normal; background: white;\"><strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;\">WASHUP:</span></strong><span style=\"font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;\">&nbsp;T-125 mineral spirits, or biodegradable washes SYS-2500, SYS-2550 or SYS-2510 screen wash gel.</span></p>\r\n<p class=\"MsoNormal\"><strong><span style=\"font-size: 10.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: red; background: white;\">ALWAYS TEST PRINT BEFORE PRODUCTION!</span></strong></p>', 25000.00, 'products/November2020/YaHbYIJXNgU3Gz2X8Lfh.jpg', NULL, '2020-11-09 12:47:00', '2020-11-12 01:20:38', 0, 0, 40, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(42, 'Plastisol', '<h2 style=\"margin: 0px; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: normal; font-stretch: inherit; font-size: 20px; line-height: 28px; font-family: Oswald, arial, serif; position: relative; color: #f01d1d;\">500PF Series Wet-On-Wet Plastisol Inks</h2>\r\n<div class=\"clear\" style=\"clear: both; overflow: hidden; visibility: hidden; width: 0px; height: 0px; color: #000000; font-family: \'Droid Sans\', arial, serif; font-size: 12px;\">&nbsp;</div>\r\n<div class=\"box three product first\" style=\"display: inline; float: left; border: 0px; width: 180px; color: #000000; font-family: \'Droid Sans\', arial, serif; font-size: 12px; margin: 0px 10px 10px 0px !important;\">&nbsp;</div>\r\n<div class=\"box two-three product last\" style=\"display: inline; float: left; border: 0px; width: 420px; color: #000000; font-family: \'Droid Sans\', arial, serif; font-size: 12px; margin: 0px 0px !important 10px 10px;\">\r\n<div class=\"clear\" style=\"clear: both; overflow: hidden; visibility: hidden; width: 0px; height: 0px;\">&nbsp;</div>\r\n<div class=\"space v_10\" style=\"clear: both; padding: 5px 0px;\">&nbsp;</div>\r\n</div>\r\n<div class=\"clear\" style=\"clear: both; overflow: hidden; visibility: hidden; width: 0px; height: 0px; color: #000000; font-family: \'Droid Sans\', arial, serif; font-size: 12px;\">&nbsp;</div>\r\n<div class=\"space v_10\" style=\"clear: both; padding: 5px 0px; color: #000000; font-family: \'Droid Sans\', arial, serif; font-size: 12px;\">&nbsp;</div>\r\n<div class=\"box product_detail full\" style=\"margin: 0px 0px 10px; border: 0px; width: 640px; color: #000000; font-family: \'Droid Sans\', arial, serif; font-size: 12px; float: none !important;\">Excalibur&rsquo;s 500PF Series is the printer&rsquo;s choice for high-production, wet-on-wet direct printing on 100% cotton light colors or on top of a flashed white underbase. 500PF is available in a wide range of colors all formulated to minimize build-up on the backs of screens. One of Excalibur&rsquo;s most versatile inks 500PF can be used for producing cold-peel transfers as well as being the ink series most widely used with Excalibur&rsquo;s additives suede or puff additive to transform 500PF Series colors into special effects inks. The 500PF Series is available in quantities from one quart to 50 gallon drums.\r\n<div class=\"clear\" style=\"clear: both; overflow: hidden; visibility: hidden; width: 0px; height: 0px;\">&nbsp;</div>\r\n<div class=\"space v_10\" style=\"clear: both; padding: 5px 0px;\">&nbsp;</div>\r\n<div class=\"box\" style=\"margin: 0px 10px 10px; display: inline; float: left; border: 0px;\">\r\n<p style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;\"><strong><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; color: #ff0000;\">FEATURES AND BENEFITS</span></strong></p>\r\n<ul style=\"margin: 0px 0px 20px 17px; padding: 0px; border: 0px; font: inherit; list-style-position: initial; list-style-image: initial;\">\r\n<li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit;\">Creamy, easy-printing consistency produces sharp, opaque prints on both manual and automatic presses whether you are printing directly on top of a white or light colored 100% cotton garment or on top of a flashed white underbase.</li>\r\n<li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit;\">Completely phthalate-free and lead-free formulation complies with all standards of Consumer Product Safety Improvement Act (CPSIA) banning phthalates and heavy metals in textile-printing inks.</li>\r\n</ul>\r\n<p style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;\"><strong><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; color: #ff0000;\">TECHNICAL INFORMATION</span></strong></p>\r\n<p style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;\"><strong>Gel Temperature:&nbsp;</strong>Ink will surface gel at 240&deg; F (116&deg; C).</p>\r\n<p style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;\"><strong>Curing</strong><strong>:</strong>&nbsp;Prints will fully cure when the entire ink film reaches 320&deg;F (160&deg;C) for at least 15 seconds.</p>\r\n<p style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;\"><strong>Heat Transfers:</strong>&nbsp;500PF can be used in printing cold peel transfers.</p>\r\n<p style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;\"><strong>Mesh:</strong>&nbsp;For direct printing a 110-305/inch (43T-122Tcm) may be used.</p>\r\n<p style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;\"><strong>Stencil:</strong>&nbsp;Any stencil compatible with plastisol inks may be used.</p>\r\n<p style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;\"><strong>Modification:</strong>&nbsp;Because plastisol inks are thixotropic and can body up during storage always stir ink thoroughly prior to print or adding reducers. If necessary 501PF Curable Reducer may be added increase printability of ink and to help clean from the screen. CAUTION: Adding too much 501PF Curable Reducer will reduce opacity and bleed-resistance.</p>\r\n<p style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;\"><strong>Squeegee</strong>: 70 durometer or 90/70/90 triple durometer blades are recommended.</p>\r\n<p style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;\"><strong>Clean-up:</strong>&nbsp;Use Enviro Series 2000 Green or Enviro Series TR Blend.</p>\r\n<p style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;\"><strong><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; color: #ff0000;\">COLOURS</span></strong></p>\r\n<p style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;\">Lemon Yellow, True Yellow, Light Royal, Maroon, Navy Blue, Old Gold, Light Gold, Gold, Purple, Violet, Fuschia, Reflex Blue, Royal Blue, Rhodamine Red, Rubine Red, Scarlet Red, Silver Grey, True Blue, Super Royal, Bright Blue, Light Blue, Warm Fled, Fluorescent Blue, Fluorescent Green, Fluorescent Magenta, Fluorescent Orange, Fluorescent Pink, Fluorescent Red, Fluorescent Violet, Fluorescent Yellow.</p>\r\n<p style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;\"><strong><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; color: #ff0000;\">CAUTION</span></strong></p>\r\n<p style=\"margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;\">Always test finished prints for curing, adhesion and desired look prior to beginning full production runs. Lancer Group International cannot guarantee the results or back claims that this mixed ink will test phthalate-free if any additive other than an additive manufactured by Lancer Group International is used to modify this ink. Test results by a third-party laboratory verifying all components used to produce this ink are phthalate-free and lead-free are available upon request.</p>\r\n</div>\r\n</div>', 1200.00, 'products/November2020/7fqvhaD2UnfVIQ39qymG.jpg', NULL, '2020-11-09 12:55:56', '2020-11-09 12:55:56', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(43, 'chill product', '<p>nill</p>', 4100.00, 'products\\November2020\\JpDzJZNzgv52n2S96O5S.jpg', NULL, '2020-11-12 00:15:18', '2020-11-12 00:15:18', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(44, 'lil wyne', '<p>ok</p>', 7800.00, 'products\\November2020\\bIcV2paqYQoMaDjnp9HL.jpg', 1, '2020-11-12 00:59:00', '2020-11-12 01:08:56', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(45, 'checking fb post', '<p>wicked</p>', 45000.00, 'products\\November2020\\CGHFINXNCWoBV3BPo3zL.jpeg', NULL, '2020-11-12 03:26:37', '2020-11-12 03:26:37', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `SKU` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `product_id`, `size`, `price`, `SKU`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'S', 100.00, 'SSS', 0, '2020-11-01 10:01:24', '2020-11-01 10:01:24'),
(2, 1, 'M', 200.00, 'MMM', 0, '2020-11-01 10:01:40', '2020-11-01 10:01:40'),
(3, 38, 'Medium', 5999.00, 'lol', 1, '2020-11-02 01:04:00', '2020-11-09 11:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(4, 2, 6, NULL, NULL),
(5, 3, 6, NULL, NULL),
(6, 6, 48, NULL, NULL),
(7, 6, 49, NULL, NULL),
(8, 16, 7, NULL, NULL),
(9, 18, 7, NULL, NULL),
(10, 18, 11, NULL, NULL),
(11, 19, 9, NULL, NULL),
(12, 20, 8, NULL, NULL),
(13, 21, 7, NULL, NULL),
(14, 38, 62, NULL, NULL),
(15, 39, 16, NULL, NULL),
(16, 39, 60, NULL, NULL),
(17, 40, 11, NULL, NULL),
(18, 40, 48, NULL, NULL),
(19, 41, 11, NULL, NULL),
(20, 41, 48, NULL, NULL),
(21, 42, 11, NULL, NULL),
(22, 42, 48, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `star` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reward_points`
--

CREATE TABLE `reward_points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `point` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reward_points`
--

INSERT INTO `reward_points` (`id`, `user_id`, `point`, `created_at`, `updated_at`) VALUES
(1, 3, 99365, '2020-10-19 10:40:46', '2020-10-19 10:40:46'),
(2, 6, 2810, '2020-10-28 02:41:38', '2020-10-28 02:41:38'),
(3, 4, 0, '2020-10-29 09:07:35', '2020-10-29 09:07:35'),
(4, 5, 0, '2020-11-02 01:08:10', '2020-11-02 01:08:10'),
(5, 8, 300, '2020-11-02 01:54:29', '2020-11-02 01:54:29'),
(6, 9, 600, '2020-11-02 02:49:36', '2020-11-02 02:49:36'),
(7, 10, 300, '2020-11-02 03:34:08', '2020-11-02 03:34:08'),
(8, 11, 0, '2020-11-02 12:30:05', '2020-11-02 12:30:05'),
(9, 12, 310, '2020-11-07 12:34:04', '2020-11-07 12:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(2, 'user', 'Normal User', '2020-10-11 02:06:38', '2020-10-11 02:06:38'),
(3, 'seller', 'Seller', '2020-10-12 01:51:03', '2020-10-12 01:51:03'),
(4, 'wholesale-seller', 'Wholesale Seller', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `name`, `user_id`, `is_active`, `description`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'absolute niche', 4, 1, 'Perfumes', NULL, '2020-10-12 04:46:00', '2020-10-12 04:50:06'),
(2, 'ec', 5, 1, 'Paintings', NULL, '2020-10-12 04:47:00', '2020-10-29 08:40:54'),
(3, 'coxs', 8, 1, 'Shop', NULL, '2020-11-02 02:44:00', '2020-11-02 02:47:05'),
(4, 'M R Printing', 12, 1, 'Printing Chemical', NULL, '2020-11-07 12:28:00', '2020-11-09 09:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `site_reviews`
--

CREATE TABLE `site_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_reviews`
--

INSERT INTO `site_reviews` (`id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 3, 'hejhfcjhas', '2020-10-30 16:00:53', '2020-10-30 16:00:53'),
(2, 3, 'hejhfcjhas', '2020-10-30 16:01:49', '2020-10-30 16:01:49');

-- --------------------------------------------------------

--
-- Table structure for table `sub_orders`
--

CREATE TABLE `sub_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','processing','completed','decline') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `grand_total` double(8,2) NOT NULL,
  `item_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seller_type` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_order_items`
--

CREATE TABLE `sub_order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_order_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_paid` double(8,2) NOT NULL,
  `commission` double(8,2) NOT NULL,
  `status` enum('pending','processing','completed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`, `phone`) VALUES
(3, 1, 'admin', 'a@email.com', 'users/default.png', NULL, '$2y$10$PXSXqFlk60LBv.OGGFSHaeIH2oBGVRyyBlROqR4uQiQIwP057/Cl.', 'Qm0NSKj8p3TP6cB9Uv131ltj9keFfjCJHMnTq867j2kE1kQ7xR8UlASOFAjs', NULL, '2020-10-11 02:09:28', '2020-11-06 22:36:46', 1720345550),
(4, 3, 'khaled', 'k@gmail.com', 'users/default.png', NULL, '$2y$10$XZRAXbltKpHx3hltOZsZwuocumMz/NKtw2jO6dFXlJIMh3hBappD2', NULL, '{\"locale\":\"en\"}', '2020-10-11 22:51:15', '2020-10-12 04:50:06', 0),
(5, 3, 'echem', 'e@gmail.com', 'users/default.png', NULL, '$2y$10$LzZgnMh01QKlvKIhuWRbVezEyrCJEPPw3ey.0Q.YgcMIJE3VG1k8u', NULL, NULL, '2020-10-11 22:52:20', '2020-10-29 08:40:55', 0),
(6, 2, 'Jamilur rahman', 'abir2jamilur30@gmail.com', 'users/default.png', NULL, '$2y$10$zKSeYCneq9sUwAom/kCGoO0QXtm/S0.UZtzHZR2scYUq6eW8eQ40W', NULL, NULL, '2020-10-27 05:47:39', '2020-10-27 05:47:39', 1787201430),
(7, 2, 'abc', 'abc@email.com', 'users/default.png', NULL, '$2y$10$5IZwRC/RicxWkK4QKKEiiOXV5NCCaj5XBkRG5PV0CpmYZB1U78cVi', NULL, NULL, '2020-10-28 23:21:35', '2020-10-28 23:21:35', 1787201430),
(8, 3, 'Mhraihan', 'coxsonline@gmail.com', 'users/default.png', NULL, '$2y$10$GUgCVf6TzloWRRwtAfCrzuAnhB7qDUVYlpF3/65a2WpXCaGzBoAKC', NULL, NULL, '2020-11-02 01:52:53', '2020-11-02 02:56:24', 1762321618),
(9, 2, 'new', 'khaled_a.k@outlook.com', 'users/default.png', NULL, '$2y$10$N4cuCxs.AJImaFYk4r5DZecn4HbytwSsmkvkHIBzmSlnK6NVIodW2', NULL, NULL, '2020-11-02 02:45:27', '2020-11-02 02:45:27', 1720345550),
(10, 4, 'itshop', 'itudyokta@gmail.com', 'users/default.png', NULL, '$2y$10$MnYoZHf2LWfogSqWlRJqG.uQl8KV2Brn.rP49Wxay.n501ApuKiry', NULL, NULL, '2020-11-02 03:30:23', '2020-11-02 10:31:01', 1762321618),
(11, 2, 'test', 'test@gmail.com', 'users/default.png', NULL, '$2y$10$dww1w1me/cHJPtxwt8IEuOiIk9nssSZMoJHSDTtyXwfvESOX/wf8u', NULL, NULL, '2020-11-02 11:57:54', '2020-11-02 11:57:54', 12345678),
(12, 2, 'Mizanur Rahman', 'mrahman0004@gmail.com', 'users/default.png', NULL, '$2y$10$lBU8zzUK0mW2HFtZ5CBWBuzvSuJ0AsHxTCdvkbJ2qPFnP1F9p6ATW', NULL, NULL, '2020-11-07 12:25:19', '2020-11-07 12:25:20', 1880006362);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `category_id`, `video`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/N-QTSb1vhqU\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'video testinng', 'check', '2020-11-02 01:55:00', '2020-11-06 22:09:01'),
(2, 1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/N-QTSb1vhqU\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'checking', 'ok', '2020-11-06 22:14:39', '2020-11-06 22:14:39'),
(3, 2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/N-QTSb1vhqU\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'khan', 'ok', '2020-11-06 22:15:00', '2020-11-08 19:08:21'),
(4, 1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xYpzIQ4g0TE\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'The Process Chromaline', 'A quick video showing the coating process using CPTEX direct emulsion.', '2020-11-08 19:06:00', '2020-11-09 11:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `video_categories`
--

CREATE TABLE `video_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_categories`
--

INSERT INTO `video_categories` (`id`, `name`, `description`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'Tutorials', 'test tutorials', NULL, '2020-11-01 09:08:11', '2020-11-01 09:08:11'),
(2, 'South Tech', 'TEST DESCRIPTION', 1, '2020-11-01 09:08:38', '2020-11-01 09:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(8,2) NOT NULL DEFAULT 0.00,
  `amount_spend` double(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `user_id`, `amount`, `amount_spend`, `created_at`, `updated_at`) VALUES
(1, 3, 34381.05, 6400.00, '2020-10-19 09:39:49', '2020-10-19 09:39:49'),
(2, 6, 12391.10, 6900.00, '2020-10-28 02:41:38', '2020-10-28 02:41:38'),
(3, 4, 0.00, 0.00, '2020-10-29 09:07:35', '2020-10-29 09:07:35'),
(4, 5, 0.00, 0.00, '2020-11-02 01:08:10', '2020-11-02 01:08:10'),
(5, 8, 600.00, 9400.00, '2020-11-02 01:54:29', '2020-11-02 01:54:29'),
(6, 9, 0.00, 0.00, '2020-11-02 02:49:36', '2020-11-02 02:49:36'),
(7, 10, 1100.00, 0.00, '2020-11-02 03:34:08', '2020-11-02 03:34:08'),
(8, 11, 1000.00, 9000.00, '2020-11-02 12:30:05', '2020-11-02 12:30:05'),
(9, 12, 19250.00, 0.00, '2020-11-07 12:34:04', '2020-11-07 12:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `wholesales`
--

CREATE TABLE `wholesales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wholesales`
--

INSERT INTO `wholesales` (`id`, `name`, `user_id`, `is_active`, `description`, `created_at`, `updated_at`) VALUES
(1, 'IT Shop', 10, 1, 'IT product', '2020-11-02 03:38:00', '2020-11-02 10:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_pages`
--
ALTER TABLE `custom_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `ebook_requests`
--
ALTER TABLE `ebook_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gift_cards`
--
ALTER TABLE `gift_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gift_card_purchases`
--
ALTER TABLE `gift_card_purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gift_card_purchases_user_id_foreign` (`user_id`),
  ADD KEY `gift_card_purchases_card_id_foreign` (`card_id`);

--
-- Indexes for table `home_videos`
--
ALTER TABLE `home_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_post_cat_id_foreign` (`post_cat_id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_shop_id_foreign` (`shop_id`),
  ADD KEY `products_wholesale_id_foreign` (`wholesale_id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `reward_points`
--
ALTER TABLE `reward_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reward_points_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shops_user_id_foreign` (`user_id`);

--
-- Indexes for table `site_reviews`
--
ALTER TABLE `site_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `site_reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `sub_orders`
--
ALTER TABLE `sub_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_orders_order_id_foreign` (`order_id`),
  ADD KEY `sub_orders_seller_id_foreign` (`seller_id`),
  ADD KEY `sub_orders_seller_type_foreign` (`seller_type`);

--
-- Indexes for table `sub_order_items`
--
ALTER TABLE `sub_order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_order_items_sub_order_id_foreign` (`sub_order_id`),
  ADD KEY `sub_order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_sub_order_id_foreign` (`sub_order_id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_category_id_foreign` (`category_id`);

--
-- Indexes for table `video_categories`
--
ALTER TABLE `video_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_categories_parent_foreign` (`parent`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wallets_user_id_foreign` (`user_id`);

--
-- Indexes for table `wholesales`
--
ALTER TABLE `wholesales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wholesales_user_id_foreign` (`user_id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `custom_pages`
--
ALTER TABLE `custom_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `ebook_requests`
--
ALTER TABLE `ebook_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gift_cards`
--
ALTER TABLE `gift_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gift_card_purchases`
--
ALTER TABLE `gift_card_purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `home_videos`
--
ALTER TABLE `home_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reward_points`
--
ALTER TABLE `reward_points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site_reviews`
--
ALTER TABLE `site_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_orders`
--
ALTER TABLE `sub_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_order_items`
--
ALTER TABLE `sub_order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video_categories`
--
ALTER TABLE `video_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wholesales`
--
ALTER TABLE `wholesales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gift_card_purchases`
--
ALTER TABLE `gift_card_purchases`
  ADD CONSTRAINT `gift_card_purchases_card_id_foreign` FOREIGN KEY (`card_id`) REFERENCES `gift_cards` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gift_card_purchases_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_post_cat_id_foreign` FOREIGN KEY (`post_cat_id`) REFERENCES `post_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_wholesale_id_foreign` FOREIGN KEY (`wholesale_id`) REFERENCES `wholesales` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reward_points`
--
ALTER TABLE `reward_points`
  ADD CONSTRAINT `reward_points_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `site_reviews`
--
ALTER TABLE `site_reviews`
  ADD CONSTRAINT `site_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_orders`
--
ALTER TABLE `sub_orders`
  ADD CONSTRAINT `sub_orders_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sub_orders_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sub_orders_seller_type_foreign` FOREIGN KEY (`seller_type`) REFERENCES `user_roles` (`role_id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_order_items`
--
ALTER TABLE `sub_order_items`
  ADD CONSTRAINT `sub_order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sub_order_items_sub_order_id_foreign` FOREIGN KEY (`sub_order_id`) REFERENCES `sub_orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_sub_order_id_foreign` FOREIGN KEY (`sub_order_id`) REFERENCES `sub_orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `video_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `video_categories`
--
ALTER TABLE `video_categories`
  ADD CONSTRAINT `video_categories_parent_foreign` FOREIGN KEY (`parent`) REFERENCES `video_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wallets`
--
ALTER TABLE `wallets`
  ADD CONSTRAINT `wallets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wholesales`
--
ALTER TABLE `wholesales`
  ADD CONSTRAINT `wholesales_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
