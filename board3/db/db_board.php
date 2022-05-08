<?php
include_once "db.php";

// write_proc.php 
function ins_board(&$param) {
    $i_user= $param["i_user"];
    $title= $param["title"];
    $ctnt= $param["ctnt"];

    $sql= 
    "   INSERT INTO t_board
        (i_user, title, ctnt, hit, liked)
        VALUES
        ($i_user, '$title', '$ctnt', 0, 0)
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

// index.php
function sel_board_list() {
    $sql=
    "   SELECT B.i_board, B.title, B.created_at, B.hit, B.liked
             , U.nm
          FROM t_board B
         INNER JOIN t_user U
            ON B.i_user = U.i_user
         ORDER BY B.i_board DESC
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}