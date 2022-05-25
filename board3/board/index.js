function info() {
    var opt = document.getElementById("search_opt");
    var opt_val= opt.options[opt.selectedIndex]. value;
    var info = ""
    if (opt_val == "title") {
        info = "제목을 입력하세요.";
    } else if (opt_val == "ctnt") {
        info = "내용을 입력하세요.";
    } else if (opt_val == "name") {
        info = "작성자를 입력하세요.";
    }
    document.getElementById("search_box").placeholder = info;
}