function checkPasswords()
{
    if(document.getElementById("password").value!=document.getElementById("retype_password").value)
    {
        alert("Warning!!! Passwords are Mismatched.");
        return false;
    }
    else
    { 
        return true;
    }
}

function enableButton()
{
    if(document.getElementById("policy").checked)
    {
        document.getElementById("signup").disabled=false;
    }
    else
    {
        document.getElementById("signup").disabled=true;
    }
}

$('#card-number').on('keyup', function(e){
    var val = $(this).val();
    var newval = '';
    val = val.replace(/\s/g, '');
    for(var i = 0; i < val.length; i++) {
        if(i%4 == 0 && i > 0) newval = newval.concat(' ');
        newval = newval.concat(val[i]);
    }
    $(this).val(newval);
});

function signupPassword() 
{
    var pass = document.getElementById("password");
    var retypePass = document.getElementById("retype_password");
    if (pass.type === "password" && retypePass.type === "password") {
        pass.type = "text";
        retypePass.type = "text";
    } else {
        pass.type = "password";
        retypePass.type = "password";
    }
}