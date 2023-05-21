CREATE DATABASE IF NOT EXISTS `runnerinn` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `runnerinn`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `madonhang` int(11) DEFAULT NULL,
  `masp` int(11) DEFAULT NULL,
  `soluongsp` int(11) DEFAULT NULL,
  `mausac` varchar(256) DEFAULT NULL,
  `kichthuoc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`madonhang`, `masp`, `soluongsp`, `mausac`, `kichthuoc`) VALUES
(972974, 123217, 1, 'Trắng', 38),
(972974, 238934, 1, 'Trắng', 39),
(282983, 238934, 1, 'Trắng', 39),
(282983, 846212, 1, 'Xanh', 37),
(613469, 743027, 1, 'Tím', 37),
(231933, 723041, 1, 'Trắng', 38),
(482769, 182131, 1, 'Xám', 39),
(250524, 846212, 1, 'Xanh', 39),
(753993, 723041, 1, 'Trắng', 37),
(918672, 565467, 1, 'Xanh', 39),
(918672, 464645, 1, 'Xanh', 36);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgiasp`
--

CREATE TABLE `danhgiasp` (
  `madanhgia` int(11) NOT NULL,
  `masp` int(11) DEFAULT NULL,
  `tieude` varchar(50) DEFAULT NULL,
  `noidung` varchar(256) DEFAULT NULL,
  `ngaydanhgia` date DEFAULT NULL,
  `sosao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `madanhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`madanhmuc`, `tendanhmuc`) VALUES
