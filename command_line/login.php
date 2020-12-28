<? require_once("../lib/my_function.php") ?>

<?

    $users = array(
        "login" => "admin",
        "password" => "admin123"
    );
    echo "<a style='display:block; font-size:20px' href='{$_SERVER['HTTP_REFERER']}'>BACK</a>";
    if ($_GET['login'] == $users['login'] && $_GET['password'] == $users['password']) {
        echo "Hello, {$users['login']}!";
    } else {
        echo "Unavaliable login or passsword!!!";
        echo "<script>setTimeout(function(){ location.href = '{$_SERVER['HTTP_REFERER']}'}, 2000)</script>";
    }

    vd($_GET);
?>