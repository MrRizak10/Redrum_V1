-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Out-2022 às 01:18
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hemocentro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoques`
--

CREATE TABLE `estoques` (
  `idUsuario` int(11) NOT NULL,
  `est_ap` int(11) NOT NULL,
  `est_an` int(11) NOT NULL,
  `est_bp` int(11) NOT NULL,
  `est_bn` int(11) NOT NULL,
  `est_abp` int(11) NOT NULL,
  `est_abn` int(11) NOT NULL,
  `est_op` int(11) NOT NULL,
  `est_on` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `estoques`
--

INSERT INTO `estoques` (`idUsuario`, `est_ap`, `est_an`, `est_bp`, `est_bn`, `est_abp`, `est_abn`, `est_op`, `est_on`) VALUES
(3, 30, 25, 12, 10, 0, 58, 65, 15),
(4, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `historicos`
--

CREATE TABLE `historicos` (
  `idusuario` int(11) NOT NULL,
  `dtDoacao` date NOT NULL,
  `idLocal` int(11) NOT NULL,
  `idStatus` int(11) NOT NULL,
  `dsObservacoes` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `historicos`
--

INSERT INTO `historicos` (`idusuario`, `dtDoacao`, `idLocal`, `idStatus`, `dsObservacoes`) VALUES
(2, '2022-01-10', 3, 1, NULL),
(2, '2022-04-15', 3, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `municipios`
--

CREATE TABLE `municipios` (
  `idMunicipio` int(11) NOT NULL,
  `dsMunicipio` varchar(70) COLLATE utf8_bin NOT NULL,
  `dsUf` char(2) COLLATE utf8_bin NOT NULL DEFAULT 'RS'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `municipios`
--

INSERT INTO `municipios` (`idMunicipio`, `dsMunicipio`, `dsUf`) VALUES
(1, 'PORTO ALEGRE', 'RS'),
(2, 'SAO LEOPOLDO', 'RS'),
(3, 'NOVO HAMBURGO', 'RS'),
(4, 'CAXIAS DO SUL', 'RS'),
(5, 'CANOAS', 'RS'),
(6, 'PELOTAS', 'RS'),
(7, 'GRAVATAI', 'RS'),
(8, 'SANTA MARIA', 'RS'),
(9, 'VIAMAO', 'RS'),
(10, 'ESTANCIA VELHA', 'RS'),
(11, 'SAPUCAIA DO SUL', 'RS'),
(12, 'ESTEIO', 'RS'),
(13, 'DOIS IRMAOS', 'RS'),
(14, 'IVOTI', 'RS'),
(15, 'SAPIRANGA', 'RS'),
(16, 'BAGE', 'RS'),
(17, 'OSORIO', 'RS'),
(18, 'TRAMANDAI', 'RS'),
(19, 'SAO LEOPOLDO', 'RS'),
(20, 'RIO GRANDE', 'RS'),
(21, 'ALVORADA', 'RS'),
(22, 'PASSO FUNDO', 'RS'),
(23, 'SANTA CRUS DO SUL', 'RS'),
(24, 'CACHOEIRINHA', 'RS'),
(25, 'URUGUAIANA', 'RS'),
(26, 'BENTO GONCALVES', 'RS'),
(27, 'BAGE', 'RS'),
(28, 'ERECHIM', 'RS'),
(29, 'GUAIBA', 'RS'),
(30, 'LAGEADO', 'RS'),
(31, 'ESTRELA', 'RS'),
(32, 'IJUI', 'RS'),
(33, 'CACHOEIRA DO SUL', 'RS'),
(34, 'SAPIRANGA', 'RS'),
(35, 'CAMPO BOM', 'RS'),
(36, 'SANTO ANGELO', 'RS'),
(37, 'SANTANA DO LIVRAMENTO', 'RS'),
(38, 'SANTA ROSA', 'RS'),
(39, 'FARROUPILHA', 'RS'),
(40, 'SANTO ANTONIO DA PATRULHA', 'RS'),
(41, 'ALEGRETE', 'RS'),
(42, 'VENANCIO AIRES', 'RS'),
(43, 'VACARIA', 'RS'),
(44, 'CAMAQUA', 'RS'),
(45, 'MONTENEGRO', 'RS'),
(46, 'CARAZINHO', 'RS'),
(47, 'SAO GABRIEL', 'RS'),
(48, 'SAO BORJA', 'RS'),
(49, 'CRUZ ALTA', 'RS'),
(50, 'PAROBE', 'RS'),
(51, 'IGREJINHA', 'RS'),
(52, 'TAQUARA', 'RS'),
(53, 'CANGUCU', 'RS'),
(54, 'CAPAO DA CANOA', 'RS'),
(55, 'IMBE', 'RS'),
(56, 'TORRES', 'RS'),
(57, 'SANTIAGO', 'RS'),
(58, 'CANELA', 'RS'),
(59, 'GRAMADO', 'RS'),
(60, 'MARAU', 'RS'),
(61, 'PANAMBI', 'RS'),
(62, 'SAO LOURENCO DO SUL', 'RS'),
(63, 'ELDORADO SO SUL', 'RS'),
(64, 'CHARQUEADAS', 'RS'),
(65, 'ROSARIO DO SUL', 'RS'),
(66, 'RIO PARDO', 'RS'),
(67, 'DOM PEDRITO', 'RS'),
(68, 'PORTAO', 'RS'),
(69, 'ITAQUI', 'RS'),
(70, 'GARIBALDI', 'RS'),
(71, 'ESTRELA', 'RS'),
(72, 'TEUTONIA', 'RS'),
(73, 'CACAPAVA DO SUL', 'RS'),
(74, 'SAO LUIZ GONZAGA', 'RS'),
(75, 'PALMEIRA AS MISSOES', 'RS'),
(76, 'CHUI', 'RS'),
(77, 'FREDERICO WESTPHALEN', 'RS'),
(78, 'CANDELARIA', 'RS'),
(79, 'FLORES DA CUNHA', 'RS'),
(80, 'SOLEDADE', 'RS'),
(81, 'CARLOS BARBOSA', 'RS'),
(82, 'NOVA SANTA RITA', 'RS'),
(83, 'TRIUNFO', 'RS'),
(84, 'SANTA VITORIA DO PALMAR', 'RS'),
(85, 'TRES COROAS', 'RS'),
(86, 'NOVA PRATA', 'RS'),
(87, 'SAO JOSE DO NORTE', 'RS'),
(88, 'LAGOA VERMELHA', 'RS'),
(89, 'VERA CRUZ', 'RS'),
(90, 'TAQUARI', 'RS'),
(91, 'VERANOPOLIS', 'RS'),
(92, 'JAGUARAO', 'RS'),
(93, 'GUAPORE', 'RS'),
(94, 'SAO SEBASTIAO DO CAI', 'RS'),
(95, 'ENCRUZILHADA DO SUL', 'RS'),
(96, 'CAPAO DO LEAO', 'RS'),
(97, 'SARANDI', 'RS'),
(98, 'TAPEJARA', 'RS'),
(99, 'SAO JERONIMO', 'RS'),
(100, 'TUPANCIRETA', 'RS'),
(101, 'TRES DE MAIO', 'RS'),
(102, 'TRES PASSOS', 'RS'),
(103, 'SAO SEPE', 'RS'),
(104, 'ENCANTADO', 'RS'),
(105, 'QUARAI', 'RS'),
(106, 'NOVA HARTZ', 'RS'),
(107, 'SAO FRANCISCO DE PAULA', 'RS'),
(108, 'SAO MARCOS', 'RS'),
(109, 'NOVA PETROPOLIS', 'RS'),
(110, 'ROLANTE', 'RS'),
(111, 'ARROIO DO MEIO', 'RS'),
(112, 'BUTIA', 'RS'),
(113, 'PIRATINI', 'RS'),
(114, 'IBURUBA', 'RS'),
(115, 'HORIZONTINA', 'RS'),
(116, 'JULIO DE CASTILHOS', 'RS'),
(117, 'ARROIO GRANDE', 'RS'),
(118, 'SAO FRANCISCO DE ASSIS', 'RS'),
(119, 'SERAFINA CORREA', 'RS'),
(120, 'NAO ME TOQUE', 'RS'),
(121, 'TAPES', 'RS'),
(122, 'XANGRI-LA', 'RS'),
(123, 'CIDREIRA', 'RS'),
(124, 'SANANDUVA', 'RS'),
(125, 'AGUDO', 'RS'),
(126, 'GETULIO VARGAS', 'RS'),
(127, 'SAO PEDRO DO SUL', 'RS'),
(128, 'GIRUA', 'RS'),
(129, 'RESTINGA SECA', 'RS'),
(130, 'ESPUMOSO', 'RS'),
(131, 'DON FELICIANO', 'RS'),
(132, 'SOBRADINHO', 'RS'),
(133, 'BANEARIO PINHAL', 'RS'),
(134, 'BOM PRINCIPIO', 'RS'),
(135, 'CERRO LARGO', 'RS'),
(136, 'ARROIO DOS RATOS', 'RS'),
(137, 'SANTO CRISTO', 'RS'),
(138, 'SANTO AUGUSTO', 'RS'),
(139, 'FELIZ', 'RS'),
(140, 'BARRA DO RIBEIRO', 'RS'),
(141, 'ARROIO DO TIGRE', 'RS'),
(142, 'TENENTE PORTELA', 'RS'),
(143, 'CRISSIUMAL', 'RS'),
(144, 'ANTONOI PRADO', 'RS'),
(145, 'MOSTARDAS', 'RS'),
(146, 'CERRO GRANDE DO SUL', 'RS'),
(147, 'SALTO DO JACUI', 'RS'),
(148, 'CRUZEIRO DO SUL', 'RS'),
(149, 'BOM RETIRO DO SUL', 'RS'),
(150, 'CACEQUI', 'RS'),
(151, 'CAPELA DE SANTANA', 'RS'),
(152, 'PINHEIRO MACHADO', 'RS'),
(153, 'VALEO DO SOL', 'RS'),
(154, 'REDENTORA', 'RS'),
(155, 'NONOAI', 'RS'),
(156, 'ROCA SALES', 'RS'),
(157, 'PALMARES DO SUL', 'RS'),
(158, 'TERRA DE AREIA', 'RS'),
(159, 'BOM JESUS', 'RS'),
(160, 'TRES CACHOEIRAS', 'RS'),
(161, 'BARROS CASSAL', 'RS'),
(162, 'JAGUARI', 'RS'),
(163, 'SEBERI', 'RS'),
(164, 'RONDA ALTA', 'RS'),
(165, 'TAPERA', 'RS'),
(166, 'ARROIO DO SAL', 'RS'),
(167, 'ARVOREZINHA', 'RS'),
(168, 'FONTOURA XAVIER', 'RS'),
(169, 'SINIMBU', 'RS'),
(170, 'PORTO XAVIER', 'RS'),
(171, 'NOVA BASSANO', 'RS'),
(172, 'PLANALTO', 'RS'),
(173, 'SANTO ANTONIO DAS MISSOES', 'RS'),
(174, 'CONSTANTINA', 'RS'),
(175, 'CANDIOTA', 'RS'),
(176, 'CHAPADA', 'RS'),
(177, 'CASCA', 'RS'),
(178, 'PANTANO GRANDE', 'RS'),
(179, 'SAO VICENTE DO SUL', 'RS'),
(180, 'CATUIPE', 'RS'),
(181, 'JOIA', 'RS'),
(182, 'PAVERAMA', 'RS'),
(183, 'CARAA', 'RS'),
(184, 'ENTRE-IJUIS', 'RS'),
(185, 'GENERAL CAMARA', 'RS'),
(186, 'GLORINHA', 'RS'),
(187, 'MINAS DO LEAO', 'RS'),
(188, 'CRISTAL', 'RS'),
(189, 'SANTANA DA BOA VISTA', 'RS'),
(190, 'SALVADOR DO SUL', 'RS'),
(191, 'SANTA BARBARA DO SUL', 'RS'),
(192, 'PARAI', 'RS'),
(193, 'TUPARENDI', 'RS'),
(194, 'SAO MIGUEL DAS MISSOES', 'RS'),
(195, 'BOQUEIRAO DO LEAO', 'RS'),
(196, 'PEDRO OSORIO', 'RS'),
(197, 'PARAISO DO SUL', 'RS'),
(198, 'BARAO DO TRIUNFO', 'RS'),
(199, 'SEGREDO', 'RS'),
(200, 'LAVRAS DO SUL', 'RS'),
(201, 'AMETISTA DO SUL', 'RS'),
(202, 'GUARANI DAS MISSOES', 'RS'),
(203, 'MANOEL VIANA', 'RS'),
(204, 'IBIRAIARAS', 'RS'),
(205, 'CORONEL BICACO', 'RS'),
(206, 'AMARAL FERRADOR', 'RS'),
(207, 'PALMITINHO', 'RS'),
(208, 'IRAI', 'RS'),
(209, 'AJURICABA', 'RS'),
(210, 'SAO JOSE DO OUTRO', 'RS'),
(211, 'HULHA NEGRA', 'RS'),
(212, 'HERVAL', 'RS'),
(213, 'CONDOR', 'RS'),
(214, 'SANTA CLARA DO SUL', 'RS'),
(215, 'ROQUE GONZALES', 'RS'),
(216, 'MAQUINE', 'RS'),
(217, 'IPE', 'RS'),
(218, 'BOA VISTA DO BURICA', 'RS'),
(219, 'ERVAL SECO', 'RS'),
(220, 'Faxinal do Soturno', 'RS'),
(221, 'Barão de Cotegipe', 'RS'),
(222, 'Passo do Sobrado', 'RS'),
(223, 'Morro Redondo', 'RS'),
(224, 'Sertão Santana', 'RS'),
(225, 'Morro Reuter', 'RS'),
(226, 'Formigueiro', 'RS'),
(227, 'Augusto Pestana', 'RS'),
(228, 'Nova Palma', 'RS'),
(229, 'Lagoão', 'RS'),
(230, 'Cambará do Sul', 'RS'),
(231, 'Santa Maria do Herval', 'RS'),
(232, 'Progresso	', 'RS'),
(233, 'Barão', 'RS'),
(234, 'Lindolfo Collor', 'RS'),
(235, 'Aratiba', 'RS'),
(236, 'Bossoroca', 'RS'),
(237, 'Cândido Godói', 'RS'),
(238, 'Independência', 'RS'),
(239, 'Vale Real', 'RS'),
(240, 'Cerrito', 'RS'),
(241, 'Anta Gorda', 'RS'),
(242, 'Estação', 'RS'),
(243, 'Alpestre', 'RS'),
(244, 'Rodeio Bonito', 'RS'),
(245, 'Araricá', 'RS'),
(246, 'Passa-Sete', 'RS'),
(247, 'Trindade do Sul', 'RS'),
(248, 'Picada Café', 'RS'),
(249, 'Alecrim', 'RS'),
(250, 'São Paulo das Missões', 'RS'),
(251, 'Sentinela do Sul', 'RS'),
(252, 'Tucunduva', 'RS'),
(253, 'Itaara', 'RS'),
(254, 'Tiradentes do Sul', 'RS'),
(255, 'Chuvisca', 'RS'),
(256, 'Tavares', 'RS'),
(257, 'Nova Esperança do Sul', 'RS'),
(258, 'Gaurama', 'RS'),
(259, 'Campinas do Sul', 'RS'),
(260, 'Machadinho', 'RS'),
(261, 'São Martinho', 'RS'),
(262, 'Campina das Missões', 'RS'),
(263, 'Barracão', 'RS'),
(264, 'Sertão', 'RS'),
(265, 'São Nicolau', 'RS'),
(266, 'Brochier', 'RS'),
(267, 'Selbach', 'RS'),
(268, 'Liberato Salzano', 'RS'),
(269, 'Cacique Doble', 'RS'),
(270, 'Rondinha', 'RS'),
(271, 'Tupandi', 'RS'),
(272, 'Aceguá', 'RS'),
(273, 'Harmonia', 'RS'),
(274, 'Muçum', 'RS'),
(275, 'Pinheirinho do Vale', 'RS'),
(276, 'São José do Hortêncio', 'RS'),
(277, 'Miraguaí', 'RS'),
(278, 'Nova Araçá', 'RS'),
(279, 'Tabaí', 'RS'),
(280, 'Caibaté', 'RS'),
(281, 'Capivari do Sul', 'RS'),
(282, 'Erval Grande', 'RS'),
(283, 'Mata', 'RS'),
(284, 'David Canabarro', 'RS'),
(285, 'Cerro Branco', 'RS'),
(286, 'Humaitá', 'RS'),
(287, 'Riozinho', 'RS'),
(288, 'Ciríaco', 'RS'),
(289, 'Ibiaçá', 'RS'),
(290, 'Fazenda Vilanova', 'RS'),
(291, 'Caiçara', 'RS'),
(292, 'Viadutos', 'RS'),
(293, 'Mato Leitão', 'RS'),
(294, 'São João da Urtiga', 'RS'),
(295, 'Tunas', 'RS'),
(296, 'Maçambará', 'RS'),
(297, 'Vicente Dutra', 'RS'),
(298, 'Porto Lucena', 'RS'),
(299, 'Ibarama', 'RS'),
(300, 'Doutor Maurício Cardoso', 'RS'),
(301, 'Gramado Xavier', 'RS'),
(302, 'Vila Maria', 'RS'),
(303, 'Pinhal Grande', 'RS'),
(304, 'Vila Nova do Sul', 'RS'),
(305, 'Campo Novo', 'RS'),
(306, 'Maximiliano de Almeida', 'RS'),
(307, 'Fortaleza dos Valos', 'RS'),
(308, 'Novo Cabrais', 'RS'),
(309, 'Marcelino Ramos', 'RS'),
(310, 'Barra do Quaraí', 'RS'),
(311, 'Três Palmeiras', 'RS'),
(312, 'Novo Barreiro', 'RS'),
(313, 'Ilópolis', 'RS'),
(314, 'Ibirapuitã', 'RS'),
(315, 'Marques de Souza', 'RS'),
(316, 'Pontão', 'RS'),
(317, 'Mariana Pimentel', 'RS'),
(318, 'Pareci Novo', 'RS'),
(319, 'São Pedro da Serra', 'RS'),
(320, 'Putinga', 'RS'),
(321, 'Pejuçara', 'RS'),
(322, 'Cotiporã', 'RS'),
(323, 'Quinze de Novembro', 'RS'),
(324, 'Capão do Cipó', 'RS'),
(325, 'Nova Roma do Sul', 'RS'),
(326, 'Água Santa', 'RS'),
(327, 'Jaboticaba', 'RS'),
(328, 'Paim Filho', 'RS'),
(329, 'Nova Alvorada', 'RS'),
(330, 'Chiapetta', 'RS'),
(331, 'Estrela Velha', 'RS'),
(332, 'Jaquirana', 'RS'),
(333, 'Severiano de Almeida', 'RS'),
(334, 'São José dos Ausentes', 'RS'),
(335, 'Arambaré', 'RS'),
(336, 'Jacutinga', 'RS'),
(337, 'Vale Verde', 'RS'),
(338, 'Áurea', 'RS'),
(339, 'Jari', 'RS'),
(340, 'Itacurubi', 'RS'),
(341, 'Dois Lajeado', 'RS'),
(342, 'Turuçu', 'RS'),
(343, 'Vila Flores', 'RS'),
(344, 'Campestre da Serra', 'RS'),
(345, 'Nova Bréscia', 'RS'),
(346, 'Esmeralda', 'RS'),
(347, 'Alegria', 'RS'),
(348, 'Campos Borges', 'RS'),
(349, 'Braga', 'RS'),
(350, 'Barra do Guarita', 'RS'),
(351, 'Monte Alegre dos Campos', 'RS'),
(352, 'Caseiros', 'RS'),
(353, 'Charrua', 'RS'),
(354, 'São Martinho da Serra', 'RS'),
(355, 'São Valentim', 'RS'),
(356, 'Novo Machado', 'RS'),
(357, 'Muitos Capões', 'RS'),
(358, 'Ernestina', 'RS'),
(359, 'tatiba do Sul', 'RS'),
(360, 'Mormaço', 'RS'),
(361, 'Imigrante', 'RS'),
(362, 'São Domingos do Sul', 'RS'),
(363, 'Colorado', 'RS'),
(364, 'Taquaruçu do Sul', 'RS'),
(365, 'Tio Hugo', 'RS'),
(366, 'Pinto Bandeira', 'RS'),
(367, 'Vitória das Missões', 'RS'),
(368, 'Westfália', 'RS'),
(369, 'Alto Feliz', 'RS'),
(370, 'Herveiras', 'RS'),
(371, 'Dilermando de Aguiar', 'RS'),
(372, 'Erebango', 'RS'),
(373, 'Presidente Lucena', 'RS'),
(374, 'Arroio do Padre', 'RS'),
(375, 'Mampituba', 'RS'),
(376, 'Dona Francisca', 'RS'),
(377, 'São Pedro do Butiá', 'RS'),
(378, 'Lagoa Bonita do Sul', 'RS'),
(379, 'Morrinhos do Sul', 'RS'),
(380, 'Sede Nova', 'RS'),
(381, 'Centenário', 'RS'),
(382, 'Vista Gaúcha', 'RS'),
(383, 'Garruchos', 'RS'),
(384, 'Esperança do Sul', 'RS'),
(385, 'Cristal do Sul', 'RS'),
(386, 'Victor Graeff', 'RS'),
(387, 'São Jorge', 'RS'),
(388, 'Quevedos', 'RS'),
(389, 'Boa Vista do Sul', 'RS'),
(390, 'Capitão', 'RS'),
(391, 'Senador Salgado Filho', 'RS'),
(392, 'Toropi', 'RS'),
(393, 'Camargo', 'RS'),
(394, 'Fagundes Varela', 'RS'),
(395, 'Salvador das Missões', 'RS'),
(396, 'São Valério do Sul', 'RS'),
(397, 'Coxilha', 'RS'),
(398, 'Vista Alegre', 'RS'),
(399, 'Entre Rios do Sul', 'RS'),
(400, 'Derrubadas', 'RS'),
(401, 'Jacuizinho', 'RS'),
(402, 'Maratá', 'RS'),
(403, 'Nova Candelária', 'RS'),
(404, 'Três Forquilhas', 'RS'),
(405, 'Boa Vista do Incra', 'RS'),
(406, 'Três Arroios', 'RS'),
(407, 'Sagrada Família', 'RS'),
(408, 'Saldanha Marinho', 'RS'),
(409, 'Santa Margarida do Sul', 'RS'),
(410, 'Pinhal', 'RS'),
(411, 'Rio dos Índios', 'RS'),
(412, 'Lajeado do Bugre', 'RS'),
(413, 'Barra Funda', 'RS'),
(414, 'Nova Pádua', 'RS'),
(415, 'Mato Castelhano', 'RS'),
(416, 'São João do Polêsine', 'RS'),
(417, 'Coronel Barros', 'RS'),
(418, 'Dom Pedro de Alcântara', 'RS'),
(419, 'Monte Belo do Sul', 'RS'),
(420, 'São José das Missões', 'RS'),
(421, 'Boa Vista do Cadeado', 'RS'),
(422, 'Colinas', 'RS'),
(423, 'São José do Sul', 'RS'),
(424, 'Forquetinha', 'RS'),
(425, 'Itati', 'RS'),
(426, 'Silveira Martins', 'RS'),
(427, 'Porto Mauá', 'RS'),
(428, 'Dezesseis de Novembro', 'RS'),
(429, 'Travesseiro', 'RS'),
(430, 'Eugênio de Castro', 'RS'),
(431, 'Unistalda', 'RS'),
(432, 'Paulo Bento', 'RS'),
(433, 'São Vendelino', 'RS'),
(434, 'Santo Expedito do Sul', 'RS'),
(435, 'Cerro Grande', 'RS'),
(436, 'Rolador', 'RS'),
(437, 'Coqueiros do Sul', 'RS'),
(438, 'Faxinalzinho', 'RS'),
(439, 'São Valentim do Sul', 'RS'),
(440, 'Inhacorá', 'RS'),
(441, 'Pirapó', 'RS'),
(442, 'Nova Ramada', 'RS'),
(443, 'Novo Tiradentes', 'RS'),
(444, 'Vanini', 'RS'),
(445, 'Santo Antônio do Palma', 'RS'),
(446, 'Poço das Antas', 'RS'),
(447, 'Bozano', 'RS'),
(448, 'Boa Vista das Missões', 'RS'),
(449, 'Vila Lângaro', 'RS'),
(450, 'Relvado', 'RS'),
(451, 'São José do Inhacorá', 'RS'),
(452, 'Itapuca', 'RS'),
(453, 'Gramado dos Loureiros', 'RS'),
(454, 'São Pedro das Missões', 'RS'),
(455, 'Santo Antônio do Planalto', 'RS'),
(456, 'Dois Irmãos das Missões', 'RS'),
(457, 'Mariano Moro', 'RS'),
(458, 'Doutor Ricardo', 'RS'),
(459, 'Ubiretama', 'RS'),
(460, 'Almirante Tamandaré do Sul', 'RS'),
(461, 'Sete de Setembro', 'RS'),
(462, 'Protásio Alves', 'RS'),
(463, 'Pedras Altas', 'RS'),
(464, 'Benjamin Constant do Sul', 'RS'),
(465, 'São José do Herval', 'RS'),
(466, 'Muliterno', 'RS'),
(467, 'Pinhal da Serra', 'RS'),
(468, 'Sério', 'RS'),
(469, 'Ipiranga do Sul', 'RS'),
(470, 'Quatro Irmãos', 'RS'),
(471, 'Bom Progresso', 'RS'),
(472, 'Ivorá', 'RS'),
(473, 'Vespasiano Corrêa', 'RS'),
(474, 'Cruzaltense', 'RS'),
(475, 'Nova Boa Vista', 'RS'),
(476, 'Linha Nova', 'RS'),
(477, 'Santa Tereza', 'RS'),
(478, 'Floriano Peixoto', 'RS'),
(479, 'Novo Xingu', 'RS'),
(480, 'Canudos do Vale', 'RS'),
(481, 'Nicolau Vergueiro', 'RS'),
(482, 'Santa Cecília do Sul', 'RS'),
(483, 'Capão Bonito do Sul', 'RS'),
(484, 'Barra do Rio Azul', 'RS'),
(485, 'Gentil', 'RS'),
(486, 'Mato Queimado', 'RS'),
(487, 'Lagoa dos Três Cantos', 'RS'),
(488, 'Coronel Pilar', 'RS'),
(489, 'Alto Alegre', 'RS'),
(490, 'Pouso Novo', 'RS'),
(491, 'Vista Alegre do Prata', 'RS'),
(492, 'Ponte Preta', 'RS'),
(493, 'Coqueiro Baixo', 'RS'),
(494, 'Guabiju', 'RS'),
(495, 'Tupanci do Sul', 'RS'),
(496, 'Montauri', 'RS'),
(497, 'André da Rocha', 'RS'),
(498, 'Carlos Gomes', 'RS'),
(499, 'Porto Vera Cruz', 'RS'),
(500, 'União da Serra', 'RS'),
(501, 'Engenho Velho', 'RS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacoes`
--

