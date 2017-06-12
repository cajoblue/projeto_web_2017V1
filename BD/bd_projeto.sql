-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Jun-2017 às 08:53
-- Versão do servidor: 5.7.14
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
-- Estrutura da tabela `forum_answer`
--

CREATE TABLE `forum_answer` (
  `question_id` int(30) DEFAULT NULL,
  `a_id` int(11) DEFAULT NULL,
  `a_name` varchar(100) DEFAULT NULL,
  `a_email` varchar(100) DEFAULT NULL,
  `a_answer` varchar(200) DEFAULT NULL,
  `a_imagem` varchar(200) DEFAULT NULL,
  `a_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `forum_answer`
--

INSERT INTO `forum_answer` (`question_id`, `a_id`, `a_name`, `a_email`, `a_answer`, `a_imagem`, `a_datetime`) VALUES
(NULL, 1, 'sgs', 'sa', 's', NULL, '2012-05-17 14:07:42'),
(NULL, 1, 'c', 'c', 'c', NULL, '2012-05-17 14:14:32'),
(NULL, 1, 'joao', 'dd', 'n', NULL, '2012-05-17 14:10:30'),
(8, 1, 'd', 'dad', 'dd', NULL, '2012-05-17 14:19:06'),
(8, 2, 'n', 'n', 'n', NULL, '2012-05-17 14:19:19'),
(8, 3, 'n', 'n', 'qw', NULL, '2012-05-17 14:19:29'),
(8, 4, 'd', 'fd', 'd', NULL, '2012-05-17 14:20:21'),
(5, 1, 'n', 'm', 'n', NULL, '2012-05-17 14:20:41'),
(3, 1, 'n', 'n', 'n', NULL, '2012-05-17 14:20:57'),
(2, 1, '', '', '', NULL, '2012-05-17 14:27:52'),
(6, 1, 'f', 'ff', 'f', NULL, '2012-05-17 14:30:45'),
(6, 2, '', '', '', NULL, '2012-05-17 14:30:53'),
(5, 2, '', '', '', NULL, '2012-05-17 14:31:00'),
(3, 2, '', '', '', NULL, '2012-05-17 14:31:06'),
(2, 2, '', '', '', NULL, '2012-05-17 14:31:12'),
(4, 1, '', '', '', NULL, '2012-05-17 14:31:24'),
(4, 2, '', '', '', NULL, '2012-05-17 14:31:32'),
(4, 3, '', '', '', NULL, '2012-05-17 14:31:36'),
(4, 4, '', '', '', NULL, '2012-05-17 14:31:40'),
(3, 3, '', '', '', NULL, '2012-05-17 14:32:04'),
(9, 6, 'joao', 'josadas', 'joao', NULL, '2014-05-17 19:57:45'),
(9, 7, 'celso', 'celso@gmail.com', 'muito bom', NULL, '2015-05-17 09:39:41'),
(9, 8, 's', 'jooa@hotmail.com', 's', 'images/149554980059244768de6cd.jpg', '2023-05-17 14:30:00'),
(25, 1, 'j', 'jooa@hotmail.com', 'n', 'imagens/', '2023-05-17 15:50:43'),
(24, 6, 'h', 'jooa@hotmail.com', 'b', 'images/149588300759295cff96c7b.jpg', '2027-05-17 11:03:27'),
(24, 7, 'k', 'jooa@hotmail.com', 'd', 'images/', '2027-05-17 11:07:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forum_question`
--

CREATE TABLE `forum_question` (
  `id` int(11) NOT NULL,
  `topic` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `view` int(200) DEFAULT NULL,
  `reply` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `forum_question`
--

INSERT INTO `forum_question` (`id`, `topic`, `detail`, `name`, `email`, `datetime`, `imagem`, `view`, `reply`) VALUES
(2, 'tabaco', 'faz mal', 'paulo', 'fdsfds', '2017-05-22 00:00:00', NULL, 18, 1),
(3, 'tabaco', 'ssss', 'ss', 'ss', '2011-05-17 00:00:00', NULL, 11, 2),
(9, 'desporto e bem estar', 'd', 'd', 'dsfs', '2012-05-17 02:10:14', NULL, 106, 7),
(10, 'tabaco', 'd11', 'd111', 'd', '2014-05-17 23:21:51', NULL, 25, 1),
(11, 'nao', 'ff', 'nad2332', 'f', '2015-05-17 08:39:21', NULL, 10, 2),
(18, 'Comida', 'muita', 'Celso', 'celso@hotmail.com', '2023-05-17 14:28:49', NULL, 94, 1),
(24, 'desporto e bem estar', 'dd', 'fdsf', 'joaogomes@hotmail.com', '2023-05-17 03:38:24', 'images/1495553904592457705fb3d.jpg', 58, 7),
(25, 'joao', 'joao', 'd', 'joaogomes@hotmail.com', '2023-05-17 03:45:32', 'imagens/', 12, 1),
(26, 'jao', 'dada', 'dsd', 'joaogomes@hotmail.com', '2027-05-17 11:09:44', 'images/', 4, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `idUtilizador` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nome_user` varchar(100) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
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
(69, 'joaopinheirogomes@hotmail.com', 'f392666b6fa93b25762a34ea41dc7918', 'JoÃ£o', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `messages`
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
-- Extraindo dados da tabela `messages`
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
-- Estrutura da tabela `message_group`
--

CREATE TABLE `message_group` (
  `user_one` int(11) NOT NULL,
  `user_two` int(11) NOT NULL,
  `hash` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `message_group`
--

INSERT INTO `message_group` (`user_one`, `user_two`, `hash`) VALUES
(1, 4, 13448),
(3, 2, 9910);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_dados`
--

CREATE TABLE `tb_dados` (
  `id` int(11) NOT NULL,
  `id_jovem` int(11) DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `altura` double DEFAULT NULL,
  `imc` double DEFAULT NULL,
  `mensagem` varchar(150) DEFAULT NULL,
  `d_ano` datetime DEFAULT NULL,
  `d_mes` varchar(100) DEFAULT NULL,
  `d_dia` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_dados`
--

INSERT INTO `tb_dados` (`id`, `id_jovem`, `peso`, `altura`, `imc`, `mensagem`, `d_ano`, `d_mes`, `d_dia`) VALUES
(1, 3, 75, 1.78, 23, 'Peso Normal', '2014-05-17 00:00:00', '', NULL),
(2, NULL, 75, 1.78, 23, 'Peso Normal', '2015-05-17 00:00:00', '', NULL),
(3, NULL, 75, 1.78, 23, 'Peso Ideal', '2015-05-17 00:00:00', '', NULL),
(4, NULL, 70, 1.7, 70, 'Obesidade  mrbida', '2015-05-17 00:00:00', '', NULL),
(5, NULL, 70, 1.7, 70, 'Obesidade III (mórbida)', '2015-05-17 00:00:00', '', NULL),
(6, 3, 55, 1.7, 24, 'Peso Ideal', '2015-02-17 00:00:00', '', NULL),
(7, 5, 70, 1.4, 35, 'Obesidade II (severa)', '2015-04-17 00:00:00', '', NULL),
(27, NULL, 60, 1.6, 23, 'Peso Ideal', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
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
-- Indexes for table `forum_question`
--
ALTER TABLE `forum_question`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tb_dados`
--
ALTER TABLE `tb_dados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forum_question`
--
ALTER TABLE `forum_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idUtilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_dados`
--
ALTER TABLE `tb_dados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
