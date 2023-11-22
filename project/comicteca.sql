-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-02-2022 a las 11:45:26
-- Versión del servidor: 8.0.28-0ubuntu0.20.04.3
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comicteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comic`
--

CREATE TABLE `comic` (
  `id` int NOT NULL,
  `titulo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `autor` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `estado` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `sinopsis` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `anyo` int DEFAULT NULL,
  `portada` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `capitulos` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `comic`
--

INSERT INTO `comic` (`id`, `titulo`, `autor`, `estado`, `sinopsis`, `anyo`, `portada`, `capitulos`) VALUES
(10054266, 'Batman', 'Bill Finger', 'Activo', '​Batman es una serie de cómics con el héroe homónimo de DC Comics. El personaje apareció por primera vez en Detective Comics #27, publicado en mayo de 1939. Batman resultó ser tan popular que empezó a realizarse una serie homónima y se publicó su primer número en la primavera de 1940.', 1940, 'img/Batman_Comic_Book_-_NARA_-_595420.jpg', 713),
(32921633, 'Valérian: agente espacio-temporal', 'Jean-Claude Mézières, Pierre Christin', 'Terminada', 'Originalmente la serie empieza ambientada en el siglo XXVIII, para entonces la humanidad ha descubierto los medios para viajar en el espacio-tiempo y su capital, Galaxity, es el centro del vasto imperio galáctico terrestre. Valerián y su compañera Laureline son agentes del \"Servicie Spatio-Temporel\" (Servicio Espacio-Temporal), encargado de neutralizar las posibles amenazas contra la Tierra y evitar las paradojas temporales. Sin embargo, desde la desaparición del imperio Galaxity en Los rayos de Hypsis, se convierten en un par de aventureros que ofrecen sus servicios a cualquiera que se los pueda permitir mientras buscan su hogar perdido. ', 1967, 'img/valerian.jpeg', 38),
(54346134, 'Jujutsu Kaisen', 'Gege Akutami', 'Activo', 'En Jujutsu Kaisen, todos los seres vivos emanan una energía llamada Energía Maldita (呪力, Juryoku), que brota de las emociones negativas que fluyen naturalmente por el cuerpo. Las personas normales no tienen la habilidad de controlar este flujo en sus cuerpos. Como resultado, liberan continuamente esta Energía Maldita, lo que da lugar a que surjan las Maldiciones (呪い, Noroi), una raza de seres espirituales cuyo principal deseo es el de hacerle daño a la humanidad.\r\n\r\nLos Hechiceros Jujutsu (呪術師, Jujutsushi, lit. \"Maestros de Técnicas Malditas\" o \"Chamanes\") son personas que tienen la habilidad de controlar el flujo de Energía Maldita en sus cuerpos, lo que les permite usarla a su antojo, así como reducir cuánto de ella se libera. Los Hechiceros y las Maldiciones de alto rango pueden refinar esta energía y utilizarla para ejecutar Técnicas Malditas (呪術式, Jujutsushiki), que suelen ser exclusivas del usuario particular o correr en su familia. Una forma avanzada de Técnica Maldita es la Expansión de Dominio (領域展開, Ryōiki Tenkai), técnica mediante la cual el usuario puede utilizar su Energía Maldita para construir una dimensión de bolsillo que cubre el área circundante y dentro de la cual todos los ataques son más fuertes. ', 2018, 'img/Jujutsu-Kaisen-1-esp.jpg', 18),
(61684625, 'One Piece', 'Eiichirō Oda', 'activo', 'La serie comienza con la ejecución de Gol D. Roger, un hombre conocido como El Rey de los Piratas (海賊王 Kaizoku-Ō). Justo antes de su muerte, Roger hace mención de su gran tesoro legendario, el One Piece (ワンピース『ひとつなぎの大秘宝』 Wan Pīsu) y que puede ser tomado por quien lo encuentre. Esto marca el inicio de una era conocida como la Gran Era Pirata (大海賊時代 Daikaizokujidai?). Como resultado, un sin número de piratas zarparon hacia el Grand Line con el objetivo de encontrarlo.', 1997, 'img/one-piece.jpg', 101),
(62665300, 'Watchmen', '	Alan Moore', 'Terminada', 'Watchmen se desarrolla en una realidad alternativa que refleja fielmente el mundo contemporáneo de la década de 1980. La principal diferencia es la presencia de superhéroes. El punto de divergencia se produce en el año 1938 y muestra cómo su existencia ha afectado o alterado de manera dramática los resultados de la Guerra de Vietnam y la presidencia de Richard Nixon.​ De acuerdo con el realismo de la serie, aunque los vigilantes disfrazados de Watchmen se denominan comúnmente \"superhéroes\", el único personaje que posee poderes sobrehumanos es el Dr. Manhattan.​ Cuya existencia le ha dado a Estados Unidos una ventaja estratégica sobre la Unión Soviética, lo cual ha aumentado las tensiones entre las dos naciones. Con el tiempo, los superhéroes se vuelven impopulares entre la policía y el público, causando la promulgación de leyes en 1977 que los prohíben. Mientras muchos héroes están retirados, el Dr. Manhattan y el Comediante operan como agentes aprobados por el gobierno, y Rorschach continúa operando fuera de la ley. ', 1986, 'img/245px-Watchmen-cover.jpg', 12),
(63472573, 'Ultimate Spider-Man', 'Brian Michael Bendis', 'Terminado', 'Ultimate Spider-Man es un comic book publicado en el 2000 por Marvel Comics, que narra las aventuras de Spider-Man en una versión moderna, para ganar una audiencia más joven que a veces se dejaba intimidar por sus, entonces, casi cuarenta años de publicación. ', 1999, 'img/ultimate-spiderman.jpg', 160),
(78070461, 'V de Vendetta', 'Alan Moore', 'Terminada', 'La historia está ambientada en Gran Bretaña durante un futuro distópico cercano y tras una guerra nuclear parcial, con gran parte del mundo destruido. En este futuro, un partido fascista ostenta el poder en el Reino Unido. Un misterioso revolucionario apodado \"V\", oculto tras una máscara de Guy Fawkes, empieza una elaborada y violenta campaña con el fin de derrocar el gobierno e incitar a la población a adoptar un modelo político-social diferente. ', 1980, 'img/V_for_Vendetta_comic_books.jpg', 10),
(85729016, 'Kimetsu no yaiba', 'Gotouge Koyoharu', 'Terminado', 'Desde la antigüedad, abundan los rumores de demonios devoradores de hombres que acechan en el bosque. Debido a esto, la gente del pueblo nunca se aventura a salir de noche. Cuenta la leyenda que un asesino de demonios también deambula por la noche, cazando a estos demonios sedientos de sangre.Desde la muerte de su padre, Tanjirou se ha encargado de mantener a su madre y a sus cinco hermanos. Aunque sus vidas pueden verse endurecidas por la tragedia, han encontrado la felicidad. Pero ese efímero calor se rompe un día cuando Tanjirou encuentra a su familia asesinada y el único sobreviviente, su hermana Nezuko, se convierte en un demonio. Agregando a este dolor, un cazador de demonios llamado Tomioka Giyuu llegó y estaba a punto de acabar con Nezuko, pero para su sorpresa, ella y Tanjiro comenzaron a protegerse el uno al otro. Al ver esta rareza y las prometedoras habilidades de lucha de Tanjiro, Giyuu decide enviarlos a su antiguo mentor para que los entrene.Así comienza la vida de Tanjiro como un cazador de demonios, comprometido en una búsqueda para curar a su hermana y encontrar al que asesinó a toda su familia.', 2016, 'img/kimetsu.jpeg', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generocomic`
--

CREATE TABLE `generocomic` (
  `idg` int NOT NULL,
  `idcomic` int NOT NULL,
  `idgenero` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `generocomic`
--

INSERT INTO `generocomic` (`idg`, `idcomic`, `idgenero`) VALUES
(19, 73979453, 'aventuras'),
(20, 73979453, 'belico'),
(22, 85729016, 'fantasia'),
(23, 85729016, 'comedia'),
(24, 10054266, 'ciencia ficcion'),
(25, 10054266, 'policiaco'),
(12283860, 63472573, 'comedia'),
(15523123, 32921633, 'ciencia ficcion'),
(17910222, 78070461, 'ciencia ficcion'),
(32652229, 61684625, 'comedia'),
(40908309, 63472573, 'policiaco'),
(47711925, 63472573, 'belico'),
(52337937, 54346134, 'aventuras'),
(60828869, 61684625, 'fantasia'),
(67091878, 63472573, 'ciencia ficcion'),
(71734473, 63472573, 'fantasia'),
(72732172, 63472573, 'aventuras'),
(98964086, 54346134, 'fantasia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id` int NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `nombre`) VALUES
(1, 'aventuras'),
(2, 'belico'),
(3, 'ciencia ficcion'),
(4, 'comedia'),
(5, 'deportivo'),
(6, 'fantastico'),
(7, 'historico'),
(8, 'policiaco'),
(9, 'romance'),
(10, 'terror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`username`, `email`, `password`, `admin`) VALUES
('admin', 'admin@gmail.com', '336e3d863781a03fcab25c8091066300', 'si'),
('Carlos', 'calor@gmail.com', '23e629c8baef73678739970099917f2e', 'no');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comic`
--
ALTER TABLE `comic`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `generocomic`
--
ALTER TABLE `generocomic`
  ADD PRIMARY KEY (`idg`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
