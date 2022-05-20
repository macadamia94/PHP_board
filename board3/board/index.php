<?php
include_once "../db/db_board.php";

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
    <?php include_once "../css/font.php"; ?>
    <link rel="stylesheet" href="../css/index.css">
    <title>Board</title>
</head>
<body>
    <div class="login">
    <span><?=isset($_SESSION["login_user"]) ? "<b>". $nm . "</b> 님 환영합니다." : "" ?></span>
    <?php if(isset($_SESSION["login_user"])){ ?>
        <a href="../user/logout.php">로그아웃</a>
    <?php }else{ ?>
        <a href="../user/join.php"><button class="bnt">회원가입</button></a> 
        <a href="../user/login.php"><button class="bnt">로그인</button></a>
    <?php } ?>        
    </div>
    <div class="top"><h1>게시판</h1></div>
    <table>
        <tr class="one_tr">
            <th width=100>Post ID</th>
            <th width=300>제목</th>
            <th width=120>작성자</th>
            <th width=200>작성일</th>
            <th width=70>조회수</th>
            <th width=70>❤</th>
            <th width=100>파일</th>
        </tr>
        <?php foreach($list as $item) { ?>
        <tr class="two_tr">
            <td><?= $item["i_board"] ?></td>
<<<<<<< HEAD
            <td class="detail"><a href="detail.php?i_board=<?=$item["i_board"]?>"><?= $item["title"] ?></a></td>
=======
            <td class="index_title"><a href="detail.php?i_board=<?=$item["i_board"]?>"><?= $item["title"] ?></a></td>
>>>>>>> 494b161b3e019842ade8bb26db55c8f7efa64f7d
            <td><?= $item["nm"] ?></td>
            <td><?= $item["created_at"] ?></td>
            <td><?= $item["hit"] ?></td>
            <td><?= $item["liked"] ?></td>
            <td><?= $item["files"] === null ? ' ' : '<img src="../files/file.png" width="20px">' ?></td>
        </tr>
        <?php } ?>
    </table>
    <center>
        <button class="no" onclick="location.href='write.php'">글쓰기</button>        
    </center>
</body>
</html>