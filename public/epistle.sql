-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 06:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epistle`
--

-- --------------------------------------------------------

--
-- Table structure for table `booklets`
--

CREATE TABLE `booklets` (
  `id` int(10) NOT NULL,
  `uniq_id` varchar(50) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `topic` text NOT NULL,
  `language` varchar(50) NOT NULL,
  `keywords` longtext DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booklets`
--

INSERT INTO `booklets` (`id`, `uniq_id`, `user_id`, `topic`, `language`, `keywords`, `content`, `datetime`) VALUES
(5, '6350921ed213a', '631a1920edf99', 'Javascript', '634eff8604a1b', NULL, '<div id=\"1666679473657\" style=\"width: 180.8px; height: 50px; background-color: rgb(204, 249, 226); border-left: 3px solid rgb(6, 196, 6); color: green; border-radius: 5px; padding: 10px; box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px; transform: translate(34.4758px, 36.7618px); position: static;\" class=\"component dropped\" contenteditable=\"true\" data-x=\"34.475818394344515\" data-y=\"36.76176374172195\">JavaScript for loop</div><div id=\"1666683344574\" class=\"textnode component dropped\" style=\"transform: translate(34.596px, 95.6248px); position: static; width: 284px; height: 160.8px; cursor: auto;\" data-x=\"34.59600089502334\" data-y=\"95.62480948877328\"><p class=\"h-100 p-2\" contenteditable=\"true\">Content here...</p><div style=\"position: static;\"></div></div>', '2022-10-20 00:11:10');

-- --------------------------------------------------------

--
-- Table structure for table `commits`
--

