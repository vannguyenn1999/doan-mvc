-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2022 lúc 05:14 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php0722_apple123`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

CREATE TABLE `accounts` (
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `accounts`
--

INSERT INTO `accounts` (`name`, `username`, `password`, `email`, `phone`, `address`, `create_at`) VALUES
('tưởng thảo', 'mid0203', 'e10adc3949ba59abbe56e057f20f883e', 'mid0203@gmail.com', '0965969085', 'hà nội', '2022-10-25 05:31:34'),
('văn nguyễn ', 'Vannguyenn99', 'e10adc3949ba59abbe56e057f20f883e', 'vannguyenn2809@gmail.com', '0965969085', 'hà nội', '2022-10-25 05:31:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_system`
--

CREATE TABLE `admin_system` (
  `username_admin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_admin` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_system`
--

INSERT INTO `admin_system` (`username_admin`, `password_admin`, `name`) VALUES
('admin', 'admin', 'admin'),
('admintesst', 'admintesst', 'qq'),
('qqqqqqqqqq', 'qqqqqqqqqq', 'qqqqqqqqqq'),
('qqqqqqqqqq1', 'qqqqqqqqqq', 'qq');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang_hieu`
--

CREATE TABLE `bang_hieu` (
  `id` int(10) NOT NULL,
  `anh` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `idCT` int(11) NOT NULL,
  `ma_don_hang` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_san_pham` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_san_pham` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong` int(5) NOT NULL,
  `gia` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanh_tien` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_don_hang`
--

INSERT INTO `chi_tiet_don_hang` (`idCT`, `ma_don_hang`, `ma_san_pham`, `ten_san_pham`, `so_luong`, `gia`, `thanh_tien`, `create_at`) VALUES
(12, '08112022-1413', 'SP001', 'Iphone 14 Pro Max ', 1, '30000000', '30000000', '2022-11-08 07:13:24'),
(13, '08112022-1414', 'SP003', 'xiaomi mi 12 pro max', 1, '10000000', '10000000', '2022-11-08 07:14:22'),
(14, '08112022-1414', 'SP007', 'Nokia G11 Plus', 1, '9000000', '9000000', '2022-11-08 07:14:22'),
(15, '08112022-1533', 'SP004', 'samsung s22 ultra', 1, '23000000', '23000000', '2022-11-08 08:33:40'),
(16, '09112022-0815', 'SP005', 'Samsung Galaxy S21 Ultra 5G ', 2, '20000000', '40000000', '2022-11-09 01:15:06'),
(17, '09112022-0815', 'SP001', 'Iphone 14 Pro Max ', 1, '30000000', '30000000', '2022-11-09 01:15:06'),
(20, '09112022-1536', 'SP019', ' Samsung Galaxy Z Flip4 5G', 1, '23000000', '23000000', '2022-11-09 08:36:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `ma_don_hang` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_nguoi_dat` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_nguoi_nhan` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_nguoi_nhan` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dc_nguoi_nhan` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phuong_thuc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tong` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`ma_don_hang`, `ten_nguoi_dat`, `email_nguoi_nhan`, `sdt_nguoi_nhan`, `dc_nguoi_nhan`, `ghi_chu`, `phuong_thuc`, `tong`, `trang_thai`, `create_at`) VALUES
('08112022-1410', 'qưe', 'vannguyenn2809@gmail.com', '213213', '12321', '3213213', 'COD', '30000000', 'đã xử lý', '2022-11-09 08:29:49'),
('08112022-1413', 'qưe', 'vannguyenn2809@gmail.com', '213213', '12321', '3213213', 'COD', '30000000', 'đã xử lý', '2022-11-09 08:29:49'),
('08112022-1414', 'Nguyễn Hoa Văn', 'mid0203@gmail.com', '3123213', 'tổ 4 - phú lãm -hà đông - hà nội', '123', 'COD', '19000000', 'đã xử lý', '2022-11-09 08:29:49'),
('08112022-1533', 'mid', 'mid0203@gmail.com', '0528448515', 'hà nội ', 'chuyển nhanh', 'COD', '23000000', 'đã xử lý', '2022-11-09 08:29:49'),
('09112022-0815', 'mimosa', 'mid0203@gmail.com', '0528448515', 'hà nội ', 'ship trong ngày', 'COD', '70000000', 'chờ xử lý', '2022-11-09 08:29:59'),
('09112022-1536', 'tưởng vân', 'van123@gmail.com', '0123456789', 'hải dương', 'hoả tốc pls', 'Trực Tuyến', '23000000', 'đã xử lý', '2022-11-13 03:12:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kieu`
--

CREATE TABLE `kieu` (
  `id_kieu` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thong_tin` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kieu`
--

INSERT INTO `kieu` (`id_kieu`, `thong_tin`, `create_at`) VALUES
('Điện thoại', '', '2022-10-28 14:40:50'),
('Ipad', '', '2022-10-28 14:40:50'),
('Laptop', '', '2022-10-28 14:40:50'),
('Phụ kiện', '', '2022-10-28 14:40:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_hieu`
--

CREATE TABLE `nhan_hieu` (
  `ten_nhan_hieu` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thong_tin` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhan_hieu`
--

INSERT INTO `nhan_hieu` (`ten_nhan_hieu`, `thong_tin`, `create_at`) VALUES
('Iphone', ' Phân khúc cao cấp', '2022-10-25 02:50:46'),
('Nokia', ' Máy bần ', '2022-10-25 02:50:46'),
('Oppo', ' Máy cùi', '2022-10-25 02:50:46'),
('Samsung', ' Phân khúc tầm trung ', '2022-10-28 14:30:17'),
('ViVo', 'máy giá rẻ', '2022-10-25 02:50:46'),
('Xiaomi', ' Phân khúc tầm trung , nhưng chất', '2022-10-28 14:55:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_san_pham` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_san_pham` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kieu` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_nhan_hieu` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thong_tin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`ma_san_pham`, `ten_san_pham`, `anh`, `so_luong`, `id_kieu`, `ten_nhan_hieu`, `thong_tin`, `gia`, `create_at`) VALUES
('ip-8', 'Iphone 8', '1667530452-product-samsung-galaxy-z-fold-3-silver-1-600x600.jpg', '5', 'Ipad', 'Xiaomi', 'Dù đã ra mắt từ nhiều năm trước, iPhone 8 Plus vẫn là chiếc điện thoại đáng để trải nghiệm. Mặc dù vẫn sở hữu thiết kế cũ qua nhiều năm nhưng iPhone 8 PLus lại có sự nâng cấp đáng kể về hiệu năng, màn hình và camera được nâng cấp đáng kể. Nếu bạn muốn mua trả góp iPhone 8 Plus thì Shop 123 đang hỗ trợ khách hàng tham gia chương trình trả góp với thủ tục đơn giản và thời gian duyệt hồ sơ nhanh chóng.', '5000000', '2022-11-04 02:54:12'),
('SP001', 'Iphone 14 Pro Max ', '2ed1bfecbbac9620b159ce5c0885f2d3.jpg', '4', 'Điện thoại', 'Iphone', 'máy mới chất lượng cao sang trọng', '30000000', '2022-11-09 02:04:33'),
('SP002', 'Iphone 12 Pro Max ', 'iphone-12-pro-max-xam-new-600x600-200x200.jpg', '5', 'Điện thoại', 'Iphone', 'máy mới 100%', '23000000', '2022-11-09 01:36:37'),
('SP003', 'xiaomi mi 12 pro max', 'Xiaomi-Redmi-Note-12-Pro-Max.jpg', '13', 'Điện thoại', 'Xiaomi', 'máy thuộc phân khúc tầm trung', '10000000', '2022-10-14 11:54:52'),
('SP004', 'samsung s22 ultra', 'Galaxy-S22-Ultra-Black-600x600.jpg', '5', 'Điện thoại', 'Iphone', 'máy hàn quốc', '23000000', '2022-11-09 01:36:47'),
('SP005', 'Samsung Galaxy S21 Ultra 5G ', 'samsung-galaxy-s21-ultra-bac-600x600-1-200x200.jpg', '5', 'Điện thoại', 'Samsung', 'máy tốt', '20000000', '2022-10-14 11:54:52'),
('SP006', 'Xiaomi Redmi Note 11', 'Xiaomi-redmi-note-11-blue-600x600.jpg', '6', 'Điện thoại', 'Xiaomi', 'Redmi Note 11 (6GB/128GB) vừa được Xiaomi cho ra mắt, được xem là chiếc smartphone có giá tầm trung ấn tượng, với 1 cấu hình mạnh, cụm camera xịn sò, pin khỏe, sạc nhanh mà giá lại rất phải chăng.', '5290000', '2022-10-14 11:54:52'),
('SP007', 'Nokia G11 Plus', 'nokia-g11-plus-xanh-thumb-600x600.jpg', '7', 'Điện thoại', 'Nokia', 'máy bền', '9000000', '2022-10-14 11:54:52'),
('SP008', 'Nokia C21 Plus', 'nokia-c21-plus-600x600.jpg', '3', 'Điện thoại', 'Nokia', '?', '5000000', '2022-10-14 11:54:52'),
('SP009', 'Oppo A93', 'a93-8gb128gb_main_618_1020.png.webp', '6', 'Điện thoại', 'Oppo', 'camera chụp ảnh siêu đẹp', '9000000', '2022-10-14 11:54:52'),
('SP010', 'OPPO Reno7', 'OPPO-Reno7-4G-Thumb-cam-1-600x600.jpg', '7', 'Điện thoại', 'Oppo', 'máy rẻ', '5000000', '2022-10-14 11:54:52'),
('SP011', ' iPhone 11', 'iphone-xi-xanhla-600x600.jpg', '10', 'Điện thoại', 'Iphone', ' iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.', '11990000', '2022-10-14 11:54:52'),
('SP012', 'Xiaomi Redmi A1', 'Xiaomi-Redmi-A1-green-thumb-600x600.jpg', '5', 'Điện thoại', 'Xiaomi', 'Xiaomi Redmi A1 Xanh Lá được mở bán với mức giá cực kỳ ưu đãi dành cho người dùng nhằm mang lại những trải nghiệm tốt hơn trên các thiết bị giá rẻ, tích hợp bên trong là một viên pin có dung lượng lớn cùng màn hình đủ lớn để bạn có thể thỏa thích xem phim ', '2190000', '2022-10-14 11:54:52'),
('SP013', 'Samsung Galaxy A53 5G', 'Samsung-Galaxy-A53-xanh-thumb-600x600.jpg', '5', 'Điện thoại', 'Samsung', 'Samsung Galaxy A53 5G 128GB trình làng với một thiết kế hiện đại, hiệu năng ổn định cùng một màn hình hiển thị sắc nét', '10000000', '2022-11-09 01:37:03'),
('SP014', 'Samsung Galaxy A23 6GB', 'samsung-galaxy-a23-xanh-thumb-600x600.jpg', '7', 'Điện thoại', 'Iphone', 'Được Samsung cho ra mắt vào 03/2022 - Samsung Galaxy A23 6GB có một thiết kế trẻ trung cùng bộ thông số kỹ thuật khá ấn tượng trong tầm giá, đáp ứng nhu cầu sử dụng cả ngày một cách ổn định nhờ trang bị chipset đến từ nhà Qualcomm và một viên pin dung lượng', '6190000', '2022-10-14 11:54:52'),
('SP015', 'Samsung Galaxy A33 5G 6GB', 'samsung-galaxy-a33-5g-xanh-thumb-600x600.jpg', '5', 'Điện thoại', 'Samsung', 'Samsung Galaxy A33 5G 6GB ra mắt vào ngày 17/03, được xem là bản cập nhật khá lớn so với thế hệ tiền nhiệm Galaxy A32 về thiết kế đến thông số kỹ thuật bên trong, nhằm mang đến vẻ ngoài đẹp mắt cũng như cạnh tranh trực tiếp ở phần hiệu năng đối với các đối thủ cùng phân khúc giá', '7290000', '2022-11-09 01:37:14'),
('SP016', 'VIVO V25E', 'vivo-v25e-vang-thumb-1-2-600x600.jpg', '9', 'Điện thoại', 'ViVo', 'hàng mới về chất lượng\r\n', '8490000', '2022-10-14 11:54:52'),
('SP017', 'OPPO Reno8 Pro 5G', 'oppo-reno8-pro-thumb-xanh-1-600x600.jpg', '5', 'Điện thoại', 'Oppo', 'OPPO Reno8 Pro 5G ra mắt với sự đột phá về phần camera khi đây là thiết bị đầu tiên thuộc dòng Reno được tích hợp NPU MariSilicon X, được xem là NPU cao cấp nhất đến từ OPPO (2022) có khả năng xử lý hình ảnh đỉnh cao. ', '1899000', '2022-10-14 11:54:52'),
('SP018', 'Samsung Galaxy Z Fold3 5G', 'samsung-galaxy-z-fold-3-silver-1-600x600.jpg', '6', 'Điện thoại', 'Samsung', 'Sản phẩm sẽ là một “cú hit” của Samsung góp phần mang đến những trải nghiệm mới cho người dùng.', '3199000', '2022-10-14 11:54:52'),
('SP019', ' Samsung Galaxy Z Flip4 5G', '600x600-thumb-qua-dac-biet-600x600.jpg', '4', 'Điện thoại', 'Samsung', 'Samsung Galaxy Z Flip4 5G Đặc Biệt được cho ra mắt coi như lời cảm ơn dành cho người dùng vì đã dành nhiều sự quan tâm đến với các thiết bị di động của hãng,', '23000000', '2022-11-09 08:36:29'),
('SP020', 'Vivo X80', 'vivo-x80-xanh-thumb-600x600.jpg', '5', 'Điện thoại', 'ViVo', 'Vivo X80 được xem là thiết bị hướng đến đối tượng người dùng chuyên nhiếp ảnh trên điện thoại, bằng việc hợp tác cùng nhà sản xuất ống kính nổi tiếng mang thương hiệu ZEISS.', '19000000', '2022-11-09 01:37:25'),
('SP022', 'iPhone 12', 'iphone-12-blue-select-2020_cae77d30ac99435880af61542f7b1efd.webp', '10', 'Điện thoại', 'Iphone', 'iPhone 12 ra mắt với vai trò mở ra một kỷ nguyên hoàn toàn mới. Tốc độ mạng 5G siêu tốc, bộ vi xử lý A14 Bionic nhanh nhất thế giới smartphone, màn hình OLED tràn cạnh tuyệt đẹp và camera siêu chụp đêm, tất cả đều có mặt trên iPhone 12.\r\n\r\n', '16500000', '2022-10-14 12:27:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_chi_tiet`
--

CREATE TABLE `thong_tin_chi_tiet` (
  `id` int(10) NOT NULL,
  `ma_san_pham` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cau_hinh` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cam_truoc` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cam_sau` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dung_luong` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giam_gia` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_chi_tiet`
--

INSERT INTO `thong_tin_chi_tiet` (`id`, `ma_san_pham`, `cau_hinh`, `cam_truoc`, `cam_sau`, `ram`, `dung_luong`, `giam_gia`, `create_at`) VALUES
(4, 'SP001', 'OLED6.1', '12 MP', '2 camera 12 MP', 'Apple A15 Bionic', '128 GB ', '0', '2022-10-28 14:49:35'),
(5, 'SP002', 'OLED6.1\"Super Retina XDR', '12 MP', '2 camera 12 MP', 'Apple A14 Bionic', '256 GB', '500000', '2022-10-28 14:49:35'),
(6, 'SP003', 'HDR10 +, Dolby Vision, Độ sáng tối đa: 1500nit, Corning Gorilla Glass Victus', '32 MP', ' 50 MP, f/1.9, Dual Pixel PDAF, OIS Camera tele: 50 MP, f/1.9, PDAF,', 'Qualcomm SM8450 Snap', '256  GB', '0', '2022-10-28 14:49:35'),
(7, 'SP004', 'Dynamic AMOLED 2X6.8', '40 MP', 'Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP', 'Snapdragon 8 Gen 1', '256  GB', '0', '2022-10-28 14:49:35'),
(9, 'SP010', 'AMOLED6.43\"Full HD+', '32 MP', 'Chính 64 MP & Phụ 2 MP, 2 MP', 'Snapdragon 680', '128  GB', '3000000', '2022-10-28 14:49:35'),
(10, 'SP005', 'Dynamic AMOLED 2X6.8', '40 MP', 'Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP', 'Exynos 2100', '128 GB', '0', '2022-10-28 14:49:35'),
(12, 'SP012', 'IPS LCD6.52\"HD+', '5 MP', 'Chính 8MP & Phụ QVGA', 'MediaTek MT6761 (Hel', '32  GB', '500000', '2022-10-28 14:49:35'),
(13, 'SP013', 'Super AMOLED6.5\"Full HD+', '32 MP', 'Chính 64 MP & Phụ 12 MP, 5 MP, 5 MP', 'Exynos 1280', '128 GB', '500000', '2022-10-28 14:49:35'),
(14, 'SP014', 'PLS TFT LCD6.6', '8 MP', 'Chính 50 MP & Phụ 5 MP, 2 MP, 2 M', 'Snapdragon 680', '128  GB', '0', '2022-10-28 14:49:35'),
(15, 'SP016', 'AMOLED 6.44', '50 MP', 'Chính 64 MP & Phụ 8 MP, 2 MP', 'MediaTek Dimensity 9', '128 GB', '0', '2022-10-28 14:49:35'),
(16, 'SP020', 'AMOLED6.78', '32 MP', 'Chính 50 MP & Phụ 12 MP, 12 MP', 'MediaTek Dimensity 9', '256 GB', '0', '2022-10-28 14:49:35'),
(17, 'SP019', 'Chính: Dynamic AMOLED 2X, Phụ: Super AMOLEDChính 6.7', '10 MP', '2 camera 12 MP', 'Snapdragon 8+ Gen 1', '256 GB', '0', '2022-10-28 14:49:35'),
(18, 'SP018', 'Dynamic AMOLED 2XChính 7.6', '10 MP & 4 MP', '3 camera 12 MP', 'Snapdragon 888', '256 GB', '0', '2022-10-28 14:49:35'),
(19, 'SP017', 'AMOLED 6.7', '32 MP', 'Chính 50 MP & Phụ 8 MP, 2 MP', 'MediaTek Dimensity 8', '256 GB', '0', '2022-10-28 14:49:35'),
(20, 'SP007', 'TFT LCD6.51\"HD+', '8 MP', 'Chính 50 MP & Phụ 2 MP', 'Unisoc T606', '32 GB', '1000000', '2022-10-28 14:49:35'),
(21, 'SP006', ' 6.43 inch, AMOLED, FHD+, 1080 x 2400 Pixels', '13.0 MP', '50.0 MP + 8.0 MP + 2.0 MP + 2.0 MP', 'Snapdragon 680', '64 GB', '0', '2022-10-28 14:49:35'),
(22, 'SP009', '6.43 inch, AMOLED, FHD+, 1080 x 2400 Pixels', '16.0 MP', '8.0 MP + 2.0 MP + 2.0 MP', 'Helio P95', '128 GB', '500000', '2022-10-28 14:49:35'),
(23, 'SP008', '6.52 inch, IPS LCD, HD+, 720 x 1600 Pixels', '5.0 MP', '13.0 MP + 2.0 MP', 'Spreadtrum SC9863A', '32 GB', '500000', '2022-10-28 14:49:35'),
(25, 'SP022', '6.1 inch, OLED, Super Retina XDR, 2532 x 1170 Pixels', '12.0 MP', '12.0 MP + 12.0 MP', 'Apple A14 Bionic', '128 GB', '1000', '2022-10-28 14:49:35'),
(26, 'SP015', 'Super AMOLED6.4', '13 MP', 'Chính 48 MP & Phụ 8 MP, 5 MP, 2 MP', 'Exynos 1280', '128 GB', '0', '2022-10-28 14:50:57');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `admin_system`
--
ALTER TABLE `admin_system`
  ADD PRIMARY KEY (`username_admin`);

--
-- Chỉ mục cho bảng `bang_hieu`
--
ALTER TABLE `bang_hieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`idCT`),
  ADD KEY `ma_san_pham` (`ma_san_pham`),
  ADD KEY `ma_don_hang` (`ma_don_hang`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`ma_don_hang`);

--
-- Chỉ mục cho bảng `kieu`
--
ALTER TABLE `kieu`
  ADD PRIMARY KEY (`id_kieu`);

--
-- Chỉ mục cho bảng `nhan_hieu`
--
ALTER TABLE `nhan_hieu`
  ADD PRIMARY KEY (`ten_nhan_hieu`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_san_pham`),
  ADD KEY `id_kieu` (`id_kieu`),
  ADD KEY `ten_nhan_hieu` (`ten_nhan_hieu`);

--
-- Chỉ mục cho bảng `thong_tin_chi_tiet`
--
ALTER TABLE `thong_tin_chi_tiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_san_pham` (`ma_san_pham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bang_hieu`
--
ALTER TABLE `bang_hieu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `idCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `thong_tin_chi_tiet`
--
ALTER TABLE `thong_tin_chi_tiet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD CONSTRAINT `chi_tiet_don_hang_ibfk_2` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`),
  ADD CONSTRAINT `chi_tiet_don_hang_ibfk_3` FOREIGN KEY (`ma_don_hang`) REFERENCES `don_hang` (`ma_don_hang`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`id_kieu`) REFERENCES `kieu` (`id_kieu`),
  ADD CONSTRAINT `san_pham_ibfk_2` FOREIGN KEY (`ten_nhan_hieu`) REFERENCES `nhan_hieu` (`ten_nhan_hieu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
