function mobile_menu() {
    document.getElementById('menu').onclick = function() {
        // console.log(document.getElementById('navigate').style.display);
        if (document.getElementById('navigate').style.display == "flex") {
            return document.getElementById('navigate').style.display = "none";
        } else {
            return document.getElementById('navigate').style.display = "flex";
        }
    };
}

mobile_menu();