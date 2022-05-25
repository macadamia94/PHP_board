<?php
include_once "../db/db_board.php";

session_start();
$nm = "";
if (isset($_SESSION["login_user"])) {
    $login_user = $_SESSION["login_user"];
    $nm = $login_user["nm"];
}

$list_size = 7; // 한 페이지에 출력될 게시물의 수
$more_page = 2; // 지정한 수만큼 페이지번호 링크를 양쪽으로 출력

$page = 1;
if (isset($_GET["page"])) {
    $page = intval($_GET["page"]);
}
$param = [
    "offset" => ($page - 1)  * $list_size,
    "list_size" => $list_size,
];
$page_count = sel_paging_count($param);
$start_page = max($page - $more_page, 1);
$end_page = min($page + $more_page, $page_count);
$prev_page = max($start_page - $more_page - 1, 1);
$next_page = min($end_page + $more_page + 1, $page_count);

$list = sel_board_list($param);
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
    <!-- 방문자 수 -->
    <span class="visited">
        <?php include_once "count_board.php"; ?>
    </span>
    <span class="write_btn">
        <button class="no" onclick="location.href='write.php'">글쓰기</button>
    </span>
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
    <div class="paging_area">
        <?php if ($page != 1 || $start_page > 1) { ?>
            <a class='move_btn' href="index.php?page=<?= $prev_page ?>"> « </a>
            <a class='move_btn' href="index.php?page=<?= $page - 1 ?>"> 이전 </a>
            <a class='pagenum' href="index.php?page=1">1</a> ...
        <?php } else { ?>
            <span class='move_btn disabled'> « </span>
            <span class='move_btn disabled'> 이전 </span>
        <?php } ?>
        <?php for ($i = $start_page; $i <= $end_page; $i++) { ?>
            <a class="pagenum <?= ($i == $page) ? "current" : "" ?>" href="index.php?page=<?= $i ?>"><?= $i ?></a>
        <?php } ?>
        <?php if ($page != $end_page || $end_page < $page_count) { ?>
            ... <a class='pagenum' href="index.php?page=<?= $page_count ?>"><?= $page_count ?></a>
            <a class='move_btn' href="index.php?page=<?= $page + 1 ?>"> 다음 </a>
            <a class='move_btn' href="index.php?page=<?= $next_page ?>"> » </a>
        <?php } else { ?>
            <span class='move_btn disabled'> 다음 </span>
            <span class='move_btn disabled'> » </span>
        <?php } ?>
    </div>
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
</body>

</html>