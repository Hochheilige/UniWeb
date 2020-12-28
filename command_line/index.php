<? require_once("../lib/my_function.php")?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8"/>
        <meta http-equiv="Cache-Control" content="no-cache">
        <link rel="stylesheet" href="style.css">
        <title>Empty Template!</title>
    </head>
    <body>
        <?
            //vd($_SERVER);
            //vd($_GET);
        ?>
        <? echo "Данные из командной строки: {$_SERVER['QUERY_STRING']}"?>
        <br>
        <h2>Enter Form</h2>
        <form action="login.php">
            <label for="login">Enter login:</label>
            <input type="text" name="login" value="" id="name" placeholder="Enter login" required="true">
            <br>
            <label for="password">Enter password:</label>
            <input type="password" name="password" minlenhgt="8" value="" id="name" placeholder="Enter password" required="true">
            <br>
            <select name="select">
                <option value="1">Choice 1</option>
                <option value="2">Choice 3</option>
                <option value="3" selected>Choice 4</option>
                <option value="4">Choice 5</option>
                <option value="5">Choice 6</option>
            </select>
            
            <label>
                <input type="checkbox" name="chb[]" value="Check ">
                CHECKBOX_0
            </label>
            <label>
                <input type="checkbox" name="chb[]" value="Check check">
                CHECKBOX_1
            </label>
            <label>
                <input type="checkbox" name="chb[]" value="Check check check">
                CHECKBOX_2
            </label>
            <label>
                <input type="checkbox" name="chb[]" value="Check check check check">
                CHECKBOX_3
            </label>

            <textarea name="textarea" rows="3" cols="10">

            <input type="radio" name="radio" value="1">

            <input type="submit" value="Log in">
        </form>
    </body>
</html>