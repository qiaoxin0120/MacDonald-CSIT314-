function validate() {
    var sel = document.getElementById("roleSelection");
    var username = document.getElementById("username");
    var password = document.getElementById("password");

    switch(sel.value) {
        case "owner": {
            if (username.value == null || password.value == null) {
                alert("Please enter your username and password.")
            }
            else if (username.value == "owner" && password.value == "owner") {
                window.location = "page1.html";
                return false;
            }
            else {
                alert("Invalid username and password.")
            }   
            break;
        }

        case "manager": {
            if (username.value == null || password.value == null) {
                alert("Please enter your username and password.")
            }
            else if (username.value == "manager" && password.value == "manager") {
                window.location = "page1.html";
                return false;
            }
            else {
                alert("Invalid username and password.")
            }   
            break;
        }

        case "staff": {
            if (username.value == null || password.value == null) {
                alert("Please enter your username and password.")
            }
            else if (username.value == "staff" && password.value == "staff") {
                window.location = "page1.html";
                return false;
            }
            else {
                alert("Invalid username and password.")
            }   
            break;
        }

        case "customer": {
            if (username.value == null || password.value == null) {
                alert("Please enter your username and password.")
            }
            else if (username.value == "customer" && password.value == "customer") {
                window.location = "page1.html";
                return false;
            }
            else {
                alert("Invalid username and password.")
            }   
            break;
        }

        default:
            return false;
    }
}