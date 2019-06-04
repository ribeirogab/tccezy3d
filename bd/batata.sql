-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 16-Jun-2019 às 02:29
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batata`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso`
--

DROP TABLE IF EXISTS `acesso`;
CREATE TABLE IF NOT EXISTS `acesso` (
  `mes` int(2) NOT NULL,
  `ano` int(4) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `cliques` int(11) DEFAULT NULL,
  PRIMARY KEY (`mes`,`ano`,`tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acesso`
--

INSERT INTO `acesso` (`mes`, `ano`, `tipo`, `cliques`) VALUES
(5, 2019, 'browser', 15),
(5, 2019, 'cadastro', 10),
(5, 2019, 'facebook', 15),
(5, 2019, 'googleads', 15),
(5, 2019, 'instagram', 15),
(5, 2019, 'orcamento', 5),
(5, 2019, 'suporte', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` char(40) NOT NULL,
  `permissao` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`idadmin`, `nome`, `cargo`, `email`, `senha`, `permissao`) VALUES
(1, 'Gabriel de Oliveira', 'Técnico de TI', 'ti@ezy3d.com.br', '7ce0359f12857f2a90c7de465f40a95f01cb5da9', '@571824');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `telefone` char(11) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `ramo` varchar(20) DEFAULT NULL,
  `empresa` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome`, `sobrenome`, `email`, `senha`, `telefone`, `pais`, `ramo`, `empresa`) VALUES
(1, 'Gabriell', 'de Oliveira', 'gblosr@gmail.com', '4ea842c8c6304f4a418835fb6665df10524df1a5', '15997458852', 'Brasil', 'Informática', 'EZY3D');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE IF NOT EXISTS `contato` (
  `idcontato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `email` varchar(80) NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`idcontato`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

DROP TABLE IF EXISTS `conteudo`;
CREATE TABLE IF NOT EXISTS `conteudo` (
  `apelido` varchar(30) NOT NULL,
  `pagina` varchar(30) NOT NULL,
  `pt` text,
  `en` text,
  `es` text,
  PRIMARY KEY (`apelido`,`pagina`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`apelido`, `pagina`, `pt`, `en`, `es`) VALUES
('item0', 'menu', 'Inicio', 'Home', 'Primero'),
('item1', 'menu', 'Impressoras 3D', '3D Printers', 'Impresoras 3D'),
('printer1', 'menu', 'E1260T', 'E1260T', 'E1260T'),
('printer2', 'menu', 'Phylos', 'Phylos', 'Phylos'),
('printer3', 'menu', 'Core E3', 'Core E3', 'Core E3'),
('item2', 'menu', 'Acessórios', 'Accessories', 'Accesorios'),
('acessorio1', 'menu', 'EzyCure', 'EzyCure', 'EzyCure'),
('item3', 'menu', 'Aplicações', 'Applications', 'Aplicaciones'),
('aplicacao1', 'menu', 'Odontologia', 'Dentistry', 'Odontología'),
('aplicacao2', 'menu', 'Manufatura', 'Manufacturing', 'Manufactura'),
('aplicacao3', 'menu', 'Educação', 'Education', 'Educación'),
('aplicacao4', 'menu', 'Joalheria', 'Jewelry', 'Joyas'),
('item4', 'menu', 'Contato', 'Contact', 'Contacto'),
('logar', 'menu', 'Logar', 'Log in', 'Entrar'),
('cadastrar', 'menu', 'Cadastrar', 'Register', 'Registro'),
('perfil', 'menu', 'Perfil', 'Profile', 'Perfil'),
('sair', 'menu', 'Sair', 'Log out', 'Cerrar sesión'),
('idiomas', 'menu', 'Português', 'English', 'Español'),
('loginmodal_email', 'menu', 'E-mail', 'Email', 'E-mail'),
('loginmodal_senha', 'menu', 'Senha', 'Password', 'Contraseña'),
('loginmodal_logar', 'menu', 'Logar', 'Log in', 'Acceder'),
('loginmodal_erro1', 'menu', 'Senha ou e-mail incorreto(s).', 'Incorrect password or email (s).', 'Contraseña o e-mail incorrecto (s).'),
('loginmodal_erro2', 'menu', 'Insira as informações corretamente.', 'Enter the information correctly.', 'Introduzca la información correctamente.'),
('rdp_comocomprar', 'rodape', 'Como comprar', 'How to buy', 'Como comprar'),
('rdp_contato', 'rodape', 'Contato', 'Contact', 'Contacto'),
('rdp_suporteaocliente', 'rodape', 'Suporte ao cliente', 'Customer support', 'Soporte al cliente'),
('rdp_titulo1', 'rodape', 'EZY 3D', 'EZY 3D', 'EZY 3D'),
('rdp_txt1', 'rodape', 'Uma empresa para o que você pode precisar, da prototipagem do website à publicação', 'A company for whatever you may need, from website prototyping to publishing', 'Una empresa para lo que necesite, desde prototipos de sitios web hasta publicaciones.'),
('rdp_titulo2', 'rodape', 'Site', 'Site', 'Sitio'),
('rdp_titulo3', 'rodape', 'Contato', 'Contact', 'Contacto'),
('rdp_item1', 'rodape', '+246 - 542 550 5462', '+246 - 542 550 5462', '+246 - 542 550 5462'),
('rdp_item2', 'rodape', 'info@pingendo.com', 'info@pingendo.com', 'info@pingendo.com'),
('rdp_item3', 'rodape', '365 Park Street, NY', '365 Park Street, NY', '365 Park Street, NY'),
('rdp_titulo4', 'rodape', 'Newsletter', 'Newsletter', 'Newsletter'),
('rdp_txt4', 'rodape', 'Receber atualizações', 'Get Updates', 'Recibir actualizaciones'),
('rdp_button1', 'rodape', 'Enviar', 'Submit', 'Enviar'),
('rdp_copy', 'rodape', ' | EZY3D Printing', ' | EZY3D Printing', ' | EZY3D Printing'),
('titulo1', 'home', 'EZY 3D', 'EZY 3D', 'EZY 3D'),
('txt1', 'home', 'Empresa brasileira, especializada em impressoras 3D, tem como missão proporcionar o melhor custo / benefício do mercado para seus clientes. Conheça nosso principal produto clicando no botão abaixo:', 'Empresa brasileira, especializada em impressoras 3D, tem como missão proporcionar o melhor custo / benefício do mercado para seus clientes. Conheça nosso principal produto clicando no botão abaixo:', 'Empresa brasileira, especializada em impressoras 3D, tem como missão proporcionar o melhor custo / benefício do mercado para seus clientes. Conheça nosso principal produto clicando no botão abaixo:'),
('button1', 'home', 'Impressora 3D E1260T', 'Impressora 3D E1260T', 'Impressora 3D E1260T'),
('titulo2', 'home', 'Odontologia', 'Odontologia', 'Odontologia'),
('txt2', 'home', 'A indústria odontológica vem passando por uma revolução digital...', 'A indústria odontológica vem passando por uma revolução digital...', 'A indústria odontológica vem passando por uma revolução digital...'),
('button2', 'home', 'Saiba mais', 'Saiba mais', 'Saiba mais'),
('titulo3', 'home', 'Joalheria', 'Joalheria', 'Joalheria'),
('txt3', 'home', 'De sua imaginação, para a realidade de forma simples!', 'De sua imaginação, para a realidade de forma simples!', 'De sua imaginação, para a realidade de forma simples!'),
('button3', 'home', 'Saiba mais', 'Saiba mais', 'Saiba mais'),
('titulo4', 'home', 'Impressoras 3D', 'Impressoras 3D', 'Impressoras 3D'),
('produto1', 'home', 'E1260T', 'E1260T', 'E1260T'),
('titulo1', 'printer_e1260t', 'E1260T', 'E1260T', 'E1260T'),
('txt1', 'printer_e1260t', 'Pingendo para apps e techies', 'Pingendo for apps and techies', 'Pinging para aplicaciones y técnicos'),
('button1', 'printer_e1260t', 'Orçamento', 'Secundário1', 'Secundario1'),
('button2', 'printer_e1260t', 'Mais informações', 'Secundário2', 'Secundario2'),
('titulo2', 'printer_e1260t', 'O my friend', 'O my friend', 'O my friend'),
('txt2', 'printer_e1260t', 'PT - A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.', 'EN - A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.', 'ES - A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.'),
('txt2_1', 'printer_e1260t', 'PT - I often think with longing, Oh, would I could describe these conceptions, could impress upon paper.', 'EN - I often think with longing, Oh, would I could describe these conceptions, could impress upon paper.', 'ES - I often think with longing, Oh, would I could describe these conceptions, could impress upon paper.'),
('txt2_2', 'printer_e1260t', 'PT - My friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power.', 'EN - My friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power.', 'ES - My friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power.'),
('titulo3', 'printer_e1260t', 'PT - I enjoy with my whole heart', 'EN - I enjoy with my whole heart', 'ES - I enjoy with my whole heart'),
('txt3', 'printer_e1260t', 'PT - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.', 'EN - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.', 'ES - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.'),
('titulo4', 'printer_e1260t', 'PT - Features from the future', 'EN - Features from the future', 'ES - Features from the future'),
('titulo_especificacao1', 'printer_e1260t', 'PT - Responsive design', 'EN - Responsive design', 'ES - Responsive design'),
('txt_especificacao1', 'printer_e1260t', 'PT - Based on fluid design principles. Works with any screen resolution', 'EN - Based on fluid design principles. Works with any screen resolution', 'ES - Based on fluid design principles. Works with any screen resolution'),
('titulo_especificacao2', 'printer_e1260t', 'PT - Customized settings', 'EN - Customized settings', 'ES - Customized settings'),
('txt_especificacao2', 'printer_e1260t', 'PT - Choose settings depending on the criteria you value the most. With no limits.', 'EN - Choose settings depending on the criteria you value the most. With no limits.', 'ES - Choose settings depending on the criteria you value the most. With no limits.'),
('titulo_especificacao3', 'printer_e1260t', 'PT - Connect', 'EN - Connect', 'ES - Connect'),
('txt_especificacao3', 'printer_e1260t', 'PT - In-app chat panel 24/7 active. The support you need, right there', 'EN - In-app chat panel 24/7 active. The support you need, right there', 'ES - In-app chat panel 24/7 active. The support you need, right there'),
('titulo_especificacao4', 'printer_e1260t', 'PT - Battery-friendly', 'EN - Battery-friendly', 'ES - Battery-friendly'),
('txt_especificacao4', 'printer_e1260t', 'PT - Non consuming background operation for longer mobile life', 'EN - Non consuming background operation for longer mobile life', 'ES - Non consuming background operation for longer mobile life'),
('titulo_especificacao5', 'printer_e1260t', 'PT - Multilayers', 'EN - Multilayers', 'ES - Multilayers'),
('txt_especificacao5', 'printer_e1260t', 'PT - Work simultaneously on different panels with the switcher', 'EN - Work simultaneously on different panels with the switcher', 'ES - Work simultaneously on different panels with the switcher'),
('titulo_especificacao6', 'printer_e1260t', 'PT - Share the love', 'EN - Share the love', 'ES - Share the love'),
('txt_especificacao6', 'printer_e1260t', 'PT - Help us spreading the word. Tell your friends with just one-click', 'EN - Help us spreading the word. Tell your friends with just one-click', 'ES - Help us spreading the word. Tell your friends with just one-click'),
('button3', 'printer_e1260t', 'Contato', 'EN - Do something bold', 'ES - Do something bold'),
('titulo5', 'printer_e1260t', 'Para  mais informações entre em contato.', 'EN - Do not procrastinate. Act', 'ES - Do not procrastinate. Act'),
('titulo1', 'printer_phylos', 'PT - Heading 1', 'EN - Heading 1', 'ES - Heading 1'),
('txt1', 'printer_phylos', 'PT - Paragraph. Then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing.', 'EN - Paragraph. Then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing.', 'ES - Paragraph. Then, my friend, when darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its power, like the form of a beloved mistress, then I often think with longing.'),
('titulo2', 'printer_phylos', 'PT - A wonderful serenity', 'EN - A wonderful serenity', 'ES - A wonderful serenity'),
('txt2', 'printer_phylos', 'PT - Has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.', 'EN - Has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.', 'ES - Has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.'),
('txt2_1', 'printer_phylos', 'PT - Choose an option', 'EN - Choose an option', 'ES - Choose an option'),
('titulo3', 'printer_phylos', 'PT - I enjoy with my whole heart', 'EN - I enjoy with my whole heart', 'ES - I enjoy with my whole heart'),
('txt3', 'printer_phylos', 'PT - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.', 'EN - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.', 'ES - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world.'),
('titulo4', 'printer_phylos', 'PT - I lie close to the earth', 'EN - I lie close to the earth', 'ES - I lie close to the earth'),
('titulo4_1', 'printer_phylos', 'PT - One', 'EN - One', 'ES - One'),
('txt4_1', 'printer_phylos', 'PT - I often think with longing, Oh, would I could describe these conceptions, could impress upon paper.', 'EN - I often think with longing, Oh, would I could describe these conceptions, could impress upon paper.', 'ES - I often think with longing, Oh, would I could describe these conceptions, could impress upon paper.'),
('titulo4_2', 'printer_phylos', 'PT - Two', 'EN - Two', 'ES - Two'),
('txt4_2', 'printer_phylos', 'PT - So full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!', 'EN - So full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!', 'ES - So full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!'),
('titulo4_3', 'printer_phylos', 'PT - Three', 'EN - Three', 'ES - Three'),
('txt4_3', 'printer_phylos', 'PT - O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!', 'EN - O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!', 'ES - O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!'),
('titulo5', 'printer_phylos', 'PT - Call your visitors to act. Now', 'EN - Call your visitors to act. Now', 'ES - Call your visitors to act. Now'),
('button1', 'printer_phylos', 'PT - Get your license', 'EN - Get your license', 'ES - Get your license'),
('titulo1', 'printer_coree3', 'PT - I enjoy with my whole heart', 'EN - I enjoy with my whole heart', 'ES - I enjoy with my whole heart'),
('txt1', 'printer_coree3', 'PT - I am alone, and feel the charm of existence in this spot.', 'EN - I am alone, and feel the charm of existence in this spot.', 'ES - I am alone, and feel the charm of existence in this spot.'),
('titulo2', 'printer_coree3', 'PT - Indescribable forms', 'EN - Indescribable forms', 'ES - Indescribable forms'),
('txt2', 'printer_coree3', 'PT - And yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface.', 'EN - And yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface.', 'ES - And yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface.'),
('titulo3', 'printer_coree3', 'PT - We are not alone', 'EN - We are not alone', 'ES - We are not alone'),
('txt3', 'printer_coree3', 'PT - O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!', 'EN - O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!', 'ES - O my friend -- but it is too much for my strength -- I sink under the weight of the splendour of these visions!'),
('card_titulo1', 'printer_coree3', 'PT - Johann Goethe1', 'EN - Johann Goethe1', 'ES - Johann Goethe1'),
('card_p1', 'printer_coree3', 'PT - CEO & Founder1', 'EN - CEO & Founder1', 'ES - CEO & Founder1'),
('card_titulo2', 'printer_coree3', 'PT - Johann Goethe2', 'EN - Johann Goethe2', 'ES - Johann Goethe2'),
('card_p2', 'printer_coree3', 'PT - CEO & Founder2', 'EN - CEO & Founder2', 'ES - CEO & Founder2'),
('card_titulo3', 'printer_coree3', 'PT - Johann Goethe3', 'EN - Johann Goethe3', 'ES - Johann Goethe3'),
('card_p3', 'printer_coree3', 'PT - CEO & Founder3', 'EN - CEO & Founder3', 'ES - CEO & Founder3'),
('card_titulo4', 'printer_coree3', 'PT - Johann Goethe4', 'EN - Johann Goethe4', 'ES - Johann Goethe4'),
('card_p4', 'printer_coree3', 'PT - CEO & Founder4', 'EN - CEO & Founder4', 'ES - CEO & Founder4'),
('titulo4', 'printer_coree3', 'PT - I enjoy with my whole heart', 'EN - I enjoy with my whole heart', 'ES - I enjoy with my whole heart'),
('titulo4_1', 'printer_coree3', 'PT - One1', 'EN - One1', 'ES - One1'),
('txt4_1', 'printer_coree3', 'PT - A wonderful serenity has taken possession of my entire soul.', 'EN - A wonderful serenity has taken possession of my entire soul.', 'ES - A wonderful serenity has taken possession of my entire soul.'),
('titulo4_2', 'printer_coree3', 'PT - One2', 'EN - One2', 'ES - One2'),
('txt4_2', 'printer_coree3', 'PT - A wonderful serenity has taken possession of my entire soul.', 'EN - A wonderful serenity has taken possession of my entire soul.', 'ES - A wonderful serenity has taken possession of my entire soul.'),
('titulo4_3', 'printer_coree3', 'PT - One3', 'EN - One3', 'ES - One3'),
('txt4_3', 'printer_coree3', 'PT - A wonderful serenity has taken possession of my entire soul.', 'EN - A wonderful serenity has taken possession of my entire soul.', 'ES - A wonderful serenity has taken possession of my entire soul.'),
('titulo4_4', 'printer_coree3', 'PT - One4', 'EN - One4', 'ES - One4'),
('txt4_4', 'printer_coree3', 'PT - A wonderful serenity has taken possession of my entire soul.', 'EN - A wonderful serenity has taken possession of my entire soul.', 'ES - A wonderful serenity has taken possession of my entire soul.'),
('titulo4_5', 'printer_coree3', 'PT - One5', 'EN - One5', 'ES - One5'),
('txt4_5', 'printer_coree3', 'PT - A wonderful serenity has taken possession of my entire soul.', 'EN - A wonderful serenity has taken possession of my entire soul.', 'ES - A wonderful serenity has taken possession of my entire soul.'),
('titulo4_6', 'printer_coree3', 'PT - One6', 'EN - One6', 'ES - One6'),
('txt4_6', 'printer_coree3', 'PT - A wonderful serenity has taken possession of my entire soul.', 'EN - A wonderful serenity has taken possession of my entire soul.', 'ES - A wonderful serenity has taken possession of my entire soul.'),
('titulo5', 'printer_coree3', 'PT - It is time to act', 'EN - It is time to act', 'ES - It is time to act'),
('txt5', 'printer_coree3', 'PT - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.', 'EN - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.', 'ES - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.'),
('button1', 'printer_coree3', 'PT - Call to action', 'EN - Call to action', 'ES - Call to action'),
('titulo1', 'acessorio_ezycure', 'PT - Display 4', 'EN - Display 4', 'ES - Display 4'),
('txt1', 'acessorio_ezycure', 'PT - Lead paragraph. A wonderful serenity has taken possession of my entire soul.', 'EN - Lead paragraph. A wonderful serenity has taken possession of my entire soul.', 'ES - Lead paragraph. A wonderful serenity has taken possession of my entire soul.'),
('titulo2', 'acessorio_ezycure', 'PT - O my friend', 'EN - O my friend', 'ES - O my friend'),
('titulo2_1', 'acessorio_ezycure', 'PT - The trickling stream', 'EN - The trickling stream', 'ES - The trickling stream'),
('txt2', 'acessorio_ezycure', 'PT - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies', 'EN - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies', 'ES - I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies'),
('titulo3', 'acessorio_ezycure', 'PT - I hear the buzz', 'EN - I hear the buzz', 'ES - I hear the buzz'),
('titulo3_1', 'acessorio_ezycure', 'PT - First', 'EN - First', 'ES - First'),
('txt3_1', 'acessorio_ezycure', 'PT - I am so happy, my dear friend, so absorbed in the exquisite sense.', 'EN - I am so happy, my dear friend, so absorbed in the exquisite sense.', 'ES - I am so happy, my dear friend, so absorbed in the exquisite sense.'),
('titulo3_2', 'acessorio_ezycure', 'PT - First', 'EN - First', 'ES - First'),
('txt3_2', 'acessorio_ezycure', 'PT - I am so happy, my dear friend, so absorbed in the exquisite sense.', 'EN - I am so happy, my dear friend, so absorbed in the exquisite sense.', 'ES - I am so happy, my dear friend, so absorbed in the exquisite sense.'),
('titulo3_3', 'acessorio_ezycure', 'PT - First', 'EN - First', 'ES - First'),
('txt3_3', 'acessorio_ezycure', 'PT - I am so happy, my dear friend, so absorbed in the exquisite sense.', 'EN - I am so happy, my dear friend, so absorbed in the exquisite sense.', 'ES - I am so happy, my dear friend, so absorbed in the exquisite sense.'),
('titulo3_4', 'acessorio_ezycure', 'PT - First', 'EN - First', 'ES - First'),
('txt3_4', 'acessorio_ezycure', 'PT - I am so happy, my dear friend, so absorbed in the exquisite sense.', 'EN - I am so happy, my dear friend, so absorbed in the exquisite sense.', 'ES - I am so happy, my dear friend, so absorbed in the exquisite sense.'),
('titulo4', 'acessorio_ezycure', 'PT - Countless indescribable forms', 'EN - Countless indescribable forms', 'ES - Countless indescribable forms'),
('titulo5', 'acessorio_ezycure', 'PT - It is time to act', 'EN - It is time to act', 'ES - It is time to act'),
('txt5', 'acessorio_ezycure', 'PT - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.', 'EN - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.', 'ES - I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.'),
('button1', 'acessorio_ezycure', 'PT - Call to action', 'EN - Call to action', 'ES - Call to action'),
('titulo1', 'app_odontologia', 'Odontologia', 'Dentistry', 'Odontología'),
('txt1', 'app_odontologia', 'A indústria odontológica vem passando por uma revolução digital, e a EZY 3D está vindo justamente para suprir essas necessidades. As soluções oferecidas por nós são acessíveis e marcantes deixam de forma fácil o início na impressão. ', 'La industria dental está experimentando una revolución digital, y EZY 3D está llegando a satisfacer esas necesidades. Las soluciones que ofrecemos son asequibles y excepcionales y facilitan el inicio de la impresión.\r\n', 'The dental industry is undergoing a digital revolution, and EZY 3D is coming to meet those needs. The solutions offered by us are affordable and outstanding make it easy to start printing.'),
('titulo2', 'app_odontologia', 'Crescimento Escalável ', 'Scalable Growth\r\n', 'Crecimiento escalable\r\n'),
('txt2', 'app_odontologia', 'Com nossas impressoras E1260T, Phylos e Core E3 conheça a oportunidade de um crescimento exponencial e simples em sua produção odontológica. De forma versátil aumente sua produção, com a adição de nossas impressoras juntamente a nossa câmara de cura, simples assim. Isso permite uma consolidação, escalabilidade e consistência aos seus meios de produção. ', 'With our E1260T, Phylos and Core E3 printers you know the opportunity for exponential and simple growth in your dental production. In a versatile way increase your production, with the addition of our printers together with our cure chamber, simple as well. This allows for consolidation, scalability, and consistency of your means of production.', 'Con nuestras impresoras E1260T, Phylos y Core E3 conozca la oportunidad de un crecimiento exponencial y simple en su producción odontológica. De forma versátil aumente su producción, con la adición de nuestras impresoras junto a nuestra cámara de curación, simple así. Esto permite una consolidación, escalabilidad y consistencia a sus medios de producción.'),
('titulo3', 'app_odontologia', 'Uma impressão, várias impressões', 'Una impresión, varias impresiones', 'One print, various prints'),
('txt3', 'app_odontologia', 'Com apenas uma impressão consiga fazer  vários moldes odontológicos, basta ajustar do tamanho certo as impressões para caber na plataforma da impressora.', 'With just one print you can make multiple dental templates, just adjust the right size prints to fit on the printer platform.', '\r\nCon sólo una impresión consiga hacer varios moldes odontológicos, basta con ajustar el tamaño adecuado de las impresiones para caber en la plataforma de la impresora.'),
('titulo4', 'app_odontologia', 'Complexidade nas impressões', 'Impression Complexity', 'Complejidad en las impresiones'),
('txt4', 'app_odontologia', 'Consiga fazer diferentes moldes replicando arcadas dentarias de diferentes casos e de diferente complexidades.', 'Get different molds by replicating dental arches of different cases and different complexities.', 'Consiga hacer diferentes moldes replicando arcadas dentarias de diferentes casos y de diferentes complejidades'),
('titulo5', 'app_odontologia', 'Uma impressão várias possibilidades.', 'One impression several possibilities.', 'Una impresión varias posibilidades.'),
('titulo6', 'app_odontologia', 'Para mais informações entre em contato', 'For more information please contact us', 'Para obtener más información, póngase en contacto con nosotros'),
('button1', 'app_odontologia', 'Saiba mais', 'know more', 'Sepa mas'),
('titulo1', 'app_joalheria', 'Joalheria', 'Jewelry', 'Joyas'),
('txt1', 'app_joalheria', 'Crie moldes em questão de minutos ou horas, reduzindo tempo e gastos que antes eram maiores. O processo de impressão tornou rápido e preciso essas tarefas que antes demandavam muito custo e tempo, e agora com esta agilidade você pode investir seu dinheiro e tempo em tarefas mais desgastantes.', 'Create templates in a matter of minutes or hours, reducing time and expense that used to be greater. The printing process has made these tasks that required a lot of cost and time fast and accurate, and now with this agility you can invest your money and time in more demanding tasks.', 'Cree moldes en cuestión de minutos o horas, reduciendo tiempo y gastos que antes eran mayores. El proceso de impresión hizo rápido y preciso esas tareas que antes demandaban mucho costo y tiempo, y ahora con esta agilidad usted puede invertir su dinero y tiempo en tareas más desgastantes.'),
('txt1_1', 'app_joalheria', 'Aproveite a praticidade que nossas impressoras oferecem para criação de produtos mais personalizados e agradáveis para os clientes, e já faça o teste experimentação. ', 'Enjoy the convenience that our printers offer to create more personalized and pleasing products for customers, and already do the test experimentation.', 'Aproveche la practicidad que nuestras impresoras ofrecen para crear productos más personalizados y agradables para los clientes, y ya pruebe la experimentación.'),
('titulo2', 'app_joalheria', 'Melhore seu área de trabalho, deixe mais dinâmico sua forma de trabalhar assim melhorando a experiência do cliente', 'Improve your work area, make your work more dynamic, improving the customer experience', 'Mejore su área de trabajo, deje más dinámico su forma de trabajar así mejorando la experiencia del cliente'),
('titulo2_1', 'app_joalheria', 'Para mais informações entre em contato', 'For more information please contact us', 'Para obtener más información, póngase en contacto con nosotros'),
('titulo2_2', 'app_joalheria', 'PT - Two', 'EN - Two', 'ES - Two'),
('titulo2_3', 'app_joalheria', 'PT - Three', 'EN - Three', 'ES - Three'),
('titulo2_4', 'app_joalheria', 'PT - Four', 'EN - Four', 'ES - Four'),
('titulo2_5', 'app_joalheria', 'PT - Five', 'EN - Five', 'ES - Five'),
('titulo2_6', 'app_joalheria', 'PT - Six', 'EN - Six', 'ES - Six'),
('titulo3', 'app_joalheria', 'De sua imaginação, para a realidade de forma simples', 'From your imagination, to reality in a simple way', 'De su imaginación, a la realidad de forma sencilla'),
('txt3', 'app_joalheria', 'Use de softwares de modelagem 3d para criação e adaptação de moldes  de jóias que vieram de sua criatividade, converta-os para o formato de impressão e imprima-o.', 'Use 3d modeling software for creating and adapting jewelry molds that came from your creativity, convert them to the print format and print it out.', 'Utilice software de modelado 3d para crear y adaptar las plantillas de joyería que vienen de su creatividad, convertirlas al formato de impresión e imprimirlo.'),
('titulo4', 'app_joalheria', 'PT - Call your visitors to act. Now', 'EN - Call your visitors to act. Now', 'ES - Call your visitors to act. Now'),
('button1', 'app_joalheria', 'Saiba mais', 'Know more', 'Sepa mais'),
('titulo1', 'contato', 'Contate-nos!', 'Contact us!', 'Fotos!'),
('txt1', 'contato', 'Se você gostaria de saber mais sobre nossos produtos ou tem alguma dúvida nos contate e logo responderemos.', 'If you would like to know more about our products or have any questions contact us and we will respond soon.', 'Si usted desea saber más sobre nuestros productos o tiene alguna duda nos contacte y luego responderemos.'),
('txt1_1', 'contato', '(11) 95245-3334 - (15) 4101-0014', '(11) 95245-3334 - (15) 4101-0014', '(11) 95245-3334 - (15) 4101-0014'),
('txt1_2', 'contato', 'contato@ezy3d.com.br', 'contato@ezy3d.com.br', 'contato@ezy3d.com.br'),
('txt1_3', 'contato', 'R. Luís de Camargo Barros, 20 Vila São Cristovao, Tatuí - SP, 18280-010', 'R. Luís de Camargo Barros, 20 Vila São Cristovao, Tatuí - SP, 18280-010', 'R. Luís de Camargo Barros, 20 Vila São Cristovao, Tatuí - SP, 18280-010'),
('txt1_4', 'contato', 'Horário de atendimento: Segunda a Sexta das 08h15 às 17h45', 'Office hours: Monday to Friday from 08:15 to 17:45', 'Horario de atención: Lunes a Viernes de 08h15 a 17h45'),
('input1', 'contato', 'Nome', 'Name', 'Nombre'),
('input2', 'contato', 'E-mail', 'Email', 'Email'),
('input3', 'contato', 'Assunto', 'Subject matter', 'Sujeto'),
('input4', 'contato', 'Sua mensagem', 'Your message', 'Su mensaje'),
('button1', 'contato', 'Enviar', 'Submit', 'Enviar'),
('success', 'perfil_cliente', 'Alterações salvas comsucesso!', 'Changes savedwith success!', '¡Cambios guardados comsucesso!'),
('perfil_menu_editar', 'perfil_cliente', 'Editar Perfil', 'Edit profile', 'Editar Perfil'),
('perfil_menu_altsenha', 'perfil_cliente', 'Alterar Senha', 'Change Password', 'Cambiar contraseña'),
('perfil_menu_orcamento', 'perfil_cliente', 'Solicitar Orçamento', 'Request a Quote', 'Solicitar presupuesto'),
('perfil_menu_suporte', 'perfil_cliente', 'Suporte Técnico', 'Technical support', 'Suporte Técnico'),
('perfil_nome', 'perfil_cliente', 'Nome', 'Name', 'Nombre'),
('perfil_erronome', 'perfil_cliente', 'Pelo menos 3 caracteres requeridos.', 'At least 3 characters required.', 'Al menos 3 caracteres requeridos.'),
('perfil_sobrenome', 'perfil_cliente', 'Sobrenome', 'Submit', 'Submit'),
('perfil_errosobrenome', 'perfil_cliente', 'Pelo menos 3 caracteres requeridos.', 'At least 3 characters required.', 'Al menos 3 caracteres requeridos.'),
('perfil_empresa', 'perfil_cliente', 'Empresa', 'Company', 'Negocios'),
('perfil_pais', 'perfil_cliente', 'País', 'Country', 'País'),
('perfil_erropais', 'perfil_cliente', 'Informe seu País.', 'Enter your Country.', 'Ingrese su país.'),
('perfil_ramo', 'perfil_cliente', 'Ramo', 'Branch', 'Rama'),
('perfil_erroramo', 'perfil_cliente', 'Informe seu Ramo.', 'Inform your branch.', 'Informe su Rama.'),
('perfil_outro1', 'perfil_cliente', 'Outro', 'Other', 'Otro'),
('perfil_outroramo', 'perfil_cliente', 'Outro Ramo', 'Another branch', 'Otro Rama'),
('perfil_erro_outroramo', 'perfil_cliente', '3 caracteres requeridos', '3 characters required', '3 caracteres requeridos'),
('perfil_infoprivadas', 'perfil_cliente', 'Informações privadas', 'Private Information', 'Información privada'),
('perfil_email', 'perfil_cliente', 'E-mail', 'Email', 'Email'),
('perfil_erroemail1', 'perfil_cliente', 'Digite um e-mail válido.', 'Enter a valid email address.', 'Introduzca un correo electrónico válido.'),
('perfil_erroemail2', 'perfil_cliente', 'Este e-mail já está sendo utilizado.', 'This email is already being used.', 'Este e-mail ya está siendo utilizado.'),
('perfil_telefone', 'perfil_cliente', 'Telefone', 'Telephone', 'Teléfono'),
('perfil_errofone', 'perfil_cliente', 'Digite um telefone válido. (o DDD é necessário)', 'Please enter a valid phone number. (DDD required)', 'Introduzca un teléfono válido. (el DDD es necesario)'),
('perfil_oldsenha', 'perfil_cliente', 'Senha Antiga', 'Old Password', 'Contraseña Antigua'),
('perfil_erro_oldsenha', 'perfil_cliente', 'Senha antiga incorreta.', 'Submit', 'Submit'),
('perfil_newsenha', 'perfil_cliente', 'Nova Senha', 'New Password', 'Nueva Contraseña'),
('perfil_erro_newsenha', 'perfil_cliente', 'A sua nova senha não pode ser igual a senha antiga.', 'Your new password can not be the same as the old password.', 'Su nueva contraseña no puede ser igual a la contraseña antigua.'),
('perfil_confirmarsenha', 'perfil_cliente', 'Confirmar Nova Senha', 'Confirm New Password', 'Confirmar Nueva Contraseña'),
('perfil_erro_confirmarsenha', 'perfil_cliente', 'Senhas não coincidem. Tente novamente.', 'Passwords do not match. Try again.', 'Las contraseñas no coinciden. Inténtalo de nuevo.'),
('perfil_esqueceusenha', 'perfil_cliente', 'Esqueceu a Senha?', 'Forgot Password?', '¿Olvido la Contraseña?'),
('perfil_orcamento_titulo1', 'perfil_cliente', 'Solicitar Orçamento', 'Request a Quote', 'Solicitar Presupuesto'),
('perfil_orcamento_txt1', 'perfil_cliente', 'PT - The people listed here are contacts you ve uploaded to Instagram. To remove your synced contacts, tap Delete All.', 'EN - The people listed here are contacts you ve uploaded to Instagram. To remove your synced contacts, tap Delete All.', 'ES - The people listed here are contacts you ve uploaded to Instagram. To remove your synced contacts, tap Delete All.'),
('perfil_orcamento_label1', 'perfil_cliente', 'Impressoras 3D', '3D Printers', 'Impresoras 3D'),
('perfil_orcamento_label2', 'perfil_cliente', 'Acessórios', 'Accessories', 'Accessorios'),
('perfil_orcamento_label3', 'perfil_cliente', 'Observaçao', 'Note', 'Observación'),
('perfil_orcamento_placeholder1', 'perfil_cliente', 'Deixe um comentário', 'Leave a comment', 'Deja un comentario'),
('perfil_orcamento_button1', 'perfil_cliente', 'Enviar', 'Submit', 'Enviar'),
('perfil_suporte_titulo1', 'perfil_cliente', 'Suporte Técnico', 'Technical support', 'Suporte Técnico'),
('perfil_suporte_txt1', 'perfil_cliente', 'The people listed here are contacts you ve uploaded to Instagram. To remove your synced contacts, tap Delete All.', 'The people listed here are contacts you ve uploaded to Instagram. To remove your synced contacts, tap Delete All.', 'The people listed here are contacts you ve uploaded to Instagram. To remove your synced contacts, tap Delete All.'),
('perfil_suporte_label1', 'perfil_cliente', 'Máquina', 'Machine', 'Máquina'),
('perfil_suporte_select1', 'perfil_cliente', 'Selecione a sua máquina...', 'Select your machine...', 'Seleccione su máquina...'),
('perfil_suporte_label2', 'perfil_cliente', 'Problema', 'Problem', 'Problema'),
('perfil_suporte_select2', 'perfil_cliente', 'Selecione seu problema...', 'Select your problem', 'Seleccione su problema'),
('perfil_suporte_outro1', 'perfil_cliente', 'Outro', 'Other', 'Otro'),
('perfil_suporte_placeholder1', 'perfil_cliente', 'Descreva seu problema', 'Describe your problem', 'Describa su problema'),
('perfil_suporte_button1', 'perfil_cliente', 'Enviar', 'Submit', 'Enviar'),
('titulo4', 'app_entretenimento', 'PT - Call your visitors to act. Now', 'EN - Call your visitors to act. Now', 'ES - Call your visitors to act. Now'),
('button1', 'app_entretenimento', 'PT - Get your license', 'EN - Get your license', 'ES - Get your license'),
('titulo3_4', 'app_engenharia', 'Peça com acabamento final', 'Peça com acabamento final', 'Peça com acabamento final'),
('titulo2_3', 'app_entretenimento', 'Cachorro em 3D', 'Cachorro em 3D', 'Cachorro em 3D'),
('txt2_3', 'app_entretenimento', 'Cachorro feita á base de resina ST-450 de nossa parceira', 'Cachorro feita á base de resina ST-450 de nossa parceira', 'Cachorro feita á base de resina ST-450 de nossa parceira'),
('titulo3', 'app_entretenimento', 'Auxílio à pequenos Produtores', 'Auxílio à pequenos Produtores', 'Auxílio à pequenos Produtores'),
('txt3', 'app_entretenimento', 'Incorpore uma de nossas impressoras ao seu meio de trabalho para o auxilio de criações de obras de arte.', 'Incorpore uma de nossas impressoras ao seu meio de trabalho para o auxilio de criações de obras de arte.', 'Incorpore uma de nossas impressoras ao seu meio de trabalho para o auxilio de criações de obras de arte.'),
('txt2_2', 'app_entretenimento', 'Personagem de anime feito em nossa máquina', 'Personagem de anime feito em nossa máquina', 'Personagem de anime feito em nossa máquina'),
('titulo2_2', 'app_entretenimento', 'Beerus em 3D', 'Beerus em 3D', 'Beerus em 3D'),
('titulo2_1', 'app_entretenimento', 'Crânio 3D', 'Crânio 3D', 'Crânio  3D'),
('txt2_1', 'app_entretenimento', 'Feita em nossa impressora de filamento.', 'Feita em nossa impressora de filamento.', 'Feita em nossa impressora de filamento.'),
('txt1_1', 'app_entretenimento', 'Pegue um personagem ou algum conceito que veio de sua mente que foi criado digital por um software de computador e eleve-os para outro nível fazendo a impressão deles. Assim podendo enxergar aquilo que lhe veio em mente de uma forma mais detalhada e palpável.', 'Pegue um personagem ou algum conceito que veio de sua mente que foi criado digital por um software de computador e eleve-os para outro nível fazendo a impressão deles. Assim podendo enxergar aquilo que lhe veio em mente de uma forma mais detalhada e palpável.', 'Pegue um personagem ou algum conceito que veio de sua mente que foi criado digital por um software de computador e eleve-os para outro nível fazendo a impressão deles. Assim podendo enxergar aquilo que lhe veio em mente de uma forma mais detalhada e palpável.'),
('titulo1', 'app_entretenimento', 'Entretenimento', 'Entretenimento', 'Entretenimento'),
('titulo1_1', 'app_entretenimento', 'PT - Of existence in this spot', 'EN - Of existence in this spot', 'ES - Of existence in this spot'),
('txt1', 'app_entretenimento', 'Pegue seus modelos digitais que estão em seu computador e traga-os para realidade, apenas através do envio do modelo digital para uma de nossas impressoras e o tornando- o realístico, de forma rápida e barata.', 'Pegue seus modelos digitais que estão em seu computador e traga-os para realidade, apenas através do envio do modelo digital para uma de nossas impressoras e o tornando- o realístico, de forma rápida e barata.', 'Pegue seus modelos digitais que estão em seu computador e traga-os para realidade, apenas através do envio do modelo digital para uma de nossas impressoras e o tornando- o realístico, de forma rápida e barata.'),
('button1', 'app_engenharia', 'PT - Get your license', 'EN - Get your license', 'ES - Get your license'),
('titulo6', 'app_engenharia', 'PT - Call your visitors to act. Now', 'EN - Call your visitors to act. Now', 'ES - Call your visitors to act. Now'),
('titulo5_2', 'app_engenharia', 'Porta canetas de outra forma', 'Porta canetas de outra forma', 'Porta canetas de outra forma'),
('txt5_2', 'app_engenharia', 'Acrescente criatividade aos objetos cotidianos a sua volta, dando uma nova cara a algo monótomo e design.', 'Acrescente criatividade aos objetos cotidianos a sua volta, dando uma nova cara a algo monótomo e design', 'Acrescente criatividade aos objetos cotidianos a sua volta, dando uma nova cara a algo monótomo e design'),
('titulo3_1', 'app_engenharia', 'Ao sair da impressora', 'Ao sair da impressora', 'Ao sair da impressora'),
('titulo3_2', 'app_engenharia', 'Juntando as peças', 'Juntando as peças', 'Juntando as peças'),
('titulo3_3', 'app_engenharia', 'Dando os toques inciais', 'Dando os toques inciais', 'Dando os toques inciais'),
('titulo4', 'app_engenharia', 'Peça finalizada', 'Peça finalizada', 'Peça finalizada'),
('txt4', 'app_engenharia', 'Peça feita do inicio ao fim de uma forma simples, fácil e rápido', 'Peça feita do inicio ao fim de uma forma simples, fácil e rápido', 'Peça feita do inicio ao fim de uma forma simples, fácil e rápido'),
('titulo5', 'app_engenharia', 'Peça Finalizada', 'Peça Finalizada', 'Peça Finalizada'),
('txt5', 'app_engenharia', 'Peças com nível de acabamento  prontas para o consumidor  direto da impressora.', 'Peças com nível de acabamento  prontas para o consumidor  direto da impressora.', 'Peças com nível de acabamento  prontas para o consumidor  direto da impressora.'),
('titulo5_1', 'app_engenharia', 'Porta canetas ', 'Porta canetas', 'Porta canetas'),
('txt5_1', 'app_engenharia', 'Use da impressora para impressão de itens de utilidades para o auxílio do dia a dia', 'Use da impressora para impressão de itens de utilidades para o auxílio do dia a dia', 'Use da impressora para impressão de itens de utilidades para o auxílio do dia a dia'),
('txt3', 'app_engenharia', 'Com um acabamento próximo à o  produto finalizado é fácil dar os toques finais para à customização do seu gosto ou do cliente ', 'Com um acabamento próximo à o  produto finalizado é fácil dar os toques finais para à customização do seu gosto ou do cliente ', 'Com um acabamento próximo à o  produto finalizado é fácil dar os toques finais para à customização do seu gosto ou do cliente '),
('titulo3', 'app_engenharia', 'Da impressora para o acabamento final', 'Da impressora para o acabamento final', 'Da impressora para o acabamento final'),
('titulo2', 'app_engenharia', 'Estudo de novos conceitos', 'Estudo de novos conceitos', 'Estudo de novos conceitos'),
('txt2', 'app_engenharia', 'Explore conceitos iniciais feitos a partir de modelagem digital e eleve-os para outros níveis através de testes e adaptações. ', 'Explore conceitos iniciais feitos a partir de modelagem digital e eleve-os para outros níveis através de testes e adaptações. ', 'Explore conceitos iniciais feitos a partir de modelagem digital e eleve-os para outros níveis através de testes e adaptações. '),
('titulo1', 'app_engenharia', 'Engenharia', 'Engenharia', 'Engenharia'),
('txt1', 'app_engenharia', 'Com uma impressora incorporado ao meio do fluxo de trabalho de um engenheiro, lhe dá poder e agilidade, pois é possível o rápido desenvolvimento de um protótipo para testes, oque antes demandava muito tempo mesmo sendo um protótipo.', 'Com uma impressora incorporado ao meio do fluxo de trabalho de um engenheiro, lhe dá poder e agilidade, pois é possível o rápido desenvolvimento de um protótipo para testes, oque antes demandava muito tempo mesmo sendo um protótipo.', 'Com uma impressora incorporado ao meio do fluxo de trabalho de um engenheiro, lhe dá poder e agilidade, pois é possível o rápido desenvolvimento de um protótipo para testes, oque antes demandava muito tempo mesmo sendo um protótipo.'),
('btnproduto1_1', 'home', 'Orçamento', 'Orçamento', 'Orçamento'),
('btnproduto1_2', 'home', 'Orçamento', 'Orçamento', 'Orçamento'),
('produto2', 'home', 'Phylos', 'Phylos', 'Phylos'),
('btnproduto2_1', 'home', 'Orçamento', 'Orçamento', 'Orçamento'),
('btnproduto2_2', 'home', 'Saiba mais', 'Saiba mais', 'Saiba mais'),
('produto3', 'home', 'Core E3', 'Core E3', 'Core E3'),
('btnproduto3_1', 'home', 'Orçamento', 'Orçamento', 'Orçamento'),
('btnproduto3_2', 'home', 'Saiba mais', 'Saiba mais', 'Saiba mais'),
('titulo5', 'home', 'Acessórios', 'Acessórios', 'Acessórios'),
('produto4', 'home', 'EzyCure', 'EzyCure', 'EzyCure'),
('btnproduto4_1', 'home', 'Orçamento', 'Orçamento', 'Orçamento'),
('btnproduto4_2', 'home', 'Saiba mais', 'Saiba mais', 'Saiba mais'),
('titulo6', 'home', 'Areas de atuação', 'Areas de atuação', 'Areas de atuação'),
('txt6', 'home', 'Conheça um pouco sobre algumas áreas em que a EZY 3D atua!', 'Conheça um pouco sobre algumas áreas em que a EZY 3D atua!', 'Conheça um pouco sobre algumas áreas em que a EZY 3D atua!'),
('button4', 'home', 'Saiba mais', 'Saiba mais', 'Saiba mais');

-- --------------------------------------------------------

--
-- Estrutura da tabela `metas`
--

DROP TABLE IF EXISTS `metas`;
CREATE TABLE IF NOT EXISTS `metas` (
  `mes` int(2) NOT NULL,
  `ano` int(4) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `meta` int(11) DEFAULT NULL,
  PRIMARY KEY (`mes`,`ano`,`tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

DROP TABLE IF EXISTS `orcamento`;
CREATE TABLE IF NOT EXISTS `orcamento` (
  `idorcamento` int(11) NOT NULL AUTO_INCREMENT,
  `fkcliente` int(11) DEFAULT NULL,
  `produtos` varchar(150) DEFAULT NULL,
  `descricao` text NOT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`idorcamento`),
  KEY `fkcliente` (`fkcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `suporte`
--

DROP TABLE IF EXISTS `suporte`;
CREATE TABLE IF NOT EXISTS `suporte` (
  `idsuporte` int(11) NOT NULL AUTO_INCREMENT,
  `maquina` varchar(20) NOT NULL,
  `problema` varchar(20) NOT NULL,
  `descricao` text NOT NULL,
  `fkcliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`idsuporte`),
  KEY `fkcliente` (`fkcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `today`
--

DROP TABLE IF EXISTS `today`;
CREATE TABLE IF NOT EXISTS `today` (
  `dia` int(2) NOT NULL,
  `fkmes` int(2) NOT NULL,
  `fkano` int(4) NOT NULL,
  `fktipo` varchar(20) NOT NULL,
  `cliques` int(2) DEFAULT NULL,
  PRIMARY KEY (`dia`,`fkmes`,`fkano`,`fktipo`),
  KEY `fkmes` (`fkmes`,`fkano`,`fktipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `orcamento`
--
ALTER TABLE `orcamento`
  ADD CONSTRAINT `orcamento_ibfk_1` FOREIGN KEY (`fkcliente`) REFERENCES `cliente` (`idcliente`);

--
-- Limitadores para a tabela `suporte`
--
ALTER TABLE `suporte`
  ADD CONSTRAINT `suporte_ibfk_1` FOREIGN KEY (`fkcliente`) REFERENCES `cliente` (`idcliente`);

--
-- Limitadores para a tabela `today`
--
ALTER TABLE `today`
  ADD CONSTRAINT `today_ibfk_1` FOREIGN KEY (`fkmes`,`fkano`,`fktipo`) REFERENCES `acesso` (`mes`, `ano`, `tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
