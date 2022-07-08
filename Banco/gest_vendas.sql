-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jul-2022 às 20:37
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gest_vendas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `senha`) VALUES
(4, 'Jhon Amorim', '8224875051bff7b4891e537cca2410cd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataVenda` date NOT NULL,
  `tipoVenda` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `protocolo` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusCert` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoDesc` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusVenda` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id`, `nome`, `dataVenda`, `tipoVenda`, `protocolo`, `statusCert`, `produto`, `tipoDesc`, `valor`, `statusVenda`) VALUES
(144, 'Jhon Amorim', '2022-07-08', 'Venda', '000055', 'APROVADO', 'JAVASCRIPT + REACT', 'VENDA NORMAL', '229,00', 'PAGO'),
(145, 'Jhon Macc', '2022-06-08', 'Venda Assinatura', '000056', 'APROVADO', 'CURSO HTML+CSS & BOOTSTRAP', '10% DE DESCONTO', '89.10', 'A RECEBER'),
(146, 'Jhon Amorim 4', '2022-07-08', 'Venda', '0000077', 'APROVADO', 'JAVASCRIPT + REACT', 'DESCONTO MANUAL', '229,00', 'PAGO'),
(147, 'Jhon Amorim 5', '2022-07-08', 'Venda', '00000097', 'APROVADO', 'E-CNPJ A3 DE 1 ANO EM CARTÃO', 'VENDA GRATUITA', 'VENDA GRATUITA', 'PAGO'),
(148, 'Jhon Amorim 2', '2022-05-04', 'Venda', '000000332', 'APROVADO', 'CURSO HTML+CSS & BOOTSTRAP', 'VENDA NORMAL', '99,00', 'PAGO'),
(149, 'Jhon Amorim 3', '2022-06-09', 'Venda', '0000014', 'APROVADO', 'CURSO PHYTON 3 MESES', 'VENDA NORMAL', '95,00', 'PAGO');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
