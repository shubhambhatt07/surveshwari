-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 05:46 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surveshwari`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'ankur@gmail.com', 'MTIz'),
(2, 'rahul@gmail.com', 'MTIz');

-- --------------------------------------------------------

--
-- Table structure for table `banner_`
--

CREATE TABLE `banner_` (
  `id` int(11) NOT NULL,
  `banner_path` varchar(255) NOT NULL,
  `title_` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_`
--

INSERT INTO `banner_` (`id`, `banner_path`, `title_`) VALUES
(1, 'BannerFour-170519093215.png', 'Gorce One'),
(2, 'BannerOne-170519093134.png', 'Groce Two'),
(3, 'BannerThree-170519093201.png', 'Groce Three'),
(4, 'BannerTwo-170519093148.png', 'Groce Four'),
(5, 'sample_code.PNG', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `quantity` float NOT NULL DEFAULT '1',
  `price` int(100) NOT NULL,
  `added_on` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`, `price`, `added_on`) VALUES
(3, 1, 8, 4, 190, ''),
(4, 1, 7, 5, 238, ''),
(5, 1, 6, 4, 190, ''),
(6, 1, 5, 1, 48, ''),
(7, 5, 69, 25, 1250, '15-04-2020'),
(10, 5, 68, 47, 1880, '15-04-2020'),
(11, 5, 64, 3, 255, '15-04-2020'),
(12, 5, 66, 12, 960, '15-04-2020'),
(16, 15, 50, 4, 312, '16-04-2020'),
(17, 14, 69, 1, 50, '16-04-2020'),
(18, 14, 66, 3, 240, '16-04-2020');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image_` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `image_`) VALUES
(1, 'Ground Spices', 'Sorva-Bahar.jpg'),
(2, 'Blended Spices', 'Sorva-Bahar1.jpg'),
(3, 'Pickles', 'Sorva-Bahar2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `crops_`
--

CREATE TABLE `crops_` (
  `product_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(400) NOT NULL,
  `price` int(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `veg_category` varchar(100) NOT NULL,
  `quant_type` varchar(50) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  `discount` int(50) NOT NULL,
  `totl_quant` int(50) NOT NULL,
  `qty_left` int(11) NOT NULL,
  `countries` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crops_`
--

INSERT INTO `crops_` (`product_id`, `name`, `description`, `price`, `image`, `veg_category`, `quant_type`, `status`, `discount`, `totl_quant`, `qty_left`, `countries`) VALUES
(1, 'Haldi / Turmeric Powder ', '<ul>\r\n	<li>100% certified Sarveshwari Turmeric / Haldi.</li>\r\n	<li>It is made from one of the finest Turmeric sources from Tamil Nadu.</li>\r\n	<li>Prepared in neatly maintained hygienic conditions.</li>\r\n	<li>Pure quality, perfect aroma, and flavorful.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 100, 'products_image-2020-10-23-19-49-070.png', '1', 'Gram', 1, 100, 100, 0, 0),
(2, 'Mirch / Chilli Powder', '<ul>\r\n	<li>100% certified Sarveshwari Chilli / Mirch Powder and hygienic packing.</li>\r\n	<li>It is made from one of the finest chillis sources across India.</li>\r\n	<li>Hot spicy flavor, pure natural color, or no preservative.</li>\r\n	<li>Prepared in neatly maintained hygienic conditions.</li>\r\n	<li>Red Chilli / Mirch powder is used in chutneys, curries &amp; sauces. It adds sizzle, improves color, ', 100, 'products_image-2020-10-23-19-52-510.jpg', '1', 'Gram', 1, 100, 100, 0, 0),
(3, 'Dhaniya / Coriander Powder', '<ul>\r\n	<li>100% certified Sarveshwari Dhaniya / Coriander Powder and hygienic packing.</li>\r\n	<li>Made from coriander seeds procured from Rajasthan to enhance the quality and aroma.</li>\r\n	<li>No preservatives, no artificial food color, all-natural ingredients.</li>\r\n	<li>Prepared in neatly maintained hygienic conditions.</li>\r\n	<li>Reduces cholesterol, improves metabolism, excellent for hair and ', 100, 'products_image-2020-10-23-19-55-570.jpg', '1', 'Gram', 1, 100, 100, 0, 0),
(4, 'Jeera / Cumin Powder', '<ul>\r\n	<li>100% certified Sarveshwari Jeera / Cumin Powder and hygienic packing.</li>\r\n	<li>Made from cumin seeds procured from Rajasthan &amp; Gujarat to give a soothing flavor.</li>\r\n	<li>Free from chemicals and pesticides, all-natural ingredients.</li>\r\n	<li>Prepared in neatly maintained hygienic conditions.</li>\r\n	<li>It is rich in vitamins &amp; minerals that give a boost for digestion &amp; ', 100, 'products_image-2020-10-23-20-02-200.jpg', '1', 'Gram', 1, 100, 100, 0, 0),
(5, 'Amchur / Dry Mango Powder', '<ul>\r\n	<li>100% certified Sarveshwari Amchur / Dry Mango Powder and hygienic packing.</li>\r\n	<li>Perfect addition for a tangy flavor.</li>\r\n	<li>Free from chemicals and pesticides, all-natural ingredients.</li>\r\n	<li>Prepared in neatly maintained hygienic conditions.</li>\r\n	<li>Tasty and good for your health.</li>\r\n</ul>\r\n', 100, 'products_image-2020-10-23-20-06-070.jpg', '1', 'Gram', 1, 100, 100, 0, 0),
(6, 'Kali Mirch / Black Pepper Powder', '<ul>\r\n	<li>100% certified Sarveshwari Kali Mirch / Black Pepper Powder and hygienic packing.</li>\r\n	<li>Made from natural pepper of Kerala.</li>\r\n	<li>Free from chemicals and pesticides, all-natural ingredients.</li>\r\n	<li>Prepared in neatly maintained hygienic conditions.</li>\r\n</ul>\r\n', 100, 'products_image-2020-10-23-20-07-150.jpg', '1', 'Gram', 1, 100, 100, 0, 0),
(7, 'Kala Namak / Black Salt Powder', '<ul>\r\n	<li>100% certified Sarveshwari Kala Namak / Black Salt Powder and hygienic packing.</li>\r\n	<li>Made from natural ingredients across India.</li>\r\n	<li>Pure quality, perfect aroma, and flavorful.</li>\r\n	<li>Prepared in neatly maintained hygienic conditions.</li>\r\n	<li>It helps reduce excess acid in the stomach, and a rich source of the mineral.</li>\r\n</ul>\r\n', 100, 'products_image-2020-10-23-20-07-430.jpg', '1', 'Gram', 1, 100, 100, 0, 0),
(8, 'Sendha Namak / Rock Salt Powder', '<ul>\r\n	<li>100% certified Sarveshwari Sendha Namak / Rock Salt Powder and hygienic packing.</li>\r\n	<li>Made from natural ingredients across India.</li>\r\n	<li>Pure quality, perfect aroma, and flavorful.</li>\r\n	<li>Prepared in neatly maintained hygienic conditions.</li>\r\n	<li>It helps in the balance of your body&#39;s ph levels.</li>\r\n</ul>\r\n', 100, 'products_image-2020-10-23-20-08-090.jpg', '1', 'Gram', 1, 100, 100, 0, 0),
(9, 'Shorba Bahar (Best Selling)', '<ul>\r\n	<li>\r\n	<p><strong>Ingredients:</strong></p>\r\n\r\n	<p>Coriander, Garlic, Cumin, Black pepper, Red chilly, Bay leaf, Alkanet root<strong>,</strong> Stone Flower, Turmeric, Fenugreek, Jaggery, Carom seeds, Poppyseeds, Black cardamom, Mustard seeds, Dry ginger powder, etc.</p>\r\n\r\n	<p><strong>Description: </strong></p>\r\n	</li>\r\n	<li>100% certified Sarveshwari Shorba Bahar masala and hygienic packi', 100, 'products_image-2020-10-23-20-09-150.jpg', '2', 'Gram', 1, 100, 100, 0, 0),
(10, 'Bhujiya Bahar', '<ul>\r\n	<li>\r\n	<p><strong>Ingredients:</strong></p>\r\n\r\n	<p>Coriander, Garlic, Turmeric, Fenugreek, Negella, Black pepper, Green cardamom, Red chilly, Fennel, Mustard seeds, Dry mango powder, etc.</p>\r\n\r\n	<p><strong>Description: </strong></p>\r\n	</li>\r\n	<li>100% certified Sarveshwari Bhujiya Bahar masala and hygienic packing.</li>\r\n	<li>Made from natural ingredients across India.</li>\r\n	<li>Pure qual', 100, 'products_image-2020-10-23-20-10-290.jpg', '2', 'Gram', 1, 100, 100, 0, 0),
(11, 'Sabzi Masala', '<ul>\r\n	<li>\r\n	<p><strong>Ingredients:</strong></p>\r\n\r\n	<p>Turmeric, Coriander, Chili, Fennel, Cumin, Dry Ginger Powder, Garlic, etc.</p>\r\n\r\n	<p><strong>Description: </strong></p>\r\n	</li>\r\n	<li>100% certified Sarveshwari Sabzi Masala and hygienic packing.</li>\r\n	<li>Made from natural ingredients across India.</li>\r\n	<li>Pure natural color or no preservative.</li>\r\n	<li>Prepared in neatly maintained', 100, 'products_image-2020-10-23-20-11-140.jpg', '2', 'Gram', 1, 100, 100, 0, 0),
(12, 'Achar Masala', '<ul>\r\n	<li>\r\n	<p><strong>Ingredients:</strong></p>\r\n\r\n	<p>Mustard Dal, Coriander, Fenugreek, Negella, Turmeric, Chili,<strong> </strong>Fennel, Asafoetida, Salt, etc.</p>\r\n\r\n	<p><strong>Description: </strong></p>\r\n	</li>\r\n	<li>100% certified Sarveshwari Achar Masala and hygienic packing.</li>\r\n	<li>Made from natural ingredients across India.</li>\r\n	<li>Pure natural color, flavorful, or no preserva', 100, 'products_image-2020-10-23-20-12-530.jpg', '2', 'Gram', 1, 100, 100, 0, 0),
(13, 'Garam Masala', '<p><strong>Ingredients:</strong></p>\r\n\r\n<p>Black pepper, Green cardamoms, Cinnamon, Cloves, coriander seeds, chili, cassia leaves, cumin, fennel seeds, cassia, turmeric, stone flower, big cardamom, nutmeg, etc.</p>\r\n\r\n<p><strong>Description: </strong></p>\r\n\r\n<ul>\r\n	<li>100% certified Sarveshwari Garam Masala and hygienic packing.</li>\r\n	<li>Made from natural ingredients across India.</li>\r\n	<li>No', 100, 'products_image-2020-10-23-20-13-450.jpg', '2', 'Gram', 1, 100, 100, 0, 0),
(14, 'Chicken Masala', '<p><strong>Ingredients:</strong></p>\r\n\r\n<p>Coriander seeds, Red Chillies, Turmeric, Cumin, Iodised Salt, Black Pepper, Fenugreek Leaves, Mustard, Cassia, Cardamom Amomum, Cloves, Mace, Asafoetida, etc.</p>\r\n\r\n<p><strong>Description: </strong></p>\r\n\r\n<ul>\r\n	<li>100% certified Sarveshwari Chicken Masala and hygienic packing.</li>\r\n	<li>Made from natural ingredients across India.</li>\r\n	<li>Prepared ', 100, 'products_image-2020-10-23-20-14-230.jpg', '2', 'Gram', 1, 100, 100, 0, 0),
(15, 'Meat Masala', '<p><strong>Ingredients:</strong></p>\r\n\r\n<p>Caraway, Allspice, Cinnamon, Cardamom, Cinnamon seeds, Pomegranate Seeds, Clove, Nutmeg, Mace, Star arise, Stone flower, Alkanet root, Mustard seeds, Bay Leaf, etc.</p>\r\n\r\n<p><strong>Description: </strong></p>\r\n\r\n<ul>\r\n	<li>100% certified Sarveshwari Chicken Masala and hygienic packing.</li>\r\n	<li>Made from natural ingredients across India.</li>\r\n	<li>Pre', 100, 'products_image-2020-10-23-20-20-070.jpg', '2', 'Gram', 1, 100, 100, 0, 0),
(16, 'Mango or Aam', '<p><strong>Description: </strong></p>\r\n\r\n<ul>\r\n	<li>100% certified Sarveshwari Mango Pickle or aam ka achar and hygienic packing.</li>\r\n	<li>Made with the finest mangoes and high quality spices.</li>\r\n	<li>Free from artificial preservatives, handmade, and very less oil.</li>\r\n	<li>Natural ingredients and contain no artificial colors, or flavors.</li>\r\n	<li>Combines with Indian meals and make your ', 100, 'products_image-2020-10-23-20-21-140.jpg', '3', 'KG', 1, 100, 100, 0, 0),
(17, 'Lemon or Nimbu', '<p><strong>Description: </strong></p>\r\n\r\n<ul>\r\n	<li>100% certified Sarveshwari Lemon Pickle or Nimbu ka achar and hygienic packing.</li>\r\n	<li>Combination of spiciness and sourness with whole lemons stuffed with masalas.</li>\r\n	<li>Free from artificial preservatives, handmade, and very less oil.</li>\r\n	<li>Natural ingredients and contain no artificial colors, or flavors.</li>\r\n	<li>Tastes best wit', 100, 'products_image-2020-10-23-20-25-060.jpg', '3', 'KG', 1, 100, 100, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `extramenu`
--

CREATE TABLE `extramenu` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `description` varchar(400) NOT NULL,
  `quant_type` varchar(50) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extramenu`
--

INSERT INTO `extramenu` (`id`, `image`, `name`, `price`, `description`, `quant_type`, `status`) VALUES
(1, 'uploads/coupon_121218044602.jpg', 'gajar ka halwa', 60, 'fresh', 'Kg', 1),
(3, 'uploads/coupon_121218044713.jpg', 'Naan', 60, 'fresh', 'Pieces', 1),
(4, 'uploads/coupon_121218044735.jpg', 'gulab jamun', 60, 'fresh', 'Pieces', 1),
(5, 'uploads/coupon_121218044801.jpg', 'shahi paneer', 60, 'fresh', 'Kg', 1),
(6, 'uploads/coupon_121218044847.jpg', 'Fried Rice', 60, 'fresh', 'Kg', 1),
(7, 'uploads/coupon_121218044914.jpg', 'momos', 60, 'fresh', 'Pieces', 1),
(8, 'uploads/coupon_121218045023.jpg', 'gulab jamun', 60, 'fresh', 'Pieces', 1),
(9, 'uploads/coupon_121218045129.jpg', 'Naan', 20, '', 'Pieces', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`, `added_on`) VALUES
(1, 'bhumika', 'bhumika.arora08@gmail.com', '2147483647', '   daal was good.                 ', '2020-04-05 11:04:12'),
(2, 'sdfsd', 'rahulkumar14061995@gmail.com', 'sdf', 'sdfsdf', '2020-04-06 15:32:32'),
(3, 'sfds', 'rahulkumar14061995@gmail.com', 'fsfsfsfsd', 'sdfsd', '2020-04-06 15:32:54'),
(4, 'sdfa', 'rahulkumar14061995@gmail.com', 'sgsg', 'dfgdf', '2020-04-06 15:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `orders_`
--

CREATE TABLE `orders_` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `deli_add` text NOT NULL,
  `cart_details` text NOT NULL,
  `payment_mode` enum('Cash','Cash Less') NOT NULL DEFAULT 'Cash',
  `amount_status` enum('Received','Pending','Canceled') NOT NULL DEFAULT 'Pending',
  `orderd_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_status` enum('Packed','Shipped','Delivered','Return') NOT NULL,
  `order_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_`
--

INSERT INTO `orders_` (`order_id`, `user_id`, `deli_add`, `cart_details`, `payment_mode`, `amount_status`, `orderd_on`, `order_status`, `order_no`) VALUES
(4, 8, 'a:5:{s:8:\"fullname\";s:8:\".asdfasd\";s:6:\"mobile\";s:10:\"2147483647\";s:5:\"email\";s:17:\"1233dd3@gmail.com\";s:7:\"address\";s:21:\"Chandarbani, Dehradun\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:3:{i:0;s:1:\"1\";i:1;s:1:\"5\";i:2;s:1:\"3\";}s:8:\"quantity\";a:3:{i:0;d:1;i:1;d:3;i:2;d:1;}s:5:\"price\";a:3:{i:0;d:50;i:1;d:50;i:2;d:50;}s:5:\"total\";d:250;s:12:\"order_amount\";d:295;}}', 'Cash', 'Received', '2020-04-07 08:57:59', 'Delivered', ''),
(5, 9, 'a:5:{s:8:\"fullname\";s:11:\"Ankur kumar\";s:6:\"mobile\";s:10:\"2147483647\";s:5:\"email\";s:25:\"ankurranawat123@gmail.com\";s:7:\"address\";s:0:\"\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:2:{i:0;s:1:\"4\";i:1;s:1:\"2\";}s:8:\"quantity\";a:2:{i:0;d:2;i:1;d:1;}s:5:\"price\";a:2:{i:0;d:50;i:1;d:50;}s:5:\"total\";d:150;s:12:\"order_amount\";d:177;}}', 'Cash', 'Pending', '2020-04-08 06:06:07', 'Packed', ''),
(6, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:1:\"0\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:33:\"sssssssssssssssssssssssssssssssss\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:2:{i:0;s:1:\"5\";i:1;s:1:\"2\";}s:8:\"quantity\";a:2:{i:0;d:1;i:1;d:1;}s:5:\"price\";a:2:{i:0;d:50;i:1;d:50;}s:5:\"total\";d:100;s:12:\"order_amount\";d:118;}}', 'Cash', 'Pending', '2020-04-08 07:33:26', 'Packed', ''),
(7, 13, 'a:5:{s:8:\"fullname\";s:12:\"Agings Bhatt\";s:6:\"mobile\";s:10:\"6397392256\";s:5:\"email\";s:13:\"rahul@gma.com\";s:7:\"address\";s:19:\"chandabani dehradun\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:3:{i:0;s:2:\"68\";i:1;s:2:\"69\";i:2;s:2:\"65\";}s:8:\"quantity\";a:3:{i:0;s:2:\"13\";i:1;s:1:\"3\";i:2;s:1:\"4\";}s:5:\"price\";a:3:{i:0;s:3:\"520\";i:1;s:3:\"150\";i:2;s:3:\"280\";}s:5:\"total\";i:950;s:12:\"order_amount\";d:1121;}}', 'Cash', 'Pending', '2020-04-16 18:24:46', 'Packed', '1604202006'),
(8, 13, 'a:5:{s:8:\"fullname\";s:0:\"\";s:6:\"mobile\";s:10:\"6397392256\";s:5:\"email\";s:13:\"rahul@gma.com\";s:7:\"address\";s:19:\"chandabani dehradun\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:2:\"68\";}s:8:\"quantity\";a:1:{i:0;s:1:\"1\";}s:5:\"price\";a:1:{i:0;s:2:\"40\";}s:5:\"total\";i:40;s:12:\"order_amount\";d:47.2000000000000028421709430404007434844970703125;}}', 'Cash', 'Received', '2020-04-16 18:45:00', 'Delivered', '1604202006'),
(9, 13, 'a:5:{s:8:\"fullname\";s:5:\"rahul\";s:6:\"mobile\";s:10:\"6397392256\";s:5:\"email\";s:13:\"rahul@gma.com\";s:7:\"address\";s:19:\"chandabani dehradun\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:2:\"68\";}s:8:\"quantity\";a:1:{i:0;s:1:\"3\";}s:5:\"price\";a:1:{i:0;s:3:\"120\";}s:5:\"total\";i:120;s:12:\"order_amount\";d:141.599999999999994315658113919198513031005859375;}}', 'Cash', 'Pending', '2020-04-16 18:47:13', 'Packed', '1604202006'),
(10, 13, 'a:5:{s:8:\"fullname\";s:6:\"rahull\";s:6:\"mobile\";s:10:\"6397392256\";s:5:\"email\";s:13:\"rahul@gma.com\";s:7:\"address\";s:19:\"chandabani dehradun\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:2:\"68\";}s:8:\"quantity\";a:1:{i:0;s:1:\"3\";}s:5:\"price\";a:1:{i:0;s:3:\"120\";}s:5:\"total\";i:120;s:12:\"order_amount\";d:141.599999999999994315658113919198513031005859375;}}', 'Cash', 'Pending', '2020-04-16 18:48:26', 'Packed', '1604202006'),
(11, 20, 'a:5:{s:8:\"fullname\";s:0:\"\";s:6:\"mobile\";s:10:\"9890236559\";s:5:\"email\";s:24:\"piyus. mohan@hotmail.com\";s:7:\"address\";s:8:\"Dehradun\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:2:\"68\";}s:8:\"quantity\";a:1:{i:0;s:1:\"3\";}s:5:\"price\";a:1:{i:0;s:3:\"120\";}s:5:\"total\";i:120;s:12:\"order_amount\";d:141.599999999999994315658113919198513031005859375;}}', 'Cash', 'Pending', '2020-04-17 09:25:09', 'Packed', '1704202009'),
(12, 2, 'a:5:{s:8:\"fullname\";s:10:\"sdfsd sdfs\";s:6:\"mobile\";s:1:\"0\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:20:\"Chandarbani DEHRADUN\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"8\";}s:8:\"quantity\";a:1:{i:0;d:3;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:150;s:12:\"order_amount\";d:177;}}', 'Cash', 'Pending', '2020-04-17 14:32:40', 'Packed', ''),
(13, 19, 'a:5:{s:8:\"fullname\";s:0:\"\";s:6:\"mobile\";s:0:\"\";s:5:\"email\";s:0:\"\";s:7:\"address\";s:0:\"\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:10:{i:0;s:1:\"2\";i:1;s:2:\"12\";i:2;s:2:\"13\";i:3;s:2:\"49\";i:4;s:2:\"68\";i:5;s:1:\"5\";i:6;s:2:\"69\";i:7;s:2:\"66\";i:8;s:1:\"3\";i:9;s:1:\"7\";}s:8:\"quantity\";a:10:{i:0;s:1:\"1\";i:1;s:1:\"1\";i:2;s:1:\"5\";i:3;s:1:\"2\";i:4;s:1:\"2\";i:5;s:1:\"1\";i:6;s:1:\"1\";i:7;s:1:\"1\";i:8;s:1:\"2\";i:9;s:1:\"1\";}s:5:\"price\";a:10:{i:0;s:2:\"50\";i:1;s:2:\"25\";i:2;s:3:\"150\";i:3;s:3:\"164\";i:4;s:2:\"80\";i:5;s:2:\"50\";i:6;s:2:\"50\";i:7;s:2:\"80\";i:8;s:3:\"100\";i:9;s:2:\"50\";}s:5:\"total\";i:799;s:12:\"order_amount\";d:942.819999999999936335370875895023345947265625;}}', 'Cash', 'Pending', '2020-04-17 15:18:41', 'Packed', '1704202003'),
(14, 19, 'a:5:{s:8:\"fullname\";s:0:\"\";s:6:\"mobile\";s:0:\"\";s:5:\"email\";s:0:\"\";s:7:\"address\";s:0:\"\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:2:{i:0;s:2:\"69\";i:1;s:2:\"68\";}s:8:\"quantity\";a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}s:5:\"price\";a:2:{i:0;s:2:\"50\";i:1;s:2:\"40\";}s:5:\"total\";i:90;s:12:\"order_amount\";d:106.2000000000000028421709430404007434844970703125;}}', 'Cash', 'Pending', '2020-04-17 15:21:51', 'Packed', '1704202003'),
(15, 13, 'a:5:{s:8:\"fullname\";s:0:\"\";s:6:\"mobile\";s:10:\"6397392256\";s:5:\"email\";s:13:\"rahul@gma.com\";s:7:\"address\";s:19:\"chandabani dehradun\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:2:\"68\";}s:8:\"quantity\";a:1:{i:0;s:1:\"5\";}s:5:\"price\";a:1:{i:0;s:3:\"200\";}s:5:\"total\";i:200;s:12:\"order_amount\";d:236;}}', 'Cash', 'Pending', '2020-04-19 06:15:35', 'Packed', '1904202006'),
(16, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:1:\"0\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:21:\"Chandarbani, Dehradun\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-22 18:20:58', 'Packed', '22042020082058'),
(17, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:1:\"0\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:21:\"Chandarbani, Dehradun\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-22 18:21:37', 'Packed', '22042020082137'),
(18, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:1:\"0\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:21:\"Chandarbani, Dehradun\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-22 18:22:02', 'Packed', '22042020082202'),
(19, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:1:\"0\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:21:\"Chandarbani, Dehradun\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-22 18:24:40', 'Packed', '22042020082440'),
(20, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:1:\"0\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:21:\"Chandarbani, Dehradun\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-22 18:50:48', 'Packed', '22042020085048'),
(21, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:1:\"0\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:21:\"Chandarbani, Dehradun\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-22 18:51:31', 'Packed', '22042020085131'),
(22, 1, 'a:5:{s:8:\"fullname\";s:8:\"ra Kumar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:28:\"rahulkumar14061995@gmail.com\";s:7:\"address\";s:49:\"H/O RAMESH CHANDER, VILLAGE PATAL, PATTI KHATSYON\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 05:41:52', 'Packed', '24042020074152'),
(23, 1, 'a:5:{s:8:\"fullname\";s:8:\"ra Kumar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:28:\"rahulkumar14061995@gmail.com\";s:7:\"address\";s:49:\"H/O RAMESH CHANDER, VILLAGE PATAL, PATTI KHATSYON\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 05:42:44', 'Packed', '24042020074244'),
(24, 1, 'a:5:{s:8:\"fullname\";s:8:\"ra Kumar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:28:\"rahulkumar14061995@gmail.com\";s:7:\"address\";s:49:\"H/O RAMESH CHANDER, VILLAGE PATAL, PATTI KHATSYON\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 05:44:05', 'Packed', '24042020074405'),
(25, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:49:\"H/O RAMESH CHANDER, VILLAGE PATAL, PATTI KHATSYON\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 05:44:57', 'Packed', '24042020074457'),
(26, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:49:\"H/O RAMESH CHANDER, VILLAGE PATAL, PATTI KHATSYON\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 05:45:55', 'Packed', '24042020074555'),
(27, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:49:\"H/O RAMESH CHANDER, VILLAGE PATAL, PATTI KHATSYON\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash Less', 'Received', '2020-04-24 07:29:50', 'Packed', '24042020092950'),
(28, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:49:\"H/O RAMESH CHANDER, VILLAGE PATAL, PATTI KHATSYON\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 07:30:36', 'Packed', '24042020093036'),
(29, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:43:\"H/O, MAHVIR SINGH, AMAR BHARTI, CHANDARBANI\";s:13:\"paymentMethod\";s:5:\"c_o_d\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 07:54:52', 'Packed', '24042020095452'),
(30, 1, 'a:5:{s:8:\"fullname\";s:8:\"ra Kumar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:28:\"rahulkumar14061995@gmail.com\";s:7:\"address\";s:49:\"H/O RAMESH CHANDER, VILLAGE PATAL, PATTI KHATSYON\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash Less', 'Received', '2020-04-24 07:55:33', 'Packed', '24042020095533'),
(31, 1, 'a:5:{s:8:\"fullname\";s:8:\"ra Kumar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:28:\"rahulkumar14061995@gmail.com\";s:7:\"address\";s:49:\"H/O RAMESH CHANDER, VILLAGE PATAL, PATTI KHATSYON\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 07:56:21', 'Packed', '24042020095621'),
(32, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:43:\"H/O, MAHVIR SINGH, AMAR BHARTI, CHANDARBANI\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 08:14:58', 'Packed', '24042020101458'),
(33, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:43:\"H/O, MAHVIR SINGH, AMAR BHARTI, CHANDARBANI\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 08:15:39', 'Packed', '24042020101539'),
(34, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:43:\"H/O, MAHVIR SINGH, AMAR BHARTI, CHANDARBANI\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 08:15:58', 'Packed', '24042020101558'),
(35, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:43:\"H/O, MAHVIR SINGH, AMAR BHARTI, CHANDARBANI\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 08:16:31', 'Packed', '24042020101631'),
(36, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:43:\"H/O, MAHVIR SINGH, AMAR BHARTI, CHANDARBANI\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 08:16:39', 'Packed', '24042020101639'),
(37, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:43:\"H/O, MAHVIR SINGH, AMAR BHARTI, CHANDARBANI\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 08:16:57', 'Packed', '24042020101657'),
(38, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:43:\"H/O, MAHVIR SINGH, AMAR BHARTI, CHANDARBANI\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 08:17:03', 'Packed', '24042020101703'),
(39, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:43:\"H/O, MAHVIR SINGH, AMAR BHARTI, CHANDARBANI\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 08:17:26', 'Packed', '24042020101726'),
(40, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:43:\"H/O, MAHVIR SINGH, AMAR BHARTI, CHANDARBANI\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 08:17:38', 'Packed', '24042020101738'),
(41, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:43:\"H/O, MAHVIR SINGH, AMAR BHARTI, CHANDARBANI\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 08:18:29', 'Packed', '24042020101829'),
(42, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:43:\"H/O, MAHVIR SINGH, AMAR BHARTI, CHANDARBANI\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 08:18:40', 'Packed', '24042020101840'),
(43, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:43:\"H/O, MAHVIR SINGH, AMAR BHARTI, CHANDARBANI\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 08:19:11', 'Packed', '24042020101911'),
(44, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:43:\"H/O, MAHVIR SINGH, AMAR BHARTI, CHANDARBANI\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 08:19:25', 'Packed', '24042020101925'),
(45, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:43:\"H/O, MAHVIR SINGH, AMAR BHARTI, CHANDARBANI\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 08:19:34', 'Packed', '24042020101934'),
(46, 1, 'a:5:{s:8:\"fullname\";s:5:\"Sagar\";s:6:\"mobile\";s:10:\"9953470167\";s:5:\"email\";s:13:\"123@gmail.com\";s:7:\"address\";s:43:\"H/O, MAHVIR SINGH, AMAR BHARTI, CHANDARBANI\";s:13:\"paymentMethod\";s:6:\"online\";}', 'a:1:{i:0;a:5:{s:9:\"productId\";a:1:{i:0;s:1:\"3\";}s:8:\"quantity\";a:1:{i:0;d:1;}s:5:\"price\";a:1:{i:0;d:50;}s:5:\"total\";d:50;s:12:\"order_amount\";d:59;}}', 'Cash', 'Pending', '2020-04-24 08:19:54', 'Packed', '24042020101954');

-- --------------------------------------------------------

--
-- Table structure for table `order_deliv`
--

CREATE TABLE `order_deliv` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `delivery_boy_id` int(11) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_deliv`
--

INSERT INTO `order_deliv` (`id`, `order_id`, `delivery_boy_id`, `added_on`) VALUES
(3, 4, 17, '2020-04-24 17:33:15'),
(5, 8, 17, '2020-04-26 18:41:44');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_`
--

CREATE TABLE `reviews_` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `review` varchar(255) NOT NULL,
  `posted_on` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews_`
--

INSERT INTO `reviews_` (`id`, `product_id`, `review`, `posted_on`) VALUES
(1, 1, 'Test Review', '2020-02-24'),
(2, 1, 'Testttttt', '2020-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type_` enum('Customer','Delivery Boy') NOT NULL DEFAULT 'Customer',
  `email` varchar(200) NOT NULL,
  `user_image` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `reffral_from` varchar(50) NOT NULL,
  `reffral` varchar(50) NOT NULL,
  `wallet` int(100) NOT NULL,
  `shipping_address` varchar(400) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `verified` int(11) NOT NULL DEFAULT '0' COMMENT '0: not verified, 1: verified'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `type_`, `email`, `user_image`, `password`, `phone`, `address`, `reffral_from`, `reffral`, `wallet`, `shipping_address`, `gender`, `verified`) VALUES
(1, 'Sagar', 'Customer', '123@gmail.com', 'greenBanner.jpg', 'MTIz', '9953470167', ' Vishnupuram Line No 1 Mothrowala Road, Mothrowala, Dehradun 248001', '', ' c1a23c', 0, '', '', 0),
(2, 'sdfsd sdfs', 'Customer', '123@gmail.com', '', '123', '0', '', '', '', 0, '', '', 0),
(3, 'sff sdfsd', 'Delivery Boy', '1234@gmail.com', '', '123', '0', '', '', '', 0, '', '', 0),
(13, 'sfsdf', 'Customer', 'admin@gmail.com', NULL, 'MTIz', '33333', '', '', '', 0, '', '', 1),
(16, 'Rahul Kumar', 'Customer', 'rahulkumar14061995@gmail.com', 'delviery_boy_image-2020-04-24-16-54-27.jpg', '22222222222', '9953470167', 'H/O RAMESH CHANDER, VILLAGE PATAL, PATTI KHATSYON', '', '', 0, '', '', 0),
(17, 'dfs', 'Delivery Boy', 'radhul@gmail.com', 'delviery_boy_image-2020-04-24-16-55-15.jpg', 'MTIz', '9953470167', 'dddddddddddddddddddddddddd', '', '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `website_name_logo`
--

CREATE TABLE `website_name_logo` (
  `id` int(11) NOT NULL,
  `logo_` varchar(255) NOT NULL,
  `website_name` varchar(255) NOT NULL,
  `contact_no` varchar(150) NOT NULL,
  `address_` varchar(255) NOT NULL,
  `email_` varchar(150) DEFAULT NULL,
  `business_time` varchar(255) NOT NULL,
  `about_` text,
  `tag_line` varchar(255) NOT NULL,
  `currency_` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website_name_logo`
--

INSERT INTO `website_name_logo` (`id`, `logo_`, `website_name`, `contact_no`, `address_`, `email_`, `business_time`, `about_`, `tag_line`, `currency_`) VALUES
(1, 'logo.jpg', 'Green vegis', '9927670003', 'vishnupuram line no 1 mothrowala road, Mothrowala, dehradun 248001', 'greenvegiess@gmail.com ', 'Monday - Friday: 08.00am to 05.00pm, Saturday: 10.00am to 08.00pm, Sunday: Closed', 'green veggiess is a platform that gives you quality time for your family and friends because we provides you best quality vegetables and groceries on time & whenever you want.', 'Green vegis fruits and Groceries', '&#8377;');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_`
--
ALTER TABLE `banner_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crops_`
--
ALTER TABLE `crops_`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `extramenu`
--
ALTER TABLE `extramenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_`
--
ALTER TABLE `orders_`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_deliv`
--
ALTER TABLE `order_deliv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews_`
--
ALTER TABLE `reviews_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_name_logo`
--
ALTER TABLE `website_name_logo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner_`
--
ALTER TABLE `banner_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crops_`
--
ALTER TABLE `crops_`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `extramenu`
--
ALTER TABLE `extramenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders_`
--
ALTER TABLE `orders_`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `order_deliv`
--
ALTER TABLE `order_deliv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews_`
--
ALTER TABLE `reviews_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `website_name_logo`
--
ALTER TABLE `website_name_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
