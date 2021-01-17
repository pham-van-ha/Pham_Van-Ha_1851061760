-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 17, 2021 lúc 06:54 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cv_bt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cvlamthem`
--

CREATE TABLE `cvlamthem` (
  `id` int(11) NOT NULL,
  `tencv` varchar(255) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `thoigian` varchar(100) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `diadiem` varchar(255) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `cvlamthem`
--

INSERT INTO `cvlamthem` (`id`, `tencv`, `thoigian`, `diadiem`) VALUES
(1, 'Nhân viên pha chế', '1 năm', '27 Hàng Than'),
(2, 'Tổ chức sự kiện', '2 năm', '41 Thái Hà');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocvan`
--

CREATE TABLE `hocvan` (
  `id` int(11) NOT NULL,
  `truonghoc` varchar(255) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `ngayvao` varchar(255) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `ngayra` varchar(255) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `ghichu` varchar(255) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `hocvan`
--

INSERT INTO `hocvan` (`id`, `truonghoc`, `ngayvao`, `ngayra`, `ghichu`) VALUES
(1, 'Đại Học Thủy Lợi Khoa CNTT khóa:2018-2023', '28/08/2018', '28/08/2023', 'Hoàn Thành Mục Tiêu'),
(2, 'THPT Đại AN', '1/9/2015', '6/8/2018', 'Hoàn thành đúng thời hạn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kinhnghiemlamviecj`
--

CREATE TABLE `kinhnghiemlamviecj` (
  `id` int(11) NOT NULL,
  `viec` varchar(255) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `ngaythang` varchar(255) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `ghichu` varchar(255) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kynang`
--

CREATE TABLE `kynang` (
  `id` int(11) NOT NULL,
  `tenkynang` varchar(255) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `kinanglimit` varchar(100) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `kynang`
--

INSERT INTO `kynang` (`id`, `tenkynang`, `kinanglimit`) VALUES
(1, 'Tin học văn phòng', 'Dánh máy, soạn thảo, tính toán excel,...'),
(2, 'Lái Xe', 'xe máy, oto, xe tải'),
(3, 'Kĩ năng giao tiếp (rất quan trọng)', ''),
(4, 'Kĩ năng làm việc độc lập và làm việc nhóm', ''),
(5, 'Kỹ năng đàm phán, giải quyết vấn đề, xử lý khủng hoảng', ''),
(6, 'Kỹ năng quản lý thời gian: Chia thời gian để làm việc, không “giờ cao su”', ''),
(7, 'Kỹ năng thoát hiểm: Thoát khỏi hỏa hoạn, động đất, lũ lụt, tai nạn, xâm hại,…', ''),
(8, 'Kỹ năng sử dụng các vật dụng, đặc biệt là vận dụng nguy hiểm: Dao, kéo, búa, điện', ''),
(9, 'Kỹ năng bơi lội, kỹ năng sinh tồn khi lạc trong rừng,…\r\n', ''),
(10, 'Kỹ năng đối phó, ứng biến:nhờ gửi đồ nhưng thấy nghi hoặc thì cần khéo léo tìm cách từ chối.', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ngoaingu`
--

CREATE TABLE `ngoaingu` (
  `id` int(11) NOT NULL,
  `ngoaingu` varchar(255) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `ngoaingulimit` varchar(100) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `ngoaingu`
--

INSERT INTO `ngoaingu` (`id`, `ngoaingu`, `ngoaingulimit`) VALUES
(1, 'Tiếng anh', 'Trung bình'),
(2, 'Tiếng Trung Quốc ', 'Trung bình');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtincanhan`
--

CREATE TABLE `thongtincanhan` (
  `id` int(11) NOT NULL,
  `hoten` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `ngaysinh` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `congviec` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtincanhan`
--

INSERT INTO `thongtincanhan` (`id`, `hoten`, `ngaysinh`, `congviec`, `diachi`, `email`, `sdt`) VALUES
(1, 'Phạm Văn Hà', '28/03/2000', 'Sinh vIên', 'Nam Định', 'vanha.pham2803@gmail.com', '0374756343');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cvlamthem`
--
ALTER TABLE `cvlamthem`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hocvan`
--
ALTER TABLE `hocvan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kinhnghiemlamviecj`
--
ALTER TABLE `kinhnghiemlamviecj`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kynang`
--
ALTER TABLE `kynang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ngoaingu`
--
ALTER TABLE `ngoaingu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thongtincanhan`
--
ALTER TABLE `thongtincanhan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cvlamthem`
--
ALTER TABLE `cvlamthem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hocvan`
--
ALTER TABLE `hocvan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `kinhnghiemlamviecj`
--
ALTER TABLE `kinhnghiemlamviecj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `kynang`
--
ALTER TABLE `kynang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `ngoaingu`
--
ALTER TABLE `ngoaingu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thongtincanhan`
--
ALTER TABLE `thongtincanhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
