-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2020 a las 13:05:41
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registrations`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` text NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `hash`, `active`) VALUES
(1, 'sdfsdf', '', 'sdfds', '74bba22728b6185eec06286af6bec36d', 0),
(2, 'sdfsdf', '', 'sdfds', 'b7b16ecf8ca53723593894116071700c', 0),
(3, 'sdfsdf', '', 'sdfds', '8b6dd7db9af49e67306feb59a8bdc52c', 0),
(4, 'sdfsdf', '', 'sdfds', '7f1171a78ce0780a2142a6eb7bc4f3c8', 0),
(5, 'sdfsdf', '', 'sdfds', '559cb990c9dffd8675f6bc2186971dc2', 0),
(6, 'sdfsdf', '', 'sdfds', '01f78be6f7cad02658508fe4616098a9', 0),
(7, 'sdfsdf', '', 'sdfds', '8fe0093bb30d6f8c31474bd0764e6ac0', 0),
(8, 'sdfsdf', '', 'sdfds', '06eb61b839a0cefee4967c67ccb099dc', 0),
(9, 'sdfsdf', 'b299ad862b6f12cb57679f0538eca514', 'sdfds', '6aca97005c68f1206823815f66102863', 0),
(10, 'Sergio', '50f3f8c42b998a48057e9d33f4144b8b', 'sergioa04@gmail.com', '0ff39bbbf981ac0151d340c9aa40e63e', 0),
(11, 'Sergio', '69d658d0b2859e32cd4dc3b970c8496c', 'sergioa04@gmail.com', '149e9677a5989fd342ae44213df68868', 0),
(12, 'Sergio', '9246444d94f081e3549803b928260f56', 'sergioa04@gmail.com', '192fc044e74dffea144f9ac5dc9f3395', 0),
(13, 'Sergio', '7b1ce3d73b70f1a7246e7b76a35fb552', 'sergioa04@gmail.com', '069059b7ef840f0c74a814ec9237b6ec', 0),
(14, 'Sergio', '640258597cbc50037072712f964cf5d8', 'sergioa04@gmail.com', 'bf62768ca46b6c3b5bea9515d1a1fc45', 0),
(15, 'Sergio', '856fc81623da2150ba2210ba1b51d241', 'sergioa04@gmail.com', '9be40cee5b0eee1462c82c6964087ff9', 0),
(16, 'Sergio', 'e034fb6b66aacc1d48f445ddfb08da98', 'sergioa04@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(17, 'Sergio', 'ae87a54e183c075c494c4d397d126a66', 'sergioa04@gmail.com', '0deb1c54814305ca9ad266f53bc82511', 0),
(18, 'Sergio', 'e52ad5c9f751f599492b4f087ed7ecfc', 'sergioa04@gmail.com', '39461a19e9eddfb385ea76b26521ea48', 0),
(19, 'Sergio', '1ec3e7af38e33222bde173fecaef6bfa', 'sergioa04@gmail.com', 'f29c21d4897f78948b91f03172341b7b', 0),
(20, '', '70fc5f043205720a49d973d280eb83e7', '', 'c20ad4d76fe97759aa27a0c99bff6710', 0),
(21, '', '3e60e09c222f206c725385f53d7e567c', '', '8757150decbd89b0f5442ca3db4d0e0e', 0),
(22, '', '4ae1e2b07ecf6c799b91ed45e95278b8', '', 'd840cc5d906c3e9c84374c8919d2074e', 0),
(23, '', 'fc325d4b598aaede18b53dca4ecfcb9c', '', '9cf81d8026a9018052c429cc4e56739b', 0),
(24, '', 'a92c274b8be496fb05d95033552eeddd', '', '2823f4797102ce1a1aec05359cc16dd9', 0),
(25, '', 'a1d7311f2a312426d710e1c617fcbc8c', '', 'd34ab169b70c9dcd35e62896010cd9ff', 0),
(26, '', '4d6e4749289c4ec58c0063a90deb3964', '', '4b6538a44a1dfdc2b83477cd76dee98e', 0),
(27, '', 'be1bc7997695495f756312886f566110', '', '23ce1851341ec1fa9e0c259de10bf87c', 0),
(28, '', 'ca3ec598002d2e7662e2ef4bdd58278b', '', '6f2268bd1d3d3ebaabb04d6b5d099425', 0),
(29, '', '93fb9d4b16aa750c7475b6d601c35c2c', '', '084b6fbb10729ed4da8c3d3f5a3ae7c9', 0),
(30, '', 'aeefb050911334869a7a5d9e4d0e1689', '', 'a666587afda6e89aec274a3657558a27', 0),
(31, '', 'f4aa0dd960521e045ae2f20621fb4ee9', '', '8b5040a8a5baf3e0e67386c2e3a9b903', 0),
(32, '', '020bf2c45e7bb322f89a226bd2c5d41b', '', '54a367d629152b720749e187b3eaa11b', 0),
(33, '', '4b29fa4efe4fb7bc667c7b301b74d52d', '', 'b2eb7349035754953b57a32e2841bda5', 0),
(34, '', 'fc325d4b598aaede18b53dca4ecfcb9c', '', 'f387624df552cea2f369918c5e1e12bc', 0),
(35, '', 'bb702465f3c3141263ddd046c9585b27', '', '9431c87f273e507e6040fcb07dcb4509', 0),
(36, '', '96a93ba89a5b5c6c226e49b88973f46e', '', '4e732ced3463d06de0ca9a15b6153677', 0),
(37, '', '7a6a74cbe87bc60030a4bd041dd47b78', '', 'cee631121c2ec9232f3a2f028ad5c89b', 0),
(38, '', '56577889b3c1cd083b6d7b32d32f99d5', '', 'a8f15eda80c50adb0e71943adc8015cf', 0),
(39, '', '66e8ba8216a1e152d72653d99a4f03ab', '', '45c48cce2e2d7fbdea1afc51c7c6ad26', 0),
(40, '', '00b76fddeaaa7d8c2c43d504b2babd8a', '', '61b4a64be663682e8cb037d9719ad8cd', 0),
(41, '', '35d02fef7d9a24e237057162abab82b7', '', 'fa7cdfad1a5aaf8370ebeda47a1ff1c3', 0),
(42, '', 'f3144cefe89a60d6a1afaf7859c5076b', '', 'b3967a0e938dc2a6340e258630febd5a', 0),
(43, '', '7501e5d4da87ac39d782741cd794002d', '', '8e98d81f8217304975ccb23337bb5761', 0),
(44, '', '06964dce9addb1c5cb5d6e3d9838f733', '', '44f683a84163b3523afe57c2e008bc8c', 0),
(45, '', 'f3175210f90bfc7ea82901db0ef7452f', '', '8613985ec49eb8f757ae6439e879bb2a', 0),
(46, '', '30f8f6b940d1073d8b6a5eebc46dd6e5', '', 'c45147dee729311ef5b5c3003946c48f', 0),
(47, '', '00e26af6ac3b1c1c49d7c3d79c60d000', '', 'c4015b7f368e6b4871809f49debe0579', 0),
(48, '', 'b035d6563a2adac9f822940c145263ce', '', '08c5433a60135c32e34f46a71175850c', 0),
(49, '', '90525e70b7842930586545c6f1c9310c', '', 'e97ee2054defb209c35fe4dc94599061', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
