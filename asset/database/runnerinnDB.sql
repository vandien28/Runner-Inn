 /* chạy trên sqlserver */
USE [master]
GO

CREATE DATABASE [runnerinn]
GO
ALTER DATABASE [runnerinn] SET COMPATIBILITY_LEVEL = 150
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [runnerinn].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [runnerinn] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [runnerinn] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [runnerinn] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [runnerinn] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [runnerinn] SET ARITHABORT OFF 
GO
ALTER DATABASE [runnerinn] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [runnerinn] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [runnerinn] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [runnerinn] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [runnerinn] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [runnerinn] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [runnerinn] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [runnerinn] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [runnerinn] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [runnerinn] SET  ENABLE_BROKER 
GO
ALTER DATABASE [runnerinn] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [runnerinn] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [runnerinn] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [runnerinn] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [runnerinn] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [runnerinn] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [runnerinn] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [runnerinn] SET RECOVERY FULL 
GO
ALTER DATABASE [runnerinn] SET  MULTI_USER 
GO
ALTER DATABASE [runnerinn] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [runnerinn] SET DB_CHAINING OFF 
GO
ALTER DATABASE [runnerinn] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [runnerinn] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [runnerinn] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [runnerinn] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
EXEC sys.sp_db_vardecimal_storage_format N'runnerinn', N'ON'
GO
ALTER DATABASE [runnerinn] SET QUERY_STORE = OFF
GO
USE [runnerinn]
GO

