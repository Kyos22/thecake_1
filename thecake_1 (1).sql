-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 04:30 PM
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
-- Database: `thecake_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_account` int(11) NOT NULL,
  `username` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `username`, `password`, `email`, `contact`, `role`) VALUES
(2, 'aeve', '123', 'abc@gmail.com', 'eave', 'user'),
(3, 'vaerv', '123', 'def@gmail.com', 'reare', 'admin'),
(4, 'cong', '123', 'nguyenthanhcongvt123@gmail.com', 'nullable', 'nullable'),
(5, 'cong', 'ểvre', 'nguyenthanhcongvt123@gmail.com', 'nullable', 'nullable'),
(6, 'heo', '123', 'nguyenthanhcongvt123@gmail.com', 'nullable', 'nullable'),
(7, 'cong', '$2y$10$N/dMdoN2lIcTBWjjW/EQAOJZUmHI2wiOKuVMtPxOghRMcfz5rktvy', 'nguyenthanhcongvt123@gmail.com', 'nullable', 'nullable'),
(8, 'thỏ', '$2y$10$FffgUJs6EKJC04JaSRLSRu7Josva8EeFdqC9wopCjd8qeLrvX/dNm', 'nguyenthanhcongvt123@gmail.com', 'nullable', 'user'),
(9, 'cong', '$2y$10$9o1VGP8a6vU3hilq1PSr/ef4SiD0nSoNhVKkIvmNCRFY1Cr0DFd5a', 'nguyenthanhcongvt123@gmail.com', 'nullable', 'user'),
(10, 'cong', '$2y$10$A0hSkm4nWVrC43iud5kNOOWnaxqgvqJmSN5rcBQh5tNxtJWyME0gi', 'nguyenthanhcongvt123@gmail.com', 'nullable', 'user'),
(11, 'cong', '$2y$10$5qGTBSrZCY9EA.sWJcESJeoPmCCe7bASJXsJjfhfAMtuXVryaJdWO', 'nguyenthanhcongvt123@gmail.com', 'nullable', 'user'),
(12, 'cong', '$2y$10$5vP05RpGQM6xPh5mfu4VZuu6Pg3zyAwXSXjN4udO0GgQpiqajWE/m', 'heoheo@gmail.com', 'nullable', 'user'),
(13, 'bear', '$2y$10$mODf0f2dbWk3vpg0yG9RTOFDry.um5xzKDiH67JrwYz2EfxPiCBDu', 'meomeo@gmail.com', 'nullable', 'user'),
(14, 'cong', '$2y$10$u5Lt3.v.IeXHRTKFLT5UG.5rQWxwqYr8mm0yeQ6iH0Kp6T3yXyj3u', 'bobo@gmail.com', 'nullable', 'user'),
(15, 'cong', '123', 'a@gmail.com', 'nullable', 'user'),
(16, 'a', '123', 'a@gmail.com', 'nullable', 'user'),
(17, 'aa', '$2y$10$EHdKYNU/8RNT0MZFi3UhWuBz1BlutY8gAwppX.bGeiaoPD71kX4iq', 'b@gmail.com', 'nullable', 'user'),
(18, 'cong', '202cb962ac59075b964b07152d234b70', 'c@gmail.com', 'nullable', 'user'),
(19, 'cn', '$2y$10$MVe9kwrE0c1ZpjBwKnRZD.43nL38dHg4cFGDWcWJffX8Gv1qd98JC', 'd@gmail.com', 'nullable', 'user'),
(20, 'hahaa', '$2y$10$R/nM3IDF7N9znBZbonUv2.6V.Djj3ojJDHTqXY3/P8eio2kNuqIzK', 'e@gmail.com', 'nullable', 'user'),
(21, 'Anh Khoa', '$2y$10$lrJF1WyvqRuAmS.6J6YsYOsycMfKWFjGm56pjH2A0cTAiRq5A8asK', 'khoa@gmail.com', 'nullable', 'user'),
(22, 'Anh Khoa', '$2y$10$Wvraqin365mXGN1aVQOAAumZD8D.7eAWDNEm4.fbPqvgMPjrflpaG', 'aaa', 'nullable', 'user'),
(23, 'cong', '$2y$10$J.6vpMEfdg0yHo/5b/DejeEUzP7zNzdJxqMykKODVhgWOKGWoOwVi', 'qqq', 'nullable', 'user'),
(24, 'công', '$2y$10$9wuoChCeVy8Qkpl8sQlHLOxFcEctQ9EKL7eiRW6AuTwMGvfmzaay.', 'admin@gmail.com', 'nullable', 'admin'),
(25, 'cong', '$2y$10$fRmiam2Lfe12vNd/I81T/eWEVBCvWDBB5JgSEzPW2B3B5Lsj/eBZ6', 'qqqq', 'nullable', 'user'),
(26, 'KHOA K', '$2y$10$zQd1jPuWm/n4.esSeNUSFu1BcOb.pc/uXcup8FwwYvHtQJ4qJPVxC', 'adminkhoa@gmail.com', 'nullable', 'admin'),
(27, 'cong', '$2y$10$EB/cywXdSDifBDzCiBTVHu.jtgcQtMaPPjM06vN9ucI8iS7mMDo1i', 'nguyenthanhcongvt123@gmail.com', 'nullable', 'user'),
(28, 'wwww', '$2y$10$cNUDrkDw15qWUAnUhyE/YOH7NI9aTlNIybA28R/4vlpRSIIMXXEuC', 'wwww', 'nullable', 'user'),
(29, 'cong', '$2y$10$DGXtRujUIiPHi7IgimJfJ.5Aaav8YvLW/Cl17lGfziPFYt1EKt.Si', 'nguyenthanhcongvt123@gmail.com', 'nullable', 'user'),
(30, 'lehung', '$2y$10$BeNGaNlsJRBZ24lrCF1azetmL/1TWtJBPRqPouCqmPkDNth1i2tMS', 'lehung@gmail.com', 'nullable', 'user'),
(31, 'Anh Khoa', '$2y$10$.Cl1QxtwOta5ixFnhJ3JBOHxMHEagvfXe.wLc6mfn059jWtyJNG3m', 'a123@gmail.com', 'nullable', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `created` date NOT NULL,
  `article` varchar(2000) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `created`, `article`, `content`, `photo`, `type`) VALUES
