<?php
    include_once "../db/db_user.php";

    $addr= $_GET["addr"];

    $param= [
        "addr" => $addr
    ];

    $result= sel_addr($param);
    $num= 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>주소 검색</title>
</head>
<body>
    <table>
        <?php foreach($result as $item) { 
            $full= $item["sico"]. ' ' .$item["sigungu"]. ' ' .$item["doro"]. ' ' .$item["build_no1"]. ' ' .$item["build_nm"]; ?>
            <td><?=$num?></td>
            <td><a href="addr_detail.php?full=<?=$full?>"></a></td>
        <?php $num++; } ?>   
    </table>
</body>
</html>
