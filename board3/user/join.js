function checkid(){
	var uid = document.getElementById("uid").value;
	if(uid) 
	{
		url = "check.php?uid="+uid;
		window.open(url,"chkid","width=400,height=200");
	} else {
		alert("아이디를 입력하세요.");
	}
}

function decide() {
    document.getElementById("decide").innerHTML = "<span style='color:blue;'>사용 가능한 아이디 입니다.</span>"
    document.getElementById("decide_id").value = document.getElementById("uid").value
	document.getElementById("uid").disabled = true
    document.getElementById("join_button").disabled = false
    document.getElementById("check_button").value = "다른 ID로 변경"
	document.getElementById("check_button").setAttribute("onclick", "change()")
}

function change() {
    document.getElementById("decide").innerHTML = "<span style='color:red;'>ID 중복 여부를 확인해주세요.</span>"
    document.getElementById("uid").disabled = false
	document.getElementById("uid").value = ""
    document.getElementById("join_button").disabled = true
    document.getElementById("check_button").value = "ID 중복 검사"
	document.getElementById("check_button").setAttribute("onclick", "checkid()")
}

function address() {
    url= "addr.php";
    window.open(url, "addr", "width=500,height=400, scrollbars=no, resizable=no");
}

function email_change(){
    if(document.join.email.options[document.join.email.selectedIndex].value == '0'){
        document.join.email2.disabled = true;
        document.join.email2.value = "";
    }
    if(document.join.email.options[document.join.email.selectedIndex].value == '1'){
        document.join.email2.disabled = false;
        document.join.email2.value = "";
        document.join.email2.focus();
    } else{
        document.join.email2.disabled = true;
        document.join.email2.value = document.join.email.options[document.join.email.selectedIndex].value;
    }
}

<<<<<<< HEAD
function check() {
=======
function upw_check() {
>>>>>>> 494b161b3e019842ade8bb26db55c8f7efa64f7d
    var uid = document.getElementById("uid");
    var upw = document.getElementById("upw");
    var upw2 = document.getElementById("upw2");
    var nm = document.getElementById("nm");
    var tel = document.getElementById("tel");
    var addr = document.getElementById("addr");
    var email1 = document.getElementById("email1");

    if(uid.value == "") {
        alert("아이디를 입력해주세요.");
<<<<<<< HEAD
        upw. focus();
=======
        uid. focus();
>>>>>>> 494b161b3e019842ade8bb26db55c8f7efa64f7d
        return false;
    }

    if(upw.value == "") {
        alert("비밀번호를 입력해주세요.");
        upw. focus();
        return false;
    }

    var upwCheck = /^(?=.*[a-zA-Z])(?=.*[0-9]).{6,12}$/;

    if (!upwCheck. test(upw.value)) {
        alert("비밀번호는 영문자+숫자 조합으로 6~12자리 사용해야 합니다.");
        upw.focus();
        return false;
    }

    if (upw2.value !== upw.value) {
        alert("비밀번호가 일치하지 않습니다.");
        upw2.focus();
        return focus;
    }

    if(nm.value == "") {
        alert("이름을 입력해주세요.");
        nm.focus();
        return false;
    }

    var reg = /^[0-9].{9,11}$/g;

    if(!reg.test(tel.value)) {
        alert("전화번호는 숫자만 입력할 수 있습니다.");
        tel.focus();
        return false;
    }

    if(addr.value == "") {
<<<<<<< HEAD
        alert("주소를 입력하세요.");
        email1.focus();
=======
        alert("주소를 입력해주세요.");
        nm.focus();
>>>>>>> 494b161b3e019842ade8bb26db55c8f7efa64f7d
        return false;
    }

    if(email1.value == "") {
<<<<<<< HEAD
        alert("이메일 주소를 입력하세요.");
        email1.focus();
        return false;
=======
        alert("이메일을 입력해주세요.")
>>>>>>> 494b161b3e019842ade8bb26db55c8f7efa64f7d
    }

    document.join.submit();
}