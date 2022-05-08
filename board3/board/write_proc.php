<?php
include_once "../db/db_board.php";

session_start();
$title= $_POST["title"];
$ctnt= $_POST["ctnt"];

$login_user= $_SESSION["login_user"];
$i_user= $login_user["i_user"];

$error = $_FILES['file']['error'];
$tmpfile = $_FILES['file']['tmp_name'];
$filename = $_FILES['file']['name'];
$folder = "../file".$filename;

$param= [
    "i_user" => $i_user,
    "title" => $title,
    "ctnt" => $ctnt
];

$result= ins_board($param);

if($result) {?>
    <script>
        alert('게시글이 작성되었습니다.');
        location.href= "index.php";
<<<<<<< HEAD
        // echo ($result);
=======
>>>>>>> 7c49bf8186859bb13282b84dae3f36c7b80f7eea
    </script>
<?php } ?>

<?php
if( $error != UPLOAD_ERR_OK ){
	switch( $error ) {
    		case UPLOAD_ERR_INI_SIZE:
        	case UPLOAD_ERR_FORM_SIZE: ?>
            <script>
                alert('파일이 너무 큽니다.');
                window.history.back()
            </script>
    <?php exit;
	}
} 

move_uploaded_file($tmpfile, $folder); 
?>