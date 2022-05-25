<?php
include_once "../db/db_board.php";
include_once "../board/upload.php";

session_start();

$title = $_POST["title"];
$ctnt = $_POST["ctnt"];

$login_user = &$_SESSION["login_user"];
$i_user = $login_user["i_user"];

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
    "i_user" => $i_user,
    "title" => $title,
    "ctnt" => $ctnt,
];
$result = ins_board($param);
if ($result) {
    echo
    "<script>
        alert('게시글이 작성되었습니다.');
        location.replace('index.php');
    </script> ";
}
