function LoginCheck(){
    var username2 = document.getElementById("LoginEmail").value;
    var pwd = document.getElementById("pwdLogin").value;

    $.ajax({
        url: "https://willingly.tk/inc/php/logincheck.php",
        method: "GET",
        data: {email:username2,password:pwd},
        dataType: "JSON",
        success: function(data){
            if(data.Status == true){
                Swal.fire('Olduuu');
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

function LoginFormSubmitEvent(){
    $("login-form").submit();
}
