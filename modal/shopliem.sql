-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 05, 2024 lúc 05:26 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopliem`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_san_pham`
--

CREATE TABLE `chi_tiet_san_pham` (
  `id_chiTietSanPham` int(10) NOT NULL,
  `id_sanPham` int(10) NOT NULL,
  `gia_sanPham` float NOT NULL,
  `phanTramGiaGia_sanPham` float NOT NULL DEFAULT 0,
  `mieuTa_sanPham` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `luotXem` int(10) NOT NULL DEFAULT 0,
  `ngayLap` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_san_pham`
--

INSERT INTO `chi_tiet_san_pham` (`id_chiTietSanPham`, `id_sanPham`, `gia_sanPham`, `phanTramGiaGia_sanPham`, `mieuTa_sanPham`, `luotXem`, `ngayLap`) VALUES
(1, 1, 120000, 5, 'Áo khoác nam nữ, form oversize rộng rãi và thoải mái\r\nChất liệu nỉ chân cua chính phẩm 350gsm dày dặn. Dây khóa kéo 2 đầu, có thể kéo được 2 chiều. Mặt trong có túi đựng điện thoại\r\nCông nghệ thêu lông đắp giống cao cấp', 0, NULL),
(2, 2, 130000, 10, 'Áo khoác nam nữ, form oversize rộng rãi và thoải mái\r\nChất liệu nỉ chân cua chính phẩm 350gsm dày dặn. Dây khóa kéo 2 đầu, có thể kéo được 2 chiều. Mặt trong có túi đựng điện thoại\r\nCông nghệ thêu lông đắp giống cao cấp', 0, NULL),
(4, 3, 230000, 50, 'Áo khoác nam nữ, form oversize rộng rãi và thoải mái\r\nChất liệu nỉ chân cua chính phẩm 350gsm dày dặn. Dây khóa kéo 2 đầu, có thể kéo được 2 chiều. Mặt trong có túi đựng điện thoại\r\nCông nghệ thêu lông đắp giống cao cấp', 0, NULL),
(5, 7, 430000, 0, 'Quần Tây nam Kenta với form dáng vừa vặn, sang trọng đầy lịch lãm. Thích hợp mặc đi làm, đi chơi, lót trong sắc nét, tạo cảm giác thoải mái khi di chuyển, làm việc. Với ưu vải co giãn nhẹ, lót trong sắc nét và tinh tế, với mức giá bán cực kì hợp lý. Hiếu ', 324, NULL),
(6, 4, 560000, 0, 'Áo thun Unisex Saigonese form rộng rãi, chất liệu cotton compact, định lượng 295gsm dày dặn và mát lạnh, vải đã được wash xử lý rút. Đường may và mực in cao cấp, giặt máy thoải mái. Bo cổ bản to dày dặn, đường may cao cấp từng chi tiết. ', 0, NULL),
(8, 5, 430000, 44, 'Áo thun Kenta Studio, chất liệu thun cotton 280gsm dày dặn, mát lạnh. From unisex thoải mái, nam hoặc nữ đều mặc được. Bo cổ bản to dày dặn, đường may cao cấp từng chi tiết. ', 0, NULL),
(9, 6, 130000, 0, 'Áo thun Kenta Studio, chất liệu thun cotton 280gsm dày dặn, mát lạnh. From unisex thoải mái, nam hoặc nữ đều mặc được. Bo cổ bản to dày dặn, đường may cao cấp từng chi tiết. ', 20, NULL),
(10, 8, 230000, 0, 'Quần Tây nam Kenta với form dáng vừa vặn, sang trọng đầy lịch lãm, điểm nhấn viền ở túi trước và túi sau. Thích hợp mặc đi làm, đi chơi, lót trong sắc nét, tạo cảm giác thoải mái khi di chuyển, làm việc. Với ưu vải co giãn nhẹ, lót trong sắc nét và tinh t', 33, NULL),
(11, 9, 430000, 0, 'Quần Tây nam Kenta với form dáng vừa vặn, sang trọng đầy lịch lãm, điểm nhấn viền ở túi trước và túi sau. Thích hợp mặc đi làm, đi chơi, lót trong sắc nét, tạo cảm giác thoải mái khi di chuyển, làm việc. Với ưu vải co giãn nhẹ, lót trong sắc nét và tinh t', 0, NULL),
(12, 10, 550000, 0, 'Quần Tây nam Kenta với form dáng vừa vặn, sang trọng đầy lịch lãm, điểm nhấn viền ở túi trước và túi sau. Thích hợp mặc đi làm, đi chơi, lót trong sắc nét, tạo cảm giác thoải mái khi di chuyển, làm việc. Với ưu vải co giãn nhẹ, lót trong sắc nét và tinh t', 5, NULL),
(13, 11, 120000, 0, 'Quần Short Kaki nam năng động trẻ trung, from slim vừa vặn tôn dáng và không quá ôm sát, tạo sự thoải mái cho người mặc. Lót trong may hoàn thiện sắc nét, dây kéo YKK bền bỉ trong quá trình sử dụng. Quần short kaki dễ dàng phối với áo thun, polo đa dạng t', 0, NULL),
(14, 13, 450000, 0, 'Quần Short Kaki nam năng động trẻ trung, from slim vừa vặn tôn dáng và không quá ôm sát, tạo sự thoải mái cho người mặc. Lót trong may hoàn thiện sắc nét, dây kéo YKK bền bỉ trong quá trình sử dụng. Quần short kaki dễ dàng phối với áo thun, polo đa dạng t', 22, NULL),
(15, 14, 120000, 33, 'Quần Short Kaki nam năng động trẻ trung, from slim vừa vặn tôn dáng và không quá ôm sát, tạo sự thoải mái cho người mặc. Lót trong may hoàn thiện sắc nét, dây kéo YKK bền bỉ trong quá trình sử dụng. Quần short kaki dễ dàng phối với áo thun, polo đa dạng t', 0, NULL),
(16, 15, 130000, 0, 'Sơ mi tay dài luôn sang trọng, lịch lãm. Chất vải lụa dày mango thoáng mát và chất lượng, thấm hút cực tốt, định lượng vải dày dặn chất lượng nhưng mặc lên cực mát. Đường may cuốn sườn tinh tế, form cực chuẩn. Chất vải ít nhăn, mềm mại tuyệt đối, hạn chế ', 0, NULL),
(17, 16, 110000, 0, 'Sơ mi tay dài luôn sang trọng, lịch lãm. Chất vải lụa dày mango thoáng mát và chất lượng, thấm hút cực tốt, định lượng vải dày dặn chất lượng nhưng mặc lên cực mát. Đường may cuốn sườn tinh tế, form cực chuẩn. Chất vải ít nhăn, mềm mại tuyệt đối, hạn chế ', 0, NULL),
(18, 17, 888888, 88, 'MIEU TA MOI THEM', 88, '2024-03-05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_khachHang` int(10) NOT NULL,
  `tenDangNhap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matKhau` text NOT NULL,
  `hoVaTen` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sdt` text NOT NULL,
  `diaChi` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id_khachHang`, `tenDangNhap`, `email`, `matKhau`, `hoVaTen`, `sdt`, `diaChi`) VALUES
