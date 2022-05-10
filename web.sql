-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Nov-2021 às 22:24
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `web`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(90) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `data_de_nascimento` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `genero` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `data_de_nascimento`, `email`, `genero`) VALUES
(19, 'William César dos Santos', '', '', '0000-00-00', '', 'M'),
(22, '', '', '', '0000-00-00', '', 'M'),
(23, 'fg', '', '', '0000-00-00', '', 'M'),
(24, 'William César dos Santos', '', '', '0000-00-00', 'william_cesar_santos@hotmail.c', 'M'),
(25, 'William César dos Santos', '', '', '0000-00-00', 'william_cesar_santos@hotmail.c', 'M'),
(26, 'Lidiane ', '2222222222', '99999999', '0000-00-00', 'william_cesar_santos@hotmail.c', 'F'),
(27, 'Lidiane ', '33333333', '99999999', '0000-00-00', 'lidi@lidigmail.', 'F'),
(28, 'William César dos Santos', '', '', '0000-00-00', 'william_cesar_santos@hotmail.c', 'M');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empréstimos`
--

CREATE TABLE `empréstimos` (
  `id` int(11) NOT NULL,
  `Nome_do_produto` varchar(100) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `data_do_empréstimo` date NOT NULL,
  `data_da_devolução` date NOT NULL,
  `Nome_do_destinatário` varchar(100) NOT NULL,
  `Contato_do_destinatário` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `histórico`
--

CREATE TABLE `histórico` (
  `id` int(11) NOT NULL,
  `nome do produto` varchar(90) NOT NULL,
  `data do empréstimo` date NOT NULL,
  `data da devolução` date NOT NULL,
  `nome do destinatário` varchar(90) NOT NULL,
  `contato do destinatário` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mercadorias`
--

CREATE TABLE `mercadorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(90) NOT NULL,
  `tipo de produto` varchar(100) NOT NULL,
  `descrição` varchar(200) NOT NULL,
  `estado do produto` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`) VALUES
(1, 'lidi@lidi', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `empréstimos`
--
ALTER TABLE `empréstimos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `histórico`
--
ALTER TABLE `histórico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `mercadorias`
--
ALTER TABLE `mercadorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `empréstimos`
--
ALTER TABLE `empréstimos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `histórico`
--
ALTER TABLE `histórico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mercadorias`
--
ALTER TABLE `mercadorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
