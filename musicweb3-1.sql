-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 16, 2023 lúc 12:49 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `musicweb3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `album`
--

CREATE TABLE `album` (
  `albumID` int(11) NOT NULL,
  `artistID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `album`
--

INSERT INTO `album` (`albumID`, `artistID`, `Name`, `img`, `description`) VALUES
(1, 1, 'm-tp M-TP', './public/img/album/22.jpg', 'm-tp M-TP là album tuyển tập đầu tay của nam ca sĩ Sơn Tùng M-TP, được phát hành ngày 1 tháng 4 năm 2017 bởi M-TP Entertainment.'),
(2, 2, '22', './public/img/album/22.jpg', 'Đây là Album đầu tay của MONO, gồm 11 tracks với 8 bài hát do chính MONO sáng tác, kể câu chuyện về quá trình thay đổi, trưởng thành của một chàng trai trong tình yêu. Con số 22 cũng tượng trưng cho sự “mãi mãi”.'),
(3, 6, 'SEE SING SHARE 1', './public/img/album/share1.jpg', NULL),
(4, 6, 'SEE SING SHARE 2', './public/img/album/share2.jpg', NULL),
(5, 7, 'Hoàng', './public/img/album/Hoang.jpg', 'Hoàng là album phòng thu thứ ba của nữ ca sĩ Việt Nam Hoàng Thùy Linh được phát hành bởi Hãng đĩa Thời Đại và Sony Music Entertainment vào ngày 20 tháng 10 năm 2019.'),
(6, 7, 'Link', './public/img/album/LINK.jpg', 'LINK - album mới của Hoàng Thùy Linh - hội tủ những yếu tố mới lạ, độc đáo, thể hiện tính sáng tạo và sự thay đổi của nữ ca sĩ.');
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `album_songs`
--