(1, '2022-10-25', 'Exploring the World of French Pastries: A Guide to Sweet Delights', 'When it comes to culinary delights, French pastries hold a special place in the hearts of food enthusiasts worldwide. From delicate croissants to decadent éclairs, French pastries are known for their exquisite taste, artistic presentation, and rich cultural heritage. In this guide, we will take you on a journey through the world of French pastries, uncovering the secrets behind these sweet delights.\r\n\r\nCroissant: The Iconic French Pastry\r\nLet\'s start our exploration with the most iconic French pastry of all—the croissant. With its flaky layers, buttery taste, and golden exterior, the croissant has become a symbol of French baking mastery. Learn about the history of the croissant and how to achieve that perfect balance of crispiness and tenderness when making your own.\r\n\r\nPain au Chocolat: A Chocolate Lover\'s Dream\r\nIndulge in the heavenly combination of buttery croissant dough and rich, melted chocolate with the pain au chocolat. Discover the techniques for shaping and filling these delightful pastries, and savor the aroma and taste of freshly baked pain au chocolat.\r\n\r\nMacarons: A Delicate French Delight\r\nNo exploration of French pastries would be complete without mentioning macarons. These colorful, almond meringue-based treats are famous for their delicate shells and creamy fillings. Uncover the secrets behind achieving the perfect texture, flavor combinations, and beautifully smooth macaron shells.\r\n\r\nÉclairs: Cream-Filled Bliss\r\nPrepare to be amazed by the elegant éclair, a pastry filled with luscious cream and topped with glossy chocolate ganache. Learn the art of piping the choux pastry dough and explore the endless possibilities for filling flavors, from classic vanilla to adventurous combinations like salted caramel or coffee.\r\n\r\nTarte Tatin: A Classic French Dessert\r\nTake a detour from flaky pastries to discover the beauty of Tarte Tatin—a caramelized upside-down apple tart. Delve into the history of this rustic yet refined dessert and master the art of caramelizing apples to perfection.\r\n\r\nMille-Feuille: Layers of Delight\r\nExperience the delicate layers of puff pastry, pastry cream, and luscious toppings in the Mille-Feuille. Uncover the techniques for creating a perfectly crisp and light pastry, and experiment with different flavors and fillings to create your own unique variations.\r\n\r\nProfiteroles: Bite-Sized Puffs of Joy\r\nDon\'t miss the delightful world of profiteroles—small choux pastry puffs filled with cream and often served with a drizzle of warm chocolate sauce. Explore different fillings, from classic whipped cream to decadent ice cream, and elevate your dessert game with these dainty treats.\r\n\r\nAs you embark on your journey through the world of French pastries, remember to embrace the artistry, precision, and attention to detail that make these treats so special. Whether you try your hand at making them yourself or indulge in the offerings of a local patisserie, French pastries are sure to transport your taste buds to a realm of sweet delights. Bon appétit!', 'crepe_blueberry1.jpg', 'article'),
(2, '2023-11-25', 'Indulge Your Sweet Tooth: Irresistible Dessert Recipes to Tryy', 'Are you ready to embark on a delightful journey of delectable desserts that will satisfy your sweet tooth? Look no further! In this article, we present a collection of irresistible dessert recipes that will tantalize your taste buds and leave you craving for more. Get ready to indulge in the world of sweet delights!\r\n\r\nDecadent Chocolate Lava Cake\r\nSink your fork into a warm, gooey chocolate lava cake with a molten center that oozes out with every bite. This classic dessert is a chocoholic\'s dream come true. Follow our step-by-step recipe to achieve the perfect balance of a delicate cake exterior and a rich, chocolatey interior.\r\n\r\nCreamy Vanilla Panna Cotta\r\nExperience the smooth and velvety texture of a vanilla panna cotta. This Italian dessert is as elegant as it is delicious. Infused with a hint of vanilla, it pairs perfectly with a vibrant fruit coulis or a drizzle of caramel sauce. Impress your guests with this simple yet sophisticated dessert.\r\n\r\nHomemade Fruit Tart\r\nBring the freshness of seasonal fruits together with a buttery, flaky crust in a homemade fruit tart. The combination of vibrant fruits atop a luscious pastry cream creates a stunning dessert that is both visually appealing and bursting with natural flavors. Experiment with different fruits to create your own unique tart masterpiece.\r\n\r\nClassic Tiramisu\r\nTransport yourself to the streets of Italy with a classic tiramisu. Layers of espresso-soaked ladyfingers and creamy mascarpone cheese come together to create a heavenly dessert. Dusted with cocoa powder, each bite is a delicate balance of flavors that will leave you longing for more.\r\n\r\nRefreshing Lemon Bars\r\nWhen life gives you lemons, make lemon bars! These tangy and refreshing treats feature a buttery shortbread crust topped with a zesty lemon filling. The combination of sweet and tart flavors creates a delightful contrast that will brighten up any occasion.\r\n\r\nCrunchy Caramelized Crème Brûlée\r\nCrack into the crispy caramelized sugar layer to reveal the smooth and creamy custard beneath. Crème brûlée is a timeless dessert that never fails to impress. Master the technique of creating that perfect caramelized topping and savor the luxurious flavors of this classic French dessert.\r\n\r\nFluffy Strawberry Shortcake\r\nCelebrate the sweetness of summer with a fluffy strawberry shortcake. Layers of tender sponge cake, fresh strawberries, and whipped cream create a dessert that is light, fruity, and absolutely delightful. It\'s the perfect dessert for a sunny afternoon or a special occasion.\r\n\r\nThese irresistible dessert recipes are just the beginning of your sweet culinary adventure. So put on your apron, gather your ingredients, and let your creativity soar as you explore the world of mouthwatering desserts. Get ready to indulge in these heavenly treats and create memorable moments with every bite. Enjoy!', 'crepe_egg3.jpg', 'article'),
(4, '2023-07-13', 'Cakes are delicious treats enjoyed by people all around the world. They come in various flavors, shapes, and sizes, making them a versatile dessert for any occasion.', '<p>Cakes are delicious treats enjoyed by people all around the world. They come in various flavors, shapes, and sizes, making them a versatile dessert for any occasion.</p>', 'Boston Cream Doughnuts - Baker by Nature.jpg', 'article');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `datecreation` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_customer`, `datecreation`) VALUES
(2, 25, '2023-07-12 17:06:50'),
(3, 31, '2023-07-13 02:35:28');

-- --------------------------------------------------------

--
-- Table structure for table `cart_product`
--

CREATE TABLE `cart_product` (
  `id_cart` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_product`
