-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2025 at 11:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shopbike`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `MaCTGH` int(11) NOT NULL,
  `MaGioHang` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL DEFAULT 1,
  `DonGia` decimal(10,2) NOT NULL DEFAULT 0.00,
  `PhiShip` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietgiohang`
--

INSERT INTO `chitietgiohang` (`MaCTGH`, `MaGioHang`, `MaSP`, `SoLuong`, `DonGia`, `PhiShip`) VALUES
(1, 1, 1, 2, 1500.00, 50.00),
(2, 1, 5, 1, 500.00, 20.00),
(3, 2, 2, 1, 2500.00, 50.00),
(4, 3, 3, 1, 3000.00, 60.00),
(5, 4, 4, 1, 1200.00, 40.00),
(6, 5, 6, 3, 80.00, 10.00),
(7, 6, 7, 2, 30.00, 5.00),
(8, 7, 8, 1, 100.00, 10.00),
(9, 8, 9, 1, 20.00, 5.00),
(10, 9, 10, 1, 1800.00, 50.00);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDanhMuc` int(11) NOT NULL,
  `TenDanhMuc` varchar(100) NOT NULL,
  `LoaiDanhMuc` varchar(50) DEFAULT NULL,
  `MoTa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`MaDanhMuc`, `TenDanhMuc`, `LoaiDanhMuc`, `MoTa`) VALUES
(1, 'Xe Đạp Thể Thao', 'Xe', 'Xe đạp thể thao chất lượng cao'),
(2, 'Xe Đạp Địa Hình', 'Xe', 'Xe đạp địa hình bền chắc'),
(3, 'Xe Đạp Đua', 'Xe', 'Xe đạp đua tốc độ cao'),
(4, 'Khung Xe', 'Phụ Kiện', 'Khung xe thể thao chắc chắn'),
(5, 'Phụ Kiện Xe', 'Phụ Kiện', 'Các phụ kiện cho xe đạp'),
(6, 'Mũ Bảo Hiểm', 'Phụ Kiện', 'Mũ bảo hiểm an toàn'),
(7, 'Găng Tay', 'Phụ Kiện', 'Găng tay thể thao'),
(8, 'Bộ Truyền Động', 'Phụ Kiện', 'Bộ truyền động cho xe'),
(9, 'Lốp & Vành', 'Phụ Kiện', 'Lốp và vành xe chất lượng'),
(10, 'Bình Nước & Phụ Kiện Khác', 'Phụ Kiện', 'Bình nước, giá đỡ, phụ kiện khác'),
(11, 'Xe đạp điện', 'Xe', 'eeeeeee'),
(12, 'Fixed gear', 'Xe', 'Xe đạp fixed gear'),
(13, 'Fixed gear 2', 'Xe', 'chuyển req từ obj sang arr');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `MaGioHang` int(11) NOT NULL,
  `MaKH` int(11) DEFAULT NULL,
  `NgayTao` datetime DEFAULT current_timestamp(),
  `TrangThai` enum('Open','Closed') DEFAULT 'Open'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`MaGioHang`, `MaKH`, `NgayTao`, `TrangThai`) VALUES
(1, 1, '2025-10-09 15:28:30', 'Open'),
(2, 2, '2025-10-09 15:28:30', 'Open'),
(3, 3, '2025-10-09 15:28:30', 'Closed'),
(4, 4, '2025-10-09 15:28:30', 'Open'),
(5, 5, '2025-10-09 15:28:30', 'Closed'),
(6, 6, '2025-10-09 15:28:30', 'Open'),
(7, 7, '2025-10-09 15:28:30', 'Closed'),
(8, 8, '2025-10-09 15:28:30', 'Open'),
(9, 9, '2025-10-09 15:28:30', 'Open'),
(10, 10, '2025-10-09 15:28:30', 'Closed');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `SoDienThoai` varchar(20) DEFAULT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `NgayTao` datetime DEFAULT current_timestamp(),
  `TrangThai` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `HoTen`, `Email`, `MatKhau`, `SoDienThoai`, `DiaChi`, `NgayTao`, `TrangThai`) VALUES
