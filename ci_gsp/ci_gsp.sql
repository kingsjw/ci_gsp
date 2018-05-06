-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 18-04-29 22:06
-- 서버 버전: 10.1.21-MariaDB
-- PHP 버전: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `ci_gsp`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `idx` int(11) NOT NULL,
  `writer` text NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `hit` int(11) NOT NULL,
  `wdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `writer`, `title`, `content`, `hit`, `wdate`) VALUES
(13, '&lt;>', '&lt;>', '&lt;>', 1, '2018-04-30'),
(14, '\'\'', '\'\'\r\n', '\'\'', 0, '2018-04-30'),
(16, '&lt;script&gt;alert(&#039;!&#039;);&lt;/script&gt;', '&lt;script&gt;alert(&#039;!&#039;);&lt;/script&gt;', '&lt;script&gt;alert(&#039;!&#039;);&lt;/script&gt;', 3, '2018-04-30'),
(18, 'ㅁㄴㅇ', 'ㅁㄴㅇ', 'ㅁㄴㅇ', 0, '2018-04-30'),
(20, '\\\\', '\\\\', '\\\\', 0, '2018-04-30'),
(21, '\\\\', '\\\\', '\\\\', 2, '2018-04-30'),
(22, '\\\\', '\\\\', '\\\\', 2, '2018-04-30'),
(23, '\\\\', '\\\\', '\\\\', 4, '2018-04-30'),
(26, '/', '/', '/', 0, '2018-04-30');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
