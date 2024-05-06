-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD:mystore.sql
-- Generation Time: Apr 30, 2024 at 06:06 PM
=======
-- Generation Time: Feb 12, 2024 at 10:26 AM
>>>>>>> ba04eb97993bd7b489a69b29570ffe2110b369dd:mystore (4).sql
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'iPhone'),
(2, 'Xiaomi'),
(3, 'Realme'),
(4, 'Oppo'),
(5, 'Vivo');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

<<<<<<< HEAD:mystore.sql
--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES
(18, '::1', 0);

=======
>>>>>>> ba04eb97993bd7b489a69b29570ffe2110b369dd:mystore (4).sql
-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Headphones'),
(2, 'Mobile'),
(3, 'Laptop'),
(4, 'Keyboard'),
(5, 'oneplus');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
<<<<<<< HEAD:mystore.sql
(25, 1, 1479302347, 19, 5, 'pending'),
(26, 1, 416449278, 22, 1, 'pending'),
(27, 1, 503218177, 23, 1, 'pending'),
(28, 1, 10778953, 20, 1, 'pending'),
(29, 1, 1178890132, 19, 1, 'pending'),
(30, 1, 858594138, 21, 1, 'pending'),
(31, 1, 170931873, 21, 1, 'pending'),
(32, 1, 1275892024, 23, 1, 'pending'),
(33, 5, 1031092864, 21, 1, 'pending'),
(34, 5, 1411392917, 24, 1, 'pending'),
(35, 1, 893241196, 20, 1, 'pending'),
(36, 1, 85068253, 20, 1, 'pending'),
(37, 5, 283657263, 21, 1, 'pending'),
(38, 5, 1408847598, 19, 1, 'pending');
=======
(5, 8, 349604393, 23, 0, 'pending'),
(6, 8, 81336053, 21, 5, 'pending'),
(7, 8, 1373976254, 19, 2, 'pending'),
(8, 8, 707071343, 23, 0, 'pending'),
(9, 8, 2097315262, 24, 0, 'pending'),
(10, 1, 351990598, 21, 0, 'pending');
>>>>>>> ba04eb97993bd7b489a69b29570ffe2110b369dd:mystore (4).sql

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `first_release` varchar(200) NOT NULL,
  `product_color` varchar(100) NOT NULL,
  `network` varchar(200) NOT NULL,
  `sim` varchar(200) NOT NULL,
  `usb_type` varchar(200) NOT NULL,
  `product_material` varchar(200) NOT NULL,
  `product_dimension` varchar(200) NOT NULL,
  `product_weight` varchar(200) NOT NULL,
  `display_size` varchar(200) NOT NULL,
  `display_resolution` varchar(200) NOT NULL,
  `display_technology` varchar(200) NOT NULL,
  `display_features` varchar(200) NOT NULL,
  `back_camera_resolution` varchar(200) NOT NULL,
  `back_camera_features` varchar(200) NOT NULL,
  `back_video_recording` varchar(200) NOT NULL,
  `front_camera_resolution` varchar(200) NOT NULL,
  `front_camera_features` varchar(200) NOT NULL,
  `front_video_recording` varchar(200) NOT NULL,
  `battery_capacity` varchar(200) NOT NULL,
  `charging_capacity` varchar(200) NOT NULL,
  `operating_system` varchar(200) NOT NULL,
  `chipset` varchar(200) NOT NULL,
  `ram` varchar(200) NOT NULL,
  `processor` varchar(200) NOT NULL,
  `gpu` varchar(200) NOT NULL,
  `rom` varchar(200) NOT NULL,
  `micro_sd_slot` varchar(200) NOT NULL,
  `sound_features` varchar(200) NOT NULL,
  `made_in` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `first_release`, `product_color`, `network`, `sim`, `usb_type`, `product_material`, `product_dimension`, `product_weight`, `display_size`, `display_resolution`, `display_technology`, `display_features`, `back_camera_resolution`, `back_camera_features`, `back_video_recording`, `front_camera_resolution`, `front_camera_features`, `front_video_recording`, `battery_capacity`, `charging_capacity`, `operating_system`, `chipset`, `ram`, `processor`, `gpu`, `rom`, `micro_sd_slot`, `sound_features`, `made_in`, `date`, `status`) VALUES