--

INSERT INTO `cart_product` (`id_cart`, `id_product`, `quantity`) VALUES
(3, 28, 9),
(3, 31, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `avatar_category` varchar(250) NOT NULL,
  `type` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `avatar_category`, `type`) VALUES
(4, 'Cookie', 'cookie-cheese3-removebg-preview__2_-removebg-preview.png', 'cake'),
(5, 'Macaron', 'maca-matcha3-removebg-preview.png', 'cake'),
(6, 'Crepe', 'crepe_blueberry1-removebg-preview.png', 'cake'),
(7, 'Memory Cake', 'event_chocolate2-removebg-preview.png', 'event\r\n'),
(8, 'Cream Cake', 'cream-choco2-removebg-preview.png', 'cake'),
(9, 'Wedding Cake', 'choco-white1-removebg-preview.png', 'event'),
(10, 'Donut', 'Giant_Donut_Cake__Homer_Simpson_Sprinkles_Donut_-The_Little_Epicurean__2_-removebg-preview.png', 'cake'),
(11, 'Cup Cake', 'cupcake_oreo4-removebg-preview.png', 'cake'),
(12, 'Bread', 'banhsungbo3-removebg-preview.png', 'cake'),
(13, 'Celebrate Cake', 'event4-removebg-preview.png', 'event');

