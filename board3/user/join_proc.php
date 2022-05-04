<?php
include_once "../db/db_user.php";

$nm= $_POST["nm"];
$uid= $_POST["uid"];
$upw= $_POST["upw"];
$confirm_upw= $_POST["confirm_upw"];
$nm= $_POST["nm"];
$gender= $_POST["gender"];


$param= [
    "nm" => $nm,
    "uid" => $uid,
    "upw" => $upw,
    "gender" => $gender
];

$result= sel_user($param);

$join_id= $_POST["decide_id"];