(123, 'Sản phẩm thường'),
(456, 'Sản phẩm mới'),
(567, 'Sản phẩm bán chạy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diachi`
--

CREATE TABLE `diachi` (
  `makhachhang` int(11) DEFAULT NULL,
  `tenduong` varchar(256) DEFAULT NULL,
  `phuong` varchar(256) DEFAULT NULL,
  `quan` varchar(256) DEFAULT NULL,
  `thanhpho` varchar(256) DEFAULT NULL,
  `quocgia` varchar(256) NOT NULL,
  `macdinh` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `diachi`
--

INSERT INTO `diachi` (`makhachhang`, `tenduong`, `phuong`, `quan`, `thanhpho`, `quocgia`, `macdinh`) VALUES
(123456, '9 Nguyễn Văn Cừ', 'Phường 1', 'Quận 5', 'Hồ Chí Minh', 'Việt Nam', 1),
(234567, '9 Nguyễn Văn Cừ', 'Phường 1', 'Quận 5', 'Hồ Chí Minh', 'Việt Nam', 1),
(345678, '9 Nguyễn Văn Cừ', 'Phường 1', 'Quận 5', 'Hồ Chí Minh', 'Việt Nam', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `madonhang` int(11) NOT NULL,
  `tongtien` varchar(256) DEFAULT NULL,
  `ngaydathang` varchar(256) DEFAULT NULL,
  `makhachhang` int(11) DEFAULT NULL,
  `trangthaidonhang` varchar(50) DEFAULT NULL,
  `phuongthucthanhtoan` varchar(256) DEFAULT NULL,
  `diachi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`madonhang`, `tongtien`, `ngaydathang`, `makhachhang`, `trangthaidonhang`, `phuongthucthanhtoan`, `diachi`) VALUES
(231933, '8,000,000₫', '08/05/2023', 123456, 'Đã xử lý', 'Thanh toán khi giao hàng (COD)', 'Hồ Chí Minh'),
(250524, '8,000,000₫', '18/02/2023', 123456, 'Đã xử lý', 'Thanh toán khi giao hàng (COD)', 'Hồ Chí Minh'),
(282983, '12,000,000₫', '03/01/2023', 123456, 'Đang xử lý', 'Thanh toán khi giao hàng (COD)', 'Hồ Chí Minh'),
(482769, '5,750,000₫', '12/10/2022', 123456, 'Đang xử lý', 'Thanh toán khi giao hàng (COD)', 'Hồ Chí Minh'),
(613469, '4,800,000₫', '11/05/2022', 123456, 'Đang xử lý', 'Thanh toán khi giao hàng (COD)', 'Hồ Chí Minh'),
(753993, '8,000,000₫', '13/02/2022', 123456, 'Đang xử lý', 'Thanh toán khi giao hàng (COD)', 'Hồ Chí Minh'),
(918672, '13,400,000₫', '15/05/2023', 123456, 'đang xử lý', 'Thanh toán khi giao hàng (COD)', '9 Nguyễn Văn Cừ, Phường 1, Quận 5, Hồ Chí Minh, Việt Nam'),
(972974, '26,400,000₫', '08/01/2022', 123456, 'Đang xử lý', 'Thanh toán khi giao hàng (COD)', 'Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `masp` int(11) DEFAULT NULL,
  `makhachhang` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `kichthuoc` int(11) DEFAULT NULL,
  `mausac` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`masp`, `makhachhang`, `soluong`, `kichthuoc`, `mausac`) VALUES
(464645, 123456, 2, 36, 'Xanh'),
(238934, 123456, 1, 38, 'Trắng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanhsp`
--

CREATE TABLE `hinhanhsp` (
  `urlmain` varchar(256) DEFAULT NULL,
  `url` varchar(256) DEFAULT NULL,
  `masp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhanhsp`
--

INSERT INTO `hinhanhsp` (`urlmain`, `url`, `masp`) VALUES
('../asset/img/AYB/AYB.webp', '../asset/img/AYB/802501_02_9e71f6edc5bb462481bc19e127381e87_master.webp', 734052),
('../asset/img/AYB/AYB.webp', '../asset/img/AYB/802501_03_8204ef4564bb4222a5f626933e74a3fa_master.webp', 734052),
('../asset/img/AYB/AYB.webp', '../asset/img/AYB/802501_04_1c694bb928e440d79567915c74d0c788_master.webp', 734052),
('../asset/img/YZ350/YZ350.webp', '../asset/img/YZ350/800502_02_468e08db2924444f825e1c56b73c5240_master.webp', 934732),
('../asset/img/YZ350/YZ350.webp', '../asset/img/YZ350/800502_03_6380f33e0c5b46a9887ad6ecd2a8ec47_master.webp', 934732),
('../asset/img/YZ350/YZ350.webp', '../asset/img/YZ350/800502_04_2d74807a82a04cb9890580b99acedc0f_master.webp', 934732),
('../asset/img/YZ350/YZ350.webp', '../asset/img/YZ350/800801_01_6b4028cf298041109f5dd4a421ffcc69_master.webp', 934732),
('../asset/img/YZ350/YZ350.webp', '../asset/img/YZ350/800801_02_5751313192794e459886090d1edf2c34_master.webp', 934732),
('../asset/img/YZ350/YZ350.webp', '../asset/img/YZ350/800801_03_a6e78e36f18f4548b4e802e3f7c68f50_master.webp', 934732),
('../asset/img/YZ350/YZ350.webp', '../asset/img/YZ350/800801_04_334e9db32dac4d8a96dd7565e8ea2d30_master.webp', 934732),
('../asset/img/NAM1A/NAM1A.webp', '../asset/img/NAM1A/801821_01_c5fc27c49c9044aab0fa63a5e62cebe0_master.webp', 103294),
('../asset/img/NAM1A/NAM1A.webp', '../asset/img/NAM1A/NAM1A.webp', 103294),
('../asset/img/NAM1A/NAM1A.webp', '../asset/img/NAM1A/801821_03_a2a0ab936fe14aa1b068e6a026894f27_master.webp', 103294),
('../asset/img/NAM1A/NAM1A.webp', '../asset/img/NAM1A/801821_04_a10834510439469cbec4c9ce1ca542dd_master.webp', 103294),
('../asset/img/NWAH/NWAH.webp', '../asset/img/NWAH/NWAH.webp', 123217),
('../asset/img/NWAH/NWAH.webp', '../asset/img/NWAH/141873_01_e9e9eeb3f03944ceb83eee52b804b41e_master.webp', 123217),
('../asset/img/NWAH/NWAH.webp', '../asset/img/NWAH/141873_03_ad2cbcf16b1d46f992f9b68f91ea2dc7_master.webp', 123217),
('../asset/img/NWAH/NWAH.webp', '../asset/img/NWAH/141873_04_cdfe92c3390c4ca2904f7aa5db618b8c_master.webp', 123217),
('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/APSHU.webp', 123563),
('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/805266_01_13fb3567b26b475691ba82fff33508ce_master.webp', 123563),
('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/805266_02_b8b2cdd1782246febf8879a44a7e5021_master.webp', 123563),
('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/805266_04_84220e6e3a5b424e95e88c69add2ac0a_master.webp', 123563),
('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/805266_05_f0364c63fc09453ea59140b9819fb9f6_master.webp', 123563),
('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/805531_01_1ec7301259794f3595cce6c52b9f1ca8_master.webp', 123563),
('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/805531_02_903265e8a1714b85849e8cd0dfcaae69_master.webp', 123563),
('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/805531_03_38c2fe5dc7104e038a8da96882c6bc92_master.webp', 123563),
('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/805531_04_47e65cc0775149ab9194a6a94cc8813e_master.webp', 123563),
('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/805531_05_07c5de666b3147118be47ec114c80f25_master.webp', 123563),
('../asset/img/ANX1W/ANX1W.webp', '../asset/img/ANX1W/801270_3_d296326f056241c58cb84e8cde862b1b_master.webp', 182131),
('../asset/img/ANX1W/ANX1W.webp', '../asset/img/ANX1W/801270_4_bd39fcec1d364fbdba3604a4f7e0de2f_master.webp', 182131),
('../asset/img/ANX1W/ANX1W.webp', '../asset/img/ANX1W/ANX1W.webp', 182131),
('../asset/img/ANX1W/ANX1W.webp', '../asset/img/ANX1W/801270_1_c42c68dac62843d8b2d3835de4afb829_master.webp', 182131),
('../asset/img/ZX930/ZX930.webp', '../asset/img/ZX930/ZX930.webp', 238934),
('../asset/img/ZX930/ZX930.webp', '../asset/img/ZX930/805853_02_72d296324ead41669f670f65b9c3774c_master.webp', 238934),
('../asset/img/ZX930/ZX930.webp', '../asset/img/ZX930/805853_03_d078c570316e4c1aabd223ef19a58645_master.webp', 238934),
('../asset/img/ZX930/ZX930.webp', '../asset/img/ZX930/805853_04_2145d2d372c84e0db7892a7877d954b1_master.webp', 238934),
('../asset/img/ultraboost/ultraboost.webp', '../asset/img/ultraboost/805338_02_ad66875719d64ad4afded311dae375a5_master.webp', 255462),
('../asset/img/ultraboost/ultraboost.webp', '../asset/img/ultraboost/805338_03_2ee64889f7f54283a23a6056eba98e89_master.webp', 255462),
('../asset/img/ultraboost/ultraboost.webp', '../asset/img/ultraboost/805338_04_4dedbc226c15454f934f56cc1cf4474a_master.webp', 255462),
('../asset/img/ultraboost/ultraboost.webp', '../asset/img/ultraboost/ultraboost.webp', 255462),
('../asset/img/NAM1Se/NAM1Se.webp', '../asset/img/NAM1Se/NAM1Se.webp', 324123),
('../asset/img/NAM1Se/NAM1Se.webp', '../asset/img/NAM1Se/804352_01_2a86e164ed0241578b8f58c866a2d699_master.webp', 324123),
('../asset/img/NAM1Se/NAM1Se.webp', '../asset/img/NAM1Se/804352_02_d55075307f0c4258806cf2830a0869f8_master.webp', 324123),
('../asset/img/NAM1Se/NAM1Se.webp', '../asset/img/NAM1Se/804352_03_f8a3e5f9f7f84f9ab3cbda1d9dd2c511_master.webp', 324123),
('../asset/img/NAM1Se/NAM1Se.webp', '../asset/img/NAM1Se/804352_04_07b9f0e3e12041cda6d5ecf713292c3e_master.webp', 324123),
('../asset/img/NAM1Se/NAM1Se.webp', '../asset/img/NAM1Se/804379_02_6229ef78879045719f53ea5d995e9baa_master.webp', 324123),
('../asset/img/NAM1Se/NAM1Se.webp', '../asset/img/NAM1Se/804379_03_f37881f39c174d8dba10807139afba91_master.webp', 324123),
('../asset/img/NAM1Se/NAM1Se.webp', '../asset/img/NAM1Se/804379_04_bf5cb6c03a684bc3a880083445e3dd6b_master.webp', 324123),
('../asset/img/AUW/AUW.webp', '../asset/img/AUW/801432_01_b16d089f8bda434bacfe4620e8480be1_master.webp', 345435),
('../asset/img/AUW/AUW.webp', '../asset/img/AUW/801432_03_a483081f66ab44e49509e658654ad76c_master.webp', 345435),
('../asset/img/AUW/AUW.webp', '../asset/img/AUW/801432_04_31a60eb65e90448abf8f8bc7de6cde7a_master.webp', 345435),
('../asset/img/AUW/AUW.webp', '../asset/img/AUW/AUW.webp', 345435),
('../asset/img/Anr1ss/Anr1ss.webp', '../asset/img/Anr1ss/Anr1ss.webp', 435435),
('../asset/img/Anr1ss/Anr1ss.webp', '../asset/img/Anr1ss/137823_02_2e75ab800f5e4edd89de7b7700a96733_master.webp', 435435),
('../asset/img/Anr1ss/Anr1ss.webp', '../asset/img/Anr1ss/137823_03_013acada72644a11987015345e2e7a7a_master.webp', 435435),
('../asset/img/Az400/Az400.webp', '../asset/img/Az400/806859_03_f68f3ab3b18f47929a21710099aa4f22_master.webp', 464645),
('../asset/img/Az400/Az400.webp', '../asset/img/Az400/806859_04_3e4352dfca6840f99cf52fd97d13fbf1_master.webp', 464645),
('../asset/img/Az400/Az400.webp', '../asset/img/Az400/806859_02_41c7a097a6c94e1793af485220fe7f70_master.webp', 464645),
('../asset/img/Az400/Az400.webp', '../asset/img/Az400/Az400.webp', 464645),
('../asset/img/ANR1s/ANR1s.webp', '../asset/img/ANR1s/ANR1s.webp', 472411),
('../asset/img/ANR1s/ANR1s.webp', '../asset/img/ANR1s/805476_02_cfb9d749e5b44244a81fe2eb26d7d872_master.webp', 472411),
('../asset/img/ANR1s/ANR1s.webp', '../asset/img/ANR1s/805476_03_5b1f6309b4354dd1b008d8b5e35e0210_master.webp', 472411),
('../asset/img/ANR1s/ANR1s.webp', '../asset/img/ANR1s/805476_04_d066243e2d374e2485153814799ac0a1_master.webp', 472411),
('../asset/img/AECA/AECA.webp', '../asset/img/AECA/801740_1_e4adfa6d09b7468a8c9fb21bf8e02bd4_master.webp', 546239),
('../asset/img/AECA/AECA.webp', '../asset/img/AECA/801740_3_1abe518578db43cdaf7d9a952564e156_master.webp', 546239),
('../asset/img/AECA/AECA.webp', '../asset/img/AECA/801740_4_6fb0a9165c614f86bfd31ce908d6ef55_master.webp', 546239),
('../asset/img/AECA/AECA.webp', '../asset/img/AECA/AECA.webp', 546239),
('../asset/img/ANR1/ANR1.webp', '../asset/img/ANR1/ANR1.webp', 565467),
('../asset/img/ANR1/ANR1.webp', '../asset/img/ANR1/201493_1_017364c87c3e4802a8cda5259e3d5a95_master.webp', 565467),
('../asset/img/ANR1/ANR1.webp', '../asset/img/ANR1/201493_3_af57a63d212a47c98da50ccc4c8027bb_master.webp', 565467),
('../asset/img/ANR1/ANR1.webp', '../asset/img/ANR1/201493_4_f29671849e624803927cc9bf970b3736_master.webp', 565467),
('../asset/img/NAHR/NAHR.webp', '../asset/img/NAHR/NAHR.webp', 721043),
('../asset/img/NAHR/NAHR.webp', '../asset/img/NAHR/052077_01_4af6cbc2ae1f470289522577d1d12af8_master.webp', 721043),
('../asset/img/NAHR/NAHR.webp', '../asset/img/NAHR/052077_02_b3904ef1cb874f6c8ac0b644db73ccc5_master.webp', 721043),
('../asset/img/NAHR/NAHR.webp', '../asset/img/NAHR/052077_03_ceef344af646406ea2c4446b2fdcec21_master.webp', 721043),
('../asset/img/NAHR/NAHR.webp', '../asset/img/NAHR/052077_04_99e9cb020c584c3ea85555c002308c0f_master.webp', 721043),
('../asset/img/NAHR/NAHR.webp', '../asset/img/NAHR/nike-ws-air-huarache-run-white-white-052856_1_b8e1fd1f714a4b46b08ecd3f79c1e815_master.webp', 721043),
('../asset/img/NAHR/NAHR.webp', '../asset/img/NAHR/nike-ws-air-huarache-run-white-white-052856_3_372d26f6a6e4483e9c6ee9fdcebfdf47_master.webp', 721043),
('../asset/img/NAHR/NAHR.webp', '../asset/img/NAHR/nike-ws-air-huarache-run-white-white-052856_4_cdd5316103544d5f82dde6bfd81d2cd1_master.webp', 721043),
('../asset/img/T10NAP/T10NAP.webp', '../asset/img/T10NAP/803977_01_3913c493d60549748320d5d7f1e876ee_master.webp', 723041),
('../asset/img/T10NAP/T10NAP.webp', '../asset/img/T10NAP/803977_02_44271843e1b04055be90c8c5ec1e57ed_master.webp', 723041),
('../asset/img/T10NAP/T10NAP.webp', '../asset/img/T10NAP/803977_03_8c5c2a5f31e34d63aaefd936e2206033_master.webp', 723041),
('../asset/img/T10NAP/T10NAP.webp', '../asset/img/T10NAP/803977_04_1ffa49aa472e4934a494ad2d1e734c3c_master.webp', 723041),
('../asset/img/T10NAP/T10NAP.webp', '../asset/img/T10NAP/804113_01_8afb9ba886124873bee6e0b3085b0208_master.webp', 723041),
('../asset/img/T10NAP/T10NAP.webp', '../asset/img/T10NAP/804113_03_16600a86f38e4810bd7895d8e54940ba_master.webp', 723041),
('../asset/img/T10NAP/T10NAP.webp', '../asset/img/T10NAP/804113_04_14ad48e0c1144b839587eae365dc3e3c_master.webp', 723041),
('../asset/img/T10NAP/T10NAP.webp', '../asset/img/T10NAP/804113_05_aec8fd1312804e5895755eb16b9d3da4_master.webp', 723041),
('../asset/img/T10NAP/T10NAP.webp', '../asset/img/T10NAP/T10NAP.webp', 723041),
('../asset/img/AYB/AYB.webp', '../asset/img/AYB/AYB.webp', 734052),
('../asset/img/NAM9E/NAM9E.webp', '../asset/img/NAM9E/NAM9E.webp', 743027),
('../asset/img/NAM9E/NAM9E.webp', '../asset/img/NAM9E/139922_01_3c370943afbe421e904dfeff43e21db6_master.webp', 743027),
('../asset/img/NAM9E/NAM9E.webp', '../asset/img/NAM9E/139922_03_baa5389cb3704c6184d7bd9411d1456a_master.webp', 743027),
('../asset/img/NAM9E/NAM9E.webp', '../asset/img/NAM9E/139922_04_4cfd419fc5de483cb5b4cc19e4ab305a_master.webp', 743027),
('../asset/img/NAM9E/NAM9E.webp', '../asset/img/NAM9E/803959_01_ac42067612f044e0907a1c1f38cc460d_master.webp', 743027),
('../asset/img/NAM9E/NAM9E.webp', '../asset/img/NAM9E/803959_02_0b2d95b378f34119b59f4bbf1570287e_master.webp', 743027),
('../asset/img/NAM9E/NAM9E.webp', '../asset/img/NAM9E/803959_03_36d4b3c10dfc48d88e127bfb06115d76_master.webp', 743027),
('../asset/img/NAM9E/NAM9E.webp', '../asset/img/NAM9E/803959_04_ee9d95a7131343a989df2fa4cebf2cab_master.webp', 743027),
('../asset/img/NAM97P/NAM97P.webp', '../asset/img/NAM97P/806032_02_93f10da814884f8e85dbff9d9e4ac81f_master.webp', 846212),
('../asset/img/NAM97P/NAM97P.webp', '../asset/img/NAM97P/806032_03_2f60807458144be699c2e39bd656e9a2_master.webp', 846212),
('../asset/img/NAM97P/NAM97P.webp', '../asset/img/NAM97P/806032_04_af5bedb200754917aae4b47379ac70be_master.webp', 846212),
('../asset/img/NAM97P/NAM97P.webp', '../asset/img/NAM97P/NAM97P.webp', 846212),
('../asset/img/YZ350/YZ350.webp', '../asset/img/YZ350/YZ350.webp', 934732);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makhachhang` int(11) NOT NULL,
  `tenkhachhang` varchar(50) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `sdt` varchar(11) DEFAULT NULL,
  `tentk` varchar(256) DEFAULT NULL,
  `matkhau` int(11) DEFAULT NULL,
  `khoa` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makhachhang`, `tenkhachhang`, `email`, `sdt`, `tentk`, `matkhau`, `khoa`) VALUES
(123456, 'Lê Văn Diễn', 'dien@gmail.com', '0335710213', 'dien123', 1234567890, 0),
(234234, 'Tống Đức Duy', 'duy@gmail.com', '0335710213', 'duy123', 1234567890, 0),
(234567, 'Nguyễn Tăng Chương', 'chuong@gmail.com', '0335710213', 'chuong123', 1234567890, 0),
(345678, 'Nguyễn Hoàng Thiên Phú', 'phu@gmail.com', '0335710213', 'phu123', 1234567890, 0),
(430192, 'Lê Trung Kiên', 'kien@gmail.com', '0335710213', 'kien123', 1234567890, 0),
(723414, 'Dương Văn Sinl', 'sinl@gmail.com', '0335710213', 'sinl123', 1234567890, 0),
(743913, 'Đinh Văn Nam', 'nam@gmail.com', '0335710213', 'nam123', 1234567890, 0),
(895463, 'Đặng Ngân Đông', 'dong@gmail.com', '0335710213', 'dong123', 1234567890, 0),
(980234, 'Lê Bùi Minh Khoa', 'khoa@gmail.com', '0335710213', 'khoa123', 1234567890, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kichthuocsp`
--

CREATE TABLE `kichthuocsp` (
  `kichthuoc` int(11) DEFAULT NULL,
  `masp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `kichthuocsp`
--

INSERT INTO `kichthuocsp` (`kichthuoc`, `masp`) VALUES
(35, 103294),
(37, 103294),
(38, 103294),
(39, 103294),
(35, 123217),
(37, 123217),
(38, 123217),
(39, 123217),
(40, 123217),
(36, 123563),
(37, 123563),
(39, 123563),
(40, 123563),
(35, 182131),
(37, 182131),
(38, 182131),
(39, 182131),
(40, 182131),
(35, 238934),
(36, 238934),
(38, 238934),
(39, 238934),
(40, 238934),
(36, 255462),
(38, 255462),
(39, 255462),
(40, 255462),
(36, 324123),
(37, 324123),
(39, 324123),
(40, 324123),
(36, 345435),
(37, 345435),
(38, 345435),
(39, 345435),
(35, 435435),
(36, 435435),
(37, 435435),
(38, 435435),
(39, 435435),
(40, 435435),
(35, 464645),
(36, 464645),
(38, 464645),
(39, 464645),
(35, 472411),
(36, 472411),
(37, 472411),
(38, 472411),
(40, 472411),
(35, 546239),
(37, 546239),
(38, 546239),
(39, 546239),
(40, 546239),
(35, 565467),
(36, 565467),
(39, 565467),
(40, 565467),
(35, 721043),
(37, 721043),
(38, 721043),
(39, 721043),
(40, 721043),
(36, 723041),
(37, 723041),
(38, 723041),
(39, 723041),
(40, 723041),
(35, 734052),
(37, 734052),
(38, 734052),
(39, 734052),
(40, 734052),
(35, 743027),
(36, 743027),
(37, 743027),
(39, 743027),
(40, 743027),
(35, 846212),
(36, 846212),
(37, 846212),
(39, 846212),
(40, 846212),
(35, 934732),
(36, 934732),
(37, 934732),
(39, 934732),
(40, 934732);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaigiay`
--

CREATE TABLE `loaigiay` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaigiay`
--

INSERT INTO `loaigiay` (`maloai`, `tenloai`) VALUES
(123, 'Giày Thể Thao'),
(456, 'Giày Sneaker'),
(789, 'Giày Chạy Bộ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausacsp`
--

CREATE TABLE `mausacsp` (
  `mausac` varchar(256) DEFAULT NULL,
  `masp` int(11) DEFAULT NULL,
  `mamau` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `mausacsp`
--

INSERT INTO `mausacsp` (`mausac`, `masp`, `mamau`) VALUES
('Đỏ', 103294, '#E2262A'),
('Trắng', 123217, '#FFFFFF'),
('Xanh', 123563, '#6DAEF4'),
('Xám', 182131, '#FDFAEF'),
('Trắng', 238934, '#FFFFFF'),
('Đỏ', 255462, '#E2262A'),
('Trắng', 324123, '#FFFFFF'),
('Xanh', 345435, '#6DAEF4'),
('Đen', 435435, '#000000'),
('Xanh', 464645, '#6DAEF4'),
('Cam', 472411, '#FB4727'),
('Trắng', 546239, '#FFFFFF'),
('Xanh', 565467, '#6DAEF4'),
('Trắng', 721043, '#FFFFFF'),
('Trắng', 723041, '#FFFFFF'),
('Xám', 734052, '#FDFAEF'),
('Tím', 743027, '#3E3473'),
('Xanh', 846212, '#6DAEF4'),
('Trắng', 934732, '#FFFFFF'),
('Xám', 123563, '#FDFAEF'),
('Cam', 324123, '#FB4727'),
('Đen', 721043, '#000000'),
('Đen', 723041, '#000000'),
('Xanh', 743027, '#6DAEF4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(256) DEFAULT NULL,
  `mota` varchar(256) DEFAULT NULL,
  `giatien` int(11) DEFAULT NULL,
  `mathuonghieu` int(11) DEFAULT NULL,
  `maloai` int(11) DEFAULT NULL,
  `madanhmuc` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `an` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `mota`, `giatien`, `mathuonghieu`, `maloai`, `madanhmuc`, `soluong`, `an`) VALUES
(103294, 'Nike Air Max 1 Anniversary', NULL, 4200000, 123, 123, 456, 100, 0),
(123217, 'Nike Wmns Air Huarache City Move', NULL, 5200000, 123, 456, 567, 100, 0),
(123563, 'Adidas PW Solar HU NMD \"Inspiration Pack\"', NULL, 4200000, 456, 123, 123, 100, 0),
(182131, 'Adidas Nmd Xr1 W \"Pearl Grey\"', NULL, 5750000, 456, 456, 456, 100, 0),
(238934, 'ZX 930 X EQT NEVER MADE PACK', NULL, 4000000, 123, 123, 123, 100, 0),
(255462, 'Ultra Boost', NULL, 4700000, 456, 123, 456, 100, 0),
(324123, 'Nike Air Max 1 Se \"Just Do It\"', NULL, 4900000, 123, 456, 123, 100, 0),
(345435, 'Adidas Ultraboost W', NULL, 5300000, 456, 123, 567, 100, 0),
(435435, 'Adidas NMD_R1 \"Molded Stripes\"', NULL, 5400000, 456, 456, 456, 100, 0),
(464645, 'Adidas Zx 4000 4d', NULL, 6400000, 456, 123, 123, 100, 0),
(472411, 'Adidas Nmd R1', NULL, 3500000, 456, 789, 567, 100, 0),
(546239, 'Adidas EQT Cushion ADV \"North America\"', NULL, 7000000, 456, 789, 456, 100, 0),
(565467, 'Adidas Nmd R1 \"Villa Exclusive\"', NULL, 7000000, 456, 123, 456, 100, 0),
(721043, 'Nike W\'s Air Huarache Run \"Triple White\"', NULL, 7300000, 123, 123, 123, 100, 0),
(723041, 'The 10: Nike Air Presto \"Off White\"', NULL, 8000000, 123, 789, 123, 100, 0),
(734052, 'Adidas Yeezy Boost 700 \"Wave Runner\"', NULL, 6800000, 456, 123, 567, 100, 0),
(743027, 'Nike Air Max 90 Essential \"Grape\"', NULL, 4800000, 123, 789, 123, 100, 0),
(846212, 'Nike Air Max 97 Premium', NULL, 8000000, 123, 123, 456, 100, 0),
(934732, 'Adidas Yeezy boost 350 v2 \"zebra\"', NULL, 6000000, 456, 789, 123, 100, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `mathuonghieu` int(11) NOT NULL,
  `tenthuonghieu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`mathuonghieu`, `tenthuonghieu`) VALUES
(123, 'Nike'),
(456, 'Adidas');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD KEY `chitietdonhang_ibfk_1` (`masp`),
  ADD KEY `chitietdonhang_ibfk_2` (`madonhang`);

--
-- Chỉ mục cho bảng `danhgiasp`
--
ALTER TABLE `danhgiasp`
  ADD PRIMARY KEY (`madanhgia`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`madanhmuc`);

--
-- Chỉ mục cho bảng `diachi`
--
ALTER TABLE `diachi`
  ADD KEY `diachi_ibfk_1` (`makhachhang`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madonhang`),
  ADD KEY `donhang_ibfk_1` (`makhachhang`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD KEY `giohang_ibfk_1` (`masp`),
  ADD KEY `giohang_ibfk_2` (`makhachhang`);

--
-- Chỉ mục cho bảng `hinhanhsp`
--
ALTER TABLE `hinhanhsp`
  ADD KEY `hinhanhsp_ibfk_1` (`masp`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makhachhang`);

--
-- Chỉ mục cho bảng `kichthuocsp`
--
ALTER TABLE `kichthuocsp`
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `loaigiay`
--
ALTER TABLE `loaigiay`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `mausacsp`
--
ALTER TABLE `mausacsp`
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `sanpham_ibfk_1` (`mathuonghieu`),
  ADD KEY `sanpham_ibfk_2` (`maloai`),
  ADD KEY `sanpham_ibfk_3` (`madanhmuc`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`mathuonghieu`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`madonhang`) REFERENCES `donhang` (`madonhang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `danhgiasp`
--
ALTER TABLE `danhgiasp`
  ADD CONSTRAINT `danhgiasp_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `diachi`
--
ALTER TABLE `diachi`
  ADD CONSTRAINT `diachi_ibfk_1` FOREIGN KEY (`makhachhang`) REFERENCES `khachhang` (`makhachhang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`makhachhang`) REFERENCES `khachhang` (`makhachhang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`makhachhang`) REFERENCES `khachhang` (`makhachhang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hinhanhsp`
--
ALTER TABLE `hinhanhsp`
  ADD CONSTRAINT `hinhanhsp_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `kichthuocsp`
--
ALTER TABLE `kichthuocsp`
  ADD CONSTRAINT `kichthuocsp_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `mausacsp`
--
ALTER TABLE `mausacsp`
  ADD CONSTRAINT `mausacsp_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`mathuonghieu`) REFERENCES `thuonghieu` (`mathuonghieu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`maloai`) REFERENCES `loaigiay` (`maloai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`madanhmuc`) REFERENCES `danhmuc` (`madanhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
