<?php
    $full= $_GET["full"];
    echo $full;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="join.js"></script>
    <title>주소 검색</title>
</head>
<body>
    <input id="addr_detail" type=text>
    <input type="button" value="확인" onclick="my_addr()">   
</body>
</html>
