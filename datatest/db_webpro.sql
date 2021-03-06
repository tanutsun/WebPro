-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 06:03 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `Activity_ID` smallint(6) NOT NULL,
  `Activity_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Activity_Detail` text COLLATE utf8_unicode_ci NOT NULL,
  `Activity_Date` date NOT NULL,
  `Activity_Pic` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Admin_ID` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`Activity_ID`, `Activity_Name`, `Activity_Detail`, `Activity_Date`, `Activity_Pic`, `Admin_ID`) VALUES
(1, 'Act1', 'Detail Act 1', '0000-00-00', 'static/images/image-not-found.png', 1),
(2, 'Act2', 'Detail Act 2', '0000-00-00', 'static/images/image-not-found.png', 1),
(3, 'Act3', 'Detail Act 3', '0000-00-00', 'static/images/image-not-found.png', 1),
(4, 'Act4', 'Detail Act 4', '0000-00-00', 'static/images/image-not-found.png', 1),
(5, 'Act5', 'Detail Act 5', '0000-00-00', 'static/images/image-not-found.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `last_login`) VALUES
(1, 'admin', '$2y$10$zl2ptI4zXNFOtuzDyouwderC0q/VWEoKIW7hAqUdcUfbmqmqRyDg2', '2018-10-27 16:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `Map_ID` smallint(6) NOT NULL,
  `Latitude` double NOT NULL,
  `Longtitude` double NOT NULL,
  `Map_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`Map_ID`, `Latitude`, `Longtitude`, `Map_Date`) VALUES
