SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime NOT NULL DEFAULT NOW()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`) VALUES
(1, 'Chocolate', 'Choco Cup 1', 152.00, './asset/choco1.jpg'), -- NOW()
(2, 'StrawBerry', 'Strawberry Cup 1', 122.00, './asset/strawberry1.jpg'),
(3, 'StrawBerry', 'Strawberry Cup 2', 122.00, './asset/strawberry2.jpg'),
(4, 'StrawBerry', 'Strawberry Cup 3', 122.00, './asset/strawberry3.jpg'),
(5, 'StrawBerry', 'Strawberry Cup 4', 122.00, './asset/cup4.jpg'),
(6, 'StrawBerry', 'Strawberry Cup 5', 122.00, './asset/cup.jpg'),
(7, 'StrawBerry', 'Strawberry Cup 6', 122.00, './asset/cup1.jpg'),
(8, 'StrawBerry', 'Strawberry Cup 7', 122.00, './asset/choco5.jpg'),
(9, 'Chocolate', 'Choco Cup 2', 152.00, './asset/choco2.jpg'),
(10, 'Chocolate', 'Choco Cup 3', 152.00, './asset/choco3.jpg'),
(11, 'Vanilla', 'Vanilla Cup 1', 152.00, './asset/vanilla1.jpg'),
(12, 'Vanilla', 'Vanilla Cup 2', 152.00, './asset/vanilla2.jpg'),
(13, 'Vanilla', 'Vanilla Cup 3', 152.00, './asset/vanilla3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime NOT NULL DEFAULT NOW()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`) VALUES
(1, 'Daily', 'Tuition'),
(2, 'Ariba', 'Ahmed');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
