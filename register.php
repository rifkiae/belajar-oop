<?php
    require ('koneksi.php');
    require ('query.php');

    $obj = new crud;
    
    if  ($_SERVER['REQUEST_METHOD']=='$_POST'):
        $email = POST['txt_email'];
        $pass = $_POST['txt_pass'];
        $name = $_POST['txt_name'];
        if ($obj -> insertData($email, $pass, $name)):
            echo '<div class="alert alert-success">data berhasil disimpan</div>';
        else:
            echo 'div class="alert alert-denger">data gagal disimpan</div>';

        endif;
    endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="POST">
    <p>email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="txt_email" required></p>
    <p>password <input type ="password" name ="txt_pass" required></p>
    <p>nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="txt_name" required></p>
    <button> type="submit" name="register">register</button>
    </form>
    
</body>
</html>
        