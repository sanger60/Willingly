function GetUserData()
{

    window.vue = new Vue({
        el: '#wt-main',
        data: {
            items : []
        },
        mounted: function() {
            var self = this;
            $.ajax({
                url: "https://willingly.tk/inc/php/Get_UserInformation.php",
                method: "GET",
                dataType: "JSON",
                withCredentials : true,
                success: function(data) {
                    self.items = data.Data[0];
                    console.log(data.Data[0]);
                },
                error: function(a,r,g){
                    console.log(a);
                    console.log(r);
                    console.log(g);
                }
            });
        }
    });
}

function UserSkillsAdd(){
    var skillName = document.getElementById("skillUser").value;
    var skillRate = document.getElementById("skillRate").value;
    var list = document.getElementById("skillList");
    if(skillName != "" && skillRate != "")
    {
        list.innerHTML += "<li><div class='wt-dragdroptool'><a href='javascript:void(0)'' class='lnr lnr-menu'></a></div> <span class='skill-dynamic-html'>"+skillName+" (<em class='skill-val'>"+skillRate+"</em>%)</span> <span class='skill-dynamic-field'><input type='text' name='skills[1][percentage]'' value='90'></span> <div class='wt-rightarea'><a href='javascript:void(0);'' class='wt-addinfo'><i class='lnr lnr-pencil'></i></a> <a href='javascript:void(0);'' class='wt-deleteinfo'><i class='lnr lnr-trash'></i></a></div></li>"
    }
}

if(window.location.href.toString().includes("profile.php")){
    console.log("İf e girdiii !!!!");
    GetUserData();
}

function UserUpdate(){
    var name = document.getElementById("Name").value;
    var surname = document.getElementById("Surname").value;
    var about = document.getElementById("about").value;
    var adress = document.getElementById("Adresses").value;

    var skillList = document.getElementById("skillList");

    var percentList= $("#skillList li").find('.skill-dynamic-html');
    var skillsName = "";
    for(var i=0;i< percentList.length;i++){
        if(percentList[i].innerText != "")
        {
            skillsName += percentList[i].innerText +",";
        }
    }
    console.log(skillsName);
    $.ajax({
        url: "https://willingly.tk/inc/php/Update_UserInformationUpdate.php",
        method: "POST",
        data: {Name:name,Surname:surname,About:about,Skills:skillsName,Adress:adress},
        dataType: "JSON",
        success:function(data) {
            if(data.Status == true){
                Swal.fire("Başarıyla Güncellendi");
            }else{
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Bir şeyler yanlış gitti!'
                });
            }
        },
        error:function(a,b,g) {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Bir şeyler yanlış gitti!'
            });
         }
    });
}