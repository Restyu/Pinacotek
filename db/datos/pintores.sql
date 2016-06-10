-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-06-2016 a las 10:21:30
-- Versión del servidor: 5.6.29
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pinacotek`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pintores`

--
-- Volcado de datos para la tabla `pintores`
--

INSERT INTO `pintores` (`id`, `nombre`, `apellido`, `nacimiento`, `muerte`, `descripcion`, `pais`, `ciudad`, `foto`, `creado`, `editado`) VALUES
(12, 'Velázquez', 'Velázquez, Diego Rodríguez de Silva y', 1599, 1660, 'Adoptó el apellido de su madre, según uso frecuente en Andalucía, firmando &quot;Diego Velázquez&quot; o &quot;Diego de Silva Velázquez&quot;. Estudió y practicó el arte de la pintura en su ciudad natal hasta cumplir los veinticuatro años, cuando se trasladó con su familia a Madrid y entró a servir al rey desde entonces hasta su muerte en 1660. Gran parte de su obra iba destinada a las colecciones reales y pasó luego al Prado, donde se conserva. La mayoría de los cuadros pintados en Sevilla, en cambio, ha ido a parar a colecciones extranjeras, sobre todo a partir del siglo XIX. A pesar del creciente número de documentos que tenemos relacionados con la vida y obra del pintor, dependemos para muchos datos de sus primeros biógrafos. Francisco Pacheco, maestro y después suegro de Velázquez, en un tratado terminado en 1638 y publicado en 1649, da importantes fragmentos de información acerca d', 'España', 'Sevilla', 'http://localhost:8080/pinacotek/admin/imagenes/pintores/Velázquez.jpg', '2016-06-09 15:32:14', NULL),
(14, 'El Bosco', 'El Bosco', 1450, 1516, 'Hieronymus van Aeken Bosch. Hijo de Antonio van Aken y nieto de Jan van Aken, ambos pintores. Debió de aprender el oficio en el taller de su padre, aunque no lo hereda al tener un hermano mayor con la misma dedicación. Aparece por vez primera vinculado a su padre cuando la cofradía de Nuestra Señora encarga un retablo (1475-1476) al escultor Adrian van Wesel para una capilla en la colegiata de la ciudad. Antes de junio de 1481 casa con Aleyt, que, al parecer, disfrutaba de buena situación económica. En 1486 es admitido en la mencionada cofradía dedicada a la Virgen María, importante y de élite, con miembros en diversas ciudades de los Países Bajos. ', 'Holanda', 'S&#039;Hertogenbosch', 'http://localhost:8080/pinacotek/admin/imagenes/pintores/El Bosco.jpg', '2016-06-09 15:38:45', NULL),
(15, 'El Greco', 'El Greco', 1541, 1614, 'Pintor español de origen griego. Nacido en la capital de la isla de Creta, territorio de la República de Venecia, en el seno de una familia griega, pero probablemente de religión católica más que ortodoxa, y cuyos miembros trabajaban como colaboradores del poder colonial, se formó como pintor de iconos siguiendo los dictados de la tradición artística tardobizantina, y asimilando parcialmente gracias al uso de grabados italianos algunas de las fórmulas del renacimiento italiano, que incorporó de manera aislada. En 1563 era ya maestro de pintura y en 1566 solicitaba permiso para que se le tasara un icono de la Pasión, para poder venderlo en lotería; en 1567 pasó a Venecia, donde residió hasta 1570', 'Grecia', 'Creta', 'http://localhost:8080/pinacotek/admin/imagenes/pintores/El Greco.jpg', '2016-06-09 15:41:58', NULL),
(16, 'Tintoretto', 'Tintoretto, Jacopo Robusti', 1518, 1594, 'La carrera de Tintoretto transcurrió enteramente en su Venecia natal, donde trabajó sobre todo para comitentes locales, especialmente para las cofradías religiosas conocidas como scuole. Durante un corto periodo de tiempo fue discípulo de Tiziano (ca. 1485/90-1576) independizándose como maestro pintor hacia 1540, si bien no hay consenso en relación con las obras que realizó durante esa década. Sin embargo, el Milagro de san Marcos liberando al esclavo (1548; Venecia, Accademia), pintado por Tintoretto para la Scuola di San Marco, constituyó un importante progreso en cuanto a intensidad dramática y emocional, marcando un punto de inflexión en su obra.', 'Italia', 'Venecia', 'http://localhost:8080/pinacotek/admin/imagenes/pintores/Tintoretto.jpg', '2016-06-09 15:44:26', NULL),
(17, 'Flandes', 'Flandes, Juan de', 1465, 1519, 'Pintor flamenco, que trabajó al servicio de Isabel la Católica y a la muerte de la reina en 1504 permaneció realizando su labor en tierras castellanas. Conocido como Juan de Flandes o Juan Flamenco desde que llegó a la corte de Castilla en 1496, han sido infructuosos cuantos intentos se han hecho para asociarle a algunos de los pintores flamencos, cuyo estilo no se conoce, denominados Juan como él. Y también se ignora todo lo relativo a su formación; sin embargo, gracias al análisis de sus obras, se ha podido constatar que, aunque debió conocer las pinturas de Hugo van der Goes, Dirk Bouts o Justo de Gante, su estilo depende del de la escuela de Brujas en esos años de la década de 1490', 'Holanda', 'Sur de los Países Bajos', 'http://localhost:8080/pinacotek/admin/imagenes/pintores/Flandes.jpg', '2016-06-09 15:47:12', NULL),
(18, 'Durero', 'Durero, Alberto', 1471, 1528, 'Pintor y grabador alemán. Hijo de un orfebre procedente de Hungría que había emigrado a la ciudad imperial de Núremberg en 1455, donde se estableció y casó en 1467. Este origen familiar, así como el ambiente cultural y artístico de Núremberg, explican lo precoz de la vocación artística de Durero. Recordemos que su familia vivía en las inmediaciones de la casa de los Pirckheimer, uno de los cuales, el humanista Willibald, sería uno de los grandes amigos y valedores del artista, y Michael Wolgemut, el pintor con el que Alberto dio los primeros pasos en su arte. Otro de los hechos clave en la formación del artista lo constituyen sus viajes de juventud, el primero de ellos realizado en 1489', 'Alemania', 'Nüremberg', 'http://localhost:8080/pinacotek/admin/imagenes/pintores/Durero.jpg', '2016-06-09 15:49:24', NULL),
(19, 'Rubens', 'Rubens, Pedro Pablo', 1577, 1640, 'Ningún pintor europeo del siglo XVII aunó como lo hizo Rubens talento artístico, éxito social y económico y un alto nivel cultural. Aunque su actividad se centró en la pintura, también realizó numerosos diseños para estampas, tapices, arquitectura, esculturas y objetos decorativos. Su obra, muy abundante, ofrece gran versatilidad temática, e incluye pinturas de temas mitológicos, religiosos y de historia, retratos y paisajes. Su pintura es grandilocuente, pero también sabe ser delicada, y muestra gran habilidad técnica y sensibilidad hacia los ritmos de la composición y la psicología de los personajes. El éxito que disfrutó Rubens durante su vida se debe tanto a la capacidad de su arte para', 'Belgica', 'Amberes', 'http://localhost:8080/pinacotek/admin/imagenes/pintores/Rubens.jpg', '2016-06-09 15:52:57', NULL),
(20, 'Goya', 'Goya y Lucientes, Francisco de', 1746, 1828, 'Goya nació accidentalmente en Fuendetodos, pueblo de su familia materna. Braulio José Goya, dorador, de ascendencia vizcaína, y Gracia Lucientes, de familia campesina acomodada, residían en Zaragoza, donde contrajeron matrimonio en 1736. Francisco fue el cuarto de seis hermanos: Rita (1737); Tomás (1739), dorador también, citado a veces como pintor; Jacinta (1743); Mariano (1750), muerto en la infancia, y Camilo (1753), eclesiástico y capellán desde 1784 de la colegiata de Chinchón.\r\nTras la escuela, que la tradición acepta con reservas como la de los padres escolapios de Zaragoza, entró en el taller de José Luzán (1710-1785), hijo también de un dorador vecino de los Goya, de formación napolitana y vinculado a la Academia de Dibujo.', 'España', 'Zaragoza', 'http://localhost:8080/pinacotek/admin/imagenes/pintores/Goya.jpg', '2016-06-09 15:55:51', NULL),
(21, 'Jacob', 'Jordaens, Jacob', 1593, 1678, 'Pintor, dibujante y grabador flamenco. Hijo de un pañero, en 1607 entró como aprendiz en el taller de Adam van Noort, destacado pintor de figuras que había sido uno de los maestros de Rubens. En 1615 ingresó en el Gremio de San Lucas de Amberes como maestro pintor al temple y a la aguada. En 1616 se casó con la hija mayor de Van Noort, Catharina; de ese año data su primera obra firmada y fechada, La Adoración de los pastores (Metropolitan Museum of Art, Nueva York). Al año siguiente participó junto a Rubens, Van Dyck y todos los pintores relevantes de la ciudad en la serie de «Los misterios del Rosario» pintada para la iglesia dominica de San Pablo de Amberes. En 1628 Van Dyck, Rubens y él', 'Belgica', 'Amberes', 'http://localhost:8080/pinacotek/admin/imagenes/pintores/Jacob2.jpg', '2016-06-09 16:00:21', NULL);

--
-- Índices para tablas volcadas
--