CREATE USER [user] WITHOUT LOGIN WITH DEFAULT_SCHEMA=[dbo]
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[chitietdonhang](
	[madonhang] [int] NULL,
	[masp] [int] NULL,
	[soluongsp] [int] NULL
) ON [PRIMARY]
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[danhgiasp](
	[madanhgia] [int] NOT NULL,
	[masp] [int] NULL,
	[tieude] [nvarchar](256) NULL,
	[noidung] [nvarchar](256) NULL,
	[ngaydanhgia] [date] NULL,
	[sosao] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[madanhgia] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[danhmuc](
	[madanhmuc] [int] NOT NULL,
	[tendanhmuc] [nvarchar](256) NULL,
PRIMARY KEY CLUSTERED 
(
	[madanhmuc] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[donhang](
	[madonhang] [int] NOT NULL,
	[ngaydathang] [date] NULL,
	[makhachhang] [int] NULL,
	[trangthaidonhang] [nvarchar](256) NULL,
PRIMARY KEY CLUSTERED 
(
	[madonhang] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[hinhanhsp](
	[urlmain] [varchar](256) NULL,
	[url] [varchar](256) NULL,
	[masp] [int] NULL
) ON [PRIMARY]
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[khachhang](
	[makhachhang] [int] NOT NULL,
	[tenkhachhang] [nvarchar](256) NULL,
	[email] [varchar](256) NULL,
	[sdt] [int] NULL,
	[diachi] [nvarchar](256) NULL,
	[tentk] [varchar](50) NULL,
	[matkhau] [varchar](50) NULL,
PRIMARY KEY CLUSTERED 
(
	[makhachhang] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[kichthuocsp](
	[kichthuoc] [int] NULL,
	[masp] [int] NULL
) ON [PRIMARY]
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[loaigiay](
	[maloai] [int] NOT NULL,
	[tenloai] [nvarchar](256) NULL,
PRIMARY KEY CLUSTERED 
(
	[maloai] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[mausacsp](
	[mausac] [nvarchar](256) NULL,
	[masp] [int] NULL,
	[mamau] [varchar](256) NULL
) ON [PRIMARY]
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[sanpham](
	[masp] [int] NOT NULL,
	[tensp] [nvarchar](256) NULL,
	[giatien] [int] NULL,
	[mathuonghieu] [int] NULL,
	[maloai] [int] NULL,
	[madanhmuc] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[masp] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO

SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[thuonghieu](
	[mathuonghieu] [int] NOT NULL,
	[tenthuonghieu] [nvarchar](256) NULL,
PRIMARY KEY CLUSTERED 
(
	[mathuonghieu] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
INSERT [dbo].[danhmuc] ([madanhmuc], [tendanhmuc]) VALUES (123, N'Nike')
INSERT [dbo].[danhmuc] ([madanhmuc], [tendanhmuc]) VALUES (234, N'Adidas')
INSERT [dbo].[danhmuc] ([madanhmuc], [tendanhmuc]) VALUES (345, N'Sản phẩm tặng')
INSERT [dbo].[danhmuc] ([madanhmuc], [tendanhmuc]) VALUES (456, N'Sản phẩm mới')
INSERT [dbo].[danhmuc] ([madanhmuc], [tendanhmuc]) VALUES (567, N'Sản phẩm bán chạy')
GO
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/AYB/AYB.webp', N'../asset/img/AYB/802501_02_9e71f6edc5bb462481bc19e127381e87_master.webp', 734052)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/AYB/AYB.webp', N'../asset/img/AYB/802501_03_8204ef4564bb4222a5f626933e74a3fa_master.webp', 734052)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/AYB/AYB.webp', N'../asset/img/AYB/802501_04_1c694bb928e440d79567915c74d0c788_master.webp', 734052)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/YZ350/YZ350.webp', N'../asset/img/YZ350/800502_02_468e08db2924444f825e1c56b73c5240_master.webp', 934732)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/YZ350/YZ350.webp', N'../asset/img/YZ350/800502_03_6380f33e0c5b46a9887ad6ecd2a8ec47_master.webp', 934732)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/YZ350/YZ350.webp', N'../asset/img/YZ350/800502_04_2d74807a82a04cb9890580b99acedc0f_master.webp', 934732)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/YZ350/YZ350.webp', N'../asset/img/YZ350/800801_01_6b4028cf298041109f5dd4a421ffcc69_master.webp', 934732)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/YZ350/YZ350.webp', N'../asset/img/YZ350/800801_02_5751313192794e459886090d1edf2c34_master.webp', 934732)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/YZ350/YZ350.webp', N'../asset/img/YZ350/800801_03_a6e78e36f18f4548b4e802e3f7c68f50_master.webp', 934732)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/YZ350/YZ350.webp', N'../asset/img/YZ350/800801_04_334e9db32dac4d8a96dd7565e8ea2d30_master.webp', 934732)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM1A/NAM1A.webp', N'../asset/img/NAM1A/801821_01_c5fc27c49c9044aab0fa63a5e62cebe0_master.webp', 103294)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM1A/NAM1A.webp', N'../asset/img/NAM1A/NAM1A.webp', 103294)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM1A/NAM1A.webp', N'../asset/img/NAM1A/801821_03_a2a0ab936fe14aa1b068e6a026894f27_master.webp', 103294)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM1A/NAM1A.webp', N'../asset/img/NAM1A/801821_04_a10834510439469cbec4c9ce1ca542dd_master.webp', 103294)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/spt3/spt3.webp', N'../asset/img/spt3/spt3.webp', 123213)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NWAH/NWAH.webp', N'../asset/img/NWAH/NWAH.webp', 123217)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NWAH/NWAH.webp', N'../asset/img/NWAH/141873_01_e9e9eeb3f03944ceb83eee52b804b41e_master.webp', 123217)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NWAH/NWAH.webp', N'../asset/img/NWAH/141873_03_ad2cbcf16b1d46f992f9b68f91ea2dc7_master.webp', 123217)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NWAH/NWAH.webp', N'../asset/img/NWAH/141873_04_cdfe92c3390c4ca2904f7aa5db618b8c_master.webp', 123217)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/APSHU/APSHU.webp', N'../asset/img/APSHU/APSHU.webp', 123563)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/APSHU/APSHU.webp', N'../asset/img/APSHU/805266_01_13fb3567b26b475691ba82fff33508ce_master.webp', 123563)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/APSHU/APSHU.webp', N'../asset/img/APSHU/805266_02_b8b2cdd1782246febf8879a44a7e5021_master.webp', 123563)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/APSHU/APSHU.webp', N'../asset/img/APSHU/805266_04_84220e6e3a5b424e95e88c69add2ac0a_master.webp', 123563)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/APSHU/APSHU.webp', N'../asset/img/APSHU/805266_05_f0364c63fc09453ea59140b9819fb9f6_master.webp', 123563)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/APSHU/APSHU.webp', N'../asset/img/APSHU/805531_01_1ec7301259794f3595cce6c52b9f1ca8_master.webp', 123563)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/APSHU/APSHU.webp', N'../asset/img/APSHU/805531_02_903265e8a1714b85849e8cd0dfcaae69_master.webp', 123563)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/APSHU/APSHU.webp', N'../asset/img/APSHU/805531_03_38c2fe5dc7104e038a8da96882c6bc92_master.webp', 123563)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/APSHU/APSHU.webp', N'../asset/img/APSHU/805531_04_47e65cc0775149ab9194a6a94cc8813e_master.webp', 123563)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/APSHU/APSHU.webp', N'../asset/img/APSHU/805531_05_07c5de666b3147118be47ec114c80f25_master.webp', 123563)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ANX1W/ANX1W.webp', N'../asset/img/ANX1W/801270_3_d296326f056241c58cb84e8cde862b1b_master.webp', 182131)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ANX1W/ANX1W.webp', N'../asset/img/ANX1W/801270_4_bd39fcec1d364fbdba3604a4f7e0de2f_master.webp', 182131)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ANX1W/ANX1W.webp', N'../asset/img/ANX1W/ANX1W.webp', 182131)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ANX1W/ANX1W.webp', N'../asset/img/ANX1W/801270_1_c42c68dac62843d8b2d3835de4afb829_master.webp', 182131)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/spt1/spt1.webp', N'../asset/img/spt1/spt1.webp', 213313)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/spt2/spt2.webp', N'../asset/img/spt2/spt2.webp', 234234)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ZX930/ZX930.webp', N'../asset/img/ZX930/ZX930.webp', 238934)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ZX930/ZX930.webp', N'../asset/img/ZX930/805853_02_72d296324ead41669f670f65b9c3774c_master.webp', 238934)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ZX930/ZX930.webp', N'../asset/img/ZX930/805853_03_d078c570316e4c1aabd223ef19a58645_master.webp', 238934)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ZX930/ZX930.webp', N'../asset/img/ZX930/805853_04_2145d2d372c84e0db7892a7877d954b1_master.webp', 238934)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ultraboost/ultraboost.webp', N'../asset/img/ultraboost/805338_02_ad66875719d64ad4afded311dae375a5_master.webp', 255462)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ultraboost/ultraboost.webp', N'../asset/img/ultraboost/805338_03_2ee64889f7f54283a23a6056eba98e89_master.webp', 255462)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ultraboost/ultraboost.webp', N'../asset/img/ultraboost/805338_04_4dedbc226c15454f934f56cc1cf4474a_master.webp', 255462)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ultraboost/ultraboost.webp', N'../asset/img/ultraboost/ultraboost.webp', 255462)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM1Se/NAM1Se.webp', N'../asset/img/NAM1Se/NAM1Se.webp', 324123)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM1Se/NAM1Se.webp', N'../asset/img/NAM1Se/804352_01_2a86e164ed0241578b8f58c866a2d699_master.webp', 324123)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM1Se/NAM1Se.webp', N'../asset/img/NAM1Se/804352_02_d55075307f0c4258806cf2830a0869f8_master.webp', 324123)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM1Se/NAM1Se.webp', N'../asset/img/NAM1Se/804352_03_f8a3e5f9f7f84f9ab3cbda1d9dd2c511_master.webp', 324123)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM1Se/NAM1Se.webp', N'../asset/img/NAM1Se/804352_04_07b9f0e3e12041cda6d5ecf713292c3e_master.webp', 324123)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM1Se/NAM1Se.webp', N'../asset/img/NAM1Se/804379_02_6229ef78879045719f53ea5d995e9baa_master.webp', 324123)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM1Se/NAM1Se.webp', N'../asset/img/NAM1Se/804379_03_f37881f39c174d8dba10807139afba91_master.webp', 324123)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM1Se/NAM1Se.webp', N'../asset/img/NAM1Se/804379_04_bf5cb6c03a684bc3a880083445e3dd6b_master.webp', 324123)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/AUW/AUW.webp', N'../asset/img/AUW/801432_01_b16d089f8bda434bacfe4620e8480be1_master.webp', 345435)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/AUW/AUW.webp', N'../asset/img/AUW/801432_03_a483081f66ab44e49509e658654ad76c_master.webp', 345435)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/AUW/AUW.webp', N'../asset/img/AUW/801432_04_31a60eb65e90448abf8f8bc7de6cde7a_master.webp', 345435)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/AUW/AUW.webp', N'../asset/img/AUW/AUW.webp', 345435)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/Anr1ss/Anr1ss.webp', N'../asset/img/Anr1ss/Anr1ss.webp', 435435)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/Anr1ss/Anr1ss.webp', N'../asset/img/Anr1ss/137823_02_2e75ab800f5e4edd89de7b7700a96733_master.webp', 435435)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/Anr1ss/Anr1ss.webp', N'../asset/img/Anr1ss/137823_03_013acada72644a11987015345e2e7a7a_master.webp', 435435)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/Az400/Az400.webp', N'../asset/img/Az400/806859_03_f68f3ab3b18f47929a21710099aa4f22_master.webp', 464645)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/Az400/Az400.webp', N'../asset/img/Az400/806859_04_3e4352dfca6840f99cf52fd97d13fbf1_master.webp', 464645)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/Az400/Az400.webp', N'../asset/img/Az400/806859_02_41c7a097a6c94e1793af485220fe7f70_master.webp', 464645)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/Az400/Az400.webp', N'../asset/img/Az400/Az400.webp', 464645)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ANR1s/ANR1s.webp', N'../asset/img/ANR1s/ANR1s.webp', 472411)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ANR1s/ANR1s.webp', N'../asset/img/ANR1s/805476_02_cfb9d749e5b44244a81fe2eb26d7d872_master.webp', 472411)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ANR1s/ANR1s.webp', N'../asset/img/ANR1s/805476_03_5b1f6309b4354dd1b008d8b5e35e0210_master.webp', 472411)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ANR1s/ANR1s.webp', N'../asset/img/ANR1s/805476_04_d066243e2d374e2485153814799ac0a1_master.webp', 472411)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/AECA/AECA.webp', N'../asset/img/AECA/801740_1_e4adfa6d09b7468a8c9fb21bf8e02bd4_master.webp', 546239)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/AECA/AECA.webp', N'../asset/img/AECA/801740_3_1abe518578db43cdaf7d9a952564e156_master.webp', 546239)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/AECA/AECA.webp', N'../asset/img/AECA/801740_4_6fb0a9165c614f86bfd31ce908d6ef55_master.webp', 546239)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/AECA/AECA.webp', N'../asset/img/AECA/AECA.webp', 546239)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ANR1/ANR1.webp', N'../asset/img/ANR1/ANR1.webp', 565467)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ANR1/ANR1.webp', N'../asset/img/ANR1/201493_1_017364c87c3e4802a8cda5259e3d5a95_master.webp', 565467)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ANR1/ANR1.webp', N'../asset/img/ANR1/201493_3_af57a63d212a47c98da50ccc4c8027bb_master.webp', 565467)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/ANR1/ANR1.webp', N'../asset/img/ANR1/201493_4_f29671849e624803927cc9bf970b3736_master.webp', 565467)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/AUTBM/AUTBM.webp', N'../asset/img/AUTBM/201281_02_22cbc76b71ff47e9a31b4833b01b8c2d_master.webp', 628412)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/AUTBM/AUTBM.webp', N'../asset/img/AUTBM/201281_03_3de336e846f8402994e73c40df35099d_master.webp', 628412)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/AUTBM/AUTBM.webp', N'../asset/img/AUTBM/201281_04_6ef5352df3df4637b565b3539b3b6192_master.webp', 628412)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/AUTBM/AUTBM.webp', N'../asset/img/AUTBM/AUTBM.webp', 628412)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAHR/NAHR.webp', N'../asset/img/NAHR/NAHR.webp', 721043)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAHR/NAHR.webp', N'../asset/img/NAHR/052077_01_4af6cbc2ae1f470289522577d1d12af8_master.webp', 721043)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAHR/NAHR.webp', N'../asset/img/NAHR/052077_02_b3904ef1cb874f6c8ac0b644db73ccc5_master.webp', 721043)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAHR/NAHR.webp', N'../asset/img/NAHR/052077_03_ceef344af646406ea2c4446b2fdcec21_master.webp', 721043)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAHR/NAHR.webp', N'../asset/img/NAHR/052077_04_99e9cb020c584c3ea85555c002308c0f_master.webp', 721043)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAHR/NAHR.webp', N'../asset/img/NAHR/nike-ws-air-huarache-run-white-white-052856_1_b8e1fd1f714a4b46b08ecd3f79c1e815_master.webp', 721043)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAHR/NAHR.webp', N'../asset/img/NAHR/nike-ws-air-huarache-run-white-white-052856_3_372d26f6a6e4483e9c6ee9fdcebfdf47_master.webp', 721043)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAHR/NAHR.webp', N'../asset/img/NAHR/nike-ws-air-huarache-run-white-white-052856_4_cdd5316103544d5f82dde6bfd81d2cd1_master.webp', 721043)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/T10NAP/T10NAP.webp', N'../asset/img/T10NAP/803977_01_3913c493d60549748320d5d7f1e876ee_master.webp', 723041)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/T10NAP/T10NAP.webp', N'../asset/img/T10NAP/803977_02_44271843e1b04055be90c8c5ec1e57ed_master.webp', 723041)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/T10NAP/T10NAP.webp', N'../asset/img/T10NAP/803977_03_8c5c2a5f31e34d63aaefd936e2206033_master.webp', 723041)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/T10NAP/T10NAP.webp', N'../asset/img/T10NAP/803977_04_1ffa49aa472e4934a494ad2d1e734c3c_master.webp', 723041)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/T10NAP/T10NAP.webp', N'../asset/img/T10NAP/804113_01_8afb9ba886124873bee6e0b3085b0208_master.webp', 723041)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/T10NAP/T10NAP.webp', N'../asset/img/T10NAP/804113_03_16600a86f38e4810bd7895d8e54940ba_master.webp', 723041)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/T10NAP/T10NAP.webp', N'../asset/img/T10NAP/804113_04_14ad48e0c1144b839587eae365dc3e3c_master.webp', 723041)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/T10NAP/T10NAP.webp', N'../asset/img/T10NAP/804113_05_aec8fd1312804e5895755eb16b9d3da4_master.webp', 723041)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/T10NAP/T10NAP.webp', N'../asset/img/T10NAP/T10NAP.webp', 723041)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/AYB/AYB.webp', N'../asset/img/AYB/AYB.webp', 734052)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM9E/NAM9E.webp', N'../asset/img/NAM9E/NAM9E.webp', 743027)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM9E/NAM9E.webp', N'../asset/img/NAM9E/139922_01_3c370943afbe421e904dfeff43e21db6_master.webp', 743027)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM9E/NAM9E.webp', N'../asset/img/NAM9E/139922_03_baa5389cb3704c6184d7bd9411d1456a_master.webp', 743027)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM9E/NAM9E.webp', N'../asset/img/NAM9E/139922_04_4cfd419fc5de483cb5b4cc19e4ab305a_master.webp', 743027)
GO
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM9E/NAM9E.webp', N'../asset/img/NAM9E/803959_01_ac42067612f044e0907a1c1f38cc460d_master.webp', 743027)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM9E/NAM9E.webp', N'../asset/img/NAM9E/803959_02_0b2d95b378f34119b59f4bbf1570287e_master.webp', 743027)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM9E/NAM9E.webp', N'../asset/img/NAM9E/803959_03_36d4b3c10dfc48d88e127bfb06115d76_master.webp', 743027)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM9E/NAM9E.webp', N'../asset/img/NAM9E/803959_04_ee9d95a7131343a989df2fa4cebf2cab_master.webp', 743027)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM97P/NAM97P.webp', N'../asset/img/NAM97P/806032_02_93f10da814884f8e85dbff9d9e4ac81f_master.webp', 846212)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM97P/NAM97P.webp', N'../asset/img/NAM97P/806032_03_2f60807458144be699c2e39bd656e9a2_master.webp', 846212)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM97P/NAM97P.webp', N'../asset/img/NAM97P/806032_04_af5bedb200754917aae4b47379ac70be_master.webp', 846212)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/NAM97P/NAM97P.webp', N'../asset/img/NAM97P/NAM97P.webp', 846212)
INSERT [dbo].[hinhanhsp] ([urlmain], [url], [masp]) VALUES (N'../asset/img/YZ350/YZ350.webp', N'../asset/img/YZ350/YZ350.webp', 934732)
GO
INSERT [dbo].[khachhang] ([makhachhang], [tenkhachhang], [email], [sdt], [diachi], [tentk], [matkhau]) VALUES (123456, N'Lê Văn Diễn', N'dien@gmail.com', 123456789, N'Thành phố Hồ Chí Minh', N'dien123', N'1234567890')
INSERT [dbo].[khachhang] ([makhachhang], [tenkhachhang], [email], [sdt], [diachi], [tentk], [matkhau]) VALUES (234567, N'Nguyễn Tăng Chương', N'chuong@gmail.com', 123456789, N'Thành phố Hồ Chí Minh', N'chuong123', N'1234567890')
INSERT [dbo].[khachhang] ([makhachhang], [tenkhachhang], [email], [sdt], [diachi], [tentk], [matkhau]) VALUES (345678, N'Nguyễn Hoàng Thiên Phú', N'phu@gmail.com', 123456789, N'Thành phố Hồ Chí Minh', N'phu123', N'1234567890')
GO
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (35, 103294)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (37, 103294)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (38, 103294)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 103294)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (35, 123213)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (37, 123213)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (38, 123213)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 123213)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 123213)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (35, 123217)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (37, 123217)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (38, 123217)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 123217)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 123217)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (36, 123563)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (37, 123563)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 123563)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 123563)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (35, 182131)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (37, 182131)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (38, 182131)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 182131)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 182131)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (35, 213313)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (38, 213313)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 213313)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (35, 234234)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (36, 234234)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (37, 234234)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (38, 234234)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 234234)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (35, 238934)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (36, 238934)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (38, 238934)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 238934)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 238934)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (36, 255462)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (38, 255462)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 255462)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 255462)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (36, 324123)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (37, 324123)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 324123)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 324123)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (36, 345435)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (37, 345435)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (38, 345435)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 345435)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (35, 435435)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (36, 435435)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (37, 435435)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (38, 435435)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 435435)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 435435)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (35, 464645)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (36, 464645)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (38, 464645)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 464645)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (35, 472411)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (36, 472411)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (37, 472411)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (38, 472411)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 472411)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (35, 546239)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (37, 546239)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (38, 546239)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 546239)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 546239)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (35, 565467)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (36, 565467)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 565467)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 565467)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (35, 628412)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (36, 628412)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (38, 628412)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 628412)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 628412)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (35, 721043)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (37, 721043)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (38, 721043)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 721043)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 721043)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (36, 723041)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (37, 723041)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (38, 723041)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 723041)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 723041)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (35, 734052)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (37, 734052)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (38, 734052)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 734052)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 734052)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (35, 743027)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (36, 743027)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (37, 743027)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 743027)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 743027)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (35, 846212)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (36, 846212)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (37, 846212)
GO
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 846212)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 846212)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (35, 934732)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (36, 934732)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (37, 934732)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (39, 934732)
INSERT [dbo].[kichthuocsp] ([kichthuoc], [masp]) VALUES (40, 934732)
GO
INSERT [dbo].[loaigiay] ([maloai], [tenloai]) VALUES (123, N'Nike')
INSERT [dbo].[loaigiay] ([maloai], [tenloai]) VALUES (456, N'Adidas')
INSERT [dbo].[loaigiay] ([maloai], [tenloai]) VALUES (789, N'Sản phẩm tặng')
GO
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Đỏ', 103294, N'#E2262A')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Trắng', 123213, N'#FFFFFF')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Trắng', 123217, N'#FFFFFF')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Xanh', 123563, N'#6DAEF4')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Xám', 182131, N'#FDFAEF')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Trắng', 213313, N'#FFFFFF')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Tím', 234234, N'#3E3473')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Trắng', 238934, N'#FFFFFF')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Đỏ', 255462, N'#E2262A')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Trắng', 324123, N'#FFFFFF')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Xanh', 345435, N'#6DAEF4')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Đen', 435435, N'#000000')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Xanh', 464645, N'#6DAEF4')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Cam', 472411, N'#FB4727')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Trắng', 546239, N'#FFFFFF')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Xanh', 565467, N'#6DAEF4')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Xanh', 628412, N'#6DAEF4')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Trắng', 721043, N'#FFFFFF')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Trắng', 723041, N'#FFFFFF')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Xám', 734052, N'#FDFAEF')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Tím', 743027, N'#3E3473')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Xanh', 846212, N'#6DAEF4')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Trắng', 934732, N'#FFFFFF')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Đen', 123213, N'#000000')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Xám', 123563, N'#FDFAEF')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Cam', 324123, N'#FB4727')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Đen', 721043, N'#000000')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Đen', 723041, N'#000000')
INSERT [dbo].[mausacsp] ([mausac], [masp], [mamau]) VALUES (N'Xanh', 743027, N'#6DAEF4')
GO
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (103294, N'Nike Air Max 1 Anniversary', 4200000, 123, 123, 456)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (123213, N'Sản phẩm tặng 3', 0, 456, 789, 345)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (123217, N'Nike Wmns Air Huarache City Move', 5200000, 123, 123, 567)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (123563, N'Adidas PW Solar HU NMD "Inspiration Pack"', 4200000, 456, 456, 234)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (182131, N'Adidas Nmd Xr1 W "Pearl Grey"', 5750000, 456, 456, 456)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (213313, N'Sản phẩm tặng 1', 0, 123, 789, 345)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (234234, N'Sản phẩm tặng 2', 0, 456, 789, 345)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (238934, N'ZX 930 X EQT NEVER MADE PACK', 4000000, 123, 123, 123)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (255462, N'Ultra Boost', 4700000, 456, 456, 456)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (324123, N'Nike Air Max 1 Se "Just Do It"', 4900000, 123, 123, 123)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (345435, N'Adidas Ultraboost W', 5300000, 456, 456, 567)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (435435, N'Adidas NMD_R1 "Molded Stripes"', 5400000, 456, 456, 456)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (464645, N'Adidas Zx 4000 4d', 6400000, 456, 456, 234)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (472411, N'Adidas Nmd R1', 3500000, 456, 456, 567)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (546239, N'Adidas EQT Cushion ADV "North America"', 7000000, 456, 456, 456)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (565467, N'Adidas Nmd R1 "Villa Exclusive"', 7000000, 456, 456, 456)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (628412, N'Adidas Ultra Boost M', 6100000, 456, 456, 456)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (721043, N'Nike W''s Air Huarache Run "Triple White"', 7300000, 123, 123, 123)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (723041, N'The 10: Nike Air Presto "Off White"', 8000000, 123, 123, 123)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (734052, N'Adidas Yeezy Boost 700 "Wave Runner"', 6800000, 456, 456, 567)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (743027, N'Nike Air Max 90 Essential "Grape"', 4800000, 123, 123, 123)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (846212, N'Nike Air Max 97 Premium', 8000000, 123, 123, 456)
INSERT [dbo].[sanpham] ([masp], [tensp], [giatien], [mathuonghieu], [maloai], [madanhmuc]) VALUES (934732, N'Adidas Yeezy boost 350 v2 "zebra"', 6000000, 456, 456, 234)
GO
INSERT [dbo].[thuonghieu] ([mathuonghieu], [tenthuonghieu]) VALUES (123, N'Nike')
INSERT [dbo].[thuonghieu] ([mathuonghieu], [tenthuonghieu]) VALUES (456, N'Adidas')
GO
ALTER TABLE [dbo].[chitietdonhang]  WITH CHECK ADD FOREIGN KEY([madonhang])
REFERENCES [dbo].[donhang] ([madonhang])
GO
ALTER TABLE [dbo].[chitietdonhang]  WITH CHECK ADD FOREIGN KEY([madonhang])
REFERENCES [dbo].[donhang] ([madonhang])
GO
ALTER TABLE [dbo].[chitietdonhang]  WITH CHECK ADD FOREIGN KEY([masp])
REFERENCES [dbo].[sanpham] ([masp])
GO
ALTER TABLE [dbo].[chitietdonhang]  WITH CHECK ADD FOREIGN KEY([masp])
REFERENCES [dbo].[sanpham] ([masp])
GO
ALTER TABLE [dbo].[danhgiasp]  WITH CHECK ADD FOREIGN KEY([masp])
REFERENCES [dbo].[sanpham] ([masp])
GO
ALTER TABLE [dbo].[danhgiasp]  WITH CHECK ADD FOREIGN KEY([masp])
REFERENCES [dbo].[sanpham] ([masp])
GO
ALTER TABLE [dbo].[donhang]  WITH CHECK ADD FOREIGN KEY([makhachhang])
REFERENCES [dbo].[khachhang] ([makhachhang])
GO
ALTER TABLE [dbo].[donhang]  WITH CHECK ADD FOREIGN KEY([makhachhang])
REFERENCES [dbo].[khachhang] ([makhachhang])
GO
ALTER TABLE [dbo].[hinhanhsp]  WITH CHECK ADD FOREIGN KEY([masp])
REFERENCES [dbo].[sanpham] ([masp])
GO
ALTER TABLE [dbo].[kichthuocsp]  WITH CHECK ADD FOREIGN KEY([masp])
REFERENCES [dbo].[sanpham] ([masp])
GO
ALTER TABLE [dbo].[mausacsp]  WITH CHECK ADD FOREIGN KEY([masp])
REFERENCES [dbo].[sanpham] ([masp])
GO
ALTER TABLE [dbo].[sanpham]  WITH CHECK ADD FOREIGN KEY([madanhmuc])
REFERENCES [dbo].[danhmuc] ([madanhmuc])
GO
ALTER TABLE [dbo].[sanpham]  WITH CHECK ADD FOREIGN KEY([madanhmuc])
REFERENCES [dbo].[danhmuc] ([madanhmuc])
GO
ALTER TABLE [dbo].[sanpham]  WITH CHECK ADD FOREIGN KEY([maloai])
REFERENCES [dbo].[loaigiay] ([maloai])
GO
ALTER TABLE [dbo].[sanpham]  WITH CHECK ADD FOREIGN KEY([maloai])
REFERENCES [dbo].[loaigiay] ([maloai])
GO
ALTER TABLE [dbo].[sanpham]  WITH CHECK ADD FOREIGN KEY([mathuonghieu])
REFERENCES [dbo].[thuonghieu] ([mathuonghieu])
GO
ALTER TABLE [dbo].[sanpham]  WITH CHECK ADD FOREIGN KEY([mathuonghieu])
REFERENCES [dbo].[thuonghieu] ([mathuonghieu])
GO
ALTER TABLE [dbo].[donhang]  WITH CHECK ADD CHECK  (([trangthaidonhang]=N'đang xử lý' OR [trangthaidonhang]=N'đã giao' OR [trangthaidonhang]=N'đã huỷ'))
GO
ALTER TABLE [dbo].[donhang]  WITH CHECK ADD CHECK  (([trangthaidonhang]=N'đang xử lý' OR [trangthaidonhang]=N'đã giao' OR [trangthaidonhang]=N'đã huỷ'))
GO
USE [master]
GO
ALTER DATABASE [runnerinn] SET  READ_WRITE 
GO
