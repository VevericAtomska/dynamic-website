function validate () {
   var x = document.getElementById("psw").value ;
   var y = document.getElementById("psw_repeat").value;
   var at = document.getElementById("email").value.indexOf("@");

    if (x != y){
       alert("Password don't match");
       return false;
   }
    if (at == -1) {
        alert("Not a valid e-mail!");
        return  false;
    }

}

