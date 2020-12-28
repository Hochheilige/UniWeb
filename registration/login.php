<? require_once("../lib/my_function.php") ?>

<?
    echo "<br><a style='display:block; font-size:20px' href='{$_SERVER['HTTP_REFERER']}'>BACK</a>";
    echo "<p style='font-size:50px; text-align:center; font-family:fantasy'>Привет, {$_POST['last_name']} {$_POST['name']}!<p><br>";
    
    $file = $_FILES["file"];
    if ($_FILES['file']['error'] == 0) {
        echo "<p style='font-size:40px; text-align:center; font-family:fantasy'>Твоя аватарка успешно загружена<p><br>";
        $file_name = $_SERVER["DOCUMENT_ROOT"]."/ovchinnikov/registration/".$file["name"];
        copy($file["tmp_name"], $file_name);
        echo "<p style='text-align:center;'><img src='" .$_FILES["file"]["name"] ."'><p><br>";
    } else 
        echo "<p style='font-size:40px; text-align:center; font-family:fantasy'>Произошла ошибка при загрузке аватарки!!!<p><br>";


    echo "<p style='font-size:50px; text-align:center; font-family:fantasy'>Твой Email: {$_POST['email']}<p><br>";
    echo "<p style='font-size:50px; text-align:center; font-family:fantasy'>Ты родилися: {$_POST['date']}<p><br>";
    if (array_key_exists('adult', $_POST))
        echo "<p style='font-size:40px; text-align:center; font-family:fantasy'>Поздравляем! Ты уже взрослый!<p><br>";
    else {
        echo "<p style='font-size:40px; text-align:center; font-family:fantasy'>Маленьким сюда нельзя!<p><br>";
        echo "<script>setTimeout(function(){ location.href = '{$_SERVER['HTTP_REFERER']}'}, 2000)</script>";
    }
    

    //vd($_FILES);

    // function readImage(file) {
    //     // Check if the file is an image.
    //     if (file.type && file.type.indexOf('image') === -1) {
    //       console.log('File is not an image.', file.type, file);
    //       return;
    //     }
      
    //     const reader = new FileReader();
    //     reader.addEventListener('load', (event) => {
    //       img.src = event.target.result;
    //     });
    //     reader.readAsDataURL(file);
    //   }


    //vd($_POST);
?>