CREATE TABLE `notificacoes` (
  `idNotificacao` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `dtNotificacao` date NOT NULL,
  `hrNotificaco` time NOT NULL,
  `flStatus` char(1) COLLATE utf8_bin NOT NULL DEFAULT 'N',
  `idHemocentro` int(11) NOT NULL,
  `flTexto` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `notificacoes`
--

INSERT INTO `notificacoes` (`idNotificacao`, `idUsuario`, `dtNotificacao`, `hrNotificaco`, `flStatus`, `idHemocentro`, `flTexto`) VALUES
(1, 2, '2022-10-14', '15:30:00', 'N', 3, ''),
(2, 2, '2022-10-14', '15:30:00', 'N', 3, NULL),
(3, 2, '2022-10-14', '15:30:00', 'N', 3, 0x4c656d6272652d736520646520737561206e6f766120646f61c3a7c3a36f2e);

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `idStatus` int(11) NOT NULL,
  `dsStatus` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`idStatus`, `dsStatus`) VALUES
(1, 'DOACAO REALIZADA'),
(2, 'DOACAO NAO REALIZADA'),
(3, 'AGENDADO'),
(4, 'AGENDAMENTO CANCELADO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `Nome` varchar(75) COLLATE utf8_bin NOT NULL,
  `Email` varchar(75) COLLATE utf8_bin NOT NULL,
  `Senha` varchar(10) COLLATE utf8_bin NOT NULL,
  `Telefone` varchar(14) COLLATE utf8_bin DEFAULT NULL,
  `idTipo` char(1) COLLATE utf8_bin NOT NULL DEFAULT 'D',
  `dsEndereco` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dsComplemento` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `nrCep` varchar(9) COLLATE utf8_bin DEFAULT NULL,
  `dsBairro` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `idMunicipio` int(11) NOT NULL DEFAULT '1',
  `nrCpf` varchar(18) COLLATE utf8_bin DEFAULT NULL,
  `nrCnpj` varchar(22) COLLATE utf8_bin DEFAULT NULL,
  `tpSangue` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `flFator` varchar(1) COLLATE utf8_bin DEFAULT NULL,
  `flAceita` char(1) COLLATE utf8_bin NOT NULL DEFAULT 'S',
  `dsAtendimento` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `Nome`, `Email`, `Senha`, `Telefone`, `idTipo`, `dsEndereco`, `dsComplemento`, `nrCep`, `dsBairro`, `idMunicipio`, `nrCpf`, `nrCnpj`, `tpSangue`, `flFator`, `flAceita`, `dsAtendimento`) VALUES
(1, 'GABRIELA RIBEIRO MUÃ‘OZ', 'gabi.ribeiro.munoz@gmail.com', '12345678', '51', 'D', 'RUA OSVALDO ARANHA, 620', NULL, '93010-080', '6', 1, NULL, NULL, 'O', 'N', 'S', NULL),
(2, 'FABIAN VIÃ‰GAS', 'fviegas@senacrs.com.br', '12345678', '(51)99371-0258', 'D', 'RUA MARCILIO DIAS, 531', 'Ap.302', '93010-080', 'RIO BRANCO', 3, '526.769.510-68', '', 'AB', 'P', 'S', ''),
(3, 'HEMOCENTRO DO ESTADO DO RIO GRANDE DO SUL', 'hemorgs@saude.rs.gov.br', '12345678', '(51) 3336-6755', 'H', 'AV. BENTO GONÇALVES, 3722', NULL, '90000-000', 'PARTENON', 1, NULL, NULL, NULL, NULL, 'S', NULL),
(4, 'HEMOCENTRO REGIONAL DE PASSO FUNDO', 'hemopasso@saude.rs.gov.br', '12345678', '(54) 3311.5555', 'H', 'Av. Sete de Setembro, 1055', NULL, '98900-000', 'CENTRO', 22, NULL, NULL, NULL, NULL, 'S', NULL),
(5, 'HEMOCENTRO REGIONAL DE PELOTAS', 'hemopel@saude.rs.gov.br', '12345678', '(53) 3222.3002', 'H', 'Av. Bento Gonçalves, 4569', NULL, '96101-140', 'Centro', 6, NULL, NULL, NULL, NULL, 'S', NULL),
(6, 'HEMOCENTRO REGIONAL DE SANTA MARIA', 'hemosm-adm@saude.rs.gov.br', '12345678', '(55) 3221.526', 'H', 'Rua Alameda Santiago do Chile, 35', NULL, '97050-685', 'Nossa Sra. De Lourdes', 8, NULL, NULL, NULL, NULL, 'S', NULL),
(7, 'HEMOCENTRO REGIONAL DE CRUZ ALTA', 'hemocruz@saude.rs.gov.br', '12345678', '(55) 3326.3168', 'H', 'Rua Barão do Rio Branco, 1445', NULL, '98010-770', NULL, 49, NULL, NULL, NULL, NULL, 'S', NULL),
(8, 'HEMOCENTRO REGIONAL DE CAXIAS DO SUL', 'hemocentrocaxias@gov.rs.br', '12345678', '(54) 32904536', 'D', 'Rua Ernesto Alves, 2260', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'S', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historicos`
--
ALTER TABLE `historicos`
  ADD PRIMARY KEY (`idusuario`,`dtDoacao`);

--
-- Indexes for table `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`idMunicipio`);

--
-- Indexes for table `notificacoes`
--
ALTER TABLE `notificacoes`
  ADD PRIMARY KEY (`idNotificacao`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idStatus`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `municipios`
--
ALTER TABLE `municipios`
  MODIFY `idMunicipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502;

--
-- AUTO_INCREMENT for table `notificacoes`
--
ALTER TABLE `notificacoes`
  MODIFY `idNotificacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `idStatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
