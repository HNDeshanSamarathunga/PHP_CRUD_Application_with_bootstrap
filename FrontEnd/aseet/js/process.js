function login (){  
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    console.log(email,password);

    // window.location="dashborad.php";

    if(email == "deshan" && password == "123")
    {
        alert("Sucess");
        window.location="dashborad.php";
    }
    else
    {
        alert("Fail");
    }
    
}


