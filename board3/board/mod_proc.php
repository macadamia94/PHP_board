<?php
include_once "../db/db_board.php";
include_once "../board/upload.php";

session_start();
$login_user = &$_SESSION["login_user"];
$i_user = $login_user["i_user"];

$i_board = $_POST["i_board"];
$title = $_POST["title"];
$ctnt = $_POST["ctnt"];

if ($imageUpload) {
    $param = [
        "files" => $target_filenm
    ];
} else {
    $param = [
        "files" => null
    ];
}

$param += [
    "i_board" => $i_board,
    "i_user" => $i_user,
    "title" => $title,
    "ctnt" => $ctnt
];
$item = upd_board($param);

if ($item) { ?>
    <script>
        alert("수정이 완료되었습니다.");
        location.href = "detail.php?i_board=<?= $i_board ?>";
    </script>
<?php } ?>