<?php
    include_once "db/db_board.php";
    session_start();
    $nm= "";
    if(isset($_SESSION["login_user"])) {
        $login_user= $_SESSION["login_user"];
        $nm= $login_user["nm"];
    }
    $list= sel_board_list();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
</head>
<body>
    <div id="container">
        <header>
        <?=isset($_SESSION["login_user"]) ? "<div>" . $nm . "님 환영합니다.</div>" : "" ?>
        <div>
            <a href="list.php">리스트</a>
            <?php if(isset($_SESSION["login_user"])) { ?>
                <a href="write.php">글쓰기</a>
                <a href="logout.php">로그아웃</a>
            <?php } else { ?>
                <a href="login.php">로그인</a>
            <?php } ?>        
        </div>
        </header>
    </div>
</body>
</html>