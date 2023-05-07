
CREATE DATABASE runnerinn;
USE runnerinn;

CREATE TABLE danhmuc (
    madanhmuc INT,
    tendanhmuc VARCHAR(50),
    PRIMARY KEY (madanhmuc)
);

CREATE TABLE thuonghieu (
    mathuonghieu INT,
    tenthuonghieu VARCHAR(50),
    PRIMARY KEY (mathuonghieu)
);

CREATE TABLE loaigiay (
    maloai INT,
    tenloai VARCHAR(50),
    PRIMARY KEY (maloai)
);




CREATE TABLE khachhang (
    makhachhang INT,
    tenkhachhang VARCHAR(50),
    email VARCHAR(256),
    sdt INT,
    quocgia VARCHAR(256),
    tentk VARCHAR(256),
    matkhau int,
    PRIMARY KEY (makhachhang)
);

CREATE TABLE diachi (
    makhachhang int,
    tenduong VARCHAR(256),
    phuong VARCHAR(256),
    quan VARCHAR(256),
    thanhpho VARCHAR(256),
    macdinh int,
    FOREIGN KEY (makhachhang) REFERENCES khachhang (makhachhang)
);

CREATE TABLE sanpham (
    masp INT,
    tensp VARCHAR(256),
    mota VARCHAR(256),
    giatien INT,
    mathuonghieu INT,
    maloai INT,
    madanhmuc INT,
    PRIMARY KEY (masp),
    FOREIGN KEY (mathuonghieu) REFERENCES thuonghieu (mathuonghieu),
    FOREIGN KEY (maloai) REFERENCES loaigiay (maloai),
    FOREIGN KEY (madanhmuc) REFERENCES danhmuc (madanhmuc)
);

CREATE TABLE hinhanhsp (
    urlmain VARCHAR(256),
    url VARCHAR(256),
    masp INT,
    FOREIGN KEY (masp) REFERENCES sanpham (masp)
);

CREATE TABLE kichthuocsp (
    kichthuoc INT,
    masp INT,
    FOREIGN KEY (masp) REFERENCES sanpham (masp)
);

CREATE TABLE mausacsp (
    mausac VARCHAR(256),
    masp INT,
    mamau VARCHAR(256),
    FOREIGN KEY (masp) REFERENCES sanpham (masp)
);

CREATE TABLE donhang (
    madonhang INT,
    ngaydathang DATE,
    makhachhang INT,
    trangthaidonhang VARCHAR(50) CHECK (trangthaidonhang = 'đang xử lý' OR trangthaidonhang = 'đã giao' OR trangthaidonhang = 'đã huỷ'),
    diachigiaohang varchar(256),
    phuongthucthanhtoan varchar(256),
    PRIMARY KEY (madonhang),
    FOREIGN KEY (makhachhang) REFERENCES khachhang (makhachhang)
);

CREATE TABLE chitietdonhang
(
madonhang INT,
masp INT,
soluongsp INT,
mausac varchar(256),
kichthuoc int,
FOREIGN KEY (masp) REFERENCES sanpham (masp),
FOREIGN KEY (madonhang) REFERENCES donhang (madonhang)
);

CREATE TABLE danhgiasp (
madanhgia INT,
masp INT,
tieude VARCHAR(50),
noidung VARCHAR(256),
ngaydanhgia DATE,
sosao INT,
PRIMARY KEY (madanhgia),
FOREIGN KEY (masp) REFERENCES sanpham (masp)
);

CREATE TABLE giohang (
masp INT,
makhachhang INT,
soluong INT,
kichthuoc INT,
mausac VARCHAR(256),
FOREIGN KEY (masp) REFERENCES sanpham (masp),
FOREIGN KEY (makhachhang) REFERENCES khachhang (makhachhang)
);

