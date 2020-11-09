function validasiform(){
    if (document.formsar.nama.value == ""){
        document.getElementById("err_nama").innerHTML = "Cannot be empty"
    } else {
        document.getElementById("err_nama").innerHTML = "";
    }
    if (document.formsar.email.value == ""){
        document.getElementById("err_email").innerHTML = "Cannot be empty";
    } else {
        document.getElementById("err_email").innerHTML = "";
    }
    if (document.formsar.saran.value == ""){
        document.getElementById("err_saran").innerHTML = "Cannot be empty";
        
    } else {
        document.getElementById("err_saran").innerHTML = "";
    }
    if (document.formsar.saran.value == ""){
        document.getElementById("err_upload").innerHTML = "Cannot be empty";
        
    } else {
        document.getElementById("err_upload").innerHTML = "";
    }
    return false;
}