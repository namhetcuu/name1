-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 12:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dacs2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'nam', '', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `cart_name` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cart_price` varchar(100) NOT NULL,
  `cart_image` varchar(255) NOT NULL,
  `cart_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `cart_name`, `product_id`, `cart_price`, `cart_image`, `cart_quantity`) VALUES
(4, 'Phấn Nước Laneige', 13, '152100', 'sp8.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Trang điểm môi'),
(2, 'Mặt nạ'),
(3, 'Trang điểm mặt'),
(4, 'Sửa rửa mặt'),
(5, 'Dầu Gội và Dầu Xả'),
(6, 'Trang điểm mắt'),
(7, 'Sửa tắm'),
(8, 'Chống nắng da mặt'),
(9, 'Tẩy trang mặt'),
(10, 'Dưỡng Thể');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_phone` varchar(50) NOT NULL,
  `client_address` varchar(255) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `client_password` varchar(255) NOT NULL,
  `client_note` varchar(255) NOT NULL,
  `name_card` varchar(255) NOT NULL,
  `number_card` varchar(255) NOT NULL,
  `time_card` varchar(255) NOT NULL,
  `year_card` varchar(255) NOT NULL,
  `number_cvv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`client_id`, `client_name`, `client_phone`, `client_address`, `client_email`, `client_password`, `client_note`, `name_card`, `number_card`, `time_card`, `year_card`, `number_cvv`) VALUES
