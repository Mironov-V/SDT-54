function click_elem() {
    var registration_btn = document.getElementById('registration');
    var login_btn = document.getElementById('login');

    registration_btn.onclick = function() {
        document.getElementById('login_form').style.display = "none";
        return document.getElementById('registration_form').style.display = "block";
    }

    login_btn.onclick = function() {
        document.getElementById('registration_form').style.display = "none";
        return document.getElementById('login_form').style.display = "block";
    }
}

click_elem();