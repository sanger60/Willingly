function RegisterCheck(){
    var ad = document.getElementById("#name").value;
    var soyad = document.getElementById("#lastname").value;
    var email = document.getElementById("#email").value;
    var pwd = document.getElementById("#pwd").value;
    var pwdCheck = document.getElementById("#pwdCheck").value;

    $.ajax({
        url: "register.php",
        method: "POST",
        data: {Name:ad,Surname:soyad,Email:email,Password:pwd},
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

function RegisterFormSubmitClick(){
    $("registerForm").submit();
}

function ErrorCode(a){
    if(a.value == "")
    a.style.borderColor = "red";
}