(1, 42.8806001, -8.54682, '0000-00-00'),
(2, 43.8806001, -8.6468299, '0000-00-00'),
(3, 44.8806001, -8.7468299, '0000-00-00'),
(4, 45.8806001, -8.8468299, '0000-00-00'),
(5, 46.8806001, -8.9468299, '0000-00-00'),
(6, 47.8806001, -8.4468299, '0000-00-00'),
(7, 48.8806001, -8.3468299, '0000-00-00'),
(8, 42.8806001, -8.5468299, '0000-00-00'),
(9, 43.8806001, -8.6468299, '0000-00-00'),
(10, 44.8806001, -8.7468299, '0000-00-00'),
(11, 45.8806001, -8.8468299, '0000-00-00'),
(12, 46.8806001, -8.9468299, '0000-00-00'),
(13, 47.8806001, -8.4468299, '0000-00-00'),
(14, 48.8806001, -8.3468299, '0000-00-00'),
(15, 42.8806001, -8.5468299, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `Plant_ID` smallint(6) NOT NULL,
  `Plant_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Plant_Detail` text COLLATE utf8_unicode_ci NOT NULL,
  `Plant_Quantity` int(11) NOT NULL,
  `Plant_Price` double NOT NULL,
  `Plant_Date` date NOT NULL,
  `Plant_Pic` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Admin_ID` smallint(6) NOT NULL,
  `Map_ID` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`Plant_ID`, `Plant_Name`, `Plant_Detail`, `Plant_Quantity`, `Plant_Price`, `Plant_Date`, `Plant_Pic`, `Admin_ID`, `Map_ID`) VALUES
(1, 'เชอรี่', '<p>เชอร์รี่ เป็นผลไม้ที่มีรสชาติหวานอมเปรี้ยว ลักษณะของผลมีลักษณะกลม ขนาดเล็ก เปลือกมีทั้งสีแดงเข้ม สีแดง สีส้ม และสีเหลือง ทั้งนี้ขึ้นอยู่กับสายพันธุ์</p> <br> <p>โดยทั่วไปแล้วเราจะแบ่งเชอร์รี่ออกเป็น 2 กลุ่ม ได้แก่ กลุ่มเชอร์รี่หวาน และกลุ่มเชอร์รี่หวานอมเปรี้ยว โดยแหล่งที่เพาะปลูกเชอร์รี่มากที่สุดก็คือทวีปอเมริกา ทวีปยุโรป ออสเตรเลีย รวมไปถึงญี่ปุ่น เพราะเชอร์รี่เป็นผลไม้ที่ชอบอากาศหนาวเย็น</p>', 0, 0, '2018-11-26', 'static/images/เชอรี่.jpg', 1, 1),
(2, 'เพกา', '<p>เพกา ชื่อสามัญ Broken bones tree, Damocles tree, Indian trumpet flower</p>\r\n<br>\r\n<p>เพกา ชื่อวิทยาศาสตร์ Oroxylum indicum (L.) Kurz จัดอยู่ในวงศ์แคหางค่าง (BIGNONIACEAE)</p>\r\n<br>\r\n<p>สมุนไพรเพกา มีชื่อท้องถิ่นอื่น ๆ อีก เช่น ลิ้นฟ้า (เลย, ภาคอีสาน), กาโด้โด้ง (กาญจนบุรี), ดุแก ดอก๊ะ ด๊อกก๊ะ (แม่ฮ่องสอน), เบโด (จังหวัดนราธิวาส), มะลิ้นไม้ มะลิดไม้ ลิดไม้ (ภาคเหนือ), โชยเตียจั้ว (จีน) เป็นต้น</p>\r\n\r\n<p>ต้นเพกาจัดเป็นไม้ยืนต้นและเป็นสมุนไพรชนิดหนึ่งที่มีถิ่นกำเนิดในอินเดียแลเอเชียตะวันออกเฉียงใต้และรวมถึงประเทศไทยบ้านเราด้วย โดยพบได้ตามป่าเบญจพรรณและป่าชื้นทั่วไป แม้ว่าต้นเพกาจะมีอยู่ในหลาย ๆ ประเทศ แต่มีเพียงประเทศไทยเท่านั้นที่นำเพกามารับประทานเป็นผัก (จัดอยู่ในหมวดดอกฝัก)</p>', 0, 0, '2018-11-26', 'static/images/เพกา.jpg', 1, 2),
(3, 'ใบเตยหอม', '<p>ใบเตยหอม : Fragrant pandan,Pandan Wangi,Pandanus Palm</p>\r\n<p>ชื่อวิทยาศาสตร์ : Pandanus amaryllifolius Roxb.<br />อยู่ในวงศ์ : Pandanaceae</p>\r\n<p>ใบเตยหอม (Bai-Toei-hom) หรือเรียกว่า เตยหอม เป็นสมุนไพรไทยที่มาแต่โบราณ เป็นไม้ยืนต้น มีทรงพุ่มขนาดเล็กขึ้นเป็นกอ ลำต้นเป็นเหง้าอยู่ใต้ดิน มีข้อสั้นๆโผล่จากดินเล็กน้อย จะถูกห่อหุ้มไปด้วยกาบใบโดยรอบๆ มีสีเขียว ใบเป็นใบเดี่ยว ออกเรียงสลับเวียนจนถึงปลายยอด มีลักษณะยาวรี ใบเป็นทางยาว มีเส้นกลางชัด ขอบใบเรียบ ใบแข็งเรียบเป็นมัน มีสีเขียว มีกลิ่นหอม ใช้ทำเครื่องดื่มต่างๆ และนำมาใช้ผสมอาหาร แต่งกลิ่น เพิ่มสีอาหารเมนูต่างๆ ได้หลายเมนู ในประเทศไทยมีปลูกหลายสายพันธุ์</p>', 0, 0, '2018-11-26', 'static/images/ใบเตยหอม.jpg', 1, 3),
(4, 'ไผ่', '<p><strong>ไผ่</strong>&nbsp;เป็นไม้พุ่มหลายชนิดและหลายสกุลใน&nbsp;<a class=\"\"mw-redirect\"\" title=\"\"วงศ์หญ้า\"\" href=\"\"https://th.wikipedia.org/wiki/%E0%B8%A7%E0%B8%87%E0%B8%A8%E0%B9%8C%E0%B8%AB%E0%B8%8D%E0%B9%89%E0%B8%B2\"\">วงศ์หญ้า</a>&nbsp;(วงศ์ Poaceae; เดิมคือวงศ์ Gramineae) วงศ์ย่อย&nbsp;<em>Bambusoideae</em>&nbsp;เป็นไม้ไม่ผลัดใบใน ขึ้นเป็นกอ ลำต้นเป็นปล้องๆ เช่น&nbsp;<a class=\"\"new\"\" title=\"\"ไผ่จีน (ไม่มีหน้า)\"\" href=\"\"https://th.wikipedia.org/w/index.php?title=%E0%B9%84%E0%B8%9C%E0%B9%88%E0%B8%88%E0%B8%B5%E0%B8%99&amp;action=edit&amp;redlink=1\"\">ไผ่จีน</a>&nbsp;(<em>Arundinaria suberecta</em>&nbsp;Munro)&nbsp;<a class=\"\"new\"\" title=\"\"ไผ่ป่า (ไม่มีหน้า)\"\" href=\"\"https://th.wikipedia.org/w/index.php?title=%E0%B9%84%E0%B8%9C%E0%B9%88%E0%B8%9B%E0%B9%88%E0%B8%B2&amp;action=edit&amp;redlink=1\"\">ไผ่ป่า</a>&nbsp;(<em>Bambusa arundinacea</em>&nbsp;Willd.)&nbsp;<a title=\"\"ไผ่สีสุก\"\" href=\"\"https://th.wikipedia.org/wiki/%E0%B9%84%E0%B8%9C%E0%B9%88%E0%B8%AA%E0%B8%B5%E0%B8%AA%E0%B8%B8%E0%B8%81\"\">ไผ่สีสุก</a>&nbsp;(<em>B. flexuosa</em>&nbsp;Munro และ&nbsp;<em>B. blumeana</em>&nbsp;Schult.)&nbsp;<a class=\"\"new\"\" title=\"\"ไผ่ไร่ (ไม่มีหน้า)\"\" href=\"\"https://th.wikipedia.org/w/index.php?title=%E0%B9%84%E0%B8%9C%E0%B9%88%E0%B9%84%E0%B8%A3%E0%B9%88&amp;action=edit&amp;redlink=1\"\">ไผ่ไร่</a>&nbsp;(<em>Gigantochloa albociliata</em>&nbsp;Munro)&nbsp;<a class=\"\"new\"\" title=\"\"ไผ่ดำ (ไม่มีหน้า)\"\" href=\"\"https://th.wikipedia.org/w/index.php?title=%E0%B9%84%E0%B8%9C%E0%B9%88%E0%B8%94%E0%B8%B3&amp;action=edit&amp;redlink=1\"\">ไผ่ดำ</a>&nbsp;(<em>Phyllostachys nigra</em>&nbsp;Munro)</p>\r\n<p>ผลผลิตจากไผ่ที่สำคัญคือ&nbsp;<a title=\"\"หน่อไม้\"\" href=\"\"https://th.wikipedia.org/wiki/%E0%B8%AB%E0%B8%99%E0%B9%88%E0%B8%AD%E0%B9%84%E0%B8%A1%E0%B9%89\"\">หน่อไม้</a>&nbsp;ซึ่งเป็นอาหารสำคัญของคนไทย นิยมทานกันมากในเกือบทุกภาคของประเทศไทย โดยเฉพาะภาคเหนือและอีสาน นอกจากนี้ไม้ไผ่ยังมีคุณสมบัติพิเศษทั้งด้านความแข็งแรงและยืดรหยุ่นที่เหนือกว่าวัสดุสังเคราะห์หลายชนิด ดังนั้นจึงยังได้รับความนิยมในการทำเครื่องมือเครื่องใช้หลายประเภท ใช้ชะลอน้ำที่เข้าป่าชายเลน นั่งร้านก่อสร้างและบันได เป็นต้น</p>', 0, 0, '2018-11-26', 'static/images/ไผ่.jpg', 1, 4),
(5, 'ชะมวง', '<p><strong>ะมวง</strong>หรือ<strong>ส้มโมง</strong>&nbsp;<a class=\"mw-redirect\" title=\"ชื่อวิทยาศาสตร์\" href=\"https://th.wikipedia.org/wiki/%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C\">ชื่อวิทยาศาสตร์</a>:&nbsp;<em>Garcinia cowa</em>เป็นชื่อของต้นไม้ยืนต้นขนาดย่อมไปจนกระทั่งถึงขนาดกลางชนิดหนึ่งที่อยู่ในวงศ์ GUTTTIFERACEAE พบได้ตามป่าร้อนชื้นทั่วไป เปลือกเรียบ สีน้ำตาลเข้มเกือบดำ มีน้ำยางสีเหลืองขุ่น ใบเดี่ยว ผิวใบเป็นมัน เนื้อใบหนา มีรสเปรี้ยว ดอก เป็นช่อขนาดเล็ก กลีบดอกแข็ง หนา ผลสด ทรงกลม ผิวเรียบมีพูตื้นๆรอบผล ผลอ่อน สีเขียวอมเหลือง สุกแล้วมีสีเหลืองถึงส้มชอบขึ้นในดินกร่อยหรือดินชายทะเล</p>', 0, 0, '2018-11-26', 'static/images/ชะมวง.jpg', 1, 5),
(6, 'ฝั่งกิมจู', '<p><strong><span lang=\"TH\">ฝรั่ง</span></strong><span lang=\"TH\">&nbsp;(</span><span lang=\"TH\"><span style=\"font-family: arial, sans-serif;\">ชื่อวิทยาศาสตร์</span></span><span lang=\"TH\">:&nbsp;</span><em>Psidium guajava</em><span lang=\"TH\">&nbsp;</span>Linn.)&nbsp;<span lang=\"TH\">เป็นไม้ต้นขนาดเล็กถึงขนาดกลาง ในวงศ์&nbsp;</span>Myrtaceae&nbsp;<span lang=\"TH\">ฝรั่งเป็นพืชที่มีจุดกำเนิดอยู่ในอเมริกากลางและหมู่เกาะอินดีสต์ตะวันตก หลักฐานทางโบราณคดีในเปรูชี้ให้เห็นว่า มีฝรั่งมาตั้งแต่ 800 ปีก่อนครืสตกาล พ่อค้าชาวสเปนและโปรตุเกสเป็นผู้นำผลไม้ชนิดนี้ไปยังถิ่นต่างๆทั่วโลก เข้ามาถึงเอเชียตะวันออกเฉียงใต้เมื่อราวคริสต์ศตวรรษที่ 17 ส่วนในประเทศไทย คาดว่าเข้ามาในสมัยสมเด็จพระนารายณ์มหาราช</span></p>\r\n<p><span lang=\"TH\">คำว่าฝรั่งในภาษาอังกฤษคือ&nbsp;</span><span style=\"font-family: \'Angsana New\', serif;\">Guava&nbsp;</span><span lang=\"TH\"><span style=\"font-family: \'Angsana New\', serif;\">ซึ่งมาจาก</span><span style=\"font-family: arial, sans-serif;\">ภาษาสเปน</span><span style=\"font-family: \'Angsana New\', serif;\">&nbsp;คำว่า&nbsp;</span></span><span style=\"font-family: \'Angsana New\', serif;\">Guayaba&nbsp;</span><span lang=\"TH\"><span style=\"font-family: \'Angsana New\', serif;\">และ&nbsp;</span><span style=\"font-family: arial, sans-serif;\">ภาษาโปรตุเกส</span><span style=\"font-family: \'Angsana New\', serif;\">&nbsp;คำว่า&nbsp;</span></span><span style=\"font-family: \'Angsana New\', serif;\">Goiaba&nbsp;</span><span lang=\"TH\">ฝรั่งมีชื่อพื้นเมืองอื่นๆอีกคือ ย่าหมู (สุราษฎร์ธานี) ชมพู่ (ตรัง</span><span style=\"font-family: \'Angsana New\', serif;\">,&nbsp;</span><span lang=\"TH\">ปัตตานี) มะก้วย (เชียงใหม่</span><span style=\"font-family: \'Angsana New\', serif;\">,</span><span lang=\"TH\">เหนือ) มะก้วยกา (เหนือ) มะกา (กลาง</span><span style=\"font-family: \'Angsana New\', serif;\">,</span><span lang=\"TH\">แม่ฮ่องสอน) มะจีน (ตาก) มะมั่น (เหนือ) ยะมูบุเตบันยา (มลายู นราธิวาส) ยะริง (ละว้า เชียงใหม่) ยามุ (ใต้) ย่าหมู (ใต้) และ สีดา (นครพนม</span><span style=\"font-family: \'Angsana New\', serif;\">,</span><span lang=\"TH\">นราธิวาส)</span></p>', 0, 0, '2018-11-26', 'static/images/ฝรั่งกิมจู.jpg', 1, 6),
(7, 'ฝักบัว', '<p>บัว ได้รับการขนานนามให้เป็น&nbsp;<strong>\"\"ราชินีแห่งไม้น้ำ\"\"</strong>&nbsp;เป็นพืชน้ำล้มลุกที่มีทั้งลักษณะลำต้นที่เป็นหัว เหง้า หรือไหล ใบเป็นใบเดี่ยวเจริญขึ้นจากลำต้นโดยมีก้านใบส่งขึ้นมาเจริญที่ใต้น้ำ ผิวน้ำ หรือเหนือน้ำ รูปร่างของใบส่วนใหญ่กลมมีหลายแบบ บางชนิดมีก้านใบบัว</p>\r\n<p>บัว ถือเป็นสัญลักษณ์ของคุณงามความดี ความเชื่อมีมาตั้งแต่&nbsp;<a class=\"\"mw-redirect\"\" title=\"\"สมัยพุทธกาล\"\" href=\"\"https://th.wikipedia.org/wiki/%E0%B8%AA%E0%B8%A1%E0%B8%B1%E0%B8%A2%E0%B8%9E%E0%B8%B8%E0%B8%97%E0%B8%98%E0%B8%81%E0%B8%B2%E0%B8%A5\"\">สมัยพุทธกาล</a>&nbsp;ซึ่งมีตำนานกล่าวว่า หมอชีวกโกมารภัจจ์ได้ปรุงยาจากดอกบัว ถวายแด่ องค์สมเด็จพระพุทธเจ้า แก้อาการอ่อนเพลีย ถือว่าดอกบัวเป็น ดอกไม้ประจำศาสนาพุทธตามพุทธประวัติพบว่า บัวมีส่วนเกี่ยวข้องตั้งแต่ เมื่อพระพุทธเจ้าประสูตติตรัสรู้ และปรินิพาน เมื่อครั้งที่พระพุทธเจ้าเมื่อ ได้ทรงตรัสรู้แล้ว แต่เนื่องจากพระธรรมที่พระองค์ทรงบรรลุนั้นมีความละเอียดอ่อน สุขุมคัมภีรภาพ ยากต่อบุคคลจะรู้ เข้าใจและปฏิบัติได้ ทรงพิจารณาอย่างลึกซึ้ง แล้วทรงเห็นว่าบุคคลในโลกนี้มีหลายจำพวก บางพวกสอนได้ บางพวกสอนไม่ได้ เปรียบเสมือนบัวสี่เหล่า</p>\r\n', 0, 0, '2018-11-26', 'static/images/ฝักบัว.jpg\r\n', 1, 7),
(8, 'พุทรา', '<p><strong>พุทราจีน ชื่อสามัญ</strong>&nbsp;Jujube, Chinese date, Red date</p>\r\n<p><strong>พุทราจีน ชื่อวิทยาศาสตร์</strong>&nbsp;Ziziphus jujuba Mill. (ชื่อพ้องวิทยาศาสตร์ Ziziphus mauritiana Lam.) จัดอยู่วงศ์พุทรา (<a href=\"\"https://medthai.com/tag/RHAMNACEAE/\"\" target=\"\"_blank\"\" rel=\"\"noopener\"\">RHAMNACEAE</a>)<sup>[1]</sup></p>\r\n<div class=\"\"code-block code-block-7\"\">&nbsp;</div>\r\n<p><strong>สมุนไพรพุทราจีน</strong>&nbsp;มีชื่อท้องถิ่นอื่น ๆ ว่า มะตัน มะตันหลวง นางต้มต้น (ภาคเหนือ), บักทัน หมากกระทัน (ภาคอีสาน) เป็นต้น เป็นผลไม้ที่ใช้รับประทานมานานกว่า 4,000 ปีแล้ว โดยมีถิ่นกำเนิดอยู่ในประเทศจีนตอนใต้<sup>[1]</sup></p>\r\n<p><strong>ต้นพุทราจีน</strong>&nbsp;เป็นไม้ยืนต้นขนาดเล็ก มีหนาม ในผลมีเมล็ดเดียว ผิวเรียบ เมื่อผลสุกจะเป็นสีเหลืองหรือบางสายพันธุ์จะเป็นสีแดงเข้ม<sup>[1]</sup>&nbsp;ส่วนสายพันธุ์ที่มีการเพาะปลูกในประเทศไทยได้แก่<sup>[3]</sup></p>\r\n<ul>\r\n<li>พันธุ์พื้นเมือง แบ่งออกเป็นพันธุ์ลูกเกดและพันธุ์ไข่เต่า ผลมีลักษณะรีหรือกลมแป้น เปลือกผลบาง เนื้อหยาบมีสีเหลือง รสชาติเปรี้ยวและฝาดอมหวาน</li>\r\n<li>พันธุ์สามรส ผลมีลักษณะกลมแป้น เปลือกบาง เนื้อละเอียดมีสีขาวกรอบ</li>\r\n<li>พันธุ์เจดีย์หรือพันธุ์ปากน้ำ เป็นสายพันธุ์ลูกผสมระหว่างพันธุ์พื้นเมืองกับพันธุ์อินเดีย มีต้นกำเนิดในจังหวัดสมุทรปราการ</li>\r\n<li>พันธุ์บอมเบย์ ผลมีลักษณะยาวรี เปลือกบางเป็นมัน เนื้อละเอียดมีสีหลือง รสชาติหวานกรอบ</li>\r\n<li>พันธุ์เหรียญทอง ผลมีลักษณะคล้ายแอปเปิ้ล มีเปลือกหนา ผิวหยาบ เนื้อละเอียดมีสีขาว มีรสหวานกรอบ และมีกลิ่นหอม</li>\r\n<li>พันธุ์แอปเปิ้ล ผลมีลักษณะกลมแป้น เปลือกหนาใสสีเขียวเข้ม เนื้อมีสีขาว กรอบละเอียด มีรสชาติหวานอมเปรี้ยว</li>\r\n<li>พันธุ์สาลี่หรือพันธุ์บอมเบย์ยักษ์ ผลมีลักษณะคล้ายสาลี่และมีขนาดใหญ่กว่าสายพันธุ์อื่น ๆ เปลือกผลบาง ผิวเหลือง เนื้อในค่อนข้างหยาบมีสีเหลือง เนื้อมาก มีรสหวานกรอบ</li>\r\n<li>พันธุ์บอมเบย์ ผลมีลักษณะยาวรี เปลือกบางเป็นมัน เนื้อละเอียดสีเหลือง มีรสชาติหวานกรอบ</li>\r\n</ul>\r\n', 0, 0, '2018-11-26', 'static/images/พุทรา.jpg', 1, 8),
(9, 'มะดัน', '<p><strong>มะดัน ชื่อสามัญ</strong>&nbsp;Madan (ตรงตัว)</p>\r\n<p><strong>มะดัน ชื่อวิทยาศาสตร์</strong>&nbsp;Garcinia schomburgkiana Pierre จัดอยู่ในวงศ์มังคุด (<a href=\"\"https://medthai.com/tag/CLUSIACEAE/\"\" target=\"\"_blank\"\" rel=\"\"noopener\"\">CLUSIACEAE</a>&nbsp;หรือ&nbsp;<a href=\"\"https://medthai.com/tag/GUTTIFERAE/\"\" target=\"\"_blank\"\" rel=\"\"noopener\"\">GUTTIFERAE</a>)</p>\r\n<p><strong>สมุนไพรมะดัน</strong>&nbsp;มีชื่อเรียกอื่น ๆ ว่า ส้มมะดัน, ส้มไม่รู้ถอย เป็นต้น</p>\r\n<h4><span id=\"\"ลักษณะของมะดัน\"\">ลักษณะของมะดัน</span></h4>\r\n<ul>\r\n<li><strong>ต้นมะดัน</strong>&nbsp;เป็นไม้ยืนต้น ไม่ผลัดใบ สูงประมาณ 7-10 เมตร แตกกิ่งก้านออกเป็นพุ่ม ลักษณะของเปลือกต้นจะเรียบ สีน้ำตาลอมดำ ลักษณะของต้นมะดันมีดังนี้</li>\r\n</ul>\r\n<ul>\r\n<li><strong>ใบมะดัน</strong>&nbsp;เป็นใบเดี่ยว สีเขียวเข้ม รูปขอบขนาน ขอบใบเรียบออกเรียงสลับกัน โคนใบและปลายใบแหลม แผ่นใบเรียบลื่น</li>\r\n</ul>\r\n<ul>\r\n<li><strong>ดอกมะดัน</strong>&nbsp;เป็นดอกเดี่ยวหรือออกดอกเป็นกระจุกประมาณ 3-6 ดอก โดยดอกจะออกตามซอกใบ ดอกมีสีเหลืองอมส้มนิด ๆ ดอกมีทั้งดอกสมบูรณ์เพศและดอกเพศผู้ มีกลีบเลี้ยง 4 กลีบ ค่อนข้างกลม กลีบดอกมี 4 กลีบ คล้ายรูปแกมรูปไข่ ส่วนปลายกลีบจะมน และดอกเพศจะมีเกสรเพศผู้อยู่ 10-12 อัน</li>\r\n</ul>\r\n<ul>\r\n<li><strong>ผลมะดัน</strong>&nbsp;หรือ&nbsp;<strong>ลูกมะดัน</strong>&nbsp;ลักษณะของผลจะคล้ายรูปรีปลายแหลม ผลมีสีเขียว ลักษณะผิวเรียบเป็นมันลื่น ผลมีรสเปรี้ยวถึงเปรี้ยวจัด ด้านในผลมีเมล็ดประมาณ 3-4 เมล็ดติดกัน เมล็ดแข็งและขรุขระ โดยในผลจะมีวิตามินซีสูงและยังมีสารอาหารหรือสารสำคัญอย่างเบตาแคโรทีน รวมไปถึงแร่ธาตุชนิดต่าง ๆ เช่น แคลเซียม เหล็ก ฟอสฟอรัส เป็นตัน</li>\r\n</ul>\r\n', 0, 0, '2018-11-26', 'static/images/มะดัน.jpg\r\n', 1, 9),
(10, 'มะนาวทลูเกล้า', '<p>มะนาวทูลเกล้า อยู่ในวงศ์ RUTACEAE เป็นไม้พุ่ม ถ้าปลูกลงดินต้นสูงได้ 2-3 เมตร กิ่งก้านมีหนามแต่น้อยมาก กิ่งมักโค้งงอและยาวเกือบทอดเลื้อยตามหน้าดิน ใบของ &ldquo;มะนาวทูลเกล้า&rdquo; จะมีความหนากว่าใบของมะนาวสายพันธุ์อื่น จึงทำให้แมลงไม่ลงเกาะกิน ดอกสีขาว มีกลีบดอก 4 กลีบ ร่วงง่าย มีกลิ่นหอม &ldquo;ผล&rdquo; รูปทรงกลมมีขนาดใหญ่ตามที่กล่าวข้างต้น ให้น้ำเยอะ รสเปรี้ยวจัด และไม่มีเมล็ด ติดผลเป็นพวงเกือบตลอดทั้งปี และที่เป็นจุดเด่นทำให้ &ldquo;มะนาวทูลเกล้า&rdquo; ครองความนิยมในการปลูกคือ จะติดผลดกเป็นพิเศษในช่วงฤดูแล้ง ซึ่งเป็นช่วงที่มะนาวสายพันธุ์อื่นไม่ติดผล หรือติดผลน้อย และมีราคาแพง ขยายพันธุ์ด้วยการตอนกิ่งและเสียบยอด</p>', 0, 0, '2018-11-26', 'static/images/มะนาวทลูเกล้า.jpg', 1, 10),
(11, 'มะม่วง', '<p><strong>มะม่วง (</strong><a class=\"\"mw-redirect\"\" title=\"\"ชื่อวิทยาศาสตร์\"\" href=\"\"https://th.wikipedia.org/wiki/%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C\"\">ชื่อวิทยาศาสตร์</a><strong>:</strong>&nbsp;<em>Mangifera Indica</em><strong>)</strong>&nbsp;เป็นไม้ยืนต้นในสกุล&nbsp;<em><a class=\"\"mw-redirect\"\" title=\"\"Mangifera\"\" href=\"\"https://th.wikipedia.org/wiki/Mangifera\"\">Mangifera</a></em>&nbsp;ซึ่งเป็น<a title=\"\"ไม้ผล\"\" href=\"\"https://th.wikipedia.org/wiki/%E0%B9%84%E0%B8%A1%E0%B9%89%E0%B8%9C%E0%B8%A5\"\">ไม้ผล</a>เมืองร้อนในวงศ์&nbsp;<a class=\"\"mw-redirect\"\" title=\"\"Anacardiaceae\"\" href=\"\"https://th.wikipedia.org/wiki/Anacardiaceae\"\">Anacardiaceae</a>&nbsp;(กลุ่มเดียวกับ<a title=\"\"พิสตาชีโอ\"\" href=\"\"https://th.wikipedia.org/wiki/%E0%B8%9E%E0%B8%B4%E0%B8%AA%E0%B8%95%E0%B8%B2%E0%B8%8A%E0%B8%B5%E0%B9%82%E0%B8%AD\"\">ถั่วพิสตาชีโอ</a>และ<a title=\"\"มะม่วงหิมพานต์\"\" href=\"\"https://th.wikipedia.org/wiki/%E0%B8%A1%E0%B8%B0%E0%B8%A1%E0%B9%88%E0%B8%A7%E0%B8%87%E0%B8%AB%E0%B8%B4%E0%B8%A1%E0%B8%9E%E0%B8%B2%E0%B8%99%E0%B8%95%E0%B9%8C\"\">มะม่วงหิมพานต์</a>)&nbsp;<a class=\"\"mw-redirect\"\" title=\"\"ชื่อวิทยาศาสตร์\"\" href=\"\"https://th.wikipedia.org/wiki/%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C\"\">ชื่อวิทยาศาสตร์</a>:&nbsp;<em>Mangifera indica</em>&nbsp;เป็นพืชที่มีถิ่นกำเนิดในอินเดีย เพราะการที่ภูมิภาคนั้นมีความหลากหลายทางพันธุกรรมและร่องรอยฟอสซิลที่หลากหลาย นับย้อนไปได้ถึง 25-30 ล้านปีก่อน&nbsp;มะม่วงมีความแตกต่างประมาณ 49 สายพันธุ์กระจายอยู่ตามประเทศในเขตร้อนตั้งแต่<a class=\"\"mw-redirect\"\" title=\"\"อินเดีย\"\" href=\"\"https://th.wikipedia.org/wiki/%E0%B8%AD%E0%B8%B4%E0%B8%99%E0%B9%80%E0%B8%94%E0%B8%B5%E0%B8%A2\"\">อินเดีย</a>ไปจนถึง<a class=\"\"mw-redirect\"\" title=\"\"ฟิลิปปินส์\"\" href=\"\"https://th.wikipedia.org/wiki/%E0%B8%9F%E0%B8%B4%E0%B8%A5%E0%B8%B4%E0%B8%9B%E0%B8%9B%E0%B8%B4%E0%B8%99%E0%B8%AA%E0%B9%8C\"\">ฟิลิปปินส์</a>&nbsp;จากนั้นจึงแพร่หลายไปทั่วโลก เป็นไม้พุ่มขนาดกลาง ใบโต ยาว ปลายแหลม ขอบใบเรียบ ใบอ่อนสีแดง ออกดอกเป็นช่อตามปลายกิ่ง ดอกขนาดเล็ก สีขาว ผลอ่อนสีเขียว ผลแก่สีเหลือง เมล็ดแบน เปลือกหุ้มเมล็ดแข็ง</p>\r\n<p>มะม่วงเป็นผลไม้เศรษฐกิจ ปลูกเป็นพืชสวน ประเทศไทยส่งออกมะม่วงเป็นอันดับ 3 รองจากฟิลิปปินส์ และเม็กซิโก&nbsp;<sup id=\"\"cite_ref-3\"\" class=\"\"reference\"\"><a href=\"\"https://th.wikipedia.org/wiki/%E0%B8%A1%E0%B8%B0%E0%B8%A1%E0%B9%88%E0%B8%A7%E0%B8%87#cite_note-3\"\">[3]</a></sup>เป็นผลไม้ประจำชาติของอินเดีย<sup id=\"\"cite_ref-4\"\" class=\"\"reference\"\"><a href=\"\"https://th.wikipedia.org/wiki/%E0%B8%A1%E0%B8%B0%E0%B8%A1%E0%B9%88%E0%B8%A7%E0%B8%87#cite_note-4\"\">[4]</a></sup>&nbsp;<a class=\"\"mw-redirect\"\" title=\"\"ปากีสถาน\"\" href=\"\"https://th.wikipedia.org/wiki/%E0%B8%9B%E0%B8%B2%E0%B8%81%E0%B8%B5%E0%B8%AA%E0%B8%96%E0%B8%B2%E0%B8%99\"\">ปากีสถาน</a>&nbsp;และฟิลิปปินส์ รวมทั้งบังกลาเทศ</p>\r\n', 0, 0, '2018-11-26', 'static/images/มะม่วง.jpg', 1, 11),
(12, 'มะม่วงน้ำดอกไม้', '<p>&nbsp;<strong>มะม่วงน้ำดอกไม้</strong>&nbsp;(Nam Dok Mai) เป็นมะม่วงที่นิยมรับประทานสุก ทั้งในประเทศ และต่างประเทศ โดยเฉพาะประเทศญี่ปุ่น เนื่องจาก ผลสุกมีสีเหลืองทอง สวยงาม เนื้อมีสีเหลืองอมครีม เนื้อแน่นปานกลาง มีความนุ่ม และรสหวาน นิยมรับประทานเป็นผลไม้สุกหรือใช้ทำขนมหวาน อาทิ ข้าวเหนียวมะม่วง ไอศกรีม และแยม เป็นต้น</p>\r\n<p>&bull; วงศ์ : Anacardiaceae<br />&bull; ชื่อวิทยาศาสตร์ : Mangifera indica Linn.<br />&bull; ชื่อสามัญ : Mango (Nam Dok Mai)<br />&bull; ชื่อท้องถิ่น : มะม่วงน้ำดอกไม้</p>\r\n', 0, 0, '2018-11-26', 'static/images/มะม่วงน้ำดอกไม้.jpg', 1, 12),
(13, 'มะระกอ', '<p><strong>มะละกอ</strong>&nbsp;เป็นไม้ผลชนิดหนึ่ง สูงประมาณ 5-10 เมตร มีถิ่นกำเนิดใน<a title=\"อเมริกากลาง\" href=\"https://th.wikipedia.org/wiki/%E0%B8%AD%E0%B9%80%E0%B8%A1%E0%B8%A3%E0%B8%B4%E0%B8%81%E0%B8%B2%E0%B8%81%E0%B8%A5%E0%B8%B2%E0%B8%87\">อเมริกากลาง</a>&nbsp;ถูกนำเข้าสู่เอเชียตะวันออกเฉียงใต้ในสมัยกรุงศรีอยุธยา ผลดิบมีสีเขียว เมื่อสุกแล้วเนื้อในจะมีสีเหลืองถึงส้ม นิยมนำมารับประทานทั้งสดและนำไปปรุงอาหาร เช่น&nbsp;<a title=\"ส้มตำ\" href=\"https://th.wikipedia.org/wiki/%E0%B8%AA%E0%B9%89%E0%B8%A1%E0%B8%95%E0%B8%B3\">ส้มตำ</a>&nbsp;ฯลฯ หรือนำไปแปรรูปเป็นผลิตภัณฑ์อื่น ๆ ก็ได้</p>\r\n', 0, 0, '2018-11-26', 'static/images/มะระกอ.jpg', 1, 13),
(14, 'มัลเบอรี่', '<p>หม่อนเป็นไม้พุ่มขนาดกลาง เปลือกต้นสีน้ำตาลแดง ลำต้นตั้งตรง แตกกิ่งก้านไม่มากนัก ใบเดี่ยวเรียงสลับ รูปไข่ หรือรูปไข่กว้าง ขอบเรียบหรือหยักเว้าเป็นพู ขึ้นกับพันธุ์ กว้าง 8-14 เซนติเมตร ยาว 12-16 เซนติเมตร ผิวใบสากคาย ปลายเรียวแหลมยาว ฐานใบกลม หรือรูปหัวใจ หรือค่อนข้างตัด ใบอ่อนขอบจักเป็นพูสองข้างไม่เท่ากัน ขอบพูจักเป็นซี่ฟัน เส้นใบมี 3 เส้น ออกจากโคนยาวไปถึงกลางใบ และเส้นใบออกจากเส้นกลางใบ 4 คู่ เส้นร่างแหเห็นชัดด้านล่าง ใบสีเขียวเข้ม ผิวใบสากคาย ก้านใบเล็กเรียว ยาว 1.0-1.5 เซนติเมตร หูใบรูปแถบแคบปลายแหลม ยาว 0.2-0.5 เซนติเมตร ดอกเป็นดอกช่อ รูปทรงกระบอกออกที่ซอกใบ และปลายยอด แยกเพศอยู่บนต้นเดียวกัน ช่อดอกเพศผู้และช่อดอกเพศเมียอยู่ต่างช่อกัน วงกลีบรวมสีขาวหม่น หรือสีขาวแกมเขียว ช่อดอกเป็นหางกระรอก ยาวประมาณ 2 เซนติเมตร ดอกเพศผู้ วงกลีบรวมมี 4 แฉก เกลี้ยง เกสรเพศเมีย วงกลีบรวมมี 4 แฉก เกลี้ยง ขอบมีขน เมื่อเป็นผลจะอวบน้ำ รังไข่เกลี้ยง ก้านเกสรเพศเมียมี 2 อัน ผลเป็นผลรวม รูปทรงกระบอก มีสีเขียว เมื่อสุกสีม่วงแดงเข้ม เกือบดำ ฉ่ำน้ำ มีรสหวานอมเปรี้ยว</p>\r\n', 0, 0, '2018-11-26', 'static/images/มัลเบอรี่.jpg', 1, 14),
(15, 'ละมุด', '<p>ละมุดเป็นไม้ยืนต้นขนาดกลาง เป็นพุ่มทึบ กิ่งก้าน แตกออกรอบลำต้นเป็นชั้น ๆ ใบเดี่ยว ท้องใบมีสีน้ำตาลอมเขียว มักออกเป็นกระจุก ตามปลายกิ่ง ดอกเดี่ยว ออกตามง่ามกิ่ง กลีบรองดอกเรียงกัน เป็น 2 ชั้น กลีบดอกเชื่อมกันและยกตั้งขึ้น มี 6 กลีบ มีสีเหลืองนวล ผลรูปไข่ หรือรูปปลายข้างหนึ่งแหลมเล็กน้อย มีสีน้ำตาล ผลยังไม่สุกมียางสีขาว รสฝาด แข็ง เมื่อสุกจะนิ่ม หวาน ไม่มียาง มีเมล็ดรูปยาว รี ผิวสีดำฝังอยู่ในเนื้อ ผลละ 2-6 เมล็ด</p>', 0, 0, '2018-11-26', 'static/images/ละมุด.jpg', 1, 15),
(1276, 'เชอรี่', '<p>เชอร์รี่&nbsp;เป็นผลไม้ที่มีรสชาติหวานอมเปรี้ยว ลักษณะของผลมีลักษณะกลม ขนาดเล็ก เปลือกมีทั้งสีแดงเข้ม สีแดง สีส้ม และสีเหลือง ทั้งนี้ขึ้นอยู่กับสายพันธุ์</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>โดยทั่วไปแล้วเราจะแบ่งเชอร์รี่ออกเป็น 2 กลุ่ม ได้แก่ กลุ่มเชอร์รี่หวาน และกลุ่มเชอร์รี่หวานอมเปรี้ยว โดยแหล่งที่เพาะปลูกเชอร์รี่มากที่สุดก็คือทวีปอเมริกา ทวีปยุโรป ออสเตรเลีย รวมไปถึงญี่ปุ่น เพราะเชอร์รี่เป็นผลไม้ที่ชอบอากาศหนาวเย็น</p>\r\n\r\n<p>&nbsp;</p>\r\n', 0, 0, '2018-11-26', 'static/images/image-not-found.png', 1, 1),
(2515, 'เชอรี่', '<p>เชอร์รี่&nbsp;เป็นผลไม้ที่มีรสชาติหวานอมเปรี้ยว ลักษณะของผลมีลักษณะกลม ขนาดเล็ก เปลือกมีทั้งสีแดงเข้ม สีแดง สีส้ม และสีเหลือง ทั้งนี้ขึ้นอยู่กับสายพันธุ์</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>โดยทั่วไปแล้วเราจะแบ่งเชอร์รี่ออกเป็น 2 กลุ่ม ได้แก่ กลุ่มเชอร์รี่หวาน และกลุ่มเชอร์รี่หวานอมเปรี้ยว โดยแหล่งที่เพาะปลูกเชอร์รี่มากที่สุดก็คือทวีปอเมริกา ทวีปยุโรป ออสเตรเลีย รวมไปถึงญี่ปุ่น เพราะเชอร์รี่เป็นผลไม้ที่ชอบอากาศหนาวเย็น</p>\r\n\r\n<p>&nbsp;</p>\r\n', 0, 0, '2018-11-26', 'static/images/image-not-found.png', 1, 0),
(4979, 'เชอรี่', '<p>เชอร์รี่&nbsp;เป็นผลไม้ที่มีรสชาติหวานอมเปรี้ยว ลักษณะของผลมีลักษณะกลม ขนาดเล็ก เปลือกมีทั้งสีแดงเข้ม สีแดง สีส้ม และสีเหลือง ทั้งนี้ขึ้นอยู่กับสายพันธุ์</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>โดยทั่วไปแล้วเราจะแบ่งเชอร์รี่ออกเป็น 2 กลุ่ม ได้แก่ กลุ่มเชอร์รี่หวาน และกลุ่มเชอร์รี่หวานอมเปรี้ยว โดยแหล่งที่เพาะปลูกเชอร์รี่มากที่สุดก็คือทวีปอเมริกา ทวีปยุโรป ออสเตรเลีย รวมไปถึงญี่ปุ่น เพราะเชอร์รี่เป็นผลไม้ที่ชอบอากาศหนาวเย็น</p>\r\n\r\n<p>&nbsp;</p>\r\n', 0, 0, '2018-11-26', 'static/images/image-not-found.png', 1, 1),
(6532, 'กัญชาออแกนนิค', '<p>กัญชาแท้ๆ จากสวนผอ. ยุผล สมปราง</p>\r\n', 0, 0, '2018-11-12', 'static/images/image-not-found.png', 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` smallint(6) NOT NULL,
  `Product_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Product_Detail` text COLLATE utf8_unicode_ci NOT NULL,
  `Product_Quantity` int(11) NOT NULL,
  `Product_Date` date NOT NULL,
  `Product_Price` int(11) NOT NULL,
  `Product_Pic` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Admin_ID` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Product_Detail`, `Product_Quantity`, `Product_Date`, `Product_Price`, `Product_Pic`, `Admin_ID`) VALUES
