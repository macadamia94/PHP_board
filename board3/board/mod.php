<?php
    include_once "../db/db_board.php";
    session_start();

    if(isset($_SESSION["login_user"])) {
        $login_user= $_SESSION["login_user"];
    }

    $i_board= $_GET["i_board"];
    $param= [
        "i_board" => $i_board
    ];
    $item= sel_board($param);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "../css/font.php"; ?>
    <link rel="stylesheet" href="../css/write.css">
    <title><?=$item["title"]?></title>
</head>
<body>
    <div class="back"><a href="detail.php?i_board=<?=$i_board?>">← BACK</a></div>
    <div class="d_title"><h2>글수정 | <?=$item["nm"]?></h2></div>
    <div class="d_box"><?=$item["title"]?></div>     
    <hr color="#ddb9ff">
    <div class="d_box_c"><?=nl2br($item["ctnt"])?></div>
    <hr color="#ddb9ff">
    <div >

    </div>
</body>
</html>