(1, 'Hiếu', '0932023992', '123/123', 'hieu@gmail.com', 'hieu123', 'anh ba phai', 'vpbamk', 'hieuhoa', 'hetcuu', 'hetcuu2003', 'SV1'),
(2, 'Long Hoàng', '01694494813', '123/123', 'long@gmail.com', 'long456', 'trum di top', 'Sacomabnk', 'yacham', 'hetcuu', 'hetcuu2004', 'SV2'),
(3, 'Hoàng Long', '0932023992', '123/123', 'hoanglong@gmail.com', 'hoang767', 'anh di rung', 'agribbank', 'longhi', 'hetcuu', 'hetcuu2003', 'SV1'),
(4, 'nguyen van thien', '09876543', '224/345', 'thien@gmail.com', '12333', '', 'bidv', 'thiennguyen', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `order_code` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `product_id`, `order_quantity`, `order_code`, `client_id`, `order_time`, `order_status`) VALUES
(1, 15, 7, '3060', 1, '0000-00-00 00:00:00', '1'),
(2, 11, 4, '3060', 1, '0000-00-00 00:00:00', '1'),
(3, 14, 5, '8979', 2, '0000-00-00 00:00:00', '0'),
(4, 13, 6, '8979', 2, '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_image` varchar(100) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `post_author` varchar(255) NOT NULL,
  `post_summary` text NOT NULL,
  `post_describe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `post_title`, `post_image`, `post_time`, `post_author`, `post_summary`, `post_describe`) VALUES
(1, 'Da Mụn Có Nên Tẩy Tế Bào Chết Không? 1 Số Lưu Ý Cần Biết.', 'product-1.jpg', '0000-00-00 00:00:00', 'Khánh Huyền', '1', 'Sự tăng sản xuất dầu từ tuyến dầu dưới da có thể dẫn đến tắc nghẽn lỗ chân lông và gây mụn.'),
(2, 'Da mụn có nên tẩy tế bào chết không', 'product-2.jpg', '0000-00-00 00:00:00', 'Lệ Tuyên', '1', 'Làm sạch da không chỉ rửa với sữa rửa mặt mà còn cần kết hợp với tẩy tế bào chết từ 1-2 lần trong tuần cho da'),
(3, 'Nên chọn tẩy tế bào chết nào cho da mụn.', 'product-3.jpg', '0000-00-00 00:00:00', 'Thuy Trang', '1', 'Chọn sản phẩm nhẹ: Sản phẩm tẩy tế bào chết nên có thành phần nhẹ nhàng, không chứa hạt tẩy quá lớn để tránh làm tổn thương da mụn.'),
(4, 'Gợi ý các sản phẩm tẩy tế bào chết cho da mụn.', 'product-4.jpg', '0000-00-00 00:00:00', 'Phuong Thuy', '1', 'Nước Hoa Hồng Some By Mi AHA-BHA-PHA Cho Da Mụn 150ml'),
(5, 'Một số lưu ý khi sử dụng tẩy tế bào chết cho da mụn.', 'product-5.jpg', '0000-00-00 00:00:00', 'Khanh Le', '1', 'Sau khi giải đáp được thắc mắc da mụn có nên tẩy tế bào chết không, bạn cũng nên biết về những điều lưu ý khi sử dụng tẩy tế bào chết cho da mụn.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_promotion` int(11) NOT NULL,
  `product_detail` varchar(255) NOT NULL,
  `product_outstan` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_describe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_promotion`, `product_detail`, `product_outstan`, `product_quantity`, `product_image`, `product_describe`) VALUES
(1, 10, 'Sửa chống nắng Anesa\'', 50000, 20, 'là sản phẩm chống nắng đến từ thương hiệu chống nắng dưỡng da ANESSA hàng đầu Nhật Bản suốt 21 năm liên tiếp, giúp chống lại tác hại của tia UV & bụi mịn tối ưu dưới mọi điều kiện sinh hoạt, kể cả thời tiết khắc nghiệt nhất.', 1, 10, 'product-10.jpg', ' là dòng chăm sóc tóc mới của thương hiệu TRESemmé. Với nồng độ sulfate thấp, sản phẩm dầu gội + dầu xả TRESemmé Keratin Smooth  dành riêng cho tóc xơ rối không thể vào nếp'),
(2, 9, 'Gel rửa mặt\'', 34000, 15, 'chứa dưỡng chất Vitamin dạng gel đậm đặc, hàm lượng lên đến 20.000ppm được chiết xuất từ các trái cây tươi ở hòn đảo Jeju xinh đẹp. Mang đến làn da khỏe mạnh, bóng mượt đầy sức sống', 1, 19, 'product-9.jpg', 'là sản phẩm da mặt đến từ thương hiệu dược mỹ phẩm Eucerin, được thiết kế chuyên biệt dành cho da dầu và da hỗn hợp'),
(3, 4, 'Sửa rửa mặt Crosx', 54350, 29, 'chứa dưỡng chất Vitamin dạng gel đậm đặc, hàm lượng lên đến 20.000ppm được chiết xuất từ các trái cây tươi ở hòn đảo Jeju xinh đẹp. Mang đến làn da khỏe mạnh, bóng mượt đầy sức sống', 1, 20, 'product-13.jpg', 'phù hợp cho cả da nhạy cảm và da trẻ em từ 1 tuổi. Đặc biệt, công thức chứa 50% thành phần dưỡng da giúp bảo vệ da khỏi thương tổn do tia UV và hạt siêu vi trong không khí.'),
(4, 7, 'Sữa Tắm Hatomugi', 90000, 45, 'đến từ thương hiệu HATOMUGI thường xuyên lọt vào top sữa tắm được yêu thích của các tạp chí làm đẹp tại Nhật', 1, 23, 'sp13.png', 'giàu dưỡng chất, không chỉ giúp làm sạch da mà còn dưỡng ẩm cho da, nuôi dưỡng cho làn da sáng mịn từ bên trong.'),
(5, 2, 'Mặt nạ ủ môi ', 43477, 30, 'chứa dưỡng chất Vitamin dạng gel đậm đặc, hàm lượng lên đến 20.000ppm được chiết xuất từ các trái cây tươi ở hòn đảo Jeju xinh đẹp. Mang đến làn da khỏe mạnh, bóng mượt đầy sức sống', 1, 34, 'sp2.jpg', ' chứa dưỡng chất Vitamin dạng gel đậm đặc, hàm lượng lên đến 20.000ppm được chiết xuất từ các trái cây tươi ở hòn đảo Jeju xinh đẹp. Mang đến làn da khỏe mạnh, bóng mượt đầy sức sống'),
(6, 8, 'Gel dưỡng Megaduo', 32400, 25, 'chứa dưỡng chất Vitamin dạng gel đậm đặc, hàm lượng lên đến 20.000ppm được chiết xuất từ các trái cây tươi ở hòn đảo Jeju xinh đẹp. Mang đến làn da khỏe mạnh, bóng mượt đầy sức sống', 1, 15, 'product-18.jpg', 'dưỡng da được chiết xuất từ các thành phần thiên nhiên như Tràm Trà, Bạch Ngọc Lan, Ý Dĩ Nhân Đỏ, Hoa Hồng, Hoa Thủy Tiên... giúp dưỡng da chuyên sâu và hỗ trợ cải thiện các vấn đề về da khác nhau.'),
(7, 9, 'Serum Skin404', 23433, 15, 'chứa dưỡng chất Vitamin dạng gel đậm đặc, hàm lượng lên đến 20.000ppm được chiết xuất từ các trái cây tươi ở hòn đảo Jeju xinh đẹp. Mang đến làn da khỏe mạnh, bóng mượt đầy sức sống', 3, 56, 'product-14.jpg', 'dành riêng cho các cô nàng da khô hoặc thường xuyên phải tiếp xúc với điều hòa gây nên tình trạng da mất nước, bong tróc. Bổ sung Vitamin E hàm lượng 20.000ppm được chiết xuất từ nguồn nước khoáng tại đảo Jeju Hàn Quốc'),
(8, 3, 'Serum giảm mụm mờ', 54546, 50, 'chứa dưỡng chất Vitamin dạng gel đậm đặc, hàm lượng lên đến 20.000ppm được chiết xuất từ các trái cây tươi ở hòn đảo Jeju xinh đẹp. Mang đến làn da khỏe mạnh, bóng mượt đầy sức sống', 1, 34, 'product-11.jpg', 'chứa dưỡng chất Vitamin dạng gel đậm đặc, hàm lượng lên đến 20.000ppm được chiết xuất từ các trái cây tươi ở hòn đảo Jeju xinh đẹp. Mang đến làn da khỏe mạnh, bóng mượt đầy sức sống, phục hồi độ đàn hồi'),
(9, 6, 'Mascara Dài Mi và Cong Mi', 54688, 10, 'chứa dưỡng chất Vitamin dạng gel đậm đặc, hàm lượng lên đến 20.000ppm được chiết xuất từ các trái cây tươi ở hòn đảo Jeju xinh đẹp. Mang đến làn da khỏe mạnh, bóng mượt đầy sức sống', 1, 65, 'product-5.jpg', 'là sản phẩm mascara đến từ thương hiệu mỹ phẩm Browit của Thái Lan, với thiết kế đặc biệt đầu chải lược giúp len lỏi và chải từng sợi mi giúp đôi mi dài và cong vút tự nhiên cả ngày. Sản phẩm đồng sáng tạo bởi NongChat'),
(10, 1, 'Son Kem Lì Black Rouge', 46466, 19, 'chứa dưỡng chất Vitamin dạng gel đậm đặc, hàm lượng lên đến 20.000ppm được chiết xuất từ các trái cây tươi ở hòn đảo Jeju xinh đẹp. Mang đến làn da khỏe mạnh, bóng mượt đầy sức sống', 1, 12, 'product-12.jpg', 'là sản phẩm son kem lì đến từ thương hiệu mỹ phẩm Black Rouge, với thiết kế giữ nguyên nét thiết kế đặc trưng của dòng Version 1, chỉ khác về màu nắp son tím pastel. '),
(11, 2, 'Phấn Nước Laneige Cho Lớp Nền Mịn', 3200, 40, 'là dòng phấn nước cushion đến từ thương hiệu mỹ phẩm cao cấp Laneige của Hàn Quốc', 1, 15, 'product-18.jpg', 'Sản phẩm tạo hiệu ứng bán mờ không gây bóng nhờn cả ngày dài giúp bạn tự tin với vẻ ngoài rạng ngời.'),
(12, 4, 'Sữa Rửa Mặt Cetaphil', 234000, 24, 'phiên bản mới ra mắt năm 2022 từ thương hiệu Cetaphil với công thức khoa học mới cho làn da nhạy cảm', 1, 56, 'sp12.png', 'dành riêng cho các cô nàng da khô hoặc thường xuyên phải tiếp xúc với điều hòa gây nên tình trạng da mất nước, bong tróc. Bổ sung Vitamin E hàm lượng 20.000ppm được chiết xuất từ nguồn nước khoáng tại đảo Jeju Hàn Quốc'),
(13, 3, 'Phấn Nước Laneige', 234000, 35, 'là dòng phấn nước cushion đến từ thương hiệu mỹ phẩm cao cấp Laneige của Hàn Quốc', 1, 65, 'sp8.jpg', 'là sản phẩm mascara đến từ thương hiệu mỹ phẩm Browit của Thái Lan, với thiết kế đặc biệt đầu chải lược giúp len lỏi và chải từng sợi mi giúp đôi mi dài và cong vút tự nhiên cả ngày. Sản phẩm đồng sáng tạo bởi NongChat'),
(14, 1, 'Son Dưỡng Môi DHC', 73000, 10, ' là một trong những dòng sản phẩm bán chạy nhất của thương hiệu DHC Nhật Bản.', 1, 12, 'sp1.jpg', 'là sản phẩm son kem lì đến từ thương hiệu mỹ phẩm Black Rouge, với thiết kế giữ nguyên nét thiết kế đặc trưng của dòng Version 1, chỉ khác về màu nắp son tím pastel. '),
(15, 5, 'Dầu gội Selgun', 60000, 20, 'chứa dưỡng chất Vitamin dạng gel đậm đặc, hàm lượng lên đến 20.000ppm được chiết xuất từ các trái cây tươi ở hòn đảo Jeju xinh đẹp. Mang đến làn da khỏe mạnh, bóng mượt đầy sức sống', 1, 10, 'sp7.jpg', ' là dòng chăm sóc tóc mới của thương hiệu TRESemmé. Với nồng độ sulfate thấp, sản phẩm dầu gội + dầu xả TRESemmé Keratin Smooth  dành riêng cho tóc xơ rối không thể vào nếp'),
(85, 10, 'lo vi song', 35, 222, 'ddsdadsd                                                            ', 22, 22, 'shiba.jfif', 'dadadd                                                            ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(11) NOT NULL,
  `review_content` text NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `review_content`, `client_id`, `client_name`) VALUES
(1, 'Da mình dễ mụn, khi dùng srm này êm da, làm dịu vết mụn. Mình thấy okiee.', 1, 'Hiếu'),
(2, 'Giao hàng nhanh,đóng gói kĩ,dung tích lớn,chưa dùng nên chưa biết như nào', 2, 'Hoàng Long'),
(3, '50ml 150k mà em nhìn nhầm 150ml 150k', 3, 'Long Hoàng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `lk_giohang_sanpham` (`product_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `lk_donhang_khachhang` (`client_id`),
  ADD KEY `lk_donhang_sanpham` (`product_id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `lk_sanpham_danhmuc` (`category_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `lk_binhluan_khachhang` (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `lk_giohang_sanpham` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`);

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `lk_donhang_khachhang` FOREIGN KEY (`client_id`) REFERENCES `tbl_client` (`client_id`),
  ADD CONSTRAINT `lk_donhang_sanpham` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`category_id`);

--
-- Constraints for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD CONSTRAINT `lk_binhluan_khachhang` FOREIGN KEY (`client_id`) REFERENCES `tbl_client` (`client_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
