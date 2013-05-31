/*
Navicat MySQL Data Transfer

Source Server         : com
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : party_center

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2013-03-15 12:42:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `booking_list`
-- ----------------------------
DROP TABLE IF EXISTS `booking_list`;
CREATE TABLE `booking_list` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `pc_id` int(8) NOT NULL,
  `user_id` int(5) NOT NULL,
  `pc_name` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(15) NOT NULL,
  `date` date NOT NULL,
  `shift` varchar(10) NOT NULL,
  `total` int(7) DEFAULT NULL,
  `payment` int(7) NOT NULL,
  `due` int(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of booking_list
-- ----------------------------
INSERT INTO `booking_list` VALUES ('1', '1', '8', 'yanthi', 'toihid', 'io', 'info@ics-ss.com', '111', '2012-12-27', 'day', '3', '3', '3');
INSERT INTO `booking_list` VALUES ('2', '1', '8', 'yanthi', 'toihid', 'io', 'info@ics-ss.com', '111', '2012-12-27', 'day', '2', '2', '1');
INSERT INTO `booking_list` VALUES ('3', '1', '2', 'yanthi', 'toihid', ' dhaka', 'it.toihid@gmail.com', '111', '2012-10-27', 'day', '20', '10', '10');
INSERT INTO `booking_list` VALUES ('4', '1', '7', 'yanthi', 'toihid', 'io', 'info@ics-ss.com', '111', '2012-11-27', 'day', '3', '3', '3');
INSERT INTO `booking_list` VALUES ('5', '3', '8', 'yanthi', 'toihid', 'io', 'info@ics-ss.com', '111', '2013-11-27', 'day', '7', '7', '7');
INSERT INTO `booking_list` VALUES ('6', '2', '2', 'yanthi', 'toihid', ' dhaka', 'it.toihid@gmail.com', '111', '2013-01-20', 'day', '6', '7', '5');

-- ----------------------------
-- Table structure for `booking_message`
-- ----------------------------
DROP TABLE IF EXISTS `booking_message`;
CREATE TABLE `booking_message` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `pc_id` int(5) NOT NULL,
  `pc_name` varchar(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `contact` int(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `request_date` date NOT NULL,
  `shift` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of booking_message
-- ----------------------------
INSERT INTO `booking_message` VALUES ('1', '0', '', 'toihid', 'only.toihid@yahoo.com', '111', ' hg', '2012-12-30', 'day');
INSERT INTO `booking_message` VALUES ('3', '1', 'yanthi', 'toihid', 'it.toihid@gmail.com', '111', ' Â rrr', '2012-12-27', 'day');
INSERT INTO `booking_message` VALUES ('4', '1', 'yanthi', 'toihid', 'rupali@info.com', '111', ' Â tou', '2012-12-28', 'day');
INSERT INTO `booking_message` VALUES ('5', '1', 'yanthi', 'toihid', 'rupali@info.com', '111', ' Â tou', '2012-12-28', 'day');
INSERT INTO `booking_message` VALUES ('6', '1', 'yanthi', 'toihid', 'info@ics-ss.com', '111', 'io', '2012-12-27', 'day');
INSERT INTO `booking_message` VALUES ('7', '1', 'yanthi', 'toihid', 'info@ics-ss.com', '111', 'io', '2012-12-27', 'day');
INSERT INTO `booking_message` VALUES ('8', '7', 'Mid Night Sun', 'qqq', 'qq', '0', 'qq', '2013-02-16', 'day');
INSERT INTO `booking_message` VALUES ('9', '7', 'Mid Night Sun', 'you', 'l', '0', 'l', '2013-02-07', 'day');
INSERT INTO `booking_message` VALUES ('10', '2', 'xinzine', 'a', 'a', '0', 'a', '2013-02-06', 'day');
INSERT INTO `booking_message` VALUES ('11', '2', 'xinzine', 'a', 'a', '0', 'a', '2013-02-06', 'day');
INSERT INTO `booking_message` VALUES ('12', '2', 'xinzine', 'a', 'a', '0', 'a', '2013-02-06', 'day');
INSERT INTO `booking_message` VALUES ('13', '2', 'xinzine', 'a', 'a', '0', 'a', '2013-02-06', 'day');
INSERT INTO `booking_message` VALUES ('14', '2', 'xinzine', 'a', 'a', '0', 'a', '2013-02-06', 'day');
INSERT INTO `booking_message` VALUES ('15', '2', 'xinzine', 'a', 'a', '0', 'a', '2013-02-06', 'day');
INSERT INTO `booking_message` VALUES ('16', '2', 'xinzine', 'a', 'a', '0', 'a', '2013-02-06', 'day');
INSERT INTO `booking_message` VALUES ('17', '2', 'xinzine', 'a', 'a', '0', 'a', '2013-02-06', 'day');
INSERT INTO `booking_message` VALUES ('18', '2', 'xinzine', 'a', 'a', '0', 'a', '2013-02-06', 'day');
INSERT INTO `booking_message` VALUES ('19', '2', 'xinzine', 'a', 'a', '0', 'a', '2013-02-06', 'day');
INSERT INTO `booking_message` VALUES ('20', '2', 'xinzine', 'a', 'a', '0', 'a', '2013-02-06', 'day');
INSERT INTO `booking_message` VALUES ('21', '2', 'xinzine', 'a', 'a', '0', 'a', '2013-02-06', 'day');
INSERT INTO `booking_message` VALUES ('22', '2', 'xinzine', 'a', 'a', '0', 'a', '2013-02-06', 'day');
INSERT INTO `booking_message` VALUES ('23', '2', 'xinzine', 'a', 'a', '0', 'a', '2013-02-06', 'day');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `category_id` int(5) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(20) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'vip');
INSERT INTO `category` VALUES ('2', 'general');

-- ----------------------------
-- Table structure for `feedback`
-- ----------------------------
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `message` varchar(256) NOT NULL,
  `email` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of feedback
-- ----------------------------
INSERT INTO `feedback` VALUES ('57', ' ', 'cse.toihid@gmail.com');
INSERT INTO `feedback` VALUES ('58', ' good', 'kuntala.gope@yahoo.com');
INSERT INTO `feedback` VALUES ('59', ' ', 'kuntala.gope@yahoo.com');
INSERT INTO `feedback` VALUES ('60', ' testmessage', 'cse.toihid@gmail.com');
INSERT INTO `feedback` VALUES ('61', ' dsfvzsdgfvd\'vghklvhk', 'c@d.com');

-- ----------------------------
-- Table structure for `images`
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `pc_id` int(4) NOT NULL,
  `pc_name` varchar(50) NOT NULL,
  `pic1` varchar(50) NOT NULL,
  `pic2` varchar(50) DEFAULT NULL,
  `pic3` varchar(50) DEFAULT NULL,
  `pic4` varchar(50) DEFAULT NULL,
  `pic5` varchar(50) DEFAULT NULL,
  `pic6` varchar(50) DEFAULT NULL,
  `pic7` varchar(50) DEFAULT NULL,
  `pic8` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES ('2', '1', 'yanthi', 'C01185.jpg', '95a.jpg', 'C01185.jpg', '95a.jpg', 'pcs2.jpg', 'pcs2.jpg', 'pcs2.jpg', 'pcs2.jpg');
INSERT INTO `images` VALUES ('3', '2', 'xinzine', 'x4.jpg', 'x.jpg', 'x4.jpg', '12.jpg', 'mojave.jpg', 'mojave.jpg', 'mojave.jpg', 'mojave.jpg');
INSERT INTO `images` VALUES ('7', '11', 'Party House', 'C01185.jpg', 'caro-s-party-center.jpg', '12.jpg', '26a.jpg', 'C01185.jpg', 'C01185.jpg', 'C01185.jpg', 'C01185.jpg');
INSERT INTO `images` VALUES ('9', '13', 'Uttsob Community Center', 'Center.jpg', 'Center.jpg', 'Center.jpg', 'Center.jpg', 'Center.jpg', 'Center.jpg', 'Center.jpg', 'Center.jpg');
INSERT INTO `images` VALUES ('10', '10', 'White House', 'pped_full.jpeg', 'grass-blades.jpg', 'pped_full.jpeg', 'x.jpg', 'x2.jpg', 'x2.jpg', 'x2.jpg', 'x2.jpg');
INSERT INTO `images` VALUES ('11', '3', 'Setera community Center', 'corporate_2.png', 'x.jpg', 'x4.jpg', 'x2.jpg', 'mojave.jpg', 'mojave.jpg', 'mojave.jpg', 'mojave.jpg');
INSERT INTO `images` VALUES ('12', '4', 'Hill Town Community Center', '95a.jpg', 'x2.jpg', 'C01185.jpg', '12.jpg', 'x4.jpg', 'x4.jpg', 'x4.jpg', 'x4.jpg');
INSERT INTO `images` VALUES ('13', '5', 'Bilas Community Center ', 'grass-blades.jpg', '95a.jpg', '26a.jpg', 'C01185.jpg', '', '', '', '');
INSERT INTO `images` VALUES ('14', '7', 'Mid Night Sun', 'lotus.jpg', 'pcs3.JPG', 'x.jpg', 'rivate-party.jpg', '', '', '', '');
INSERT INTO `images` VALUES ('15', '9', 'sun beam', 'C01185.jpg', 'pped_full.jpeg', 'x.jpg', 'x4.jpg', '', '', '', '');
INSERT INTO `images` VALUES ('16', '6', 'Priyanka Community Center', 'caro-s-party-center.jpg', 'ladybug.jpg', 'rivate-party.jpg', 'rivate-party.jpg', '', '', '', '');
INSERT INTO `images` VALUES ('17', '8', 'sea palase community center ', 'corporate_2.png', 'pcs3.JPG', 'x.jpg', '95a.jpg', '', '', '', '');

-- ----------------------------
-- Table structure for `party_center_details`
-- ----------------------------
DROP TABLE IF EXISTS `party_center_details`;
CREATE TABLE `party_center_details` (
  `pc_id` int(5) NOT NULL,
  `pc_name` varchar(40) DEFAULT NULL,
  `price` int(7) DEFAULT NULL,
  `category_id` int(2) DEFAULT NULL,
  `party_type` varchar(15) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `contract` int(15) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `website` varchar(20) DEFAULT NULL,
  `attractive_points` varchar(100) DEFAULT NULL,
  `space` int(5) DEFAULT NULL,
  `guest_coverage` int(4) DEFAULT NULL,
  `bride_stage` varchar(20) DEFAULT NULL,
  `dressing_room` int(2) DEFAULT NULL,
  `wash_room` int(2) DEFAULT NULL,
  `rest_room` int(2) DEFAULT NULL,
  `music_stage` varchar(15) DEFAULT NULL,
  `cultural_programme` varchar(15) DEFAULT NULL,
  `deshes` int(3) DEFAULT NULL,
  `decoration` varchar(10) DEFAULT NULL,
  `parlor_salon` varchar(10) DEFAULT NULL,
  `food_item` varchar(50) DEFAULT NULL,
  `items` int(3) DEFAULT NULL,
  `service` varchar(15) DEFAULT NULL,
  `lighting` varchar(15) DEFAULT NULL,
  `stage` varchar(15) DEFAULT NULL,
  `dinning` varchar(15) DEFAULT NULL,
  `gate` varchar(15) DEFAULT NULL,
  `internal_security` varchar(100) DEFAULT NULL,
  `external_security` varchar(100) DEFAULT NULL,
  `special_service` varchar(100) DEFAULT NULL,
  `entertainment` varchar(100) DEFAULT NULL,
  `multimedia` varchar(100) DEFAULT NULL,
  `beauti_parlar_salon` varchar(60) DEFAULT NULL,
  `papers` varchar(30) DEFAULT NULL,
  `trade` varchar(30) DEFAULT NULL,
  `tin` varchar(30) DEFAULT NULL,
  `emergency` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pc_id`),
  KEY `pc_name_2` (`pc_name`),
  FULLTEXT KEY `pc_name_3` (`pc_name`),
  FULLTEXT KEY `entertainment` (`entertainment`),
  FULLTEXT KEY `attractive_points` (`attractive_points`),
  FULLTEXT KEY `internal_security` (`internal_security`),
  FULLTEXT KEY `external_security` (`external_security`)
) ENGINE=MyISAM AUTO_INCREMENT=282 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of party_center_details
-- ----------------------------
INSERT INTO `party_center_details` VALUES ('1', 'Yanthi Community Center', '60000', '1', 'Birthday_party,', 'H-102, R-12, sec-11, Mirpur, Dhaka', 'mirpur-11', 'dhaka', '171111', 'info@yanthi-mobile.com', 'www.house', 'Exclusive garden,Fountain,others', '1200', '200', 'fixed', '1', '4', '1', 'Particular', 'Own', '11', 'fixed', 'Own', 'Chinese,First_food,External_food', '11', 'self-services', 'fixed', 'fixed', 'fixed', 'fixed', 'Gifts,Web_cam', 'guard,Car parking', 'Gift shop,Others', 'Array', 'Video shoot,High quality sound system', 'Bride makeover', 'Available tax papers', '234234', '324545', 'Expart Emergency handlers');
INSERT INTO `party_center_details` VALUES ('2', 'xinzine', '40000', '1', 'Birthday_party,', 'H-102, R-12, sec-10 , Dhaka', 'mirpur-10', 'dhaka', '171111', 'info@xinzine.com', 'www.housinginbd.com', 'Exclusive garden,Fountain', '2000', '800', 'fixed', '1', '5', '1', 'Particular', 'Own', '11', 'fixed', 'Own', 'Chinese,First_food', '11', 'self-services', 'fixed', 'fixed', 'fixed', 'fixed', 'Gifts', 'guard', 'Gift shop,Others', 'Array', 'Video shoot,High quality sound system', 'Bride makeover,Party makeup', 'Available tax papers', '88889', '99998', 'Expart Emergency handlers');
INSERT INTO `party_center_details` VALUES ('3', 'Setera community Center', '25000', '1', 'Birthday_party,', 'H-10, R-12, section-11 , Dhaka', 'mirpur-11', 'dhaka', '119876', 'info@setara.com', 'www.housing.com', 'Whole lighting,Fountain,Excelent environment,others', '1500', '500', 'fixed', '1', '1', '1', 'Particular', 'Own', '25', 'fixed', 'Own', 'Chinese,First_food,E', '11', 'self-services', 'fixed', 'fixed', 'fixed', 'fixed', 'Gifts,Extra guard,First food,Others', 'guard,Transport,Car parking,Others', 'Gift shop', 'Array', 'Video shoot,Photo shoot,High quality sound system,others', 'Bride makeover,Groom makeover,Beauty specialist,Party makeup', 'Available tax papers,Others', '7809', '5678', 'Expart Emergency handlers,Rapidly solve problem,Others');
INSERT INTO `party_center_details` VALUES ('4', 'Hill Town Community Center', '22000', '2', 'Birthday_party,', 'H-102, R-12, Sisu Mela , Dhaka', 'mirpur-11', 'dhaka', '17111234', 'info@hillTown.com', 'www.house', 'Exclusive garden,Fountain,others', '1236', '200', 'fixed', '3', '4', '4', 'Particular', 'Own', '21', 'fixed', 'Own', 'Thai,Bengali,First_f', '11', 'self-services', 'fixed', 'fixed', 'fixed', 'fixed', 'Extra guard,Web_cam', 'Transport,Others', 'ATM Booth', 'Array', 'Photo shoot,others', 'Groom makeover,others', 'Others', '543', '432', 'Expart Emergency handlers');
INSERT INTO `party_center_details` VALUES ('5', 'Bilas Comunnity Center', '15000', '2', 'Birthday_party,', 'h-12,r-3,sec-a, mirpur-10', 'mirpur-10', 'dhaka', '234', 'info@bilas.com', 'www.', 'Whole lighting,Excelent environment', '1000', '200', 'fixed', '1', '1', '1', 'Particular', 'Own', '11', 'fixed', 'Own', 'Thai,Indian', '11', 'self-services', 'fixed', 'fixed', 'fixed', 'fixed', 'Extra guard,Web_cam', 'Transport,Others', 'ATM Booth', 'Array', 'Photo shoot,others', 'Groom makeover,others', 'Others', '454', '12423', 'Expart Emergency handlers,Rapidly solve problem');
INSERT INTO `party_center_details` VALUES ('6', 'Prinka Community Center', '50000', '2', 'Birthday_party,', 'House No:23,Road No:6,Mohammadpur, Dhaka ', 'Mohammadpur', 'Dhaka', '173898776', 'info@priyanka.com', 'www.Priyanka .com', 'Whole lighting,Multi-stored building,Excelent environment,Guest receiving', '1500', '500', 'selectable', '2', '4', '1', 'Particular', 'Own', '11', 'selectable', 'Own', 'Chinese,Bengali,Indian,Others', '11', 'self-services', 'Selectable', 'fixed', 'fixed', 'selectable', 'Extra guard,Others', 'guard,Transport,Car parking,Others', 'ATM Booth,WIFI Network,Others', 'Array', 'Video shoot,Photo shoot,Available_projector,High quality sound system,others', 'Bride makeover,Groom makeover,Beauty specialist,others', 'Available tax papers,Others', '788990', '223445899', 'Rapidly solve problem,Others');
INSERT INTO `party_center_details` VALUES ('7', 'Mid Night Sun', '40000', '2', 'Birthday_party,', 'r-12 h-23 b-a asadget, Dhaka', 'Asadget', 'Dhaka', '18777', 'info@midnight.com', 'www.midnightsun.com', 'Whole lighting,Multi-stored building,Excelent environment', '1500', '1000', 'fixed', '1', '1', '1', 'Particular', 'Own', '11', 'fixed', 'Own', 'Chinese,Thai,First_food', '11', 'self-services', 'fixed', 'fixed', 'fixed', 'fixed', 'Gifts,Locker,Web_cam,Fire protection,Others', 'guard,Car parking', 'ATM Booth,WIFI Network', 'Array', 'Video shoot,Photo shoot', 'Beauty specialist', 'Others', '4567', '123', 'Expart Emergency handlers,Rapidly solve problem');
INSERT INTO `party_center_details` VALUES ('8', 'sea palase community center ', '15000', '1', 'Birthday_party,', '46/9,banani', 'banani', 'Dhaka', '7878675', 'info@seaPalas.com', 'www.sea.com', 'Multi-stored building,Excelent environment,Guest receiving,others', '0', '0', 'selectable', '2', '2', '1', 'Particular', 'Own', '14', 'selectable', 'Own', 'Chinese,Bengali,First_food,Indian,Others', '13', 'served', 'Selectable', 'selectable', 'selectable', 'fixed', 'Gifts,Locker,Fire protection,Others', 'Car parking,Others', 'ATM Booth', 'Array', 'Video shoot,Photo shoot,others', '', 'Available tax papers,Others', '', '', 'Expart Emergency handlers,Rapidly solve problem,Others');
INSERT INTO `party_center_details` VALUES ('9', 'sun beam', '30000', '2', 'Birthday_party', 'h-1', 'dhanmondi', 'dhaka', '234', 'info@sunBeam.com', 'www.', 'Exclusive garden,Whole lighting,Multi-stored building,others', '134', '34', 'selectable', '1', '1', '1', 'Particular', 'Own', '11', 'fixed', 'Own', 'Chinese,Thai', '11', 'self-services', 'fixed', 'fixed', 'fixed', 'fixed', 'Extra guard', 'Transport', 'ATM Booth', 'Array', 'Photo shoot', 'Beauty specialist', 'Others', '34', '12', 'Expart Emergency handlers,Rapidly solve problem');
INSERT INTO `party_center_details` VALUES ('10', 'White House', '40000', '1', 'Wedding party,S', 'h-12, r-5, sector-7, uttara, dhaka', 'uttara', 'dhaka', '9999999', 'info@whitehouse.com', 'www.house', 'Exclusive garden', '3432', '45', 'fixed', '1', '1', '1', 'Particular', 'Own', '11', 'fixed', 'Own', 'Thai', '11', 'self-services', 'fixed', 'fixed', 'fixed', 'fixed', 'Extra guard', 'Transport', 'ATM Booth', 'Array', 'Photo shoot', 'Groom makeover', 'Others', '3', '3', 'Expart Emergency handlers');
INSERT INTO `party_center_details` VALUES ('13', 'Uttsob Community Center', '25000', '2', 'Wedding party,S', 'dhaka', 'dhaka', 'dhaka', '24323423', 'info@uttsob.com', 'www.', 'Exclusive garden,Fountain', '3', '23', 'fixed', '1', '1', '1', 'Particular', 'Own', '11', 'fixed', 'Own', 'Thai', '11', 'self-services', 'fixed', 'fixed', 'fixed', 'fixed', 'Extra guard', 'Transport', 'ATM Booth', 'Array', 'Photo shoot', 'Groom makeover', 'Others', '345', '345', 'Expart Emergency handlers');
INSERT INTO `party_center_details` VALUES ('11', 'Party House', '40000', '2', 'Wedding party,S', 'dhaka', 'dhaka', 'dhaka', '11', 'info@partyhouse.com', 'www.', 'Whole lighting,Excelent environment', '23', '45', 'fixed', '1', '1', '1', 'Particular', 'Own', '11', 'fixed', 'Own', 'Bengali', '11', 'self-services', 'fixed', 'fixed', 'fixed', 'fixed', 'Extra guard,Fire protection', 'Transport,Others', 'ATM Booth', 'Array', 'Photo shoot', 'Groom makeover', 'Others', '454', '33', 'Expart Emergency handlers');
INSERT INTO `party_center_details` VALUES ('12', 'Rupali Community Center', '50000', '2', 'Birthday_party', 'Mirpur-10 (Original)', 'Mirpur-10', 'Dhaka', '50000', 'rupali@info.com', 'www.r.com', 'Exclusive garden,Fountain', '2000', '400', 'fixed', '1', '1', '1', 'Particular', 'Own', '11', 'fixed', 'Own', 'Thai,Indian', '11', 'self-services', 'fixed', 'fixed', 'fixed', 'fixed', 'Extra guard,Fire protection', 'Transport,Others', 'Gift shop,ATM Booth', 'Array', 'Photo shoot,others', 'Bride makeover', 'Available tax papers', '56', '123', 'Expart Emergency handlers');

-- ----------------------------
-- Table structure for `registration`
-- ----------------------------
DROP TABLE IF EXISTS `registration`;
CREATE TABLE `registration` (
  `pc_id` int(5) NOT NULL AUTO_INCREMENT,
  `pc_name` varchar(40) NOT NULL,
  `reg_email` varchar(25) NOT NULL,
  `reg_phone` int(15) NOT NULL,
  `reg_location` varchar(15) NOT NULL,
  `reg_address` varchar(70) NOT NULL,
  `reg_password` varchar(15) NOT NULL,
  PRIMARY KEY (`pc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of registration
-- ----------------------------
INSERT INTO `registration` VALUES ('1', 'yanthi', 'info@yanthi.com', '171111', 'mirpur-11', '2', '123');
INSERT INTO `registration` VALUES ('2', 'xinzine', 'info@xinzine.com', '171111', 'mirpur-10', 'H-102, R-12, sec-10 , Dhaka', '123');
INSERT INTO `registration` VALUES ('3', 'Setera community Center', 'info@setara.com', '346778', 'mirpur-11', 'H-10, R-12, section-11 , Dhaka', 'abc');
INSERT INTO `registration` VALUES ('4', 'Hill Town Community Center', 'info@hillTown.com', '17111234', 'mirpur-11', 'H-102, R-12, Sisu Mela , Dhaka', '123');
INSERT INTO `registration` VALUES ('5', 'Bilas Community Center ', 'info@bilas.com', '234', 'mirpur-10', 'h-12,r-3,sec-a, mirpur-10', '123');
INSERT INTO `registration` VALUES ('6', 'Priyanka Community Center', 'info@priyanka.com', '173898776', 'Mohammadpur', 'House No:23,Road No:6,Mohammadpur, Dhaka ', '123');
INSERT INTO `registration` VALUES ('7', 'Mid Night Sun', 'info@midnight.com', '18777', 'Asadget', 'r-12 h-23 b-a asadget, Dhaka', '123');
INSERT INTO `registration` VALUES ('8', 'sea palase community center ', 'info@seaPalas.com', '7878675', 'banani', '46/9,banani', '123');
INSERT INTO `registration` VALUES ('9', 'sun beam', 'info@sunBeam.com', '234', 'dhanmondi', 'h-1', '123');
INSERT INTO `registration` VALUES ('10', 'White House', 'info@whitehouse.com', '9999999', 'uttara', 'h-12, r-5, sector-7, uttara, dhaka', '123');
INSERT INTO `registration` VALUES ('11', 'Party House', 'info@partyhouse.com', '11', 'dhaka', 'dhaka', '123');
INSERT INTO `registration` VALUES ('12', 'Rupali Community Center', 'rupali@info.com', '50000', 'Mirpur-10', 'Mirpur-10 (Original)', '123');
INSERT INTO `registration` VALUES ('13', 'Uttsob Community Center', 'info@uttsob.com', '24323423', 'dhaka', 'dhaka', '123');
INSERT INTO `registration` VALUES ('14', 'test', 'test', '0', 't', 't', '123');
INSERT INTO `registration` VALUES ('15', 'test', 'test@info', '1', 'dhaka', 'dhaka', '123');
INSERT INTO `registration` VALUES ('16', 'party center', 'info@party3sixty.com', '1', 'mirpur', 'mirpur-10', '123');
