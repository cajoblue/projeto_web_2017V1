-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2017 at 10:26 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_projeto`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias_forum`
--

CREATE TABLE `categorias_forum` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorias_forum`
--

INSERT INTO `categorias_forum` (`id`, `categoria`) VALUES
(1, 'Alimentação'),
(5, 'EuroVisÃ£o'),
(4, 'Dieta'),
(6, 'TrenÃ³');

-- --------------------------------------------------------

--
-- Table structure for table `forum_answer`
--

CREATE TABLE `forum_answer` (
  `id` int(30) NOT NULL,
  `id_question` int(11) DEFAULT NULL,
  `id_login` int(11) NOT NULL,
  `a_answer` varchar(200) DEFAULT NULL,
  `a_imagem` varchar(200) DEFAULT NULL,
  `data_reg` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum_question`
--

CREATE TABLE `forum_question` (
  `id` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `topic` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data_reg` datetime DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `view` int(200) DEFAULT NULL,
  `reply` int(200) DEFAULT NULL,
  `fk_subcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_question`
--

INSERT INTO `forum_question` (`id`, `id_login`, `topic`, `detail`, `data_reg`, `imagem`, `view`, `reply`, `fk_subcategoria`) VALUES
(1, 83, 'Salada', 'adoro', '2014-06-17 04:18:03', 'images/', 117, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `idUtilizador` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nome_user` varchar(100) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`idUtilizador`, `email`, `password`, `nome_user`, `tipo`) VALUES
(1, 'ps@admin.pt', 'd41d8cd98f00b204e9800998ecf8427e', '', 'prof_saude'),
(2, 'estudante@estudante.pt', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(3, 'abc', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(4, 'abc@abc.pt', 'd41d8cd98f00b204e9800998ecf8427e', '', 'estudante'),
(77, 'joaopinheirogomes20@gmail.com', '27cde2bd9fdafbec60d176d18fc8d47f', 'uy', 'estudante'),
(78, 'utu', '01911b11e5b05e3f969c595d709df64a', 'hyt', 'estudante'),
(76, 'joaopinheirogomes20@gmail.com', '27cde2bd9fdafbec60d176d18fc8d47f', 'Celso', 'estudante'),
(74, 'joaopmiguelinheirogomes20@gmail.com', '27cde2bd9fdafbec60d176d18fc8d47f', 'Celso', 'estudante'),
(71, 'maria@hotmail.com', '26fe523f8e85514cb702674a5adea793', 'maria', 'estudante'),
(75, 'joaomiguelpinheirogomes20@gmail.com', '27cde2bd9fdafbec60d176d18fc8d47f', 'Celso', 'estudante'),
(70, 'joaopinheirogomes20@gmail.com', '27cde2bd9fdafbec60d176d18fc8d47f', 'joao', 'admin'),
(69, 'joaopinheirogomes@hotmail.com', 'f392666b6fa93b25762a34ea41dc7918', 'JoÃ£o', 'admin'),
(83, 'tito@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'tito', 'estudante'),
(84, 'lol@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'lol', 'estudante');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `group_hash` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `group_hash`, `from_id`, `message`, `dia`, `hora`) VALUES
(1, 10894, 4, 'Testing message', '2019-05-17', '10:29:20'),
(2, 24986, 4, 'Testing2 message', '2019-05-17', '10:41:33'),
(3, 10955, 4, 'Testing2 message', '2019-05-17', '10:42:00'),
(4, 17064, 4, 'Testing2 message', '2019-05-17', '10:42:45'),
(5, 16833, 4, 'Testing2 message', '2019-05-17', '10:43:33'),
(15, 9910, 2, 'e contg', '2019-05-17', '11:21:31'),
(13, 13448, 1, 'sdjsd', '2019-05-17', '11:20:37'),
(8, 9910, 3, 'td bem;', '2019-05-17', '10:55:02'),
(12, 13448, 1, 'ola ti', '2019-05-17', '11:20:28'),
(14, 9910, 2, 'td bem', '2019-05-17', '11:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `message_group`
--

CREATE TABLE `message_group` (
  `user_one` int(11) NOT NULL,
  `user_two` int(11) NOT NULL,
  `hash` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_group`
--

INSERT INTO `message_group` (`user_one`, `user_two`, `hash`) VALUES
(1, 4, 13448),
(3, 2, 9910);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categorias_forum`
--

CREATE TABLE `sub_categorias_forum` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `sub_categoria` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categorias_forum`
--

INSERT INTO `sub_categorias_forum` (`id`, `id_categoria`, `sub_categoria`) VALUES
(1, 1, 'Dieta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dados`
--

CREATE TABLE `tb_dados` (
  `id` int(11) NOT NULL,
  `id_jovem` int(11) DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `imc` double DEFAULT NULL,
  `d_ano` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dados`
--

INSERT INTO `tb_dados` (`id`, `id_jovem`, `peso`, `imc`, `d_ano`) VALUES
(1, 83, 65, 21.718066089746, '2017-06-07'),
(2, 83, 63.5, 21.216879949213, '2017-06-05'),
(3, 83, 75.3, 25.16, '2017-06-14'),
(4, 83, 55, 18.38, '2017-06-15'),
(5, 83, 60, 20.05, '2017-06-11'),
(6, 83, 10, 3.34, '2017-06-04'),
(7, 83, 10, 3.34, '2017-06-04'),
(8, 84, 30, 10.02, '2017-06-06'),
(9, 83, 55, 18.38, '2017-06-13'),
(10, 83, 66, 22.05, '2017-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_horas_exercicio`
--

CREATE TABLE `tb_horas_exercicio` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nr_horas` int(11) NOT NULL,
  `dataResg` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_horas_exercicio`
--

INSERT INTO `tb_horas_exercicio` (`id`, `user_id`, `nr_horas`, `dataResg`) VALUES
(1, 83, 30, '2017-06-13'),
(2, 83, 20, '2017-06-13'),
(3, 83, 20, '2017-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'celso', '202cb962ac59075b964b07152d234b70'),
(2, 'pedro', '202cb962ac59075b964b07152d234b70'),
(3, 'teresa', '202cb962ac59075b964b07152d234b70'),
(4, 'rita', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias_forum`
--
ALTER TABLE `categorias_forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_answer`
--
ALTER TABLE `forum_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_question`
--
ALTER TABLE `forum_question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_subcategoria` (`fk_subcategoria`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idUtilizador`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categorias_forum`
--
ALTER TABLE `sub_categorias_forum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indexes for table `tb_dados`
--
ALTER TABLE `tb_dados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jovem` (`id_jovem`);

--
-- Indexes for table `tb_horas_exercicio`
--
ALTER TABLE `tb_horas_exercicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias_forum`
--
ALTER TABLE `categorias_forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `forum_answer`
--
ALTER TABLE `forum_answer`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forum_question`
--
ALTER TABLE `forum_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idUtilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sub_categorias_forum`
--
ALTER TABLE `sub_categorias_forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_dados`
--
ALTER TABLE `tb_dados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_horas_exercicio`
--
ALTER TABLE `tb_horas_exercicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
