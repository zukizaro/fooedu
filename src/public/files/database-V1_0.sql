CREATE DATABASE CDIO
USE CDIO
GO
/****** Object:  Table [dbo].[tbKyNang]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbKyNang](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[capdo] [nvarchar](50) NULL,
	[trinhdo] [nvarchar](500) NULL,
	[diengiai] [nvarchar](500) NULL,
	[dongtu] [nvarchar](max) NULL,
	[vidu] [nvarchar](max) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbKienThuc]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbKienThuc](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[capdo] [nvarchar](50) NULL,
	[trinhdo] [nvarchar](500) NULL,
	[diengiai] [nvarchar](500) NULL,
	[dongtu] [nvarchar](max) NULL,
	[vidu] [nvarchar](max) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbKhoa]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbKhoa](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[makhoa] [nvarchar](50) NOT NULL,
	[tenkhoa] [nvarchar](500) NOT NULL,
	[sumang] [nvarchar](500) NOT NULL,
	[tamnhin] [nvarchar](500) NOT NULL,
	[thoigiancapnhap] [smalldatetime] NULL,
	[ghichu] [nvarchar](max) NULL,
 CONSTRAINT [PK_tbKhoa] PRIMARY KEY CLUSTERED 
(
	[makhoa] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbDanhGia]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbDanhGia](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[madanhgia] [nvarchar](50) NOT NULL,
	[capdo] [nvarchar](50) NOT NULL,
	[phuongphapdanhgia] [nvarchar](max) NOT NULL,
	[phuongphapdo] [nvarchar](max) NOT NULL,
	[thoigiancapnhap] [smalldatetime] NULL,
	[ghichu] [nvarchar](max) NULL,
	[isActivity] [bit] NULL,
UNIQUE NONCLUSTERED 
(
	[capdo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[madanhgia] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbThaiDo]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbThaiDo](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[capdo] [nvarchar](50) NULL,
	[trinhdo] [nvarchar](500) NULL,
	[diengiai] [nvarchar](500) NULL,
	[dongtu] [nvarchar](max) NULL,
	[vidu] [nvarchar](max) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbPhanCong]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbPhanCong](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[maphancong] [nvarchar](50) NOT NULL,
	[mahocphan] [nvarchar](50) NOT NULL,
	[magiaovien] [nvarchar](50) NOT NULL,
	[ngayphancong] [smalldatetime] NOT NULL,
	[ngaydenhan] [smalldatetime] NULL,
	[ngayhoanthanh] [smalldatetime] NULL,
	[loaicongviec] [nvarchar](500) NULL,
	[thoigiancapnhap] [smalldatetime] NULL,
	[ghichu] [nvarchar](max) NULL,
	[isActivity] [bit] NULL,
UNIQUE NONCLUSTERED 
(
	[maphancong] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[mahocphan] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[magiaovien] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbMH_ThongTinChung]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbMH_ThongTinChung](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[mahocphan] [nvarchar](50) NOT NULL,
	[tenhocphan] [nvarchar](50) NOT NULL,
	[apdungchuyennganh] [nvarchar](100) NOT NULL,
	[sotinchi] [int] NOT NULL,
	[sotiet] [int] NOT NULL,
	[loaihocphan] [nvarchar](500) NULL,
	[dieukientienquyet] [nvarchar](500) NULL,
	[monhoctruoc] [nvarchar](500) NULL,
	[thoigiancapnhap] [smalldatetime] NULL,
	[ghichu] [nvarchar](max) NULL,
	[isActivity] [bit] NULL,
UNIQUE NONCLUSTERED 
(
	[mahocphan] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[mahocphan] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbChuanDauRa]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbChuanDauRa](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[capdo] [nvarchar](50) NOT NULL,
	[capdo1] [int] NOT NULL,
	[capdo2] [int] NOT NULL,
	[capdo3] [int] NOT NULL,
	[capdo4] [int] NOT NULL,
	[capdocha] [nvarchar](50) NULL,
	[noidung] [nvarchar](max) NULL,
	[diengiai] [nvarchar](max) NULL,
	[ngaycapnhat] [smalldatetime] NULL,
	[nguoicapnhat] [nvarchar](500) NULL,
	[minhchung] [nvarchar](max) NULL,
	[lansua] [int] NULL,
	[isActivity] [bit] NOT NULL,
UNIQUE NONCLUSTERED 
(
	[capdo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbBoMon]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbBoMon](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[makhoa] [nvarchar](50) NOT NULL,
	[mabomon] [nvarchar](50) NOT NULL,
	[tenbomon] [nvarchar](500) NOT NULL,
	[muctieudaotao] [nvarchar](500) NOT NULL,
	[thoigiancapnhap] [smalldatetime] NULL,
	[ghichu] [nvarchar](max) NULL,
UNIQUE NONCLUSTERED 
(
	[mabomon] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[makhoa] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbGiaoVien]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbGiaoVien](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[mabomon] [nvarchar](50) NOT NULL,
	[magiaovien] [nvarchar](50) NOT NULL,
	[tengiaovien] [nvarchar](500) NOT NULL,
	[ngaysinh] [smalldatetime] NULL,
	[noisinh] [nvarchar](500) NULL,
	[ngayvaolam] [smalldatetime] NULL,
	[trinhdo] [nvarchar](500) NULL,
	[thoigiancapnhap] [smalldatetime] NULL,
	[ghichu] [nvarchar](max) NULL,
UNIQUE NONCLUSTERED 
(
	[mabomon] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[magiaovien] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  StoredProcedure [dbo].[DSChuanDaura]    Script Date: 11/28/2015 10:27:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE proc [dbo].[DSChuanDaura]
(
@capdo nvarchar(50) ,
@noidung nvarchar(max),
@diengiai nvarchar(max),
@nguoicapnhat nvarchar(500),
@minhchung nvarchar(max),
@tungay smalldatetime,
@denngay smalldatetime
)
as
begin
SELECT     * , ROW_NUMBER()  OVER (ORDER BY tbChuanDauRa.capdo) AS STT
FROM         dbo.tbChuanDauRa
WHERE     (capdo  LIKE @capdo + N'%') AND (noidung LIKE N'%' + @noidung + N'%') AND (diengiai LIKE N'%' + @diengiai + N'%') AND (nguoicapnhat LIKE N'%' + @nguoicapnhat + N'%') 
                      AND (minhchung LIKE N'%' + @minhchung + N'%') AND (ngaycapnhat BETWEEN @tungay AND @denngay)
end
GO
/****** Object:  Table [dbo].[tbMH_ThiCuoiKy]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbMH_ThiCuoiKy](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[mathicuoiky] [nvarchar](50) NOT NULL,
	[mahocphan] [nvarchar](50) NOT NULL,
	[hinhthucthi] [nvarchar](100) NULL,
	[thoigian] [int] NULL,
	[trongso] [int] NULL,
	[thoigiancapnhap] [smalldatetime] NULL,
	[ghichu] [nvarchar](max) NULL,
	[isActivity] [bit] NULL,
UNIQUE NONCLUSTERED 
(
	[mahocphan] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[mathicuoiky] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbMH_TaiLieuHocTap]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbMH_TaiLieuHocTap](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[matailieuhoctap] [nvarchar](50) NOT NULL,
	[mahocphan] [nvarchar](50) NOT NULL,
	[loaitailieu] [nvarchar](max) NULL,
	[tentailieu] [nvarchar](max) NULL,
	[thoigiancapnhap] [smalldatetime] NULL,
	[ghichu] [nvarchar](max) NULL,
	[isActivity] [bit] NULL,
UNIQUE NONCLUSTERED 
(
	[matailieuhoctap] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[mahocphan] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbMH_PhanBoThoiLuong]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbMH_PhanBoThoiLuong](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[maphanbothoiluong] [nvarchar](50) NOT NULL,
	[mahocphan] [nvarchar](50) NOT NULL,
	[lythuyet] [int] NULL,
	[baitap] [int] NULL,
	[thaoluan] [int] NULL,
	[thinghiem] [int] NULL,
	[tuhoc] [int] NULL,
	[thoigiancapnhap] [smalldatetime] NULL,
	[ghichu] [nvarchar](max) NULL,
	[isActivity] [bit] NULL,
UNIQUE NONCLUSTERED 
(
	[maphanbothoiluong] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[mahocphan] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbMH_NoiDungChiTiet]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbMH_NoiDungChiTiet](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[manoidungchitiet] [nvarchar](50) NOT NULL,
	[mahocphan] [nvarchar](50) NOT NULL,
	[noidung] [nvarchar](max) NOT NULL,
	[lythuyet] [int] NULL,
	[thuchanh] [int] NULL,
	[thoigiancapnhap] [smalldatetime] NULL,
	[ghichu] [nvarchar](max) NULL,
	[isActivity] [bit] NULL,
UNIQUE NONCLUSTERED 
(
	[manoidungchitiet] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[mahocphan] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbMH_NhiemVu]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbMH_NhiemVu](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[manhiemvu] [nvarchar](50) NOT NULL,
	[mahocphan] [nvarchar](50) NOT NULL,
	[nhiemvu] [nvarchar](max) NOT NULL,
	[yeucau] [nvarchar](max) NOT NULL,
	[thoigiancapnhap] [smalldatetime] NULL,
	[ghichu] [nvarchar](max) NULL,
	[isActivity] [bit] NULL,
UNIQUE NONCLUSTERED 
(
	[manhiemvu] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[mahocphan] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbMH_MucTieuThaiDo]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbMH_MucTieuThaiDo](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[mathaido] [nvarchar](50) NOT NULL,
	[mahocphan] [nvarchar](50) NOT NULL,
	[noidung] [nvarchar](max) NOT NULL,
	[capdo] [nvarchar](50) NULL,
	[thoigiancapnhap] [smalldatetime] NULL,
	[ghichu] [nvarchar](max) NULL,
	[isActivity] [bit] NULL,
UNIQUE NONCLUSTERED 
(
	[mathaido] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[mahocphan] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbMH_MucTieuKyNang]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbMH_MucTieuKyNang](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[makynang] [nvarchar](50) NOT NULL,
	[mahocphan] [nvarchar](50) NOT NULL,
	[noidung] [nvarchar](max) NULL,
	[capdo] [nvarchar](50) NULL,
	[thoigiancapnhap] [smalldatetime] NULL,
	[ghichu] [nvarchar](max) NULL,
	[isActivity] [bit] NULL,
UNIQUE NONCLUSTERED 
(
	[mahocphan] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[makynang] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbMH_MucTieuKienThuc]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbMH_MucTieuKienThuc](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[makienthuc] [nvarchar](50) NOT NULL,
	[mahocphan] [nvarchar](50) NOT NULL,
	[noidung] [nvarchar](max) NULL,
	[capdo] [nvarchar](50) NULL,
	[thoigiancapnhap] [smalldatetime] NULL,
	[ghichu] [nvarchar](max) NULL,
	[isActivity] [bit] NULL,
UNIQUE NONCLUSTERED 
(
	[makienthuc] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[mahocphan] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbMH_MoTaHocPhan]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbMH_MoTaHocPhan](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[mamotahocphan] [nvarchar](50) NOT NULL,
	[mahocphan] [nvarchar](50) NOT NULL,
	[noidung] [nvarchar](max) NOT NULL,
	[thoigiancapnhap] [smalldatetime] NULL,
	[ghichu] [nvarchar](max) NULL,
	[isActivity] [bit] NULL,
UNIQUE NONCLUSTERED 
(
	[mahocphan] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[mamotahocphan] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tbMH_DanhGiaQuaTrinh]    Script Date: 11/28/2015 10:27:26 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tbMH_DanhGiaQuaTrinh](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[madanhgiaquatrinh] [nvarchar](50) NOT NULL,
	[mahocphan] [nvarchar](50) NOT NULL,
	[hinhthuckiemtra] [nvarchar](100) NULL,
	[solankiemtra] [int] NULL,
	[trongso] [int] NULL,
	[thoigiancapnhap] [smalldatetime] NULL,
	[ghichu] [nvarchar](max) NULL,
	[isActivity] [bit] NULL,
UNIQUE NONCLUSTERED 
(
	[mahocphan] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY],
UNIQUE NONCLUSTERED 
(
	[madanhgiaquatrinh] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  ForeignKey [FK_tbBoMon_tbKhoa]    Script Date: 11/28/2015 10:27:26 ******/
