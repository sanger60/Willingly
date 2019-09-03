function RegisterCheck(){

    console.log("Submit Olduuu !!!!");
    var ad = document.getElementById("name").value;
    var soyad = document.getElementById("lastname").value;
    var kullaniciAdi = document.getElementById("RegisterUsername").value;
    var email = document.getElementById("email").value;
    var pwd = document.getElementById("pwd").value;
    var pwdCheck = document.getElementById("pwdCheck").value;

    if(pwd == pwdCheck){
        $.ajax({
            url: "register.php",
            method: "POST",
            data: {Name:ad,Surname:soyad,UserName: kullaniciAdi,Email:email,Password:pwd},
            dataType: "JSON",
            success: function(data){
                if(data.status == true){
                    window.location.href = "";
                }
                else{
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Bir şeyler yanlış gitti!'
                    });
                }
            },
            error: function(a,b,g){
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Bir şeyler yanlış gitti!'
                });
            }
        });
    }
    else{
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Bir şeyler yanlış gitti!'
        });
    }
}

function RegisterFormSubmitEvent(){
    $("#registerForm").submit();
}