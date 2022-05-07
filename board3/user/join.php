<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/join.css">
    <script type="text/javascript" src="join.js"></script>
    <title>회원가입</title>
</head>
<body>
    <header>
        <a href="index.php">← MAIN</a>
    </header>
    <fieldset>
        <legend><h2>✏️회원가입</h2></legend>
        <form action="join_proc.php" method="post" autocomplete="off">
            <div><input type="text" name="uid" id="uid" class="data" placeholder="아이디" required autofocus></div>
            <input type="hidden" name="decide_id" id="decide_id">
            <div><span id="decide" style='color:red;'>ID 중복 여부를 확인해주세요.</span>
            <input type="button" id="check_button" value="ID 중복 검사" onclick="checkid();"></div>
            <div><input type="password" name="upw" class="data" placeholder="비밀번호" required></div>
            <div><input type="password" name="upw2" class="data" placeholder="비밀번호 확인" required></div>
            <div><input type="text" name="nm" class="data" placeholder="이름" required></div>
            <div><input type="tel" name="tel" class="data" placeholder="숫자만 입력하세요" required></div>
            <div><input type="text" name="addr" id="addr" class="data" onclick="address();" placeholder="주소를 검색해주세요" required></div>
            <div><input type="text" name="email" class="data" placeholder="이메일 주소" required>
                @ <select name="emailAddr">
                    <option value="naver.com">naver.com</option>
                    <option value="hanmail.net">hanmail.net</option>
                    <option value="daum.net">daum.net</option>
                    <option value="gmail.com">gmail.com</option>
                    <option value="nate.com">nate.com</option>
                </select> </div>
            <div><input type="submit" class="join_button" value="가입하기"></div>
        </form>        
    </fieldset>
    <small><a href="login.php">이미 회원이신가요?</a></small>
</body>
</html>