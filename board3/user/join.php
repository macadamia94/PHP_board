<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/join.css">
    <title>회원가입</title>
</head>
<body>
    <fieldset>
        <legend><h2>회원가입</h2></legend>
        <form action="join_proc.php" method="post" autocomplete="off">
            <div>
                <input type="text" name="uid" id="uid" placeholder="아이디" required autofocus>
                <input type="hidden" name="decide_id" id="decide_id">
                <button type="button" name="join_button" onclick="checkid()">중복확인</button>
                <script type="text/javascript" src="join.js"></script>
            </div>
            <div><input type="password" name="upw" placeholder="비밀번호" required></div>
            <div><input type="password" name="upw2" placeholder="비밀번호 확인" required></div>
            <div><input type="text" name="nm" placeholder="이름" required></div>
            <div><input type="tel" name="tel" placeholder="전화번호" required></div>
            <div><input type="text" name="addr" placeholder="주소" required></div>
            <div><input type="text" name="email" placeholder="이메일 주소" required>
                @ <select name="emailAddr">
                    <option value="naver.com">naver.com</option>
                    <option value="hanmail.net">hanmail.net</option>
                    <option value="daum.net">daum.net</option>
                    <option value="gmail.com">gmail.com</option>
                    <option value="nate.com">nate.com</option>
                </select> </div>
            <div><input type="submit" id="join_button" value="가입하기" disabled></div>
        </form>        
    </fieldset>
</body>
</html>