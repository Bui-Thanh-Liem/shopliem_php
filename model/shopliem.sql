-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 27, 2024 lúc 08:32 AM
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
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(10) NOT NULL,
  `id_khachHang` int(10) NOT NULL,
  `date` date NOT NULL,
  `tongTien` float NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Shop đang chuẩn bị hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `id_khachHang`, `date`, `tongTien`, `status`) VALUES
(30, 4, '2024-03-27', 450950, 'Shop đang chuẩn bị hàng'),
(31, 5, '2024-03-27', 80400, 'Shop đang chuẩn bị hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_bill`
--

CREATE TABLE `chi_tiet_bill` (
  `id_bill` int(10) NOT NULL,
  `id_sanPham` int(10) NOT NULL,
  `soLuong` int(10) NOT NULL,
  `mauSac` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `size` varchar(10) NOT NULL,
  `thanhTien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_bill`
--

INSERT INTO `chi_tiet_bill` (`id_bill`, `id_sanPham`, `soLuong`, `mauSac`, `size`, `thanhTien`) VALUES
(30, 7, 1, 'xám', 's', 395600),
(30, 29, 1, 'trắng', 's', 55350),
(31, 14, 1, 'đen', 's', 80400);

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
  `ngayLap` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_san_pham`
--

INSERT INTO `chi_tiet_san_pham` (`id_chiTietSanPham`, `id_sanPham`, `gia_sanPham`, `phanTramGiaGia_sanPham`, `mieuTa_sanPham`, `luotXem`, `ngayLap`) VALUES
(1, 1, 130000, 1, 'Áo khoác nam nữ, form oversize rộng rãi và thoải máiChất liệu nỉ chân cua chính phẩm 350gsm dày dặn. Dây khóa kéo 2 đầu, có thể kéo được 2 chiều. Mặt trong có túi đựng điện thoạiCông nghệ thêu lông đắp giống cao cấp', 45, '1983'),
(2, 2, 130000, 10, 'Áo khoác nam nữ, form oversize rộng rãi và thoải máiChất liệu nỉ chân cua chính phẩm 350gsm dày dặn. Dây khóa kéo 2 đầu, có thể kéo được 2 chiều. Mặt trong có túi đựng điện thoạiCông nghệ thêu lông đắp giống cao cấp', 0, '3000/33/33'),
(4, 3, 230000, 50, 'Áo khoác nam nữ, form oversize rộng rãi và thoải máiChất liệu nỉ chân cua chính phẩm 350gsm dày dặn. Dây khóa kéo 2 đầu, có thể kéo được 2 chiều. Mặt trong có túi đựng điện thoạiCông nghệ thêu lông đắp giống cao cấp', 0, '2006'),
(5, 7, 430000, 8, 'Quần Tây nam Kenta với form dáng vừa vặn, sang trọng đầy lịch lãm. Thích hợp mặc đi làm, đi chơi, lót trong sắc nét, tạo cảm giác thoải mái khi di chuyển, làm việc. Với ưu vải co giãn nhẹ, lót trong sắc nét và tinh tế, với mức giá bán cực kì hợp lý. Hiếu ', 324, '2006'),
(6, 4, 560000, 0, 'Áo thun Unisex Saigonese form rộng rãi, chất liệu cotton compact, định lượng 295gsm dày dặn và mát lạnh, vải đã được wash xử lý rút. Đường may và mực in cao cấp, giặt máy thoải mái. Bo cổ bản to dày dặn, đường may cao cấp từng chi tiết. ', 8, '2000/02/23'),
(8, 5, 430000, 44, 'Áo thun Kenta Studio, chất liệu thun cotton 280gsm dày dặn, mát lạnh. From unisex thoải mái, nam hoặc nữ đều mặc được. Bo cổ bản to dày dặn, đường may cao cấp từng chi tiết. ', 0, '1983'),
(9, 6, 130000, 0, 'Áo thun Kenta Studio, chất liệu thun cotton 280gsm dày dặn, mát lạnh. From unisex thoải mái, nam hoặc nữ đều mặc được. Bo cổ bản to dày dặn, đường may cao cấp từng chi tiết. ', 20, NULL),
(10, 8, 230000, 0, 'Quần Tây nam Kenta với form dáng vừa vặn, sang trọng đầy lịch lãm, điểm nhấn viền ở túi trước và túi sau. Thích hợp mặc đi làm, đi chơi, lót trong sắc nét, tạo cảm giác thoải mái khi di chuyển, làm việc. Với ưu vải co giãn nhẹ, lót trong sắc nét và tinh t', 33, ''),
(11, 9, 430000, 0, 'Quần Tây nam Kenta với form dáng vừa vặn, sang trọng đầy lịch lãm, điểm nhấn viền ở túi trước và túi sau. Thích hợp mặc đi làm, đi chơi, lót trong sắc nét, tạo cảm giác thoải mái khi di chuyển, làm việc. Với ưu vải co giãn nhẹ, lót trong sắc nét và tinh t', 0, NULL),
(12, 10, 550000, 0, 'Quần Tây nam Kenta với form dáng vừa vặn, sang trọng đầy lịch lãm, điểm nhấn viền ở túi trước và túi sau. Thích hợp mặc đi làm, đi chơi, lót trong sắc nét, tạo cảm giác thoải mái khi di chuyển, làm việc. Với ưu vải co giãn nhẹ, lót trong sắc nét và tinh t', 5, NULL),
(13, 11, 120000, 0, 'Quần Short Kaki nam năng động trẻ trung, from slim vừa vặn tôn dáng và không quá ôm sát, tạo sự thoải mái cho người mặc. Lót trong may hoàn thiện sắc nét, dây kéo YKK bền bỉ trong quá trình sử dụng. Quần short kaki dễ dàng phối với áo thun, polo đa dạng t', 0, NULL),
(14, 13, 450000, 0, 'Quần Short Kaki nam năng động trẻ trung, from slim vừa vặn tôn dáng và không quá ôm sát, tạo sự thoải mái cho người mặc. Lót trong may hoàn thiện sắc nét, dây kéo YKK bền bỉ trong quá trình sử dụng. Quần short kaki dễ dàng phối với áo thun, polo đa dạng t', 22, NULL),
(15, 14, 120000, 33, 'Quần Short Kaki nam năng động trẻ trung, from slim vừa vặn tôn dáng và không quá ôm sát, tạo sự thoải mái cho người mặc. Lót trong may hoàn thiện sắc nét, dây kéo YKK bền bỉ trong quá trình sử dụng. Quần short kaki dễ dàng phối với áo thun, polo đa dạng t', 0, NULL),
(16, 15, 130000, 0, 'Sơ mi tay dài luôn sang trọng, lịch lãm. Chất vải lụa dày mango thoáng mát và chất lượng, thấm hút cực tốt, định lượng vải dày dặn chất lượng nhưng mặc lên cực mát. Đường may cuốn sườn tinh tế, form cực chuẩn. Chất vải ít nhăn, mềm mại tuyệt đối, hạn chế ', 0, '1983'),
(17, 16, 110000, 0, 'Sơ mi tay dài luôn sang trọng, lịch lãm. Chất vải lụa dày mango thoáng mát và chất lượng, thấm hút cực tốt, định lượng vải dày dặn chất lượng nhưng mặc lên cực mát. Đường may cuốn sườn tinh tế, form cực chuẩn. Chất vải ít nhăn, mềm mại tuyệt đối, hạn chế ', 0, '2000/02/23'),
(27, 29, 123000, 55, 'Áo Khoác trắng đẹp lắm đó nha bạn ơi', 123, '2000/02/22'),
(38, 40, 11111, 11, 'Mô tả sản phẩm mới thêm bằng file 1', 1, '2024/3/27'),
(39, 41, 22222, 22, 'Mô tả sản phẩm mới thêm bằng file 2', 2, '2024/3/27'),
(40, 42, 33333, 33, 'Mô tả sản phẩm mới thêm bằng file 3', 3, '2024/3/27'),
(41, 43, 44444, 44, 'Mô tả sản phẩm mới thêm bằng file 4', 4, '2024/3/27'),
(42, 44, 55555, 55, 'Mô tả sản phẩm mới thêm bằng file 5', 5, '2024/3/27');

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
  `diaChi` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `block` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id_khachHang`, `tenDangNhap`, `email`, `matKhau`, `hoVaTen`, `sdt`, `diaChi`, `block`) VALUES
(4, 'user1', 'user1@gmail.com', '8add424767b2ce9b72a4fc27acc2dbb8', 'hoten_User1', '123123123', 'diaChi_User1', 0),
(5, 'user2', 'user2@gmail.com', '8add424767b2ce9b72a4fc27acc2dbb8', 'hoten_User2', '123456789', 'diaChi_User2', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `id_loaiSanPham` int(10) NOT NULL,
  `ten_loaiSanPham` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `destroy` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`id_loaiSanPham`, `ten_loaiSanPham`, `destroy`) VALUES
(1, 'Áo Khoát', 0),
(2, 'Áo Sơmi', 0),
(3, 'Áo Thun', 0),
(4, 'Quần Dài', 0),
(5, 'Quần Ngắn', 0),
(6, 'Áo nỉ', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nav`
--

CREATE TABLE `nav` (
  `id_nav` int(10) NOT NULL,
  `name_nav` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `key_nav` varchar(10) NOT NULL,
  `destroy` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nav`
--

INSERT INTO `nav` (`id_nav`, `name_nav`, `key_nav`, `destroy`) VALUES
(1, 'Áo Khoát', '1', 0),
(2, 'Áo Sơmi', '2', 0),
(3, 'Áo Thun', '3', 0),
(4, 'Quần Dài', '4', 0),
(5, 'Quần Ngắn', '5', 0),
(6, 'Tất Cả', 'all', 0),
(7, 'Giảm Giá', 'sale', 0),
(10, 'Tất', 'tat', 0);

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
(1, 'admin', 'admin', 'HCM', '456', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sanPham` int(10) NOT NULL,
  `ten_sanPham` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hinh_sanPham` varchar(255) NOT NULL,
  `id_loaiSanPham` int(10) NOT NULL,
  `soLuong` int(10) NOT NULL DEFAULT 0,
  `destroy` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id_sanPham`, `ten_sanPham`, `hinh_sanPham`, `id_loaiSanPham`, `soLuong`, `destroy`) VALUES
(1, 'Áo khoát đỏ đỏ', 'akd2.jpg', 1, 5, 0),
(2, 'Áo khoát đen', 'akden1.png', 1, 100, 0),
(3, 'Áo khoát trắng trắng', 'akt1.jpg', 1, 100, 0),
(4, 'Áo thun đen', 'atden2.jpg', 3, 100, 0),
(5, 'Áo thun nâu', 'atn1.jpg', 3, 100, 0),
(6, 'Áo thun trắng', 'att1.jpg', 3, 100, 0),
(7, 'Quần dài xám', 'qdxam1.jpg', 4, 99, 0),
(8, 'Quần dài nâu', 'qdnau1.jpg', 4, 100, 0),
(9, 'Quần dài đen', 'qdden1.jpg', 4, 100, 0),
(10, 'Quần dài jean Xanh', 'qdj1.jpg', 4, 100, 0),
(11, 'Quần ngắn xanh', 'qnxanh1.jpg', 5, 100, 0),
(13, 'Quần ngắn đen', 'qnden1.jpg', 5, 100, 0),
(14, 'Quần ngắn thun xám đen', 'qnthun1.jpg', 5, 99, 0),
(15, 'Áo sơ mi trắng', 'somitrang1.jpg', 2, 100, 0),
(16, 'Áo sơ mi đen', 'somiden1.jpg', 2, 100, 0),
(29, 'Áo khoát trắng trắng', 'akt3.jpg', 1, 99, 0),
(40, 'Tên sản phẩm thêm bằng file1', 'akd3.jpg', 1, 0, 0),
(41, 'Tên sản phẩm thêm bằng file1', 'akd3.jpg', 1, 0, 0),
(42, 'Tên sản phẩm thêm bằng file1', 'akd3.jpg', 1, 0, 0),
(43, 'Tên sản phẩm thêm bằng file1', 'akd3.jpg', 1, 0, 0),
(44, 'Tên sản phẩm thêm bằng file1', 'akd3.jpg', 1, 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`);

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
-- Chỉ mục cho bảng `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`id_nav`);

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
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  MODIFY `id_chiTietSanPham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id_khachHang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `id_loaiSanPham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `nav`
--
ALTER TABLE `nav`
  MODIFY `id_nav` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `id_nhanVien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sanPham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