CREATE TABLE `commits` (
  `id` int(10) NOT NULL,
  `uniq_id` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `project_id` varchar(100) NOT NULL,
  `team_id` varchar(100) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `geeks`
--

CREATE TABLE `geeks` (
  `id` int(10) NOT NULL,
  `uniq_id` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `logged_in` tinyint(1) NOT NULL DEFAULT 0,
  `date_joined` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `geeks`
--

INSERT INTO `geeks` (`id`, `uniq_id`, `first_name`, `last_name`, `email`, `password`, `logged_in`, `date_joined`) VALUES
(1, '631a1920edf99', 'sheron', 'jude', 'sheronjude4@gmail.com', 'e110fb45bc4f7cc5d367b06bfbc8e5c3', 0, '2022-09-08 16:32:33'),
(2, '631a19afb44a4', 'maestro', 'dewv', 'ssss@gmail.com', '15cd0e3d368b6a8eb7378dc81ad40dfb', 0, '2022-09-08 16:34:55'),
(7, '6330ac5c89820', 'stone', 'Cold', 'colds2613@gmail.com', '', 0, '2022-09-25 19:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_access_tokens`
--

CREATE TABLE `password_access_tokens` (
  `id` int(20) UNSIGNED NOT NULL,
  `token` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) NOT NULL,
  `uniq_id` varchar(50) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `technologies` longtext NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `uniq_id`, `topic`, `user_id`, `description`, `technologies`, `content`, `created_at`, `updated_at`) VALUES
(1, '635819025dbc3', 'CRUD in JS', '631a1920edf99', 'crud with js', 'javascript', '', '2022-10-25 11:42:34', '2022-10-25 11:42:34'),
(2, '63581940831fa', 'Server with python', '631a1920edf99', 'http server with python', 'python', '', '2022-10-25 11:43:36', '2022-10-25 11:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) NOT NULL,
  `uniq_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `language` text NOT NULL,
  `roadmap` text NOT NULL DEFAULT '["step1"]'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `uniq_id`, `name`, `language`, `roadmap`) VALUES
(4, '634eff859b76c', 'A# (Axiom)', 'A# (Axiom)', '[\"step1\"]'),
(5, '634eff859e2b3', 'A-0 System', 'A-0 System', '[\"step1\"]'),
(6, '634eff859e9b3', 'A+', 'A+', '[\"step1\"]'),
(7, '634eff859ef1b', 'A++', 'A++', '[\"step1\"]'),
(8, '634eff859f53d', 'ABAP', 'ABAP', '[\"step1\"]'),
(9, '634eff859fe99', 'ABC', 'ABC', '[\"step1\"]'),
(10, '634eff85a04b5', 'ABC ALGOL', 'ABC ALGOL', '[\"step1\"]'),
(11, '634eff85a0d24', 'ABLE', 'ABLE', '[\"step1\"]'),
(12, '634eff85a1606', 'ABSET', 'ABSET', '[\"step1\"]'),
(13, '634eff85a1f83', 'ABSYS', 'ABSYS', '[\"step1\"]'),
(14, '634eff85a2743', 'ACC', 'ACC', '[\"step1\"]'),
(15, '634eff85a2d96', 'Accent', 'Accent', '[\"step1\"]'),
(16, '634eff85a333e', 'Ace DASL', 'Ace DASL', '[\"step1\"]'),
(17, '634eff85a3b5a', 'ACL2', 'ACL2', '[\"step1\"]'),
(18, '634eff85a4519', 'ACT-III', 'ACT-III', '[\"step1\"]'),
(19, '634eff85a4eac', 'Action!', 'Action!', '[\"step1\"]'),
(20, '634eff85a5874', 'ActionScript', 'ActionScript', '[\"step1\"]'),
(21, '634eff85a6227', 'Ada', 'Ada', '[\"step1\"]'),
(22, '634eff85a6b7d', 'Adenine', 'Adenine', '[\"step1\"]'),
(23, '634eff85a7334', 'Agda', 'Agda', '[\"step1\"]'),
(24, '634eff85a7a5a', 'Agilent VEE', 'Agilent VEE', '[\"step1\"]'),
(25, '634eff85a833c', 'Agora', 'Agora', '[\"step1\"]'),
(26, '634eff85a8a06', 'AIMMS', 'AIMMS', '[\"step1\"]'),
(27, '634eff85a91bf', 'Alef', 'Alef', '[\"step1\"]'),
(28, '634eff85a9918', 'ALF', 'ALF', '[\"step1\"]'),
(29, '634eff85aa00d', 'ALGOL 58', 'ALGOL 58', '[\"step1\"]'),
(30, '634eff85aa411', 'ALGOL 60', 'ALGOL 60', '[\"step1\"]'),
(31, '634eff85aa93f', 'ALGOL 68', 'ALGOL 68', '[\"step1\"]'),
(32, '634eff85aafa3', 'ALGOL W', 'ALGOL W', '[\"step1\"]'),
(33, '634eff85ab50c', 'Alice', 'Alice', '[\"step1\"]'),
(34, '634eff85abc6a', 'Alma-0', 'Alma-0', '[\"step1\"]'),
(35, '634eff85ac1d3', 'AmbientTalk', 'AmbientTalk', '[\"step1\"]'),
(36, '634eff85ac8a4', 'Amiga E', 'Amiga E', '[\"step1\"]'),
(37, '634eff85acfb0', 'AMOS', 'AMOS', '[\"step1\"]'),
(38, '634eff85ad452', 'AMPL', 'AMPL', '[\"step1\"]'),
(39, '634eff85adb36', 'APL', 'APL', '[\"step1\"]'),
(40, '634eff85ae06a', 'App Inventor for Android\'s visual block language', 'App Inventor for Android\'s visual block language', '[\"step1\"]'),
(41, '634eff85ae710', 'AppleScript', 'AppleScript', '[\"step1\"]'),
(42, '634eff85aec42', 'Arc', 'Arc', '[\"step1\"]'),
(43, '634eff85af0b2', 'ARexx', 'ARexx', '[\"step1\"]'),
(44, '634eff85af690', 'Argus', 'Argus', '[\"step1\"]'),
(45, '634eff85afd7a', 'AspectJ', 'AspectJ', '[\"step1\"]'),
(46, '634eff85b043c', 'Assembly language', 'Assembly language', '[\"step1\"]'),
(47, '634eff85b0a82', 'ATS', 'ATS', '[\"step1\"]'),
(48, '634eff85b0fc9', 'Ateji PX', 'Ateji PX', '[\"step1\"]'),
(49, '634eff85b1543', 'AutoHotkey', 'AutoHotkey', '[\"step1\"]'),
(50, '634eff85b1a75', 'Autocoder', 'Autocoder', '[\"step1\"]'),
(51, '634eff85b206d', 'AutoIt', 'AutoIt', '[\"step1\"]'),
(52, '634eff85b26b6', 'AutoLISP / Visual LISP', 'AutoLISP / Visual LISP', '[\"step1\"]'),
(53, '634eff85b2cca', 'Averest', 'Averest', '[\"step1\"]'),
(54, '634eff85b31c4', 'AWK', 'AWK', '[\"step1\"]'),
(55, '634eff85b3776', 'Axum', 'Axum', '[\"step1\"]'),
(56, '634eff85b3de4', 'B', 'B', '[\"step1\"]'),
(57, '634eff85b4435', 'Babbage', 'Babbage', '[\"step1\"]'),
(58, '634eff85b496d', 'Bash', 'Bash', '[\"step1\"]'),
(59, '634eff85b4ecd', 'BASIC', 'BASIC', '[\"step1\"]'),
(60, '634eff85b5607', 'bc', 'bc', '[\"step1\"]'),
(61, '634eff85b5cf3', 'BCPL', 'BCPL', '[\"step1\"]'),
(62, '634eff85b63f6', 'BeanShell', 'BeanShell', '[\"step1\"]'),
(63, '634eff85b6935', 'Batch (Windows/Dos)', 'Batch (Windows/Dos)', '[\"step1\"]'),
(64, '634eff85b6e34', 'Bertrand', 'Bertrand', '[\"step1\"]'),
(65, '634eff85b74b6', 'BETA', 'BETA', '[\"step1\"]'),
(66, '634eff85b791a', 'Bigwig', 'Bigwig', '[\"step1\"]'),
(67, '634eff85b7fe8', 'Bistro', 'Bistro', '[\"step1\"]'),
(68, '634eff85b86d9', 'BitC', 'BitC', '[\"step1\"]'),
(69, '634eff85b8c51', 'BLISS', 'BLISS', '[\"step1\"]'),
(70, '634eff85b9182', 'Blue', 'Blue', '[\"step1\"]'),
(71, '634eff85b97de', 'Bon', 'Bon', '[\"step1\"]'),
(72, '634eff85b9d52', 'Boo', 'Boo', '[\"step1\"]'),
(73, '634eff85ba3b3', 'Boomerang', 'Boomerang', '[\"step1\"]'),
(74, '634eff85baa61', 'Bourne shell', 'Bourne shell', '[\"step1\"]'),
(75, '634eff85bb007', 'bash', 'bash', '[\"step1\"]'),
(76, '634eff85bb60b', 'ksh', 'ksh', '[\"step1\"]'),
(77, '634eff85bbc07', 'BREW', 'BREW', '[\"step1\"]'),
(78, '634eff85bc287', 'BPEL', 'BPEL', '[\"step1\"]'),
(79, '634eff85bc8a1', 'C', 'C', '[\"step1\"]'),
(80, '634eff85bcd12', 'C--', 'C--', '[\"step1\"]'),
(81, '634eff85bd372', 'C++', 'C++', '[\"step1\"]'),
(82, '634eff85bd9eb', 'C#', 'C#', '[\"step1\"]'),
(83, '634eff85bdf26', 'C/AL', 'C/AL', '[\"step1\"]'),
(84, '634eff85be55a', 'Caché ObjectScript', 'Caché ObjectScript', '[\"step1\"]'),
(85, '634eff85beaf2', 'C Shell', 'C Shell', '[\"step1\"]'),
(86, '634eff85bf2ac', 'Caml', 'Caml', '[\"step1\"]'),
(87, '634eff85bf788', 'Candle', 'Candle', '[\"step1\"]'),
(88, '634eff85bfce6', 'Cayenne', 'Cayenne', '[\"step1\"]'),
(89, '634eff85c02c6', 'CDuce', 'CDuce', '[\"step1\"]'),
(90, '634eff85c0951', 'Cecil', 'Cecil', '[\"step1\"]'),
(91, '634eff85c0e8b', 'Cel', 'Cel', '[\"step1\"]'),
(92, '634eff85c14fe', 'Cesil', 'Cesil', '[\"step1\"]'),
(93, '634eff85c1a44', 'Ceylon', 'Ceylon', '[\"step1\"]'),
(94, '634eff85c1f24', 'CFEngine', 'CFEngine', '[\"step1\"]'),
(95, '634eff85c22e5', 'CFML', 'CFML', '[\"step1\"]'),
(96, '634eff85c2708', 'Cg', 'Cg', '[\"step1\"]'),
(97, '634eff85c2a06', 'Ch', 'Ch', '[\"step1\"]'),
(98, '634eff85c2e73', 'Chapel', 'Chapel', '[\"step1\"]'),
(99, '634eff85c33f6', 'CHAIN', 'CHAIN', '[\"step1\"]'),
(100, '634eff85c38f2', 'Charity', 'Charity', '[\"step1\"]'),
(101, '634eff85c3f32', 'Charm', 'Charm', '[\"step1\"]'),
(102, '634eff85c457f', 'Chef', 'Chef', '[\"step1\"]'),
(103, '634eff85c4a4a', 'CHILL', 'CHILL', '[\"step1\"]'),
(104, '634eff85c50c5', 'CHIP-8', 'CHIP-8', '[\"step1\"]'),
(105, '634eff85c560c', 'chomski', 'chomski', '[\"step1\"]'),
(106, '634eff85c5c33', 'ChucK', 'ChucK', '[\"step1\"]'),
(107, '634eff85c6204', 'CICS', 'CICS', '[\"step1\"]'),
(108, '634eff85c67b4', 'Cilk', 'Cilk', '[\"step1\"]'),
(109, '634eff85c6d40', 'CL', 'CL', '[\"step1\"]'),
(110, '634eff85c7380', 'Claire', 'Claire', '[\"step1\"]'),
(111, '634eff85c78ff', 'Clarion', 'Clarion', '[\"step1\"]'),
(112, '634eff85c7f8c', 'Clean', 'Clean', '[\"step1\"]'),
(113, '634eff85c85d7', 'Clipper', 'Clipper', '[\"step1\"]'),
(114, '634eff85c8b0a', 'CLIST', 'CLIST', '[\"step1\"]'),
(115, '634eff85c8f68', 'Clojure', 'Clojure', '[\"step1\"]'),
(116, '634eff85c9362', 'CLU', 'CLU', '[\"step1\"]'),
(117, '634eff85c9930', 'CMS-2', 'CMS-2', '[\"step1\"]'),
(118, '634eff85ca116', 'COBOL', 'COBOL', '[\"step1\"]'),
(119, '634eff85ca5ca', 'Cobra', 'Cobra', '[\"step1\"]'),
(120, '634eff85caa91', 'CODE', 'CODE', '[\"step1\"]'),
(121, '634eff85caf41', 'CoffeeScript', 'CoffeeScript', '[\"step1\"]'),
(122, '634eff85cb369', 'Cola', 'Cola', '[\"step1\"]'),
(123, '634eff85cb6ca', 'ColdC', 'ColdC', '[\"step1\"]'),
(124, '634eff85cbb69', 'ColdFusion', 'ColdFusion', '[\"step1\"]'),
(125, '634eff85cc071', 'COMAL', 'COMAL', '[\"step1\"]'),
(126, '634eff85cc4f5', 'Combined Programming Language', 'Combined Programming Language', '[\"step1\"]'),
(127, '634eff85cc979', 'COMIT', 'COMIT', '[\"step1\"]'),
(128, '634eff85ccdff', 'Common Intermediate Language', 'Common Intermediate Language', '[\"step1\"]'),
(129, '634eff85cd2c4', 'Common Lisp', 'Common Lisp', '[\"step1\"]'),
(130, '634eff85cd76d', 'COMPASS', 'COMPASS', '[\"step1\"]'),
(131, '634eff85cdbb8', 'Component Pascal', 'Component Pascal', '[\"step1\"]'),
(132, '634eff85ce05e', 'Constraint Handling Rules', 'Constraint Handling Rules', '[\"step1\"]'),
(133, '634eff85ce39b', 'Converge', 'Converge', '[\"step1\"]'),
(134, '634eff85ce6f4', 'Cool', 'Cool', '[\"step1\"]'),
(135, '634eff85cea2b', 'Coq', 'Coq', '[\"step1\"]'),
(136, '634eff85ceeb5', 'Coral 66', 'Coral 66', '[\"step1\"]'),
(137, '634eff85cf1ea', 'Corn', 'Corn', '[\"step1\"]'),
(138, '634eff85cf4fc', 'CorVision', 'CorVision', '[\"step1\"]'),
(139, '634eff85cf896', 'COWSEL', 'COWSEL', '[\"step1\"]'),
(140, '634eff85cfc6c', 'CPL', 'CPL', '[\"step1\"]'),
(141, '634eff85cffca', 'csh', 'csh', '[\"step1\"]'),
(142, '634eff85d049b', 'CSP', 'CSP', '[\"step1\"]'),
(143, '634eff85d0954', 'Csound', 'Csound', '[\"step1\"]'),
(144, '634eff85d0c90', 'CUDA', 'CUDA', '[\"step1\"]'),
(145, '634eff85d0fbc', 'Curl', 'Curl', '[\"step1\"]'),
(146, '634eff85d125b', 'Curry', 'Curry', '[\"step1\"]'),
(147, '634eff85d154d', 'Cyclone', 'Cyclone', '[\"step1\"]'),
(148, '634eff85d1a08', 'Cython', 'Cython', '[\"step1\"]'),
(149, '634eff85d1cf9', 'D', 'D', '[\"step1\"]'),
(150, '634eff85d2012', 'DASL', 'DASL', '[\"step1\"]'),
(151, '634eff85d2349', 'DASL', 'DASL', '[\"step1\"]'),
(152, '634eff85d27c9', 'Dart', 'Dart', '[\"step1\"]'),
(153, '634eff85d2af0', 'DataFlex', 'DataFlex', '[\"step1\"]'),
(154, '634eff85d2e11', 'Datalog', 'Datalog', '[\"step1\"]'),
(155, '634eff85d3175', 'DATATRIEVE', 'DATATRIEVE', '[\"step1\"]'),
(156, '634eff85d34d4', 'dBase', 'dBase', '[\"step1\"]'),
(157, '634eff85d3855', 'dc', 'dc', '[\"step1\"]'),
(158, '634eff85d3c3c', 'DCL', 'DCL', '[\"step1\"]'),
(159, '634eff85d3fdb', 'Deesel', 'Deesel', '[\"step1\"]'),
(160, '634eff85d44e1', 'Delphi', 'Delphi', '[\"step1\"]'),
(161, '634eff85d47df', 'DinkC', 'DinkC', '[\"step1\"]'),
(162, '634eff85d4aca', 'DIBOL', 'DIBOL', '[\"step1\"]'),
(163, '634eff85d501a', 'Dog', 'Dog', '[\"step1\"]'),
(164, '634eff85d5328', 'Draco', 'Draco', '[\"step1\"]'),
(165, '634eff85d5821', 'DRAKON', 'DRAKON', '[\"step1\"]'),
(166, '634eff85d5b82', 'Dylan', 'Dylan', '[\"step1\"]'),
(167, '634eff85d6024', 'DYNAMO', 'DYNAMO', '[\"step1\"]'),
(168, '634eff85d6353', 'E', 'E', '[\"step1\"]'),
(169, '634eff85d6689', 'E#', 'E#', '[\"step1\"]'),
(170, '634eff85d69dc', 'Ease', 'Ease', '[\"step1\"]'),
(171, '634eff85d6cc0', 'Easy PL/I', 'Easy PL/I', '[\"step1\"]'),
(172, '634eff85d6fe0', 'Easy Programming Language', 'Easy Programming Language', '[\"step1\"]'),
(173, '634eff85d74a3', 'EASYTRIEVE PLUS', 'EASYTRIEVE PLUS', '[\"step1\"]'),
(174, '634eff85d77d9', 'ECMAScript', 'ECMAScript', '[\"step1\"]'),
(175, '634eff85d7bf0', 'Edinburgh IMP', 'Edinburgh IMP', '[\"step1\"]'),
(176, '634eff85d8055', 'EGL', 'EGL', '[\"step1\"]'),
(177, '634eff85d83db', 'Eiffel', 'Eiffel', '[\"step1\"]'),
(178, '634eff85d8719', 'ELAN', 'ELAN', '[\"step1\"]'),
(179, '634eff85d8a5b', 'Elixir', 'Elixir', '[\"step1\"]'),
(180, '634eff85d8f08', 'Elm', 'Elm', '[\"step1\"]'),
(181, '634eff85d920d', 'Emacs Lisp', 'Emacs Lisp', '[\"step1\"]'),
(182, '634eff85d9594', 'Emerald', 'Emerald', '[\"step1\"]'),
(183, '634eff85d98a2', 'Epigram', 'Epigram', '[\"step1\"]'),
(184, '634eff85d9c14', 'EPL', 'EPL', '[\"step1\"]'),
(185, '634eff85da0bd', 'Erlang', 'Erlang', '[\"step1\"]'),
(186, '634eff85da3ca', 'es', 'es', '[\"step1\"]'),
(187, '634eff85da6dd', 'Escapade', 'Escapade', '[\"step1\"]'),
(188, '634eff85dabfc', 'Escher', 'Escher', '[\"step1\"]'),
(189, '634eff85daf3f', 'ESPOL', 'ESPOL', '[\"step1\"]'),
(190, '634eff85db23a', 'Esterel', 'Esterel', '[\"step1\"]'),
(191, '634eff85db734', 'Etoys', 'Etoys', '[\"step1\"]'),
(192, '634eff85dba67', 'Euclid', 'Euclid', '[\"step1\"]'),
(193, '634eff85dbecc', 'Euler', 'Euler', '[\"step1\"]'),
(194, '634eff85dc30e', 'Euphoria', 'Euphoria', '[\"step1\"]'),
(195, '634eff85dc685', 'EusLisp Robot Programming Language', 'EusLisp Robot Programming Language', '[\"step1\"]'),
(196, '634eff85dc9fa', 'CMS EXEC', 'CMS EXEC', '[\"step1\"]'),
(197, '634eff85dcda5', 'EXEC 2', 'EXEC 2', '[\"step1\"]'),
(198, '634eff85dd148', 'Executable UML', 'Executable UML', '[\"step1\"]'),
(199, '634eff85dd4f8', 'F', 'F', '[\"step1\"]'),
(200, '634eff85dd817', 'F#', 'F#', '[\"step1\"]'),
(201, '634eff85ddaed', 'Factor', 'Factor', '[\"step1\"]'),
(202, '634eff85dddbb', 'Falcon', 'Falcon', '[\"step1\"]'),
(203, '634eff85de0d4', 'Fancy', 'Fancy', '[\"step1\"]'),
(204, '634eff85de3d7', 'Fantom', 'Fantom', '[\"step1\"]'),
(205, '634eff85de68f', 'FAUST', 'FAUST', '[\"step1\"]'),
(206, '634eff85de97f', 'Felix', 'Felix', '[\"step1\"]'),
(207, '634eff85dec8c', 'Ferite', 'Ferite', '[\"step1\"]'),
(208, '634eff85def9e', 'FFP', 'FFP', '[\"step1\"]'),
(209, '634eff85df25c', 'Fjölnir', 'Fjölnir', '[\"step1\"]'),
(210, '634eff85df501', 'FL', 'FL', '[\"step1\"]'),
(211, '634eff85df7f3', 'Flavors', 'Flavors', '[\"step1\"]'),
(212, '634eff85dfaf8', 'Flex', 'Flex', '[\"step1\"]'),
(213, '634eff85dfe65', 'FLOW-MATIC', 'FLOW-MATIC', '[\"step1\"]'),
(214, '634eff85e019b', 'FOCAL', 'FOCAL', '[\"step1\"]'),
(215, '634eff85e042e', 'FOCUS', 'FOCUS', '[\"step1\"]'),
(216, '634eff85e0717', 'FOIL', 'FOIL', '[\"step1\"]'),
(217, '634eff85e09e6', 'FORMAC', 'FORMAC', '[\"step1\"]'),
(218, '634eff85e0c6e', '@Formula', '@Formula', '[\"step1\"]'),
(219, '634eff85e0eff', 'Forth', 'Forth', '[\"step1\"]'),
(220, '634eff85e11e0', 'Fortran', 'Fortran', '[\"step1\"]'),
(221, '634eff85e14ff', 'Fortress', 'Fortress', '[\"step1\"]'),
(222, '634eff85e17e8', 'FoxBase', 'FoxBase', '[\"step1\"]'),
(223, '634eff85e1ab7', 'FoxPro', 'FoxPro', '[\"step1\"]'),
(224, '634eff85e1d91', 'FP', 'FP', '[\"step1\"]'),
(225, '634eff85e2048', 'FPr', 'FPr', '[\"step1\"]'),
(226, '634eff85e23e6', 'Franz Lisp', 'Franz Lisp', '[\"step1\"]'),
(227, '634eff85e27a0', 'Frege', 'Frege', '[\"step1\"]'),
(228, '634eff85e2b6c', 'F-Script', 'F-Script', '[\"step1\"]'),
(229, '634eff85e305c', 'FSProg', 'FSProg', '[\"step1\"]'),
(230, '634eff85e344e', 'G', 'G', '[\"step1\"]'),
(231, '634eff85e38a3', 'Google Apps Script', 'Google Apps Script', '[\"step1\"]'),
(232, '634eff85e3d2a', 'Game Maker Language', 'Game Maker Language', '[\"step1\"]'),
(233, '634eff85e41e8', 'GameMonkey Script', 'GameMonkey Script', '[\"step1\"]'),
(234, '634eff85e4796', 'GAMS', 'GAMS', '[\"step1\"]'),
(235, '634eff85e4d8c', 'GAP', 'GAP', '[\"step1\"]'),
(236, '634eff85e5209', 'G-code', 'G-code', '[\"step1\"]'),
(237, '634eff85e58b9', 'Genie', 'Genie', '[\"step1\"]'),
(238, '634eff85e5d48', 'GDL', 'GDL', '[\"step1\"]'),
(239, '634eff85e62b7', 'Gibiane', 'Gibiane', '[\"step1\"]'),
(240, '634eff85e66fd', 'GJ', 'GJ', '[\"step1\"]'),
(241, '634eff85e6b1a', 'GEORGE', 'GEORGE', '[\"step1\"]'),
(242, '634eff85e6f1f', 'GLSL', 'GLSL', '[\"step1\"]'),
(243, '634eff85e7927', 'GNU E', 'GNU E', '[\"step1\"]'),
(244, '634eff85e7f9a', 'GM', 'GM', '[\"step1\"]'),
(245, '634eff85e870e', 'Go', 'Go', '[\"step1\"]'),
(246, '634eff85e8c19', 'Go!', 'Go!', '[\"step1\"]'),
(247, '634eff85e905e', 'GOAL', 'GOAL', '[\"step1\"]'),
(248, '634eff85e9508', 'Gödel', 'Gödel', '[\"step1\"]'),
(249, '634eff85e990e', 'Godiva', 'Godiva', '[\"step1\"]'),
(250, '634eff85e9ceb', 'GOM (Good Old Mad)', 'GOM (Good Old Mad)', '[\"step1\"]'),
(251, '634eff85ea0bf', 'Goo', 'Goo', '[\"step1\"]'),
(252, '634eff85ea4cf', 'Gosu', 'Gosu', '[\"step1\"]'),
(253, '634eff85ea8f0', 'GOTRAN', 'GOTRAN', '[\"step1\"]'),
(254, '634eff85eacd2', 'GPSS', 'GPSS', '[\"step1\"]'),
(255, '634eff85eb13b', 'GraphTalk', 'GraphTalk', '[\"step1\"]'),
(256, '634eff85eb5fd', 'GRASS', 'GRASS', '[\"step1\"]'),
(257, '634eff85eba28', 'Groovy', 'Groovy', '[\"step1\"]'),
(258, '634eff85ebf0d', 'Hack (programming language)', 'Hack (programming language)', '[\"step1\"]'),
(259, '634eff85ec576', 'HAL/S', 'HAL/S', '[\"step1\"]'),
(260, '634eff85ecbe6', 'Hamilton C shell', 'Hamilton C shell', '[\"step1\"]'),
(261, '634eff85ecfd6', 'Harbour', 'Harbour', '[\"step1\"]'),
(262, '634eff85ed3cd', 'Hartmann pipelines', 'Hartmann pipelines', '[\"step1\"]'),
(263, '634eff85ed7b4', 'Haskell', 'Haskell', '[\"step1\"]'),
(264, '634eff85edf02', 'Haxe', 'Haxe', '[\"step1\"]'),
(265, '634eff85ee5f1', 'High Level Assembly', 'High Level Assembly', '[\"step1\"]'),
(266, '634eff85eeb37', 'HLSL', 'HLSL', '[\"step1\"]'),
(267, '634eff85ef145', 'Hop', 'Hop', '[\"step1\"]'),
(268, '634eff85efb6c', 'Hope', 'Hope', '[\"step1\"]'),
(269, '634eff85f00de', 'Hugo', 'Hugo', '[\"step1\"]'),
(270, '634eff85f093e', 'Hume', 'Hume', '[\"step1\"]'),
(271, '634eff85f0d7a', 'HyperTalk', 'HyperTalk', '[\"step1\"]'),
(272, '634eff85f122e', 'IBM Basic assembly language', 'IBM Basic assembly language', '[\"step1\"]'),
(273, '634eff85f1c15', 'IBM HAScript', 'IBM HAScript', '[\"step1\"]'),
(274, '634eff85f201e', 'IBM Informix-4GL', 'IBM Informix-4GL', '[\"step1\"]'),
(275, '634eff85f2473', 'IBM RPG', 'IBM RPG', '[\"step1\"]'),
(276, '634eff85f29b1', 'ICI', 'ICI', '[\"step1\"]'),
(277, '634eff85f2e9b', 'Icon', 'Icon', '[\"step1\"]'),
(278, '634eff85f320d', 'Id', 'Id', '[\"step1\"]'),
(279, '634eff85f3726', 'IDL', 'IDL', '[\"step1\"]'),
(280, '634eff85f3c44', 'Idris', 'Idris', '[\"step1\"]'),
(281, '634eff85f407e', 'IMP', 'IMP', '[\"step1\"]'),
(282, '634eff8600621', 'Inform', 'Inform', '[\"step1\"]'),
(283, '634eff8600baa', 'Io', 'Io', '[\"step1\"]'),
(284, '634eff8600f0d', 'Ioke', 'Ioke', '[\"step1\"]'),
(285, '634eff86011f8', 'IPL', 'IPL', '[\"step1\"]'),
(286, '634eff8601589', 'IPTSCRAE', 'IPTSCRAE', '[\"step1\"]'),
(287, '634eff8601896', 'ISLISP', 'ISLISP', '[\"step1\"]'),
(288, '634eff8601b73', 'ISPF', 'ISPF', '[\"step1\"]'),
(289, '634eff8601e4a', 'ISWIM', 'ISWIM', '[\"step1\"]'),
(290, '634eff860211c', 'J', 'J', '[\"step1\"]'),
(291, '634eff86023fe', 'J#', 'J#', '[\"step1\"]'),
(292, '634eff8602dbd', 'J++', 'J++', '[\"step1\"]'),
(293, '634eff860314f', 'JADE', 'JADE', '[\"step1\"]'),
(294, '634eff860341c', 'Jako', 'Jako', '[\"step1\"]'),
(295, '634eff8603703', 'JAL', 'JAL', '[\"step1\"]'),
(296, '634eff8603a80', 'Janus', 'Janus', '[\"step1\"]'),
(297, '634eff8603e0d', 'JASS', 'JASS', '[\"step1\"]'),
(298, '634eff860441d', 'Java', 'Java', '[\"step1\"]'),
(299, '634eff8604a1b', 'JavaScript', 'JavaScript', '[\"what-is-javascript\",\"\\nhistory-of-javascript\",\"\\njavascript-versions\",\"\\nhow-to-run-javascript\",\"\\njavascript-variables\",\"\\nvariable-declarations\",\"\\nhoisting\",\"\\nnaming-rules\",\"\\nscopes\",\"\\njavascript-datatypes\",\"\\nprimitive-types\",\"\\nobject\",\"\\ntypeof-operator\",\"\\njavascript-data-structures\",\"\\nindexed-collections\",\"\\nkeyed-collections\",\"\\nstructured-data\",\"\\njavascript-type-casting\",\"\\ntype-conversion-coercion\",\"\\nexplicit-type-casting\",\"\\nimplicit-type-casting\",\"\\njavascript-equality-comparisons\",\"\\nequality-algorithms\",\"\\nvalue-comparison-operators\",\"\\njavascript-loops-iterations\",\"\\nfor-in-statement\",\"\\nfor-of-statement\",\"\\nbreak-continue\",\"\\nfor-statement\",\"\\ndo-while-statement\",\"\\nwhile-statement\",\"\\njavascript-control-flow\",\"\\nexception-handling\",\"\\nconditional-statements\",\"\\njavascript-expressions-and-operators\",\"\\nassignment-operators\",\"\\nomparison-operators\",\"\\narithmetic-operators\",\"\\nbitwise-operators\",\"\\nlogical-operators\",\"\\nbigint-operators\",\"\\nstring-operators\",\"\\nconditional-operators\",\"\\ncomma-operators\",\"\\nunary-operators\",\"\\nrelational-operators\",\"\\njavascript-functions\",\"\\ndefining-calling-functions\",\"\\nfunction-parameters\",\"\\narrow-functions\",\"\\niifes\",\"\\narguments-object\",\"\\nscope-and-function-stack\",\"\\nbuilt-in-functions\",\"\\njavascript-strict-mode\",\"\\njavascript-this-keyword\",\"\\nfunction-borrowing\",\"\\nthis-in-a-method\",\"\\nthis-in-a-function\",\"\\nusing-this-alone\",\"\\nthis-in-event-handlers\",\"\\nthis-in-arrow-functions\",\"\\nexplicit-binding\",\"\\njavascript-asynchronous-javascript\",\"\\nevent-loop\",\"\\nset-timeout\",\"\\nset-interval\",\"\\ncallbacks\",\"\\npromises\",\"\\njavascript-classes\",\"\\njavascript-iterators-and-generators\",\"\\njavascript-modules\",\"\\ncommonjs\",\"\\nesm\",\"\\njavascript-memory-management\",\"\\nmemory-lifecycle\",\"\\ngarbage-collection\",\"\\njavascript-chrome-dev-tools\",\"\\ndebugging-issues\",\"\\ndebugging-memory-leaks\",\"\\ndebugging-performance\",\"\\nworking-with-apis\",\"\\nxml-http-request\",\"\\nfetch\\n\"]'),
(300, '634eff8604d4a', 'JCL', 'JCL', '[\"step1\"]'),
(301, '634eff8605049', 'JEAN', 'JEAN', '[\"step1\"]'),
(302, '634eff8605357', 'Join Java', 'Join Java', '[\"step1\"]'),
(303, '634eff86056c3', 'JOSS', 'JOSS', '[\"step1\"]'),
(304, '634eff8605a35', 'Joule', 'Joule', '[\"step1\"]'),
(305, '634eff8605d12', 'JOVIAL', 'JOVIAL', '[\"step1\"]'),
(306, '634eff8605fc7', 'Joy', 'Joy', '[\"step1\"]'),
(307, '634eff860626b', 'JScript', 'JScript', '[\"step1\"]'),
(308, '634eff8606512', 'JScript .NET', 'JScript .NET', '[\"step1\"]'),
(309, '634eff86067aa', 'JavaFX Script', 'JavaFX Script', '[\"step1\"]'),
(310, '634eff8606a2a', 'Julia', 'Julia', '[\"step1\"]'),
(311, '634eff8606cae', 'Jython', 'Jython', '[\"step1\"]'),
(312, '634eff8606f63', 'K', 'K', '[\"step1\"]'),
(313, '634eff860721e', 'Kaleidoscope', 'Kaleidoscope', '[\"step1\"]'),
(314, '634eff860748f', 'Karel', 'Karel', '[\"step1\"]'),
(315, '634eff860775d', 'Karel++', 'Karel++', '[\"step1\"]'),
(316, '634eff8607cf7', 'KEE', 'KEE', '[\"step1\"]'),
(317, '634eff8607fd9', 'Kixtart', 'Kixtart', '[\"step1\"]'),
(318, '634eff86083bd', 'KIF', 'KIF', '[\"step1\"]'),
(319, '634eff86087f1', 'Kojo', 'Kojo', '[\"step1\"]'),
(320, '634eff8608bfb', 'Kotlin', 'Kotlin', '[\"step1\"]'),
(321, '634eff8608f4b', 'KRC', 'KRC', '[\"step1\"]'),
(322, '634eff8609287', 'KRL', 'KRL', '[\"step1\"]'),
(323, '634eff86095a8', 'KUKA', 'KUKA', '[\"step1\"]'),
(324, '634eff860986d', 'KRYPTON', 'KRYPTON', '[\"step1\"]'),
(325, '634eff8609bbe', 'ksh', 'ksh', '[\"step1\"]'),
(326, '634eff8609ec3', 'L', 'L', '[\"step1\"]'),
(327, '634eff860a1a5', 'L# .NET', 'L# .NET', '[\"step1\"]'),
(328, '634eff860a403', 'LabVIEW', 'LabVIEW', '[\"step1\"]'),
(329, '634eff860a661', 'Ladder', 'Ladder', '[\"step1\"]'),
(330, '634eff860a97d', 'Lagoona', 'Lagoona', '[\"step1\"]'),
(331, '634eff860ac3e', 'LANSA', 'LANSA', '[\"step1\"]'),
(332, '634eff860aefa', 'Lasso', 'Lasso', '[\"step1\"]'),
(333, '634eff860b1c5', 'LaTeX', 'LaTeX', '[\"step1\"]'),
(334, '634eff860b492', 'Lava', 'Lava', '[\"step1\"]'),
(335, '634eff860b6ff', 'LC-3', 'LC-3', '[\"step1\"]'),
(336, '634eff860b977', 'Leda', 'Leda', '[\"step1\"]'),
(337, '634eff860bbf2', 'Legoscript', 'Legoscript', '[\"step1\"]'),
(338, '634eff860be73', 'LIL', 'LIL', '[\"step1\"]'),
(339, '634eff860c177', 'LilyPond', 'LilyPond', '[\"step1\"]'),
(340, '634eff860c59d', 'Limbo', 'Limbo', '[\"step1\"]'),
(341, '634eff860c9cf', 'Limnor', 'Limnor', '[\"step1\"]'),
(342, '634eff860cd9d', 'LINC', 'LINC', '[\"step1\"]'),
(343, '634eff860d0dc', 'Lingo', 'Lingo', '[\"step1\"]'),
(344, '634eff860d3a4', 'Linoleum', 'Linoleum', '[\"step1\"]'),
(345, '634eff860d6c2', 'LIS', 'LIS', '[\"step1\"]'),
(346, '634eff860d9b6', 'LISA', 'LISA', '[\"step1\"]'),
(347, '634eff860dd3e', 'Lisaac', 'Lisaac', '[\"step1\"]'),
(348, '634eff860e06a', 'Lisp', 'Lisp', '[\"step1\"]'),
(349, '634eff860e352', 'Lite-C', 'Lite-C', '[\"step1\"]'),
(350, '634eff860e5f8', 'Lithe', 'Lithe', '[\"step1\"]'),
(351, '634eff860e872', 'Little b', 'Little b', '[\"step1\"]'),
(352, '634eff860eaca', 'Logo', 'Logo', '[\"step1\"]'),
(353, '634eff860ed3a', 'Logtalk', 'Logtalk', '[\"step1\"]'),
(354, '634eff860ef96', 'LPC', 'LPC', '[\"step1\"]'),
(355, '634eff860f23c', 'LSE', 'LSE', '[\"step1\"]'),
(356, '634eff860f49d', 'LSL', 'LSL', '[\"step1\"]'),
(357, '634eff860f795', 'LiveCode', 'LiveCode', '[\"step1\"]'),
(358, '634eff860fa5b', 'LiveScript', 'LiveScript', '[\"step1\"]'),
(359, '634eff860fd0d', 'Lua', 'Lua', '[\"step1\"]'),
(360, '634eff8610018', 'Lucid', 'Lucid', '[\"step1\"]'),
(361, '634eff86102fe', 'Lustre', 'Lustre', '[\"step1\"]'),
(362, '634eff861077b', 'LYaPAS', 'LYaPAS', '[\"step1\"]'),
(363, '634eff8610d5d', 'Lynx', 'Lynx', '[\"step1\"]'),
(364, '634eff861104e', 'M2001', 'M2001', '[\"step1\"]'),
(365, '634eff8611357', 'M4', 'M4', '[\"step1\"]'),
(366, '634eff8611623', 'Machine code', 'Machine code', '[\"step1\"]'),
(367, '634eff8611893', 'MAD', 'MAD', '[\"step1\"]'),
(368, '634eff8611b00', 'MAD/I', 'MAD/I', '[\"step1\"]'),
(369, '634eff8611d93', 'Magik', 'Magik', '[\"step1\"]'),
(370, '634eff8612068', 'Magma', 'Magma', '[\"step1\"]'),
(371, '634eff86122f9', 'make', 'make', '[\"step1\"]'),
(372, '634eff8612584', 'Maple', 'Maple', '[\"step1\"]'),
(373, '634eff8612822', 'MAPPER', 'MAPPER', '[\"step1\"]'),
(374, '634eff8612ae7', 'MARK-IV', 'MARK-IV', '[\"step1\"]'),
(375, '634eff8612dac', 'Mary', 'Mary', '[\"step1\"]'),
(376, '634eff861300e', 'MASM Microsoft Assembly x86', 'MASM Microsoft Assembly x86', '[\"step1\"]'),
(377, '634eff8613273', 'Mathematica', 'Mathematica', '[\"step1\"]'),
(378, '634eff86134f8', 'MATLAB', 'MATLAB', '[\"step1\"]'),
(379, '634eff86137cc', 'Maxima', 'Maxima', '[\"step1\"]'),
(380, '634eff8613a6f', 'Macsyma', 'Macsyma', '[\"step1\"]'),
(381, '634eff8613d38', 'Max', 'Max', '[\"step1\"]'),
(382, '634eff8613fc3', 'MaxScript', 'MaxScript', '[\"step1\"]'),
(383, '634eff8614237', 'Maya (MEL)', 'Maya (MEL)', '[\"step1\"]'),
(384, '634eff86145b5', 'MDL', 'MDL', '[\"step1\"]'),
(385, '634eff86148b8', 'Mercury', 'Mercury', '[\"step1\"]'),
(386, '634eff8614b75', 'Mesa', 'Mesa', '[\"step1\"]'),
(387, '634eff8614e37', 'Metacard', 'Metacard', '[\"step1\"]'),
(388, '634eff86150f2', 'Metafont', 'Metafont', '[\"step1\"]'),
(389, '634eff8615382', 'MetaL', 'MetaL', '[\"step1\"]'),
(390, '634eff861564c', 'Microcode', 'Microcode', '[\"step1\"]'),
(391, '634eff8615916', 'MicroScript', 'MicroScript', '[\"step1\"]'),
(392, '634eff8615b60', 'MIIS', 'MIIS', '[\"step1\"]'),
(393, '634eff8615dae', 'MillScript', 'MillScript', '[\"step1\"]'),
(394, '634eff861604c', 'MIMIC', 'MIMIC', '[\"step1\"]'),
(395, '634eff86162b5', 'Mirah', 'Mirah', '[\"step1\"]'),
(396, '634eff861651a', 'Miranda', 'Miranda', '[\"step1\"]'),
(397, '634eff861678f', 'MIVA Script', 'MIVA Script', '[\"step1\"]'),
(398, '634eff8616a50', 'ML', 'ML', '[\"step1\"]'),
(399, '634eff8616d65', 'Moby', 'Moby', '[\"step1\"]'),
(400, '634eff861702c', 'Model 204', 'Model 204', '[\"step1\"]'),
(401, '634eff86172df', 'Modelica', 'Modelica', '[\"step1\"]'),
(402, '634eff8617580', 'Modula', 'Modula', '[\"step1\"]'),
(403, '634eff861785e', 'Modula-2', 'Modula-2', '[\"step1\"]'),
(404, '634eff8617afe', 'Modula-3', 'Modula-3', '[\"step1\"]'),
(405, '634eff8617e12', 'Mohol', 'Mohol', '[\"step1\"]'),
(406, '634eff861813c', 'MOO', 'MOO', '[\"step1\"]'),
(407, '634eff8618400', 'Mortran', 'Mortran', '[\"step1\"]'),
(408, '634eff861873f', 'Mouse', 'Mouse', '[\"step1\"]'),
(409, '634eff86189bb', 'MPD', 'MPD', '[\"step1\"]'),
(410, '634eff8618c7d', 'CIL', 'CIL', '[\"step1\"]'),
(411, '634eff8618f74', 'MSL', 'MSL', '[\"step1\"]'),
(412, '634eff86191e1', 'MUMPS', 'MUMPS', '[\"step1\"]'),
(413, '634eff86194b9', 'NASM', 'NASM', '[\"step1\"]'),
(414, '634eff8619789', 'NATURAL', 'NATURAL', '[\"step1\"]'),
(415, '634eff8619a13', 'Napier88', 'Napier88', '[\"step1\"]'),
(416, '634eff8619cf0', 'Neko', 'Neko', '[\"step1\"]'),
(417, '634eff8619fe3', 'Nemerle', 'Nemerle', '[\"step1\"]'),
(418, '634eff861a2a2', 'nesC', 'nesC', '[\"step1\"]'),
(419, '634eff861a50b', 'NESL', 'NESL', '[\"step1\"]'),
(420, '634eff861a781', 'Net.Data', 'Net.Data', '[\"step1\"]'),
(421, '634eff861aa56', 'NetLogo', 'NetLogo', '[\"step1\"]'),
(422, '634eff861ad17', 'NetRexx', 'NetRexx', '[\"step1\"]'),
(423, '634eff861b021', 'NewLISP', 'NewLISP', '[\"step1\"]'),
(424, '634eff861b382', 'NEWP', 'NEWP', '[\"step1\"]'),
(425, '634eff861b69b', 'Newspeak', 'Newspeak', '[\"step1\"]'),
(426, '634eff861b97c', 'NewtonScript', 'NewtonScript', '[\"step1\"]'),
(427, '634eff861bcca', 'NGL', 'NGL', '[\"step1\"]'),
(428, '634eff861c0ee', 'Nial', 'Nial', '[\"step1\"]'),
(429, '634eff861c458', 'Nice', 'Nice', '[\"step1\"]'),
(430, '634eff861c7cb', 'Nickle', 'Nickle', '[\"step1\"]'),
(431, '634eff861cbaa', 'Nim', 'Nim', '[\"step1\"]'),
(432, '634eff861ceba', 'NPL', 'NPL', '[\"step1\"]'),
(433, '634eff861d1a9', 'Not eXactly C', 'Not eXactly C', '[\"step1\"]'),
(434, '634eff861d3ef', 'Not Quite C', 'Not Quite C', '[\"step1\"]'),
(435, '634eff861d6cf', 'NSIS', 'NSIS', '[\"step1\"]'),
(436, '634eff861d96b', 'Nu', 'Nu', '[\"step1\"]'),
(437, '634eff861dbf6', 'NWScript', 'NWScript', '[\"step1\"]'),
(438, '634eff861dec1', 'NXT-G', 'NXT-G', '[\"step1\"]'),
(439, '634eff861e1b6', 'o:XML', 'o:XML', '[\"step1\"]'),
(440, '634eff861e449', 'Oak', 'Oak', '[\"step1\"]'),
(441, '634eff861e6db', 'Oberon', 'Oberon', '[\"step1\"]'),
(442, '634eff861ea2c', 'Obix', 'Obix', '[\"step1\"]'),
(443, '634eff861ecef', 'OBJ2', 'OBJ2', '[\"step1\"]'),
(444, '634eff861ef78', 'Object Lisp', 'Object Lisp', '[\"step1\"]'),
(445, '634eff861f287', 'ObjectLOGO', 'ObjectLOGO', '[\"step1\"]'),
(446, '634eff861f556', 'Object REXX', 'Object REXX', '[\"step1\"]'),
(447, '634eff861f7de', 'Object Pascal', 'Object Pascal', '[\"step1\"]'),
(448, '634eff861fa50', 'Objective-C', 'Objective-C', '[\"step1\"]'),
(449, '634eff861fce7', 'Objective-J', 'Objective-J', '[\"step1\"]'),
(450, '634eff862005d', 'Obliq', 'Obliq', '[\"step1\"]'),
(451, '634eff862040f', 'Obol', 'Obol', '[\"step1\"]'),
(452, '634eff86207d3', 'OCaml', 'OCaml', '[\"step1\"]'),
(453, '634eff8620d28', 'occam', 'occam', '[\"step1\"]'),
(454, '634eff86210d8', 'occam-π', 'occam-π', '[\"step1\"]'),
(455, '634eff862144a', 'Octave', 'Octave', '[\"step1\"]'),
(456, '634eff86217a3', 'OmniMark', 'OmniMark', '[\"step1\"]'),
(457, '634eff8621b4a', 'Onyx', 'Onyx', '[\"step1\"]'),
(458, '634eff8622103', 'Opa', 'Opa', '[\"step1\"]'),
(459, '634eff86228fc', 'Opal', 'Opal', '[\"step1\"]'),
(460, '634eff8622e64', 'OpenCL', 'OpenCL', '[\"step1\"]'),
(461, '634eff862317f', 'OpenEdge ABL', 'OpenEdge ABL', '[\"step1\"]'),
(462, '634eff86234ac', 'OPL', 'OPL', '[\"step1\"]'),
(463, '634eff8623876', 'OPS5', 'OPS5', '[\"step1\"]'),
(464, '634eff8623c4b', 'OptimJ', 'OptimJ', '[\"step1\"]'),
(465, '634eff862413b', 'Orc', 'Orc', '[\"step1\"]'),
(466, '634eff8624519', 'ORCA/Modula-2', 'ORCA/Modula-2', '[\"step1\"]'),
(467, '634eff86248a3', 'Oriel', 'Oriel', '[\"step1\"]'),
(468, '634eff8625059', 'Orwell', 'Orwell', '[\"step1\"]'),
(469, '634eff862568d', 'Oxygene', 'Oxygene', '[\"step1\"]'),
(470, '634eff86259af', 'Oz', 'Oz', '[\"step1\"]'),
(471, '634eff8625cb2', 'P#', 'P#', '[\"step1\"]'),
(472, '634eff8625fde', 'ParaSail (programming language)', 'ParaSail (programming language)', '[\"step1\"]'),
(473, '634eff86262c6', 'PARI/GP', 'PARI/GP', '[\"step1\"]'),
(474, '634eff8626543', 'Pascal', 'Pascal', '[\"step1\"]'),
(475, '634eff8626812', 'Pawn', 'Pawn', '[\"step1\"]'),
(476, '634eff8626acf', 'PCASTL', 'PCASTL', '[\"step1\"]'),
(477, '634eff8626d44', 'PCF', 'PCF', '[\"step1\"]'),
(478, '634eff8627045', 'PEARL', 'PEARL', '[\"step1\"]'),
(479, '634eff862739b', 'PeopleCode', 'PeopleCode', '[\"step1\"]'),
(480, '634eff86276e8', 'Perl', 'Perl', '[\"step1\"]'),
(481, '634eff8627a45', 'PDL', 'PDL', '[\"step1\"]'),
(482, '634eff8627d84', 'PHP', 'PHP', '[\"step1\"]'),
(483, '634eff862804b', 'Phrogram', 'Phrogram', '[\"step1\"]'),
(484, '634eff8628317', 'Pico', 'Pico', '[\"step1\"]'),
(485, '634eff8628658', 'Picolisp', 'Picolisp', '[\"step1\"]'),
(486, '634eff8628971', 'Pict', 'Pict', '[\"step1\"]'),
(487, '634eff8629016', 'Pike', 'Pike', '[\"step1\"]'),
(488, '634eff8629555', 'PIKT', 'PIKT', '[\"step1\"]'),
(489, '634eff862987b', 'PILOT', 'PILOT', '[\"step1\"]'),
(490, '634eff862a301', 'Pipelines', 'Pipelines', '[\"step1\"]'),
(491, '634eff862a99f', 'Pizza', 'Pizza', '[\"step1\"]'),
(492, '634eff862b161', 'PL-11', 'PL-11', '[\"step1\"]'),
(493, '634eff862b84e', 'PL/0', 'PL/0', '[\"step1\"]'),
(494, '634eff862bef8', 'PL/B', 'PL/B', '[\"step1\"]'),
(495, '634eff862c5a5', 'PL/C', 'PL/C', '[\"step1\"]'),
(496, '634eff862d07e', 'PL/I', 'PL/I', '[\"step1\"]'),
(497, '634eff862dc63', 'PL/M', 'PL/M', '[\"step1\"]'),
(498, '634eff862e925', 'PL/P', 'PL/P', '[\"step1\"]'),
(499, '634eff862f199', 'PL/SQL', 'PL/SQL', '[\"step1\"]'),
(500, '634eff862f737', 'PL360', 'PL360', '[\"step1\"]'),
(501, '634eff862fccf', 'PLANC', 'PLANC', '[\"step1\"]'),
(502, '634eff86301c4', 'Plankalkül', 'Plankalkül', '[\"step1\"]'),
(503, '634eff86306b1', 'Planner', 'Planner', '[\"step1\"]'),
(504, '634eff8630ca2', 'PLEX', 'PLEX', '[\"step1\"]'),
(505, '634eff8631564', 'PLEXIL', 'PLEXIL', '[\"step1\"]'),
(506, '634eff8631e5d', 'Plus', 'Plus', '[\"step1\"]'),
(507, '634eff86323f4', 'POP-11', 'POP-11', '[\"step1\"]'),
(508, '634eff863288c', 'PostScript', 'PostScript', '[\"step1\"]'),
(509, '634eff8632c96', 'PortablE', 'PortablE', '[\"step1\"]'),
(510, '634eff863309b', 'Powerhouse', 'Powerhouse', '[\"step1\"]'),
(511, '634eff86334cb', 'PowerBuilder', 'PowerBuilder', '[\"step1\"]'),
(512, '634eff8633905', 'PowerShell', 'PowerShell', '[\"step1\"]'),
(513, '634eff8633d7e', 'PPL', 'PPL', '[\"step1\"]'),
(514, '634eff86341bc', 'Processing', 'Processing', '[\"step1\"]'),
(515, '634eff8634530', 'Processing.js', 'Processing.js', '[\"step1\"]'),
(516, '634eff863491f', 'Prograph', 'Prograph', '[\"step1\"]'),
(517, '634eff8634d73', 'PROIV', 'PROIV', '[\"step1\"]'),
(518, '634eff86352cf', 'Prolog', 'Prolog', '[\"step1\"]'),
(519, '634eff8635745', 'PROMAL', 'PROMAL', '[\"step1\"]'),
(520, '634eff8635b26', 'Promela', 'Promela', '[\"step1\"]'),
(521, '634eff8635ef6', 'PROSE modeling language', 'PROSE modeling language', '[\"step1\"]'),
(522, '634eff86366b1', 'PROTEL', 'PROTEL', '[\"step1\"]'),
(523, '634eff8636a74', 'ProvideX', 'ProvideX', '[\"step1\"]'),
(524, '634eff8636e0e', 'Pro*C', 'Pro*C', '[\"step1\"]'),
(525, '634eff8637140', 'Pure', 'Pure', '[\"step1\"]'),
(526, '634eff86374e1', 'Python', 'Python', '[\"step1\"]'),
(527, '634eff863794b', 'Q (equational programming language)', 'Q (equational programming language)', '[\"step1\"]'),
(528, '634eff863801b', 'Q (programming language from Kx Systems)', 'Q (programming language from Kx Systems)', '[\"step1\"]'),
(529, '634eff8638691', 'Qalb', 'Qalb', '[\"step1\"]'),
(530, '634eff8638f2c', 'QtScript', 'QtScript', '[\"step1\"]'),
(531, '634eff863998f', 'QuakeC', 'QuakeC', '[\"step1\"]'),
(532, '634eff8639f57', 'QPL', 'QPL', '[\"step1\"]'),
(533, '634eff863a49d', 'R', 'R', '[\"step1\"]'),
(534, '634eff863a973', 'R++', 'R++', '[\"step1\"]'),
(535, '634eff863b02d', 'Racket', 'Racket', '[\"step1\"]'),
(536, '634eff863b51a', 'RAPID', 'RAPID', '[\"step1\"]'),
(537, '634eff863bb36', 'Rapira', 'Rapira', '[\"step1\"]'),
(538, '634eff863c05f', 'Ratfiv', 'Ratfiv', '[\"step1\"]'),
(539, '634eff8640c57', 'Ratfor', 'Ratfor', '[\"step1\"]'),
(540, '634eff864244c', 'rc', 'rc', '[\"step1\"]'),
(541, '634eff8642b02', 'REBOL', 'REBOL', '[\"step1\"]'),
(542, '634eff8643203', 'Red', 'Red', '[\"step1\"]'),
(543, '634eff8643836', 'Redcode', 'Redcode', '[\"step1\"]'),
(544, '634eff8643d80', 'REFAL', 'REFAL', '[\"step1\"]'),
(545, '634eff86442fa', 'Reia', 'Reia', '[\"step1\"]'),
(546, '634eff8644830', 'Revolution', 'Revolution', '[\"step1\"]'),
(547, '634eff8644d1b', 'rex', 'rex', '[\"step1\"]'),
(548, '634eff8645e96', 'REXX', 'REXX', '[\"step1\"]'),
(549, '634eff8646577', 'Rlab', 'Rlab', '[\"step1\"]'),
(550, '634eff8646b86', 'RobotC', 'RobotC', '[\"step1\"]'),
(551, '634eff864727c', 'ROOP', 'ROOP', '[\"step1\"]'),
(552, '634eff8647922', 'RPG', 'RPG', '[\"step1\"]'),
(553, '634eff8647fef', 'RPL', 'RPL', '[\"step1\"]'),
(554, '634eff8648742', 'RSL', 'RSL', '[\"step1\"]'),
(555, '634eff8648d7c', 'RTL/2', 'RTL/2', '[\"step1\"]'),
(556, '634eff86494b8', 'Ruby', 'Ruby', '[\"step1\"]'),
(557, '634eff8649a45', 'RuneScript', 'RuneScript', '[\"step1\"]'),
(558, '634eff8649fa8', 'Rust', 'Rust', '[\"step1\"]'),
(559, '634eff864a537', 'S', 'S', '[\"step1\"]'),
(560, '634eff864aace', 'S2', 'S2', '[\"step1\"]'),
(561, '634eff864b048', 'S3', 'S3', '[\"step1\"]'),
(562, '634eff864b5c3', 'S-Lang', 'S-Lang', '[\"step1\"]'),
(563, '634eff864bb40', 'S-PLUS', 'S-PLUS', '[\"step1\"]'),
(564, '634eff864c094', 'SA-C', 'SA-C', '[\"step1\"]'),
(565, '634eff864c565', 'SabreTalk', 'SabreTalk', '[\"step1\"]'),
(566, '634eff864c996', 'SAIL', 'SAIL', '[\"step1\"]'),
(567, '634eff864ce17', 'SALSA', 'SALSA', '[\"step1\"]'),
(568, '634eff864d26a', 'SAM76', 'SAM76', '[\"step1\"]'),
(569, '634eff864d8a1', 'SAS', 'SAS', '[\"step1\"]'),
(570, '634eff864dfb4', 'SASL', 'SASL', '[\"step1\"]'),
(571, '634eff864e41a', 'Sather', 'Sather', '[\"step1\"]'),
(572, '634eff864e8d3', 'Sawzall', 'Sawzall', '[\"step1\"]'),
(573, '634eff864ed77', 'SBL', 'SBL', '[\"step1\"]'),
(574, '634eff864f249', 'Scala', 'Scala', '[\"step1\"]'),
(575, '634eff864f6a0', 'Scheme', 'Scheme', '[\"step1\"]'),
(576, '634eff864fb12', 'Scilab', 'Scilab', '[\"step1\"]'),
(577, '634eff864ff3d', 'Scratch', 'Scratch', '[\"step1\"]'),
(578, '634eff8650393', 'Script.NET', 'Script.NET', '[\"step1\"]'),
(579, '634eff86507c4', 'Sed', 'Sed', '[\"step1\"]'),
(580, '634eff8650bf2', 'Seed7', 'Seed7', '[\"step1\"]'),
(581, '634eff8651082', 'Self', 'Self', '[\"step1\"]'),
(582, '634eff865150e', 'SenseTalk', 'SenseTalk', '[\"step1\"]'),
(583, '634eff8651bd4', 'SequenceL', 'SequenceL', '[\"step1\"]'),
(584, '634eff86522b9', 'SETL', 'SETL', '[\"step1\"]'),
(585, '634eff8652766', 'Shift Script', 'Shift Script', '[\"step1\"]'),
(586, '634eff8652c22', 'SIMPOL', 'SIMPOL', '[\"step1\"]'),
(587, '634eff8653046', 'SIGNAL', 'SIGNAL', '[\"step1\"]'),
(588, '634eff8653445', 'SiMPLE', 'SiMPLE', '[\"step1\"]'),
(589, '634eff8653881', 'SIMSCRIPT', 'SIMSCRIPT', '[\"step1\"]'),
(590, '634eff8653c7a', 'Simula', 'Simula', '[\"step1\"]'),
(591, '634eff86540a0', 'Simulink', 'Simulink', '[\"step1\"]'),
(592, '634eff86544da', 'SISAL', 'SISAL', '[\"step1\"]'),
(593, '634eff86548f0', 'SLIP', 'SLIP', '[\"step1\"]'),
(594, '634eff8654d1a', 'SMALL', 'SMALL', '[\"step1\"]'),
(595, '634eff865585c', 'Smalltalk', 'Smalltalk', '[\"step1\"]'),
(596, '634eff8655e5d', 'Small Basic', 'Small Basic', '[\"step1\"]'),
(597, '634eff86562e9', 'SML', 'SML', '[\"step1\"]'),
(598, '634eff8656727', 'Snap!', 'Snap!', '[\"step1\"]'),
(599, '634eff8656b94', 'SNOBOL', 'SNOBOL', '[\"step1\"]'),
(600, '634eff8657073', 'SPITBOL', 'SPITBOL', '[\"step1\"]'),
(601, '634eff865751a', 'Snowball', 'Snowball', '[\"step1\"]'),
(602, '634eff86579cd', 'SOL', 'SOL', '[\"step1\"]'),
(603, '634eff865805c', 'Span', 'Span', '[\"step1\"]'),
(604, '634eff865849c', 'SPARK', 'SPARK', '[\"step1\"]'),
(605, '634eff86588e6', 'Speedcode', 'Speedcode', '[\"step1\"]'),
(606, '634eff8658dcc', 'SPIN', 'SPIN', '[\"step1\"]'),
(607, '634eff8659294', 'SP/k', 'SP/k', '[\"step1\"]'),
(608, '634eff865983f', 'SPS', 'SPS', '[\"step1\"]'),
(609, '634eff8659d06', 'Squeak', 'Squeak', '[\"step1\"]'),
(610, '634eff865a0f4', 'Squirrel', 'Squirrel', '[\"step1\"]'),
(611, '634eff865a4f2', 'SR', 'SR', '[\"step1\"]'),
(612, '634eff865a8d0', 'S/SL', 'S/SL', '[\"step1\"]'),
(613, '634eff865ace3', 'Stackless Python', 'Stackless Python', '[\"step1\"]'),
(614, '634eff865b124', 'Starlogo', 'Starlogo', '[\"step1\"]'),
(615, '634eff865b52e', 'Strand', 'Strand', '[\"step1\"]'),
(616, '634eff865b9e7', 'Stata', 'Stata', '[\"step1\"]'),
(617, '634eff865be2d', 'Stateflow', 'Stateflow', '[\"step1\"]'),
(618, '634eff865c398', 'Subtext', 'Subtext', '[\"step1\"]'),
(619, '634eff865c7f6', 'SuperCollider', 'SuperCollider', '[\"step1\"]'),
(620, '634eff865cc24', 'SuperTalk', 'SuperTalk', '[\"step1\"]'),
(621, '634eff865d1fc', 'Swift (Apple programming language)', 'Swift (Apple programming language)', '[\"step1\"]'),
(622, '634eff865d780', 'Swift (parallel scripting language)', 'Swift (parallel scripting language)', '[\"step1\"]'),
(623, '634eff865dfeb', 'SYMPL', 'SYMPL', '[\"step1\"]'),
(624, '634eff865ea2e', 'SyncCharts', 'SyncCharts', '[\"step1\"]'),
(625, '634eff865ef6c', 'SystemVerilog', 'SystemVerilog', '[\"step1\"]'),
(626, '634eff865f3f7', 'T', 'T', '[\"step1\"]'),
(627, '634eff865f8d8', 'TACL', 'TACL', '[\"step1\"]'),
(628, '634eff865fe2d', 'TACPOL', 'TACPOL', '[\"step1\"]'),
(629, '634eff86602e2', 'TADS', 'TADS', '[\"step1\"]'),
(630, '634eff8660765', 'TAL', 'TAL', '[\"step1\"]'),
(631, '634eff8660be2', 'Tcl', 'Tcl', '[\"step1\"]'),
(632, '634eff8660fb9', 'Tea', 'Tea', '[\"step1\"]'),
(633, '634eff866133a', 'TECO', 'TECO', '[\"step1\"]'),
(634, '634eff86616ba', 'TELCOMP', 'TELCOMP', '[\"step1\"]'),
(635, '634eff8661c16', 'TeX', 'TeX', '[\"step1\"]'),
(636, '634eff866214c', 'TEX', 'TEX', '[\"step1\"]'),
(637, '634eff866256c', 'TIE', 'TIE', '[\"step1\"]'),
(638, '634eff866288b', 'Timber', 'Timber', '[\"step1\"]'),
(639, '634eff8662be5', 'TMG', 'TMG', '[\"step1\"]'),
(640, '634eff8662f5d', 'Tom', 'Tom', '[\"step1\"]'),
(641, '634eff866327b', 'TOM', 'TOM', '[\"step1\"]'),
(642, '634eff86635a0', 'Topspeed', 'Topspeed', '[\"step1\"]'),
(643, '634eff8663870', 'TPU', 'TPU', '[\"step1\"]'),
(644, '634eff8663b3b', 'Trac', 'Trac', '[\"step1\"]'),
(645, '634eff8663e7e', 'TTM', 'TTM', '[\"step1\"]'),
(646, '634eff8664156', 'T-SQL', 'T-SQL', '[\"step1\"]'),
(647, '634eff866448a', 'TTCN', 'TTCN', '[\"step1\"]'),
(648, '634eff86647da', 'Turing', 'Turing', '[\"step1\"]'),
(649, '634eff8664b21', 'TUTOR', 'TUTOR', '[\"step1\"]'),
(650, '634eff8664e56', 'TXL', 'TXL', '[\"step1\"]'),
(651, '634eff8665140', 'TypeScript', 'TypeScript', '[\"step1\"]'),
(652, '634eff8665413', 'Turbo C++', 'Turbo C++', '[\"step1\"]'),
(653, '634eff866577e', 'Ubercode', 'Ubercode', '[\"step1\"]'),
(654, '634eff8665aac', 'UCSD Pascal', 'UCSD Pascal', '[\"step1\"]'),
(655, '634eff8665dc2', 'Umple', 'Umple', '[\"step1\"]'),
(656, '634eff8666823', 'Unicon', 'Unicon', '[\"step1\"]'),
(657, '634eff8666b57', 'Uniface', 'Uniface', '[\"step1\"]'),
(658, '634eff8666e2d', 'UNITY', 'UNITY', '[\"step1\"]'),
(659, '634eff866715e', 'Unix shell', 'Unix shell', '[\"step1\"]'),
(660, '634eff86673ed', 'UnrealScript', 'UnrealScript', '[\"step1\"]'),
(661, '634eff86676b5', 'Vala', 'Vala', '[\"step1\"]'),
(662, '634eff8667970', 'VBA', 'VBA', '[\"step1\"]'),
(663, '634eff8667c4f', 'VBScript', 'VBScript', '[\"step1\"]'),
(664, '634eff8667f55', 'Verilog', 'Verilog', '[\"step1\"]'),
(665, '634eff86681a5', 'VHDL', 'VHDL', '[\"step1\"]'),
(666, '634eff86683f0', 'Visual Basic', 'Visual Basic', '[\"step1\"]'),
(667, '634eff866864d', 'Visual Basic .NET', 'Visual Basic .NET', '[\"step1\"]'),
(668, '634eff8668921', 'Visual DataFlex', 'Visual DataFlex', '[\"step1\"]'),
(669, '634eff8668c2d', 'Visual DialogScript', 'Visual DialogScript', '[\"step1\"]'),
(670, '634eff8668eff', 'Visual Fortran', 'Visual Fortran', '[\"step1\"]'),
(671, '634eff866927f', 'Visual FoxPro', 'Visual FoxPro', '[\"step1\"]'),
(672, '634eff86695f5', 'Visual J++', 'Visual J++', '[\"step1\"]'),
(673, '634eff8669933', 'Visual J#', 'Visual J#', '[\"step1\"]'),
(674, '634eff8669d20', 'Visual Objects', 'Visual Objects', '[\"step1\"]'),
(675, '634eff866a084', 'Visual Prolog', 'Visual Prolog', '[\"step1\"]'),
(676, '634eff866a3b7', 'VSXu', 'VSXu', '[\"step1\"]'),
(677, '634eff866a6b8', 'Vvvv', 'Vvvv', '[\"step1\"]'),
(678, '634eff866aa3c', 'WATFIV, WATFOR', 'WATFIV, WATFOR', '[\"step1\"]'),
(679, '634eff866ae1f', 'WebDNA', 'WebDNA', '[\"step1\"]'),
(680, '634eff866b22d', 'WebQL', 'WebQL', '[\"step1\"]'),
(681, '634eff866b6c5', 'Windows PowerShell', 'Windows PowerShell', '[\"step1\"]'),
(682, '634eff866bd36', 'Winbatch', 'Winbatch', '[\"step1\"]'),
(683, '634eff866c03a', 'Wolfram', 'Wolfram', '[\"step1\"]'),
(684, '634eff866c335', 'Wyvern', 'Wyvern', '[\"step1\"]'),
(685, '634eff866c628', 'X++', 'X++', '[\"step1\"]'),
(686, '634eff866c8ef', 'X#', 'X#', '[\"step1\"]'),
(687, '634eff866cbca', 'X10', 'X10', '[\"step1\"]'),
(688, '634eff866d7ea', 'XBL', 'XBL', '[\"step1\"]'),
(689, '634eff866dbcd', 'XC', 'XC', '[\"step1\"]'),
(690, '634eff866e669', 'XMOS architecture', 'XMOS architecture', '[\"step1\"]'),
(691, '634eff866ec51', 'xHarbour', 'xHarbour', '[\"step1\"]'),
(692, '634eff866effe', 'XL', 'XL', '[\"step1\"]'),
(693, '634eff866f320', 'Xojo', 'Xojo', '[\"step1\"]'),
(694, '634eff866f607', 'XOTcl', 'XOTcl', '[\"step1\"]'),
(695, '634eff866f8c7', 'XPL', 'XPL', '[\"step1\"]'),
(696, '634eff866fb27', 'XPL0', 'XPL0', '[\"step1\"]'),
(697, '634eff866fdf8', 'XQuery', 'XQuery', '[\"step1\"]'),
(698, '634eff86700a8', 'XSB', 'XSB', '[\"step1\"]'),
(699, '634eff8670384', 'XSLT', 'XSLT', '[\"step1\"]'),
(700, '634eff867068c', 'XPath', 'XPath', '[\"step1\"]'),
(701, '634eff867094d', 'Xtend', 'Xtend', '[\"step1\"]'),
(702, '634eff8670c36', 'Yorick', 'Yorick', '[\"step1\"]'),
(703, '634eff8670f3a', 'YQL', 'YQL', '[\"step1\"]'),
(704, '634eff8671209', 'Z notation', 'Z notation', '[\"step1\"]'),
(705, '634eff86714a1', 'Zeno', 'Zeno', '[\"step1\"]'),
(706, '634eff8671768', 'ZOPL', 'ZOPL', '[\"step1\"]'),
(707, '634eff86719ef', 'ZPL', 'ZPL', '[\"step1\"]'),
(708, '634f582fdf575', 'React.js', 'JavaScript', '[\"step1\"]');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) NOT NULL,
  `uniq_id` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `booklet_id` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) NOT NULL,
  `uniq_id` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `project_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booklets`
--
ALTER TABLE `booklets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commits`
--
ALTER TABLE `commits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geeks`
--
ALTER TABLE `geeks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_access_tokens`
--
ALTER TABLE `password_access_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booklets`
--
ALTER TABLE `booklets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `commits`
--
ALTER TABLE `commits`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `geeks`
--
ALTER TABLE `geeks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `password_access_tokens`
--
ALTER TABLE `password_access_tokens`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=709;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
