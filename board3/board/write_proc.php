<?php
include_once "db/db_board.php";

session_start();
$title= $_POST["title"];
$ctnt= $_POST["ctnt"];

$login_user= $_SESSION["login_user"];
$i_user= $login_user["i_user"];

$param= [
    "i_user" => $i_user,
    "title" => $title,
    "ctnt" => $ctnt
];

$result= ins_board($param);

if($result) {?>
    <script>
        alert('게시글이 작성되었습니다.');
        location.href= "board.php";
    </script>
<?php } ?>