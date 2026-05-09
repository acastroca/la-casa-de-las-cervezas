-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-05-2026 a las 18:47:56
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cervezas_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidades`
--

CREATE TABLE `comunidades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `historia` text NOT NULL,
  `imagen_logo` varchar(255) DEFAULT NULL,
  `pos_x` int(11) NOT NULL DEFAULT 0,
  `pos_y` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comunidades`
--

INSERT INTO `comunidades` (`id`, `nombre`, `slug`, `historia`, `imagen_logo`, `pos_x`, `pos_y`, `created_at`, `updated_at`) VALUES
(1, 'Andalucía', 'andalucia', 'Cruzcampo fue fundada en 1904 en Sevilla por los hermanos Roberto y Tomás Osborne, quienes buscaban crear una cerveza adaptada al clima cálido del sur. Instalaron su fábrica en el barrio de Nervión, junto a un templete conocido como la Cruz del Campo, que dio nombre y alma a la marca. Su innovación clave fue el uso de una cepa de levadura exclusiva que aportaba ese frescor tan característico. Con el tiempo, la fábrica original se transformó en un centro de cultura cervecera, consolidando a la marca como un pilar de la identidad social andaluza y un referente en la hostelería de toda España.', 'logos/andalucia.webp', 40, 62, NULL, NULL),
(2, 'Aragón', 'aragon', 'Ambar es la marca insignia de La Zaragozana, una cervecera fundada en 1900 en el barrio de San José, Zaragoza. La empresa nació por iniciativa de un grupo de amigos y empresarios aragoneses, liderados por Ladislao Goizueta, con el objetivo de dotar a la ciudad de una fábrica de cerveza de calidad que aprovechara las excelentes aguas del río Ebro y la abundancia de cebada de la región. Lo que hace única a esta marca es que su producción principal sigue vinculada a su recinto histórico, manteniendo procesos tradicionales como el tostado de su propia malta, lo que le otorga ese sabor equilibrado y carácter aragonés tan reconocido.', 'logos/aragon.webp', 54, 31, NULL, NULL),
(3, 'Asturias', 'asturias', 'En Asturias, la cultura cervecera ha convivido históricamente con la sidra, pero marcas como Mahou lograron una implantación profunda durante el siglo XX. La llegada de la cerveza industrial a ciudades como Gijón y Oviedo respondió al crecimiento de la minería y la siderurgia, sectores donde los trabajadores demandaban una bebida refrescante tras las duras jornadas. Aunque no contó con una fábrica de escala nacional propia durante décadas, la región desarrolló un paladar exigente, integrando la cerveza en su rica gastronomía de montaña y mar. Hoy, Asturias vive un renacimiento con microcervecerías que utilizan el agua pura de sus picos para crear recetas únicas.', 'logos/asturias.webp', 30, 12, NULL, NULL),
(4, 'Baleares', 'baleares', 'Rosa Blanca fue fundada en 1927 en Palma de Mallorca por la familia Verdera, con la visión de ofrecer una cerveza de la tierra que acompañara el floreciente dinamismo de las islas. Su elaboración se distinguía por el uso de ingredientes locales y un proceso de baja fermentación que resultaba en una cerveza equilibrada y muy aromática. Durante los años 50 y 60, se convirtió en el icono de las terrazas mallorquinas, siendo testigo directo del boom turístico que transformó el archipiélago. Tras un periodo de ausencia, la marca ha sido recuperada para reivindicar el patrimonio industrial insular y su vínculo inseparable con el estilo de vida mediterráneo.', 'logos/baleares.webp', 73, 43, NULL, NULL),
(5, 'Canarias', 'canarias', 'Tropical nació en 1924 en Las Palmas de Gran Canaria fruto del empeño de empresarios locales por crear una industria propia que no dependiera de las importaciones peninsulares. Su creación marcó un hito en el abastecimiento del archipiélago, adaptando la receta a las temperaturas suaves y constantes de las islas. Con el tiempo, se fusionó con la Compañía Cervecera de Canarias (CCC), uniendo fuerzas con Dorada de Tenerife. Esta dualidad representa el orgullo de cada provincia, manteniendo una conexión emocional muy fuerte con el consumidor canario. Sus fábricas han sido motor de empleo y modernización técnica en un entorno geográfico único y aislado.', 'logos/canarias.webp', 17, 83, NULL, NULL),
(6, 'Cantabria', 'cantabria', 'La Cervecera del Norte fundó Estrella del Norte en 1912 en Santander, aprovechando la pujanza portuaria de la ciudad y su conexión comercial con Europa. En una época de gran expansión industrial, la fábrica se convirtió en un símbolo de la modernidad cántabra, compitiendo con las grandes marcas del país. Durante décadas, sus instalaciones en el centro de la ciudad fueron un punto neurálgico para la economía local. Aunque la concentración del mercado llevó al cierre de la planta original, la memoria de Estrella del Norte sigue viva como el primer gran proyecto cervecero de Cantabria, sentando las bases para la actual y vibrante escena de cervezas artesanales de la región.', 'logos/cantabria.webp', 43, 11, NULL, NULL),
(7, 'Castilla y León', 'castilla-y-leon', 'Castilla y León, el gran granero de España, ha sido históricamente la proveedora de la mejor cebada y lúpulo para todo el país. Aunque la región no consolidó una gran marca industrial única en el siglo XX, ciudades como Valladolid o León albergaron fábricas locales que abastecían a las ferias y mercados castellanos. Su identidad cervecera es profundamente agrícola; el cultivo del lúpulo en la provincia de León, por ejemplo, es responsable de casi toda la producción nacional. En los últimos años, esta herencia se ha transformado en un sector artesanal puntero, donde los maestros cerveceros locales elaboran productos de alta gama vinculados directamente a la pureza de sus campos de cereal.', 'logos/castilla-y-leon.webp', 35, 26, NULL, NULL),
(8, 'Castilla-La Mancha', 'castilla-la-mancha', 'La tradición cervecera de Castilla-La Mancha está intrínsecamente ligada a su papel como potencia agrícola. Durante gran parte del siglo XX, el mercado manchego fue territorio de las grandes cerveceras madrileñas y andaluzas, pero la región siempre fue el origen de la materia prima: la malta de cebada. El paisaje de llanuras y molinos ha sido el escenario de una evolución que, en el siglo XXI, ha dado lugar a proyectos pioneros de producción integral. Hoy, la comunidad destaca por albergar algunas de las fábricas más tecnológicamente avanzadas de Europa, uniendo la tradición del campo con una capacidad industrial capaz de abastecer a millones de consumidores bajo estándares de sostenibilidad.', 'logos/castilla-la-mancha.webp', 45, 45, NULL, NULL),
(9, 'Cataluña', 'cataluna', 'Estrella Damm nació en 1876 de la mano de August Kuentzmann Damm y su esposa Melanie, quienes emigraron desde Alsacia huyendo de la guerra franco-prusiana. Se instalaron en Barcelona para elaborar una cerveza adaptada al gusto mediterráneo, más ligera que las centroeuropeas. El éxito de su receta original, que incluía arroz para suavizar el sabor, permitió la construcción de La Bohemia, una fábrica monumental que marcó el paisaje industrial de la ciudad. Hoy, tras once generaciones, sigue siendo una empresa independiente que abandera el estilo de vida mediterráneo y el compromiso con la cebada de proximidad y el sector cultural catalán.', 'logos/cataluña.webp', 67, 24, NULL, NULL),
(10, 'Comunidad Valenciana', 'comunidad-valenciana', 'Turia nació en 1935 en Valencia gracias al espíritu emprendedor de ocho amigos que decidieron unir fuerzas para fabricar una cerveza con carácter propio. Tras el parón de la Guerra Civil, la marca resurgió con fuerza en los años 40, convirtiéndose en el refresco predilecto de las barracas y las fiestas populares. Su producto estrella, la Turia Märzen, destaca por su color tostado y notas de cereal, una rareza en un mercado dominado por las cervezas rubias. Este perfil distintivo ha permitido a la marca sobrevivir a los cambios de moda, siendo hoy un emblema de la revitalización del diseño y la gastronomía valenciana, muy ligada a la huerta y el clima mediterráneo.', 'logos/valencia.webp', 55, 45, NULL, NULL),
(11, 'Extremadura', 'extremadura', 'Extremadura es una región donde la cerveza ha sabido ganar terreno gracias a su extraordinaria capacidad de producción cerealista. Históricamente, el consumo extremeño dependía de las marcas colindantes de Madrid o Andalucía, pero la identidad local se ha forjado a través de la calidad de sus materias primas. En las vegas del Guadiana se cultiva una cebada de excelente calidad que nutre a la industria nacional. En las últimas décadas, este potencial ha cristalizado en el surgimiento de marcas locales que apuestan por ingredientes autóctonos, como la bellota o la miel, creando una cultura cervecera propia que marida perfectamente con su reconocida despensa gastronómica de ibéricos y quesos.', 'logos/extremadura.webp', 29, 48, NULL, NULL),
(12, 'Galicia', 'galicia', 'Estrella Galicia fue fundada en 1906 en A Coruña por José María Rivera Corral tras su regreso de México, donde descubrió el potencial del sector cervecero. Bajo el nombre La Estrella de Galicia, el proyecto nació con un fuerte carácter familiar y una obsesión por la calidad de las materias primas, especialmente el agua de la ciudad herculina. A diferencia de otros grupos, la familia Rivera ha mantenido la independencia de la compañía durante más de un siglo, convirtiendo a la marca en un símbolo del orgullo gallego. Su resistencia a la estandarización industrial le ha permitido conservar un sabor auténtico, intenso y muy apreciado, extendiendo su prestigio mucho más allá de las fronteras gallegas.', 'logos/galicia.webp', 21, 16, NULL, NULL),
(13, 'La Rioja', 'la-rioja', 'La Rioja es mundialmente conocida por su vino, pero su relación con la cerveza es una historia de convivencia y complementariedad. Durante el siglo XX, el consumo cervecero fue ganando peso como una alternativa refrescante en los meses de verano y en el contexto del tapeo logroñés. Al no contar con una gran planta industrial histórica, la región se ha especializado en el siglo XXI en la creación de cervezas de autor. Estos proyectos utilizan la sabiduría de los maestros bodegueros riojanos, aplicando técnicas de crianza en barrica y selección de levaduras para crear productos que borran la línea entre la viticultura y la cervecería, aportando un valor gastronómico único.', 'logos/la-rioja.webp', 46, 21, NULL, NULL),
(14, 'Madrid', 'madrid', 'Mahou fue fundada en 1890 en la calle Amaniel de Madrid por los hijos de Casimiro Mahou, un emprendedor de origen francés que sentó las bases de un imperio industrial. La fábrica original no solo producía cerveza, sino también pinturas y hielo, reflejando el dinamismo de la capital en pleno cambio de siglo. La marca se convirtió rápidamente en el alma de las tabernas madrileñas, innovando con la introducción de los primeros barriles de aluminio en España. Su historia es la historia de la modernización de Madrid, pasando de ser un negocio local a liderar el mercado nacional, siempre ligada a la cultura del encuentro, la vida nocturna y el castizo tapeo madrileño.', 'logos/madrid.webp', 40, 37, NULL, NULL),
(15, 'Murcia', 'murcia', 'Estrella de Levante fue fundada en 1963 en la pedanía murciana de Espinardo por un grupo de empresarios que vieron la necesidad de crear una cerveza local para el sureste español. Su nacimiento coincidió con el desarrollo del regadío y el turismo en la costa, convirtiéndose rápidamente en la cerveza del Levante. La fábrica se diseñó con tecnología puntera para la época, incluyendo su propia maltería para controlar todo el proceso de calidad. Hoy, la marca es un pilar fundamental de la vida social murciana, participando activamente en sus fiestas y festivales, y destacando por su compromiso con la gestión del agua, un recurso vital en su entorno geográfico.', 'logos/murcia.webp', 52, 58, NULL, NULL),
(16, 'Navarra', 'navarra', 'La historia cervecera de Navarra tiene sus raíces en las primeras fábricas industriales que surgieron en Pamplona a finales del siglo XIX, como La Cruz Blanca. Estas empresas nacieron para satisfacer a una burguesía creciente y a una población urbana que empezaba a frecuentar los cafés de la Plaza del Castillo. Aunque estas fábricas originales cerraron con el tiempo, Navarra ha mantenido su tradición a través de una de las escenas de cerveza artesana más potentes de España. La calidad del agua de los Pirineos y la tradición de cooperativismo agrícola han facilitado que los cerveceros navarros sean hoy referentes en innovación, exportando sus recetas especiales a mercados internacionales.', 'logos/navarra.webp', 58, 21, NULL, NULL),
(17, 'País Vasco', 'pais-vasco', 'La Salve nació en 1886 en Bilbao, fundada por José Schumann y Cordés cerca de la ría, en un recodo donde los barcos solían saludar a la Virgen de Begoña. Esta ubicación estratégica permitió a la marca crecer junto a la pujante industria naval y siderúrgica vasca. Durante casi un siglo, fue la cerveza de referencia en Vizcaya hasta su desaparición en los años 70. Sin embargo, en 2014, un grupo de emprendedores recuperó la marca con el objetivo de devolver a Bilbao su fábrica de cerveza. La nueva etapa combina la receta histórica con una imagen moderna, vinculando de nuevo la cerveza a la innovación, la gastronomía y el diseño industrial vasco.', 'logos/pais-vasco.webp', 51, 17, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_pedidos`
--

