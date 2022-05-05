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
        <?php while($row= mysqli_fetch_array($result)) { 
        $full= $row['SIDO']. $row['SIGUNGU']. $row['DORO']. $row['BUILD_NO1']. $row['BUILD_NM']; ?>
        <tr>
            <td><?=$num?></td>
            <td><a href="addr_detail.php?full=<?=$full?>"><?=$full?></a></td>            
        </tr>
        <?php $num++; } ?>
    </table>
</body>
</html>
