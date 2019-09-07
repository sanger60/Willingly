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

if(window.location.href.toString().includes("profile.php")){
    console.log("İf e girdiii !!!!");
    GetUserData();
}