<?php
    include_once "../db/db.php";
    // DB와 커낵션 시도 
    $conn=get_conn();
    // 오늘 날짜 정보를 가져옴
    $YY=date('Y'); // 년
    $MM=date('m'); // 월
    $DD=date('d'); // 일
    $date=$YY."-".$MM."-".$DD;

    // $dat="2014-05-13";
    //오늘 날짜 정보를 DB에서 조회
    $sql= "SELECT * FROM t_count WHERE redate = '$date'";
    //쿼리전송
    $result= mysqli_query($conn, $sql);
    //결과 집합을 받아옴
    $list2= mysqli_num_rows($result);

    if(!$list2) { // date정보가 없을 경우
        $count= 0;
    } else { // 누가 들어온 적이 있어 date정보가 존재할 경우
        $row= mysqli_fetch_assoc($result);
        $count= $row['count']; // 현재날짜의 count값을 가져옴
    }

    if($count === 0) {
        $count++;
        // 오늘 날짜로 새로운 count값을 추가
        $sql= "INSERT INTO t_count VALUES ('$count', '$date')";
    } else {
        $count++;
        // 오늘 날짜의 기존 count값을 변경
        $sql= "UPDATE t_count SET count= $count WHERE redate = '$date'";
    }

    mysqli_query($conn, $sql);

    // total 조회수 - 모든 count값을 sum()적용
    $totalQurey= "SELECT SUM(count) as cnt FROM t_count";
    $totalCount= mysqli_fetch_assoc(mysqli_query($conn, $totalQurey))['cnt'];
    mysqli_close($conn);
?>

<div><?=$date?></div>
<div>
    Total : <?=$totalCount?> / 
    Today : <?=$count?>
</div>