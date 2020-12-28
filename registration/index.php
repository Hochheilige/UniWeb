<!DOCTYPE html>
<html>
    <head>

        <title>Form</title>

        <meta charset="utf-8" />  
        <meta http-equiv="Cache-Control" content="no-cache" />        
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
            <h2>Регистрационная форма: </h2>
            <form action ="login.php" enctype="multipart/form-data" method="post">
                <label for="name">Введите имя:</label>
                <input type="text" name="name" value="" id="name" placeholder="Name" required="true" />
                <br>
                <label for="last_name">Введите фамилию:</label>
                <input type="text" name="last_name" value="" id="last_name" placeholder="Surname" required="true" />
                <br>
                <label for="password">Введите пароль:</label>
                <input type="password" minlength="8" name="password" value="" id="password" placeholder="Password" required="true" />
                <br>
                <label for="email">Введите почту:</label>
                <input type="email" name="email" value="" id="email" placeholder="E-mail" required="true" />
                <br>
                <label for="date_of_birth">Введите дату рождения:</label>
                <input type="date" name="date" id="date" required="true" >
                <br>


                <label>
                    <input type="checkbox" name="adult" value="check">
                    Я взрослый!!!
                </label>

                <br>
                <br>
                <label for="file"> Загрузите аватар:<br></label>
                <input type="file" name="file">

                <br>
                <input type="submit" value="Регистрация">

            </form>
    </body>

</html>