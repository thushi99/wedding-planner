function myFunction() 
{
    var x = document.getElementById("showPassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function resetPassword() 
{
    var x = document.getElementById("old-password");
    var y = document.getElementById("new-password");
    var z = document.getElementById("confirm-password");
    if (x.type === "password" && y.type === "password" && z.type === "password") {
        x.type = "text";
        y.type = "text";
        z.type = "text";
    } else {
        x.type = "password";
        y.type = "password";
        z.type = "password";
    }
}

