-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2021 at 10:18 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stream`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendapat`
--

CREATE TABLE `pendapat` (
  `id` int(11) NOT NULL,
  `komentar` varchar(268) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendapat`
--

INSERT INTO `pendapat` (`id`, `komentar`) VALUES
(3, 'halo kawan'),
(4, 'sangat memotivasi :)'),
(8, 'Sungguh Bagus :)'),
(12, 'NEVA GIVE UP'),
(19, 'Tetap Semangat'),
(20, 'Semangat gan !!!'),
(22, 'Bagus Sekali gan :)'),
(27, 'Sangat Menginspirasi Saya :)'),
(32, 'tes 123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) CHARACTER SET latin1 NOT NULL,
  `email` varchar(128) CHARACTER SET latin1 NOT NULL,
  `image` varchar(128) CHARACTER SET latin1 NOT NULL,
  `password` varchar(256) CHARACTER SET latin1 NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `tanggal_input`) VALUES
(1, 'halo', 'halo@gmail.com', 'default.jpg', '$2y$10$7FsjjlLT27WpZMI.9aVrKO3YPStwvxDaSkE.OdnwG.fOulQEte8jG', 1, 1, 1638776437),
(2, 'gubis master', 'gubis@gmail.com', 'default.jpg', '$2y$10$ruCsUr1OGIn5kCU373EHtO8LUT6Y998yDf3L4s1BkRqZBgUkCHI2q', 1, 0, 1638786784),
(3, 'frengky zy', 'frengky@gmail.com', 'default.jpg', '$2y$10$MXEHnQjvRI1xLeoo61NsROsxxsobt.aw2AsbFG.SLbwIL3ZetiE0y', 1, 0, 1638787070),
(4, 'admin enjoyer', 'adminenjoyer@gmail.com', 'default.jpg', '$2y$10$s/Pcr3hz2yvhWCqsOpZ9yeMQI0sG3Tj1PwXwG5cv9x4wps6EB3MYi', 1, 1, 1638950259),
(5, 'numpang masuk', 'numpang@gmail.com', 'default.jpg', '$2y$10$etkbtV/3UkWBlVJeiIKbweMCdXFH0HVtrc59mFcAIFHOjWNkJYQJW', 1, 0, 1638952045),
(6, 'kucing oren', 'kucing@gmail.com', 'default.jpg', '$2y$10$gnLd.Llv5sXlHtg5fKVOMeR9iCRa3wYBtCGNkXn4eKKh9eoCgESXi', 1, 1, 1638952149),
(7, 'mang odading', 'odading@gmail.com', 'default.jpg', '$2y$10$upRqrTcDBftUFzaSNgP8HuXJhH4b32F2QKdIv4w15Smro9nXn8jea', 1, 1, 1638971164),
(8, 'presentasi uas', 'presentasi@gmail.com', 'default.jpg', '$2y$10$vaoBl8qF8GdcoQKRc.Ce5.i9VqZ3koQpr3k4vRAKesvb7AFDriGua', 1, 1, 1638978429),
(9, 'izin masuk', 'izinmasuk@gmail.com', 'default.jpg', '$2y$10$AL6Z6N0ReL3B45X/ixc4K.b0aAoD6SfmmpF2CGQD1CDj46mri0nj2', 1, 1, 1638979486),
(10, 'numpang liat', 'numpangliat@gmail.com', 'default.jpg', '$2y$10$pVejGwbOyNUA8CctWjxCmOuZW9/moW6P86d1AvT9oFc.X/9Z41TnG', 1, 1, 1639118007);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `video_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_url`) VALUES
(1, 'movie.mp4'),
(2, 'movie.mp4'),
(3, 'movie.mp4'),
(4, 'movie.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendapat`
--
ALTER TABLE `pendapat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendapat`
--
ALTER TABLE `pendapat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
