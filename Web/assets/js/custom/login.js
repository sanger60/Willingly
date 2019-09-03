function LoginCheck(){
    var username = document.getElementById("#LoginUsername").value;
    var pwd = document.getElementById("#pwdLogin").value;

    $.ajax({
        url: "login.php",
        method: "POST",
        data: {Username:username,Password:pwd},
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
