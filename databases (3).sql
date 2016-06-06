-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2016 at 09:35 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databases`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Áo sơ mi nam'),
(2, 'Áo thun nam'),
(3, 'Áo khoác nam'),
(4, 'Quần jean nam'),
(5, 'Quần thể thao nam');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cus_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus_id`, `name`, `email`, `sodienthoai`, `address`, `created_at`, `updated_at`) VALUES
(7, 'Nguyên X', 'nguyenx@gmail.com', '0909909009', 'Phan Đình Phùng, Hà Tĩnh', '2016-06-05 09:42:39', '2016-06-05 09:42:39'),
(8, 'Bui nguyen ba', 'a@gmail.com', '01675467069', '1', '2016-06-05 11:42:03', '2016-06-05 11:42:03'),
(9, 'Bùi Nguyên Ba', 'buinguyenba@gmail.com', '0971315978', 'Ngõ 10, Tôn Thất Tùng, Đống Đa, Hà Nội', '2016-06-06 10:07:00', '2016-06-06 10:07:00'),
(10, '1', 'abc@gmail.com', '11111111111', '1', '2016-06-06 10:08:42', '2016-06-06 10:08:42'),
(11, 'Bui nguyen ba', 'ba@mail.com', '01675467069', '123 nghệ an', '2016-06-06 10:26:05', '2016-06-06 10:26:05');

-- --------------------------------------------------------

--
-- Table structure for table `detailoder`
--

CREATE TABLE `detailoder` (
  `det_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `det_size` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `det_number` int(11) NOT NULL,
  `det_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `detailoder`
--

INSERT INTO `detailoder` (`det_id`, `order_id`, `pro_id`, `det_size`, `created_at`, `updated_at`, `det_number`, `det_price`) VALUES
(3, 5, 9, 'm', '2016-06-05 09:42:40', '2016-06-05 09:42:40', 1, 215000),
(4, 5, 21, 's', '2016-06-05 09:42:40', '2016-06-05 09:42:40', 1, 115000),
(5, 5, 11, 's', '2016-06-05 09:42:40', '2016-06-05 09:42:40', 2, 199000),
(6, 6, 9, 'm', '2016-06-05 11:42:03', '2016-06-05 11:42:03', 1, 215000),
(7, 6, 21, 's', '2016-06-05 11:42:03', '2016-06-05 11:42:03', 1, 115000),
(8, 6, 11, 's', '2016-06-05 11:42:03', '2016-06-05 11:42:03', 2, 199000),
(9, 7, 9, 'm', '2016-06-06 10:07:01', '2016-06-06 10:07:01', 1, 215000),
(10, 8, 9, 'm', '2016-06-06 10:08:42', '2016-06-06 10:08:42', 1, 215000),
(11, 9, 10, 's', '2016-06-06 10:26:05', '2016-06-06 10:26:05', 1, 215000);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `new_id` int(11) NOT NULL,
  `new_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new_images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new_detail` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`new_id`, `new_name`, `new_images`, `new_detail`, `created_at`, `updated_at`) VALUES
