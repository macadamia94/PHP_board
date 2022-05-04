<?php
include_once "db.php";

function sel_join(&$param) {
    $uid= $param["uid"];

    $sql=
    "   SELECT i_user, uid, upw, nm, tel, addr, email
        FROM t_user
        WHERE uid = '${uid}'
    ";

    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return mysqli_fetch_array($result);
}

function ins_join(&$param) {
    $nm= $param["nm"];
    $uid= $param["uid"];
    $upw= $param["upw"];
    $gender= $param["gender"];

    $conn= get_conn();
    $sql= 
    "   INSERT INTO t_user
        (uid, upw, nm, gender)
        VALUES 
        ('$uid', '$upw', '$nm', '$gender')
    ";
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}