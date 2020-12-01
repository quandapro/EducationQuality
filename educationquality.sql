-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 04:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educationquality`
--

-- --------------------------------------------------------

--
-- Table structure for table `chuongtrinhdaotao`
--

CREATE TABLE `chuongtrinhdaotao` (
  `id_CTDT` int(11) NOT NULL,
  `ten_CTDT` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_nguoiKD` int(11) DEFAULT NULL,
  `ngay_kd` date DEFAULT NULL,
  `ngayHetHan_kd` date DEFAULT NULL,
  `thoiHan` int(11) DEFAULT NULL,
  `vanBan_kd` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chuongtrinhdaotao`
--

INSERT INTO `chuongtrinhdaotao` (`id_CTDT`, `ten_CTDT`, `id_nguoiKD`, `ngay_kd`, `ngayHetHan_kd`, `thoiHan`, `vanBan_kd`) VALUES
(1, 'Chương trình đào tạo chuẩn trình độ đại học ngành VIệt Nam học - Trường Đại học Khoa học Xã hội và Nhân văn - ĐHQGHN', 1, '2017-08-15', '2022-10-02', 4, 'Văn bản kiểm định');

-- --------------------------------------------------------

--
-- Table structure for table `cosogiaoduc`
--

CREATE TABLE `cosogiaoduc` (
  `id_CSGD` int(11) NOT NULL,
  `ten_CSGD` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_nguoiKD` int(11) DEFAULT NULL,
  `ngay_kd` date DEFAULT NULL,
  `ngayHetHan_kd` date DEFAULT NULL,
  `thoiHan` int(11) DEFAULT NULL,
  `vanBan_kd` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cosogiaoduc`
--

INSERT INTO `cosogiaoduc` (`id_CSGD`, `ten_CSGD`, `id_nguoiKD`, `ngay_kd`, `ngayHetHan_kd`, `thoiHan`, `vanBan_kd`) VALUES
(1, 'Đại học Khoa học Xã hội và Nhân văn - ĐHQGHN', 1, '2016-07-18', '2021-09-09', 4, 'Văn bản kiểm định');

-- --------------------------------------------------------

--
-- Table structure for table `donvikiemdinh`
--

CREATE TABLE `donvikiemdinh` (
  `id_DVKD` int(11) NOT NULL,
  `tenDonVi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donvikiemdinh`
--

INSERT INTO `donvikiemdinh` (`id_DVKD`, `tenDonVi`) VALUES
(1, 'Đại học Khoa học Tự nhiên - ĐHQGHN'),
(2, 'Đại học Khoa học Xã hội và Nhân văn - ĐHQGHN');

-- --------------------------------------------------------

--
-- Table structure for table `nguoikd`
--

CREATE TABLE `nguoikd` (
  `id_nguoiKD` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaySinh` date DEFAULT NULL,
  `queQuan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_DVKD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoikd`
--