(1, '6 Bước Để Chàng Tự Tin Mặc Đẹp', '1.jpg', '1. Trước tiên, bạn cầm có cho mình một chiếc tủ áo đủ lớn và đủ chỉnh chu\n  Vì sao chúng ta cần bắt đầu với tủ áo? Bởi tủ áo thể hiện rất rõ con người bạn, tính tổ chức, gu thẩm mỹ và cả tính cẩn thận của bạn nữa. Thật sự thì sắp xếp tủ quần áo cũng là cả một nghệ thuật của người mặc đẹp, chứ không đơn thuần là kiểu cách hay câu nệ những thứ chỉ riêng thuộc về mình.\n  Mẹo nhỏ để bạn bắt đầu công việc sắp xếp tủ áo nghe chừng khó nhằn: hãy có ngăn riêng cho từng loại trang phục: sơ mi riêng, quần Âu hay phụ kiện cũng nên có một ngăn riêng biệt.\n2. Tiếp theo là sắm cho mình một chiếc gương lớn\n  Chiếc gương giúp bạn đánh giá được mình từ đầu đến chân, hôm nay mình trông như thế nào, quần áo có đủ phẳng và phối đã ổn chưa? Đây như là bài test cuối cùng và khá quan trọng giúp bạn hình thành thói quen tự đánh giá bản thân trước khi bước ra đường, vì đôi khi chúng ta tiêu tốn hàng mớ tiền vào những thương hiệu đắt giá nhưng khi phối chúng lại với nhau lại trông chẳng ra làm sao cả! \n3. Bạn nên thường xuyên cập nhật các xu thế thời trang, cũng như trau dồi gu thẩm mỹ để có thể tự tin mặc đẹp\n  Hình thành ý niệm về thời trang bằng cách thường xuyên đọc tạp chí, xem các show thời trang và học cách phối đồ sao cho đẹp và phù hợp với bạn nhất. Hãy thường xuyên đọc và tìm hiểu, mạnh dạn dầu tư về mặt hình ảnh cho bản thân khi nhận thấy món đồ ấy thực sự phù hợp với mình, vì hiểu một cách đơn giản thì thời trang cũng như hầu hết mọi vấn đề trong cuộc sống, bạn cần hiểu rõ và nắm về cơ bản, bạn càng tự tin chinh phục được nó một cách dễ dàng hơn.\n4. Nghĩ trước về bộ quần áo mình sẽ mặc, lên kế hoạch mua sắm khoa học\n  Bước này giúp bạn tránh được những lỗi sai cơ bản trong ăn mặc, vì đã định hình được từ trước trong đầu. Lâu dần, bạn sẽ nhạy bén hơn, và biết mình còn thiếu gì trong tủ áo để mua sắm một cách khoa học, tránh lãng phí. Chỉ mua những thứ cần thiết, phù hợp với bản thân trong list đã được bạn suy nghĩ kỹ.\n  Đầu tư cho trang phục thì không bao giờ là phí, nhất là với nam giới. Bạn nên có kế hoạch chi tiêu hợp lý để dành ra một khoản nhất định cho việc mua sắm quần áo. Câu nói "phong độ là nhất thời, đẳng cấp là mãi mãi" áp dụng vào trường hợp này quả thật chuẩn không cần chỉnh!\n5. Rèn luyện thân thể, sức khỏe\n  Một thân hình cân đối, dẻo dai, không có mỡ thừa thì mặc gì cũng đẹp cả, bạn chắc cũng tán thành với ý kiến này chứ? Cơ thể chúng ta sẽ có một Size chuẩn, dễ dàng chọn lựa quần áo hơn. Đặc biệt là khi bạn tự tin vào phong thái cũng như yêu quý vóc dáng cơ thể mình, bạn sẽ sẵn sàng cho bất cứ một cuộc cách tân về phong cách nào, cả những bộ cánh mà trước giờ bạn ngại chưa dám thử chỉ vì số đo chưa hoàn toàn phù hợp.\n 6. Chọn cho mình một thương hiệu ruột hiểu rõ gu thời trang của bạn\n  Đôi khi tiềm lực kinh tế không cho phép bạn có cho mình một stylist hay một nhà thiết kế riêng thì bạn vẫn có thể hoàn toàn đảm bảo mình mặc đẹp, hợp với túi tiền và đặc trưng công việc nhờ vào thương hiệu ruột mà bạn đã tin tưởng chọn lựa. Hãy chọn lấy một thương hiệu mang phong cách thời trang độc lập, hiểu biết uyên thâm cho riêng mình nhé! \n\n', '2016-06-06 06:27:58', '2016-06-03 12:23:24'),
(2, 'Cách Phối Đồ Giúp Nam Giới Trông Cao Hơn\r\n', '2.jpg', 'Những quý ông có chiều cao khiêm tốn nên mặc đồ đồng màu từ trên xuống hoặc trang phục có hoạ tiết kẻ sọc, đồ trơn màu hay sử dụng một điểm nhấn có màu bắt mắt ở phần trên cơ thể là những cách đơn giản giúp nam giới trông cao hơn.\r\nChiều cao không chỉ ám ảnh các cô nàng mà nó còn là vấn đền lớn của những anh chàng thấp bé, vậy bí quyết nào giúp chàng vừa mặc đẹp lại vừa che được khuyết điểm này? Cùng xem qua bài viết "cách phối đồ giúp nam giới trông cao hơn" để khắc phục nhược điểm này một cách hờn hảo nhé!\r\nNhững quý ông có chiều cao khiêm tốn nên mặc đồ đồng màu từ trên xuống hoặc trang phục có hoạ tiết kẻ sọc hay mặc đồ trơn màu từ trên xuống dưới là cách giúp bạn trông cao hơn bởi nó tạo ảo giác cho người đối diện.\r\nĐối với màu sắc, đặc biệt là những gam màu tối như màu đen và chất liệu vải nhẹ cũng có tác dụng tốt trong việc khiến cơ thể có vẻ dài hơn bình thường. Đồ kẻ dọc giúp vóc dáng trông cao hơn. Các kiểu hoạ tiết như xương cá hay hình hoa kéo dài từ trên xuống dưới cũng tạo hiệu ứng tương tự. Tuyệt đối tránh kiểu vải ca-rô.\r\nSử dụng một điểm nhấn có màu bắt mắt ở phần trên cơ thể sẽ khiến người đối diện bớt tập trung vào chiều dài đôi chân, ví dụ một chiếc túi áo hoặc cà vạt. Tuy nhiên, cần tiết chế về số lượng để vẻ ngoài không bị rườm rà. Lưu ý đặc biệt là không nên kéo quần quá cao, chỉ cần trên hông là đủ.\r\n', '2016-06-03 19:24:55', '2016-06-03 12:24:55'),
(3, 'Hãy Tập Những Thói Quen Này Để Trở Thành Qúy Ông Sành Điệu', '3.jpg', 'Những thói quen đơn giản nư mua sắm trực tuyến, chọn đồ lót tốt, thường xuyên may sử đồ... sẽ giúp phái mạnh nhanh chóng thay đổi phong cách để trở thành người đàn ông lịch lãm.\r\nĐể trở thành quý ông sành điệu không phải tự nhiên mà có thể làm được, điều gì cũng cần có thời gian, kiến thức, đặc biệt đối với thời trang nam giới cần có sự hiểu biết, nắm bắt xu hướng, tính thẩm mỹ và sở thích nhất đinh. Những thói quen đơn giản dưới đây sẽ giúp phái mạnh nhanh chóng thay đổi phong cách để trở thành người đàn ông lịch lãm.\r\nCoi trọng độ dài của quần\r\n  Phong cách chiếc quần nam giới mặc thể hiện rõ sự khác biệt giữa những người “đàn ông” và “thanh niên”, trong đó độ dài của quần là vô cùng quan trọng. Quần mặc mùa đông gấu nên chạm đúng miệng giày, hoặc trùm không quá 2 cm. Khi hè về, ngại gì không phá cách bằng giày lười và xắn ống khỏe khoắn.\r\nChịu khó đi may, sửa đồ\r\n  Nếu đã bỏ được từng ấy tiền để mua cái áo dạ đắt tiền đó, bạn hoàn toàn có thể chi thêm một chút để đến thợ may sửa sang cho chúng thật vừa vặn. Với nam giới, sự vừa vặn của trang phục nơi cổ áo, vai, cổ tay và ống quần là vô cùng quan trọng.\r\nChọn đồ lót tốt\r\n  Đồ lót cũng quan trọng không kém những món đồ mặc ngoài, nam giới thông minh không nên ngại mở hầu bao cho chúng. Thương hiệu đồ lót nổi tiếng Hamilton & Hare còn khuyến khích người mua là hơi sản phẩm như quần áo thường, chúng sẽ vô cùng mềm mại khi sử dụng. Và nhớ mua mới chúng sau khi sử dụng từ 12 đến 18 tháng.\r\nQuan tâm đến hướng dẫn sử dụng\r\n  Nhiều quý ông có lẽ sẽ khó chịu khi nhận ra chiếc áo họ mới mua phải giặt khô, nhưng giống phụ nữ. Nếu muốn đảm bảo chất lượng và tuổi thọ của những món đồ thời trang đắt đỏ họ bỏ tiền mua, nam giới cũng nên chú ý thực hiện đúng những hưỡng dẫn chăm sóc sản phẩm.\r\nMua sắm trực tuyến\r\nChú ý thay đổi trang phục\r\n  Không chỉ phụ nữ, nam giới cũng nên chú trọng diện “mỗi ngày một bộ”. Tạp chí Selfridges khuyên: “Hãy tưởng tượng mình là José Mourinho vậy, mặc đồ cũng giống như cách huấn luyện viên bóng đá xoay vòng cầu thủ. Mỗi ngày bạn đều có đồ đẹp để mặc, mà tránh được chuyện sử dụng chúng tần xuất cao khiến chúng nhanh hỏng”.\r\nSo với nữ giới, thì phái mạnh ít dành thời gian để mua sắm trực tuyến, họ thường không mấy tin tưởng vào những website bán hàng trực tuyến. Do đó thường có thói quen ưu ái lựa chọn những sản phẩm có chất lượng và phong cách đã được kiểm nghiệm, họ đã mặc chúng và thấy hợp, họ sẽ chọn mãi phong cách này. Tuy nhiên, muốn trở thành một quý ông sành điệu, bạn nam nên tập thói quen mua sắm trực tiếp, bởi thói quen này giúp nam giới am hiểu hơn về sản phẩm, xu hướng thời trang hiện có.', '2016-06-03 19:25:07', '2016-06-03 12:25:07'),
(4, '10 Mẹo Vặt Thời Trang Hữu Ích Không Thể Bỏ Qua', '4.jpg', 'Những mẹo thời trang đơn giản, nhưng mang đến hiệu quả không ngờ, chỉ cần một chút khéo léo sẽ giúp bạn "chữa cháy" những vấn đề tranh quần áo một cách nhanh chóng.\r\n1. Dùng rượu vang trắng để tẩy vết rượu vang đỏ dính trên quần áo. \r\n2. Để quần áo bằng lông không bị rụng lông nhiều, hãy gấp lại, cho vào một túi nhựa có khóa và để trong tủ đông lạnh ít nhất ba tiếng. \r\n3. Xịt hỗn hợp gồm một phần rượu vodka và hai phần nước sạch giúp tẩy mùi ẩm mốc trên quần áo cũ. \r\n4. Để tẩy vết trắng do lăn khử mùi còn sót lại trên trang phục, bạn hãy dùng một miếng mút xốp chà nhẹ lên vết bẩn. \r\n5. Lỡ để dầu dính lên túi xách da, bạn chỉ cần dùng phấn em bé thoa lên vết bẩn, để qua đêm cho thấm hút hoàn toàn. Nếu vẫn còn dấu vết, bạn lặp lại việc trên nhiều lần nữa. \r\n6. Nguyên tắc để mặc trang phục trông hở da thịt một chút nhưng vẫn lịch sự: nếu hở phần thân trên, hãy kín đáo phần dưới và ngược lại. \r\n7. Nếu không có thời gian thử quần jeans tại cửa hàng, hãy áp dụng mẹo sau: Lấy một nửa chu vi vòng eo của chiếc quần áp vào chu vi cổ bạn. Nếu vừa khít, khả năng cao chiếc quần sẽ vừa vặn phần eo của bạn.\r\n8. Trong quá trình dọn dẹp tủ quần áo, hãy tự hỏi: "Liệu bạn sẽ mua món đồ này lần nữa nếu có dịp gặp lại?" Nếu trả lời thành thật, bạn có thể thanh lý được đến 25% số quần áo cũ trong tủ của mình. \r\n9. Luôn sắp xếp trang phục theo màu sắc từ sáng đến tối, theo thứ tự từ trái sang phải trong tủ quần áo. Mắt bạn sẽ di chuyển dễ dàng theo màu sắc và lựa chọn tốt hơn. \r\n10. Không nên giặt áo bơi bằng máy giặt vì nó sẽ nhanh chóng mất đi độ đàn hồi và săn chắc. Trừ khi bạn đã mặc nó rất nhiều lần thì có thể giặt máy nhưng sau khi đã cho vào túi giặt riêng. \r\n', '2016-06-03 19:25:14', '2016-06-03 12:25:14');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ord_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `ord_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ord_phone` int(100) NOT NULL,
  `ord_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ord_timeoder` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ord_condition` int(1) NOT NULL,
  `ord_enddate` datetime NOT NULL,
  `ord_total` int(11) NOT NULL,
  `ord_note` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_id`, `customer_id`, `ord_name`, `ord_phone`, `ord_address`, `ord_timeoder`, `ord_condition`, `ord_enddate`, `ord_total`, `ord_note`, `created_at`, `updated_at`) VALUES
