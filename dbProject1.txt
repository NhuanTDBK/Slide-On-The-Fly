-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2014 at 02:03 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE IF NOT EXISTS `monhoc` (
  `mamonhoc` varchar(10) NOT NULL,
  `tenmonhoc` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mieuta` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`mamonhoc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`mamonhoc`, `tenmonhoc`, `mieuta`) VALUES
('IT3030', 'Nh?p môn CNPM', 'Mon co so nganh'),
('IT3060', 'Ki?n trúc máy tính', 'Sinh viên du?c trang b? các ki?n th?c cos?v?\r\nki?n trúc t?p l?nh và t?ch?c c?a máy tính, cung \r\nnhunh?ng v?n d?cob?n trong thi?t k?máy \r\ntính. \r\nn? Sau khi h?c xong h?c ph?n này, sinh viên có \r\nkh?nang:\r\nn? Tìm hi?u ki?n trúc t?p l?nh c?a các b?x?lýc?th?\r\nn? L?p trình h?p ng?trên m?t s?ki?n trúc \r\nn? Ðánh giá hi?u nang c?a các h?máy tính\r\nn? Khai thác và qu?n tr?hi?u qu?các h?th?ng máy tính\r\nn? Phân tích và thi?t k?máy tính'),
('IT3090', 'Co s? d? li?u', 'Ð?i cuong v? co s? d? li?u'),
('IT3100', 'L?p trình hu?ng d?i tu?ng', 'Thi?t k? hu?ng d?i tu?ng'),
('IT3120', 'PTKHT', 'Thi?t k?'),
('IT4040', 'Trí tu? nhân t?o', 'Thi?t k? trí tu? nhân t?o');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `noidung` text,
  `tags` varchar(60) DEFAULT NULL,
  `tieude` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ID_idx` (`tags`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `noidung`, `tags`, `tieude`) VALUES
(1, 'is.hust.edu.vn', 'IT3030', 'Slide 1'),
(2, 'soict.hust.edu.vn', 'IT3030', 'Slide 2'),
(3, 'moodle-truntv.com', 'IT3090', 'Chuong 1'),
(4, 'soict.hust.edu.vn', 'IT3100', 'Chuong 5'),
(5, 'soict.hust.edu.vn', 'IT3120', 'chuong 6');

-- --------------------------------------------------------

--
-- Table structure for table `thongtincanhan`
--

CREATE TABLE IF NOT EXISTS `thongtincanhan` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `tendangnhap` varchar(100) NOT NULL,
  `matkhau` varchar(20) NOT NULL,
  `tendaydu` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MSSV` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `thongtincanhan`
--

INSERT INTO `thongtincanhan` (`id`, `tendangnhap`, `matkhau`, `tendaydu`, `MSSV`, `email`) VALUES
(1, 'admin', 'admin', 'admin', 20122212, 'localhost@localhost'),
(2, 'NhuanTD', 'nhuan', 'Tran Duc Nhuan', 20122206, 'tranducnhuan@gmail.c'),
(3, 'NguyenPD', 'nguyen', 'Pham Duy Nguye', 20122204, 'phamduynguyen@gmail.'),
(4, 'NhatHQ', 'nhat', 'Hoang Quoc Hon', 20122244, 'hongnhat@gmail.com');