CREATE TABLE `linea_pedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pedido_id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_unitario` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `linea_pedidos`
--

INSERT INTO `linea_pedidos` (`id`, `pedido_id`, `producto_id`, `cantidad`, `precio_unitario`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, 1.15, '2026-05-04 04:22:39', '2026-05-04 04:22:39'),
(2, 1, 4, 2, 2.95, '2026-05-04 04:22:39', '2026-05-04 04:22:39'),
(3, 1, 1, 2, 0.85, '2026-05-04 04:22:39', '2026-05-04 04:22:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2026_02_06_152634_create_comunidades_table', 1),
(6, '2026_02_06_152657_create_productos_table', 1),
(7, '2026_02_06_152958_create_pedidos_table', 1),
(8, '2026_02_06_153010_create_linea_pedidos_table', 1),
(9, '2026_03_03_170625_add_coordinates_to_comunidades_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `fecha_pedido` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `user_id`, `total`, `fecha_pedido`, `created_at`, `updated_at`) VALUES
(1, 1, 9.90, '2026-05-04 08:22:39', '2026-05-04 04:22:39', '2026-05-04 04:22:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comunidad_id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(4,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `comunidad_id`, `nombre`, `descripcion`, `precio`, `stock`, `imagen`) VALUES
(1, 1, 'Cruzcampo Pilsen', 'Cerveza Cruzcampo Pilsen Lager botellín 33 cl', 0.85, 220, 'productos/1.webp'),
(2, 1, 'Alhambra Reserva 1925', 'Cerveza Alhambra Reserva 1925 Lager botellín 33 cl', 1.15, 180, 'productos/2.webp'),
(3, 1, 'Victoria Málaga', 'Cerveza Victoria Málaga Lager botellín 33 cl', 0.90, 200, 'productos/3.webp'),
(4, 1, 'Destraperlo IPA', 'Cerveza Destraperlo IPA botellín 33 cl', 2.95, 80, 'productos/4.webp'),
(5, 1, 'Guadalquibeer Pale Ale', 'Cerveza Guadalquibeer Pale Ale botellín 33 cl', 2.75, 70, 'productos/5.webp'),
(6, 1, 'Alhambra', 'Cerveza Alhambra botellín 25 cl', 2.00, 65, 'productos/6.webp'),
(7, 1, 'Hecatombe IPA', 'Cerveza Hecatombe IPA botellín 33 cl', 3.10, 60, 'productos/7.webp'),
(8, 1, 'Malandar Lager', 'Cerveza DDH Doble IPA Mandalorian', 7.00, 70, 'productos/8.webp'),
(9, 2, 'Ambar Especial', 'Cerveza Ambar Especial Lager botellín 33 cl', 0.90, 210, 'productos/9.webp'),
(10, 2, 'Ambar Export', 'Cerveza Ambar Export Lager botellín 33 cl', 1.05, 180, 'productos/10.webp'),
(11, 2, 'Ambar IPA', 'Cerveza Ambar IPA botellín 33 cl', 1.10, 160, 'productos/11.webp'),
(12, 2, 'Cierzo IPA', 'Cerveza Cierzo IPA botellín 33 cl', 3.10, 80, 'productos/12.webp'),
(13, 2, 'Borda Pale Ale', 'Cerveza Drink Drink Pale Ale botellín 33 cl', 2.85, 70, 'productos/13.webp'),
(14, 2, 'Pirineos Bier Blonde', 'Cerveza Pirineos Bier Blonde Ale botellín 33 cl', 2.90, 65, 'productos/14.webp'),
(15, 2, 'Rondadora Amber Ale', 'Cerveza Rondadora Amber Ale botellín 33 cl', 2.75, 60, 'productos/15.webp'),
(16, 2, '1900 SIn Filtrar', 'Cerveza Ambar 1900 Sin Filtrar botellín 33 cl', 1.75, 75, 'productos/16.webp'),
(17, 3, 'Ordum Blonde', 'Cerveza Ordum Blonde Ale botellín 33 cl', 2.90, 70, 'productos/17.webp'),
(18, 3, 'Caleya IPA', 'Cerveza Caleya IPA botellín 33 cl', 3.10, 60, 'productos/18.webp'),
(19, 3, 'Cotoya Pale Ale', 'Cerveza Cotoya Pale Ale botellín 33 cl', 2.80, 75, 'productos/19.webp'),
(20, 3, 'Deva Blonde', 'Cerveza Deva Blonde Ale botellín 33 cl', 2.70, 65, 'productos/20.webp'),
(21, 3, 'D\'Eva Stout', 'Cerveza D\'Eva Stout botellín 33 cl', 3.20, 55, 'productos/21.webp'),
(22, 3, 'Red Ale', 'Cerveza Ordum Red Ale botellín 33 cl', 2.75, 60, 'productos/22.webp'),
(23, 3, 'Ordum Stout', 'Cerveza Ordum Stout botellín 33 cl', 2.85, 70, 'productos/23.webp'),
(24, 3, 'Ordum La 21', 'Cerveza Ordum La 21 botellín 33 cl', 2.75, 80, 'productos/24.webp'),
(25, 4, 'Rosa Blanca', 'Cerveza Rosa Blanca Lager botellín 33 cl', 0.95, 190, 'productos/25.webp'),
(26, 4, 'Mallorca Beer Blat', 'Cerveza Mallorca Beer Blat botellín 33 cl', 2.10, 150, 'productos/26.webp'),
(27, 4, 'Sullerica Valenta', 'Cerveza Sullerica Valenta botellín 33 cl', 3.00, 60, 'productos/27.webp'),
(28, 4, 'Mallorca Beer Necro', 'Cerveza Mallorca Beer Necro botellín 33 cl', 2.85, 70, 'productos/28.webp'),
(29, 4, 'Toutatis Blonde', 'Cerveza Toutatis Blonde Ale botellín 33 cl', 2.90, 65, 'productos/29.webp'),
(30, 4, 'Sullerica Fosca', 'Cerveza Sullerica Fosca botellín 33 cl', 2.80, 70, 'productos/30.webp'),
(31, 4, 'Forastera Another F***ing IPA', 'Cerveza Forastera Another F***ing IPA botellín 33 cl', 3.10, 50, 'productos/31.webp'),
(32, 4, 'Sullerica Panashé', 'Cerveza Sullerica Panashé botellín 33 cl', 3.20, 55, 'productos/32.webp'),
(33, 5, 'Dorada Especial La Original', 'Cerveza Dorada Especial La Original Lager botellín 33 cl', 0.90, 220, 'productos/33.webp'),
(34, 5, 'Dorada Pilsen', 'Cerveza Dorada Pilsen Lager botellín 33 cl', 0.95, 200, 'productos/34.webp'),
(35, 5, 'Jaira IPA', 'Cerveza Jaira IPA botellín 33 cl', 3.10, 60, 'productos/35.webp'),
(36, 5, 'Tacoa Surf Beer', 'Cerveza Tacoa Surf Beer botellín 33 cl', 2.85, 70, 'productos/36.webp'),
(37, 5, 'Malpeis Blond', 'Cerveza Malpeis Blond botellín 33 cl', 3.20, 55, 'productos/37.webp'),
(38, 5, 'Agüita Blonde', 'Cerveza Agüita Blonde Ale botellín 33 cl', 2.75, 75, 'productos/38.webp'),
(39, 5, 'La Armada Citra', 'Cerveza La Armada Citra botellín 33 cl', 2.70, 80, 'productos/39.webp'),
(40, 5, 'Isla Verde Craft Pilsen', 'Cerveza Isla Verde Craft Pilsen botellín 33 cl', 2.85, 65, 'productos/40.webp'),
(41, 6, 'Dougall\'s Leyenda', 'Cerveza Dougall\'s Leyenda Pale Ale botellín 33 cl', 3.10, 80, 'productos/41.webp'),
(42, 6, 'Dougall\'s IPA 4', 'Cerveza Dougall\'s IPA 4 botellín 33 cl', 3.20, 70, 'productos/42.webp'),
(43, 6, 'La Grúa Pale Ale', 'Cerveza La Grúa Pale Ale botellín 33 cl', 2.90, 75, 'productos/43.webp'),
(44, 6, 'Redneck Mississippi Muo', 'Cerveza Redneck Mississippi Muo botellín 33 cl', 2.80, 70, 'productos/44.webp'),
(45, 6, 'Smach IPA', 'Cerveza Smach IPA botellín 33 cl', 3.00, 60, 'productos/45.webp'),
(46, 6, 'Helles Bock', 'Cerveza Dougall\'s Helles Bock botellín 33 cl', 2.75, 65, 'productos/46.webp'),
(47, 6, 'Dougall\'s Raquera', 'Cerveza Dougall\'s Raquera IPA botellín 33 cl', 2.28, 55, 'productos/47.webp'),
(48, 6, 'La Grúa American IPA', 'Cerveza La Grúa American IPA botellín 33 cl', 3.10, 60, 'productos/48.webp'),
(49, 7, 'San Miguel Especial', 'Cerveza San Miguel Especial Lager botellín 33 cl', 0.85, 230, 'productos/49.webp'),
(50, 7, 'Mica Cuarzo', 'Cerveza Mica Cuarzo botellín 33 cl', 2.95, 80, 'productos/50.webp'),
(51, 7, 'Milana Pucela', 'Cerveza Milana Pucela botellín 33 cl', 3.10, 70, 'productos/51.webp'),
(52, 7, 'San Miguel IPA Yakima Valley', 'Cerveza San Miguel IPA Yakima Valley botellín 33 cl', 2.75, 65, 'productos/52.webp'),
(53, 7, 'Castreña Honey IPA', 'Cerveza Castreña Honey IPA botellín 33 cl', 2.70, 75, 'productos/53.webp'),
(54, 7, 'Milana Zorrilla Lager', 'Cerveza Milana Zorrilla Lager botellín 33 cl', 3.20, 55, 'productos/54.webp'),
(55, 7, 'Mica Rural Tostada Amber', 'Cerveza Mica Rural Tostada Amber botellín 33 cl', 2.85, 70, 'productos/55.webp'),
(56, 7, 'San Miguel Selecta', 'Cerveza San Miguel Selecta botellín 33 cl', 3.05, 60, 'productos/56.webp'),
(57, 8, 'Domus Aurea', 'Cerveza Domus Aurea botellín 33 cl', 3.10, 70, 'productos/57.webp'),
(58, 8, 'Domus IPA', 'Cerveza Domus IPA botellín 33 cl', 3.20, 60, 'productos/58.webp'),
(59, 8, 'La Sagra Lager', 'Cerveza La Sagra Lager botellín 33 cl', 1.05, 180, 'productos/59.webp'),
(60, 8, 'La Sagra India IPA', 'Cerveza La Sagra India IPA botellín 33 cl', 2.95, 80, 'productos/60.webp'),
(61, 8, 'Arriaca IPA', 'Cerveza Arriaca IPA botellín 33 cl', 3.10, 75, 'productos/61.webp'),
(62, 8, 'Arriaca Rubia Lager', 'Cerveza Arriaca Rubia Lager botellín 33 cl', 2.85, 70, 'productos/62.webp'),
(63, 8, 'Domus Toledo', 'Cerveza Domus Toledo botellín 33 cl', 3.25, 60, 'productos/63.webp'),
(64, 8, 'La Sagra Suxinsu', 'Cerveza La Sagra Suxinsu botellín 33 cl', 2.75, 80, 'productos/64.webp'),
(65, 9, 'Estrella Damm', 'Cerveza Estrella Damm Lager botellín 33 cl', 0.85, 240, 'productos/65.webp'),
(66, 9, 'Moritz Original', 'Cerveza Moritz Original Lager botellín 33 cl', 0.95, 200, 'productos/66.webp'),
(67, 9, 'Voll-Damm', 'Cerveza Voll-Damm Doble Malta Lager botellín 33 cl', 1.05, 180, 'productos/67.webp'),
(68, 9, 'Garage IPA', 'Cerveza Garage IPA botellín 33 cl', 3.30, 70, 'productos/68.webp'),
(69, 9, 'La Pirata Viakrucis', 'Cerveza La Pirata Viakrucis IPA botellín 33 cl', 3.20, 65, 'productos/69.webp'),
(70, 9, 'Guineu IPA Amarillo', 'Cerveza Guineu IPA Amarillo botellín 33 cl', 3.10, 75, 'productos/70.webp'),
(71, 9, 'Espiga Blonde', 'Cerveza Espiga Blonde Ale botellín 33 cl', 2.95, 70, 'productos/71.webp'),
(72, 9, 'Moska IPA', 'Cerveza Moska IPA botellín 33 cl', 3.00, 60, 'productos/72.webp'),
(73, 10, 'Turia Märzen', 'Cerveza Turia Märzen Lager tostada botellín 33 cl', 0.95, 220, 'productos/73.webp'),
(74, 10, 'Amstel Oro', 'Cerveza Amstel Oro Lager botellín 33 cl', 0.90, 200, 'productos/74.webp'),
(75, 10, 'Tyris IPA', 'Cerveza Tyris IPA botellín 33 cl', 3.10, 75, 'productos/75.webp'),
(76, 10, 'Zeta Hell', 'Cerveza Zeta Hell Lager botellín 33 cl', 2.95, 80, 'productos/76.webp'),
(77, 10, 'Antiga Pale Ale', 'Cerveza Antiga Pale Ale botellín 33 cl', 2.85, 70, 'productos/77.webp'),
(78, 10, 'Turia Stark', 'Cerveza Turia Stark botellín 33 cl', 2.90, 65, 'productos/78.webp'),
(79, 10, 'La Socarrada', 'Cerveza La Socarrada Ale botellín 33 cl', 3.20, 60, 'productos/79.webp'),
(80, 10, 'Birra & Blues IPA', 'Cerveza Birra & Blues IPA botellín 33 cl', 3.15, 70, 'productos/80.webp'),
(81, 11, 'Cerex Pilsen', 'Cerveza Cerex Pilsen botellín 33 cl', 3.10, 70, 'productos/81.webp'),
(82, 11, 'Cerex Cereza', 'Cerveza Cerex Cereza botellín 33 cl', 3.20, 60, 'productos/82.webp'),
(83, 11, 'Ballut Ale Con Miel', 'Cerveza Ballut Ale Con Miel botellín 33 cl', 2.80, 75, 'productos/83.webp'),
(84, 11, 'Ribereña Blonde', 'Cerveza Cerex Ibérica D\'Bellota botellín 33 cl', 2.75, 70, 'productos/84.webp'),
(85, 11, 'Cerex Castaña', 'Cerveza Cerex Castaña Ale botellín 33 cl', 3.30, 55, 'productos/85.webp'),
(86, 11, 'Ballut Rubia', 'Cerveza Ballut Rubia botellín 33 cl', 3.00, 65, 'productos/86.webp'),
(87, 11, 'Jacha Jigo Jiguera', 'Cerveza Jacha Jigo Jiguera botellín 33 cl', 2.85, 80, 'productos/87.webp'),
(88, 11, 'Cerex Russian Imperial Stout', 'Cerveza Cerex Russian Imperial Stout botellín 33 cl', 3.25, 50, 'productos/88.webp'),
(89, 12, 'Estrella Galicia', 'Cerveza Estrella Galicia Lager botellín 33 cl', 0.85, 250, 'productos/89.webp'),
(90, 12, '1906 Reserva Especial', 'Cerveza 1906 Reserva Especial Lager botellín 33 cl', 1.10, 200, 'productos/90.webp'),
(91, 12, '1906 Red Vintage', 'Cerveza 1906 Red Vintage Lager botellín 33 cl', 1.15, 180, 'productos/91.webp'),
(92, 12, 'Nós Sálvora IPA', 'Cerveza Nós Sálvora IPA botellín 33 cl', 3.10, 70, 'productos/92.webp'),
(93, 12, 'Santo Cristo American Pale Ale', 'Cerveza Santo Cristo American Pale Ale botellín 33 cl', 2.95, 75, 'productos/93.webp'),
(94, 12, 'Estrella Galicia Steiner', 'Cerveza Estrella Galicia Steiner botellín 33 cl', 3.00, 65, 'productos/94.webp'),
(95, 12, 'Keltius Los Suaves', 'Cerveza Keltius Los Suaves Ale botellín 33 cl', 2.85, 70, 'productos/95.webp'),
(96, 12, 'Menduiña Doppelgänger', 'Cerveza Menduiña Doppelgänger Ale botellín 33 cl', 2.90, 75, 'productos/96.webp'),
(97, 13, 'Rua 1919', 'Cerveza Rua 1919 botellín 33 cl', 3.10, 100, 'productos/97.webp'),
(98, 13, 'La Rua Psycho', 'Cerveza La Rua Psycho botellín 33 cl', 2.80, 90, 'productos/98.webp'),
(99, 13, 'Mateo & Bernabé Parking Beer', 'Cerveza Mateo & Bernabé Parking Beer botellín 33 cl', 2.40, 60, 'productos/99.webp'),
(100, 13, 'Mateo & Bernabé Little Bichos', 'Cerveza Mateo & Bernabé Little Bichos Ale botellín 33 cl', 3.10, 60, 'productos/100.webp'),
(101, 13, 'Ceriux Rubia', 'Cerveza Ceriux Rubia botellín 33 cl', 2.90, 75, 'productos/101.webp'),
(102, 13, 'Ceriux Tostada', 'Cerveza Ceriux Tostada botellín 33 cl', 2.95, 70, 'productos/102.webp'),
(103, 13, 'Samhain IPA', 'Cerveza Samhain IPA botellín 33 cl', 3.00, 50, 'productos/103.webp'),
(104, 13, 'Samhain La Luci', 'Cerveza Samhain La Luci botellín 33 cl', 2.80, 80, 'productos/104.webp'),
(105, 14, 'Mahou Cinco Estrellas', 'Cerveza Mahou Cinco Estrellas Lager botellín 33 cl', 0.85, 260, 'productos/105.webp'),
(106, 14, 'Mahou Maestra', 'Cerveza Mahou Maestra Lager botellín 33 cl', 1.05, 200, 'productos/106.webp'),
(107, 14, 'El Águila Sin Filtrar', 'Cerveza El Águila Sin Filtrar Lager botellín 33 cl', 1.00, 190, 'productos/107.webp'),
(108, 14, 'La Cibeles IPA', 'Cerveza La Cibeles IPA botellín 33 cl', 3.10, 80, 'productos/108.webp'),
(109, 14, 'Oso Brew Ursa', 'Cerveza Oso Brew Ursa botellín 33 cl', 2.90, 70, 'productos/109.webp'),
(110, 14, 'Santa Bárbara Amber Ale', 'Cerveza Santa Bárbara Amber Ale botellín 33 cl', 3.15, 65, 'productos/110.webp'),
(111, 14, 'La Virgen Madrid', 'Cerveza La Virgen Madrid Lager botellín 33 cl', 2.95, 75, 'productos/111.webp'),
(112, 14, 'Cervezas La Quince IPA', 'Cerveza Cervezas La Quince IPA botellín 33 cl', 3.30, 60, 'productos/112.webp'),
(113, 15, 'Estrella de Levante', 'Cerveza Estrella de Levante Lager botellín 33 cl', 0.90, 220, 'productos/113.webp'),
(114, 15, 'Yakka Querida', 'Cerveza Yakka Querida botellín 33 cl', 3.10, 75, 'productos/114.webp'),
(115, 15, 'Yakka Blonde', 'Cerveza Yakka Blonde Ale botellín 33 cl', 2.90, 70, 'productos/115.webp'),
(116, 15, 'Estrella de Levante Punta Este', 'Cerveza Estrella de Levante Punta Este botellín 33 cl', 2.80, 80, 'productos/116.webp'),
(117, 15, 'Cátedra Pale Ale', 'Cerveza Cátedra Pale Ale botellín 33 cl', 2.95, 65, 'productos/117.webp'),
(118, 15, 'Estrella de Levante Verna', 'Cerveza Estrella de Levante Verna Lager botellín 33 cl', 1.05, 180, 'productos/118.webp'),
(119, 15, 'Yakka Doble', 'Cerveza Yakka Doble botellín 33 cl', 3.00, 60, 'productos/119.webp'),
(120, 15, 'Trinitaria India Pale Ale', 'Cerveza Trinitaria India Pale Ale botellín 33 cl', 3.15, 60, 'productos/120.webp'),
(121, 16, 'Naparbier Bardenas', 'Cerveza Naparbier Bardenas botellín 33 cl', 3.20, 80, 'productos/121.webp'),
(122, 16, 'Naparbier Baztan', 'Cerveza Naparbier Baztan botellín 33 cl', 3.30, 70, 'productos/122.webp'),
(123, 16, 'Naparbier Aker', 'Cerveza Naparbier Aker lata 44 cl', 3.40, 60, 'productos/123.webp'),
(124, 16, 'Brew & Roll Irati', 'Cerveza Brew & Roll Irati botellín 33 cl', 2.90, 75, 'productos/124.webp'),
(125, 16, 'Naparbier Paradise', 'Cerveza Naparbier Paradise lata 33 cl', 3.30, 65, 'productos/125.webp'),
(126, 16, 'Naparbier Madness', 'Cerveza Naparbier Madness lata 44 cl', 3.35, 60, 'productos/126.webp'),
(127, 16, 'Brew & Roll Kalman', 'Cerveza Brew & Roll Kalman botellín 33 cl', 2.95, 70, 'productos/127.webp'),
(128, 16, 'Naparbier ZZ+', 'Cerveza Naparbier ZZ+ Double lata 44 cl', 3.50, 50, 'productos/128.webp'),
(129, 17, 'Keler Lager', 'Cerveza Keler Lager botellín 33 cl', 0.95, 210, 'productos/129.webp'),
(130, 17, 'La Salve Munich', 'Cerveza La Salve Munich Lager botellín 33 cl', 1.05, 190, 'productos/130.webp'),
(131, 17, 'Basqueland Imparable', 'Cerveza Basqueland Imparable IPA botellín 33 cl', 3.30, 75, 'productos/131.webp'),
(132, 17, 'Laugar Kide', 'Cerveza Laugar Kide botellín 33 cl', 3.25, 70, 'productos/132.webp'),
(133, 17, 'Keler', 'Cerveza Keler botellín 33 cl', 3.20, 65, 'productos/133.webp'),
(134, 17, 'La Salve Lucía', 'Cerveza La Salve Lucía Lager botellín 33 cl', 1.10, 180, 'productos/134.webp'),
(135, 17, 'Laugar Aupa', 'Cerveza Laugar Aupa IPA botellín 33 cl', 3.30, 60, 'productos/135.webp'),
(136, 17, 'Basqueland Zumo', 'Cerveza Basqueland Zumo IPA lata 33 cl', 3.35, 60, 'productos/136.webp'),
(137, 2, 'Ambar Sin Gluten', 'Cerveza Ambar Lager especial sin gluten botellín 33 cl', 1.05, 180, 'productos/137.webp'),
(138, 12, 'Estrella Galicia 0,0 Tostada', 'Cerveza Estrella Galicia 0,0 Tostada Lager botellín 33 cl', 0.75, 220, 'productos/138.webp'),
(139, 14, 'Mahou 0,0 Tostada', 'Cerveza Mahou 0,0 Tostada botellín 33 cl', 0.80, 200, 'productos/139.webp'),
(140, 9, 'Daura Damm Sin Gluten', 'Cerveza Daura Damm Lager sin gluten botellín 33 cl', 1.15, 170, 'productos/140.webp'),
(141, 7, 'San Miguel 0,0', 'Cerveza San Miguel 0,0 Lager botellín 33 cl', 0.75, 210, 'productos/141.webp'),
(142, 10, 'Turia 0,0', 'Cerveza Turia 0,0 Tostada botellín 33 cl', 0.85, 180, 'productos/142.webp'),
(143, 1, 'Cruzcampo 0,0', 'Cerveza Cruzcampo 0,0 Lager botellín 33 cl', 0.75, 220, 'productos/143.webp'),
(144, 9, 'Estrella Damm 0,0', 'Cerveza Estrella Damm 0,0 Lager botellín 33 cl', 0.80, 200, 'productos/144.webp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `fecha_nacimiento`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Darius Fistoleanu', 'darius@gmail.com', NULL, '$2y$12$49LwLwiOauasYVMos832cuuhAdDA3OdcFUCWvzmY83xZHZmroaCj6', '2003-02-12', NULL, '2026-05-04 04:21:54', '2026-05-04 04:21:54'),
(2, 'prubea mayorEdad', 'prueba@gmail.com', NULL, '$2y$12$QjM4rGCllE955aTOQqNKj.jTIbitiz/v8pOBrIaTu8crDCY8AdpZe', '2026-05-07', NULL, '2026-05-04 14:32:16', '2026-05-04 14:32:16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comunidades`
--
ALTER TABLE `comunidades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `comunidades_nombre_unique` (`nombre`),
  ADD UNIQUE KEY `comunidades_slug_unique` (`slug`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `linea_pedidos`
--
ALTER TABLE `linea_pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linea_pedidos_pedido_id_foreign` (`pedido_id`),
  ADD KEY `linea_pedidos_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedidos_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_comunidad_id_foreign` (`comunidad_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comunidades`
--
ALTER TABLE `comunidades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `linea_pedidos`
--
ALTER TABLE `linea_pedidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `linea_pedidos`
--
ALTER TABLE `linea_pedidos`
  ADD CONSTRAINT `linea_pedidos_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `linea_pedidos_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_comunidad_id_foreign` FOREIGN KEY (`comunidad_id`) REFERENCES `comunidades` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
