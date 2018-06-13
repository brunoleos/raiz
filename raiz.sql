-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2018 at 05:54 AM
-- Server version: 5.7.18
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conteudo` text COLLATE utf8mb4_unicode_ci,
  `imagem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `numero` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chamada` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficios` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `titulo`, `subtitulo`, `conteudo`, `imagem`, `created_at`, `updated_at`, `deleted_at`, `numero`, `chamada`, `beneficios`) VALUES
(1, 'A Raiz Redonda é uma empresa que nasceu da paixão de seus criadores pela educação', 'Nossa missão', 'Transformar a educação na América Latina, facilitando o aprendizado de forma simples e divertida. \r\nPara atingir este objetivo usamos a inovação que a tecnologia dos jogos traz, pois o aluno aprende mais e melhor quando falamos na linguagem de uma criança atual e além de tudo: jogando e se divertindo.', '1520908352-imac2.png', '2018-03-13 05:32:33', '2018-03-13 05:49:54', NULL, '250', 'SÃO OS NÚMEROS DE ESCOLAS QUE JA ADOTARAM ESSA METODOLOGIA', '<ul>\r\n	<li>Controle por parte dos pais do tempo investido nos jogos.</li>\r\n	<li>Aprender se divertindo tem se mostrado um m&eacute;todo eficaz de ensino.</li>\r\n	<li>Est&iacute;mulo de crian&ccedil;as por aprender mais.</li>\r\n	<li>Aumento da compreens&atilde;o de temas muitas vezes complexos.</li>\r\n	<li>Escolas, professores e pais podem mensurar o entendimento de um assunto espec&iacute;fico.</li>\r\n	<li>Custo muito baixo em compara&ccedil;&atilde;o a professores particulares.</li>\r\n	<li>Todos os meses novos jogos s&atilde;o acrescentados ao sistema.</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `alunos`
--

CREATE TABLE `alunos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serie` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `turma` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `turno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endereco` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nome_do_responsavel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpf_do_responsavel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone_do_responsavel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_do_responsavel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `escola_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` int(10) UNSIGNED NOT NULL,
  `personagem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pontuacaomax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itemcabeca` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itemtorso` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itemperna` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `runas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `aluno_id` int(10) UNSIGNED DEFAULT NULL,
  `escola_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `depoimentos`
--

CREATE TABLE `depoimentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depoimento` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `depoimentos`
--

INSERT INTO `depoimentos` (`id`, `foto`, `nome`, `depoimento`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1520910310-1519006651-img (32).jpg', 'Fulano', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica', '2018-03-13 06:05:10', '2018-03-13 06:05:51', NULL),
(2, '1520910335-1519006496-img (20).jpg', 'Fulano 02', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem', '2018-03-13 06:05:35', '2018-03-13 06:05:35', NULL),
(3, '1520910372-1519006651-img (32).jpg', 'Fulano 03', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica', '2018-03-13 06:06:12', '2018-03-13 06:06:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `escolas`
--

CREATE TABLE `escolas` (
  `id` int(10) UNSIGNED NOT NULL,
  `razao_social` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nome_fantasia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cnpj` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsavel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `familias`
--

CREATE TABLE `familias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `funcao` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `familias`
--

INSERT INTO `familias` (`id`, `nome`, `funcao`, `descricao`, `facebook`, `twitter`, `email`, `foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Fulano de Tal', 'Full-Stack', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não', NULL, '#', '#', '1520910571-1519006425-201705020948365908feb49586a.jpg', '2018-03-13 06:09:31', '2018-03-13 06:13:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jogos`
--

CREATE TABLE `jogos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conteudo` text COLLATE utf8mb4_unicode_ci,
  `imagem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posicao` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jogos`
--

INSERT INTO `jogos` (`id`, `titulo`, `conteudo`, `imagem`, `posicao`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'NOSSOS JOGOS', 'Criar os melhores jogos educativos voltados à educação fundamental do mercado é o nosso compromisso. Com foco em matemática, seguimos à risca a grade curricular estabelecida pelo Ministério da Educação e Cultura (MEC), para assim acompanhar todo o desenvolvimento da criança, ano a ano. Queremos estimular o gosto pelo estudo de uma disciplina que, historicamente, é uma grande preocupação para os pais.', '1520911910-1.jpg', NULL, '2018-03-13 06:31:50', '2018-03-13 06:31:50', NULL),
(2, 'APRENDER COM DIVERSÃO', 'As crianças e adolescentes passam bastante tempo se divertindo com jogos, porém estes não contribuem para a sua formação. São apenas uma forma de entretenimento. Por que não usar este tempo para aprender? Gamification é uma prática usada por grandes empresas de comunicação e mídias sociais do mundo para engajar os usuários a um produto através de jogos. O nosso produto é a aprendizagem e, por meio desta prática, transformamos a lição de casa em jogos divertidos que estimulam uma série de competências nos alunos, além de entrete-los.', '1520912041-2.jpg', NULL, '2018-03-13 06:34:01', '2018-03-13 06:34:01', NULL),
(3, 'dsadsa', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu nãoLorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não', '1520912342-1.jpg', NULL, '2018-03-13 06:39:02', '2018-03-13 06:39:16', '2018-03-13 06:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `metodologias`
--

CREATE TABLE `metodologias` (
  `id` int(10) UNSIGNED NOT NULL,
  `conteudo` text COLLATE utf8mb4_unicode_ci,
  `imagem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metodologias`
--

INSERT INTO `metodologias` (`id`, `conteudo`, `imagem`, `created_at`, `updated_at`, `deleted_at`, `titulo`) VALUES
(1, '“Cruzando rios caudalosos, pulando dominós gigantes, voando como um pássaro, somando pontos, adquirindo poderes ou conquistando tesouros, o estudante é motivado a cumprir suas missões durante o ano enquanto aprende uma das matérias mais difíceis e importantes de todo o período escolar” Os nossos pedagogos, professores e roteiristas trabalham em conjunto, utilizando as mais modernas técnicas de ensino a distância (EaD), para produzir jogos com alta qualidade de ensino. Para melhorar a absorção do conteúdo pedagógico, optamos por jogos de curta duração e com um único tema de ensino: são no máximo 10 minutos por fase, evitando jogos longos e intermináveis que que mesclam diversas matérias sem manter o foco. Assim garantimos que a atenção da criança esteja totalmente voltada ao jogo e o tema. Com jogos curtos também criamos um processo de começo, meio e fim para trazer à criança a sensação de dever cumprido. Ela então poderá proceder aos níveis mais avançados sem frustrações.', '1520909985-proj-8.jpg', '2018-03-13 05:51:14', '2018-03-13 05:59:45', NULL, 'CRUZANDO RIOS');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2018_01_16_225739_create_1516136259_roles_table', 1),
(3, '2018_01_16_225743_create_1516136262_users_table', 1),
(4, '2018_01_16_225744_add_5a5e6749563bc_relationships_to_user_table', 1),
(5, '2018_01_16_225759_create_1516136278_user_actions_table', 1),
(6, '2018_01_16_225800_add_5a5e675a2d18b_relationships_to_useraction_table', 1),
(7, '2018_01_16_225956_create_1516136396_escolas_table', 1),
(8, '2018_01_16_230127_create_1516136486_professores_table', 1),
(9, '2018_01_16_230128_add_5a5e682a5c853_relationships_to_professore_table', 1),
(10, '2018_01_16_230338_create_1516136617_alunos_table', 1),
(11, '2018_01_16_230339_add_5a5e68adec87b_relationships_to_aluno_table', 1),
(12, '2018_01_16_230837_create_1516136916_apps_table', 1),
(13, '2018_01_16_230838_add_5a5e69d8341fd_relationships_to_app_table', 1),
(14, '2018_03_13_030240_create_1520902960_slideshows_table', 1),
(15, '2018_03_13_030432_create_1520903072_abouts_table', 1),
(16, '2018_03_13_030826_update_1520903306_abouts_table', 1),
(17, '2018_03_13_030909_create_1520903349_slidesets_table', 1),
(18, '2018_03_13_031130_create_1520903490_metodologias_table', 1),
(19, '2018_03_13_031342_create_1520903622_depoimentos_table', 1),
(20, '2018_03_13_031653_create_1520903813_familias_table', 1),
(21, '2018_03_13_031827_create_1520903907_jogos_table', 1),
(22, '2018_03_13_044548_update_1520909148_metodologias_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professores`
--

CREATE TABLE `professores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `materias` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `turmas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `escola_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', '2018-03-13 04:33:00', '2018-03-13 04:33:00'),
(2, 'Usuário simples', '2018-03-13 04:33:00', '2018-03-13 04:33:00'),
(3, 'site', '2018-03-13 04:33:00', '2018-03-13 04:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `slidesets`
--

CREATE TABLE `slidesets` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slidesets`
--

INSERT INTO `slidesets` (`id`, `imagem`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1520908938-1.png', '2018-03-13 05:42:18', '2018-03-13 05:42:18', NULL),
(2, '1520908944-2.png', '2018-03-13 05:42:24', '2018-03-13 05:42:24', NULL),
(3, '1520908949-3.png', '2018-03-13 05:42:30', '2018-03-13 05:42:30', NULL),
(4, '1520908959-4.png', '2018-03-13 05:42:39', '2018-03-13 05:42:39', NULL),
(5, '1520908965-5.png', '2018-03-13 05:42:45', '2018-03-13 05:42:45', NULL),
(6, '1520908970-6.png', '2018-03-13 05:42:50', '2018-03-13 05:42:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slideshows`
--

CREATE TABLE `slideshows` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chamada` text COLLATE utf8mb4_unicode_ci,
  `imagem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slideshows`
--

INSERT INTO `slideshows` (`id`, `titulo`, `chamada`, `imagem`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Titulo 01', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI', '1520906885-hero1.jpg', '2018-03-13 05:08:05', '2018-03-13 05:08:05', NULL),
(2, 'Titulo 02', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI', '1520908220-proj-7.jpg', '2018-03-13 05:30:20', '2018-03-13 05:30:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$jltLRk4VhDWkGimyCsGKp.0e87JdEiDlxAgcoDvTjMIJX.j67Fhwq', '', '2018-03-13 04:33:00', '2018-03-13 04:33:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_actions`
--

CREATE TABLE `user_actions` (
  `id` int(10) UNSIGNED NOT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action_model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_actions`
--

INSERT INTO `user_actions` (`id`, `action`, `action_model`, `action_id`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'created', 'roles', 3, '2018-03-13 04:33:01', '2018-03-13 04:33:01', 1),
(2, 'created', 'slideshows', 1, '2018-03-13 05:08:05', '2018-03-13 05:08:05', 1),
(3, 'created', 'slideshows', 2, '2018-03-13 05:30:20', '2018-03-13 05:30:20', 1),
(4, 'created', 'abouts', 1, '2018-03-13 05:32:33', '2018-03-13 05:32:33', 1),
(5, 'created', 'slidesets', 1, '2018-03-13 05:42:18', '2018-03-13 05:42:18', 1),
(6, 'created', 'slidesets', 2, '2018-03-13 05:42:24', '2018-03-13 05:42:24', 1),
(7, 'created', 'slidesets', 3, '2018-03-13 05:42:30', '2018-03-13 05:42:30', 1),
(8, 'created', 'slidesets', 4, '2018-03-13 05:42:39', '2018-03-13 05:42:39', 1),
(9, 'created', 'slidesets', 5, '2018-03-13 05:42:45', '2018-03-13 05:42:45', 1),
(10, 'created', 'slidesets', 6, '2018-03-13 05:42:50', '2018-03-13 05:42:50', 1),
(11, 'updated', 'abouts', 1, '2018-03-13 05:49:54', '2018-03-13 05:49:54', 1),
(12, 'created', 'metodologias', 1, '2018-03-13 05:51:14', '2018-03-13 05:51:14', 1),
(13, 'updated', 'metodologias', 1, '2018-03-13 05:59:45', '2018-03-13 05:59:45', 1),
(14, 'updated', 'metodologias', 1, '2018-03-13 06:00:11', '2018-03-13 06:00:11', 1),
(15, 'created', 'depoimentos', 1, '2018-03-13 06:05:10', '2018-03-13 06:05:10', 1),
(16, 'created', 'depoimentos', 2, '2018-03-13 06:05:35', '2018-03-13 06:05:35', 1),
(17, 'updated', 'depoimentos', 1, '2018-03-13 06:05:51', '2018-03-13 06:05:51', 1),
(18, 'created', 'depoimentos', 3, '2018-03-13 06:06:12', '2018-03-13 06:06:12', 1),
(19, 'created', 'Familias', 1, '2018-03-13 06:09:31', '2018-03-13 06:09:31', 1),
(20, 'updated', 'Familias', 1, '2018-03-13 06:13:25', '2018-03-13 06:13:25', 1),
(21, 'created', 'jogos', 1, '2018-03-13 06:31:50', '2018-03-13 06:31:50', 1),
(22, 'created', 'jogos', 2, '2018-03-13 06:34:01', '2018-03-13 06:34:01', 1),
(23, 'created', 'jogos', 3, '2018-03-13 06:39:02', '2018-03-13 06:39:02', 1),
(24, 'deleted', 'jogos', 3, '2018-03-13 06:39:16', '2018-03-13 06:39:16', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abouts_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alunos_deleted_at_index` (`deleted_at`),
  ADD KEY `108200_5a5e68ac02294` (`escola_id`);

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apps_deleted_at_index` (`deleted_at`),
  ADD KEY `108201_5a5e69d626b84` (`aluno_id`),
  ADD KEY `108201_5a5e69d62f016` (`escola_id`);

--
-- Indexes for table `depoimentos`
--
ALTER TABLE `depoimentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `depoimentos_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `escolas`
--
ALTER TABLE `escolas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `escolas_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `familias`
--
ALTER TABLE `familias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `familias_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jogos_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `metodologias`
--
ALTER TABLE `metodologias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `metodologias_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `professores_deleted_at_index` (`deleted_at`),
  ADD KEY `108199_5a5e68283ea8c` (`escola_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slidesets`
--
ALTER TABLE `slidesets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slidesets_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `slideshows`
--
ALTER TABLE `slideshows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slideshows_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `108195_5a5e6747bcbdf` (`role_id`);

--
-- Indexes for table `user_actions`
--
ALTER TABLE `user_actions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `108196_5a5e675851708` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `depoimentos`
--
ALTER TABLE `depoimentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `escolas`
--
ALTER TABLE `escolas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `familias`
--
ALTER TABLE `familias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jogos`
--
ALTER TABLE `jogos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `metodologias`
--
ALTER TABLE `metodologias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `professores`
--
ALTER TABLE `professores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slidesets`
--
ALTER TABLE `slidesets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `slideshows`
--
ALTER TABLE `slideshows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_actions`
--
ALTER TABLE `user_actions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `108200_5a5e68ac02294` FOREIGN KEY (`escola_id`) REFERENCES `escolas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `apps`
--
ALTER TABLE `apps`
  ADD CONSTRAINT `108201_5a5e69d626b84` FOREIGN KEY (`aluno_id`) REFERENCES `alunos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `108201_5a5e69d62f016` FOREIGN KEY (`escola_id`) REFERENCES `escolas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `professores`
--
ALTER TABLE `professores`
  ADD CONSTRAINT `108199_5a5e68283ea8c` FOREIGN KEY (`escola_id`) REFERENCES `escolas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `108195_5a5e6747bcbdf` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_actions`
--
ALTER TABLE `user_actions`
  ADD CONSTRAINT `108196_5a5e675851708` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;