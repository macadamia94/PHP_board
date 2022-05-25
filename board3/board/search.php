<?php
session_start();
include_once "../db/db.php";

$search_opt = $_GET["search_opt"];
$search = $_GET["search"];
$date1 = $_GET["date1"];
$date2 = $_GET["date2"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "../css/font.php"; ?>
    <link rel="stylesheet" href="../css/index.css">
    <title>Search</title>
</head>

<body>
    <div class="login">
        <span><?= isset($_SESSION["login_user"]) ? "<b>" . $nm . "</b> 님 환영합니다." : "" ?></span>
        <?php if (isset($_SESSION["login_user"])) { ?>
            <a href="../user/logout.php">로그아웃</a>
        <?php } else { ?>
            <a href="../user/join.php"><button class="bnt">회원가입</button></a>
            <a href="../user/login.php"><button class="bnt">로그인</button></a>
        <?php } ?>
    </div>
    <div class="top">
        <h1>게시판</h1>
    </div>
    <div class="head">검색결과 | <?= $search_opt ?> | <?= $search ?></div>
    <?php
    if ($date1 && $date2) { ?>
        <span class="from_to"><?= $date1 ?> ~ <?= $date2 ?></span>
    <?php } ?>
    <table>
        <tr class="one_tr">
            <th width=100>Post ID</th>
            <th width=500>제목</th>
            <th width=120>작성자</th>
            <th width=200>작성일</th>
            <th width=70>조회수</th>
            <th width=70>❤</th>
            <th width=100>파일</th>
        </tr>
        <?php foreach ($list as $item) { ?>
            <tr class="two_tr">
                <td><?= $item["i_board"] ?></td>
                <td class="index_title"><a href="detail.php?i_board=<?= $item["i_board"] ?>"><?= $item["title"] ?></a></td>
                <td><?= $item["nm"] ?></td>
                <td><?= $item["created_at"] ?></td>
                <td><?= $item["hit"] ?></td>
                <td><?= $item["liked"] ?></td>
                <td><?= $item["files"] === null ? ' ' : '<img src="../files/file.png" width="20px">' ?></td>
            </tr>
        <?php } ?>
    </table>
    <center>
        <form action="search.php" method="get">
            <select name="search_opt" id="search_opt" onchange="info()">
                <option value="title">제목</option>
                <option value="ctnt">내용</option>
                <option value="name">작성자</option>
            </select>
            <input class="textform" type="text" name="search" id="search_box" autocomplete="off" placeholder="제목을 입력하세요." required>
            <input class="submit" type="submit" value="검색">
            <p>
                <input type="date" name="date1">
                ~
                <input type="date" name="date2">
            </p>
        </form>
    </center>
    <script src="index.js"></script>
    <script src="index.js"></script>
</body>

</html>