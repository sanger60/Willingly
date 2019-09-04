function LoginCheck(){
    var username2 = document.getElementById("LoginUsername").value;
    var pwd = document.getElementById("pwdLogin").value;

    $.ajax({
        url: "https://willingly.tk/inc/php/logincheck.php",
        method: "GET",
        data: {username:username2,password:pwd},
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

function LoginFormSubmitEvent(){
    $("login-form").submit();
}