INSERT INTO `nguoikd` (`id_nguoiKD`, `id_user`, `full_name`, `ngaySinh`, `queQuan`, `id_DVKD`) VALUES
(1, 1, 'Đỗ Xuân Hiếu', '1999-10-18', 'Thái Bình', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tieuchi_csgd`
--

CREATE TABLE `tieuchi_csgd` (
  `id_CSGD` int(11) NOT NULL,
  `tieuChuan1` int(11) DEFAULT NULL,
  `tieuChi1_1` tinyint(1) DEFAULT NULL,
  `tieuChi1_2` tinyint(1) DEFAULT NULL,
  `tieuChuan2` int(11) DEFAULT NULL,
  `tieuChi2_1` tinyint(1) DEFAULT NULL,
  `tieuChi2_2` tinyint(1) DEFAULT NULL,
  `tieuChi2_3` tinyint(1) DEFAULT NULL,
  `tieuChi2_4` tinyint(1) DEFAULT NULL,
  `tieuChi2_5` tinyint(1) DEFAULT NULL,
  `tieuChi2_6` tinyint(1) DEFAULT NULL,
  `tieuChi2_7` tinyint(1) DEFAULT NULL,
  `tieuChuan3` int(11) DEFAULT NULL,
  `tieuChi3_1` tinyint(1) DEFAULT NULL,
  `tieuChi3_2` tinyint(1) DEFAULT NULL,
  `tieuChi3_3` tinyint(1) DEFAULT NULL,
  `tieuChi3_4` tinyint(1) DEFAULT NULL,
  `tieuChi3_5` tinyint(1) DEFAULT NULL,
  `tieuChi3_6` tinyint(1) DEFAULT NULL,
  `tieuChuan4` int(11) DEFAULT NULL,
  `tieuChi4_1` tinyint(1) DEFAULT NULL,
  `tieuChi4_2` tinyint(1) DEFAULT NULL,
  `tieuChi4_3` tinyint(1) DEFAULT NULL,
  `tieuChi4_4` tinyint(1) DEFAULT NULL,
  `tieuChi4_5` tinyint(1) DEFAULT NULL,
  `tieuChi4_6` tinyint(1) DEFAULT NULL,
  `tieuChi4_7` tinyint(1) DEFAULT NULL,
  `tieuChuan5` int(11) DEFAULT NULL,
  `tieuChi5_1` tinyint(1) DEFAULT NULL,
  `tieuChi5_2` tinyint(1) DEFAULT NULL,
  `tieuChi5_3` tinyint(1) DEFAULT NULL,
  `tieuChi5_4` tinyint(1) DEFAULT NULL,
  `tieuChi5_5` tinyint(1) DEFAULT NULL,
  `tieuChi5_6` tinyint(1) DEFAULT NULL,
  `tieuChi5_7` tinyint(1) DEFAULT NULL,
  `tieuChi5_8` tinyint(1) DEFAULT NULL,
  `tieuChuan6` int(11) DEFAULT NULL,
  `tieuChi6_1` tinyint(1) DEFAULT NULL,
  `tieuChi6_2` tinyint(1) DEFAULT NULL,
  `tieuChi6_3` tinyint(1) DEFAULT NULL,
  `tieuChi6_4` tinyint(1) DEFAULT NULL,
  `tieuChi6_5` tinyint(1) DEFAULT NULL,
  `tieuChi6_6` tinyint(1) DEFAULT NULL,
  `tieuChi6_7` tinyint(1) DEFAULT NULL,
  `tieuChi6_8` tinyint(1) DEFAULT NULL,
  `tieuChi6_9` tinyint(1) DEFAULT NULL,
  `tieuChuan7` int(11) DEFAULT NULL,
  `tieuChi7_1` tinyint(1) DEFAULT NULL,
  `tieuChi7_2` tinyint(1) DEFAULT NULL,
  `tieuChi7_3` tinyint(1) DEFAULT NULL,
  `tieuChi7_4` tinyint(1) DEFAULT NULL,
  `tieuChi7_5` tinyint(1) DEFAULT NULL,
  `tieuChi7_6` tinyint(1) DEFAULT NULL,
  `tieuChi7_7` tinyint(1) DEFAULT NULL,
  `tieuChuan8` int(11) DEFAULT NULL,
  `tieuChi8_1` tinyint(1) DEFAULT NULL,
  `tieuChi8_2` tinyint(1) DEFAULT NULL,
  `tieuChi8_3` tinyint(1) DEFAULT NULL,
  `tieuChuan9` int(11) DEFAULT NULL,
  `tieuChi9_1` tinyint(1) DEFAULT NULL,
  `tieuChi9_2` tinyint(1) DEFAULT NULL,
  `tieuChi9_3` tinyint(1) DEFAULT NULL,
  `tieuChi9_4` tinyint(1) DEFAULT NULL,
  `tieuChi9_5` tinyint(1) DEFAULT NULL,
  `tieuChi9_6` tinyint(1) DEFAULT NULL,
  `tieuChi9_7` tinyint(1) DEFAULT NULL,
  `tieuChi9_8` tinyint(1) DEFAULT NULL,
  `tieuChi9_9` tinyint(1) DEFAULT NULL,
  `tieuChuan10` int(11) DEFAULT NULL,
  `tieuChi10_1` tinyint(1) DEFAULT NULL,
  `tieuChi10_2` tinyint(1) DEFAULT NULL,
  `tieuChi10_3` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tieuchi_csgd`
--

INSERT INTO `tieuchi_csgd` (`id_CSGD`, `tieuChuan1`, `tieuChi1_1`, `tieuChi1_2`, `tieuChuan2`, `tieuChi2_1`, `tieuChi2_2`, `tieuChi2_3`, `tieuChi2_4`, `tieuChi2_5`, `tieuChi2_6`, `tieuChi2_7`, `tieuChuan3`, `tieuChi3_1`, `tieuChi3_2`, `tieuChi3_3`, `tieuChi3_4`, `tieuChi3_5`, `tieuChi3_6`, `tieuChuan4`, `tieuChi4_1`, `tieuChi4_2`, `tieuChi4_3`, `tieuChi4_4`, `tieuChi4_5`, `tieuChi4_6`, `tieuChi4_7`, `tieuChuan5`, `tieuChi5_1`, `tieuChi5_2`, `tieuChi5_3`, `tieuChi5_4`, `tieuChi5_5`, `tieuChi5_6`, `tieuChi5_7`, `tieuChi5_8`, `tieuChuan6`, `tieuChi6_1`, `tieuChi6_2`, `tieuChi6_3`, `tieuChi6_4`, `tieuChi6_5`, `tieuChi6_6`, `tieuChi6_7`, `tieuChi6_8`, `tieuChi6_9`, `tieuChuan7`, `tieuChi7_1`, `tieuChi7_2`, `tieuChi7_3`, `tieuChi7_4`, `tieuChi7_5`, `tieuChi7_6`, `tieuChi7_7`, `tieuChuan8`, `tieuChi8_1`, `tieuChi8_2`, `tieuChi8_3`, `tieuChuan9`, `tieuChi9_1`, `tieuChi9_2`, `tieuChi9_3`, `tieuChi9_4`, `tieuChi9_5`, `tieuChi9_6`, `tieuChi9_7`, `tieuChi9_8`, `tieuChi9_9`, `tieuChuan10`, `tieuChi10_1`, `tieuChi10_2`, `tieuChi10_3`) VALUES
(1, 2, 1, 1, 7, 1, 1, 1, 1, 1, 1, 1, 6, 1, 1, 1, 1, 1, 1, 7, 1, 1, 1, 1, 1, 1, 1, 8, 1, 1, 1, 1, 1, 1, 1, 1, 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 4, 1, 0, 0, 1, 1, 1, 0, 3, 1, 1, 1, 7, 1, 1, 1, 1, 1, 1, 0, 0, 1, 3, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tieuchi_ctdt`
--

CREATE TABLE `tieuchi_ctdt` (
  `id_CTDT` int(11) NOT NULL,
  `tieuChuan1` int(11) DEFAULT NULL,
  `tieuChi1_1` tinyint(1) DEFAULT NULL,
  `tieuChi1_2` tinyint(1) DEFAULT NULL,
  `tieuChi1_3` tinyint(1) DEFAULT NULL,
  `tieuChuan2` int(11) DEFAULT NULL,
  `tieuChi2_1` tinyint(1) DEFAULT NULL,
  `tieuChi2_2` tinyint(1) DEFAULT NULL,
  `tieuChi2_3` tinyint(1) DEFAULT NULL,
  `tieuChuan3` int(11) DEFAULT NULL,
  `tieuChi3_1` tinyint(1) DEFAULT NULL,
  `tieuChi3_2` tinyint(1) DEFAULT NULL,
  `tieuChi3_3` tinyint(1) DEFAULT NULL,
  `tieuChuan4` int(11) DEFAULT NULL,
  `tieuChi4_1` tinyint(1) DEFAULT NULL,
  `tieuChi4_2` tinyint(1) DEFAULT NULL,
  `tieuChi4_3` tinyint(1) DEFAULT NULL,
  `tieuChuan5` int(11) DEFAULT NULL,
  `tieuChi5_1` tinyint(1) DEFAULT NULL,
  `tieuChi5_2` tinyint(1) DEFAULT NULL,
  `tieuChi5_3` tinyint(1) DEFAULT NULL,
  `tieuChi5_4` tinyint(1) DEFAULT NULL,
  `tieuChi5_5` tinyint(1) DEFAULT NULL,
  `tieuChuan6` int(11) DEFAULT NULL,
  `tieuChi6_1` tinyint(1) DEFAULT NULL,
  `tieuChi6_2` tinyint(1) DEFAULT NULL,
  `tieuChi6_3` tinyint(1) DEFAULT NULL,
  `tieuChi6_4` tinyint(1) DEFAULT NULL,
  `tieuChi6_5` tinyint(1) DEFAULT NULL,
  `tieuChi6_6` tinyint(1) DEFAULT NULL,
  `tieuChi6_7` tinyint(1) DEFAULT NULL,
  `tieuChuan7` int(11) DEFAULT NULL,
  `tieuChi7_1` tinyint(1) DEFAULT NULL,
  `tieuChi7_2` tinyint(1) DEFAULT NULL,
  `tieuChi7_3` tinyint(1) DEFAULT NULL,
  `tieuChi7_4` tinyint(1) DEFAULT NULL,
  `tieuChi7_5` tinyint(1) DEFAULT NULL,
  `tieuChuan8` int(11) DEFAULT NULL,
  `tieuChi8_1` tinyint(1) DEFAULT NULL,
  `tieuChi8_2` tinyint(1) DEFAULT NULL,
  `tieuChi8_3` tinyint(1) DEFAULT NULL,
  `tieuChi8_4` tinyint(1) DEFAULT NULL,
  `tieuChi8_5` tinyint(1) DEFAULT NULL,
  `tieuChuan9` int(11) DEFAULT NULL,
  `tieuChi9_1` tinyint(1) DEFAULT NULL,
  `tieuChi9_2` tinyint(1) DEFAULT NULL,
  `tieuChi9_3` tinyint(1) DEFAULT NULL,
  `tieuChi9_4` tinyint(1) DEFAULT NULL,
  `tieuChi9_5` tinyint(1) DEFAULT NULL,
  `tieuChuan10` int(11) DEFAULT NULL,
  `tieuChi10_1` tinyint(1) DEFAULT NULL,
  `tieuChi10_2` tinyint(1) DEFAULT NULL,
  `tieuChi10_3` tinyint(1) DEFAULT NULL,
  `tieuChi10_4` tinyint(1) DEFAULT NULL,
  `tieuChi10_5` tinyint(1) DEFAULT NULL,
  `tieuChi10_6` tinyint(1) DEFAULT NULL,
  `tieuChuan11` int(11) DEFAULT NULL,
  `tieuChi11_1` tinyint(1) DEFAULT NULL,
  `tieuChi11_2` tinyint(1) DEFAULT NULL,
  `tieuChi11_3` tinyint(1) DEFAULT NULL,
  `tieuChi11_4` tinyint(1) DEFAULT NULL,
  `tieuChi11_5` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tieuchi_ctdt`
--

INSERT INTO `tieuchi_ctdt` (`id_CTDT`, `tieuChuan1`, `tieuChi1_1`, `tieuChi1_2`, `tieuChi1_3`, `tieuChuan2`, `tieuChi2_1`, `tieuChi2_2`, `tieuChi2_3`, `tieuChuan3`, `tieuChi3_1`, `tieuChi3_2`, `tieuChi3_3`, `tieuChuan4`, `tieuChi4_1`, `tieuChi4_2`, `tieuChi4_3`, `tieuChuan5`, `tieuChi5_1`, `tieuChi5_2`, `tieuChi5_3`, `tieuChi5_4`, `tieuChi5_5`, `tieuChuan6`, `tieuChi6_1`, `tieuChi6_2`, `tieuChi6_3`, `tieuChi6_4`, `tieuChi6_5`, `tieuChi6_6`, `tieuChi6_7`, `tieuChuan7`, `tieuChi7_1`, `tieuChi7_2`, `tieuChi7_3`, `tieuChi7_4`, `tieuChi7_5`, `tieuChuan8`, `tieuChi8_1`, `tieuChi8_2`, `tieuChi8_3`, `tieuChi8_4`, `tieuChi8_5`, `tieuChuan9`, `tieuChi9_1`, `tieuChi9_2`, `tieuChi9_3`, `tieuChi9_4`, `tieuChi9_5`, `tieuChuan10`, `tieuChi10_1`, `tieuChi10_2`, `tieuChi10_3`, `tieuChi10_4`, `tieuChi10_5`, `tieuChi10_6`, `tieuChuan11`, `tieuChi11_1`, `tieuChi11_2`, `tieuChi11_3`, `tieuChi11_4`, `tieuChi11_5`) VALUES
(1, 2, 4, 3, 4, 3, 4, 4, 4, 3, 4, 4, 5, 3, 5, 5, 5, 4, 3, 4, 4, 4, 5, 6, 4, 4, 5, 4, 3, 4, 5, 4, 3, 5, 4, 4, 4, 5, 4, 5, 4, 4, 4, 4, 4, 4, 3, 4, 4, 3, 3, 4, 3, 4, 3, 4, 4, 4, 5, 4, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `full_name`, `usename`, `password`, `created_at`, `role`) VALUES
(1, 'Đỗ Xuân Hiếu', 'admin', 'admin', '2020-11-24 14:44:35', 0),
(2, 'Phạm Thị Thu Hạnh', 'user', 'user', '2020-11-24 14:45:08', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chuongtrinhdaotao`
--
ALTER TABLE `chuongtrinhdaotao`
  ADD PRIMARY KEY (`id_CTDT`),
  ADD KEY `id_nguoiKD` (`id_nguoiKD`);

--
-- Indexes for table `cosogiaoduc`
--
ALTER TABLE `cosogiaoduc`
  ADD PRIMARY KEY (`id_CSGD`),
  ADD KEY `id_nguoiKD` (`id_nguoiKD`);

--
-- Indexes for table `donvikiemdinh`
--
ALTER TABLE `donvikiemdinh`
  ADD PRIMARY KEY (`id_DVKD`);

--
-- Indexes for table `nguoikd`
--
ALTER TABLE `nguoikd`
  ADD PRIMARY KEY (`id_nguoiKD`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_DVKD` (`id_DVKD`);

--
-- Indexes for table `tieuchi_csgd`
--
ALTER TABLE `tieuchi_csgd`
  ADD PRIMARY KEY (`id_CSGD`);

--
-- Indexes for table `tieuchi_ctdt`
--
ALTER TABLE `tieuchi_ctdt`
  ADD PRIMARY KEY (`id_CTDT`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chuongtrinhdaotao`
--
ALTER TABLE `chuongtrinhdaotao`
  MODIFY `id_CTDT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cosogiaoduc`
--
ALTER TABLE `cosogiaoduc`
  MODIFY `id_CSGD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nguoikd`
--
ALTER TABLE `nguoikd`
  MODIFY `id_nguoiKD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chuongtrinhdaotao`
--
ALTER TABLE `chuongtrinhdaotao`
  ADD CONSTRAINT `chuongtrinhdaotao_ibfk_1` FOREIGN KEY (`id_nguoiKD`) REFERENCES `nguoikd` (`id_nguoiKD`);

--
-- Constraints for table `cosogiaoduc`
--
ALTER TABLE `cosogiaoduc`
  ADD CONSTRAINT `cosogiaoduc_ibfk_1` FOREIGN KEY (`id_nguoiKD`) REFERENCES `nguoikd` (`id_nguoiKD`);

--
-- Constraints for table `nguoikd`
--
ALTER TABLE `nguoikd`
  ADD CONSTRAINT `nguoikd_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `nguoikd_ibfk_2` FOREIGN KEY (`id_DVKD`) REFERENCES `donvikiemdinh` (`id_DVKD`);

--
-- Constraints for table `tieuchi_csgd`
--
ALTER TABLE `tieuchi_csgd`
  ADD CONSTRAINT `tieuchi_csgd_ibfk_1` FOREIGN KEY (`id_CSGD`) REFERENCES `cosogiaoduc` (`id_CSGD`);

--
-- Constraints for table `tieuchi_ctdt`
--
ALTER TABLE `tieuchi_ctdt`
  ADD CONSTRAINT `tieuchi_ctdt_ibfk_1` FOREIGN KEY (`id_CTDT`) REFERENCES `chuongtrinhdaotao` (`id_CTDT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
