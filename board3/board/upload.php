<?php
session_start();

$login_user= &$_SESSION["login_user"];
$i_user= $login_user["i_user"];

define("FILE_PATH", "../files/upload/");

$error= $_FILES["files"]["error"];
if($error != UPLOAD_ERR_OK) {
    switch($error) {
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            echo 
            "<script> 
                alert('파일이 너무 큽니다.');
                window.history.back()
            </script> ";
            exit;                 
    }
}

function gen_uuid_v4() { 
    return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x'
        , mt_rand(0, 0xffff)
        , mt_rand(0, 0xffff)
        , mt_rand(0, 0xffff)
        , mt_rand(0, 0x0fff) | 0x4000
        , mt_rand(0, 0x3fff) | 0x8000
        , mt_rand(0, 0xffff)
        , mt_rand(0, 0xffff)
        , mt_rand(0, 0xffff) 
    ); 
}

$tmp_file= $_FILES["files"]["tmp_name"];
$filenm= $_FILES["files"]["name"];
$last_index= mb_strrpos($filenm, ".");
$ext= mb_substr($filenm, $last_index);
$target_filenm= gen_uuid_v4() . $ext;

$folder= FILE_PATH . $login_user["i_user"];
if(!is_dir($folder)) {
    mkdir($folder, 0777, true);
}

$imageUpload= move_uploaded_file($tmp_file, $folder . "/" . $target_filenm);
