-- phpMyAdmin SQL Dump
-- version 5.2.1
-- Generation Time: Apr 26, 2024 at 03:34 AM

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silentga_full_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `order_list`;
DROP TABLE IF EXISTS `orders`;
DROP TABLE IF EXISTS `cart`;
DROP TABLE IF EXISTS `sales`;
DROP TABLE IF EXISTS `inventory`;
DROP TABLE IF EXISTS `products`;
DROP TABLE IF EXISTS `categories`;
DROP TABLE IF EXISTS `brands`;
DROP TABLE IF EXISTS `clients`;
DROP TABLE IF EXISTS `system_info`;
DROP TABLE IF EXISTS `users`;

CREATE TABLE `brands` (
  `id` int(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text DEFAULT NULL,
  `image_path` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image_path`, `status`, `delete_flag`, `date_created`) VALUES
(7, 'Steam - استیم', 'Steam is a video game digital distribution service and storefront developed by Valve Corporation. It was launched as a software client in September 2003 to provide game updates automatically for Valve\'s games, and expanded to distributing third-party titles in late 2005.', 'uploads/brands/7.jpg?v=1711257074', 1, 0, '2024-03-24 08:41:14'),
(8, 'blizzard - بلیزارد', 'Blizzard Entertainment, Inc. is an American video game developer and publisher based in Irvine, California.', 'uploads/brands/8.jpg?v=1712205357', 0, 0, '2024-03-24 11:57:15'),
(11, 'Discord - دیسکورد', 'Discord is an instant messaging and VoIP social platform which allows communication through voice calls, video calls, text messaging, and media and files. Communication can be private or take place in virtual communities called \"servers\".', 'uploads/brands/11.png?v=1712205159', 0, 0, '2024-04-04 08:02:38'),
(12, 'website - وبسایت', 'Wikipedia is a free content online encyclopedia written and maintained by a community of volunteers, known as Wikipedians, through open collaboration and the use of the wiki-based editing system MediaWiki. Wikipedia is the largest and most-read reference work in history', NULL, 0, 0, '2024-04-04 08:11:49'),
(13, 'logo - لوگو', 'A logo (abbreviation of logotype;[1] from Ancient Greek Î»ÏŒÎ³Î¿Ï‚ (lÃ³gos) \'word, speech\', and Ï„Ï Ï€Î¿Ï‚ (tÃºpos) \'mark, imprint\') is a graphic mark, emblem, or symbol used to aid and promote public identification and recognition. It may be of an abstract or figurative design or to include the text of the name that it represents as in a wordmark.\r\n\r\nIn the days of hot metal typesetting, a logotype was one word cast as a single piece of type (e.g. \"The\" in ATF Garamond), as opposed to a ligature, which is two or more letters joined, but not forming a word.[2] By extension, the term was also used for a uniquely set and arranged typeface or colophon. At the level of mass communication and in common usage, a company\'s logo is today often synonymous with its trademark or brand.[3]', 'uploads/brands/13.png?v=1712206025', 0, 0, '2024-04-04 08:17:05'),
(14, 'Eitaa - ایتا', 'ایتا\r\nپیام‌رسان ایتا محصول شرکت اندیشه یاوران تمدن امروز (ایتا) است که در سال ۱۳۹۶ شروع به فعالیت کرد.[۴۴][۴۵][۴۶] می‌گویند این پیام‌رسان بیش از ۱۸ میلیون کاربر فعال روزانه در ایران دارد.[۴۷] اکنون نسخه جدید این پیام‌رسان امکان نمایش کانال‌ها به‌صورت رسانه محور (مانند اینستاگرام) و تماس صوتی و تصویری را به کاربران خود داده است[۴۸]', NULL, 0, 0, '2024-04-04 08:20:14');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(30) NOT NULL,
  `client_id` int(30) NOT NULL,
  `inventory_id` int(30) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `client_id`, `inventory_id`, `price`, `quantity`, `date_created`) VALUES
(26, 6, 7, 100000, 1, '2024-04-02 08:54:17'),
(31, 8, 7, 100000, 1, '2024-04-04 04:50:13'),
(36, 9, 8, 0, 1, '2024-04-06 10:09:10'),
(38, 3, 7, 100000, 1, '2024-04-11 03:18:44'),
(41, 3, 10, 1200000, 1, '2024-04-19 02:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(30) NOT NULL,
  `category` varchar(250) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `description`, `status`, `delete_flag`, `date_created`) VALUES
(11, '🖤بازی ها🎮', 'A video game[a] or computer game is an electronic game that involves interaction with a user interface or input device (such as a joystick, controller, keyboard, or motion sensing device) to generate visual feedback from a display device, most commonly shown in a video format on a television set, computer monitor, flat-panel display or touchscreen on handheld devices, or a virtual reality headset. Most modern video games are audiovisual, with audio complement delivered through speakers or headphones, and sometimes also with other types of sensory feedback (e.g., haptic technology that provides tactile sensations). Some video games also allow microphone and webcam inputs for in-game chatting and livestreaming.', 1, 0, '2024-03-24 08:45:01'),
(12, '🛡برنامه ها✨', 'Wikipedia is a free-content online encyclopedia written and maintained by a community of volunteers, known as Wikipedians, through open collaboration and the use of the wiki-based editing system MediaWiki. Wikipedia is the largest and most-read reference work in history.', 0, 0, '2024-03-24 08:46:51'),
(13, '🎵موسیقی👌', 'In the most general of terms, music is the arrangement of sound to create some combination of form, harmony, melody, rhythm, or otherwise expressive content.[1][2][3] Definitions of music vary depending on culture,[4] though it is an aspect of all human societies and a cultural universal.[5] While scholars agree that music is defined by a few specific elements, there is no consensus on their precise definitions.[6] The creation of music is commonly divided into musical composition, musical improvisation, and musical performance,[7] though the topic itself extends into academic disciplines, criticism, philosophy, psychology, and therapeutic contexts. Music may be performed using a vast range of instruments, including the human voice to sing, and thus is often credited for its extreme versatility and opportunity for creativity.[8]', 0, 0, '2024-03-24 08:47:43'),
(14, '💰ما از شما میخریم♻', 'You can sell your products to us at a reasonable price!', 1, 0, '2024-03-24 08:49:04'),
(15, '⚙خدمات🔧', 'A service is an act or use for which a consumer, firm, or government is willing to pay. Examples include work done by barbers, doctors, lawyers, mechanics, banks, insurance companies, and so on. Public services are those that society as a whole pays for.', 0, 0, '2024-03-24 08:52:12'),
(17, '✨تقویت سطح🎈', 'for game', 0, 0, '2024-03-24 11:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(30) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `default_delivery_address` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `firstname`, `lastname`, `gender`, `contact`, `email`, `password`, `default_delivery_address`, `status`, `delete_flag`, `date_created`) VALUES
(3, 'AmirAli', 'SalehPoor', 'Male', 'Developer', 'amiralisalehpoor@gmail.com', '3c18d0e80049401fbdbe5ebf2400ed2c', 'Iran_Guilan_Rasht_021', 1, 0, '2024-03-24 06:42:29'),
(4, 'matin', 'mk', 'Male', '225456698', 'vahexeb646@gronasu.com', 'f3ff70d033eba7ec6083b55c164d3d7f', 'asdewsff', 1, 0, '2024-03-24 12:24:56'),
(5, 'matin', 'mk', 'Male', '485512652', 'matin.m.k78@gmail.com', 'adcf3de667c59703eadec1d2239d12d5', '', 1, 0, '2024-04-02 00:34:45'),
(6, 'Ashkan', 'Mir', 'Male', '099999999999', 'mirgomariashkan@gmail.com', 'b23aac77c6223f19e0d93e8be2bd719d', '', 1, 0, '2024-04-02 08:54:02'),
(7, 'mohammad', 'karimi', 'Male', '2323132312', 'bigcommunity21@gmail.com', '5aca641491a3e2632efa7d00a7bcff93', '', 1, 0, '2024-04-03 01:45:00'),
(8, 'Ali', 'Imani', 'Male', '09149732515', 'x142187@gmail.com', 'ad12526f077a476e6df329a41722fee5', '', 1, 0, '2024-04-04 04:46:23'),
(9, 'Firstname', 'Lastname', 'Male', 'justdiscordmemb', 'justdiscordmember222@gmail.com', 'd721c74bb9376c354010f4f0d60a91a8', '', 1, 0, '2024-04-06 10:08:51'),
(10, 'test', 'test', 'مرد', '123', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'test', 1, 0, '2024-04-09 11:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(30) NOT NULL,
  `variant` text NOT NULL,
  `product_id` int(30) NOT NULL,
  `quantity` double NOT NULL,
  `price` float NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `variant`, `product_id`, `quantity`, `price`, `date_created`, `date_updated`) VALUES
(7, 'نیاز دارم میخواهم بخرم', 5, 10, 105000, '2024-03-24 09:57:23', '2024-04-26 02:47:37'),
(8, '10min - 1day = Online payment | Crypto Currency!', 6, 0, 0, '2024-03-24 10:05:48', '2024-04-02 00:39:24'),
(10, '1min - 1day | online payment', 7, 6, 1200000, '2024-03-24 12:18:09', '2024-04-19 01:58:09'),
(11, '30-day fix | host / for 1 year + domaine / for 1 year + setup project / for 1 year', 8, 0, 15000000, '2024-04-02 08:31:50', '2024-04-04 08:56:48'),
(12, 'میخواهم بفروشم==ارتباط با مدیران', 5, 0, 85000, '2024-04-26 02:43:36', '2024-04-26 02:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(30) NOT NULL,
  `ref_code` varchar(100) NOT NULL,
  `client_id` int(30) NOT NULL,
  `delivery_address` text NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `order_type` tinyint(1) NOT NULL COMMENT '1= pickup,2= deliver',
  `amount` double NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0 = pending,\r\n1= Packed,\r\n2 = Out for Delivery,\r\n3=Delivered,\r\n4=cancelled',
  `paid` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `ref_code`, `client_id`, `delivery_address`, `payment_method`, `order_type`, `amount`, `status`, `paid`, `date_created`, `date_updated`) VALUES
(8, '20240300002', 3, 'Iran_Guilan_Rasht_021', 'cod', 0, 1.88, 3, 1, '2024-03-24 12:01:36', '2024-03-24 12:05:27'),
(19, '20240300013', 3, 'Iran_Guilan_Rasht_021', 'cod', 0, 3.38, 4, 0, '2024-03-25 02:38:34', '2024-04-03 03:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id` int(30) NOT NULL,
  `order_id` int(30) NOT NULL,
  `inventory_id` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(30) NOT NULL,
  `brand_id` int(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `specs` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `name`, `specs`, `status`, `delete_flag`, `date_created`) VALUES
(5, 7, 11, 'Mann Co. Supply Crate Key - کلید بازی تیم فورترس 2', '&lt;p style=&quot;margin: 0.5em 0px; line-height: inherit; color: rgb(211, 207, 201); font-family: sans-serif; font-size: 12.8px; background-color: rgb(25, 27, 28); --darkreader-inline-color: #c9c4bd; --darkreader-inline-bgcolor: #141616;&quot; data-darkreader-inline-color=&quot;&quot; data-darkreader-inline-bgcolor=&quot;&quot;&gt;The&amp;nbsp;&lt;b&gt;Mann Co. Supply Crate Key&lt;/b&gt;&amp;nbsp;is a single-use&amp;nbsp;&lt;a href=&quot;https://wiki.teamfortress.com/wiki/Tools&quot; title=&quot;Tools&quot; style=&quot;color: rgb(114, 154, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; --darkreader-inline-color: #77a5ce; --darkreader-inline-bgimage: none;&quot; data-darkreader-inline-color=&quot;&quot; data-darkreader-inline-bgimage=&quot;&quot;&gt;tool&lt;/a&gt;, available through purchase at the&amp;nbsp;&lt;a href=&quot;https://wiki.teamfortress.com/wiki/Mann_Co._Store&quot; title=&quot;Mann Co. Store&quot; style=&quot;color: rgb(114, 154, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; --darkreader-inline-color: #77a5ce; --darkreader-inline-bgimage: none;&quot; data-darkreader-inline-color=&quot;&quot; data-darkreader-inline-bgimage=&quot;&quot;&gt;Mann Co. Store&lt;/a&gt;. It is represented by a brazen, antique&amp;nbsp;&lt;a href=&quot;https://en.wikipedia.org/wiki/skeleton_key&quot; class=&quot;extiw&quot; title=&quot;w:skeleton key&quot; style=&quot;color: rgb(103, 159, 213); background-image: url(&amp;quot;blob:https://wiki.teamfortress.com/6e4d25ef-f8c2-4e3a-8d65-4f2324db108d&amp;quot;); background-position: right center; background-size: 15px; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; padding-right: 17px; --darkreader-inline-color: #6da7d7;&quot; data-darkreader-inline-color=&quot;&quot;&gt;skeleton key&lt;/a&gt;&amp;nbsp;with a round bow. Each&amp;nbsp;&lt;b&gt;key&lt;/b&gt;&amp;nbsp;can be used to open one selected locked&amp;nbsp;&lt;a href=&quot;https://wiki.teamfortress.com/wiki/Mann_Co._Supply_Crate&quot; title=&quot;Mann Co. Supply Crate&quot; style=&quot;color: rgb(114, 154, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; --darkreader-inline-color: #77a5ce; --darkreader-inline-bgimage: none;&quot; data-darkreader-inline-color=&quot;&quot; data-darkreader-inline-bgimage=&quot;&quot;&gt;supply crate&lt;/a&gt;.&lt;/p&gt;&lt;p style=&quot;margin: 0.5em 0px; line-height: inherit; color: rgb(211, 207, 201); font-family: sans-serif; font-size: 12.8px; background-color: rgb(25, 27, 28); --darkreader-inline-color: #c9c4bd; --darkreader-inline-bgcolor: #141616;&quot; data-darkreader-inline-color=&quot;&quot; data-darkreader-inline-bgcolor=&quot;&quot;&gt;To use a key, the player selects the key in their&amp;nbsp;&lt;a href=&quot;https://wiki.teamfortress.com/wiki/Backpack&quot; title=&quot;Backpack&quot; style=&quot;color: rgb(114, 154, 204); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; --darkreader-inline-color: #77a5ce; --darkreader-inline-bgimage: none;&quot; data-darkreader-inline-color=&quot;&quot; data-darkreader-inline-bgimage=&quot;&quot;&gt;backpack&lt;/a&gt;&amp;nbsp;and clicks the &#039;Use with...&#039; button before selecting the crate they wish to be opened. The key can be used with any regular series crate in the player&#039;s backpack, where it is consumed, along with the crate, in the process.&lt;/p&gt;&lt;p style=&quot;margin: 0.5em 0px; line-height: inherit; background-color: rgb(25, 27, 28); --darkreader-inline-bgcolor: #141616;&quot; data-darkreader-inline-bgcolor=&quot;&quot;&gt;&lt;font color=&quot;#d3cfc9&quot; face=&quot;sans-serif&quot; data-darkreader-inline-color=&quot;&quot; style=&quot;--darkreader-inline-color: #c9c4bd;&quot;&gt;&lt;span style=&quot;font-size: 12.8px;&quot;&gt;Keys cannot be found from&amp;nbsp;&lt;/span&gt;&lt;/font&gt;&lt;a href=&quot;https://wiki.teamfortress.com/wiki/Item_drop_system&quot; title=&quot;Item drop system&quot; style=&quot;color: rgb(114, 154, 204); font-family: sans-serif; font-size: 12.8px; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; --darkreader-inline-color: #77a5ce; --darkreader-inline-bgimage: none;&quot; data-darkreader-inline-color=&quot;&quot; data-darkreader-inline-bgimage=&quot;&quot;&gt;random drops&lt;/a&gt;&lt;font color=&quot;#d3cfc9&quot; face=&quot;sans-serif&quot; data-darkreader-inline-color=&quot;&quot; style=&quot;--darkreader-inline-color: #c9c4bd;&quot;&gt;&lt;span style=&quot;font-size: 12.8px;&quot;&gt;&amp;nbsp;and cannot be&amp;nbsp;&lt;/span&gt;&lt;/font&gt;&lt;a href=&quot;https://wiki.teamfortress.com/wiki/Crafting&quot; title=&quot;Crafting&quot; style=&quot;color: rgb(114, 154, 204); font-family: sans-serif; font-size: 12.8px; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; --darkreader-inline-color: #77a5ce; --darkreader-inline-bgimage: none;&quot; data-darkreader-inline-color=&quot;&quot; data-darkreader-inline-bgimage=&quot;&quot;&gt;crafted&lt;/a&gt;&lt;font color=&quot;#d3cfc9&quot; face=&quot;sans-serif&quot; data-darkreader-inline-color=&quot;&quot; style=&quot;--darkreader-inline-color: #c9c4bd;&quot;&gt;&lt;span style=&quot;font-size: 12.8px;&quot;&gt;. Upon purchase, they are untradable for 7 days, provided the user&#039;s first Steam purchase was more than 30 days ago. Otherwise, a 3-day waiting period is imposed. Uncrated items inherit the trade restrictions of the keys used to open the crate(s).&lt;/span&gt;&lt;/font&gt;&lt;br&gt;&lt;font face=&quot;sans-serif&quot;&gt;&lt;span style=&quot;font-size: 12.8px;&quot;&gt;#tf2&amp;nbsp;&lt;/span&gt;&lt;/font&gt;&lt;span style=&quot;background-color: rgb(24, 26, 27); font-size: 12.8px; --darkreader-inline-bgcolor: #131516;&quot; data-darkreader-inline-bgcolor=&quot;&quot;&gt;&lt;font face=&quot;sans-serif&quot;&gt;#key team fortress&amp;nbsp;&lt;/font&gt;&lt;/span&gt;&lt;span style=&quot;background-color: rgb(24, 26, 27); font-size: 12.8px; --darkreader-inline-bgcolor: #131516;&quot; data-darkreader-inline-bgcolor=&quot;&quot;&gt;&lt;font face=&quot;sans-serif&quot;&gt;#steam item&lt;/font&gt;&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', 1, 0, '2024-03-24 09:53:45'),
(6, 7, 14, 'Mann Co. Supply Crate Key_(Sell_To_Us!) - کلید بازی تیم فورترس 2 (به ما بفروشید!)', '&lt;p&gt;&lt;span style=&quot;font-size: 18px;&quot;&gt;&lt;b&gt;&lt;u&gt;&lt;i&gt;In this situation, we will buy from you!&lt;/i&gt;&lt;/u&gt;&lt;/b&gt;&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', 1, 0, '2024-03-24 10:02:59'),
(7, 7, 11, 'prime Counter-Strike 2 - ارتقائ بازی کانتر استرایک 2', '&lt;span style=&quot;color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(31, 31, 31); --darkreader-inline-color: #c1bcb4; --darkreader-inline-bgcolor: #17191a;&quot; data-darkreader-inline-color=&quot;&quot; data-darkreader-inline-bgcolor=&quot;&quot;&gt;Counter-Strike: Global Offensive (&lt;/span&gt;&lt;span style=&quot;font-weight: bold; color: rgb(188, 192, 195); font-family: arial, sans-serif; background-color: rgb(31, 31, 31); --darkreader-inline-color: #c0bab2; --darkreader-inline-bgcolor: #17191a;&quot; data-darkreader-inline-color=&quot;&quot; data-darkreader-inline-bgcolor=&quot;&quot;&gt;CS&lt;/span&gt;&lt;span style=&quot;color: rgb(189, 193, 198); font-family: arial, sans-serif; background-color: rgb(31, 31, 31); --darkreader-inline-color: #c1bcb4; --darkreader-inline-bgcolor: #17191a;&quot; data-darkreader-inline-color=&quot;&quot; data-darkreader-inline-bgcolor=&quot;&quot;&gt;:GO) is a 2012 multiplayer tactical first-person shooter developed by Valve and Hidden Path Entertainment.&lt;/span&gt;&lt;br&gt;', 1, 0, '2024-03-24 12:17:00'),
(8, 12, 15, 'online-shop - فروشگاه آنلاین', '&lt;p&gt;&lt;span style=&quot;color: rgb(232, 232, 232); font-family: &amp;quot;Google Sans&amp;quot;, arial, sans-serif; font-size: 20px; background-color: rgb(31, 31, 31); --darkreader-inline-color: #d9d6d1; --darkreader-inline-bgcolor: #17191a;&quot; data-darkreader-inline-color=&quot;&quot; data-darkreader-inline-bgcolor=&quot;&quot;&gt;A web developer is&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;background-color: rgb(58, 63, 80); color: rgb(226, 238, 255); font-family: &amp;quot;Google Sans&amp;quot;, arial, sans-serif; font-size: 20px; --darkreader-inline-bgcolor: #2e3240; --darkreader-inline-color: #b8ddff;&quot; data-darkreader-inline-bgcolor=&quot;&quot; data-darkreader-inline-color=&quot;&quot;&gt;a programmer who develops World Wide Web applications using a client&ndash;server model&lt;/span&gt;&lt;span style=&quot;color: rgb(232, 232, 232); font-family: &amp;quot;Google Sans&amp;quot;, arial, sans-serif; font-size: 20px; background-color: rgb(31, 31, 31); --darkreader-inline-color: #d9d6d1; --darkreader-inline-bgcolor: #17191a;&quot; data-darkreader-inline-color=&quot;&quot; data-darkreader-inline-bgcolor=&quot;&quot;&gt;. The applications typically use HTML, CSS, and JavaScript in the client, and any general-purpose programming language in the server.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', 0, 0, '2024-04-02 08:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(30) NOT NULL,
  `order_id` int(30) NOT NULL,
  `total_amount` double NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'SilentGalaxy | Shop | فروشگاه'),
(6, 'short_name', 'SilentGalaxy'),
(11, 'logo', 'uploads/logo-1712208118.png?v=1712208118'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/cover-1711258536.png?v=1711258536');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `date_added`, `date_updated`) VALUES
(1, 'AmirAli', 'SalehPoor', 'SilentGalaxy', '3c18d0e80049401fbdbe5ebf2400ed2c', 'uploads/avatars/1.jpg?v=1711254300', NULL, 1, '2021-01-20 14:02:37', '2024-03-24 07:55:00'),
(2, 'Silent', 'Galaxy', 'SilentAdmin', 'bb2059175c14b4b6089c592e17dfdf0f', 'uploads/avatars/2.jpg?v=1714085250', NULL, 1, '2021-01-20 14:02:37', '2024-04-26 02:17:30');

--
-- Indexes for dumped tables
--

ALTER TABLE `brands` ADD PRIMARY KEY (`id`);
ALTER TABLE `cart` ADD PRIMARY KEY (`id`), ADD KEY `inventory_id` (`inventory_id`), ADD KEY `client_id` (`client_id`);
ALTER TABLE `categories` ADD PRIMARY KEY (`id`);
ALTER TABLE `clients` ADD PRIMARY KEY (`id`);
ALTER TABLE `inventory` ADD PRIMARY KEY (`id`), ADD KEY `product_id` (`product_id`);
ALTER TABLE `orders` ADD PRIMARY KEY (`id`), ADD KEY `client_id` (`client_id`);
ALTER TABLE `order_list` ADD PRIMARY KEY (`id`), ADD KEY `inventory_id` (`inventory_id`), ADD KEY `order_id` (`order_id`);
ALTER TABLE `products` ADD PRIMARY KEY (`id`), ADD KEY `brand_id` (`brand_id`,`category_id`), ADD KEY `category_id` (`category_id`);
ALTER TABLE `sales` ADD PRIMARY KEY (`id`), ADD KEY `order_id` (`order_id`);
ALTER TABLE `system_info` ADD PRIMARY KEY (`id`);
ALTER TABLE `users` ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

ALTER TABLE `brands` MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
ALTER TABLE `cart` MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
ALTER TABLE `categories` MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
ALTER TABLE `clients` MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
ALTER TABLE `inventory` MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
ALTER TABLE `orders` MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
ALTER TABLE `order_list` MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
ALTER TABLE `products` MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
ALTER TABLE `sales` MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
ALTER TABLE `system_info` MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
ALTER TABLE `users` MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`inventory_id`) REFERENCES `inventory` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

ALTER TABLE `order_list`
  ADD CONSTRAINT `order_list_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_list_ibfk_2` FOREIGN KEY (`inventory_id`) REFERENCES `inventory` (`id`) ON DELETE CASCADE;

ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE;

ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;