(5, 7, 'Phạm Văn Duc', 999999999, '175 Tây Sơn', '2016-06-05 16:42:40', 0, '0000-00-00 00:00:00', 0, '', '2016-06-05 09:42:40', '2016-06-05 09:42:40'),
(6, 8, 'bui nguyên ba', 999999999, '1', '2016-06-05 18:42:03', 0, '0000-00-00 00:00:00', 0, '', '2016-06-05 11:42:03', '2016-06-05 11:42:03'),
(7, 9, '1', 2147483647, '1', '2016-06-06 17:07:00', 0, '0000-00-00 00:00:00', 0, '', '2016-06-06 10:07:00', '2016-06-06 10:07:00'),
(8, 10, '1', 2147483647, '1', '2016-06-06 17:08:42', 0, '0000-00-00 00:00:00', 0, '', '2016-06-06 10:08:42', '2016-06-06 10:08:42'),
(9, 11, 'bui nguyên ba', 1675467069, '123 nghệ an', '2016-06-06 17:26:05', 0, '0000-00-00 00:00:00', 0, '', '2016-06-06 10:26:05', '2016-06-06 10:26:05');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `pro_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_price` int(30) NOT NULL,
  `pro_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_sizeM` int(11) NOT NULL,
  `pro_sizeL` int(11) NOT NULL,
  `pro_sizeS` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `c_id`, `p_id`, `pro_name`, `pro_images`, `pro_code`, `pro_price`, `pro_color`, `pro_sizeM`, `pro_sizeL`, `pro_sizeS`, `created_at`, `updated_at`) VALUES
