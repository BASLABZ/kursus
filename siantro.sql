-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2017 at 05:49 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siantro`
--

-- --------------------------------------------------------

--
-- Table structure for table `ref_courseclass`
--

CREATE TABLE IF NOT EXISTS `ref_courseclass` (
`courseclass_id` int(30) NOT NULL,
  `courseclass_name` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ref_courseclass`
--

INSERT INTO `ref_courseclass` (`courseclass_id`, `courseclass_name`) VALUES
(1, 'beginner'),
(2, 'intermediate'),
(3, 'advanced');

-- --------------------------------------------------------

--
-- Table structure for table `ref_matapelajaran`
--

CREATE TABLE IF NOT EXISTS `ref_matapelajaran` (
`matapelajaran_id` int(30) NOT NULL,
  `syllabus_id` varchar(30) NOT NULL,
  `matapelajaran_name` varchar(40) NOT NULL,
  `matapelajaran_description` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `ref_matapelajaran`
--

INSERT INTO `ref_matapelajaran` (`matapelajaran_id`, `syllabus_id`, `matapelajaran_name`, `matapelajaran_description`) VALUES
(6, '1', 'Bahasa Indonesia', 'Mari belajar bahasa indonesia yang baik dan benar'),
(13, '4', 'Anatomi Frekuensi', 'hahaha');

-- --------------------------------------------------------

--
-- Table structure for table `ref_role`
--

CREATE TABLE IF NOT EXISTS `ref_role` (
`role_id` int(10) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ref_role`
--

INSERT INTO `ref_role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'kepalalab'),
(3, 'trainer'),
(4, 'member'),
(5, 'trainee');

-- --------------------------------------------------------

--
-- Table structure for table `ref_rooms`
--

CREATE TABLE IF NOT EXISTS `ref_rooms` (
`room_id` int(20) NOT NULL,
  `room_name` varchar(40) NOT NULL,
  `room_notes` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ref_rooms`
--

INSERT INTO `ref_rooms` (`room_id`, `room_name`, `room_notes`) VALUES
(2, 'A22', 'Lab.Fisika'),
(5, 'A444', 'Lab.TIK'),
(7, 'A55', 'Lab.Biologi'),
(8, 'A24', 'Lab. Arsitektur');

-- --------------------------------------------------------

--
-- Table structure for table `ref_syllabus`
--

CREATE TABLE IF NOT EXISTS `ref_syllabus` (
`syllabus_id` int(30) NOT NULL,
  `syllabus_title` varchar(30) NOT NULL,
  `syllabus_dateofpost` date NOT NULL,
  `syllabus_file` varchar(80) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ref_syllabus`
--

INSERT INTO `ref_syllabus` (`syllabus_id`, `syllabus_title`, `syllabus_dateofpost`, `syllabus_file`) VALUES
(1, 'Bahasa Inggris', '2017-01-27', 'Silabus_Bahasa_Inggris_2017-01-27.pdf'),
(2, 'Matematika', '2017-01-17', 'silabus_Matematika.pdf'),
(3, 'Fisika', '2017-01-27', 'Silabus_Fisika_2017-01-27.pdf'),
(4, 'Silabus Lama', '2017-01-29', 'Silabus_Silabus_Lama_2017-01-29.pdf'),
(6, 'Test1', '2017-02-08', '1616-3129-1-SM.pdf'),
(7, 'test2', '2017-02-09', '1019-3159-1-PB.pdf'),
(8, 'test', '2017-02-17', '23.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coursematerial`
--

CREATE TABLE IF NOT EXISTS `tbl_coursematerial` (
`coursematerial_id` int(30) NOT NULL,
  `trainer_id` int(30) NOT NULL,
  `course_id_fk` int(10) DEFAULT NULL,
  `coursematerial_title` varchar(40) NOT NULL,
  `coursematerial_dateofpost` date NOT NULL,
  `coursematerial_file` varchar(80) NOT NULL,
  `coursematerial_video` varchar(80) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_coursematerial`
--

INSERT INTO `tbl_coursematerial` (`coursematerial_id`, `trainer_id`, `course_id_fk`, `coursematerial_title`, `coursematerial_dateofpost`, `coursematerial_file`, `coursematerial_video`) VALUES
(8, 3, 3, 'Algoritma Pemograman 2', '2017-01-27', 'file_materi_Algoritma_Pemograman_2_2017-01-27.pdf', 'video_materi_Algoritma_Pemograman_2_2017-01-27.mp4'),
(9, 3, 2, 'Antropologi Kesehatan', '2017-01-27', 'file_materi_Antropologi_Kesehatan_2017-01-27.pdf', 'video_materi_Antropologi_Kesehatan_2017-01-27.mp4'),
(10, 4, 3, 'Smart Cart', '2017-01-29', 'file_materi_Smart_Cart_2017-01-29.pdf', 'video_materi_Smart_Cart_2017-01-29.mp4'),
(11, 5, 4, 'Materi Baru', '2017-01-29', 'file_materi_Materi_Baru_2017-01-29.pdf', 'video_materi_Materi_Baru_2017-01-29.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE IF NOT EXISTS `tbl_courses` (
`course_id` int(30) NOT NULL,
  `courseclass_id` int(30) NOT NULL,
  `course_title` varchar(40) NOT NULL,
  `course_detail` text NOT NULL,
  `course_price` int(50) NOT NULL,
  `course_quota` int(30) NOT NULL,
  `matapelajaran` varchar(80) NOT NULL,
  `coursematerial` varchar(80) NOT NULL,
  `trainer` varchar(80) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`course_id`, `courseclass_id`, `course_title`, `course_detail`, `course_price`, `course_quota`, `matapelajaran`, `coursematerial`, `trainer`) VALUES
(2, 1, 'Antropologi Kesehatan', 'Lorem Ipsum', 500000, 16, '5,6', '8,9', '4'),
(3, 2, 'Antropologi Kesehatan 3', 'Lorem Ipsum', 400000, 12, '6', '9', '4'),
(4, 1, 'Sejarah', 'Lorem Ipsum Donor', 400000, 9, '5,6', '8,9', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam`
--

CREATE TABLE IF NOT EXISTS `tbl_exam` (
`exam_id` int(10) NOT NULL,
  `coursematerial_id_fk` int(10) DEFAULT NULL,
  `exam_name` varchar(40) DEFAULT NULL,
  `exam_totalquestion` int(11) DEFAULT NULL,
  `exam_time` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_exam`
--

INSERT INTO `tbl_exam` (`exam_id`, `coursematerial_id_fk`, `exam_name`, `exam_totalquestion`, `exam_time`) VALUES
(4, 8, 'ujian bro', 15, 20),
(5, 10, 'ujian ', 20, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE IF NOT EXISTS `tbl_member` (
`member_id` int(20) NOT NULL,
  `person_id` int(30) NOT NULL,
  `member_institute` varchar(50) NOT NULL,
  `member_doc` varchar(30) NOT NULL,
  `member_status` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`member_id`, `person_id`, `member_institute`, `member_doc`, `member_status`) VALUES
(6, 12, 'Kepolisian', 'berkas_Joko_2017-01-29.pdf', 'aktif'),
(7, 14, 'Mahasiswa', 'berkas_dita_2017-01-29.pdf', 'aktif'),
(8, 20, 'Mahasiswa', 'berkas_Indra_2017-01-29.pdf', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
`payment_id` int(30) NOT NULL,
  `trainee_id` int(30) DEFAULT NULL,
  `invoice` varchar(80) DEFAULT NULL,
  `payment_nominal` varchar(80) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `bank_from` varchar(80) DEFAULT NULL,
  `bank_to` varchar(80) DEFAULT NULL,
  `no_payment_from` varchar(80) DEFAULT NULL,
  `no_payment_to` varchar(80) DEFAULT NULL,
  `person_bank` varchar(80) DEFAULT NULL,
  `payment_upload` varchar(80) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `trainee_id`, `invoice`, `payment_nominal`, `payment_date`, `bank_from`, `bank_to`, `no_payment_from`, `no_payment_to`, `person_bank`, `payment_upload`) VALUES
(3, 20, '727', '3000000', '2017-02-08', 'BRI', 'Mandiri', '1000000', '238193212', '123123', 'kliring-bank-bca.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_person`
--

CREATE TABLE IF NOT EXISTS `tbl_person` (
`person_id` int(30) NOT NULL,
  `person_firstname` varchar(30) NOT NULL,
  `person_lastname` varchar(30) NOT NULL,
  `person_gender` varchar(20) NOT NULL,
  `person_address` text NOT NULL,
  `person_placeofbirth` varchar(50) NOT NULL,
  `person_dateofbirth` date NOT NULL,
  `person_religion` varchar(20) NOT NULL,
  `person_phonenumber` varchar(25) NOT NULL,
  `person_email` varchar(30) NOT NULL,
  `person_image` varchar(80) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_person`
--

INSERT INTO `tbl_person` (`person_id`, `person_firstname`, `person_lastname`, `person_gender`, `person_address`, `person_placeofbirth`, `person_dateofbirth`, `person_religion`, `person_phonenumber`, `person_email`, `person_image`) VALUES
(2, 'Fadil', 'Indra Sanjaya', 'Pria', 'Jl.Kaliurang Km.15', 'sorong', '1991-03-24', 'Islam', '08996787262', 'fadil@gmail.com', 'foto_Fadil_2017-01-29.jpg'),
(12, 'Joko', 'Supriyanto', 'Pria', 'Surakarta', 'surakarta', '1991-11-24', 'Islam', '08996787262', 'jokopri@gmail.com', 'foto_Joko_2017-01-29.png'),
(14, 'dita', 'praditya', 'Wanita', 'yk', 'yogyakarta', '2017-01-18', 'Islam', '083869319565', 'ditapraditya@gmail.com', 'foto_dita_2017-01-29.png'),
(16, 'Admin', 'Jitu', 'Pria', 'yogyakarta', 'yogyakarta', '1991-03-24', 'Islam', '08996787262', 'admin@gmail.com', 'foto_Admin_2017-01-29.jpg'),
(19, 'Trainer', 'Jawara', 'Pria', 'jepang', 'jepang', '1991-03-21', 'Islam', '08996787262', 'trainer@gmail.com', 'foto_Trainer_2017-01-29.png'),
(20, 'Indra', 'Supriyanto', 'Pria', 'Jl.Kaliurang Km.15', 'sorong', '1978-03-24', 'Islam', '0856345343534', 'indra@gmail.com', 'foto_Indra_2017-01-29.jpg'),
(21, 'Rianto', 'rianto', '', '', '', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_presence`
--

CREATE TABLE IF NOT EXISTS `tbl_presence` (
`presence_id` int(30) NOT NULL,
  `total_attendance` int(20) NOT NULL,
  `total_meeting` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_temp`
--

CREATE TABLE IF NOT EXISTS `tbl_temp` (
  `temp_verifikasi` varchar(50) DEFAULT NULL,
  `temp_email` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_temp`
--

INSERT INTO `tbl_temp` (`temp_verifikasi`, `temp_email`) VALUES
('54398abe77434de16c3f689ee21958d4', 'edddddddddd@ffff.com'),
('7b6b1263cc5d3c4f70dccb0e6130922a', 'ditaasasasasa@gmail.com'),
('126cb698c4d14be361a6286409151917', 'edson@yahoo.com'),
('e1a8b4af3656c8a2de65c2c9658332ae', 'edson@yahoo.com'),
('800b03f05cac8638dc75819ddb20599d', 'edson@yahoo.com'),
('85935fb654d9425db4c11c19e85bc95d', 'edson@yahoo.com'),
('09dc53dd2cc759f93fb61173be4d3a29', 'edson@yahoo.com'),
('2f31c75e8b4b80d70d44869c54f3ca37', 'edson@yahoo.com'),
('e013bed41c14f9eddb81177a28d66d6c', 'dsfsfsdfsdhsdsj@jhsdfjskdf.fgf'),
('9e2426ce7bc41885d007e907b8940b16', 'dsfsfsdfsdhsdsj@jhsdfjskdf.fgf'),
('858c416e97ceaca2e6552a39d527b9e5', 'amunisi@yahoo.com'),
('de7190e50dabffd86d7bce379f9693ab', 'abbbb@hhh.kk'),
('3fc420436bd2447a801dee856cc99323', 'riantex@yahoo.com'),
('a72e2341b0f10e0b420f29967bf0d9af', 'ediganteng@yahoo.com'),
('69be7db1d886a14c610a6596a1577268', 'edsonw@yahoo.com'),
('5e5c7426c998d6091530424993a2c01f', 'edi@yahoo.com'),
('ffe9d6c8c58aff4496cf1a98b649a7c9', 'hore@yahoo.com'),
('6298109404c330392b6182e5f99ba7e4', 'edi@yahoo.com'),
('7c9acb33d5ce9a6bf1efd7310313455c', 'ditaputriutami@yahoo.com'),
('8cfa637093814e02b0e50af65ca2c325', 'test@yahoo.com'),
('82e4de66e540eeeee2c608df930a5607', 'test@yahoo.com'),
('10ac41dd6317d9e9903c2565506e0a81', 'dita@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trainee`
--

CREATE TABLE IF NOT EXISTS `tbl_trainee` (
`trainee_id` int(30) NOT NULL,
  `member_id` int(30) NOT NULL,
  `course_id` int(30) NOT NULL,
  `trainee_paymentstatus` varchar(30) NOT NULL,
  `trainee_status` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `tbl_trainee`
--

INSERT INTO `tbl_trainee` (`trainee_id`, `member_id`, `course_id`, `trainee_paymentstatus`, `trainee_status`) VALUES
(53, 8, 2, 'belum lunas', 'belum aktif'),
(56, 6, 3, 'belum lunas', 'belum aktif'),
(58, 6, 2, 'belum lunas', 'belum aktif'),
(59, 7, 2, 'belum lunas', 'belum aktif'),
(60, 7, 4, 'belum lunas', 'belum aktif'),
(61, 8, 4, 'belum lunas', 'belum aktif'),
(62, 8, 3, 'belum lunas', 'belum aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trainer`
--

CREATE TABLE IF NOT EXISTS `tbl_trainer` (
`trainer_id` int(30) NOT NULL,
  `person_id` int(30) NOT NULL,
  `trainer_noinduk` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_trainer`
--

INSERT INTO `tbl_trainer` (`trainer_id`, `person_id`, `trainer_noinduk`) VALUES
(5, 19, ''),
(6, 21, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE IF NOT EXISTS `tbl_transaksi` (
`tran_id` int(11) NOT NULL,
  `person_id` int(20) DEFAULT NULL,
  `course_id` int(30) DEFAULT NULL,
  `tran_status` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`tran_id`, `person_id`, `course_id`, `tran_status`) VALUES
(13, 20, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`user_id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(10) NOT NULL,
  `person_id` int(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `password`, `role_id`, `person_id`) VALUES
(2, 'fadil', '0079fcb602361af76c4fd616d60f9414', 1, 2),
(12, 'jokopri', '0079fcb602361af76c4fd616d60f9414', 4, 12),
(14, 'paraditya', '0079fcb602361af76c4fd616d60f9414', 4, 14),
(16, 'admin', '0079fcb602361af76c4fd616d60f9414', 1, 16),
(19, 'trainer', '0079fcb602361af76c4fd616d60f9414', 3, 19),
(20, 'member', '0079fcb602361af76c4fd616d60f9414', 4, 20),
(21, 'rianto', '0079fcb602361af76c4fd616d60f9414', 3, 21);

-- --------------------------------------------------------

--
-- Table structure for table `trx_question`
--

CREATE TABLE IF NOT EXISTS `trx_question` (
`question_id` int(10) NOT NULL,
  `exam_id_fk` int(10) DEFAULT NULL,
  `question_bobot` int(6) DEFAULT NULL,
  `question_picture` varchar(60) DEFAULT NULL,
  `question_title` varchar(100) DEFAULT NULL,
  `option_a` varchar(60) DEFAULT NULL,
  `option_b` varchar(60) DEFAULT NULL,
  `option_c` varchar(60) DEFAULT NULL,
  `option_d` varchar(60) DEFAULT NULL,
  `option_e` varchar(60) DEFAULT NULL,
  `question_answer` varchar(100) DEFAULT NULL,
  `question_date` date DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `trx_question`
--

INSERT INTO `trx_question` (`question_id`, `exam_id_fk`, `question_bobot`, `question_picture`, `question_title`, `option_a`, `option_b`, `option_c`, `option_d`, `option_e`, `question_answer`, `question_date`) VALUES
(1, 0, 2, 'b88c510f0ecda050541039eb5315cf74.jpg', 'Siapa Gubernur Jakarta selanjutkan ?', 'Ahok-Djarot', 'Anis-Sandy', 'Agus-Silvy', 'Dita-Dhanes', 'Manda-BAs', 'A', '2017-02-11'),
(2, 0, 2, 'Red-from-Angry-Birds-Movie.jpg', 'Siapa Gubernur Jakarta selanjutkan ?', 'Ahok-Djarot', 'Anis-Sandy', 'Agus-Silvy', 'Dita-Dhanes', 'Manda-BAs', 'A', '2017-02-11'),
(4, 0, 2, '2.JPG', 'Tentukan jenis tulang coxae pada gambar berikut :', 'lala', 'lili', 'lele', 'loloo', '', 'C', '2017-02-11'),
(39, 0, 0, '', '', '', '', '', '', '', '', '2017-02-12'),
(40, 0, 3, '', 'GAGAGAGAGAAA', 'AAAA', 'VVV', 'VVVV', 'NNNN', 'NNNN', 'B', '2017-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `trx_schedule`
--

CREATE TABLE IF NOT EXISTS `trx_schedule` (
`schedule_id` smallint(10) NOT NULL,
  `course_id_fk` smallint(10) DEFAULT NULL,
  `schedule_dateopen` date DEFAULT NULL,
  `schedule_dateclose` date DEFAULT NULL,
  `schedule_coursestatus` varchar(15) DEFAULT NULL,
  `courseclass_id_fk` smallint(10) DEFAULT NULL,
  `rooms_id_fk` smallint(10) DEFAULT NULL,
  `coursematerial_id_fk` smallint(10) DEFAULT NULL,
  `trainer_id_fk` smallint(10) DEFAULT NULL,
  `schedule_note` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `trx_schedule`
--

INSERT INTO `trx_schedule` (`schedule_id`, `course_id_fk`, `schedule_dateopen`, `schedule_dateclose`, `schedule_coursestatus`, `courseclass_id_fk`, `rooms_id_fk`, `coursematerial_id_fk`, `trainer_id_fk`, `schedule_note`) VALUES
(4, 4, '2016-10-12', '2016-10-27', 'Tersedia', 1, 5, 1, 1, 'qqqq'),
(5, 2, '2016-10-27', '2016-11-05', 'Tersedia', 5, 8, 1, 1, ''),
(6, 3, '2016-12-22', '2017-01-05', 'Up Coming', 2, 5, 1, 1, ''),
(7, 11, '2016-11-23', '2016-12-07', 'Tersedia', 3, 5, 1, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `trx_score`
--

CREATE TABLE IF NOT EXISTS `trx_score` (
`score_id` int(10) NOT NULL,
  `trainee_id_fk` int(10) DEFAULT NULL,
  `exam_id_fk` int(10) DEFAULT NULL,
  `score_numeric` int(11) DEFAULT NULL,
  `score_alfabet` char(1) DEFAULT NULL,
  `score_status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ref_courseclass`
--
ALTER TABLE `ref_courseclass`
 ADD PRIMARY KEY (`courseclass_id`);

--
-- Indexes for table `ref_matapelajaran`
--
ALTER TABLE `ref_matapelajaran`
 ADD PRIMARY KEY (`matapelajaran_id`);

--
-- Indexes for table `ref_role`
--
ALTER TABLE `ref_role`
 ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `ref_rooms`
--
ALTER TABLE `ref_rooms`
 ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `ref_syllabus`
--
ALTER TABLE `ref_syllabus`
 ADD PRIMARY KEY (`syllabus_id`);

--
-- Indexes for table `tbl_coursematerial`
--
ALTER TABLE `tbl_coursematerial`
 ADD PRIMARY KEY (`coursematerial_id`);

--
-- Indexes for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
 ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
 ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
 ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
 ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_person`
--
ALTER TABLE `tbl_person`
 ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `tbl_presence`
--
ALTER TABLE `tbl_presence`
 ADD PRIMARY KEY (`presence_id`);

--
-- Indexes for table `tbl_trainee`
--
ALTER TABLE `tbl_trainee`
 ADD PRIMARY KEY (`trainee_id`);

--
-- Indexes for table `tbl_trainer`
--
ALTER TABLE `tbl_trainer`
 ADD PRIMARY KEY (`trainer_id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
 ADD PRIMARY KEY (`tran_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `trx_question`
--
ALTER TABLE `trx_question`
 ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `trx_schedule`
--
ALTER TABLE `trx_schedule`
 ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `trx_score`
--
ALTER TABLE `trx_score`
 ADD PRIMARY KEY (`score_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ref_courseclass`
--
ALTER TABLE `ref_courseclass`
MODIFY `courseclass_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ref_matapelajaran`
--
ALTER TABLE `ref_matapelajaran`
MODIFY `matapelajaran_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `ref_role`
--
ALTER TABLE `ref_role`
MODIFY `role_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ref_rooms`
--
ALTER TABLE `ref_rooms`
MODIFY `room_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ref_syllabus`
--
ALTER TABLE `ref_syllabus`
MODIFY `syllabus_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_coursematerial`
--
ALTER TABLE `tbl_coursematerial`
MODIFY `coursematerial_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
MODIFY `course_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
MODIFY `exam_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
MODIFY `member_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
MODIFY `payment_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_person`
--
ALTER TABLE `tbl_person`
MODIFY `person_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_presence`
--
ALTER TABLE `tbl_presence`
MODIFY `presence_id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_trainee`
--
ALTER TABLE `tbl_trainee`
MODIFY `trainee_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `tbl_trainer`
--
ALTER TABLE `tbl_trainer`
MODIFY `trainer_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
MODIFY `tran_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `trx_question`
--
ALTER TABLE `trx_question`
MODIFY `question_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `trx_schedule`
--
ALTER TABLE `trx_schedule`
MODIFY `schedule_id` smallint(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `trx_score`
--
ALTER TABLE `trx_score`
MODIFY `score_id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
