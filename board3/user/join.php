<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "../css/font.php"; ?>
    <link rel="stylesheet" href="../css/join.css">
    <title>회원가입</title>
</head>
<body>
    <header>
        <a href="../board/index.php">← MAIN</a>
    </header>
    <fieldset>
        <legend><h2>🌻　회원가입　🌻</h2></legend>
        <form action="join_proc.php" method="post" name="join" autocomplete="off">
            <div><input type="text" name="uid" id="uid" class="data" placeholder="아이디" required autofocus>
            <input type="hidden" name="decide_id" id="decide_id">
            <span id="decide" style='color:red'>ID 중복 여부를 확인해주세요.</span>
            <input type="button" id="check_button" value="ID 중복 검사" onclick="checkid();"></div>
<<<<<<< HEAD
            <div><input type="password" name="upw" id="upw" class="data" placeholder="비밀번호" required></div>
            <div><input type="password" name="upw2" id="upw2" class="data" placeholder="비밀번호 확인" required></div>
            <div><input type="text" name="nm" id="nm" class="data" placeholder="이름" required></div>
            <div><input type="tel" name="tel" id="tel" class="data" placeholder="숫자만 입력하세요" required></div>
            <div><input type="text" name="addr" id="addr" class="data" onclick="address();" placeholder="주소를 검색해주세요" required></div>
            <div><input type="text" name="email1" id="email1" class="data" onfocus="this.value=''" placeholder="이메일 주소" required>
               @ <input type="text" name="email2" class="data" value = "" disabled>
                <select name="email" class="data" onchange="email_change()">
=======
            <div><input type="password" name="upw" id="upw" class="data" placeholder="비밀번호" required>
                <span class="at">영문자+숫자 조합으로 6~12자리</span></div>
            <div><input type="password" name="upw2" id="upw2" class="data" placeholder="비밀번호 확인" required></div>
            <div><input type="text" name="nm" id="nm" class="data" placeholder="이름" required></div>
            <div><input type="tel" name="tel" id="tel" class="data" placeholder="전화번호" required>
                <span class="at">숫자만 입력해주세요.</span></div>
            <div><input type="text" name="addr" id="addr" class="data" onclick="address();" placeholder="주소를 검색해주세요" required></div>
            <div><input type="text" name="email1" id="email1" class="data" onfocus="this.value=''" placeholder="이메일 주소" required> 
                <span class="at">@</span> 
                <input type="text" name="email2" id="email2" class="data" value = "" disabled>
                <select name="email" id="email" class="data" onchange="email_change()">
>>>>>>> 494b161b3e019842ade8bb26db55c8f7efa64f7d
                    <option value="0">선택하세요</option>
                    <option value="naver.com">naver.com</option>
                    <option value="hanmail.net">hanmail.net</option>
                    <option value="daum.net">daum.net</option>
                    <option value="gmail.com">gmail.com</option>
                    <option value="nate.com">nate.com</option>
                    <option value="1">직접입력</option>
                </select> 
            </div>
            <div><input type="button" id="join_button" class="join_button" onclick="check()" value="가입하기"></div>
        </form>        
    </fieldset>
    <small><a href="login.php">이미 회원이신가요?</a></small>
    <script src="join.js"></script>
</body>
</html>