ALTER TABLE [dbo].[tbBoMon]  WITH CHECK ADD  CONSTRAINT [FK_tbBoMon_tbKhoa] FOREIGN KEY([makhoa])
REFERENCES [dbo].[tbKhoa] ([makhoa])
GO
ALTER TABLE [dbo].[tbBoMon] CHECK CONSTRAINT [FK_tbBoMon_tbKhoa]
GO
/****** Object:  ForeignKey [FK_tbChuanDauRa_tbDanhGia]    Script Date: 11/28/2015 10:27:26 ******/
ALTER TABLE [dbo].[tbChuanDauRa]  WITH CHECK ADD  CONSTRAINT [FK_tbChuanDauRa_tbDanhGia] FOREIGN KEY([capdo])
REFERENCES [dbo].[tbDanhGia] ([capdo])
GO
ALTER TABLE [dbo].[tbChuanDauRa] CHECK CONSTRAINT [FK_tbChuanDauRa_tbDanhGia]
GO
/****** Object:  ForeignKey [FK_tbGiaoVien_tbBoMon]    Script Date: 11/28/2015 10:27:26 ******/
ALTER TABLE [dbo].[tbGiaoVien]  WITH CHECK ADD  CONSTRAINT [FK_tbGiaoVien_tbBoMon] FOREIGN KEY([mabomon])
REFERENCES [dbo].[tbBoMon] ([mabomon])
GO
ALTER TABLE [dbo].[tbGiaoVien] CHECK CONSTRAINT [FK_tbGiaoVien_tbBoMon]
GO
/****** Object:  ForeignKey [FK_tbGiaoVien_tbPhanCong]    Script Date: 11/28/2015 10:27:26 ******/
ALTER TABLE [dbo].[tbGiaoVien]  WITH CHECK ADD  CONSTRAINT [FK_tbGiaoVien_tbPhanCong] FOREIGN KEY([magiaovien])
REFERENCES [dbo].[tbPhanCong] ([magiaovien])
GO
ALTER TABLE [dbo].[tbGiaoVien] CHECK CONSTRAINT [FK_tbGiaoVien_tbPhanCong]
GO
/****** Object:  ForeignKey [FK_tbMH_DanhGiaQuaTrinh_tbMH_ThongTinChung]    Script Date: 11/28/2015 10:27:26 ******/
ALTER TABLE [dbo].[tbMH_DanhGiaQuaTrinh]  WITH CHECK ADD  CONSTRAINT [FK_tbMH_DanhGiaQuaTrinh_tbMH_ThongTinChung] FOREIGN KEY([mahocphan])
REFERENCES [dbo].[tbMH_ThongTinChung] ([mahocphan])
GO
ALTER TABLE [dbo].[tbMH_DanhGiaQuaTrinh] CHECK CONSTRAINT [FK_tbMH_DanhGiaQuaTrinh_tbMH_ThongTinChung]
GO
/****** Object:  ForeignKey [FK_tbMH_MoTaHocPhan_tbMH_ThongTinChung]    Script Date: 11/28/2015 10:27:26 ******/
ALTER TABLE [dbo].[tbMH_MoTaHocPhan]  WITH CHECK ADD  CONSTRAINT [FK_tbMH_MoTaHocPhan_tbMH_ThongTinChung] FOREIGN KEY([mamotahocphan])
REFERENCES [dbo].[tbMH_ThongTinChung] ([mahocphan])
GO
ALTER TABLE [dbo].[tbMH_MoTaHocPhan] CHECK CONSTRAINT [FK_tbMH_MoTaHocPhan_tbMH_ThongTinChung]
GO
/****** Object:  ForeignKey [FK_tbMH_MucTieuKienThuc_tbChuanDauRa]    Script Date: 11/28/2015 10:27:26 ******/
ALTER TABLE [dbo].[tbMH_MucTieuKienThuc]  WITH CHECK ADD  CONSTRAINT [FK_tbMH_MucTieuKienThuc_tbChuanDauRa] FOREIGN KEY([capdo])
REFERENCES [dbo].[tbChuanDauRa] ([capdo])
GO
ALTER TABLE [dbo].[tbMH_MucTieuKienThuc] CHECK CONSTRAINT [FK_tbMH_MucTieuKienThuc_tbChuanDauRa]
GO
/****** Object:  ForeignKey [FK_tbMH_MucTieuKienThuc_tbMH_ThongTinChung]    Script Date: 11/28/2015 10:27:26 ******/
ALTER TABLE [dbo].[tbMH_MucTieuKienThuc]  WITH CHECK ADD  CONSTRAINT [FK_tbMH_MucTieuKienThuc_tbMH_ThongTinChung] FOREIGN KEY([mahocphan])
REFERENCES [dbo].[tbMH_ThongTinChung] ([mahocphan])
GO
ALTER TABLE [dbo].[tbMH_MucTieuKienThuc] CHECK CONSTRAINT [FK_tbMH_MucTieuKienThuc_tbMH_ThongTinChung]
GO
/****** Object:  ForeignKey [FK_tbMH_MucTieuKyNang_tbChuanDauRa]    Script Date: 11/28/2015 10:27:26 ******/
ALTER TABLE [dbo].[tbMH_MucTieuKyNang]  WITH CHECK ADD  CONSTRAINT [FK_tbMH_MucTieuKyNang_tbChuanDauRa] FOREIGN KEY([capdo])
REFERENCES [dbo].[tbChuanDauRa] ([capdo])
GO
ALTER TABLE [dbo].[tbMH_MucTieuKyNang] CHECK CONSTRAINT [FK_tbMH_MucTieuKyNang_tbChuanDauRa]
GO
/****** Object:  ForeignKey [FK_tbMH_MucTieuKyNang_tbMH_ThongTinChung]    Script Date: 11/28/2015 10:27:26 ******/
ALTER TABLE [dbo].[tbMH_MucTieuKyNang]  WITH CHECK ADD  CONSTRAINT [FK_tbMH_MucTieuKyNang_tbMH_ThongTinChung] FOREIGN KEY([mahocphan])
REFERENCES [dbo].[tbMH_ThongTinChung] ([mahocphan])
GO
ALTER TABLE [dbo].[tbMH_MucTieuKyNang] CHECK CONSTRAINT [FK_tbMH_MucTieuKyNang_tbMH_ThongTinChung]
GO
/****** Object:  ForeignKey [FK_tbMH_MucTieuThaiDo_tbChuanDauRa]    Script Date: 11/28/2015 10:27:26 ******/
ALTER TABLE [dbo].[tbMH_MucTieuThaiDo]  WITH CHECK ADD  CONSTRAINT [FK_tbMH_MucTieuThaiDo_tbChuanDauRa] FOREIGN KEY([capdo])
REFERENCES [dbo].[tbChuanDauRa] ([capdo])
GO
ALTER TABLE [dbo].[tbMH_MucTieuThaiDo] CHECK CONSTRAINT [FK_tbMH_MucTieuThaiDo_tbChuanDauRa]
GO
/****** Object:  ForeignKey [FK_tbMH_MucTieuThaiDo_tbMH_ThongTinChung]    Script Date: 11/28/2015 10:27:26 ******/
ALTER TABLE [dbo].[tbMH_MucTieuThaiDo]  WITH CHECK ADD  CONSTRAINT [FK_tbMH_MucTieuThaiDo_tbMH_ThongTinChung] FOREIGN KEY([mahocphan])
REFERENCES [dbo].[tbMH_ThongTinChung] ([mahocphan])
GO
ALTER TABLE [dbo].[tbMH_MucTieuThaiDo] CHECK CONSTRAINT [FK_tbMH_MucTieuThaiDo_tbMH_ThongTinChung]
GO
/****** Object:  ForeignKey [FK_tbMH_NhiemVu_tbMH_ThongTinChung]    Script Date: 11/28/2015 10:27:26 ******/
ALTER TABLE [dbo].[tbMH_NhiemVu]  WITH CHECK ADD  CONSTRAINT [FK_tbMH_NhiemVu_tbMH_ThongTinChung] FOREIGN KEY([mahocphan])
REFERENCES [dbo].[tbMH_ThongTinChung] ([mahocphan])
GO
ALTER TABLE [dbo].[tbMH_NhiemVu] CHECK CONSTRAINT [FK_tbMH_NhiemVu_tbMH_ThongTinChung]
GO
/****** Object:  ForeignKey [FK_tbMH_NoiDungChiTiet_tbMH_ThongTinChung]    Script Date: 11/28/2015 10:27:26 ******/
ALTER TABLE [dbo].[tbMH_NoiDungChiTiet]  WITH CHECK ADD  CONSTRAINT [FK_tbMH_NoiDungChiTiet_tbMH_ThongTinChung] FOREIGN KEY([mahocphan])
REFERENCES [dbo].[tbMH_ThongTinChung] ([mahocphan])
GO
ALTER TABLE [dbo].[tbMH_NoiDungChiTiet] CHECK CONSTRAINT [FK_tbMH_NoiDungChiTiet_tbMH_ThongTinChung]
GO
/****** Object:  ForeignKey [FK_tbMH_PhanBoThoiLuong_tbMH_ThongTinChung]    Script Date: 11/28/2015 10:27:26 ******/
ALTER TABLE [dbo].[tbMH_PhanBoThoiLuong]  WITH CHECK ADD  CONSTRAINT [FK_tbMH_PhanBoThoiLuong_tbMH_ThongTinChung] FOREIGN KEY([mahocphan])
REFERENCES [dbo].[tbMH_ThongTinChung] ([mahocphan])
GO
ALTER TABLE [dbo].[tbMH_PhanBoThoiLuong] CHECK CONSTRAINT [FK_tbMH_PhanBoThoiLuong_tbMH_ThongTinChung]
GO
/****** Object:  ForeignKey [FK_tbMH_TaiLieuHocTap_tbMH_ThongTinChung]    Script Date: 11/28/2015 10:27:26 ******/
ALTER TABLE [dbo].[tbMH_TaiLieuHocTap]  WITH CHECK ADD  CONSTRAINT [FK_tbMH_TaiLieuHocTap_tbMH_ThongTinChung] FOREIGN KEY([mahocphan])
REFERENCES [dbo].[tbMH_ThongTinChung] ([mahocphan])
GO
ALTER TABLE [dbo].[tbMH_TaiLieuHocTap] CHECK CONSTRAINT [FK_tbMH_TaiLieuHocTap_tbMH_ThongTinChung]
GO
/****** Object:  ForeignKey [FK_tbMH_ThiCuoiKy_tbMH_ThongTinChung]    Script Date: 11/28/2015 10:27:26 ******/
ALTER TABLE [dbo].[tbMH_ThiCuoiKy]  WITH CHECK ADD  CONSTRAINT [FK_tbMH_ThiCuoiKy_tbMH_ThongTinChung] FOREIGN KEY([mahocphan])
REFERENCES [dbo].[tbMH_ThongTinChung] ([mahocphan])
GO
ALTER TABLE [dbo].[tbMH_ThiCuoiKy] CHECK CONSTRAINT [FK_tbMH_ThiCuoiKy_tbMH_ThongTinChung]
GO
/****** Object:  ForeignKey [FK_tbMH_ThongTinChung_tbPhanCong]    Script Date: 11/28/2015 10:27:26 ******/
ALTER TABLE [dbo].[tbMH_ThongTinChung]  WITH CHECK ADD  CONSTRAINT [FK_tbMH_ThongTinChung_tbPhanCong] FOREIGN KEY([mahocphan])
REFERENCES [dbo].[tbPhanCong] ([mahocphan])
GO
ALTER TABLE [dbo].[tbMH_ThongTinChung] CHECK CONSTRAINT [FK_tbMH_ThongTinChung_tbPhanCong]
GO