-- --------------------------------------------------------

--
-- Table structure for table `detailsorder`
--

CREATE TABLE `detailsorder` (
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detailsorder`
--

INSERT INTO `detailsorder` (`id_order`, `id_product`, `quantity`, `price`) VALUES
(4, 27, 1, 75000),
(8, 27, 1, 75000),
(10, 27, 3, 75000),
(11, 28, 1, 95000),
(12, 27, 1, 75000),
(13, 1, 4, 10000),
(16, 1, 3, 10000),
(16, 2, 1, 12000),
(17, 27, 1, 75000),
(18, 27, 1, 75000),
(19, 20, 1, 184636),
(20, 27, 2, 75000),
(21, 27, 6, 75000);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `datecreation` date NOT NULL,
  `status` varchar(250) NOT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_customer`, `datecreation`, `status`, `total`) VALUES
(1, 25, '2023-07-12', 'In process', NULL),
(2, 25, '2023-07-12', 'In process', NULL),
(3, 25, '2023-07-12', 'In process', NULL),
(4, 25, '2023-07-12', 'In process', 75000),
(5, 25, '2023-07-12', 'In process', NULL),
(6, 25, '2023-07-12', 'In process', NULL),
(7, 25, '2023-07-12', 'In process', NULL),
(8, 25, '2023-07-12', 'In process', 75000),
(9, 25, '2023-07-12', 'In process', NULL),
(10, 25, '2023-07-12', 'In process', 225000),
(11, 25, '2023-07-12', 'In process', 95000),
(12, 25, '2023-07-12', 'In process', 75000),
(13, 25, '2023-07-12', 'In process', 40000),
(14, 25, '2023-07-13', 'In process', NULL),
(15, 25, '2023-07-13', 'In process', NULL),
(16, 25, '2023-07-13', 'In process', 42000),
(17, 25, '2023-07-13', 'In process', 75000),
(18, 25, '2023-07-13', 'In process', 75000),
(19, 25, '2023-07-13', 'In process', 184636),
(20, 25, '2023-07-13', 'In process', 150000),
(21, 31, '2023-07-13', 'In process', 450000);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id_page` int(11) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id_photo` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `name_photo` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id_photo`, `id_product`, `name_photo`, `status`) VALUES
(9, 1, 'crepe_blueberry2.jpg', 1),
(10, 1, 'crepe_blueberry3.jpg', 0),
(11, 1, 'crepe_blueberry4.jpg', 0),
(12, 1, 'crepe_blueberry5.jpg', 0),
(13, 2, 'crepe_chocolate1.jpg', 0),
(14, 2, 'crepe_chocolate2.jpg', 0),
(15, 2, 'crepe_chocolate3.jpg', 0),
(16, 2, 'crepe_chocolate4.jpg', 0),
(17, 3, 'crepe_egg1.jpg', 0),
(18, 3, 'crepe_egg2.jpg', 0),
(19, 3, 'crepe_egg3.jpg', 0),
(20, 3, 'crepe_egg4.jpg', 0),
(21, 3, 'crepe_egg5.jpg', 0),
(22, 3, 'crepe_egg6.jpg', 0),
(23, 4, 'crepe_matcha1.jpg', 0),
(24, 4, 'crepe_matcha2.jpg', 0),
(25, 4, 'crepe_matcha3.jpg', 0),
(26, 4, 'crepe_matcha4.jpg', 0),
(27, 5, 'crepe_strawberry1.jpg', 0),
(28, 5, 'crepe_strawberry2.jpg', 0),
(30, 5, 'crepe_strawberry5.jpg', 0),
(31, 5, 'crepe_strawberry3.jpg', 0),
(32, 5, 'crepe_strawberry4.jpg', 0),
(34, 6, 'event_chocolate1.jpg', 0),
(35, 6, 'event_chocolate2.jpg', 0),
(36, 6, 'event_chocolate3.jpg', 0),
(37, 7, 'event1.jpg', 0),
(38, 7, 'event2.jpg', 0),
(39, 7, 'event3.jpg', 0),
(40, 7, 'event4.jpg', 0),
(41, 7, 'event5.jpg', 0),
(42, 7, 'event6.jpg', 0),
(43, 7, 'event7.jpg', 0),
(44, 8, 'bir-blue1.jpg', 0),
(45, 8, 'bir-blue2.jpg', 0),
(46, 8, 'bir-blue3.jpg', 0),
(47, 8, 'bir-blue4.jpg', 0),
(48, 8, 'bir-blue5.jpg', 0),
(49, 9, 'cream1.jpg', 0),
(50, 9, 'cream2.jpg', 0),
(51, 9, 'cream3.jpg', 0),
(52, 10, 'choco-white1.jpg', 0),
(53, 10, 'choco-white2.jpg', 0),
(54, 10, 'choco-white3.jpg', 0),
(55, 11, 'banhmingot1.jpg', 0),
(56, 11, 'banhmingot2.jpg', 0),
(57, 11, 'banhmingot3.jpg', 0),
(58, 11, 'banhmingot4.jpg', 0),
(59, 12, 'banhsungbo1.jpg', 0),
(60, 12, 'banhsungbo2.jpg', 0),
(61, 12, 'banhsungbo3.jpg', 0),
(62, 13, 'loaf1.jpg', 0),
(63, 13, 'loaf2.jpg', 0),
(64, 13, 'loaf3.jpg', 0),
(65, 14, 'scone1.jpg', 0),
(66, 14, 'scone2.jpg', 0),
(67, 14, 'scone3.jpg', 0),
(69, 15, 'cupcake_cam1.jpg', 0),
(70, 15, 'cupcake_cam2.jpg', 0),
(71, 15, 'cupcake_cam3.jpg', 0),
(72, 15, 'cupcake_cam4.jpg', 0),
(73, 15, 'cupcake_cam5.jpg', 0),
(74, 16, 'cupcake_chuoi1.jpg', 0),
(75, 16, 'cupcake_chuoi2.jpg', 0),
(76, 16, 'cupcake_chuoi3.jpg', 0),
(77, 17, 'cupcake_oreo1.jpg', 0),
(78, 17, 'cupcake_oreo2.jpg', 0),
(79, 17, 'cupcake_oreo3.jpg', 0),
(80, 17, 'cupcake_oreo4.jpg', 0),
(81, 18, 'cupcake_nho1.jpg', 0),
(82, 18, 'cupcake_nho2.jpg', 0),
(83, 18, 'cupcake_nho3.jpg', 0),
(84, 19, 'cupcake_velvet1.jpg', 0),
(85, 19, 'cupcake_velvet2.jpg', 0),
(86, 19, 'cupcake_velvet3.jpg', 0),
(87, 19, 'cupcake_velvet4.jpg', 0),
(88, 20, 'maca-oreo1.jpg', 0),
(89, 20, 'maca-oreo2.jpg', 0),
(90, 20, 'maca-oreo3.jpg', 1),
(91, 20, 'maca-oreo4.jpg', 0),
(92, 21, 'maca-vani1.jpg', 0),
(93, 21, 'maca-vani2.jpg', 0),
(94, 21, 'maca-vani3.jpg', 0),
(95, 21, 'maca-vani4.jpg', 0),
(96, 22, 'maca-straw1.jpg', 0),
(97, 22, 'maca-straw2.jpg', 0),
(98, 22, 'maca-straw3.jpg', 0),
(99, 25, 'maca-matcha1.jpg', 0),
(100, 25, 'maca-matcha2.jpg', 0),
(101, 25, 'maca-matcha3.jpg', 0),
(102, 23, 'maca-choco1.jpg', 0),
(103, 23, 'maca-choco2.jpg', 0),
(104, 23, 'maca-choco3.jpg', 0),
(105, 24, 'maca-cf1.jpg', 0),
(106, 24, 'maca-cf2.jpg', 0),
(107, 24, 'maca-cf3.jpg', 0),
(108, 26, 'maca-carot1.jpg', 0),
(109, 26, 'maca-carot2.jpg', 0),
(110, 26, 'maca-carot3.jpg', 0),
(111, 26, 'maca-carot4.jpg', 0),
(112, 27, 'cookie-mix1.jpg', 1),
(113, 27, 'cookie-mix2.jpg', 0),
(114, 27, 'cookie-mix3.jpg', 0),
(115, 27, 'cookie-mix4.jpg', 0),
(116, 28, 'cookie-cheese1.jpg', 0),
(117, 28, 'cookie-cheese2.jpg', 0),
(118, 28, 'cookie-cheese3.jpg', 0),
(119, 29, 'cookie-dog1.jpg', 0),
(120, 29, 'cookie-dog2.jpg', 0),
(121, 29, 'cookie-dog3.jpg', 0),
(122, 30, 'cookie-red1.jpg', 0),
(123, 30, 'cookie-red2.jpg', 0),
(124, 30, 'cookie-red3.jpg', 0),
(125, 31, 'cookie-twinkle1.jpg', 0),
(126, 31, 'cookie-twinkle2.jpg', 0),
(127, 31, 'cookie-twinkle3.jpg', 0),
(128, 32, 'cookie-choco1.jpg', 0),
(129, 32, 'cookie-choco2.jpg', 0),
(130, 32, 'cookie-choco3.jpg', 0),
(131, 32, 'cookie-choco4.jpg', 0),
(132, 33, 'wedding1.jpg', 0),
(133, 33, 'wedding2.jpg', 0),
(134, 33, 'wedding3.jpg', 0),
(135, 34, 'donut_choco1.jpg', 0),
(136, 34, 'donut_choco2.jpg', 0),
(137, 34, 'donut_choco3.jpg', 0),
(138, 35, 'donut_matcha3.jpg', 0),
(139, 35, 'donut_matcha2.jpg', 0),
(140, 35, 'donut_matcha1.jpg', 0),
(141, 36, 'donut_straw1.jpg', 0),
(142, 36, 'donut_straw2.jpg', 0),
(143, 36, 'donut_straw3.jpg', 0),
(144, 39, 'cream-choco1.jpg', 0),
(145, 39, 'cream-choco2.jpg', 0),
(146, 39, 'cream-choco3.jpg', 0),
(147, 37, 'cream-straw1.jpg', 0),
(148, 37, 'cream-straw2.jpg', 0),
(149, 37, 'cream-straw3.jpg', 0),
(150, 38, 'cream-matcha1.jpg', 0),
(151, 38, 'cream-matcha2.jpg', 0),
(152, 38, 'cream-matcha3.jpg', 0),
(153, 34, 'Baked Chocolate Cake Donuts _ Nourished Endeavors.jfifBaked Chocolate Cake Donuts _ Nourished Endeavors.jfif', 0),
(154, 34, 'Baked Chocolate Cake Donuts _ Nourished Endeavors.jpg\n', 0),
(155, 34, 'Copycat Blue Star Lemon Poppy Buttermilk Donuts.jpg', 0),
(156, 34, 'Oreo Cookies and Cream Donuts - Baker by Nature.jpg', 0),
(157, 34, 'Recipe Index.jfif', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `detail_product` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `id_category` int(11) NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `fakeprice` varchar(250) DEFAULT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `detail_product`, `price`, `id_category`, `photo`, `fakeprice`, `status`) VALUES
(1, 'Crepe BlueBerry', 'Crepe cakes are a beautiful no-bake option, and just as visually stunning as a full layer cake! With over 20 layers of crepes filled with tart lemon curd and a velvety cream cheese spread, it’s well worth the time needed to make the crepes.', 10000, 6, 'crepe_blueberry1-removebg-preview.png', '20.000', '1'),
(2, 'Crepe Chocolate', 'Crepe cakes were one of those cakes that I looked at and thought, wow that is absolutely stunning. Layers of fluffy cream layered perfectly between paper thin crepes... LOTS of crepes.', 12000, 6, 'crepe_chocolate2-removebg-preview.png', '22.000', '1'),
(3, 'Crepe Eggs', 'Crepe cakes were one of those cakes that I looked at and thought, wow that is absolutely stunning. Layers of fluffy cream layered perfectly between paper thin crepes... LOTS of crepes.', 8000, 6, 'crepe_egg3-removebg-preview.png', '10.000', '1'),
(4, 'Crepe Matcha', 'Crepe cakes were one of those cakes that I looked at and thought, wow that is absolutely stunning. Layers of fluffy cream layered perfectly between paper thin crepes... LOTS of crepes.', 16000, 6, 'crepe_matcha2-removebg-preview.png', '20.000', '1'),
(5, 'Crepe StrawBerry', 'Crepe cakes were one of those cakes that I looked at and thought, wow that is absolutely stunning. Layers of fluffy cream layered perfectly between paper thin crepes... LOTS of crepes.', 20000, 6, 'crepe_strawberry1-removebg-preview.png', '22.000', '2'),
(6, 'Event Chocolate Cake ', 'Chocolate cake is a classic and beloved dessert that is enjoyed by chocolate enthusiasts all over the world. It is...', 120000, 13, 'event_chocolate2-removebg-preview.png', '15.000', '1'),
(7, 'Event StrawBerry Cake ', 'With our chocolate website, you can find all the delicious treats you need to satisfy your sweet tooth.', 150000, 9, 'event4.jpg', '20.000', '1'),
(8, 'Event BlueBerry Cake ', 'With our chocolate website, you can find all the delicious treats you need to satisfy your sweet tooth.', 149000, 9, 'bir-blue1.jpg', '169.000', '1'),
(9, 'Event Cream Cake ', 'With our chocolate website, you can find all the delicious treats you need to satisfy your sweet tooth.', 163000, 7, 'event4-removebg-preview.png', '173.000', '2'),
(10, 'Event Chocolate White Cake ', 'With our chocolate website, you can find all the delicious treats you need to satisfy your sweet tooth.', 200000, 13, 'choco-white1-removebg-preview.png', '201.000', '1'),
(11, 'Sweet Bread', 'With our chocolate website, you can find all the delicious treats you need to satisfy your sweet tooth.', 20000, 12, 'banhmingot3-removebg-preview.png', '30.000', '1'),
(12, 'Croissants', 'news', 45000, 12, 'banhsungbo3-removebg-preview.png', '55.000', '1'),
(13, 'Loaf', 'Very good Loaf', 12000, 12, 'loaf2-removebg-preview.png', '16.000', '1'),
(14, 'Scone', 'Very good Scone', 20000, 12, 'scone3-removebg-preview.png', '29.000', '2'),
(15, 'Orange Cup Cake ', 'Cup Cake ', 55000, 11, 'cupcake_cam5-removebg-preview.png', '65.000', '1'),
(16, 'Banana Cup Cake', 'Cup Cake', 58000, 11, 'cupcake_chuoi3-removebg-preview.png', '78.000', '1'),
(17, 'Oreo Cup Cake', 'This cake is delicious', 69000, 11, 'cupcake_oreo4-removebg-preview.png', '89.000', '1'),
(18, 'Grape Cup Cake', 'This cake is delicious', 44000, 11, 'cupcake_nho1-removebg-preview.png', '54.000', '1'),
(19, 'Velvet Cup Cake', 'Red Velvet is a cake that symbolizes love, what could be more wonderful than giving your loved one a beautiful cake made by yourself.', 82000, 11, 'cupcake_velvet4-removebg-preview.png', '92.000', '2'),
(20, 'Oreo Macaron', 'Macaron is an attractive dessert and originated in France. Let\'s learn how to make delicious and flavorful Macarons!', 184636, 5, 'maca-oreo2-removebg-preview.png', '194.000', '1'),
(21, 'Vani Macaron', 'Macaron is an attractive dessert and originated in France. Let\'s learn how to make delicious and flavorful Macarons!', 198280, 5, 'maca-vani4-removebg-preview.png', '200.000', '2'),
(22, 'StrawBerry Macaron', 'Macaron is an attractive dessert and originated in France. Let\'s learn how to make delicious and flavorful Macarons!', 163000, 5, 'maca-straw3-removebg-preview.png', '173.000', '1'),
(23, 'Chocolate Macaron', 'Macaron is an attractive dessert and originated in France. Let\'s learn how to make delicious and flavorful Macarons!', 230000, 5, 'maca-choco2-removebg-preview.png', '240.000', '1'),
(24, 'Coffee Macaron', 'Macaron is an attractive dessert and originated in France. Let\'s learn how to make delicious and flavorful Macarons!', 140000, 5, 'maca-cf3-removebg-preview-removebg-preview.png', '150.000', '1'),
(25, 'Matcha Macaron', 'Macaron is an attractive dessert and originated in France. Let\'s learn how to make delicious and flavorful Macarons!', 175000, 5, 'maca-matcha3-removebg-preview.png', '185.000', '1'),
(26, 'Carrot Macaron', 'Macaron is an attractive dessert and originated in France. Let\'s learn how to make delicious and flavorful Macarons!', 120000, 5, 'maca-carot2-removebg-preview.png', NULL, '1'),
(27, 'Cookies Mix 3 Flavour', 'The rich aroma of butter combined with the nutty flavor of almonds, sesame and the faint aroma of green tea and cocoa will satisfy you and make snacks worth the wait.', 75000, 4, 'cookie-mix4-removebg-preview.png', NULL, '2'),
(28, 'Candy Cookies', 'The rich aroma of butter combined with the nutty flavor of almonds, sesame and the faint aroma of green tea and cocoa will satisfy you and make snacks worth the wait.', 95000, 4, 'cookie-cheese3-removebg-preview__2_-removebg-preview.png', NULL, '1'),
(29, 'Pet Shaped Cookies', 'The rich aroma of butter combined with the nutty flavor of almonds, sesame and the faint aroma of green tea and cocoa will satisfy you and make snacks worth the wait.', 68000, 4, 'cookie-dog2-removebg-preview.png', NULL, '2'),
(30, 'StrawBerry Cookies', 'The rich aroma of butter combined with the nutty flavor of almonds, sesame and the faint aroma of green tea and cocoa will satisfy you and make snacks worth the wait.', 63500, 4, 'cookie-red3-removebg-preview.png', NULL, '1'),
(31, 'Twinkle Cookies', 'The rich aroma of butter combined with the nutty flavor of almonds, sesame and the faint aroma of green tea and cocoa will satisfy you and make snacks worth the wait.', 72000, 4, 'cookie-twinkle1-removebg-preview.png', NULL, '1'),
(32, 'Chocolate Cookies', 'The rich aroma of butter combined with the nutty flavor of almonds, sesame and the faint aroma of green tea and cocoa will satisfy you and make snacks worth the wait.', 100000, 4, 'cookie-choco4-removebg-preview.png', NULL, '1'),
(33, 'Wedding', 'Hundred years of Happiness', 950000, 9, 'wedding1.jpg', NULL, '1'),
(34, 'Doughnut Chocolate', 'I made this glutenfree by replacing the flour. Worked out great!', 69000, 10, 'Baked_Chocolate_Cake_Donuts___Nourished_Endeavors__2_-removebg-preview.png', NULL, '1'),
(35, 'Doughnuts Choco Matcha', 'Baked matcha doughnuts with matcha glaze really pack a green tea punch! These are baked, not fried, so they\'re not only easier to eat, but they\'re also easier on your waistline.', 96999, 10, 'Chocolate_Mochi_Donuts__2_-removebg-preview.png', NULL, '1'),
(36, 'Doughnuts Oreo', 'Please choose me because I am unique', 88.999, 10, 'tải_xuống__2_-removebg-preview.png', NULL, '1'),
(37, 'StrawBerry Cream Cake', 'Please choose me because I am unique', 630333, 8, 'cream-straw1-removebg-preview.png', NULL, '2'),
(38, 'Matcha Cream Cake', 'Please choose me because I am unique', 550000, 8, 'cream-matcha2-removebg-preview.png', NULL, '1'),
(39, 'Chocolate Cream Cake', 'Please choose me because I am unique', 20, 8, 'cream-choco2-removebg-preview.png', NULL, '2'),
(209, 'Doughnut pumpkin', 'Please choose me because I am unique', 35000, 10, 'Baked_Pumpkin_Donuts_-_Gluten_Free__3_-removebg-preview.png', '45000', '1'),
(210, 'Doughnut strawbery', 'Please choose me because I am unique', 35000, 10, 'Giant_Donut_Cake__Homer_Simpson_Sprinkles_Donut_-The_Little_Epicurean__2_-removebg-preview.png', '45000', '2'),
(211, 'Doughnut vanila sprinkle', 'Please choose me because I am unique', 35000, 10, 'Pastry_Affair___Baked_Lemon_Poppy_Seed_Doughnuts__2_-removebg-preview.png', '45000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `testdelete`
--

CREATE TABLE `testdelete` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testdelete`
--

