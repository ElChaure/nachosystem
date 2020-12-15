-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-06-2013 a las 01:46:39
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `nacho`
--

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `analisisvencimientocli`
--
CREATE TABLE IF NOT EXISTS `analisisvencimientocli` (
`CODIGO` int(6)
,`NOMBRE_CLIENTE` varchar(60)
,`A_15_DIAS` decimal(54,2)
,`A_30_DIAS` decimal(54,2)
,`A_45_DIAS` decimal(54,2)
,`A_60_DIAS` decimal(54,2)
,`A_90_DIAS` decimal(54,2)
,`MAS_90_DIAS` decimal(54,2)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `analvenccli`
--
CREATE TABLE IF NOT EXISTS `analvenccli` (
`cliente_id` int(6)
,`GRUPO` int(0)
,`A15` decimal(32,2)
,`A30` decimal(32,2)
,`A45` decimal(32,2)
,`A60` decimal(32,2)
,`A90` decimal(32,2)
,`MAS90` decimal(32,2)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancos`
--

CREATE TABLE IF NOT EXISTS `bancos` (
  `empresa_id` int(6) NOT NULL,
  `banco_id` int(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nro_cuenta` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agencia` text COLLATE utf8_unicode_ci,
  `telefono` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contacto` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estatus` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`banco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `bancos`
--

INSERT INTO `bancos` (`empresa_id`, `banco_id`, `nombre`, `nro_cuenta`, `agencia`, `telefono`, `contacto`, `estatus`) VALUES
(1, 1, 'Efectivo', '', '', '', '', 1),
(1, 2, 'Banco de Venezuela', '', '', '', '', 1),
(1, 3, 'Banco del Tesoro', '', '', '', '', 1),
(1, 4, 'Banco Exterior', '', '', '', '', 1),
(1, 5, 'Banco Industrial de Venezuela', '', '', '', '', 1),
(1, 6, 'Banco Mercantil', '', '', '', '', 1),
(1, 7, 'Banesco', '', '', '', '', 1),
(1, 8, 'BBVA Banco Provincial', '', '', '', '', 1),
(1, 9, 'BFC Banco Fondo Común', '', '', '', '', 1),
(1, 10, 'Corp Banca C.A.', '', '', '', '', 1),
(1, 11, '100% Banco', '', '', '', '', 2),
(1, 12, 'Bancamiga Banco Microfinancier', '', '', '', '', 2),
(1, 13, 'BanCaribe', '', '', '', '', 2),
(1, 14, 'Banco Activo', '', '', '', '', 2),
(1, 15, 'Banco Agrícola de Venezuela', '', '', '', '', 2),
(1, 16, 'Banco Caroní', '', '', '', '', 2),
(1, 17, 'Banco de Comercio Exterior', '', '', '', '', 2),
(1, 18, 'Banco del Pueblo Soberano', '', '', '', '', 2),
(1, 19, 'Banco Espírito Santo', '', '', '', '', 2),
(1, 20, 'Banco Guayana', '', '', '', '', 2),
(1, 21, 'Banco Internacional de desarro', '', '', '', '', 2),
(1, 22, 'Banco Nacional de Crédito', '', '', '', '', 2),
(1, 23, 'Banco Occidental de Descuento', '', '', '', '', 2),
(1, 24, 'Banco Plaza', '', '', '', '', 2),
(1, 25, 'Banco Sofitasa', '', '', '', '', 2),
(1, 26, 'Bancrecer SA', '', '', '', '', 2),
(1, 27, 'Bangente', '', '', '', '', 2),
(1, 28, 'Banplus', '', '', '', '', 2),
(1, 29, 'Citibank', '', '', '', '', 2),
(1, 30, 'Del Sur', '', '', '', '', 2),
(1, 31, 'Mi Banco', '', '', '', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `empresa_id` int(6) NOT NULL,
  `cliente_id` int(4) NOT NULL,
  `descripcion` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `rif` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` text COLLATE utf8_unicode_ci,
  `telefono` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contacto` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ult_venta` date DEFAULT NULL,
  `condcredito_id` int(2) NOT NULL DEFAULT '1',
  `credito_limite` decimal(15,2) DEFAULT '0.00',
  PRIMARY KEY (`cliente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`empresa_id`, `cliente_id`, `descripcion`, `rif`, `direccion`, `telefono`, `fax`, `contacto`, `ult_venta`, `condcredito_id`, `credito_limite`) VALUES
(1, 0, 'CONTADO', '', 'Av. Universidad, Esq. Perico, Edificio Perico, Piso 2, \r\nOficina 2-A, La Candelaria, Caracas - Venezuela', '(0212) 576.49.90', '', '', '0000-00-00', 1, '0.00'),
(1, 1, 'MEDIAS CAROLI C.A', 'J-30449464-5', 'TORRE CUJI ESQ.DEL CUJI, PISO7, LOCAL 71', '563.78.45', NULL, NULL, NULL, 1, '0.00'),
(1, 2, 'SERVICIOS DE ADMINISTRACION SONING C.A', 'J-30106474-7', 'AV. VICTORIA, L OCAL M-20 C.C. MULTIPLAZA VICTORIA', '633.66.83', NULL, NULL, NULL, 1, '0.00'),
(1, 3, 'REPRESENTACIONES EL GOCHO C .A', 'J-31364973-2', 'AV. ESPAÑA BOULEVARD DE CATIA -CARACAS', '0414-1732927', NULL, NULL, NULL, 1, '0.00'),
(1, 4, 'INVERSIONES SORBEL, C.A', 'J-31375566-4', 'AV. BARALT C.C.CAPITOLIO LOCAL D15 Y E15', '481.62.07', NULL, NULL, NULL, 1, '0.00'),
(1, 5, 'MIMATA C.A', 'J-3 1415698-5', 'AV.FUERZAS ARMADAS,CRUCECITA A SAN MIGUEL,ED.LOIS PISO 2 (PUNTA DE MATA)', '561.14.55', NULL, NULL, NULL, 1, '0.00'),
(1, 6, 'MILOZO C.A', 'J-31414904-0', 'AV.FUERZAS ARMADAS,CRUCECITA A SAN MIGUEL,ED.LOIS,PISO 2 (CALABOZO)', '561.14.55', NULL, NULL, NULL, 1, '0.00'),
(1, 7, 'ALMACENES MICAY C.A. MARACAY', 'J-31588498-4', 'AV.FUERZAS ARMADAS,CRUCECITA A SAN MIGUEL,ED.LOIS,PISO 2 (MARACAY)', '561.14.55', NULL, NULL, NULL, 1, '0.00'),
(1, 8, 'MINERO C.E.C.A', 'J-31418333-8', 'AV.FUERZAS ARMADAS,CRUCECITA A SAN MIGUEL,ED.LOIS,PISO 2 (TURMERO)', '561.14.55', NULL, NULL, NULL, 1, '0.00'),
(1, 9, 'MIKIRA C.A', 'J-3 1415689-6', 'AV.FUERZAS ARMADAS,CRUCECITA A SAN MIGUEL,ED.LOIS PISO 2 (MERIDA)', '561.14.55', NULL, NULL, NULL, 1, '0.00'),
(1, 10, 'ALMACENES MILISTEL C.A. CANTAURA', 'J-31632664-0', 'AV.FUERZAS ARMADAS,CRUCECITA A SAN MIGUEL,ED.LOIS PISO 2 (CANTAURA)', '561.14.55', NULL, NULL, NULL, 1, '0.00'),
(1, 11, 'MANUCFACTURAS MIKORO C.A', 'J-31219275-5', 'CALLE BRANGER LOS ROSALES CARACAS', '632 .97.77', NULL, NULL, NULL, 1, '0.00'),
(1, 12, 'MANUFACTURAS MIAPURE C.A', 'J-31632649-7', 'AV.FUERZAS ARMADAS,CRUCECITA A SAN MIGUEL,ED-LOIS PISO2 (APURE)', '561.14.55', NULL, NULL, NULL, 1, '0.00'),
(1, 13, 'MIMANA C.A', 'J-31414894-0', 'AV.FUERZAS ARMADAS,CRUCECITA A SAN MIGUEL ED.LOIS PISO 2 ( CUMANA)', '561.14.55', NULL, NULL, NULL, 1, '0.00'),
(1, 14, 'ALMACENES MILISTEL C.A. EL TIGRE', 'J-31632664-0', 'AV.FUERZAS ARMADAS,CRUCECITA A SAN MIGUEL,ED.LOIS PISO 2 (EL TIGRE)', '561.14.55', NULL, NULL, NULL, 1, '0.00'),
(1, 15, 'DISTRIBUIDORA CORDOVA S.R. L', 'J-30069691-0', 'AV. UNIVERSIDADMERCADO BOLIVARIANO LA HOYADA', '0424-179.81.27', NULL, NULL, NULL, 1, '0.00'),
(1, 17, 'DONDE.S REBEKA''S C.A', 'J-31648406-8', 'AV. VICTORIA, LOCAL M-20 C.C MULTIPLAZA VICTORIA', '633.66.83', NULL, NULL, NULL, 1, '0.00'),
(1, 18, 'LOS 1000 YUN BLUMER C.A', 'J-31600058-3', 'BOULEVARD DE CATIA ENTRE 2DA Y 3ERA.', '872-04-58', NULL, NULL, NULL, 1, '0.00'),
(1, 19, 'IMPORTADORA EL DIAMANTE', 'J-31235371-6', 'AV. PRINCIPAL DEL CEMENTERIO C.C TELARES LOS ANDES', '632-16-20', NULL, NULL, NULL, 1, '0.00'),
(1, 20, 'ALMACENES MIORO C.A', 'J-31584275-0', 'AV.FUERZAS ARMADAS,CRUCECITA A SAN MIGUEL,ED.LOIS PISO 2 (CORO)', '561.14.55', NULL, NULL, NULL, 1, '0.00'),
(1, 21, 'RED 99 GRUPO TEXTIL C.A', 'J-30545871-5', 'C.C EL VALLE NIVEL AVENIDA, LOCAL A-02', '690.97.99', NULL, NULL, NULL, 1, '0.00'),
(1, 22, 'INVERSIONES BELLEZA INTIMA R.D C.A', 'J-29406598-3', 'C. COMERCIAL LOS TELARES EL CEMENTERIO', '0414-0865814', NULL, NULL, NULL, 1, '0.00'),
(1, 23, 'AM-PM SPORT1 C.A', 'J-30955790-4', 'ESQ. DE DR. PAUL, EDF.MARISCAL SUCRE PISO 1 LA HOYADA', '564.94.07 - 563.38.57', NULL, NULL, NULL, 1, '0.00'),
(1, 24, 'INVERSIONES 7746', 'J-30334430-5', 'C.C BOLEITA CENTER, NIVEL 3, LOCAL 3', '232.04.90', NULL, NULL, NULL, 1, '0.00'),
(1, 25, 'INTIMAS DE COLOMBIA', 'J-30858979-9', 'C.C PLAZAS LAS AMERICAS 2 ETAPA COM 1-15', '985.92.11', NULL, NULL, NULL, 1, '0.00'),
(1, 26, 'INVERSIONES DIANA MDI C.A', 'J-31424648-8', 'ESQ. SALVADOR DE LEON EDF. SALVADOR DE LEON CARACAS', '716-23-31', NULL, NULL, NULL, 1, '0.00'),
(1, 27, 'BEBE CHAMITOS BOUTIQUE', 'V-08291973-9', 'C.C.CENTER SAN LOCAL 1', '0281-441.42.11', NULL, NULL, NULL, 1, '0.00'),
(1, 28, 'ALMACENE SERROPA C.A', 'J-29732547-6', 'AV. 6 ENTRE 3 Y 5 TRASVERSAL EDF. MINO CARBONE AG. C.S.B', '0212-482.02.73', NULL, NULL, NULL, 1, '0.00'),
(1, 29, 'MANUFACTURA EUROPA C.A AGENCIA PALO VERDE', 'J-31365755-7', 'AV. PPAL LA URBINA - AGENCIA PALO VERDE', '0212-251.82.21', NULL, NULL, NULL, 1, '0.00'),
(1, 30, 'MANUFACTURA EUROPA C.A. AG. T.TUY', 'J-29732539-5', 'AV.PPAL LA URBINA CRUCE C/CALLE 3B EDF.EL FORTIN AG. T. TUY', '0239-231.62.09', NULL, NULL, NULL, 1, '0.00'),
(1, 31, 'MANUFACTURA EUROPA C.A. AG BARINAS', 'J-29768438-7', 'AV PPAL LA URBINA CRUCE C/CALLE 3B EDF EL FORTIN AG BARINAS', '0273-532.05.09', NULL, NULL, NULL, 1, '0.00'),
(1, 32, 'MANUFACTURA EUROPA C.A. AG  SAN CARLOS', 'J-31365755-7', 'AV. PPAL LA URBINA - AGENCIA SAN CARLOS', '0258-433.35.01', NULL, NULL, NULL, 1, '0.00'),
(1, 33, 'MANUFACTURA EUROPA C.A. AG BARCELONA', 'J-31365755-7', 'AV. PPAL LA URBINA - AGENCIA BARCELONA', '0281-274.16.03', NULL, NULL, NULL, 1, '0.00'),
(1, 34, 'MANUFACTURA EUROPA C.A. AG MATURIN', 'J-31365755-7', 'AV. PPAL LA URBINA - AGENCIA MATURIN', '0291-643.81.27', NULL, NULL, NULL, 1, '0.00'),
(1, 35, 'ALMACENES DAFORT C.A AG. CDAD.. OJEDA', 'J-29715920-7', 'C/VARGAS C/C VZA C.C CALANDRIELLO PB. AG. CDAD.. OJEDA', '0265-631.30.10', NULL, NULL, NULL, 1, '0.00'),
(1, 36, 'MANUFACTURA EUROPA C.A. AG.ACARIGUA', 'J-29740034-6', 'AV. PPAL LA URBINA C/C CALLE 3B EDF. EL FORTIN AG.ACARIGUA', '0255-622.1039', NULL, NULL, NULL, 1, '0.00'),
(1, 37, 'MANUFACTURA EUROPA C.A. AG CDAD.OJEDA II', 'J-31365755-7', 'AV. PPAL LA URBINA - AGENCIA CDAD. OJEDA II', '0265-631.86.22', NULL, NULL, NULL, 1, '0.00'),
(1, 38, 'ALMACENADORA FERDODAR C. A', 'J-29525726-0', 'AV.PPAL. LA URBINA EDF. FORTIN PISO 1, ( SAN CRISTOBAL )', '0276-343.03.70', NULL, NULL, NULL, 1, '0.00'),
(1, 39, 'MANUFACTURA EUROPA C.A. AG UPATA', 'J-31365755-7', 'AV. PPAL LA URBINA - AGENCIA UPATA', '0288-221.04.89', NULL, NULL, NULL, 1, '0.00'),
(1, 40, 'ALMACENES FORTI C.A. AG. CALABOZO', 'J-29738525-8', 'CARRERA 11,ENTRE 6 Y 7 S/N URB.FRANCISCO DE MIRANDA AG. CALABOZO', '0246-872.34.05', NULL, NULL, NULL, 1, '0.00'),
(1, 41, 'MANUFACTURA EUROPA C.A. AG BARINAS II', 'J-29769873-6', 'AV.PPAL LA URBINA C/C CALLE 3B ED.EL FORTIN AG BARINAS II', '0273-532.22.90', NULL, NULL, NULL, 1, '0.00'),
(1, 42, 'MANUFACTURAS JAYDAN C.A. AG.CATIA', 'J-30409189-3', 'AV. PPAL LA URBINA C/C CALLE 3B EDF. EL FORTIN AG.CATIA', '0212-873.26.41', NULL, NULL, NULL, 1, '0.00'),
(1, 43, 'MANUFACTURAS JAYDAN C.A. AG GUARENAS', 'J-30409189-3', 'C/ROMA, PARCELA 7, MANZANA 16 ,EDF.PROA PB (GUARENAS)', '0212-362.24.18', NULL, NULL, NULL, 1, '0.00'),
(1, 44, 'ALMACENES GREENFORT C.A', 'J-29756285-0', 'AV. SAN MARTINAL LADO DEL TEATRO ARTIGAS', '0212-462.34.77', NULL, NULL, NULL, 1, '0.00'),
(1, 45, 'MANUFACTURAS JAYDAN C.A', 'J-30409189-3', 'C/ROMA ,PARCELA 7, MAZANA 16, EDF.PROA PB', '0238-334.35.14', NULL, NULL, NULL, 1, '0.00'),
(1, 46, 'MANUFACTURAS JAYDAN C.A. AG VALLE DE LA PASCUA I', 'J-30409189-3', 'C/ROMA,PARCELA 7,MANZANA 16,EDF.PROA PB (VALLE DE LA PASCUA I)', '0235-341.36.85', NULL, NULL, NULL, 1, '0.00'),
(1, 47, 'MANUFACTURAS JAYDAN C.A. AG GUANARE', 'J-30409189-3', 'AV. PPAL LA URBINA C/C CALLE 3B EDF EL FORTIN AG GUANARE', '0257-251.49.11', NULL, NULL, NULL, 1, '0.00'),
(1, 48, 'MANUFACTURAS JAYDAN C.A. AG VALENCIA', 'J-30409189-3', 'AV PPAL LA URBINA C/C CALLE 3,EDF EL FORTIN AG VALENCIA', '0241-858.41.73', NULL, NULL, NULL, 1, '0.00'),
(1, 49, 'MANUFACTURAS JAYDAN C.A. AG CARUPANO', 'J-30409189-3', 'AV. PPAL LA URBINA C/C CALLE 3B EDF EL FORTIN AG CARUPANO', '0294-331.93.25', NULL, NULL, NULL, 1, '0.00'),
(1, 50, 'MANUFACTURAS JAYDAN C.A. AG.CDAD BOLIVAR', 'J-30409189-3', 'C/ROMA,PARCELA 7 MANZANA 16,EDF.PROA ,PB. (AG.CIUDAD BOLIVAR)', '0285-632.50.21', NULL, NULL, NULL, 1, '0.00'),
(1, 51, 'ALMACENES NEWFORT C.A', 'J-31224930-7', 'AV. PPAL LA URBINA EDF. EL FORITN PISO 4 AG NEWFORT ,ANACO', '0282-422.19.06', NULL, NULL, NULL, 1, '0.00'),
(1, 52, 'ALMACENES CABIMAS I, C.A', 'J-31243047-8', 'AV.PPAL LA URBINA EDF EL FORTIN P.B, AG CABIMAS I', '0264-241.57.29', NULL, NULL, NULL, 1, '0.00'),
(1, 53, 'ALMACENES FORTE CARACAS, C.A AG FORTE CARACAS', 'J-31244247-6', 'AV. PPAL LA URBINA EDF EL FORTIN PB, AG FORTE CARACAS', '0243-232.23.65', NULL, NULL, NULL, 1, '0.00'),
(1, 54, 'KARAN FASHION C.A', 'J-31673012-3', 'CALLE BOLIVAR PUERTO PIRITU', '0281-441.22.49', NULL, NULL, NULL, 1, '0.00'),
(1, 55, 'COMERCIAL SWEDA C.A', 'J-29496090-1', 'AV. FERNANDO PADILLA CLARINES EDO.ANZOATEGUI', '0414-085.53.87', NULL, NULL, NULL, 1, '0.00'),
(1, 56, 'NIKO SPORTC.A', 'J-30718390-0', 'AV, PPAL LA YAGUARA EDF. DISTEL PISO 2- LA YAGUARA - CARACAS', '0212-471.67.07', NULL, NULL, NULL, 1, '0.00'),
(1, 57, 'COMERCIAL ROLIZ', 'J-00051171-3', 'ESQ. LA MARRON EDF. GENERAL PAEZ P.B CARACAS', '0212-561.50.11', NULL, NULL, NULL, 1, '0.00'),
(1, 58, 'ISYA BONTIQUE', 'V-06299629-0', 'AV.PPAL DEL CEMENTERIO C.C TELARES LOS ANDES CARACAS', '0414-231.5858', NULL, NULL, NULL, 1, '0.00'),
(1, 59, 'EL BEBE TUYERO', 'J-31053784-4', 'AV. BOLIVAR 2,MINI C. CHARATUY1, LOCAL 32-33 CHARALLAVE', '0239-248.79.01', NULL, NULL, NULL, 1, '0.00'),
(1, 60, 'CEMAPLAST C.A', 'J-00054051-9', 'CALLE ANDA LUCIA SAN MARTIN N.5', '', NULL, NULL, NULL, 1, '0.00'),
(1, 61, 'MANUFACTURAS JAYDAN, C.A.', 'J-30409189-3', 'CALLE ROMA, PARCELA 7 ,MANZANA16 ,EDF.PROA, PB', '0212-362.18.08', NULL, NULL, NULL, 1, '0.00'),
(1, 62, 'TIENDA EL BOMBAZO C.A', 'J-31231828-7', 'C/ GUSCO ENTRE ATARRAYA Y GONZALES PADRON S/N', '0235-342.47.55', NULL, NULL, NULL, 1, '0.00'),
(1, 63, 'MANUFACTURAS JAYDAN C.A. AG.PALO VERDE', 'J-29756285-0', 'CALLE ROMA, PARCELA 7, MANZANA 16,EDF.PROA, PB (AG.PALO VERDE)', '0212-251.82.21', NULL, NULL, NULL, 1, '0.00'),
(1, 64, 'MANUFACTURAS UNICEN C.A. AG. BARCELONA', 'J-00143131-4', 'CALLE EL SAMANC.C TRAPICHITO NIVEL PB (AG. BARCELONA)', '0281-274.16.03', NULL, NULL, NULL, 1, '0.00'),
(1, 65, 'ALMACENES SAN CARLOS FORTIN 01 C.A', 'J-297701908-3', 'AV.BOLIVAR C/C MANRIQUE C.C ANYELO P.B ( SAN CARLOS )', '0258-433.35.01', NULL, NULL, NULL, 1, '0.00'),
(1, 66, 'ALMACENES UPATA 01, C.A', 'J-29770501-5', 'CALLE UNION, C.C UPATA CENTER, PB, LOCAL 2. ( UPATA)', '0288-221.38.96', NULL, NULL, NULL, 1, '0.00'),
(1, 67, 'ALMACENES URBICARACAS C.A. AG.SAN F.APURE', 'J-31244242-5', 'AV PPAL LA URBINA C/C CALLE 3B ED EL FORTIN AG.SAN F. APURE', '0247-341.48.06', NULL, NULL, NULL, 1, '0.00'),
(1, 68, 'ALMACENES MARACAIBO I CABIMAS II', 'J-31249362-3', 'AV PPAL LA URBINA , EDF EL FORTIN PB. ( CABIMASII )', '0264-241.16.37', NULL, NULL, NULL, 1, '0.00'),
(1, 69, 'MANUFACTURAS JAYDAN C.A. AG.EL VIGIA', 'J-30409189-3', 'AV PPAL LA URBINA C/C CALLE 3B EDF EL FORTIN AG. EL VIGIA', '0275-881.62.07', NULL, NULL, NULL, 1, '0.00'),
(1, 70, 'MANUFACTURAS UNICEN C.A', 'J-31003766-3', 'CALLE EL SAMAN C.C TRAPICHITO NIVEL PB LOCAL 4, AG.VALERA II', '0271-221.64.93', NULL, NULL, NULL, 1, '0.00'),
(1, 71, 'MANUFACTURAS UNICEN C.A. VALERA I', 'J-31003766-3', 'CALLE EL SAMAN C.C TRAPICHITO NIVEL P.B LOCAL 4, VALERA I', '0271-221.58.72', NULL, NULL, NULL, 1, '0.00'),
(1, 72, 'MUNDO FENG 128 C.A', 'J-29557489-4', 'AV. SUR 15 ESQ.CALLE PELIGRO EDF.GOLDEN PB.', '577.51.75', NULL, NULL, NULL, 1, '0.00'),
(1, 73, 'INVERSIONES DREAM-MAKER C. A', 'J-31293760-2', 'C.C. LA CASCADA, NIVEL 1, LOCAL 40', '383.36.64', NULL, NULL, NULL, 1, '0.00'),
(1, 74, 'REPRESENTACIONES J.J BABY.S C.A', 'J-31436162-7', 'ESQ. CORAZON DE JESUS, EDF.ALVARE.A PB, LOCAL 5-A', '542.26.34', NULL, NULL, NULL, 1, '0.00'),
(1, 75, 'EL JARDIN DE LA ROPA INTIMA', 'J-23489209-4', 'MERCADO CRUZ VERDE A VELASQUEZ AV. JUAN PABLO DUARTE', '563.44.27', NULL, NULL, NULL, 1, '0.00'),
(1, 76, 'INTIMIDADES LIBRATEX, C.A', 'J-29489209-4', 'AV. ESTE OCHO ESQ. ZAMURO MERCADO CRUZ VERDE', '', NULL, NULL, NULL, 1, '0.00'),
(1, 77, 'COMERCIAL YELITZA', 'V-17759782-8', 'CALLE COLEGIO AMERICANO LOCAL 14, MINAS DE BARUTA', '943.26.79', NULL, NULL, NULL, 1, '0.00'),
(1, 78, 'MEDIAS JHON', 'V-1152379-7', 'MULTIMERCADO GOAJIROS,SECTOR EL PLAYON 1ER.PUESTO', '0412-8677442', NULL, NULL, NULL, 1, '0.00'),
(1, 79, 'MANUFACTURAS JAYDAN C.A', 'J-30409189-3', 'AV.PPAL.LA URBINA EDF. EL FORTIN', '', NULL, NULL, NULL, 1, '0.00'),
(1, 80, 'CONFECCIONES HIDABER C.A', 'J-315659555-7', 'C. COMERCIAL TERRAZAS DEL AVILA LOCAL CI-28', '244.44.80', NULL, NULL, NULL, 1, '0.00'),
(1, 81, 'INVERSIONES LOMTANANZA', 'J-29531882-0', 'CALLE LA FACULTAD CON RAZETTI LOS CHAGUARAMOS', '662.22.79', NULL, NULL, NULL, 1, '0.00'),
(1, 82, 'VIVAS S.A', 'J-30018860-4', 'AV. MIRANDA MARACAY', '0243-246.28.21', NULL, NULL, NULL, 1, '0.00'),
(1, 83, 'CENTRO TEXTIL LUMACA C.A', 'J-30043005-7', 'AV. PPAL. DEL CENMENTERIO', '631.65.31', NULL, NULL, NULL, 1, '0.00'),
(1, 84, 'COOPERATIVA GLADIDEX FARELLO, R.L', 'J-29472364-0', 'AV. SAN MARTIN,CALLE SEVILLA C/ CORDOVA QUINTA N.13', '', NULL, NULL, NULL, 1, '0.00'),
(1, 85, 'COOPERATIVA JOSE LUIS SPORT R.L', 'J-31544084-9', 'C.C TELARES LOS ANDES,LOCAL 21,SECTOR VERDE', '0212-830.95.17', NULL, NULL, NULL, 1, '0.00'),
(1, 88, 'ALMACENES FORTI C.A. URB. FCO DE MIRANDA', 'J-29738525-8', 'CARRERA 11, ENTRE 6 Y 7 S/N, URB. FRANCISCO DE MIRANDA', '0239-246.09.64', NULL, NULL, NULL, 1, '0.00'),
(1, 89, 'MANUFACTURAS JAYDAN C.A. CDAD VALENCIA', 'J-30409189-3', 'C/ROMA,PARCELA7,MANZANA 16,EDF.PROA PB (CDAD VALENCIA)', '0241-857.47.53', NULL, NULL, NULL, 1, '0.00'),
(1, 90, 'INVERSIONES RAUFER C.A', 'J-29463028-6', 'C/STA.BARBARA EDF. PAO PISO PB LOCAL 1 AG.RAUFER', '0242-362.26.23', NULL, NULL, NULL, 1, '0.00'),
(1, 91, 'MANUFACTURAS JAYDAN C.A. LLANO MAL', 'J-30409189-3', 'C/ROMA, PARCELA 7, MANZANA 16,EDF. PROA PB (LLANO MAL )', '0255-600.94.01', NULL, NULL, NULL, 1, '0.00'),
(1, 92, 'MANUFACTURAS JAYDAN C.A. AG.VALENCIA I', 'J-30409189-3', 'AV.PPAL LA URBINA CRUCE C/CALLE 3B. EDF FORTIN AG.VALENCIA I', '', NULL, NULL, NULL, 1, '0.00'),
(1, 93, 'WILLIAN FLORES LUGO', 'V-07569044-0', 'AV.PPAL DEL CEMENTERIO MERCADO EL CEMENTERIO LOCAL 342', '0414-286.34-97', NULL, NULL, NULL, 1, '0.00'),
(1, 94, 'CASA DE UNIFORMES VIRGEN DE FATIMA C.A', 'J-30901725-0', 'CALLE SUCRE EDF. LEANDRO CHACAO', '0212-264-59-50', NULL, NULL, NULL, 1, '0.00'),
(1, 95, 'JESUS CADENAS', 'V-10631534', 'AV. SAN MARTIN,CALLE CORDOVA', '', NULL, NULL, NULL, 1, '0.00'),
(1, 96, 'MANUFACTURAS JAYDAN C.A. CC PLAZA B/B II', 'J-30409189-3', 'C/ROMA,PARCELA 7,MANZANA 16 EDF.PROA PB ( CC PLAZA B/B II )', '0285-995.44.58', NULL, NULL, NULL, 1, '0.00'),
(1, 97, 'ALMACEN DAIN FORT C.A', 'J-31383474-2', 'CARRERA 4 ENTRE 17 Y 18 EDF. SUTERA, PLANTA BAJA GUANARE', '0257-988.80.08', NULL, NULL, NULL, 1, '0.00'),
(1, 98, 'IMPORTADORA DAFOR', 'J-29713638-0', 'AV.BOLIVAR C.CMALL DE LAS AMERICAS LOCAL PA3, PTO FIJO', '0269-246.94.02', NULL, NULL, NULL, 1, '0.00'),
(1, 99, 'ALMACENES FORTE CARACAS C.A. AG. VILLA DE CURA II', 'J-31244247-6', 'AV.PPAL. LA URBINA EDF. FORTIN PB. PB. ( VILLA D ECURA )', '0244-386.78.00', NULL, NULL, NULL, 1, '0.00'),
(1, 100, 'VILLAFRACA INVERSIONES C.A', 'J-309113448-8', 'AV.LECUNA ANGELITOS A PTO.ESCONDIDO EDF.MATTA', '0241-234568', NULL, NULL, NULL, 1, '0.00'),
(1, 101, 'ALMACEN MI BOHIO C.A', 'J-30189630-0', 'CALLE RAMIREZ N.72 SAN FELIX EDO.BOLIVAR', '', NULL, NULL, NULL, 1, '0.00'),
(1, 102, 'ALMACEN LA SABANITA C.A', 'J-30189614-9', 'C.C EL FORTIN,LOCAL N.6,AV.VENEZUELA CDA.BOLIVAR', '', NULL, NULL, NULL, 1, '0.00'),
(1, 103, 'ALMACEN RIO ACARIGUA C.A', 'J-30189622-0', 'AV.ALIANZA C/C8,ACARIGUA EDO.PORTUGUESA', '', NULL, NULL, NULL, 1, '0.00'),
(1, 104, 'ALMACEN LA RUMBA GITANA', 'J-30189610-6', 'FRENTE A LA PLAZA BOLIVAR ACARIGUA EDO. PORTUGUESA', '', NULL, NULL, NULL, 1, '0.00'),
(1, 105, 'ALMACEN ELOTO.O C.A', 'J-30192689-7', 'CALLE 8 CON AV.11,CHIVACOA EDO.YARACUY', '', NULL, NULL, NULL, 1, '0.00'),
(1, 106, 'ALMACEN PRIMAVERA C.A', 'J-30192693-5', 'C.C JUNIN AV.LIBERTADOR,SAN FELIPE EDO. YARACUY', '', NULL, NULL, NULL, 1, '0.00'),
(1, 108, 'ALMACEN ASUAN', 'J-00371726-6', 'EDF.MATTA ELIAS, PISO 1, EL SILENCIO', '0212-481.12.04', NULL, NULL, NULL, 1, '0.00'),
(1, 109, 'ALMACEN ZARA 96 C.A', 'J-30254474-2', 'EDF. MATTA ELIAS, PB-LOCAL 2, EL SILENCIO', '', NULL, NULL, NULL, 1, '0.00'),
(1, 115, 'ALMACENES URBICARACAS', 'J-31244242-5', 'AV.PPAL LA URBINA EDF. FORTIN PB (ALM. URBICARACAS)', '0247-341.48.06', NULL, NULL, NULL, 1, '0.00'),
(1, 120, 'INVERSIONES BRINCO IMPORT C .A', 'J-29665877-3', 'AV. UNIVERSIDAD EDIFICIO PERICO LOCAL 1.', '0212-574.78', NULL, NULL, NULL, 1, '0.00'),
(1, 121, 'COMERCIAL QINA IMPORT C. A', 'J-29664674-0', 'AV.SAN MARTIN EDIFICIO ARICHUNA LOCAL B', '', NULL, NULL, NULL, 1, '0.00'),
(1, 140, 'RAUL ARELLANO', 'V-5206582', 'URB.SAN CRISTOBAL ,CALLE 2,N. 26, MERIDA', '', NULL, NULL, NULL, 1, '0.00'),
(1, 150, 'COMERCIAL EL CURRO C.A', 'J-00256657-4', 'AV.BARALT ESQ.DE CUARTEL VIEJO,LOCAL N.4', '0212-864.36.53', NULL, NULL, NULL, 1, '0.00'),
(1, 151, 'INVERSIONES CASTILLO 2000 C.A', 'J-297785078', 'AV.BOLIVAR MERCADO PARQUE MECANICO PASILLO', '0414-282.93.15', NULL, NULL, NULL, 1, '0.00'),
(1, 152, 'ALMACENES LA FORTINA C.A', 'J-29765758-4', 'CALLE VARGAS,ENTRE AV.F. MIRANDA Y SUCRE SECTOR EL CENTRO', '0272-652.27.15', NULL, NULL, NULL, 1, '0.00'),
(1, 153, 'INVERSIONES ARREGA C.A', 'J-29641997-3', 'AV. BOLIVAR NORTE LOCAL 137, ZONA NORTE, VALENCIA', '0241-821.12.92', NULL, NULL, NULL, 1, '0.00'),
(1, 154, 'MANUFACTURAS JAYDAN C.A', 'J-30409189-3', 'AV.PPAL.LA URBINA C/C CALLE 3B ED.EL FORTIN(C.VALENCIA)', '0241-857.47.53', NULL, NULL, NULL, 1, '0.00'),
(1, 155, 'IMPORTADORADA FOR C.A', 'J-29713638-0', 'AV.BOLIVAR C.CMALL DE LAS AMERICA LOCAL PA-3 AG. P - FIJO', '0269-246.94.02', NULL, NULL, NULL, 1, '0.00'),
(1, 156, 'ALMACENES MARACAIBO I', 'J-31249362-3', 'C.C. LA FUENTE ANTIGUO CINE, LOCAL 38B', '0264-241.16.37', NULL, NULL, NULL, 1, '0.00'),
(1, 157, 'ALMACENES FORTE CARACAS C.A.  AG. VILLA DE CURA', 'J-31244247-6', 'AV.PPAL LA URBINA EDF.EL FORTIN PISO 4 AG. VILLA DE CURA', '0243-232.23.65', NULL, NULL, NULL, 1, '0.00'),
(1, 158, 'TIENDA EL BOMBAZO C.A. AG.V.PASCUA II', 'J-31231828-7', 'CALLE GUASCO ENTRE ATARRAYA Y GONZALES P. AG .V.PASCUA II', '0235-342.47.55', NULL, NULL, NULL, 1, '0.00'),
(1, 159, 'COMERCIAL EVA ROSA C.A', 'J-00089312-8', 'CUJI A SALVADOR DE LEON Nro 12', '561.67.71', NULL, NULL, NULL, 1, '0.00'),
(1, 160, 'LA TIENDA DE ELLAS C.A', 'J-3078701-8A', 'AV.INDEPENCIA C/CC LA ROSALEDA TRUJILLO', '0272-2365409', NULL, NULL, NULL, 1, '0.00'),
(1, 181, 'VANEGAS IMPORT C.A', 'J-29358617-8', 'CORAZON DE JESUS A SOCARRAS EDF. ALVAREZ, LOCAL 8', '0212-542.29.77', NULL, NULL, NULL, 1, '0.00'),
(1, 200, 'ADRIAN BELISARIO', 'V-18465639', 'AV. UNIVERSIDAD ESQ. PERICO, EDF. PERICO', '0212-576.49.90', NULL, NULL, NULL, 1, '0.00'),
(1, 201, 'ECOLOGY 58 DEPORTE Y CAMPO C.A', 'J-31105158-9', 'CENTRO COMERCIAL LOS PROCERES PISO 1', '', NULL, NULL, NULL, 1, '0.00'),
(1, 202, 'CALZADO ATLANTICO 3000, C.A', 'J-29958727-3', 'AV. PPL DEL CEMENTERIO, C. C LOS TELARES, LOCAL 2', '', NULL, NULL, NULL, 1, '0.00'),
(1, 203, 'INVERSIONES CHUPINTCHU 2006 C.A', 'J-31446383-7', 'AV.BOLIVAR ENTRE 4 Y 5 AV. N. 10 CARACAS', '0212-873.87.04', NULL, NULL, NULL, 1, '0.00'),
(1, 204, 'CREACIONES SQUIMO C.A', 'J-31633281-0', 'AV.BOLIVAR VIA CASCO CENTRAL C.C 93 SAN ANTONIO DE LOS ALTOS', '837-05-62', NULL, NULL, NULL, 1, '0.00'),
(1, 205, 'LEADER STUDIO C.A', 'J-30847578-5', 'AV. INDEPENDENCIA EDF.FARMALIDER PISO1, LOCAL 6 LOS TEQUES', '', NULL, NULL, NULL, 1, '0.00'),
(1, 206, 'INVERSIONES MUNDO COSHI C.A', 'J-31271699-1', 'CALLE AYACUCHO CC AZZANENSE NIVEL PB, LOCAL 11 URB.EL PUEBLO', '', NULL, NULL, NULL, 1, '0.00'),
(1, 207, 'BABY LEADER C.A', 'J-31649647-3', 'CARRETERA PANAMERICANA CC LA CASCADA NIVEL PB LOCAL SS', '', NULL, NULL, NULL, 1, '0.00'),
(1, 250, 'CORPORACION 770, C.A', 'J-30905746-4', 'AV.ROMULO GALLEGOS C/AV. PPAL LA CARLOTA ,C.C MILLENIUM', '', NULL, NULL, NULL, 1, '0.00'),
(1, 251, 'INVERSIONES JABAD, C.A', 'J-30863282-1', 'C/ TIUNA,ENTRE C/ SANATORIO Y MIRAIMA C.C BOLEITA CENTER', '', NULL, NULL, NULL, 1, '0.00'),
(1, 301, 'CASSIL 4000 SUPLIDORES', 'J-30231123-3', 'AV. BARALT EDF.ANIK PISO 1', '', NULL, NULL, NULL, 1, '0.00'),
(1, 500, 'MANUFACTURA EUROPA C.A. Ppal.', 'J-31365755-7', 'AV.PPAL. LA URBINA CRUCE C/CALLE 3B EDF. EL FORTIN', '', NULL, NULL, NULL, 1, '0.00'),
(1, 501, 'MANUFACTURA UNICEN C.A', 'J-00143131-4', 'CALLE EL SAMAN C.C. TRAPICHITO NIVEL PB.LOCAL 4', '', NULL, NULL, NULL, 1, '0.00'),
(1, 502, 'MANUFACTURAS JAYDAN C.A', 'J-30409189-3', 'AV.PPAL DE LA URBINA CRUCE C/CALLE 3 EDF. EL FORTIN', '', NULL, NULL, NULL, 1, '0.00'),
(1, 503, 'CALZADOS BOOM SPORT C.A', 'J-29542748-4', 'AV.ABRAHAM LINCOLN C.C MILENIUM,NIVEL PB LOCAL 9', '0212-951.25.70', NULL, NULL, NULL, 1, '0.00'),
(1, 505, 'DISTRIBUIDORA L.J.M C.A', 'J-31179841-2', 'FONDO UNION,CALLE B ,PARCELA L8C, GALPON N. 2,VALENCIA', '0241-871.66.83', NULL, NULL, NULL, 1, '0.00'),
(1, 506, 'FREITAS BAPTISTA MARIA DA PAZ', 'E-81285994-6', 'AV.BARALT MERCADO QUINTA CRESPO NRO.ZRI-108', '', NULL, NULL, NULL, 1, '0.00'),
(1, 550, 'GRECHELL ROPA INTIMA C.A', 'J-29595729-7', 'AV. SUR Y AV. BOLIVAR C.C MERCADO BOLIVARIANO LA HOYADA', '0212-5784529', NULL, NULL, NULL, 1, '0.00'),
(1, 551, 'IMPORTADORA ORIANNA XXI C.A', 'J-31325433-9', 'AV.JUAN PABLO DUARTE MERCADO CRUZ VERDE PASILLO 2', '0212-3248078', NULL, NULL, NULL, 1, '0.00'),
(1, 600, 'INVERSIONES NOVA 2012', 'J-401796710C', 'CALLE MANZANA 16,PARCELA N/7 CC CENTRO PROA,NIVEL 1', '', NULL, NULL, NULL, 1, '0.00'),
(1, 888, 'JOEL DOMINGO MARIN RAMIREZ', 'V-13086931', 'AV. SAN MARTIN,CALLE CORDOBA,N. 14 ,SAN JUAN', '', NULL, NULL, NULL, 1, '0.00'),
(1, 889, 'DISTRIBUIDORA AMENLING C. A', 'J-312099437C', 'CALLE VARGAS,BOLEITA NORTE,EDF.METROPOLITANO, PISO 2', '0212-238.59.61', NULL, NULL, NULL, 1, '0.00'),
(1, 999, 'COMERCIAL REYCOR 2008 C. A', 'V-29581342-2', 'MERCADO LA HOYADA PASILLO VENEZUELA LOCAL 1934 AL 1938', '', NULL, NULL, NULL, 1, '0.00');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `clientespendientes`
--
CREATE TABLE IF NOT EXISTS `clientespendientes` (
`movimiento_id` int(8)
,`linea` varchar(114)
,`cliente_id` int(6)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condcredito`
--

CREATE TABLE IF NOT EXISTS `condcredito` (
  `condcredito_id` int(2) NOT NULL AUTO_INCREMENT,
  `condicion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`condcredito_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `condcredito`
--

INSERT INTO `condcredito` (`condcredito_id`, `condicion`) VALUES
(1, 'CONTADO'),
(2, 'CREDITO 15 DIAS'),
(3, 'CREDITO 30 DIAS'),
(4, 'CREDITO 45 DIAS'),
(5, 'CREDITO 60 DIAS'),
(7, 'CREDITO 90 DIAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correlativos`
--

CREATE TABLE IF NOT EXISTS `correlativos` (
  `empresa_id` int(6) NOT NULL,
  `tipoentrada_1` int(6) NOT NULL,
  `tipoentrada_2` int(6) NOT NULL,
  `tipoentrada_3` int(6) NOT NULL,
  `tipoentrada_4` int(6) NOT NULL,
  `tipoentrada_5` int(6) NOT NULL,
  `tiposalida_10` int(6) NOT NULL,
  `tiposalida_11` int(6) NOT NULL,
  `tiposalida_12` int(6) NOT NULL,
  `tiposalida_13` int(6) NOT NULL,
  `tiposalida_14` int(6) NOT NULL,
  `tiposalida_15` int(6) NOT NULL,
  `iva` double(6,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`empresa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `correlativos`
--

INSERT INTO `correlativos` (`empresa_id`, `tipoentrada_1`, `tipoentrada_2`, `tipoentrada_3`, `tipoentrada_4`, `tipoentrada_5`, `tiposalida_10`, `tiposalida_11`, `tiposalida_12`, `tiposalida_13`, `tiposalida_14`, `tiposalida_15`, `iva`) VALUES
(1, 4, 1, 1, 1, 3, 1043, 1116, 1216, 1317, 1416, 1521, 12.00);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `edoctacliente`
--
CREATE TABLE IF NOT EXISTS `edoctacliente` (
`empresa_id` int(11)
,`cliente_id` int(11)
,`movimiento_id` int(11)
,`tiposalida` varchar(30)
,`documento_nro` varchar(20)
,`fecha` date
,`monto` double
,`saldo` double(12,2)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `empresa_id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Id Empresa',
  `nombre` varchar(60) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nombre de la Empresa',
  `rif` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'RIF de la Empresa',
  `direccion` text COLLATE utf8_unicode_ci COMMENT 'Direccion Fiscal',
  `representante` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Representante Legal',
  `mes_inicio` int(2) DEFAULT NULL COMMENT 'Mes Inicio del Ejercicio',
  `anio_fiscal` int(4) DEFAULT NULL COMMENT 'Año Fiscal',
  `iva` decimal(6,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`empresa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Maestro de Empresas' AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`empresa_id`, `nombre`, `rif`, `direccion`, `representante`, `mes_inicio`, `anio_fiscal`, `iva`) VALUES
(1, 'Textiles Jecatex, C.A.', 'J-311281342', 'Av. Universidad, Esq. Perico, Edif. Perico, Piso 2, Oficina 2A. Caracas', 'Jesus Cadenas', 1, 2013, '12.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradadet`
--

CREATE TABLE IF NOT EXISTS `entradadet` (
  `entradadet_id` int(6) NOT NULL AUTO_INCREMENT,
  `entradaenc_id` int(6) NOT NULL,
  `tipoentrada_id` int(2) NOT NULL,
  `producto_id` int(6) NOT NULL,
  `unidad_id` int(6) NOT NULL,
  `cantidad` int(6) NOT NULL,
  `precio_unitario` decimal(10,2) NOT NULL,
  `iva` decimal(5,2) NOT NULL,
  `total_neto` double(12,2) NOT NULL,
  `total_final` double(12,2) NOT NULL,
  PRIMARY KEY (`entradadet_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `entradadet`
--

INSERT INTO `entradadet` (`entradadet_id`, `entradaenc_id`, `tipoentrada_id`, `producto_id`, `unidad_id`, `cantidad`, `precio_unitario`, `iva`, `total_neto`, `total_final`) VALUES
(1, 2, 1, 2, 1, 2345, '12.00', '12.00', 28140.00, 31516.80),
(2, 3, 1, 1, 1, 1500, '5.35', '12.00', 8025.00, 8988.00),
(3, 3, 1, 3, 1, 470, '12.50', '12.00', 5875.00, 6580.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradadet_tmp`
--

CREATE TABLE IF NOT EXISTS `entradadet_tmp` (
  `entradadet_id` int(6) NOT NULL AUTO_INCREMENT,
  `entradaenc_id` int(6) NOT NULL,
  `producto_id` int(6) NOT NULL,
  `unidad_id` int(6) NOT NULL,
  `cantidad` int(6) NOT NULL,
  `precio_unitario` decimal(10,2) NOT NULL,
  `iva` decimal(5,2) NOT NULL,
  `total_neto` double(12,2) NOT NULL,
  `total_final` double(12,2) NOT NULL,
  PRIMARY KEY (`entradadet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradaenc`
--

CREATE TABLE IF NOT EXISTS `entradaenc` (
  `movimiento_id` int(8) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(6) NOT NULL,
  `entradaenc_id` int(6) NOT NULL,
  `tipoentrada_id` int(2) NOT NULL,
  `proveedor_id` int(6) NOT NULL,
  `fecha` date NOT NULL,
  `fecha_pago` date NOT NULL,
  `condcredito_id` int(2) NOT NULL,
  `vendedor_id` int(6) NOT NULL,
  `bultos` int(4) DEFAULT NULL,
  `unidades` int(4) DEFAULT NULL,
  `docenas` int(4) DEFAULT NULL,
  `saldo` decimal(10,2) NOT NULL,
  PRIMARY KEY (`movimiento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `entradaenc`
--

INSERT INTO `entradaenc` (`movimiento_id`, `empresa_id`, `entradaenc_id`, `tipoentrada_id`, `proveedor_id`, `fecha`, `fecha_pago`, `condcredito_id`, `vendedor_id`, `bultos`, `unidades`, `docenas`, `saldo`) VALUES
(1, 1, 2, 1, 1, '2013-05-22', '0000-00-00', 1, 1, NULL, NULL, NULL, '0.00'),
(2, 1, 3, 1, 1, '2013-05-22', '0000-00-00', 1, 1, NULL, NULL, NULL, '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradaenc_tmp`
--

CREATE TABLE IF NOT EXISTS `entradaenc_tmp` (
  `empresa_id` int(6) NOT NULL,
  `entradaenc_id` int(6) NOT NULL,
  `tipoentrada_id` int(2) NOT NULL,
  `proveedor_id` int(6) NOT NULL,
  `fecha` date NOT NULL,
  `condcredito_id` int(2) NOT NULL,
  `vendedor_id` int(6) NOT NULL,
  `bultos` int(4) DEFAULT NULL,
  `unidades` int(4) DEFAULT NULL,
  `docenas` int(4) DEFAULT NULL,
  PRIMARY KEY (`entradaenc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE IF NOT EXISTS `estatus` (
  `estatus` int(1) NOT NULL,
  `descripcion` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`estatus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`estatus`, `descripcion`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `existencia`
--
CREATE TABLE IF NOT EXISTS `existencia` (
`producto_id` int(11)
,`ocurrencias` bigint(21)
,`existencia` decimal(33,0)
);
-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `facturasclientes`
--
CREATE TABLE IF NOT EXISTS `facturasclientes` (
`movimiento_id` int(8)
,`linea` varchar(62)
,`cliente_id` int(6)
,`condcredito_id` int(2)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago`
--

CREATE TABLE IF NOT EXISTS `forma_pago` (
  `forma_pago_id` int(1) NOT NULL,
  `forma_pago` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`forma_pago_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `forma_pago`
--

INSERT INTO `forma_pago` (`forma_pago_id`, `forma_pago`) VALUES
(1, 'Efectivo'),
(2, 'Deposito'),
(3, 'Transferencia'),
(4, 'Cheque');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `kardex`
--
CREATE TABLE IF NOT EXISTS `kardex` (
`producto_id` int(11)
,`documento_id` int(11)
,`ente_id` int(11)
,`fecha` date
,`tipomovimiento_id` int(11)
,`cantidad` int(11)
,`precio_unitario` decimal(10,2)
,`iva` decimal(5,2)
,`total_neto` double(12,2)
,`total_final` double(12,2)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas`
--

CREATE TABLE IF NOT EXISTS `lineas` (
  `empresa_id` int(6) NOT NULL,
  `linea_id` int(11) NOT NULL AUTO_INCREMENT,
  `linea` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`linea_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `lineas`
--

INSERT INTO `lineas` (`empresa_id`, `linea_id`, `linea`) VALUES
(1, 1, 'MEDIAS DE NIÑO'),
(1, 2, 'MEDIAS DE NIÑA'),
(1, 3, 'MEDIAS CABALLEROS'),
(1, 4, 'MEDIAS DAMA'),
(1, 5, 'MEDIAS COLEGIAL'),
(1, 6, 'MEDIAS VARIAS'),
(1, 7, 'MEDIAS CALENTADORES'),
(1, 8, 'MEDIAS  AEROBICAS'),
(1, 9, 'MEDIAS FUTBOL'),
(1, 10, 'MEDIAS  BEISBOL'),
(1, 11, 'MEDIAS BLANCAS'),
(1, 12, 'MEDIAS DEPORTIVAS'),
(1, 13, 'BOXER HOMBRE'),
(1, 14, 'BOXER NIÑO'),
(1, 15, 'CAMISETAS HOMBRE'),
(1, 16, 'CAMISETAS NIÑO'),
(1, 17, 'FRANELAS HOMBRE'),
(1, 18, 'MONOS COLEGIALe'),
(1, 19, 'CHEMIS'),
(1, 20, 'CAMISAS'),
(1, 21, 'SABANAS'),
(1, 22, 'TOALLAS'),
(1, 23, 'COBIJAS'),
(1, 24, 'BATAS'),
(1, 25, 'BLUMERS'),
(1, 26, 'TOPS'),
(1, 27, 'SOSTENES'),
(1, 28, 'CONJUNTOS'),
(1, 29, 'LEGGINS'),
(1, 30, 'BLUSAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE IF NOT EXISTS `marcas` (
  `empresa_id` int(6) NOT NULL,
  `marca_id` int(6) NOT NULL AUTO_INCREMENT,
  `marca` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`marca_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`empresa_id`, `marca_id`, `marca`) VALUES
(1, 1, 'Generico'),
(1, 2, 'AERO WEAR'),
(1, 3, 'THE ANGIE DESIGN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagocliente`
--

CREATE TABLE IF NOT EXISTS `pagocliente` (
  `empresa_id` int(6) NOT NULL,
  `pagocli_id` int(6) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(6) NOT NULL,
  `forma_pago_id` int(1) NOT NULL,
  `movimiento_id` int(8) NOT NULL,
  `documento_nro` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_pago` date NOT NULL,
  `monto` double(10,2) NOT NULL,
  PRIMARY KEY (`pagocli_id`),
  KEY `pagocliente_key` (`cliente_id`),
  KEY `pagofactcli_key` (`documento_nro`),
  KEY `pagobancocli` (`movimiento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `pagocliente`
--

INSERT INTO `pagocliente` (`empresa_id`, `pagocli_id`, `cliente_id`, `forma_pago_id`, `movimiento_id`, `documento_nro`, `fecha_pago`, `monto`) VALUES
(1, 1, 12, 2, 12, '435435', '2013-05-21', 2872.80),
(1, 2, 12, 3, 16, '12244555', '2013-05-20', 2100.00),
(1, 3, 12, 3, 16, '12244555', '2013-05-20', 2100.00),
(1, 4, 12, 3, 16, '12244555', '2013-05-20', 2100.00),
(1, 5, 12, 1, 15, '655557', '2013-05-20', 1000.00),
(1, 6, 1, 1, 5, '7896786547', '2013-05-21', 2534.00),
(1, 7, 2, 1, 8, '987879879', '2013-05-21', 10020.00),
(1, 8, 2, 1, 8, '8756846', '2013-05-21', 10000.00),
(1, 9, 7, 1, 9, '323552332', '2013-05-21', 300.00),
(1, 10, 14, 2, 10, '1234567890777755', '2013-05-21', 3000.00),
(1, 11, 12, 1, 6, '', '2013-05-21', 1000.00),
(1, 12, 12, 1, 6, '', '2013-05-21', 1000.00),
(1, 13, 12, 1, 6, '', '2013-05-21', 1000.00),
(1, 14, 12, 1, 6, '', '2013-05-21', 1000.00),
(1, 15, 7, 4, 9, '235542334433', '2013-05-21', 372.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagoproveedor`
--

CREATE TABLE IF NOT EXISTS `pagoproveedor` (
  `empresa_id` int(6) NOT NULL,
  `pagoprov_id` int(6) NOT NULL,
  `proveedor_id` int(6) NOT NULL,
  `forma_pago_id` int(1) NOT NULL,
  `banco_id` int(6) NOT NULL,
  `movimiento_id` int(8) NOT NULL,
  `fecha_pago` date NOT NULL,
  `monto` double(10,2) NOT NULL,
  PRIMARY KEY (`pagoprov_id`),
  KEY `pagoproveedor_key` (`proveedor_id`),
  KEY `pagofactprov_key` (`movimiento_id`),
  KEY `pagobancoprov` (`banco_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `empresa_id` int(6) NOT NULL,
  `producto_id` int(12) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `linea_id` int(2) DEFAULT '1',
  `marca_id` int(6) DEFAULT '1',
  `cod_fabricante` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `costo_prom` decimal(10,2) DEFAULT '0.00',
  `ult_costo` decimal(10,2) DEFAULT '0.00',
  `pvp` decimal(10,2) NOT NULL,
  `paga_iva` int(1) NOT NULL DEFAULT '1',
  `existencia` int(7) DEFAULT '0',
  PRIMARY KEY (`producto_id`),
  KEY `linea_key` (`linea_id`),
  KEY `marca_key` (`marca_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`empresa_id`, `producto_id`, `descripcion`, `linea_id`, `marca_id`, `cod_fabricante`, `costo_prom`, `ult_costo`, `pvp`, `paga_iva`, `existencia`) VALUES
(1, 1, 'MEDIAS DE NIÑO UNICOLOR T/0-2', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 2, 'MEDIAS DE NIÑO UNICOLOR T/2-4', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 3, 'MEDIAS DE NIÑO UNICOLOR T/ 4-6', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 4, 'MEDIAS DE NIÑO UNICOLOR T/ 6-8', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 5, 'MEDIAS DE NIÑO UNICOLOR T/8-10', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 6, 'MEDIAS DE NIÑO UNICOLOR T/ 10-12', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 7, 'MEDIAS DE NIÑO  UNICOLOR T/ 12-14', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 8, 'MEDIAS DE NIÑO  UNICOLOR T/ 14-16', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 9, 'MEDIAS DE NIÑO  ESTAMPADAS T/0-2', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 10, 'MEDIAS DE NIÑO ESTAMPADAS T/2-4', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 11, 'MEDIAS DE NIÑO ESTAMPADAS  T/ 4-6', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 12, 'MEDIAS DE NIÑO ESTAMPADAS  T/ 6-8', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 13, 'MEDIAS DE NIÑO ESTAMPADAS  T/8-10', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 14, 'MEDIAS DE NIÑO ESTAMPADAS  T/ 10-12', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 15, 'MEDIAS DE NIÑO  ESTAMPADAS  T/ 12-14', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 16, 'MEDIAS DE NIÑO  ESTAMPADAS  T/ 14-16', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 17, 'MEDIAS DE NIÑO COMBINADAS EN COLOR T/0-2', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 18, 'MEDIAS DE NIÑO COMBINADAS EN COLOR  T/2-4', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 19, 'MEDIAS DE NIÑO COMBINADAS EN COLOR  T/ 4-6', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 20, 'MEDIAS DE NIÑO COMBINADAS EN COLOR   T/ 6-8', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 21, 'MEDIAS DE NIÑO COMBINADAS EN COLOR  T/8-10', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 22, 'MEDIAS DE NIÑO COMBINADAS EN COLOR  T/ 10-12', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 23, 'MEDIAS DE NIÑO  COMBINADAS EN COLOR   T/ 12-14', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 24, 'MEDIAS DE NIÑO  COMBINADAS EN COLOR  T/ 14-16', 1, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 25, 'MEDIAS DE NIÑA UNICOLOR T/0-2', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 26, 'MEDIAS DE NIÑA UNICOLOR T/2-4', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 27, 'MEDIAS DE NIÑA UNICOLOR T/ 4-6', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 28, 'MEDIAS DE NIÑA UNICOLOR T/ 6-8', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 29, 'MEDIAS DE NIÑA UNICOLOR T/8-10', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 30, 'MEDIAS DE NIÑA UNICOLOR T/ 10-12', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 31, 'MEDIAS DE NIÑA  UNICOLOR T/ 12-14', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 32, 'MEDIAS DE NIÑA  UNICOLOR T/ 14-16', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 33, 'MEDIAS DE NIÑA  ESTAMPADAS T/0-2', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 34, 'MEDIAS DE NIÑA ESTAMPADAS T/2-4', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 35, 'MEDIAS DE NIÑA ESTAMPADAS  T/ 4-6', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 36, 'MEDIAS DE NIÑA ESTAMPADAS  T/ 6-8', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 37, 'MEDIAS DE NIÑA ESTAMPADAS  T/8-10', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 38, 'MEDIAS DE NIÑA ESTAMPADAS  T/ 10-12', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 39, 'MEDIAS DE NIÑA  ESTAMPADAS  T/ 12-14', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 40, 'MEDIAS DE NIÑA  ESTAMPADAS  T/ 14-16', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 41, 'MEDIAS DE NIÑA COMBINADAS EN COLOR T/0-2', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 42, 'MEDIAS DE NIÑA COMBINADAS EN COLOR  T/2-4', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 43, 'MEDIAS DE NIÑA COMBINADAS EN COLOR  T/ 4-6', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 44, 'MEDIAS DE NIÑA COMBINADAS EN COLOR   T/ 6-8', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 45, 'MEDIAS DE NIÑA COMBINADAS EN COLOR  T/8-10', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 46, 'MEDIAS DE NIÑA COMBINADAS EN COLOR  T/ 10-12', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 47, 'MEDIAS DE NIÑA  COMBINADAS EN COLOR   T/ 12-14', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 48, 'MEDIAS DE NIÑA  COMBINADAS EN COLOR  T/ 14-16', 2, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 49, 'MEDIAS CABALLEROS UNICOLOR  T/ UNICA', 3, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 50, 'MEDIAS CABALLERO ESTAMPADAS  T/ UNICA', 3, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 51, 'MEDIAS CABALLEROS COMBINADAS T/ UNICA', 3, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 52, 'MEDIAS DAMA  UNICOLOR TOBILLERA', 4, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 53, 'NEDIAS DAMA   UNICOLOR TALONERA', 4, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 54, 'MEDIAS DAMA   UNICOLOR  3/4', 4, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 55, 'MEDIAS DAMA  ESTAMPADAS  TOBILLERA', 4, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 56, 'MEDIAS DAMA  ESTAMPADAS  TALONERA', 4, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 57, 'MEDIAS DAMA  ESTAMPADAS   3/4', 4, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 58, 'MEDIAS DAMA   COMBINADAS TOBILLERA', 4, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 59, 'MEDIAS DAMA   COMBINADAS  TALONERA', 4, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 60, 'MEDIAS DAMA   COMBINADAS    3/4', 4, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 61, 'MEDIAS COLEGIAL BLANCA  T/0-2', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 62, 'MEDIAS COLEGIAL BLANCA T/ 2-4', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 63, 'MEDIAS COLOGIAL BLANCA T/4-6', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 64, 'MEDIAS COLEGIAL BLANCA  T/ 6-8', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 65, 'MEDIAS COLEGIAL BLANCA T/ 6-8', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 66, 'MEDIAS COLEGIAL BLANCA T/8-10', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 67, 'MEDIAS COLEGIAL BLANCA  T/ 10-12', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 68, 'MEDIAS COLEGIAL BLANCA T/12-14', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 69, 'MEDIAS COLEGIAL BLANCA T/ 14-16', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 70, 'MEDIAS COLEGIAL BLANCA T/S', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 71, 'MEDIAS COLEGIAL BLANCA T/M', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 72, 'MEDIAS COLEGIAL BLANCA T/L', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 73, 'MEDIAS COLEGIAL BLANCA T/XL', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 74, 'MEDIAS COLEGIAL DE COLOR  T/0-2', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 75, 'MEDIAS COLEGIAL DE COLOR T/ 2-4', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 76, 'MEDIAS COLOGIAL DE COLOR  T/4-6', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 77, 'MEDIAS COLEGIAL  DE COLOR  T/ 6-8', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 78, 'MEDIAS COLEGIAL  DE COLOR T/ 6-8', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 79, 'MEDIAS COLEGIAL  DE COLOR T/8-10', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 80, 'MEDIAS COLEGIAL DE COLOR T/ 10-12', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 81, 'MEDIAS COLEGIAL DE COLOR  T/12-14', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 82, 'MEDIAS COLEGIAL  DE COLOR  T/ 14-16', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 83, 'MEDIAS COLEGIAL  DE COLOR  T/S', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 84, 'MEDIAS COLEGIAL  DE COLOR  T/M', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 85, 'MEDIAS COLEGIAL  DE COLOR T/L', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 86, 'MEDIAS COLEGIAL  DE COLOR  T/XL', 5, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 87, 'MEDIAS ROMBO', 6, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 89, 'MEDIAS DE PAÑO', 6, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 90, 'MEDIAS CALENTADORES  ESTAMPADAS T/ S', 7, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 91, 'MEDIAS CALENTADORES ESTAMPADAS T/M', 7, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 92, 'MEDIAS CALENTADORES ESTAMPADAS T/ L', 7, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 93, 'MEDIAS CALENTADORES ESTAMPADAS  T/XL', 7, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 94, 'MEDIAS CALENTADORES  UNICOLOR  T/ S', 7, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 95, 'MEDIAS CALENTADORES  UNICOLOR T/M', 7, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 96, 'MEDIAS CALENTADORES  UNICOLOR T/ L', 7, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 97, 'MEDIAS CALENTADORES  UNICOLOR  T/XL', 7, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 98, 'MEDIAS  AEROBICAS   ESTAMPADAS T/ S', 8, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 99, 'MEDIAS  AEROBICAS  ESTAMPADAS T/M', 8, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 100, 'MEDIAS  AEROBICAS  ESTAMPADAS T/ L', 8, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 101, 'MEDIAS  AEROBICAS  ESTAMPADAS  T/XL', 8, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 102, 'MEDIAS  AEROBICAS   UNICOLOR  T/ S', 8, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 103, 'MEDIAS  AEROBICAS   UNICOLOR T/M', 8, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 104, 'MEDIAS  AEROBICAS   UNICOLOR  T/ L', 8, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 105, 'MEDIAS  AEROBICAS   UNICOLOR   T/XL', 8, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 106, 'MEDIAS FUTBOL NIÑO DE COLOR T/ 6-8', 9, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 107, 'MEDIAS FUTBOL  NIÑO DE COLOR T/8-10', 9, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 108, 'MEDIAS FUTBOL  NIÑO DE COLOR T/ 10-12', 9, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 109, 'MEDIAS  FUTBOL  NIÑO  DE COLOR T/ 12-14', 9, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 110, 'MEDIAS  FUTBOL  NIÑO  DE COLOR T/ 14-16', 9, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 111, 'MEDIAS FUTBOL NIÑO    BLANCAS T/ 6-8', 9, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 112, 'MEDIAS FUTBOL  NIÑO   BLANCAS T/8-10', 9, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 113, 'MEDIAS FUTBOL  NIÑO   BLANCA T/ 10-12', 9, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 114, 'MEDIAS  FUTBOL  NIÑO  BLANCA T/ 12-14', 9, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 115, 'MEDIAS  FUTBOL  NIÑO  BLANCA T/ 14-16', 9, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 116, 'MEDIAS FUTBOL NIÑO   ESTAMPADAS  T/ 6-8', 9, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 117, 'MEDIAS FUTBOL  NIÑO   ESTAMPADAS T/8-10', 9, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 118, 'MEDIAS FUTBOL  NIÑO   ESTAMPADAS  T/ 10-12', 9, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 119, 'MEDIAS  FUTBOL  NIÑO  ESTAMPADAS  T/ 12-14', 9, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 120, 'MEDIAS  FUTBOL  NIÑO  ESTAMPADAS  T/ 14-16', 9, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 121, 'MEDIAS BEISBOL   NIÑO DE COLOR T/ 6-8', 10, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 122, 'MEDIAS BEISBOL   NIÑO DE COLOR T/8-10', 10, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 123, 'MEDIAS BEISBOL   NIÑO DE COLOR T/ 10-12', 10, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 124, 'MEDIAS  BEISBOL  NIÑO  DE COLOR T/ 12-14', 10, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 125, 'MEDIAS  BEISBOL   NIÑO  DE COLOR T/ 14-16', 10, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 126, 'MEDIAS BEISBOL  NIÑO    BLANCAS T/ 6-8', 10, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 127, 'MEDIAS  BEISBOL  NIÑO   BLANCAS T/8-10', 10, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 128, 'MEDIAS  BEISBOL  NIÑO   BLANCA T/ 10-12', 10, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 129, 'MEDIAS  BEISBOL   NIÑO  BLANCA T/ 12-14', 10, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 130, 'MEDIAS  BEISBOL   NIÑO  BLANCA T/ 14-16', 10, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 131, 'MEDIAS  BEISBOL  NIÑO ESTAMPADAS T/ 6-8', 10, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 132, 'MEDIAS  BEISBOL  NIÑO  ESTAMPADAS T/8-10', 10, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 133, 'MEDIAS  BEISBOL  NIÑO  ESTAMPADAS  T/ 10-12', 10, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 134, 'MEDIAS  BEISBOL  NIÑO  ESTAMPADAS  T/ 12-14', 10, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 135, 'MEDIAS  BEISBOL  NIÑO   ESTAMPADAS T/14-16', 10, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 136, 'MEDIAS BLANCA DEPORTIVA TUBULAR T/S', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 137, 'MEDIAS BLANCA DEPORTIVA  TUBULAR T/ M', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 138, 'MEDIAS BLANCA DEPORTIVA  TUBULAR T/L ', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 139, 'MEDIAS BLANCA DEPORTIVA TUBULAR T/XL', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 140, 'MEDIA BLANCA DEPORTIVA TALONERA T/S', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 141, 'MEDIA BLANCA DEPORTIVA TALONERA T/ M', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 142, 'MEDIA BLANCA DEPORTIVA TALONERA T/L', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 143, 'MEDIA BLANCA DEPORTIVA TALONERA T/XL', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 144, 'MEDIA BLANCA DEPPRTIVA TOBILLERA T/S', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 145, 'MEDIA BLANCA DEPORTIVA TOBILLERA T/ M', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 146, 'MEDIA BLANCA DEPORTIVA TOBILLERA  T/L', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 147, 'MEDIA BLANCA DEPORTIVA TOBILLERA  T/XL', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 148, 'MEDIA BLANCA TALONERA  PUNTA Y TALON GRIS T/S', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 149, 'MEDIA BLANCA TALONERA  PUNTA Y TALON GRIS T/M', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 150, 'MEDIA BLANCA TALONERA  PUNTA Y TALON GRIS T/L', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 151, 'MEDIA BLANCA TALONERA  PUNTA Y TALON GRIS T/XL', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 152, 'MEDIA BLANCA TOBILLERAS  PUNTA Y TALON GRIS T/S', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 153, 'MEDIA BLANCA TOBILLERAS   PUNTA Y TALON GRIS T/M', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 154, 'MEDIA BLANCA TOBILLERAS   PUNTA Y TALON GRIS T/L', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 155, 'MEDIA BLANCA TOBILLERAS   PUNTA Y TALON GRIS T/XL', 11, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 156, 'MEDIAS DEPORTIVAS TUBULAR  SURTIDAS T/S', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 157, 'MEDIAS DEPORTIVAS TUBULAR SURTIDAS T/ M', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 158, 'MEDIAS DEPORTIVAS TUBULAR SURTIDAS T/L', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 159, 'MEDIAS DEPORTIVAS  TUBULAR SURTIDAS T/XL', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 160, 'MEDIAS DEPORTIVAS TOBILLERA  SURTIDAS T/S', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 161, 'MEDIAS DEPORTIVAS TOBILLERA  SURTIDAS T/ M', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 162, 'MEDIAS DEPORTIVAS TOBILLERA  SURTIDAS T/L', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 163, 'MEDIAS DEPORTIVAS  TOBILLERA SURTIDAS T/XL', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 164, 'MEDIAS DEPORTIVAS TALONETA   SURTIDAS T/S', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 165, 'MEDIAS DEPORTIVAS TALONERA   SURTIDAS T/ M', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 166, 'MEDIAS DEPORTIVAS TALONERA    SURTIDAS T/L', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 167, 'MEDIAS DEPORTIVAS  TALONERA   SURTIDAS T/XL', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 168, 'MEDIAS DEPORTIVAS TOBILLERA  CON LOGO  T/S', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 169, 'MEDIAS DEPORTIVAS TOBILLERA  CON LOGO  T/ M', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 170, 'MEDIAS DEPORTIVAS TOBILLERA  CON LOGO  T/L', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 171, 'MEDIAS DEPORTIVAS  TOBILLERA  CON LOGO  T/XL', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 172, 'MEDIAS DEPORTIVAS TALONETA   CON LOGO  T/S', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 173, 'MEDIAS DEPORTIVAS TALONERA   CON LOGO T/ M', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 174, 'MEDIAS DEPORTIVAS TALONERA    CON LOGO  T/L', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 175, 'MEDIAS DEPORTIVAS  TALONERA   CON LOGO  T/XL', 12, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 176, 'BOXER HOMBRE UNICOLOR T/S', 13, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 177, 'BOXER HOMBRE UNICOLOR T/M', 13, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 178, 'BOXER HOMBRE UNICOLOR T/L', 13, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 179, 'BOXER HOMBRE  UNICOLOR  T/XL', 13, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 180, 'BOXER HOMBRE ESTAMPADOS T/S', 13, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 181, 'BOXER HOMBRE ESTAMPADOS T/M', 13, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 182, 'BOXER HOMBRE  ESTAMPADOS T/L', 13, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 183, 'BOXER HOMBRE  ESTAMPADOS T/XL', 13, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 184, 'BOXER NIÑO  UNICOLOR T/2', 14, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 185, 'BOXER NIÑO  UNICOLOR T/4', 14, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 186, 'BOXER NIÑO  UNICOLOR T/6', 14, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 187, 'BOXER NIÑO   UNICOLOR T/ 8', 14, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 188, 'BOXER NIÑO   UNICOLOR T/10', 14, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 189, 'BOXER NIÑO  UNICOLOR T/12', 14, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 190, 'BOXER NIÑO   UNICOLOR T/14', 14, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 191, 'BOXER NIÑO   UNICOLOR T/16', 14, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 192, 'BOXER NIÑO  ESTAMPADOS T/2', 14, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 193, 'BOXER NIÑO   ESTAMPADOS  T/4', 14, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 194, 'BOXER NIÑO   ESTAMPADOS T/6', 14, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 195, 'BOXER NIÑO   ESTAMPADOS T/ 8', 14, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 196, 'BOXER NIÑO   ESTAMPADOS T/10', 14, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 197, 'BOXER NIÑO   ESTAMPADOS T/12', 14, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 198, 'BOXER NIÑO    ESTAMPADOST/14', 14, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 199, 'BOXER NIÑO    ESTAMPADOS T/16', 14, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 200, 'CAMISETAS BLANCA HOMBRE T/S', 15, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 201, 'CAMISETAS BLANCA HOMBRE T/M', 15, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 202, 'CAMISETAS BLANCA HOMBRE T/L', 15, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 203, 'CAMISETAS BLANCAS HOMBRE T/XL', 15, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 204, 'CAMISETAS DE COLOR HOMBRE T/S', 15, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 205, 'CAMISETAS DE COLOR HOMBRE T/M', 15, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 206, 'CAMISETAS DE COLOR  HOMBRE T/L', 15, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 207, 'CAMISETAS DE COLOR  HOMBRE T/XL', 15, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 208, 'CAMISETAS BLANCA NIÑO T/2', 16, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 209, 'CAMISETAS BLANCA NIÑO T/4', 16, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 210, 'CAMISETAS BLANCA NIÑO T/6', 16, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 211, 'CAMISETAS BLANCA NIÑO T/8', 16, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 212, 'CAMISETAS BLANCA NIÑO T/10', 16, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 213, 'CAMISETAS BLANCA NIÑO T/12', 16, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 214, 'CAMISETAS BLANCA NIÑO T/14', 16, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 215, 'CAMISETAS BLANCA NIÑO T/16', 16, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 216, 'CAMISETAS DE COLOR NIÑO T/2', 16, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 217, 'CAMISETAS DE COLOR NIÑO T/4', 16, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 218, 'CAMISETAS DE COLOR  NIÑO T/6', 16, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 219, 'CAMISETAS DE COLOR  NIÑO T/8', 16, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 220, 'CAMISETAS DE COLOR NIÑO T/10', 16, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 221, 'CAMISETAS DE COLOR  NIÑO T/12', 16, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 222, 'CAMISETAS DE COLOR  NIÑO T/14', 16, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 223, 'CAMISETAS DE COLOR  NIÑO T/16', 16, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 224, 'FRANELA BLANCA HOMBRE T/S', 17, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 225, 'FRANELA BLANCA HOMBRE T/M', 17, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 226, 'FRANELA BLANCA HOMBRE T/L', 17, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 227, 'FRANELA BLANCA HOMBRE T/XL', 17, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 228, 'FRANELA DE COLOR HOMBRE T/S', 17, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 229, 'FRANELA DE COLOR  HOMBRE T/M', 17, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 230, 'FRANELA DE COLOR  HOMBRE T/L', 17, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 231, 'FRANELA DE COLOR  HOMBRE T/XL', 17, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 232, 'MONO COLEGIAL T/ 2', 18, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 233, 'MONO COLEGIAL T/4', 18, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 234, 'MONO COLEGIAL T/6', 18, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 235, 'MONO COLEGIAL T/8', 18, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 236, 'MONO COLEGIAL T/10', 18, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 237, 'MONO COLEGIAL T/12', 18, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 238, 'MONO COLEGIAL T/14', 18, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 239, 'MONO COLEGIAL T/16', 18, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 240, 'MONO COLEGIAL T/S', 18, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 241, 'MONO COLEGIAL T/M', 18, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 242, 'MONO COLEGIAL T/L', 18, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 243, 'MONO COLEGIAL T/XL', 18, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 244, 'CHEMIS  BLANCA T/2', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 245, 'CHEMIS   BLANCA T/4', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 246, 'CHEMIS   BLANCA T/6', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 247, 'CHEMIS   BLANCA T/8', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 248, 'CHEMIS   BLANCA T10', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 249, 'CHEMIS   BLANCA T/12', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 250, 'CHEMIS   BLANCA T/14', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 251, 'CHEMIS   BLANCA T/16', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 252, 'CHEMIS   BLANCA T/S', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 253, 'CHEMIS   BLANCA T/M', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 254, 'CHEMIS   BLANCA T/L', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 255, 'CHEMIS   BLANCA T/XL', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 256, 'CHEMIS   DE COLOR T/2', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 257, 'CHEMIS   DE COLOR  T/4', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 258, 'CHEMIS   DE COLOR T/6', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 259, 'CHEMIS   DE COLOR T/8', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 260, 'CHEMIS   DE COLOR  T10', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 261, 'CHEMIS   DE COLOR T/12', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 262, 'CHEMIS   DE COLOR  T/14', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 263, 'CHEMIS   DE COLOR  T/16', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 264, 'CHEMIS   DE COLOR  T/S', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 265, 'CHEMIS   DE COLOR  T/M', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 266, 'CHEMIS   DE COLOR  T/L', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 267, 'CHEMIS   DE COLOR  T/XL', 19, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 268, 'CAMISA BLANCA T/2', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 269, 'CAMISA BLANCA T/4', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 270, 'CAMISA BLANCA T/6', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 271, 'CAMISA BLANCA T/8', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 272, 'CAMISA BLANCA T/10', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 273, 'CAMISA BLANCA T/12', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 274, 'CAMISA BLANCA T/14', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 275, 'CAMISA BLANCA T/16', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 276, 'CAMISA BLANCA T/S', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 277, 'CAMISA BLANCA T/M', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 278, 'CAMISA BLANCA T/L', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 279, 'CAMISA BLANCA T/XL', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 280, 'CAMISA DE COLOR  T/2', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 281, 'CAMISA DE COLOR  T/4', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 282, 'CAMISA DE COLOR  T/6', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 283, 'CAMISA DE COLOR  T/8', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 284, 'CAMISA DE COLOR  T/10', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 285, 'CAMISA DE COLOR  T/12', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 286, 'CAMISA DE COLOR  T/14', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 287, 'CAMISA DE COLOR  T/16', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 288, 'CAMISA DE COLOR  T/S', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 289, 'CAMISA DE COLOR T/M', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 290, 'CAMISA DE COLOR T/L', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 291, 'CAMISA DE COLOR  T/XL', 20, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 292, 'SABANAS INDIVIDUAL UNICOLOR', 21, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 293, 'SABANA MATRIMONIAL UNICOLOR', 21, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 294, 'SABANA QUEEN UNICOLOR', 21, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 295, 'SABANA  KING UNICOLOR', 21, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 296, 'SABANAS INDIVIDUAL ESTAMPADA', 21, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 297, 'SABANA MATRIMONIAL ESTAMPADA', 21, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 298, 'SABANA QUEEN ESTAMPADA', 21, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 299, 'SABANA  KING ESTAMPADA', 21, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 300, 'TOALLAS UNICOLOR', 22, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 301, 'TOALLAS BLANCAS', 22, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 302, 'TOALLAS ESTAMPADAS', 22, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 303, 'COBIJAS UNICOLOR  MATRIMONIAL ', 23, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 304, 'COBIJAS UNICOLOR INDIVIDUAL', 23, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 305, 'COBIJA ESTAMPADAS MATRIMONIAL', 23, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 306, 'COBIJAS ESTAMPADAS INDIVIDUAL', 23, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 307, 'BATAS UNICOLOR DAMA T/S', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 308, 'BATAS UNICOLOR DAMA T/M', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 309, 'BATAS UNICOLOR DAMA T/L', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 310, 'BATAS UNICOLOR DAMA T/XL', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 311, 'BATAS UNICOLOR NIÑA T/ 2', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 312, 'BATAS UNICOLOR NIÑA T/4', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 313, 'BATAS UNICOLOR NIÑA T/6', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 314, 'BATAS UNICOLOR NIÑA T/8', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 315, 'BATAS UNICOLOR NIÑA T/10', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 316, 'BATAS UNICOLOR NIÑA T/12', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 317, 'BATAS UNICOLOR NIÑA T/14', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 318, 'BATAS UNICOLOR NIÑA T/16', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 319, 'BATAS ESTAMPADAS  DAMA T/S', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 320, 'BATAS ESTAMPADAS  DAMA T/M', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 321, 'BATAS ESTAMPADAS  DAMA T/L', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 322, 'BATAS ESTAMPADAS DAMA T/XL', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 323, 'BATAS ESTAMPADAS  NIÑA T/ 2', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 324, 'BATAS ESTAMPADAS NIÑA T/4', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 325, 'BATAS ESTAMPADAS  NIÑA T/6', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 326, 'BATAS ESTAMPADAS NIÑA T/8', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 327, 'BATAS ESTAMPADAS NIÑA T/10', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 328, 'BATAS ESTAMPADAS  NIÑA T/12', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 329, 'BATAS ESTAMPADAS  NIÑA T/14', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 330, 'BATAS ESTAMPADAS NIÑA T/16', 24, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 331, 'BLUMER DE NIÑA UNICOLOR T/2', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 332, 'BLUMER DE NIÑA UNICOLOR T/4', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 333, 'BLUMER DE NIÑA UNICOLOR T/6', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 334, 'BLUMER DE NIÑA UNICOLOR T/8', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 335, 'BLUMER DE NIÑE UNICOLOR T/10', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 336, 'BLUMER DE NIÑA UNICOLOR T/12', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 337, 'BLUMER DE NIÑA UNICOLOR T/14', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 338, 'BLUMER DE NIÑA UNICOLOR T/16', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 339, 'BLUMER DE DAMA UNICOLOR T/S', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 340, 'BLUMER DE DAMA UNICOLOR T/M', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 341, 'BLUMER DE DAMA UNICOLOR T/L', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 342, 'BLUMER DE DAMA UNICOLOR T/XL', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 343, 'BLUMER DE NIÑA ESTAMPADAS T/2', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 344, 'BLUMER DE NIÑA ESTAMPADAS T/4', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 345, 'BLUMER DE NIÑA ESTAMPADAS T/6', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 346, 'BLUMER DE NIÑA ESTAMPADAST/8', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 347, 'BLUMER DE NIÑE ESTAMPADAS T/10', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 348, 'BLUMER DE NIÑA ESTAMPADAS  T/12', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 349, 'BLUMER DE NIÑA ESTAMPADAS  T/14', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 350, 'BLUMER DE NIÑA ESTAMPADAS  T/16', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 351, 'BLUMER DE DAMA ESTAMPADA T/S', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 352, 'BLUMER DE DAMA ESTAMPADA T/M', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 353, 'BLUMER DE DAMA ESTAMPADA  T/L', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 354, 'BLUMER DE DAMA ESTAMPADA  T/XL', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 355, 'BLUMER DE NIÑA BLANCA T/2', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 356, 'BLUMER DE NIÑA BLANCA T/4', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 357, 'BLUMER DE NIÑA BLANCA T/6', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 358, 'BLUMER DE NIÑA BLANCA T/8', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 359, 'BLUMER DE NIÑE BLANCA  T/10', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 360, 'BLUMER DE NIÑA BLANCA  T/12', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 361, 'BLUMER DE NIÑA  BLANCA   T/14', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 362, 'BLUMER DE NIÑA  BLANCA  T/16', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 363, 'BLUMER DE DAMA BLANCA T/S', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 364, 'BLUMER DE DAMA BLANCA  T/M', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 365, 'BLUMER DE DAMA BLANCA  T/L', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 366, 'BLUMER DE DAMA  BLANCA  T/XL', 25, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 367, 'TOP  DE NIÑA UNICOLOR T/2', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 368, 'TOP  DE NIÑA UNICOLOR T/4', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 369, 'TOP DE NIÑA UNICOLOR T/6', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 370, 'TOP DE NIÑA UNICOLOR T/8', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 371, 'TOP DE NIÑE UNICOLOR T/10', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 372, 'TOP DE NIÑA UNICOLOR T/12', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 373, 'TOP DE NIÑA UNICOLOR T/14', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 374, 'TOP DE NIÑA UNICOLOR T/16', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 375, 'TOP  DE DAMA UNICOLOR T/S', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 376, 'TOP  DE DAMA UNICOLOR T/M', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 377, 'TOP DE DAMA UNICOLOR T/L', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 378, 'TOP  DE DAMA UNICOLOR T/XL', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 379, 'TOP  DE NIÑA ESTAMPADO T/2', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 380, 'TOP  DE NIÑA ESTAMPADO T/4', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 381, 'TOP DE NIÑA ESTAMPADO T/6', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 382, 'TOP  DE NIÑA ESTAMPADO T/8', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 383, 'TOP DE NIÑA ESTAMPADO T/10', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 384, 'TOP  DE NIÑA ESTAMPADO  T/12', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 385, 'TOP DE NIÑA ESTAMPADO T/14', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 386, 'TOP  DE NIÑA ESTAMPADO T/16', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 387, 'TOP  DE DAMA ESTAMPADO T/S', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 388, 'TOP  DE DAMA ESTAMPADO T/M', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 389, 'TOP DE DAMA ESTAMPADO  T/L', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 390, 'TOP  DE DAMA ESTAMPADO T/XL', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 391, 'TOP  DE NIÑA BLANCA T/2', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 392, 'TOP  DE NIÑA BLANCA T/4', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 393, 'TOP  DE NIÑA BLANCA T/6', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 394, 'TOP  DE NIÑA BLANCA T/8', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 395, 'TOP DE NIÑE BLANCA  T/10', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 396, 'TOP  DE NIÑA BLANCA  T/12', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 397, 'TOP DE NIÑA  BLANCA   T/14', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 398, 'TOP  DE NIÑA  BLANCA  T/16', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 399, 'TOP DE DAMA BLANCA T/S', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 400, 'TOP  DE DAMA BLANCA  T/M', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 401, 'TOP  DE DAMA BLANCA  T/L', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 402, 'TOP  DE DAMA  BLANCA  T/XL', 26, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 403, 'SOSTENES  DE NIÑA UNICOLOR T/2', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 404, 'SOSTENES  DE NIÑA UNICOLOR T/4', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 405, 'SOSTENES  DE NIÑA UNICOLOR T/6', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 406, 'SOSTENES DE NIÑA UNICOLOR T/8', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 407, 'SOSTENES  DE NIÑE UNICOLOR T/10', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 408, 'SOSTENES  DE NIÑA UNICOLOR T/12', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 409, 'SOSTENES DE NIÑA UNICOLOR T/14', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 410, 'SOSTENES  DE NIÑA UNICOLOR T/16', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 411, 'SOSTENES  DE DAMA UNICOLOR T/S', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 412, 'SOSTENES DE DAMA UNICOLOR T/M', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 413, 'SOSTENES  DE DAMA UNICOLOR T/L', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 414, 'SOSTENES DE DAMA UNICOLOR T/XL', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 415, 'SOSTENES  DE NIÑA ESTAMPADO T/2', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 416, 'SOSTENES  DE NIÑA ESTAMPADO T/4', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 417, 'SOSTENES DE NIÑA ESTAMPADO T/6', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 418, 'SOSTENES DE NIÑA ESTAMPADO T/8', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 419, 'SOSTENES DE NIÑA ESTAMPADO T/10', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 420, 'SOSTENES DE NIÑA ESTAMPADO  T/12', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 421, 'SOSTENES DE NIÑA ESTAMPADO T/14', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 422, 'SOSTENES DE NIÑA ESTAMPADO T/16', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 423, 'SOSTENES DE DAMA ESTAMPADO T/S', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 424, 'SOSTENES DE DAMA ESTAMPADO T/M', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 425, 'SOSTENES DE DAMA ESTAMPADO  T/L', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 426, 'SOSTENES  DE DAMA ESTAMPADO T/XL', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 427, 'SOSTENES DE NIÑA BLANCA T/2', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 428, 'SOSTENES  DE NIÑA BLANCA T/4', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 429, 'SOSTENES DE NIÑA BLANCA T/6', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 430, 'SOSTENES DE NIÑA BLANCA T/8', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 431, 'SOSTENES DE NIÑE BLANCA  T/10', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 432, 'SOSTENES DE NIÑA BLANCA  T/12', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 433, 'SOSTENES DE NIÑA  BLANCA   T/14', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 434, 'SOSTENES DE NIÑA  BLANCA  T/16', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 435, 'SOSTENES DE DAMA BLANCA T/S', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 436, 'SOSTENES  DE DAMA BLANCA  T/M', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 437, 'SOSTENES DE DAMA BLANCA  T/L', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 438, 'SOSTENES DE DAMA  BLANCA  T/XL', 27, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 439, 'CONJUNTO DOS PIEZAS NIÑA T/2', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 440, 'CONJUNTO DOS PIEZAS NIÑA T/4', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 441, 'CONJUNTO DOS PIEZAS NIÑA T/6', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 442, 'CONJUNTO DOS PIEZAS NIÑA T/8', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 443, 'CONJUNTO DOS PIEZAS NIÑA T/10', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 444, 'CONJUNTO DOS PIEZAS NIÑA T/12', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 445, 'CONJUNTO DOS PIEZAS NIÑA T/14', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 446, 'CONJUNTO DOS PIEZAS NIÑA T/16', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 447, 'CONJUNTO DOS PIEZAS DAMA T/S', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 448, 'CONJUNTO DOS PIEZAS DAMA T/M', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 449, 'CONJUNTO DOS PIEZAS DAMA T/L', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 450, 'CONJUNTOS DOS PIEZAS DAMA T/XL', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 451, 'CONJUNTO DOS PIEZAS NIÑO T/2', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 452, 'CONJUNTO DOS PIEZAS NIÑO T/4', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 453, 'CONJUNTO DOS PIEZAS NIÑO T/6', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 454, 'CONJUNTO DOS PIEZAS NIÑO T/8', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 455, 'CONJUNTO DOS PIEZAS NIÑO T/10', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 456, 'CONJUNTO DOS PIEZAS NIÑO T/12', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 457, 'CONJUNTO DOS PIEZAS NIÑO  T/14', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 458, 'CONJUNTO DOS PIEZAS NIÑO  T/16', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 459, 'CONJUNTO DOS PIEZAS HOMBRE T/S', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 460, 'CONJUNTO DOS PIEZAS HOMBRE T/M', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 461, 'CONJUNTO DOS PIEZAS  HOMBRE  T/L', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 462, 'CONJUNTOS DOS PIEZAS HOMBRE T/XL', 28, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 463, 'LEGGINS UNICOLOR NIÑA T/2', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 464, 'LEGGINS UNICOLOR NIÑA T/4', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 465, 'LEGGINS UNICOLOR NIÑA T/ 6', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 466, 'LEGGINS UNICOLOR NIÑA  T/8', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 467, 'LEGGINS UNICOLOR JUVENIL T/10', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 468, 'LEGGINS UNICOLOR  JUVENIL T/12', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 469, 'LEGGINS UNICOLOR  JUVENIL T/14', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 470, 'LEGGINS UNICOLOR JEVENIL T/16', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 471, 'LEGGINS UNICOLOR DAMA T/S', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 472, 'LEGGINS UNICOLOR DAMA T/M', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 473, 'LEGGINS UNICOLOR DAMA T/L', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 474, 'LEGGINS UNICOLOR DAMA T/XL', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 475, 'LEGGINS UNICOLOR DAMA T/2XL', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 476, 'LEGGINS UNICOLOR DAMA T/ 3XL', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 477, 'LEGGINS ESTAMPADOS NIÑA T/2', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 478, 'LEGGINS ESTAMPADOS NIÑA T/4', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 479, 'LEGGINS ESTAMPADOS  NIÑA T/ 6', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 480, 'LEGGINS ESTAMPADOS  NIÑA  T/8', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 481, 'LEGGINS  ESTAMPADOS  JUVENIL T/10', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 482, 'LEGGINS  ESTAMPADOS   JUVENIL T/12', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 483, 'LEGGINS  ESTAMPADOS   JUVENIL T/14', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 484, 'LEGGINS  ESTAMPADOS  JUVENIL T/16', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 485, 'LEGGINS  ESTAMPADOS  DAMA T/S', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 486, 'LEGGINS  ESTAMPADOS  DAMA T/M', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 487, 'LEGGINS  ESTAMPADOS  DAMA T/L', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 488, 'LEGGINS  ESTAMPADOS DAMA T/XL', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 489, 'LEGGINS ESTAMPADOS DAMA T/2XL', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 490, 'LEGGINS ESTAMPADOS DAMA T/ 3XL', 29, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 491, 'BLUSAS UNICOLOR DAMA T/S', 30, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 492, 'BLUSAS UNICOLOR DAMA T/M', 30, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 493, 'BLUSAS UNICOLOR DAMA T/L', 30, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 494, 'BLUSAS UNICOLOR DAMA T/XL', 30, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 495, 'BLUSAS ESTAMPADOS DAMA T/S', 30, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 496, 'BLUSAS ESTAMPADOS DAMA T/M', 30, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 497, 'BLUSAS ESTAMPADOS  DAMA T/L', 30, 3, '0', '0.00', '0.00', '0.00', 1, 0),
(1, 498, 'BLUSAS ESTAMPADOS  DAMA T/XL', 30, 3, '0', '0.00', '0.00', '0.00', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `empresa_id` int(6) NOT NULL,
  `proveedor_id` int(4) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `rif` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` text COLLATE utf8_unicode_ci,
  `telefono` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contacto` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ult_compra` date DEFAULT NULL,
  `condcredito_id` int(2) NOT NULL DEFAULT '1',
  `credito_limite` decimal(15,2) DEFAULT '0.00',
  PRIMARY KEY (`proveedor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`empresa_id`, `proveedor_id`, `descripcion`, `rif`, `direccion`, `telefono`, `fax`, `contacto`, `ult_compra`, `condcredito_id`, `credito_limite`) VALUES
(1, 1, 'CONTADO', '', 'Av. Universidad, Esq. Perico, Edificio Perico, Piso 2, \r\nOficina 2-A, La Candelaria, Caracas - Venezuela', '(0212) 576.49.90', '', '', '0000-00-00', 1, '1.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `rol_id` int(6) NOT NULL AUTO_INCREMENT,
  `rol` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`rol_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rol_id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Usuario'),
(3, 'Operador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidadet`
--

CREATE TABLE IF NOT EXISTS `salidadet` (
  `salidadet_id` int(6) NOT NULL AUTO_INCREMENT,
  `salidaenc_id` int(6) NOT NULL,
  `tiposalida_id` int(2) NOT NULL,
  `producto_id` int(6) NOT NULL,
  `unidad_id` int(6) NOT NULL,
  `cantidad` int(6) NOT NULL,
  `precio_unitario` decimal(10,2) NOT NULL,
  `iva` decimal(5,2) NOT NULL,
  `total_neto` double(12,2) NOT NULL,
  `total_final` double(12,2) NOT NULL,
  PRIMARY KEY (`salidadet_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci AUTO_INCREMENT=62 ;

--
-- Volcado de datos para la tabla `salidadet`
--

INSERT INTO `salidadet` (`salidadet_id`, `salidaenc_id`, `tiposalida_id`, `producto_id`, `unidad_id`, `cantidad`, `precio_unitario`, `iva`, `total_neto`, `total_final`) VALUES
(9, 1020, 10, 1, 1, 25, '15.00', '12.00', 375.00, 420.00),
(10, 1020, 10, 255, 1, 25, '12.50', '12.00', 312.50, 350.00),
(11, 1020, 10, 157, 1, 35, '45.00', '12.00', 1575.00, 1764.00),
(12, 1021, 10, 1, 1, 125, '12.00', '12.00', 1500.00, 1680.00),
(13, 1021, 10, 25, 1, 14, '44.00', '12.00', 616.00, 689.92),
(15, 1022, 10, 233, 1, 300, '344.00', '12.00', 103200.00, 115584.00),
(16, 1022, 10, 234, 1, 450, '344.00', '12.00', 154800.00, 173376.00),
(18, 1023, 10, 155, 1, 125, '125.00', '12.00', 15625.00, 17500.00),
(19, 1023, 10, 153, 1, 45, '45.00', '12.00', 2025.00, 2268.00),
(20, 1023, 10, 154, 1, 15, '15.00', '12.00', 225.00, 252.00),
(21, 1024, 10, 35, 1, 12, '50.00', '12.00', 600.00, 672.00),
(22, 1025, 10, 83, 1, 25, '125.00', '12.00', 3125.00, 3500.00),
(23, 1026, 10, 200, 1, 45, '45.00', '12.00', 2025.00, 2268.00),
(24, 1027, 10, 77, 1, 450, '45.00', '12.00', 20250.00, 22680.00),
(25, 1028, 10, 301, 1, 85, '125.00', '12.00', 10625.00, 11900.00),
(26, 1029, 10, 33, 1, 34, '43.00', '12.00', 1462.00, 1637.44),
(27, 1030, 10, 174, 1, 45, '57.00', '12.00', 2565.00, 2872.80),
(28, 1031, 10, 355, 1, 125, '15.00', '12.00', 1875.00, 2100.00),
(29, 1033, 10, 23, 1, 5, '45.00', '12.00', 225.00, 252.00),
(30, 1034, 10, 23, 1, 56, '654.00', '12.00', 36624.00, 41018.88),
(31, 1035, 10, 123, 1, 54, '765.00', '12.00', 41310.00, 46267.20),
(32, 1036, 10, 123, 1, 45, '45.00', '12.00', 2025.00, 2268.00),
(33, 1036, 10, 98, 1, 45, '78.00', '12.00', 3510.00, 3931.20),
(34, 1037, 10, 45, 1, 897, '12.00', '12.00', 10764.00, 12055.68),
(35, 1037, 10, 78, 1, 45, '564.00', '12.00', 25380.00, 28425.60),
(36, 1037, 10, 25, 1, 45, '4.00', '12.00', 180.00, 201.60),
(37, 1038, 10, 45, 1, 5, '556.00', '12.00', 2780.00, 3113.60),
(38, 1112, 11, 45, 1, 44, '454.00', '12.00', 19976.00, 22373.12),
(39, 1112, 11, 232, 1, 32, '233.00', '12.00', 7456.00, 8350.72),
(41, 1039, 10, 53, 1, 34, '346.00', '12.00', 11764.00, 13175.68),
(42, 1039, 10, 64, 1, 234, '23.00', '12.00', 5382.00, 6027.84),
(43, 1039, 10, 23, 1, 65, '43.00', '12.00', 2795.00, 3130.40),
(44, 1113, 11, 53, 1, 45, '54.00', '12.00', 2430.00, 2721.60),
(45, 1114, 11, 4, 1, 4, '4.00', '12.00', 16.00, 17.92),
(46, 1115, 11, 174, 1, 45, '57.00', '12.00', 2565.00, 2872.80),
(47, 1040, 10, 234, 1, 45, '56.00', '12.00', 2520.00, 2822.40),
(48, 1040, 10, 345, 1, 345, '34.00', '12.00', 11730.00, 13137.60),
(49, 1040, 10, 188, 1, 56, '566.00', '12.00', 31696.00, 35499.52),
(50, 1041, 10, 25, 1, 12, '32.00', '12.00', 384.00, 430.08),
(51, 1041, 10, 45, 1, 4556, '12.00', '12.00', 54672.00, 61232.64),
(52, 1041, 10, 65, 1, 56, '567.00', '12.00', 31752.00, 35562.24),
(53, 1041, 10, 23, 1, 876, '45.00', '12.00', 39420.00, 44150.40),
(57, 1316, 13, 123, 1, 45, '45.00', '12.00', 2025.00, 2268.00),
(58, 1316, 13, 25, 1, 45, '34.00', '12.00', 1530.00, 1713.60),
(59, 1042, 10, 34, 1, 453, '32.00', '12.00', 14496.00, 16235.52),
(60, 1042, 10, 43, 1, 432, '235.00', '12.00', 101520.00, 113702.40),
(61, 1042, 10, 54, 1, 433, '56.00', '12.00', 24248.00, 27157.76);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidadet_tmp`
--

CREATE TABLE IF NOT EXISTS `salidadet_tmp` (
  `salidadet_id` int(6) NOT NULL AUTO_INCREMENT,
  `salidaenc_id` int(6) NOT NULL,
  `producto_id` int(6) NOT NULL,
  `unidad_id` int(6) NOT NULL,
  `cantidad` int(6) NOT NULL,
  `precio_unitario` decimal(10,2) NOT NULL,
  `iva` decimal(5,2) NOT NULL,
  `total_neto` double(12,2) NOT NULL,
  `total_final` double(12,2) NOT NULL,
  PRIMARY KEY (`salidadet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidaenc`
--

CREATE TABLE IF NOT EXISTS `salidaenc` (
  `movimiento_id` int(8) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(6) NOT NULL,
  `salidaenc_id` int(6) NOT NULL,
  `tiposalida_id` int(2) NOT NULL,
  `afectado_id` int(6) DEFAULT NULL,
  `cliente_id` int(6) NOT NULL,
  `fecha` date NOT NULL,
  `fecha_pago` date NOT NULL,
  `condcredito_id` int(2) NOT NULL,
  `vendedor_id` int(6) NOT NULL,
  `bultos` int(4) DEFAULT NULL,
  `unidades` int(4) DEFAULT NULL,
  `docenas` int(4) DEFAULT NULL,
  `neto` decimal(10,2) NOT NULL,
  `descuento` decimal(10,2) DEFAULT '0.00',
  `iva` decimal(6,2) NOT NULL,
  `saldo` decimal(10,2) NOT NULL,
  PRIMARY KEY (`movimiento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `salidaenc`
--

INSERT INTO `salidaenc` (`movimiento_id`, `empresa_id`, `salidaenc_id`, `tiposalida_id`, `afectado_id`, `cliente_id`, `fecha`, `fecha_pago`, `condcredito_id`, `vendedor_id`, `bultos`, `unidades`, `docenas`, `neto`, `descuento`, `iva`, `saldo`) VALUES
(5, 1, 1020, 10, NULL, 1, '2013-05-13', '0000-00-00', 1, 1, NULL, NULL, NULL, '2262.50', '0.00', '12.00', '0.00'),
(6, 1, 1021, 10, NULL, 12, '2013-04-01', '2013-05-21', 1, 1, NULL, NULL, NULL, '2116.00', '0.00', '12.00', '-1630.08'),
(7, 1, 1022, 10, NULL, 0, '2013-05-15', '0000-00-00', 1, 1, NULL, 688, NULL, '258000.00', '0.00', '12.00', '0.00'),
(8, 1, 1023, 10, NULL, 2, '2013-05-01', '0000-00-00', 1, 1, 99999999, 9999999, 2147483647, '17875.00', '0.00', '12.00', '0.00'),
(9, 1, 1024, 10, NULL, 7, '2013-05-18', '2013-05-21', 2, 1, NULL, NULL, NULL, '600.00', '0.00', '12.00', '0.00'),
(10, 1, 1025, 10, NULL, 14, '2013-05-18', '0000-00-00', 3, 1, NULL, NULL, NULL, '3125.00', '0.00', '12.00', '500.00'),
(11, 1, 1026, 10, NULL, 47, '2013-05-18', '0000-00-00', 4, 1, NULL, NULL, NULL, '2025.00', '0.00', '12.00', '2268.00'),
(12, 1, 1027, 10, NULL, 206, '2013-05-18', '0000-00-00', 5, 1, NULL, NULL, NULL, '20250.00', '0.00', '12.00', '22680.00'),
(13, 1, 1028, 10, NULL, 550, '2013-01-02', '0000-00-00', 5, 1, NULL, NULL, NULL, '10625.00', '0.00', '12.00', '11900.00'),
(14, 1, 1029, 10, NULL, 10, '2013-05-18', '0000-00-00', 1, 1, NULL, NULL, NULL, '1462.00', '0.00', '12.00', '0.00'),
(15, 1, 1030, 10, NULL, 12, '2013-05-18', '0000-00-00', 3, 1, NULL, NULL, NULL, '2565.00', '0.00', '12.00', '1872.80'),
(16, 1, 1031, 10, NULL, 12, '2013-05-19', '0000-00-00', 2, 1, NULL, 125, NULL, '1875.00', '0.00', '12.00', '0.00'),
(17, 1, 1032, 10, NULL, 0, '2013-05-22', '0000-00-00', 1, 1, NULL, NULL, NULL, '0.00', '0.00', '12.00', '0.00'),
(18, 1, 1033, 10, NULL, 17, '2013-05-22', '0000-00-00', 3, 1, NULL, 5, NULL, '225.00', '0.00', '12.00', '252.00'),
(19, 1, 1034, 10, NULL, 8, '2013-05-22', '0000-00-00', 1, 1, NULL, NULL, NULL, '36624.00', '0.00', '12.00', '0.00'),
(20, 1, 1035, 10, NULL, 18, '2013-05-22', '0000-00-00', 3, 1, NULL, NULL, NULL, '41310.00', '0.00', '12.00', '46267.20'),
(21, 1, 1036, 10, NULL, 12, '2013-05-23', '0000-00-00', 1, 1, NULL, NULL, NULL, '5535.00', '0.00', '12.00', '0.00'),
(22, 1, 1037, 10, NULL, 13, '2013-05-24', '0000-00-00', 3, 1, NULL, NULL, NULL, '36324.00', '0.00', '12.00', '40682.88'),
(23, 1, 1038, 10, NULL, 0, '2013-05-25', '0000-00-00', 1, 1, NULL, NULL, NULL, '2780.00', '0.00', '12.00', '0.00'),
(24, 1, 1112, 11, NULL, 13, '2013-05-26', '0000-00-00', 1, 1, NULL, NULL, NULL, '27432.00', '0.00', '12.00', '0.00'),
(25, 1, 1039, 10, NULL, 20, '2013-05-26', '0000-00-00', 3, 1, NULL, NULL, NULL, '19941.00', '0.00', '12.00', '22333.92'),
(26, 1, 1113, 11, 25, 20, '2013-05-26', '0000-00-00', 1, 1, NULL, NULL, NULL, '2430.00', '0.00', '12.00', '0.00'),
(27, 1, 1114, 11, 25, 20, '2013-05-26', '0000-00-00', 1, 1, NULL, NULL, NULL, '16.00', '0.00', '12.00', '0.00'),
(28, 1, 1115, 11, 15, 12, '2013-05-30', '0000-00-00', 1, 1, NULL, NULL, NULL, '2565.00', '0.00', '12.00', '0.00'),
(29, 1, 1040, 10, NULL, 14, '2013-05-30', '0000-00-00', 2, 1, NULL, NULL, NULL, '45946.00', '0.00', '12.00', '41459.52'),
(30, 1, 1041, 10, NULL, 19, '2013-05-30', '0000-00-00', 3, 1, NULL, NULL, NULL, '126228.00', '10000.00', '12.00', '131375.36'),
(31, 1, 1316, 13, NULL, 9, '2013-05-30', '0000-00-00', 3, 1, NULL, NULL, NULL, '3555.00', '0.00', '12.00', '3981.60'),
(32, 1, 1042, 10, NULL, 18, '2013-06-09', '0000-00-00', 4, 1, 4, NULL, 0, '140264.00', '5000.00', '12.00', '152095.68');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidaenc_tmp`
--

CREATE TABLE IF NOT EXISTS `salidaenc_tmp` (
  `empresa_id` int(6) NOT NULL,
  `salidaenc_id` int(6) NOT NULL,
  `tiposalida_id` int(2) NOT NULL,
  `afectado_id` int(6) DEFAULT NULL,
  `cliente_id` int(6) NOT NULL,
  `fecha` date NOT NULL,
  `condcredito_id` int(2) NOT NULL,
  `vendedor_id` int(6) NOT NULL,
  `bultos` int(4) DEFAULT NULL,
  `unidades` int(4) DEFAULT NULL,
  `docenas` int(4) DEFAULT NULL,
  `descuento` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`salidaenc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposentrada`
--

CREATE TABLE IF NOT EXISTS `tiposentrada` (
  `tipoentrada_id` int(2) NOT NULL AUTO_INCREMENT,
  `tipoentrada` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tipoentrada_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tiposentrada`
--

INSERT INTO `tiposentrada` (`tipoentrada_id`, `tipoentrada`) VALUES
(1, 'Factura de Compra'),
(2, 'ND Proveedor'),
(3, 'Ajuste de Entrada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipossalida`
--

CREATE TABLE IF NOT EXISTS `tipossalida` (
  `tiposalida_id` int(2) NOT NULL AUTO_INCREMENT,
  `tiposalida` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tiposalida_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `tipossalida`
--

INSERT INTO `tipossalida` (`tiposalida_id`, `tiposalida`) VALUES
(10, 'Factura de Venta'),
(11, 'Nota de Credito'),
(12, 'Ajuste de Salida'),
(13, 'Nota de Entrega');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE IF NOT EXISTS `unidades` (
  `unidad_id` int(2) NOT NULL AUTO_INCREMENT,
  `unidad` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`unidad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`unidad_id`, `unidad`) VALUES
(1, 'Unidad'),
(2, 'Caja'),
(3, 'Bulto'),
(4, 'Docena'),
(5, 'Gruesa'),
(6, 'Metro'),
(7, 'Kilo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `empresa_id` int(6) NOT NULL,
  `login` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `rol_id` int(6) NOT NULL,
  `estatus` int(1) NOT NULL,
  PRIMARY KEY (`login`),
  KEY `usuario_rol` (`rol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`empresa_id`, `login`, `password`, `usuario`, `rol_id`, `estatus`) VALUES
(1, 'lalmaros', 'l9098342', 'Luis Almaro', 1, 1),
(1, 'mcadenas', '4040', 'Mayerlin Cadenas', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE IF NOT EXISTS `vendedores` (
  `empresa_id` int(6) NOT NULL,
  `vendedor_id` int(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `comision` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`vendedor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`empresa_id`, `vendedor_id`, `nombre`, `comision`) VALUES
(1, 1, 'Jesus Cadenas', '15.00');

-- --------------------------------------------------------

--
-- Estructura para la vista `analisisvencimientocli`
--
DROP TABLE IF EXISTS `analisisvencimientocli`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `analisisvencimientocli` AS select `analvenccli`.`cliente_id` AS `CODIGO`,`clientes`.`descripcion` AS `NOMBRE_CLIENTE`,sum(`analvenccli`.`A15`) AS `A_15_DIAS`,sum(`analvenccli`.`A30`) AS `A_30_DIAS`,sum(`analvenccli`.`A45`) AS `A_45_DIAS`,sum(`analvenccli`.`A60`) AS `A_60_DIAS`,sum(`analvenccli`.`A90`) AS `A_90_DIAS`,sum(`analvenccli`.`MAS90`) AS `MAS_90_DIAS` from (`analvenccli` join `clientes` on((`clientes`.`cliente_id` = `analvenccli`.`cliente_id`))) group by `analvenccli`.`cliente_id`;

-- --------------------------------------------------------

--
-- Estructura para la vista `analvenccli`
--
DROP TABLE IF EXISTS `analvenccli`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `analvenccli` AS select `salidaenc`.`cliente_id` AS `cliente_id`,(case when ((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) < 16) then 1 when ((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) between 16 and 30) then 2 when ((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) between 31 and 45) then 3 when ((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) between 46 and 60) then 4 when ((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) between 61 and 90) then 5 when ((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) > 90) then 6 end) AS `GRUPO`,if(((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) < 16),sum(`salidaenc`.`saldo`),0) AS `A15`,if((((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) > 15) and ((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) < 31)),sum(`salidaenc`.`saldo`),0) AS `A30`,if((((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) > 30) and ((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) < 46)),sum(`salidaenc`.`saldo`),0) AS `A45`,if((((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) > 45) and ((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) < 61)),sum(`salidaenc`.`saldo`),0) AS `A60`,if((((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) > 60) and ((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) < 91)),sum(`salidaenc`.`saldo`),0) AS `A90`,if(((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) > 90),sum(`salidaenc`.`saldo`),0) AS `MAS90` from `salidaenc` where (`salidaenc`.`saldo` > 0) group by `salidaenc`.`cliente_id`,(case when ((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) < 16) then 1 when ((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) between 16 and 30) then 2 when ((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) between 31 and 45) then 3 when ((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) between 46 and 60) then 4 when ((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) between 61 and 90) then 5 when ((to_days(cast(now() as date)) - to_days(`salidaenc`.`fecha`)) > 90) then 6 end);

-- --------------------------------------------------------

--
-- Estructura para la vista `clientespendientes`
--
DROP TABLE IF EXISTS `clientespendientes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `clientespendientes` AS select `salidaenc`.`movimiento_id` AS `movimiento_id`,concat(convert(`salidaenc`.`salidaenc_id` using utf8),' - ',`tipossalida`.`tiposalida`,' Fecha: ',convert(`salidaenc`.`fecha` using utf8),'A:',`condcredito`.`condicion`,' Saldo: ',convert(`salidaenc`.`saldo` using utf8)) AS `linea`,`salidaenc`.`cliente_id` AS `cliente_id` from ((`salidaenc` left join `tipossalida` on((`tipossalida`.`tiposalida_id` = `salidaenc`.`tiposalida_id`))) left join `condcredito` on((`condcredito`.`condcredito_id` = `salidaenc`.`condcredito_id`))) where (`salidaenc`.`saldo` > 0) order by `salidaenc`.`cliente_id`;

-- --------------------------------------------------------

--
-- Estructura para la vista `edoctacliente`
--
DROP TABLE IF EXISTS `edoctacliente`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `edoctacliente` AS select `salidaenc`.`empresa_id` AS `empresa_id`,`salidaenc`.`cliente_id` AS `cliente_id`,`salidaenc`.`movimiento_id` AS `movimiento_id`,`tipossalida`.`tiposalida` AS `tiposalida`,`salidaenc`.`salidaenc_id` AS `documento_nro`,`salidaenc`.`fecha` AS `fecha`,(`salidaenc`.`neto` + ((`salidaenc`.`neto` * `salidaenc`.`iva`) / 100)) AS `monto`,`salidaenc`.`saldo` AS `saldo` from (`salidaenc` join `tipossalida` on((`tipossalida`.`tiposalida_id` = `salidaenc`.`tiposalida_id`))) union select `pagocliente`.`empresa_id` AS `empresa_id`,`pagocliente`.`cliente_id` AS `cliente_id`,`pagocliente`.`movimiento_id` AS `movimiento_id`,'Pago Cliente' AS `tiposalida`,`pagocliente`.`documento_nro` AS `documento_nro`,`pagocliente`.`fecha_pago` AS `fecha`,`pagocliente`.`monto` AS `monto`,`pagocliente`.`monto` AS `saldo` from `pagocliente` order by `empresa_id`,`cliente_id`,`movimiento_id`,`fecha`;

-- --------------------------------------------------------

--
-- Estructura para la vista `existencia`
--
DROP TABLE IF EXISTS `existencia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `existencia` AS select `kardex`.`producto_id` AS `producto_id`,count(`kardex`.`producto_id`) AS `ocurrencias`,(sum((case when (`kardex`.`tipomovimiento_id` < 10) then `kardex`.`cantidad` else 0 end)) - sum((case when (`kardex`.`tipomovimiento_id` > 9) then `kardex`.`cantidad` else 0 end))) AS `existencia` from `kardex` group by `kardex`.`producto_id`;

-- --------------------------------------------------------

--
-- Estructura para la vista `facturasclientes`
--
DROP TABLE IF EXISTS `facturasclientes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `facturasclientes` AS select `salidaenc`.`movimiento_id` AS `movimiento_id`,concat(convert(`salidaenc`.`salidaenc_id` using utf8),' - ',`tipossalida`.`tiposalida`,' Fecha: ',convert(`salidaenc`.`fecha` using utf8)) AS `linea`,`salidaenc`.`cliente_id` AS `cliente_id`,`salidaenc`.`condcredito_id` AS `condcredito_id` from (`salidaenc` left join `tipossalida` on((`tipossalida`.`tiposalida_id` = `salidaenc`.`tiposalida_id`))) where (`salidaenc`.`tiposalida_id` = 10) order by `salidaenc`.`cliente_id`,`salidaenc`.`movimiento_id`;

-- --------------------------------------------------------

--
-- Estructura para la vista `kardex`
--
DROP TABLE IF EXISTS `kardex`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `kardex` AS select `salidadet`.`producto_id` AS `producto_id`,`salidadet`.`salidaenc_id` AS `documento_id`,`salidaenc`.`cliente_id` AS `ente_id`,`salidaenc`.`fecha` AS `fecha`,`salidadet`.`tiposalida_id` AS `tipomovimiento_id`,`salidadet`.`cantidad` AS `cantidad`,`salidadet`.`precio_unitario` AS `precio_unitario`,`salidadet`.`iva` AS `iva`,`salidadet`.`total_neto` AS `total_neto`,`salidadet`.`total_final` AS `total_final` from (`salidadet` join `salidaenc` on((`salidaenc`.`salidaenc_id` = `salidadet`.`salidaenc_id`))) union select `entradadet`.`producto_id` AS `producto_id`,`entradadet`.`entradaenc_id` AS `documento_id`,`entradaenc`.`proveedor_id` AS `ente_id`,`entradaenc`.`fecha` AS `fecha`,`entradadet`.`tipoentrada_id` AS `tipomovimiento_id`,`entradadet`.`cantidad` AS `cantidad`,`entradadet`.`precio_unitario` AS `precio_unitario`,`entradadet`.`iva` AS `iva`,`entradadet`.`total_neto` AS `total_neto`,`entradadet`.`total_final` AS `total_final` from (`entradadet` join `entradaenc` on((`entradaenc`.`entradaenc_id` = `entradadet`.`entradaenc_id`)));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