(1, 'ไข่เค็มสมุนไพร', 'ไข่เค็ม เป็นการถนอมอาหารอย่างหนึ่ง โดยมากมักจะใช้ไข่เป็ด แล้วนำไปแช่ในน้ำเกลือหรือนำไปพอกด้วยวัสดุที่ผสมเกลือเพื่อให้เกลือซึมเข้าไปในเนื้อของไข่ เพื่อให้สามารถเก็บไข่ไว้ได้นานขึ้น ไข่เป็ดเค็มที่ผลิตจากการแช่น้ำเกลือจะมีกลิ่นน้ำเกลือ ไข่ขาวจะแน่นและเนียน ในขณะที่ไข่แดงจะมีสีออกส้มอมแดง แต่ถ้าใช้ไข่ไก่จะมีรสชาติและรสสมผัสที่แตกต่างออกไป และรสชาติไข่แดงจะเข้มข้นน้อยกว่าไข่เป็ด', 0, '2018-11-02', 50, 'static/images/1001.jpg', 1),
(2, 'กล้วยตาก', 'กล้วยตากที่นิยมรับประทานกันในปัจจุบัน ถูกคิดค้นมาตั้งแต่สมัยโบราณแล้ว แต่ที่มีการบันทึกหรือกล่าวถึงกล้วยตากนั้นได้เริ่มมาจากจังหวัดพิษณุโลก ในชื่อของ &ldquo;กล้วยตากบางกระทุ่ม&rdquo; ที่เริ่มเมื่อประมาณปี 2547 โดยมีนางโป๊ว สิงหลักษณ์ ที่อพยพมาจากจังหวัดฉะเชิงเทราเป็นผู้คิดค้น โดยเริ่มจากการเข้ามาจับจองที่บริเวณบ้านเกาะคูเป็นที่พักอาศัย และประกอบอาชีพ ซึ่งขณะนั้นได้ปลูกกล้วยน้ำว้าพันธุ์มะลิอ่องในสวน ซึ่งเป็นกล้วยที่นำมาด้วยจากฉะเชิงเทรา เมื่อกล้วยออกเครือมากจนเหลือกินนั้นจึงได้นำกล้วยมาตากบนเฝือกตากปลา ซึ่งเมื่อรับประทานจะมีรสหอมหวาน ชุ่มช่ำกว่ากล้วยสุกทั่วไป จึงเริ่มเป็นที่นิยมทำเพื่อรับประทาน', 0, '2018-11-02', 50, 'static/images/2001.jpg', 1),
(3, 'กล้วยฉาบ', '<br /><br />สุขภาพ ความงาม อาหารและยา สมุนไพร สาระน่ารู้ &gt;&gt;<br />กล้วยฉาบ<br /><br />การทำกล้วยฉาบเป็นวิธีการถนอมอาหารที่ขึ้นชื่ออย่างหนึ่ง โดยอาศัยน้ำตาลเป็นสารป้องกันไม่ให้อาหาร เกิดการเปลี่ยนแปลง บูดเน่าเสียหาย และมีวัตถุประสงค์เพื่อเก็บไว้กินนานๆ<br /><br />การทำกล้วยฉาบ โดยทั่วไปจะมีขั้นตอนและวิธีการที่คล้ายๆ กัน คือขั้นตอนแรกเริ่มด้วยการคัดเลือกกล้วยน้ำว้า ที่แก่จัด นำมาปอกเปลือก แล้วนำมาหั่นเป็นแว่นๆ แต่เดิมจะใช้มีดหั่นตามยาวหรือขวางก็ได้ แต่ปัจจุบันนิยมนำมาไสกับกบไสน้ำแข็ง เพราะจะทำให้ได้แว่นกล้วยฉาบที่มีความหนาเท่าๆ กัน อีกทั้งเป็นการประหยัดเวลาด้วย จากนั้นนำมาแกะแยกชิ้นออกเพื่อให้ยางกล้วยแห้ง เอาไปทอดน้ำมันที่ร้อนจัดจนกรอบ แล้วตักใส่ที่พักให้สะเด็ดน้ำมัน เมื่อทอดกล้วยหมดแล้ว เอากะทะใส่น้ำตาล เนย น้ำเล็กน้อย พร้อมด้วยเกลือพอมีรสเค็ม ตั้งไฟให้น้ำร้อนจัด เคี่ยวจนส่วนผสมเหนียวเป็นยางมะตูม เอากล้วยที่ทอดแล้วลงคลุกกับน้ำตาล ซึ่งชาวพัทลุง จะเรียกวิธีการนี้ว่า \"หราน้ำผึ้ง\" หรือ \"ฉาบน้ำตาล\" ฉาบจนน้ำตาลเกาะติดกล้วยและแห้ง ทิ้งไว้ให้เย็นแล้วจึงบรรจุภาชนะเก็บได้', 0, '2018-11-02', 50, 'static/images/3001.jpg', 1),
(4, 'ชาใบหม่อน', 'เป็นชาที่กำลังได้รับความนิยม ไม่แพ้ชาชนิดอื่น[1]โดยสรรพคุณของใบหม่อนจะช่วยป้องกันรักษา โรคเบาหวาน ลดระดับน้ำตาลในเส้นเลือด และช่วยขจัดไขมันส่วนเกินในร่างกายได้ดี อีกทั้งยังมีราคาค่อนข้างถูกเมื่อเทียบกับชาชนิดอื่นๆ ', 0, '2018-11-02', 50, 'static/images/4001.jpg', 1),
(5, 'น้ำยาล้างจาน', 'สารชำระล้าง (detergent) ที่ใช้ช่วยในการล้างจาน มีส่วนผสมของสารลดแรงตึงผิว (surfactant) ที่มีการระคายเคืองต่ำ ประโยชน์หลักของน้ำยาล้างจานคือใช้ล้างภาชนะและเครื่องครัวด้วยมือหลังจากประกอบหรือรับประทานอาหารแล้ว น้ำยาล้างจานทำให้สิ่งสกปรกและไขมันหลุดจากภาชนะและรวมตัวเป็นอีมัลชัน (emulsion) อยู่ในน้ำหรือฟอง (foam) เนื่องจากโมเลกุลของน้ำยาล้างจานประกอบด้วยส่วนที่มีขั้วและไม่มีขั้วเช่นเดียวกับผงซักฟอก ส่วนที่มีขั้วจะจับกับโมเลกุลของน้ำ และส่วนที่ไม่มีขั้วจะจับกับสิ่งสกปรกให้หลุดออก ในสมัยก่อนมีชื่อเรียกอื่นๆ เช่น สบู่ล้างจาน หรือ ครีมล้างจาน เนื่องจากเคยผลิตในรูปของสบู่และครีมมาก่อน ปัจจุบันน้ำยาล้างจานมีส่วนผสมอื่นรวมอยู่ด้วย เช่น น้ำมะนาวหรือชา ซึ่งเชื่อว่าเป็นการช่วยให้ภาชนะสะอาดมากขึ้นและถนอมมือมากกว่าเดิม ', 0, '2018-11-02', 50, 'static/images/5001.jpg', 1),
(6, 'น้ำยาซักผ้า', 'ใช้ดีมาก หอม ผ้าขาวสะอาด', 0, '2018-11-02', 50, 'static/images/6001.jpg', 1),
(7, 'สบู่สมุนไพร', 'กลิ่นหอมมาก ทำให้ผิวขาว ไม่ระคายเคืองต่อผิวหนัง ใช้ชำระร่างกาย', 0, '2018-11-02', 50, 'static/images/7001.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `Sell_ID` smallint(6) NOT NULL,
  `Tracking_ID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `All_Product` int(11) NOT NULL,
  `Total_Price` int(11) NOT NULL,
  `Address` text COLLATE utf8_unicode_ci NOT NULL,
  `Sell_Date` datetime NOT NULL,
  `Status` enum('pending','success','cancel') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`Sell_ID`, `Tracking_ID`, `Product_ID`, `All_Product`, `Total_Price`, `Address`, `Sell_Date`, `Status`) VALUES
(1, '51525152', 1, 2, 100, 'Address 1', '2018-12-01 00:00:00', 'success'),
(2, '91515122', 3, 1, 20, 'Address 2', '2018-12-03 00:00:00', 'success'),
(3, '45846132', 5, 3, 300, 'Address 3', '2018-12-03 00:00:00', 'success'),
(4, '51613213', 5, 1, 30, 'Address 4', '2018-12-03 00:00:00', 'success'),
(5, '89411354', 5, 1, 100, 'Address 5', '2018-12-11 00:00:00', 'success'),
(6, '91484123', 5, 2, 40, 'Address 6', '2018-11-01 00:00:00', 'pending'),
(7, '41945313', 5, 3, 90, 'Address 7', '2018-11-24 00:00:00', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`Activity_ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`Map_ID`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`Plant_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`Sell_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `Activity_ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `Map_ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `Plant_ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6533;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `Sell_ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
