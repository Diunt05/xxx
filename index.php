<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./css/style.css">
    
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
                <img onclick="handleClick()" with='100px' height="50px" src="./img/logo.png" alt="logo shopee">
            </div>

            <div class="search">
                <form action="" method="GET" enctype='multipart/form-data'>
                    <input name="search" type="text" placeholder="Search for products...">
            

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

    <div class="home">
        <a href="index.php"><i class="fa-solid fa-house"></i></a>
    </div>
    <main class="container">
        <div class="container__heading">GỢI Ý HÔM NAY</div>
        <?php
            // include "connect.php";

            // // query ra du lieu
            // $sql = "SELECT * FROM product";

            // $arr = $conn->query($sql);
            // if($arr->rowCount() > 0){
            //     while($row = $arr->fetch(PDO::FETCH_ASSOC)){
            //         var_dump($row);
            //         echo "<br>";
            //     }
            // }
            // die();
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
           
        function searchProduct($search, $products) {
            $product_search=[];
            foreach($products as $key =>$product) {
                if(strpos(strtolower($product['name']), strtolower($search)) !== FALSE){
                    $product_search[$key] = $product;
                }
            }

            return $product_search;
        }

        if(isset($_GET['tim'])){
            $search = $_GET['search'];
            if(!empty($search)) {
                $product_search = searchProduct($search, $products);

                if(!empty($product_search)) {

                    foreach($product_search as $key=> $item)
                    {
                        echo '<div class="product">
                        <div class="img">
                            <img width="170px" height="200px" src="'.$item['img'].'" alt="" />
                        </div>

                        <div class="title">
                            <h2><a href="product_detail.php?index='.$key.'&message=hihi&number=100">'.$item['name'].'</a></h2>
                        </div>

                        <div class="info">
                            <b>'.$item['price'].'</b>
                            <i>'.$item['soluong'].'</i>
                        </div>
                    </div>';
                    }
                    
                } else { echo "<h1?>Không tìm thấy sản phẩm nào</h1>"; }
                

            } else {
                // cach 1
                foreach($products as $index => $product) 
                {
                    ?>
                    <div class="product">
                        <div class="img">
                            <img width="170px" height="200px" src="<?php echo $product['img']; ?>" alt="">
                        </div>

                        <div class="title">
                            <h2><a href="product_detail.php?index=<?php echo $index; ?>"><?php echo $product['name']; ?></a></h2>
                        </div>

                        <div class="info">
                            <b><?php echo $product['price']; ?></b>
                            <i><?php echo $product['soluong']; ?></i>
                        </div>

                        <div class="giamgia">
                            <?php
                            if(strlen($product['giamgia']) != 0) {
                                echo "<i>có giảm giá</i>";
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
            }

        } else {
            // cach 1
            foreach($products as $index => $product) {
                ?>
                <div class="product">
                    <div class="img">
                        <img width="170px" height="200px" src="<?php echo $product['img']; ?>" alt="">
                    </div>

                    <div class="title">
                        <h2><a href="product_detail.php?index=<?php echo $index; ?>"><?php echo $product['name']; ?></a></h2>
                    </div>

                    <div class="info">
                        <b><?php echo $product['price']; ?></b>
                        <i><?php echo $product['soluong']; ?></i>
                    </div>

                    <div class="giamgia">
                        <?php
                        if(strlen($product['giamgia']) != 0) {
                            echo "<i>có giảm giá</i>";
                        }
                        ?>
                    </div>
                </div>
                <?php
            }
        }

        // cach 2

        // foreach($products as $index => $product ) {
        //     echo '<div class="product">
        //     <div class="img">
        //         <img width="100px" height="50px" src="'.$product['img'].'" alt="" />
        //     </div>

        //     <div class="title">
        //         <h2><a href="product_detail.php?index='.$index.'&message=hihi&number=100">'.$product['name'].'</a></h2>
        //     </div>

        //     <div class="info">
        //         <b>'.$product['price'].'</b>
        //         <i>'.$product['soluong'].'</i>
        //     </div>
        // </div>';
        // }
        ?>
        
        
        <!-- <div class="product">
            <div class="img">
                <img width="100px" height="50px" src="https://image.anhducdigital.vn/apple/iphone/iphone-15-pro-15-pro-max/iphone-15-pro-max/iphone-15-pro-max-28.jpg" alt="">
            </div>

            <div class="title">
                <h2>IP 15 promax</h2>
            </div>

            <div class="info">
                <b>20 000 000</b>
                <i>Da ban 20</i>
            </div>
        </div>-->
    </main>

    <footer class="footer">Nguyễn Thị Dịu - PH53010</footer>
    
</body>
<script src="https://kit.fontawesome.com/791d1d50ef.js" crossorigin="anonymous"></script>
<script src="js.js"></script>
</html>