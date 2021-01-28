-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th7 05, 2020 lúc 01:03 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookshop`
--
CREATE DATABASE IF NOT EXISTS `bookshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bookshop`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

DROP TABLE IF EXISTS `baiviet`;
CREATE TABLE IF NOT EXISTS `baiviet` (
  `MaBV` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `TieuDe` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgayDang` date DEFAULT curdate(),
  `TenTK` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaBV`),
  KEY `TenTK` (`TenTK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`MaBV`, `TieuDe`, `NoiDung`, `NgayDang`, `TenTK`, `HinhAnh`) VALUES
('BV001', 'Cùng Khánh Vy review cuốn sách Vừa lười vừa bận vẫn giỏi tiếng Anh', 'Phương pháp gì đã giúp cô nàng hot girl 7 thứ tiếng bận rộn – Khánh Vy có thể làm bao nhiêu [...]', '2020-05-23', 'admin', 'vualuoivuaban.jpg'),
('BV002', 'VTC14 Review bộ sách 101 Những điều nhà lãnh đạo cần biết của John Maxwell', 'Sự lãnh đạo càng cao, hiệu quả càng lớn, đòi hỏi sự trau dồi không ngừng nghỉ và đây chính là những [...]', '2020-05-23', 'admin', '333.jpg'),
('BV003', 'Khánh Vy review sách Luyện siêu trí nhớ từ vựng THPT', 'Cô bạn Khánh Vy – hot girl 7 thứ tiếng bật mí bí quyết đạt được điểm Tiếng Anh thi đại học [...]', '2020-05-23', 'admin', 'luyentrinho.jpg'),
('BV004', 'Top 5 những cuốn sách luyện thi THPT Quốc gia 2018 hay nhất', 'Bứt phá – Thi là đỗ cùng với bộ sách luyện thi THPT Quốc gia 2018 hay nhất hiện nay: “Bứt phá [...]', '2020-05-23', 'admin', 'bucphaquocgia.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

DROP TABLE IF EXISTS `binhluan`;
CREATE TABLE IF NOT EXISTS `binhluan` (
  `MaBL` int(11) NOT NULL AUTO_INCREMENT,
  `TenNguoiBL` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgayDang` date DEFAULT curdate(),
  `SoSao` int(11) DEFAULT NULL,
  `MaKH` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaSach` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MaBL`),
  KEY `MaKH` (`MaKH`),
  KEY `MaSach` (`MaSach`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`MaBL`, `TenNguoiBL`, `NoiDung`, `NgayDang`, `SoSao`, `MaKH`, `MaSach`) VALUES
(11, 'Hoang phuc', 'Sach hay', '2020-05-23', 5, NULL, 'S003'),
(12, 'Hoang phuc', 'Sach hay', '2020-05-23', 5, NULL, 'S003'),
(13, 'Hoang phuc', 'Sach hay', '2020-05-23', 5, NULL, 'S003'),
(14, 'Hoang phuc', 'Sach hay', '2020-05-23', 5, NULL, 'S001'),
(15, 'asa', 'sas', '2020-05-23', 5, NULL, 'S001'),
(16, 'asa', 'kim', '2020-05-23', 5, NULL, NULL),
(17, NULL, NULL, '2020-05-23', 5, NULL, NULL),
(18, 'asa', 'kim', '2020-05-23', 5, NULL, 'S001'),
(19, 'asa', 'sas', '2020-05-23', 5, NULL, 'S002');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

DROP TABLE IF EXISTS `chitiethoadon`;
CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `MaHD` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `MaSach` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `DonGia` float DEFAULT NULL,
  `GiamGia` int(11) DEFAULT NULL,
  `ThanhTien` float DEFAULT (`SoLuong` * `DonGia` * `GiamGia` / 100),
  KEY `MaHD` (`MaHD`),
  KEY `MaSach` (`MaSach`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSach`, `SoLuong`, `DonGia`, `GiamGia`, `ThanhTien`) VALUES
('6mw0i1t', 'S001', 7, 200000, 0, 1400000),
('p1eywb3', 'S001', 3, 200000, 0, 600000),
('p1eywb3', 'S002', 1, 200000, 0, 200000),
('bxejk6l', 'S004', 1, 150000, 0, 150000),
('bxejk6l', 'S001', 1, 200000, 0, 200000),
('jabky4t', 'S002', 1, 200000, 0, 200000),
('jabky4t', 'S001', 1, 200000, 0, 200000),
('jabky4t', 'S003', 1, 99000, 0, 99000),
('zn4fi0v', 'S003', 1, 99000, 0, 99000),
('zn4fi0v', 'S002', 1, 200000, 0, 200000),
('zn4fi0v', 'S004', 1, 150000, 0, 150000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphieunhap`
--

DROP TABLE IF EXISTS `chitietphieunhap`;
CREATE TABLE IF NOT EXISTS `chitietphieunhap` (
  `MaSach` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `SoPN` int(11) NOT NULL,
  `SoLuongNhap` int(11) DEFAULT NULL,
  `GiaNhap` float DEFAULT NULL,
  KEY `MaSach` (`MaSach`),
  KEY `SoPN` (`SoPN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `MaHD` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `NgayBan` date DEFAULT curdate(),
  `MaKH` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `TongTien` float DEFAULT NULL,
  `TrangThai` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  PRIMARY KEY (`MaHD`),
  KEY `MaKH` (`MaKH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `NgayBan`, `MaKH`, `TongTien`, `TrangThai`) VALUES
('6mw0i1t', '2020-07-04', 'uewdx6i', 1400000, 'No'),
('bxejk6l', '2020-07-04', 'r2i4tzl', 350000, 'No'),
('jabky4t', '2020-07-04', 'ivpfw1e', 499000, 'No'),
('p1eywb3', '2020-07-04', 'wrbhps4', 800000, 'No'),
('zn4fi0v', '2020-07-04', 'cpyas8h', 449000, 'No');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `MaKH` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `TenKH` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDT` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TrangThai` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  PRIMARY KEY (`MaKH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `DiaChi`, `SDT`, `TrangThai`) VALUES
('cpyas8h', 'Pham nhat vuong ', 'dadasdsa', '4551564545', 'No'),
('i1yum3l', 'Pham nhat vuong ', 'Việt Nam', '4551564545', 'No'),
('ivpfw1e', 'Pham nhat vuong ', 'dadasdsa', '4551564545', 'No'),
('r2i4tzl', 'Pham nhat vuong ', 'dadasdsa', '4551564545', 'No'),
('uewdx6i', 'Pham nhat vuong ', 'dadasdsa', '54544', 'No'),
('wrbhps4', 'Pham nhat vuong ', 'dadasdsa', '4551564545', 'No');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `MaNv` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `TenNv` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DChi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDT` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GioiTinh` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenTK` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `TrangThai` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  PRIMARY KEY (`MaNv`),
  KEY `TenTK` (`TenTK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaxuatban`
--

DROP TABLE IF EXISTS `nhaxuatban`;
CREATE TABLE IF NOT EXISTS `nhaxuatban` (
  `MaNXB` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `TenNXB` varchar(50) CHARACTER SET utf8 DEFAULT 'NoName',
  `DIACHINXB` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DIENTHOAI` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TrangThai` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  PRIMARY KEY (`MaNXB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhaxuatban`
--

INSERT INTO `nhaxuatban` (`MaNXB`, `TenNXB`, `DIACHINXB`, `DIENTHOAI`, `TrangThai`) VALUES
('001', 'Đại học quốc gia Hà Nội', '144 Xuân Thủy, Mai Dịch, Cầu Giấy, Hà Nội', '123456', 'No'),
('002', 'Giaó dục Việt Nam', 'Việt Nam', '123456', 'No');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhap`
--

DROP TABLE IF EXISTS `phieunhap`;
CREATE TABLE IF NOT EXISTS `phieunhap` (
  `SoPN` int(11) NOT NULL AUTO_INCREMENT,
  `NgayNhap` date DEFAULT curdate(),
  `MaNXB` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`SoPN`),
  KEY `MaNXB` (`MaNXB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

DROP TABLE IF EXISTS `sach`;
CREATE TABLE IF NOT EXISTS `sach` (
  `MaSach` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `TenSach` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoLuongTon` int(11) DEFAULT NULL,
  `MoTa` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhAnh` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaTL` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `MaTG` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `MaNXB` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `GiamGia` int(11) DEFAULT NULL,
  `GiaSach` float NOT NULL,
  `NgayNhap` date NOT NULL DEFAULT current_timestamp(),
  `TomTat` text COLLATE utf8_unicode_ci NOT NULL,
  `TrangThai` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  PRIMARY KEY (`MaSach`),
  KEY `MaTG` (`MaTG`),
  KEY `MaTL` (`MaTL`),
  KEY `MaNXB` (`MaNXB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`MaSach`, `TenSach`, `SoLuongTon`, `MoTa`, `HinhAnh`, `MaTL`, `MaTG`, `MaNXB`, `GiamGia`, `GiaSach`, `NgayNhap`, `TomTat`, `TrangThai`) VALUES
('S001', 'Đánh Thức Tiềm Năng Tiếng Anh Trong Bạn', 15, '<h3>GIỚI THIỆU SÁCH</h3>\r\n      <p><b>Đánh thức tiềm năng tiếng Anh trong bạn</b></p>\r\n      <p><b>Đánh thức tiềm năng tiếng Anh trong bạn – Tự tin làm chủ tiếng Anh</b></p>\r\n      <p>Nếu bạn nghĩ rằng mình chưa giỏi tiếng Anh là do mình không có năng khiếu thì bạn hãy trả lời câu hỏi “Tại sao bạn nói tiếng Việt thành thạo như vậy?” Liệu nói tiếng Việt có thực sự cần đến năng khiếu không?</p>\r\n      <p>Chắc hẳn bạn nghĩ bạn là người Việt nên việc giỏi tiếng Việt là điều dĩ nhiên, nhưng hãy thử nhìn lại quá trình học nói của bạn. Bạn đã trải qua một lộ trình học tự nhiên từ lúc sơ sinh đến lúc đọc, viết thành thạo. Do vậy, nếu áp dụng phương pháp học đúng đắn cùng một thời gian đủ để rèn luyện thì việc giỏi tiếng Anh luôn nằm trong tầm tay bạn.</p>\r\n      <p><b>Hãy cùng nhìn lại xem trong quá trình học tiếng Anh bạn có gặp phải những vấn đề sau?</b></p>\r\n      <p><b>Bạn đã từng học tiếng Anh nhưng thấy quá khó</b></p>\r\n      <p>Bạn học tiếng Anh nhiều năm nhưng vẫn phải choáng ngợp trước lượng kiến thức bao la rộng lớn của môn ngoại ngữ này. Nhiều kiến thức khó nhớ,  bạn học trước quên sau không thể áp dụng được kiến thức vào thi cử hoặc giao tiếp hằng ngày.</p>\r\n      <p><b>Bạn không biết mình đang đứng ở đâu</b></p>\r\n      <p>Bạn đang hoang mang khi không biết hiện tại trình độ tiếng Anh của bạn đang ở mức nào. Bạn thường không biết bắt đầu từ đâu, học phần nào trước phần nào sau và làm thế nào để hoàn thiện được các kĩ năng quan trọng trong tiếng Anh.</p>\r\n      <p><b>Học tiếng Anh nhiều năm nhưng bạn vẫn không thể giao tiếp được</b></p>\r\n      <p><b>Tiếng Anh là môn học bắt buộc từ lớp 3 vậy mà sau hơn 10 năm học tập nhiều bạn chỉ biết nói những câu đơn giản như “Hello”, “How are you”,… Bạn không thể giao tiếp được với người bản ngữ do chưa đủ tự tin về trình độ bản thân cũng như phát âm chưa chuẩn.</b></p>\r\n      <p><b>Bạn đang chán nản với việc học tập</b></p>\r\n      <p>Bạn đang chán nản và không thể kiên trì khi học lại từ đầu. Bạn hoàn toàn mất hứng thú với việc học ngoại ngữ. Làm thế nào để bạn có thể học tiếng Anh một cách bài bản từ gốc đến ngọn mà không bị bỏ dở và thức tỉnh được những tiềm năng đang ngủ quên trong con người bạn?</p>', 'ThongTinSach1.jpg', 'TL001', 'TG001', '001', 0, 200000, '2020-06-29', 'Với lối viết dễ hiểu, đúc kết từ kinh nghiệm thực tế của tác giả sẽ giúp các bạn độc giả hoàn toàn có thể tự học tiếng Anh dễ dàng với cuốn sách này', 'No'),
('S002', 'Chinh Phục Tiếng Anh Bằng NLP', 10, '<p><b>Chinh phục tiếng Anh bằng NLP</b></p>\r\n<p><b>Chinh phục tiếng Anh bằng NLP – </b><b>Bật mí phương pháp học tiếng Anh đỉnh cao</b></p>\r\n<p>Trong thời đại Internet kết nối toàn cầu, thế giới có quá nhiều điều mới và tiếng Anh được coi như một công cụ giúp chúng ta vươn tới thế giới rộng lớn đó. Thế nhưng hiện nay nhiều bạn vẫn không thể đọc, viết và giao tiếp được tiếng Anh cơ bản.</p>\r\n<p>Bạn muốn giỏi tiếng Anh để nhận được nhiều cơ hội tốt trong cả học tập lẫn công việc như du học, thăng chức, cơ hội làm việc ở các công ty nước ngoài với mức lương nghìn đô,… Bạn thấy tiếng Anh rất cần thiết với cuộc sống nhưng bạn lại đang gặp phải quá nhiều trở ngại trước thứ tiếng này.</p>\r\n<p><b>Tại sao bạn không thể chinh phục thành công ngôn ngữ này?</b></p>\r\n<p><b>Bạn đang không tự tin vào bản thân</b></p>\r\n<p>Trong việc học tiếng Anh những trải nghiệm của bạn từ ngày bạn học ngôn ngữ mới này là gì? Liệu có phải là: Khó nhớ từ vựng, khó thuộc ngữ pháp, các bạn bè của bạn cũng nói như vậy, bạn từng bị thầy cô cho điểm kém, bạn bè chê cười khi bạn nói tiếng Anh sai. Tất cả những trải nghiệm này làm cho bạn dần dần hình thành niềm tin tiêu cực và giới hạn khiến bạn không thể giỏi tiếng Anh.</p>\r\n<p><b>Bạn đã thử nhiều phương pháp học nhưng vẫn thấy không hiệu quả, bạn đang dần chán nản với tiếng Anh</b></p>\r\n<p>Khi học tiếng Anh rất nhiều suy nghĩ tiêu cực hiện lên trong đầu bạn, ví dụ như: “Cách học này chắc là không hiệu quả với mình”, Mấy cái câu này khó học thế nhỉ”,… những suy nghĩ này cứ hiện lên liên tục trong đầu bạn như thôi thúc bạn từ bỏ môn ngoại ngữ này. Bạn muốn xóa bỏ những suy nghĩ đó nhưng vẫn chưa tìm được phương pháp giải quyết vấn đề.</p>\r\n<p><b>Bạn không thể tập trung tâm trí cho việc học</b></p>\r\n<p>Trong con người bạn luôn có nhiều băn khoăn, lâu ngày bị ứ đọng dồn lại và làm bạn chán nản với tiếng Anh. Nội tâm bạn có nhiều xung đột, ví dụ như xung đột về phương pháp học tập:”Nên học theo phương pháp của thầy này hay nên học theo phương pháp của cô kia”,… Những xung đột này làm bạn phải tốn nhiều thời gian để tìm ra con đường, tìm ra giải pháp cho chính mình. Nếu bạn cứ mãi vướng vào mớ bòng bong đó việc học tiếng Anh của bạn sẽ chằng đi đến đâu.</p>\r\n<p><b>Vậy làm thế nào để có thể xóa bỏ được những rào cản này trong quá trình học tiếng Anh của bạn. Hãy để “Chinh phục tiếng Anh bằng NLP” giúp bạn làm điều đó.</b></p>\r\n<p><b>Giới thiệu tới bạn đọc phương pháp học tiếng Anh bằng NLP</b></p>\r\n<p>Nếu bạn đã quá nhàm chán với các phương pháp học tiếng Anh thông thường thì hãy thử ngay với phương pháp NLP. NLP là môn khoa học đỉnh cao đúc rút các bài học kinh nghiệm thành công, các chiến lược thiên tài của nhóm 0.7% xuất chúng nhất hành tinh. Đây là môn khoa học dành cho những ai muốn có một cuốn sách phi thường. Trong thời gian không xa NLP sẽ phát triển rất mạnh vì ai cũng cần nó để giúp cho cuộc sống của mình. NLP có thể ứng dụng vào học rất nhiều thứ, đặc biệt là tiếng Anh. Khi nắm được bí mật học tiếng Anh bằng NLP, bạn đang có chìa khóa mở ra cánh cửa học tập với tư duy của những người xuất chúng.</p>\r\n<p><b>Khơi dậy sức mạnh tiềm thức khi chinh phục tiếng Anh</b></p>\r\n<p>So với học tiếng Anh bị động, học tiếng Anh bằng tiềm thức giúp người học ghi nhớ kiến thức sâu và lâu hơn. Sở hữu cuốn sách là bạn đang sở hữu phương pháp đánh thức tiềm năng tiếng Anh trong con người bạn chính là NLP. Với những kỹ thuật học tiếng Anh siêu Việt sẽ giúp bạn chinh phục thành công môn ngoại ngữ này.</p>\r\n<p><b>Truyền cảm hứng học tập qua các câu chuyện thành công</b></p>\r\n<p>Muốn thành công hãy chăm chỉ học hỏi kinh nghiệm từ những con người thành công. Cuốn sách mang đến cho bạn những câu chuyện học tiếng Anh thành công. Việc áp dụng kĩ thuật mô phỏng trong học tiếng Anh sẽ giúp bạn trở thành người học tiếng Anh đỉnh cao.</p>\r\n<p><b>Học cùng ứng dụng MCBooks</b></p>\r\n<p>Sở hữu cuốn sách của MCBooks, các em sẽ được trải nghiệm hệ sinh thái học ngoại ngữ lần đầu tiên xuất hiện tại Việt Nam. Tổ hợp công nghệ với các tính năng đột phá, tiên phong mang đến cho bạn phong cách học ngoại ngữ đỉnh cao. Với cuốn sách này phụ huynh sẽ đơn giản hơn trong việc kèm cặp phần nghe tiếng Anh cho con.</p>\r\n<ul>\r\n<li>Các em có thể học mọi lúc, mọi nơi</li>\r\n<li>Lựa chọn bài nghe linh hoạt, tiện dụng</li>\r\n<li>Nghe lặp bài thông minh, lần đầu tiên xuất hiện</li>\r\n<li>Học sâu, nhớ lâu, ôn tập dễ dàng</li>\r\n</ul>\r\n<p>Các bài tập luyện nghe các bạn có thể xem đáp án ở phần cuối của sách, hãy làm đi làm lại bài tập nhiều lần để có thể nâng cao trình độ nhé.</p>\r\n<p><b>Quà tặng học tập bổ ích</b></p>\r\n<p>Sở hữu cuốn sách các bạn không chỉ học được nhiều kiến thức bổ ích mà còn nhận được nhiều quà tặng hỗ trợ việc học tiếng Anh như:</p>\r\n<ul>\r\n<li>Voucher giảm giá 35% trị giá lên đến 3.700.000 đồng dành cho khóa học Champion tại Học viện Anh Ngữ Quốc tế Lepoca</li>\r\n<li>Khóa học trải nghiệm 1 ngày tại Học viện Anh Ngữ Quốc tế Lepoca</li>\r\n<li>Ebook và Video – vận dụng 5 giác quan học qua phim.</li>\r\n</ul>\r\n<p>Với cuốn sách này bạn sẽ được tiếp cận một phương pháp học tiếng Anh mới hoàn toàn, nó tác động trực tiếp vào suy nghĩ của bạn, giúp bạn học tiếng Anh một cách chủ động hơn. Đừng bỏ lỡ cơ hội sở hữu cuốn sách giá trị này, hãy mua ngay nó càng sớm càng tốt để nâng trình độ tiếng Anh của bạn lên một tầm cao mới.</p>', '222.jpg', 'TL001', 'TG001', '001', 0, 200000, '2020-06-29', 'Với lối viết dễ hiểu, đúc kết từ kinh nghiệm thực tế của tác giả sẽ giúp các bạn độc giả hoàn toàn có thể tự học tiếng Anh dễ dàng với cuốn sách này', 'No'),
('S003', 'Chiến Thuật Ôn Tập Ngữ Văn ôn thi lớp 10', 10, '<p><b>Chinh phục tiếng Anh bằng NLP</b></p>\r\n<p><b>Chinh phục tiếng Anh bằng NLP – </b><b>Bật mí phương pháp học tiếng Anh đỉnh cao</b></p>\r\n<p>Trong thời đại Internet kết nối toàn cầu, thế giới có quá nhiều điều mới và tiếng Anh được coi như một công cụ giúp chúng ta vươn tới thế giới rộng lớn đó. Thế nhưng hiện nay nhiều bạn vẫn không thể đọc, viết và giao tiếp được tiếng Anh cơ bản.</p>\r\n<p>Bạn muốn giỏi tiếng Anh để nhận được nhiều cơ hội tốt trong cả học tập lẫn công việc như du học, thăng chức, cơ hội làm việc ở các công ty nước ngoài với mức lương nghìn đô,… Bạn thấy tiếng Anh rất cần thiết với cuộc sống nhưng bạn lại đang gặp phải quá nhiều trở ngại trước thứ tiếng này.</p>\r\n<p><b>Tại sao bạn không thể chinh phục thành công ngôn ngữ này?</b></p>\r\n<p><b>Bạn đang không tự tin vào bản thân</b></p>\r\n<p>Trong việc học tiếng Anh những trải nghiệm của bạn từ ngày bạn học ngôn ngữ mới này là gì? Liệu có phải là: Khó nhớ từ vựng, khó thuộc ngữ pháp, các bạn bè của bạn cũng nói như vậy, bạn từng bị thầy cô cho điểm kém, bạn bè chê cười khi bạn nói tiếng Anh sai. Tất cả những trải nghiệm này làm cho bạn dần dần hình thành niềm tin tiêu cực và giới hạn khiến bạn không thể giỏi tiếng Anh.</p>\r\n<p><b>Bạn đã thử nhiều phương pháp học nhưng vẫn thấy không hiệu quả, bạn đang dần chán nản với tiếng Anh</b></p>\r\n<p>Khi học tiếng Anh rất nhiều suy nghĩ tiêu cực hiện lên trong đầu bạn, ví dụ như: “Cách học này chắc là không hiệu quả với mình”, Mấy cái câu này khó học thế nhỉ”,… những suy nghĩ này cứ hiện lên liên tục trong đầu bạn như thôi thúc bạn từ bỏ môn ngoại ngữ này. Bạn muốn xóa bỏ những suy nghĩ đó nhưng vẫn chưa tìm được phương pháp giải quyết vấn đề.</p>\r\n<p><b>Bạn không thể tập trung tâm trí cho việc học</b></p>\r\n<p>Trong con người bạn luôn có nhiều băn khoăn, lâu ngày bị ứ đọng dồn lại và làm bạn chán nản với tiếng Anh. Nội tâm bạn có nhiều xung đột, ví dụ như xung đột về phương pháp học tập:”Nên học theo phương pháp của thầy này hay nên học theo phương pháp của cô kia”,… Những xung đột này làm bạn phải tốn nhiều thời gian để tìm ra con đường, tìm ra giải pháp cho chính mình. Nếu bạn cứ mãi vướng vào mớ bòng bong đó việc học tiếng Anh của bạn sẽ chằng đi đến đâu.</p>\r\n<p><b>Vậy làm thế nào để có thể xóa bỏ được những rào cản này trong quá trình học tiếng Anh của bạn. Hãy để “Chinh phục tiếng Anh bằng NLP” giúp bạn làm điều đó.</b></p>\r\n<p><b>Giới thiệu tới bạn đọc phương pháp học tiếng Anh bằng NLP</b></p>\r\n<p>Nếu bạn đã quá nhàm chán với các phương pháp học tiếng Anh thông thường thì hãy thử ngay với phương pháp NLP. NLP là môn khoa học đỉnh cao đúc rút các bài học kinh nghiệm thành công, các chiến lược thiên tài của nhóm 0.7% xuất chúng nhất hành tinh. Đây là môn khoa học dành cho những ai muốn có một cuốn sách phi thường. Trong thời gian không xa NLP sẽ phát triển rất mạnh vì ai cũng cần nó để giúp cho cuộc sống của mình. NLP có thể ứng dụng vào học rất nhiều thứ, đặc biệt là tiếng Anh. Khi nắm được bí mật học tiếng Anh bằng NLP, bạn đang có chìa khóa mở ra cánh cửa học tập với tư duy của những người xuất chúng.</p>\r\n<p><b>Khơi dậy sức mạnh tiềm thức khi chinh phục tiếng Anh</b></p>\r\n<p>So với học tiếng Anh bị động, học tiếng Anh bằng tiềm thức giúp người học ghi nhớ kiến thức sâu và lâu hơn. Sở hữu cuốn sách là bạn đang sở hữu phương pháp đánh thức tiềm năng tiếng Anh trong con người bạn chính là NLP. Với những kỹ thuật học tiếng Anh siêu Việt sẽ giúp bạn chinh phục thành công môn ngoại ngữ này.</p>\r\n<p><b>Truyền cảm hứng học tập qua các câu chuyện thành công</b></p>\r\n<p>Muốn thành công hãy chăm chỉ học hỏi kinh nghiệm từ những con người thành công. Cuốn sách mang đến cho bạn những câu chuyện học tiếng Anh thành công. Việc áp dụng kĩ thuật mô phỏng trong học tiếng Anh sẽ giúp bạn trở thành người học tiếng Anh đỉnh cao.</p>\r\n<p><b>Học cùng ứng dụng MCBooks</b></p>\r\n<p>Sở hữu cuốn sách của MCBooks, các em sẽ được trải nghiệm hệ sinh thái học ngoại ngữ lần đầu tiên xuất hiện tại Việt Nam. Tổ hợp công nghệ với các tính năng đột phá, tiên phong mang đến cho bạn phong cách học ngoại ngữ đỉnh cao. Với cuốn sách này phụ huynh sẽ đơn giản hơn trong việc kèm cặp phần nghe tiếng Anh cho con.</p>\r\n<ul>\r\n<li>Các em có thể học mọi lúc, mọi nơi</li>\r\n<li>Lựa chọn bài nghe linh hoạt, tiện dụng</li>\r\n<li>Nghe lặp bài thông minh, lần đầu tiên xuất hiện</li>\r\n<li>Học sâu, nhớ lâu, ôn tập dễ dàng</li>\r\n</ul>\r\n<p>Các bài tập luyện nghe các bạn có thể xem đáp án ở phần cuối của sách, hãy làm đi làm lại bài tập nhiều lần để có thể nâng cao trình độ nhé.</p>\r\n<p><b>Quà tặng học tập bổ ích</b></p>\r\n<p>Sở hữu cuốn sách các bạn không chỉ học được nhiều kiến thức bổ ích mà còn nhận được nhiều quà tặng hỗ trợ việc học tiếng Anh như:</p>\r\n<ul>\r\n<li>Voucher giảm giá 35% trị giá lên đến 3.700.000 đồng dành cho khóa học Champion tại Học viện Anh Ngữ Quốc tế Lepoca</li>\r\n<li>Khóa học trải nghiệm 1 ngày tại Học viện Anh Ngữ Quốc tế Lepoca</li>\r\n<li>Ebook và Video – vận dụng 5 giác quan học qua phim.</li>\r\n</ul>\r\n<p>Với cuốn sách này bạn sẽ được tiếp cận một phương pháp học tiếng Anh mới hoàn toàn, nó tác động trực tiếp vào suy nghĩ của bạn, giúp bạn học tiếng Anh một cách chủ động hơn. Đừng bỏ lỡ cơ hội sở hữu cuốn sách giá trị này, hãy mua ngay nó càng sớm càng tốt để nâng trình độ tiếng Anh của bạn lên một tầm cao mới.</p>', '333.png', 'TL002', 'TG002', '001', 0, 99000, '2020-06-29', 'Với lối viết dễ hiểu, đúc kết từ kinh nghiệm thực tế của tác giả sẽ giúp các bạn độc giả hoàn toàn có thể tự học tiếng Anh dễ dàng với cuốn sách này', 'No'),
('S004', 'Luyện Giải Đề Thi Vào Lớp 10 Môn Toán', 10, '<p><b>Chinh phục tiếng Anh bằng NLP</b></p>\r\n<p><b>Chinh phục tiếng Anh bằng NLP – </b><b>Bật mí phương pháp học tiếng Anh đỉnh cao</b></p>\r\n<p>Trong thời đại Internet kết nối toàn cầu, thế giới có quá nhiều điều mới và tiếng Anh được coi như một công cụ giúp chúng ta vươn tới thế giới rộng lớn đó. Thế nhưng hiện nay nhiều bạn vẫn không thể đọc, viết và giao tiếp được tiếng Anh cơ bản.</p>\r\n<p>Bạn muốn giỏi tiếng Anh để nhận được nhiều cơ hội tốt trong cả học tập lẫn công việc như du học, thăng chức, cơ hội làm việc ở các công ty nước ngoài với mức lương nghìn đô,… Bạn thấy tiếng Anh rất cần thiết với cuộc sống nhưng bạn lại đang gặp phải quá nhiều trở ngại trước thứ tiếng này.</p>\r\n<p><b>Tại sao bạn không thể chinh phục thành công ngôn ngữ này?</b></p>\r\n<p><b>Bạn đang không tự tin vào bản thân</b></p>\r\n<p>Trong việc học tiếng Anh những trải nghiệm của bạn từ ngày bạn học ngôn ngữ mới này là gì? Liệu có phải là: Khó nhớ từ vựng, khó thuộc ngữ pháp, các bạn bè của bạn cũng nói như vậy, bạn từng bị thầy cô cho điểm kém, bạn bè chê cười khi bạn nói tiếng Anh sai. Tất cả những trải nghiệm này làm cho bạn dần dần hình thành niềm tin tiêu cực và giới hạn khiến bạn không thể giỏi tiếng Anh.</p>\r\n<p><b>Bạn đã thử nhiều phương pháp học nhưng vẫn thấy không hiệu quả, bạn đang dần chán nản với tiếng Anh</b></p>\r\n<p>Khi học tiếng Anh rất nhiều suy nghĩ tiêu cực hiện lên trong đầu bạn, ví dụ như: “Cách học này chắc là không hiệu quả với mình”, Mấy cái câu này khó học thế nhỉ”,… những suy nghĩ này cứ hiện lên liên tục trong đầu bạn như thôi thúc bạn từ bỏ môn ngoại ngữ này. Bạn muốn xóa bỏ những suy nghĩ đó nhưng vẫn chưa tìm được phương pháp giải quyết vấn đề.</p>\r\n<p><b>Bạn không thể tập trung tâm trí cho việc học</b></p>\r\n<p>Trong con người bạn luôn có nhiều băn khoăn, lâu ngày bị ứ đọng dồn lại và làm bạn chán nản với tiếng Anh. Nội tâm bạn có nhiều xung đột, ví dụ như xung đột về phương pháp học tập:”Nên học theo phương pháp của thầy này hay nên học theo phương pháp của cô kia”,… Những xung đột này làm bạn phải tốn nhiều thời gian để tìm ra con đường, tìm ra giải pháp cho chính mình. Nếu bạn cứ mãi vướng vào mớ bòng bong đó việc học tiếng Anh của bạn sẽ chằng đi đến đâu.</p>\r\n<p><b>Vậy làm thế nào để có thể xóa bỏ được những rào cản này trong quá trình học tiếng Anh của bạn. Hãy để “Chinh phục tiếng Anh bằng NLP” giúp bạn làm điều đó.</b></p>\r\n<p><b>Giới thiệu tới bạn đọc phương pháp học tiếng Anh bằng NLP</b></p>\r\n<p>Nếu bạn đã quá nhàm chán với các phương pháp học tiếng Anh thông thường thì hãy thử ngay với phương pháp NLP. NLP là môn khoa học đỉnh cao đúc rút các bài học kinh nghiệm thành công, các chiến lược thiên tài của nhóm 0.7% xuất chúng nhất hành tinh. Đây là môn khoa học dành cho những ai muốn có một cuốn sách phi thường. Trong thời gian không xa NLP sẽ phát triển rất mạnh vì ai cũng cần nó để giúp cho cuộc sống của mình. NLP có thể ứng dụng vào học rất nhiều thứ, đặc biệt là tiếng Anh. Khi nắm được bí mật học tiếng Anh bằng NLP, bạn đang có chìa khóa mở ra cánh cửa học tập với tư duy của những người xuất chúng.</p>\r\n<p><b>Khơi dậy sức mạnh tiềm thức khi chinh phục tiếng Anh</b></p>\r\n<p>So với học tiếng Anh bị động, học tiếng Anh bằng tiềm thức giúp người học ghi nhớ kiến thức sâu và lâu hơn. Sở hữu cuốn sách là bạn đang sở hữu phương pháp đánh thức tiềm năng tiếng Anh trong con người bạn chính là NLP. Với những kỹ thuật học tiếng Anh siêu Việt sẽ giúp bạn chinh phục thành công môn ngoại ngữ này.</p>\r\n<p><b>Truyền cảm hứng học tập qua các câu chuyện thành công</b></p>\r\n<p>Muốn thành công hãy chăm chỉ học hỏi kinh nghiệm từ những con người thành công. Cuốn sách mang đến cho bạn những câu chuyện học tiếng Anh thành công. Việc áp dụng kĩ thuật mô phỏng trong học tiếng Anh sẽ giúp bạn trở thành người học tiếng Anh đỉnh cao.</p>\r\n<p><b>Học cùng ứng dụng MCBooks</b></p>\r\n<p>Sở hữu cuốn sách của MCBooks, các em sẽ được trải nghiệm hệ sinh thái học ngoại ngữ lần đầu tiên xuất hiện tại Việt Nam. Tổ hợp công nghệ với các tính năng đột phá, tiên phong mang đến cho bạn phong cách học ngoại ngữ đỉnh cao. Với cuốn sách này phụ huynh sẽ đơn giản hơn trong việc kèm cặp phần nghe tiếng Anh cho con.</p>\r\n<ul>\r\n<li>Các em có thể học mọi lúc, mọi nơi</li>\r\n<li>Lựa chọn bài nghe linh hoạt, tiện dụng</li>\r\n<li>Nghe lặp bài thông minh, lần đầu tiên xuất hiện</li>\r\n<li>Học sâu, nhớ lâu, ôn tập dễ dàng</li>\r\n</ul>\r\n<p>Các bài tập luyện nghe các bạn có thể xem đáp án ở phần cuối của sách, hãy làm đi làm lại bài tập nhiều lần để có thể nâng cao trình độ nhé.</p>\r\n<p><b>Quà tặng học tập bổ ích</b></p>\r\n<p>Sở hữu cuốn sách các bạn không chỉ học được nhiều kiến thức bổ ích mà còn nhận được nhiều quà tặng hỗ trợ việc học tiếng Anh như:</p>\r\n<ul>\r\n<li>Voucher giảm giá 35% trị giá lên đến 3.700.000 đồng dành cho khóa học Champion tại Học viện Anh Ngữ Quốc tế Lepoca</li>\r\n<li>Khóa học trải nghiệm 1 ngày tại Học viện Anh Ngữ Quốc tế Lepoca</li>\r\n<li>Ebook và Video – vận dụng 5 giác quan học qua phim.</li>\r\n</ul>\r\n<p>Với cuốn sách này bạn sẽ được tiếp cận một phương pháp học tiếng Anh mới hoàn toàn, nó tác động trực tiếp vào suy nghĩ của bạn, giúp bạn học tiếng Anh một cách chủ động hơn. Đừng bỏ lỡ cơ hội sở hữu cuốn sách giá trị này, hãy mua ngay nó càng sớm càng tốt để nâng trình độ tiếng Anh của bạn lên một tầm cao mới.</p>', '444.jpg', 'TL002', 'TG003', '001', 0, 150000, '2020-06-29', 'Với lối viết dễ hiểu, đúc kết từ kinh nghiệm thực tế của tác giả sẽ giúp các bạn độc giả hoàn toàn có thể tự học tiếng Anh dễ dàng với cuốn sách này', 'No');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE IF NOT EXISTS `slideshow` (
  `MaHinh` int(11) NOT NULL AUTO_INCREMENT,
  `TenHinh` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaHinh`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slideshow`
--

INSERT INTO `slideshow` (`MaHinh`, `TenHinh`) VALUES
(1, 'slideshow3.jpg'),
(2, 'slideshow4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

DROP TABLE IF EXISTS `tacgia`;
CREATE TABLE IF NOT EXISTS `tacgia` (
  `MaTG` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `TenTG` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LienLac` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TrangThai` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  PRIMARY KEY (`MaTG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tacgia`
--

INSERT INTO `tacgia` (`MaTG`, `TenTG`, `LienLac`, `TrangThai`) VALUES
('TG001', 'Trịnh Thị Ngọc Thuý', '0000', 'No'),
('TG002', 'Trịnh Quang Quỳnh', '0000', 'No'),
('TG003', 'Nguyễn Xuân Nam', '0000', 'No');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

DROP TABLE IF EXISTS `taikhoan`;
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `TenTK` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `Code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Quyen` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TrangThai` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `HienTrang` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `KichHoat` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes',
  PRIMARY KEY (`TenTK`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`TenTK`, `MatKhau`, `Code`, `Quyen`, `TrangThai`, `HienTrang`, `KichHoat`) VALUES
('admin', 'admin', NULL, 'QuanTri', 'No', 'No', 'Yes'),
('asdasds@gmail.com', '123', NULL, 'KH', 'No', 'No', 'Yes'),
('hoangphuc', '123', NULL, 'KH', 'No', 'No', 'Yes'),
('hoangphuc@gmail.com', '123', NULL, 'KH', 'No', 'No', 'Yes'),
('phamhoangphuc00666@gmail.com', '123', '1pnkzmj', 'KH', 'No', 'Yes', 'Yes'),
('phamhoangphuc8899@gmail.com', '123', 'zjp71cs', 'KH', 'No', 'No', 'Yes'),
('phuquy', '123', NULL, 'KH', 'No', 'No', 'Yes'),
('phuquy@gmail.com', '123', NULL, 'KH', 'No', 'No', 'Yes'),
('phuquy1@gmail.com', '123', NULL, 'KH', 'No', 'No', 'Yes'),
('phuquy2@gmail.com', '123', NULL, 'KH', 'No', 'No', 'Yes');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

DROP TABLE IF EXISTS `theloai`;
CREATE TABLE IF NOT EXISTS `theloai` (
  `MaTL` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `TenTL` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TrangThai` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  PRIMARY KEY (`MaTL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`MaTL`, `TenTL`, `TrangThai`) VALUES
('TL001', 'Ngoại Văn', 'No'),
('TL002', 'Luyện Thi', 'No');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`TenTK`) REFERENCES `taikhoan` (`TenTK`);

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`MaSach`) REFERENCES `sach` (`MaSach`);

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaSach`) REFERENCES `sach` (`MaSach`);

--
-- Các ràng buộc cho bảng `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD CONSTRAINT `chitietphieunhap_ibfk_1` FOREIGN KEY (`MaSach`) REFERENCES `sach` (`MaSach`),
  ADD CONSTRAINT `chitietphieunhap_ibfk_2` FOREIGN KEY (`SoPN`) REFERENCES `phieunhap` (`SoPN`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`TenTK`) REFERENCES `taikhoan` (`TenTK`);

--
-- Các ràng buộc cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_ibfk_1` FOREIGN KEY (`MaNXB`) REFERENCES `nhaxuatban` (`MaNXB`);

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`MaTG`) REFERENCES `tacgia` (`MaTG`),
  ADD CONSTRAINT `sach_ibfk_2` FOREIGN KEY (`MaTL`) REFERENCES `theloai` (`MaTL`),
  ADD CONSTRAINT `sach_ibfk_3` FOREIGN KEY (`MaNXB`) REFERENCES `nhaxuatban` (`MaNXB`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
