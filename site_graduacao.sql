-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Dez-2017 às 17:07
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site_graduacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `album`
--

CREATE TABLE `album` (
  `ID` int(11) NOT NULL,
  `ENDERECO` varchar(60) NOT NULL,
  `SEMESTRE` smallint(1) NOT NULL,
  `ANO` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `album`
--

INSERT INTO `album` (`ID`, `ENDERECO`, `SEMESTRE`, `ANO`) VALUES
(1, 'teste1.jpg', 1, 2017),
(2, 'teste2.jpg', 2, 2017),
(11, 'Chrysanthemum.jpg', 1, 2017),
(14, 'Koala.jpg', 1, 2017),
(16, 'Tulips.jpg', 1, 2017),
(17, 'Penguins.jpg', 1, 2018);

-- --------------------------------------------------------

--
-- Estrutura da tabela `apresentacao`
--

CREATE TABLE `apresentacao` (
  `ID` int(11) NOT NULL,
  `conteudo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `apresentacao`
--

INSERT INTO `apresentacao` (`ID`, `conteudo`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `corpo_docente`
--

CREATE TABLE `corpo_docente` (
  `ID_DOCENTE` int(11) NOT NULL,
  `NOME` varchar(60) NOT NULL,
  `AREA` varchar(60) DEFAULT NULL,
  `LINK_LATTES` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `corpo_docente`
--

INSERT INTO `corpo_docente` (`ID_DOCENTE`, `NOME`, `AREA`, `LINK_LATTES`) VALUES
(1, 'Eduardo Oliveira Teles', 'Prof. InformÃ¡tica', 'http://lattes.cnpq.br/5798531109640536'),
(2, 'FÃ¡bio Marques da Cruz', 'Prof. InformÃ¡tica', 'http://lattes.cnpq.br/2003810910923877'),
(3, 'Fernanda Regebe Castro', 'Prof. InformÃ¡tica', 'http://lattes.cnpq.br/9737787341403652'),
(4, 'Gesiane Miranda Teixeira', 'Prof. InformÃ¡tica', 'http://lattes.cnpq.br/8453141294212978'),
(5, 'Heliomar ConceiÃ§Ã£o Souza', 'Prof. InformÃ¡tica', 'http://lattes.cnpq.br/5562778893064538'),
(6, 'Igor de Oliveira Costa', 'Prof. InformÃ¡tica', 'http://lattes.cnpq.br/6665781286217056'),
(7, 'JoÃ£o Marcelo Moraes Fernandes', 'Prof. InformÃ¡tica', 'http://lattes.cnpq.br/2664445712245411'),
(8, 'Josildo Pereira da Silva', 'Prof. InformÃ¡tica', 'http://lattes.cnpq.br/1001123283546693'),
(9, 'Larissa NatÃ¡lia das Virgens Carneiro', 'Prof. InformÃ¡tica', 'http://lattes.cnpq.br/5657378550144442'),
(10, 'Lucio Marcos Silva dos Santos', 'Prof. InformÃ¡tica', 'http://lattes.cnpq.br/5188567098810352'),
(11, 'Messias Bittencourt Figueredo', 'Prof. InformÃ¡tica', 'http://lattes.cnpq.br/1924929959906288'),
(12, 'CÃ©sar Andrey Gomes Ferreira', 'Prof. MatemÃ¡tica', 'http://lattes.cnpq.br/5804555877158499'),
(13, 'FÃ¡bio Rodrigues Santos', 'Prof. MatemÃ¡tica', 'http://lattes.cnpq.br/1710298272362521'),
(14, 'Gustavo da Silva Costa', 'Prof. MatemÃ¡tica', 'http://lattes.cnpq.br/1389722095904056'),
(15, 'JosÃ© Borges dos Santos Filho', 'Prof. MatemÃ¡tica', 'http://lattes.cnpq.br/4177730354486715'),
(16, 'Karine Socorro Pugas da Silva', 'Prof. MatemÃ¡tica', 'http://lattes.cnpq.br/9390123472940988'),
(17, 'Juliana Bastos Fernandes da ConceiÃ§Ã£o', 'Prof. Webdesign', 'http://lattes.cnpq.br/8836898080867629'),
(18, 'Maria Raidalva Nery Barreto', 'Prof. HistÃ³ria da EducaÃ§Ã£o', 'http://lattes.cnpq.br/4952817607443275'),
(19, 'Aliger dos Santos Pereira', 'ProfÂª. AdministraÃ§Ã£o', 'http://lattes.cnpq.br/9514806025242255');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `ID_CURSO` int(11) NOT NULL,
  `NOME` varchar(40) DEFAULT NULL,
  `DESCRICAO` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`ID_CURSO`, `NOME`, `DESCRICAO`) VALUES
(1, 'LICENCIATURA COMPUTACAO', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum molestie orci, nec aliquet urna porttitor vel. Etiam ut metus felis. Vivamus vitae risus consectetur, auctor est eu, accumsan lectus. Pellentesque mauris mi, finibus eget euismod vel, tempus nec leo. Duis et pellentesque eros. Nullam interdum odio sed ex pharetra placerat. Phasellus pellentesque facilisis augue, ut commodo ligula tincidunt eu. Sed ultricies dolor quis libero tempus, in pellentesque eros auctor. Duis iaculis lacus non urna dictum, eget viverra ipsum sagittis. Suspendisse in diam non tellus convallis porta eu vel odio.'),
(2, 'BACHARELADO COMPUTACAO', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum molestie orci, nec aliquet urna porttitor vel. Etiam ut metus felis. Vivamus vitae risus consectetur, auctor est eu, accumsan lectus. Pellentesque mauris mi, finibus eget euismod vel, tempus nec leo. Duis et pellentesque eros. Nullam interdum odio sed ex pharetra placerat. Phasellus pellentesque facilisis augue, ut commodo ligula tincidunt eu. Sed ultricies dolor quis libero tempus, in pellentesque eros auctor. Duis iaculis lacus non urna dictum, eget viverra ipsum sagittis. Suspendisse in diam non tellus convallis porta eu vel odio.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `COD_DISCIPLINA` int(11) NOT NULL,
  `NOME` varchar(80) NOT NULL,
  `DESCR` text,
  `ID_CURSO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`COD_DISCIPLINA`, `NOME`, `DESCR`, `ID_CURSO`) VALUES
(1, 'DISCIPLINA 1 LIC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed efficitur nisi. Mauris ullamcorper lorem eget posuere commodo. Phasellus iaculis lorem eu lorem consectetur aliquam. Curabitur ex neque, vulputate congue lorem vel, aliquet venenatis est. Sed vitae est et diam.', 1),
(2, 'DISCIPLINA 2 LIC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed efficitur nisi. Mauris ullamcorper lorem eget posuere commodo. Phasellus iaculis lorem eu lorem consectetur aliquam. Curabitur ex neque, vulputate congue lorem vel, aliquet venenatis est. Sed vitae est et diam.', 1),
(3, 'DISCIPLINA 1 BAC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed efficitur nisi. Mauris ullamcorper lorem eget posuere commodo. Phasellus iaculis lorem eu lorem consectetur aliquam. Curabitur ex neque, vulputate congue lorem vel, aliquet venenatis est. Sed vitae est et diam.', 2),
(4, 'DISCIPLINA 2 BAC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed efficitur nisi. Mauris ullamcorper lorem eget posuere commodo. Phasellus iaculis lorem eu lorem consectetur aliquam. Curabitur ex neque, vulputate congue lorem vel, aliquet venenatis est. Sed vitae est et diam.', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `editor`
--

CREATE TABLE `editor` (
  `ID` int(11) NOT NULL,
  `login` varchar(80) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `editor`
--

INSERT INTO `editor` (`ID`, `login`, `senha`) VALUES
(1, 'Ray', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `extensao`
--

CREATE TABLE `extensao` (
  `ID` int(11) NOT NULL,
  `conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `extensao`
--

INSERT INTO `extensao` (`ID`, `conteudo`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `ID_NOTICIA` int(11) NOT NULL,
  `TITULO` varchar(80) NOT NULL,
  `CONTEUDO` text NOT NULL,
  `IMAGEM` varchar(80) NOT NULL,
  `SLIDER` int(1) NOT NULL,
  `DATA` datetime NOT NULL,
  `CURSO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`ID_NOTICIA`, `TITULO`, `CONTEUDO`, `IMAGEM`, `SLIDER`, `DATA`, `CURSO`) VALUES
(1, 'Noticia 1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec gravida fringilla tristique. Mauris imperdiet mi in aliquam bibendum. Quisque varius tellus metus, eu aliquet justo rhoncus in. Duis a elit sed arcu imperdiet feugiat ut faucibus sem. Donec ligula augue, accumsan ut tincidunt vitae, accumsan ut lacus. Integer tincidunt molestie tincidunt. Morbi accumsan volutpat facilisis.\r</p>\n<p>\r</p>\n<p>Quisque nec convallis augue, ullamcorper egestas velit. Sed risus metus, mollis vitae mauris a, ullamcorper posuere nunc. In hac habitasse platea dictumst. Nullam a feugiat turpis. Mauris egestas laoreet erat ut iaculis. Cras ultrices tortor in egestas lobortis. Curabitur ac congue elit.\r</p>\n<p>\r</p>\n<p>Curabitur vulputate lectus sed aliquam sodales. Proin lobortis odio a metus consectetur cursus. Vestibulum nisl lorem, suscipit id purus ac, malesuada rutrum orci. Curabitur non lacus vulputate, dapibus orci sit amet, viverra massa. Donec at malesuada eros. In convallis volutpat libero id consequat. Suspendisse eget enim finibus justo tempor sagittis eu in arcu. In fermentum in mi sed euismod. Duis semper, metus auctor placerat malesuada, elit libero interdum lacus, eu mattis lacus libero at tortor. Morbi gravida odio posuere magna consequat, et maximus sem lobortis. Donec placerat blandit massa in commodo.\r</p>\n<p>\r</p>\n<p>Nullam maximus enim porttitor consectetur interdum. Nunc dapibus dictum odio ac ultricies. Cras vel mi libero. Etiam id nunc et nisi auctor dapibus ut at elit. Duis aliquet turpis eu dui rutrum sollicitudin. Suspendisse sagittis eros lorem, ac ullamcorper lacus vehicula ac. Pellentesque at quam non odio ullamcorper pretium. Maecenas et mauris ut neque tempor mollis.\r</p>\n<p>\r</p>\n<p>Ut sed dolor in odio feugiat pellentesque tincidunt eget eros. Sed molestie semper lorem, a viverra metus. Donec ullamcorper eros eu ante pulvinar scelerisque. Aenean sollicitudin turpis rhoncus mauris vulputate egestas. Donec orci lacus, accumsan et sapien at, consectetur placerat nisl. Donec eu libero sit amet velit efficitur interdum. Donec porttitor nibh varius est consectetur, eget cursus nibh ullamcorper. Vestibulum mattis aliquet lorem pellentesque ornare. Suspendisse sodales ut sem in porta. Nullam blandit nunc vitae diam iaculis semper. Integer placerat, eros id lobortis lobortis, felis ex laoreet dui, sit amet aliquam nibh mauris interdum ex. Praesent ac tortor vehicula nulla molestie tristique. Nullam nisi odio, sagittis at maximus eget, facilisis quis risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus sit amet faucibus ligula. Fusce lacus massa, dignissim eleifend congue eu, viverra quis enim.</p>', 'news-1.jpg', 1, '2017-10-26 14:57:13', 1),
(2, 'Noticia 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec gravida fringilla tristique. Mauris imperdiet mi in aliquam bibendum. Quisque varius tellus metus, eu aliquet justo rhoncus in. Duis a elit sed arcu imperdiet feugiat ut faucibus sem. Donec ligula augue, accumsan ut tincidunt vitae, accumsan ut lacus. Integer tincidunt molestie tincidunt. Morbi accumsan volutpat facilisis.\r</p>\n<p>\r</p>\n<p>Quisque nec convallis augue, ullamcorper egestas velit. Sed risus metus, mollis vitae mauris a, ullamcorper posuere nunc. In hac habitasse platea dictumst. Nullam a feugiat turpis. Mauris egestas laoreet erat ut iaculis. Cras ultrices tortor in egestas lobortis. Curabitur ac congue elit.\r</p>\n<p>\r</p>\n<p>Curabitur vulputate lectus sed aliquam sodales. Proin lobortis odio a metus consectetur cursus. Vestibulum nisl lorem, suscipit id purus ac, malesuada rutrum orci. Curabitur non lacus vulputate, dapibus orci sit amet, viverra massa. Donec at malesuada eros. In convallis volutpat libero id consequat. Suspendisse eget enim finibus justo tempor sagittis eu in arcu. In fermentum in mi sed euismod. Duis semper, metus auctor placerat malesuada, elit libero interdum lacus, eu mattis lacus libero at tortor. Morbi gravida odio posuere magna consequat, et maximus sem lobortis. Donec placerat blandit massa in commodo.\r</p>\n<p>\r</p>\n<p>Nullam maximus enim porttitor consectetur interdum. Nunc dapibus dictum odio ac ultricies. Cras vel mi libero. Etiam id nunc et nisi auctor dapibus ut at elit. Duis aliquet turpis eu dui rutrum sollicitudin. Suspendisse sagittis eros lorem, ac ullamcorper lacus vehicula ac. Pellentesque at quam non odio ullamcorper pretium. Maecenas et mauris ut neque tempor mollis.\r</p>\n<p>\r</p>\n<p>Ut sed dolor in odio feugiat pellentesque tincidunt eget eros. Sed molestie semper lorem, a viverra metus. Donec ullamcorper eros eu ante pulvinar scelerisque. Aenean sollicitudin turpis rhoncus mauris vulputate egestas. Donec orci lacus, accumsan et sapien at, consectetur placerat nisl. Donec eu libero sit amet velit efficitur interdum. Donec porttitor nibh varius est consectetur, eget cursus nibh ullamcorper. Vestibulum mattis aliquet lorem pellentesque ornare. Suspendisse sodales ut sem in porta. Nullam blandit nunc vitae diam iaculis semper. Integer placerat, eros id lobortis lobortis, felis ex laoreet dui, sit amet aliquam nibh mauris interdum ex. Praesent ac tortor vehicula nulla molestie tristique. Nullam nisi odio, sagittis at maximus eget, facilisis quis risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus sit amet faucibus ligula. Fusce lacus massa, dignissim eleifend congue eu, viverra quis enim.</p>', 'news-2.jpg', 1, '2017-10-26 14:58:20', 1),
(3, 'Noticia 3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec gravida fringilla tristique. Mauris imperdiet mi in aliquam bibendum. Quisque varius tellus metus, eu aliquet justo rhoncus in. Duis a elit sed arcu imperdiet feugiat ut faucibus sem. Donec ligula augue, accumsan ut tincidunt vitae, accumsan ut lacus. Integer tincidunt molestie tincidunt. Morbi accumsan volutpat facilisis.\r</p>\n<p>\r</p>\n<p>Quisque nec convallis augue, ullamcorper egestas velit. Sed risus metus, mollis vitae mauris a, ullamcorper posuere nunc. In hac habitasse platea dictumst. Nullam a feugiat turpis. Mauris egestas laoreet erat ut iaculis. Cras ultrices tortor in egestas lobortis. Curabitur ac congue elit.\r</p>\n<p>\r</p>\n<p>Curabitur vulputate lectus sed aliquam sodales. Proin lobortis odio a metus consectetur cursus. Vestibulum nisl lorem, suscipit id purus ac, malesuada rutrum orci. Curabitur non lacus vulputate, dapibus orci sit amet, viverra massa. Donec at malesuada eros. In convallis volutpat libero id consequat. Suspendisse eget enim finibus justo tempor sagittis eu in arcu. In fermentum in mi sed euismod. Duis semper, metus auctor placerat malesuada, elit libero interdum lacus, eu mattis lacus libero at tortor. Morbi gravida odio posuere magna consequat, et maximus sem lobortis. Donec placerat blandit massa in commodo.\r</p>\n<p>\r</p>\n<p>Nullam maximus enim porttitor consectetur interdum. Nunc dapibus dictum odio ac ultricies. Cras vel mi libero. Etiam id nunc et nisi auctor dapibus ut at elit. Duis aliquet turpis eu dui rutrum sollicitudin. Suspendisse sagittis eros lorem, ac ullamcorper lacus vehicula ac. Pellentesque at quam non odio ullamcorper pretium. Maecenas et mauris ut neque tempor mollis.\r</p>\n<p>\r</p>\n<p>Ut sed dolor in odio feugiat pellentesque tincidunt eget eros. Sed molestie semper lorem, a viverra metus. Donec ullamcorper eros eu ante pulvinar scelerisque. Aenean sollicitudin turpis rhoncus mauris vulputate egestas. Donec orci lacus, accumsan et sapien at, consectetur placerat nisl. Donec eu libero sit amet velit efficitur interdum. Donec porttitor nibh varius est consectetur, eget cursus nibh ullamcorper. Vestibulum mattis aliquet lorem pellentesque ornare. Suspendisse sodales ut sem in porta. Nullam blandit nunc vitae diam iaculis semper. Integer placerat, eros id lobortis lobortis, felis ex laoreet dui, sit amet aliquam nibh mauris interdum ex. Praesent ac tortor vehicula nulla molestie tristique. Nullam nisi odio, sagittis at maximus eget, facilisis quis risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus sit amet faucibus ligula. Fusce lacus massa, dignissim eleifend congue eu, viverra quis enim.</p>', 'news-3.jpg', 1, '2017-10-26 14:58:46', 2),
(4, 'Noticia 4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis elit rhoncus, ultrices libero sed, interdum purus. Donec vel ligula sit amet lorem malesuada cursus vitae id lectus. Nulla vulputate malesuada lectus. Nam tortor nisi, aliquam id nisi ut, placerat tincidunt enim. Curabitur dictum euismod pulvinar. Vestibulum sollicitudin ex urna, sed scelerisque ex tristique nec. Sed non hendrerit ipsum, at vehicula mauris. Vestibulum commodo mi sed cursus semper. Mauris in feugiat ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed porttitor magna ac dapibus mollis. Duis id augue quis quam commodo faucibus.\r</p>\n<p>\r</p>\n<p>Nullam egestas risus at mollis porta. In faucibus accumsan posuere. Nam cursus massa mauris, eu finibus leo ornare sed. Integer porttitor libero in elit faucibus, ac interdum tortor dignissim. Etiam luctus viverra metus, quis varius erat rutrum et. Integer leo turpis, dictum in ex ut, volutpat volutpat augue. Praesent mattis ante metus, in vulputate odio egestas quis. Nulla arcu tellus, gravida sed euismod aliquet, ultrices hendrerit sem. Nunc bibendum congue tellus, nec iaculis felis efficitur et. Nullam sagittis sodales porttitor. Donec aliquet orci eros, ut condimentum massa gravida nec. Mauris eu purus vel nibh vulputate dapibus nec non ligula.\r</p>\n<p>\r</p>\n<p>Mauris dapibus non neque ut ullamcorper. Donec sit amet neque non libero auctor ultrices. Morbi sit amet lacinia tellus, ut ultrices elit. Vivamus a semper dui, id pellentesque justo. Curabitur id aliquam est. Mauris interdum orci leo, nec tincidunt ligula ullamcorper quis. Sed nec erat ut massa rutrum interdum. Nam placerat rutrum diam id vehicula. Maecenas dictum lobortis eros vestibulum imperdiet. Aliquam a feugiat tellus. Sed viverra purus vel metus finibus, ac lobortis magna porttitor. Etiam lobortis rutrum nisi, et fermentum magna pellentesque non. Pellentesque ac quam scelerisque, dignissim lacus quis, semper orci. Cras vestibulum congue tellus eget venenatis.\r</p>\n<p>\r</p>\n<p>Praesent tincidunt turpis sit amet tempor placerat. Curabitur maximus, lectus sed malesuada egestas, est orci sollicitudin leo, vitae ornare nulla metus quis ex. Nullam consequat neque hendrerit leo laoreet venenatis. Ut eleifend a lorem sed aliquam. Nullam vel eros eu nisi dictum bibendum at sed sem. Proin aliquet est in neque aliquam interdum. Curabitur odio diam, bibendum euismod tortor nec, condimentum posuere justo. Etiam suscipit gravida tortor vel commodo. Curabitur convallis interdum turpis non scelerisque. Mauris consectetur ligula vitae rutrum tempus. Cras libero mi, sagittis quis enim sit amet, feugiat ultrices nulla. Aliquam accumsan finibus velit, non lobortis tellus pellentesque a. Mauris volutpat eros sit amet est volutpat maximus. Nullam a libero vehicula, tristique ligula sed, bibendum erat. Cras pharetra, est ut sollicitudin tempor, eros turpis iaculis lacus, et bibendum orci sapien vel dolor. Integer pretium leo vitae dictum sodales.\r</p>\n<p>\r</p>\n<p>Ut quis urna quis tortor auctor tristique ac fermentum sem. Vestibulum dignissim tempor dapibus. Maecenas eleifend aliquet venenatis. Cras sed elementum ipsum. Fusce feugiat nec enim in varius. Proin porttitor odio semper risus aliquam vulputate. Donec consequat tempor felis quis euismod.</p>', 'Koala.jpg', 0, '2017-11-07 15:49:03', 2),
(5, 'Aula Magna', '', 'Penguins.jpg', 1, '2017-11-29 15:20:38', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisa`
--

CREATE TABLE `pesquisa` (
  `ID` int(11) NOT NULL,
  `conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pesquisa`
--

INSERT INTO `pesquisa` (`ID`, `conteudo`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet, nibh quis dignissim lobortis, orci augue scelerisque turpis, id vulputate quam nunc mollis ipsum. Vestibulum sed dapibus tellus, non aliquam tellus. Curabitur et mauris cursus orci mollis elementum quis sit amet nibh. Nulla facilisi. Quisque vitae erat accumsan, congue ex et, vehicula ipsum. Nulla eu sodales ante. Sed in consequat libero, eu volutpat augue. Donec egestas massa a dolor malesuada facilisis sit amet fermentum dolor. Donec metus lectus, iaculis vel tincidunt a, vestibulum sit amet ante. Nulla at interdum dolor. Morbi rhoncus, est sit amet fermentum iaculis, dolor tellus cursus dui, id malesuada elit nulla et quam. Nam pulvinar urna quis nisl scelerisque, eget pulvinar ante sollicitudin. Fusce cursus et libero vitae volutpat. Sed aliquam non lacus quis luctus. Aenean eget lacus nec ipsum euismod tempus sed non ipsum.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `processo_seletivo`
--

CREATE TABLE `processo_seletivo` (
  `ID` int(11) NOT NULL,
  `conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `processo_seletivo`
--

INSERT INTO `processo_seletivo` (`ID`, `conteudo`) VALUES
(1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `apresentacao`
--
ALTER TABLE `apresentacao`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `corpo_docente`
--
ALTER TABLE `corpo_docente`
  ADD PRIMARY KEY (`ID_DOCENTE`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`ID_CURSO`);

--
-- Indexes for table `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`COD_DISCIPLINA`),
  ADD KEY `ID_CURSO` (`ID_CURSO`);

--
-- Indexes for table `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `extensao`
--
ALTER TABLE `extensao`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`ID_NOTICIA`),
  ADD UNIQUE KEY `TITULO` (`TITULO`),
  ADD KEY `CURSO` (`CURSO`);

--
-- Indexes for table `pesquisa`
--
ALTER TABLE `pesquisa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `processo_seletivo`
--
ALTER TABLE `processo_seletivo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `apresentacao`
--
ALTER TABLE `apresentacao`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `corpo_docente`
--
ALTER TABLE `corpo_docente`
  MODIFY `ID_DOCENTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `ID_CURSO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `COD_DISCIPLINA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `editor`
--
ALTER TABLE `editor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `extensao`
--
ALTER TABLE `extensao`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `ID_NOTICIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pesquisa`
--
ALTER TABLE `pesquisa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `processo_seletivo`
--
ALTER TABLE `processo_seletivo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD CONSTRAINT `disciplinas_ibfk_1` FOREIGN KEY (`ID_CURSO`) REFERENCES `cursos` (`ID_CURSO`);

--
-- Limitadores para a tabela `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`CURSO`) REFERENCES `cursos` (`ID_CURSO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
