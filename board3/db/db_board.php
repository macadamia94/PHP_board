<?php
include_once "db.php";

// write_proc.php 
function ins_board(&$param) {
    $i_user= $param["i_user"];
    $title= $param["title"];
    $ctnt= $param["ctnt"];
    $target_filenm= $param["files"];
    $files= $param["files"] == '' ? "NULL" : "'$target_filenm'";
    
    $sql= 
    "   INSERT INTO t_board
        (i_user, title, ctnt, files, hit, liked)
        VALUES
        ($i_user, '$title', '$ctnt', $files, 0, 0)
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    // echo "$result";
    return $result;
}

// index.php (paging)
function sel_paging_count(&$param) {
    $sql = 
    "   SELECT CEIL(COUNT(i_board) / {$param["list_size"]}) AS cnt
          FROM t_board
    ";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    $row= mysqli_fetch_assoc($result); 
    return $row["cnt"];
}

// index.php (list)
function sel_board_list(&$param) {
    $sql=
    "   SELECT B.i_board, B.title, B.created_at, B.files, B.hit, B.liked
             , U.i_user, U.nm
          FROM t_board B
         INNER JOIN t_user U
            ON B.i_user = U.i_user
    ";
    $sql .= 
    "   ORDER BY B.i_board DESC
        LIMIT {$param["offset"]}, {$param["list_size"]}
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

// detail.php
function sel_board(&$param) {
    $i_board= $param["i_board"];

    $sql= 
    "   SELECT B.i_board, B.title, B.ctnt, B.created_at, B.files, B.hit, B.liked
             , U.i_user, U.nm
          FROM t_board B
         INNER JOIN t_user U
            ON B.i_user = U.i_user
         WHERE B.i_board = {$i_board}
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return mysqli_fetch_assoc($result);
}

// detail.php (hit) 
function hit_board(&$param) {
    $i_board= $param["i_board"];

    $sql= 
    "   UPDATE t_board
           SET hit = hit + 1
         WHERE i_board= {$i_board}
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

// delete.php
function del_board(&$param) {
    $i_board= $param["i_board"];
    $i_user= $param["i_user"];

    $sql= 
    "   DELETE FROM t_board
         WHERE i_board= {$i_board}
           AND i_user= {$i_user}
    ";

    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

// mod_proc.php
function upd_board(&$param) {
    $i_board= $param["i_board"];
    $i_user= $param["i_user"];
    $title= $param["title"];
    $ctnt= $param["ctnt"];
    $target_filenm= $param["files"];
    $files= $param["files"] == '' ? "NULL" : "'$target_filenm'";

    $sql= 
    "   UPDATE t_board
           SET title= '$title'
             , ctnt= '$ctnt'
             , files= $files
             , updated_at= now()
         WHERE i_board= {$i_board}
           AND i_user= {$i_user}
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
