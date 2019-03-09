-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2019 at 08:28 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `userid` int(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `userid`, `password`, `email`) VALUES
(NULL, 'jui', 6789, '6789', 'jui@gmail.com'),
(NULL, 'nandita', 12345, '12345', 'nandita@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `productid` int(25) NOT NULL,
  `productname` varchar(25) NOT NULL,
  `price` int(15) NOT NULL,
  `picture` text,
  `quantity` int(20) NOT NULL,
  `customerid` int(11) NOT NULL,
  `total_price` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `productid`, `productname`, `price`, `picture`, `quantity`, `customerid`, `total_price`) VALUES
(3, 2, 'N97', 87000, NULL, 2, 6, 174000),
(4, 1, 'S9+', 98000, NULL, 1, 6, 98000);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(100) NOT NULL,
  `cat_name` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `isDelete` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `cat_name`, `created_at`, `updated_at`, `isDelete`) VALUES
(1, 'Electronics And Home Appliens', '2018-12-16', '2018-12-16', 'false'),
(2, 'Domestic Animals', '2018-12-16', '2018-12-16', 'false'),
(3, 'electronics', '2018-12-17', '2018-12-17', 'false'),
(4, 'leather', '2018-12-17', '2018-12-17', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(14) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `firstname`, `lastname`, `email`, `mobile`, `password`, `address`) VALUES
(1, 'shikha', 'mandal', 'nandan@gmail.com', 1681561256, '12345', 'uttara dhaka'),
(3, 'nandita', 'mandal', 'nanditamandal.19@gmail.com', 1681561256, '4567', 'uttara dhaka'),
(4, 'abcdef', 'abcdef', 'biplab.bb.00@gmail.com', 1914211386, '123456', 'dhaka'),
(5, 'qwert', 'qwert', 'qwert@gmail.com', 1914211386, '123456', 'bangladesh'),
(6, 'yuiop', 'rtyuio', 'sanjay@gmail.com', 1500000000, '678905', 'bangladesh'),
(7, 'shuvro', 'narayan', 'knd.snd@gmail.com', 1750148346, 'myid291994', 'numtila');

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `id` int(5) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `userid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `firstname`, `lastname`, `email`, `password`, `userid`) VALUES
(3, 'samia', 'afroz', 'samia@gmail.com', '1234', '456784'),
(4, 'abcdef', 'mandal', 'snd.knd@gmail.com', '1234567', '333333');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `man_id` int(100) NOT NULL,
  `man_name` varchar(500) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `isDelete` varchar(100) NOT NULL,
  `sub_cat_id` int(100) NOT NULL,
  `made_in` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`man_id`, `man_name`, `created_at`, `updated_at`, `isDelete`, `sub_cat_id`, `made_in`) VALUES
(1, 'Samsung', '2018-12-16', '2018-12-16', 'false', 1, 'South Korea'),
(2, 'Bengal Meat', '2018-12-16', '2018-12-16', 'false', 2, 'Bangladesh'),
(3, 'bata', '2018-12-17', '2018-12-17', 'false', 1, 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `cart_id` int(50) DEFAULT NULL,
  `productid` int(50) DEFAULT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `price` int(50) DEFAULT NULL,
  `picture` text,
  `quantity` int(11) DEFAULT NULL,
  `customerid` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `cart_id`, `productid`, `productname`, `price`, `picture`, `quantity`, `customerid`, `total_price`) VALUES
(1, 4, 5, 'paco f1', 100, NULL, 3, NULL, 300),
(2, 6, 3, 'Galaxy S9+', 2, NULL, 1, NULL, 2),
(3, 3, 5, 'paco f1', 100, NULL, 2, NULL, 200),
(4, 3, 2, 'N97', 87000, NULL, 2, 6, 174000),
(5, 4, 1, 'S9+', 98000, NULL, 1, 6, 98000),
(6, 3, 2, 'N97', 87000, NULL, 2, 6, 174000),
(7, 4, 1, 'S9+', 98000, NULL, 1, 6, 98000),
(8, 2, 1, 'S9+', 98000, NULL, 2, 1, 196000),
(9, 5, 1, 'S9+', 98000, NULL, 3, 1, 294000),
(10, 6, 2, 'N97', 87000, NULL, 1, 1, 87000),
(11, 6, 2, 'N97', 87000, NULL, 2, 7, 174000),
(12, 7, 3, 'paco f1', 100, NULL, 3, 7, 300),
(13, 8, 4, 'mk', 200, NULL, 1, 7, 200);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(100) NOT NULL,
  `pro_name` varchar(500) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `sub_cat_id` int(100) NOT NULL,
  `man_id` int(100) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `isDelete` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `cat_id`, `sub_cat_id`, `man_id`, `created_at`, `updated_at`, `isDelete`) VALUES
(1, 'S9+', 1, 1, 1, '2018-12-16', '2018-12-16', 'false'),
(2, 'paco f1', 1, 1, 1, '2018-12-17', '2018-12-17', 'true'),
(3, 'MK', 1, 1, 3, '2018-12-17', '2018-12-17', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `pro_det_id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `supp_id` int(100) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `quantity` int(100) NOT NULL,
  `picture` varchar(500) DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `writing` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`pro_det_id`, `p_id`, `product_name`, `supp_id`, `price`, `quantity`, `picture`, `discount`, `writing`) VALUES
(1, 1, 'S9+', 1, 98000, 50, 'uploads\\images\\3ezwo2agjftokb10r3jwec7m857z1v.jpg', 0, 'Flagship phone'),
(2, 1, 'N97', 1, 87000, 50, 'uploads\\images\\0iy6nomuovobak31dwuthpz0trhkgq.jpg', 5, 'sdgdf bdrfrth bvv'),
(3, 2, 'paco f1', 1, 100, 55, 'uploads\\images\\nnedtmxzvl2x3dxczrwzvots0iix7w.png', 5, 'ygu'),
(4, 4, 'mk', NULL, NULL, 40, NULL, NULL, 'high ');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_catagory`
--

CREATE TABLE `sub_catagory` (
  `sub_cat_id` int(100) NOT NULL,
  `sub_cat_name` varchar(500) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `created_by` varchar(500) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `isDelete` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_catagory`
--

INSERT INTO `sub_catagory` (`sub_cat_id`, `sub_cat_name`, `cat_id`, `created_by`, `created_at`, `updated_at`, `isDelete`) VALUES
(1, 'Mobile', 1, 'session', '2018-12-16', '2018-12-16', 'false'),
(2, 'Cow', 2, 's@gmail.com', '2018-12-16', '2018-12-16', 'false'),
(3, 'beg', 4, 'samia@gmail.com', '2018-12-17', '2018-12-17', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supp_id` int(100) NOT NULL,
  `supp_name` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `isDelete` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supp_id`, `supp_name`, `created_at`, `updated_at`, `isDelete`) VALUES
(1, 'Samsung Plaza', '2018-12-16', '2018-12-16', 'false'),
(2, 'Agora Shop', '2018-12-16', '2018-12-16', 'false'),
(3, 'bata shop', '2018-12-17', '2018-12-17', 'false');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`man_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`pro_det_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_catagory`
--
ALTER TABLE `sub_catagory`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `man_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `pro_det_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_catagory`
--
ALTER TABLE `sub_catagory`
  MODIFY `sub_cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supp_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
