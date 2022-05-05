function checkid() {
    var uid = document.getElementById("uid").value;
    if(uid) {
        url= `check.php?uid=${uid}`;
        window.open(url, "chkid" , "width=400, height=200");
    } else {
        alert( "아이디를 입력하세요." );
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

function my_addr() {
    var full= `${full}`;
    var my_addr= full+" "+document.getElementById("addr_detail").value;
    opener.document.getElementById("addr").value= my_addr;
    window.close();
}