INSERT INTO danhmuc (madanhmuc, tendanhmuc) VALUES (123, 'Nike');
INSERT INTO danhmuc (madanhmuc, tendanhmuc) VALUES (234, 'Adidas');
INSERT INTO danhmuc (madanhmuc, tendanhmuc) VALUES (345, 'Sản phẩm tặng');
INSERT INTO danhmuc (madanhmuc, tendanhmuc) VALUES (456, 'Sản phẩm mới');
INSERT INTO danhmuc (madanhmuc, tendanhmuc) VALUES (567, 'Sản phẩm bán chạy');
INSERT INTO loaigiay (maloai, tenloai) VALUES (123, 'Nike');
INSERT INTO loaigiay (maloai, tenloai) VALUES (456, 'Adidas');
INSERT INTO loaigiay (maloai, tenloai) VALUES (789, 'Sản phẩm tặng');
INSERT INTO thuonghieu (mathuonghieu, tenthuonghieu) VALUES (123, 'Nike');
INSERT INTO thuonghieu (mathuonghieu, tenthuonghieu) VALUES (456, 'Adidas');
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (103294, 'Nike Air Max 1 Anniversary', 4200000, 123, 123, 456);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (123213, 'Sản phẩm tặng 3', 0, 456, 789, 345);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (123217, 'Nike Wmns Air Huarache City Move', 5200000, 123, 123, 567);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (123563, 'Adidas PW Solar HU NMD "Inspiration Pack"', 4200000, 456, 456, 234);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (182131, 'Adidas Nmd Xr1 W "Pearl Grey"', 5750000, 456, 456, 456);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (213313, 'Sản phẩm tặng 1', 0, 123, 789, 345);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (234234, 'Sản phẩm tặng 2', 0, 456, 789, 345);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (238934, 'ZX 930 X EQT NEVER MADE PACK', 4000000, 123, 123, 123);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (255462, 'Ultra Boost', 4700000, 456, 456, 456);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (324123, 'Nike Air Max 1 Se "Just Do It"', 4900000, 123, 123, 123);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (345435, 'Adidas Ultraboost W', 5300000, 456, 456, 567);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (435435, 'Adidas NMD_R1 "Molded Stripes"', 5400000, 456, 456, 456);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (464645, 'Adidas Zx 4000 4d', 6400000, 456, 456, 234);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (472411, 'Adidas Nmd R1', 3500000, 456, 456, 567);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (546239, 'Adidas EQT Cushion ADV "North America"', 7000000, 456, 456, 456);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (565467, 'Adidas Nmd R1 "Villa Exclusive"', 7000000, 456, 456, 456);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (628412, 'Adidas Ultra Boost M', 6100000, 456, 456, 456);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (721043, 'Nike W''s Air Huarache Run "Triple White"', 7300000, 123, 123, 123);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (723041, 'The 10: Nike Air Presto "Off White"', 8000000, 123, 123, 123);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (734052, 'Adidas Yeezy Boost 700 "Wave Runner"', 6800000, 456, 456, 567);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (743027, 'Nike Air Max 90 Essential "Grape"', 4800000, 123, 123, 123);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (846212, 'Nike Air Max 97 Premium', 8000000, 123, 123, 456);
INSERT INTO sanpham (masp, tensp, giatien, mathuonghieu, maloai, madanhmuc) VALUES (934732, 'Adidas Yeezy boost 350 v2 "zebra"', 6000000, 456, 456, 234);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/AYB/AYB.webp', '../asset/img/AYB/802501_02_9e71f6edc5bb462481bc19e127381e87_master.webp', 734052);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/AYB/AYB.webp', '../asset/img/AYB/802501_03_8204ef4564bb4222a5f626933e74a3fa_master.webp', 734052);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/AYB/AYB.webp', '../asset/img/AYB/802501_04_1c694bb928e440d79567915c74d0c788_master.webp', 734052);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/YZ350/YZ350.webp', '../asset/img/YZ350/800502_02_468e08db2924444f825e1c56b73c5240_master.webp', 934732);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/YZ350/YZ350.webp', '../asset/img/YZ350/800502_03_6380f33e0c5b46a9887ad6ecd2a8ec47_master.webp', 934732);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/YZ350/YZ350.webp', '../asset/img/YZ350/800502_04_2d74807a82a04cb9890580b99acedc0f_master.webp', 934732);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/YZ350/YZ350.webp', '../asset/img/YZ350/800801_01_6b4028cf298041109f5dd4a421ffcc69_master.webp', 934732);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/YZ350/YZ350.webp', '../asset/img/YZ350/800801_02_5751313192794e459886090d1edf2c34_master.webp', 934732);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/YZ350/YZ350.webp', '../asset/img/YZ350/800801_03_a6e78e36f18f4548b4e802e3f7c68f50_master.webp', 934732);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/YZ350/YZ350.webp', '../asset/img/YZ350/800801_04_334e9db32dac4d8a96dd7565e8ea2d30_master.webp', 934732);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM1A/NAM1A.webp', '../asset/img/NAM1A/801821_01_c5fc27c49c9044aab0fa63a5e62cebe0_master.webp', 103294);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM1A/NAM1A.webp', '../asset/img/NAM1A/NAM1A.webp', 103294);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM1A/NAM1A.webp', '../asset/img/NAM1A/801821_03_a2a0ab936fe14aa1b068e6a026894f27_master.webp', 103294);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM1A/NAM1A.webp', '../asset/img/NAM1A/801821_04_a10834510439469cbec4c9ce1ca542dd_master.webp', 103294);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/spt3/spt3.webp', '../asset/img/spt3/spt3.webp', 123213);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NWAH/NWAH.webp', '../asset/img/NWAH/NWAH.webp', 123217);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NWAH/NWAH.webp', '../asset/img/NWAH/141873_01_e9e9eeb3f03944ceb83eee52b804b41e_master.webp', 123217);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NWAH/NWAH.webp', '../asset/img/NWAH/141873_03_ad2cbcf16b1d46f992f9b68f91ea2dc7_master.webp', 123217);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NWAH/NWAH.webp', '../asset/img/NWAH/141873_04_cdfe92c3390c4ca2904f7aa5db618b8c_master.webp', 123217);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/APSHU.webp', 123563);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/805266_01_13fb3567b26b475691ba82fff33508ce_master.webp', 123563);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/805266_02_b8b2cdd1782246febf8879a44a7e5021_master.webp', 123563);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/805266_04_84220e6e3a5b424e95e88c69add2ac0a_master.webp', 123563);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/805266_05_f0364c63fc09453ea59140b9819fb9f6_master.webp', 123563);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/805531_01_1ec7301259794f3595cce6c52b9f1ca8_master.webp', 123563);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/805531_02_903265e8a1714b85849e8cd0dfcaae69_master.webp', 123563);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/805531_03_38c2fe5dc7104e038a8da96882c6bc92_master.webp', 123563);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/805531_04_47e65cc0775149ab9194a6a94cc8813e_master.webp', 123563);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/APSHU/APSHU.webp', '../asset/img/APSHU/805531_05_07c5de666b3147118be47ec114c80f25_master.webp', 123563);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ANX1W/ANX1W.webp', '../asset/img/ANX1W/801270_3_d296326f056241c58cb84e8cde862b1b_master.webp', 182131);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ANX1W/ANX1W.webp', '../asset/img/ANX1W/801270_4_bd39fcec1d364fbdba3604a4f7e0de2f_master.webp', 182131);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ANX1W/ANX1W.webp', '../asset/img/ANX1W/ANX1W.webp', 182131);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ANX1W/ANX1W.webp', '../asset/img/ANX1W/801270_1_c42c68dac62843d8b2d3835de4afb829_master.webp', 182131);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/spt1/spt1.webp', '../asset/img/spt1/spt1.webp', 213313);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/spt2/spt2.webp', '../asset/img/spt2/spt2.webp', 234234);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ZX930/ZX930.webp', '../asset/img/ZX930/ZX930.webp', 238934);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ZX930/ZX930.webp', '../asset/img/ZX930/805853_02_72d296324ead41669f670f65b9c3774c_master.webp', 238934);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ZX930/ZX930.webp', '../asset/img/ZX930/805853_03_d078c570316e4c1aabd223ef19a58645_master.webp', 238934);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ZX930/ZX930.webp', '../asset/img/ZX930/805853_04_2145d2d372c84e0db7892a7877d954b1_master.webp', 238934);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ultraboost/ultraboost.webp', '../asset/img/ultraboost/805338_02_ad66875719d64ad4afded311dae375a5_master.webp', 255462);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ultraboost/ultraboost.webp', '../asset/img/ultraboost/805338_03_2ee64889f7f54283a23a6056eba98e89_master.webp', 255462);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ultraboost/ultraboost.webp', '../asset/img/ultraboost/805338_04_4dedbc226c15454f934f56cc1cf4474a_master.webp', 255462);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ultraboost/ultraboost.webp', '../asset/img/ultraboost/ultraboost.webp', 255462);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM1Se/NAM1Se.webp', '../asset/img/NAM1Se/NAM1Se.webp', 324123);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM1Se/NAM1Se.webp', '../asset/img/NAM1Se/804352_01_2a86e164ed0241578b8f58c866a2d699_master.webp', 324123);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM1Se/NAM1Se.webp', '../asset/img/NAM1Se/804352_02_d55075307f0c4258806cf2830a0869f8_master.webp', 324123);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM1Se/NAM1Se.webp', '../asset/img/NAM1Se/804352_03_f8a3e5f9f7f84f9ab3cbda1d9dd2c511_master.webp', 324123);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM1Se/NAM1Se.webp', '../asset/img/NAM1Se/804352_04_07b9f0e3e12041cda6d5ecf713292c3e_master.webp', 324123);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM1Se/NAM1Se.webp', '../asset/img/NAM1Se/804379_02_6229ef78879045719f53ea5d995e9baa_master.webp', 324123);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM1Se/NAM1Se.webp', '../asset/img/NAM1Se/804379_03_f37881f39c174d8dba10807139afba91_master.webp', 324123);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM1Se/NAM1Se.webp', '../asset/img/NAM1Se/804379_04_bf5cb6c03a684bc3a880083445e3dd6b_master.webp', 324123);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/AUW/AUW.webp', '../asset/img/AUW/801432_01_b16d089f8bda434bacfe4620e8480be1_master.webp', 345435);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/AUW/AUW.webp', '../asset/img/AUW/801432_03_a483081f66ab44e49509e658654ad76c_master.webp', 345435);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/AUW/AUW.webp', '../asset/img/AUW/801432_04_31a60eb65e90448abf8f8bc7de6cde7a_master.webp', 345435);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/AUW/AUW.webp', '../asset/img/AUW/AUW.webp', 345435);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/Anr1ss/Anr1ss.webp', '../asset/img/Anr1ss/Anr1ss.webp', 435435);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/Anr1ss/Anr1ss.webp', '../asset/img/Anr1ss/137823_02_2e75ab800f5e4edd89de7b7700a96733_master.webp', 435435);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/Anr1ss/Anr1ss.webp', '../asset/img/Anr1ss/137823_03_013acada72644a11987015345e2e7a7a_master.webp', 435435);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/Az400/Az400.webp', '../asset/img/Az400/806859_03_f68f3ab3b18f47929a21710099aa4f22_master.webp', 464645);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/Az400/Az400.webp', '../asset/img/Az400/806859_04_3e4352dfca6840f99cf52fd97d13fbf1_master.webp', 464645);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/Az400/Az400.webp', '../asset/img/Az400/806859_02_41c7a097a6c94e1793af485220fe7f70_master.webp', 464645);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/Az400/Az400.webp', '../asset/img/Az400/Az400.webp', 464645);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ANR1s/ANR1s.webp', '../asset/img/ANR1s/ANR1s.webp', 472411);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ANR1s/ANR1s.webp', '../asset/img/ANR1s/805476_02_cfb9d749e5b44244a81fe2eb26d7d872_master.webp', 472411);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ANR1s/ANR1s.webp', '../asset/img/ANR1s/805476_03_5b1f6309b4354dd1b008d8b5e35e0210_master.webp', 472411);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ANR1s/ANR1s.webp', '../asset/img/ANR1s/805476_04_d066243e2d374e2485153814799ac0a1_master.webp', 472411);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/AECA/AECA.webp', '../asset/img/AECA/801740_1_e4adfa6d09b7468a8c9fb21bf8e02bd4_master.webp', 546239);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/AECA/AECA.webp', '../asset/img/AECA/801740_3_1abe518578db43cdaf7d9a952564e156_master.webp', 546239);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/AECA/AECA.webp', '../asset/img/AECA/801740_4_6fb0a9165c614f86bfd31ce908d6ef55_master.webp', 546239);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/AECA/AECA.webp', '../asset/img/AECA/AECA.webp', 546239);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ANR1/ANR1.webp', '../asset/img/ANR1/ANR1.webp', 565467);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ANR1/ANR1.webp', '../asset/img/ANR1/201493_1_017364c87c3e4802a8cda5259e3d5a95_master.webp', 565467);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ANR1/ANR1.webp', '../asset/img/ANR1/201493_3_af57a63d212a47c98da50ccc4c8027bb_master.webp', 565467);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/ANR1/ANR1.webp', '../asset/img/ANR1/201493_4_f29671849e624803927cc9bf970b3736_master.webp', 565467);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/AUTBM/AUTBM.webp', '../asset/img/AUTBM/201281_02_22cbc76b71ff47e9a31b4833b01b8c2d_master.webp', 628412);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/AUTBM/AUTBM.webp', '../asset/img/AUTBM/201281_03_3de336e846f8402994e73c40df35099d_master.webp', 628412);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/AUTBM/AUTBM.webp', '../asset/img/AUTBM/201281_04_6ef5352df3df4637b565b3539b3b6192_master.webp', 628412);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/AUTBM/AUTBM.webp', '../asset/img/AUTBM/AUTBM.webp', 628412);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAHR/NAHR.webp', '../asset/img/NAHR/NAHR.webp', 721043);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAHR/NAHR.webp', '../asset/img/NAHR/052077_01_4af6cbc2ae1f470289522577d1d12af8_master.webp', 721043);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAHR/NAHR.webp', '../asset/img/NAHR/052077_02_b3904ef1cb874f6c8ac0b644db73ccc5_master.webp', 721043);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAHR/NAHR.webp', '../asset/img/NAHR/052077_03_ceef344af646406ea2c4446b2fdcec21_master.webp', 721043);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAHR/NAHR.webp', '../asset/img/NAHR/052077_04_99e9cb020c584c3ea85555c002308c0f_master.webp', 721043);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAHR/NAHR.webp', '../asset/img/NAHR/nike-ws-air-huarache-run-white-white-052856_1_b8e1fd1f714a4b46b08ecd3f79c1e815_master.webp', 721043);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAHR/NAHR.webp', '../asset/img/NAHR/nike-ws-air-huarache-run-white-white-052856_3_372d26f6a6e4483e9c6ee9fdcebfdf47_master.webp', 721043);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAHR/NAHR.webp', '../asset/img/NAHR/nike-ws-air-huarache-run-white-white-052856_4_cdd5316103544d5f82dde6bfd81d2cd1_master.webp', 721043);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/T10NAP/T10NAP.webp', '../asset/img/T10NAP/803977_01_3913c493d60549748320d5d7f1e876ee_master.webp', 723041);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/T10NAP/T10NAP.webp', '../asset/img/T10NAP/803977_02_44271843e1b04055be90c8c5ec1e57ed_master.webp', 723041);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/T10NAP/T10NAP.webp', '../asset/img/T10NAP/803977_03_8c5c2a5f31e34d63aaefd936e2206033_master.webp', 723041);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/T10NAP/T10NAP.webp', '../asset/img/T10NAP/803977_04_1ffa49aa472e4934a494ad2d1e734c3c_master.webp', 723041);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/T10NAP/T10NAP.webp', '../asset/img/T10NAP/804113_01_8afb9ba886124873bee6e0b3085b0208_master.webp', 723041);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/T10NAP/T10NAP.webp', '../asset/img/T10NAP/804113_03_16600a86f38e4810bd7895d8e54940ba_master.webp', 723041);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/T10NAP/T10NAP.webp', '../asset/img/T10NAP/804113_04_14ad48e0c1144b839587eae365dc3e3c_master.webp', 723041);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/T10NAP/T10NAP.webp', '../asset/img/T10NAP/804113_05_aec8fd1312804e5895755eb16b9d3da4_master.webp', 723041);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/T10NAP/T10NAP.webp', '../asset/img/T10NAP/T10NAP.webp', 723041);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/AYB/AYB.webp', '../asset/img/AYB/AYB.webp', 734052);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM9E/NAM9E.webp', '../asset/img/NAM9E/NAM9E.webp', 743027);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM9E/NAM9E.webp', '../asset/img/NAM9E/139922_01_3c370943afbe421e904dfeff43e21db6_master.webp', 743027);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM9E/NAM9E.webp', '../asset/img/NAM9E/139922_03_baa5389cb3704c6184d7bd9411d1456a_master.webp', 743027);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM9E/NAM9E.webp', '../asset/img/NAM9E/139922_04_4cfd419fc5de483cb5b4cc19e4ab305a_master.webp', 743027);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM9E/NAM9E.webp', '../asset/img/NAM9E/803959_01_ac42067612f044e0907a1c1f38cc460d_master.webp', 743027);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM9E/NAM9E.webp', '../asset/img/NAM9E/803959_02_0b2d95b378f34119b59f4bbf1570287e_master.webp', 743027);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM9E/NAM9E.webp', '../asset/img/NAM9E/803959_03_36d4b3c10dfc48d88e127bfb06115d76_master.webp', 743027);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM9E/NAM9E.webp', '../asset/img/NAM9E/803959_04_ee9d95a7131343a989df2fa4cebf2cab_master.webp', 743027);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM97P/NAM97P.webp', '../asset/img/NAM97P/806032_02_93f10da814884f8e85dbff9d9e4ac81f_master.webp', 846212);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM97P/NAM97P.webp', '../asset/img/NAM97P/806032_03_2f60807458144be699c2e39bd656e9a2_master.webp', 846212);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM97P/NAM97P.webp', '../asset/img/NAM97P/806032_04_af5bedb200754917aae4b47379ac70be_master.webp', 846212);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/NAM97P/NAM97P.webp', '../asset/img/NAM97P/NAM97P.webp', 846212);
INSERT INTO hinhanhsp (urlmain, url, masp) VALUES ('../asset/img/YZ350/YZ350.webp', '../asset/img/YZ350/YZ350.webp', 934732);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (35, 103294);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (37, 103294);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (38, 103294);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 103294);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (35, 123213);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (37, 123213);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (38, 123213);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 123213);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 123213);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (35, 123217);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (37, 123217);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (38, 123217);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 123217);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 123217);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (36, 123563);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (37, 123563);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 123563);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 123563);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (35, 182131);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (37, 182131);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (38, 182131);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 182131);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 182131);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (35, 213313);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (38, 213313);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 213313);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (35, 234234);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (36, 234234);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (37, 234234);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (38, 234234);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 234234);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (35, 238934);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (36, 238934);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (38, 238934);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 238934);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 238934);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (36, 255462);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (38, 255462);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 255462);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 255462);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (36, 324123);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (37, 324123);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 324123);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 324123);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (36, 345435);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (37, 345435);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (38, 345435);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 345435);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (35, 435435);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (36, 435435);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (37, 435435);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (38, 435435);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 435435);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 435435);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (35, 464645);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (36, 464645);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (38, 464645);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 464645);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (35, 472411);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (36, 472411);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (37, 472411);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (38, 472411);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 472411);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (35, 546239);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (37, 546239);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (38, 546239);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 546239);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 546239);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (35, 565467);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (36, 565467);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 565467);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 565467);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (35, 628412);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (36, 628412);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (38, 628412);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 628412);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 628412);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (35, 721043);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (37, 721043);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (38, 721043);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 721043);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 721043);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (36, 723041);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (37, 723041);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (38, 723041);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 723041);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 723041);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (35, 734052);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (37, 734052);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (38, 734052);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 734052);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 734052);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (35, 743027);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (36, 743027);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (37, 743027);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 743027);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 743027);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (35, 846212);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (36, 846212);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (37, 846212);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 846212);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 846212);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (35, 934732);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (36, 934732);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (37, 934732);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (39, 934732);
INSERT INTO kichthuocsp (kichthuoc, masp) VALUES (40, 934732);
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Đỏ', 103294, '#E2262A');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Trắng', 123213, '#FFFFFF');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Trắng', 123217, '#FFFFFF');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Xanh', 123563, '#6DAEF4');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Xám', 182131, '#FDFAEF');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Trắng', 213313, '#FFFFFF');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Tím', 234234, '#3E3473');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Trắng', 238934, '#FFFFFF');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Đỏ', 255462, '#E2262A');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Trắng', 324123, '#FFFFFF');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Xanh', 345435, '#6DAEF4');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Đen', 435435, '#000000');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Xanh', 464645, '#6DAEF4');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Cam', 472411, '#FB4727');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Trắng', 546239, '#FFFFFF');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Xanh', 565467, '#6DAEF4');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Xanh', 628412, '#6DAEF4');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Trắng', 721043, '#FFFFFF');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Trắng', 723041, '#FFFFFF');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Xám', 734052, '#FDFAEF');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Tím', 743027, '#3E3473');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Xanh', 846212, '#6DAEF4');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Trắng', 934732, '#FFFFFF');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Đen', 123213, '#000000');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Xám', 123563, '#FDFAEF');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Cam', 324123, '#FB4727');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Đen', 721043, '#000000');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Đen', 723041, '#000000');
INSERT INTO mausacsp (mausac, masp, mamau) VALUES ('Xanh', 743027, '#6DAEF4');


