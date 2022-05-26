<?php
include_once "../db/db_board.php";
session_start();

if (isset($_SESSION["login_user"])) {
    $login_user = $_SESSION["login_user"];
}

$i_board = $_GET["i_board"];
$param = [
    "i_board" => $i_board
];
$item = sel_board($param);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "../css/font.php"; ?>
    <link rel="stylesheet" href="../css/write.css">
    <title><?= $item["title"] ?></title>
</head>

<body>
    <!-- 뒤로가기 -->
    <div class="back"><a href="index.php">← MAIN</a></div>
    <div class="d_title">
        <h2>글조회 | <?= $item["nm"] ?></h2>
    </div>
    <!-- 조회수 -->
    <div class="hit">
        <?php if (!isset($_SESSION["login_user"]) || $login_user["i_user"] !== $item["i_user"]) { ?>
            <?php $hit = hit_board($param); ?>
            <tr>조회수</tr>
            <tr><?= $item["hit"] ?></tr>
        <?php } ?>
    </div>
    <div class="d_box"><?=$item["title"]?></div>
    <hr color="#ddb9ff">
    <div class="d_box_c"><?=nl2br($item["ctnt"])?></div>
    <hr color="#ddb9ff">
    <!-- 업로드 파일 확인 -->
    <div class="file">
        <?php if ($item["files"] == '') {
            echo "파일없음";
        } else { ?><a href="../files/upload/<?= $item["i_user"] ?>/<?= $item["files"] ?>" download><?= $item["files"] ?></a>
        <?php } ?>
    </div>
    <!-- 삭제, 수정 버튼 -->
    <div class="dm_btn">
        <?php if (isset($_SESSION["login_user"]) && $login_user["i_user"] === $item["i_user"]) { ?>
            <button class="btn" onclick="isDel();">삭제</button>
            <a href="../board/mod.php?i_board=<?= $i_board ?>"><button class="btn">수정</button></a>
        <?php } ?>
    </div>
    <!-- 삭제시 js -->
    <script>
        function isDel() {
            if (confirm('정말 삭제하시겟습니까?')) {
                location.href = "del.php?i_board=<?= $i_board ?>";
            }
        }
    </script>
</body>

</html>