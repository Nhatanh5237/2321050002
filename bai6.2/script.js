// let danhSachPhim =[
//     {
//     id: 1,
//     tenPhim: "Mưa đỏ",
//     namPhatHanh: 2025,
//     tuoi: 16,
//     thoiLuong: 2,
//     quocGia: "Việt Nam",
//     theLoai: "Phim chiếu rạp"
// },
// {
//     id: 2,
//     tenPhim: "Beauty and the Beast",
//     namPhatHanh: 2015,
//     tuoi: 10,
//     thoiLuong: 1.5,
//     quocGia: "Mỹ",
//     theLoai: "Phim chiếu rạp"
// },
// {
//     id: 2,
//     tenPhim: "Conan",
//     namPhatHanh: 2023,
//     tuoi: 10,
//     thoiLuong: 1.5,
//     quocGia: "Nhật Bản",
//     theLoai: "Phim hoạt hình"
// },
// ]

// let phimHienTai = danhSachPhim[0];

// let banner = document.getElementsByClassName('img')[0];

// function chonPhim(idPhim) {
//     for (let i = 0; i < danhSachPhim.length; i++;) {
//         if(danhSachPhim[i].id == idPhim) {
//             //banner.style.backgroundImage = danhSachPhim[i].poster;
//             banner.style.backgroundImage = 'url(${danhSachPhim[i].poster})';
//         }
//     }
// }

// Danh sách phim
let danhSachPhim = [
  {
    id: 1,
    tenPhim: "Mưa đỏ",
    namPhatHanh: 2025,
    tuoi: 16,
    thoiLuong: 2,
    quocGia: "Việt Nam",
    theLoai: "Phim chiếu rạp",
    poster: "../Picture/fpt/img/mua-do2-1122.jpeg"
  },
  {
    id: 2,
    tenPhim: "Người Đẹp Và Quái Thú",
    namPhatHanh: 2015,
    tuoi: 10,
    thoiLuong: 1.5,
    quocGia: "Mỹ",
    theLoai: "Phim chiếu rạp",
    poster: "../Picture/fpt/img/beauty-and-the-beast-pictures-2naz8n70w7luq83t.jpg"
  },
  {
    id: 3,
    tenPhim: "Thám Tử Lừng Danh Conan",
    namPhatHanh: 2023,
    tuoi: 10,
    thoiLuong: 1.5,
    quocGia: "Nhật Bản",
    theLoai: "Phim hoạt hình",
    poster: "../Picture/fpt/img/phim/conan.jpg"
  }
];

let phimHienTai = danhSachPhim[0];

let banner = document.querySelector('.banner img');

function chonPhim(idPhim) {
  for (let i = 0; i < danhSachPhim.length; i++) {
    if (danhSachPhim[i].id == idPhim) {
      banner.src = danhSachPhim[i].poster;

      phimHienTai = danhSachPhim[i];
    }
  }
}