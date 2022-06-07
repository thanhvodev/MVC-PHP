-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 27, 2022 lúc 12:39 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `gymnasium`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `ID` int(10) UNSIGNED NOT NULL,
  `TITLE` varchar(255) DEFAULT NULL,
  `IMAGE` text DEFAULT NULL,
  `CONTENT` text DEFAULT NULL,
  `TIMESTAMP` datetime DEFAULT NULL,
  `WRITER` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`ID`, `TITLE`, `IMAGE`, `CONTENT`, `TIMESTAMP`, `WRITER`) VALUES
(1, 'Today Is The Best Day To Starting Training. No Excuses', 'https://cdn.shopify.com/s/files/1/0554/5784/1199/articles/blog6_1024x1024.png?v=1639709323', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil. <br/> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.', '2022-03-09 15:18:25', 'Ken'),
(2, 'Fitness is not about being better than someone else', 'https://cdn.shopify.com/s/files/1/0554/5784/1199/articles/blog5_1024x1024.png?v=1639709301', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil. <br/> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.', '2022-03-09 22:34:55', 'Ken'),
(3, 'What Happend at the rx-fitness Chalenge Last Weekend', 'https://cdn.shopify.com/s/files/1/0554/5784/1199/articles/blog3_553c7cb8-982a-4e28-a694-2d2a42e9adb0_1024x1024.png?v=1639709275', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil. <br/> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.', '2022-03-09 22:34:55', 'Ken'),
(4, 'How to exercise effectively', 'https://cdn.shopify.com/s/files/1/0554/5784/1199/articles/blog4_b28dfcca-2a30-4325-824a-02c86a38381f_1024x1024.png?v=1639709240', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil. <br/> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.', '2022-03-09 22:34:55', 'Ken'),
(5, 'How to know enough or not?', 'https://cdn.shopify.com/s/files/1/0554/5784/1199/articles/blog2_f0c4728c-b443-49dd-9abd-44773eb908d4_1024x1024.png?v=1639709221', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil. <br/> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.', '2022-03-09 22:34:55', 'Ken'),
(6, 'Diet when exercising weight loss, science for women', 'https://cdn.shopify.com/s/files/1/0554/5784/1199/articles/blog1_0d29b473-654a-48d5-902d-1ecdfc32efdf_1024x1024.png?v=1639709165', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil. <br/> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.', '2022-03-09 22:34:55', 'Ken');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `event`
--

CREATE TABLE `event` (
  `ID` int(10) UNSIGNED NOT NULL,
  `TITLE` varchar(255) DEFAULT NULL,
  `IMAGE` text DEFAULT NULL,
  `CONTENT` text DEFAULT NULL,
  `TIMESTAMP` datetime DEFAULT NULL,
  `WRITER` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(10) UNSIGNED NOT NULL,
  `USERID` int(11) NOT NULL,
  `PRODUCTID` int(10) UNSIGNED DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `TIMESTAMP` datetime DEFAULT NULL,
  `RATING` int(11) DEFAULT NULL CHECK (`RATING` >= 1 and `RATING` <= 5),
  `CONTENT` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`ID`, `USERID`, `PRODUCTID`, `USERNAME`, `TIMESTAMP`, `RATING`, `CONTENT`) VALUES
(2, 1, 1, 'Thiên', '2021-03-31 00:00:00', 5, 'Sản phẩm tuyệt vời!'),
(3, 1, 2, 'Thiên', '2021-03-31 00:00:00', 5, 'Sản phẩm tuyệt vời!'),
(4, 1, 3, 'Thiên', '2021-03-31 00:00:00', 5, 'Sản phẩm tuyệt vời!'),
(5, 2, 1, 'Quyên', '2022-02-11 00:00:00', 5, 'Sản phẩm tuyệt vời!'),
(6, 2, 2, 'Quyên', '2022-02-11 00:00:00', 5, 'Sản phẩm tuyệt vời!'),
(7, 2, 4, 'Quyên', '2022-02-11 00:00:00', 5, 'Sản phẩm tuyệt vời!'),
(8, 4, 1, 'Chiểu', '2022-06-18 00:00:00', 5, 'Sản phẩm tuyệt vời!'),
(9, 4, 2, 'Chiểu', '2022-06-18 00:00:00', 5, 'Sản phẩm tuyệt vời!'),
(10, 4, 3, 'Chiểu', '2022-06-18 00:00:00', 5, 'Sản phẩm tuyệt vời!'),
(11, 7, 2, 'Uy', '2021-07-30 00:00:00', 5, 'Sản phẩm tuyệt vời!'),
(12, 7, 4, 'Uy', '2021-07-30 00:00:00', 5, 'Sản phẩm tuyệt vời!'),
(13, 7, 1, 'Uy', '2021-07-30 00:00:00', 5, 'Sản phẩm tuyệt vời!'),
(14, 1, 1, 'Thiên', '2023-03-31 00:00:00', 5, 'Sản phẩm tuyệt vời!'),
(15, 8, 4, 'Hà', '2023-03-31 00:00:00', 5, 'Sản phẩm tuyệt vời!'),
(16, 8, 5, 'Hà', '2023-03-31 00:00:00', 5, 'Sản phẩm tuyệt vời!'),
(17, 5, 1, 'Liên', '2022-04-13 00:00:00', 5, 'Sản phẩm tuyệt vời!'),
(18, 1, 1, 'Thiên', '2022-04-30 00:00:00', 5, 'Sản phẩm tuyệt vời!'),
(19, 10, 1, 'Tưởng', '2022-03-13 00:00:00', 5, 'Sản phẩm tuyệt vời!');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderbill`
--

CREATE TABLE `orderbill` (
  `ID` int(10) UNSIGNED NOT NULL,
  `USERID` int(11) NOT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `TIMESTAMP` datetime DEFAULT NULL,
  `ADDRESS` varchar(150) DEFAULT NULL,
  `PAYMENT_METHOD` int(11) DEFAULT NULL CHECK (`PAYMENT_METHOD` = 1 or `PAYMENT_METHOD` = 2 or `PAYMENT_METHOD` = 3)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orderbill`
--

INSERT INTO `orderbill` (`ID`, `USERID`, `USERNAME`, `TIMESTAMP`, `ADDRESS`, `PAYMENT_METHOD`) VALUES
(1, 1, 'Thiên', '2021-03-31 00:00:00', '300 COUNTY ROAD 62 GRANT CO 80448-5013 USA', 2),
(2, 2, 'Quyên', '2022-02-11 00:00:00', '45900 US HIGHWAY 285 GRANT CO 80448-5021 USA', 3),
(3, 4, 'Chiểu', '2022-06-18 00:00:00', 'Xã Hóa Sơn, Huyện Minh Hóa, Quảng Bình', 3),
(4, 4, 'Chiểu', '0202-07-11 00:00:00', 'Xã Hóa Sơn, Huyện Minh Hóa, Quảng Bình', 3),
(5, 7, 'Uy', '2021-07-30 00:00:00', 'Xã Triệu An, Huyện Triệu Phong, Tỉnh Quảng Trị', 1),
(6, 1, 'Thiên', '2023-03-31 00:00:00', '300 COUNTY ROAD 62 GRANT CO 80448-5013 USA', 2),
(7, 8, 'Hà', '2023-03-31 00:00:00', '300 COUNTY ROAD 62 GRANT CO 80448-5013 USA', 3),
(8, 5, 'Liên', '2022-04-13 00:00:00', 'Xã Thanh Tùng, Huyện Đầm Dơi, Cà Mau', 1),
(9, 1, 'Thiên', '2022-04-30 00:00:00', 'Xã Mường Sại, Huyện Quỳnh Nhai, Sơn La', 2),
(10, 10, 'Tường', '2022-03-13 00:00:00', 'Phường Quang Trung, Thành phố Thái Bình, Thái Bình', 1),
(11, 1, 'Thiên', '2021-03-31 00:00:00', '300 COUNTY ROAD 62 GRANT CO 80448-5013 USA', 2),
(12, 2, 'Quyên', '2022-02-11 00:00:00', '45900 US HIGHWAY 285 GRANT CO 80448-5021 USA', 3),
(13, 4, 'Chiểu', '2022-06-18 00:00:00', 'Xã Hóa Sơn, Huyện Minh Hóa, Quảng Bình', 3),
(14, 4, 'Chiểu', '0202-07-11 00:00:00', 'Xã Hóa Sơn, Huyện Minh Hóa, Quảng Bình', 3),
(15, 7, 'Uy', '2021-07-30 00:00:00', 'Xã Triệu An, Huyện Triệu Phong, Tỉnh Quảng Trị', 1),
(16, 1, 'Thiên', '2023-03-31 00:00:00', '300 COUNTY ROAD 62 GRANT CO 80448-5013 USA', 2),
(17, 8, 'Hà', '2023-03-31 00:00:00', '300 COUNTY ROAD 62 GRANT CO 80448-5013 USA', 3),
(18, 5, 'Liên', '2022-04-13 00:00:00', 'Xã Thanh Tùng, Huyện Đầm Dơi, Cà Mau', 1),
(19, 1, 'Thiên', '2022-04-30 00:00:00', 'Xã Mường Sại, Huyện Quỳnh Nhai, Sơn La', 2),
(20, 10, 'Tường', '2022-03-13 00:00:00', 'Phường Quang Trung, Thành phố Thái Bình, Thái Bình', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderitem`
--

CREATE TABLE `orderitem` (
  `ID` int(10) UNSIGNED NOT NULL,
  `USERID` int(11) NOT NULL,
  `ORDERID` int(10) UNSIGNED DEFAULT NULL,
  `PRODUCTID` int(10) UNSIGNED DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `QUANTITY` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orderitem`
--

INSERT INTO `orderitem` (`ID`, `USERID`, `ORDERID`, `PRODUCTID`, `USERNAME`, `QUANTITY`) VALUES
(1, 1, 1, 1, 'Thiên', 100000),
(2, 1, 1, 2, 'Thiên', 15000),
(3, 1, 1, 3, 'Thiên', 10000),
(4, 2, 2, 1, 'Quyên', 100000),
(5, 2, 2, 2, 'Quyên', 100000),
(6, 2, 2, 4, 'Quyên', 100000),
(7, 4, 3, 1, 'Chiểu', 100000),
(8, 4, 3, 2, 'Chiểu', 100000),
(9, 4, 4, 3, 'Chiểu', 100000),
(10, 7, 5, 2, 'Uy', 100000),
(11, 7, 5, 4, 'Uy', 100000),
(12, 7, 5, 1, 'Uy', 100000),
(13, 1, 6, 1, 'Thiên', 100000),
(14, 8, 7, 4, 'Hà', 100000),
(15, 8, 7, 5, 'Hà', 100000),
(16, 5, 8, 1, 'Liên', 100000),
(17, 1, 9, 1, 'Thiên', 100000),
(18, 10, 10, 1, 'Tường', 100000),
(19, 1, 1, 1, 'Thiên', 100000),
(20, 1, 1, 2, 'Thiên', 15000),
(21, 1, 1, 3, 'Thiên', 10000),
(22, 2, 2, 1, 'Quyên', 100000),
(23, 2, 2, 2, 'Quyên', 100000),
(24, 2, 2, 4, 'Quyên', 100000),
(25, 4, 3, 1, 'Chiểu', 100000),
(26, 4, 3, 2, 'Chiểu', 100000),
(27, 4, 4, 3, 'Chiểu', 100000),
(28, 7, 5, 2, 'Uy', 100000),
(29, 7, 5, 4, 'Uy', 100000),
(30, 7, 5, 1, 'Uy', 100000),
(31, 1, 6, 1, 'Thiên', 100000),
(32, 8, 7, 4, 'Hà', 100000),
(33, 8, 7, 5, 'Hà', 100000),
(34, 5, 8, 1, 'Liên', 100000),
(35, 1, 9, 1, 'Thiên', 100000),
(36, 10, 10, 1, 'Tường', 100000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `USERID` int(11) NOT NULL,
  `PRODUCT_NAMES` text DEFAULT NULL,
  `STATUS_O` varchar(255) DEFAULT NULL,
  `TOTAL` varchar(255) DEFAULT NULL,
  `CREATED` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `paymentinfo`
--

CREATE TABLE `paymentinfo` (
  `ID` int(11) NOT NULL,
  `USERID` int(11) NOT NULL,
  `NUMBER` varchar(50) DEFAULT NULL,
  `EXPIRY_DATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `paymentinfo`
--

INSERT INTO `paymentinfo` (`ID`, `USERID`, `NUMBER`, `EXPIRY_DATE`) VALUES
(1, 1, '4024007188241847', '2023-09-01 00:00:00'),
(2, 2, '4485310582205604', '2023-08-25 00:00:00'),
(3, 3, '4539806448152662', '2024-08-04 00:00:00'),
(4, 4, '4916025467478907', '2024-09-24 00:00:00'),
(5, 5, '5155028794156821', '2023-03-31 00:00:00'),
(6, 6, '5273460159537641', '2024-11-18 00:00:00'),
(7, 7, '5292421384877092', '2025-06-06 00:00:00'),
(8, 8, '5236047598419386', '2025-11-05 00:00:00'),
(9, 9, '5445987156629958', '2030-05-06 00:00:00'),
(10, 10, '6011807800358998', '2030-09-08 00:00:00'),
(11, 11, '6011551963528472', '2031-10-05 00:00:00'),
(12, 12, '6011171148644067', '2032-01-13 00:00:00'),
(13, 13, '6011072745140551', '2032-04-13 00:00:00'),
(14, 14, '375603471917763', '2033-02-20 00:00:00'),
(15, 15, '341123376356679', '2033-05-17 00:00:00'),
(16, 16, '344301333695028', '2035-04-03 00:00:00'),
(17, 17, '348519155448889', '2035-11-20 00:00:00'),
(18, 18, '373283340873059', '2037-05-08 00:00:00'),
(19, 19, '4916782846859211', '2037-06-12 00:00:00'),
(20, 20, '4299028768669742', '2037-07-21 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ID` int(10) UNSIGNED NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `TYPE` int(11) DEFAULT NULL CHECK (`TYPE` = 1 or `TYPE` = 2),
  `DESCRIPTION` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ID`, `NAME`, `TYPE`, `DESCRIPTION`) VALUES
(1, 'Ngũ cốc ăn kiêng Granola', 1, '<b>GRANOLA LÀ GÌ?</b><br>\nNếu bún, phở, xôi là món ăn sáng quen thuộc của chúng ta – những con dân Việt Nam, thì granola là món ăn quen thuộc vào buổi sáng của người Mỹ.<br>\n<b>THÀNH PHẦN DINH DƯỠNG CỦA NGŨ CỐC GRANOLA GỒM NHỮNG GÌ?</b><br>\nThành phần chính gồm 7 loại: yến mạch, hạnh nhân, hạt bí xanh, hạt điều, nho khô, mơ khô, dừa khô, mật ong\nVị thanh lạt của yến mạch, ngọt dịu của mật ong, béo bùi của hạnh nhân, hạt bí, hạt điều và một chút nhấn từ nho khô và mơ sấy tạo ra một sự pha trộn tinh tế cho bữa ăn thêm ngon miệng.<br>\nGranola được biết đến như một thực phẩm lành mạnh, chứa hàm lượng chất dinh dưỡng cao và cực giàu protein.<br>\nKhi đến với xu hướng ăn uống lành mạnh và ăn sạch (Eat Clean), chúng ta luôn được khuyên dùng granola cho bữa ăn sáng, ăn xế hoặc ăn vặt như snack của mình.<br>\n\n<b>LỢI ÍCH TO LỚN CỦA GRANOLA ĐỐI VỚI SỨC KHỎE CHÚNG TA</b><br>\n<b>Hàm lượng chất xơ cao</b><br>\nSở dĩ hàm lượng chất xơ cao là bởi vì nguyên liệu chính của granola chính là yến mạch và hạt dinh dưỡng.\nGiàu chất xơ trong Granola sẽ giúp ích rất nhiều cho đường ruột của chúng ta, phòng ngừa táo bón và giúp chúng ta no lâu hơn, tránh cảm giác thèm ăn của bạn. Ngoài ra, chất xơ còn giúp giảm đường và cholesterol trong máu.<br>\n<b>Nguồn năng lượng tuyệt vời cho cơ thể</b><br>\nNguồn năng lượng chủ yếu mà granola mang lại chính là từ hàm lượng protein cao. Cứ 1g protein cung cấp cho cơ thể 4 calo.\nChính vì thế, bữa sáng với granola cùng sữa tươi hoặc sữa chua là đủ năng lượng cho bạn bắt đầu một ngày mới.<br>\n<b>Giàu vitamin và khoáng chất</b><br>\nHạt dinh dưỡng là một nguồn các vitamin và khoáng chất thiết yếu cho cơ thể chúng ta như vitamin E, A, C, B6, thiamin, folate hay sắt, kẽm, magie, photpho, canxi, selen,…. '),
(2, 'Bánh Biscotti Cela', 1, 'Bánh biscotti Cela là bánh ngũ cốc ăn kiêng, bữa phụ chuẩn eat clean dành cho cánh chị em giảm cân.'),
(3, 'Set Seamless Clothes', 2, 'Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information'),
(4, 'Fitness Mad Light Blue', 2, 'Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information'),
(5, 'Whey Protein', 1, 'Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information'),
(6, 'Protein Bar', 1, 'Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information'),
(7, 'Resistance Band', 2, 'Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information Automatic reading company introduction of text information'),
(8, 'Bánh Biscotti Trà Xanh', 1, '💥 <b>THÔNG TIN SẢN PHẨM BISCOTTI</b><br>\n- Hương vị thơm, ngon, giòn và bổ dưỡng từ công thức đặc biệt của nhiều năm nghiên cứu phát triển.<br>\n- Thành phần : hạnh nhân, bí xanh, nam việt quốc, hạt chia, nho khô, trà xanh, trứng gà, mật ong. <br>\n- Bảo quản: nơi khô ráo, tránh ánh nắng trực tiếp.<br>\n- Cam kết : 100% mật ong rừng.<br>\n- Bánh Biscotti ăn kiêng của Vua Yến Mạch được kết hợp từ các nguyên liệu sạch, nhiều chất dinh dưỡng với công thức được nghiên cứu trong thời gian dài đã tạo ra một vị bánh rất riêng - NGỌT BÙI, NGON, GIÒN, XỐP không bị trộn lẫn đối với vô số loại bánh được bán tràn lan mang tên BISCOTTI trên thị trường.<br>'),
(9, 'Muối hồng Himalaya', 1, 'Muối hồng Himalaya sản xuất từ mỏ muối Khewra, nằm gần dãy Himalaya ở Pakistan. Mỏ muối Khewra là một trong những mỏ muối lớn nhất và lâu đời nhất thế giới.\r\n\r\nLượng muối hồng trong mỏ muối Khewra được cho là đã hình thành từ hàng triệu năm trước do sự bốc hơi của nước biển. Muối hồng có màu sắc khá giống với muối đỏ (muối diêm) nên thường bị nhiều người nhầm lẫn. Tuy nhiên hai loại muối này là khác nhau.\r\n\r\nMuối hồng được sản xuất hoàn toàn bằng tay và hạn chế tối đa việc thêm phụ gia để thành một sản phẩm chưa tinh chế, hoàn toàn tự nhiên.\r\n\r\nDo quy trình khai thác tự nhiên nên đã giúp cho muối hồng Himalaya có nhiều khoáng chất và nguyên tố vi lượng khác không được tìm thấy trong muối ăn thông thường. Sắt có nhiều trong muối nên làm cho muối có màu hồng đặc trưng.\r\n\r\nCác mỏ muối hồng thường nằm sâu hàng trăm mét dưới lòng đất, nên để tiếp cận chúng người ta cũng phải đào các hầm mỏ với độ sâu tương đương. Chính vì thế, giá của muối hồng cũng cao hơn rất nhiều so với muối thông thường.'),
(10, 'Nui Gạo Lứt', 1, 'Nui thường được sử dụng trong các món ăn đậm chất truyền thống của người Việt.<br>\r\nSản phẩm được làm từ các thành phần nguyên liệu tự nhiên, không sử dụng phụ gia độc hại và an toàn tuyệt đối cho sức khỏe người tiêu dùng. Được sản xuất theo công nghệ hiện đại, quy trình sản xuất khép kín, giám sát nghiêm ngặt, để tạo ra những cọng nui dai ngon, mang màu đặc trưng của gạo lứt....Sản phẩm giúp cung cấp hàm lượng tinh bột, protein đáng kể và cung cấp nguồn năng lượng dồi dào cho cơ thể hoạt động suốt ngày dài.<br>\r\nHướng dẫn sử dụng:<br>\r\n- Đun sôi khoảng 1-3 lít nước (tùy theo khối lượng gói nui), cho nui vào nước đang sôi, nấu khoảng 9-18 phút, thỉnh thoảng khuấy đều và thử xem nui đã chín đều chưa. Khi nui vừa chín thì vớt ra đem xả nước lạnh rồi để ráo nước.<br>\r\n- Cho 1 muỗng dầu ăn vào nui rồi trộn đều để nui không dính vào nhau. Sau đó chế biến thành các món ăn tùy thích.<br>\r\nThông tin dinh dưỡng & thành phần:<br>\r\nThành phần: Gạo lứt, tinh bột khoai mì, bột mì, muối,....'),
(11, 'Hạt chia đen', 1, 'Hạt chia có thể sử dụng được trong nhiều trường hợp, sử dụng kèm với nhiều món ăn như:<br>\n- Rắc lên các món ăn như Trứng ốp la, bánh mỳ nướng, thịt nướng, các món salad. <br>\n- Cho vào các loại đồ uống, nước trái cây, sinh tố, sữa chua.<br>\n- Dùng với cháo, súp. <br>\n- Có thể ăn trực tiếp.'),
(12, 'Táo Đỏ Hàn Quốc', 1, 'Táo Đỏ Hàn Quốc thượng hạng sấy khô đặc biệt loại 1 hộp 350gr Healthy Food.<br>Táo đỏ còn có tên gọi khác là hồng táo được nhập từ Hàn Quốc, quả to, màu đỏ đẹp, thơm nhẹ và có vị ngọt đậm tự nhiên là thực phẩm organic vô cùng chất lượng.<br>\nTrong đông y, táo đỏ là loại thực phẩm rất giàu dinh dưỡng, bổ sung sắt cho thai phụ, chống lão hóa da, tăng cường nội tiết tố phụ nữ tuổi tiền mãn kinh.<br>\nNghiên cứu đã chứng minh táo đỏ có lợi cho dạ dày, bổ sung khí huyết và giúp nhuận phổi. Chứa nhiều vitamin C và E giúp da của ng sử dụng tươi sáng và đẹp hơn, chống lại sự hình thành các vết nám, sạm. <br>\nSản phẩm được đóng gói đẹp mắt, sang trọng nên làm quà tặng biếu người thân thì quá tuyệt vời. <br>\nTáo đỏ có tính giữ nhiệt, giàu chất dinh dưỡng, bởi chứa các thành phần như: prôtêin, lipit, đường, canxi, phốt pho, sắt, và nhiều loại vitamin A, C, B1, B2, carotene… <br>\nDân gian thường nói “Ngày ngày ăn táo đỏ, trẻ mãi không già”. Táo đỏ không chỉ là loại quả mà nhiều người thích ăn mà còn là liều thuốc tránh được các bệnh liên quan tới tỳ, gan, dạ dày, thần kinh, khí huyết, da, tốt cho tiêu hóa... <br>\nThích hợp cho người bị mỡ máu. Bổ gan, tăng cường cơ bắp, hạ huyết áp, an thần dễ ngủ, hạn chế sự phát triển của tế bào ung thư, tiêu đờm, giảm ho, cải thiện dinh dưỡng cơ tim. Tăng cường trí nhớ.<br>'),
(13, 'Bơ đậu phộng không đường', 1, '<b>CÔNG DỤNG CỦA BƠ ĐẬU PHỘNG</b><br>\n- Bơ đậu phộng chứa thành phần dinh dưỡng đa dạng như chất béo tốt cho cơ thể, protein, carbohydrate.<br>\n- Nguồn Protein thực vật dồi dào.<br>\n- Cung cấp năng lượng, hỗ trợ ăn kiêng nhờ chất béo và các vitamin, khoáng chất trong hạt điều.<br>\n- Chất xơ giúp tốt cho tiêu hoá.<br>\n- Cung cấp chất béo cần thiết, tốt cho tim mạch.<br>\n- Nguồn chất chống oxy hóa tuyệt vời, giúp đẹp dáng, cải thiện làn da và tóc.<br>\n- Chất béo, protein trong bơ hạt điều giúp giảm cảm giác thèm ăn, tạo cảm giác no lâu.<br>');


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productcategory`
--

CREATE TABLE `productcategory` (
  `ID` int(10) UNSIGNED NOT NULL,
  `CATEGORY` varchar(20) NOT NULL,
  `PRICE` int(11) DEFAULT NULL,
  `QUANTITY` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `productcategory`
--

INSERT INTO `productcategory` (`ID`, `CATEGORY`, `PRICE`, `QUANTITY`) VALUES
(1, '150g', 107000, 100),
(1, '250g', 188000, 100),
(1, '500g', 249000, 100),
(2, 'Vị matcha', 150000, 100),
(2, 'Vị socola', 150000, 100),
(2, 'Vị truyền thống', 150000, 100),
(3, 'Size L', 250000, 100),
(3, 'Size M', 250000, 100),
(3, 'Size S', 250000, 100),
(4, 'Màu xanh', 180000, 100),
(5, '250g', 300000, 100),
(6, '100g', 100000, 100),
(7, 'High Level', 70000, 100),
(7, 'Low Level', 50000, 100),
(7, 'Medium Level', 60000, 100),
(8, '250g', 219000, 30),
(9, '1kg', 229000, 100),
(9, '500g', 129000, 50),
(11, '400g', 115000, 100),
(11, '750g', 188000, 129),
(12, '350g', 99000, 100),
(13, '100g', 50000, 120),
(13, '230g', 75000, 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productimage`
--

CREATE TABLE `productimage` (
  `ID` int(10) UNSIGNED NOT NULL,
  `IMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `productimage`
--

INSERT INTO `productimage` (`ID`, `IMAGE`) VALUES
(1, 'https://product.hstatic.net/200000378871/product/granola_bbe831e4e311455eb78b407c490ffeec_master.jpg'),
(1, 'https://product.hstatic.net/200000378871/product/upload_70fa01d5b0b0439f940808f9dcd3a6f7_master.jpg'),
(1, 'https://product.hstatic.net/200000378871/product/vua_yen_mach0299_fn_143c28faedb1459a9eb5b10726ea2274_master.jpg'),
(2, 'https://aromagarden.net/wp-content/uploads/2020/06/banh-biscotti-cela.jpg '),
(3, 'https://image.made-in-china.com/202f0j00hRpUqEAIaeuj/2-Piece-Set-Seamless-Gym-Clothes-Women-Workout-Clothing-Yoga-Set-Sports-Suit-Female-Fitness-Clothing.jpg'),
(4, 'https://cdn11.bigcommerce.com/s-b12o4d3w60/images/stencil/1280x1280/products/1595/2140/FM-FMATNBRSF_BLU_2__46644.1601379296.jpg?c=2'),
(5, 'https://sc04.alicdn.com/kf/Hbecce8deef424ee786dd036a5a3acbdab.jpg '),
(6, 'https://product.hstatic.net/1000085429/product/alnatura_500gr_1024x1024.jpg '),
(7, 'https://cf.shopee.ph/file/4b0e13e075cdbf2b4d2f16993b79f906 '),
(8, 'https://product.hstatic.net/200000378871/product/2_f12a454485c04f15b9da4ed19780f4c0_master.png'),
(8, 'https://product.hstatic.net/200000378871/product/upload_11068af392f24e3fa285af2d854aa02b_master.jpg'),
(9, 'https://product.hstatic.net/200000378871/product/6_2b88e106856b4ba8b914f27c1aeff4e3_master.png'),
(9, 'https://product.hstatic.net/200000378871/product/upload_dc4effffb36e4e218f5ac38d5923e3f5_master.jpg'),
(11, 'https://product.hstatic.net/200000378871/product/11_e4503316b519487b9db051b19b68fe55_master.png'),
(11, 'https://product.hstatic.net/200000378871/product/upload_1d9dff67d71a4573b7e7d457cfb0133c_master.jpg'),
(12, 'https://product.hstatic.net/200000378871/product/15_9bf3ffee5b034ad8b781113c44a1caaa_master.png'),
(12, 'https://product.hstatic.net/200000378871/product/upload_7824561b430a4a64a6147f8584867c87_master.jpg'),
(13, 'https://cf.shopee.vn/file/9705609b4d5431791a1302c5986cdaf5');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(320) DEFAULT NULL,
  `PHONENUM` varchar(20) DEFAULT NULL,
  `IMAGE` text DEFAULT NULL,
  `ADDRESS` varchar(150) DEFAULT NULL,
  `PERMISSION` int(11) DEFAULT NULL CHECK (`PERMISSION` = 0 or `PERMISSION` = 1 or `PERMISSION` = -1)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `USERNAME`, `PASSWORD`, `FULLNAME`, `EMAIL`, `PHONENUM`, `IMAGE`, `ADDRESS`, `PERMISSION`) VALUES
(1, 'Thiên', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Đức Quang Thiên', 'ducquangthien107@facebook.com', '089 579 0132', 'profile_picture.jpg', '300 COUNTY ROAD 62 GRANT CO 80448-5013 USA', 1),
(2, 'Quyên', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Lục Bích Quyên', 'lucbichquyen420@naver.com', '0123456789', 'profile_picture.jpg', '45900 US HIGHWAY 285 GRANT CO 80448-5021 USA', 0),
(3, 'Huệ', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Xung Minh Huệ', 'xungminhhue624@microsoft.com', '0123456789', 'profile_picture.jpg', '50400 US HIGHWAY 285 GRANT CO 80448-5029 USA', 0),
(4, 'Chiểu', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Khâu Huy Chiểu', 'khauhuychieu888@gmail.com', '077 968 1703', 'profile_picture.jpg', '3700  COUNTY ROAD 62 GRANT CO 80448-1000 USA\r\n', 0),
(5, 'Liên', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Lục Thúy Liên', 'lucthuylien389@naver.com', '076 458 0176', 'profile_picture.jpg', 'Xã Thanh Tùng, Huyện Đầm Dơi, Cà Mau', 0),
(6, 'Mẫn', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Huỳnh Thanh Mẫn', 'huynhthanhman626@icloud.com', '090 940 3217', 'profile_picture.jpg', 'Xã Hóa Sơn, Huyện Minh Hóa, Quảng Bình', 0),
(7, 'Uy', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Ưng Gia Uy', 'unggiauy596@hotmail.com', '099 371 8654', 'profile_picture.jpg', 'Xã Mường Sại, Huyện Quỳnh Nhai, Sơn La', 0),
(8, 'Hà', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Sái Quang Hà', 'saiquangha2@yahoo.com', '084 129 3056', 'profile_picture.jpg', 'Xã Tiến Thắng, Huyện Lý Nhân, Hà Nam\r\n', 0),
(9, 'Ngọc', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Viêm Vân Ngọc', 'viemvanngoc668@naver.com', '035 820 1649', 'profile_picture.jpg', 'Xã Nghĩa Đồng, Huyện Nghĩa Hưng, Nam Định', 0),
(10, 'Tường', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Khai Thế Tường', 'khaithetuong589@yahoo.com', '078 843 2915', 'profile_picture.jpg', 'Phường Quang Trung, Thành phố Thái Bình, Thái Bình', 0),
(11, 'Thi', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Phú Uyên Thi', 'phuuyenthi595@yahoo.com', '038 105 3284', 'profile_picture.jpg', 'Xã Hòa Điền, Huyện Kiên Lương, Kiên Giang\r\n', 0),
(12, 'Uyển', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Nông Nguyệt Uyển', 'nongnguyetuyen751@naver.com', '099 967 8351', 'profile_picture.jpg', 'Xã Vĩnh Thạnh Trung, Huyện Châu Phú, An Giang', 0),
(13, 'Quảng', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Lý Ðình Quảng', 'lyinhquang37@google.com', '086 718 9563', 'profile_picture.jpg', 'Xã Chu Hương, Huyện Ba Bể, Bắc cạn', 0),
(14, 'Huy', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Liên Nhật Huy', 'liennhathuy613@facebook.com', '032 248 0961', 'profile_picture.jpg', 'Xã Hữu Lợi, Huyện Yên Thủy, Hoà Bình', 0),
(15, 'Hoa', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Khuất Tuyết Hoa', 'khuattuyethoa839@google.com', '078 694 7315', 'profile_picture.jpg', 'Phường Cầu Kho, Quận 1, Hồ Chí Minh (tphcm)', 0),
(16, 'Siêu', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Phú Ðức Siêu', 'phuucsieu960@icloud.com', '036 104 5932', 'profile_picture.jpg', 'Xã Ea Na, Huyện Krông A Na, Đắc Lắc', 0),
(17, 'Hào', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Ca Công Hào', 'caconghao52@microsoft.com', '056 063 2879', 'profile_picture.jpg', '300 COUNTY ROAD 62 GRANT CO 80448-5013 USA', 0),
(18, 'Như', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Thang Tịnh Như', 'thangtinhnhu268@microsoft.com', '034 032 4175', 'profile_picture.jpg', 'Xã Tân Trung, Thị xã Gò Công, Tiền Giang', 0),
(19, 'Khanh', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Diệp Mai Khanh', 'diepmaikhanh112@google.com', '082 472 5930', 'profile_picture.jpg', 'Thị trấn Chùa Hang, Huyện Đồng Hỷ, Thái Nguyên', 0),
(20, 'Cường', '$2y$10$hkz2JrolzkIVA6CZrN9XyetWzcN1IDihh8vnH73o7XxNRGyHNG3qm', 'Quán Hùng Cường', 'quanhungcuong325@facebook.com', '084 640 3751', 'profile_picture.jpg', 'Xã Đắk Cấm, Thành phố Kon Tum, Kon Tum\r\n', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PRODUCTID` (`PRODUCTID`),
  ADD KEY `USERID` (`USERID`);

--
-- Chỉ mục cho bảng `orderbill`
--
ALTER TABLE `orderbill`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USERID` (`USERID`);

--
-- Chỉ mục cho bảng `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ORDERID` (`ORDERID`),
  ADD KEY `USERID` (`USERID`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `paymentinfo`
--
ALTER TABLE `paymentinfo`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USERID` (`USERID`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`ID`,`CATEGORY`);

--
-- Chỉ mục cho bảng `productimage`
--
ALTER TABLE `productimage`
  ADD PRIMARY KEY (`ID`,`IMAGE`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `event`
--
ALTER TABLE `event`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `orderbill`
--
ALTER TABLE `orderbill`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `paymentinfo`
--
ALTER TABLE `paymentinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`PRODUCTID`) REFERENCES `product` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`USERID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `orderbill`
--
ALTER TABLE `orderbill`
  ADD CONSTRAINT `orderbill_ibfk_1` FOREIGN KEY (`USERID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `orderitem`
--
ALTER TABLE `orderitem`
  ADD CONSTRAINT `orderitem_ibfk_1` FOREIGN KEY (`ORDERID`) REFERENCES `orderbill` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderitem_ibfk_2` FOREIGN KEY (`USERID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `paymentinfo`
--
ALTER TABLE `paymentinfo`
  ADD CONSTRAINT `paymentinfo_ibfk_1` FOREIGN KEY (`USERID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `productcategory`
--
ALTER TABLE `productcategory`
  ADD CONSTRAINT `productcategory_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `product` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `productimage`
--
ALTER TABLE `productimage`
  ADD CONSTRAINT `productimage_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `product` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
