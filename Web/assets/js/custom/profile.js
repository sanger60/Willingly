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
                url: "http://willingly.tk/inc/php/Get_UserInformation.php",
                method: "GET",
                dataType: "JSON",
                crossDomain: true,
                success: function(data) {
                    self.items = data.Data[0];
                    console.log(data.Data[0]);
                },
                error: function(a,r,g){
                    console.log("Hatalı ");
                }
            });
        }
    });
}

if(window.location.href.toString().includes("profile.php")){
    console.log("İf e girdiii !!!!");
    GetUserData();
}