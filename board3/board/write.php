<?php
session_start();
$uid="";
$nm="";
if(isset($_SESSION["login_user"])) {
    $login_user= $_SESSION["login_user"];
    $uid= $login_user["uid"];
    $nm= $login_user["nm"];
} else { ?>
    <script>
        alert('비회원입니다!');
        location.href= "../user/login.php";
    </script>
<?php } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "../css/font.php"; ?>
    <link rel="stylesheet" href="../css/write.css">
    <title>글쓰기</title>
</head>
<body>
    <div class="back"><a href="index.php">← MAIN</a></div>
    <div><h3 class="title">글쓰기</h3></div>
    <form action="write_proc.php" method="post" enctype="multipart/form-data" autocomplete="off">
        <div><input type="text" class="w_box" size="25" name="title" placeholder="제목" require></div>
        <hr color="#ddb9ff">
        <div><textarea name="ctnt" class="w_box" cols="83" rows="15" placeholder="내용을 입력하세요."></textarea></div>
        <hr color="#ddb9ff">
        <input type="file" class="files" name="files">
        <input type="submit" class="btn" value="작성하기">
    </form>        
</body>
</html>