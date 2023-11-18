<?php
    include "../views/Admin/menu.php";
    include "../views/Admin/left.php";
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            
            case 'binhluan':
                include '../views/Admin/binhluan/binhluan.php';
                break;
            case 'danhmuc':
                include '../views/Admin/danhmuc/danhmuc.php';
                break;
            case 'themdm':
                include '../views/Admin/danhmuc/themdm.php';
                break;
            case 'khuyenmai':
                include '../views/Admin/khuyenmai/khuyenmai.php';
                break;
            case 'themkm':
                include '../views/Admin/khuyenmai/themkm.php';
                break;
            case 'taikhoan':
                include '../views/Admin/taikhoan/taikhoan.php';
                break;
            case 'themtk':
                include '../views/Admin/taikhoan/themtk.php';
                break;
            case 'chitiettk':
                include '../views/Admin/taikhoan/themtk.php';
                break;
            case 'sanpham':
                include '../views/Admin/sanpham/sanpham.php';
                break;
            case 'chitietdh':
                include '../views/Admin/sanpham/chitietdh.php';
                break;
            case 'themsp':
                include '../views/Admin/sanpham/themsp.php';
                break;
            case 'donhang':
                include '../views/Admin/donhang/donhang.php';
                break;
    

        }

    }
    else{
        include "../views/Admin/home.php";
    }
    include "../views/Admin/footer.php";
?>