(2, 1, 0, 'Áo sơ mi nam tay dài thời trang', 'somi4.jpg', 'SM2', 185000, 'xanh lam1', 1, 1, 2, '2016-06-06 19:34:01', '0000-00-00 00:00:00'),
(3, 1, 0, 'Áo sơ mi tay ngắn họa tiết cá tính', 'somi3.jpg', 'SM3', 189000, 'đen', 1, 0, 1, '2016-05-11 08:39:53', '0000-00-00 00:00:00'),
(4, 1, 0, 'Áo sơ mi nam tay ngắn sọc nhỏ thời trang', 'somi4.jpg', 'SM4', 189000, 'Xanh nhạt', 0, 1, 1, '2016-05-11 08:39:53', '0000-00-00 00:00:00'),
(5, 1, 0, 'Áo sơ mi tay ngắn họa tiết cá tính', 'somi5.jpg', 'SM5', 189000, 'xám', 0, 3, 1, '2016-05-11 08:45:03', '2016-05-24 17:00:00'),
(6, 1, 0, 'Áo sơ mi nam tay dài phá cách', 'somi6.jpg', 'SM6', 205000, 'đen', 1, 0, 0, '2016-05-11 08:45:22', '2016-05-01 17:00:00'),
(7, 1, 0, 'Áo sơ mi nam tay dài in hình thời trang', 'somi7.jpg', 'SM7', 205000, ' trắng đen', 1, 1, 1, '2016-05-11 14:20:04', '2016-05-25 17:19:00'),
(8, 1, 0, 'Áo sơ mi nam cổ bo tay dài phong cách', 'somi8.jpg', 'SM8', 250000, 'trắng', 1, 0, 0, '2016-05-11 08:49:02', '2016-05-26 17:00:00'),
(9, 1, 0, 'Áo dài in sọc cổ phong cách', 'somi9.jpg', 'SM9', 215000, 'đen', 1, 0, 0, '2016-05-11 14:19:51', '2016-05-18 07:00:00'),
(10, 1, 0, 'Áo sơ mi nam tay dài phối màu cá tính', 'somi10.jpg', 'SM10', 215000, 'sọc trắng đen', 0, 0, 2, '2016-05-11 10:35:54', '0000-00-00 00:00:00'),
(11, 1, 0, 'Áo sơ mi nam tay dài phối nút cách điệu', 'somi11.jpg', 'SM11', 199000, 'đen', 0, 1, 2, '2016-05-11 10:35:31', '0000-00-00 00:00:00'),
(13, 2, 0, 'Áo thun nam Raglan', 'thun1.jpg', 'TH1', 65000, 'đen', 1, 2, 1, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(14, 2, 0, 'Áo thun nam phối sọc cá tính', 'thun2.jpg', 'TH2', 105000, 'sọc trắng', 0, 1, 1, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(15, 2, 0, 'Áo thun nam tay dài phối sọc cá tính', 'thun3.jpg', 'TH3', 119000, 'sọc đen', 1, 1, 1, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(16, 2, 0, 'Áo thun nam bẻ tay phối sọc cá tính', 'thun4.jpg', 'TH4', 125000, 'trắng', 1, 2, 1, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(17, 2, 0, 'Áo thun nam phối màu HBO thời trang', 'thun5.jpg', 'TH5', 125000, 'sọc trắng đen', 0, 0, 1, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(18, 2, 0, 'Áo thun nam cổ tròn in hình cá thời trang', 'thun6.jpg', 'TH6', 115000, 'đen', 1, 0, 1, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(19, 2, 0, 'Áo thun cổ trụ tay ngắn phối', 'thun7.jpg', 'TH7', 99000, 'xám', 1, 1, 1, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(20, 2, 0, 'Áo thun nam cổ tim ', 'thun8.jpg', 'TH8', 135000, 'xám', 1, 1, 0, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(21, 2, 0, 'Áo thun nam cổ tròn họa tiết lạ mắt', 'thun9.jpg', 'TH9', 115000, 'tím', 1, 1, 1, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(22, 2, 0, 'Áo cổ trụ thêu logo trước ngực thời trang', 'thun10.jpg', 'TH10', 155000, 'xanh dương', 1, 1, 1, '2016-05-11 10:51:28', '0000-00-00 00:00:00'),
(23, 3, 0, 'Áo khoác nam tay xỏ ngón', 'khoac1.jpg', 'K1', 160000, 'xám đen', 1, 1, 2, '2016-05-11 11:14:08', '0000-00-00 00:00:00'),
(24, 3, 0, 'Áo khoác nam phong cách hàn quốc', 'khoac2.jpg', 'K2', 250000, 'đen', 1, 1, 1, '2016-05-11 13:52:34', '0000-00-00 00:00:00'),
(25, 3, 0, 'Áo khoác nam họa tiết cá tính', 'khoac3.jpg', 'K3', 185000, 'than', 1, 2, 0, '2016-05-11 13:52:34', '0000-00-00 00:00:00'),
(26, 3, 0, 'Áo khoác dù nam phối màu', 'khoac4.jpg', 'K4', 225000, 'sọc đen trắng', 0, 2, 0, '2016-05-11 14:03:44', '0000-00-00 00:00:00'),
(27, 3, 0, 'Áo khoác vest thời trang hàn quốc', 'khoac5.jpg', 'K5', 230000, 'cà phê sữa\r\n', 1, 1, 2, '2016-05-11 14:03:44', '0000-00-00 00:00:00'),
(28, 3, 0, 'Áo khoác dù 2 mặt thêu logo', 'khoac6.jpg', 'K6', 230000, 'đen xanh', 1, 3, 2, '2016-06-01 16:20:05', '0000-00-00 00:00:00'),
(29, 3, 0, 'Áo khoác phối túi thêu logo', 'khoac7.jpg', 'K7', 290000, 'đen', 3, 2, 2, '2016-05-11 14:03:44', '0000-00-00 00:00:00'),
(30, 3, 0, 'Áo khoác kaki  thời trang', 'khoac8.jpg', 'K8', 310000, 'đỏ xẫm', 0, 0, 1, '2016-05-11 14:03:44', '0000-00-00 00:00:00'),
(31, 3, 0, 'Áo khoác nam in họa tiết', 'khoac9.jpg', 'K9', 320000, 'đen', 3, 1, 1, '2016-05-11 14:03:44', '0000-00-00 00:00:00'),
(32, 3, 0, 'Áo khoác kaki nam thời trang', 'khoac10.jpg', 'K10', 350000, 'trắng', 0, 1, 1, '2016-05-11 14:03:44', '0000-00-00 00:00:00'),
(33, 3, 0, 'Áo khoác kaki phối túi chéo', 'khoac11.jpg', 'K11', 250000, 'đen', 1, 1, 3, '2016-05-11 14:03:44', '0000-00-00 00:00:00'),
(34, 4, 0, 'Quần jean âu thời trang', 'quanj1.jpg', 'QJ1', 190000, 'trắng', 1, 0, 0, '2016-05-11 14:11:48', '0000-00-00 00:00:00'),
(35, 4, 0, 'Quần jean nam thời trang', 'quanj2.jpg', 'QJ2', 210000, 'nâu', 1, 1, 1, '2016-05-11 14:11:26', '0000-00-00 00:00:00'),
(36, 4, 0, 'Quần jean nam hàn quốc ', 'quanj3.jpg', 'QJ3', 225000, 'đen', 1, 1, 0, '2016-05-11 14:11:26', '0000-00-00 00:00:00'),
(37, 5, 0, 'Quần thể thao nam', 'quantt1.jpg', 'QTT1', 230000, 'đen', 1, 1, 1, '2016-05-11 14:18:40', '0000-00-00 00:00:00'),
(38, 5, 0, 'Quần thể thao nam phong cách teen', 'quantt2.jpg', 'QTT2', 215000, 'xám', 1, 1, 1, '2016-05-11 14:18:40', '0000-00-00 00:00:00'),
(39, 5, 0, 'Quần thể thao nam versace', 'quantt3.jpg', 'QTT3', 250000, 'xanh thẫm', 1, 1, 1, '2016-05-11 14:18:40', '0000-00-00 00:00:00'),
(40, 5, 0, 'Quần thể thao cá tính', 'quantt4.jpg', 'QTT4', 240000, 'đen', 1, 1, 1, '2016-05-11 14:18:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `p_id` int(11) NOT NULL,
  `p_promotion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `fullname`, `address`, `email`, `sodienthoai`, `active`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Bùi Nguyên Ba', '$2y$10$UYLs4FHleKfp/tLIyxfmJepexVjkHNqrUQsH8Ssj61yjmaqWKfDv6', '', 'Ngõ 10, Tôn Thất Tùng, Đống Đa, Hà Nội', 'buinguyenba@gmail.com', '0971315978', 1, 'admin', 'G2MZwKz5Ozke3V2dSwNBAEif5vch6GYSTHSkWk06upyZuVzQP9qxvRm5rGKj', '2016-06-06 18:43:33', '2016-06-06 11:43:33'),
(4, 'Lại Thị Nhạn', '$2y$10$K.l0pR8huKN5s9.vxbEGM.AQY4oQD4UEb4b6jzGYyo1yi9ALDXMnS', '', '', 'laithinhan@gmail.com', '', 1, 'nhanvien', '3VkyoCEk5ZWKPOiIwVevJp4NZaO8z4FwKvavpOoiT0NnLYyEeKS15JkLAGif', '2016-05-11 04:39:05', '2016-05-10 21:39:05'),
(5, 'Phạm Văn Đức', '$2y$10$X9ugUNu2pF5QMj7bMIqgXOHYLgv911Ik/ODEMc.euUEUetJxMPgwu', '', '', 'phamvanduc@gmail.com', '', 1, 'nhanvien', 'KZYQSS7QNWKc4t1C5mznx5TUmrhh4XAEjfy6MhX4VhNck7OC4WFX9s01eo6U', '2016-06-03 16:52:43', '2016-06-03 09:52:43'),
(6, 'Nguyên X', '$2y$10$zC6DJI5KGfTb8ETKRp6rGup.jbK4PQ12q1oXpu0veH5WALHjGU/ri', '', 'Phan Đình Phùng, Hà Tĩnh', 'nguyenx@gmail.com', '0909909009', 1, 'member', '4YoefOKrPQobwDZdCSW3J3oGwZ7TwARqVcvgDae0huHK9IpswRDtJetRuPgr', '2016-06-05 15:44:14', '2016-06-05 08:44:14'),
(7, 'Pham Chuan', '$2y$10$FiDfe1McB7JK1FYf3sfipOkJL48zF2TFJ3cBPL5wzWxfZ9ziqad52', '', '', 'phamchuan@gmail.com', '', 1, 'member', '9ZrRuZwOs5zUv5MchvmdqooGBvIHBqgS1YNbEnIw', '2016-05-11 04:22:16', '2016-05-08 21:03:46'),
(11, 'nguyễn văn đại', '$2y$10$qo92Wt0U8DGtshBNSI6Ftea.fNiCiCgjQawLYr4nUb3fcqOnUi7kS', '', '', 'dai@gmail.com', '', 1, 'member', '7di3VblTjxdtu6xRAisTrVIxQIA3FZMODGAblkc0', '2016-06-06 03:47:39', '2016-06-06 03:47:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `detailoder`
--
ALTER TABLE `detailoder`
  ADD PRIMARY KEY (`det_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`new_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `detailoder`
--
ALTER TABLE `detailoder`
  MODIFY `det_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `new_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