(1, 'Nguyen Van A', 'a@gmail.com', '123456', '0909123456', 'HCM', '2025-10-09 15:28:30', 1),
(2, 'Tran Thi B', 'b@gmail.com', '123456', '0909123457', 'HCM', '2025-10-09 15:28:30', 1),
(3, 'Le Van C', 'c@gmail.com', '123456', '0909123458', 'HCM', '2025-10-09 15:28:30', 1),
(4, 'Pham Thi D', 'd@gmail.com', '123456', '0909123459', 'HCM', '2025-10-09 15:28:30', 1),
(5, 'Hoang Van E', 'e@gmail.com', '123456', '0909123460', 'HCM', '2025-10-09 15:28:30', 1),
(6, 'Nguyen Thi F', 'f@gmail.com', '123456', '0909123461', 'HCM', '2025-10-09 15:28:30', 1),
(7, 'Tran Van G', 'g@gmail.com', '123456', '0909123462', 'HCM', '2025-10-09 15:28:30', 1),
(8, 'Le Thi H', 'h@gmail.com', '123456', '0909123463', 'HCM', '2025-10-09 15:28:30', 1),
(9, 'Pham Van I', 'i@gmail.com', '123456', '0909123464', 'HCM', '2025-10-09 15:28:30', 1),
(10, 'Hoang Thi J', 'j@gmail.com', '123456', '0909123465', 'HCM', '2025-10-09 15:28:30', 1),
(11, 'Phan Phương Hiếu', 'hieu@gmail.com', '123456', '01234565', 'HCM', '2025-10-27 09:38:15', 1),
(12, 'Trần Hữu Minh Hiệp', 'hiep@gmail.com', '123456', '01234587', 'HCM', '2025-10-27 10:01:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(11) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `SoDienThoai` varchar(20) DEFAULT NULL,
  `VaiTro` enum('Admin','Staff') NOT NULL DEFAULT 'Staff',
  `NgayTao` datetime DEFAULT current_timestamp(),
  `TrangThai` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `HoTen`, `Email`, `MatKhau`, `SoDienThoai`, `VaiTro`, `NgayTao`, `TrangThai`) VALUES
