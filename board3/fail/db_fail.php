<?php
include_once "db.php";

// index.php (search)
function search_board(&$param)
{
    $search_select = $param["search_select"];
    $search_txt = $param["search_txt"];
    $textArray = explode(" ", $search_txt);
    $where = "";

    $sql =
        "   SELECT B.i_board, B.title, B.ctnt, B.created_at, B.files, B.hit, B.liked
             , U.i_user, U.nm
          FROM t_board B
         INNER JOIN t_user U
            ON B.i_user = U.i_user
         WHERE 
    ";

    switch ($search_select) {
        case "search_writer":
            $where = ["U.nm"];
            break;
        case "search_title":
            $where = ["B.title"];
            break;
        case "search_ctnt":
            $where = ["B.title", "B.ctnt"];
            break;
    }

    for ($i = 0; $i < count($textArray); $i++) {
        for ($j = 0; $j < count($where); $j++) {
            $sql = $sql . "$where[$j] LIKE '%$textArray[$i]%'";
            if (($i !== count($textArray) - 1) || ($j !== count($where) - 1)) {
                $sql = $sql . "OR ";
            }
        }
    }

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
