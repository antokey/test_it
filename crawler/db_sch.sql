-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 18-12-10 20:13
-- 서버 버전: 5.7.24
-- PHP 버전: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `project`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `kt`
--

CREATE TABLE `kt` (
  `image_link` varchar(1000) NOT NULL,
  `model` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `chulgo` int(20) NOT NULL,
  `gongshi` int(20) NOT NULL,
  `chuga` int(20) NOT NULL,
  `danmal` int(20) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='kt 크롤링';

--
-- 테이블의 덤프 데이터 `kt`
--

INSERT INTO `kt` (`image_link`, `model`, `name`, `chulgo`, `gongshi`, `chuga`, `danmal`, `date`) VALUES
('https://image.shop.kt.com/upload/public_notice/3610/1496884186657.png', 'AIP6-32SG', 'iPhone 6 32GB', 379500, 301000, 45100, 33400, '2017.07.21'),
('https://image.shop.kt.com/upload/public_notice/4370/1538612657018.png', 'AIP6-O32', 'iPhone6 리패키징', 232870, 70000, 10500, 152370, '2018.10.03'),
('https://image.shop.kt.com/upload/public_notice/system_puno_1762.jpg', 'AIP6S-128SG', 'iPhone 6s 128GB', 799700, 100000, 15000, 684700, '2018.11.23'),
('https://image.shop.kt.com/upload/public_notice/system_puno_1773.jpg', 'AIP6S-16SV', 'iPhone 6s 16GB', 599500, 100000, 15000, 484500, '2018.11.23'),
('https://image.shop.kt.com/upload/public_notice/system_puno_1774.jpg', 'AIP6S-64GD', 'iPhone 6s 64GB', 699600, 100000, 15000, 584600, '2018.11.23'),
('https://image.shop.kt.com/upload/public_notice/system_puno_1751.jpg', 'AIP6SP-128SG', 'iPhone 6s Plus 128GB', 968000, 100000, 15000, 853000, '2018.11.23'),
('https://image.shop.kt.com/upload/public_notice/system_puno_1771.jpg', 'AIP6SP-16RG', 'iPhone 6s Plus 16GB', 599500, 100000, 15000, 484500, '2018.11.23'),
('https://image.shop.kt.com/upload/public_notice/system_puno_1752.jpg', 'AIP6SP-64GD', 'iPhone 6s Plus 64GB', 799700, 100000, 15000, 684700, '2018.11.23'),
('https://image.shop.kt.com/upload/public_notice/3253/1476394796585.jpg', 'AIP7-128JB', 'iPhone 7 128GB', 799700, 350000, 52500, 397200, '2018.09.08'),
('https://image.shop.kt.com/upload/public_notice/3250/1476394653184.jpg', 'AIP7-256JB', 'iPhone 7 256GB', 1130800, 73000, 10900, 1046900, '2016.10.14'),
('https://image.shop.kt.com/upload/public_notice/3261/1476394846696.jpg', 'AIP7-32BK', 'iPhone 7 32GB', 869000, 73000, 10900, 785100, '2016.10.14'),
('https://image.shop.kt.com/upload/public_notice/4374/1538612575127.jpg', 'AIP7-O128', 'iPhone7 리패키징', 457270, 70000, 10500, 376770, '2018.10.03'),
('https://image.shop.kt.com/upload/public_notice/4372/1538612614060.jpg', 'AIP7-O256', 'iPhone7 리패키징', 511280, 70000, 10500, 430780, '2018.10.03'),
('https://image.shop.kt.com/upload/public_notice/4373/1538614955312.jpg', 'AIP7-O32', 'iPhone7 리패키징', 363000, 70000, 10500, 282500, '2018.10.03'),
('https://image.shop.kt.com/upload/public_notice/3274/1476394427128.jpg', 'AIP7P-128JB', 'iPhone 7 Plus 128GB', 1152800, 73000, 10900, 1068900, '2016.10.14'),
('https://image.shop.kt.com/upload/public_notice/3275/1476394346691.jpg', 'AIP7P-256JB', 'iPhone 7 Plus 256GB', 1283700, 73000, 10900, 1199800, '2016.10.14'),
('https://image.shop.kt.com/upload/public_notice/3255/1476394500490.jpg', 'AIP7P-32BK', 'iPhone 7 Plus 32GB', 1021900, 73000, 10900, 938000, '2016.10.14'),
('https://image.shop.kt.com/upload/public_notice/4376/1538612472498.jpg', 'AIP7P-O128', 'iPhone7+ 리패키징', 642070, 70000, 10500, 561570, '2018.10.03'),
('https://image.shop.kt.com/upload/public_notice/4375/1538612517324.jpg', 'AIP7P-O256', 'iPhone7+ 리패키징', 657800, 70000, 10500, 577300, '2018.10.03'),
('https://image.shop.kt.com/upload/public_notice/4371/1538614983673.jpg', 'AIP7P-O32', 'iPhone7+ 리패키징', 554400, 70000, 10500, 473900, '2018.10.03'),
('https://image.shop.kt.com/upload/public_notice/3911/1509059338605.jpg', 'AIP8-256GD', 'iPhone 8 256GB', 1142900, 73000, 10900, 1059000, '2017.10.27'),
('https://image.shop.kt.com/upload/public_notice/3912/1509059310634.jpg', 'AIP8-64GD', 'iPhone 8 64GB', 946000, 73000, 10900, 862100, '2017.10.27'),
('https://image.shop.kt.com/upload/public_notice/4246/1529021466558.jpg', 'AIP8-O256', 'iPhone8 리패키징', 865700, 70000, 10500, 785200, '2018.06.15'),
('https://image.shop.kt.com/upload/public_notice/4244/1529021495968.jpg', 'AIP8-O64', 'iPhone8 리패키징', 708400, 70000, 10500, 627900, '2018.06.15'),
('https://image.shop.kt.com/upload/public_notice/3914/1509059197581.jpg', 'AIP8P-256GD', 'iPhone 8 Plus 256GB', 1283700, 73000, 10900, 1199800, '2017.10.27'),
('https://image.shop.kt.com/upload/public_notice/3919/1509058882879.jpg', 'AIP8P-64GD', 'iPhone 8 Plus 64GB', 1076900, 73000, 10900, 993000, '2017.10.27'),
('https://image.shop.kt.com/upload/public_notice/4247/1529021216164.jpg', 'AIP8P-O256', 'iPhone8+ 리패키징', 993300, 70000, 10500, 912800, '2018.06.15'),
('https://image.shop.kt.com/upload/public_notice/4241/1529021267010.jpg', 'AIP8P-O64', 'iPhone8+ 리패키징', 850300, 70000, 10500, 769800, '2018.06.15'),
('https://image.shop.kt.com/upload/public_notice/3023/1462836455892.jpg', 'AIPSE-16RG', 'iPhone SE 16GB', 569800, 496000, 73800, 0, '2018.04.05'),
('https://image.shop.kt.com/upload/public_notice/3024/1462836481238.jpg', 'AIPSE-64GD', 'iPhone SE 64GB', 699600, 609000, 90600, 0, '2018.04.05'),
('https://image.shop.kt.com/upload/public_notice/3962/1510871415460.jpg', 'AIPX-256SG', 'iPhone X 256GB', 1557600, 73000, 10900, 1473700, '2017.11.17'),
('https://image.shop.kt.com/upload/public_notice/3961/1510871453400.jpg', 'AIPX-64SG', 'iPhone X 64GB', 1360700, 73000, 10900, 1276800, '2017.11.17'),
('https://image.shop.kt.com/upload/public_notice/4242/1529021401164.jpg', 'AIPX-O256', 'iPhoneX 리패키징', 1245200, 70000, 10500, 1164700, '2018.06.15'),
('https://image.shop.kt.com/upload/public_notice/4240/1529021433996.jpg', 'AIPX-O64', 'iPhoneX 리패키징', 1074700, 70000, 10500, 994200, '2018.06.15'),
('https://image.shop.kt.com/upload/public_notice/4444/1540506500401.png', 'AIPXR-128', 'iPhone XR 128G', 1056000, 70000, 10500, 975500, '2018.10.26'),
('https://image.shop.kt.com/upload/public_notice/4450/1540506433791.png', 'AIPXR-256', 'iPhone XR 256G', 1188000, 70000, 10500, 1107500, '2018.10.26'),
('https://image.shop.kt.com/upload/public_notice/4442/1540506563201.png', 'AIPXR-64', 'iPhone XR 64G', 990000, 70000, 10500, 909500, '2018.10.26'),
('https://image.shop.kt.com/upload/public_notice/4453/1540506070921.png', 'AIPXS-256', 'iPhone XS 256G', 1562000, 70000, 10500, 1481500, '2018.10.26'),
('https://image.shop.kt.com/upload/public_notice/4440/1540506146181.png', 'AIPXS-512', 'iPhone XS 512G', 1815000, 70000, 10500, 1734500, '2018.10.26'),
('https://image.shop.kt.com/upload/public_notice/4447/1540506395519.png', 'AIPXS-64', 'iPhone XS 64G', 1364000, 70000, 10500, 1283500, '2018.10.26'),
('https://image.shop.kt.com/upload/public_notice/4458/1540505913577.png', 'AIPXSM-256', 'iPhone XS Max 256G', 1705000, 70000, 10500, 1624500, '2018.10.26'),
('https://image.shop.kt.com/upload/public_notice/4452/1540505806118.png', 'AIPXSM-512', 'iPhone XS Max 512G', 1969000, 70000, 10500, 1888500, '2018.10.26'),
('https://image.shop.kt.com/upload/public_notice/4457/1540505941964.png', 'AIPXSM-64', 'iPhone XS Max 64G', 1496000, 70000, 10500, 1415500, '2018.10.26'),
('https://image.shop.kt.com/upload/public_notice/2932/1457649972572.jpg', 'G935KBE_64G', '갤럭시 S7 Edge 64GB', 777700, 486000, 72900, 218800, '2017.09.14'),
('https://image.shop.kt.com/upload/public_notice/4460/1540511296286.png', 'HW-ANE-LX2J', 'Be Y 폰 3', 330000, 150000, 22500, 157500, '2018.10.26'),
('https://image.shop.kt.com/upload/public_notice/3150/1472428557558.jpg', 'HW-VNS-L62', 'Be Y Phone', 198000, 100000, 15000, 83000, '2018.11.23'),
('https://image.shop.kt.com/upload/public_notice/3163/1472602677341.jpg', 'HW-VNS-L62B', 'Be Y Phone (Black)', 198000, 100000, 15000, 83000, '2018.11.23'),
('https://image.shop.kt.com/upload/public_notice/3060/1466986966349.jpg', 'IM-100K', 'IM-100', 33000, 0, 0, 33000, '2018.08.08'),
('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKK_q91ykAygogBFp6SD4WsUux1TO02EVs3o9WPTsfTiufZYP6', 'jieun-jung', 'jieun', 165000, 178000, 18900, 20230, '2018.12.24'),
('https://image.shop.kt.com/upload/public_notice/3220/1475108745016.jpg', 'LG-F800K', 'LG V20', 899800, 100000, 15000, 784800, '2018.11.23'),
('https://image.shop.kt.com/upload/public_notice/system_puno_1748.jpg', 'LG-H791', 'NEXUS 5X 16GB', 33000, 0, 0, 33000, '2017.05.25'),
('https://image.shop.kt.com/upload/public_notice/3490/1488412140192.jpg', 'LGM-G600K', 'LG G6 64GB', 899800, 713000, 106900, 79900, '2018.09.15'),
('https://image.shop.kt.com/upload/public_notice/3531/1490746225286.jpg', 'LGM-G600KFB', 'LG G6 블랙에디션', 899800, 713000, 106900, 79900, '2018.09.15'),
('https://image.shop.kt.com/upload/public_notice/3652/1498779099193.jpg', 'LGM-G600KP', 'LG G6+', 957000, 713000, 106900, 137100, '2018.09.15'),
('https://image.shop.kt.com/upload/public_notice/3651/1498780229537.jpg', 'LGM-G600KR', 'LG G6 32GB', 819500, 713000, 106500, 0, '2018.09.15'),
('https://image.shop.kt.com/upload/public_notice/3851/1505346740198.jpg', 'LGM-V300K', 'V30', 799700, 550000, 82500, 167200, '2018.12.07'),
('https://image.shop.kt.com/upload/public_notice/3850/1505346690001.jpg', 'LGM-V300KP', 'V30+', 849200, 550000, 82500, 216700, '2018.12.07'),
('https://image.shop.kt.com/upload/public_notice/4120/1536282541576.jpg', 'LGM-V300KR', 'V30S', 898700, 550000, 82500, 266200, '2018.12.07'),
('https://image.shop.kt.com/upload/public_notice/4030/1514264909626.png', 'LGM-V300KS', 'LG SIGNATURE EDITION', 1999800, 120000, 18000, 1861800, '2018.07.10'),
('https://image.shop.kt.com/upload/public_notice/4103/1519773962315.jpg', 'LGM-V300KW', 'V30S+ ThinQ', 948200, 550000, 82500, 315700, '2018.12.07'),
('https://image.shop.kt.com/upload/public_notice/3620/1496966249708.jpg', 'LGM-X320K', 'LG X500', 319000, 100000, 15000, 204000, '2018.11.23'),
('https://image.shop.kt.com/upload/public_notice/3760/1501630779354.jpg', 'LGM-X600K', 'Q6', 419100, 365000, 54100, 0, '2018.10.02'),
('https://image.shop.kt.com/upload/public_notice/3810/1503964393869.JPG', 'LGM-X600KP', 'Q6+', 484000, 421000, 63000, 0, '2018.10.02'),
('https://image.shop.kt.com/upload/public_notice/4201/1525994670150.jpg', 'LM-G710NK', 'G7 ThinQ', 898700, 400000, 60000, 438700, '2018.12.07'),
('https://image.shop.kt.com/upload/public_notice/4200/1525994598159.jpg', 'LM-G710NKP', 'G7+ ThinQ', 976800, 400000, 60000, 516800, '2018.12.07'),
('https://image.shop.kt.com/upload/public_notice/4245/1529020066323.jpg', 'LM-Q720K', 'Q7', 419100, 200000, 30000, 189100, '2018.06.15'),
('https://image.shop.kt.com/upload/public_notice/4243/1529020242457.jpg', 'LM-Q725K', 'Q7+', 517000, 200000, 30000, 287000, '2018.06.15'),
('https://image.shop.kt.com/upload/public_notice/4360/1536796188145.jpg', 'LM-Q727K', 'Q7 BTS 에디션', 473000, 200000, 30000, 243000, '2018.09.13'),
('https://image.shop.kt.com/upload/public_notice/4480/1542006229035.jpg', 'LM-Q815K', 'Q8(2018)', 539000, 150000, 22500, 366500, '2018.11.10'),
('https://image.shop.kt.com/upload/public_notice/4270/1530833774922.jpg', 'LM-V350NK', 'V35', 1048300, 120000, 18000, 910300, '2018.07.06'),
('https://image.shop.kt.com/upload/public_notice/4400/1539734095292.png', 'LM-V409NK', 'V40 ThinQ', 1049400, 70000, 10500, 968900, '2018.10.17'),
('https://image.shop.kt.com/upload/public_notice/4110/1520209692602.jpg', 'LM-X410K', 'X4', 297000, 260000, 37000, 0, '2018.10.02'),
('https://image.shop.kt.com/upload/public_notice/4290/1532043726038.jpg', 'LM-X410KKORI', 'X4 코리토리 에디션', 297000, 260000, 37000, 0, '2018.10.02'),
('https://image.shop.kt.com/upload/public_notice/4060/1516925227588.jpg', 'LM-X415K', 'X4+', 349800, 305000, 44800, 0, '2018.07.13'),
('https://image.shop.kt.com/upload/public_notice/4220/1528415515719.jpg', 'LM-X510K', 'X5 (2018)', 363000, 348000, 15000, 0, '2018.09.07'),
('https://image.shop.kt.com/upload/public_notice/4130/1522018675645.jpg', 'LM-Y110K', 'LG Folder', 220000, 192000, 28000, 0, '2018.09.07'),
('https://image.shop.kt.com/upload/public_notice/4490/1542243932662.png', 'MI-POCO-F1', '포코폰F1', 429000, 150000, 22500, 256500, '2018.11.15'),
('https://image.shop.kt.com/upload/public_notice/4280/1531353408496.jpg', 'MI-RMN5AI', '샤오미 홍미노트5', 299200, 150000, 22500, 126700, '2018.07.12'),
('https://image.shop.kt.com/upload/public_notice/system_puno_1765.jpg', 'N920KPK_64G', '갤럭시 노트5 64GB', 821700, 541000, 81100, 199600, '2017.06.10'),
('https://image.shop.kt.com/upload/public_notice/2860/1450392842639.jpg', 'N920K_128G', '갤럭시 노트5 128GB', 865700, 541000, 81100, 243600, '2017.06.10'),
('https://image.shop.kt.com/upload/public_notice/3440/1484779668939.jpg', 'SM-A520K', '갤럭시 A5 2017', 297000, 259000, 38000, 0, '2018.10.02'),
('https://image.shop.kt.com/upload/public_notice/4040/1514850714484.png', 'SM-A530NK', '갤럭시 A8', 599500, 400000, 60000, 139500, '2018.09.04'),
('https://image.shop.kt.com/upload/public_notice/4261/1530229310374.jpg', 'SM-A600NK', '갤럭시A6', 396000, 200000, 30000, 166000, '2018.06.29'),
('https://image.shop.kt.com/upload/public_notice/4260/1530229228549.jpg', 'SM-A605K', '갤럭시 Jean', 396000, 300000, 45000, 51000, '2018.11.22'),
('https://image.shop.kt.com/upload/public_notice/2890/1452725618923.jpg', 'SM-A710K', '갤럭시A7 (2016)', 528000, 100000, 15000, 413000, '2018.11.23'),
('https://image.shop.kt.com/upload/public_notice/4430/1540252441694.png', 'SM-A750NK', '갤럭시 A7(2018)', 499400, 150000, 22500, 326900, '2018.10.23'),
('https://image.shop.kt.com/upload/public_notice/3640/1498174814074.jpg', 'SM-G160N', '갤럭시 폴더2 (LTE)', 297000, 273000, 24000, 0, '2017.06.23'),
('https://image.shop.kt.com/upload/public_notice/4090/1518132947510.jpg', 'SM-G611K', 'On7 Prime', 344300, 260000, 39000, 45300, '2018.11.22'),
('https://image.shop.kt.com/upload/public_notice/2936/1457649878920.jpg', 'SM-G930K', '갤럭시 S7 32GB', 495000, 105000, 15700, 374300, '2018.05.19'),
('https://image.shop.kt.com/upload/public_notice/3393/1481159610512.jpg', 'SM-G935KPB_128G', '갤럭시 S7 Edge 128GB', 799700, 488000, 73200, 238500, '2018.02.20'),
('https://image.shop.kt.com/upload/public_notice/2935/1457649927080.jpg', 'SM-G935KSR', '갤럭시 S7 Edge 32GB', 755700, 486000, 72900, 196800, '2017.09.14'),
('https://image.shop.kt.com/upload/public_notice/3553/1498788670732.jpg', 'SM-G950NBK', '갤럭시 S8 64GB', 699600, 350000, 52500, 297100, '2018.06.23'),
('https://image.shop.kt.com/upload/public_notice/3556/1491518225980.jpg', 'SM-G955N128', '갤럭시 S8 Plus 128GB', 998800, 357000, 53500, 588300, '2017.11.17'),
('https://image.shop.kt.com/upload/public_notice/3558/1498788545631.jpg', 'SM-G955NBL', '갤럭시 S8 Plus 64GB', 899800, 231000, 34600, 634200, '2017.07.01'),
('https://image.shop.kt.com/upload/public_notice/4100/1519773756176.jpg', 'SM-G960NK', '갤럭시 S9 64GB', 957000, 350000, 52500, 554500, '2018.07.01'),
('https://image.shop.kt.com/upload/public_notice/4102/1519773830118.jpg', 'SM-G965NK', '갤럭시 S9+ 64GB', 968000, 350000, 52500, 565500, '2018.07.21'),
('https://image.shop.kt.com/upload/public_notice/4101/1519773668840.jpg', 'SM-G965NK256', '갤럭시 S9+ 256GB', 1078000, 157000, 23500, 897500, '2018.08.08'),
('https://image.shop.kt.com/upload/public_notice/4160/1523576785138.jpg', 'SM-J250NK', 'J2 Pro', 199100, 174000, 25100, 0, '2018.09.07'),
('https://image.shop.kt.com/upload/public_notice/4500/1542585453731.jpg', 'SM-J415N-00', 'Galaxy J4+', 264000, 150000, 22500, 91500, '2018.11.19'),
('https://image.shop.kt.com/upload/public_notice/3670/1499125242855.jpg', 'SM-J530K', 'Galaxy J5 2017', 297000, 259000, 38000, 0, '2018.09.07'),
('https://image.shop.kt.com/upload/public_notice/3006/1461884444670.jpg', 'SM-J710K', '갤럭시 J7 2016', 330000, 100000, 15000, 215000, '2018.11.23'),
('https://image.shop.kt.com/upload/public_notice/3730/1499989855105.jpg', 'SM-J730K', 'Galaxy J7 2017', 396000, 345000, 51000, 0, '2018.08.01'),
('https://image.shop.kt.com/upload/public_notice/system_puno_1734.jpg', 'SM-N920K', '갤럭시 노트5 32GB', 799700, 541000, 81100, 177600, '2017.06.10'),
('https://image.shop.kt.com/upload/public_notice/3820/1504736617313.png', 'SM-N950NK', '갤럭시 노트8 64GB', 998800, 350000, 52500, 596300, '2018.07.01'),
('https://image.shop.kt.com/upload/public_notice/4071/1517788197878.png', 'SM-N950NKPC', '갤럭시노트8평창에디션', 1103300, 503000, 75400, 524900, '2018.08.17'),
('https://image.shop.kt.com/upload/public_notice/3821/1504736778633.png', 'SM-N950NK_256G', '갤럭시 노트8 256GB', 1094500, 350000, 52500, 692000, '2018.07.01'),
('https://image.shop.kt.com/upload/public_notice/4331/1534120166731.jpg', 'SM-N960NK', '갤럭시노트9', 1094500, 140000, 21000, 933500, '2018.08.13'),
('https://image.shop.kt.com/upload/public_notice/4330/1534120202214.jpg', 'SM-N960NK512', '갤럭시노트9_512G', 1353000, 140000, 21000, 1192000, '2018.08.13'),
('https://image.shop.kt.com/upload/public_notice/3430/1502243468415.jpg', 'SM-P585N0', 'Galaxy Tab A 2016 With S-Pen', 489000, 230000, 34500, 224500, '2017.08.08'),
('https://image.shop.kt.com/upload/public_notice/3580/1494547308492.png', 'SM-T825N0', 'Galaxy Tab S3 LTE', 638000, 307000, 46000, 285000, '2018.03.26'),
('https://image.shop.kt.com/upload/public_notice/4340/1534895455979.jpg', 'SM-T835N0', 'Galaxy Tab S4', 880000, 370000, 55500, 454500, '2018.09.20'),
('https://image.shop.kt.com/upload/public_notice/3830/1505174196605.jpg', 'SONY-XZ1', 'Xperia XZ1', 399300, 157000, 23500, 218800, '2018.02.27'),
('https://image.shop.kt.com/upload/public_notice/3890/1508199827219.jpg', 'SONY-XZ1C', 'Xperia XZ1 Compact', 399300, 157000, 23500, 218800, '2017.10.17'),
('https://image.shop.kt.com/upload/public_notice/4011/1512431446126.png', 'WAS-LX2J', 'BeY Phone 2', 293700, 256000, 37700, 0, '2018.07.06'),
('https://image.shop.kt.com/upload/public_notice/3061/1466987032777.jpg', 'XPR-XP_OMD', 'Xperia X Performance', 499400, 73000, 10900, 415500, '2016.06.25'),
('https://image.shop.kt.com/upload/public_notice/4150/1522712915438.jpg', 'XPR-XZ2', '엑스페리아 XZ2', 499400, 150000, 22500, 326900, '2018.11.22'),
('https://image.shop.kt.com/upload/public_notice/4151/1522712829340.jpg', 'XPR-XZ2C', '엑스페리아 XZ2 Compact', 599500, 150000, 22500, 427000, '2018.11.22'),
('https://image.shop.kt.com/upload/public_notice/4380/1539149568443.png', 'XPR-XZ3', 'Sony Xperia XZ3', 891000, 120000, 18000, 753000, '2018.10.10'),
('https://image.shop.kt.com/upload/public_notice/3241/1476058348473.jpg', 'XPR-XZ_OMD', 'Xperia XZ', 550000, 105000, 15700, 429300, '2016.10.07'),
('https://image.shop.kt.com/upload/public_notice/3481/1488153033580.png', 'ZTE-K813', '라인프렌즈 스마트폰', 165000, 144000, 21000, 0, '2018.05.04'),
('https://image.shop.kt.com/upload/public_notice/4520/1544140674713.jpg', 'ZTE-Z2321K', 'LTE 피쳐폰 Z', 165000, 126000, 18900, 20100, '2018.12.07');

-- --------------------------------------------------------

--
-- 테이블 구조 `lg`
--

CREATE TABLE `lg` (
  `image_link` varchar(1000) NOT NULL,
  `model` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `chulgo` int(20) NOT NULL,
  `gongshi` int(20) NOT NULL,
  `chuga` int(20) DEFAULT NULL,
  `danmal` int(20) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `lg`
--

INSERT INTO `lg` (`image_link`, `model`, `name`, `chulgo`, `gongshi`, `chuga`, `danmal`, `date`) VALUES
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', '(DE)A1524-16', '아이폰6plus-16-데모', 338800, 330000, 0, 8800, '2017.06.15'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', '(DE)A1586-16', '아이폰6-16-데모', 247500, 247000, 0, 500, '2017.06.15'),
('//image.uplus.co.kr/images/us/mo/A1524_7.png', 'A1524-128', '아이폰6 플러스 128GB', 665060, 330000, 0, 335060, '2017.06.15'),
('//image.uplus.co.kr/images/us/mo/A1524_7.png', 'A1524-16', '아이폰6 플러스 16GB', 477400, 330000, 0, 147400, '2017.06.15'),
('//image.uplus.co.kr/images/us/mo/A1524_7.png', 'A1524-64', '아이폰6 플러스 64GB', 633600, 330000, 0, 303600, '2017.06.15'),
('//image.uplus.co.kr/images/us/mo/A1586_7.png', 'A1586-128', '아이폰6 128GB', 534600, 330000, 0, 204600, '2017.06.15'),
('//image.uplus.co.kr/images/us/mo/A1586_7.png', 'A1586-16', '아이폰6 16GB', 367400, 330000, 0, 37400, '2017.06.15'),
('//image.uplus.co.kr/images/us/mo/A1586_1.png', 'A1586-32', '아이폰6 32GB', 214500, 187000, 0, 27500, '2018.01.07'),
('//image.uplus.co.kr/images/us/mo/A1586_7.png', 'A1586-64', '아이폰6 64GB', 501600, 330000, 0, 171600, '2017.06.15'),
('//image.uplus.co.kr/images/us/mo/A1671-256_3.png', 'A1671-256', 'iPad-Pro-12.9-2세대-256', 1230900, 116000, 0, 1114900, '2017.07.13'),
('//image.uplus.co.kr/images/us/mo/A1671-256_3.png', 'A1671-512', 'iPad-Pro-12.9-2세대-512', 1452000, 116000, 0, 1336000, '2017.07.13'),
('//image.uplus.co.kr/images/us/mo/A1671-256_3.png', 'A1671-64', 'iPad-Pro-12.9-2세대-64', 1120900, 55000, 0, 1065900, '2017.07.13'),
('//image.uplus.co.kr/images/us/mo/A1688_64_pink.png', 'A1687-128', '아이폰6S+ 128GB', 700700, 165000, 0, 535700, '2017.12.31'),
('//image.uplus.co.kr/images/us/mo/A1688_64_pink.png', 'A1687-16', '아이폰6S+ 16GB', 500500, 165000, 0, 335500, '2017.12.31'),
('//image.uplus.co.kr/images/us/mo/A1688_64_pink.png', 'A1687-32', '아이폰6S plus-32', 580800, 165000, 0, 415800, '2017.12.31'),
('//image.uplus.co.kr/images/us/mo/A1688_64_pink.png', 'A1687-64', '아이폰6S+ 64GB', 678700, 165000, 0, 513700, '2017.12.31'),
('//image.uplus.co.kr/images/us/mo/ushop_iPhone6s_A1688-128_Gold_01.png', 'A1688-128', '아이폰6S 128GB', 634700, 165000, 0, 469700, '2017.12.31'),
('//image.uplus.co.kr/images/us/mo/A1688_64_pink.png', 'A1688-16', '아이폰6S 16GB', 434500, 165000, 0, 269500, '2017.12.31'),
('//image.uplus.co.kr/images/us/mo/ushop_iPhone6s_A1688-128_RoseGold_01.png', 'A1688-32', '아이폰6S-32', 489500, 330000, 0, 159500, '2018.03.24'),
('//image.uplus.co.kr/images/us/mo/A1688_64_pink.png', 'A1688-64', '아이폰6S 64GB', 612700, 165000, 0, 447700, '2017.12.31'),
('//image.uplus.co.kr/images/us/mo/A1709-256_2.png', 'A1709-256', 'iPad-Pro-10.5-256', 1046100, 116000, 0, 930100, '2017.07.13'),
('//image.uplus.co.kr/images/us/mo/A1709-256_2.png', 'A1709-512', 'iPad-Pro-10.5-512', 1267200, 116000, 0, 1151200, '2017.07.13'),
('//image.uplus.co.kr/images/us/mo/A1709-256_2.png', 'A1709-64', 'iPad-Pro-10.5-64', 935000, 55000, 0, 880000, '2017.07.13'),
('//image.uplus.co.kr/images/us/mo/A1723-32_1.png', 'A1723-128', '아이폰SE-128', 699600, 91000, 0, 608600, '2017.04.25'),
('//image.uplus.co.kr/images/us/mo/iPhone_SE_1.png', 'A1723-16', '아이폰SE-16', 536800, 91000, 0, 445800, '2017.03.10'),
('//image.uplus.co.kr/images/us/mo/A1723-32_1.png', 'A1723-32', '아이폰SE-32', 569800, 91000, 0, 478800, '2017.04.25'),
('//image.uplus.co.kr/images/us/mo/iPhone_SE_1.png', 'A1723-64', '아이폰SE-64', 666600, 91000, 0, 575600, '2017.03.10'),
('//image.uplus.co.kr/images/us/mo/A1778_128_Red.png', 'A1778-128', '아이폰7-128', 999900, 450000, 0, 549900, '2018.06.20'),
('//image.uplus.co.kr/images/us/mo/A1778_128_Jet_black.png', 'A1778-256', '아이폰7-256', 1130800, 450000, 0, 680800, '2018.06.20'),
('//image.uplus.co.kr/images/us/mo/A1778_128_Rose_gold.png', 'A1778-32', '아이폰7-32', 869000, 450000, 0, 419000, '2018.06.20'),
('//image.uplus.co.kr/images/us/mo/A1784_128_Red.png', 'A1784-128', '아이폰7 plus-128', 1152800, 450000, 0, 702800, '2018.06.20'),
('//image.uplus.co.kr/images/us/mo/A1784_128_Jet_Black.png', 'A1784-256', '아이폰7 plus-256', 1283700, 450000, 0, 833700, '2018.06.20'),
('//image.uplus.co.kr/images/us/mo/A1784_128_Rose_gold.png', 'A1784-32', '아이폰7 plus-32', 1021900, 450000, 0, 571900, '2018.06.20'),
('//image.uplus.co.kr/images/us/mo/A1823-128_1.png', 'A1823-128', 'iPad 128GB', 572000, 22000, 0, 550000, '2017.12.31'),
('//image.uplus.co.kr/images/us/mo/A1823-128_1.png', 'A1823-32', 'iPad 32GB', 462000, 32000, 0, 430000, '2017.12.31'),
('//image.uplus.co.kr/images/us/mo/ushop_Apple_Watch3_Silver_01.png', 'A1889', 'Apple Watch 3(38)', 525800, 200000, 0, 325800, '2018.12.01'),
('//image.uplus.co.kr/images/us/mo/ushop_Apple_Watch3_SpaceGray_01.png', 'A1891', 'Apple Watch 3(42)', 565400, 200000, 0, 365400, '2018.12.01'),
('//image.uplus.co.kr/images/us/mo/ushop_iPadpro12.9_Silver_01.png', 'A1895-1TB', 'iPad Pro 12.9(1TB)', 2442000, 116000, 0, 2326000, '2018.12.07'),
('//image.uplus.co.kr/images/us/mo/ushop_iPadpro12.9_Silver_01.png', 'A1895-256', 'iPad Pro 12.9(256)', 1639000, 116000, 0, 1523000, '2018.12.07'),
('//image.uplus.co.kr/images/us/mo/ushop_iPadpro12.9_Silver_01.png', 'A1895-512', 'iPad Pro 12.9(512)', 1903000, 116000, 0, 1787000, '2018.12.07'),
('//image.uplus.co.kr/images/us/mo/ushop_iPadpro12.9_Silver_01.png', 'A1895-64', 'iPad Pro 12.9(64)', 1441000, 116000, 0, 1325000, '2018.12.07'),
('//image.uplus.co.kr/images/us/mo/ushop_iPhone8plus_A1897-64_Red_01.png', 'A1897-256', '아이폰8+256', 1283700, 95000, 0, 1188700, '2017.10.27'),
('//image.uplus.co.kr/images/us/mo/ushop_iPhone8plus_A1897-64_Red_01.png', 'A1897-64', '아이폰8+64', 1076900, 95000, 0, 981900, '2017.10.27'),
('//image.uplus.co.kr/images/us/mo/ushop_iPhoneX_A1901-64_Silver_01.png', 'A1901-256', '아이폰X-256', 1557600, 95000, 0, 1462600, '2017.11.17'),
('//image.uplus.co.kr/images/us/mo/ushop_iPhoneX_A1901-64_SpaceGray_01.png', 'A1901-64', '아이폰X-64', 1360700, 95000, 0, 1265700, '2017.11.17'),
('//image.uplus.co.kr/images/us/mo/ushop_iPhone8_A1905-64_Red_01.png', 'A1905-256', '아이폰8-256', 1142900, 95000, 0, 1047900, '2017.10.27'),
('//image.uplus.co.kr/images/us/mo/ushop_iPhone8_A1905-64_Red_01.png', 'A1905-64', '아이폰8-64', 946000, 95000, 0, 851000, '2017.10.27'),
('//image.uplus.co.kr/images/us/mo/ushop_iPadpro11_Silver_01.png', 'A1934-1TB', 'iPad Pro 11(1TB)', 2178000, 116000, 0, 2062000, '2018.12.07'),
('//image.uplus.co.kr/images/us/mo/ushop_iPadpro11_Silver_01.png', 'A1934-256', 'iPad Pro 11(256)', 1375000, 116000, 0, 1259000, '2018.12.07'),
('//image.uplus.co.kr/images/us/mo/ushop_iPadpro11_Silver_01.png', 'A1934-512', 'iPad Pro 11(512)', 1639000, 116000, 0, 1523000, '2018.12.07'),
('//image.uplus.co.kr/images/us/mo/ushop_iPadpro11_Silver_01.png', 'A1934-64', 'iPad Pro 11(64)', 1177000, 116000, 0, 1061000, '2018.12.07'),
('//image.uplus.co.kr/images/us/mo/A1954-128_2.png', 'A1954-128', 'iPad 128GB', 682000, 150000, 0, 532000, '2018.05.04'),
('//image.uplus.co.kr/images/us/mo/A1954-128_1.png', 'A1954-32', 'iPad 32GB', 572000, 150000, 0, 422000, '2018.05.04'),
('//image.uplus.co.kr/images/us/mo/ushop_AppleWatch4_Gold_01.png', 'A2007', 'Apple Watch Series4 (40)', 605000, 50000, 0, 555000, '2018.10.31'),
('//image.uplus.co.kr/images/us/mo/ushop_AppleWatch4_A2007-N_Gray_01.png', 'A2007-N', 'Apple Watch Series4 Nike+ (40)', 605000, 50000, 0, 555000, '2018.10.31'),
('//image.uplus.co.kr/images/us/mo/ushop_AppleWatch4_Gray_01.png', 'A2008', 'Apple Watch Series4 (44)', 649000, 50000, 0, 599000, '2018.10.31'),
('//image.uplus.co.kr/images/us/mo/ushop_AppleWatch4_A2008-N_Silver_01.png', 'A2008-N', 'Apple Watch Series4 Nike+ (44)', 649000, 50000, 0, 599000, '2018.10.31'),
('//image.uplus.co.kr/images/us/mo/ushop_AppleWatch4_A2008-SB_Black_01.png', 'A2008-SB', 'Apple Watch Series4 (44) 스테인리스밴드', 869000, 50000, 0, 819000, '2018.10.31'),
('//image.uplus.co.kr/images/us/mo/ushop_AppleWatch4_A2008-SL_Black_01.png', 'A2008-SL', 'Apple Watch Series4 (44) 스테인리스루프', 973500, 50000, 0, 923500, '2018.10.31'),
('//image.uplus.co.kr/images/us/mo/ushop_iPhoneXS_Gold_01.png', 'A2097-256', 'iPhone XS(256GB)', 1562000, 95000, 0, 1467000, '2018.10.26'),
('//image.uplus.co.kr/images/us/mo/ushop_iPhoneXS_Silver_01.png', 'A2097-512', 'iPhone XS(512GB)', 1815000, 95000, 0, 1720000, '2018.10.26'),
('//image.uplus.co.kr/images/us/mo/ushop_iPhoneXS_SpaceGray_01.png', 'A2097-64', 'iPhone XS(64GB)', 1364000, 95000, 0, 1269000, '2018.10.26'),
('//image.uplus.co.kr/images/us/mo/ushop_iPhoneXS_Max_Gold_01.png', 'A2101-256', 'iPhone XS Max(256GB)', 1705000, 95000, 0, 1610000, '2018.10.26'),
('//image.uplus.co.kr/images/us/mo/ushop_iPhoneXS_Max_Silver_01.png', 'A2101-512', 'iPhone XS Max(512GB)', 1969000, 95000, 0, 1874000, '2018.10.26'),
('//image.uplus.co.kr/images/us/mo/ushop_iPhoneXS_Max_SpaceGray_01.png', 'A2101-64', 'iPhone XS Max(64GB)', 1496000, 95000, 0, 1401000, '2018.10.26'),
('//image.uplus.co.kr/images/us/mo/ushop_iPhoneXR_Yellow_01.png', 'A2105-128', 'iPhone XR(128GB)', 1056000, 95000, 0, 961000, '2018.10.26'),
('//image.uplus.co.kr/images/us/mo/ushop_iPhoneXR_Blue_01.png', 'A2105-256', 'iPhone XR(256GB)', 1188000, 95000, 0, 1093000, '2018.10.26'),
('//image.uplus.co.kr/images/us/mo/ushop_iPhoneXR_Red_01.png', 'A2105-64', 'iPhone XR(64GB)', 990000, 95000, 0, 895000, '2018.10.26'),
('//image.uplus.co.kr/images/us/mo/CAM-L32_1.png', 'CAM-L32', 'H', 176000, 176000, 0, 0, '2017.08.31'),
('//image.uplus.co.kr/images/us/mo/CPN-L09_1.png', 'CPN-L09', 'MediaPad', 297000, 165000, 0, 132000, '2017.11.02'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'DE-A1687-16', '아이폰6S+ 16GB', 581900, 330000, 0, 251900, '2017.05.25'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'DE-A1688-16', '아이폰6S 16GB', 479600, 330000, 0, 149600, '2017.05.25'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'DE-A1723-16', '아이폰SE-16-데모', 426800, 91000, 0, 335800, '2018.02.01'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'DE-A1778-128', '데모-아이폰7-128', 726000, 450000, 0, 276000, '2018.06.20'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'DE-A1778-32', '데모-아이폰7-32', 627000, 450000, 0, 177000, '2018.06.20'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'DE-A1784-128', '데모-아이폰7 plus-128', 840400, 450000, 0, 390400, '2018.06.20'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'DE-A1784-32', '데모-아이폰7 plus-32', 741400, 450000, 0, 291400, '2018.06.20'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'DE-A1897-64', '데모-아이폰8+64', 774400, 95000, 0, 679400, '2018.11.23'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'DE-A1901-64', '데모-아이폰X-64', 971300, 95000, 0, 876300, '2018.11.23'),
('//image.uplus.co.kr/images/us/mo/E5577s-321_1.png', 'E5577s-321', '와이파이쏙', 110000, 110000, 0, 0, '2017.10.13'),
('//image.uplus.co.kr/images/us/mo/E8377s-158.png', 'E8377s-158', 'E8377s-158', 55000, 41000, 0, 14000, '2016.03.31'),
('//image.uplus.co.kr/images/us/mo/EVA-L09_1.png', 'EVA-L09', 'P9', 176000, 154000, 0, 22000, '2017.08.31'),
('//image.uplus.co.kr/images/us/mo/ushop_AquosS3_FS8032_Black_01.png', 'FS8032', 'SHARP AQUOS S3', 399300, 195000, 0, 204300, '2018.07.16'),
('//image.uplus.co.kr/images/us/mo/ushop_SurfacePro_GWL-00038_Silver_01.png', 'GWL-00038', 'Surface Pro LTE(128GB)', 1440000, 190000, 0, 1250000, '2018.10.01'),
('//image.uplus.co.kr/images/us/mo/ushop_SurfacePro_GWL-00038_Silver_01.png', 'GWP-00021', 'Surface Pro LTE(256GB)', 1780000, 190000, 0, 1590000, '2018.10.01'),
('//image.uplus.co.kr/images/us/mo/ushop_SONYXperiaXZ2_H8216_LiquidBlack_01.png', 'H8216', 'Xperia XZ2', 499400, 151000, 0, 348400, '2018.04.16'),
('//image.uplus.co.kr/images/us/mo/ushop_SONYXperiaXZ2C_H8314_Black_01.png', 'H8314', 'Xperia XZ2C', 599500, 151000, 0, 448500, '2018.04.16'),
('//image.uplus.co.kr/images/us/mo/ushop_XPERIAXZ3_H8416_ForestGreen_01.png', 'H8416', 'Xperia XZ3', 891000, 151000, 0, 740000, '2018.10.11'),
('//image.uplus.co.kr/images/us/mo/HW-H60-J1_1.png', 'HW-H60-J1', '화웨이 X3', 330000, 330000, 0, 0, '2015.09.18'),
('//image.uplus.co.kr/images/us/mo/HW-SCL-L32_1.png', 'HW-SCL-L32', 'Y6', 99000, 99000, 0, 0, '2016.03.31'),
('//image.uplus.co.kr/images/us/mo/IM-A860L_5.png', 'IM-A860L', '베가 넘버 6', 319000, 300000, 0, 19000, '2015.05.29'),
('//image.uplus.co.kr/images/us/mo/IM-A870L_1.png', 'IM-A870L', '베가 아이언', 389400, 370000, 0, 19400, '2015.09.17'),
('//image.uplus.co.kr/images/us/mo/IM-A890L_1.png', 'IM-A890L', '베가 시크릿노트', 297000, 297000, 0, 0, '2015.05.29'),
('//image.uplus.co.kr/images/us/mo/IM-A900L_1.png', 'IM-A900L', '베가 시크릿 업', 99000, 50000, 0, 49000, '2015.12.31'),
('//image.uplus.co.kr/images/us/mo/IM-A910L_1.png', 'IM-A910L', '베가 아이언2', 352000, 330000, 0, 22000, '2015.09.17'),
('//image.uplus.co.kr/images/us/mo/IML-C5000W_1.png', 'IML-C5000W', '와이파이쏙 슬림', 143000, 110000, 0, 33000, '2017.11.07'),
('//image.uplus.co.kr/images/us/mo/IML-C5000W-P_1.png', 'IML-C5000W-P', '와이파이쏙슬림/포켓빔', 367000, 110000, 0, 257000, '2018.04.23'),
('//image.uplus.co.kr/images/us/mo/ITP-XD80L_1.png', 'ITP-XD80L', 'U+ Pad8', 143000, 10000, 0, 133000, '2017.08.31'),
('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKK_q91ykAygogBFp6SD4WsUux1TO02EVs3o9WPTsfTiufZYP6', 'jieun-jung', 'jieun', 165000, 126000, 0, 20230, '2018.12.25'),
('//image.uplus.co.kr/images/us/mo/LG-F180L_1.png', 'LG-F180L', '옵티머스 G', 255200, 255000, 0, 200, '2015.07.11'),
('//image.uplus.co.kr/images/us/mo/LG-F200L_5.png', 'LG-F200L', '옵티머스 뷰2', 255200, 255000, 0, 200, '2015.07.11'),
('//image.uplus.co.kr/images/us/mo/LG-F240L_1.png', 'LG-F240L', '옵티머스 G 프로', 399300, 300000, 0, 99300, '2015.10.13'),
('//image.uplus.co.kr/images/us/mo/LG-F300L_1.png', 'LG-F300L', '뷰3', 297000, 297000, 0, 0, '2015.07.30'),
('//image.uplus.co.kr/images/us/mo/LG-F310L_1.png', 'LG-F310L', 'LG GX', 352000, 330000, 0, 22000, '2015.06.26'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'LG-F310LR', 'LG GX', 352000, 330000, 0, 22000, '2015.06.26'),
('//image.uplus.co.kr/images/us/mo/LG-F320L_1.png', 'LG-F320L', 'LG G2', 616000, 530000, 0, 86000, '2015.07.11'),
('//image.uplus.co.kr/images/us/mo/LG-F340L_1.png', 'LG-F340L', 'LG G 플렉스', 799700, 300000, 0, 499700, '2015.10.13'),
('//image.uplus.co.kr/images/us/mo/LG-F350L_1.png', 'LG-F350L', 'LG G 프로2', 399300, 387000, 0, 12300, '2016.09.14'),
('//image.uplus.co.kr/images/us/mo/LG-F370L_1.png', 'LG-F370L', 'F70', 259600, 250000, 0, 9600, '2015.08.04'),
('//image.uplus.co.kr/images/us/mo/LG-F400L_1.png', 'LG-F400L', 'LG G3', 499400, 435000, 0, 64400, '2016.08.27'),
('//image.uplus.co.kr/images/us/mo/LG-F430L_1.png', 'LG-F430L', 'LG GX2', 99000, 50000, 0, 49000, '2015.12.31'),
('//image.uplus.co.kr/images/us/mo/LG-F440L_1.png', 'LG-F440L', 'LG 아이스크림스마트', 286000, 286000, 0, 0, '2015.09.26'),
('//image.uplus.co.kr/images/us/mo/LG-F460L_1.png', 'LG-F460L', 'LG G3 캣6', 550000, 531000, 0, 19000, '2016.10.31'),
('//image.uplus.co.kr/images/us/mo/LG-F470L_1.png', 'LG-F470L', 'LG G3 비트', 352000, 330000, 0, 22000, '2015.05.29'),
('//image.uplus.co.kr/images/us/mo/LG-F480L_1.png', 'LG-F480L', 'LG 와인스마트', 99000, 50000, 0, 49000, '2015.12.31'),
('//image.uplus.co.kr/images/us/mo/LG-F490L_1.png', 'LG-F490L', 'LG G3 스크린', 154000, 134000, 0, 20000, '2016.03.31'),
('//image.uplus.co.kr/images/us/mo/LG-F500L_1.png', 'LG-F500L', 'G4', 599500, 457000, 0, 142500, '2017.01.26'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'LG-F500LM', 'G4_Plus', 799700, 113000, 0, 686700, '2015.09.22'),
('//image.uplus.co.kr/images/us/mo/LG-F510L_1.png', 'LG-F510L', 'LG G 플렉스2', 899800, 783000, 0, 116800, '2016.10.31'),
('//image.uplus.co.kr/images/us/mo/LG-F520L_1.png', 'LG-F520L', '아카', 319000, 300000, 0, 19000, '2015.09.18'),
('//image.uplus.co.kr/images/us/mo/LG-540L_1.png', 'LG-F540L', 'Volt', 99000, 88000, 0, 11000, '2016.01.15'),
('//image.uplus.co.kr/images/us/mo/LG-F580L_1.png', 'LG-F580L', 'LG 젠틀', 132000, 132000, 0, 0, '2017.12.31'),
('//image.uplus.co.kr/images/us/mo/LG-F600L_1.png', 'LG-F600L', 'LG V10', 599500, 330000, 0, 269500, '2016.09.14'),
('//image.uplus.co.kr/images/us/mo/LG-F620L_1.png', 'LG-F620L', 'LG클래스', 319000, 280000, 0, 39000, '2016.05.04'),
('//image.uplus.co.kr/images/us/mo/LG-F650L_1.png', 'LG-F650L', 'LG X screen', 319000, 294000, 0, 25000, '2016.11.01'),
('//image.uplus.co.kr/images/us/mo/LG-F670L_1.png', 'LG-F670L', 'K10', 275000, 162000, 0, 113000, '2016.12.28'),
('//image.uplus.co.kr/images/us/mo/LG-F690L_1.png', 'LG-F690L', 'LG X cam', 396000, 270000, 0, 126000, '2017.11.03'),
('//image.uplus.co.kr/images/us/mo/LG-F700L_1.png', 'LG-F700L', 'LG G5', 699600, 610000, 0, 89600, '2017.08.19'),
('//image.uplus.co.kr/images/us/mo/LG-F720L_1.png', 'LG-F720L', 'LG Stylus 2', 319000, 278000, 0, 41000, '2017.10.01'),
('//image.uplus.co.kr/images/us/mo/LG-F740L_1.png', 'LG-F740L', 'LG X skin', 176000, 154000, 0, 22000, '2018.09.22'),
('//image.uplus.co.kr/images/us/mo/LG-F800L_1.png', 'LG-F800L', 'LG V20', 899800, 610000, 0, 289800, '2017.12.22'),
('//image.uplus.co.kr/images/us/mo/LG-F820L_1.png', 'LG-F820L', 'LG U', 231000, 102000, 0, 129000, '2017.12.31'),
('//image.uplus.co.kr/images/us/mo/LG-H791_B1.png', 'LG-H791', '넥서스 5X', 242000, 211000, 0, 31000, '2016.05.03'),
('//image.uplus.co.kr/images/us/mo/LG-H791-32_W1.png', 'LG-H791-32', '넥서스 5X(32)', 398200, 330000, 0, 68200, '2016.07.09'),
('//image.uplus.co.kr/images/us/mo/LG-P490L_1.png', 'LG-P490L', 'LG G 패드 8.0 LTE', 330000, 252000, 0, 78000, '2015.05.29'),
('//image.uplus.co.kr/images/us/mo/LG-P530L_2.png', 'LG-P530L', 'LG-P530L', 352000, 183000, 0, 169000, '2018.09.19'),
('//image.uplus.co.kr/images/us/mo/LG-P755L_1.png', 'LG-P755L', 'G Pad3 10.1 FHD', 286000, 20000, 0, 266000, '2017.08.31'),
('//image.uplus.co.kr/images/us/mo/LG-P815L_1.png', 'LG-P815L', 'LG-P815L', 396000, 210000, 0, 186000, '2015.12.23'),
('//image.uplus.co.kr/images/us/mo/LG-W120_1.png', 'LG-W120L', 'LG 워치 어베인 LTE', 649000, 210000, 0, 439000, '2015.05.29'),
('//image.uplus.co.kr/images/us/mo/LG-W200L_1.png', 'LG-W200L', '어베인2', 451000, 152000, 0, 299000, '2016.04.07'),
('//image.uplus.co.kr/images/us/mo/LG-W281_1.png', 'LG-W281', 'LG-W281', 451000, 430000, 0, 21000, '2018.01.24'),
('//image.uplus.co.kr/images/us/mo/LGM-G600L_3.png', 'LGM-G600L', 'LG G6', 899800, 601000, 0, 298800, '2018.12.01'),
('//image.uplus.co.kr/images/us/mo/LGM-G600LP_1.png', 'LGM-G600LP', 'LG G6+', 957000, 601000, 0, 356000, '2018.12.01'),
('//image.uplus.co.kr/images/us/mo/LGM-G600LR_1.png&#9;&#10;', 'LGM-G600LR', 'LG G6 (32GB)', 819500, 601000, 0, 218500, '2018.12.01'),
('//image.uplus.co.kr/images/us/mo/LGM-K120L_1.png', 'LGM-K120L', 'LG X300', 253000, 220000, 0, 33000, '2017.10.26'),
('//image.uplus.co.kr/images/us/mo/LGM-K121L_1.png', 'LGM-K121L', 'LG X400', 319000, 278000, 0, 41000, '2017.08.03'),
('//image.uplus.co.kr/images/us/mo/ushop_LGV30_LGM-V300L_MorocanBlue_01.png', 'LGM-V300L', 'LG V30', 799700, 501000, 0, 298700, '2018.09.30'),
('//image.uplus.co.kr/images/us/mo/ushop_LGV30_LGM-V300L_AuroraBlack_01.png', 'LGM-V300L128', 'LG V30+', 849200, 501000, 0, 348200, '2018.09.30'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'LGM-V300L256', 'LG V30 Signature', 1999800, 173000, 0, 1826800, '2017.12.29'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'LGM-V300L28S', 'LG V30S ThinQ', 898700, 173000, 0, 725700, '2018.07.10'),
('//image.uplus.co.kr/images/us/mo/ushop_LGV30S+ThinQ_LGM-V300L256S_PlatinumGray_01.png', 'LGM-V300L56S', 'LG V30S+ ThinQ', 948200, 501000, 0, 447200, '2018.11.15'),
('//image.uplus.co.kr/images/us/mo/ushop_LGSmartFolder_LGM-X100L_WhiteGold_01.png', 'LGM-X100L', 'LG 스마트폴더', 297000, 222000, 0, 75000, '2018.02.13'),
('//image.uplus.co.kr/images/us/mo/LGM-X320L_1.png', 'LGM-X320L', 'X500', 319000, 134000, 0, 185000, '2017.08.04'),
('//image.uplus.co.kr/images/us/mo/ushop_LGX401_LGM-X401L_BlackSilver_01.png', 'LGM-X401L', 'X401', 289300, 252000, 0, 37300, '2017.11.23'),
('//image.uplus.co.kr/images/us/mo/LGM-X600L_2.png', 'LGM-X600L', 'Q6', 419100, 365000, 0, 54100, '2018.10.13'),
('//image.uplus.co.kr/images/us/mo/ushop_LGQ6+_LGM-X600LP_Blue_01.png', 'LGM-X600LP', 'Q6+', 484000, 330000, 0, 154000, '2017.09.07'),
('//image.uplus.co.kr/images/us/mo/ushop_LGQ8_LGM-X800L_SweetPink_01.png', 'LGM-X800L', 'Q8', 616000, 210000, 0, 406000, '2017.08.25'),
('//image.uplus.co.kr/images/us/mo/ushop_LGG7_LM-G710N_RaspberryRose_01.png', 'LM-G710N', 'G7', 898700, 451000, 0, 447700, '2018.09.29'),
('//image.uplus.co.kr/images/us/mo/ushop_LGG7_LM-G710N_NewMoroccanBlue_01.png', 'LM-G710N128', 'G7+', 976800, 451000, 0, 525800, '2018.09.29'),
('//image.uplus.co.kr/images/us/mo/ushop_Q7_LM-Q720L_AuroraBlack_01.png', 'LM-Q720L', 'Q7', 419100, 350000, 0, 69100, '2018.11.24'),
('//image.uplus.co.kr/images/us/mo/ushop_Q7+_LM-Q725L_MoroccanBlue_01.png', 'LM-Q725L', 'Q7+', 517000, 370000, 0, 147000, '2018.11.24'),
('//image.uplus.co.kr/images/us/mo/ushop_Q7BTS_SE_LM-Q727L_Black_01.png', 'LM-Q727L', 'Q7 BTS Edition', 473000, 350000, 0, 123000, '2018.11.24'),
('//image.uplus.co.kr/images/us/mo/ushop_LGQ8_LM-Q815L_MoroccanBlue_01.png', 'LM-Q815L', 'Q8 (2018)', 539000, 350000, 0, 189000, '2018.11.24'),
('//image.uplus.co.kr/images/us/mo/ushop_LGV35_LM-V350N_NewAuroraBlack_01.png', 'LM-V350N', 'V35', 1048300, 651000, 0, 397300, '2018.11.10'),
('//image.uplus.co.kr/images/us/mo/ushop_V40_LM-V409N_CarmineRed_01.png', 'LM-V409N', 'V40', 1049400, 173000, 0, 876400, '2018.10.17'),
('//image.uplus.co.kr/images/us/mo/ushop_LGX4_LM-X410L_Gold_01.png', 'LM-X410L', 'X4(2018)', 297000, 270000, 0, 27000, '2018.09.07'),
('//image.uplus.co.kr/images/us/mo/ushop_LGX4+_LM-X415L_MorocanBlue_01.png', 'LM-X415L', 'X4+(2018)', 349800, 145000, 0, 204800, '2018.01.26'),
('//image.uplus.co.kr/images/us/mo/ushop_x5_LM-X510L_blue_01.png', 'LM-X510L', 'X5', 363000, 135000, 0, 228000, '2018.06.08'),
('//image.uplus.co.kr/images/us/mo/ushop_LGFolder_LM-Y110L_PinkGold_01.png', 'LM-Y110L', 'LG 폴더', 220000, 200000, 0, 20000, '2018.03.16'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'SHV-E250L', '갤럭시 노트 2', 847000, 300000, 0, 547000, '2015.10.13'),
('//image.uplus.co.kr/images/us/mo/SHV-E250L_6.png', 'SHV-E250LM', '갤럭시 노트 2', 847000, 300000, 0, 547000, '2015.10.13'),
('//image.uplus.co.kr/images/us/mo/SHV-E300L_1.png', 'SHV-E300L', '갤럭시 S4', 550000, 550000, 0, 0, '2015.09.09'),
('//image.uplus.co.kr/images/us/mo/SHV-E310L_1.png', 'SHV-E310L', '갤럭시 메가', 799700, 630000, 0, 169700, '2015.05.29'),
('//image.uplus.co.kr/images/us/mo/SHV-E330L_1.png', 'SHV-E330L', '갤럭시 S4 LTE-A', 605000, 605000, 0, 0, '2015.09.09'),
('//image.uplus.co.kr/images/us/mo/SHV-E330L16_1.png', 'SHV-E330L16', 'Galaxy S4 CA 16G', 499400, 457000, 0, 42400, '2015.09.10'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'SHV-E330L16B', '갤럭시 S4 LTE-A', 499400, 457000, 0, 42400, '2015.09.10'),
('//image.uplus.co.kr/images/us/mo/SHV-E500L_1.png', 'SHV-E500L', '갤럭시 윈', 297000, 295000, 0, 2000, '2015.05.29'),
('//image.uplus.co.kr/images/us/mo/SM-A310N0_1.png', 'SM-A310N0', 'Galaxy A3⑥', 352000, 307000, 0, 45000, '2018.09.22'),
('//image.uplus.co.kr/images/us/mo/SM-A500L_1.png', 'SM-A500L', 'Galaxy A5', 399300, 330000, 0, 69300, '2016.08.04'),
('//image.uplus.co.kr/images/us/mo/SM-A510L_1.png', 'SM-A510L', 'Galaxy A5⑥', 429000, 304000, 0, 125000, '2016.09.28'),
('//image.uplus.co.kr/images/us/mo/SM-A520L_1.png', 'SM-A520L', '갤럭시 A5 2017', 297000, 240000, 0, 57000, '2018.07.11'),
('//image.uplus.co.kr/images/us/mo/ushop_GalaxyA8_SM-A530N_Blue_01.png', 'SM-A530N', '갤럭시 A8', 599500, 430000, 0, 169500, '2018.10.20'),
('//image.uplus.co.kr/images/us/mo/ushop_GalaxyA6_SM-A600N_Black_01.png', 'SM-A600N', '갤럭시 A6', 396000, 125000, 0, 271000, '2018.06.29'),
('//image.uplus.co.kr/images/us/mo/SM-A700L_1.png', 'SM-A700L', 'Galaxy A7', 499400, 330000, 0, 169400, '2016.08.04'),
('//image.uplus.co.kr/images/us/mo/SM-A710L_1.png', 'SM-A710L', 'Galaxy A7⑥', 528000, 280000, 0, 248000, '2018.01.27'),
('//image.uplus.co.kr/images/us/mo/ushop_GalaxyA7_SM-A750N_Blue_01.png', 'SM-A750N', 'SM-A750N', 499400, 135000, 0, 364400, '2018.10.23'),
('//image.uplus.co.kr/images/us/mo/SM-C105L_1.png', 'SM-C105L', '갤럭시 S4 줌', 308000, 300000, 0, 8000, '2015.05.29'),
('//image.uplus.co.kr/images/us/mo/SM-C115L_1.png', 'SM-C115L', '갤럭시 줌2', 297000, 297000, 0, 0, '2015.07.11'),
('//image.uplus.co.kr/images/us/mo/SM-G155S_1.png', 'SM-G150NL', '갤럭시 폴더', 297000, 250000, 0, 47000, '2017.02.16'),
('//image.uplus.co.kr/images/us/mo/SM-G160N_1.png', 'SM-G160N', '갤럭시 폴더 2017', 297000, 205000, 0, 92000, '2018.02.20'),
('//image.uplus.co.kr/images/us/mo/SM-G610L_1.png', 'SM-G610L', '갤럭시 On7 2016', 344300, 300000, 0, 44300, '2018.02.09'),
('//image.uplus.co.kr/images/us/mo/ushop_GalaxyOn7_Prime_2018_SM-G611L_Black_01.png', 'SM-G611L', '갤럭시 On7 Prime', 344300, 300000, 0, 44300, '2018.10.13'),
('//image.uplus.co.kr/images/us/mo/SM-G710L_01.png', 'SM-G710L', '갤럭시 그랜드2', 374000, 330000, 0, 44000, '2015.08.07'),
('//image.uplus.co.kr/images/us/mo/SM-G720NZ_1.png', 'SM-G720N0', '갤럭시 그랜드 맥스', 319000, 267000, 0, 52000, '2016.08.04'),
('//image.uplus.co.kr/images/us/mo/SM-G850L_1.png', 'SM-G850L', '갤럭시 알파', 495000, 322000, 0, 173000, '2015.07.10'),
('//image.uplus.co.kr/images/us/mo/SM-G900L_01.png', 'SM-G900L', '갤럭시 S5', 666600, 580000, 0, 86600, '2015.09.04'),
('//image.uplus.co.kr/images/us/mo/SM-G906L_1.png', 'SM-G906L', '갤럭시 S5 광대역 LTE-A', 699600, 517000, 0, 182600, '2016.09.14'),
('//image.uplus.co.kr/images/us/mo/SM-G920_6.png', 'SM-G920L', '갤럭시 S6', 679800, 207000, 0, 472800, '2017.03.07'),
('//image.uplus.co.kr/images/us/mo/SM-G920_1.png', 'SM-G920L64', '갤럭시 S6(64GB)', 699600, 207000, 0, 492600, '2017.03.07'),
('//image.uplus.co.kr/images/us/mo/SM-G925F_1.png', 'SM-G925L', '갤럭시 S6 엣지', 735900, 500000, 0, 235900, '2016.08.03'),
('//image.uplus.co.kr/images/us/mo/SM-G925F_5.png', 'SM-G925L128', '갤럭시 S6 엣지(128GB)', 799700, 500000, 0, 299700, '2016.08.03'),
('//image.uplus.co.kr/images/us/mo/SM-G925F_5.png', 'SM-G925L64', '갤럭시 S6 엣지(64GB)', 755700, 500000, 0, 255700, '2016.08.03'),
('//image.uplus.co.kr/images/us/mo/SM-G928L_1.png', 'SM-G928L', '갤럭시 S6 엣지 플러스', 599500, 328000, 0, 271500, '2017.02.16'),
('//image.uplus.co.kr/images/us/mo/SM-G930_8.png', 'SM-G930L', '갤럭시 S7', 699600, 500000, 0, 199600, '2018.02.22'),
('//image.uplus.co.kr/images/us/mo/SM-G930_6.png', 'SM-G930L64', '갤럭시 S7', 721600, 500000, 0, 221600, '2018.02.22'),
('//image.uplus.co.kr/images/us/mo/SM-G935_1.png', 'SM-G935L', '갤럭시 S7 엣지', 755700, 500000, 0, 255700, '2018.02.22'),
('//image.uplus.co.kr/images/us/mo/SM-G935_10.png', 'SM-G935L128', '갤럭시 S7 엣지', 799700, 500000, 0, 299700, '2018.02.22'),
('//image.uplus.co.kr/images/us/mo/SM-G935_9.png', 'SM-G935L64', '갤럭시 S7 엣지', 777700, 500000, 0, 277700, '2018.02.22'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'SM-G935LO', '갤럭시 S7 엣지(올림픽)', 966900, 500000, 0, 466900, '2018.02.22'),
('//image.uplus.co.kr/images/us/mo/SM-G950N_5.png', 'SM-G950N', '갤럭시 S8', 699600, 212000, 0, 487600, '2018.12.01'),
('//image.uplus.co.kr/images/us/mo/SM-G955N_5.png', 'SM-G955N', '갤럭시 S8+', 899800, 212000, 0, 687800, '2018.09.15'),
('//image.uplus.co.kr/images/us/mo/SM-G955N128_1.png', 'SM-G955N128', '갤럭시 S8+ 128GB', 998800, 212000, 0, 786800, '2018.09.15'),
('//image.uplus.co.kr/images/us/mo/ushop_Galaxys9_SM-G960N_Red_01.png', 'SM-G960N', '갤럭시 S9', 957000, 358000, 0, 599000, '2018.06.16'),
('//image.uplus.co.kr/images/us/mo/ushop_Galaxys9+_SM-G965N_Purple_01.png', 'SM-G965N', '갤럭시 S9+', 968000, 450000, 0, 518000, '2018.10.20'),
('//image.uplus.co.kr/images/us/mo/ushop_Galaxys9+_SM-G965N_Black_01.png', 'SM-G965N256', '갤럭시 S9+ 256GB', 1078000, 400000, 0, 678000, '2018.09.29'),
('//image.uplus.co.kr/images/us/mo/ushop_galaxyJ2pro_SM-J250N_Black_01.png', 'SM-J250N', 'J2 Pro', 199100, 190000, 0, 9100, '2018.04.13'),
('//image.uplus.co.kr/images/us/mo/SM-J32N0_1.png', 'SM-J320N0', 'Galaxy J3 2016', 231000, 223000, 0, 8000, '2018.09.22'),
('//image.uplus.co.kr/images/us/mo/SM-J330L_1.png', 'SM-J330L', '갤럭시 J3 2017', 244200, 209000, 0, 35200, '2018.05.04'),
('//image.uplus.co.kr/images/us/mo/ushop_kakao_little_friends_BlueSilver_01.png', 'SM-J330L-KA', '카카오리틀프렌즈폰', 286000, 209000, 0, 77000, '2018.08.31'),
('//image.uplus.co.kr/images/us/mo/ushop_GalaxyJ4_SM_J415N_Gold_01.png', 'SM-J415N', '갤럭시 J4+', 264000, 140000, 0, 124000, '2018.11.16'),
('//image.uplus.co.kr/images/us/mo/SM-J500N0_1.png', 'SM-J500N0', '갤럭시 J5', 264000, 264000, 0, 0, '2016.08.04'),
('//image.uplus.co.kr/images/us/mo/SM-J510L_1.png', 'SM-J510L', '갤럭시 J5 2016', 297000, 260000, 0, 37000, '2017.09.07'),
('//image.uplus.co.kr/images/us/mo/SM-J530L_1.png', 'SM-J530L', '갤럭시 J5 2017', 297000, 120000, 0, 177000, '2017.07.04'),
('//image.uplus.co.kr/images/us/mo/ushop_GalaxyJ6_SM-J600L_Purple_01.png', 'SM-J600L', '갤럭시 J6', 330000, 287000, 0, 43000, '2018.07.06'),
('//image.uplus.co.kr/images/us/mo/SM-N750L_01.png', 'SM-N750L', '갤럭시 노트3 네오', 599500, 300000, 0, 299500, '2015.10.13'),
('//image.uplus.co.kr/images/us/mo/SM-N900L_9.png', 'SM-N900L', '갤럭시 노트3', 880000, 705000, 0, 175000, '2015.09.18'),
('//image.uplus.co.kr/images/us/mo/SM-N910L_7.png', 'SM-N910L', '갤럭시 노트4', 799700, 380000, 0, 419700, '2016.09.14'),
('//image.uplus.co.kr/images/us/mo/SM-N915L_1.png', 'SM-N915L', '갤럭시 노트 엣지', 699600, 611000, 0, 88600, '2016.03.24'),
('//image.uplus.co.kr/images/us/mo/SM-N916L_1.png', 'SM-N916L', '갤럭시 노트4 S LTE', 799700, 675000, 0, 124700, '2016.06.11'),
('//image.uplus.co.kr/images/us/mo/SM-N920L_1.png', 'SM-N920L', '갤럭시 노트5', 799700, 410000, 0, 389700, '2017.09.12'),
('//image.uplus.co.kr/images/us/mo/SM-N920L_8.png', 'SM-N920L64', '갤럭시 노트5 64GB', 821700, 410000, 0, 411700, '2017.09.12'),
('//image.uplus.co.kr/images/us/mo/SM-N935L_1.png', 'SM-N935L', 'Galaxy Note Fan Edition', 699600, 207000, 0, 492600, '2017.07.07'),
('//image.uplus.co.kr/images/us/mo/ushop_GalaxyNote8_SM-N950N_MidnightBlack_01.png', 'SM-N950N', '갤럭시 노트8', 998800, 358000, 0, 640800, '2018.06.23'),
('//image.uplus.co.kr/images/us/mo/ushop_GalaxyNote8_SM-N950N_DeepSeaBlue_01.png', 'SM-N950N256', '갤럭시 노트8', 1094500, 358000, 0, 736500, '2018.06.23'),
('//image.uplus.co.kr/images/us/mo/ushop_GalaxyNote9_SM-N960N_MetallicCopper_01.png', 'SM-N960N', '갤럭시 노트9', 1094500, 212000, 0, 882500, '2018.08.13'),
('//image.uplus.co.kr/images/us/mo/ushop_GalaxyNote9_SM-N960N_LavenderPurple_01.png', 'SM-N960N512', '갤럭시 노트9 512GB', 1353000, 212000, 0, 1141000, '2018.08.13'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'SM-P555L', '갤럭시 탭A', 484000, 285000, 0, 199000, '2016.02.12'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'SM-P585N0', 'Galaxy TAB A NOTE 10.1 2016', 489000, 200000, 0, 289000, '2018.01.04'),
('//image.uplus.co.kr/images/us/mo/SM-P605L_1.png', 'SM-P605L', '갤럭시 노트 10.1 2014 에디션', 799700, 300000, 0, 499700, '2015.11.04'),
('//image.uplus.co.kr/images/us/mo/SM-R765L_1.png', 'SM-R765L', '기어S3', 399300, 330000, 0, 69300, '2018.02.13'),
('//image.uplus.co.kr/images/us/mo/ushop_GalaxyWatch_SM-R805N_Silver_01.png', 'SM-R805N', '갤럭시워치(46)', 399300, 157000, 0, 242300, '2018.08.24'),
('//image.uplus.co.kr/images/us/mo/ushop_GalaxyWatch_SM-R815N_Black_01.png', 'SM-R815N', '갤럭시워치(42)', 379500, 157000, 0, 222500, '2018.08.24'),
('//image.uplus.co.kr/images/us/mo/SM-T335L_1.png', 'SM-T335L', '갤럭시 탭4 8.0', 374000, 245000, 0, 129000, '2015.05.29'),
('//image.uplus.co.kr/images/us/mo/SM-T375L_1.png', 'SM-T375L', 'Galaxy TAB E 8.0', 275000, 181000, 0, 94000, '2017.07.01'),
('//image.uplus.co.kr/images/us/mo/SM-T378L_1.png', 'SM-T378L', 'Galaxy TAB E+', 297000, 161000, 0, 136000, '2017.05.13'),
('//image.uplus.co.kr/images/us/mo/SM-T385L_1.png', 'SM-T385L', 'Galaxy TAB A', 308000, 161000, 0, 147000, '2017.11.16'),
('//image.uplus.co.kr/images/us/mo/SM-T677L_1.png', 'SM-T677NL', 'Galaxy View', 699600, 330000, 0, 369600, '2016.10.31'),
('//image.uplus.co.kr/images/us/mo/SM-T805L_1.png', 'SM-T805L', '갤럭시 탭S 10.5', 799700, 150000, 0, 649700, '2015.05.29'),
('//image.uplus.co.kr/images/us/mo/SM-T825N0_4.png', 'SM-T825N0', '갤럭시 탭S3', 638000, 100000, 0, 538000, '2018.06.01'),
('//image.uplus.co.kr/images/us/mo/ushop_GalaxyTabS4_SM-T835N_Black_01.png', 'SM-T835N', '갤럭시 탭S4', 880000, 290000, 0, 590000, '2018.08.22'),
('//image.uplus.co.kr/images/us/mo/ushop_GalaxyTabS4_SM-T835N_256G_Black.png', 'SM-T835N256P', '갤럭시탭S4 256GB 패키지', 1089000, 320000, 0, 769000, '2018.11.15'),
('//image.uplus.co.kr/images/us/mo/SM-W627N0_1.png', 'SM-W627N0', '갤럭시 Book 10.6', 899800, 250000, 0, 649800, '2017.08.03'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'UD-A1524-16', '중고-아이폰6 plus-16', 458000, 330000, 0, 128000, '2017.06.15'),
('//image.uplus.co.kr/images/us/mo/thumbnail_noimg.png', 'UD-A1524-64', '중고-아이폰6 plus-64', 558000, 330000, 0, 228000, '2017.06.15'),
('//image.uplus.co.kr/images/us/mo/VIE-L09_1.png', 'VIE-L09', 'P9+', 176000, 154000, 0, 22000, '2017.09.07'),
('//image.uplus.co.kr/images/us/mo/YB1-X91L_1.png', 'YB1-X91L', 'Yogabook LTE', 749000, 230000, 0, 519000, '2017.01.01');

-- --------------------------------------------------------

--
-- 테이블 구조 `sk`
--

CREATE TABLE `sk` (
  `image_link` varchar(1000) NOT NULL,
  `model` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `chulgo` int(20) NOT NULL,
  `gongshi` int(20) NOT NULL,
  `chuga` int(20) NOT NULL,
  `danmal` int(20) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `sk`
--

INSERT INTO `sk` (`image_link`, `model`, `name`, `chulgo`, `gongshi`, `chuga`, `danmal`, `date`) VALUES
('http://shop.tworld.co.kr/pimg/phone/CG/CGJD/detail/CGJD_D1.jpg', 'IPHONE6S_32GR', '아이폰6S_32G', 346500, 81000, 12100, 253400, '2018-05-05'),
('http://shop.tworld.co.kr/pimg/phone/CG/CGHQ/detail/CGHQ_D1.jpg', 'IPHONE7_128GJ', 'IPHONE7_128G', 577500, 81000, 12100, 484400, '2016-10-14'),
('http://shop.tworld.co.kr/pimg/phone/CG/CGNR/detail/CGNR_D1.jpg', 'IPHONE7_256GPR', 'IPHONE7_256G', 599500, 81000, 12100, 506400, '2017-03-25'),
('http://shop.tworld.co.kr/pimg/phone/CG/CGHI/detail/CGHI_D1.jpg', 'IPHONE7_32GB', 'IPHONE7_32G', 550000, 81000, 12100, 456900, '2016-10-14'),
('http://shop.tworld.co.kr/pimg/phone/A0/A065/detail/A065_D1.jpg', 'IPHONE8+_256GG', 'IPHONE8+_256G', 1283700, 81000, 12100, 1190600, '2017-10-27'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0HD/detail/A0HD_D1.jpg', 'IPHONE8+_256GPR', 'IPHONE8+_256G', 1283700, 81000, 12100, 1190600, '2018-04-17'),
('http://shop.tworld.co.kr/pimg/phone/A0/A062/detail/A062_D1.jpg', 'IPHONE8+_64GG', 'IPHONE8+_64G', 1076900, 81000, 12100, 983800, '2017-10-27'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0HC/detail/A0HC_D1.jpg', 'IPHONE8+_64GPR', 'IPHONE8+_64G', 1076900, 81000, 12100, 983800, '2018-04-17'),
('http://shop.tworld.co.kr/pimg/phone/A0/A05Z/detail/A05Z_D1.jpg', 'IPHONE8_256GG', 'IPHONE8_256G', 1142900, 81000, 12100, 1049800, '2017-10-27'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0HB/detail/A0HB_D1.jpg', 'IPHONE8_256GPR', 'IPHONE8_256G', 1142900, 81000, 12100, 1049800, '2018-04-17'),
('http://shop.tworld.co.kr/pimg/phone/A0/A05Q/detail/A05Q_D1.jpg', 'IPHONE8_64GG', 'IPHONE8_64G', 946000, 81000, 12100, 852900, '2017-10-27'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0HA/detail/A0HA_D1.jpg', 'IPHONE8_64GPR', 'IPHONE8_64G', 946000, 81000, 12100, 852900, '2018-04-17'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0Q1/detail/A0Q1_D1.jpg', 'IPHONE_XR_128GBK', 'IPHONE XR_128G', 1056000, 81000, 12100, 962900, '2018-10-26'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0Q2/detail/A0Q2_D1.jpg', 'IPHONE_XR_256GBK', 'IPHONE XR_256G', 1188000, 81000, 12100, 1094900, '2018-10-26'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0PY/detail/A0PY_D1.jpg', 'IPHONE_XR_64GBK', 'IPHONE XR_64G', 990000, 81000, 12100, 896900, '2018-10-26'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0QX/detail/A0QX_D1.jpg', 'IPHONE_XS_64GG', 'IPHONE XS_64G', 1364000, 81000, 12100, 1270900, '2018-10-26'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0QC/detail/A0QC_D1.jpg', 'IPHONE_XS_MAX_256GG', 'IPHONE XS MAX_256G', 1705000, 81000, 12100, 1611900, '2018-10-26'),
('http://shop.tworld.co.kr/pimg/phone/A0/A069/detail/A069_D1.jpg', 'IPHONE_X_256GW', 'IPHONE_X_256G', 1557600, 81000, 12100, 1464500, '2017-11-17'),
('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKK_q91ykAygogBFp6SD4WsUux1TO02EVs3o9WPTsfTiufZYP6', 'jieun-jung', 'jieun', 165000, 126000, 18900, 20230, '2018.12.23'),
('http://shop.tworld.co.kr/pimg/phone/LG/LGN8/detail/LGN8_D1.jpg', 'LGM-G600S', 'G6', 899800, 500000, 75000, 324800, '2018-04-14'),
('http://shop.tworld.co.kr/pimg/phone/A0/A04A/detail/A04A_D1.jpg', 'LGM-V300S_128G', 'V30+', 849200, 555000, 83200, 211000, '2018-09-18'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0E4/detail/A0E4_D1.jpg', 'LGM-V300S_256GA', 'V30S+ThinQ', 948200, 555000, 83200, 310000, '2018-09-18'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0CK/detail/A0CK_D1.jpg', 'LGM-V300S_64GR', 'V30', 799700, 705000, 83200, 94700, '2018-12-10'),
('http://shop.tworld.co.kr/pimg/phone/A0/A03F/detail/A03F_D1.jpg', 'LGM-X100S', 'LTE 스마트 폴더', 297000, 200000, 30000, 67000, '2018-09-29'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0GF/detail/A0GF_D1.jpg', 'LM-G710N_64G', 'G7', 898700, 326000, 48900, 523800, '2018-11-07'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0FQ/detail/A0FQ_D1.jpg', 'LM-Q720S_32G', 'Q7', 419100, 133000, 19900, 266200, '2018-07-25'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0JR/detail/A0JR_D1.jpg', 'LM-Q720S_32GL', 'Q7', 419100, 133000, 19900, 266200, '2018-07-25'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0FR/detail/A0FR_D1.jpg', 'LM-Q725S_64GB', 'Q7+', 517000, 353000, 52900, 111100, '2018-06-15'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0NT/detail/A0NT_D1.jpg', 'LM-Q727S_32G', 'BTS EDITION', 473000, 133000, 19900, 320100, '2018-09-13'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0I7/detail/A0I7_D1.jpg', 'LM-Q815S_64G', 'Q8(2018)', 539000, 173000, 25900, 340100, '2018-08-10'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0I8/detail/A0I8_D1.jpg', 'LM-Q815S_64GB', 'Q8(2018)', 539000, 173000, 25900, 340100, '2018-08-10'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0GN/detail/A0GN_D1.jpg', 'LM-V350N_64G', 'V35', 1048300, 550000, 82500, 415800, '2018-09-18'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0AF/detail/A0AF_D1.jpg', 'LM-X410S', 'X4', 297000, 259000, 38000, 0, '2018-06-16'),
('http://shop.tworld.co.kr/pimg/phone/A0/A08C/detail/A08C_D1.jpg', 'LM-X415SB', 'X4+', 349800, 320000, 29800, 0, '2018-10-05'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0C6/detail/A0C6_D1.jpg', 'LM-X510S', 'X5(2018)', 363000, 276000, 41400, 45600, '2018-11-01'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0P7/detail/A0P7_D1.jpg', 'LM-X510S_32GL', 'X5', 363000, 276000, 41400, 45600, '2018-11-01'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0PS/detail/A0PS_D1.jpg', 'OMD NOKIA 8110', 'OMD NOKIA 8110', 139700, 122000, 17700, 0, '2018-11-22'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0GR/detail/A0GR_D1.jpg', 'OMD SHARP AQUOS S3', 'OMD SHARP AQUOS S3', 319000, 278000, 41000, 0, '2018-11-02'),
('http://shop.tworld.co.kr/pimg/phone/A0/A04L/detail/A04L_D1.jpg', 'OMD SONY XZ1', 'OMD SONY XZ1', 399300, 300000, 45000, 54300, '2018-10-26'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0F7/detail/A0F7_D1.jpg', 'OMD SONY XZ2', 'OMD SONY XZ2', 499400, 100000, 15000, 384400, '2018-04-03'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0F9/detail/A0F9_D1.jpg', 'OMD SONY XZ2C', 'OMD SONY XZ2C', 599500, 100000, 15000, 484500, '2018-04-03'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0OO/detail/A0OO_D1.jpg', 'OMD SONY XZ3', 'OMD SONY XZ3', 891000, 100000, 15000, 776000, '2018-10-10'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0SK/detail/A0SK_D1.jpg', 'OMD XIAOMI POCO F1', 'OMD XIAOMI POCO F1', 429000, 200000, 30000, 199000, '2018-11-14'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0M9/detail/A0M9_D1.jpg', 'OMD XIAOMI REDMI NOTE 5', 'OMD XIAOMI REDMI NOTE 5', 299200, 261000, 38200, 0, '2018-11-02'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0P8/detail/A0P8_D1.jpg', 'OMD ZTE-V9VITA', '비타폰', 183700, 160000, 23700, 0, '2018-11-09'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0K3/detail/A0K3_D1.jpg', 'RE_IPHONE8+_256GPR', 'RE_IPHONE8+_256G', 993300, 81000, 12100, 900200, '2018-06-05'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0K2/detail/A0K2_D1.jpg', 'RE_IPHONE8+_64GPR', 'RE_IPHONE8+_64G', 850300, 81000, 12100, 757200, '2018-06-05'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0EH/detail/A0EH_D1.jpg', 'RE_IPHONE8_256GB', 'IPHONE8_256G', 865700, 81000, 12100, 772600, '2018-03-23'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0EE/detail/A0EE_D1.jpg', 'RE_IPHONE8_64GB', 'IPHONE8_64G', 708400, 81000, 12100, 615300, '2018-03-23'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0EG/detail/A0EG_D1.jpg', 'RE_IPHONE8_64GG', 'IPHONE8_64G', 708400, 81000, 12100, 615300, '2018-03-23'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0K0/detail/A0K0_D1.jpg', 'RE_IPHONE8_64GPR', 'RE_IPHONE8_64G', 708400, 81000, 12100, 615300, '2018-06-05'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0EF/detail/A0EF_D1.jpg', 'RE_IPHONE8_64GW', 'IPHONE8_64G', 708400, 81000, 12100, 615300, '2018-03-23'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0EC/detail/A0EC_D1.jpg', 'RE_IPHONE_X_256GB', 'IPHONE_X_256G', 1245200, 81000, 12100, 1152100, '2018-03-23'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0ED/detail/A0ED_D1.jpg', 'RE_IPHONE_X_256GW', 'IPHONE_X_256G', 1245200, 81000, 12100, 1152100, '2018-03-23'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0EA/detail/A0EA_D1.jpg', 'RE_IPHONE_X_64GB', 'IPHONE_X_64G', 1074700, 81000, 12100, 981600, '2018-03-23'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0EB/detail/A0EB_D1.jpg', 'RE_IPHONE_X_64GW', 'IPHONE_X_64G', 1074700, 81000, 12100, 981600, '2018-03-23'),
('http://shop.tworld.co.kr/pimg/phone/A0/A06H/detail/A06H_D1.jpg', 'SD-B190S', 'mini폰', 264000, 220000, 0, 44000, '2018-07-14'),
('http://shop.tworld.co.kr/pimg/phone/A0/A06M/detail/A06M_D1.jpg', 'SM-A530N', '갤럭시 A8(2018)', 599500, 216000, 32400, 351100, '2018-01-05'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0J9/detail/A0J9_D1.jpg', 'SM-A600NA', '갤럭시 A6', 396000, 220000, 33000, 143000, '2018-11-08'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0OP/detail/A0OP_D1.jpg', 'SM-A750N', '삼성 갤럭시 A7', 499400, 173000, 25900, 300500, '2018-10-23'),
('http://shop.tworld.co.kr/pimg/phone/SS/SS3R/detail/SS3R_D1.jpg', 'SM-G160N', '갤럭시폴더2', 297000, 150000, 22500, 124500, '2018-07-27'),
('http://shop.tworld.co.kr/pimg/phone/SS/SS1V/detail/SS1V_D1.jpg', 'SM-G610S', '갤럭시ON7(2016)', 344300, 300000, 44300, 0, '2018-09-08'),
('http://shop.tworld.co.kr/pimg/phone/SS/SS3E/detail/SS3E_D1.jpg', 'SM-G950N_64G', '갤럭시S8_64G', 699600, 369000, 55300, 275300, '2018-11-02'),
('http://shop.tworld.co.kr/pimg/phone/SS/SS3O/detail/SS3O_D1.jpg', 'SM-G955N_128G', '갤럭시S8+_128G', 998800, 426000, 63900, 508900, '2018-08-22'),
('http://shop.tworld.co.kr/pimg/phone/SS/SS3K/detail/SS3K_D1.jpg', 'SM-G955N_64GB', '갤럭시S8+_64G', 899800, 426000, 63900, 409900, '2018-08-22'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0B1/detail/A0B1_D1.png', 'SM-G960N_64G', '갤럭시 S9_64G', 957000, 372000, 55800, 529200, '2018-06-30'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0B2/detail/A0B2_D1.png', 'SM-G965N_64G', '갤럭시 S9+_64G', 968000, 372000, 55800, 540200, '2018-09-18'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0FE/detail/A0FE_D1.jpg', 'SM-J250N', 'J2 PRO', 199100, 110000, 16500, 72600, '2018-08-04'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0FG/detail/A0FG_D1.jpg', 'SM-J250NG', 'J2 PRO', 199100, 110000, 16500, 72600, '2018-08-04'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0SW/detail/A0SW_D1.jpg', 'SM-J415N', '갤럭시 J4+', 264000, 140000, 21000, 103000, '2018-11-19'),
('http://shop.tworld.co.kr/pimg/phone/A0/A005/detail/A005_D1.jpg', 'SM-J530SP', 'J5 2017', 297000, 297000, 0, 0, '2018-07-24'),
('http://shop.tworld.co.kr/pimg/phone/SS/SS3Q/detail/SS3Q_D1.jpg', 'SM-J727S', 'WIDE2', 297000, 259000, 38000, 0, '2018-07-28'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0F0/detail/A0F0_D1.jpg', 'SM-J727S_EP', 'WIDE2 Economical Pack', 333300, 270000, 0, 63300, '2018-03-17'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0G3/detail/A0G3_D1.jpg', 'SM-J737S', 'WIDE3', 297000, 229000, 34300, 33700, '2018-11-20'),
('http://shop.tworld.co.kr/pimg/phone/A0/A03Y/detail/A03Y_D1.jpg', 'SM-N950N_256G', '갤럭시 노트 8_256G', 1094500, 157000, 23500, 914000, '2018-11-01'),
('http://shop.tworld.co.kr/pimg/phone/A0/A03S/detail/A03S_D1.jpg', 'SM-N950N_64G', '갤럭시 노트 8_64G', 998800, 157000, 23500, 818300, '2018-11-01'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0PP/detail/A0PP_D1.jpg', 'SM-N960N_128GS', '갤럭시 노트 9_128G', 1094500, 158000, 23700, 912800, '2018-10-05'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0VW/detail/A0VW_D1.jpg', 'SM-N960N_128GW', '갤럭시 노트 9_128G', 1094500, 158000, 23700, 912800, '2018-11-30'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0M7/detail/A0M7_D1.jpg', 'SM-N960N_512GB', '갤럭시 노트 9_512G', 1353000, 158000, 23700, 1171300, '2018-08-13'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0VY/detail/A0VY_D1.jpg', 'SM-N960N_512GW', '갤럭시 노트 9_512G', 1353000, 158000, 23700, 1171300, '2018-11-30');

-- --------------------------------------------------------

--
-- 테이블 구조 `update_data`
--

CREATE TABLE `update_data` (
  `image_link` text NOT NULL,
  `model` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `chulgo` int(20) NOT NULL,
  `gongshi` int(20) NOT NULL,
  `chuga` int(20) NOT NULL,
  `danmal` int(20) NOT NULL,
  `date` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `telecom` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `update_data`
--

INSERT INTO `update_data` (`image_link`, `model`, `name`, `chulgo`, `gongshi`, `chuga`, `danmal`, `date`, `id`, `telecom`) VALUES
('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKK_q91ykAygogBFp6SD4WsUux1TO02EVs3o9WPTsfTiufZYP6', 'jieun-jung', 'jieun', 165000, 106000, 18900, 20230, '2018.12.10', 9, 'kt'),
('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKK_q91ykAygogBFp6SD4WsUux1TO02EVs3o9WPTsfTiufZYP6', 'jieun-jung', 'jieun', 165000, 116000, 18900, 20230, '2018.12.14', 10, 'kt'),
('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKK_q91ykAygogBFp6SD4WsUux1TO02EVs3o9WPTsfTiufZYP6', 'jieun-jung', 'jieun', 165000, 126000, 18900, 20230, '2018.12.17', 11, 'kt'),
('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKK_q91ykAygogBFp6SD4WsUux1TO02EVs3o9WPTsfTiufZYP6', 'jieun-jung', 'jieun', 165000, 178000, 18900, 20230, '2018.12.24', 12, 'kt'),
('http://shop.tworld.co.kr/pimg/phone/A0/A0CK/detail/A0CK_D1.jpg', 'LGM-V300S_64GR', 'V30', 799700, 705000, 0, 94700, '2018-12-10', 13, 'sk');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `kt`
--
ALTER TABLE `kt`
  ADD PRIMARY KEY (`model`);

--
-- 테이블의 인덱스 `lg`
--
ALTER TABLE `lg`
  ADD PRIMARY KEY (`model`);

--
-- 테이블의 인덱스 `sk`
--
ALTER TABLE `sk`
  ADD PRIMARY KEY (`model`);

--
-- 테이블의 인덱스 `update_data`
--
ALTER TABLE `update_data`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `update_data`
--
ALTER TABLE `update_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
