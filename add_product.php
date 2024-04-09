<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/add_product.css">
</head>
<body>

    <header class="header">
            <div class="menu-1">
                <ul>
                    <li class="hihi" ><a href="#">Kênh người bán</a></li>
                    <li class="hihi" ><a href="#">Tải ứng dụng</a></li>
                    <li><a href="#">Kết nối</a></li>
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>

                <ul style="position: relative;">
                    <li><a href="#"><i class="fa-solid fa-bell"></i>Thông báo</a></li>
                    <li><a href="#"><i class="fa-solid fa-headset"></i>Hỗ trợ</a></li>
                    <li><a href="#"><i class="fa-solid fa-language"></i>Tiếng việt</a></li>
                    <li id="user"><a href="#"><i class="fa-solid fa-user-tie"></i>Diu_03_09_05</a></li>
                    <div class="action hidden">
                    <ul>
                        <?php
                            session_start();
                            function isLogin() {
                                $username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
                                if($username) {
                                    return true;
                                }
                                return false;
                            }

                            if(isLogin()) {
                                ?>
                                <li><a href="logout.php">Đăng xuất</a></li>
                                <?php
                                    $role = $_SESSION['role'];
                                    if($role == 'admin') {
                                        ?>
                                        <li><a href="admin.php">Quản lí</a></li>
                                        <?php
                                    }
                                ?>
                                <?php
                            }else {
                                ?>
                                <li><a href="register.php">Đăng kí</a></li>
                                <li><a href="login.php">Đăng nhập</a></li>
                                <?php
                            }
                        ?>    
                    </ul>
                </div>
                </ul>
            </div>


            <div class="menu-2">
                <div class="logo">
                    <a href="index.php"><img with='100px' height="50px" src="./img/logo.png" alt="logo shopee"></a>
                </div>          
                
                <div class="search">
                    <form action="" method="GET" enctype='multipart/form-data'>
                        <input name="search" type="text" placeholder="Tìm sản phẩm, thương hiệu và tên shop,...">
                        <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                        

                        <input type="submit" name="tim" value="Tìm">
                        <!-- <button id="add_product" type="submit" name="add_product">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button> -->

                    </form>

                    <?php
                        
                    ?>
                </div>

                <div class="cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
            </div>

            <div class="menu-3">
                <ul>
                    <li><a href="#">Áo thun</a></li>
                    <li><a href="#">Quà tặng bạn trai</a></li>
                    <li><a href="#">Cốc sứ</a></li>
                    <li><a href="#">Bút bi cao cấp</a></li>
                    <li><a href="#">Áo Vancity</a></li>
                    <li><a href="#">Áo khoác Retro</a></li>
                    <li><a href="#">Giày nam</a></li>
                    <li><a href="#">Mũ bảo hiểm</a></li>
                    <li><a href="#">Sữa rửa mặt</a></li>
                </ul>
            </div>

    </header>

    <div class="container">

        <?php
            $products = [
                [ 'id'=> 1,'img' => './img/ao.jpg',
                'name'=> "Áo thun", 'price' => 169000, 'soluong' => 1200, 'giamgia' => ''],
                [ 'id'=> 2,'img' => './img/qua.jpg',
                'name'=> "Quà tặng bạn trai", 'price' => 200000, 'soluong' => 34520, 'giamgia' => ''],
                [ 'id'=> 3,'img' => './img/coc.jpg',
                'name'=> "Cốc sứ", 'price' => 49000, 'soluong' => 25220, 'giamgia' => ''],
                [ 'id'=> 4,'img' => './img/srm.jpg',
                'name'=> "Sữa rửa mặt", 'price' => 99000, 'soluong' => 25360,'giamgia' => ''],
                [ 'id'=> 5,'img' => './img/aojacket.jpg',
                'name'=> "Áo Jacket", 'price' => 399000, 'soluong' => 34370,  'giamgia' => ''],
                [ 'id'=> 6,'img' => './img/mbh.jpg',
                'name'=> "Mũ bảo hiểm", 'price' => 75000, 'soluong' => 234640, 'giamgia' => ''],
                [ 'id'=> 7,'img' => './img/nike.jpg',
                'name'=> "Giày NIKE", 'price' => 489000, 'soluong' => 64430,  'giamgia' => 'co giam gia'],
                [ 'id'=> 8,'img' => './img/loa.jpg',
                'name'=> "Loa Bluetooth", 'price' => 189000, 'soluong' => 2330, 'giamgia' => ''],
                [ 'id'=> 5,'img' => './img/ban.jpg',
                'name'=> "Bàn làm việc", 'price' => 579000, 'soluong' => 5840,  'giamgia' => ''],
                [ 'id'=> 6,'img' => './img/ghe.jpg',
                'name'=> "Ghế Xoay VP", 'price' => 400000, 'soluong' => 6580, 'giamgia' => ''],
                [ 'id'=> 7,'img' => './img/guong.jpg',
                'name'=> "Gương soi", 'price' => 205000, 'soluong' => 7480,  'giamgia' => 'co giam gia'],
                [ 'id'=> 8,'img' => './img/tui.jpg',
                'name'=> "Túi Xách", 'price' => 105000, 'soluong' => 8640, 'giamgia' => ''],
                [ 'id'=> 1,'img' => './img/quan.jpg',
                'name'=> "Quần short kaki nữ", 'price' => 99000, 'soluong' => 1200, 'giamgia' => ''],
                [ 'id'=> 2,'img' => './img/dbt.jpg',
                'name'=> "Dây buộc tóc", 'price' => 17000, 'soluong' => 34520, 'giamgia' => ''],
                [ 'id'=> 3,'img' => './img/stam.jpg',
                'name'=> "Sữa tắm", 'price' => 309000, 'soluong' => 25220, 'giamgia' => ''],
                [ 'id'=> 4,'img' => './img/khan.jpg',
                'name'=> "Khăn mặt", 'price' => 99000, 'soluong' => 25360,'giamgia' => ''],
                [ 'id'=> 5,'img' => './img/hoa.jpg',
                'name'=> "Nguyên liệu làm hoa", 'price' => 399000, 'soluong' => 34370,  'giamgia' => ''],
                [ 'id'=> 6,'img' => './img/banhtrang.jpg',
                'name'=> "Bánh tráng", 'price' => 75000, 'soluong' => 234640, 'giamgia' => ''],
                [ 'id'=> 7,'img' => './img/nike.jpg',
                'name'=> "Giày NIKE", 'price' => 489000, 'soluong' => 64430,  'giamgia' => 'co giam gia'],
                [ 'id'=> 8,'img' => './img/loa.jpg',
                'name'=> "Loa Bluetooth", 'price' => 189000, 'soluong' => 2330, 'giamgia' => ''],
                [ 'id'=> 5,'img' => './img/ban.jpg',
                'name'=> "Bàn làm việc", 'price' => 579000, 'soluong' => 5840,  'giamgia' => ''],
                [ 'id'=> 6,'img' => './img/ghe.jpg',
                'name'=> "Ghế Xoay VP", 'price' => 400000, 'soluong' => 6580, 'giamgia' => ''],
                [ 'id'=> 7,'img' => './img/guong.jpg',
                'name'=> "Gương soi", 'price' => 205000, 'soluong' => 7480,  'giamgia' => 'co giam gia'],
                [ 'id'=> 8,'img' => './img/tui.jpg',
                'name'=> "Túi Xách", 'price' => 105000, 'soluong' => 8640, 'giamgia' => ''],
                [ 'id'=> 1,'img' => './img/ao.jpg',
                'name'=> "Áo thun", 'price' => 169000, 'soluong' => 1200, 'giamgia' => ''],
                [ 'id'=> 2,'img' => './img/qua.jpg',
                'name'=> "Quà tặng bạn trai", 'price' => 200000, 'soluong' => 34520, 'giamgia' => ''],
                [ 'id'=> 3,'img' => './img/coc.jpg',
                'name'=> "Cốc sứ", 'price' => 49000, 'soluong' => 25220, 'giamgia' => ''],
                [ 'id'=> 4,'img' => './img/srm.jpg',
                'name'=> "Sữa rửa mặt", 'price' => 99000, 'soluong' => 25360,'giamgia' => ''],
                [ 'id'=> 5,'img' => './img/aojacket.jpg',
                'name'=> "Áo Jacket", 'price' => 399000, 'soluong' => 34370,  'giamgia' => ''],
                [ 'id'=> 6,'img' => './img/mbh.jpg',
                'name'=> "Mũ bảo hiểm", 'price' => 75000, 'soluong' => 234640, 'giamgia' => ''],
                [ 'id'=> 1,'img' => './img/quan.jpg',
                'name'=> "Quần short kaki nữ", 'price' => 99000, 'soluong' => 1200, 'giamgia' => ''],
                [ 'id'=> 2,'img' => './img/dbt.jpg',
                'name'=> "Dây buộc tóc", 'price' => 17000, 'soluong' => 34520, 'giamgia' => ''],
                [ 'id'=> 3,'img' => './img/stam.jpg',
                'name'=> "Sữa tắm", 'price' => 309000, 'soluong' => 25220, 'giamgia' => ''],
                [ 'id'=> 4,'img' => './img/khan.jpg',
                'name'=> "Khăn mặt", 'price' => 99000, 'soluong' => 25360,'giamgia' => ''],
                [ 'id'=> 5,'img' => './img/hoa.jpg',
                'name'=> "Nguyên liệu làm hoa", 'price' => 399000, 'soluong' => 34370,  'giamgia' => ''],
                [ 'id'=> 6,'img' => './img/banhtrang.jpg',
                'name'=> "Bánh tráng", 'price' => 75000, 'soluong' => 234640, 'giamgia' => ''],
            ];

            
            // if(isset($_POST['add_product'])) {
            //     echo $_POST['add_product'];
                
            //     echo $_POST['name'];
            //     die();
            // }
       
        ?>

        <form class="form_product" action="" method="POST" enctype='multipart/form-data'>
            <label for="">Tên sản phẩm</label><br>
            <input type="text" name="name"><br>
            <label for="">Giá bán</label><br>
            <input type="text" name="price"><br>
            <label for="">Hình ảnh</label><br>
            <input type="file" name="img"><br>
            <input type="submit" name="add_product" value="Thêm">
        </form>
  
    </div>

    <footer class="footer">Nguyễn Thị Dịu - PH53010</footer>
    
</body>
<script src="https://kit.fontawesome.com/791d1d50ef.js" crossorigin="anonymous"></script>
<script src="js.js"></script>
</html>