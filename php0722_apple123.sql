-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2022 lúc 05:29 AM
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
  `address` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `accounts`
--

INSERT INTO `accounts` (`name`, `username`, `password`, `email`, `phone`, `address`) VALUES
('tưởng thảo', 'mid0203', 'e10adc3949ba59abbe56e057f20f883e', 'mid0203@gmail.com', '0965969085', 'hà nội'),
('văn nguyễn ', 'Vannguyenn99', 'e10adc3949ba59abbe56e057f20f883e', 'vannguyenn2809@gmail.com', '0965969085', 'hà nội');

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
('admin', 'admin', 'admin');

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
-- Cấu trúc bảng cho bảng `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id` int(11) NOT NULL,
  `ma_san_pham` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_san_pham` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong` int(3) NOT NULL,
  `gia` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giam_gia` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanh_tien` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hoa_don` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_san_pham` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_san_pham` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanh_tien` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_lap` datetime NOT NULL,
  `ngay_mua` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kieu`
--

CREATE TABLE `kieu` (
  `id_kieu` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thong_tin` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kieu`
--

INSERT INTO `kieu` (`id_kieu`, `thong_tin`) VALUES
('Điện thoại', ''),
('Ipad', ''),
('Laptop', ''),
('Phụ kiện', '');

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
('Samsung', ' Phân khúc tầm trung', '2022-10-25 02:50:46'),
('ViVo', 'máy giá rẻ', '2022-10-25 02:50:46'),
('Xiaomi', ' Phân khúc tầm trung', '2022-10-25 02:50:46'),
('xxx', '[value-2]', '2022-10-25 02:50:46');

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
('13123', '122', '1666610076-product-160579068_770339083880621_2672246343451563397_n.jpg', '213', 'Điện thoại', 'Oppo', '123123qeqweqwe', '1231233', '2022-10-25 02:48:51'),
('eqweqw', 'eqwe', '1666665396-product-154709439_2807687692812593_8255724467718935460_n.jpg', '123', 'Ipad', 'Samsung', '13213', '213', '2022-10-25 02:36:36'),
('SP001', 'Iphone 14 Pro Max ', '2ed1bfecbbac9620b159ce5c0885f2d3.jpg', '5', 'Điện thoại', 'Iphone', 'máy mới chất lượng cao sang trọng', '30000000', '2022-10-14 12:56:15'),
('SP002', 'Iphone 12 Pro Max ', 'iphone-12-pro-max-xam-new-600x600-200x200.jpg', '10', 'Điện thoại', 'Iphone', 'máy mới 100%', '23000000', '2022-10-14 11:54:52'),
('SP003', 'xiaomi mi 12 pro max', 'Xiaomi-Redmi-Note-12-Pro-Max.jpg', '13', 'Điện thoại', 'Xiaomi', 'máy thuộc phân khúc tầm trung', '10000000', '2022-10-14 11:54:52'),
('SP004', 'samsung s22 ultra', 'Galaxy-S22-Ultra-Black-600x600.jpg', '4', 'Điện thoại', 'Iphone', 'máy hàn quốc', '23000000', '2022-10-14 11:54:52'),
('SP005', 'Samsung Galaxy S21 Ultra 5G ', 'samsung-galaxy-s21-ultra-bac-600x600-1-200x200.jpg', '5', 'Điện thoại', 'Samsung', 'máy tốt', '20000000', '2022-10-14 11:54:52'),
('SP006', 'Xiaomi Redmi Note 11', 'Xiaomi-redmi-note-11-blue-600x600.jpg', '6', 'Điện thoại', 'Xiaomi', 'Redmi Note 11 (6GB/128GB) vừa được Xiaomi cho ra mắt, được xem là chiếc smartphone có giá tầm trung ấn tượng, với 1 cấu hình mạnh, cụm camera xịn sò, pin khỏe, sạc nhanh mà giá lại rất phải chăng.', '5290000', '2022-10-14 11:54:52'),
('SP007', 'Nokia G11 Plus', 'nokia-g11-plus-xanh-thumb-600x600.jpg', '7', 'Điện thoại', 'Nokia', 'máy bền', '9000000', '2022-10-14 11:54:52'),
('SP008', 'Nokia C21 Plus', 'nokia-c21-plus-600x600.jpg', '3', 'Điện thoại', 'Nokia', '?', '5000000', '2022-10-14 11:54:52'),
('SP009', 'Oppo A93', 'a93-8gb128gb_main_618_1020.png.webp', '6', 'Điện thoại', 'Oppo', 'camera chụp ảnh siêu đẹp', '9000000', '2022-10-14 11:54:52'),
('SP010', 'OPPO Reno7', 'OPPO-Reno7-4G-Thumb-cam-1-600x600.jpg', '7', 'Điện thoại', 'Oppo', 'máy rẻ', '5000000', '2022-10-14 11:54:52'),
('SP011', ' iPhone 11', 'iphone-xi-xanhla-600x600.jpg', '10', 'Điện thoại', 'Iphone', ' iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.', '11990000', '2022-10-14 11:54:52'),
('SP012', 'Xiaomi Redmi A1', 'Xiaomi-Redmi-A1-green-thumb-600x600.jpg', '5', 'Điện thoại', 'Xiaomi', 'Xiaomi Redmi A1 Xanh Lá được mở bán với mức giá cực kỳ ưu đãi dành cho người dùng nhằm mang lại những trải nghiệm tốt hơn trên các thiết bị giá rẻ, tích hợp bên trong là một viên pin có dung lượng lớn cùng màn hình đủ lớn để bạn có thể thỏa thích xem phim ', '2190000', '2022-10-14 11:54:52'),
('SP013', 'Samsung Galaxy A53 5G', 'Samsung-Galaxy-A53-xanh-thumb-600x600.jpg', '2', 'Điện thoại', 'Samsung', 'Samsung Galaxy A53 5G 128GB trình làng với một thiết kế hiện đại, hiệu năng ổn định cùng một màn hình hiển thị sắc nét', '10000000', '2022-10-14 11:54:52'),
('SP014', 'Samsung Galaxy A23 6GB', 'samsung-galaxy-a23-xanh-thumb-600x600.jpg', '7', 'Điện thoại', 'Iphone', 'Được Samsung cho ra mắt vào 03/2022 - Samsung Galaxy A23 6GB có một thiết kế trẻ trung cùng bộ thông số kỹ thuật khá ấn tượng trong tầm giá, đáp ứng nhu cầu sử dụng cả ngày một cách ổn định nhờ trang bị chipset đến từ nhà Qualcomm và một viên pin dung lượng', '6190000', '2022-10-14 11:54:52'),
('SP015', 'Samsung Galaxy A33 5G 6GB', 'samsung-galaxy-a33-5g-xanh-thumb-600x600.jpg', '2', 'Điện thoại', 'Samsung', 'Samsung Galaxy A33 5G 6GB ra mắt vào ngày 17/03, được xem là bản cập nhật khá lớn so với thế hệ tiền nhiệm Galaxy A32 về thiết kế đến thông số kỹ thuật bên trong, nhằm mang đến vẻ ngoài đẹp mắt cũng như cạnh tranh trực tiếp ở phần hiệu năng đối với các đối thủ cùng phân khúc giá', '7290000', '2022-10-14 11:54:52'),
('SP016', 'VIVO V25E', 'vivo-v25e-vang-thumb-1-2-600x600.jpg', '9', 'Điện thoại', 'ViVo', 'hàng mới về chất lượng\r\n', '8490000', '2022-10-14 11:54:52'),
('SP017', 'OPPO Reno8 Pro 5G', 'oppo-reno8-pro-thumb-xanh-1-600x600.jpg', '5', 'Điện thoại', 'Oppo', 'OPPO Reno8 Pro 5G ra mắt với sự đột phá về phần camera khi đây là thiết bị đầu tiên thuộc dòng Reno được tích hợp NPU MariSilicon X, được xem là NPU cao cấp nhất đến từ OPPO (2022) có khả năng xử lý hình ảnh đỉnh cao. ', '1899000', '2022-10-14 11:54:52'),
('SP018', 'Samsung Galaxy Z Fold3 5G', 'samsung-galaxy-z-fold-3-silver-1-600x600.jpg', '6', 'Điện thoại', 'Samsung', 'Sản phẩm sẽ là một “cú hit” của Samsung góp phần mang đến những trải nghiệm mới cho người dùng.', '3199000', '2022-10-14 11:54:52'),
('SP019', ' Samsung Galaxy Z Flip4 5G', '600x600-thumb-qua-dac-biet-600x600.jpg', '5', 'Điện thoại', 'Samsung', 'Samsung Galaxy Z Flip4 5G Đặc Biệt được cho ra mắt coi như lời cảm ơn dành cho người dùng vì đã dành nhiều sự quan tâm đến với các thiết bị di động của hãng,', '23000000', '2022-10-14 11:54:52'),
('SP020', 'Vivo X80', 'vivo-x80-xanh-thumb-600x600.jpg', '3', 'Điện thoại', 'ViVo', 'Vivo X80 được xem là thiết bị hướng đến đối tượng người dùng chuyên nhiếp ảnh trên điện thoại, bằng việc hợp tác cùng nhà sản xuất ống kính nổi tiếng mang thương hiệu ZEISS.', '19000000', '2022-10-14 11:54:52'),
('SP021', 'iPhone 13 Pro Max', 'iphone13-pro-max.jfif', '10', 'Điện thoại', 'Iphone', 'iPhone 13 sở hữu hệ thống camera kép xuất sắc nhất từ trước đến nay, bộ vi xử lý Apple A15 nhanh nhất thế giới smartphone cùng thời lượng pin cực khủng, sẵn sàng đồng hành cùng bạn suốt cả ngày.', '19500000', '2022-10-14 11:54:52'),
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
  `giam_gia` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_chi_tiet`
--

INSERT INTO `thong_tin_chi_tiet` (`id`, `ma_san_pham`, `cau_hinh`, `cam_truoc`, `cam_sau`, `ram`, `dung_luong`, `giam_gia`) VALUES
(4, 'SP001', 'OLED6.1', '12 MP', '2 camera 12 MP', 'Apple A15 Bionic', '128 GB ', '0'),
(5, 'SP002', 'OLED6.1\"Super Retina XDR', '12 MP', '2 camera 12 MP', 'Apple A14 Bionic', '256 GB', '500000'),
(6, 'SP003', 'HDR10 +, Dolby Vision, Độ sáng tối đa: 1500nit, Corning Gorilla Glass Victus', '32 MP', ' 50 MP, f/1.9, Dual Pixel PDAF, OIS Camera tele: 50 MP, f/1.9, PDAF,', 'Qualcomm SM8450 Snap', '256  GB', '0'),
(7, 'SP004', 'Dynamic AMOLED 2X6.8', '40 MP', 'Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP', 'Snapdragon 8 Gen 1', '256  GB', '0'),
(9, 'SP010', 'AMOLED6.43\"Full HD+', '32 MP', 'Chính 64 MP & Phụ 2 MP, 2 MP', 'Snapdragon 680', '128  GB', '3000000'),
(10, 'SP005', 'Dynamic AMOLED 2X6.8', '40 MP', 'Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP', 'Exynos 2100', '128 GB', '0'),
(11, 'SP011', 'IPS LCD6.1', '12 MP', '2 camera 12 MP', 'Apple A13 Bionic', '64 GB', '0'),
(12, 'SP012', 'IPS LCD6.52\"HD+', '5 MP', 'Chính 8MP & Phụ QVGA', 'MediaTek MT6761 (Hel', '32  GB', '500000'),
(13, 'SP013', 'Super AMOLED6.5\"Full HD+', '32 MP', 'Chính 64 MP & Phụ 12 MP, 5 MP, 5 MP', 'Exynos 1280', '128 GB', '500000'),
(14, 'SP014', 'PLS TFT LCD6.6', '8 MP', 'Chính 50 MP & Phụ 5 MP, 2 MP, 2 M', 'Snapdragon 680', '128  GB', '0'),
(15, 'SP016', 'AMOLED 6.44', '50 MP', 'Chính 64 MP & Phụ 8 MP, 2 MP', 'MediaTek Dimensity 9', '128 GB', '0'),
(16, 'SP020', 'AMOLED6.78', '32 MP', 'Chính 50 MP & Phụ 12 MP, 12 MP', 'MediaTek Dimensity 9', '256 GB', '0'),
(17, 'SP019', 'Chính: Dynamic AMOLED 2X, Phụ: Super AMOLEDChính 6.7', '10 MP', '2 camera 12 MP', 'Snapdragon 8+ Gen 1', '256 GB', '0'),
(18, 'SP018', 'Dynamic AMOLED 2XChính 7.6', '10 MP & 4 MP', '3 camera 12 MP', 'Snapdragon 888', '256 GB', '0'),
(19, 'SP017', 'AMOLED 6.7', '32 MP', 'Chính 50 MP & Phụ 8 MP, 2 MP', 'MediaTek Dimensity 8', '256 GB', '0'),
(20, 'SP007', 'TFT LCD6.51\"HD+', '8 MP', 'Chính 50 MP & Phụ 2 MP', 'Unisoc T606', '32 GB', '1000000'),
(21, 'SP006', ' 6.43 inch, AMOLED, FHD+, 1080 x 2400 Pixels', '13.0 MP', '50.0 MP + 8.0 MP + 2.0 MP + 2.0 MP', 'Snapdragon 680', '64 GB', '0'),
(22, 'SP009', '6.43 inch, AMOLED, FHD+, 1080 x 2400 Pixels', '16.0 MP', '8.0 MP + 2.0 MP + 2.0 MP', 'Helio P95', '128 GB', '500000'),
(23, 'SP008', '6.52 inch, IPS LCD, HD+, 720 x 1600 Pixels', '5.0 MP', '13.0 MP + 2.0 MP', 'Spreadtrum SC9863A', '32 GB', '500000'),
(24, 'SP021', '6.1 inch, OLED, Super Retina XDR, 2532 x 1170 Pixels', '12.0 MP', '12.0 MP + 12.0 MP', 'Apple A15 Bionic', '128 GB', '1000000'),
(25, 'SP022', '6.1 inch, OLED, Super Retina XDR, 2532 x 1170 Pixels', '12.0 MP', '12.0 MP + 12.0 MP', 'Apple A14 Bionic', '128 GB', '0'),
(26, 'SP015', 'Super AMOLED6.4\"Full HD+', '13 MP', 'Chính 48 MP & Phụ 8 MP, 5 MP, 2 MP', 'Exynos 1280', '128 GB', '500000');

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
-- Chỉ mục cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_san_pham` (`ma_san_pham`),
  ADD KEY `username` (`username`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hoa_don`),
  ADD KEY `ma_san_pham` (`ma_san_pham`),
  ADD KEY `username` (`username`);

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
-- AUTO_INCREMENT cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thong_tin_chi_tiet`
--
ALTER TABLE `thong_tin_chi_tiet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `gio_hang_ibfk_1` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`),
  ADD CONSTRAINT `gio_hang_ibfk_2` FOREIGN KEY (`username`) REFERENCES `accounts` (`username`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`),
  ADD CONSTRAINT `hoa_don_ibfk_2` FOREIGN KEY (`username`) REFERENCES `accounts` (`username`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`id_kieu`) REFERENCES `kieu` (`id_kieu`),
  ADD CONSTRAINT `san_pham_ibfk_2` FOREIGN KEY (`ten_nhan_hieu`) REFERENCES `nhan_hieu` (`ten_nhan_hieu`);

--
-- Các ràng buộc cho bảng `thong_tin_chi_tiet`
--
ALTER TABLE `thong_tin_chi_tiet`
  ADD CONSTRAINT `thong_tin_chi_tiet_ibfk_1` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma_san_pham`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
