<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "../css/font.php"; ?>
    <link rel="stylesheet" href="../css/login.css">
    <title>๋ก๊ทธ์ธ</title>
</head>

<body>
    <div class="container">
        <header>
            <a href="../board/index.php">โ MAIN</a>
        </header>
        <fieldset>
            <legend>
                <h2>๐ป ๋ก๊ทธ์ธ ๐ป</h2>
            </legend>
            <form action="login_proc.php" method="post" autocomplete="off">
                <div><input type="text" name="uid" class="box" placeholder="์์ด๋" autofocus></div>
                <div><input type="password" name="upw" class="box" placeholder="๋น๋ฐ๋ฒํธ"></div>
                <div><input type="submit" class="button" value="๋ก๊ทธ์ธ"></div>
            </form>
        </fieldset>
    </div>
    <small><a href="join.php">์ฒ์ ์ค์จ๋์?</a></small>
</body>

</html>