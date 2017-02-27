-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 27, 2017 lúc 07:39 SA
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fit`
--
CREATE DATABASE IF NOT EXISTS `fit` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fit`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `aao`
--

DROP TABLE IF EXISTS `aao`;
CREATE TABLE `aao` (
  `aao_id` int(11) NOT NULL,
  `aao_name` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `aao_overview` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `aao_description` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `aao_images` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `aao_created` date DEFAULT NULL,
  `aao_updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `aao_categories`
--

DROP TABLE IF EXISTS `aao_categories`;
CREATE TABLE `aao_categories` (
  `aao_category_id` int(11) NOT NULL,
  `aao_id` int(11) DEFAULT NULL,
  `aao_category_name` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `aao_category_overview` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `aao_category_description` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `aao_category_images` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `student_created` date DEFAULT NULL,
  `aao_category_updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `deverlopments`
--

DROP TABLE IF EXISTS `deverlopments`;
CREATE TABLE `deverlopments` (
  `deverlopment_id` int(11) NOT NULL,
  `deverlopment_head` int(11) DEFAULT NULL,
  `deverlopment_name` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `deverlopment_overview` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `deverlopment_images` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `deverlopment_created` date DEFAULT NULL,
  `deverlopment_updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favorite_categories`
--

DROP TABLE IF EXISTS `favorite_categories`;
CREATE TABLE `favorite_categories` (
  `favorite_category_id` int(11) NOT NULL,
  `favorite_category_name` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `student_created` date DEFAULT NULL,
  `student_updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favorite_students`
--

DROP TABLE IF EXISTS `favorite_students`;
CREATE TABLE `favorite_students` (
  `student_id` int(11) NOT NULL,
  `favorite_category_id` int(11) DEFAULT NULL,
  `student_name` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `student_overview` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `student_images` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `student_created` date DEFAULT NULL,
  `student_updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_name` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `news_overview` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `news_description` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `news_images` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `news_created_at` date DEFAULT NULL,
  `news_updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news_categories`
--

DROP TABLE IF EXISTS `news_categories`;
CREATE TABLE `news_categories` (
  `news_category_id` int(11) NOT NULL,
  `news_category_name` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_category_overview` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_category_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_category_images` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_category_created_at` date DEFAULT NULL,
  `news_category_updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `professors`
--

DROP TABLE IF EXISTS `professors`;
CREATE TABLE `professors` (
  `professor_id` int(11) NOT NULL,
  `deverlopment_id` int(11) DEFAULT NULL,
  `professor_name` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `professor_overview` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `professor_description` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `professor_email` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `professor_phone` int(11) DEFAULT NULL,
  `professor_graduation` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `professor_office` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `professor_url` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `professor_skype` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `professor_images` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `professor_created_at` date DEFAULT NULL,
  `professor_updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `user_email` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `user_image` int(11) DEFAULT NULL,
  `user_phone` int(11) DEFAULT NULL,
  `user_created` date DEFAULT NULL,
  `user_updated` date DEFAULT NULL,
  `user_password` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `works`
--

DROP TABLE IF EXISTS `works`;
CREATE TABLE `works` (
  `work_id` int(11) NOT NULL,
  `work_name` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `work_overview` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `work_description` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `work_images` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `work_address` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `work_requirement` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `work_interests` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `work_dealine` date DEFAULT NULL,
  `work_created_at` date DEFAULT NULL,
  `work_updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `work_categories`
--

DROP TABLE IF EXISTS `work_categories`;
CREATE TABLE `work_categories` (
  `work_category_id` int(11) NOT NULL,
  `work_category_name` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `deverlopment_overview` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `work_category_images` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `work_category_created` date DEFAULT NULL,
  `work_category_updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `aao`
--
ALTER TABLE `aao`
  ADD PRIMARY KEY (`aao_id`);

--
-- Chỉ mục cho bảng `aao_categories`
--
ALTER TABLE `aao_categories`
  ADD PRIMARY KEY (`aao_category_id`);

--
-- Chỉ mục cho bảng `deverlopments`
--
ALTER TABLE `deverlopments`
  ADD PRIMARY KEY (`deverlopment_id`);

--
-- Chỉ mục cho bảng `favorite_categories`
--
ALTER TABLE `favorite_categories`
  ADD PRIMARY KEY (`favorite_category_id`);

--
-- Chỉ mục cho bảng `favorite_students`
--
ALTER TABLE `favorite_students`
  ADD PRIMARY KEY (`student_id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Chỉ mục cho bảng `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`news_category_id`);

--
-- Chỉ mục cho bảng `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`professor_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_image_UNIQUE` (`user_image`);

--
-- Chỉ mục cho bảng `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`work_id`);

--
-- Chỉ mục cho bảng `work_categories`
--
ALTER TABLE `work_categories`
  ADD PRIMARY KEY (`work_category_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `aao`
--
ALTER TABLE `aao`
  MODIFY `aao_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `aao_categories`
--
ALTER TABLE `aao_categories`
  MODIFY `aao_category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `favorite_categories`
--
ALTER TABLE `favorite_categories`
  MODIFY `favorite_category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `favorite_students`
--
ALTER TABLE `favorite_students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `news_category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `works`
--
ALTER TABLE `works`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `work_categories`
--
ALTER TABLE `work_categories`
  MODIFY `work_category_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