(18, 'Xiaomi Redmi Note 5 AI ', 'Qualcomm Snapdragon 636, RAM: 3GB/4GB/6GB LPDDR4, Storage: 32GB/64GB', 'xiaomi, note 5 ai, 4g', 2, 2, 'xiaomi redmi note 5 pro 01.jpg', 'xiaomi redmi note 5 pro 02.jpg', 'xiaomi redmi note 5 pro 03.jpg', '18990', '2018, February', 'Black, Gold, Rose Gold, Blue, Flame Red', '2G, 3G, 4G', 'MicroSDXC (uses shared SIM slot)', 'B-Type', 'Front glass, aluminum body', '158.6 x 75.4 x 8.1 mm (6.24 x 2.97 x 0.32 in)', '181 g (6.38 oz)', '5.99 inches, 92.6 cm2 (~77.4% screen-to-body ratio)', '1080 x 2160 pixels, 18:9 ratio (~403 ppi density)', 'PLS LCD Touchscreen', '60Hz refresh rate', '12 MP, f/1.9, 1/2.55\", 1.4µm, dual pixel PDAF 5 MP, f/2.0, (depth)', 'Dual-LED flash, panorama, HDR', '1080p@30fps', '13 MP, f/2.0, (wide), 1/3.1\", 1.12µm', 'LED flash', '1080p@30fps', '4000', '18W wired, QC3', 'Android 8.0 (Oreo), MIUI 9', 'Qualcomm SDM636 Snapdragon 636 (14 nm)', '3/4/6', 'Octa-core (4x1.8 GHz Kryo 260 Gold & 4x1.6 GHz Kryo 260 Silver)', 'Adreno 509', '32/64', '✅ Extendable up to 1 TB', 'Single Loudspeaker', 'China', '2024-01-04 16:35:57', 'true'),
(19, 'Xiaomi 14 pro', 'Snapdragon 8 Gen 3, 12GB/ 256GB UFS 4.0, 6.73 Inch AMOLED 2K Display', 'Xiaomi 14 pro, Xiaomi, 5g, New mobile, 2023', 2, 2, 'Xiaomi 14 pro 01.jpg', 'Xiaomi 14 pro 02.jpg', 'Xiaomi 14 pro 03.jpg', '94490', 'October 26, 2023', 'Black, Silver, Titanium, Green', '2G, 3G, 4G, 5G', 'Dual Nano SIM / Dual (Nano + eSIM)', 'C-Type', 'Xiaomi Longjing Glass front, glass back, aluminum or titanium frame', '161.4 x 75.3 x 8.5 millimeters', '230 grams', '6.73 inches', 'Quad HD+ 1440 x 3200 pixels (522 ppi)', 'LTPO OLED Touchscreen', '68B colors, 120Hz, Dolby Vision, HDR10+, 3000 nits peak brightness', 'Triple 50+50+50 Megapixel', 'Dual-Pixel PDAF, Laser AF, OIS, f/1.4-f/4.0, telephoto, 3.2x optical zoom, ultrawide, Leica lens & more', '8K@24fps (HDR), 4K@up to 60fps (HDR10+, 10-bit Dolby Vision HDR, 10-bit LOG), 1080p@up to 960fps, 720p@1920fps, gyro-EIS', '32 Megapixel', 'HDR, panorama & more', '4K@30/60fps, 1080p@30/60fps, gyro-EIS', '4880 ', '120W Wired', 'Android 14 (HyperOS), 4 further upgrades (expected: Android 18)', 'Qualcomm Snapdragon 8 Gen 3 (4 nm)', '8 / 12 / 16', 'Octa core, up to 3.3 GHz', 'Adreno 750', '256 / 512', 'No', 'Loudspeaker (stereo speakers), 24-bit/192kHz audio', 'China', '2024-01-18 10:55:06', 'true'),
(20, 'Apple iPhone 15 Pro Max', ' 6.7 INCH 1290x2796 pixels · 48MP 2160p · 8GB RAM Apple A17 Pro · 4441mAh Li-Ion.', 'iphone, apple, Apple iPhone 15 Pro Max, 5g, best camera', 2, 1, 'iphone 15 pro max 01.jpg', 'iphone 15 pro max 02.jpg', 'iphone 15 pro max 03.jpg', '160000', 'September 22, 2023', 'Black Titanium, Natural Titanium, White Titanium, Blue Titanium', '2G, 3G, 4G, 5G', 'Dual SIM (Nano-SIM and eSIM)', 'C-Type', 'Corning-made Glass front & back, grade 5 titanium frame', '159.9 x 76.7 x 8.3 millimeters', '221 grams', '6.7 inches', '1290 x 2796 pixels (460 ppi)', 'LTPO Super Retina XDR OLED Touchscreen', '120Hz, HDR10, Dolby Vision, Always-On display, 2000 nits max. brightness', 'Quad 48+12+12 Megapixel + TOF 3D LiDAR scanner', 'Dual Pixel PDAF, sensor-shift OIS, ultrawide, periscope telephoto, 5x optical zoom, depth & more', '4K (2160p), Dolby Vision HDR, 10-bit HDR, stereo sound rec., Cinematic mode, ProRes, 3D (spatial) video', 'Dual 12 Megapixel + SL 3D', 'F/1.9 aperture, PDAF, HDR, OIS, 1/3.6″, depth / biometrics sensor', '4K (2160p@60fps max.), gyro-EIS, 4K@30fps Cinematic mode, HDR', '4422', '✅ Wired, 50% in 30 minutes ✅ Fast Wireless Charging (15W MagSafe, 7.5W Qi magnetic)', 'iOS 17', 'Apple A17 Pro (3 nm)', '8', 'Hexa-core, up to 3.78 GHz', 'Apple GPU (6-core graphics)', '256 / 512', 'eSIM technology', 'Loudspeaker (stereo speakers)', 'Various', '2024-03-29 09:52:36', 'true'),
(21, 'Apple iPhone XS Max', '6.5 INCH 1242x2688 pixels ·12 MP+12 MP Rear · 8GB RAM · Apple A12 Bionic', 'Apple, iPhone XS Max, iPhone, 4g, 3g', 2, 1, 'iPhone XS Max 01.jpg', 'iPhone XS Max 02.jpg', 'iPhone XS Max 03.jpg', '97990', 'September 2018', 'Space Gray, Silver, Gold', '2G, 3G, 4G', 'Nano-SIM, e-SIM', ' Lightning connector', 'Gorilla Glass front & back, stainless steel frame', '157.5 x 77.4 x 7.7 millimeters', '208 grams', '6.5 inches', '1242 x 2688 pixels (458 ppi)', 'Super Retina OLED Touchscreen', 'Dolby Vision, HDR10, 625 nits, 120Hz, true-tone, 3D Touch, wide color gamut', 'Dual 12+12 Megapixel', 'Dual Pixel PDAF, telephoto, OIS, 2x optical zoom, quad-LED flash & more', 'Ultra HD (2160p), HDR, OIS, slow-mo, cinematic video stabilization', 'Dual 7 Megapixel + SL 3D', 'F/2.2, HDR, depth / biometrics sensor', 'Full HD (1080p), gyro-EIS', '3174', '✅ 15W', 'iOS 12, upgradable to iOS 13.4', 'Apple A12 Bionic (7 nm)', '4', 'Hexa-core, up to 2.5 GHz', 'Apple GPU (4-core graphics)', '64 / 256 / 512', 'NO', 'Loudspeaker (stereo speakers)', 'Various', '2024-03-29 09:51:58', 'true'),
(22, 'Apple iPhone 11 Pro Max', '6.5INCH , 1242x2688 pixels ; RAM · 4GB ; ROM · 64GB ; Processor · Apple A13', 'Apple, iPhone, iPhone 11 Pro Max, 4g, 3g, 11 pro max', 2, 1, 'iPhone 11 Pro Max 02.jpg', 'iPhone 11 Pro Max 01.jpg', 'iPhone 11 Pro Max03.jpg', '129999 ', 'September 2019', 'Space Gray, Silver, Gold, Midnight Green', '2G, 3G, 4G', 'Nano / Electronic SIM', 'Lightning, USB 2.0', 'Gorilla Glass front & back, stainless steel frame', '158 x 77.8 x 8.1 millimeters', '226 grams', '6.5 inches', 'Quad HD+ 1242 x 2688 pixels (458 ppi)', 'Super Retina XDR OLED Touchscreen', 'Dolby Vision, HDR10, 800 nits, 120Hz, true-tone, wide color gamut', 'Triple 12+12+12 Megapixel', 'Dual Pixel PDAF, OIS, quad-LED flash, 2x optical zoom, ultrawide, telephoto & more', 'Ultra HD (2160p), HDR, stereo sound rec.', 'Dual 12 Megapixel + SL 3D', 'F/2.2, HDR, 23mm (wide), depth / biometrics sensor', 'Ultra HD (2160p), gyro-EIS', '3969', '✅ 18W', 'iOS 13, upgradable to iOS 13.4', 'Apple A13 Bionic (7 nm+)', '4', 'Hexa-core, up to 2.65 GHz', 'Apple GPU (4-core graphics)', '64 / 256 / 512', 'NO', 'Loudspeaker (stereo speakers)', 'Various', '2024-03-29 09:51:51', 'true'),
(23, 'Realme GT5 Pro', ' 6.78 INCH LTPO AMOLED, Snapdragon 8 Gen 3, 12 GB RAM, 1B colors, 144Hz, HDR10+', 'Realme GT5 Pro, realme, GT5 Pro, 5g', 2, 3, 'Realme GT5 Pro 01.jpg', 'Realme GT5 Pro 02.jpg', 'Realme GT5 Pro 03.jpg', '52500', 'December 14, 2023', 'Red Rock, Bright Moon, Starry Night', '2G, 3G, 4G, 5G', 'Dual Nano SIM', 'C- Type', 'Glass front, glass or silicone polymer (eco leather) back, aluminum frame', '161.7 x 75.1 x 9.2 millimeters', '218 / 224 grams (depending on color/model)', '6.78 inches', '1264 x 2780 pixels (450 ppi)', 'LTPO AMOLED Touchscreen', '1B colors, 144Hz, HDR10+, Dolby Vision, 4500 nits peak brightness', 'Triple 50+50+8 Megapixels', 'Dual Pixel PDAF, OIS, periscope telephoto, 2.7x optical zoom, ultrawide & more', '8K@24fps, 4K@30/60fps, 1080p@30/60fps, Dolby Vision', '32 Megapixels', 'F/2.5 aperture, 1/2.74″, HDR, panorama & more', '4K@30fps, 1080p@30fps, gyro-EIS', 'Lithium-polymer 5400 mAh (non-removable)', '✅ 100W', 'Android 14 (Realme UI 5.0)', 'Qualcomm Snapdragon 8 Gen 3 (4 nm)', '12 / 16', 'Octa core, up to 3.3 GHz', 'Adreno 750', '256 / 512 GB', 'NO', 'Loudspeaker (stereo speakers), 24-bit/192kHz audio, Hi-Res, Dolby Atmos', 'China', '2024-03-29 09:51:44', 'true'),
(24, 'Oppo Find X7 Ultra', 'Snapdragon 8 Gen 3 · 12 GB RAM | 256 GB ROM · 50 MP+50 MP+50 MP+50 MP Rear', 'oppo, 5g, 4g, best camera, Oppo Find X7 Ultra', 2, 4, 'Oppo Find X7 Ultra 01.png', 'Oppo Find X7 Ultra 02.png', 'Oppo Find X7 Ultra 03.jpg', '101900', 'January 12, 2024', 'Black, Dark Blue, Light Brown', '2G, 3G, 4G, 5G', 'Dual Nano SIM', 'C- Type', 'Gorilla Glass Victus 2 front, eco leather back, aluminum frame', '164.3 x 76.2 x 9.5 millimeters', '221 grams', '6.82 inches', 'Quad HD+ 1440 x 3168 pixels (510 ppi)', 'LTPO AMOLED Touchscreen', '1B colors, 120Hz refresh rate, Dolby Vision, HDR10+, 4500 nits peak brightness', 'Quad 50+50+50+50 Megapixels', 'Laser AF, Hasselblad, 65/135mm periscope telephoto, up to 6x optical zoom, ultrawide & more', '4K@30/60fps, 1080p@up to240fps; HDR, 10‑bit video, Dolby Vision', '32 Megapixels', 'PDAF, f/2.4, 1/2.74″, 0.8µm, HDR & more', '4K@30/60fps, 1080p@30fps, gyro-EIS', '5000', '✅ 100W', 'Android 14 (ColorOS 14)', 'Qualcomm Snapdragon 8 Gen 3 (4 nm)', '12/16', 'Octa core, up to 3.3 GHz', 'Adreno 750', '256 / 512', 'NO', 'Loudspeaker (dual stereo speakers)', 'China', '2024-01-18 10:54:54', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`) VALUES
<<<<<<< HEAD:mystore.sql
(30, 1, 101900, 334168897, 1, '2024-02-12 13:53:38', 'pending'),
(31, 1, 101900, 2089354890, 1, '2024-02-13 09:46:02', 'Complete'),
(32, 1, 52500, 1672238672, 1, '2024-02-13 07:07:15', 'Complete'),
(33, 1, 101900, 2856829, 1, '2024-02-13 07:12:59', 'Complete'),
(34, 1, 472450, 1479302347, 1, '2024-02-13 09:36:38', 'Complete'),
(35, 1, 129999, 416449278, 1, '2024-02-13 09:33:05', 'Complete'),
(36, 1, 52500, 503218177, 1, '2024-02-13 09:27:31', 'pending'),
(37, 1, 160000, 10778953, 1, '2024-02-13 09:28:08', 'pending'),
(38, 1, 94490, 1178890132, 1, '2024-02-13 09:46:08', 'Complete'),
(39, 1, 97990, 858594138, 1, '2024-02-13 09:30:34', 'pending'),
(40, 1, 257990, 170931873, 2, '2024-02-13 09:31:31', 'pending'),
(41, 1, 146990, 1275892024, 2, '2024-02-13 09:32:21', 'pending'),
(42, 5, 97990, 1031092864, 1, '2024-03-28 14:48:18', 'Complete'),
(43, 5, 101900, 1411392917, 1, '2024-03-28 14:47:23', 'pending'),
(44, 1, 254490, 893241196, 2, '2024-03-28 14:47:49', 'pending'),
(45, 1, 160000, 85068253, 1, '2024-03-29 00:09:48', 'pending'),
(46, 5, 97990, 283657263, 1, '2024-04-30 11:32:28', 'pending'),
(47, 5, 94490, 1408847598, 1, '2024-04-30 11:34:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_payments`
--

INSERT INTO `user_payments` (`payment_id`, `order_id`, `invoice_number`, `amount`, `payment_mode`, `date`) VALUES
(10, 32, 1672238672, 52500, 'Nagod', '2024-02-13 07:07:15'),
(11, 33, 2856829, 101900, 'Internet Banking', '2024-02-13 07:12:59'),
(12, 35, 416449278, 129999, 'Bank Payment', '2024-02-13 09:33:05'),
(13, 34, 1479302347, 472450, 'Bank Payment', '2024-02-13 09:36:38'),
(14, 31, 2089354890, 101900, 'Nagod', '2024-02-13 09:46:02'),
(15, 38, 1178890132, 94490, 'Nagod', '2024-02-13 09:46:08'),
(16, 42, 1031092864, 97990, 'Cash on Delivery', '2024-03-28 14:48:18');
=======
(15, 1, 0, 351990598, 1, '2024-02-12 09:24:23', 'pending');
>>>>>>> ba04eb97993bd7b489a69b29570ffe2110b369dd:mystore (4).sql

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_images` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_images`, `user_ip`, `user_address`, `user_mobile`) VALUES
<<<<<<< HEAD:mystore.sql
(1, 'shuvo', 'shuvo@gmail.com', '$2y$10$Ztq444ZGlMvfdLPIaqGGdO7fLnWRZbUdlKZZ01Prm4Ff9SuPLrp0m', '149071.png', '::1', 'dhaka', '01303199653'),
(3, 'shuvo22', 'shuv@gmail.com', '$2y$10$3zsSM3pe83opNRJCMG81Cui3YqJXtRX0DFa5iI4klI7pNZkwBBRgm', 'bkash.jpg', '::1', 'fqerfef', '21343434'),
(4, 'test', 'test@gmail.com', '$2y$10$uaJMtIMDsI5WBtvNU/PPGujeKn8IKY6GpPpKcuoj7yNWzGeI7WUsq', 'Screenshot 2024-01-08 230926.png', '::1', 'Dhontola', '01303199653'),
(5, 'rrr', 'rrr@gmail.com', '$2y$10$ZE084XwqeUJiGxr0lkJHjOG/grcqCPNPgz0akO4IdUvyR0W.4PuiC', 'InShot_20230723_233643127.jpg', '127.0.0.1', '123', '12343243252');
=======
(1, 'shuvo', 'shuvo@gmail.com', '$2y$10$Ztq444ZGlMvfdLPIaqGGdO7fLnWRZbUdlKZZ01Prm4Ff9SuPLrp0m', 'download.png', '::1', 'dhaka', '01303199653');
>>>>>>> ba04eb97993bd7b489a69b29570ffe2110b369dd:mystore (4).sql

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
<<<<<<< HEAD:mystore.sql
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`payment_id`);

--
=======
>>>>>>> ba04eb97993bd7b489a69b29570ffe2110b369dd:mystore (4).sql
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
<<<<<<< HEAD:mystore.sql
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
=======
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
>>>>>>> ba04eb97993bd7b489a69b29570ffe2110b369dd:mystore (4).sql

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
<<<<<<< HEAD:mystore.sql
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
=======
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
>>>>>>> ba04eb97993bd7b489a69b29570ffe2110b369dd:mystore (4).sql

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
<<<<<<< HEAD:mystore.sql
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
=======
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
>>>>>>> ba04eb97993bd7b489a69b29570ffe2110b369dd:mystore (4).sql

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
<<<<<<< HEAD:mystore.sql
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
=======
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> ba04eb97993bd7b489a69b29570ffe2110b369dd:mystore (4).sql
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
