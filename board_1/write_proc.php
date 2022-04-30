<?php
    include_once "db_1.php";

    $id= $_POST['id'];
    $title= $_POST['title'];
    $ctnt= $_POST['ctnt'];
    $date= date('Y-m-d H:i:s');

    $connect= get_connect();
    $query = 
    "INSERT INTO board 
    (number, title, ctnt, date, hit, id) 
    values
    (null,'$title', '$ctnt', '$date', 0, '$id')
    ";

    $result= mysqli_query($connect, $query);
    mysqli_close($connect);

    if($result)
    {
        header("Location: index.php");
    }
    else
    {
        print "게시글 등록에 실패하였습니다.";
    }
?>