INSERT INTO `testdelete` (`id`, `name`) VALUES
(1, '7j'),
(2, '7j'),
(3, '7j'),
(4, '7j'),
(5, '7j'),
(6, '7j'),
(7, '7j');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD UNIQUE KEY `id_customer` (`id_customer`);

--
-- Indexes for table `cart_product`
--
ALTER TABLE `cart_product`
  ADD KEY `FK_cp_cart` (`id_cart`),
  ADD KEY `FK_cp_product` (`id_product`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `detailsorder`
--
ALTER TABLE `detailsorder`
  ADD PRIMARY KEY (`id_order`,`id_product`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id_page`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id_photo`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `testdelete`
--
ALTER TABLE `testdelete`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id_page` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `testdelete`
--
ALTER TABLE `testdelete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_cart_account` FOREIGN KEY (`id_customer`) REFERENCES `account` (`id_account`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cart_product`
--
ALTER TABLE `cart_product`
  ADD CONSTRAINT `FK_cp_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cart_product_ibfk_1` FOREIGN KEY (`id_cart`) REFERENCES `cart` (`id_cart`);

--
-- Constraints for table `detailsorder`
--
ALTER TABLE `detailsorder`
  ADD CONSTRAINT `detailsorder_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`),
  ADD CONSTRAINT `detailsorder_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `account` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
