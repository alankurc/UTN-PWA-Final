/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50724
Source Host           : localhost:3306
Source Database       : php_carrito

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2020-10-28 00:16:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES ('1', 'Memorias Ram');
INSERT INTO `categorias` VALUES ('2', 'Procesadores');
INSERT INTO `categorias` VALUES ('3', 'Motherboards');
INSERT INTO `categorias` VALUES ('4', 'Discos Rigidos');
INSERT INTO `categorias` VALUES ('5', 'SSD');
INSERT INTO `categorias` VALUES ('6', 'Fuentes');
INSERT INTO `categorias` VALUES ('7', 'Gabinetes');
INSERT INTO `categorias` VALUES ('8', 'Perifericos');
INSERT INTO `categorias` VALUES ('9', 'Refrigeración');
INSERT INTO `categorias` VALUES ('10', 'Placas de video');

-- ----------------------------
-- Table structure for compras
-- ----------------------------
DROP TABLE IF EXISTS `compras`;
CREATE TABLE `compras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `falta` datetime NOT NULL COMMENT 'Fecha',
  `fmodificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'F. Modificacion',
  `habilitado` tinyint(1) unsigned DEFAULT '1' COMMENT 'Habilitado',
  `feliminado` datetime DEFAULT NULL COMMENT 'F. Elimimado',
  `importe_total` decimal(8,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of compras
-- ----------------------------

-- ----------------------------
-- Table structure for compras_productos
-- ----------------------------
DROP TABLE IF EXISTS `compras_productos`;
CREATE TABLE `compras_productos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `falta` datetime NOT NULL COMMENT 'Fecha',
  `fmodificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'F. Modificacion',
  `habilitado` tinyint(1) unsigned DEFAULT '1' COMMENT 'Habilitado',
  `feliminado` datetime DEFAULT NULL COMMENT 'F. Elimimado',
  `productos_id` int(10) unsigned NOT NULL DEFAULT '0',
  `compras_id` int(10) unsigned NOT NULL DEFAULT '0',
  `precio` decimal(8,2) NOT NULL DEFAULT '0.00',
  `denominacion` varchar(125) NOT NULL DEFAULT '',
  `codigo` varchar(30) DEFAULT NULL,
  `precio_oferta` decimal(8,2) DEFAULT NULL,
  `cantidad` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of compras_productos
-- ----------------------------

-- ----------------------------
-- Table structure for contacto
-- ----------------------------
DROP TABLE IF EXISTS `contacto`;
CREATE TABLE `contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `consulta` varchar(500) DEFAULT NULL,
  `producto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contacto
-- ----------------------------

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `habilitado` tinyint(1) unsigned DEFAULT '1' COMMENT 'Habilitado',
  `denominacion` varchar(125) NOT NULL COMMENT 'Denominación, Título o nombre',
  `descripcion` varchar(500) NOT NULL COMMENT 'Descripcion',
  `activa` tinyint(1) unsigned DEFAULT NULL COMMENT 'Activa',
  `codigo` varchar(30) DEFAULT NULL,
  `precio` decimal(8,2) NOT NULL,
  `publicaciones_estados_id` int(10) unsigned DEFAULT '0',
  `oferta` tinyint(1) unsigned DEFAULT NULL,
  `precio_oferta` decimal(8,2) DEFAULT NULL,
  `fecha_finalizacion_oferta` datetime DEFAULT NULL,
  `destacado` tinyint(1) unsigned DEFAULT NULL,
  `id_categoria` int(11) NOT NULL,
  `stock` decimal(65,0) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('1', '1', 'INTEL MICRO G5400 PENTIUM GOLD', 'LGA 1151 8va', '1', 'SKU0001', '5950.00', '0', null, '5600.00', null, '0', '2', '10', 'Intel', '1.jpg');
INSERT INTO `productos` VALUES ('2', '1', 'INTEL MICRO CORE I3 10100', 'TURBO + COMET LAKE 10th GEN', '1', 'SKU0002', '12990.00', '0', null, '12000.00', null, '0', '2', '15', 'Intel', '2.jpg');
INSERT INTO `productos` VALUES ('3', '1', 'INTEL MICRO CORE I5 9600K', 'TURBO COFFEE LAKE 9NA', '1', 'SKU0003', '25990.00', '0', null, '25000.00', null, '0', '2', '10', 'Intel', '3.jpg');
INSERT INTO `productos` VALUES ('4', '1', 'INTEL MICRO CORE I7 10700', 'TURBO COMET LAKE 10th GEN', '1', 'SKU0004', '37000.00', '0', null, null, null, '1', '2', '5', 'Intel', '4.jpg');
INSERT INTO `productos` VALUES ('5', '1', 'INTEL MICRO CORE I9 9900K', 'TURBO COFFEE LAKE S1151 9NA', '1', 'SKU0005', '49980.00', '0', null, '49000.00', null, '1', '2', '5', 'Intel', '5.jpg');
INSERT INTO `productos` VALUES ('6', '1', 'GIGABYTE MOTHER B365M GAMING HD S1151', 'Intel B365 Gaming motherboard with GIGABYTE 8118 Gaming LAN, PCIe Gen3 x4 M.2, Anti-Sulfur Resistor, Smart Fan 5, CEC 2019 ready', '1', 'SKU0006', '9500.00', '0', null, null, null, '0', '3', '10', 'Gigabyte', '6.jpg');
INSERT INTO `productos` VALUES ('7', '1', 'GIGABYTE MOTHER B365M AORUS ELITE 8VA 9NA GEN INTEL S1151', 'Motherboard Intel B365 AORUS con RGB Fusion 2.0 con LED digitales, Intel GbE LAN con cFosSpeed, ranuras M.2 dobles, armadura PCIe ultra duradera, resistencia antisulfuro, Smart Fan 5, DualBIOS ™, listo para CEC 2019', '1', 'SKU0007', '12500.00', '0', null, null, null, '0', '3', '15', 'Gigabyte', '7.jpg');
INSERT INTO `productos` VALUES ('8', '1', 'ASUS MOTHER X570-P PRIME AM4 AMD', 'AMD AM4 ATX motherboard with PCIe 4.0, 12 DrMOS power stages, dual M.2, HDMI, SATA 6Gb/s, USB 3.2 Gen 2 and Aura Sync RGB header', '1', 'SKU0008', '20495.00', '0', null, '18000.00', null, '0', '3', '10', 'Asus', '8.jpg');
INSERT INTO `productos` VALUES ('9', '1', 'MSI MOTHER B460M MORTAR MAG WIFI Socket 1200 INTEL 10th Gen', 'The MAG series was born through rigorous quality testing and designed to be a symbol of sturdiness and durability. Focused on providing the best user experience, the MAG series has a simple installation process coupled with a friendly user interface making it the best choice for entry level gamers.', '1', 'SKU0009', '17800.00', '0', null, null, null, '1', '3', '5', 'MSI', '9.jpg');
INSERT INTO `productos` VALUES ('10', '1', 'MSI MOTHER B550M PRO-VDH WIFI AM4 (Solo 3era gen sin video)', 'PRO series helps users work smarter by delivering an efficient and productive experience. Featuring stable functionality and high-quality assembly, PRO series motherboards provide not only optimized professional workflows but also less troubleshooting and longevity.', '1', 'SKU0010', '17000.00', '0', null, '15500.00', null, '1', '3', '5', 'MSI', '10.jpg');
INSERT INTO `productos` VALUES ('11', '1', 'OLOY MEMORIA RAM 16GB (2x8GB)', '3000MHZ DDR4 WARHAWK RED RGB - CL 16', '1', 'SKU0011', '7700.00', '0', null, null, null, '0', '1', '10', 'OLOY', '11.jpg');
INSERT INTO `productos` VALUES ('12', '1', 'CORSAIR MEMORIA RAM 16GB', '4000MHZ 2x8GB DOMINATOR PLATINUM RGB', '1', 'SKU0012', '38000.00', '0', null, '37000.00', null, '0', '1', '15', 'Corsair', '12.jpg');
INSERT INTO `productos` VALUES ('13', '1', 'GIGABYTE MEMORIA RAM 16GB 2x8GB', '3600MHZ RGB AORUS DEMO KIT BLACK DDR4', '1', 'SKU0013', '17995.00', '0', null, '17000.00', null, '0', '1', '10', 'Gigabyte', '13.jpg');
INSERT INTO `productos` VALUES ('14', '1', 'OLOY MEMORIA RAM 32GB 2x16GB', '3200MHZ 2x16GB DDR4 WARHAWK BLACK RGB', '1', 'SKU0014', '15300.00', '0', null, null, null, '1', '1', '5', 'OLOY', '14.jpg');
INSERT INTO `productos` VALUES ('15', '1', 'KINGSTON MEMORIA RAM 16GB', '2666MHZ HYPERX FURY RGB DDR4 BLACK', '1', 'SKU0015', '7900.00', '0', null, null, null, '1', '1', '5', 'Kingston', '15.jpg');
INSERT INTO `productos` VALUES ('16', '1', 'GIGABYTE RADEON RX 5500 XT 8GB', 'GAMING OC GDDR6 PCI-E 4.0 DUAL FAN - RGB', '1', 'SKU0016', '33500.00', '0', null, '32000.00', null, '0', '10', '10', 'Gigabyte', '16.jpg');
INSERT INTO `productos` VALUES ('17', '1', 'ASUS NVIDIA RTX 2060 SUPER', 'DUAL EVO O8G 8GB DDR6', '1', 'SKU0017', '59990.00', '0', null, null, null, '0', '10', '15', 'Nvidia', '17.jpg');
INSERT INTO `productos` VALUES ('18', '1', 'MSI NVIDIA RTX 2070 SUPER', 'VENTUS GP OC 8GB DDR6', '1', 'SKU0018', '65000.00', '0', null, '63000.00', null, '0', '10', '10', 'Nvidia', '18.jpg');
INSERT INTO `productos` VALUES ('19', '1', 'SAPPHIRE RADEON RX 5500 XT', '8GB PULSE GDDR6 PCI-E 4.0', '1', 'SKU0019', '31000.00', '0', null, null, null, '0', '10', '5', 'Radeon', '19.jpg');
INSERT INTO `productos` VALUES ('20', '1', 'MSI NVIDIA GT 1030 2GB', 'DDR5 OC LOW PROFILE LP', '1', 'SKU0020', '11000.00', '0', null, null, null, '0', '10', '5', 'Nvidia', '20.jpg');
INSERT INTO `productos` VALUES ('21', '1', 'KINGSTON SSD 240GB A400 2.5 \" SATA 3', 'SATA Rev. 3.0 (6Gb/s) – with backwards compatibility to SATA Rev. 2.0 (3Gb/s)', '1', 'SKU0021', '3300.00', '0', null, null, null, '0', '5', '10', 'Kingston', '21.jpg');
INSERT INTO `productos` VALUES ('22', '1', 'GIGABYTE SSD 240GB NAND FLASH 2.5 \" SATA 3', 'Interface: SATA 6.0Gb/s', '1', 'SKU0022', '3250.00', '0', null, '3000.00', null, '0', '5', '15', 'Gigabyte', '22.jpg');
INSERT INTO `productos` VALUES ('23', '1', 'KINGSTON SSD 960GB A400 2.5 \" SATA 3', 'SATA Rev. 3.0 (6Gb/s) - SATA Rev. 2.0 (3Gb/s)', '1', 'SKU0023', '10000.00', '0', null, null, null, '0', '5', '10', 'Kingston', '23.jpg');
INSERT INTO `productos` VALUES ('24', '1', 'GIGABYTE SSD M.2 512GB NVME PCIE 4X', 'Interface: PCI-Express 3.0 x2, NVMe 1.3', '1', 'SKU0024', '9500.00', '0', null, '9000.00', null, '0', '5', '5', 'Gigabyte', '24.jpg');
INSERT INTO `productos` VALUES ('25', '1', 'GIGABYTE SSD M.2 1TB AORUS', 'NVMe PCIe Gen4 UP TO 5000 MB/s', '1', 'SKU0025', '32000.00', '0', null, null, null, '0', '5', '5', 'Gigabyte', '25.jpg');
INSERT INTO `productos` VALUES ('26', '1', 'THERMALTAKE GABINETE V200', 'x1 FAN -BLACK - TEMPERED GLASS TG', '1', 'SKU0026', '13990.00', '0', null, null, null, '0', '7', '10', 'Thermaltake', '26.jpg');
INSERT INTO `productos` VALUES ('27', '1', 'AZZA GABINETE 330 IRIS', 'MID TOWER - x2 FAN DIGITAL RGB', '1', 'SKU0027', '13990.00', '0', null, '13000.00', null, '0', '7', '15', 'AZZA', '27.jpg');
INSERT INTO `productos` VALUES ('28', '1', 'COOLER MASTER H100', 'MINI ITX MASTERCASE H100 RGB', '1', 'SKU0028', '14000.00', '0', null, null, null, '0', '7', '10', 'Cooler Master', '28.jpg');
INSERT INTO `productos` VALUES ('29', '1', 'CORSAIR GABINETE CARBIDE', 'SPEC DELTA RGB BLACK - TRIPLE FAN', '1', 'SKU0029', '19500.00', '0', null, '18000.00', null, '0', '7', '5', 'Corsair', '29.jpg');
INSERT INTO `productos` VALUES ('30', '1', 'AEROCOOL GABINETE SHARD', 'BLACK TEMPERED GLASS x4 120MM FANS RGB', '1', 'SKU0030', '22000.00', '0', null, '2000.00', null, '0', '7', '5', 'Aerocool', '30.jpg');
INSERT INTO `productos` VALUES ('31', '1', 'THERMALTAKE FUENTE GAMER 430W', 'SMART 80+ PLUS WHITE', '1', 'SKU0031', '9900.00', '0', null, null, null, '0', '6', '10', 'Thermaltake', '31.jpg');
INSERT INTO `productos` VALUES ('32', '1', 'AEROCOOL FUENTE GAMER 500W', 'CYLON RGB 80+ PLUS BRONZE FULL RANGE WIRED', '1', 'SKU0032', '11300.00', '0', null, '10500.00', null, '0', '6', '15', 'Aerocool', '32.jpg');
INSERT INTO `productos` VALUES ('33', '1', 'CORSAIR FUENTE GAMER 450W', 'CV450 80+ PLUS BRONZE', '1', 'SKU0033', '11900.00', '0', null, '11000.00', null, '0', '6', '10', 'Corsair', '33.jpg');
INSERT INTO `productos` VALUES ('34', '1', 'EVGA FUENTE GAMER 650W', 'N1 - 100-N1-0650-L1', '1', 'SKU0034', '37000.00', '0', null, null, null, '0', '6', '5', 'EVGA', '34.jpg');
INSERT INTO `productos` VALUES ('35', '1', 'THERMALTAKE FUENTE 650W', 'SMART BX1 RGB 80+ PLUS BRONZE', '1', 'SKU0035', '49980.00', '0', null, null, null, '0', '6', '5', 'Thermaltake', '35.jpg');
INSERT INTO `productos` VALUES ('36', '1', 'COOLER MASTER COOLER H212', 'CPU INTEL AMD HYPER 212 TURBO DUAL FAN LED RED', '1', 'SKU0036', '18990.00', '0', null, null, null, '0', '9', '10', 'Cooler Master', '36.jpg');
INSERT INTO `productos` VALUES ('37', '1', 'EVGA WATER COOLING 120MM', 'LIQUID CLC RGB LED COOLER CPU INTEL AMD', '1', 'SKU0037', '20000.00', '0', null, null, null, '0', '9', '15', 'EVGA', '37.jpg');
INSERT INTO `productos` VALUES ('38', '1', 'ASUS WATER COOLING 120MM', 'ROG RYUO OLED SCREEN RGB', '1', 'SKU0038', '43975.00', '0', null, '42000.00', null, '0', '9', '10', 'Asus', '38.jpg');
INSERT INTO `productos` VALUES ('39', '1', 'COOLER MASTER WATER COOLING MASTERLIQUID', 'ML240 LITE CPU COOLER INTEL AMD', '1', 'SKU0039', '27500.00', '0', null, null, null, '0', '9', '5', 'Cooler Master', '39.jpg');
INSERT INTO `productos` VALUES ('40', '1', 'WESTERN DIGITAL DISCO HDD 1TB', 'BLUE WD 7200RPM 64MB', '1', 'SKU0040', '4700.00', '0', null, null, null, '0', '4', '5', 'Weestern Digital', '40.jpg');
INSERT INTO `productos` VALUES ('41', '1', 'SEAGATE DISCO HDD 4TB', 'BARRACUDA 7200RPM 64MB', '1', 'SKU0041', '11000.00', '0', null, '10000.00', null, '0', '4', '5', 'Seagate', '41.jpg');
INSERT INTO `productos` VALUES ('42', '1', 'SEAGATE DISCO HDD 8TB', 'SKYHAWK', '1', 'SKU0042', '28000.00', '0', null, null, null, '0', '4', '10', 'Seagate', '42.jpg');
INSERT INTO `productos` VALUES ('43', '1', 'MARVO COMBO 4 EN 1', 'CM370 GAMER RGB - MOUSE AURICULAR TECLADO PAD', '1', 'SKU0043', '4990.00', '0', null, null, null, '0', '8', '15', 'Marvo', '43.jpg');
INSERT INTO `productos` VALUES ('44', '1', 'THERMALTAKE TECLADO MECANICO', 'PREMIUM X1 RGB CHERRY MX BlUE', '1', 'SKU0044', '15985.00', '0', null, '15000.00', null, '0', '8', '10', 'Thermaltake', '44.jpg');
INSERT INTO `productos` VALUES ('45', '1', 'COUGAR TECLADO MECANICO PURI', 'TKL RGB - SIN NUMPAD - CON PROTECTOR', '1', 'SKU0045', '17485.00', '0', null, null, null, '0', '8', '5', 'Cougar', '45.jpg');
INSERT INTO `productos` VALUES ('46', '1', 'LOGITECH WEBCAM C920S', 'FULLHD 1080P 30FPS + MICROFONO', '1', 'SKU0046', '19000.00', '0', null, '17500.00', null, '0', '8', '5', 'Logitech', '46.jpg');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `habilitado` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT 'Habilitado',
  `email` varchar(255) NOT NULL DEFAULT '' COMMENT 'Email',
  `clave` varchar(64) NOT NULL DEFAULT '' COMMENT 'Clave',
  `nombre` varchar(50) NOT NULL DEFAULT '' COMMENT 'Nombre',
  `apellido` varchar(50) NOT NULL DEFAULT '' COMMENT 'Apellido',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('7', '1', 'usuario_1@test.com', 'usuario1', 'usuario', 'usuario');
INSERT INTO `usuarios` VALUES ('8', '1', 'test@test.com', '$2y$10$tjhCeqb2ZsiKAVxrfYKIue8HzA.onHb6LDkDfeuuBI9HcZPomBrR2', 'test', 'test');
