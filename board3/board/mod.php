<?php
    include_once "../db/db_board.php";
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
    <form action="mod_proc.php" method="post" enctype="multipart/form-data" autocomplete="off">
        <input type="hidden" name="i_board" value="<?=$i_board?>" readonly>
        <div><input type="text" class="w_box" size="25" name="title" placeholder="제목" value="<?=$item["title"]?>" require></div>
        <hr color="#ddb9ff">
        <div><textarea name="ctnt" class="w_box" cols="83" rows="15" placeholder="내용을 입력하세요."><?=$item["ctnt"]?></textarea></div>
        <hr color="#ddb9ff">
        <div><input type="file" class="file" name="files"></div>
        <div><input type="submit" class="btn" value="작성하기"></div>
    </form> 
</body>
</html>