(1, 'Nguyen Van Admin', 'admin@gmail.com', '123456', '0909000001', 'Admin', '2025-10-12 17:29:53', 1),
(2, 'Tran Thi A', 'a@gmail.com', '123456', '0909000002', 'Staff', '2025-10-12 17:29:53', 1),
(3, 'Le Van B', 'b@gmail.com', '123456', '0909000003', 'Staff', '2025-10-12 17:29:53', 1),
(4, 'Pham Thi C', 'c@gmail.com', '123456', '0909000004', 'Staff', '2025-10-12 17:29:53', 1),
(5, 'Hoang Van D', 'd@gmail.com', '123456', '0909000005', 'Staff', '2025-10-12 17:29:53', 1),
(6, 'Nguyen Thi E', 'e@gmail.com', '123456', '0909000006', 'Staff', '2025-10-12 17:29:53', 1),
(7, 'Tran Van F', 'f@gmail.com', '123456', '0909000007', 'Staff', '2025-10-12 17:29:53', 1),
(8, 'Le Thi G', 'g@gmail.com', '123456', '0909000008', 'Staff', '2025-10-12 17:29:53', 1),
(9, 'Pham Van H', 'h@gmail.com', '123456', '0909000009', 'Staff', '2025-10-12 17:29:53', 1),
(10, 'Hoang Thi I', 'i@gmail.com', '123456', '0909000010', 'Staff', '2025-10-12 17:29:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phukien`
--

CREATE TABLE `phukien` (
  `MaPK` int(11) NOT NULL,
  `TenPK` varchar(150) NOT NULL,
  `Gia` decimal(10,2) DEFAULT 0.00,
  `MoTa` text DEFAULT NULL,
  `TrangThai` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phukien`
--

INSERT INTO `phukien` (`MaPK`, `TenPK`, `Gia`, `MoTa`, `TrangThai`) VALUES
(1, 'Mũ Bảo Hiểm MTB', 90.00, 'Mũ bảo hiểm địa hình', 1),
(2, 'Găng Tay Xe Đạp', 35.00, 'Găng tay chống trượt', 1),
(3, 'Bộ Truyền Động Shimano', 450.00, 'Bộ truyền động cao cấp', 1),
(4, 'Lốp Địa Hình Continental', 120.00, 'Lốp địa hình chất lượng', 1),
(5, 'Bình Nước CamelBak', 25.00, 'Bình nước tiện lợi', 1),
(6, 'Đèn Pha Xe Đạp', 40.00, 'Đèn LED chiếu sáng ban đêm', 1),
(7, 'Giỏ Xe Đạp', 50.00, 'Giỏ xe đạp tiện dụng', 1),
(8, 'Bàn Đạp Nhôm', 60.00, 'Bàn đạp xe đạp bền chắc', 1),
(9, 'Khóa Dây Xe Đạp', 30.00, 'Khóa an toàn cho xe', 1),
(10, 'Gương Chiếu Hậu', 20.00, 'Gương chiếu hậu cho xe', 1),
(11, 'Đồng Hồ Đo Nhịp Tim', 150.00, 'Theo dõi nhịp tim khi đạp xe', 1),
(12, 'Giá Đỡ Điện Thoại', 45.00, 'Giá đỡ điện thoại trên ghi-đông', 1),
(13, 'Túi Dụng Cụ Mini', 55.00, 'Túi gắn dưới yên chứa dụng cụ', 1),
(14, 'Bơm Xe Mini', 35.00, 'Bơm tay nhỏ gọn mang theo người', 1),
(15, 'Chắn Bùn Xe Đạp', 28.00, 'Chắn bùn trước và sau xe', 1),
(16, 'Đèn Hậu Cảnh Báo', 22.00, 'Đèn hậu nhấp nháy an toàn', 1),
(17, 'Yên Xe Gel Cao Cấp', 85.00, 'Yên ngồi êm ái, chống đau mỏi', 1),
(18, 'Tay Nắm Ghi Đông Cao Su', 40.00, 'Tay nắm mềm chống trượt', 1),
(19, 'Bọc Khung Xe Đạp', 25.00, 'Bảo vệ khung xe tránh trầy xước', 1),
(20, 'Bộ Dụng Cụ Sửa Xe', 110.00, 'Bộ dụng cụ đa năng cho xe đạp', 1),
(21, 'Chuông Xe Đạp', 15.00, 'Chuông nhỏ gọn, âm thanh to', 1),
(22, 'Miếng Phản Quang Bánh Xe', 10.00, 'Tăng khả năng nhận diện khi đêm', 1),
(23, 'Áo Gió Chống Nước', 95.00, 'Áo gió chuyên dụng cho đạp xe', 1),
(24, 'Bọc Giày Chống Nước', 50.00, 'Giữ giày khô khi đi mưa', 1),
(25, 'Dây Treo Xe Đạp Tường', 70.00, 'Giá treo xe gọn gàng trong nhà', 1),
(26, 'Đèn Pha Cảm Ứng', 65.00, 'Đèn pha tự động bật khi trời tối', 1),
(27, 'Kính Mát Thể Thao', 55.00, 'Kính chống tia UV khi đạp xe', 1),
(28, 'Túi Đeo Vai Dã Ngoại', 120.00, 'Túi du lịch gọn nhẹ cho dân phượt', 1),
(29, 'Bộ Dây Sên Chống Rỉ', 40.00, 'Bộ dây sên mạ kẽm chống rỉ', 1),
(30, 'Chân Chống Xe Đạp', 30.00, 'Chân chống giữ xe thăng bằng', 1),
(31, 'Dây Đeo Bình Nước', 20.00, 'Dây giữ bình nước tiện lợi', 1),
(32, 'Bộ Dán Trang Trí Xe', 15.00, 'Tem phản quang trang trí xe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phukien_hinhanh`
--

CREATE TABLE `phukien_hinhanh` (
  `MaHinh` int(11) NOT NULL,
  `MaPK` int(11) NOT NULL,
  `UrlHinh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phukien_hinhanh`
--

INSERT INTO `phukien_hinhanh` (`MaHinh`, `MaPK`, `UrlHinh`) VALUES
(1, 1, 'p1.jpg'),
(2, 1, 'a1.jpg'),
(3, 2, 'p2.jpg'),
(4, 2, 'a2.jpg'),
(5, 3, 'p3.jpg'),
(6, 3, 'a3.jpg'),
(7, 4, 'p4.jpg'),
(8, 4, 'a4.jpg'),
(9, 5, 'p5.jpg'),
(10, 5, 'a5.jpg'),
(11, 6, 'p6.jpg'),
(12, 6, 'a6.jpg'),
(13, 7, 'p7.jpg'),
(14, 7, 'a7.jpg'),
(15, 8, 'p8.jpg'),
(16, 8, 'a8.jpg'),
(17, 9, 'p9.jpg'),
(18, 9, 'a9.jpg'),
(19, 10, 'p10.jpg'),
(20, 10, 'a10.jpg'),
(21, 11, 'p11.jpg'),
(22, 11, 'a11.jpg'),
(23, 12, 'p12.jpg'),
(24, 12, 'a12.jpg'),
(25, 13, 'p13.jpg'),
(26, 13, 'a13.jpg'),
(27, 14, 'p14.jpg'),
(28, 14, 'a14.jpg'),
(29, 15, 'p15.jpg'),
(30, 15, 'a15.jpg'),
(31, 16, 'p16.jpg'),
(32, 16, 'a16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(150) NOT NULL,
  `ModelNo` varchar(50) DEFAULT NULL,
  `Gia` decimal(10,2) NOT NULL DEFAULT 0.00,
  `MoTa` text DEFAULT NULL,
  `SoLuongTon` int(11) DEFAULT 0,
  `MaDanhMuc` int(11) DEFAULT NULL,
  `MaThuongHieu` int(11) DEFAULT NULL,
  `TrangThai` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `ModelNo`, `Gia`, `MoTa`, `SoLuongTon`, `MaDanhMuc`, `MaThuongHieu`, `TrangThai`) VALUES
(1, 'Xe Đạp Thể Thao 1', 'SP001', 200.00, 'Xe đạp thể thao chất lượng cao', 10, 1, 1, 1),
(2, 'Xe Đạp Thể Thao 2', 'SP002', 210.00, 'Xe đạp thể thao chất lượng cao', 12, 1, 1, 1),
(3, 'Xe Đạp Thể Thao 3', 'SP003', 220.00, 'Xe đạp thể thao chất lượng cao', 15, 1, 1, 1),
(4, 'Xe Đạp Thể Thao 4', 'SP004', 230.00, 'Xe đạp thể thao chất lượng cao', 8, 1, 1, 1),
(5, 'Xe Đạp Thể Thao 5', 'SP005', 240.00, 'Xe đạp thể thao chất lượng cao', 20, 1, 1, 1),
(6, 'Xe Đạp Thể Thao 6', 'SP006', 250.00, 'Xe đạp thể thao chất lượng cao', 18, 1, 1, 1),
(7, 'Xe Đạp Thể Thao 7', 'SP007', 260.00, 'Xe đạp thể thao chất lượng cao', 14, 1, 1, 1),
(8, 'Xe Đạp Thể Thao 8', 'SP008', 270.00, 'Xe đạp thể thao chất lượng cao', 16, 1, 1, 1),
(9, 'Xe Đạp Thể Thao 9', 'SP009', 280.00, 'Xe đạp thể thao chất lượng cao', 12, 1, 1, 1),
(10, 'Xe Đạp Thể Thao 10', 'SP010', 290.00, 'Xe đạp thể thao chất lượng cao', 11, 1, 1, 1),
(11, 'Xe Đạp Thể Thao 11', 'SP011', 300.00, 'Xe đạp thể thao chất lượng cao', 9, 1, 1, 1),
(12, 'Xe Đạp Thể Thao 12', 'SP012', 310.00, 'Xe đạp thể thao chất lượng cao', 13, 1, 1, 1),
(13, 'Xe Đạp Thể Thao 13', 'SP013', 320.00, 'Xe đạp thể thao chất lượng cao', 10, 1, 1, 1),
(14, 'Xe Đạp Thể Thao 14', 'SP014', 330.00, 'Xe đạp thể thao chất lượng cao', 15, 1, 1, 1),
(15, 'Xe Đạp Thể Thao 15', 'SP015', 340.00, 'Xe đạp thể thao chất lượng cao', 17, 1, 1, 1),
(16, 'Xe Đạp Thể Thao 16', 'SP016', 350.00, 'Xe đạp thể thao chất lượng cao', 12, 1, 1, 1),
(17, 'Xe Đạp Thể Thao 17', 'SP017', 360.00, 'Xe đạp thể thao chất lượng cao', 14, 1, 1, 1),
(18, 'Xe Đạp Thể Thao 18', 'SP018', 370.00, 'Xe đạp thể thao chất lượng cao', 18, 1, 1, 1),
(19, 'Xe Đạp Thể Thao 19', 'SP019', 380.00, 'Xe đạp thể thao chất lượng cao', 20, 1, 1, 1),
(20, 'Xe Đạp Thể Thao 20', 'SP020', 390.00, 'Xe đạp thể thao chất lượng cao', 16, 1, 1, 1),
(21, 'Xe Đạp Thể Thao 21', 'SP021', 400.00, 'Xe đạp thể thao chất lượng cao', 12, 1, 1, 1),
(22, 'Xe Đạp Thể Thao 22', 'SP022', 410.00, 'Xe đạp thể thao chất lượng cao', 13, 1, 1, 1),
(23, 'Xe Đạp Thể Thao 23', 'SP023', 420.00, 'Xe đạp thể thao chất lượng cao', 15, 1, 1, 1),
(24, 'Xe Đạp Thể Thao 24', 'SP024', 430.00, 'Xe đạp thể thao chất lượng cao', 17, 1, 1, 1),
(25, 'Xe Đạp Thể Thao 25', 'SP025', 440.00, 'Xe đạp thể thao chất lượng cao', 19, 1, 1, 1),
(26, 'Xe Đạp Thể Thao 26', 'SP026', 450.00, 'Xe đạp thể thao chất lượng cao', 12, 1, 1, 1),
(27, 'Xe Đạp Thể Thao 27', 'SP027', 460.00, 'Xe đạp thể thao chất lượng cao', 14, 1, 1, 1),
(28, 'Xe Đạp Thể Thao 28', 'SP028', 470.00, 'Xe đạp thể thao chất lượng cao', 15, 1, 1, 1),
(29, 'Xe Đạp Thể Thao 29', 'SP029', 480.00, 'Xe đạp thể thao chất lượng cao', 16, 1, 1, 1),
(30, 'Xe Đạp Thể Thao 30', 'SP030', 490.00, 'Xe đạp thể thao chất lượng cao', 17, 1, 1, 1),
(31, 'Xe Đạp Thể Thao 31', 'SP031', 500.00, 'Xe đạp thể thao chất lượng cao', 18, 1, 1, 1),
(32, 'Xe Đạp Thể Thao 32', 'SP032', 510.00, 'Xe đạp thể thao chất lượng cao', 12, 1, 1, 1),
(33, 'Xe Đạp Thể Thao 33', 'SP033', 520.00, 'Xe đạp thể thao chất lượng cao', 13, 1, 1, 1),
(34, 'Xe Đạp Thể Thao 34', 'SP034', 530.00, 'Xe đạp thể thao chất lượng cao', 14, 1, 1, 1),
(35, 'Xe Đạp Thể Thao 35', 'SP035', 540.00, 'Xe đạp thể thao chất lượng cao', 15, 1, 1, 1),
(36, 'Xe Đạp Thể Thao 36', 'SP036', 550.00, 'Xe đạp thể thao chất lượng cao', 16, 1, 1, 1),
(37, 'Xe Đạp Thể Thao 37', 'SP037', 560.00, 'Xe đạp thể thao chất lượng cao', 17, 1, 1, 1),
(38, 'Xe Đạp Thể Thao 38', 'SP038', 570.00, 'Xe đạp thể thao chất lượng cao', 18, 1, 1, 1),
(39, 'Xe Đạp Thể Thao 39', 'SP039', 580.00, 'Xe đạp thể thao chất lượng cao', 19, 1, 1, 1),
(40, 'Xe Đạp Thể Thao 40', 'SP040', 590.00, 'Xe đạp thể thao chất lượng cao', 20, 1, 1, 1),
(41, 'Xe Đạp Thể Thao 41', 'SP041', 600.00, 'Xe đạp thể thao chất lượng cao', 15, 1, 1, 1),
(42, 'Xe Đạp Thể Thao 42', 'SP042', 610.00, 'Xe đạp thể thao chất lượng cao', 16, 1, 1, 1),
(43, 'Xe Đạp Thể Thao 43', 'SP043', 620.00, 'Xe đạp thể thao chất lượng cao', 17, 1, 1, 1),
(44, 'Xe Đạp Thể Thao 44', 'SP044', 630.00, 'Xe đạp thể thao chất lượng cao', 18, 1, 1, 1),
(45, 'Xe Đạp Thể Thao 45', 'SP045', 640.00, 'Xe đạp thể thao chất lượng cao', 20, 1, 1, 1),
(46, 'Xe đạp điện', 'SP000', 20000.00, 'xe điện vinfast', 30, 1, 2, 1),
(47, 'xe điện thể thao mỹ', 'SP000', 200000.00, 'tesla xe đạp', 63, 1, 2, 1),
(48, 'xe điện thể thao mỹ 2', 'SP000', 20000.00, 'heheheheh', 63, 1, 2, 1),
(49, 'xe điện thể thao mỹ 2', 'SP000', 20000.00, 'heheheheh', 63, 1, 2, 1),
(50, 'xe điện thể thao mỹ 2', 'SP000', 20000.00, 'heheheheh', 63, 1, 2, 1),
(51, 'xe điện thể thao mỹ 2', 'SP000', 20000.00, 'heheheheh', 63, 1, 2, 1),
(52, 'xe điện thể thao mỹ 2', 'SP000', 20000.00, 'heheheheh', 63, 1, 2, 1),
(54, 'test', 'SP000', 5000.00, 'test thêm sản phẩm mới sau khi dùng orm', 1, 12, 2, 1),
(55, 'test lần 2', 'SP000', 50002.00, 'mô tả sản phẩm test lần 2', 10, 12, 2, 1),
(56, 'test lần 3', 'SP000', 500023.00, NULL, 10, 12, 2, 1),
(57, 'test lần 4', 'SP000', 500023.00, 'abc', 10, 12, 2, 1),
(58, 'test lần 5', 'SP000', 5000235.00, 'test lần 5: thêm ảnh + thêm sp dc xử lý ở model sản phẩm', 105, 12, 2, 1),
(59, 'Test lần 6', 'SP000', 2356.00, 'test: chuyển req từ obj sang arr', 1056, 13, 2, 1),
(60, 'Test lần 6', 'SP000', 2356.00, 'test: chuyển req từ obj sang arr', 1056, 13, 2, 1),
(61, 'Test lần 6', 'SP000', 2356.00, 'test: chuyển req từ obj sang arr', 1056, 13, 2, 1),
(62, 'Test lần 7', 'SP000', 2356.00, 'test  lan 7', 1056, 13, 2, 1);

--
-- Triggers `sanpham`
--
DELIMITER $$
CREATE TRIGGER `trg_sanpham_modelno` BEFORE INSERT ON `sanpham` FOR EACH ROW BEGIN
    IF NEW.ModelNo IS NULL OR NEW.ModelNo = '' THEN
        SET NEW.ModelNo = CONCAT('SP', LPAD(NEW.MaSP, 3, '0'));
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sanphamlienquan`
--

CREATE TABLE `sanphamlienquan` (
  `MaLienQuan` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `MaPK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanphamlienquan`
--

INSERT INTO `sanphamlienquan` (`MaLienQuan`, `MaSP`, `MaPK`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 2, 4),
(5, 3, 5),
(6, 3, 6),
(7, 4, 7),
(8, 5, 8),
(9, 6, 9),
(10, 7, 10);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham_hinhanh`
--

CREATE TABLE `sanpham_hinhanh` (
  `MaHinh` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `UrlHinh` varchar(255) NOT NULL,
  `LoaiHinh` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham_hinhanh`
--

INSERT INTO `sanpham_hinhanh` (`MaHinh`, `MaSP`, `UrlHinh`, `LoaiHinh`) VALUES
(1, 1, 'bik1.jpg', NULL),
(2, 2, 'bik2.jpg', NULL),
(3, 3, 'bik3.jpg', NULL),
(4, 4, 'bik4.jpg', NULL),
(5, 5, 'bik5.jpg', NULL),
(6, 6, 'r1.jpg', NULL),
(7, 7, 'r2.jpg', NULL),
(8, 8, 'r3.jpg', NULL),
(9, 9, 'r4.jpg', NULL),
(10, 10, 's1.jpg', NULL),
(11, 11, 's2.jpg', NULL),
(12, 12, 's3.jpg', NULL),
(13, 13, 's4.jpg', NULL),
(14, 46, '1760258053_2.jpg', NULL),
(15, 47, '1760258276_3.jpg', NULL),
(16, 48, '1760258740_2.jpg', NULL),
(17, 49, '1760259870_2.jpg', NULL),
(18, 50, '1760259890_2.jpg', NULL),
(19, 51, '1760259899_2.jpg', NULL),
(20, 52, '1760259984_2.jpg', NULL),
(21, 54, '1761492646_123.png', NULL),
(22, 55, '1761493412_311566181_3614409325456117_5425595993847080767_n.jpg', NULL),
(23, 56, '1761494009_Untitlennd.png', NULL),
(24, 58, '1761495272_substring_1.jpg', NULL),
(25, 61, '1761558642_338926456_788992762199834_3971469472443606335_n.jpg', NULL),
(26, 62, '1761559166_123.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham_size`
--

CREATE TABLE `sanpham_size` (
  `MaSize` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `Size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham_size`
--

INSERT INTO `sanpham_size` (`MaSize`, `MaSP`, `Size`) VALUES
(1, 1, 'S'),
(2, 1, 'M'),
(3, 2, 'M'),
(4, 2, 'L'),
(5, 3, 'S'),
(6, 3, 'M'),
(7, 4, 'L'),
(8, 5, 'M'),
(9, 6, 'S'),
(10, 7, 'M');

-- --------------------------------------------------------

--
-- Table structure for table `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `MaThuongHieu` int(11) NOT NULL,
  `TenThuongHieu` varchar(100) NOT NULL,
  `MoTa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thuonghieu`
--

INSERT INTO `thuonghieu` (`MaThuongHieu`, `TenThuongHieu`, `MoTa`) VALUES
(1, 'Giant', 'Thương hiệu xe đạp nổi tiếng'),
(2, 'Trek', 'Xe đạp thể thao và địa hình cao cấp'),
(3, 'Specialized', 'Xe đạp đua và MTB chuyên nghiệp'),
(4, 'Merida', 'Xe đạp chất lượng tốt, giá hợp lý'),
(5, 'Shimano', 'Phụ kiện và bộ truyền động cao cấp'),
(6, 'Fox', 'Phụ kiện địa hình và giảm xóc'),
(7, 'Bell', 'Mũ bảo hiểm an toàn'),
(8, 'Giro', 'Mũ bảo hiểm thể thao và găng tay'),
(9, 'Continental', 'Lốp và vành xe chất lượng'),
(10, 'CamelBak', 'Bình nước và phụ kiện tiện ích');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`MaCTGH`),
  ADD KEY `MaGioHang` (`MaGioHang`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDanhMuc`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaGioHang`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `phukien`
--
ALTER TABLE `phukien`
  ADD PRIMARY KEY (`MaPK`);

--
-- Indexes for table `phukien_hinhanh`
--
ALTER TABLE `phukien_hinhanh`
  ADD PRIMARY KEY (`MaHinh`),
  ADD KEY `MaPK` (`MaPK`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaDanhMuc` (`MaDanhMuc`),
  ADD KEY `MaThuongHieu` (`MaThuongHieu`);

--
-- Indexes for table `sanphamlienquan`
--
ALTER TABLE `sanphamlienquan`
  ADD PRIMARY KEY (`MaLienQuan`),
  ADD KEY `MaSP` (`MaSP`),
  ADD KEY `MaPK` (`MaPK`);

--
-- Indexes for table `sanpham_hinhanh`
--
ALTER TABLE `sanpham_hinhanh`
  ADD PRIMARY KEY (`MaHinh`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `sanpham_size`
--
ALTER TABLE `sanpham_size`
  ADD PRIMARY KEY (`MaSize`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`MaThuongHieu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  MODIFY `MaCTGH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MaDanhMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MaGioHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `phukien`
--
ALTER TABLE `phukien`
  MODIFY `MaPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `phukien_hinhanh`
--
ALTER TABLE `phukien_hinhanh`
  MODIFY `MaHinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `sanphamlienquan`
--
ALTER TABLE `sanphamlienquan`
  MODIFY `MaLienQuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sanpham_hinhanh`
--
ALTER TABLE `sanpham_hinhanh`
  MODIFY `MaHinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sanpham_size`
--
ALTER TABLE `sanpham_size`
  MODIFY `MaSize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `MaThuongHieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `chitietgiohang_ibfk_1` FOREIGN KEY (`MaGioHang`) REFERENCES `giohang` (`MaGioHang`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietgiohang_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`) ON DELETE CASCADE;

--
-- Constraints for table `phukien_hinhanh`
--
ALTER TABLE `phukien_hinhanh`
  ADD CONSTRAINT `phukien_hinhanh_ibfk_1` FOREIGN KEY (`MaPK`) REFERENCES `phukien` (`MaPK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaDanhMuc`) REFERENCES `danhmuc` (`MaDanhMuc`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaThuongHieu`) REFERENCES `thuonghieu` (`MaThuongHieu`);

--
-- Constraints for table `sanphamlienquan`
--
ALTER TABLE `sanphamlienquan`
  ADD CONSTRAINT `sanphamlienquan_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE,
  ADD CONSTRAINT `sanphamlienquan_ibfk_2` FOREIGN KEY (`MaPK`) REFERENCES `phukien` (`MaPK`) ON DELETE CASCADE;

--
-- Constraints for table `sanpham_hinhanh`
--
ALTER TABLE `sanpham_hinhanh`
  ADD CONSTRAINT `sanpham_hinhanh_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE;

--
-- Constraints for table `sanpham_size`
--
ALTER TABLE `sanpham_size`
  ADD CONSTRAINT `sanpham_size_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