(2, 'user', 'user@gmail.com', '8add424767b2ce9b72a4fc27acc2dbb8', 'hotenUser', '23423423', 'NH'),
(3, 'admin', 'admin@gmail.com', 'be862d9bb48c9190fcd7c456f655dd89', 'admin', '234234234', 'SG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `id_loaiSanPham` int(10) NOT NULL,
  `ten_loaiSanPham` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`id_loaiSanPham`, `ten_loaiSanPham`) VALUES
(1, 'Áo Khoát'),
(2, 'Áo Sơmi'),
(3, 'Áo Thun'),
(4, 'Quần Dài'),
(5, 'Quần Ngắn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `id_nhanVien` int(10) NOT NULL,
  `ten_nhanVien` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(255) NOT NULL,
  `diaChi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `matKhau` varchar(255) NOT NULL,
  `vaiTro` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`id_nhanVien`, `ten_nhanVien`, `username`, `diaChi`, `matKhau`, `vaiTro`) VALUES
(1, 'admin', 'admin', 'HCM', '456', 1),
(2, 'user', 'user', 'HN', '123', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sanPham` int(10) NOT NULL,
  `ten_sanPham` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hinh_sanPham` varchar(255) NOT NULL,
  `id_loaiSanPham` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id_sanPham`, `ten_sanPham`, `hinh_sanPham`, `id_loaiSanPham`) VALUES
(1, 'Áo khoát đỏ', 'akd1.jpg', 1),
(2, 'Áo khoát đen', 'akden1.png', 1),
(3, 'Áo khoát trắng', 'akt1.jpg', 1),
(4, 'Áo thun đen', 'atden1.jpg', 3),
(5, 'Áo thun nâu', 'atn1.jpg', 3),
(6, 'Áo thun trắng', 'att1.jpg', 3),
(7, 'Quần dài xám', 'qdxam1.jpg', 4),
(8, 'Quần dài nâu', 'qdnau1.jpg', 4),
(9, 'Quần dài đen', 'qdden1.jpg', 4),
(10, 'Quần dài jean Xanh', 'qdj1.jpg', 4),
(11, 'Quần ngắn xanh', 'qnxanh1.jpg', 5),
(13, 'Quần ngắn đen', 'qnden1.jpg', 5),
(14, 'Quần ngắn thun xám đen', 'qnthun1.jpg', 5),
(15, 'Áo sơ mi trắng', 'somitrang1.jpg', 2),
(16, 'Áo sơ mi đen', 'somiden1.jpg', 2),
(17, 'AO KHOAT MOi THEM', 'HINH MOI THEM', 1),
(19, 'AO KHOAT MOi THEM', 'HINH MOI THEM', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  ADD PRIMARY KEY (`id_chiTietSanPham`),
  ADD KEY `id_sanPham` (`id_sanPham`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id_khachHang`);

--
-- Chỉ mục cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`id_loaiSanPham`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`id_nhanVien`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sanPham`),
  ADD KEY `id_loaiSanPham` (`id_loaiSanPham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  MODIFY `id_chiTietSanPham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id_khachHang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `id_loaiSanPham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `id_nhanVien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sanPham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  ADD CONSTRAINT `id_sanPham` FOREIGN KEY (`id_sanPham`) REFERENCES `san_pham` (`id_sanPham`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `id_loaiSanPham` FOREIGN KEY (`id_loaiSanPham`) REFERENCES `loai_san_pham` (`id_loaiSanPham`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
