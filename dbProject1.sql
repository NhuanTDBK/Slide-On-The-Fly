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
('IT3030', 'Nh?p m�n CNPM', 'Mon co so nganh'),
('IT3060', 'Ki?n tr�c m�y t�nh', 'Sinh vi�n du?c trang b? c�c ki?n th?c cos?v?\r\nki?n tr�c t?p l?nh v� t?ch?c c?a m�y t�nh, cung \r\nnhunh?ng v?n d?cob?n trong thi?t k?m�y \r\nt�nh. \r\nn? Sau khi h?c xong h?c ph?n n�y, sinh vi�n c� \r\nkh?nang:\r\nn? T�m hi?u ki?n tr�c t?p l?nh c?a c�c b?x?l�c?th?\r\nn? L?p tr�nh h?p ng?tr�n m?t s?ki?n tr�c \r\nn? ��nh gi� hi?u nang c?a c�c h?m�y t�nh\r\nn? Khai th�c v� qu?n tr?hi?u qu?c�c h?th?ng m�y t�nh\r\nn? Ph�n t�ch v� thi?t k?m�y t�nh'),
('IT3090', 'Co s? d? li?u', '�?i cuong v? co s? d? li?u'),
('IT3100', 'L?p tr�nh hu?ng d?i tu?ng', 'Thi?t k? hu?ng d?i tu?ng'),
('IT3120', 'PTKHT', 'Thi?t k?'),
('IT4040', 'Tr� tu? nh�n t?o', 'Thi?t k? tr� tu? nh�n t?o');

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