CREATE TABLE `album_songs` (
  `albumID` int(11) NOT NULL,
  `songID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `album_songs`
--

INSERT INTO `album_songs` (`albumID`, `songID`) VALUES
(1, 2),
(2, 4),
(2, 5),
(2, 6),
(3, 18),
(4, 16),
(5, 19),
(5, 20),
(6, 21);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `artist`
--

CREATE TABLE `artist` (
  `artistID` int(11) NOT NULL,
  `artistName` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `artist`
--

INSERT INTO `artist` (`artistID`, `artistName`, `description`, `img`) VALUES
(1, 'Sơn Tùng M-TP', 'Nguyễn Thanh Tùng, thường được biết đến với nghệ danh Sơn Tùng M-TP, là một nam ca sĩ kiêm sáng tác nhạc, rapper và diễn viên người Việt Nam.', './public/img/artist/SonTungMTP.jpg'),
(2, 'Mono', 'Nguyễn Việt Hoàng, thường được biết đến với nghệ danh Mono, là một nam ca sĩ kiêm sáng tác nhạc người Việt Nam, sinh ra và lớn lên tại tỉnh Thái Bình.', './public/img/artist/Mono.jpg'),
(3, 'Đen Vâu', 'Nguyễn Đức Cường, thường được biết đến với nghệ danh Đen Vâu hay Đen, là một nam rapper và nhạc sĩ người Việt Nam.', './public/img/artist/DenVau.jpg'),
(4, 'JustaTee', 'Nguyễn Thanh Tuấn, thường được biết đến với nghệ danh JustaTee hay JayTee là một nam rapper R&B, ca sĩ kiêm sáng tác nhạc hàng đầu người Việt Nam.', './public/img/artist/JustaTee.jpg'),
(5, 'Karik', 'Phạm Hoàng Khoa thường được biết đến với nghệ danh Karik, là một rapper, nhạc sĩ chuyên nghiệp người Việt Nam.', './public/img/artist/Karik.jpg'),
(6, 'Hà Anh Tuấn', 'Hà Anh Tuấn là một nam ca sĩ người Việt Nam. Anh từng giành được 13 đề cử và 2 lần đoạt giải Cống hiến.', './public/img/artist/HaAnhTuan.jpg'),
(7, 'Hoàng Thùy Linh', 'Hoàng Thùy Linh là một nữ ca sĩ, diễn viên, người mẫu kiêm người dẫn chương trình người Việt Nam.', './public/img/artist/HoangThuyLinh.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`categoryID`, `name`, `img`) VALUES
(1, 'pop', './public/img/category/pop.png'),
(2, 'hip hop', './public/img/category/hiphop.jpg'),
(3, 'r&b', './public/img/category/r&b.png'),
(4, 'edm', './public/img/category/edm.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_songs`
--

CREATE TABLE `category_songs` (
  `categoryID` int(11) NOT NULL,
  `songID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `langs`
--

CREATE TABLE `langs` (
  `languageID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `LangCode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `langs`
--

INSERT INTO `langs` (`languageID`, `Name`, `LangCode`) VALUES
(1, 'vietnamese', 'vi'),
(2, 'eng', 'eng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `playlist`
--

CREATE TABLE `playlist` (
  `playlistID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `playlist`
--

INSERT INTO `playlist` (`playlistID`, `userID`, `name`) VALUES
(1, 1, 'playlist_u1'),
(2, 1, 'playlist_u2'),
(3, 2, 'playlist_2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `playlists_songs`
--

CREATE TABLE `playlists_songs` (
  `ID` int(11) NOT NULL,
  `playlistID` int(11) DEFAULT NULL,
  `songID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `song`
--

CREATE TABLE `song` (
  `songID` int(11) NOT NULL,
  `artistID` int(11) NOT NULL,
  `albumID` int(11) DEFAULT NULL,
  `playlistID` int(11) DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `songName` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `lyrics` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `song`
--

INSERT INTO `song` (`songID`, `artistID`, `albumID`, `playlistID`, `categoryID`, `link`, `songName`, `duration`, `lyrics`, `img`) VALUES

(1, 1, NULL, NULL, 1, './public/songs/STMuonRoi.mp3', 'Muộn rồi mà sao còn', 276, NULL, './public/img/songs/STMuonRoi.jpg'),
(2, 1, NULL, NULL, 1, './public/songs/STChungTa.mp3', 'Chúng ta không thuộc về nhau', 233, NULL, './public/img/songs/STChungTa.jpg'),
(3, 1, NULL, NULL, 2, './public/songs/STHayTraoChoAnh.mp3', 'Hãy trao cho anh', 246, NULL, './public/img/songs/STHayTraoChoAnh.jpg'),
(4, 2, NULL, NULL, 3, './public/songs/MEmLa.mp3', 'Em là', 197, NULL, './public/img/songs/MEmLa.jpg'),
(5, 2, NULL, NULL, 2, './public/songs/MKillMe.mp3', 'Kill me', 229, NULL, './public/img/songs/MKillMe.jpg'),
(6, 2, NULL, NULL, 4, './public/songs/MWaiting.mp3', 'Waiting for you', 264, NULL, './public/img/songs/MWaiting.jpg'),
(7, 3, NULL, NULL, 2, './public/songs/DVLuonYeuDoi.mp3', 'Luôn yêu đời', 234, NULL, './public/img/songs/DVLuonYeuDoi.jpg'),
(8, 3, NULL, NULL, 2, './public/songs/DVNgayKhacLa.mp3', 'Ngày khác lạ', 212, NULL, './public/img/songs/DVNgayKhacLa.jpg'),
(9, 3, NULL, NULL, 2, './public/songs/DVThu.mp3', 'Thu', 259, NULL, './public/img/songs/DVThu.jpg'),
(10, 4, NULL, NULL, 3, './public/songs/JDaLoYeu.mp3', 'Đã lỡ yêu em nhiều', 261, NULL, './public/img/songs/JDaLoYeu.jpg'),
(11, 4, NULL, NULL, 2, './public/songs/JForeverAlone.mp3', 'Forever Alone', 327, NULL, './public/img/songs/JForeverAlone.jpg'),
(12, 4, NULL, NULL, 3, './public/songs/JThangDien.mp3', 'Thằng điên', 272, NULL, './public/img/songs/JThangDien.jpg'),
(13, 5, NULL, NULL, 2, './public/songs/KAnhKhongDoiQua.mp3', 'Anh không đòi quà', 167, NULL, './public/img/songs/KAnhKhongDoiQua.jpg'),
(14, 5, NULL, NULL, 2, './public/songs/KViMeAnh.mp3', 'Vì mẹ anh bắt chia tay', 262, NULL, './public/img/songs/KViMeAnh.jpg'),
(15, 5, NULL, NULL, 2, './public/songs/KNguoiLaOi.mp3', 'Người lạ ơi', 307, NULL, './public/img/songs/KNguoiLaOi.jpeg'),
(16, 6, NULL, NULL, 1, './public/songs/HATNguoiTinh.mp3', 'Người tình mùa đông', 256, NULL, './public/img/songs/HATNguoiTinh.jpg'),
(17, 6, NULL, NULL, 1, './public/songs/HATThangMay.mp3', 'Tháng mấy em nhớ anh?', 300, NULL, './public/img/songs/HATThangMay.jpg'),
(18, 6, NULL, NULL, 1, './public/songs/HATThangTu.mp3', 'Tháng Tư là lời nói dối của Em', 310, NULL, './public/img/songs/HATThangTu.jpg'),
(19, 7, NULL, NULL, 1, './public/songs/HTLDeMiNoi.mp3', 'Để Mị nói cho mà nghe', 194, NULL, './public/img/songs/HTLDeMiNoi.jpg'),
(20, 7, NULL, NULL, 1, './public/songs/HTLTuPhu.mp3', 'Tứ Phủ', 265, NULL, './public/img/songs/HTLTuPhu.jpg'),
(21, 7, NULL, NULL, 3, './public/songs/HTLSeeTinh.mp3', 'See Tình', 185, NULL, './public/img/songs/HTLSeeTinh.jpg');
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `birth` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`userID`, `username`, `password`, `email`, `gender`, `birth`, `country`, `img`) VALUES
(1, 'haile', '3822', 'lethanhhai586@gmail.com', 'Male', '2002-08-03', 'vietnam', NULL),
(2, 'admin', 'admin', 'admin@sgu.com', 'Male', '0000-00-00', 'england', NULL),
(3, 'nlhn', 'nlhn', 'ngolehuengan@gmail.com', 'Female', '2003-02-17', 'vietnam', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_playlist`
--

CREATE TABLE `user_playlist` (
  `userID` int(11) NOT NULL,
  `playlistID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user_playlist`
--

INSERT INTO `user_playlist` (`userID`, `playlistID`) VALUES
(1, 1),
(1, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`albumID`),
  ADD KEY `artistID` (`artistID`);

--
-- Chỉ mục cho bảng `album_songs`
--
ALTER TABLE `album_songs`
  ADD PRIMARY KEY (`albumID`,`songID`),
  ADD KEY `songID` (`songID`);

--
-- Chỉ mục cho bảng `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artistID`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Chỉ mục cho bảng `category_songs`
--
ALTER TABLE `category_songs`
  ADD PRIMARY KEY (`categoryID`,`songID`),
  ADD KEY `songID` (`songID`);

--
-- Chỉ mục cho bảng `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`languageID`);

--
-- Chỉ mục cho bảng `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`playlistID`);

--
-- Chỉ mục cho bảng `playlists_songs`
--
ALTER TABLE `playlists_songs`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `playlistID` (`playlistID`),
  ADD KEY `songID` (`songID`);

--
-- Chỉ mục cho bảng `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`songID`),
  ADD KEY `artistID` (`artistID`),
  ADD KEY `albumID` (`albumID`),
  ADD KEY `playlistID` (`playlistID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Chỉ mục cho bảng `user_playlist`
--
ALTER TABLE `user_playlist`
  ADD PRIMARY KEY (`userID`,`playlistID`),
  ADD KEY `playlistID` (`playlistID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `album`
--
ALTER TABLE `album`
  MODIFY `albumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `artist`
--
ALTER TABLE `artist`
  MODIFY `artistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `langs`
--
ALTER TABLE `langs`
  MODIFY `languageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `playlist`
--
ALTER TABLE `playlist`
  MODIFY `playlistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `playlists_songs`
--
ALTER TABLE `playlists_songs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `song`
--
ALTER TABLE `song`
  MODIFY `songID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`artistID`) REFERENCES `artist` (`artistID`),
  ADD CONSTRAINT `album_ibfk_2` FOREIGN KEY (`artistID`) REFERENCES `artist` (`artistID`);

--
-- Các ràng buộc cho bảng `album_songs`
--
ALTER TABLE `album_songs`
  ADD CONSTRAINT `album_songs_ibfk_1` FOREIGN KEY (`albumID`) REFERENCES `album` (`albumID`),
  ADD CONSTRAINT `album_songs_ibfk_2` FOREIGN KEY (`songID`) REFERENCES `song` (`songID`);

--
-- Các ràng buộc cho bảng `category_songs`
--
ALTER TABLE `category_songs`
  ADD CONSTRAINT `category_songs_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`),
  ADD CONSTRAINT `category_songs_ibfk_2` FOREIGN KEY (`songID`) REFERENCES `song` (`songID`);

--
-- Các ràng buộc cho bảng `playlists_songs`
--
ALTER TABLE `playlists_songs`
  ADD CONSTRAINT `playlists_songs_ibfk_1` FOREIGN KEY (`playlistID`) REFERENCES `playlist` (`playlistID`),
  ADD CONSTRAINT `playlists_songs_ibfk_2` FOREIGN KEY (`songID`) REFERENCES `song` (`songID`),
  ADD CONSTRAINT `playlists_songs_ibfk_3` FOREIGN KEY (`playlistID`) REFERENCES `playlist` (`playlistID`),
  ADD CONSTRAINT `playlists_songs_ibfk_4` FOREIGN KEY (`songID`) REFERENCES `song` (`songID`);

--
-- Các ràng buộc cho bảng `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`artistID`) REFERENCES `artist` (`artistID`),
  ADD CONSTRAINT `song_ibfk_2` FOREIGN KEY (`albumID`) REFERENCES `album` (`albumID`),
  ADD CONSTRAINT `song_ibfk_3` FOREIGN KEY (`playlistID`) REFERENCES `playlist` (`playlistID`),
  ADD CONSTRAINT `song_ibfk_4` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`),
  ADD CONSTRAINT `song_ibfk_5` FOREIGN KEY (`artistID`) REFERENCES `artist` (`artistID`),
  ADD CONSTRAINT `song_ibfk_6` FOREIGN KEY (`albumID`) REFERENCES `album` (`albumID`),
  ADD CONSTRAINT `song_ibfk_7` FOREIGN KEY (`playlistID`) REFERENCES `playlist` (`playlistID`),
  ADD CONSTRAINT `song_ibfk_8` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`);

--
-- Các ràng buộc cho bảng `user_playlist`
--
ALTER TABLE `user_playlist`
  ADD CONSTRAINT `user_playlist_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `user_playlist_ibfk_2` FOREIGN KEY (`playlistID`) REFERENCES `playlist` (`playlistID`),
  ADD CONSTRAINT `user_playlist_ibfk_3` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `user_playlist_ibfk_4` FOREIGN KEY (`playlistID`) REFERENCES `playlist` (`playlistID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
