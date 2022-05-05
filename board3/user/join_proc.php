<?php
include_once "../db/db_user.php";

$join_id= $_POST["decide_id"];
$addr= $_POST["addr"];
$uid= $_POST["uid"];
$upw= $_POST["upw"];
$upw2= $_POST["confirm_upw"];
$nm= $_POST["nm"];
$tel= $_POST["tel"];
$addr= $_POST["addr"];
$email= $_POST["email"];


$param= [
    "uid" => $uid,
    "upw" => $upw,
    "nm" => $nm,
    "tel" => $tel,
    "addr" => $addr,
    "email" => $email
];

$check= sel_join($param);
$result= ins_join($param);

if(!$check) {
    if($upw != $upw2) { ?>
        <script>
            alert('비밀번호가 일치하지 않습니다.'); 
            history.back();
        </script>
    <?php } else {
        if($result) { ?>
            <script>
                alert('회원가입이 완료되었습니다.');
                location.replace('login.php');
            </script>
            exit;
        <?php } else { ?>
            <script>
                alert('저장에 문제가 생겼습니다. 관리자에게 문의해주세요.');
                mysqli_error($conn);
            </script>
        <?php }
    }
} else { ?>
    <script>
        alert('아이디가 중복됩니다.'); 
        history.back();
    </script>
<?php } ?>