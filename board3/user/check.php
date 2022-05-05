<?php
include_once "../db/db_user.php";

$uid= $_GET["uid"];
$param= [
    "uid" => $uid
];

$result= sel_join($param);

if(!$result) { ?>
    <span style="color: blue"><?= $uid ?></span> 는 사용 가능한 아이디 입니다.; 
    <div><input type="button" value="이 ID 사용" onclick="opener.location.href ='javascript:decide()';  window.close();"></div>
    <?php } else { ?>
        <span style="color: red"><?= $uid ?></span> 는 중복된 아이디 입니다.;
        <div><input type="button" value="다른 ID 사용" onclick="opener.location.href ='javascript:change()'; window.close()"></div>
    <?php } ?>