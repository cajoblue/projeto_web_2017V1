-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2017 at 11:21 AM
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
(1, 83, 'Salada', 'adoro', '2014-06-17 04:18:03', 'images/', 130, NULL, 1);

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
(90, 'tito_profe@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'tito_prof', 'professor'),
(4, 'abc@abc.pt', 'd41d8cd98f00b204e9800998ecf8427e', '', 'estudante'),
(77, 'joaopinheirogomes20@gmail.com', '27cde2bd9fdafbec60d176d18fc8d47f', 'uy', 'estudante'),
(78, 'utu', '01911b11e5b05e3f969c595d709df64a', 'hyt', 'estudante'),
(76, 'joaopinheirogomes20@gmail.com', '27cde2bd9fdafbec60d176d18fc8d47f', 'Celso', 'estudante'),
(74, 'joaopmiguelinheirogomes20@gmail.com', '27cde2bd9fdafbec60d176d18fc8d47f', 'Celso', 'estudante'),
(71, 'maria@hotmail.com', '26fe523f8e85514cb702674a5adea793', 'maria', 'profissional'),
(75, 'joaomiguelpinheirogomes20@gmail.com', '27cde2bd9fdafbec60d176d18fc8d47f', 'Celso', 'estudante'),
(70, 'joaopinheirogomes20@gmail.com', '27cde2bd9fdafbec60d176d18fc8d47f', 'joao', 'admin'),
(69, 'joaopinheirogomes@hotmail.com', 'f392666b6fa93b25762a34ea41dc7918', 'JoÃ£o', 'admin'),
(83, 'tito@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'tito', 'estudante'),
(84, 'lol@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'lol', 'estudante'),
(85, 'lol_p@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'lol_p', 'prof_saude'),
(86, 'lol_ad@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'lol_ad', 'admin'),
(87, 'EWRGET', 'd9c6fb7cf23a06e52661dfdcc734238e', 'wef', 'estudante'),
(88, 'EWRGET', '94c87dabfed0ed61d44e459d3cef0cfb', 'wef', 'estudante'),
(89, 'tgyh', '070aa1bd593ae8bdda3f0f3a49e04478', 'fert', 'estudante'),
(91, 'tito_estudante@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'tito_estudante', 'estudante');

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
(14, 9910, 2, 'td bem', '2019-05-17', '11:21:22'),
(16, 2943, 83, 'ola amigo', '2019-06-17', '10:12:47'),
(17, 30969, 85, 'ola\r\n', '2025-06-17', '10:39:02');

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
(3, 2, 9910),
(83, 70, 2943),
(85, 83, 30969);

-- --------------------------------------------------------

--
-- Table structure for table `online_users`
--

CREATE TABLE `online_users` (
  `id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `tempo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_users`
--

INSERT INTO `online_users` (`id`, `user_id`, `user_name`, `tempo`) VALUES
(NULL, 85, 'lol_p', 1498389464);

-- --------------------------------------------------------

--
-- Table structure for table `registo_controller`
--

CREATE TABLE `registo_controller` (
  `id` int(11) DEFAULT NULL,
  `hash_sessao` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registo_controller`
--

INSERT INTO `registo_controller` (`id`, `hash_sessao`, `user_id`) VALUES
(NULL, 11458, 90),
(NULL, 9744, 85),
(NULL, 1363, 83);

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
-- Table structure for table `t_estudante`
--

CREATE TABLE `t_estudante` (
  `idE` int(11) NOT NULL,
  `nome_completo` varchar(150) NOT NULL,
  `data_nasc` date NOT NULL,
  `ano_escola` varchar(100) DEFAULT NULL,
  `escola` varchar(150) DEFAULT NULL,
  `at_interesse` varchar(250) DEFAULT NULL,
  `altura` float DEFAULT NULL,
  `peso` int(11) DEFAULT NULL,
  `idUtilizador` int(11) DEFAULT NULL,
  `hash_sessao` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_estudante`
--

INSERT INTO `t_estudante` (`idE`, `nome_completo`, `data_nasc`, `ano_escola`, `escola`, `at_interesse`, `altura`, `peso`, `idUtilizador`, `hash_sessao`) VALUES
(1, 'tito alberto estudante', '1995-06-12', 'n sei', 'ipl', 'coding', 1.8, NULL, 83, 1363);

-- --------------------------------------------------------

--
-- Table structure for table `t_prof`
--

CREATE TABLE `t_prof` (
  `idP` int(11) NOT NULL,
  `nome_completo` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `area_esp` varchar(100) NOT NULL,
  `local_trab` varchar(100) DEFAULT NULL,
  `formacao_acad` varchar(150) DEFAULT NULL,
  `idUtilizador` int(11) DEFAULT NULL,
  `hash_session` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_prof`
--

INSERT INTO `t_prof` (`idP`, `nome_completo`, `area_esp`, `local_trab`, `formacao_acad`, `idUtilizador`, `hash_session`) VALUES
(1, 'tito professor', 'Desporto', 'ipl', 'TÃ©cnico de Desporto', 90, 11458);

-- --------------------------------------------------------

--
-- Table structure for table `t_prof_saude`
--

CREATE TABLE `t_prof_saude` (
  `idPS` int(11) NOT NULL,
  `nome_completo` varchar(150) NOT NULL,
  `area_esp` varchar(100) NOT NULL,
  `local_trab` varchar(100) DEFAULT NULL,
  `formacao_acad` varchar(150) DEFAULT NULL,
  `idUtilizador` int(11) DEFAULT NULL,
  `hash_session` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_prof_saude`
--

INSERT INTO `t_prof_saude` (`idPS`, `nome_completo`, `area_esp`, `local_trab`, `formacao_acad`, `idUtilizador`, `hash_session`) VALUES
(1, 'lol profissio', 'NutriÃ§Ã£o', 'ipl', 'Nutri', 85, 9744);

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

-- --------------------------------------------------------

--
-- Table structure for table `visitas_online`
--

CREATE TABLE `visitas_online` (
  `id` int(11) NOT NULL,
  `session` varchar(15) NOT NULL,
  `hora` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitas_online`
--

INSERT INTO `visitas_online` (`id`, `session`, `hora`) VALUES
(12, '85', 1498389464);

-- --------------------------------------------------------

--
-- Table structure for table `visitas_record`
--

CREATE TABLE `visitas_record` (
  `id` int(11) NOT NULL,
  `visitantes` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitas_record`
--

INSERT INTO `visitas_record` (`id`, `visitantes`) VALUES
(1, 12);

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
-- Indexes for table `online_users`
--
ALTER TABLE `online_users`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `registo_controller`
--
ALTER TABLE `registo_controller`
  ADD KEY `user_id` (`user_id`);

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
-- Indexes for table `t_estudante`
--
ALTER TABLE `t_estudante`
  ADD PRIMARY KEY (`idE`),
  ADD KEY `idUtilizador` (`idUtilizador`),
  ADD KEY `hash_sessao` (`hash_sessao`);

--
-- Indexes for table `t_prof`
--
ALTER TABLE `t_prof`
  ADD PRIMARY KEY (`idP`),
  ADD KEY `idUtilizador` (`idUtilizador`),
  ADD KEY `hash_session` (`hash_session`);

--
-- Indexes for table `t_prof_saude`
--
ALTER TABLE `t_prof_saude`
  ADD PRIMARY KEY (`idPS`),
  ADD KEY `idUtilizador` (`idUtilizador`),
  ADD KEY `hash_session` (`hash_session`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitas_online`
--
ALTER TABLE `visitas_online`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `identificador` (`hora`);

--
-- Indexes for table `visitas_record`
--
ALTER TABLE `visitas_record`
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
  MODIFY `idUtilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `sub_categorias_forum`
--
ALTER TABLE `sub_categorias_forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_dados`
--
ALTER TABLE `tb_dados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_horas_exercicio`
--
ALTER TABLE `tb_horas_exercicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_estudante`
--
ALTER TABLE `t_estudante`
  MODIFY `idE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_prof`
--
ALTER TABLE `t_prof`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_prof_saude`
--
ALTER TABLE `t_prof_saude`
  MODIFY `idPS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `visitas_online`
--
ALTER TABLE `visitas_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `visitas_record`
--
ALTER TABLE `visitas_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
