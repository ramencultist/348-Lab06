function validate() {
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;


    if (pass1.length < 8) {
        alert("The length of the first password is less than 8 letters!")
    } else if (pass2.length < 8) {
        alert("The length of the repeated password is less than 8 letters!")
    } else if (pass1 != pass2) {
        alert("The passwords don't match!")
    } else {
        alert("The passwords suffice!")
    }
}