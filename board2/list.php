<?php
    include_once "db/db_board.php";
    session_start();
    $nm= "";
    if(isset($_SESSION["login_user"])) {
        $login_user= $_SESSION["login_user"];
        $nm= $login_user["nm"];
    }
    $list= sel_board_list();
    $total= mysqli_num_rows($list);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="list.css">
    <title>리스트</title>
</head>
<body>
    <div id="container">
        <header>
        <?=isset($_SESSION["login_user"]) ? "<b>" . $nm . "</b>님 환영합니다." : "" ?>
        <a href="list.php"><button class='btn'>리스트</button></a>
        <?php if(isset($_SESSION["login_user"])) { ?>
            <a href="write.php"><button class='btn'>글쓰기</button></a>
            <a href="logout.php"><button class='btn'>로그아웃</button></a><br>
        <?php } else { ?>
            <a href="login.php"><button class='btn'>로그인</button></a><br>
        <?php } ?>        
        </header>
        <main>
            <h1>리스트</h1>
            <table>
                <thead>
                    <tr>
                        <th>글번호</th>
                        <th>제목</th>
                        <th>작성자명</th>
                        <th>등록일시</th>
                        <th>조회수</th>
                    </tr>                    
                </thead>
                <tbody>
                    <?php foreach($list as $item) { 
                        $total % 2 === 0 ? print"<tr class='even'>" : print"<tr>" ?>
                        <td><?= $total ?></td>
                        <td><?= $item["title"] ?></td>
                        <td><?= $item["nm"] ?></td>
                        <td><?= $item["created_at"] ?></td>
                        <td><?= $item["hit"] ?></td>
                    </tr>
                </tbody>
                <?php $total--; } ?>
            </table>
        </main>
    </div>
</body>
</html>