function showPassword() {
    var pswrd = document.getElementById("password");
    var icon = document.getElementById("showPassword");

    if (pswrd.type === "password") {
        pswrd.type = "text";
        icon.style.color = "#7f2092";
    }
    else {
        pswrd.type = "password";
        icon.style.color = "grey";
    }
}
function validate() {

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "" || password =="") {
        alert("Please fill in The Required fields");
    }
    else{
        
        if (username == "admin" && password == "password") {
            document.location.href = "./account.html";
        }
        else if (username == "admin" && password != "password") {
            alert("Incorrect Password");
        }
        else
            alert("Incorrect Username & Password");
    }
}

function handleKey(event) {
    // Number 13 is the "Enter" key on the keyboard
    if (event.keyCode === 13) {
        // Cancel the default action, if needed
        event.preventDefault();
        // Trigger the button element with a click
        document.getElementById("logButton").click();
    }
}