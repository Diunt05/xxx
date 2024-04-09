<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>

<?php 
        // session_set_cookie_params(3600);
        session_start();

        function isLogin() {
            $username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
            if($username) {
                return true;
            }
            return false;
        }
        if(!isLogin()) {
            ?>
            <div class="container">
                <div class="home">
                    <a href="index.php"><i class="fa-solid fa-house"></i></a>
                </div>
                <form class="form_product" action="" method="GET" enctype='multipart/form-data'>
                    <h3 style="text-align:center;width:100%">Đăng nhập</h3>
                    <label for="">Email</label><br>
                    <input class="hhhh" type="email" name="email"><br>
                    <label for="">Password</label><br>
                    <input class="hhhh" type="password" name="password"><br>

                    <input type="submit" name="login" value="Đăng nhập">

                </form>

                <?php
                    $users = [
                        ['username'=> 'diuntph53010@gmail.com', 'password'=>'12345', 'role'=>'admin'],
                        ['username'=> 'diuntph53010@gmail.com', 'password'=>'12345', 'role'=>'user']
                    ];
                    if(isset($_GET['login'])) {
                        $email = $_GET['email'];
                        $password = $_GET['password'];
                        $check = false;
                        foreach($users as $user) {
                            if($email == $user['username'] && $password == $user['password']){
                                $item = $user;
                                $check = true;
                                break;
                            }
                        }

                        if($check) {
                            echo "<script>alert('Bạn dã đăng nhập thành công')</script>";
                            // cai dat session de luu thong tin dang nhap;
                            $_SESSION['username']  = $email;
                            $_SESSION['role']  = $item['role'];

                            echo $_SESSION['username'];
                            echo $_SESSION['role'];
                            // die();
                            // header('location: index.php');
                            echo "<script>window.location.href = 'index.php';</script>";

                        }
                        else {
                            echo "<script>alert('Không có tài khoản nào như vậy.')</script>";
                        }
                    }
                    
                    
                    
                ?>
            </div>
            <?php
        }else {
            echo "<script>alert('Người dùng đã đăng nhập rồi');</script>";
        }
    ?>
    
</body>
<script src="https://kit.fontawesome.com/791d1d50ef.js" crossorigin="anonymous"></script>

</html>