<?php
include_once "../db/db_board.php";

session_start();
$nm = "";
if (isset($_SESSION["login_user"])) {
    $login_user = $_SESSION["login_user"];
    $nm = $login_user["nm"];
}

$list = sel_board_list();

// 검색기능
$search_txt = "";
if (isset($_GET["search_txt"]) && $_GET['search_txt'] != "") {
    $search_txt = $_GET["search_txt"];
    $search_select = $_GET["search_select"];

    $param = [
        "search_select" => $search_select,
        "search_txt" => $search_txt
    ];

    $list = search_board($param);
}

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
    <div class="visited">
        <!-- 방문자 수 -->
        <?php include_once "count_board.php"; ?>
    </div>
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
                <td class="index_title"><a href="detail.php?i_board=<?= $item["i_board"] ?><?= $search_select === "" ? "" : "&search_select= {$search_select}" ?><?= $search_txt === "" ? "" : "&search_txt= {$search_txt}" ?>"><?= str_replace($search_txt, "<mark>{$search_txt}</mark>", $item["title"]) ?></a></td>
                <!-- 검색 후 클릭하면 쿼리스트링에 %20이 추가 됨 -->
                <!-- '국민' 검색후 detail 화면으로 갔을 때 표시되는 주소 -->
                <!-- http://localhost/board3/board/detail.php?i_board=12&search_select=%20search_ctnt&search_txt=%20국민 -->
                <td><?= $item["nm"] ?></td>
                <td><?= $item["created_at"] ?></td>
                <td><?= $item["hit"] ?></td>
                <td><?= $item["liked"] ?></td>
                <td><?= $item["files"] === null ? ' ' : '<img src="../files/file.png" width="20px">' ?></td>
            </tr>
        <?php } ?>
    </table>
    <center>
        <!-- 검색기능 -->
        <form action="index.php" method="GET">
            <div>
                <select name="search_select">
                    <option value="search_writer">작성자</option>
                    <option value="search_title">제목</option>
                    <option value="search_ctnt">제목+내용</option>
                </select>
                <input type="search" name="search_txt" value="<?= $search_txt ?>">
                <input type="submit" value="검색">
            </div>
        </form>

        <div>
            <button class="no" onclick="location.href='write.php'">글쓰기</button>
        </div>
    </center>
</body>

</html>