<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php echo '<link rel="stylesheet" type="text/css" href="style.css" media="screen" />'; ?>


</head>

<body>
    <div class="container">
        <form action="" class="login" method="post">
            <h1>Đăng nhập</h1>
            <div class="form-text">
                <label for="">UserName</label>
                <input type="text" name="userName">
            </div>
            <div class="form-text">
                <label for="">Password</label>
                <input type="text" name="password">
            </div>
            <button name="btn">Đăng nhập</button>
            <span class='span'>Bạn chưa có tài khoản ? Đặng ký <a class="a" href="">tại đây</a></span>
            <div class='tt'>
                <?php 
    if(isset($_POST['btn'])){
    
        $userNam=$_POST['userName'];
        $password=$_POST['password'];
        $tk='Nai123';
        $mk='nai123';
        if ($userNam==$tk &&  $password==$mk ) {
           echo'Đăng nhập thành công ';
        }
        elseif ($userNam!=$tk &&  $password !=$mk ) {
            echo'Không tồn tại trên hệ thông ';
         }
        elseif ($userNam==$tk && $password != $mk) {
           echo'Mật khẩu không đúng';
        }
        elseif ($userNam!=$tk && $password == $mk) {
            echo'Tài khoản không đúng';
         }
        }
   ?>
            </div>
        </form>

    </div>


</body>

</html>