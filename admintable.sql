-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 08:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admintable`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` mediumint(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(255) NOT NULL,
  `registration_date` datetime NOT NULL,
  `user_level` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `first_name`, `last_name`, `email`, `password`, `registration_date`, `user_level`) VALUES
(1, 'James', 'Smith', 'jsmith@myisp.co.uk', '$2y$10$mXjlf3FC9X/8AgtZDLHcXODO2JLtq3PlrrWrBxwasO7u9h8Fy4Ig2', '2022-11-29 17:45:19', 0),
(2, 'Jack', 'Smith', 'jsmith@outcook.com', '$2y$10$2864h7rPchu./tjtjrtOTORYbsBxerFEja64BxAt5IcvwSLx6eQpa', '2022-11-29 17:46:10', 1),
(3, 'Mike', 'Rosoft', 'miker@myisp.com', '$2y$10$4RubED2RKd6yt.BF7vLqOO9mDFIXnAxW5KZzCnC2I.ZiSJP7Lfc6y', '2022-11-29 17:51:46', 0),
(4, 'Olive', 'Branch', 'obranch@myisp.co.uk', '$2y$10$EOJaDYZULGwzUIRgPk3LVOPyt1ugbfCPWvOJYaU0H7qCNLPSLbrYS', '2022-11-29 17:52:29', 0),
(5, 'Frank', 'Incense', 'fincense@myisp.net', '$2y$10$bDvRATkF5bgnQ1ZnYkWPlO83wHFtkmEtS1HYzggS8EUGuOx9eA4NK', '2022-11-29 17:54:56', 0),
(6, 'Terry', 'Fide', 'tfide@myisp.de', '$2y$10$Qlr24Nd8x6qFIwk.68z9s.drkoMkLTXuGQPj96g6fg8y3E0aYHTZC', '2022-11-29 17:55:26', 0),
(7, 'Rose', 'Bush', 'rbush@myisp.co.uk', '$2y$10$hnhFbbNdwexXmMvQy.91TuvJVB32KPKwEBebyKHW.nfgsWNreYfTO', '2022-11-29 17:55:47', 0),
(8, 'Annie', 'Versary', 'aversary@myisp.com', '$2y$10$2RwNjB2Az4HXgPNowhYEK.XY.mbpvSgoUDp0vQsSRSoMIBb90broy', '2022-11-29 17:56:08', 0),
(9, 'King', 'Kai', 'king@gmail.com', '$2y$10$oS3Em1jz1Z7QqOaabMEQluIiELv5pggAu8mMXDtf3.739tseCP0WK', '2022-11-30 14:28:13', 0),
(10, 'Relebogile', 'Chiloane', 'chiloane.rk@gmail.com', '$2y$10$F3MVn0VM8K4R839EaC1J6uKgx9GxBCqjDyT41uso/Cz8rkyr.JLiS', '2022-11-30 14:29:24', 0),
(11, 'Percy', 'Veer', 'pveer@myisp.com', '$2y$10$7ep0AZU2RZ2mXRhgj9pybexBxyMg1SRxP6pa0MrfqTAEuyaxhft3y', '2022-12-01 11:51:37', 0),
(12, 'Stan', 'Dard', 'sdard@myisp.net', '$2y$10$/fPM0t7nVDY2sVk0zqh1QuOwNG8s3XJfFp5GC0Vle.meKEFKltqDW', '2022-12-01 11:52:25', 0),
(13, 'Nora', 'Bone', 'nbone@myisp.com', '$2y$10$9G7tj2r1Nu.hHgdW4Aag5uQl6VsFKRC1QbkesaV6WBv63TkXY9JWC', '2022-12-01 11:54:20', 0),
(14, 'Barry', 'Cade', 'bcade@myisp.co.uk', '$2y$10$BKnktIeKuelFX.m0kyy8e.kgM.bNaiBJFdbE0QNRpBRkvrABPNrlu', '2022-12-01 11:54:52', 0),
(15, 'Dee', 'Jected', 'djected@myisp.ork.uk', '$2y$10$nI.CFu3ZV8olY6IRhAElYe4WxOMiN78sOJI2LGmHWfr8zw2g5oP76', '2022-12-01 11:55:33', 0),
(16, 'Lynn', 'Steed', 'lseed@myisp.com', '$2y$10$a2yWGWujUTkG4o1I1p.Nuea5AZUIuw4SM98n/XaaDyV1q1EfIN05C', '2022-12-01 11:56:58', 0),
(17, 'Barry', 'Tone', 'btone@myisp.net', '$2y$10$jDnpS0EG7yV1cBZ9T1zYROSOuBaJYOYGHgGX70dRi0Ymzk8fz6xIW', '2022-12-01 11:57:30', 0),
(18, 'Helen', 'Back', 'hback@myisp.net', '$2y$10$BfffZhhI4Z6TE0g72bnuOOahvB820NGud0sxGXAUaP0Uh0gNudGjS', '2022-12-01 11:58:07', 0),
(19, 'Justin', 'Case', 'jcase@myisp.co.uk', '$2y$10$jlmdS4AnhSKOP9mUCA83g.GXEyVeDWXenxFY3nVmI.ruPpXqdvzhq', '2022-12-01 11:58:40', 0),
(20, 'Jerry', 'Attrik', 'jattrik@myisp.com', '$2y$10$5qOOGbJDodQ6GaX/UrFqk.M/AK0jcVfcwamYJW.9rLtxGAHoI.jSi', '2022-12-01 11:59:22', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
